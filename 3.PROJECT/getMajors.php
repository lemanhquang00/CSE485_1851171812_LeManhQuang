<?php
   include "./includes/config.php";
   $departid = 0; // tạo biến gán = 0
if (isset($_POST['majors'])) { // depart từ cái ajax(data) ý
    $departid = mysqli_real_escape_string($conn, $_POST['majors']); // department id
    
} //mysqli_real_escape_string hàm này ko biết nhé ,chỉ biết là lấy id của department
$users_arr = array(); //tạo biến dạng mảng
if ($departid > 0) {
    $sql = "SELECT Manganh,Tennganh FROM majors_group WHERE majors=" . $departid;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $Manganh = $row['Manganh'];
        $Tennganh = $row['Tennganh'];
        $users_arr[] = array( "Manganh" => $Manganh, "Tennganh" => $Tennganh);// gán giá trị
    }
}
// encoding array to json format
echo json_encode($users_arr); //chuyển từ dạng mảng sang json(object ý)
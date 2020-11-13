<!doctype html>
<html lang="en">

<head>
    <title>Ngành tuyển sinh</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- CSS -->
    <style type="text/css">
        body{
            background-image: url('../../images/bg4.jpg');
        }
    </style>
</head>

<body >
    <?php
    include "./includes/config.php";
    ?>
    <div class="container" style="margin-top: 40px; ">
        <center><h1 style="color: blue;">Ngành xét tuyển</h1></center>
        <div>
            <h4 style="color: black;">Nhóm ngành</h4>
            <select id="sel_majors" >
                <option value="0">- Select -</option>
            <?php       

            $sql = "SELECT * FROM major";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $major_name = $row['major_name'];
                // Option
                echo "<option value='" . $id . "' >" . $major_name . "</option>";
            }
            ?>
        </select>
    </div>
    <div class="clear"></div>
    <div style="margin-top: 20px;" > 
        <h4 style="color: black;">Tên Ngành</h4>
            <table class="table table-bordered"  border="1">
            <thead>
                <tr>
                <th scope="col">Mã Ngành</th>
                <th scope="col">Tên Ngành </th>
                
                </tr>
            </thead>
            <tbody id="sel_user" style="color: black;">

            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#sel_majors").change(function() {
            var majorid = $(this).val();
            $.ajax({
                url: 'getMajors.php',
                type: 'post',
                data: {
                    majors: majorid
                },
                dataType: 'json',
                success: function(response) { 
                    $("#sel_user").empty(); 
                    for (var i = 0; i < response.length; i++) {
                        var Manganh = response[i]['Manganh']; 
                        var Tennganh = response[i]['Tennganh']; 
                        $("#sel_user").append(
                            ` <tr>
                            <td>${Manganh}</td>
                            <td>${Tennganh}</td>
                            </tr>`);
                    }
                } 
            });
        });
    });
</script>
</body>

</html>
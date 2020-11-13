<?php
    require('includes/config.php');
    include("includes/functions.php");
    $user_id = $_GET['id'];
    // B2: Khai bao truy van
    $user = getOneUser( $user_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>
     
      <main class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST">
                        <div class="form-group">
                          <label for="txtUserID">User ID</label>
                          <input type="text" class="form-control" name="txtUserID" id="txtUserID" value = "<?php echo $user['id'];?>" disabled="disabled">
                        </div>
                        <div class="form-group">
                          <label for="txtFirstName">Name</label>
                          <input type="text" class="form-control" name="txtName" id="txtName" value = "<?php echo $user['name'];?>">
                        </div>
                        <div class="form-group">
                          <label for="txtAccount">Account</label>
                          <input type="text" class="form-control" name="txtAccount" id="txtAccount" value = "<?php echo $user['account'];?>">
                        </div>
                        <div class="form-group">
                          <input type="submit" class="form-control bg-success" name="sbmSave" id="sbmSave" value="Save">
                        </div>
                    </form>
                </div>
            </div>
      </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
                          	 require('includes/config.php');
                          	if (isset($_POST['sbmSave']) && $_POST['txtName'] != "" && $_POST['txtAccount'] != "") {
                          		$name = $_POST['txtName'];
                          		$account= $_POST['txtAccount'];
                          		$sql= "INSERT INTO users (name,account) VALUES ('$name','$account')";
								mysqli_query($conn,$sql);
								echo "<b>Thêm thành công</b>";
                          	}
                          	else echo "<b>Bạn chưa điền đủ thông tin</b>";
                          ?>
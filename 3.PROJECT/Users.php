<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <main class="container">
        <div class="row">
            <div class="col-md-4">
              <h1>Trang Quản Lý Người Dùng</h1>
               <p> <a href="index.php">Quay Lại Đăng Nhập</a></p>
            </div>
            <div class="col-md-8">
            <img src="http://cse.tlu.edu.vn/cse/assets/images/logo.jpg" alt="">
            <hr>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th> ID</th>
                            <th> Name</th>
                            <th>Account</th>
                            <th>Password</th>
                            <th>Email</th>
                            
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require('includes/config.php');
                        include("includes/functions.php");
                        // B2: Khai bao truy van
                        $users = getAllUsers();
                        foreach($users as $row){
                    ?>
                            <tr>
                                <td scope="row"><?php echo $row[0];?></td>
                                <td><?php echo $row[1];?></td>
                                <td><?php echo $row[2];?></td>
                                <td><?php echo $row[3];?></td>
                                <td><?php echo $row[4];?></td>
                                
                                <td><a href="edit.php?id=<?php echo $row[0];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                <td><a href="delete.php?id=<?php echo $row[0];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                            </tr>
                    <?php
                        }
                    ?>
                        
                        
                    </tbody>
                </table>
               
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
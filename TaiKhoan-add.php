<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tài khoản</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="Assets/images/favicon.ico">

    <!-- App css -->
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="Assets/js/modernizr.min.js"></script>
</head>

<body>
    <form action="TaiKhoan-add.php" method="post">
        <div class="container">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b>Thêm tài khoản <span style="color: red;"> </span> </b></h4>

                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Username</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="username" name = "username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Mật khẩu</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="password"  name="password" placeholder="Mật khẩu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Mã nhân viên</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaNV" name = "MaNV" placeholder="Mã nhân viên">
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="inputPassword5" class="col-3 col-form-label">Phần quyền</label>
                            <div class="col-9">
                                <input type="number" class="form-control" required id="level" name="level" min-"0" max = "1">
                            </div>
                        </div>
                        <div class="form-group mb-0 justify-content-end row">
                            <div class="col-9">
                                <button type="submit" name = "btnEdit" class="btn btn-info waves-effect waves-light">Thêm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</body>



<!-- jQuery  -->
<script src="Assets/js/jquery.min.js"></script>
<script src="Assets/js/popper.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
<script src="Assets/js/metisMenu.min.js"></script>
<script src="Assets/js/waves.js"></script>
<script src="Assets/js/jquery.slimscroll.js"></script>

<!-- App js -->
<script src="Assets/js/jquery.core.js"></script>
<script src="Assets/js/jquery.app.js"></script>


</html>

<?php 
    if (isset($_POST['btnEdit'])) {
        include 'connect.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $MaNV = $_POST['MaNV'];
        $level = $_POST['level'];
        
        // echo $id . $MaPhim . $MaPC . $LoaiPhim. $LichChieu;

         // Prepare statement
        $sql = "Insert into Users values ('$username',
        '$MaNV', '$password', '$level') ";
       

        // execute the query
        
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
          
                echo "<script type='text/javascript'> alert('Thêm thành công!');</script>";
        } catch (Exception) {

            echo "<script type='text/javascript'> alert('Thêm thất bại, vui lòng thử lại!');</script>";
            
        }
        

        

    }
?>
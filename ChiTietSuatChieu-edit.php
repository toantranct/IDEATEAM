<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin suất chiếu</title>
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
    <form action="ChiTietSuatChieu-edit.php?ID=<?php echo $_GET['ID']; ?>" method="post">
        <div class="container">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b>Sửa thông tin suất chiếu: <span style="color: red;"> <?php echo $_GET['ID']; ?></span> </b></h4>

                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Mã Phim</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaPhim" name = "MaPhim" placeholder="Mã Phim">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Mã Phòng Chiếu</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="MaPC"  name="MaPC" placeholder="Mã Phòng Chiếu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword5" class="col-3 col-form-label">Loại Phim</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="LoaiPhim" name="LoaiPhim" placeholder="Loại phim">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Lịch Chiếu</label>
                            <div class="col-9">
                                <input type="" class="form-control" required id="LC" name = "LC" placeholder="Lịch Chiếu (mm-dd-yyyy)">
                            </div>
                        </div>
                        <div class="form-group mb-0 justify-content-end row">
                            <div class="col-9">
                                <button type="submit" name = "btnEdit" class="btn btn-info waves-effect waves-light">Sửa</button>
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

        $id = $_GET['ID'];
        $MaPhim = $_POST['MaPhim'];
        $MaPC = $_POST['MaPC'];
        $LoaiPhim = $_POST['LoaiPhim'];
        $LichChieu = $_POST['LC'];
        
        // echo $id . $MaPhim . $MaPC . $LoaiPhim. $LichChieu;

         // Prepare statement
        $sql = "Update ChiTietSuatChieu set MaPhim = '$MaPhim', MaPhongChieu =  '$MaPC', LoaiPhim = '$LoaiPhim', LichChieu = '$LichChieu' ";
        $sql = $sql . "where ID = '$id'";
       

        // execute the query
        
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
          
                echo "<script type='text/javascript'> alert('Cập nhật thành công!');</script>";
        } catch (Exception) {

            echo "<script type='text/javascript'> alert('Cập nhật thất bại, vui lòng thử lại!');</script>";
            
        }
        

        

    }
?>
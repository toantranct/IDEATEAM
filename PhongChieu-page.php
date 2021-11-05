<?php
    include 'connect.php';
    $sql  = "select * from PhongChieu";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


    echo '
        <div class="table-rep-plugin">
        <div class="table-responsive" data-pattern="priority-columns">
            <table id="tech-companies-1" class="table table-striped">
                <thead>
                    <tr>
                        <th data-priority="1">Mã Phòng Chiếu</th>
                        <th data-priority="1">Tên Phòng Chiếu</th>
                        <th data-priority="3">SL Ghế</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
    ';
    while ($row = $stmt->fetch()) {   
    echo '
                    <tr>
                        <td>'.$row['MaPhongChieu'].'</td>
                        <td>'.$row['TenPhongChieu'].'</td>
                        <td>'.$row['SLGhe'].'</td>
                        <td><a href ="PhongChieu-edit.php?MaPhongChieu='.$row['MaPhongChieu'].'"  target= "_blank" class="mdi mdi-account-edit"></a></td>
                        <td><a href ="PhongChieu-del.php?MaPhongChieu='.$row['MaPhongChieu'].'"  target= "_blank" class="mdi mdi-close"></span></td>
                    </tr>
                    
              ' ;
    }


    echo '
        </tbody> </table> </div></div>';

?>

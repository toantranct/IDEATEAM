<?php
    include 'connect.php';
    $sql  = "select * from NhanVien";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


    echo '
        <div class="table-rep-plugin">
        <div class="table-responsive" data-pattern="priority-columns">
            <table id="tech-companies-1" class="table  table-striped">
                <thead>
                    <tr>
                        <th data-priority="1">Mã NV</th>
                        <th data-priority="3">Tên Nhân Viên</th>
                        <th data-priority="1">Giới tính</th>
                        <th data-priority="3">Ngày sinh</th>
                        <th data-priority="3">SDT</th>
                        <th data-priority="6">Email</th>
                        <th data-priority="6">Địa chỉ</th>
                        <th data-priority="6">Chức vụ</th>
                        <th data-priority="6">Ngày đi làm</th>
                        <th data-priority="6">Mã nhân viên quản lí</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
    ';
    while ($row = $stmt->fetch()) {   
    echo '
                    <tr>
                        <td>'.$row['MaNV'].'</td>
                        <td>'.$row['TenNV'].'</td>
                        <td>'.$row['GioiTinh'].'</td>
                        <td>'.$row['NgaySinh'].'</td>
                        <td>'.$row['SDT'].'</td>
                        <td>'.$row['Email'].'</td>
                        <td>'.$row['DiaChi'].'</td>
                        <td>'.$row['ChucVu'].'</td>
                        <td>'.$row['NgayDiLam'].'</td>
                        <td>'.$row['MaNVQL'].'</td>
                        <td><a href ="NHanVien-edit.php?MaNV='.$row['MaNV'].'"  target= "_blank" class="mdi mdi-account-edit"></a></td>
                        <td><a href ="NHanVien-del.php?MaNV='.$row['MaNV'].'"  target= "_blank" class="mdi mdi-close"></span></td>
                    </tr>
                    
              ' ;
    }


    echo '
        </tbody> </table> </div></div>';

?>

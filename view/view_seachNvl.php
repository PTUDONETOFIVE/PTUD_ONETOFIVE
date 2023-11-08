<div class="container" style="margin-top: 120px; font-size: 16px;">
    <table class="table table-bordered" >
        <h1 style="text-align: center; font-size: 20px;">Danh sách thành phẩm</h1>
        <thead class="bang" style="align-items: center;" >
            <tr>
                <th><center>Mã</center> </th>
                <th><center>Tên thành phẩm</center></th>
                <th><center>Đơn vị tính</center></th>
                <th><center>Số lượng tồn</center></th>
                <th><center>Ảnh</center></th>
                <th><center>Tùy chọn 1</center></th>
                <th><center>Tùy chọn 2</center></th>
            </tr>
        </thead>
        <tbody>
            <!-----xem ------->
            <?php
                include_once("controller/controller_qlnvl.php");
                $p=new controlerNvl();  
                if(isset($_REQUEST['timkiem1']))
                {
                    $s = $_REQUEST['tukhoa1'];
                    if($s == ""){
                        echo '<script>alert("Vui lòng nhập từ khóa tìm kiếm !")</script>';
                        echo '<script>window.history.back();</script>';
                    }else{
                        $hien = $p->seachNvl();
                        if(!$hien <=0 || $hien !=$s){// <= 0 || $count != $s
                            echo "<script>alert('Không tìm thấy kết quả cho từ khóa: $s nào !')</script>";
                            echo '<script>window.history.back();</script>'; 
                        }else{
                            while($row=mysqli_fetch_assoc($hien)){?>
                                <tr>
                                    <td><center><?php echo $row['maNguyenVatLieu']; ?></center></td>
                                    <td><center><?php echo $row['tenNguyenVatLieu']; ?></center></td>
                                    <td><center><?php echo $row['donViTinh']; ?></center></td>
                                    <td><center><?php echo $row['soLuongTon']; ?></center></td>
                                    <td><center><?php echo $row['anh']; ?></center></td>
                                    <td><center><a href="index.php?updatenvl=<?php echo $row['maNguyenVatLieu']; ?>">Sửa</a></center></td>
                                    <td><center><a href="index.php?deletenvl=<?php echo $row['maNguyenVatLieu']; ?>">Xóa</a></center></td>
                                <!----- nếu click vào sửa tp----->
                                
                                </tr>
                            <?php
                                }
                        }
                    }
                }  
            ?>
            
            <?php
            
            
            ?>
        </tbody>
    </table>
</div>
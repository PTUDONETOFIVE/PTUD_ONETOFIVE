<div class="container" style="margin-top: 120px; margin-bottom: 120px; font-size: 16px;">
    <table class="table table-bordered" >
        <h1 style="text-align: center; margin-top: 50px; font-size: 20px;">Danh sách thành phẩm</h1>
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
                include_once("controller/controller_qltp.php");
                $p=new controlerThanhPham();  
                if(isset($_REQUEST['timkiem']))
                {
                    $s = $_REQUEST['tukhoa'];
                    if($s == ""){
                        echo '<script>alert("Vui lòng nhập từ khóa tìm kiếm !")</script>';
                        echo '<script>window.history.back();</script>';
                    }else{
                        $hien = $p->seachByIdOrName();
                        if(!$hien ){
                            echo "<script>alert('Không tìm thấy kết quả cho từ khóa: $s nào !')</script>";
                            echo '<script>window.history.back();</script>'; 
                        }else{
                            while($row=mysqli_fetch_assoc($hien)){?>
                                <tr>
                                    <td><center><?php echo $row['maThanhPham']; ?></center></td>
                                    <td><center><?php echo $row['tenThanhPham']; ?></center></td>
                                    <td><center><?php echo $row['donViTinh']; ?></center></td>
                                    <td><center><?php echo $row['soLuongTon']; ?></center></td>
                                    <td><center><?php echo $row['anh']; ?></center></td>
                                    <td><center><a href="index.php?updatetp=<?php echo $row['maThanhPham']; ?>">Sửa</a></center></td>
                                    <td><center><a href="index.php?deletetp=<?php echo $row['maThanhPham']; ?>">Xóa</a></center></td>
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
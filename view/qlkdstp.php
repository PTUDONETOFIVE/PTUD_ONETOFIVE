
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="../js/qlk.js"></script>
    <style>
           input[type="text"] {
        width: 200px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 5px;
        outline:none;
        padding: 7px 5px;
        transition:0.6s ease-in-out;
    }
    input[type="text"]:focus{
        width:500px;
        background-color: whitesmoke;
    }
    a:hover{
        color: red;
        text-decoration: none;
    } 
       
    </style>
</head>

<body>
    <div class="container-fluid " style="margin-top: 120px; font-size: 16px;">
        <div class="row" id="body">
            <div class="container-fluid">
                <h3 style="text-align: center; font-size:30px">QUẢN LÝ DANH SÁCH THÀNH PHẨM</h3><br>
                <div class="container">
                    <div class="boloc">
                        <div id="nut" class="container-fluid">
                            <!-- Button popup tp -->

                            <button type="button" style="font-size: 20px;" class="btn btn-primary" data-toggle="modal" data-target="#popuptp">
                                Thêm thành phẩm
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="popuptp" tabindex="-1" role="dialog" aria-labelledby="kaiz" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" style="text-align: center; font-size: 20px;" id="kaiz">Nhập thông tin thành phẩm cần thêm</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="font-size: 20px;" >
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <label for="matp">Nhập mã thành phẩm: </label>
                                                    <input type="text" class="form-control" style="font-size: 20px;" name="matp" id="matp" placeholder="Nhập mã thành phẩm:">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tenthanhpham">Tên thành phẩm: </label>
                                                    <input type="text" class="form-control" style="font-size: 20px;" name="tenthanhpham" id="tenthanhpham" placeholder="Nhập tên thành phẩm">
                                                </div>
                                                <div class="form-group">
                                                    <label for="donvitinh">Đơn vị tính: </label>
                                                    <input type="text" class="form-control" style="font-size: 20px;" name="donvitinh" id="donvitinh" placeholder="Đơn vị tính" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="soluongton">Số lương tồn: </label>
                                                    <input type="number" class="form-control" style="font-size: 20px;" name="soluongton" id="soluongton" placeholder="Số lương tồn" min='0'>
                                                </div>
                                                <div class="form-group">
                                                    <label for="anh">Ảnh: </label>
                                                    <input type="text" class="form-control" style="font-size: 20px;" name="anh" id="anh" placeholder="anh" >
                                                </div>
                                                <div class="modal-footer form-group">
                                                    <button type="button" name="dong" id="dong" style="font-size: 20px;" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                    <input type="submit" name="themtp" id="themtp" style="font-size: 20px;" class="btn btn-primary" value="Thêm thành phẩm"></input>
                                                 </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <br>
                         <!--thêm thành phẩm-->
                        <?php
                            if(isset($_POST['themtp'])){
                                //echo "?";
                                include_once("controller/controller_qltp.php");
                                $p = new controlerThanhPham();
                                $kq = $p->createTp();
                                echo "<script>alert('Thêm thành phẩm thành công')</script>";
                                
                            }
                        ?>
            <!-------------------->
                    
                     <!-- Body -->
                    <div class="dstp">
                        <div class="container">
                            <table class="table table-bordered">
                                <h5 style="text-align: center; font-size: 20px;">Danh sách thành phẩm</h5>
                                <form action="" method="REQUEST">
                                    <input  id="tim" type="text" placeholder="Tìm kiếm tài khoản..." name="tukhoa">
                                    <input id="nut" class="btn btn-outline-dark pb-2 mb-1" style="height: 40px; border-radius:5px;font-size: 20px;"  type="submit" name="timkiem" value="Tìm kiếm">
                                </form>
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
                                        $p->selectAllTp();
                                        if(isset($_GET['qldstp']))
                                        {                            
                                            $hien = $p->selectAllTp();
                                            if($hien){                          
                                                if(mysqli_num_rows($hien)>0){
                                                    while($cot=mysqli_fetch_assoc($hien)){?>
                                                        <tr>
                                                            <td><center><?php echo $cot['maThanhPham']; ?></center></td>
                                                            <td><center><?php echo $cot['tenThanhPham']; ?></center></td>
                                                            <td><center><?php echo $cot['donViTinh']; ?></center></td>
                                                            <td><center><?php echo $cot['soLuongTon']; ?></center></td>
                                                            <td><center><?php echo $cot['anh']; ?></center></td>
                                                            <td><center><a href="index.php?updatetp=<?php echo $cot['maThanhPham']; ?>">Sửa</a></center></td>
                                                            <td><center><a href="index.php?deletetp=<?php echo $cot['maThanhPham']; ?>">Xóa</a></center></td>
                                                        <!----- nếu click vào sửa tp----->
                                                        
                                                        </tr>
                                                    <?php
                                                    }
                                                }
                                                else{
                                                    echo "<script>alert('Không có dữ liệu')</script>";
                                                }
                                            }                                                                
                                        }
                                    ?>
                                    
                                    <?php
                                    
                                    
                                    ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
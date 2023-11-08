
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
                <h3 style="text-align: center; font-size:30px">QUẢN LÝ DANH SÁCH NGYÊN VẬT LIỆU</h3><br>
                <div class="container">
                    <div class="boloc">
                        <div id="nut" class="container-fluid">
                            <!-- Button popup tp -->

                            <button type="button" style="font-size: 20px;" class="btn btn-primary" data-toggle="modal" data-target="#popuptp">
                                Thêm nguyên vật liệu
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
                                                    <label for="manvl">Nhập mã nguyên vật liệu: </label>
                                                    <input type="text" class="form-control" style="font-size: 20px;" name="manvl" id="manvl" placeholder="Nhập mã nguyên vật liệu:">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tennguyenvatlieu">Tên nguyên vật liệu: </label>
                                                    <input type="text" class="form-control" style="font-size: 20px;" name="tennguyenvatlieu" id="tennguyenvatlieu" placeholder="Nhập tên nguyên vật liệu">
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
                                                    <input type="submit" name="themnvl" id="themnvl" style="font-size: 20px;" class="btn btn-primary" value="Thêm nguyên vật liệu"></input>
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
                            if(isset($_POST['themnvl'])){
                                //echo "?";
                                include_once("controller/controller_qlnvl.php");
                                $p = new controlerNvl();
                                $kq = $p->createNvl();
                                echo "<script>alert('Thêm nguyên vật liệu thành công')</script>";
                                
                            }
                        ?>
            <!-------------------->
                   
                    
                    
                     <!-- Body -->
                    <div class="dsnvl">
                        <div class="container">
                            <table class="table table-bordered">
                                <h5 style="text-align: center; font-size: 20px;">Danh sách nguyên vật liệu</h5>
                                <form action="" method="REQUEST">
                                    <input  id="tim1" type="text" placeholder="Tìm kiếm tài khoản..." name="tukhoa1">
                                    <input id="nut1" class="btn btn-outline-dark pb-2 mb-1" style="height: 40px; border-radius:5px"  type="submit" name="timkiem1" value="Tìm kiếm">
                                </form> 
                                <thead class="bang" style="align-items: center;" >
                                    <tr>
                                        <th><center>Mã</center> </th>
                                        <th><center>Tên nguyên vật liệu</center></th>
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
                                        $p->selectAllNvl();
                                        if(isset($_GET['qldsnvl']))
                                        {                            
                                            $hien = $p->selectAllNvl();
                                            if($hien){                          
                                                if(mysqli_num_rows($hien)>0){
                                                    while($cot=mysqli_fetch_assoc($hien)){?>
                                                    <tr>
                                                        <td><center><?php echo $cot['maNguyenVatLieu']; ?></center></td>
                                                        <td><center><?php echo $cot['tenNguyenVatLieu']; ?></center></td>
                                                        <td><center><?php echo $cot['donViTinh']; ?></center></td>
                                                        <td><center><?php echo $cot['soLuongTon']; ?></center></td>
                                                        <td><center><?php echo $cot['anh']; ?></center></td>
                                                        <td><center><a href="index.php?updatenvl=<?php echo $cot['maNguyenVatLieu']; ?>">Sửa</a></center></td>
                                                        <td><center><a href="index.php?deletenvl=<?php echo $cot['maNguyenVatLieu']; ?>">Xóa</a></center></td>
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
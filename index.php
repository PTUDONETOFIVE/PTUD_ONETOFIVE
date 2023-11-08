<?php
  error_reporting (E_ALL ^ E_NOTICE);
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="../assert/css/styles.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        
    </style>
</head>

<body>
    <header>
        <div id="header">  
            <div class="nav-container1">
                <ul class="nav1 collapse1" id="myNav">
                    <li><a href="index.php?dieuphoi">Điều phối</a></li>
                    <li><a href="index.php?thongtinkho">Thông tin kho</a></li>
                    <li><a href="index.php?donhang">Đơn hàng</a></li>
                    <li><a href="index.php?qldstp">Danh sách thành phẩm</a></li>
                    <li><a href="index.php?qldsnvl">Danh sách nguyên vật liệu</a></li>         
                </ul>
            </div>  
            <div class="logo">
                <a href="index.html"><img src="../assert/image/logo.png" class="logo-img"></a>
            </div>
            <div class="icon">
                <div class="user-icon ">
                    <a href=""><i class="fa-solid fa-user" ></i></a>
                </div>
            </div>
            
        </div>
    </header>
    <div class="row" id="body">
        <?php
            if(isset($_GET['qldstp'])){
                include_once("view/qlkdstp.php");
            } elseif(isset($_GET['updatetp'])) {
                include_once("view/view_updateTp.php");
            }elseif(isset($_REQUEST['timkiem'])){
                include_once("view/view_seachTp.php");
            } elseif(isset($_GET['deletetp'])) {
                include("controller/controller_qltp.php");
                $p = new controlerThanhPham();
                $matp = $_GET['deletetp'];
            
                echo '<script>
                        function confirmDelete() {
                          return confirm("Bạn có chắc chắn muốn xóa?");
                        }
                        
                        if (confirmDelete()) {
                            window.location.href = "index.php?deletetpa=yes&matp=' . $matp . '";
                        }else {
                            
                            window.history.back();
                        }
                      </script>';
            } 
            if(isset($_GET['deletetpa']) && $_GET['deletetpa'] == 'yes') {
                include("controller/controller_qltp.php");
                $p = new controlerThanhPham();
                $matp = $_GET['matp'];         
                $p->deleteTp($matp);
                header('location: index.php?qldstp');
                exit(); 
            }   elseif(isset($_GET['qldsnvl'])){
                    include_once("view/qlkdsnvl.php");
            }   elseif(isset($_GET['updatenvl'])) {
                    include_once("view/view_updateNvl.php");
            }   elseif(isset($_GET['deletenvl'])) {
                    include("controller/controller_qlnvl.php");
                    $p = new controlerNvl();
                    $manvl = $_GET['deletenvl'];
                 
                    echo '<script>
                        function confirmDelete() {
                          return confirm("Bạn có chắc chắn muốn xóa?");
                        }
                        
                        if (confirmDelete()) {
                            window.location.href = "index.php?deletenvlb=yes&manvl=' . $manvl . '";
                        }else {
                            
                            window.history.back();
                        }
                      </script>';
            }if(isset($_GET['deletenvlb']) && $_GET['deletenvlb'] == 'yes') {
                include("controller/controller_qlnvl.php");
                $p = new controlerNvl();
                $manvl = $_GET['manvl'];       
                $p->deleteNvl($manvl);
                header('location: index.php?qldsnvl');
                exit(); 
            }
            elseif(isset($_REQUEST['timkiem1'])){
                include_once("view/view_seachNvl.php");
            }
            
        ?>
            
            
    
    </div>

    <?php

    ?>
    
    
    <footer id="footer" style="margin-top: 120px;">
    <div class="policy">
        <h5 class="policy-title">CHÍNH SÁCH</h5>
        <div class="policy-information">
            <a href="" >Chính sách bảo mật</a><br>
            <a href="">Chính sách vận chuyển</a><br>
            <a href="">Chính sách bảo hành</a><br>
            <a href="">Điều khoản chung</a>
        </div>
    </div>
    <div class="contact">
        <h5 class="policy-title">VỀ CHÚNG TÔI</h5>
        <div class="policy-information">
            <a href="" >Câu chuyện thương hiệu</a><br>
            <a href="">Tầm nhìn và giá trị cốt lõi</a><br>
            <a href="">Lịch sửa phát triển</a><br>
            <a href="">Mạng lưới và quy mô</a>
        </div>
    </div>
    <div class="CustomerCare">
        <h5 class="CustomerCare-title" >THÔNG TIN LIÊN HỆ</h5>
        <div class="contact-information">
            <P>CÔNG TY TNHH ONETOFIVE</P> 
            <p>Onetofive.vn</p> 
                <p>Địa chỉ:Nguyễn văn Bảo, Phường 4, Gò Vấp</p>
            <p>Hotline:033xxxxxxx</p>
        </div>
        <h5 class="Community-title">CỘNG ĐỒNG</h5>
        <a href="" class="Community-icon"><i class="fa-brands fa-facebook"></i></a>
        <a href="" class="Community-icon"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="" class="Community-icon"><i class="fa-brands fa-youtube"></i></a>
        <a href="" class="Community-icon"><i class="fa-brands fa-tiktok"></i></a>
    </div>
</footer>
</body>

</html>
<?php
    include_once("connection.php");
    class modelsThanhPham{
        function xemThanhPham(){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            mysqli_set_charset($conn,'utf8');
            $p = new Connection($conn);
            if($p->connect($conn))
            {
                $sql="select * from thanhpham";
                $qr=mysqli_query($conn, $sql);
                if(!$qr){
                    echo mysqli_error($conn);
                }
                return $qr;

                $p -> unconect($conn);
            }
            else{
                return false;
            }
        }//xóa
        function xoaThanhPham($matp){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            $p=new Connection($conn);
            if($p->connect($conn)){
                
                $sql="delete from thanhpham where maThanhPham= '$matp'";
                
                $qr=mysqli_query($conn, $sql);
                if(!$qr){
                    mysqli_error($conn);
                    
                }  
                return $qr;
                $p->unconect($conn);             
            }
            else{
                echo "<script>alert('Không có')</script>";
            }
        }
        //thêm tp
        function themThanhPham(){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            
            $p=new Connection($conn);
            $p->connect($conn);
            if($p->connect($conn)){
                if(isset($_POST['themtp'])){
                    $matp = $_POST['matp'];
                    $tenThanhPham = $_POST['tenthanhpham'];
                    $donvitinh = $_POST['donvitinh']; 
                    $soluongton = $_POST['soluongton']; 
                    $anh = $_POST['anh'];              
                    $sql = "insert into thanhpham (maThanhPham, tenThanhPham, donViTinh, soLuongTon, anh) values ('$matp','$tenThanhPham', '$donvitinh','$soluongton','$anh')";                  
                }
            $qr=mysqli_query($conn, $sql);
            if(!$qr){
                echo mysqli_error($conn);
            }
            return $qr;
            $p->unconect($conn);
            }
            else{
                return false;
            }
        }
        //cập nhật
        function updateThanhPham($up){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            $p=new Connection($conn);
            $p->connect($conn);
            if($p->connect($conn)){
                if(isset($_POST["update"])){
                    $matp = $_POST['matp'];
                    $tenThanhPham = $_POST['tenthanhpham'];
                    $donvitinh = $_POST['donvitinh']; 
                    $soluongton = $_POST['soluongton']; 
                    $anh = $_POST['anh'];  
        
                    if($matp == ""){echo "<script>alert('Vui lòng nhập mã thành phẩm!')</script>";}
                    if($tenThanhPham == ""){echo "<script>alert('Vui lòng nhập tên thành phẩm !')</script>";}
                    if($donvitinh == ""){echo "<script>alert('Vui lòng nhập đơn vị tính !')</script>";}
                    if($soluongton == ""){echo "<script>alert('Vui lòng nhập số lượng tồn !')</script>";}
                    if($anh  == ""){echo "<script>alert('Vui lòng nhập anh !')</script>";}
                    if($matp != "" && $tenThanhPham != "" && $donvitinh != "" && $soluongton != "" && $anh != ""){
                        $sql = "UPDATE thanhpham set maThanhPham = '$matp', tenThanhPham = '$tenThanhPham', donViTinh = '$donvitinh',soLuongTon = '$soluongton',anh = '$anh' WHERE maThanhPham = '$up'";
                        $qr = mysqli_query($conn ,$sql);
                        
                    }
                }   
                $qr=mysqli_query($conn, $sql);
                if(!$qr){
                    echo mysqli_error($conn);
                }
                return $qr;
                $p->unconect($conn);
            }
            else{
                return false;
            }
        }
        
        function xemThanhPhamTheoMa($up){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            $p = new Connection($conn);
            if($p->connect($conn))
            {
                $sql="select * from thanhpham where maThanhPham='$up'";
                $qr=mysqli_query($conn, $sql);
                if(!$qr){
                    echo mysqli_error($conn);
                }
                return $qr;

                $p -> unconect($conn);
            }
            else{
                return false;
            }
        }
        function timkiemTpTheoMaOrTen(){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            $p = new Connection($conn);
            if($p->connect($conn))
            {   $s = $_REQUEST['tukhoa'];
                $sql="select * from thanhpham where maThanhPham like '%$s%' or tenThanhPham like '%$s%' ";
                $qr=mysqli_query($conn, $sql);
                if(!$qr){
                    echo mysqli_error($conn);
                    
                }
                return $qr;

                $p -> unconect($conn);
            }
            else{
                return false;
            }
        }
    }
?>

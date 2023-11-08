<?php
    include_once("connection.php");
    class modelsNvl{
        function xemNvl(){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            mysqli_set_charset($conn,'utf8');
            $p = new Connection($conn);
            if($p->connect($conn))
            {
                $sql="select * from nguyenvatlieu";
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
        function xoaNvl($manvl){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            $p=new Connection($conn);
            if($p->connect($conn)){
                
                $sql="delete from nguyenvatlieu where maNguyenVatLieu= '$manvl'";
                
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
        function themNvl(){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            
            $p=new Connection($conn);
            $p->connect($conn);
            if($p->connect($conn)){
                if(isset($_POST['themnvl'])){
                    $manvl = $_POST['manvl'];
                    $tenNguyenVatLieu = $_POST['tennguyenvatlieu'];
                    $donvitinh = $_POST['donvitinh']; 
                    $soluongton = $_POST['soluongton']; 
                    $anh = $_POST['anh'];              
                    $sql = "insert into nguyenvatlieu (maNguyenVatLieu, tenNguyenVatLieu, donViTinh, soLuongTon, anh) values ('$manvl','$tenNguyenVatLieu', '$donvitinh','$soluongton','$anh')";                  
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
        function updateNvl($up){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            $p=new Connection($conn);
            $p->connect($conn);
            if($p->connect($conn)){
                if(isset($_POST["update"])){
                    $manvl = $_POST['manvl'];
                    $tenNguyenVatLieu = $_POST['tennguyenvatlieu'];
                    $donvitinh = $_POST['donvitinh']; 
                    $soluongton = $_POST['soluongton']; 
                    $anh = $_POST['anh'];  
        
                    if($manvl == ""){echo "<script>alert('Vui lòng nhập mã nguyên vật liệu!')</script>";}
                    if($tenNguyenVatLieu == ""){echo "<script>alert('Vui lòng nhập tên nguyên vật liệu !')</script>";}
                    if($donvitinh == ""){echo "<script>alert('Vui lòng nhập đơn vị tính !')</script>";}
                    if($soluongton == ""){echo "<script>alert('Vui lòng nhập số lượng tồn !')</script>";}
                    if($anh  == ""){echo "<script>alert('Vui lòng nhập anh !')</script>";}
                    if($manvl != "" && $tenNguyenVatLieu != "" && $donvitinh != "" && $soluongton != "" && $anh != ""){
                        $sql = "UPDATE nguyenvatlieu set maNguyenVatLieu = '$manvl', tenNguyenVatLieu = '$tenNguyenVatLieu', donViTinh = '$donvitinh',soLuongTon = '$soluongton',anh = '$anh' WHERE maNguyenVatLieu = '$up'";
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
        
        function xemNvlTheoMa($up){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            $p = new Connection($conn);
            if($p->connect($conn))
            {
                $sql="select * from nguyenvatlieu where maNguyenVatLieu='$up'";
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
        function timKiemNvlByIdOrName(){
            $conn= mysqli_connect('localhost','root','123456', 'ptud');
            $p = new Connection($conn);
            if($p->connect($conn))
            {
                $s = $_REQUEST['tukhoa1'];
                $sql="select * from nguyenvatlieu where maNguyenVatLieu like '%$s%' or tenNguyenVatLieu like '%$s%'  ";
                $qr=mysqli_query($conn, $sql);
                if(!$qr){
                    return null;
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

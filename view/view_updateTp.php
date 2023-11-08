
<style>
    #nut{
        padding: 5px;
        margin: 5px;
        float: right;
    }
</style>

<?php
    if(isset($_POST['update'])){
        include_once('controller/controller_qltp.php');
        $p= new controlerThanhPham();
        $up = $_GET['updatetp'];
        $p->updateTp($up);
        header("Location: index.php?qldstp");
    }
?>

<!-----------update--------------->
<body>
    <div class="container" style="margin-top: 120px;">
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6">
            <div>
                <h3 style="text-align: center; border: 2px solid; border-radius: 10px; padding: 10px; margin: 20px ">Cập nhật thành phẩm</h3>
            </div>
            <form method="POST" action="">
                <div class="row" style="font-size: 20px;">
                    <?php
                        include_once('controller/controller_qltp.php');
                        $p= new controlerThanhPham();
                        $ups = $_GET['updatetp'];
                        if(isset($_GET['updatetp'])){
                            $hien= $p->selectTpById($ups);
                            if($hien){
                                if(mysqli_num_rows($hien)){
                                    while($row= mysqli_fetch_assoc($hien)){?>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label style="margin: 5px" for="id" >Mã thành phẩm: </label><br>
                                            <input type="text" name="matp" style="width: 100%; margin: 5px; font-size: 20px;" value="<?php echo $row['maThanhPham'];?>"class="form-control"><br>
                                        </div>
                                        <div class="form-group">
                                            <label style="margin: 5px" for="func" >Tên thành phẩm: </label><br>
                                            <input type="text" name="tenthanhpham" style="width: 100%; margin: 5px; font-size: 20px;" value="<?php echo $row['tenThanhPham'];?>" class="form-control"><br>
                                        </div>
                                        <div class="form-group">
                                            <label style="margin: 5px" for="status">Đơn vị tính: </label><br>
                                            <input type="text" name="donvitinh" style="width: 100%; margin: 5px;font-size: 20px;" value="<?php echo $row['donViTinh'];?>" class="form-control"><br>
                                        </div>
                                        <div class="form-group">
                                            <label style="margin: 5px" for="id" >Số lượng tồn: </label><br>
                                            <input type="text" name="soluongton" style="width: 100%; margin: 5px;font-size: 20px;" value="<?php echo $row['soLuongTon'];?>" class="form-control"><br>
                                        </div>
                                        <div class="form-group">
                                            <label style="margin: 5px" for="func" >Ảnh: </label><br>
                                            <input type="text" name="anh" style="width: 100%; margin: 5px;font-size: 20px;" value="<?php echo $row['anh'];?>" class="form-control"><br>
                                            <a href="admin.php?qldstp" style="width: 25%; margin: 5px;font-size: 20px;"  class="btn btn-danger">Hủy</a>           
                                            <button id="nut" class="btn btn-success" type="submit" name="update" style="width: 25%; margin: 5px;font-size: 20px;">Cập nhật</button>
                                        </div>
                                    </div>
                    <?php
                                }
                            }
                        }
                    }
                    ?>

                </div>
            </form>
        </div>
        <div class="col-3">

        </div>
    </div>
    </div>
</body>

            
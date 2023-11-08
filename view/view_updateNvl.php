
<style>
    #nut{
        padding: 5px;
        margin: 5px;
        float: right;
    }
</style>

<?php
    if(isset($_POST['update'])){
        include_once('controller/controller_qlnvl.php');
        $p= new controlerNvl();
        $up = $_GET['updatenvl'];
        $p->updateNvl($up);
        
        header("Location: index.php?qldsnvl");
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
                <h3 style="text-align: center; border: 2px solid; border-radius: 10px; padding: 10px; margin: 20px ">Cập nhật nguyên vật liệu</h3>
            </div>
            <form method="POST" action="">
                <div class="row" style="font-size: 20px;">
                    <?php
                        include_once('controller/controller_qlnvl.php');
                        $p= new controlerNvl();
                        $ups = $_GET['updatenvl'];
                        if(isset($_GET['updatenvl'])){
                            $hien= $p->selectNvlById($ups);
                            if($hien){
                                if(mysqli_num_rows($hien)){
                                    while($row= mysqli_fetch_assoc($hien)){?>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label style="margin: 5px" for="id" >Mã nguyên vật liệu: </label><br>
                                            <input type="text" name="manvl" style="width: 100%; margin: 5px; font-size: 20px;" value="<?php echo $row['maNguyenVatLieu'];?>" class="form-control"><br>
                                        </div>
                                        <div class="form-group">
                                            <label style="margin: 5px" for="func" >Tên nguyên vật liệu: </label><br>
                                            <input type="text" name="tennguyenvatlieu" style="width: 100%; margin: 5px; font-size: 20px;" value="<?php echo $row['tenNguyenVatLieu'];?>" class="form-control"><br>
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
                                            <a href="index.php?qldsnvl" style="width: 25%; margin: 5px;font-size: 20px;"  class="btn btn-danger">Hủy</a>           
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

            
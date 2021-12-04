<?php
require "inc/sidebar.php";
?>
    <div class="container-fluid border border-2 p-5 mt-4 rounded-3" style="background-color:rgba(33, 140, 116,0.6); margin-left: -8px;" >
        <div class="row"style=" margin-top:10px;">
            <div class="col-sm-6">
                <a class="aStyle d-flex" href="#"><img src="view/icon/hompage.png" alt="Trang chủ" width="40px" height="40px"> <h3 style="margin-left:15px; margin-top: 8px;">Sinh viên nổi bật</h3>
                </a>
                <p style="color: #ffffff;">Quản lý > Quản lý sinh viên > Sinh viên nổi bật</p>
            </div>
            <div class="col-sm-6">
                <a class="d-flex justify-content-end text-dark" href="#" style="margin-top: 70px;">
                    <img src="view/icon/morein4.png" alt="Trang chủ" width="10px" height="10px" style="margin-top:5px">
                    <p style ="margin-left: 5px; font-size:12px;">Thêm thông tin</p>
                </a>
            </div>
        </div>
        <br>
    </div>
            <div class="container" style="background-color:rgba(223, 228, 234,0.2); margin-top:50px; margin-bottom: 30px;">
                <div class="d-flex">
                    <h3 style="color:#2C3A47; font-family: serif; margin-left:20px; margin-top: 10px;">Sinh viên tiêu biểu</h3>
                </div>
                <div class="row border-1 border-top">
                    <p style="text-align: center; font-family:cursive; font-size:20px; margin-top:30px;">"Những gương mặt đáng nhớ"</p>
                    <?php
                    require_once "database/dbhelp.php";
                    $sql = "select * from svxs";
                    $listsvxs = executeResult($sql);
                    foreach ($listsvxs as $item){
                        echo '
                    <div class="col-sm-4" style="margin-top:30px;">
                        <img src="view/'.$item['img'].'" class="img-thumbnail"  height="250px" width="500px">
                        <p style="font-size:16px; font-family:cursive; text-align: center; margin-top: 20px;">'.$item['hoten'].' <br> "'.$item['gthieu'].'"</p>
                        <button type="button" class="btn btn-danger" onclick =\'window.open("svnoibat.php?id='.$item['id'].'")\'>Sửa</button>
                    </div>';
                    }
                    ?>
                </div>
            </div>

<?php
require "inc/footer.php";
<?php
require_once "database/dbhelp.php";
$image=$tieuDe=$nd=$id = '';
if(isset($_POST['save_profile'])){
    //this is the name of the image that will be saved in the database
    if(isset($_POST['tieude'])){
        $tieuDe = $_POST['tieude'];
    }
    if(isset($_POST['nd'])){
        $nd = $_POST['nd'];
    }
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    $image=time() . '-' .$_FILES['image']['name'];
    $target_dir="view/";
    $target_file=$target_dir . basename($image);

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
        $sql = "update svxs set hoten = '$tieuDe', img = '$image', gthieu = '$nd' where id =".$id;
    }
    else{
        $sql = "update svxs set hoten = '$tieuDe',gthieu = '$nd' where id =".$id;
    }
    execute($sql);
    header('location:svxs.php');
}
$id = '';
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from svxs where id = ".$id;
    $tinlist = executeResult($sql);
    if($tinlist != null && count($tinlist) > 0){
        $std = $tinlist[0];
        $tieuDe = $std['hoten'];
        $ha = $std['img'];
        $nd = $std['gthieu'];
    }else{
        $id = '';
    }
}
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
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#menu1">Chỉnh sửa thông tin</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="menu1">
            <form method="post" enctype = "multipart/form-data">
                <input type="number" class="form-control" id="id" placeholder="" name="id" style="display: none;" value="<?=$id?>">
                <div class="mt-2" >
                    <label for="tieude" class="form-label">Họ và tên:</label>
                    <input type="input" class="form-control" id="tieude" placeholder="Họ và tên" name="tieude" value="<?=$tieuDe?>">
                </div>
                <div class="mt-2">
                    <label for="nd" class="form-label">Giới thiệu:</label>
                    <textarea class="form-control" rows="7" id="nd" name="nd" placeholder="Giới thiệu"><?=$nd?></textarea>
                </div>
                <div class="mt-4">
                    <input type="file" id="profileImage" name="image" class="form-control"/>
                </div>
                <button name = "save_profile" type="submit" class="btn btn-primary mt-4" style="margin-left: 900px;">Lưu lại</button>
            </form>
        </div>
    </div>

<?php
require "inc/footer.php";
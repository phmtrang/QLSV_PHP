//sua tin tuc
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
//update noi dung vào DB(có thêm ảnh hoặc ko thêm ảnh)
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
            $sql = "update tintucnoibat set tieuDe = '$tieuDe', ha = '$image', nd = '$nd' where idtintuc =".$id;
        }
        else{
            $sql = "update tintucnoibat set tieuDe = '$tieuDe',nd = '$nd' where idtintuc =".$id;
        }
        execute($sql);
        header('location:tintuc.php');
}
$id = '';
//lay tin theo id dien vào form
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from tintucnoibat where idtintuc = ".$id;
    $tinlist = executeResult($sql);
    if($tinlist != null && count($tinlist) > 0){
        $std = $tinlist[0];
        $tieuDe = $std['tieuDe'];
        $ha = $std['ha'];
        $nd = $std['nd'];
    }else{
        $id = '';
    }
}
require "inc/sidebar.php";
?>
    <div class="container-fluid border border-2 p-5 mt-4 rounded-3" style="background-color:rgba(33, 140, 116,0.6); margin-left: -8px;" >
        <div class="row"style=" margin-top:10px;">
            <div class="col-sm-6">
                <a class="aStyle d-flex" href="#"><img src="view/icon/hompage.png" alt="Trang chủ" width="40px" height="40px"> <h3 style="margin-left:15px; margin-top: 8px;">Quản lý tin tức</h3>
                </a>
                <p style="color: #ffffff;">Quản lý > Tin tức</p>
            </div>
            <div class="col-sm-6">
                <a class="d-flex justify-content-end text-dark" href="#" style="margin-top: 70px;">
                    <img src="view/icon/morein4.png" alt="Trang chủ" width="10px" height="10px" style="margin-top:5px">
                    <p style ="margin-left: 5px; font-size:12px;">Sửa thông tin</p>
                </a>
            </div>
        </div>
        <br>
    </div>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#home">Tin tức</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#menu1">Thêm tin tức mới</a>
            </li>
        </ul>
    </div>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container-fluid fade" id="home">
            <?php
            require_once "database/dbhelp.php";
            $sql = "select * from tintucnoibat";
            $listtin = executeResult($sql);
            foreach ($listtin as $item){
                echo '
                            <div class="mt-4 row">
                                <div class="col-sm-4">
                                        <img src="view/'.$item['ha'].'" alt="hình ảnh" width="400px" height="400px">          
                                </div>
                                <div class="col-sm-1">
                                    
                                </div>
                                <div class="col-sm-7">
                                    <table class="table table-borderless">
                                        <tbody>
                                         <tr>
                                            <td>'.$item['tieuDe'].'</td>
                                        </tr>
                                        <tr>
                                            <td>'.$item['nd'].'</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <button type="button" class="btn btn-danger"  onclick =\'window.open("sv.php?id='.$item['idtintuc'].'")\'>Xóa</button>
                                                <button type="button" class="btn btn-danger" onclick =\'window.open("tintuc.php?id='.$item['idtintuc'].'")\'>Sửa</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>';
            }
            ?>
        </div>
        <div class="tab-pane container active" id="menu1">
            <form method="post" enctype = "multipart/form-data">
                <input type="number" class="form-control" id="id" placeholder="" name="id" style="display: none;" value="<?=$id?>">
                <div class="mt-2" >
                    <label for="tieude" class="form-label">Tiêu đề:</label>
                    <input type="input" class="form-control" id="tieude" placeholder="Tiêu đề" name="tieude" value="<?=$tieuDe?>">
                </div>
                <div class="mt-2">
                    <label for="nd" class="form-label">Nội dung:</label>
                    <textarea class="form-control" rows="7" id="nd" name="nd" placeholder="Nội dung"><?=$nd?></textarea>
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
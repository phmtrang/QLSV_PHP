<?php
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
                    <p style ="margin-left: 5px; font-size:12px;">Thêm thông tin</p>
                </a>
            </div>
        </div>
        <br>
    </div>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#home">Tin tức</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#menu1">Thêm tin tức mới</a>
        </li>
    </ul>
</div>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container-fluid active" id="home">
                        <?php
                        //xoa 1 tin tuc
                            require_once "database/dbhelp.php";
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $sql = "delete from tintucnoibat where idtintuc = ".$id;
                                execute($sql);
                            }
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
                                                <button type="button" class="btn btn-danger"  onclick =\'window.open("tintuc.php?id='.$item['idtintuc'].'")\'>Xóa</button>
                                                <button type="button" class="btn btn-danger" onclick =\'window.open("suatintuc.php?id='.$item['idtintuc'].'")\'>Sửa</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>';
                            }
                        ?>
        </div>
        <div class="tab-pane container fade" id="menu1">
            <form method="post" action="upload.php" enctype = "multipart/form-data">
                    <div class="mt-2" >
                        <label for="tieude" class="form-label">Tiêu đề:</label>
                        <input type="input" class="form-control" id="tieude" placeholder="Tiêu đề" name="tieude">
                    </div>
                    <div class="mt-2">
                        <label for="nd" class="form-label">Nội dung:</label>
                        <textarea class="form-control" rows="7" id="nd" name="nd" placeholder="Nội dung"></textarea>
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
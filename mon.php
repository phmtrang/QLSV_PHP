<?php
require "inc/sidebar.php";
require_once "database/dbhelp.php";

?>
    <div class="container-fluid border border-2 p-5 mt-4 rounded-3" style="background-color:rgba(33, 140, 116,0.6); margin-left: -8px;" >
        <div class="row"style=" margin-top:10px;">
            <div class="col-sm-6">
                <a class="aStyle d-flex" href="#"><img src="view/icon/hompage.png" alt="Trang chủ" width="40px" height="40px"> <h3 style="margin-left:15px; margin-top: 8px;">Danh Sách Sinh viên</h3>
                </a>
                <p style="color: #ffffff;">Quản lí sinh viên > Môn học</p>
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
        <div class="row mt-4">
            <div class="col-sm-8">
                <button type="button" class="btn btn-success" onclick="window.open('them_suaMH.php','_self')">Thêm môn học</button>
            </div>
            <div class="col-sm-4">
                <form class="input-group" method="get">
                    <span class="input-group-text"><img src="view/icon/search.png" alt="Tìm kiếm" width="30px" height="30px"></span>
                    <input class="form-control" type="text" placeholder="tìm kiếm" name="search">
                </form>
            </div>
        </div>
        <div class="border-1 border-top mt-4">
            <table class="table table-bordered table-sm table-hover" style="margin-top:20px;">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã môn học</th>
                    <th>Tên môn học</th>
                    <th>Số tín chỉ</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (isset($_GET['mmh'])) {
                    $id = $_GET['mmh'];
                    $sql = "delete from mon where mmh = '$id'";
                    execute($sql);
                }
                if(isset($_GET['search']) && $_GET['search'] != ''){
                    $sql = 'select * from mon where ten like "%'.$_GET['search'].'%" ';
                }
                else{
                    $sql = "select * from mon";
                }

                $studentList = executeResult($sql);
                $i = 1;
                foreach ($studentList as $item) {
                    echo '<tr>
                    <td>'.$i++.'</td>
                    <td>'.$item['mmh'].' </td>
                    <td>'.$item['ten'].'</td>
                    <td>'.$item['soTC'].'</td>
                    <td><button type="button" class="btn btn-danger"  onclick =\'window.open("mon.php?mmh='.$item['mmh'].'")\'>Xóa</button></td>
                    <td><button type="button" class="btn btn-danger" onclick =\'window.open("them_suaSV.php?mmh='.$item['mmh'].'")\' >Sửa</button></td>
                </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
require "inc/footer.php";


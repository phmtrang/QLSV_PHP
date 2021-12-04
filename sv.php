<?php
require "inc/sidebar.php";
require_once "database/dbhelp.php";

?>
    <div class="container-fluid border border-2 p-5 mt-4 rounded-3" style="background-color:rgba(33, 140, 116,0.6); margin-left: -8px;" >
        <div class="row"style=" margin-top:10px;">
            <div class="col-sm-6">
                <a class="aStyle d-flex" href="#"><img src="view/icon/hompage.png" alt="Trang chủ" width="40px" height="40px"> <h3 style="margin-left:15px; margin-top: 8px;">Danh Sách Sinh viên</h3>
                </a>
                <p style="color: #ffffff;">Quản lí sinh viên > Sinh viên</p>
            </div>
            <div class="col-sm-6">
                <a class="d-flex justify-content-end text-dark" href="#" style="margin-top: 70px;">
                    <img src="view/icon/morein4.png" alt="Trang chủ" width="10px" eight="10px" style="margin-top:5px">
                    <p style ="margin-left: 5px; font-size:12px;">Thêm thông tin</p>
                </a>
            </div>
        </div>
        <br>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-8">
                <button type="button" class="btn btn-success" onclick="window.open('them_suaSV.php','_self')">Thêm sinh viên</button>
                <div class="row">
                    <div class="col-sm-5">
                        <form method="post">
                            <select class="form-select form-select-sm mt-3" name="sapxep">
                                <option value="" disabled selected>Lựa chọn</option>
                                <option value="hoten">Sắp xếp theo họ</option>
                                <option value="cpa">Sắp xếp cpa tăng dần</option>
                            </select>
                    </div>
                    <div class="col-sm-1">
                        <input type="submit" name="submit" value="Lựa chọn" class="btn btn-sm btn-success mt-3">
                        </form>
                    </div>
                </div>
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
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Lớp hành chính</th>
                    <th>Chuyên ngành</th>
                    <th>Điểm tích lũy</th>
                    <th>Ngày sinh</th>
                    <th>Khóa</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (isset($_GET['msv'])) {
                    $id = $_GET['msv'];
                    $sql = "delete from sinhvien where msv = '$id'";
                    execute($sql);
                }
                if(isset($_GET['search']) && $_GET['search'] != ''){
                    $sql = 'select * from sinhvien where hoten like "%'.$_GET['search'].'%" ';
                }
                elseif (isset($_POST['submit'])){
                    if(!empty($_POST['sapxep'])){
                        $selected = $_POST['sapxep'];
                    }
                    $sql = "SELECT * FROM sinhvien order by ".$selected." ASC";
                }
                else{
                    $sql = "select * from sinhvien";
                }

                $studentList = executeResult($sql);
                $i = 1;
                foreach ($studentList as $item) {
                   echo '<tr>
                    <td>'.$i++.'</td>
                    <td>'.$item['msv'].' </td>
                    <td>'.$item['hoten'].'</td>
                    <td>'.$item['lophc'].'</td>
                    <td>'.$item['cn'].'</td>
                    <td>'.$item['cpa'].'</td>
                    <td>'.$item['ns'].'</td>
                    <td>'.$item['khoa'].'</td>
                    <td><button type="button" class="btn btn-danger"  onclick =\'window.open("sv.php?msv='.$item['msv'].'")\'>Xóa</button></td>
                    <td><button type="button" class="btn btn-danger" onclick =\'window.open("them_suaSV.php?msv='.$item['msv'].'")\' >Sửa</button></td>
                </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
require "inc/footer.php";


<?php
require "inc/sidebar.php";
?>
<div class="container-fluid border border-2 p-5 mt-4 rounded-3" style="background-color:rgba(33, 140, 116,0.6); margin-left: -8px;" >
    <div class="row"style=" margin-top:10px;">
        <div class="col-sm-6">
            <a class="aStyle d-flex" href="#"><img src="view/icon/tk.png" alt="Trang chủ" width="40px" height="40px"> <h3 style="margin-left:15px; margin-top: 8px;">Thống kê</h3>
            </a>
            <p style="color: #ffffff;">Quản lí> Thống kê</p>
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
    <div class="container border-1 border-top" style="background-color:#ffffff; margin-top: 20px;">
        <div class="row">
            <h3 style="font-family: serif; font-size: 24px; margin-top: 10px;">
                <b>Thống kê danh sách đạt học bổng</b>
                <form method="post">
                    <div class="row mt-2">
                        <div class="mt-2 col-sm-4" >
                            <label for="cpa" class="form-label">Mức cpa</label>
                            <input type="input" class="form-control" id="cpa" placeholder="2.5" name="cpa">
                        </div>
                        <div class="mt-2 col-sm-6">
                            <label for="sl" class="form-label">Số lượng sinh viên:</label>
                            <input type="input" class="form-control" id="sl" placeholder="5" name="sl">
                        </div>
                        <div class="col-sm-2" style="margin-top: 30px">
                            <button name = "submit" type="submit" class="btn btn-primary mt-2">Thống kê</button>
                        </div>
                    </div>
                </form>
            </h3>

        </div>
        <div class="row">
            <h3 style="font-family: serif; font-size: 20px; margin-top: 10px;">
              Danh sách sinh viên đạt học bổng
            </h3>
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
                    $cpa = 2.5;
                    $sl = 5;
                    require_once "database/dbhelp.php";
                    if(isset($_POST['cpa'])){
                        $cpa =(float)$_POST['cpa'];
                    }
                    if(isset($_POST['sl'])){
                        $sl = (int)$_POST['sl'];
                    }
                    $sql = "select * from sinhvien where cpa > ".$cpa." order by cpa DESC limit ".$sl;
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
                </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
require "inc/footer.php";
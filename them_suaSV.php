<?php
require_once "database/dbhelp.php";
$msv = $hoten = $lophc = $cn = $ns = $khoa = '';
if (!empty($_POST)) {
    if (isset($_POST['msv'])) {
        $msv = $_POST['msv'];
    }
    if (isset($_POST['hoten'])) {
        $hoten = $_POST['hoten'];
    }
    if (isset($_POST['lophc'])) {
        $lophc = $_POST['lophc'];
    }
    if (isset($_POST['cn'])) {
        $cn = $_POST['cn'];
    }
    if (isset($_POST['ns'])) {
        $ns = $_POST['ns'];
    }
    if (isset($_POST['khoa'])) {
        $khoa = $_POST['khoa'];
    }
    $msv = str_replace('\'', '\\\'', $msv);
    $hoten = str_replace('\'', '\\\'', $hoten);
    $lophc = str_replace('\'', '\\\'', $lophc);
    $cn = str_replace('\'', '\\\'', $cn);
    $ns = str_replace('\'', '\\\'', $ns);
    $khoa = str_replace('\'', '\\\'', $khoa);

    if(isset($_GET['msv'])){
        $sql = "update sinhvien set msv = '$msv',hoten ='$hoten', lophc ='$lophc', cn ='$cn', ns ='$ns', khoa = '$khoa' where msv = '$msv' ";
    }else{
        $sql = "insert into sinhvien(msv, hoten, lophc, cn, ns, khoa) value('$msv', '$hoten', '$lophc', '$cn', '$ns', '$khoa')";
    }
    execute($sql);
    header('location: sv.php');
    die();
}
$id = '';
if (isset($_GET['msv'])){
    $id = $_GET['msv'];
    $sql = "select * from sinhvien where msv = '$id'";
    $studenList = executeResult($sql);
    if($studenList != null && count($studenList) > 0){
        $std = $studenList[0];
        $msv = $std['msv'];
        $hoten = $std['hoten'];
        $lophc = $std['lophc'];
        $cn = $std['cn'];
        $ns = $std['ns'];
        $khoa = $std['khoa'];
    }else{
        $msv = '';
    }
}
require "inc/sidebar.php";
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
                    <img src="view/icon/morein4.png" alt="Trang chủ" width="10px" height="10px" style="margin-top:5px">
                    <p style ="margin-left: 5px; font-size:12px;">Thêm thông tin</p>
                </a>
            </div>
        </div>
        <br>
    </div>
        <div class="container-fluid border-top border-1 mt-4">
            <form method="post">
                <div class="row mt-2">
                    <div class="mt-2 col-sm-4" >
                        <label for="msv" class="form-label">Mã sinh viên:</label>
                        <input type="input" class="form-control" id="msv" placeholder="Mã sinh viên" name="msv" value="<?=$msv?>">
                    </div>
                    <div class="mt-2 col-sm-8">
                        <label for="hoten" class="form-label">Tên sinh viên:</label>
                        <input type="input" class="form-control" id="ten" placeholder="Họ và tên" name="hoten" value="<?=$hoten?>">
                    </div>
                </div>
                <div class="row">
                    <div class="mt-2 col-sm-6">
                        <label for="lophc" class="form-label">Lớp hành chính:</label>
                        <input class="form-control" type="input" id="lhc"  placeholder="Lớp hành chính" name="lophc"  value="<?=$lophc?>">
                    </div>
                    <div class="mt-2 col-sm-6">
                        <label for="cn" class="form-label">Chuyên ngành:</label>
                        <input class="form-control" type="input" id="cn" name="cn"  placeholder="Chuyên ngành" value="<?=$cn?>">
                    </div>
                </div>
                <div class="row">
                    <div class="mt-2 col-sm-6">
                        <label for="ns" class="form-label">Ngày sinh:</label>
                        <input class="form-control" type="input" id="ns" name="ns" placeholder="Ngày sinh" value="<?=$ns?>">
                    </div>
                    <div class="mt-2 col-sm-6">
                        <label for="khoa" class="form-label">Khóa:</label>
                        <input class="form-control" type="input" id="khoa" name="khoa"  placeholder="Khóa" value="<?=$khoa?>">
                    </div>
                </div>
                <button name = "submit" type="submit" class="btn btn-primary mt-4" style="margin-left: 800px;">Lưu lại</button>
            </form>
        </div>
<?php
require "inc/footer.php";
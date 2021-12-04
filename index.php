<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang quản lý sinh viên</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<!-- Phần header!!!!! -->
<!--Sử dụng grid chia cột hiển thị logo, tên trg, thanh tìm kiếm(input)-->
<div class="row margin">
    <div class="col-sm-auto" ><img src="view/logo.png" width="180px" height="180px"></div>
    <div class="col-sm-7">
        <p  style="font-size:24px; font-family:Georgia,serif;">HỌC VIỆN CÔNG NGHỆ BƯU CHÍNH VIỄN THÔNG</p>
        <p style="font-size:24px;font-family: Georgia,serif; color: #FA6367;">Posts and Telecommunication Institute of Technology </p>
    </div>
    <div class="col-sm-auto">
        <p class="d-flex" style="margin-top: 25px">
            <img src="view/icon/phone.png" alt="Liên hệ" width="40px" height="40px">
            <b style="margin-left: 20px; margin-right: 20px; font-size:20px;">1900-292970</b>
            <img src="view/icon/facebook.png" alt="facebook" width="36px" height="36px">
            <img src="view/icon/mes.png" alt="nhắn tin" width="36px" height="36px">
            <img src="view/icon/mail.png" alt="mail" width="36px" height="36px">
        </p>
        <form class="d-flex" style="margin-top: 30px">
            <input class="form-control me-2" type="text" placeholder="tìm kiếm">
            <button class="btn btn-primary" type="button">Tìm kiếm</button>
        </form>
    </div>
</div>

<!-- Tạo thanh menu bằng Navbar,dropdown, và thu gọn thanh menu bằng collapse, sử dụng border để tạo đường kẻ-->
<div class="border-top border-danger border-4" style="margin-top: 20px;">
    <nav class="navbar navbar-expand-md" style="margin-right: 100px; margin-left: 100px;">

        <!-- Tạo toggler/collapsibe button -->
        <button class="navbar-toggler" type="button" data-bs-toggle ="collapse" data-bs-target = "#main_nav">
            <img src="view/icon/navbar_toggle.jpg" alt="Menu" width="48px" height="48px">
        </button>

        <!-- Phần menu bên trái -->
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#"> <img src="view/icon/hompage.png" alt="Trang chủ" width="48px" height="48px"> </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link menu-margin">Thông báo</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle menu-margin" data-bs-toggle ="dropdown">Góc học tập</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item" >Thời khóa biểu</a></li>
                        <li><a href="#" class="dropdown-item" >Kết quả học tập</a></li>
                        <li><a href="#" class="dropdown-item" >Lịch thi</a></li>
                        <li class="dropdown dropend">
                            <a href="#" class="dropdown-item dropdown-toggle" >lớp</a>
                            <ul class="dropdown-menu submenu">
                                <li><a href="#" class="dropdown-item">Lớp tín chỉ</a></li>
                                <li><a href="#" class="dropdown-item">Lớp hành chính</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-item" >Chương trình đào tạo</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link menu-margin">Học phí</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link menu-margin dropdown-toggle" data-bs-toggle ="dropdown">Kí túc xá</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Thông tin</a></li>
                        <li><a href="#" class="dropdown-item">Đăng kí</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link menu-margin dropdown-toggle" data-bs-toggle ="dropdown">Dịch vụ hành chính</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Giáo vụ</a></li>
                        <li><a href="#" class="dropdown-item">Khảo thí</a></li>
                        <li><a href="#" class="dropdown-item">Công tác chính trị sinh viên</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link menu-margin dropdown-toggle" data-bs-toggle ="dropdown">Khác</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropend"><a href="#" class="dropdown-item dropdown-toggle">Khảo sát</a>
                            <ul class="dropdown-menu submenu">
                                <li><a href="#" class="dropdown-item">Đánh giá GVGD</a></li>
                                <li><a href="#" class="dropdown-item">Đánh giá CSVC</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-item">Hỏi đáp</a></li>
                        <li><a href="#" class="dropdown-item">Khai báo y tế</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Phần menu bên phải, 1 nút đăng nhập, bấm vào nút đăng nhập hiện hội thoại điền thông tin đăng nhập (sử dụng class modal)-->
        <div class="collapse navbar-collapse 	" id = "main_nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div><a class="nav-link btn btn-danger" href="#" data-bs-toggle = "modal" data-bs-target = "#myModal" style="color: #2f3542;margin-left: 400px;">Đăng nhập</a></div>

                    <!-- Modal -->
                    <div class="modal fade" id = "myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Đăng nhập</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss = "modal"></button>
                                </div>
                                <!-- modal body -->
                                <form action="login.php"  method="POST" >
                                    <div class="modal-body">
                                        <div>
                                            <label for="username" class="form-label">Tên đăng nhập:</label>
                                            <input type="username" name="username" id="username" class="form-control" placeholder="tên đăng nhập">
                                        </div>
                                        <div>
                                            <label for = "password" class="form-label">Mật khẩu</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="mật khẩu">
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label"> <input type="checkbox" name="remember" class="form-check-input"> Ghi nhớ tôi
                                            </label>
                                        </div>
                                    </div>
                                    <!-- modal footer -->
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" type="submit" name="submit">Đăng nhập</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss = "modal">Đóng</button>
                                    </div>
                            </div>
                            </form>

                        </div>

                    </div>
        </div>
        </nav>
        </ul>
</div>

</nav>
</div>
<!-- Đã hết phần header -->

<!-- Phần body -->
<!-- Carousel tạo slide chuyển ảnh-->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="view/congtruong.jpg" alt="Cổng trường" class="d-block w-100" height="700px">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="view/thuvien.jpg" alt="Thư viện" class="d-block w-100" height="700px">
        </div>
        <div class="carousel-item"data-bs-interval="3000">
            <img src="view/ktx1.jpg" alt="Kí túc xá" class="d-block w-100" height="700px">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="view/phongth.jpg" alt="Phòng lab" class="d-block w-100" height="700px">
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<!-- Dynamic Tabs-->
<div class="border-top border-1" style="margin-top: 50px; color: #a5b1c2;">
    <div class="container mt-3" style="background-color:rgba(223, 228, 234,0.2)">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#home"><h3 style="font-family: Bookman;">Giới thiệu về học viện</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu1"><h3 style="font-family: Bookman;">Các ngành đào tạo</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu2"><h3 style="font-family: Bookman;">Phòng Lab</h3></a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content"  style="background-color:#ffffff">
            <div id="home" class="container tab-pane active"><br>
                <div class="row">
                    <div class="col-sm-7">
                        <p style="font-size:15px; font-family:serif; text-align: justify; color:#2C3A47;">
                            &nbsp;&nbsp;&nbsp;&nbsp;Học viện Công nghệ Bưu chính Viễn thông (tên giao dịch tiếng Anh: Posts and Telecommunications Institute of Technology, viết tắt là PTIT) là một tổ chức Nghiên cứu - Giáo dục Đào tạo có thương hiệu, uy tín đứng top 5 đại học Việt Nam với thế mạnh về Nghiên cứu và đào tạo Đại học, Sau Đại học trong lĩnh vực Công nghệ Thông tin và Truyền thông, xếp hạng thứ 12 các đại học hàng đầu Việt Nam (theo Webometrics). Học viện là cơ sở đào tạo công lập trực thuộc Bộ Thông tin và Truyền thông.
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Trường được thành lập từ năm 1953 nhưng đến ngày 11 tháng 7 năm 1997 được sắp xếp lại trên cơ sở sáp nhập Viện Khoa học Kỹ thuật Bưu điện, Viện Kinh tế Bưu điện, Trung tâm Đào tạo Bưu chính - Viễn thông I và Trung tâm Đào tạo Bưu chính - Viễn thông II.
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Chức năng nhiệm vụ của Học viện được quy định trong Quyết định 879/QĐ-BTTTT ngày 26/05/2016 của Bộ trưởng Bộ TT&TT về việc ban hành tạm thời Quy chế tổ chức và hoạt động của Học viện Công nghệ Bưu chính Viễn thông. Học viện cũng thực hiện đào tạo Cao đẳng Giáo dục nghề nghiệp với 3 ngành: Ứng dụng Công nghệ Phần mềm, Thiết kế Đồ họa, Thiết kế trang Web.

                            Quy mô đào tạo Học viện hiện nay đạt gần 20.000 học viên, sinh viên. Chỉ tiêu tuyển mới hàng năm: Sau Đại học: 400; Đại học Chính quy: 3.450; Cao đẳng Giáo dục Nghề nghiệp: 420; các hệ đào tạo phi chính quy (Vừa làm vừa học, từ xa): 1.000.

                            Hơn 93% sinh viên tốt nghiệp của Học viện có việc làm đúng ngành đào tạo sau 1 năm tốt nghiệp.
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <img src="view/hv.jpg" width="450px" height="330px" style="margin-left:70px">
                    </div>
                </div>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <div class="row">
                    <div class="col-sm-7">
                        <p style="font-size:15px; font-family:serif; text-align: justify; color:#2C3A47;">
                            Do Học Viện có hai cơ sở đào tạo: nên mỗi cơ sở đào tạo có một khoa riêng. Khoa đánh số 1 là Khoa thuộc cơ sở đào tạo phía Bắc và Khoa đánh số 2 là Khoa thuộc cơ sở đào tạo phía Nam. Vị trí và vai trò của Khoa 1 và 2 là ngang nhau.
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;-Khoa Công nghệ thông tin 1 & 2 (đào tạo ngành Công nghệ thông tin, An toàn Thông tin)<br>&nbsp;&nbsp;&nbsp;&nbsp;-Khoa Kỹ thuật điện tử 1 & 2 (đào tạo ngành Điện - Điện tử) <br>&nbsp;&nbsp;&nbsp;&nbsp;-Khoa Viễn thông 1 & 2 (Đào tạo ngành kỹ thuật Điện tử - Viễn thông và ngành công nghệ Internet vạn vật (từ năm 2019)) <br>&nbsp;&nbsp;&nbsp;&nbsp;-Khoa Quản trị kinh doanh 1 & 2 (đào tạo ngành Quản trị Kinh doanh, Thương mại Điện tử)<br>&nbsp;&nbsp;&nbsp;&nbsp;-Khoa Đa phương tiện (đào tạo ngành Công nghệ Đa phương tiện, Truyền thông Đa phương tiện) <br>&nbsp;&nbsp;&nbsp;-Viện Kinh tế Bưu điện - Bộ môn Marketing (đào tạo Ngành Marketing với các chuyên ngành Phân tích Dữ liệu Marketing số, Internet Marketing, Truyền thông Marketing) <br>&nbsp;&nbsp;&nbsp;-Khoa Đào tạo Sau Đại học: Chỉ có ở cơ sở đào tạo phía Bắc. Bộ phận sau đại học của Học Viện Cơ Sở phía Nam do phòng Đào Tạo và Khoa Học Công Nghệ quản lý. <br>Nhằm tạo điều kiện cung cấp cơ hội học tập, nâng cao trình độ kiến thức chuyên môn, nghiệp vụ ở bậc đại học cho mọi người có nhu cầu học tập nhưng chưa có điều kiện học tập trung tại các cơ sở đào tạo. Tuyển sinh xét tuyển với hệ đại học từ xa (không tổ chức thi) đầu vào.
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <img src="view/cntt.png" width="450px" height="330px" style="margin-left:70px">
                    </div>
                </div>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                <div class="row">
                    <div class="col-sm-7">
                        <p style="font-size:15px; font-family:serif; text-align: justify; color:#2C3A47;">
                            Phòng thí nghiệm mạng 4G LTE hoàn chỉnh đầu tiên và duy nhất tại Việt Nam được trang bị cho một trường đại học để nghiên cứu đã được khai trương. <br>
                            Sáng 19/9, Bộ trưởng Bộ Thông tin & Truyền thông (Bộ TT&TT) Nguyễn Mạnh Hùng đã cắt băng khánh thành phòng lab mạng di động thế hệ thứ 4 (4G) tại Học viện Công nghệ Bưu chính Viễn thông. Phòng lab này là một mạng 4G LTE hoàn chỉnh với đầy đủ các dịch vụ cơ bản do tập đoàn Viettel nghiên cứu, phát triển và trao tặng cho học viện.
                            Các hệ thống chính tại phòng lab gồm trạm thu phát sóng eNodeB, hệ thống chuyển mạch gói EPC (Evolved Packet Core), hệ thống cung cấp các dịch vụ truyền thông đa phương tiện trên nền mạng IP - IMS (IP Multimedia Subsystem) và hệ thống tính cước thời gian thực OCS (Online Charging System).
                            <br>
                            Thông qua phòng lab 4G vừa được khai trương, giảng viên và sinh viên học viện có thể thực hiện việc mô phỏng cuộc gọi End to End, mô phỏng truy cập website và lưu lượng di động, tính cước dịch vụ thoại, data, thực hiện thủ tục Handover với các giao diện mạng LTE: S1, S6a, S5/S8, S10, Gx, Gy…
                            ới tổng giá trị đầu tư lên đến 8,5 tỷ đồng, đây là phòng thí nghiệm mạng 4G LTE hoàn chỉnh đầu tiên và duy nhất tại Việt Nam được trang bị cho một trường đại học để nghiên cứu.
                            <br>
                            Do vậy, Bộ trưởng Nguyễn Mạnh Hùng mong muốn tập đoàn Viettel giữ mối liên hệ thường xuyên với Học viện Công nghệ Bưu chính Viễn thông để giúp trường giảm bớt độ trễ về công nghệ xuống chỉ còn 1 năm so với thực tế, thay vì độ trễ 30 năm như trước đây.
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <img src="view/lab.jpg" width="450px" height="330px" style="margin-left:70px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container border-1 border-bottom" style="background-color:rgba(223, 228, 234,0.2); margin-top:50px;">
    <h3 style="color:#2C3A47; font-family: serif; margin-left:20px; margin-top: 10px;">Tin tức sinh viên</h3>
    <div class="row border-1 border-top">
        <?php
        require_once "database/dbhelp.php";
        $sql = "select * from tintucnoibat";
        $listtin = executeResult($sql);
        foreach ($listtin as $item){
            echo '
        <div class="col-sm-4" style="margin-top:20px;">
            <img src="view/'.$item['ha'].'" class="d-block w-100" height="250px">
            <p style="font-size:16px; font-family:serif; text-align: justify; color:#2C3A47; margin-top: 20px;">'.$item['tieuDe'].'</p>
        </div>
        ';
        }
        ?>
    </div>
</div>
<div class="container" style="background-color:rgba(223, 228, 234,0.2); margin-top:50px; margin-bottom: 30px;">
    <h3 style="color:#2C3A47; font-family: serif; margin-left:20px; margin-top: 10px;">Sinh viên tiêu biểu</h3>
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
        </div>';
        }
        ?>
    </div>
</div>
<div class="container" style="background-color:rgba(223, 228, 234,0.2); margin-top:50px; margin-bottom: 30px;">
    <h3 style="color:#2C3A47; font-family: serif; margin-left:20px; margin-top: 10px;">Danh sách nợ học phí</h3>
    <div class="row border-1 border-top">
        <table class="table table-bordered table-sm table-hover" style="margin-top:20px;">
            <thead>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Lớp hành chính</th>
                <th>Chuyên ngành</th>
                <th>Mức học phí</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if(isset($_GET['msv'])){
                $new = $_GET['msv'];
                $sql = "update hoc_phi set trangthai = 'complete' where msv = '$new' ";
                execute($sql);
            }
            $sql = "select sinhvien.msv, sinhvien.hoten,sinhvien.lophc, sinhvien.cn, hoc_phi.muc, hoc_phi.trangthai
                            from sinhvien, hoc_phi
                            where sinhvien.msv = hoc_phi.msv and hoc_phi.trangthai = 'uncomplete'";
            $studentList = executeResult($sql);
            $i = 1;
            $tt = "complete";
            foreach ($studentList as $item) {
                echo '<tr>
                    <td>'.$i++.'</td>
                    <td>'.$item['msv'].' </td>
                    <td>'.$item['hoten'].'</td>
                    <td>'.$item['lophc'].'</td>
                    <td>'.$item['cn'].'</td>
                    <td>'.$item['muc'].'</td>
                </tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<div class="container" style="background-color:rgba(223, 228, 234,0.2); margin-top:50px; margin-bottom: 30px;">
    <h3 style="color:#2C3A47; font-family: serif; margin-left:20px; margin-top: 30px;">Kí túc xá</h3>
    <div class="row border-1 border-top">
        <div class="col-sm-4" style="margin-top:30px;margin-bottom:30px;">
            <div class="card">
                <div class="card-header bg-success text-white" style="text-align: center; font-size: 40px;">KTX B5</div>
                <div class="card-body">
                    <div  class = "border-bottom border-1">
                        <p style="font-size:18px; font-family:cursive; text-align: center;">Bốn người một phòng <br>
                            Có sẵn giường, chiếu, tủ <br>
                            Quản túc thân thiện, tận tâm <br>
                            An ninh đảm bảo <br>
                            Ngay trong khuôn viên trường
                        </p>
                    </div>
                    <p style="font-size:30px; font-family:cursive; text-align: center; margin-top: 15px;">1.500.000 VNĐ/tháng</p>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success" style="margin-top:15px; margin-bottom: 15px; font-size: 22px;margin-left: 140px;">Đăng ký</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-top:30px;margin-bottom:30px;">
            <div class="card">
                <div class="card-header bg-success text-white" style="text-align: center; font-size: 40px;">KTX B2</div>
                <div class="card-body">
                    <div  class = "border-bottom border-1">
                        <p style="font-size:18px; font-family:cursive; text-align: center;">Bốn người một phòng <br>
                            Có sẵn giường, chiếu, tủ <br>
                            Quản túc thân thiện, tận tâm <br>
                            An ninh đảm bảo <br>
                            Bên ngoài khuôn viên trường
                        </p>
                    </div>
                    <p style="font-size:30px; font-family:cursive; text-align: center; margin-top: 15px;">1.500.000 VNĐ/tháng</p>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success" style="margin-top:15px; margin-bottom: 15px; font-size: 22px;margin-left: 140px;">Đăng ký</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-top:30px; margin-bottom:30px;">
            <div class="card">
                <div class="card-header bg-success text-white" style="text-align: center; font-size: 40px;">KTX B1</div>
                <div class="card-body">
                    <div  class = "border-bottom border-1">
                        <p style="font-size:18px; font-family:cursive; text-align: center;">Bốn người một phòng <br>
                            Có sẵn giường, chiếu, tủ <br>
                            Có điều hòa, nóng lạnh, ti vi <br>
                            An ninh đảm bảo <br>
                            Ngay trong khuôn viên trường
                        </p>
                    </div>
                    <p style="font-size:30px; font-family:cursive; text-align: center; margin-top: 15px;">1.500.000 VNĐ/tháng</p>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success" style="margin-top:15px; margin-bottom: 15px; font-size: 22px; margin-left: 140px;">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="background-color:rgba(223, 228, 234,0.2); margin-top:50px; margin-bottom: 30px;">
    <h3 style="color:#2C3A47; font-family: serif; margin-left:25px; margin-top: 30px; text-align: center;"><b>LIÊN HỆ</b></h3>
    <div class="row border-top border-1">
        <div class="col-sm-4">
            <img src="view/carousel/cayXua.jpg" width="400px" height="450px">
        </div>
        <div class="col-sm-8">
            <form>
                <div class="mt-4">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="email" name="email">
                </div>
                <div class="mt-4">
                    <label for="pwd" class="form-label">Họ và tên:</label>
                    <input type="input" class="form-control" id="ten" placeholder="Họ và tên" name="ten">
                </div>
                <div class="mt-4">
                    <label for="comment">Bình luận:</label>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>

    </div>
</div>

<div class="border-bottom border-danger border-4">
    <div class="container-fluid border-top border-secondary border-1" style="background-color:#dfe4ea; margin-top:50px;">
        <h3 style="margin-left: 450px; margin-top:30px;">HỌC VIỆN CÔNG NGHỆ BƯU CHÍNH VIỄN THÔNG</h3>
        <div class="row" style="margin-top:30px; margin-right:50px; margin-left: 50px;">
            <div class="col-xl-3" style="font-size: 18px; font-family:Times New Roman;">
                <p style="margin-bottom: 50px;">
                    Trụ sở chính: <br>
                    122 Hoàng Quốc Việt, Q.Cầu Giấy, Hà <br> Nội.
                    <br><br>
                    Cơ sở đào tạo tại Hà Nội: <br>
                    Km10, Đường Nguyễn Trãi, Q.Hà Đông,<br> Hà Nội
                </p>
            </div>
            <div class="col-xl-3" style="font-size: 18px; font-family:Times New Roman;">
                <p style="margin-bottom: 50px;">
                    Học viện cơ sở tại TP. Hồ Chí Minh:<br>
                    11 Nguyễn Đình Chiểu, P. Đa Kao, Q.1 TP Hồ Chí Minh
                    <br><br>
                    Cơ sở đào tạo tại TP Hồ Chí Minh:<br>
                    Đường Man Thiện, P. Hiệp Phú, Q.9 TP Hồ Chí Minh
                </p>
            </div>
            <div class="col-sm-2">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"  style="background-color:#dfe4ea ;"><a href="#">Các khoa đào tạo</a></li>
                    <li class="list-group-item"  style="background-color:#dfe4ea ;"><a href="#">Đào tạo từ xa</a></li>
                    <li class="list-group-item"  style="background-color:#dfe4ea ;"><a href="#">sinh viên xuất sắc</a></li>
                    <li class="list-group-item"  style="background-color:#dfe4ea ;"><a href="#">Tạp chí khoa học</a></li>
                    <li class="list-group-item"  style="background-color:#dfe4ea ;"><a href="#">Tuyển dụng</a></li>
                </ul>
            </div>
            <div class="col-xl-4">
            </div>
        </div>
    </div>
</div>


<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="#">PTrang</a>
</div>
<!-- Copyright -->
</div>
<!-- Đã hết phần footer -->


<!-- sử dụng bootstrap.js -->
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>


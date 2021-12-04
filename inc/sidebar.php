<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quan ly</title>
    <!-- C2 tải về và sử dụng bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <!-- datepicker  -->
    <link href="datepicker/css/datepicker.css" rel="stylesheet" />
    <!-- KB để sử dụng icon -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- file css -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- Chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">></script>


    <!-- sử dụng bootstrap.js -->
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</head>
<style type="text/css">
    .nav-link{
        color: rgba(33, 140, 116,0.9);
    }
    .nav-link:hover, .nav-link:focus{
        color: #eb2f06;
    }
    .active{
        color: #eb2f06;
    }
</style>
<body>
<!-- Phần head -->
<!-- Chia toàn bài thành 2 cột -->
<div class="container-fluid">
    <div class="row" style="background-color:#f5f5f5;">

        <!-- cột bên trái là menu -->
        <div class="col-sm-3 fixed-top border-end border-3"style="background-color:#ffffff;">
            <nav class="navbar navbar-expand-*" >
                <button class="navbar-toggler" type="button" data-bs-toggle ="collapse" data-bs-target = "#main_nav">
                    <div class="d-flex">
                        <img src="../view/icon/redmenu.png" alt="Menu" width="48px" height="40px">
                        <h3 style="margin-left: 5px ;">
                            <b>Quản lý</b>
                        </h3>
                    </div>
                </button>
                <div class="collapse navbar-collapse show border-top scroll" id="main_nav">
                    <!-- Links -->
                    <ul class="navbar-nav" style="margin-left:30px;">
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="user.php"><img src="../view/icon/hompage.png" alt="Trang chủ" width="30px" height="30px"> <h5 style="margin-left:15px; margin-top: 8px;">Trang chủ</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="ql.php"><img src="../view/icon/overview.jpg" alt="Tổng quan" width="30px" height="30px"> <h5 style="margin-left:15px; margin-top: 8px;">Tổng quan</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="tinTuc.php"><img src="../view/icon/news.png" alt="tb" width="30px" height="33px"> <h5 style="margin-left:15px;">Quản lý tin tức</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="hocphi.php"><img src="../view/icon/hphi.png" alt="tb" width="30px" height="33px"> <h5 style="margin-left:15px;">Học phí</h5></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex dropdown-toggle" data-bs-toggle="dropdown" href="#"><img src="../view/icon/user_graduate.png" alt="sv" width="27px" height="27px"> <h5 style="margin-left:15px; margin-top: 6px;">Quản lý sinh viên</h5></a>
                            <ul class="dropdown-menu" style="border:none;">
                                <li>
                                    <a href="sv.php" class="dropdown-item">Danh Sách Sinh viên</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider"></hr>
                                </li>
                                <li>
                                    <a href="svxs.php" class="dropdown-item">Sinh viên nổi bật</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider"></hr>
                                </li>
                                <li>
                                    <a href="tk.php" class="dropdown-item">Danh sách học bổng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="mon.php"><img src="../view/icon/subject.png" alt="tb" width="27px" height="30px"> <h5 style="margin-left:15px;">Quản lý môn học</h5></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex dropdown-toggle" data-bs-toggle="dropdown" href="#"><img src="../view/icon/class..png" alt="tb" width="27px" height="30px"> <h5 style="margin-left:15px;">Lớp</h5></a>
                            <ul class="dropdown-menu" style="border:none;">
                                <li>
                                    <a href="lptc.html" class="dropdown-item">Lớp tín chỉ</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider"></hr>
                                </li>
                                <li>
                                    <a href="lphp.html" class="dropdown-item">Lớp hành chính</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="gv.html"><img src="../view/icon/lecture.png" alt="tb" width="27px" height="30px"> <h5 style="margin-left:15px;">Giảng viên</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="diem.html"><img src="../view/icon/score.png" alt="tb" width="27px" height="30px"> <h5 style="margin-left:15px;">Điểm</h5></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-sm-3"></div>
        <!-- Cột bên phải -->
        <div class="col-sm-9" >
            <div class="row collapse show"id="main_nav">
                <div class="col-sm-7">
                    <div style="font-family: Georgia;">
                        <h1 style="font-size:20px; margin-top:15px;">HỌC VIỆN CÔNG NGHỆ BƯU CHÍNH VIỄN THÔNG</h1>
                        <h4 style="font-size:13px; color:#c23616;">Posts and Telecommunication Institute of Technology</h4>
                    </div>
                </div>
                <div class="col-sm-5 d-flex d-inline-flex justify-content-end">
                    <nav class="navbar navbar-expand-sm">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="view/icon/person.png" width="30px" height="30px"></a>
                                <ul class="dropdown-menu" style="border: none; background-color:#f5f5f5">
                                    <li> <a href="#" class="dropdown-item">Thông tin cá nhân</a></li>
                                    <li> <a href="#" class="dropdown-item">Sửa thông tin cá nhân</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <script>
                        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                            return new bootstrap.Tooltip(tooltipTriggerEl)
                        })
                    </script>
                    <a class="nav-link d-flex d-inline-flex"href="index.html"style="margin-top: 15px;" data-bs-toggle ="tooltip" title="Đăng xuất"><img src="view/icon/logout.png" alt="logout" width="24px" height="24px"></a>
                    <a class="nav-link d-flex d-inline-flex"href="#"style="margin-top: 15px;" data-bs-toggle ="tooltip" title="Thông tin chi tiết"><img src="view/icon/morein4.png" alt="logout" width="24px" height="24px"></a>
                </div>
            </div>

<?php
    session_start();
    if($_SESSION["access"] == "user"){
        header("location: index.php");
    }
    //get sidebar content
    require "inc/sidebar.php";
?>
            <div class="container-fluid border border-2 p-5 mt-4 rounded-3" style="background-color:rgba(33, 140, 116,0.6); margin-left: -8px;" >
                <div class="row"style=" margin-top:10px;">
                    <div class="col-sm-6">
                        <a class="aStyle d-flex" href="#"><img src="view/icon/overview.jpg" alt="Trang chủ" width="40px" height="40px"> <h3 style="margin-left:15px; margin-top: 8px;">Tổng quan</h3>
                        </a>
                        <p style="color: #ffffff;">Quản lí> Tổng quan</p>
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
                <div class="row">
                    <div class="col-sm-7">
                        <div class="container rounded-3 border border-2"style="background-color: #ffffff; margin-top:-60px">
                            <b style="color:#576574; font-size:13px;">Số lượng sinh viên qua các năm gần đây</b>
                            <canvas id="myChart" style=" width: 600px; height: 400px; margin-top: 10px;"></canvas>
                        </div>
                        <script>
                            var xValues = [2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021];
                            var yValues = [1900, 2000, 2100, 2400, 2600, 2800, 3100, 3500];

                            new Chart("myChart", {
                                type: "line",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        fill: false,
                                        lineTension:0,
                                        backgroundColor:"rgba(33, 140, 116,0.6)",
                                        borderColor:"rgba(33, 140, 116,0.6)",
                                        data: yValues
                                    }]
                                },
                                options: {
                                    legend: {display: false},
                                    scales: {
                                        yAxes: [{ticks: {min: 500, max:4000}}],
                                    }
                                }
                            });
                        </script>
                    </div>
                    <div class="col-sm-5">
                        <div class="container rounded-3 border border-3" style="background-color: #ffffff; margin-top:-60px">
                            <canvas id="myChart1" style="width: 600px; height: 645px;"></canvas>
                        </div>
                        <script>
                            var xValues = ["Xuất sắc", "Giỏi", "Khá", "Trung bình", "Yếu"];
                            var yValues = [15, 20, 50, 16, 4];
                            var barColors = [
                                "#b91d47",
                                "#00aba9",
                                "#2b5797",
                                "#e8c3b9",
                                "#1e7145"
                            ];

                            new Chart("myChart1", {
                                type: "doughnut",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        backgroundColor: barColors,
                                        data: yValues
                                    }]
                                },
                                options: {
                                    title: {
                                        display: true,
                                        text: "Tỉ lệ Xếp loại"
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
                <div class="container rounded-3 p-3" style="margin-top: 20px; background-color:#1e272e;color:#ffffff;">
                    <i style=" font-family: cursive; font-size:15px; margin-left:300px;">"Thời gian là thước đo chính xác nhất dành cho sự cố gắng hết mình"</i>
                </div>
                <div class="container border-1 border-top" style="background-color:#ffffff; margin-top: 20px;">
                    <div class="row">
                        <h3 style="font-family: serif; font-size: 20px; margin-top: 10px;">
                            Danh sách sinh viên đạt học bổng
                        </h3>
                        <table class="table table-bordered table-sm table-hover" style="margin-top:20px;">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ và tên</th>
                                <th>Mã sinh viên</th>
                                <th>Mã lớp</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hoàng Thị Thu Hằng</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nguyễn Thị Thu Hường</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Trần Vương Đạt</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Đinh Thái Sơn</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Nguyễn Lan Hương</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Nguyễn Thành Luân</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Phạm Ngọc Dũng</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Phạm Thị Quỳnh Trang</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Trần Anh Anh</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Phạm Thanh Thu</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Phạm Thị Quỳnh Trang</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container rounded-3 p-3" style="margin-top: 20px; background-color:#1e272e;color:#ffffff;">
                    <i style=" font-family: cursive; font-size:15px; margin-left:300px;">"Thời gian là thước đo chính xác nhất dành cho sự cố gắng hết mình"</i>
                </div>
                <div class="container border-1 border-top" style="background-color:#ffffff; margin-top: 20px;">
                    <div class="row">
                        <h3 style="font-family: serif; font-size: 20px; margin-top: 10px;">
                            Danh sách Giảng viên xuất sắc
                        </h3>
                        <table class="table table-bordered table-sm table-hover" style="margin-top:20px;">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ và tên</th>
                                <th>Mã giảng viên</th>
                                <th>Chuyên ngành</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hoàng Thị Thu Hằng</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nguyễn Thị Thu Hường</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Trần Vương Đạt</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Đinh Thái Sơn</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Nguyễn Lan Hương</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Nguyễn Thành Luân</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Phạm Ngọc Dũng</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Phạm Thị Quỳnh Trang</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Trần Anh Anh</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Phạm Thanh Thu</td>
                                <td>GVP12345</td>
                                <td>Công nghệ thông tin</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
<?php
require "inc/footer.php";

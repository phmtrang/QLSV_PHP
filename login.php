<?php
session_start();
//login form different empty
if(isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != ''){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user WHERE userName = '$username' AND password ='$password' ";
    $conn =mysqli_connect("localhost","root", "trang1034408043", "qlsv");
    mysqli_set_charset($conn, "utf8");
    if($conn -> connect_errno){
        exit();
    }
    $user = mysqli_query($conn, $sql);
    if(mysqli_num_rows($user) > 0){
        if($username == "admin") {
            $_SESSION["access"] = "admin";
            header("Location: ql.php");
        }else {
            $_SESSION["access"] = "user";
            header("Location: user.php");
        }
    }
    else{
        header("location: index.php");
    }
}else{
    header("location: index.php");
}

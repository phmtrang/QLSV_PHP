//them tin tuc moi
<?php
require_once "database/dbhelp.php";
$image=$tieuDe=$nd='';
if(isset($_POST['save_profile'])){
    if(isset($_POST['tieude'])){
        $tieuDe = $_POST['tieude'];
    }
    if(isset($_POST['nd'])){
        $nd = $_POST['nd'];
    }
    $image=$_FILES['image']['name'];
    //them file vào folder
    $target_dir="view/";
    $target_file=$target_dir . basename($image);
//them vào DB
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
        $sql = "insert into tintucnoibat(tieuDe, ha, nd) value('$tieuDe', '$image', '$nd')";
        execute($sql);
        header('location:tintuc.php');
    }
}
?>

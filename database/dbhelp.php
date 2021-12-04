<?php
require_once ('config.php');
/*
 * insert, update, delete
*/
function execute($sql){
    //connect DB
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //query
    mysqli_query($conn, $sql);
    //close
    mysqli_close($conn);
}
// return result
function executeResult($sql){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //query
    $result = mysqli_query($conn, $sql);
    $list = [];
    while ($row = mysqli_fetch_array($result, 1)){
        $list[] = $row;
    }
    //close
    mysqli_close($conn);
    return $list;
}
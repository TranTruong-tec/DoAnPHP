<?php
// session_start();

// if ($_SESSION['Email'] == 'truong@gmail.com' && $_SESSION['MatKhau'] == '123') {
    $IDDon = $_GET['IDDon'];
    include_once './db_config.php';
    $sql = "DELETE FROM donhang WHERE IDDon = '$IDDon'";
    $query = mysqli_query($conn, $sql);
    header('location: index.php?page=donhang');
    # code...

// else {
//     header('location:index.php');
// }

?>
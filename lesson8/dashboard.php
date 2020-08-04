<?php
session_start();

// Kiểm tra user đã đăng nhập hay chưa 
// nếu chưa đăng nhập thì sẽ không đc hiển thị mà quay lại trang login
if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
    header('location: login.php?msg=Bạn chưa đăng nhập');
    die;
}

?>

<h2>Xin chào, <?= $_SESSION['auth']['name']?></h2>
<a href="logout.php">Đăng xuất</a>
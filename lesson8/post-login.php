<?php
session_start(); // bắt buộc phải viết hàm này ở đầu file
require_once './db.php';

$email = $_POST['email'];
$password = $_POST['password'];

// dựa vào email để lấy user ra
$getUserByEmailQuery = "select * from users where email = '$email'";
$stmt = getDbConnect()->prepare($getUserByEmailQuery);
$stmt->execute();
$user = $stmt->fetch();

// kiểm tra mật khẩu nhập vào có khớp với mk trong db hay không
if($user && password_verify($password, $user['password'])){
    // tạo session mới lưu thông tin của người đang đăng nhập
    $_SESSION['auth'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'email' => $user['email']
    ];
    header('location: dashboard.php');
    die;
}
header('location: login.php?msg=Tài khoản/mật khẩu không đúng!');


?>
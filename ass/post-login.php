<?php
session_start();
require_once './lib/common.php';
require_once './lib/db.php';

$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";

// validate
// lấy user dựa vào email
$getUserByEmailQuery = "select * from users where email = '$email'";
$connect = getDbConnect();
$stmt = $connect->prepare($getUserByEmailQuery);
$stmt->execute();
$user = $stmt->fetch();

// kiểm tra xem có user hay không
// nếu có thì so sánh mk nhập vào với mk trong db xem có khớp không
if($user && password_verify($password, $user['password'])){
    $_SESSION['auth'] = [
        'name' => $user['name'],
        'email' => $user['email'],
        'avatar' => $user['avatar']
    ];
    header('location: ' . BASE_URL . "?msg=đăng nhập thành công");
    die;
}
header("location: " . BASE_URL . "login.php");

?>
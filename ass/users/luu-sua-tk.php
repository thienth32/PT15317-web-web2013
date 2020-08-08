<?php
session_start();
require_once '../lib/db.php';
require_once "../lib/common.php";
checkAuth();
// lấy id trên đường dẫn xuống
$userId = isset($_GET['id']) ? $_GET['id'] : -1;
// kiểm tra xem id có tồn tại trong db hay không 
$connect = getDbConnect();
$getUserByIdQuery = "select * from users where id = $userId";
$stmt = $connect->prepare($getUserByIdQuery);
$stmt->execute();
$user = $stmt->fetch(); 

if(!$user){
    header("location: " . BASE_URL . "?msg=user không tồn tại");
    die;
}

// lấy thông tin từ form sau đó validate dữ liệu
$name = trim($_POST['name']);
$nameErr = "";

$birth_date = $_POST['birth_date'];
$avatar = $_FILES['avatar'];

if(strlen($name) == 0){
    $nameErr = "Hãy nhập họ và tên";
}
// ktra số lượng ký tự
if($nameErr === "" && (strlen($name) < 4 || strlen($name) > 30)){
    $nameErr = "Độ dài họ và tên nằm trong khoảng 4 - 30 ký tự";
}

if($nameErr != ""){
    header('location: ' . BASE_URL . "users/edit.php?nameerr=$nameErr");
    die;
}
// bằng đường dẫn ảnh đang có trong db
$path = $user['avatar'];

// 3.1 thực hiện lưu ảnh
if($avatar['size']>0){
    $filename = uniqid() . "-" . $avatar["name"];
    move_uploaded_file($avatar["tmp_name"], '../public/uploads/' . $filename);
    $path = 'public/uploads/' . $filename;
}

$updateUserSql = "update users 
                    set 
                        name = '$name',
                        avatar = '$path',
                        birth_date = '$birth_date'
                  where id = $userId ";

$stmt = $connect->prepare($updateUserSql);
$stmt->execute();

header("location: " . BASE_URL . "?msg=Cập nhật tài khoản thành công");

?>
<?php
require_once './lib/db.php';
require_once "./lib/common.php";
// xử lý dữ liệu để tạo ra tk trong csdl

// 1. Nhận dữ liệu từ request
$name = trim($_POST['name']);
$nameErr = "";
// ktra rỗng
if(strlen($name) == 0){
    $nameErr = "Hãy nhập họ và tên";
}
// ktra số lượng ký tự
if($nameErr === "" && (strlen($name) < 4 || strlen($name) > 30)){
    $nameErr = "Độ dài họ và tên nằm trong khoảng 4 - 30 ký tự";
}

$email = $_POST['email'];
$emailErr = "";
$password = $_POST['password'];
$passwordErr = "";

$cfpassword = $_POST['cfpassword'];
$birth_date = $_POST['birth_date'];
$avatar = $_FILES['avatar'];

if($nameErr.$emailErr.$passwordErr != ""){
    header('location: ' . BASE_URL . "tao-tk.php?nameerr=$nameErr&emailerr=$emailErr&passworderr=$passwordErr");
    die;
}

$path = "";
// 2. Kiểm tra dữ liệu (validate)
// 3. Xử lý dữ liệu (bao gồm lưu ảnh)
// 3.1 thực hiện lưu ảnh
if($avatar['size']>0){
    $filename = uniqid() . "-" . $avatar["name"];
    move_uploaded_file($avatar["tmp_name"], './public/uploads/' . $filename);
    $path = 'public/uploads/' . $filename;
}
// mã hóa mật khẩu
$hashPassword = password_hash($password, PASSWORD_DEFAULT);
// 4. Tạo câu query để insert data
$insertQuery = "insert into users 
                    (name, email, avatar, 
                    password, role, birth_date)
                values 
                    ('$name', '$email', '$path', 
                    '$hashPassword', 1, '$birth_date')";
// var_dump($insertQuery);
// die;
// 5. Thực thi câu query với csdl
$connect = getDbConnect();
$stmt = $connect->prepare($insertQuery); // nạp câu sql query vào trong kết nối
$stmt->execute(); // thực thi lệnh với csdl
// 6. Điều hướng về trang danh sách
header("location: " . BASE_URL);


?>
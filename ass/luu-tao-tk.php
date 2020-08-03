<?php
require_once './lib/db.php';
require_once "./lib/common.php";
// xử lý dữ liệu để tạo ra tk trong csdl

// 1. Nhận dữ liệu từ request
$name = trim($_POST['name']);
$nameErr = "";

$email = $_POST['email'];
$emailErr = "";

$password = $_POST['password'];
$passwordErr = "";

$cfpassword = $_POST['cfpassword'];
$cfpasswordErr = "";

$birth_date = $_POST['birth_date'];
$avatar = $_FILES['avatar'];

// 2. Kiểm tra dữ liệu (validate)
// ktra rỗng
if(strlen($name) == 0){
    $nameErr = "Hãy nhập họ và tên";
}
// ktra số lượng ký tự
if($nameErr === "" && (strlen($name) < 4 || strlen($name) > 30)){
    $nameErr = "Độ dài họ và tên nằm trong khoảng 4 - 30 ký tự";
}

// ít nhất 6 ký tự
// không chứa dấu cách
$removeWhiteSpacePassword = str_replace(" ", "", $password);
if(strlen($password < 6) || (strlen($removeWhiteSpacePassword) != strlen($password))){
    $passwordErr = "Mật khẩu không thỏa mãn đk (ít nhất 6 ký tự và không chứa khoảng trắng)";
}

// giống với xác nhận mk
if($password != $cfpasswordErr){
    $cfpasswordErr = "Mật khẩu và xác nhận mật khẩu không khớp";
}

if($nameErr.$emailErr.$passwordErr.$cfpasswordErr != ""){
    header('location: ' . BASE_URL . "tao-tk.php?nameerr=$nameErr&emailerr=$emailErr&passworderr=$passwordErr&cfpassworderr=$cfpasswordErr");
    die;
}
// 3. Xử lý dữ liệu (bao gồm lưu ảnh)
$path = "";
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

                    // 5. Thực thi câu query với csdl
$connect = getDbConnect();
$stmt = $connect->prepare($insertQuery); // nạp câu sql query vào trong kết nối
$stmt->execute(); // thực thi lệnh với csdl
// 6. Điều hướng về trang danh sách
header("location: " . BASE_URL);


?>
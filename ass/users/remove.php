<?php
require_once '../lib/db.php';
require_once "../lib/common.php";

// lấy id trên đường dẫn xuống
$userId = isset($_GET['id']) ? $_GET['id'] : -1;

$connect = getDbConnect();
$getUserByIdQuery = "delete from users where id = $userId";
$stmt = $connect->prepare($getUserByIdQuery);
$stmt->execute();

header("location: " . BASE_URL . "?msg=Xóa tài khoản thành công");

?>
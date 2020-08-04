<?php
session_start();
// lấy dữ liệu từ form gửi sang
$email = isset($_POST['email']) ? $_POST['email'] : "";

// lấy dữ liệu hiện tại của session email list
$emailList = isset($_SESSION['email_list']) ? $_SESSION['email_list'] : [];
if($email != ""){
    // add giá trị vào session email list
    $emailList[] = $email;

    // gán ngược dữ liệu lại cho session
    $_SESSION['email_list'] = $emailList;
}
header("location: b1.php");

?>
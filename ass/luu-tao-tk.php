<?php
// xử lý dữ liệu để tạo ra tk trong csdl

// 1. Nhận dữ liệu từ request
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cfpassword = $_POST['cfpassword'];
$birth_date = $_POST['birth_date'];
$avatar = $_FILES['avatar'];
// 2. Kiểm tra dữ liệu (validate)
// 3. Xử lý dữ liệu (bao gồm lưu ảnh)
// 4. Tạo câu query để insert data
// 5. Thực thi câu query với csdl
// 6. Điều hướng về trang danh sách


?>
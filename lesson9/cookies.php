<?php 

// tạo ra 1 cookies mới
$name = "USER_NAME";
$value = "FPT polytechnic";
$expireTime = strtotime("+5 minutes");

setcookie($name, $value, $expireTime, "/");

echo "Hãy kiểm tra cookies ở trình duyệt";
?>
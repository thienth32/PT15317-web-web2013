<?php
$gender = rand(0, 4);
if($gender == 0){
    $str = "Nữ";
}else if($gender == 1){
    $str = "Nam";
}else if($gender == 2){
    $str = "Đồng tính";
}else if($gender == 3){
    $str = "Lưỡng tính";
}else{
    $str = "Không xác định giới tính";
}

echo $str;


?>
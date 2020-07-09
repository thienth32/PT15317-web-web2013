<?php

$str1 = "something";
$str2 = "someone";


// echo $str1." ".$str2;
$a = 5; $b =6; $c=7;

// if($a+$b>$c && $a+$c>$b && $b+$c>$a){
//     echo "Đủ đk hình thành tam giác";
// }


// if($a+$b<=$c || $a+$c<=$b || $b+$c<=$a){
//     echo "Khong hinh thanh tam giac";
// }

// $a = 0;
// if(!$a){
//     echo "Chạy rồi";
// }
// $a = 5;
// echo (++$a)-(--$a)+($a--)+($a++)+4;
// echo "<br>";
// echo $a;
$tong = 0;
for ($i=0; $i <= 5000; $i++) { 
    $tong+=$i;
}

$tong += 0; // => $tong = $tong + 0;
$tong += 1; // => $tong = $tong + 1; => 1
$tong += 2; // => $tong = $tong + 2; => 1 + 2 => 3
echo $tong;




?>
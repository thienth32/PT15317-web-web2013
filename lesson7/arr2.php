<?php
$arr = [];
for ($i=0; $i < 10; $i++) { 
    $arr[] = rand(1, 6);
}

echo "<pre>";
var_dump($arr);
// yêu cầu:
// Lọc ra 1 mảng mới bao gồm các phần tử là số chẵn và 
// nằm trong khoảng từ 20 - 30

// b2: tìm ra 1 mảng chứa các phần tử không trùng nhau từ mảng gốc
$arr2 = [];
for ($i=0; $i < count($arr); $i++) { 
    $duplicate = false;
    for ($j=$i+1; $j < count($arr); $j++) { 
        if($arr[$i] == $arr[$j]){
            $duplicate = true;
            break;
        }
    }

    if($duplicate == false){
        $arr2[] = $arr[$i];
    }
}
var_dump($arr2);
?>
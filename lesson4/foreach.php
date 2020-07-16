<?php
// $arr = [];
// for ($i=0; $i < 100; $i++) { 
//     $arr[] = rand(1, 1000);
// }
$arr = [
    "name" => "FPT polytechnic",
    "age" => 10,
    "address" => "Số 1, Trịnh Văn Bô"
];

// echo $arr["age"];

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i] . "<br>";
// }
$count = 1;

foreach ($arr as $key => $value) {
    echo $count . '.' .$key . "----" . $value . "<br>";
    $count++;
}


?>
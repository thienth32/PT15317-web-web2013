<?php
// tham trị = tham số + nhận giá trị
// tham chiếu = tham số + nhận hình chiếu (địa chỉ)

/* 
$a = 5;

function change($x){
    $x = $x + 9;

}

change($a);


echo $a;
*/

$a = 5;

function change(){

    global $a;
    $a = $a + 9;
    echo $a;
    echo "<br>";

}

change();


echo $a;




?>
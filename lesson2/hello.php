<?php

$age = 20;
$isMarried = false;




$yourName = "Nguyen Phuong Hoa $age";
$school = 'fpt poly $age';

$sql = "select * from users where name like '%$yourName%'";
$sql2 = 'select * from users where age > ' . "'%$yourName%'";

var_dump($yourName, $school);die;

echo 123;


?>

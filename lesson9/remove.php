<?php

$name = "USER_NAME";
$value = "FPT polytechnic";
$expireTime = strtotime("-2 years");

setcookie($name, $value, $expireTime, "/");

?>
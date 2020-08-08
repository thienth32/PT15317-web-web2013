<?php
define("BASE_URL", "http://localhost/pt15317-web/ass/");

function datetimeConvert($datetimeData, $formatString = "d/m/Y"){
    $date = new DateTime($datetimeData);
    return $date->format($formatString);
}

function checkAuth(){
    if(!isset($_SESSION['auth']) || !$_SESSION['auth']){
        header('location: '.BASE_URL . 'login.php');
        die;
    }
}

?>
<?php
// Hàm trả về kết nối với csdl
function getDbConnect(){
    $host = "127.0.0.1";
    $dbname = "pt15317-web";
    $dbusername = "root";
    $dbpass = "123456";
    return new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                                        $dbusername, $dbpass);
}

?>
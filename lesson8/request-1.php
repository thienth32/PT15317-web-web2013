<?php
session_start();
$_SESSION['username'] = "fpt polytechnic";


echo $_SESSION['username'];

?>
<br>
<a href="request-2.php">Link sang request 2</a>
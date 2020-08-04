<?php 
session_start();
$emailList = isset($_SESSION['email_list']) ? $_SESSION['email_list'] : [];

// $emailList = [
//     'thienth@gmail.com',
//     'daotaopoly.hn@fpt.edu.vn'
// ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Danh sách email</h3>
    <ul>
        <?php foreach($emailList as $e):?>
        <li><?= $e ?></li>
        <?php endforeach?>
    </ul>
    <form action="b1-submit.php" method="post">
        Nhập email: <input type="text" name="email">
        <br>
        <button type="submit">Gửi</button>
    </form>
</body>
</html>
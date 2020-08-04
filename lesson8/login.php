<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <p style="color: red;"><?= $_GET['msg']?></p>
    <form action="post-login.php" method="post">
        <div>
            email: <input type="text" name="email">
        </div>
        <div>
            password: <input type="password" name="password">
        </div>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
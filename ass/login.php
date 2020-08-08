<?php
require_once "./lib/common.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <?php include_once "./_share/style.php" ?>
</head>
<body>
    <?php include_once "./_share/header.php" ?>  
    <main class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <h3>Đăng nhập</h3>
                    <form action="<?= BASE_URL ?>post-login.php" method="post">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-sm btn-info">Login</button>
                            <a href="<?= BASE_URL ?>" class="btn btn-sm btn-danger">Hủy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
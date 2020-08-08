<?php
session_start();
require_once "../lib/common.php";
checkAuth();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT15317-web Assignment</title>
    <?php include_once "../_share/style.php" ?>
</head>
<body>
    <?php include_once "../_share/header.php" ?>  
    <main class="container-fluid">
        <!-- Form tạo mới tk -->
        <h3>Tạo mới tài khoản</h3>
        <form action="<?= BASE_URL ?>users/luu-tao-tk.php" method="POST" 
                enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Họ và tên</label>
                        <input type="text" name="name" class="form-control">
                        <?php if(isset($_GET['nameerr'])):?>
                            <span class="text-danger"><?= $_GET['nameerr'] ?></span>
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" name="password" class="form-control">
                        <?php if(isset($_GET['passworderr'])):?>
                            <span class="text-danger"><?= $_GET['passworderr'] ?></span>
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="">Xác nhận mật khẩu</label>
                        <input type="password" name="cfpassword" class="form-control">
                        <?php if(isset($_GET['cfpassworderr'])):?>
                            <span class="text-danger"><?= $_GET['cfpassworderr'] ?></span>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Ảnh đại diện</label>
                        <input type="file" name="avatar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Ngày sinh</label>
                        <input type="text" name="birth_date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-info">Lưu</button>
                &nbsp;
                <a href="<?= BASE_URL ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </form>
    </main>
</body>
</html>
<?php
session_start();
require_once "../lib/db.php";
require_once "../lib/common.php";
checkAuth();
$userId = isset($_GET['id']) ? $_GET['id']: 0;

$connect = getDbConnect();
$getUserByIdQuery = "select * from users where id = $userId";
$stmt = $connect->prepare($getUserByIdQuery);
$stmt->execute();
$user = $stmt->fetch(); 
// fetch => tìm ra bản ghi đầu tiên thỏa mãn câu sql => [ 'id' => xxx, 'name' => 'xxx' ]
// fetchAll => tìm ra tất cả các bản ghi thỏa mãn câu sql => [ [], [], [] ]

if(!$user){
    header("location: " . BASE_URL);
    die;
}

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
        <h3>Chỉnh sửa tài khoản</h3>
        <form action="<?= BASE_URL ?>users/luu-sua-tk.php?id=<?= $user['id'] ?>" 
                method="POST" 
                enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Họ và tên</label>
                        <input type="text" name="name"
                            value="<?= $user['name'] ?>"
                            class="form-control">
                        <?php if(isset($_GET['nameerr'])):?>
                            <span class="text-danger"><?= $_GET['nameerr'] ?></span>
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" disabled 
                            value="<?= $user['email'] ?>"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Ngày sinh</label>
                        <input type="date" name="birth_date" 
                            value="<?= $user['birth_date'] ?>"
                            class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-4 offset-4">
                            <img src="<?= BASE_URL . $user['avatar'] ?>" class="img-fluid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh đại diện</label>
                        <input type="file" name="avatar" class="form-control">
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
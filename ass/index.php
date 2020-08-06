<?php
require_once "./lib/db.php";
require_once "./lib/common.php";
// lấy dữ liệu từ trên url => keyword
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";


// query lấy danh sách user từ db
$getUserQuery = "select * from users";

if($keyword !== ""){
    $getUserQuery .= " where name like '%$keyword%' or email like '%$keyword%' ";
}

$connect = getDbConnect();
$stmt = $connect->prepare($getUserQuery);
$stmt->execute();
$users = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách users</title>
    <?php include_once "./_share/style.php" ?>
</head>
<body>
    <?php include_once "./_share/header.php" ?>  
    <main class="container-fluid">
    <!-- Hiển thị danh sách users -->
        <div class="container">
            <br>
            <form action="" method="get">
                <div class="form-group row">
                    <label for="" class="col-sm-1 col-form-label">Từ khóa</label>
                    <div class="col-sm-4">
                        <input type="text" name="keyword" class="form-control" value="<?= $keyword ?>">
                    </div>
                </div>
            </form>
            <table class="table table-stripped">
                <thead>
                    <th>id</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th width="70">Ảnh</th>
                    <th>Ngày sinh</th>
                    <th width="100">
                        <a href="<?= BASE_URL?>users/tao-tk.php" class="btn btn-sm btn-success">
                        Tạo mới
                        </a>
                    </th>
                </thead>
                <tbody>
                    <?php foreach ($users as $key => $cursor): ?>
                        <tr>
                            <td><?= $cursor['id'] ?></td>
                            <td><?= $cursor['name'] ?></td>
                            <td><?= $cursor['email'] ?></td>
                            <td>
                                <img src="<?= BASE_URL . $cursor['avatar'] ?>" class="img-fluid">
                            </td>
                            <td>
                                <?= datetimeConvert($cursor['birth_date'], "d/m/Y")?>
                            </td>
                            <td>
                                <a href="<?= BASE_URL?>users/edit.php?id=<?= $cursor['id'] ?>"
                                    class="btn btn-info btn-sm"
                                >
                                Sửa
                                </a>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>
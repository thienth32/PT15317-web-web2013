<?php
session_start();
require_once "./data.php";
$productOnCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$totalProductOnCart = 0;
$totalPrice = 0;
foreach ($productOnCart as $item) {
    $totalProductOnCart += $item['quantity'];
    $totalPrice += $item['quantity']*$item['price'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>Danh sách sp trong giỏ hàng <?= $totalProductOnCart ?> (Sản phẩm)</legend>
        <?php foreach ($productOnCart as $cursor):?>
        <div>
            <p>Tên sản phẩm: <?= $cursor['name']?> - Số lượng: <?= $cursor['quantity']?></p>
        </div>
        <?php endforeach ?>
        <p>Tổng tiền: <?= number_format($totalPrice, 0, ".", ",")?> vnd</p>
    </fieldset>
    <table border="1">
        <thead>
            <th>Mã SP</th>
            <th>Tên SP</th>
            <th>Giá</th>
            <th>Lựa chọn</th>
        </thead>
        <tbody>
            <?php foreach ($products as $index => $item):?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['price'] ?></td>
                    <td>
                        <a href="add-to-cart.php?id=<?= $item['id'] ?>">Thêm giỏ hàng</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
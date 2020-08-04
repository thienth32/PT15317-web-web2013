<?php 
session_start();
$products = isset($_SESSION['product_list']) ? $_SESSION['product_list'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="b2-submit.php" method="post">
        <div>
            Tên sản phẩm
            <input type="text" name="name">
        </div>
        <div>
            Mã sản phẩm
            <input type="text" name="product_id">
        </div>
        <div>
            Ảnh
            <input type="text" name="image">
        </div>
        <div>
            Giá
            <input type="number" name="price">
        </div>
        <button type="submit"> Lưu </button>
    </form>
    <!-- danh sách các sản phẩm -->
</body>
</html>
<?php
session_start();
require_once "../lib/db.php";
require_once "../lib/common.php";
// lấy id từ đường dẫn
$id = $_GET['id'];

// dựa vào id để truy vấn ra dữ liệu của sản phẩm
$getProductById = "select * from products where id = $id";
$connect = getDbConnect();
$stmt = $connect->prepare($getProductById);
$stmt->execute();
$product = $stmt->fetch();

// lấy danh sách tất cả các danh mục
$getCategoryQuery = "select * from categories";
$stmt = $connect->prepare($getCategoryQuery);
$stmt->execute();
$cates = $stmt->fetchAll();

// sinh ra màn hình sửa sản phẩm (gần tương tự như màn hình thêm mới)

?>

<fieldset>
    <legend>Cập nhật sản phẩm</legend>
    <form action="<?= BASE_URL . "san-pham/luu-sua.php?id=" . $product['id'] ?>"
        method="POST" enctype="multipart/form-data"
    >
        <div>
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" value="<?= $product['name']?>">
        </div>
        <div>
            <label for="">Danh mục</label>
            <select name="cate_id" >
                <?php foreach ($cates as $c):?>
                    <option 
                        <?php if($c['id'] == $product['cate_id'] ): ?>
                            selected
                        <?php endif ?>
                        value="<?= $c['id'] ?>">
                        <?= $c['name']?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
    </form>
</fieldset>
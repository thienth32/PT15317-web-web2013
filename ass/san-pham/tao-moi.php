<?php
session_start();
require_once "../lib/db.php";
require_once "../lib/common.php";

// truy vấn toàn bộ dữ liệu của bảng categories
$getCategoryDataQuery = "select * from categories";
$connect = getDbConnect();
$stmt = $connect->prepare($getCategoryDataQuery);
$stmt->execute();
$cates = $stmt->fetchAll();

// form tạo mới
// name: input text
// main_image: input file
// price: input number
// detail: textarea
// cate_id: select

?>
<fieldset>
    <legend>Tạo mới sản phẩm</legend>
    <form action="<?= BASE_URL . "san-pham/luu-tao-moi.php"?>"
        method="POST" enctype="multipart/form-data"
    >
        <div>
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Danh mục</label>
            <select name="cate_id" >
                <?php foreach ($cates as $c):?>
                    <option value="<?= $c['id'] ?>">
                        <?= $c['name']?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
    </form>
</fieldset>
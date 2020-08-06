<?php
session_start();
require_once "./data.php";
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$productId = $_GET['id'];
$product = [];
// Tìm ra sản phẩm dựa vào id
foreach ($products as $item) {
    if($item['id'] == $productId){
        $product = $item;
        break;
    }
}
// kiểm tra trong giỏ hàng có sản phẩm cần thêm hay không ?
$flag = -1;
foreach ($cart as $index => $cursor) {
    if($cursor['id'] == $product['id']){
        $flag = $index;
        break;
    }
}
// nếu không tìm thấy sp trong giỏ hàng 
if($flag == -1){
    // => thêm thuộc tính & giá trị cho quantity = 1
    $product['quantity'] = 1;
    // push sản phẩm vào biến giỏ hàng
    $cart[] = $product;
}else{ // có tồn tại sản phẩm trong giỏ hàng
    // cộng thêm số lượng cho sản phẩm tại vị trí index flag
    $cart[$flag]['quantity']++;
}
$_SESSION['cart'] = $cart;

header("location: index.php");

?>
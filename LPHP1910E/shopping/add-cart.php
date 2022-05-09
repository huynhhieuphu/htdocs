<?php
session_start();
require "data/product.php";
$products = getDataProduct();

$idProduct = $_GET['id'] ?? '';
$idProduct = is_numeric($idProduct) ? $idProduct : 0;

// lấy sản phẩm theo id nằm trong mảng $products
$data = [];
foreach ($products as $key => $item) {
    if ($item['id'] == $idProduct) {
        $data = $item;
    }
}
// add sản phẩm vào giỏ hàng
if (!empty($data)) {
    // Kiểm tra giỏ hành có rỗng không
    if (isset($_SESSION['cart'])) {
        // đã tồn giỏ hàng, giỏ hàng đã có ít nhất 1 sản phẩm
        // Nếu sản phẩm đã tồn tại sẽ tăng sản phẩm lên 1
        if(isset($_SESSION['cart'][$idProduct])){
            $_SESSION['cart'][$idProduct]['quantity'] += 1;
        }else{
            // còn nếu chưa thì thêm vào bình htường
            $_SESSION['cart'][$idProduct]['id'] = $data['id'];
            $_SESSION['cart'][$idProduct]['name'] = $data['name'];
            $_SESSION['cart'][$idProduct]['image'] = $data['image'];
            $_SESSION['cart'][$idProduct]['price'] = $data['price'];
            $_SESSION['cart'][$idProduct]['quantity'] = 1;
        }
    } else {
        // chưa tồn tại giỏ hàng, Thêm mới giỏ hàng -> tạo giỏ hàng
        $_SESSION['cart'][$idProduct]['id'] = $data['id'];
        $_SESSION['cart'][$idProduct]['name'] = $data['name'];
        $_SESSION['cart'][$idProduct]['image'] = $data['image'];
        $_SESSION['cart'][$idProduct]['price'] = $data['price'];
        $_SESSION['cart'][$idProduct]['quantity'] = 1;
    }

    // sang trang xem giỏ hàng
    header("Location: view-cart.php");
} else {
    header("Location: index.php?state=empty");
}
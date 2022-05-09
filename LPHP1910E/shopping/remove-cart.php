<?php
    session_start();
    $idProduct = $_POST["id"] ?? '';
    $idProduct = is_numeric($idProduct) ? $idProduct : 0;

    // Xoá sản phẩm trong giỏ hàng
    // Kiểm tra sản phẩm cần xoá tồn tại trong giỏ hàng không?
    if(isset($_SESSION["cart"]["$idProduct"])){
        unset($_SESSION["cart"]["$idProduct"]);
        echo "success";
    }else{
        echo "error";
    }
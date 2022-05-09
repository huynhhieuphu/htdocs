<?php
    require 'models/products.php';

    function index(){
        $cart = $_SESSION['cart'] ?? '';
        require 'views/listCart_view.php';
    }

    function add(){
        $idProduct = $_GET['id'] ?? '';
        $idProduct = is_numeric($idProduct) ? $idProduct : 0;

        $product = getDataByIdProd($idProduct);
        if(empty($product)){
            header('location: index.php?c=error');
        }else{
            // thêm vào giỏ hàng (bằng SESSION)
            if(!isset($_SESSION['cart'])){
                // tạo giỏ hàng
                $_SESSION['cart'][$idProduct]['id'] = $product['id'];
                $_SESSION['cart'][$idProduct]['name'] = $product['name'];
                $_SESSION['cart'][$idProduct]['price'] = $product['price'];
                $_SESSION['cart'][$idProduct]['images'] = $product['images'];
                $_SESSION['cart'][$idProduct]['quantity'] = 1;
            }else{
                // thêm sp tiếp giỏ hàng
                // kiểm tra sp tồn tại chưa
                if(isset($_SESSION['cart'][$idProduct]['id'])){
                    // cập nhật số lượng đó (tăng 1sp)
                    $_SESSION['cart'][$idProduct]['quantity'] += 1;
                }else{
                    // thêm sp mới vào giỏ hàng
                    $_SESSION['cart'][$idProduct]['id'] = $product['id'];
                    $_SESSION['cart'][$idProduct]['name'] = $product['name'];
                    $_SESSION['cart'][$idProduct]['price'] = $product['price'];
                    $_SESSION['cart'][$idProduct]['images'] = $product['images'];
                    $_SESSION['cart'][$idProduct]['quantity'] = 1;
                }
            }
            //view
            header('location: index.php?c=cart&m=index');
        }
    }

    function delete(){
        $idProduct = $_GET['id'] ?? '';
        $idProduct = is_numeric($idProduct) ? $idProduct : 0;
        if(isset($_SESSION['cart'][$idProduct])){
            unset($_SESSION['cart'][$idProduct]);
        }
        header('location: index.php?c=cart&m=index');
    }

    function update()
    {
        $idProduct = $_GET['id'] ?? '';
        $idProduct = is_numeric($idProduct) ? $idProduct : 0;

        $quantity = $_GET['q'] ?? '';
        $quantity = is_numeric($quantity) && $quantity < 10  ? $quantity : 1;

        if(isset($_SESSION['cart'][$idProduct])){
            $_SESSION['cart'][$idProduct]['quantity'] = $quantity;
        }
        header('location: index.php?c=cart&m=index');
    }
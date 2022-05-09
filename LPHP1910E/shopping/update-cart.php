<?php
    session_start();
    // id sản phẩm trong giỏ hàng
    $idProduct = $_POST['id'] ?? '';
    $idProduct = is_numeric($idProduct) ? $idProduct : 0;
    // số lượng mua của từng sản phẩm trong cart
    $quantity = $_POST['quantity'] ?? '';
    $quantity = is_numeric($quantity) && ($quantity >= 1 && $quantity <= 10) ? $quantity : 0;

    if($idProduct === 0 || $quantity === 0){
        echo "error";
    } else{
        // tiến hành cập nhật lại số lượng sản phẩm trong giỏ hàng
        // kiểm tra sản phẩm cập nhật có tồn tại trong cart không?
        if(isset($_SESSION['cart'][$idProduct])){
            // sẽ được cập nhật
            $_SESSION['cart'][$idProduct]['quantity'] = $quantity;

            // trả về thành tiền để view ra ngoài giao diện
            $money = number_format($_SESSION['cart'][$idProduct]['quantity'] * $_SESSION['cart'][$idProduct]['price']);

            // Tính lại tổng tiền
            $total = 0;
            foreach($_SESSION['cart'] as $key => $item){
                $total += ($item['quantity'] * $item['price']);
            }
            echo json_encode([
                'id' => $idProduct,
                'quantity' => $quantity,
                'money' => $money,
                'total' => number_format($total)
            ]);
        }else{
            echo "error";
        }
    }

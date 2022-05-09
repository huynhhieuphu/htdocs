<?php session_start();
//session_destroy();
//die;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Cart</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css">
</head>
<body>
    <?php
        $cart = $_SESSION["cart"] ?? [];
        define("PATH_IMAGE", "public/img/");
    ?>
    <div class="containter">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Money</th>
                            <th colspan="2" width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0; ?>
                        <?php foreach ($cart as $key => $item): ?>
                            <?php $total += $item['quantity'] * $item['price']; ?>
                            <tr class="row-<?= $item['id'] ?>">
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td><img width="100" class="img-fluid" src="<?= PATH_IMAGE . $item['image'] ?>" alt="<?= $item['image'] ?>"></td>
                                <td><input type="number" class="js-quantity-cart-<?= $item['id'] ?>" value="<?= $item['quantity'] ?>"></td>
                                <td><?= number_format($item['price']) ?></td>
                                <td class="money-cart-<?= $item['id'] ?>"><?= number_format($item['quantity'] * $item['price']) ?></td>
                                <td>
                                    <button class="btn btn-sm btn-success js-update-cart" id="<?= $item['id'] ?>">Update</button>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-danger js-delete-cart" id="<?= $item['id'] ?>">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">Tổng tiền</td>
                            <td class="js-total"><?= number_format($total) ?></td>
                            <td colspan="2"></td>
                        </tr>
                    </tfoot>
                </table>
                <br>
                <a href="index.php" class="btn btn-primary">Tiếp tục mua hàng</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="public/js/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function(){
            //delete cart
            $('.js-delete-cart').click(function(){
                let self = $(this);
                let idProduct = self.attr('id').trim();
                if($.isNumeric(idProduct)){
                    // thực hiện call ajax xoá sản phẩm trong giỏ hàng
                    $.ajax({
                        url: "remove-cart.php",
                        type: "POST",
                        data: {id: idProduct},
                        beforeSend: function(){
                            //trước khi gửi lên server, thì đổi text trong nút button thay đổi thành "Loading..."
                            self.text("Loading...");
                        },
                        success: function(result){
                            self.text("Delete");
                            result = $.trim(result);

                            if(result === "error"){
                                alert("Có lỗi xảy ra...");
                            }else if(result === "success"){
                                alert("Xoá thành công");
                                $('.row-' + idProduct).hide();
                            }
                        }
                    })
                }
            });
            //update cart
            $('.js-update-cart').click(function(){
               let self = $(this);
               let idProduct = self.attr('id').trim();
               // lấy giá trị số lượng người dùng thay đổi
               let quantity = $('.js-quantity-cart-' + idProduct).val().trim();

               if($.isNumeric(quantity) && quantity >= 1 && quantity <= 10){
                   $.ajax({
                       url: "update-cart.php",
                       type: "POST",
                       data: {id: idProduct, quantity: quantity},
                       beforeSend: function(){
                           self.text("Loading...");
                       },
                       success: function(data){
                           self.text("Update");
                           let dt = $.trim(data);
                           if(dt === "error"){
                               alert("Lỗi cập nhật số lượng thành tiền...");
                           }else{
                               let result = $.parseJSON(dt);
                               let money = result.money;
                               let total = result.total;

                               $('.money-cart-' + idProduct).text(money);
                               $('.js-total').text(total);
                           }
                       }
                   });
               }else{
                   alert("Số lượng không vượt quá 10 SP và tối thiểu 1 SP");
               }

            });
        });
    </script>
</body>
</html>
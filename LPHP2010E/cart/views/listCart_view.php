<?php
    if(!defined('ROOT_PATH')){
        exit('can not access');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center m-3">Gio hang</h2>
            </div>
        </div>

        <?php
            // echo '<pre>';
            // print_r($_SESSION['cart']);
            // echo '</pre>';
        ?>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="table-resposive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Hinh anh</th>
                                <th>Ten SP</th>
                                <th>Gia</th>
                                <th>SLUONG</th>
                                <th>Thanh Tien</th>
                                <th colspan="2">Thao Tac</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0 ?>
                            <?php foreach($_SESSION['cart'] as $key => $item): ?>
                            <?php $amount = $item['price'] * $item['quantity']; ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td>
                                        <img src="<?= $item['images'] ?>" alt="<?= $item['images'] ?>" width="100">
                                    </td>
                                    <td><?= $item['name'] ?></td>
                                    <td><?= $item['price'] ?></td>
                                    <td><input type="number" id="quantity_<?= $item['id'] ?>" value="<?= $item['quantity'] ?>"></td>
                                    <td><?= number_format($amount) ?></td>
                                    <td colspan="2">
                                        <a href="index.php?c=cart&m=delete&id=<?= $item['id'] ?>" class="btn btn-danger">Xoa</a>
                                        <button type="button" class="btn btn-success" id="btnUpdate" onclick="updateCart(<?= $item['id'] ?>)">cap nhat</button>
                                    </td>
                                </tr>
                                <?php $total += $amount;?>
                            <?php endforeach; ?>
                            <tr class="bg-secondary text-light">
                                <td colspan="5">Tong Tien</td>
                                <td colspan="3"><?= number_format($total) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="index.php">Quay về Sản phẩm</a>
            </div>
        </div>
    </div>

    <script>
        function updateCart(idProduct){
            let quantity = document.getElementById('quantity_'+ idProduct);
            quantity = quantity.value;
            window.location.href = `index.php?c=cart&m=update&id=${idProduct}&q=${quantity}`;
        }
    </script>
</body>
</html>
<?php
    require "data/product.php";
    define("PATH_IMAGE", "public/img/");

    $listProduct = getDataProduct();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo App Shopping - Cart</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css">
</head>
<body>
<div class="container">
    <div class="row">
        <?php foreach ($listProduct as $key => $item): ?>
        <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card">
                <img class="card-img-top" src="<?= PATH_IMAGE . $item['image'] ?>" alt="<?= $item['image'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['name'] ?></h5>
                    <p class="card-text">Price: <?= number_format($item['price']) ?> VNĐ</p>
                    <a href="add-cart.php?id=<?= $item['id'] ?>" class="btn btn-primary">Add Cart</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
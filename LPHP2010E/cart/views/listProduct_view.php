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
    <title>List Products</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center m-3">Danh sach san pham</h2>
            </div>
        </div>

        <div class="row">
            <?php foreach($products as $product): ?>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 my-2">
                    <div class="card">
                        <img class="card-img-top" src="<?= $product['images'] ?>" alt="<?= $product['images'] ?>">
                        <div class="card-body">
                            <h4 class="card-title"><?= $product['name'] ?></h4>
                            <p class="card-text"><?= number_format($product['price']) ?></p>
                            <a href="index.php?c=cart&m=add&id=<?= $product['id'] ?>" class="btn btn-primary">Add Cart</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
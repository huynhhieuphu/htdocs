<?php if (!defined('ROOT_PATH')) {
    die('can not access');
} ?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>My name: <?= $name; ?></h1>
                <h2>My age: <?= $age; ?></h2>
            </div>
        </div>
        <div class="row" style="min-height: 600px;">
            <?php foreach ($listProducts as $key => $item) : ?>
                <div class="col col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card my-3">
                        <a href="?c=product&m=index&id=<?= $item['id'] ?>">
                            <img class="img-fluid" src="<?= PATH_IMAGE . $item['image'] ?>" alt="<?= $item['image'] ?>">
                        </a>
                        <div class="card-body">
                            <a href="?c=product&m=index&id=<?= $item['id'] ?>">
                                <h5 class="card-title"><?= $item['name'] ?></h5>
                            </a>
                            <p class="card-text"><?= number_format($item['price']) ?> VND</p>
                            <button class="btn btn-primary">Add cart</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php if (!defined('ROOT_PATH')) die ('can not access') ?>

<div class="container">
    <div class="row my-5">
        <?php foreach ($listProduct as $key => $item): ?>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="card">
                    <img src="<?= $item['images'] ?>" class="card-img-top" alt="<?= $item['images'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['name'] ?></h5>
                        <p class="card-text"><?= number_format($item['price']) ?> VNĐ</p>
                        <p class="card-text"><?= $item['name_brand'] ?></p>
                        <p class="card-text"><?= $item['name_category'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
            <?= $paginate; ?>
        </div>
    </div>
</div>

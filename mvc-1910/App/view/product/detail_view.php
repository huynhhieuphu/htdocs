<?php if (!defined('ROOT_PATH')) die('can not access') ?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col">
                        <img src="<?= PATH_IMAGE . $infoProduct['image']; ?>" alt="<?= $infoProduct['image'] ?>"
                             class="img-fluid img-thumbnail">
                    </div>
                </div>

                <div class="row my-3">
                    <?php foreach ($lsImage as $img): ?>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                            <img src="<?= PATH_IMAGE . $img['image'] ?>" alt="<?= $img['image'] ?>"
                                 class="img-fluid img-thumbnail">
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h3>Tên Sản phẩm: <?= $infoProduct['name']; ?></h3>
            </div>
        </div>
    </div>
</main>

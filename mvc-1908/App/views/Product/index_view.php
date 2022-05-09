<?php if (!defined('ROOT_PATH')) die ('can not access') ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col h-100 py-5">
                <h2 class="text-center"><?= $name ?></h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $total = 0; ?>
                    <?php foreach($products as $key => $item): ?>
                        <?php $total += $item['price']; ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td>
                                <img src="<?= $item['images'] ?>" alt="<?= $item['images'] ?>" style="width: 100px;">
                            </td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['price'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">Total</td>
                            <td><?= $total; ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>


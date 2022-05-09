<?php if (!defined('ROOT_PATH')) die ('can not access') ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col h-100 py-5">
                <h2 class="text-center">This is content <?php if(!empty($username)): ?> - Hello: <?= $username ?><?php endif; ?></h2>
            </div>
        </div>
    </div>
</main>

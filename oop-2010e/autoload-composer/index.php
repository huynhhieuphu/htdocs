<?php
    require 'vendor/autoload.php';

    $p = new App\Controllers\ProductController;
    $data = $p->index();

    print_r($data);


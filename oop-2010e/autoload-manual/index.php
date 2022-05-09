<?php
    require 'Config/Autoload.php';

    use Config\Autoload;

    $app = new Autoload; // đăng ký spl_autoload_register

    $p = new Controllers\ProductController;
    $data = $p->index();

    print_r($data);


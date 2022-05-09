<?php
    namespace b2\Controllers;

    require 'HomeController.php';

    // ***dùng use - để chỉ định vùng
    // ***dùng as - đổi thành tên định danh mới
    use b2\Controllers\HomeController as Home;

    class ProductController extends Home
    {

    }

    $pd = new ProductController;
    echo $pd->index();
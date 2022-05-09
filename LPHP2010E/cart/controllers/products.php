<?php
    require 'models/products.php';

    function index(){
        $products = getDataAllProducts();

        require 'views/listProduct_view.php';
    }
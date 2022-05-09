<?php
require_once 'vendor/autoload.php'; // tự động autoload tất cả file trong ứng dụng
if(file_exists('router/web.php')){
    define('ROOT_PATH', 'index.php');// luôn chạy file "index"
    require_once 'App/configs/Constant.php';
    require 'router/web.php';
}else{
    echo "not found";
}
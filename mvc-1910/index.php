<?php
require_once 'vendor/autoload.php';
if(file_exists('router/web.php')){
    // Mỗi ứng dụng đều chạy qua index này.
    define("ROOT_PATH", "index.php");
    require "router/web.php";
} else {
    die("Not Found");
}
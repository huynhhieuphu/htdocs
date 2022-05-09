<?php
require_once '../vendor/autoload.php';
if(file_exists('router/web.php')){
    // Mỗi ứng dụng đều chạy qua index này.
    define("ADMIN_PATH", "Admin/index.php");
    require "router/web.php";
} else {
    die("Not Found");
}
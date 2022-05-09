<?php
// autoload composer

// Bước 1. Chọn file composer.json --> mở console gõ lệnh: composer dump-autoload
// Bước 2. thêm required 'vendor/autoload.php';
require 'vendor/autoload.php';

//Sử dụng controller
use App\Controller\HomeController;
$home = new HomeController();
$home->showProduct();

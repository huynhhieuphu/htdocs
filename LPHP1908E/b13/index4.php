<?php
//autoload bằng tay
require 'bootstrap/Bootstrap.php';

use bootstrap\Bootstrap;
$app = new Bootstrap; // Mục đích chạy phương thức __contructor

//Sử dụng controller
use App\Controller\HomeController;

$home = new HomeController;
//$home->index();
$home->showProduct();
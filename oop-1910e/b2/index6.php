<?php
namespace b2;

// Autoload bằng code tay

//require "bootstrap/Autoload.php";
//use bootstrap\Autoload;
//new Autoload();

// Autoload bằng composer
require "vendor/autoload.php";
use src\controller\HomeController;

$home = new HomeController();
$data = $home->index();
print_r($data);

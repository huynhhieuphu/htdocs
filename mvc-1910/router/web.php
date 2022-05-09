<?php
session_start();

// Không được phép truy cập trực vào file
if (!defined('ROOT_PATH')) {
    die("Can not access");
}

require_once 'App/config/Constant.php';

//echo "This is routes";die;
// Là nơi tiếp nhận các resquest gửi lên

// đường dẫn như sau:
// index.php?c=home&m=index&param=abc

// index.php/home/index

// c: tên controller
// m: tên methods thuộc controller
// param: query string

$controller = ucfirst($_GET['c'] ?? 'home');
$method = $_GET['m'] ?? 'index';

// dùng namespace controller
$namespaceController = "App\controller\\" . $controller . "Controller";
// vd: "App\controller\\HomeController"

// kiểm tra đường dẫn controller có tồn tại hay không?
$checkExist = str_replace('\\', '/', trim($namespaceController, '\\')) . ".php";
//echo $checkExist;die;

if(file_exists($checkExist)){
    // Khởi tạo đối tượng từ class
    $c = new $namespaceController; //vd: $c = new App\controller\HomeController
    // Tự động gọi vào các phương thức
    $c->$method(); //vd: mặc định index()
} else {
    header("Location: error.php");
}
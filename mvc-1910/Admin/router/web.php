<?php
session_start();

// Không được phép truy cập trực vào file
if (!defined('ADMIN_PATH')) {
    die("Can not access");
}

//require_once 'App/config/Constant.php';

//echo "This is routes";die;
// Là nơi tiếp nhận các resquest gửi lên

// đường dẫn như sau:
// index.php?c=home&m=index&param=abc

// index.php/home/index

// c: tên controller
// m: tên methods thuộc controller
// param: query string

$controller = ucfirst($_GET['c'] ?? 'login'); // default: login
$method = $_GET['m'] ?? 'index';

// dùng namespace controller
$namespaceController = "Src\controller\\" . $controller . "Controller";
// vd: "Src\controller\LoginController"

// kiểm tra đường dẫn controller có tồn tại hay không?
$checkExist = str_replace('\\', '/', trim($namespaceController, '\\')) . ".php";

if(file_exists($checkExist)){
    // Khởi tạo đối tượng từ class
    $c = new $namespaceController; //vd: $c = new Src\Controller\LoginController
    // Tự động gọi vào các phương thức
    $c->$method(); //vd: mặc định index()
} else {
    header("Location: error.php");
}
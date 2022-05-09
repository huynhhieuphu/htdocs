<?php
session_start();

// đây là nơi tiếp nhận các resquest từ phía client và định tuyến - điều chỉnh hướng các request đó.
// không được phép truy cập trực vào file web.php
if(!defined('ROOT_PATH')){
    die ('Sorry, You don\'t have access');
}

// đường link truy cập vào web:
// index.php?c=product&m=index&p=sp01

// c: tên của controller
// m: tên của method nằm trong controller
// p: params (tham số)

// controller: mặc định sẽ trả controller home
$c = ucfirst($_GET['c'] ?? 'Home'); // isset($_GET['c']) ? $_GET['c'] : 'Home'
// method: mặc định sẽ trả phương thức index
$m = $_GET['m'] ?? 'index';

// khái niệm lazy-loading: tên file trùng với tên class

define('PATH_CONTROLLER', 'App/controllers/');
define('NAMESPACE_CONTROLLER', 'App\\controllers\\');

// Cần khởi tạo và truy cập đúng controller trong thư mục app
// trước tiên kiểm tra file có tồn tại hay không?
if (file_exists(PATH_CONTROLLER . $c . 'Controller.php')) { // vd: App/controllers/HomeController.php
    $obj = NAMESPACE_CONTROLLER. $c ."Controller"; // vd: App\controllers\HomeController
    $instance = new $obj;
    $instance->$m();
} else {
    header('Location: upgrade.php');
}



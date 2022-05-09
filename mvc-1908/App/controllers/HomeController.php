<?php
//HomeController
namespace App\controllers;

// không được phép truy cập trực vào file web.php
if(!defined('ROOT_PATH')){
    die ('Sorry, You don\'t have access');
}

use App\controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
//        echo "This is method: " . __FUNCTION__ . "() of class: " . __CLASS__;

        // xử lý dữ liệu ở đây
        // ...
        $data = [];
        $data['username'] = $_SESSION['username'] ?? '';

        //load header
        $header = ['title' => 'This is Home page', 'content' => 'Home page'];
        $this->loadHeader($header);
        //load content
        $this->loadView('Home/index_view', $data);
        //load footer
        $this->loadFooter();
    }

}
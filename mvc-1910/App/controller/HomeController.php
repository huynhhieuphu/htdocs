<?php

namespace App\controller;

if (!defined('ROOT_PATH')) {
    die('can not file');
}

use App\controller\BaseController;
use App\model\Home;

class HomeController extends BaseController
{
    private $db;

    public function __construct()
    {
        $this->db = new Home();
    }

    public function index()
    {
        //        echo "This is home controller";
        // lấy dữ liệu từ home model
        $data = [];
        $products = $this->db->getAllData();
        //        echo '<pre>';
        //        print_r($products);
        //        die;
        $data['listProducts'] = $products;
        $data['name'] = 'Nguyen Van Teo';
        $data['age'] = 30;

        //        require 'App/view/home/index_view.php';

        //load header
        $header = [
            'title' => 'This is home page'
        ];
        $this->loadHeader($header);
        //load view, truyền mảng data ra ngoài view
        $this->loadView('home/index_view', $data);
        //load footer
        $this->loadFooter();
    }
}

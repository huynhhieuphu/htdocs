<?php
namespace Src\controller;

if(!defined('ADMIN_PATH')){
    die('not can access');
}

use Src\model\brand;

class LoginController
{
    private $brand;

    public function __construct()
    {
        $this->brand = new brand();
    }

    public function index()
    {
//        $insert = $this->brand->insert('test 01', 'test-01', 'test01.png', 'text text text', 1);
//
//        if($insert){
//            echo 'success';
//        }else{
//            echo 'error';
//        }
    }
}

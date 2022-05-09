<?php

namespace App\Controllers;

if (!defined('ROOT_PATH')) {
    die('Sorry, You don\'t have access');
}

use App\Controllers\BaseController;
use App\Models\Color;

class ColorController extends BaseController
{
    public function __construct()
    {

    }

    public function index()
    {
        // Test query sql to table Color
        // insert - update - delete - like...
        echo "<a href='?c=home'>Back Home Page</a><br />";
        echo "Page test query sql to table color <br />";
        echo "<pre>";

        $queryDB = new Color();
        // test câu lệnh insert;
//        $insert = null;
//        // $insert = $queryDB->insertDataColor('Yellow', 'yellow');
//
//        if($insert){
//            echo 'Insert Success';
//        }else{
//            echo 'Insert Error';
//        }
//        echo '<br>';

        // câu lệnh update;
//        $update = null;
//        // $update = $queryDB->updateDataColor(4, 'Grey', 'grey');
//
//        if($update){
//            echo 'Update Success';
//        }else{
//            echo 'Update Error';
//        }
//        echo '<br>';

        // câu lệnh delete;
//        $delete = $queryDB->deleteDataColor(3);
//
//        if($delete){
//            echo 'delete success';
//        }else{
//            echo 'delete error';
//        }

        $products = $queryDB->getNumberProductByColor(5);
        print_r($products);
    }
}
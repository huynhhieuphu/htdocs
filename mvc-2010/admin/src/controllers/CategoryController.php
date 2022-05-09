<?php

namespace src\controllers;

if (!defined('PATH_ADMIN')) {
    die('Can not access !!!');
}

use src\controllers\BaseController as Controllers;
use src\models\CategoryModel;

class CategoryController extends Controllers
{
    private $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        if (!$this->isUserLogin()) {
            header('location: index.php?c=login');
        }
        $header['title'] = $data['title'] = 'Category';

        $this->loadHeader($header);
        $this->loadView('category/index_view', $data);
        $this->loadFooter();
    }

    public function handleFetchData()
    {
        $categories = $this->categoryModel->getAllData();
        $html = '';
        $html .= '<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Parent Id</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>';
        $stt = 0;
        if(!empty($categories)){
            foreach ($categories as $category){
                $stt++;
                $html .= '<tr>';
                $html .= '<td>'. $stt .'</td>';
                $html .= '<td>'. $category['name'] .'</td>';
                $html .= '<td>'. $category['description'] .'</td>';
                $html .= '<td>'. $category['parent_id'] .'</td>';
                $html .= '<td>'. $category['status'] .'</td>';
                $html .= '</tr>';
            }
        }else{
            $html .= '<tr><td colspan="5">NO DATA</td></tr>';
        }
        $html .= '</tbody></table></div>';
        echo $html;
    }

    public function handleAdd()
    {
        $cateName = $_POST['cateName'] ?? '';
        $cateName = strip_tags($cateName);
        $cateDesc = $_POST['cateDesc'] ?? '';
        $cateDesc = strip_tags($cateDesc);
        $cateParent = $_POST['cateParent'] ?? '';
        $cateParent = is_numeric($cateParent) && $cateParent >= 0 ? $cateParent : -1;

        if (empty($cateName) && $cateParent > -1) {
            echo 'error';
        } else {
            $insertData = $this->categoryModel->insertData($cateName, $cateDesc, $cateParent);
            if ($insertData) {
                echo 'success';
            } else {
                echo 'fail';
            }
        }
    }
}
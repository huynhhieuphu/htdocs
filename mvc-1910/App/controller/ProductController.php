<?php

namespace App\Controller;

if (!defined('ROOT_PATH')) {
    die('Can not access');
}

use App\Controller\BaseController;
use App\Model\Product;

class ProductController extends BaseController
{
    private $db;

    public function __construct()
    {
        $this->db = new Product();
    }

    public function index()
    {
        $data = [];
        $idProduct = $_GET['id'] ?? '';
        $idProduct = is_numeric($idProduct) ? $idProduct : 0;

        $infoProduct = $this->db->getProductByID($idProduct);
        $lsImage = $this->db->getListImgByID($idProduct);

        if ($infoProduct) {
            $data['infoProduct'] = $infoProduct;
            $data['lsImage'] = $lsImage;

            //load header
            $header = [
                'title' => 'This is product detail page'
            ];
            $this->loadHeader($header);
            //load view, truyền mảng data ra ngoài view
            $this->loadView('product/detail_view', $data);
            //load footer
            $this->loadFooter();
        }else{
            //load header
            $header = [
                'title' => 'This is NOT FOUND page'
            ];
            $this->loadHeader($header);
            //load view, truyền mảng data ra ngoài view
            $this->loadView('partials/not_found_view');
            //load footer
            $this->loadFooter();
        }
    }
}
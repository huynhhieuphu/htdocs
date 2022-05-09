<?php
namespace App\Controllers;

if (!defined('ROOT_PATH')) {
    die ('Sorry, You don\'t have access');
}

use App\controllers\BaseController;
use App\models\Product;
use App\Lib\Pagination;

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new Product;
    }

    public function index()
    {
        // xử lý dữ liệu
        $data = [];
        $data['products'] = $this->product->getAllDataProduct();
        $data['name'] = 'Danh sách sản phẩm';

        //load header
        $header = ['title' => 'This is Product page', 'content' => 'Product page'];
        $this->loadHeader($header);
        //load content
        // truyền dữ liệu $data ra ngoài view
        $this->loadView('Product/index_view', $data);
        //load footer
        $this->loadFooter();
    }

    public function details()
    {
        echo "This is method: " . __FUNCTION__ . "() of class: " . __CLASS__;
    }

    public function search()
    {
        $data = [];
        $keywords = $_GET['keywords'] ?? '';
        $products = $this->product->getAllDataProductByKeywords($keywords);

        $arrLinks = [
            'c' => 'product',
            'm' => 'search',
            's' => $keywords,
            'page' => '{page}'
        ];

        $page = $_GET['page'] ?? '';
        $page = is_numeric($page) ? $page : 1;

        $strLink = Pagination::createLink($arrLinks);
        $paginate = Pagination::paginate($strLink, $page,LIMIT_PAGE, count($products), $keywords);

        $listProduct = $this->product->getAllDataProductByPage($paginate['start'], LIMIT_PAGE, $keywords);
        $data['paginate'] = $paginate['paginate'];
        $data['listProduct'] = $listProduct;

        //load header
        $header = ['title' => 'Search Product', 'content' => 'This search page product', 'keywords' => $keywords];
        $this->loadHeader($header);
        //load content
        // truyền dữ liệu $data ra ngoài view
        $this->loadView('Product/search_view', $data);
        //load footer
        $this->loadFooter();
    }
}
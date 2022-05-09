<?php
// Đây controller gốc để sau này, các controller kế thừa
namespace App\controllers;

// không được phép truy cập trực vào file web.php
if (!defined('ROOT_PATH')) {
    die ('Sorry, You don\'t have access');
}

class BaseController
{
    // mục địch sử dụng method magic __call lấy ra tên phương thưc và tham số truyền vào không tồn tại in ra.
    public function __call($name, $arguments)
    {
        // echo "{$name} - khong ton tai";
        header("Location: upgrade.php");
    }

    protected function loadHeader($header = [])
    {
        $title = $header['title'] ?? '';
        $content = $header['content'] ?? '';
        $username = $this->getSessionUsername();
        $keywords = $header['keywords'] ?? '';
        require "App/views/partials/header_view.php";
    }

    protected function loadFooter()
    {
        require "App/views/partials/footer_view.php";
    }

    protected function loadView($path, $data = [])
    {
        // hàm extract chuyển các keys trong mảng thành biến, (giúp hiển thị ở ngoài view)
        /*
         * $data['a'] = 1;
         * $data['b'] = 2;
         *
         * extract($data);
         *
         * $a = 1;
         * $b = 2;
         * */
        extract($data);
        // $path = đường dẫn của view - luôn luôn phải nằm trong folder views
        require "App/views/{$path}.php";
    }

    private function getSessionUsername()
    {
        return $_SESSION['username'] ?? '';
    }
}
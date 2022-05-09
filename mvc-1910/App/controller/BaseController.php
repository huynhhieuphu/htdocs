<?php

namespace App\controller;

if (!defined('ROOT_PATH')) {
    die('can not access');
}

class BaseController
{
    protected function loadHeader($header = [])
    {
        $title = $header['title'] ?? '';
        $username = $this->getSessionUsername();

        require 'App/view/partials/header_view.php';
    }

    protected function loadFooter()
    {
        require 'App/view/partials/footer_view.php';
    }

    public function loadView($pathView, $data = [])
    {
        // cách truyền dữ liệu vào view
        // extract : dùng để chuyển key thành biến (mục đích để hiển thị ra ngoài view)
        /*
         * ['name' => 'abc'];
         * === Chuyển thành ===
         * $name = 'abc';
         */
        extract($data);
        require "App/view/{$pathView}.php";
    }

    protected function getSessionUsername()
    {
        $username = $_SESSION['username'] ?? '';
        return $username;
    }
}
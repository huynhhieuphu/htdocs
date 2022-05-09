<?php
namespace src\controllers;

if(!defined('PATH_ADMIN')){
    die('Can not access !!!');
}

class BaseController
{
    public function __call($name, $arguments)
    {
        header('Location: page404.php');
    }

    protected function loadHeader($header = [])
    {
        $title = $header['title'] ?? '';
        $username = $this->getSessionUser();
        require 'src/views/partials/header_view.php';
    }

    protected function loadFooter()
    {
        require 'src/views/partials/footer_view.php';
    }

    protected function loadView($path, $data = [])
    {
        extract($data);
        require "src/views/{$path}.php";
    }

    protected function isUserLogin()
    {
        $sessionUsername = $this->getSessionUser();
        $cookieFeatureLogin = $this->getCookieFeatureLogin();

        if(!empty($sessionUsername) && !empty($cookieFeatureLogin)){
            return true;
        }
        return false;
    }

    private function getSessionUser()
    {
        return $_SESSION['username'] ?? '';
    }

    private function getCookieFeatureLogin()
    {
        return $_COOKIE['feature_login'] ?? '';
    }
}

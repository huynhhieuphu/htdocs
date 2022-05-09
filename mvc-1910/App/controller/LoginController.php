<?php

namespace App\controller;

if (!defined('ROOT_PATH')) {
    die('can not access');
}

use App\controller\BaseController;
use App\model\Login;

class LoginController extends BaseController
{
    private $loginModel;

    public function __construct()
    {
        $this->loginModel = new Login;
    }

    public function index()
    {
        $this->loadView('login/index_view');
    }

    public function handleLogin()
    {
        if (isset($_POST['btnLogin'])) {
            $username = $_POST['username'] ?? '';
            $username = strip_tags($username);
            $password = $_POST['password'] ?? '';
            $password = strip_tags($password);

            $checkLogin = $this->loginModel->checkLogin($username, $password);

//            echo '<pre>';
//            print_r($checkLogin);die;

            if ($checkLogin) {
                // Cập nhật lại column last_login trong db
                $update = $this->loginModel->updateLastLogin($checkLogin['id']);
                $_SESSION['username'] = $checkLogin['username'];
                $_SESSION['email'] = $checkLogin['email'];
                $_SESSION['fullname'] = $checkLogin['fullname'];
                $_SESSION['role'] = $checkLogin['role'];
                $_SESSION['id'] = $checkLogin['id'];
                // cho vào home
                header('Location: ?c=home');
            } else {
                // quay lại trang login
                header('Location: ?c=login&state=fail');
            }
        }
    }

    public function handleLogout()
    {
        if(isset($_POST['btnLogout']))
        {
            if(isset($_SESSION['username'])){
                unset($_SESSION['username']);
                unset($_SESSION['email']);
                unset($_SESSION['fullname']);
                unset($_SESSION['role']);
                unset($_SESSION['id']);
            }
            header('Location: ?c=home');
        }
    }
}
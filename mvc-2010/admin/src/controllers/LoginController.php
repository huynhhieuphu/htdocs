<?php
namespace src\controllers;

if(!defined('PATH_ADMIN')){
    die('Can not access !!!');
}

use src\controllers\BaseController as Controllers;
use src\models\LoginModel as Login;

class LoginController extends Controllers
{
    private $LoginModel;

    public function __construct()
    {
       if($this->isUserLogin()){
            header('location: index.php?c=dashboard');
        }
        $this->LoginModel = new Login();
    }

    public function index()
    {
        $data['title'] = 'Login Admin';
        $this->loadView('login/index_view', $data);
    }

    public function handleLogin()
    {
        if(isset($_POST['btnLogin'])){
            $username = $_POST['username'] ?? '';
            $username = strip_tags($username);
            $password = $_POST['password'] ?? '';
            $password = strip_tags($password);

            $remember = $_POST['remember'] ?? '';
            $remember = strip_tags($remember);

            //validation
            if(empty($username)){
                $_SESSION['msg-username'] = 'username khong duoc de trong';
            }else{
                unset($_SESSION['msg-username']);
            }

            if(empty($password)){
                $_SESSION['msg-password'] = 'password khong duoc de trong';
            }else{
                unset($_SESSION['msg-password']);
            }

            if(!isset($_SESSION['msg-username']) && !isset($_SESSION['msg-password'])){

                $info = $this->LoginModel->checkLogin($username, $password);
                if(!empty($info)){
                    //set cookie feature login
                    if($remember === 'on'){
                        setcookie('feature_login', 'feature_login', time() + 30, '/','',0);
                    }else{
                        setcookie('feature_login', 'feature_login', time() + 20, '/','',0);
                    }
                    $_SESSION['username'] = $info['username'];
                    $_SESSION['email'] = $info['email'];
                    $_SESSION['role'] = $info['role_id'];

                    header('location: index.php?c=dashboard');
                }else{
                    header('location: index.php?c=login&m=index&state=fail');
                }
            }else{
                header('location: index.php?c=login&m=index&state=error');
            }
        }
    }

    public function handleLogout()
    {
        if(isset($_POST['btnLogout'])) {
            if (isset($_SESSION['username'])) {
                session_destroy();
                header('location: index.php?c=login');
            }
        }
    }

    private function checkLogin()
    {
        if(isset($_SESSION['username'])){
            header('location: index.php?c=dashboard');
        }
    }
}
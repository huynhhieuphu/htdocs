<?php
namespace app\controllers;

if(!defined('PATH_ROOT')){
    die('Can not access !!!');
}

use app\controllers\BaseController as Controllers;
use app\Models\LoginModel as Login;

class LoginController extends Controllers
{
    private $loginModel;

    public function __construct()
    {
        $this->loginModel = new Login;
    }

    public function index()
    {
        $data['title'] = 'Login';
        $this->loadView('login/index_view', $data);
    }

    public function handleLogin()
    {
        if(isset($_POST['btnLogin'])){
            $username = $_POST['user'] ?? '';
            $password = $_POST['pass'] ?? '';
            
            $username = trim(strip_tags($username));
            $password = trim(strip_tags($password));

            //validate ???

            $info = $this->loginModel->checkLogin($username, $password);
            
            if(!empty($info)){
                $_SESSION['id'] = $info['id'];
                $_SESSION['username'] = $info['username'];
                $_SESSION['email'] = $info['email'];
                $_SESSION['role'] = $info['role_id'];
                
                header('location: index.php?c=home&m=index');
            }else{
                header('location: index.php?c=login&m=index&state=error');
            }
        }
    }

    public function register()
    {
        $data['title'] = 'Register';
        $this->loadView('login/register_view', $data);
    }

    public function handleRegister()
    {
        if(isset($_POST['btnResgister'])){
            $username = $_POST['user'] ?? '';
            $username = strip_tags($username);
            $password = $_POST['pass'] ?? '';
            $password = strip_tags($password);
            $email = $_POST['email'] ?? '';
            $email = strip_tags($email);
            $fisrtName = $_POST['fname'] ?? '';
            $fisrtName = strip_tags($fisrtName);
            $lastName = $_POST['lname'] ?? '';
            $lastName = strip_tags($lastName);
            $address = $_POST['addr'] ?? '';
            $address = strip_tags($address);
            $phone = $_POST['phone'] ?? '';
            $phone = strip_tags($phone);
            
            if(empty($username)){
                $_SESSION['msg-user'] = 'vui long nhap username';
            }else{
                unset($_SESSION['msg-user']);
            }

            if(empty($password)){
                $_SESSION['msg-pass'] = 'vui long nhap password';
            }else{
                unset($_SESSION['msg-pass']);
            }

            if(empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
                $_SESSION['msg-email'] = 'vui long nhap email';
            }else{
                unset($_SESSION['msg-email']);
            }
            
            if(!isset($_SESSION['msg-user']) && !isset($_SESSION['msg-pass']) && !isset($_SESSION['msg-email'])){
                //insert
                $insert = $this->loginModel->insertData($username, $password, $email, $fisrtName, $lastName, $address, $phone, 2, 1);

                if($insert){
                    header('location: index.php?c=login&m=index');
                }else{
                    header('location: index.php?c=login&m=register&state=error');
                }
            }else{
                $this->register();
            }
        }
    }
}

// $test = new LoginController;
// $test->index();
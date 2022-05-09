<?php

namespace App\Controllers;

if (!defined('ROOT_PATH')) {
    die('can not access');
}

use App\Controllers\BaseController;
use App\Models\Login;

class LoginController extends BaseController
{
    private $login;

    public function __construct()
    {
        $this->login = new Login;
    }

    public function index()
    {
        $data = [];
        $data['state'] = $_GET['state'] ?? '';

        $header = [
            'title' => 'This is Login page',
            'content' => 'Login page'
        ];

        $this->loadHeader($header);
        $this->loadView('Login/index_view', $data);
        $this->loadFooter();
    }

    public function handle()
    {
        if (isset($_POST['btnLogin'])) {
            $username = $_POST['txtUsername'] ?? '';
            $password = $_POST['txtPassword'] ?? '';

            $username = strip_tags(trim($username));
            $password = strip_tags(trim($password));

            if (empty($username) || empty($password)) {
                header('Location: ?c=login&m=index&state=empty');
            } else {
                $checkLogin = $this->login->checkLoginUser($username, $password);

                if ($checkLogin) {
                    $_SESSION['id_user'] = $checkLogin['id'];
                    $_SESSION['username'] = $checkLogin['username'];
                    $_SESSION['email'] = $checkLogin['email'];
                    $_SESSION['role'] = $checkLogin['role_id'];

                    header('Location: ?c=home');
                } else {
                    header('Location: ?c=login&m=index&state=fail');
                }
            }
        }
    }

    public function logout()
    {
        if(isset($_SESSION['id_user'])){
            // xoá hết các session
            unset($_SESSION['id_user']);
            unset($_SESSION['username']);
            unset($_SESSION['email']);
            unset($_SESSION['role_id']);
            header("Location: ?c=login");
        }
    }
}

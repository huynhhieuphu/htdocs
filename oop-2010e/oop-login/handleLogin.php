<?php
    require 'loginModel.php';

    class HandleLogin
    {
        private $username;
        private $password;
        private $loginModel;

        public function __construct()
        {
            $this->loginModel = new loginModel();
        }
        
        public function handle ()
        {
            if(isset($_POST['btnLogin'])){
                $this->username = $_POST['user'] ?? '';
                $this->password = $_POST['pass'] ?? '';

                $info = $this->loginModel->checkUserLogin($this->username, $this->password);
                if(!empty($info)){
                    header("location: index.php?state=success");
                }else{
                    header("location: index.php?state=error");
                }
            }   
        }        
    }

    $login = new HandleLogin();
    $login->handle();

    
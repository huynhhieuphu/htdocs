<?php
    session_start();

    if(isset($_POST['btnLogin'])){
        
        $username = $_POST['user'] ?? '';
        $username = strip_tags($username);
        $password = $_POST['pass'] ?? '';
        $password = strip_tags($password);

        $remember = $_POST['remember'] ?? '';
        $remember = strip_tags($remember);

        if(empty($username) || empty($password)){

            header('location: ../login_view.php?state=error');
        }else{

            if($username === 'admin' && $password= '123456'){
                // tạo cookie
                if($remember === 'on'){
                    // nhấn remember cookie tồn tại 20 giay
                    setcookie('app_login', 'app_login', time() + 20,'/','',0);
                }else{
                    // không nhấn remember cookie tồn tại 10 giay
                    setcookie('app_login', 'app_login', time() + 10,'/','',0);
                }
                // tạo session
                $_SESSION['user'] = $username;

                header('location: ../dashboard.php');
            }else{
                header('location: ../login_view.php?state=fail');
            }
        }
    }
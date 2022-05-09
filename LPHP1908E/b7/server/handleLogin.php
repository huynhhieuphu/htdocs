<?php
session_start();

if(isset($_POST["btnLogin"])){
    $username = $_POST["username"] ?? "";
    $username = trim(strip_tags($username));
    $password = $_POST["password"] ?? "";
    $password = trim(strip_tags($password));

    if(empty($username) || empty($password)){
        //Thông báo điền thông vào
        header("Location: ../login.php?state=fail");
    }else{
        if($username == "admin" && $password == "123456"){
            //Khởi tạo session và cookie

            $remember = $_POST['remember'] ?? '';
            if($remember === 'on'){
                //set cookie
                setcookie("cookieApp", "DemoAppLogin", time() + 180, "/", "", 0);
            }
            // create session
            $_SESSION['username'] = $username;

            header("Location:../home.php");
        }else{
            header("Location:../login.php?state=error");
        }
    }
}
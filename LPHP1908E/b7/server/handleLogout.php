<?php
session_start();

if(isset($_POST["btnLogout"])){
    //Xoá session và cookie (nếu có) từ bên login tạo ra
    if (isset($_SESSION['username'])) {
        unset($_SESSION['username']);
    }

    if (isset($_COOKIE['cookieApp'])) {
        setcookie("cookieApp", "DemoAppLogin", time() - 180, "/", "", 0);
    }
    // quay về trang login
    header("Location:../login.php");
}



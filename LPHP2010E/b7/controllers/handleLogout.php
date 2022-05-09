<?php
    session_start();

    if(isset($_POST['btnLogout'])){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }
        header('location: ../login_view.php');
    }
    
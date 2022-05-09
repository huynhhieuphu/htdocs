<?php
    session_start();

    function checkUserLogin(){
        $userSession = getSessionUser();
        $userCookie = getCookieLogin();
        if(!empty($userSession) && !empty($userCookie)){
            return true;
        }
        return false;
    }

    function getSessionUser(){
        return $_SESSION['user'] ?? '';
    }

    function getCookieLogin(){
        return $_COOKIE['app_login'] ?? '';
    }
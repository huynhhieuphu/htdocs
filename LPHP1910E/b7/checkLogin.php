<?php
function checkLogin(){
    if(!isset($_SESSION["username"]) || !isset($_COOKIE["remember"])){
        return false;
    }
    return true;
}
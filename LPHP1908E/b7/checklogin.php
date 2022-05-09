<?php
    //Giúp kiểm tra người dùng đã đăng nhập chưa thì mới vào trang home
function checkUserLogin(){
    if(!isset($_SESSION['username'])){
        //quay về trang login
        header("Location: login.php");
        die();
    }
}


<?php

$username = $_POST['username'] ?? '';
$username = strip_tags($username);

$password = $_POST['password'] ?? '';
$password = strip_tags($password);

$email = $_POST['email'] ?? '';
$email = strip_tags($email);

//echo $email;

// validate phía back-end
$validate = [];
$validate['err-username'] = '';
$validate['err-password'] = '';
$validate['err-email'] = '';
$validate['alert-success'] = '';
$validate['alert-error'] = '';

if(empty($username)){
    $validate['err-username'] = 'Vui long nhap username';
}

if(empty($password)){
    $validate['err-password'] = 'Vui long nhap password';
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $validate['err-email'] = 'Vui long nhap email';
}

if(empty($validate['err-username']) && empty($validate['err-password']) && empty($validate['err-email'])){
    $data = "{$username};{$password};{$email}|";

    $file = fopen('../models/account.txt','a+');
    if($file){
        $write = fwrite($file, $data);
        fclose($file);
        
        if($write){
            $validate['alertSuccess'] =  'dang ky thanh cong';
        }else{
            $validate['alertError'] =  'dang ky that bai';
        }
    }else{
        $validate['alertError'] =  'khong the ghi du lieu vao file';
    }
}else{
    $validate['alertError'] =  'khong the ghi du lieu vao file';
}

// chuyển 1 mảng thành 1 chuỗi json
echo json_encode($validate);
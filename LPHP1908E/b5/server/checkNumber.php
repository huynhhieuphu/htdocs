<?php

if(isset($_POST['btnCheck'])){
    $number = $_POST['number'] ?? '';
    $number = is_numeric($_POST['number']) ? $_POST['number'] : '';

    if(empty($_POST['number'])){
        // Nếu rỗng quay về form check number
        header("Location:../index2.php?state=empty&num={$number}");
        // hàm header() để điều hướng trang
    }else{
        if(isPrimeNumber($number)){
            header("Location:../index2.php?state=ok&num={$number}");
        }else{
            header("Location:../index2.php?state=error&num={$number}");
        }
    }
}

function isPrimeNumber($number){
    if($number < 2){
        return false;
    }
    $squareRoot = sqrt($number);
    for($i = 2; $i <= $squareRoot; $i++){
        if($number % $i == 0){
            return false;
        }
    }
    return true;
}
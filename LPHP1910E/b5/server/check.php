<?php
if(isset($_POST['btnCheck'])){
    $numString = $_POST['txtNumberString'] ?? '';
    if(empty($numString)){
        // quay về form nhập liệu
        header("Location:../index3.php?state=empty");
    }else{
        // chuyển chuỗi thành mảng
        $arr = explode(',', $numString);
        $result = '';
        foreach ($arr as $key => $item){
            if(kiemTraSoNguyen(trim($item))){
                $result .= ($result == '') ? $item : ',' . $item;
            }
        }
        header("Location:../index3.php?state=ok&result={$result}&input={$numString}");
    }

}

function kiemTraSoNguyen($number){
    if($number < 2){
        return false;
    }
    $sqrt = sqrt($number);
    for($i = 2; $i <= $sqrt; $i++){
        if($number % $i === 0){
            return false;
        }
    }
    return true;
}
<?php
if(isset($_POST['btnCheck'])){
    $strNumber = $_POST['num'] ?? '';

    if(!empty($strNumber)){
        $arrNumber = explode(',', $strNumber);
        $result = '';
        for($i=0; $i < count($arrNumber); $i++){
            if(kiemTraSoNguyenTo($arrNumber[$i])){
                $result .= ($result == '') ? $arrNumber[$i] : ", {$arrNumber[$i]}";
            }
        }
        header("Location: ../checkNumber_view.php?state=ok&result={$result}&old={$strNumber}");
    }else{
        header("Location: ../checkNumber_view.php?state=empty");
    }
}

function kiemTraSoNguyenTo($number){
    if($number < 2){
        return false;
    }
    if($number == 2){
        return true;
    }
    $sqrt = sqrt($number);
    for($i = 3; $i < $sqrt; $i++){
        if($number % $i == 0){
            return false;
        }
    }
    return true;
}
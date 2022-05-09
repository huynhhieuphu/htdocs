<?php
    //sắp xếp mảng theo thuật toán
    $randomNumber = [20, 3, 5, 14, 31, 1, 8, 19, 16];
    // echo count($randomNumber);
    
    function sapXepNoiBotTangDan($arr = []) {
        $arrLen = count($arr);
        for($i = 0; $i < ($arrLen - 1); $i++){
            for($j = $i + 1; $j < $arrLen; $j++){
                if($arr[$i] > $arr[$j]){
                    // Hoán đổi - tính bắc cầu
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $tmp;
                }
            }
        }
        return $arr;
    }

    $result = sapXepNoiBotTangDan($randomNumber);
    echo '<pre>';
    print_r($result);
    echo '<hr>';

    // Viết hàm tìm số lớn nhất
    $randomNumber2 = [20, 3, 5, 14, 31, 8, 19, 16];
    function phanTuLonNhat($arr = []){
        $max = $arr[0];
        $len = count($arr);
        for($i = 0; $i < $len; $i++){
            if($arr[$i] > $max){
                $max = $arr[$i];
            }
        }
        return $max;
    }

    $result2 = phanTuLonNhat($randomNumber2);
    echo $result2;
    echo '<br>';

    // Viết hàm tìm số nhỏ nhất
    function phanTuNhoNhat($arr = []){
        $min = $arr[0]; // giả sử : giá trị đầu tiên là số nhỏ tìm 
        // tiếp các giá trị tiếp theo còn giá trị nào nhỏ hơn không ?
        $len = count($arr);
        for($i = 0; $i < $len; $i++){
            if($arr[$i] < $min){
                $min = $arr[$i];
            }
        }
        return $min;
    }

    $result3 = phanTuNhoNhat($randomNumber2);
    echo $result3;
    echo '<br>';


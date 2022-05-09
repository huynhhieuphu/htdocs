<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////// Các hàm xử lý mảng

///*** Chuyển key của mảng thành chữ HOA hoặc chữ thường
$infoStudent = [
    'name' => 'tony nguyen',
    'address' => 'Sai gon',
    'age' => 30,
    'email' => 'tonynguyen@test.com'
];
$newArr = array_change_key_case($infoStudent, CASE_UPPER);
// CASE_UPPER: HẰNG SỐ tương đương giá trị 1 vào hàm
$newArr2 = array_change_key_case($newArr, CASE_LOWER);
// CASE_LOWER: HẰNG SỐ tương đương giá trị 0 vào hàm

echo '<pre>';
print_r($newArr);
print_r($newArr2);
echo '<hr>';

///*** Đếm số lần phần tử xuất hiện trong mảng
$arrFruit = ['xa','gung','cam','chanh','cam','xa','gung','cam','xa'];
$countEle = array_count_values($arrFruit);
print_r($countEle);
echo '<hr>';

///*** Thêm 1 phần tử vào cuối mảng
$pos_element = array_push($arrFruit, 'Vitamin C');
echo $pos_element; // trả về vị trí phần tử thêm
echo '<br>';
print_r($arrFruit); // thay đổi mảng ban đầu
echo '<hr>';

///*** Xóa 1 phần tử vào cuối mảng
$element = array_pop($arrFruit);
echo $element; // trả về phần tử bị xóa
echo '<br>';
print_r($arrFruit); // thay đổi mảng ban đầu
echo '<hr>';

///*** Thêm 1 phần tử vào đầu mảng
$pos_element2 = array_unshift($arrFruit, 'Vitamin A');
echo $pos_element2; // trả về vị trí phần tử thêm
echo '<br>';
print_r($arrFruit); // thay đổi mảng ban đầu
echo '<hr>';

///*** Xóa 1 phần tử vào đầu mảng
$element = array_shift($arrFruit);
echo $element; // trả về phần tử bị xóa
echo '<br>';
print_r($arrFruit); // thay đổi mảng ban đầu
echo '<hr>';

///*** Tách 1 mảng thành nhiều mảng con bên trong
// true - giữ lại key như lúc ban đầu
// false - mặc định - sắp xếp lại key từng mảng con
$newArr3 = array_chunk($arrFruit, 3, true);
print_r($newArr3);
echo '<hr>';

///*** Kiểm tra có phải là mảng không ?
if(is_array($newArr3)){
    echo 'day la mang';
}else{
    echo 'khong phai la mang';
}
echo '<hr>';

///*** Kiểm tra phần tử có nằm trong mảng không ?
if(in_array('gung', $arrFruit)){
    echo 'phan tu co nam trong mang';
}else{
    echo 'phan tu khong co nam trong mang';
}
echo '<hr>';

///*** Kiểm tra key có tồn tại trong mảng không ?
if(array_key_exists('address', $infoStudent)){
    echo 'key co ton tai';
}else{
    echo 'key khong ton tai';
}
echo '<hr>';

///*** Xóa các phần tử trùng trong mảng ?
$newArr4 = array_unique($arrFruit);
print_r($newArr4);
echo '<hr>';

///*** Chuyển mảng không tuần tự thành mảng tuần tự
$newArr5 = array_values($infoStudent);
print_r($newArr5);
echo '<hr>';

///*** Tính tổng các phân tử trong mảng
$arrMoney = [2000,5000,10000,20000,50000,100000,200000,500000];
$arrSum = array_sum($arrMoney);
echo $arrSum;
echo '<hr>';

//*** cắt phần tử trong mảng
$newArr6 = array_slice($arrMoney, 2, 3);
print_r($newArr6); // trả về các phần tử cắt
echo '<br>';
print_r($arrMoney); // Mảng ban đầu không thay đổi
echo '<hr>';


//*** đếm số phần tử trong mảng
$countArr = count($newArr6);
echo $countArr;
echo '<hr>';

///*** cắt hoặc thay thế phần tử trong mảng
$arrStr = ['a','b','c','q','w','r','x','y','z'];
/// 1- cắt phần tử trong mảng
$newArr7 = array_splice($arrStr, 2, 3);
print_r($newArr7); // trả về các phần tử cắt
echo '<br>';
print_r($arrStr); // Thay đổi mảng ban đầu
echo '<hr>';

$arrStr2 = ['a','b','c','q','w','r','x','y','z'];
// 2- thay thế phần tử trong mảng
$newArr8 = array_splice($arrStr2, 2, 3, ['aaa','bbb']);
print_r($newArr8); // trả về các phần tử cắt
echo '<br>';
print_r($arrStr2); // Thay đổi mảng ban đầu
echo '<hr>';

///*** lấy phần tử cuối cùng trong mảng không thay đổi mảng ban đầu
$endElement = end($arrMoney);
echo $endElement;
echo '<hr>';

// BÀI TẬP: viết 1 hàm lấy id bài viết
function getIDPostsToUrl($url)
{
    $arr = explode('-',$url);
    $str = end($arr);
    $id = intval($str);
    return $id;
}

$url = 'https://vnexpress.net/shipper-dua-nhau-tat-app-giao-hang-4332134.html';
$url2 = 'https://vnexpress.net/them-gan-700-000-lieu-vaccine-astrazeneca-ve-viet-nam-4332279.html';

echo getIDPostsToUrl($url);
echo '<br>';
echo getIDPostsToUrl($url2);
echo '<hr>';

///*** Sắp xếp mảng
// sắp xếp value tăng dần asort() - giảm dần arsort();
$randomNumber = [20, 3, 5, 14, 1, 8, 19, 16];
asort($randomNumber); // thay đổi mảng ban đầu
print_r($randomNumber);

$arrStr3 = ['a','b','c','q','w','r','x','y','z'];
asort($arrStr3); // sắp xếp theo bảng chữ cái A-Z, thay đổi mảng ban đầu
print_r($arrStr3);
echo '<hr>';

// sắp xếp key tăng dần ksort() - giảm dần krsort();
$arrTest = [
    'name' => 'tony nguyen',
    'age' => 30,
    'isMale' => true,
    'email' => 'tonynguyen@test.com',
    'address' => 'Sai gon'
];
ksort($arrTest); // Thay đổi mảng ban đầu
print_r($arrTest);
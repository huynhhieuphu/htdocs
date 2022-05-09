<?php
/// Tiếp tục: Các kiến thức về mảng
/// Các hàm có sẵn trong PHP

/// 1. array_change_key_case()

$infoStudent = [
    'name' => 'Nguyen Van Teo',
    'age' => 29,
    'e-mail' => 'teonv@anonymous.xyz'
];
/// - chuyển key của mảng từ chữ thường sang chữ hoa hoặc ngược lại
/// CASE_UPPER: là hằng số tương đương giá trị 1 truyền vào hàm
/// CASE_LOWER: là hằng số tương đương giá trị 0 truyền vào hàm
$infoStudent = array_change_key_case($infoStudent, CASE_UPPER);
echo '<pre>';
print_r($infoStudent);

/// 2. array_count_value()
$arrStr = ['b', 'c', 'a', 'c', 'x', 'a', 'y', 'z', 'a', 'c', 'y'];
// Đếm số lượng phần tử giống nhau trong mảng - trả về 1 mảng mà key sẽ là phần tử, còn value sẽ là số lần đếm được.
/**
 * OUTPUT: Array
 * (
 * [b] => 1
 * [c] => 3
 * [a] => 3
 * [x] => 1
 * [y] => 2
 * [z] => 1
 * )
 */
$result = array_count_values($arrStr);
print_r($result);

/// 3. array_push()
/// Thêm phần tử vào cuối mảng - trả về 1 mảng mới
array_push($arrStr, 'PHP');
echo 'Trả về 1 mảng mới: <br>';
print_r($arrStr);

/// 4. array_pop()
/// Xoá phần tử cuối mảng - trả về phần tử xoá
$lastElement = array_pop($arrStr);
echo 'In lại mảng có phần tử vừa xoá: <br>';
print_r($arrStr);
echo "Trả về phẩn tử xoá: {$lastElement} <br>";

/// 5. unshift()
/// Thêm phần tử vào đầu mảng - trả về 1 mảng mới
echo 'Trả về 1 mảng mới: <br>';
array_unshift($arrStr, $lastElement);
print_r($arrStr);

/// 6. array_shift()
/// Xoá phần tử ở đầu mảng - trả về phần tử xoá
$firstElement = array_shift($arrStr);
echo 'In lại mảng có phần tử vừa xoá: <br>';
print_r($arrStr);
echo "Trả về phẩn tử xoá: {$firstElement} <br>";

/// 6. array_chunk()
/// Tách mảng thành các mảng con bên trong
/// Tham số size: truyền số tương đương mỗi mảng con sẽ có bao nhiêu phần tử đó
/// Tham số preserve_keys: giá trị true - giữ lại các key ban đầu của mảng cha
///                         , ngược lại giá trị false - các key sắp xếp tuần tự trong các mảng con
///                         , không truyền tham số mặc định false
$result = array_chunk($arrStr, 3);
print_r($result);

/// 7. is_array()
/// Kiểm tra biến có phải là mảng không?
if (is_array($result)) {
    echo 'là mảng';
} else {
    echo 'không phải là mảng';
}
echo '<br>';

/// 8. in_array()
/// Kiểm tra phần tử có nằm trong mảng hay không?
$arrElements = ['html', 'css', 'js', 'php', 'mysql', 'oop', 'lavarel'];
if (in_array('oop', $arrElements)) {
    echo 'Tồn tại phần tử trong mảng';
} else {
    echo 'Không tồn tại';
}
echo '<br>';

/// 9. array_key_exists()
/// Kiểm tra key có tồn tại trong mảng hay không?
$arrFruits = ['name' => 'Tao', 'color' => 'red'];
if (array_key_exists('color', $arrFruits)) {
    echo 'Tồn tại key trong mảng';
} else {
    echo 'Key này không tồn tại';
}
echo '<br>';

/// 10. array_unique()
/// Xoá các phần tử trùng nhau - trả về 1 mảng các phần tử không trùng nhau
$arrStr2 = ['b', 'c', 'a', 'c', 'x', 'a', 'y', 'z', 'a', 'c', 'y'];
$arrUnique = array_unique($arrStr2);
print_r($arrUnique);

/// 11. array_values()
/// Chuyển mảng không tuần tự về mảng tuần tự
$arrFruits = array_values($arrFruits);
/// Key của mảng từ không tuần tự thành key sắp xếp tuần tự
print_r($arrFruits);

/// 12. array_sum()
/// Tính tổng các phần tử nằm trong mảng
/// Lưu ý: các phẩn tử trong mảng phải là kiểu dữ liệu số
$arrNumber = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$sum = array_sum($arrNumber);
echo $sum;
echo '<br>';

/// 13. array_slice()
/// Cắt-tách-trích xuất mảng con từ mảng ban đầu
$child = array_slice($arrNumber, 4, 3);
print_r($child);
echo '<br>';
/// Kiểm tra số lượng phần tử nằm trong mảng.
echo count($child);
echo '<br>';
/// Lưu ý: số lượng thì đếm từ 1, vị trị thì đếm từ 0.

/// 14. array_splice()
/// Với tham số array, offset, length thì hàm array_splice() sẽ Tách-trích-xuất phần tử trong mảng
// $arrSplice = array_splice($arrNumber, -3, 3);

/// Với đầy đủ tham số array, offset, length, replacement - thì hàm array_splice() sẽ thay thế phần tử trong mảng
array_splice($arrNumber, 3, 3, [100, 200, 300]);
print_r($arrNumber);

/// 15. end()
/// Trả về phần tử cuối cùng của mảng nhưng không xoá phần tử đó ra khỏi mảng
/// https://vnexpress.net/vaccine-covid-19-viet-nam-duoi-500-000-dong-mot-lieu-4203268.html

$url = 'https://vnexpress.net/vaccine-covid-19-viet-nam-duoi-500-000-dong-mot-lieu-4203268.html';
$url2 = 'https://vnexpress.net/de-xuat-tang-quyen-tu-chu-cho-thanh-pho-thu-duc-4203525.html';
/// BÀI TẬP: Viết hàm tách lấy id bài viết từ url

/// Cách giải của tôi
//function getIdPostsFromUrl($url)
//{
//    $start = strlen('https://vnexpress.net/');
//    $str = substr($url, $start, strlen($url));
//    $str = substr($str, 0, strpos($str, '.html'));
//    $arr = explode('-', $str);
//    return end($arr);
//}
//
//$id = getIdPostsFromUrl($url);
//$id2 = getIdPostsFromUrl($url2);
//echo $id;
//echo '<br>';
//echo $id2;

function getIdPostsFromUrl($url)
{
    //Chuyển chuỗi thành mảng
    $str = explode('-', $url);
    $strId = end($str); //OUTPUT: 4203268.html
    $id = intval($strId);
    return $id;
}

$id = getIdPostsFromUrl($url);
echo $id;

/// Sắp xếp mảng
/// Sắp xếp theo giá tử : asort (tăng dần) - arsort (giảm dần)
$random = [8, 10, 6, -9, 20, 5, 12, 0.1, 01, -1, 7, 11, 2];
// arsort($random); // giảm dần
asort($random); // tăng dần
print_r($random);

$sports = ['bong da', 'cau long', 'dua xe dap', 'dau kiem', 'boi loi', 'xe dap', 'bong ro', 'dien kinh'];
arsort($sports); // giảm dần theo bảng chữ cái tiếng anh.
print_r($sports);

/// Sắp xếp theo key: ksort (tăng dần) - krsort (giảm dần)
$covid = [
    'Nhiem' => 321515,
    'Khoi' => 212412,
    'chet' => 0
];

ksort($covid);
print_r($covid);

$random2 = [8, 10, 6, 4, 0, 1, -1, 2];
/// BÀI TẬP: Sắp mảng không dùng hàm
function increaseSort($arr = [])
{
    // Vòng lặp thứ 1 để duyệt qua từng phần tử (để sắp xếp)
    foreach ($arr as $key => $value) {
        // Vòng lặp thứ 2 kiểm tra phẩn tử với các phần tử còn lại (để so sánh)
        foreach ($arr as $keyTwo => $valueTwo) {
            if ($arr[$key] < $arr[$keyTwo]) {
                $tmp = $arr[$key];
                $arr[$key] = $arr[$keyTwo];
                $arr[$keyTwo] = $tmp;
            }
        }
    }
    return $arr;
}
$tangdan = increaseSort($random2);
print_r($tangdan);

function decreaseSort($arr = [])
{
    foreach ($arr as $key => $value) {
        foreach ($arr as $keyTwo => $valueTwo) {
            if ($arr[$key] > $arr[$keyTwo]) {
                $tmp = $arr[$key];
                $arr[$key] = $arr[$keyTwo];
                $arr[$keyTwo] = $tmp;
            }
        }
    }
    return $arr;
}
$giamdan = decreaseSort($random2);
print_r($giamdan);

/// BÀI TẬP: Tìm số lớn nhất và nhỏ nhất trong mảng không dùng hàm
function getMax($arr = [])
{
    $max = 0;
    foreach ($arr as $key => $val) {
        if ($val > $max) {
            $max = $val;
        }
    }
    return $max;
}

function getMin($arr = [])
{
    $min = 0;
    foreach ($arr as $key => $val) {
        if ($val < $min) {
            $min = $val;
        }
    }
    return $min;
}

$max = getMax($random2);
echo 'Max: '.$max;
echo '<br>';
$min = getMin($random2);
echo 'Min: ' . $min;
die;

/// BÀI TẬP: Viết hàm tính tổng của các số lẻ trong mảng (1) cộng với số chẵn mảng (2)
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function tinhTong($arr1 = [], $arr2 = [])
{
    $result = [];
    foreach ($arr1 as $key1 => $value1) {
        foreach ($arr2 as $key2 => $value2) {
            $num = (int)($value1 . $value2);
            if ($num % 2 == 0) {
                // ***** LƯU Ý: Hạn chế sử dụng hàm array trong vòng lặp. *****
                // array_push($result, $num);
                $result[] = $num;
            }
        }
    }
    return $result;
}

$kq2mang = tinhtong($arr1, $arr2);
print_r($kq2mang);


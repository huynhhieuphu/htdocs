<?php
/// Tiếp tục các kiến thức làm việc với mảng trong PHP
/// Các hàm xử lý với mảng trong PHP

/// 1. array_change_key_case()
$infoStudents = [
    'name' => 'Nguyen Van Teo',
    'age' => 29,
    'address' => 'Ho Chi Minh'
];

$infoCat = [
    'NAME' => 'Meo meo',
    'AGE' => 2
];

// Chuyển key của mảng về chữ thường hoặc chữ hoa (lưu ý: chỉ xử lý với key của mảng)
$infoStudents = array_change_key_case($infoStudents, CASE_UPPER); // CASE_UPPER tương đương với: 1
echo '<pre>';
print_r($infoStudents);
echo '<br>';

$infoCat = array_change_key_case($infoCat, CASE_LOWER); // CASE_LOWER tương đương với: 0
print_r($infoCat);
echo '<br>';

// CASE_UPPER, CASE_LOWER là tham số truyền vào hàm cũng được gọi hằng số
// Thông thường lập trình viết để tường minh code sẽ viết thẳng CASE_UPPER, CASE_LOWER.

/// 2. array_count_values()
$arrString = ['z','a','x','y','b','a','z','c','y','a','x'];

// Đếm số lượng phần tử giống nhau trong mảng (Kết quả trả về 1 mảng mới)
$arrCountValue = array_count_values($arrString);
print_r($arrCountValue);
/* OUTPUT:
 * Array
 * (
 *      [z] => 2
 *      [a] => 3
 *      [x] => 2
 *      [y] => 2
 *      [b] => 1
 *      [c] => 1
 * )
 *
 * Mảng mới trả về
 * Lưu ý: key lúc này sẽ là giá trị của phần tử mảng ban đầu,
 *        còn value của mảng mới chính là số lần đếm được của các phần tử trong mảng ban đầu.
 * */
echo '<br>';

/// 3. array_push()
/// Thêm 1 phần tử vào cuối mảng
array_push($arrString, 'PHP');
print_r($arrString);
echo '<br>';

/// 4. array_pop()
/// Xoá 1 phần tử ở cuối mảng - trả về phần tử vừa xoá
$lastElement = array_pop($arrString);
echo $lastElement;
echo '<br>';
print_r($arrString);
echo '<br>';

/// 5. array_unshift()
/// Thêm 1 phần tử vào đầu mảng
array_unshift($arrString, 'PHP');
print_r($arrString);
echo '<br>';

/// 6. array_shift()
/// Xoá 1 phần tử ở đầu mảng - trả về phần tử vừa xoá
$firstElement = array_shift($arrString);
echo $firstElement;
echo '<br>';
print_r($arrString);
echo '<br>';

/// 6+. array_chunk()
/// Tách 1 mảng thành các mảng con
/// Tham số 1: là mảng tách
/// Tham số 2: số lượng phần từ nằm bên trong mảng con
/// Tham số 3: mặc định giá trị false - key sắp xếp lại theo tuần tự từng mảng con
///                     giá trị true - key sắp xếp theo key mảng ban đầu
$childArray = array_chunk($arrString, 3, true);
print_r($childArray);
echo '<br>';

/// 7. is_array()
/// Kiểm tra biến có phải 1 mảng hay không ? (Kiểm tra kiểu dữ liệu mảng)
if(is_array($childArray)){
    echo 'Đây là mảng';
}else{
    echo 'Không là mảng';
}
echo '<br>';

/// 8. in_array()
/// Kiểm tra phần tử có nằm trong mảng hay không ?
$fruit = ['buoi', 'tao', 'hong', 'le', 'man',];
if(in_array('tao', $fruit)){
    echo 'Phần tử này có tồn tại trong mảng';
}else{
    echo 'Không tồn tại trong mảng';
}
echo '<br>';

/// 9. array_key_exists()
/// Kiểm tra key có tồn tại trong mảng không?
$infoPerson = [
    'name' => 'Nguyen Van Teo',
    'age' => 29,
    'address' => 'Ho Chi Minh'
];
if(array_key_exists('age', $infoPerson)){
    echo 'Key có tồn tại trong mảng';
}else{
    echo 'Không tồn tại trong mảng';
}
echo '<br>';

/// 10. array_unique()
/// Xoá các phần tử trùng nhau trong mảng - trả về 1 mảng mới
$arrNumber = [1,6,3,2,1,3,1,4,2,5,3,6,4,7];
$arrUnique = array_unique($arrNumber);
print_r($arrUnique);
echo '<br>';

/// 11. array_value()
/// Chuyển mảng không tuần tự về mảng tuần tự (tác động vào key của mảng)
$infoPerson = array_values($infoPerson);
print_r($infoPerson);
echo '<br>';

/// 12. array_sum()
/// Tính tổng các phần tử trong mảng (lưu ý: các phần từ phải kiểu Number)
$sum = array_sum($arrNumber);
echo $sum;
echo '<br>';

/// 13. array_slice()
/// Cắt-tách mảng con từ mảng ban đầu cho trước
/// lưu ý: tham số offset vị trí - đếm từ 0
///        tham số length độ dài - đếm từ vị trí offset là 1
///        tham số preserve_keys: giá trị mặc định FALSE - key được sắp xếp lại
///                               giá trị TRUE - key được giữ nguyên từ mảng ban đầu
$arrNumber2 = [1,2,3,4,5,6,7,8,9,10,11,12];
$child = array_slice($arrNumber2, 4, 4, true);
print_r($child);
echo '<br>';

/// 14. array_splice()
/// Thay thế các phần tử trong mảng - Trả về mảng mới bao gồm các phần tử đã được thay thế
array_splice($arrNumber2, 4, 3, [100, 200, 300]);
print_r($arrNumber2);
echo '<br>';

/// 15. end()
/// Lấy ra phần tử cuối cùng của mảng - nhưng không xóa phần tử ra khỏi mảng
$endElement = end($arrNumber2);
echo $endElement;
echo '<br>';
print_r($arrNumber2);
echo '<br>';

/// 16. asort(), arsort() - sắp xếp dựa các giá trị phần tử nằm trong mảng
$sortEle = [12, 7, 30, 8, 6, 1, 13, 10, 4];
// asort($sortEle); // asort - sắp xếp các giá trị phần tử tăng dần
arsort($sortEle); // arsort - sắp xếp các giá trị phần tử dần dần
print_r($sortEle);
echo '<br>';

/// 17. ksort(), krsort() - sắp sếp dựa các key nằm trong mảng
$sortKey = [
    'd' => 101,
    'b' => 102,
    'a' => 103,
    'c' => 104,
    '1' => 105
];
// ksort($sortKey); // ksort - sắp xếp các key tăng dần
krsort($sortKey); // krsort - sắp xếp các key giảm dần
print_r($sortKey);
echo '<br>';

/// Sắp xếp mảng bằng thuật toán
$sortEle = [12, 7, 30, 8, 6, 1, 13, 10, 4];

function increaseSort($arr){
    foreach($arr as $keyCompare => $valueCompare){
        foreach ($arr as $keySort => $valueSort){
            if($arr[$keySort] > $arr[$keyCompare]){
                $tmp =$arr[$keySort];
                $arr[$keySort] = $arr[$keyCompare];
                $arr[$keyCompare] = $tmp;
            }
        }
    }
    return $arr;
}

$rs = increaseSort($sortEle);
print_r($rs);
echo '<br>';

/// Viết hàm kiểm tra xem phần tự có nằm trong mảng không?

function array_element_exists($element, $arr){
    $flag = false;
    foreach ($arr as $key => $value){
        if($element === $value) {
            $flag = true;
            // return true;
        }
    }
    // return false;
    return $flag;
}

if(array_element_exists(1, $sortEle)){
    echo 'Ton tai';
}else{
    echo 'Khong ton tai';
}

echo '<br>';

$url = 'https://vnexpress.net/youtube-gmail-sap-4206279.html';
/// Viết hàm lấy ra id bài viết
function getIdPost($url){
    $arr = explode('-', $url);
    $end = end($arr); // 4206279.html
    /// Ham intval la ra so nguyen trong chuoi
    return intval($end);
}

$id = getIdPost($url);
echo $id;
echo '<br>';

$url2 = 'https://vnexpress.net/quy-hoach-va-tieu-chuan-chuc-danh-uy-vien-bo-chinh-tri-4206059.html';
$id2 = getIdPost($url2);
echo $id2;
echo '<br>';
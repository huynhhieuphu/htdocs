<?php
/// Các kiến thức làm việc với chuỗi trong PHP
/// Kiểu dữ liệu: string
$myString = 'This class php1908e';
/// Hàm gettype($bien) là hàm kiểm tra kiểu dữ liệu
echo gettype($myString);
echo "<br>";
/// khi khai báo chuỗi torng php thì phải đặt trong dấu nháy đơn hoặc dấu nháy kép
/// Sử dụng dấu nháy đơn -> khi trong chuỗi không chứa biến nên dùng nháy đơn
/// Ngược lại khi trong chuỗi có chứa biến thì -> nên dùng dấu nháy kép

/// Toán tử nối chuỗi trong PHP là dấu chấm .
/// Trong Javascript thì nối chuỗi là dấu cộng +
$myString2 = 'Hôm nay là thứ 6 ';
$myString3 = 'Ngày mai sẽ là thứ 7';
echo $myString2 . $myString3;
echo "<br>";

$number = 3;
/// Cú pháp khi viết biến nằm trong chuỗi
$myString4 = "1 cộng 2 bằng {$number}";
echo $myString4;
echo "<br>";
$myString5 = '1 cộng 2 bằng {$number}';
echo $myString5;
echo "<br>";

/// Bao dấu ngáy đơn trong dấu nháy đơn
/// Hoặc bao dấu ngáy kép trong dấu nháy kép
$myString6 = "Hom thu 3 \"Viet Nam\" hoa 'Thai Lan'";
echo $myString6;
/// Khi dấu nháy kép bao lấy dấu nháy kép, hoặc dấu nháy đơn bao lấy dấu đơn thì cần có dấu gạch chéo ngược \ đứng đằng trước
/// Còn nháy đơn bao lấy nháy kép, hoặc ngược lại dấu kép bao lấy dấu đơn thì sử dụng bình thường
echo '<br>';

/********************* Các hàm xử lý với chuỗi trong PHP *********************/

/// 1 - biến chuỗi về mảng
$fruit = 'tao, chanh, quyt, nho, cam, buoi';
$arrFruit = explode(', ', $fruit);
print_r($arrFruit);
echo '<br>';

/// 2 - biến mảng về chuỗi
$strFruit = implode(', ', $arrFruit);
echo $strFruit;
echo '<br>';

/// 3 - Đếm ký tự nằm trong chuỗi
$nameClass = 'LPHP1908E';
echo strlen($nameClass);
echo '<br>';

/// Lưu ý: hàm strlen ngoài đếm ký tự còn đếm cả dấu
$myName = "Phú";
echo strlen($myName);
echo '<br>';
/// hàm mb_strlen chỉ đếm các ký tự chính, không đếm dấu
echo mb_strlen($myName);
echo '<br>';

/// 4 - Đếm số từ nằm trong chuỗi
$strWordCount = 'Sap duoc nghi tet roi';
echo str_word_count($strWordCount);
echo '<br>';
/// Lưu ý: hàm str_word_count cũng giống hàm strlen đếm luôn dấu (nên sử dụng với từ không dâu)
$strWordCount2 = 'Sắp được nghỉ tết rồi';
echo str_word_count($strWordCount2);
echo '<br>';

/// 5 - lặp lại chuỗi
echo str_repeat($strWordCount2, 3);
echo '<br>';

/// 6 - Tìm kiếm và thay thế chuỗi
$string2 = 'Sap duoc nghi he roi, he nay vui lam';
echo str_replace('he','tet', $string2);
echo '<br>';

/// 7 - Mã hoá chuỗi -> thành 32 kí tự, mã hoá 1 chiều
$password = 'no password';
echo md5($password);
echo '<br>';
$password2 = 'no password';
echo md5($password2);
echo '<br>';

/// 8 - Chuyển các thẻ html thành những 1 ký tự bình thường
$html = "<script>alert('Hello word')</script>";
echo htmlentities($html);

/// 9 - Chuyển các ký tự có liên quan html thành thẻ html
$html2 = htmlentities($html);
// echo html_entity_decode($html2);
echo '<br>';

/// 10 - Cho phép giữ lại các thẻ html, liên kê các thẻ giữ lại trong tham số thứ 2 trong chuỗi
$tag = '<h1><u><i>Hello world !!!</i></u></h1>';
echo strip_tags($tag, '<u><i>');
/// Mặc định nếu không truyền tham số thứ 2, sẽ loại tất cả thẻ html trong chuỗi đó
echo '<br>';
echo strip_tags($tag);
echo '<br>';

/// 11 - Tách chuỗi từ vị trí cho trước tới độ dài của chuỗi cần tách
/// Lưu ý: trong 1 chuỗi bắt đầu từ vị trí 0, độ dài đếm từ 1.
$subStr = 'bao gio cho den ngay mai, ngay mai se den ngay mai';
$childStr = substr($subStr, 3, 5);
echo $childStr;
echo '<br>';

/// 12 - Tách chuỗi từ ký tự cho trước
/// Lưu ý: nếu từ cho trước có nhiều hơn 1 từ nằm trong chuỗi, nó bắt đầu từ ký tự đầu tiên tìm thấy
echo strstr($subStr, 'den ');
echo '<br>';

/// 13 - Tìm vị trí ký tự nằm trong chuỗi
/// Lưu ý: nếu có nhiều ký tự, nó sẽ tìm vị trí đầu tiên tìm thấy
$string7 = 'Bao gio duoc nghi tet ?';
$pos = strpos($string7, '?');
if($pos !== false){
    // Tìm thấy
    echo $pos;
}else{
    // Không tìm thấy
    echo 'not found';
}
echo '<br>';

/// Bài tập: trong url .html luôn luôn đứng cuối
/// và trong url không bao giờ có dấu chấm (.) trong phần nội dung link
$url = 'www.motthanhvien.xyz/tin-tuc/cong-ty-tuyen-bo-pha-san.html';
$url2 = 'www.motthanhvien.xyz/tin-tuc/thanh-pho-moi.php';
/// lấy ra phần mở rộng (đuôi html) của url: .html

function findExtensionUrl($extension, $url){
    $pos = strpos($url, $extension);
    if($pos !== false){
        //return strstr($url, $extension) . '<br>';
        return substr($url, $pos, strlen($url)) . '<br>';
    }
    return 'not found';
}

echo findExtensionUrl('.html', $url);
echo findExtensionUrl('.php', $url2);

/// 14,15 - Xoá các ký tự nằm 2 đầu
/// Mặc định không có tham số thứ 2 sẽ hiểu xoá khoảng trắng
$trimStr = '***Hello World xyz***';
echo trim($trimStr, '*');
echo '<br>';
/// ltrim xoá các ký tự bên trái
echo ltrim($trimStr, '*');
echo '<br>';
/// rtrim xoá các ký tự bên phải
echo rtrim($trimStr, '*');
echo '<br>';
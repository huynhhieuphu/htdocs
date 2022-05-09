<?php
// Các kiến thức về biểu thức chính quy: regular expression
// Lưu ý: biếu thức chính quy chỉ áp dụng duy nhất string, không áp dụng number, array...

$string = "chung ta dang hoc php co ban";
// từ "php" có nằm trong chuỗi không?
// so khớp - so sánh chuỗi "php" thoả mãn điều kiện nào của chuỗi "chung ta dang hoc php co ban"

// viết biểu thức chính quy kiểm tra điều kiện đưa ra
$expression = '/php/';
/*
 * cú pháp biểu thức thức chính quy bắt buộc nằm trong /noi_dung_bieu_thuc_chinh_quy/
 * */

// viết biểu thức chính quy kiểm tra 'php' có BẮT ĐẦU trong chuỗi "chung ta dang hoc php co ban"
$expression2 = '/^php/';

// kiểm tra 'php' có NẰM CUỐI trong chuỗi không ?
$expression3 = '/php$/';

// để kiểm tra TUYỆT ĐỐI 1 chuỗi
$string2 = 'c';
$expression4 = '/^c$/';

// kiểm tra các ký tự được cho phép, độ dài 1 ký tự hoặc nhiều ký tự
$string3 = 'abcdxyz';
$expression5 = '/^[a-z]+$/';

// kiểm tra độ dài cho phép các ký tự
$string4 = 'abcdx';
$expression6 = '/^[a-z]{3,}$/';
/*
 * Giải thích, trong biểu thức chính quy có 2 điều kiện:
 * 1 - cho phép chữ viết thường => [a-z]
 * 2 - độ dài của ký tự => {3} hoặc {3,5} hoặc {3,} hoặc +
 *     còn mặc định không có hiểu {1}
 *
 * */

// Kiểm tra có phải là chữ số không?
$number = '123';
$expression7 = '/^[0-9]+$/';

// Bài tập: Kiểm tra 1 chuỗi có 3 chữ số hay không?
$number2 = '123';
$expression8 = '/^[1-9][0-9]{2}$/';

// Bài tập: Kiểm tra 1 chuỗi có 3 chữ số đều là số chẵn?
$number3 = '608';
//$expression9 = '/^[1-9][0,2,4,6,8]{2}$/';
$expression9 = '/^[1-9][^1,3,5,7,9]{2}$/';
/*
 * Lưu ý: dấu ^ trong dấu [] hiểu là phủ định, các giá trị bên trong không được phép dùng
 * */

// Bài tập: Kiểm tra 1 chuỗi có 5 chữ số, số 1,4 tự do, số 2 số chẵn, số 3 số lẻ, số 5 chia hết cho 5?
$number4 = '12340';
$expression10 = '/^[1-9][0,2,4,6,8][1,3,5,7,9][0-9][0,5]$/';

// Bài tập: Kiểm tra chuỗi số có phải là sđt của nhà mạng viettel không?
$phone = '0975039889';
$exp_viettel = '/^[0](9[6-8]|3[2-9])\d{7}$/';

// dấu ngoặc () để gom nhóm biểu thức chính quy
// viết tắt [0-9] = \d

// Bài tập: kiểm tra trong chuỗi có thẻ mở có html đó hay không
$html = "Toi dang hoc <strong>php</strong>";
$exp_tag = '/<.*?>|<\/.*?>/';

// Bài tập: viết biểu thức chính quy kiểm tra định dạng ngày tháng
// format= dd/mm/yyyy

$date = '29/02/2020';
$exp_date = '/^(0[1-9]|[1-2][0-9]|3[0,1])\/(0[1-9]|1[0-2])\/([1-2][0-9]{3})$/';


// hàm preg_match() - kiểm tra biểu thức chính quy
//if(preg_match($exp_viettel, $phone, $matches)){
//    echo 'ok';
//// Dùng để in ra
//    print_r($matches);
//}else{
//    echo 'error';
//}

if(preg_match($exp_date, $date, $matches)){
    echo '<pre>';
    print_r($matches);

    $day = (int)$matches[1];
    $month = (int)$matches[2];
    $year = (int)$matches[3];

    if($month === 2){
        if($day === 29){
            //Kiểm tra có phải nằm nhuần không
            if(($year % 4 === 0 && $year % 100 !== 0 && $year % 400 !==0) || ($year % 100 === 0 && $year % 400 === 0)){
                echo 'Dinh dang dung - nam nhuan';
            }else{
                echo 'Sai dinh dang - k phai nhuan';
            }
        }elseif ($day > 29){
            echo 'Sai dinh dang';
        }else{
            echo 'Dinh dang dung';
        }
    }
}else{
    echo 'error';
}

echo '<br>';
//59K1-980.46
$biensoxe = '59K1-932.62';
$exp_bienso = '/^(41|5\d)([K,L,M]1)\-(\d{3}\.\d{2}$|\d{4})$/';

if(preg_match($exp_bienso, $biensoxe, $matches)){
//    echo '<pre>';
//    print_r($matches);

    echo 'dung';
}else{
    echo 'sai';
}

echo '<br>';
echo '==================================================================';
echo '<br>';

// Bài tập Viết biểu thức chính quy kiểm tra - độ mạnh yếu của mật khẩu:
// Yêu cầu: 8 kí tự trở lên, ít nhất 1 chữ hoa, 1 thường, 1 chữ số

$pass = '1abQq213x';
$exp_pass = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/';

/*
 * This regex will enforce these rules:
 * At least one upper case English letter, (?=.*?[A-Z])
 * At least one lower case English letter, (?=.*?[a-z])
 * At least one digit, (?=.*?[0-9])
 * At least one special character, (?=.*?[#?!@$%^&*-])
 * Minimum eight in length .{8,} (with the anchors)
 * */


if(preg_match($exp_pass, $pass, $matches)){
    echo '<pre>';
    print_r($matches);

    echo 'manh';
}else{
    echo 'yeu';
}
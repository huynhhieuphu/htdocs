    <?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////// Regular Expression

$subject = 'chung ta dang hoc php co ban';

$pattern = '/php/'; // chuỗi biểu thức luôn luôn bắt đầu dấu gách chéo, kết thúc gách chéo
$pattern2 = '/^php/'; // kí tự ^ trong chuỗi phải bắt đầu bằng
$pattern3 = '/php$/'; // kí tự $ trong chuỗi phải kết thúc bằng

$subject2 = 'c';
$pattern2_1 = '/^c$/'; // dùng TUYỆT ĐỐI vừa kí tự ^ và kí tự $ 

$subject3 = 'aaabcxy';

$pattern3_1 = '/[a-z]/'; // kí tự ngoặc vuông [] đươc cho phép sử dụng [a-z][A-Z][0-9]
$pattern3_2 = '/^[a-z]+$/'; // kí tự cộng - cho phép ít nhât 1 kí tự hoặc nhiều hơn
$pattern3_3 = '/^[a-z]{3,8}$/'; // kí tự ngoặc nhọn {min, max} chỉ độ dài tối hiếu, tối đa kí tự cho phép
$pattern3_4 = '/^[a-z]{3,}$/'; // độ dài tối thiểu 3 kí tự, tối đa vô hạn
$pattern3_5 = '/^[a-z]{3}$/'; // độ dài đúng 3 kí tự

$subject4 = '123';
$pattern4_1 = '/^[0-9]+$/';

// bài tập: kiểm tra có phải 3 chữ số hay không, số 0 không đc bắt đầu
$test = '138';
// $regex = '/^[1-9][0-9]{2}$/';
$regex = '/^[1-9][0-9][02468]$/';
$regex2 = '/^[1-9][0-9][^13579]$/'; // [^] phủ định không cho phép kí tự nào trong dấu ngoặc vuông []


// bài tập 2: kiểm tra 5 chữ số
// số 1: tự do
// sô 2: số chẳn
// sô 3: số lẻ
// số 4: tự do
// số 5: chia hết cho 5
$test2 = '18320';
$regex2_1 = '/^[0-9][02468][^02468][0-9][05]$/';

// kiểm tra chuỗi của nhà mạng viettel không
$phoneNumber = '0965039889';
$regex_phoneNumber = '/^[0](9[6-8]|3[2-9])\d{7}$/';

// +84|84|0|123456789
$phoneNumber2 = '+84965039889';
$regex_phoneNumber2 = '/^(\+84|84|0)\d{9}$/';

// if(preg_match($regex_phoneNumber2, $phoneNumber2)) {
//     echo 'match';
// }else {
//     echo 'not match';
// }
// die();

// kiểm tra có phải thẻ mở và thẻ đóng html không ?
$html = "Chao mung <strong>the strong</strong> den hoc";
$regex_openHtml = '/(\<[a-zA-Z]+\>).*(\<\/[a-zA-Z]+\>)/';

// kiểm tra định dạng ngày tháng năm dd/mm/yyyy
$testDate = '29/02/2024';
$regex_date = '/^([0][1-9]|[12]\d|[3][01])\/([0][1-9]|[1][0-2])\/(\d{4})$/';

if(preg_match($regex_date, $testDate, $match)){
    echo 'thoa man dieu kieu';
    echo '<pre>';
    print_r($match);
    echo '</pre>';
    
    $day = $match[1];
    $month = $match[2];
    $year = $match[3];
    if($month == 2){
        if($day == 29){
            // kiểm tra năm nhuận
            // 1.Năm nhuận là năm chia hết cho 400
            // 2.Năm nhuận là năm chia hết cho 4 nhưng không chia hết cho 100
            if($year % 400 === 0){
                echo 'dung dinh dang';
            }elseif($year % 4 === 0 && $year % 100 !== 0){
                echo 'dung dinh dang';
            }else{ 
                echo 'khong dung dinh dang';
            }
        }else if($day > 29){
            echo 'khong dung dinh dang';
        }else{
            echo 'dung dung dinh dang';
        }
    }
}else{
    echo 'khong thoa man dieu kien';
}


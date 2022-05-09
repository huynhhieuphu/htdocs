<?php
    /**
     * <?php //thẻ mở php, bắt buộc phải có 
     *    //code php
     * <? //thẻ đóng, có thể không cần nếu chỉ code duy nhất php, 
     *      còn nếu có các ngôn ngữ khác thì bắt buộc phải có, để hiểu rằng chứa php bên trong đó
     * */ 

    // echo 'Hello world';

    /////////////////////////////////////////////////////////////////////////////////////////////////////////// /// KHAI BÁO BIẾN
    $myName = 'tony teo'; // bắt đầu khai báo bằng dấu đô la $, ký tự đầu tiên KHÔNG phải là số hoặc khoảng trắng
    // biến phân biệt chữ hoa chữ thường
    $MyName = 'lorem ipsum';
    $my_name = 'lorem ipsum 2';

    //***Kỹ thuật biến tham chiếu tới giá trị của biến khác - cú pháp $$tenBien;
    $a = 'demo'; // giá trị của biến lại là tên của biến khác.
    $demo = 'lorem ipsum 3';
    echo $$a; //OUTPUT: lorem ipsum 3
    echo '<br>';

    //*** Khai báo HẰNG SỐ
    // khai báo hằng số javascript dùng từ khóa const PI = 3.14
    // còn trong PHP có 2 cách:
    // cách 1: từ khóa const
    const PI =  3.14;
    // cách 2: từ khóa define('TEN_HANG_SO', gia tri hang so);
    define('LIMIT_ROWS', 3);
    
    // lưu ý: biến HẰNG SỐ không cần có dấu đô la $
    echo PI;
    echo '<br>';
    echo LIMIT_ROWS;

    // Khác nhau giữa const và define() là const sử dụng được bên trong class, còn define thì không
    echo '<br>';
    //*** keyword: defined('BIEN_HS') kiểm tra hằng số có định nghĩa chưa ?
    if(defined('PI')){
        echo 'ton tai HANG SO';
    }else{
        echo 'khong ton tai HANG SO';
    }

    // code PHP có thể render HTML,CSS,JS đều đc
    echo '<br>';
    echo '<h1>Learning PHP</h1>';
    echo '<br>';

    /////////////////////////////////////////////////////////////////////////////////////////////////////////// /// CÁC HÀM XỬ LÝ VỀ BIẾN

    $myString = 'lorem ipsum';
    $myNumber = 10;
    $checking = true;
    $myNull = null;
    echo gettype($myString); // lấy ra kiểu dữ liệu của biến
    echo '<br>';
    echo gettype($myNumber);
    echo '<br>';
    echo gettype($checking);
    echo '<br>';
    echo gettype($myNull);
    echo '<br>';
    echo gettype(PI);
    echo '<br>';

    $myMoney = null; // lưu ý: '' == false == 0 == null về mặt giá trị đều bằng nhau
    //***Hàm empty() kiểm tra giá trị của biến có rỗng hay không ? KHÔNG có kiểm tra kiểu dữ liệu
    if(empty($myEmpty)){
        echo 'rong';
    }else{
        echo 'khong rong';
    }

    echo '<br>';
    //***Hàm isset() kiểm tra biến đó tồn tài hay không ? khi biến đó được khai báo và không gán bằng null
    if(isset($myMoney)){
        echo 'ton tai';
    }else{
        echo 'khong ton tai';
    }
    echo '<br>';

    $numOne = '10'; // NUMBER STRING, đều kiện chuỗi phải là số
    $numTwo = 20;
    $numThree = $numOne + $numTwo;
    echo $numThree;
    echo '<br>';
    // Trong javascript dấu cộng + vừa là phép toán học và vừa là phép gán
    // để kiểm tra biến có phải số hay không dùng ? phủ định hàm isNaN 

    // Trong php dấu cộng + chỉ là phép toán học

    //***Hàm is_numeric() kiểm tra có phải số hoặc chuỗi số hay không?
    if(is_numeric($numOne)){
        echo 'la chuoi so';
    }else{
        echo 'khong phai la chuoi so';
    }
    echo '<br>';

    /////////////////////////////////////////////////////////////////////////////////////////////////////////// /// Toán tử và biểu thức

    //*** Spaceship operator : so sánh 2 biểu thức. 
    //Nếu biểu thức bên trái ($a1) lớn hơn biểu thức bên phải ($b1), trả về 1.
    //Nếu biểu thức bên trái ($a1) nhỏ hơn biểu thức bên phải ($b1), trả về -1.
    //Nếu cả hai biểu thức bằng nhau, trả về 0.
    $a1 = 10;
    $b1 = 9;
    $c1 = $a1 <=> $b1;
    echo $c1;
    
    echo '<br>';

    //***NULL Coalescing Operator
    //Kiểm tra biến có tồn tại ? Nếu tồn tại lấy giá trị chính biến đó, ngược lại lấy giá trị biến bên phải.
    $x = 10;
    $z = 9;
    $y = $z ?? $x; // isset($z) ? $z : $x;
    echo $y;


?>
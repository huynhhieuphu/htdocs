<?php
// Các toán tử và phép toán trong php
// Toán tử này chỉ làm việc với phiên bản php 7.x trở lên

// TOÁN TỬ ??
// nó sẽ kiểm tra xem biến có tồn tại hay không ? nếu tồn tại sẽ lấy giá trị chính nó : ngược lại sẽ lấy giá trị mới thiết lập
$a = 10;
$b = $aa ?? 11; // tương đương với câu điều kiện: isset($a) ? $a : 11;
$c = $a + $b;
echo $c . "<br>";

// TOÁN TỬ <=>
// kết quả trả về là -1: khi biểu thức bên tay trái nhỏ hơn biếu thức bên tay phải
// kết quả trả về là 0: khi 2 biểu thức bằng nhau
// kết quả trả về là 1: khi biểu thức bên tay trái lớn hơn biếu thức bên tay phải

$x = 10;
$y = 10;
$z = $x <=> $y;
echo $z;

echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// if...else || if...elseif...else
// Trường hợp
$check = 100;
if ($check == '100') {
    echo 'Yes';
} elseif ($check == '99') {
    echo 'No';
} elseif ($check == '98') {
    echo 'A';
} else {
    echo 'B';
}
// KẾT QUẢ: No

// switch
$month = 1;
switch ($month) {
    case 1:
        // doSomeThing
        break;
    case 2:
        // doSomeThing
        break;
    default:
        // doSomeThing
        break;
}

echo "<hr>";

// for
for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
}

// lưu ý: khi sử dụng vòng lặp tránh rơi vào vòng lặp vô hạn
// phải biết handle (xử lý) vòng lặp hoạt động ra làm sao - bắt đầu chạy từ đâu - dừng tại đâu

echo "<hr>";

// while
$j = 10;
while ($j <= 20) {
    echo $j . "<br>";
    $j++;
}
// vòng lặp while chạy từ 0 đến N
// có thể dừng ngay từn đầu khi điều kiện là sai
// ngược lại chạy vô tân nếu điều kiện luôn đúng

echo "<hr>";

// do...while
$k = 20;
do {
    echo $k . "<br>";
    $k++;
} while ($k <= 30);
// vòng lặp do...while chạy từ 1 đến N
// làm gì thì làm luôn chạy đúng 1 lần

echo "<hr>";

// Bài tập: dùng do...while lấy ra các số chẵn từ 1 đến 100.
$chan = 1;
do{
    if($chan % 2 == 0) {
        echo $chan . "<br>";
    }
    $chan++;
}while($chan <= 100);

echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// toán tử tăng (++) - toán tử giảm (--)

// ++ trước - giá trị biến thay đổi mà không cần đợi gì.
// ++ sau - giá trị thay đổi khi có tác động tới tới biến đó
$numOne = 10;
$numTwo = 9;
$rs = $numOne++ + ++$numTwo - ++$numOne - --$numTwo + $numTwo--;
//       10     +     10    - ++numOne  - --$numTwo + $numTwo--; 11, 10
//       10     +     10    -   12      -     9     + $numTwo--; 12, 9
//       10     +     10    -   12      -     9     +      9   ;
//              20          -   12      -     9     +      9   ;
//                      8               -     9     +      9   ;
//                                  -1              +      9   ;
//                                              8
echo $rs;
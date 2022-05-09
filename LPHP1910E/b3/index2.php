<?php
/// ***Các kiến thức về mảng trong PHP***
/// ***Khai báo mảng 1 chiều - mảng tuần tự

/// Lưu ý:
/// Trong Javascript, mảng là kiểu dữ liệu object
/// Trong PHP, mảng được xây dưng riêng 1 kiểu dữ liệu là mảng

// Mảng không định nghĩa key đó là mảng tuần tự
$num = [1, 2, 3, 4, 5, 6, 7, 8, 9];

echo "<pre>";
print_r($num);
echo "</pre>";

/// ***Khai báo mảng 1 chiều - mảng không tuần tự (mảng liên kết)
/// Lưu ý: Key trong mảng PHP chỉ có 2 kiểu giá trị là string hoặc number

$fruit = [
    'name' => 'apple',
    'color' => 'red',
    'weight' => 3
];

echo "<pre>";
print_r($fruit);
echo "</pre>";

/// ***Khai báo mảng đa chiều - là các phần tử nằm bên trong là 1 mảng khác. Mảng lồng bên trong mảng
$students = [
    [
        'name' => 'Nguyen Van Teo',
        'age' => 28,
        'money' => [100, 200 ,300]
    ],
    [
        'name' => 'Vo Thi No',
        'age' => 29,
        'work' =>[
            ['name_w' => 'abc', 'm' => 100],
            ['name_w' => 'xyz', 'm' => 200]
        ]
    ]
];

/// Mảng tuần tự nghĩa mảng có key là số, được sắp xếp theo thứ tự tuần tự.
/// Mảng không tuần tự là mảng không phải là số và không được sắp xếp.


echo "<pre>";
print_r($students);
echo "</pre>";

/// ***Cách truy cập vào 1 phần tử nằm trong mảng
echo $num[6]; // OUTPUT: 7
echo "<br>";

echo $fruit['name']; // OUTPUT: apple
echo "<br>";

echo $students[1]['name']; // OUTPUT: Vo Thi No
echo "<br>";

/// ***Cách truy cập vào nhiều phần tử nằm trong mảng
/// 1 - for...
/// điều kiện của for cần phải biết giá trị bắt đầu - điểm kết thúc
/// Trong javascript để biết độ dài của mảng dùng hàm array.prototype.length
/// Đối với PHP thì dùng hàm count() - lưu ý hàm count sẽ đếm bắt đầu từ 1;

for($i = 0; $i < count($num); $i++){
    echo $num[$i] . "<br>";
}

/// 2 - foreach
foreach ($num as $key => $item){
    echo "key - {$key} : value - {$item} <br>";
}

/// 1 trường hợp, người lập trình không cần quan tâm key, chỉ cần thao tác value thì làm như sau:
foreach ($num as $item){
    echo "value - {$item} <br>";
}

<?php
/// ***Các kỹ thuật xử lý mảng trong PHP

/// Trong javascript: array kiểu dữ liệu của nó là object
/// Trong php: array kiểu dữ liệu của nó vẫn là array
/// Cú pháp khai báo mảng bằng ngoặc vuông [] được sử dụng từ phiên bản 5.x trở lên

/// Mảng 1 chiều nghĩa là các phần tử nằm bên trong mảng là giá trị đơn
/// Mảng đa chiều là các phần tử nằm bên trong mảng là mảng con khác - đơn giản mảng trong mảng là mảng đa chiều
/// Mảng tuần tự là key của nó được sắp xếp tăng dần từ 0 trở đi

/// Mảng 1 chiều - tuần tự

$fruit = ['cau', 'dua', 'du du', 'xoai', 'sung'];
/// in mảng
/// không dùng echo
/// dùng print_r() hoặc var_dump()

echo '<pre>';
print_r($fruit);

/// Mảng 1 chiều - không tuần tự
/// key do người lập trình thiết lập, thiết lập key với kiểu chuỗi hoặc kiểu số
$infoStudents = [
    'name' => 'Nguyen van teo',
    'age' => 29,
    'e-mail' => 'teonv@hoihan.xyz'
];

print_r($infoStudents);

/// Mảng đa chiều - tuần tự
$arrMuti = [1, 2, 3, [100, 200, 300], 4, 5, ['a', 'b', ['x', 'y', 'z'], 'c'], 6];
print_r($arrMuti);

/// Mảng đa chiều - kho tuần tự
$infoCats = [
    [
        'name' => 'Tom',
        'age' => 3,
        'color' => 'blue',
        'country' => ['Viet-nam', 'Lao', 'Cam-pu-chia']
    ],
    [
        'name' => 'Jerry',
        'age' => 2,
        'color' => 'black',
        'country' => ['USA', 'Nga', 'China']
    ]
];
print_r($infoCats);

/// Truy cập vào 1 phần tử nằm trong mảng
/// cú pháp: nameArray[key];
echo $fruit[4];
echo '<br>';
echo $infoCats[0]['country'][1];
echo '<br>';

/// Duyệt qua các phần tử nằm trong mảng
$arrMyNumber = [1, 2, 3, 4, 5, 6, 7, 8, 9];

/// foreach: thường dùng để duyệt các mảng không tuần tự
foreach ($arrMyNumber as $key => $item) {
    echo "key: {$key} - value: {$item} <br>";
}
/// 1 số trường hợp lập trình viên không cần dùng $key trong foreach
foreach ($arrMyNumber as $item) {
    echo "value: {$item} <br>";
}

foreach ($infoCats as $key => $item) {
    echo "Key: {$key} <br>";
    echo "Color: {$item['color']} <br>";
}

$persons = [
    [
        'name' => 'nguyen van ti',
        'age' => 20,
        'infoworks' => [
            ['name_w' => 'Giao Hang', 'money' => 100],
            ['name_w' => 'Bao Ve', 'money' => 50]
        ]
    ],
    [
        'name' => 'nguyen van suu',
        'age' => 20,
        'infoworks' => [
            ['name_w' => 'Nhan Vien', 'money' => 200],
            ['name_w' => 'Ban Hang', 'money' => 150]
        ]
    ]
];
echo '<br>';

foreach ($persons as $key => $value) {
    // Hàm isset trong trường hợp này kiểm tra $value['infoworks'] có tồn tại hay không ? nếu không tồn tại thì bỏ qua
    // Trường hợp nếu không có hàm isset, nếu duyệt mảng mà $value['infoworks'] không có sẽ sinh ra báo lỗi
    if(isset($value['infoworks'])){
        foreach($value['infoworks'] as $item){
            echo "Name work: {$item['name_w']} <br>";
        }
    }
}

// khai báo 1 mảng rỗng
$fooball = [];
// gán key và value vào mảng
$fooball['player'] = 'Messi';
$fooball['money'] = 100000;

print_r($fooball);

$arrMyNumber2 = [1,2,3,4,5,6,7,8,9,0];
$newNumberArr = [];
// Bài tập lấy ra tất cả các số chẵn cho vào mảng $newNumberArr
foreach ($arrMyNumber2 as $value){
    if($value % 2 === 0){
        $newNumberArr['chan'][] = $value;
    }elseif($value % 2 !== 0){
        $newNumberArr['le'][] = $value;
    }
}

print_r($newNumberArr);
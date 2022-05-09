<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////// mảng (Array)

///*** Khai báo mảng
/// 1 - Mảng tuần tự (enumerative array)
$fruits = ['cam','chanh','xa','rung'];
//  hoặc
$fruits2 = array('cam','chanh','xa','rung');

echo '<pre>';
print_r($fruits);
//echo '</pre>';
print_r($fruits2);

/// 2 - mảng không tuần tự
$infoStudent = ['id' => 1,'name' => 'Tony teo', 'age' => 30, 'address' => 'Sai Gon', 'isMale' => true];
print_r($infoStudent);

/// 3 - mảng đa chiều
$sudents = [
    [
        'id' => 1,
        'name' => 'Tony teo', 
        'age' => 30, 
        'address' => 'Sai Gon', 
        'isMale' => true, 
        'tutorials' => [
            ['name' => 'php', 'range' => 8],
            ['name' => 'js', 'range' => 8],
            ['name' => 'css', 'range' => 9],
            ['name' => 'html', 'range' => 10],
        ]
    ],
    [
        'id' => 2,
        'name' => 'Maria buoi',
        'age' => 22, 
        'address' => 'Can Tho', 
        'isMale' => false, 
        'tutorials' => [
            ['name' => 'php', 'range' => 8],
            ['name' => 'js', 'range' => 7],
            ['name' => 'css', 'range' => 8],
            ['name' => 'html', 'range' => 10],
        ]
    ]
];
print_r($sudents);
echo '<hr/>';

///*** Cách truy cập phần tử nằm trong mảng
// Cú pháp: $arr[key];

echo $fruits[1] . '<br>';
echo $infoStudent['name'] . '<br>';
echo $sudents[1]['tutorials'][2]['range'] . '<br>';
echo '<hr/>';

///*** duyệt qua các phần tử của mảng
/// cú pháp foreach ($arr as $key => $value){ //code };
foreach($fruits as $key => $value){
    echo "key: <b>{$key}</b> - value: <b>{$value}</b> <br>";
}
echo '<br/>';
foreach($infoStudent as $key => $value){
    echo "key: <b>{$key}</b> - value: <b>{$value}</b> <br>";
}
echo '<hr>';

///*** gán giá trị vào mảng
$sports = [];
$sports['name'] = ['tennis', 'football', 'chess'];
$sports['place'] = ['japan'];
print_r($sports);



// Bài tập: gán giá trị theo key tuần tự

$employees = [
    ['id' => 1, 'name' => 'Tony Teo', 'address' => 'Sai Gon', 'email' => 'tonyteo@test.com', 'room_id' => 102],
    ['id' => 2, 'name' => 'Maria Buoi', 'address' => 'Can Tho', 'email' => 'mariabuoi@test.com', 'room_id' => 104],
    ['id' => 3, 'name' => 'John Nguyen', 'address' => 'Vinh Long', 'email' => 'johnnguyen@test.com', 'room_id' => 101],
];

$rooms = [
    ['id' => 101, 'name' => 'Ke Toan', 'leader' => 'Hien'],
    ['id' => 102, 'name' => 'Sale', 'leader' => 'Quyen'],
    ['id' => 103, 'name' => 'Hanh Chanh', 'leader' => 'Thuy'],
    ['id' => 104, 'name' => 'IT', 'leader' => 'Hoang']
];

foreach($employees as $k_emp => $emp){
    foreach($rooms as $k_room => $room){
        // Tìm phòng các nhân viên tương ứng với mã phòng
        if($emp['room_id'] == $room['id']){
            // Cập nhật thêm tên phòng và tên trưởng phòng tương ứng với các nhân viên đó.
            $employees[$k_emp]['room_name'] = $room['name'];
            $employees[$k_emp]['leader_room'] = $room['leader'];
        }
    }
}

print_r($employees);
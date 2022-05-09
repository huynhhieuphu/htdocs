<?php
$staffs = [
    '101' => [
        'id' => 1,
        'name' => 'Van Teo',
        'Email' => 'vanteo@gmail.com'
    ],
    '102' => [
        'id' => 2,
        'name' => 'Van Ty',
        'Email' => 'vanty@gmail.com'
    ],
    '104' => [
        'id' => 3,
        'name' => 'Van Tu',
        'Email' => 'vantu@gmail.com'
    ],
    '103' => [
        'id' => 3,
        'name' => 'Van Tu',
        'Email' => 'vantu@gmail.com'
    ]
];
$rooms = [
    [
        'id' => 101,
        'name' => 'Ke Toan'
    ],
    [
        'id' => 102,
        'name' => 'Hanh chinh'
    ],
    [
        'id' => 103,
        'name' => 'IT'
    ]
];

// Bài tập: gán giá trị theo key không tuần tự
foreach($staffs as $k_staff => $staff){
    foreach($rooms as $k_room => $room){
        if(isset($staffs[$room['id']])){
            $staffs[$room['id']]['room_name'] = $room['name'];
        }
    }
}

echo '<pre>';
print_r($staffs);

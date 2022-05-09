<?php
$infoStaff = [
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
    '103' => [
        'id' => 3,
        'name' => 'Van Tu',
        'Email' => 'vantu@gmail.com'
    ]
];
$rooms = [
    [
        'id' => 101,
        'name' => 'To chuc'
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

foreach ($rooms as $key => $room) {
    if(isset($infoStaff[$room['id']])){
        $infoStaff[$room['id']]['name_room'] = $room['name'];
    }
}

echo '<pre>';
print_r($infoStaff);

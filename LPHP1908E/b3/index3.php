<?php
/// Tiếp các kiến thức về mảng
/// Bài tập: Tạo 1 mảng biểu diễn thông tin cho 3 phòng làm việc
$rooms = [
    ['id' => 1, 'name_room' => 'Hanh Chanh', 'manager' => 'Van A', 'year' => 2009],
    ['id' => 2, 'name_room' => 'Phap Ly', 'manager' => 'Thi B', 'year' => 2009],
    ['id' => 3, 'name_room' => 'IT', 'manager' => 'Tran C', 'year' => 2009]
];
/// Tạo 1 mảng biểu diễn thông tin của nhân viên
$staffs = [
    ['id' => 101, 'room_id' => 1, 'name' => 'Nguyen Teo', 'address' => 'Ha Noi', 'money' => 200000],
    ['id' => 102, 'room_id' => 3, 'name' => 'Tran Suu', 'address' => 'Da Nang', 'money' => 250000],
    ['id' => 103, 'room_id' => 2, 'name' => 'Ly Mao', 'address' => 'Hue', 'money' => 300000],
];
/// Cần xử lý lấy thông tin tên phòng và tên phòng đổ vào mảng dữ liệu staffs tương ứng cho từng nhân viên
foreach ($staffs as $key => $staff){
    foreach ($rooms as $room){
        // Cần xem nhân viên thuộc các phòng nào ?
        if($room['id'] === $staff['room_id']){
            // Cần lấy tên phòng và tên trưởng phòng cho vào mảng staff
            $staffs[$key]['name_room'] = $room['name_room'];
            $staffs[$key]['name_manager'] = $room['manager'];
        }
    }
}

//echo '<pre>';
//print_r($staffs);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array PHP</title>
</head>
<body>
    <table width="100%" border="1" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Ma NV</th>
                <th>Ho Ten</th>
                <th>Dia Chi</th>
                <th>Ten Phong</th>
                <th>Truong phong</th>
                <th>Tien Luong</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <?php $totalMoney = 0; ?>
        <?php foreach($staffs as $key => $item): ?>
            <?php $totalMoney += is_numeric($item['money']) ? $item['money'] : 0; ?>
            <tr>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['address'] ?></td>
                <td><?php echo $item['name_room'] ?></td>
                <td><?php echo $item['name_manager'] ?></td>
                <td><?php echo number_format($item['money']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">Tong tien: </td>
                <td><?php echo number_format($totalMoney); ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>

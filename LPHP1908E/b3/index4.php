<?php
/// Bài tập: Mảng thông tin tỉnh thành phố
$cities = [
    ['id' => 1, 'name' => 'Ho Chi Minh'],
    ['id' => 2, 'name' => 'Long An'],
    ['id' => 3, 'name' => 'Da Nang'],
    ['id' => 4, 'name' => 'Can Tho'],
    ['id' => 5, 'name' => 'Ha Noi']
];
$districts = [
    ['id' => 1, 'city_id' => 3, 'name_dist' => 'Thanh Khe'],
    ['id' => 2, 'city_id' => 2, 'name_dist' => 'Ben Luc'],
    ['id' => 3, 'city_id' => 1, 'name_dist' => 'Quan 1'],
    ['id' => 4, 'city_id' => 5, 'name_dist' => 'Hoan Kiem'],
    ['id' => 5, 'city_id' => 3, 'name_dist' => 'Ngu Hanh Son'],
    ['id' => 6, 'city_id' => 1, 'name_dist' => 'Quan 2'],
    ['id' => 7, 'city_id' => 4, 'name_dist' => 'Ninh kieu'],
    ['id' => 8, 'city_id' => 2, 'name_dist' => 'Duc Hoa'],
    ['id' => 9, 'city_id' => 1, 'name_dist' => 'Cu Chi'],
    ['id' => 10, 'city_id' => 5, 'name_dist' => 'Dong Da'],
    ['id' => 11, 'city_id' => 3, 'name_dist' => 'Cam Le'],
    ['id' => 12, 'city_id' => 4, 'name_dist' => 'Binh Thuy'],
    ['id' => 13, 'city_id' => 5, 'name_dist' => 'Ba Dinh'],
    ['id' => 14, 'city_id' => 2, 'name_dist' => 'Can Duoc'],
    ['id' => 15, 'city_id' => 1, 'name_dist' => 'Quan 9'],
    ['id' => 16, 'city_id' => 3, 'name_dist' => 'Son Tra'],
    ['id' => 17, 'city_id' => 5, 'name_dist' => 'Ha Ba Trung'],
    ['id' => 18, 'city_id' => 2, 'name_dist' => 'Can Giuoc'],
    ['id' => 19, 'city_id' => 4, 'name_dist' => 'Cai Rang'],
];

//foreach($districts as $k_dist => $val_dist){
//    foreach($cities as $val_city){
//        if($val_city['id'] === $val_dist['city_id'])
//        $districts[$k_dist]['name_city'] = $val_city['name'];
//    }
//}

foreach($cities as $k_city => $val_city){
    foreach($districts as $val_dist){
        if($val_dist['city_id'] === $val_city['id']) {
            $cities[$k_city]['list_dist'][$val_dist['id']] = $val_dist;
        }
    }
}

//echo '<pre>';
//print_r($cities);
//die;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thông tin tỉnh thành</h1>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Mã Tỉnh/TP</th>
                <th>Tên Tỉnh/TP</th>
                <th>Tên Quận/Huyện</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cities as $item): ?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['name'] ?></td>
                    <td></td>
                    <?php foreach ($item['list_dist'] as $value): ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><?php echo $value['name_dist'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

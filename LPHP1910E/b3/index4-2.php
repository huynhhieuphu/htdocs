<?php
$categories = [
    ['id' => 1, 'name' => 'Tennis', 'parent_id' => 7],
    ['id' => 2, 'name' => 'Giao Thong', 'parent_id' => 9],
    ['id' => 3, 'name' => 'Khoe Dep', 'parent_id' => 4],
    ['id' => 4, 'name' => 'Suc khoe', 'parent_id' => 0],
    ['id' => 5, 'name' => 'Quan Su', 'parent_id' => 12],
    ['id' => 6, 'name' => 'Bong Da', 'parent_id' => 7],
    ['id' => 7, 'name' => 'The Thao', 'parent_id' => 0],
    ['id' => 8, 'name' => 'Cuoc song do day', 'parent_id' => 12],
    ['id' => 9, 'name' => 'Thoi Su', 'parent_id' => 0],
    ['id' => 10, 'name' => 'Lich Thi Dau', 'parent_id' => 7],
    ['id' => 11, 'name' => 'Chinh tri', 'parent_id' => 9],
    ['id' => 12, 'name' => 'The Gioi', 'parent_id' => 0],
    ['id' => 13, 'name' => 'Nguoi viet 5 chau', 'parent_id' => 12],
    ['id' => 14, 'name' => 'Dinh Duong', 'parent_id' => 4],
    ['id' => 15, 'name' => 'Video', 'parent_id' => 0],
];

/// Bài 1: lấy ra tất cả phần tử có parent_id = 0;
$data = [];
foreach ($categories as $k_cate => $val_cate) {
    if ($val_cate['parent_id'] == 0) {
        $data[$val_cate['id']] = $val_cate;
        $data[$val_cate['id']]['sub_cate'] = [];
    }
}

/// Bài 2: Lấy tất cả những item con có liên quan đến parent
foreach ($categories as $item){
    foreach ($data as $key => $value){
        if($value['id'] == $item['parent_id'] && $item['parent_id'] != 0){
            $data[$value['id']]['sub_cate'][$item['id']] = $item;
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories -  Menu 2 cap</title>
</head>
<body>
<ul>
    <?php foreach ($data as $item): ?>
        <li><a href="#"><?= $item['name'] ?></a>
            <?php if (isset($item['sub_cate']) && !empty($item['sub_cate'])): ?>
                <ul>
                    <?php foreach ($item['sub_cate'] as $key => $value): ?>
                        <li><a href="#"><?= $value['name'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>

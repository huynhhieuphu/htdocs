<?php
// Bài tập: Tạo cây menu 2 cấp

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
    ['id' => 16, 'name' => 'Hai', 'parent_id' => 15]
];

$data = [];
foreach($categories as $key => $category){
    // kiểm tra cate nào root
    if($category['parent_id'] == 0){
        $data[$category['id']] = $category; // gán toàn bộ giá trị root
        $data[$category['id']]['sub_level'] = []; //tạo ra 1 key với mảng rỗng, chứa các sub menu
    }
}

// echo '<pre>';
// print_r($data);
// die();

foreach($data as $root){
    foreach($categories as $key_cate => $category){
        // kiểm tra sub menu nào thuộc root và kiểm tra sub menu không phải là root
        if($root['id'] == $category['parent_id'] && $category['parent_id'] != 0) {
            $data[$root['id']]['sub_level'][$category['id']] = $category;   
        }   
    }
}

// echo '<pre>';
// print_r($data);
// die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=u, initial-scale=1.0">
    <title>menu 2 cap</title>
</head>
<body>
    <ul>
        <?php foreach($data as $category): ?>
            <li>
                <a href="<?= $category['id'] ?>"><?= $category['name'] ?></a>
            </li>
            <?php if(isset($category['sub_level']) && !empty($category['sub_level'])): ?>
                <ul>
                    <?php foreach($category['sub_level'] as $sub_menu): ?>
                        <li>
                            <a href="<?= $sub_menu['id'] ?>"><?= $sub_menu['name'] ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
        <?php endforeach ?>
    </ul>
</body>
</html>
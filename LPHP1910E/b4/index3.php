<?php
/// Các hàm bổ trợ xử lý về file

/// 1 - Kiểm tra xem các file có tồn tại hay không ?
if(file_exists('../data/demo.txt')){
    echo 'file tồn tại';
}else{
    echo 'file không tồn tại';
}

echo '<br>';

/// 2 - Kiểm tra xem file có cấp quyền ghi hay không ?
if(is_writeable('../data/demo.txt')){
    echo 'có cấp quyền ghi';
}else{
    echo 'không có cấp quyền ghi';
}

echo '<br>';

/// 3 - ghi nội dung vào file - lưu ý: ghi đè nội dung cũ
file_put_contents('../data/demo.txt', 'nội dung ghi vào file');

/// 4 - đổi tên của file
// rename('../data/text.txt', '../data/demo.txt');

/// 5 - copy file
// copy('../data/demo.txt', '../data/test.txt');

/// 6 - xoá file
// unlink('../data/test.txt');

/// 7 - kiểm tra thư mục (folder) có tồn tại hay không ?
if(is_dir('../data')){
    echo 'folder tồn tại';
}else{
    echo 'không tồn tại folder';
}

echo '<br>';

/// 8 - tạo mới thư mục (folder)
// phủ định nếu chưa tồn tại thì tạo thư mục
if(!is_dir('../myFolder')){
    mkdir('../myFolder');
}else{
    echo 'đã tồn tại folder';
}
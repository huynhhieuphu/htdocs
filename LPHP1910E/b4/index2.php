<?php
// Mở file - Lưu ý: khi mở file nhớ cấp quyền thao tác file
$file = fopen('../data/test.txt', 'w');

if($file){
    // echo 'mở file thành công';

    // Đọc dữ liệu nằm trong file - đọc từ đầu file đến cuối file
    // filesize: là kích thước của size

    // $data = fread($file, filesize('../data/test.txt'));

    $news = 'hello world !!!';
    // Để ghi dữ liệu vào file trong tham số fopen dùng
    // r : đọc file
    // r+ : vừa đọc vừa ghi + tạo file mới nếu không tồn tại
    // w : chỉ ghi
    // w+ : chỉ ghi + tạo file mới nếu không tồn tại
    // a : ghi nối tiếp
    // a+ : ghi nối tiếp + tạo file mới nếu không tồn tại

    // Ghi dữ liệu
    fwrite($file, $news);
    // Lưu ý: khi ghi dữ liệu, để đọc file - bắt buộc - phải mở lại file


    $file2 = fopen('../data/test.txt', 'r');
    $data2 = fread($file2, filesize('../data/test.txt'));

    // Đóng file
    fclose($file);
    // Lưu ý: mở 2 lần thì cũng phải đóng 2 lần
    fclose($file2);

    // echo $data;
    echo $data2;
}else{
    echo 'không mở được file';
}
<?php
/// Các kiến thức xử lý với file trong PHP

/*
 * Các quyền truy cập file
 *      r: chỉ đọc file
 *      r+: vừa đọc vừa ghi
 *      w: chỉ ghi
 *      w+: vừa đọc vừa ghi
 *      a: chỉ ghi
 *      a+: vừa đọc vừa ghi
 * */

/*
$path = 'DATA/test.txt'; // đường dẫn file
$mode = 'w'; // quyền truy cập file

/// *** Mở file ***
$fopen = fopen($path, $mode);

if($fopen){
    //echo 'Mở File Thành Công';

    /// *** Đọc dữ liệu file ***
    // $data = fread($fopen, filesize($path));
    // echo $data;

    /// *** Ghi dữ liệu file ***
    $input = 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...';
    fwrite($fopen, $input);

    // *** Đọc dữ liệu mới vừa ghi ***
    // 1. Mở lại file
    $fopen2 = fopen($path, 'r');
    // 2. Đọc lại file
    $data2 = fread($fopen2, filesize($path));

    fclose($fopen2);
    fclose($fopen);

    echo $data2;
}else{
    echo 'Mở file thất bại :(';
}

*/

/// Các hàm tiện ích khác làm việc với file

/// Kiểm tra xem file có tồn tại hay không?
if(file_exists('DATA/test.txt')){
    echo 'File ton tai';
}else{
    echo 'Khong ton tai';
}
echo '<br>';

/// Kiểm tra xem file có được cấp quyền ghi không?
if(is_writable('DATA/test.txt')){
    echo 'YES';
}else{
    echo 'NO';
}
echo '<br>';

/// Ghi dữ liệu vào file mà không cần dùng fwrite()
// file_put_contents('DATA/test.txt', 'XYZ');

/// Đổi tên file
// rename('DATA/test.txt', 'DATA/filename.txt');

/// Copy file
@copy('DATA/filename.txt', 'DATA/filename-copy.txt');

/// Xoá file
// unlink('DATA/filename-copy.txt');

/*
 * @copy
 *
 * Kí tự @: không hiển thị warning
 *
 * */

echo '<br>';
/// Kiểm tra xem đường dẫn có folder tồn tại hay không?
if(is_dir('DATA2')){
    echo 'ton tai';
}else{
    /// Tạo folder
    mkdir('DATA2');
}
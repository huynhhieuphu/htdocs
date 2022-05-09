<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////// Các hàm xử về file

///*** Kiểm tra file có tồn tại hay không ?
if(file_exists('../data/test.txt')){
    echo 'co ton tai file';
}else{
    echo 'khong ton tai file';
}
echo '<br>';

///*** Kiểm tra file có quyền ghi hay không trên ?
// lưu ý: quyền ghi trên Hệ điều hành
if(is_writable('../data/test.txt')){
    echo 'co quyen ghi file';
}else{
    echo 'khong co quyen ghi file';
}
echo '<br>';

///*** Ghi nội dung file - không cần mở file, ghi file, đóng file
file_put_contents('../data/test.txt', 'Learing PHP basic');

///*** Đổi tên file
// rename('../data/test2.txt', '../data/newFile.txt');

///*** Copy file
// copy('../data/test.txt', '../data/test3.txt');

///*** Xóa file
// unlink('../data/test3.txt');

///*** Kiểm tra folder có tồn tại hay không ?
if(is_dir('../data')){
    echo 'co ton tai folder';
}else{
    echo 'khong ton tai folder';
}
echo '<br>';

///*** Tạo folder
// mkdir('../data/newData');
<?php
// Hàm kiểm tra định dạng file
function checkTypeFile($typeFile){
    // Cần kiểm tra $typeFile có phải có đuôi ảnh là: png, jpg, jpeg
    $allowType = ['image/png','image/jpg','image/jpeg'];
    // cần xem $typeFile có nằm trong mảng $allowType
    if(in_array($typeFile, $allowType)){
        return true;
    }
    return false;
}
// Hàm kiểm tra kích thước file
function checkSizeFile($sizeFile){
    // Cần kiểm xem $sizeFile có nhỏ hơn 3mb không ?
    // 1024 bytes = 1 kb
    // 1024 kb = 1 mb
    if($sizeFile > 3 * 1024 * 1024){
        return false;
    }
    return true;
}
<?php
// autoload trong php
namespace bootstrap;

// Khái niệm lazy-loading: đặt tên file và tên class trùng nhau (viết hoa chữ cái đầu)
// class Boostrap sẽ la nơi tự động load các file vào ứng dụng
class Bootstrap
{
    public function __construct()
    {
        // hàm spl_autoload_register: tự động đăng ký nạp file,
        // truyền vào array(2 phần tử: 1 là tên class, 2 là tên hàm required
        spl_autoload_register([$this, '_myAutoload']);
    }

    private function _myAutoload($nameFile)
    {
        // $nameFile: chính là file cần nạp
        // lấy tên file thông qua tên namespace
        // vd: namespace App/Controller/HomeController;
        // Cần lấy đường dẫn thông qua namespace. vd đường dẫn file: App\Controller\HomeController.php
        $nameFile = str_replace('\\', '/', trim($nameFile, '\\')) . ".php";
        // Giải thích tham số truyền vào hàm str_replace::
        // search: tìm những dấu gạch chéo trong chuỗi (do là kí tự đặc nên phải dùng thêm 1 dấu gạch chéo - đặt ở phía trước)
        // replace: thay thế bằng dấu gạch chéo ngược
        // tham số thứ 3: loại bỏ những trước và sau chuỗi những dấu có gạch chéo

        if (file_exists($nameFile)) {
            require_once $nameFile;
        } else {
            echo "not found";
        }
    }
}
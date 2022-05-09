<?php
namespace bootstrap;

class Autoload
{
    public function __construct()
    {
        // Đăng ký autoload: truyền vào 1 mảng 2 phần tử (1 là tên class, 2 tên phương thức xử autoload)
        spl_autoload_register([$this, "_myAutoload"]);
    }

    // Trong lập trình thực tế: 1 gạch dưới được hiểu là pham vị truy cập private do lập trình tự viết
    private function _myAutoload($file)
    {
        // $file: file cần auto load, ví dụ: index6.php
        $file = str_replace("\\", "/", trim($file, "\\")) . ".php";
        if (file_exists($file)) {
            require_once $file;
        }
    }
}

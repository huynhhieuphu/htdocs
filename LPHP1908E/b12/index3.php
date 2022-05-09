<?php
require "Controllers/Home.php";

// "use" dùng để chỉ định namespace cần dùng tới
// "as" dùng để đặt lại tên ngắn gọn của use
use \b12\Controllers\Home as HomeControllers;

$home = new HomeControllers;
print_r($home->index());
echo "<br>";

echo $home->getNameSpace();
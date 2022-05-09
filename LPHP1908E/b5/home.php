<?php
/// Sẽ nhận dữ liệu từ index.php gửi lên
/// Vì bên index.php gửi dữ liệu lên bằng phương method GET nên chúng ta sẽ sử dụng biến toàn cục kiểu mảng của php
/// là $_GET để lấy dữ liệu về

//echo '<pre>';
//print_r($_GET);

$id = $_GET['id'] ?? 0;
$name = $_GET['name'] ?? '';
$age= $_GET['age'] ?? 0;

/*
 * nhắc lại bài cũ:
 * 2 dấu chấm ?? -> là điều kiện isset() nếu tồn tại thì trả về kết quả đó, còn ngược lại sẽ trả về kết quả mặc định.
 *
 * $id = isset($_GET['id']) ? $_GET['id'] : 0;
 * $name = isset($_GET['name']) ? $GET['name'] : '';
 *
 * */

echo "id: {$id} - name: {$name} - age: {$age}";
echo '<br>';

// Kiểm tra xem thực sự có tồn tại method get từ form gửi lên không ? (kiểm tra người dùng bấm nút login chưa)
// dùng hàm isset() để kiểm tra biến đó có tồn tại hay không?
if(isset($_GET['btnLogin'])){
    // lấy các thông tin từ form gửi lên
    // lưu ý: key là giá trị thuộc tính name trong thẻ input (bên html)
    $user = $_GET['username'] ?? '';
    $pass = $_GET['password'] ?? '';
    echo "username: {$user} - password: {$pass}";
}

/// Lưu ý:
/// Trường hợp nào không sử dụng method get là: tính bảo mật như mật khẩu, các thông tin nhạy cảm tuyệt đối không sử dụng method get.
/// Trường hợp nào được sử dụng: những thông tin cơ bản cần thiết cho việc lấy dữ liệu như id, name,... không quan tính bảo mật

/// Phương thức get sẽ lưu vào cookie trong trình duyệt nên khi ta gọi lại sẽ nhanh hơn.


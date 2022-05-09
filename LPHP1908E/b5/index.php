<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--  Sử dụng thẻ a để gửi dữ liệu lên url trình duyệt bằng method GET  -->
<a href="home.php?id=10&name=nguyen van teo&age=29">Send data to home.php</a>

<!-- sử dụng form để gửi dữ liệu lên url trình duyệt bằng method GET -->
<!--
mặc định nếu không truyền bất kỳ tham số trong method, tham số sẽ: get
mặc định nếu không truyền bất kỳ tham số trong action, mặc định sẽ nhận dữ liệu tại file gửi yêu cầu đó.
-->
<form method="get" action="home.php">
    <label for="username">User name:</label>
    <input type="text" name="username" id="txtUsername">
    <br><br>
    <label for="Password">Password:</label>
    <input type="password" name="password" id="pwdPassword">
    <br><br>
    <button type="submit" name="btnLogin" id="btnLogin">Login</button>
</form>
<hr>
<form method="post" action="server/total.php">
    <label for="numberOne">Number 1:</label>
    <input type="text" name="numberOne" id="numberOne">
    <br><br>
    <label for="numberTwo">Number 2:</label>
    <input type="text" name="numberTwo" id="numberTwo">
    <br><br>
    <select name="gender" id="gender">
        <option value="">--Chọn giới tính--</option>
        <option value="0">Nam</option>
        <option value="1">Nữ</option>
    </select>
    <br><br>
    <input type="checkbox" name="agree" value="dongy">Đồng ý, các điều khoản trên...
    <br><br>
    <input type="radio" name="radioCheck" value="0"> Nam
    <input type="radio" name="radioCheck" value="1"> Nữ
    <br><br>
    <button type="submit" name="btnTotal" id="btnTotal">Total</button>
</form>

</body>
</html>

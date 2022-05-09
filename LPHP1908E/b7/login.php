<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="server/handleLogin.php" method="post">
        <label for="username">User name: </label>
        <input type="text" name="username" id="js-username">
        <br><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="js-password">
        <br><br>
        <input type="checkbox" name="remember" id="js-rememeber">
        <label for="remember">Remember Me</label>
        <a href="#">Forget Password</a>
        <br><br>
        <button type="submit" name="btnLogin">login</button>
    </form>
</body>
</html>
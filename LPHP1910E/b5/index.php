<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send data method GET</title>
</head>
<body>
    <h1>Method GET</h1>
    <a href="index2.php?id=1011&name=nguyen van teo&age=29">send data</a>
    <br><br>

    <form action="server/login.php" method="get">
        <label for="uname">User name:</label>
        <input type="text" name="uname" id="uname">
        <br><br>
        <label for="pwd">Passwod:</label>
        <input type="password" name="pwd" id="pwd">
        <br><br>
        <button type="submit" name="btnLogin">Login</button>
    </form>
    <br><br>

    <h1>Login Method POST</h1>
    <form action="server/login2.php" method="post">
        <label for="uname">User name:</label>
        <input type="text" name="uname" id="uname">
        <br><br>
        <label for="pwd">Passwod:</label>
        <input type="password" name="pwd" id="pwd">
        <br><br>
        <button type="submit" name="btnLogin">Login</button>
    </form>
</body>
</html>
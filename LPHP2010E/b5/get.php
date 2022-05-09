<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send data method GET</title>
</head>
<body>
    <h1>Method GET</h1>
    <a href="controllers/home.php?id=1&name=tonyteo&age=30" target="_bank">send data</a>
    <br><br>

    <form action="controller/login.php" method="get">
        <label for="user">Username: </label>
        <input type="text" name="user"><br><br>
        <label for="pass">Password: </label>
        <input type="password" name="pass"><br><br>
        <button type="submit" name="btnLogin">Login</button>
    </form>
</body>
</html>
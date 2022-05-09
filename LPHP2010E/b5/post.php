<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send data method POST</title>
</head>
<body>
    <h1>Method POST</h1>
    
    <form action="controllers/loginPost.php" method="post">
        <label for="user">Username: </label>
        <input type="text" name="user"><br><br>
        <label for="pass">Password: </label>
        <input type="password" name="pass"><br><br>
        <button type="submit" name="btnLogin">Login</button>
    </form>
</body>
</html>
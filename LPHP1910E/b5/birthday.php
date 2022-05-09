<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Birthday</title>
</head>
<body>
    <h1>Check Birthday</h1>
    <form action="server/checkBirthday.php" method="post">
        <label for="birthday">Chọn Ngày, Tháng sinh: </label>
        <input type="date" name="birthday" id="birthday">
        <button type="submit" name="btnCheck">Check</button>
    </form>
    <?php if(isset($_GET['state']) && !empty($_GET['state'])): ?>
        <?php if($_GET['state'] === 'empty'): ?>
            <b><i>Vui long nhap ngay thang sinh...</i></b>
        <?php elseif($_GET['state'] === 'ok'): ?>
            <?php if(isset($_GET['status'])): ?>
                <?php if($_GET['status'] == 0): ?>
                    <h1 style="color: red">Chuc mung sinh nhat</h1>
                <?php elseif($_GET['status'] == 1): ?>
                    <h1 style="color: green">Chua toi</h1>
                <?php elseif($_GET['status'] == 2): ?>
                    <h1 style="color: gray">da qua</h1>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP</title>
</head>
<body>
    <?php
        // lưu ý: ít khi sử dụng PHP trong file HTML. Chỉ lấy thông báo, không xử lý logic trong HTML
        $state = $_GET['state'] ?? '';
        $num = $_GET['num'] ?? '';
    ?>

    <?php if($state === 'ok'): ?>
        <h4>Đây là số nguyên tố</h4>
    <?php elseif($state === 'error'): ?>
        <h4>Không phải số nguyên tố</h4>
    <?php endif; ?>

    <h3>Kiểm tra số nguyên tố</h3>
    <form method="post" action="server/checkNumber.php">
        <label for="number">Number:</label>
        <input type="number" name="number" id="number" value="<?= $num ?>"><br><br>
        <button type="submit" name="btnCheck">Checking</button>
    </form>
</body>
</html>
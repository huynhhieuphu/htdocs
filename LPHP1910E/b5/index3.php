<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập</title>
</head>
<body>
    <?php
        //Lưu ý: thao tác PHP ở đây chỉ mang tính chất xử lý view dữ liệu, không nên xử lý logic tại đây
        $state = $_GET['state'] ?? '';
        $result = $_GET['result'] ?? '';
        $input = $_GET['input'] ?? '';
    ?>

    <?php if($state === 'empty'): ?>
        <h5 style="color: red">Vui lòng nhập dãy số</h5>
    <?php endif; ?>

    <form action="server/check.php" method="post">
        <label for="txtNumberString">Nhập số</label>
        <input type="text" name="txtNumberString" placeholder="0,1,2,3,4,5" value="<?= $input; ?>">
        <button type="submit" name="btnCheck">Kiểm tra số nguyên</button>
    </form>

    <?php if($state === 'ok' && $result !== ''): ?>
        <h5>Các số nguyên tố trong dãy số là: <?= $result ?></h5>
    <?php elseif($state === 'ok' && $result === ''): ?>
        <h5>Không có số nào nguyên tố trong dãy số</h5>
    <?php endif; ?>

</body>
</html>
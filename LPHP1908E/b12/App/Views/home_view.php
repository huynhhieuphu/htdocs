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
    <h1>Danh sách người dùng</h1>
    <table border="1" width="100%" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $key => $item): ?>
                <tr>
                    <td><?= $item["id"] ?></td>
                    <td><?= $item["name"] ?></td>
                    <td><?= $item["pass"] ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
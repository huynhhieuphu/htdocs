<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Upload file</title>
</head>
<body>
    <h1>Upload file</h1>
    <?php $state = $_GET['message'] ?? '' ?>
    <?php if(!empty($state)): ?>
        <h3>state: <span style="text-transform: uppercase;"><?= $state ?></span></h3>
    <?php endif; ?>

    <form action="controllers/uploadFile.php" method="post" enctype="multipart/form-data">
        <label for="upload-file">File đính kèm: </label>
        <input type="file" name="upload-file">
        <br><br>
        <button type="submit" name="btnUpload">Upload</button>
    </form>
</body>
</html>
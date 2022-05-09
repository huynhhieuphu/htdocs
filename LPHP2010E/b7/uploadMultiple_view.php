<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Upload Multiple Files</title>
</head>
<body>
    <h1>Upload Multiple Files</h1>
    <?php
        define('PATH_IMAGES', 'public/uploads/');
        $state = $_GET['state'] ?? ''; 
        $files = $_GET['files'] ?? '';
        $arrImages = explode(',', $files); 
    ?>

    <?php if(!empty($state)): ?>
        <h3>state: <span style="text-transform: uppercase;"><?= $state ?></span></h3>
    <?php endif; ?>

    <form action="controllers/uploadMulti.php" method="post" enctype="multipart/form-data">
        <label for="upload-file">File đính kèm: </label>
        <input type="file" name="upload-file[]" multiple>
        <br><br>
        <button type="submit" name="btnUpload">Upload</button>
    </form>
    <br><br>
    
    <?php foreach($arrImages as $image): ?>
        <img src="<?= PATH_IMAGES.$image ?>" alt="<?= $image ?>" width="200">
    <?php endforeach; ?>
</body>
</html>
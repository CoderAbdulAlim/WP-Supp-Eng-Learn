<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <pre>
    <?php
    if (isset($_FILES['upfile'])) {
        // print_r($_FILES);
        $checkFileType = ['image/png', 'image/jpg', 'image/jpeg'];
        // if(in_array($_FILES['upfile']['type'], $checkFileType) == false){
        if(!in_array($_FILES['upfile']['type'], $checkFileType)){
            echo 'Only png, jpg, jpeg are permited';
            exit;
        }
        $microtime = microtime(true);
        $destination = 'uploads/' . $microtime . '_' . $_FILES['upfile']['name'];

        move_uploaded_file($_FILES['upfile']['tmp_name'], $destination);
    } else {
        echo "No file uploaded.";
    }
    ?>
    </pre>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="upfile">
        <input type="submit" name="submit" value="File Upload">
    </form>

</body>

</html>
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
    print_r($_FILES);
    // $destination = 'uploads/' . $_FILES['upfile']['name'];
    // $destination = 'uploads/' . time() . '_' . $_FILES['upfile']['name'];
    $microtime = microtime(true);
    $destination = 'uploads/' . $microtime . '_' . $_FILES['upfile']['name'];

    move_uploaded_file($_FILES['upfile']['tmp_name'], $destination);
    ?>
    </pre>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="upfile">
        <input type="submit" name="submit" value="File Upload">
    </form>
</body>

</html>
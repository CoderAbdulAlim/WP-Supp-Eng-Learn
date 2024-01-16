<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image gallery</title>
</head>

<body>
    <pre>
    <?php
    if (isset($_FILES['upfile'])) {
        print_r($_FILES);
        $allowFileType = ['image/png', 'image/jpg', 'image/jpeg'];
        $microtime = microtime(true);
        $destination = 'gallery/' . $microtime . '_';
        $allowfileSizeMB = 2;
        $allowFileSize = 1024 * 1024 * $allowfileSizeMB;

        foreach ($_FILES['upfile']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['upfile']['name'][$key];
            $file_size = $_FILES['upfile']['size'][$key];
            $file_tmp = $_FILES['upfile']['tmp_name'][$key];
            $file_type = $_FILES['upfile']['type'][$key];

            if ($file_size >= $allowFileSize) {
                echo 'File permited size is ' . $allowfileSizeMB . ' MB';
                exit;
            }

            if (!in_array($file_type, $allowFileType)) {
                echo 'Only png, jpg, jpeg are permited';
                exit;
            }

            if (move_uploaded_file($file_tmp, $destination . $file_name)) {
                echo 'File uploaded successfully.';
            } else {
                echo 'Error uploading file.';
            }
        }
    } else {
        echo "No file uploaded.";
    }
    ?>
    </pre>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="upfile[]" multiple>
        <input type="submit" name="submit" value="File Upload">
    </form>

</body>

</html>
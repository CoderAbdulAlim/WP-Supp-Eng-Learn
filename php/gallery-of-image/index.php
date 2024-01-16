<?php
require 'function.php';
$fileUpload = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['upfile'])) {
    $upFiles = $_FILES['upfile'];
    $fileUpload = fileUpload($upFiles);
}

$images = directoryReader('gallery');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</head>

<body class="bg-gray-200 p-4">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <img class="h-16 w-auto rounded-lg" src="site-images\branding_munshigonj.png" alt="Branding Munshiganj">
                </a>
                <h1 class="text-2xl text-green-700"><strong>Branding<br>Munshiganj</strong></h1>
            </div>
        </div>

        <div>
            <h2 class="text-2xl mb-8 text-center"><strong>My Image Gallery</strong></h2>

            <!-- Upload Form START -->
            <form method="POST" enctype="multipart/form-data">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div class="relative rounded-full px-0 py-0 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        <input class="relative rounded-full" id="file_upload" type="file" name="upfile[]" multiple>
                        <button type="submit" name="submit" class="relative rounded-full font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-4 py-2.5 me-1 mb-0 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <span class="absolute inset-0" aria-hidden="true"></span>Upload File
                            <span aria-hidden="true">↑</span>
                        </button>
                    </div>
                </div>
            </form>
            <?php
            if ($fileUpload != '') {
                echo '<p class="text-red-500 font-bold">' . $fileUpload . '</p>';
            }
            ?>
            <!-- Upload Form END -->
        </div>

        <!-- Gallery START -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 border-t border-gray-300 pt-3">
            <?php
            // Check if any files were not found
            if (empty($images)) {
                echo '<p class="text-red-500 font-bold">Empty Gallery!</p>';
            } else {
                // Display images in the gallery
                foreach ($images as $image) {
                    echo '<div><img class="h-auto max-w-full rounded-lg" src="' . $image . '" alt=""></div>';
                }
            }
            ?>
        </div>
        <!-- Gallery END -->
    </div>
</body>

</html>
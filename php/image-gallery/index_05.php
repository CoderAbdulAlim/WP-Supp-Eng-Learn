<?php

require 'function.php';

$images = directoryReader('gallery');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
</head>

<body class="bg-gray-200 p-4">

    <div class="max-w-6xl mx-auto">
        <div class="flex item-center justify-between">
            <div class="flex">
                <h1 class="text-2xl mb-8"><strong>My Image Gallery</strong></h1>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 border-t border-gray-300 pt-3">
            <?php
            // Check if any files were not found
            if (empty($images)) {
                echo '<p class="text-red-500 font-bold">No files found!</p>';
                exit;
            }
            ?>
            <?php foreach ($images as $image) : ?>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="<?php echo $image ?>" alt="">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>
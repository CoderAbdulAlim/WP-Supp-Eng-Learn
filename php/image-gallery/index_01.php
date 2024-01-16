<?php

$my_directory = opendir('gallery');

while ($imageFile = readdir($my_directory)) {
    var_dump($imageFile);
}

closedir($my_directory);

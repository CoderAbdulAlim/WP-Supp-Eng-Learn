<?php

require 'function.php';

$images = directoryReader(my_directory: 'gallery');

// var_dump($images);

if (is_null($images)) {
    // echo 'No folder found!';
    // exit;
    die('No folder found!');
}

var_dump($images);

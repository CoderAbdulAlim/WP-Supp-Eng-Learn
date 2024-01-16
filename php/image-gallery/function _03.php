<?php


function directoryReader($my_directory, array $exclude = array('.', '..'))
{
    $file = [];

    if (!is_dir($my_directory)) {
        return null;
    }

    if (!($filesDirectory = opendir($my_directory))) {
        return null;
    }

    while (($file = readdir($filesDirectory)) !== false) {
        if (in_array($file, $exclude)) {
            continue;
        }

        $files[] = $my_directory . DIRECTORY_SEPARATOR . $file;
    }

    closedir($my_directory);

    return $files;

    // loop through the files
    // do some check
    // add to image array
    // return images array
}

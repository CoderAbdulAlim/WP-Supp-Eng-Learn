<?php


function directoryReader($my_directory, array $exclude = array('.', '..'))
{
    $file = [];

    if (!is_dir($my_directory)) {
        $notice = 'No folder found!';
        return $notice;
    }

    if (!($filesDirectory = opendir($my_directory))) {
        $notice = 'No folder found!';
        return $notice;
    }

    while (($file = readdir($filesDirectory)) !== false) {
        if (in_array($file, $exclude)) {
            continue;
        }

        $files[] = $my_directory . DIRECTORY_SEPARATOR . $file;
    }

    closedir($filesDirectory);

    if (!($files)) {
        $notice = 'No file found!';
        return $notice;
    }

    return $files;

    // loop through the files
    // do some check
    // add to image array
    // return images array
}

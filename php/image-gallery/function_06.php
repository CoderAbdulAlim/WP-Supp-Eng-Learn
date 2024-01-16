<?php

function directoryReader($my_directory, array $exclude = array('.', '..')) {
    $files = [];

    // if the directory is not exists
    if (!is_dir($my_directory)) {
        $notice = 'No folder found!';
        return $notice;
    }

    // if the directory is exists, then open the directory
    if (!($filesDirectory = opendir($my_directory))) {
        $notice = 'Unable to open folder!';
        return $notice;
    }

    // Read the directory inside
    while (($file = readdir($filesDirectory)) !== false) {
        // Exclude unidentify
        if (in_array($file, $exclude)) {
            continue;
        }

        // Generate full path to the file
        $filePath = $my_directory . DIRECTORY_SEPARATOR . $file;

        if (is_file($filePath)) {
            $files[] = $filePath;
        }
    }

    closedir($filesDirectory);

    return $files;
}

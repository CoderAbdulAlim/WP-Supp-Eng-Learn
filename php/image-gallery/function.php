<?php

function directoryReader($my_directory, array $exclude = array('.', '..'))
{
    $files = [];
    $allowFileTypes = ['image/png', 'image/jpg', 'image/jpeg'];
    $notice = '';

    // Check if the directory exists
    if (!is_dir($my_directory)) {
        $notice .= 'No folder found!';
        return $notice;
    }

    // Open the directory
    if (!($filesDirectory = opendir($my_directory))) {
        $notice .= 'Unable to open folder!';
        return $notice;
    }

    // Read the directory contents
    while (($file = readdir($filesDirectory)) !== false) {
        // Exclude unwanted files
        if (in_array($file, $exclude)) {
            continue;
        }

        // Generate full path to the file
        $filePath = $my_directory . DIRECTORY_SEPARATOR . $file;

        // File type checking
        $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($fileInfo, $filePath);

        if (!in_array($mimeType, $allowFileTypes)) {
            continue;
        }

        if (is_file($filePath)) {
            $files[] = $filePath;
        }
    }

    closedir($filesDirectory);

    return $files;
}

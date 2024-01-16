<?php

function fileUpload ($upFiles){
    // print_r($_FILES);
    $allowFileType = ['image/png', 'image/jpg', 'image/jpeg'];
    $microtime = microtime(true);
    $destination = 'gallery/' . $microtime . '_';
    $allowfileSizeMB = 2;
    $allowFileSize = 1024 * 1024 * $allowfileSizeMB;
    $notice = '';

    foreach ($upFiles['tmp_name'] as $key => $tmp_name) {
        $file_name = $upFiles['name'][$key];
        $file_size = $upFiles['size'][$key];
        $file_tmp = $upFiles['tmp_name'][$key];
        $file_type = $upFiles['type'][$key];

        // File size checking
        if ($file_size >= $allowFileSize) {
            $notice .= 'File permited size is ' . $allowfileSizeMB . ' MB';
            return $notice;
        }

        // File type checking
        if (!in_array($file_type, $allowFileType)) {
            $notice .= 'Only png, jpg, jpeg are permited';
            return $notice;
        }

        // File moving
        if (move_uploaded_file($file_tmp, $destination . $file_name)) {
            directoryReader('gallery');
        } else {
            $notice .= 'Error uploading file.';
            return $notice;
        }
    }
}

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

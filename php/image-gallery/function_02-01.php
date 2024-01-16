<?php


function directoryReader($my_directory, array $exclude = array('.', '..'))
{
    $file = [];

    if(!is_dir($my_directory)){
        return null;
    }

    return true;

    // loop through the files
    // do some check
    // add to image array
    // return images array
}

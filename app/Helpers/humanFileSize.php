<?php

/**
 * View Helper
 *
 * @package     DuckSell
 * @author      Milos Stojanovic <info@interactive32.com>
 * @copyright   Copyright 2008-2016 Interactive32.com
 */
function humanFileSize($bytes)
{
    if ($bytes >= 1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = 'N/A';
    }

    return $bytes;
}

// function humanFileSize($size,$unit="") {
//     if( (!$unit && $size >= 1<<30) || $unit == "GB")
//       return number_format($size/(1<<30),2)."GB";
//     if( (!$unit && $size >= 1<<20) || $unit == "MB")
//       return number_format($size/(1<<20),2)."MB";
//     if( (!$unit && $size >= 1<<10) || $unit == "KB")
//       return number_format($size/(1<<10),2)."KB";
//     return number_format($size)." bytes";
// }
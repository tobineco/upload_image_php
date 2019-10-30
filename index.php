<?php

ini_set('display_errors', 1);
define('MAX_FILE_SIZE', 1*1024*1024); //1MB
define('THUMBNAIL_WIDTH', 400);
define('IMAGES_DIR', __DIR__ . '/images');
define('THUMBNAIL_DIR', __DIR__ . '/thumbs');

if(!function_exists('imagecreatetruecolor')){
    echo 'GD not installed';
    exit;
}

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}



?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <titile>Image Uploader</titile>
        <style>
            body {
                text-align: center;
                font-family: Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php h(MAX_FILE_SIZE); ?>">
            <input type="file" name="image">
            <input type="submit" value="upload">
        </form>
        
    </body>
</html>
<?php
require_once 'ycon.php';

function build_ycon($filename, $seed='',$size=''){
    $hash = md5($seed);
    $image = ycon($hash, $size, 255, 255, 255);
    imagetruecolortopalette($image, false, 64);
//    header('Content-type: image/png');
    imagepng($image,$filename);
    imagedestroy($image);
    return true;
}

?>
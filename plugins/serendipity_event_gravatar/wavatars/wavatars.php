<?php
/*
Plugin Name: Wavatars
Plugin URI: http://www.shamusyoung.com/twentysidedtale/?p=1462
Description: A plugin which generates random avatars for comments.
Author: Shamus Young
Version: 1.0.0
Author URI: http://www.shamusyoung.com/twentysidedtale/
*/

define("WAVATAR_SIZE",          "80");
define("WAVATAR_BACKGROUNDS",   "4");
define("WAVATAR_FACES",         "11");
define("WAVATAR_BROWS",         "8");
define("WAVATAR_EYES",          "13");
define("WAVATAR_PUPILS",        "11");
define("WAVATAR_MOUTHS",        "19");

/*-----------------------------------------------------------------------------
Handy function for converting hus/sat/lum color values to RGB, which makes it
very easy to generate random-yet-still-vibrant colors.
-----------------------------------------------------------------------------*/

function wavatar_hsl ($h, $s, $l) 
{

    if ($h>240 || $h<0) return array(0,0,0);
    if ($s>240 || $s<0) return array(0,0,0);
    if ($l>240 || $l<0) return array(0,0,0);     
    if ($h<=40) {
        $R=255;
        $G=(int)($h/40*256);
        $B=0;
    } elseif ($h>40 && $h<=80) {
        $R=(1-($h-40)/40)*256;
        $G=255;
        $B=0;
    } elseif ($h>80 && $h<=120) {
        $R=0;
        $G=255;
        $B=($h-80)/40*256;
    } elseif ($h>120 && $h<=160) {
        $R=0;
        $G=(1-($h-120)/40)*256;
        $B=255;
    } elseif ($h>160 && $h<=200) {
        $R=($h-160)/40*256;
        $G=0;
        $B=255;
    } elseif ($h>200) {
        $R=255;
        $G=0;
        $B=(1-($h-200)/40)*256;
    }
    $R=$R+(240-$s)/240*(128-$R);
    $G=$G+(240-$s)/240*(128-$G);
    $B=$B+(240-$s)/240*(128-$B);
    if ($l<120) {
        $R=($R/120)*$l;
        $G=($G/120)*$l;
        $B=($B/120)*$l;
    } else {
        $R=$l*((256-$R)/120)+2*$R-256;
        $G=$l*((256-$G)/120)+2*$G-256;
        $B=$l*((256-$B)/120)+2*$B-256;
    }
    if ($R<0) $R=0;
    if ($R>255) $R=255;
    if ($G<0) $G=0;
    if ($G>255) $G=255;
    if ($B<0) $B=0;
    if ($B>255) $B=255;
    return array((int)$R,(int)$G,(int)$B);

}

/*-----------------------------------------------------------------------------
Helper function for building a wavatar.  This loads an image and adds it to 
our composite using the given color values.
-----------------------------------------------------------------------------*/

function wavatar_apply_image ($base, $part)
{

    $file = dirname(__FILE__).'/parts/' . $part . '.png';
    //echo $file . "<br>";
    $im = @imagecreatefrompng($file);
    if(!$im)
        return;
    imageSaveAlpha($im, true);
    imagecopy($base,$im, 0, 0, 0, 0, WAVATAR_SIZE, WAVATAR_SIZE);
    imagedestroy($im);

}

/*-----------------------------------------------------------------------------
Builds the avatar.
-----------------------------------------------------------------------------*/

function wavatar_build ($filename, $seed, $size)
{
	if (!function_exists (imagecreatetruecolor)) {
    	return false;
	}
    $face =         1 + (hexdec (substr ($seed,  1, 2)) % (WAVATAR_FACES));
    $bg_color =         (hexdec (substr ($seed,  3, 2)) % 240);
    $fade =         1 + (hexdec (substr ($seed,  5, 2)) % (WAVATAR_BACKGROUNDS));
    $wav_color =        (hexdec (substr ($seed,  7, 2)) % 240);
    $brow =         1 + (hexdec (substr ($seed,  9, 2)) % (WAVATAR_BROWS));
    $eyes =         1 + (hexdec (substr ($seed, 11, 2)) % (WAVATAR_EYES));
    $pupil =        1 + (hexdec (substr ($seed, 13, 2)) % (WAVATAR_PUPILS));
    $mouth =        1 + (hexdec (substr ($seed, 15, 2)) % (WAVATAR_MOUTHS));
    // create backgound
    $avatar = imagecreatetruecolor (WAVATAR_SIZE, WAVATAR_SIZE);
    //Pick a random color for the background
    $c = wavatar_hsl ($bg_color, 240, 50);
    $bg = imagecolorallocate ($avatar, $c[0], $c[1], $c[2]);
    imagefill($avatar,0,0,$bg);
    $c = wavatar_hsl ($wav_color, 240, 170);
    $bg = imagecolorallocate ($avatar, $c[0], $c[1], $c[2]);
    //Now add the various layers onto the image
    wavatar_apply_image ($avatar, "fade$fade");
    wavatar_apply_image ($avatar, "mask$face");
    imagefill($avatar, WAVATAR_SIZE / 2,WAVATAR_SIZE / 2,$bg);
    wavatar_apply_image ($avatar, "shine$face");
    wavatar_apply_image ($avatar, "brow$brow");
    wavatar_apply_image ($avatar, "eyes$eyes");
    wavatar_apply_image ($avatar, "pupils$pupil");
    wavatar_apply_image ($avatar, "mouth$mouth");
    //resize if needed
    if ($size != WAVATAR_SIZE) {
        $out = imagecreatetruecolor($size,$size);
        imagecopyresampled ($out,$avatar, 0, 0, 0, 0, $size, $size, WAVATAR_SIZE, WAVATAR_SIZE);
        //header ("Content-type: image/png");
        imagepng($out, $filename);
        imagedestroy($out);
        imagedestroy($avatar);
    } else {
        imagepng($avatar, $filename);
        imagedestroy($avatar);
    }
    return true;
}

?>

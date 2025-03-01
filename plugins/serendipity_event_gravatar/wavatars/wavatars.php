<?php
/*
Plugin Name: Wavatars
Plugin URI: http://www.shamusyoung.com/twentysidedtale/?p=1462
Description: A plugin which generates random avatars for comments.
Author: Shamus Young
Version: 1.1.3
Author URI: http://www.shamusyoung.com/twentysidedtale/
*/

define("AVATAR_SIZE",           '80');
define("WAVATAR_BACKGROUNDS",   '4');
define("WAVATAR_FACES",         '11');
define("WAVATAR_BROWS",         '8');
define("WAVATAR_EYES",          '13');
define("WAVATAR_PUPILS",        '11');
define("WAVATAR_MOUTHS",        '19');
define("WAVATAR_BLANK",         'wp-content/cache/wavatars/blank.png');

/*-----------------------------------------------------------------------------
This is used to help build the options page.
-----------------------------------------------------------------------------*/

function wavatar_row ($title, $field, $help='', $checkbox=false)
{

    echo '<tr valign="top"><th scope="row">';
    _e("$title");
    echo '</th><td>';
    if ($checkbox) {
        echo "<input name='$field' type='checkbox' id='$field' value='1' ";
        checked('1', get_option($field));
        echo '/>';
    } else { //not a checkbox
        echo "<input name='$field' type='text' id='$field' value='";
        form_option("$field");
        echo "'";
        echo ' size="40" /><br/>';
    }
    echo "$help";
    echo '</td></tr>';
    echo "\n\n";

}

/*-----------------------------------------------------------------------------
 This builds the options page where you can administrate the plugin rather
 than mucking about here in the source code.  Which you seem to be doing anyway.
-----------------------------------------------------------------------------*/

function wavatar_options ()
{

    $hidden_field_name = 'wavatar_update';
    echo '<div class="wrap">';
    echo '<h2>Wavatar Options</h2>';
    echo '<h3>Configuration</h3>';
    $variations = WAVATAR_BACKGROUNDS * WAVATAR_FACES * WAVATAR_BROWS * WAVATAR_EYES * WAVATAR_PUPILS * WAVATAR_MOUTHS;
    // See if the user has chosen to purge the cache
    if ($_POST['wavatar_clear_cache'] == 'Y') {
        $localdir = "../wp-content/cache/wavatars";
        echo '<div class="updated"><p><strong>';
        $dir = opendir ($localdir);
        if ($dir) {
            $file_count = 0;
            $delete_count = 0;
            while (($file = readdir ($dir)) !== false) {
                //only delete .png files.
                if (!strstr ($file, '.png'))
                    continue;
                $file_count++;
                if (unlink ($localdir . '/' . $file))
                    $delete_count++;
            }
            if ($file_count == 0)
                echo 'The cache is already empty.';
            else
                echo $delete_count . ' icons deleted.';
        } else
            echo 'Cannot open directory for reading.';
        echo '</strong></p></div>';
    }

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'
    if( $_POST[ $hidden_field_name ] == 'Y' ) {
        // Save the posted value in the database
        update_option ('wavatar_auto', $_POST['wavatar_auto']);
        update_option ('wavatar_noplug', $_POST['wavatar_noplug']);
        update_option ('wavatar_size', intval ($_POST['wavatar_size']));
        update_option ('wavatar_border', intval ($_POST['wavatar_border']));
        update_option ('wavatar_suffix', $_POST['wavatar_suffix']);
        update_option ('wavatar_prefix', $_POST['wavatar_prefix']);
        update_option ('wavatar_gravatars', $_POST['wavatar_gravatars']);
        update_option ('wavatar_rating', $_POST['wavatar_rating']);
        update_option ('wavatar_email_blank', $_POST['wavatar_email_blank']);
        // Put an options updated message on the screen
        ?>
        <div class="updated"><p><strong><?php _e('Options saved.', 'mt_trans_domain' ); ?></strong></p></div>
        <?php
    }
    $size = get_option ("wavatar_size");
    if (empty ($size))
        add_option ("wavatar_size", AVATAR_SIZE);

    //give a warning if the image functions are not available
    if (!function_exists (imagecreatetruecolor)) {
        echo '<div class="error"><p><strong>NOTE: It appears as though the GD2 Library for PHP  is not available to Wordpress. This plugin will still be able to display Gravatars ';
        if (!get_option ('wavatar_gravatars'))
            echo '(if you enable them below) ';
        echo 'but it can\'t build wavatars.';
        echo '</strong></p></div>';
    }

    ?>
<table class="optiontable">
<form name="form1" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">
<?php
    wavatar_row ('Automatic Placement', 'wavatar_auto', "This will cause wordpress to always display the image directly before the user's name. If you uncheck this, you will have to add avatars to your theme manually by calling <code>wavatar_show(\$comment-&gt;comment_author_email)</code> in your theme comment loop.", true);
    wavatar_row ('Size', 'wavatar_size', 'The size of the icons.  Note that you should clear the cache if you change this.');
    wavatar_row ('Prefix', 'wavatar_prefix', 'HTML to come BEFORE the image.  This can be useful for encasing the icon within &lt;div&gt; tags, for example.');
    wavatar_row ('Suffix', 'wavatar_suffix', 'HTML to come AFTER the image.  This is good for closing any tags you may have opened with the Prefix.');
    wavatar_row ('Border', 'wavatar_border', 'The size of the border around the icons.');
    wavatar_row ('Gravatar Support', 'wavatar_gravatars', "Use Gravatars if available, and only use wavatars if the user doesn't have a Gravatar.", true);
    wavatar_row ('Gravatar Rating', 'wavatar_rating', "The max rating of the requested Gravatars.  This value should be G, PG, R, or X.");
?>
<tr valign="top"><th scope="row">When user leaves email field blank:</th><td>
<input name="wavatar_email_blank" type="radio" value="" class="tog"       <?php checked(get_option ('wavatar_email_blank'), ''); ?> /> Generate wavatar anyway<br>
<input name="wavatar_email_blank" type="radio" value="omit" class="tog"   <?php checked(get_option ('wavatar_email_blank'), 'omit'); ?> /> Show no image<br>
<input name="wavatar_email_blank" type="radio" value="blank" class="tog"  <?php checked(get_option ('wavatar_email_blank'), 'blank'); ?> /> Display a blank Image<br>
</td></tr>
<?php
    echo '</table>';
    wavatar_row ('', 'wavatar_noplug', "Suppress the link back to the Wavatar homepage in the site footer.", true);

?>

</table>

<p class="submit">
<input type="submit" name="Submit" value="<?php _e('Update Options', 'mt_trans_domain' ) ?>" />
</p>
</table>
</form>
<hr />
<h3>Cache</h3>

<form name="form1" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
<p>If you change the image size or alter the source images, you will need to clear the cached images for the changes
to take effect on existing icons.  You can also do this in order to free up disk space.  You can do this manually
by deleting all of the files in the <tt>/wp-content/cache/wavatars</tt> directory, or you can press the button below.

<?php
    $localdir = "../wp-content/cache/wavatars";
    $dir = opendir ($localdir);
    if ($dir) {
        $file_count = 0;
        $delete_count = 0;
        while (($file = readdir ($dir)) !== false) {
            //only delete .png files.
            if (!strstr ($file, '.png'))
                continue;
            $file_count++;
        }
        if ($file_count == 0)
            echo 'The cache is currently empty.';
        else
            echo "There are $file_count icons currently in the cache.";
    } else
        echo 'Cannot open directory for reading.';
?>

<p class="submit"><input type="hidden" name="wavatar_clear_cache" value="Y">
<input type="submit" name="Submit" value="Empty Cache" />
</form>
<hr />
<center><i>Wavatars can generate <?php echo number_format ($variations); ?> different shapes in
<?php echo number_format (240 * 240); ?> different color combinations for a total of
<?php echo number_format ($variations * 240 * 240); ?> unique Wavatars.</center></i>
</div>
<?php

}

/*-----------------------------------------------------------------------------
Add wavatar admin pages to WP interface.
-----------------------------------------------------------------------------*/

function wavatar_add_pages ()
{

    if (function_exists('add_theme_page'))
        add_options_page('Wavatar Options', 'Wavatars', 8, 'wavataroptions', 'wavatar_options');
}

/*-----------------------------------------------------------------------------
This puts a link back to me in the page footer.  You can disable it in the
options or here in the source, but you'll hurt my feelings. :)
-----------------------------------------------------------------------------*/

function wavatar_plug ()
{
    
    if (get_option ('wavatar_noplug'))
        return;
    echo 'This site employs the <a href="http://www.shamusyoung.com/twentysidedtale/?p=1462">Wavatars plugin</a> by Shamus Young.';

}


/*-----------------------------------------------------------------------------
Clamp a value between 0 and 255
-----------------------------------------------------------------------------*/

function wavatar_clamp ($v)
{
    return $v < 0 ? 0 : ($v > 255 ? 255 : $v);
}

/*-----------------------------------------------------------------------------
Handy function for converting hus/sat/lum color values to RGB, which makes it
very easy to generate random-yet-still-vibrant colors.
-----------------------------------------------------------------------------*/

function wavatar_hsl ($h, $s, $l) 
{

    if ($h>240 || $h<0 || $s>240 || $s<0 || $l>240 || $l<0)
        return array(0,0,0);
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
    return array((int)wavatar_clamp ($R),(int)wavatar_clamp($G),(int)wavatar_clamp($B));

}

/*-----------------------------------------------------------------------------
Helper function for building a wavatar.  This loads an image and adds it to 
our composite using the given color values.
-----------------------------------------------------------------------------*/

function wavatar_apply_image ($base, $part)
{

    $file = dirname(__FILE__).'/parts/' . $part . '.png';
    $im = @imagecreatefrompng($file);
    if(!$im)
        return;
    imagecopy($base,$im, 0, 0, 0, 0, AVATAR_SIZE, AVATAR_SIZE);
    imagedestroy($im);

}

/*-----------------------------------------------------------------------------
Builds the avatar.
-----------------------------------------------------------------------------*/

function wavatar_build ($seed, $filename, $size)
{

    //look at the seed (an md5 hash) and use pairs of digits to determine our
    //"random" parts and colors.
    $face =         1 + (hexdec (substr ($seed,  1, 2)) % (WAVATAR_FACES));
    $bg_color =         (hexdec (substr ($seed,  3, 2)) % 240);
    $fade =         1 + (hexdec (substr ($seed,  5, 2)) % (WAVATAR_BACKGROUNDS));
    $wav_color =        (hexdec (substr ($seed,  7, 2)) % 240);
    $brow =         1 + (hexdec (substr ($seed,  9, 2)) % (WAVATAR_BROWS));
    $eyes =         1 + (hexdec (substr ($seed, 11, 2)) % (WAVATAR_EYES));
    $pupil =        1 + (hexdec (substr ($seed, 13, 2)) % (WAVATAR_PUPILS));
    $mouth =        1 + (hexdec (substr ($seed, 15, 2)) % (WAVATAR_MOUTHS));
    // create backgound
    $avatar = imagecreatetruecolor (AVATAR_SIZE, AVATAR_SIZE);
    //Pick a random color for the background
    $c = wavatar_hsl ($bg_color, 240, 50);
    $bg = imagecolorallocate ($avatar, $c[0], $c[1], $c[2]);
    imagefill($avatar, 1, 1, $bg);
    $c = wavatar_hsl ($wav_color, 240, 170);
    $bg = imagecolorallocate ($avatar, $c[0], $c[1], $c[2]);
    //Now add the various layers onto the image
    wavatar_apply_image ($avatar, "fade$fade");
    wavatar_apply_image ($avatar, "mask$face");
    imagefill($avatar, (int)(AVATAR_SIZE / 2),(int)(AVATAR_SIZE / 2),$bg);
    wavatar_apply_image ($avatar, "shine$face");
    wavatar_apply_image ($avatar, "brow$brow");
    wavatar_apply_image ($avatar, "eyes$eyes");
    wavatar_apply_image ($avatar, "pupils$pupil");
    wavatar_apply_image ($avatar, "mouth$mouth");
    //resize if needed
    if ($size != AVATAR_SIZE) {
        $out = imagecreatetruecolor($size,$size);
        imagecopyresampled ($out,$avatar, 0, 0, 0, 0, $size, $size, AVATAR_SIZE, AVATAR_SIZE);
        imagepng($out, $filename);
        imagedestroy($out);
        imagedestroy($avatar);
    } else {
        imagepng($avatar, $filename);
        imagedestroy($avatar);
    }

}

/*-----------------------------------------------------------------------------
Builds a blank 1x1 avatar
-----------------------------------------------------------------------------*/

function wavatar_build_blank ()
{

    if (file_exists (WAVATAR_BLANK))
        return;
    $avatar = imagecreatetruecolor (1, 1);
    $bg = imagecolorallocate ($avatar, 255, 255, 255);
    imagefill($avatar, 0, 0, $bg);
    imagepng($avatar, WAVATAR_BLANK);
    imagedestroy($avatar);
    
}

/*-----------------------------------------------------------------------------
This makes sure that the image is present (builds it if it isn't) and then
returns the url.
-----------------------------------------------------------------------------*/

function wavatar_get ($email, $size='')
{

    $email_blank = get_option ('wavatar_email_blank');
    if ($email == '') {
        if (get_option ('wavatar_email_blank') == 'omit')
            return '';
        if (get_option ('wavatar_email_blank') == 'blank') {
            wavatar_build_blank ();
            return WAVATAR_BLANK;
        }
    }
    $md5 = md5($email);
    $seed = substr ($md5, 0, 17);
    $rating = get_option ('wavatar_rating');
    if ($size == '')
        $size = get_option ("wavatar_size");
    if ($size == 0)
        $size = AVATAR_SIZE;
    //make sure the image functions are available before trying to make wavatars
    if (function_exists (imagecreatetruecolor)) {
        //make sure the cache directory is available
        $dir = "wp-content/cache/wavatars";
+       $localdir = ABSPATH . $dir;
        if (!file_exists ($localdir) && !wp_mkdir_p ($localdir))
            return;
        $dest = $localdir . "/$seed.png";
        $url = get_bloginfo ('wpurl') . "/$dir/$seed.png";
        if (!file_exists ($dest))
            wavatar_build ($seed, $dest, $size);
    } else //image functions not available
        $url == '';
    if (get_option ('wavatar_gravatars')) {
        $default = $url;
        $url = "http://www.gravatar.com/avatar.php?gravatar_id=$md5.jpg&amp;";
        if (strlen ($rating))
            $url .= "r=$rating&amp;";
        $url .= "s=$size&amp;d=" . urlencode($default);
    }
    return $url;

}

/*-----------------------------------------------------------------------------
This makes sure that the image is present (builds it if it isn't) and then
displays it.
-----------------------------------------------------------------------------*/

function wavatar_show ($email, $size='')
{

    if (get_option ('wavatar_email_blank') == 'omit' && $email == '')
        return '';
    if ($size == '')
        $size = get_option ("wavatar_size");
    if ($size == 0)
        $size = AVATAR_SIZE;
    $email = strtolower ($email);
    $url = wavatar_get ($email, $size);
    echo get_option('wavatar_prefix');
    echo "<img class='wavatar' src='$url' width='$size' height='$size' alt='Wavatar' />";
    echo get_option('wavatar_suffix');

}

/*-----------------------------------------------------------------------------

-----------------------------------------------------------------------------*/

function wavatar_comment_author ($author)
{

    global $comment;

    if (is_page () || is_single ()) {
        if (get_option ('wavatar_auto'))
            return wavatar_show ($comment->comment_author_email) . " " . $author;
    }
    return $author;

}

?>

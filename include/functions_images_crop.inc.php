<?php
/**************************************************
 * imgedit.inc.php
 * 2003-10-17
 * www.sonnd.com / www.supergarv.de
 *
 * COPYRIGHT (C) BY sonnd / Garvin Hicking
 * Published as LGPL. Copyright notice has to stay in effect.
 **************************************************/

class imgedit {
    // Needed variables.
    var $orientation_available;
    var $real_img_name, $real_img_info, $real_img_width, $real_img_height, $http_img_name;
    var $img_width, $img_height, $img_name;
    var $zoombox_width;
    var $area_border, $area_width, $area_height, $inner_area_x, $inner_area_y;
    var $harea_width, $harea_height, $harea_img_name, $harea_visibility;
    var $varea_width, $varea_height, $varea_img_name, $varea_visibility;
    var $ratio;
    var $overlay_clip_top, $overlay_clip_bottom, $overlay_clip_left, $overlay_clip_right;
    var $slice_from_x, $slice_from_y, $slice_to_x, $slice_to_y;
    var $output_template = '';
    var $imgedit_smarty = array();

    // Helper function to cycle through an array. Strips of "_x" and "_y" coordinates if an 'input type="image"'
    // variable has been submitted.
    function makeImgComp(&$array) {
        foreach($array AS $key => $val) {
            if (is_array($val)) {
                $this->makeImgComp($array[$key]);
            } elseif (preg_match('@^.*_(x|y)$@', $key)) {
                $array[preg_replace('@^(.*)_(x|y)$@', '\1', $key)] = $val;
            }
        }

        return true;
    }

    // Constructor.
    function imgedit($img_name, $http_img_name) {
        global $serendipity;
        $this->makeImgComp($_REQUEST);

        // Store the given variables
        $this->real_img_name      = $this->img_name = $img_name;
        $this->real_img_info      = getimagesize($this->real_img_name);
        $this->real_img_width     = $this->real_img_info[0];
        $this->real_img_height    = $this->real_img_info[1];

        $this->http_img_name      = $http_img_name;

        // Set even more variables
        $this->setDefaults();

        return true;
    }

    // The main logic
    function main() {

        // 1. Parse the $_REQUEST vars.
        $this->parseRequest();

        // 2. Get the current size of the cropping area
        $this->getCurrentArea();

        // 3. Parse any actions
        $this->parseRequestActions();

        // 4. Valide the results of any actions
        $this->validateCoordinates();

        // 5. Populate the template
        $this->setVars();

        return true;
    }

    // Sets default vars.
    function setDefaults() {
        $this->orientation_available = true;

        $this->img_width             = $this->real_img_width;
        $this->img_height            = $this->real_img_height;
        $this->img_name              = $this->real_img_name;

        $this->zoombox_width         = 100;
        $this->area_border           = 6;

        // Set values if they haven't been submitted yet.
        if (!isset($_REQUEST['area_orientation']) || ($_REQUEST['area_orientation'] != 'h' && $_REQUEST['area_orientation'] != 'v')) {
            $_REQUEST['area_orientation'] = 'h';
        }

        if (!isset($_REQUEST['autoguess_clicked'])) {
            $_REQUEST['autoguess_clicked'] = 'false';
        }

        if (!isset($_REQUEST['zoombox_x'])) {
            $_REQUEST['zoombox_x'] = -$this->area_border;
        }

        if (!isset($_REQUEST['zoombox_y'])) {
            $_REQUEST['zoombox_y'] = -$this->area_border;
        }

        if (!isset($_REQUEST['move_increase'])) {
            $_REQUEST['move_increase'] = 8;
        } else {
            $_REQUEST['move_increase'] = intval($_REQUEST['move_increase']);
        }

        return true;
    }

    // Parse the $_REQUEST vars
    function parseRequest() {
        if (isset($_REQUEST['toggle_area_orientation'])) {
            if ($_REQUEST['area_orientation'] == 'h') {
                $_REQUEST['area_orientation'] = 'v';
            } else {
                $_REQUEST['area_orientation'] = 'h';
            }
        }

        if (isset($_REQUEST['zoombox_factor'])) {
            $_REQUEST['zoombox_factor'] = floatval($_REQUEST['zoombox_factor']);
        } else {
            $_REQUEST['zoombox_factor'] = 1;
        }

        if (isset($_REQUEST['action']['enlarge'])) {
            $_REQUEST['zoombox_factor'] += 0.1;
        } elseif (isset($_REQUEST['action']['reduce'])) {
            $_REQUEST['zoombox_factor'] -= 0.1;
        }

        if ($_REQUEST['zoombox_factor'] > 3) {
            $_REQUEST['zoombox_factor'] = 3;
        } elseif ($_REQUEST['zoombox_factor'] < 0.1) {
            $_REQUEST['zoombox_factor'] = 0.1;
        }

        if (isset($_REQUEST['action']['moveup'])) {
            $_REQUEST['zoombox_y'] -= $_REQUEST['move_increase'];
        } elseif (isset($_REQUEST['action']['movedown'])) {
            $_REQUEST['zoombox_y'] += $_REQUEST['move_increase'];
        } elseif (isset($_REQUEST['action']['moveleft'])) {
            $_REQUEST['zoombox_x'] -= $_REQUEST['move_increase'];
        } elseif (isset($_REQUEST['action']['moveright'])) {
            $_REQUEST['zoombox_x'] += $_REQUEST['move_increase'];
        }

        return true;
    }

    // Fit an image inside the cropping area.
    function imgFit($orientation) {
        if ($orientation == 'height') {
            $this->imgFitHeight();
        } else {
            $this->imgFitWidth();
        }

        $_REQUEST['zoombox_factor']    = $this->ratio;
        $_REQUEST['autoguess_clicked'] = 'true';
        $_REQUEST['zoombox_x']         = -$this->area_border;
        $_REQUEST['zoombox_y']         = -$this->area_border;

        return true;
    }

    // Fit an image, using height as fixed value
    function imgFitHeight() {
        $this->img_height = $this->inner_area_y - $this->area_border;
        $this->ratio      = round($this->img_height / $this->real_img_height, 3);
        $this->img_width  = intval(round($this->real_img_width * $this->ratio));

        return true;
    }

    // Fit an image, using width as fixed value
    function imgFitWidth() {
        $this->img_width  = $this->inner_area_x - $this->area_border;
        $this->ratio      = round($this->img_width / $this->real_img_width, 3);
        $this->img_height = intval(round($this->real_img_height * $this->ratio));

        return true;
    }

    // Parse actions that were submitted
    function parseRequestActions() {
        global $serendipity;

        if (isset($_REQUEST['autoscale'])) {

            if ($this->real_img_width > $this->real_img_height) {
                // The image is a horizontal one. Resize height to fit.
                $this->imgFit('height');
            } else {
                // The image is a vertical one. Resize width to fit.
                $this->imgFit('width');
            }


        } elseif (isset($_REQUEST['scale'])) {


            if ($this->real_img_width > $this->real_img_height) {
                // The image is a horizontal one. Resize width to fit.
                $this->imgFit('width');
            } else {
                // The image is a vertical one. Resize height to fit.
                $this->imgFit('height');
            }

        } else {

            $this->img_width  = intval(round($this->real_img_width  * $_REQUEST['zoombox_factor']));
            $this->img_height = intval(round($this->real_img_height * $_REQUEST['zoombox_factor']));

        }


        // Check which template to use
        if (isset($_REQUEST['crop'])) {
            $this->output_template = 'admin/media_imgedit_done.tpl';
        } else {
            $this->output_template = 'admin/media_imgedit.tpl';
            if ($this->orientation_available) {
                $this->imgedit_smarty['orientation_available'] = true;
            }
        }

        // The final action. Cropping will take place.
        if (isset($_REQUEST['crop'])) {
            $new_img_name = $this->img_name . '.tmp';

            if ($this->img_width <= $this->area_width && $this->img_height <= $this->area_height) {
                $this->imgedit_smarty['image_no_cut'] = true;

                $new_img_width  = $this->img_width;
                $new_img_height = $this->img_height;
            } else {
                $this->imgedit_smarty['image_cut'] = true;

                $new_img_width  = $this->area_width  - $this->area_border - $this->area_border;
                $new_img_height = $this->area_height - $this->area_border - $this->area_border;
            }

            $this->slice_from_x = ($this->area_border + $_REQUEST['zoombox_x']) / $_REQUEST['zoombox_factor'];
            $this->slice_from_y = ($this->area_border + $_REQUEST['zoombox_y']) / $_REQUEST['zoombox_factor'];

            $slice_width  = $new_img_width  / $_REQUEST['zoombox_factor'];
            $slice_height = $new_img_height / $_REQUEST['zoombox_factor'];

            $this->slice_to_x = $this->slice_from_x + $this->slice_width;
            $this->slice_to_y = $this->slice_from_y + $this->slice_height;

            // TODO:
            // - Operate also on PNG, TIFF etc.
            // - Support image magick
            // - Save file as new image!
            // - Optionally ask whether to only make a thumbnail from the extracted portion

            // PHP: int imagecopyresampled ( resource dst_im, resource src_im, int dstX, int dstY, int srcX, int srcY, int dstW, int dstH, int srcW, int srcH)
            // Open the user's image.
            $img_res      = imagecreatefromjpeg($this->img_name);

            // Init a blank picture to save the cropped image in.
            $new_img_res  = imagecreatetruecolor($new_img_width, $new_img_height);

            // Crop the image based on user input, save the resulting image. If either action fails, report an error.
            if (!imagecopyresampled($new_img_res, $img_res, 0, 0, $this->slice_from_x, $this->slice_from_y, $new_img_width, $new_img_height, $slice_width, $slice_height) ||
                !imageJpeg($new_img_res, $new_img_name, 90)) {

                $this->imgedit_smarty['image_error'] = true;
            }

            $backup = $this->increment($this->img_name);
            rename($this->img_name, $backup . '.backup');
            rename($new_img_name, $this->img_name);
            $http_new_file = preg_replace('@^' . preg_quote($serendipity['serendipityPath'] . $serendipity['uploadPath']) . '@', '', $this->img_name);
            serendipity_makeThumbnail(basename($http_new_file), dirname($http_new_file) . '/');

            $this->img_name   = $new_img_name;
            $this->img_width  = $new_img_width;
            $this->img_height = $new_img_height;
        }

        return true;
    }

    function increment($fullfile) {
        $d = dirname($fullfile) . '/';
        $f = basename($fullfile);

        $f = time() . '.' . $f;

        return $d . $f;
    }

    // Checks if any coordinates are out of allowed range
    function validateCoordinates() {
        if ($this->img_width > $this->area_width) {
            $c_img_width = $this->img_width;
            $ca_img_width = $this->area_width;
            $x_area_border = $this->area_border;
        } else {
            $c_img_width = $this->area_width;
            $ca_img_width = $this->img_width;
            $x_area_border = -$this->area_border;
        }

        if ($this->img_height > $this->area_height) {
            $c_img_height = $this->img_height;
            $ca_img_height = $this->area_height;
            $y_area_border = $this->area_border;
        } else {
            $c_img_height = $this->area_height;
            $ca_img_height = $this->img_height;
            $y_area_border = -$this->area_border;
        }

        if ($_REQUEST['zoombox_x'] < (0 - $this->area_border)) {
            $_REQUEST['zoombox_x'] = 0 - $this->area_border;
        } elseif ($_REQUEST['zoombox_x'] > ($this->img_width - $ca_img_width + $x_area_border)) {
            $_REQUEST['zoombox_x'] = $this->img_width - $ca_img_width + $x_area_border;
        }

        if ($_REQUEST['zoombox_y'] < (0 - $this->area_border)) {
            $_REQUEST['zoombox_y'] = 0 - $this->area_border;
        } elseif ($_REQUEST['zoombox_y'] > ($this->img_height - $ca_img_height + $y_area_border)) {
            $_REQUEST['zoombox_y'] = $this->img_height - $ca_img_height + $y_area_border;
        }

        $this->overlay_clip_top    += $_REQUEST['zoombox_y'];
        $this->overlay_clip_bottom += $_REQUEST['zoombox_y'];
        $this->overlay_clip_left   += $_REQUEST['zoombox_x'];
        $this->overlay_clip_right  += $_REQUEST['zoombox_x'];

        return true;
    }

    // Sets the sizes of the cropping area
    function setArea($img_name, $orientation = 'h') {
        global $serendipity;

        $fimg         = serendipity_getTemplateFile('admin/img/' . $img_name, 'serendipityPath');
        $hfimg        = serendipity_getTemplateFile('admin/img/' . $img_name, 'serendipityHTTPPath');
        $img_info     = getImageSize($fimg);

        if ($orientation == 'h') {
            $this->harea_width    = $img_info[0];
            $this->harea_height   = $img_info[1];
            $this->harea_img_name = $hfimg;
        } else {
            $this->varea_width    = $img_info[0];
            $this->varea_height   = $img_info[1];
            $this->varea_img_name = $hfimg;
        }

        return true;
    }

    // Get the size of the selected cropping area
    function getCurrentArea() {
        if ($_REQUEST['area_orientation'] == 'h') {
            $this->area_width       = $this->harea_width;
            $this->area_height      = $this->harea_height;
            $this->varea_visibility = 'hidden';
            $this->harea_visibility = 'visible';
        } else {
            $this->area_width       = $this->varea_width;
            $this->area_height      = $this->varea_height;
            $this->varea_visibility = 'visible';
            $this->harea_visibility = 'hidden';
        }

        $this->inner_area_x         = $this->area_width  - $this->area_border;
        $this->inner_area_y         = $this->area_height - $this->area_border;

        $this->overlay_clip_top     = $this->area_border;
        $this->overlay_clip_right   = $this->area_width  - $this->area_border;
        $this->overlay_clip_bottom  = $this->area_height - $this->area_border;
        $this->overlay_clip_left    = $this->area_border;

        return true;
    }

    // Set the template variables
    function setVars() {

        $this->imgedit_smarty['zoombox_width'] =       $this->zoombox_width;
        $this->imgedit_smarty['zoombox_padding'] =     $this->zoombox_width + 20;
        $this->imgedit_smarty['area_width'] =          $this->area_width;
        $this->imgedit_smarty['area_height'] =         $this->area_height;
        $this->imgedit_smarty['varea_width'] =         $this->varea_width;
        $this->imgedit_smarty['varea_height'] =        $this->varea_height;
        $this->imgedit_smarty['varea_img_name'] =      $this->varea_img_name;
        $this->imgedit_smarty['varea_visibility'] =    $this->varea_visibility;
        $this->imgedit_smarty['harea_width'] =         $this->harea_width;
        $this->imgedit_smarty['harea_height'] =        $this->harea_height;
        $this->imgedit_smarty['harea_img_name'] =      $this->harea_img_name;
        $this->imgedit_smarty['harea_visibility'] =    $this->harea_visibility;
        $this->imgedit_smarty['area_border'] =         $this->area_border;
        $this->imgedit_smarty['refresh_line'] =        time();

        $this->imgedit_smarty['real_img_width'] =      $this->real_img_width;
        $this->imgedit_smarty['real_img_height'] =     $this->real_img_height;
        $this->imgedit_smarty['real_img_name'] =       $this->real_img_name;
        $this->imgedit_smarty['http_img_name'] =       $this->http_img_name;

        $this->imgedit_smarty['img_width'] =           $this->img_width;
        $this->imgedit_smarty['img_height'] =          $this->img_height;
        $this->imgedit_smarty['zoom_img_width'] =      $this->img_width;
        $this->imgedit_smarty['zoom_img_height'] =     $this->img_height;
        $this->imgedit_smarty['img_name'] =            $this->img_name;

        $this->imgedit_smarty['overlay_clip_top'] =    $this->overlay_clip_top;
        $this->imgedit_smarty['overlay_clip_bottom'] = $this->overlay_clip_bottom;
        $this->imgedit_smarty['overlay_clip_left'] =   $this->overlay_clip_left;
        $this->imgedit_smarty['overlay_clip_right'] =  $this->overlay_clip_right;

        $this->imgedit_smarty['slice_from_x'] =        $this->slice_from_x;
        $this->imgedit_smarty['slice_from_y'] =        $this->slice_from_y;
        $this->imgedit_smarty['slice_to_x'] =          $this->slice_to_x;
        $this->imgedit_smarty['slice_to_y'] =          $this->slice_to_y;

        $this->imgedit_smarty['zoombox_x'] =           $_REQUEST['zoombox_x'];
        $this->imgedit_smarty['zoombox_y'] =           $_REQUEST['zoombox_y'];
        $this->imgedit_smarty['zoombox_factor'] =      $_REQUEST['zoombox_factor'];

        $this->imgedit_smarty['php_self'] =            $_SERVER['PHP_SELF'];
        $this->imgedit_smarty['area_orientation'] =    $_REQUEST['area_orientation'];
        $this->imgedit_smarty['move_increase'] =       $_REQUEST['move_increase'];
        $this->imgedit_smarty['autoguess_clicked'] =   $_REQUEST['autoguess_clicked'];

        $this->imgedit_smarty['my_url']            =   htmlspecialchars($_SERVER['REQUEST_URI']);

        if ($_REQUEST['autoguess_clicked'] == 'true') {
            $this->imgedit_smarty['scale_visibility'] = 'visible';
        } else {
            $this->imgedit_smarty['scale_visibility'] = 'hidden';
        }

        return true;
    }
}

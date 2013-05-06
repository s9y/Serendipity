<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Improved by Vladimir Ajgl (vlada@ajgl.cz) 2008-01-26

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (defined('S9Y_FRAMEWORK_IMAGES')) {
    return;
}
@define('S9Y_FRAMEWORK_IMAGES', true);

/**
 * Check if an uploaded file is "evil"
 *
 * @access public
 * @param   string  Input filename
 * @return boolean
 */
function serendipity_isActiveFile($file) {
    if (preg_match('@^\.@', $file)) {
        return true;
    }

    $core = preg_match('@\.(php.*|[psj]html?|aspx?|cgi|jsp|py|pl)$@i', $file);
    if ($core) {
        return true;
    }
    
    $eventData = false;
    serendipity_plugin_api::hook_event('backend_media_check', $eventData, $file);
    return $eventData;
}

/**
 * Gets a list of media items from our media database
 *
 * LONG
 *
 * @access public
 * @param   int     The offset to start fetching media files
 * @param   int     How many items to fetch
 * @param   int     The number (referenced varaible) of fetched items
 * @param   string  The "ORDER BY" sql part when fetching items
 * @param   string  Order by DESC or ASC
 * @param   string  Only fetch files from a specific directory
 * @param   string  Only fetch specific filenames
 * @param   string  Only fetch media with specific keyword
 * @param   array   An array of restricting filter sets
 * @param   boolean Apply strict directory checks, or include subdirectories?
 * @return  array   Resultset of images
 */
function serendipity_fetchImagesFromDatabase($start=0, $limit=0, &$total=null, $order = false, $ordermode = false, $directory = '', $filename = '', $keywords = '', $filter = array(), $strict_directory = false) {
    global $serendipity;

    $cond = array(
        'joinparts' => array(),
        'parts'     => array(),
    );

    $orderfields = serendipity_getImageFields();
    if (empty($order) || !isset($orderfields[$order])) {
        $order = 'i.date';
    }

    if (!is_array($filter)) {
        $filter = array();
    }

    if (empty($ordermode) || ($ordermode != 'DESC' && $ordermode != 'ASC')) {
        $ordermode = 'DESC';
    }

    if ($order == 'name') {
        $order = 'realname ' . $ordermode . ', name';
    }

    if ($limit != 0) {
        $limitsql = serendipity_db_limit_sql(serendipity_db_limit($start, $limit));
    }

    if ($strict_directory) {
        $cond['parts']['directory'] = " AND i.path = '" . serendipity_db_escape_string($directory) . "'\n";
    } elseif (!empty($directory)) {
        $cond['parts']['directory'] = " AND i.path LIKE '" . serendipity_db_escape_string($directory) . "%'\n";
    }

    if (!empty($filename)) {
        $cond['parts']['filename'] = " AND (i.name     like '%" . serendipity_db_escape_string($filename) . "%' OR
                  i.realname like '%" . serendipity_db_escape_string($filename) . "%')\n";
    }

    if (!is_array($keywords)) {
        if (!empty($keywords)) {
            $keywords = explode(';', $keywords);
        } else {
            $keywords = array();
        }
    }

    if (count($keywords) > 0) {
        $cond['parts']['keywords'] = " AND (mk.property IN ('" . serendipity_db_implode("', '", $keywords, 'string') . "'))\n";
        $cond['joinparts']['keywords'] = true;
    }

    foreach($filter AS $f => $fval) {
        if (!isset($orderfields[$f]) || empty($fval)) {
            continue;
        }

        if (is_array($fval)) {
            if (empty($fval['from']) || empty($fval['to'])) {
                continue;
            }

            if ($orderfields[$f]['type'] == 'date') {
                $fval['from'] = serendipity_convertToTimestamp(trim($fval['from']));
                $fval['to']   = serendipity_convertToTimestamp(trim($fval['to']));
            }

            if (substr($f, 0, 3) === 'bp.') {
                $realf = substr($f, 3);
                $cond['parts']['filter'] .= " AND (bp2.property = '$realf' AND bp2.value >= " . (int)$fval['from'] . " AND bp2.value <= " . (int)$fval['to'] . ")\n";
            } else {
                $cond['parts']['filter'] .= " AND ($f >= " . (int)$fval['from'] . " AND $f <= " . (int)$fval['to'] . ")\n";
            }
        } elseif ($f == 'i.authorid') {
            $cond['parts']['filter'] .= " AND (
                                    (hp.property = 'authorid' AND hp.value = " . (int)$fval . ")
                                    OR
                                    (i.authorid = " . (int)$fval . ")
                                )\n";
            $cond['joinparts']['hiddenproperties'] = true;
        } elseif ($orderfields[$f]['type'] == 'int') {
            if (substr($f, 0, 3) === 'bp.') {
                $realf = substr($f, 3);
                $cond['parts']['filter'] .= " AND (bp2.property = '$realf' AND bp2.value = '" . serendipity_db_escape_string(trim($fval)) . "')\n";
            } else {
                $cond['parts']['filter'] .= " AND ($f = '" . serendipity_db_escape_string(trim($fval)) . "')\n";
            }
        } else {
            if (substr($f, 0, 3) === 'bp.') {
                $realf = substr($f, 3);
                $cond['parts']['filter'] .= " AND (bp2.property = '$realf' AND bp2.value LIKE '%" . serendipity_db_escape_string(trim($fval)) . "%')\n";
            } else {
                $cond['parts']['filter'] .= " AND ($f LIKE '%" . serendipity_db_escape_string(trim($fval)) . "%')\n";
            }
        }
        $cond['joinparts']['filterproperties'] = true;
    }

    if (isset($serendipity['authorid']) && !serendipity_checkPermission('adminImagesViewOthers')) {
        $cond['parts']['authorid'] .= " AND (i.authorid = 0 OR i.authorid = " . (int)$serendipity['authorid'] . ")\n";
    }

    $cond['and']  = 'WHERE 1=1 ' . implode("\n", $cond['parts']);
    $cond['args'] = func_get_args();
    serendipity_plugin_api::hook_event('fetch_images_sql', $cond);
    serendipity_ACL_SQL($cond, false, 'directory');

    if ($cond['joinparts']['keywords']) {
        $cond['joins'] .= "\n LEFT OUTER JOIN {$serendipity['dbPrefix']}mediaproperties AS mk
                                        ON (mk.mediaid = i.id AND mk.property_group = 'base_keyword')\n";
    }

    if (substr($order, 0, 3) === 'bp.') {
        $cond['orderproperty'] = substr($order, 3);
        $cond['orderkey']   = 'bp.value';
        $order              = 'bp.value';
        $cond['joinparts']['properties'] = true;
    } else {
        $cond['orderkey'] = "''";
    }

    if ($cond['joinparts']['properties']) {
        $cond['joins'] .= "\n LEFT OUTER JOIN {$serendipity['dbPrefix']}mediaproperties AS bp
                                        ON (bp.mediaid = i.id AND bp.property_group = 'base_property' AND bp.property = '{$cond['orderproperty']}')\n";
    }

    if ($cond['joinparts']['filterproperties']) {
        $cond['joins'] .= "\n LEFT OUTER JOIN {$serendipity['dbPrefix']}mediaproperties AS bp2
                                        ON (bp2.mediaid = i.id AND bp2.property_group = 'base_property')\n";
    }

    if ($cond['joinparts']['hiddenproperties']) {
        $cond['joins'] .= "\n LEFT OUTER JOIN {$serendipity['dbPrefix']}mediaproperties AS hp
                                        ON (hp.mediaid = i.id AND hp.property_group = 'base_hidden')\n";
    }

    if ($serendipity['dbType'] == 'postgres' ||
        $serendipity['dbType'] == 'pdo-postgres') {
        $cond['group']    = '';
        $cond['distinct'] = 'DISTINCT';
    } else {
        $cond['group']    = 'GROUP BY i.id';
        $cond['distinct'] = '';
    }

    $basequery = "FROM {$serendipity['dbPrefix']}images AS i
       LEFT OUTER JOIN {$serendipity['dbPrefix']}authors AS a
                    ON i.authorid = a.authorid
                       {$cond['joins']}

                       {$cond['and']}";

    $query = "SELECT {$cond['distinct']} i.id, {$cond[orderkey]} AS orderkey, i.name, i.extension, i.mime, i.size, i.dimensions_width, i.dimensions_height, i.date, i.thumbnail_name, i.authorid, i.path, i.hotlink, i.realname,
                     a.realname AS authorname
                     $basequery
                     {$cond['group']}
            ORDER BY $order $ordermode $limitsql";

    $rs = serendipity_db_query($query, false, 'assoc');

    if (!is_array($rs) && $rs !== true && $rs !== 1) {
        echo '<div>' . $rs . '</div>';
        return array();
    } elseif (!is_array($rs)) {
        return array();
    }

    $total_query = "SELECT count(i.id)
                           $basequery
                           GROUP BY i.id";
    $total_rs = serendipity_db_query($total_query, false, 'num');
    if (is_array($total_rs)) {
        $total = count($total_rs);
    }

    return $rs;
}

/**
 * Fetch a specific media item from the mediadatabase
 *
 * @access public
 * @param   int     The ID of an media item
 * @return  array   The media info data
 */
function serendipity_fetchImageFromDatabase($id, $mode = 'read') {
    global $serendipity;

    if (is_array($id)) {
        $cond = array(
            'and' => "WHERE i.id IN (" . serendipity_db_implode(',', $id) . ")"
        );
        $single   = false;
        $assocKey = 'id';
        $assocVal = false;
    } else {
        $cond = array(
            'and' => "WHERE i.id = " . (int)$id
        );
        $single   = true;
        $assocKey = false;
        $assocVal = false;
    }

    if ($serendipity['dbType'] == 'postgres' ||
        $serendipity['dbType'] == 'pdo-postgres') {
        $cond['group']    = '';
        $cond['distinct'] = 'DISTINCT';
    } else {
        $cond['group']    = 'GROUP BY i.id';
        $cond['distinct'] = '';
    }

    if ($mode != 'discard') {
        serendipity_ACL_SQL($cond, false, 'directory', $mode);
    }

    $rs = serendipity_db_query("SELECT {$cond['distinct']} i.id, i.name, i.extension, i.mime, i.size, i.dimensions_width, i.dimensions_height, i.date, i.thumbnail_name, i.authorid, i.path, i.hotlink, i.realname
                                  FROM {$serendipity['dbPrefix']}images AS i
                                       {$cond['joins']}
                                       {$cond['and']}
                                       {$cond['group']}", $single, 'assoc', false, $assocKey, $assocVal);
    return $rs;
}

/**
 * Update a media item
 *
 * @access public
 * @param   array       An array of columns to update
 * @param   int         The ID of an media item to update
 * @return  boolean
 */
function serendipity_updateImageInDatabase($updates, $id) {
    global $serendipity;

    $admin = '';
    if (!serendipity_checkPermission('adminImagesAdd')) {
        $admin = ' AND (authorid = ' . $serendipity['authorid'] . ' OR authorid = 0)';
    }

    $i=0;
    if (sizeof($updates) > 0) {
        foreach ($updates AS $k => $v) {
            $q[] = $k ." = '" . serendipity_db_escape_string($v) . "'";
        }
        serendipity_db_query("UPDATE {$serendipity['dbPrefix']}images SET ". implode($q, ',') ." WHERE id = " . (int)$id . " $admin");
        $i++;
    }
    return $i;
}

/**
 * Delete a media item
 *
 * @access public
 * @param   int     The ID of a media item to delete
 * @return
 */
function serendipity_deleteImage($id) {
    global $serendipity;
    $dThumb = array();

    $file   = serendipity_fetchImageFromDatabase($id);

    if (!is_array($file)) {
        printf(FILE_NOT_FOUND . '<br />', $id);
        return false;
    }

    $dFile  = $file['path'] . $file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']);

    $dThumb = array(array(
        'fthumb' => $file['thumbnail_name']
    ));

    if (!serendipity_checkPermission('adminImagesDelete')) {
        return;
    }

    if (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid']) {
        // A non-admin user may not delete private files from other users.
        return;
    }

    if (!$file['hotlink']) {
        if (file_exists($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $dFile)) {
            if (@unlink($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $dFile)) {
                printf(DELETE_FILE . '<br />', $dFile);
            } else {
                printf(DELETE_FILE_FAIL . '<br />', $dFile);
            }

            serendipity_plugin_api::hook_event('backend_media_delete', $dThumb);
            foreach($dThumb AS $thumb) {
                $dfnThumb = $file['path'] . $file['name'] . (!empty($thumb['fthumb']) ? '.' . $thumb['fthumb'] : '') . (empty($file['extension']) ? '' : '.' . $file['extension']);
                $dfThumb  = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $dfnThumb;

                if (@unlink($dfThumb)) {
                    printf(DELETE_THUMBNAIL . '<br />', $dfnThumb);
                }
            }
        } else {
            printf(FILE_NOT_FOUND . '<br />', $dFile);
        }
    } else {
        printf(DELETE_HOTLINK_FILE . '<br />', $file['name']);
    }

    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}images WHERE id = ". (int)$id);
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}mediaproperties WHERE mediaid = ". (int)$id);
}

/**
 * Open a directory and fetch all existing media items
 *
 * @access public
 * @param   boolean     deprecated
 * @param   int         deprecated
 * @param   int         deprecated
 * @param   array       Array list of found items
 * @param   string      sub-directory to investigate [recursive use]
 * @return  array       List of media items
 */
function serendipity_fetchImages($group = false, $start = 0, $end = 20, $images = '', $odir = '') {
    global $serendipity;

    // Open directory
    $basedir = $serendipity['serendipityPath'] . $serendipity['uploadPath'];
    $images = array();
    if ($dir = @opendir($basedir . $odir)) {
		$aTempArray = array();
		while (($file = @readdir($dir)) !== false) {
		    if ($file == '.svn' || $file == 'CVS' || $file == '.' || $file == '..') {
		        continue;
		    }
			array_push($aTempArray, $file);
		}
		@closedir($dir);
		sort($aTempArray);
		foreach($aTempArray AS $f) {
            if (strpos($f, $serendipity['thumbSuffix']) !== false) {
                // This is a s9y thumbnail, skip it.
                continue;
            }

            $cdir = ($odir != '' ? $odir . '/' : '');
            if (is_dir($basedir . $odir . '/' . $f)) {
                $temp = serendipity_fetchImages($group, $start, $end, $images, $cdir . $f);
                foreach($temp AS $tkey => $tval) {
                    array_push($images, $tval);
                }
            } else {
                array_push($images, $cdir . $f);
            }
        }
    }
    natsort($images);

    /* BC */
    $serendipity['imageList'] = $images;
    return $images;
}

/**
 * Inserts a hotlinked media file
 *
 * hotlinks are files that are only linked in your database, and not really stored on your server
 *
 * @access public
 * @param   string      The filename to hotlink
 * @param   string      The URL to hotlink with
 * @param   int         The owner of the hotlinked media item
 * @param   int         The timestamp of insertion (unix second)
 * @param   string      A temporary filename for fetching the file to investigate it
 * @return  int         The ID of the inserted media item
 */
function serendipity_insertHotlinkedImageInDatabase($filename, $url, $authorid = 0, $time = NULL, $tempfile = NULL) {
    global $serendipity;

    if (is_null($time)) {
        $time = time();
    }

    list($filebase, $extension) = serendipity_parseFileName($filename);

    if ($tempfile && file_exists($tempfile)) {
        $filesize = @filesize($tempfile);
        $fdim     = @serendipity_getimagesize($tempfile, '', $extension);
        $width    = $fdim[0];
        $height   = $fdim[1];
        $mime     = $fdim['mime'];
        @unlink($tempfile);
    }

    $query = sprintf(
      "INSERT INTO {$serendipity['dbPrefix']}images (
                    name,
                    date,
                    authorid,
                    extension,
                    mime,
                    size,
                    dimensions_width,
                    dimensions_height,
                    path,
                    hotlink,
                    realname
                   ) VALUES (
                    '%s',
                    %s,
                    %s,
                    '%s',
                    '%s',
                    %s,
                    %s,
                    %s,
                    '%s',
                    1,
                    '%s'
                   )",
      serendipity_db_escape_string($filebase),
      (int)$time,
      (int)$authorid,
      serendipity_db_escape_string($extension),
      serendipity_db_escape_string($mime),
      (int)$filesize,
      (int)$width,
      (int)$height,
      serendipity_db_escape_string($url),
      serendipity_db_escape_string($filename)
    );

    $sql = serendipity_db_query($query);
    if (is_string($sql)) {
        echo $query . '<br />';
        echo $sql . '<br />';
    }

    $image_id = serendipity_db_insert_id('images', 'id');
    if ($image_id > 0) {
        return $image_id;
    }

    return 0;
}

/**
 * Insert a media item in the database
 *
 * @access public
 * @param   string      The filename of the media item
 * @param   string      The path to the media item
 * @param   int         The owner author of the item
 * @param   int         The timestamp of when the media item was inserted
 * @return  int         The new media ID
 */
function serendipity_insertImageInDatabase($filename, $directory, $authorid = 0, $time = NULL, $realname = NULL) {
    global $serendipity;

    if (is_null($time)) {
        $time = time();
    }

    if (is_null($realname)) {
        $realname = $filename;
    }

    $filepath = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $directory . $filename;
    $filesize = @filesize($filepath);

    list($filebase, $extension) = serendipity_parseFileName($filename);

    $thumbpath = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $directory . $filebase . '.'. $serendipity['thumbSuffix'] . (empty($extension) ? '' : '.' . $extension);
    $thumbnail = (file_exists($thumbpath) ? $serendipity['thumbSuffix'] : '');

    $fdim = @serendipity_getimagesize($filepath, '', $extension);
    $width = $fdim[0];
    $height = $fdim[1];
    $mime = $fdim['mime'];


    $query = sprintf(
      "INSERT INTO {$serendipity['dbPrefix']}images (
                    name,
                    extension,
                    mime,
                    size,
                    dimensions_width,
                    dimensions_height,
                    thumbnail_name,
                    date,
                    authorid,
                    path,
                    realname
                   ) VALUES (
                    '%s',
                    '%s',
                    '%s',
                    %s,
                    %s,
                    %s,
                    '%s',
                    %s,
                    %s,
                    '%s',
                    '%s'
                   )",
      serendipity_db_escape_string($filebase),
      serendipity_db_escape_string($extension),
      serendipity_db_escape_string($mime),
      (int)$filesize,
      (int)$width,
      (int)$height,
      serendipity_db_escape_string($thumbnail),
      (int)$time,
      (int)$authorid,
      serendipity_db_escape_string($directory),
      serendipity_db_escape_string($realname)
    );
    
    $sql = serendipity_db_query($query);
    if (is_string($sql)) {
        echo $query . '<br />';
        echo $sql . '<br />';
    }

    $image_id = serendipity_db_insert_id('images', 'id');
    if ($image_id > 0) {
        return $image_id;
    }

    return 0;
}


/**
 * Create a thumbnail for an image
 *
 * LONG
 *
 * @access public
 * @param   string      The input image filename
 * @param   string      The directory to the image file
 * @param   string      The target size of the thumbnail (2-dimensional array width,height)
 * @param   string      Name of the thumbnail
 * @param   bool        Store thumbnail in temporary place?
 * @param   bool        Force enlarging of small images?
 * @return  array       The result size of the thumbnail
 */
function serendipity_makeThumbnail($file, $directory = '', $size = false, $thumbname = false, $is_temporary = false, $force_resize = false) {
    global $serendipity;

    if ($size === false) {
        $size = $serendipity['thumbSize'];
    }
    
    if ($size < 1) {
       return array(0,0);
    }

    if ($thumbname === false) {
        $thumbname = $serendipity['thumbSuffix'];
    }

    $t       = serendipity_parseFileName($file);
    $f       = $t[0];
    $suf     = $t[1];


    $infile  = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $directory . $file;
#    echo 'From: ' . $infile . '<br />';
    if ($is_temporary) {
        $temppath = dirname($thumbname);
        if (!is_dir($temppath)) {
            @mkdir($temppath);
        }
        $outfile = $thumbname;
    } else {
        $outfile = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $directory . $f . '.' . $thumbname . '.' . $suf;
    }
    $serendipity['last_outfile'] = $outfile;
#    echo 'To: ' . $outfile . '<br />';

    $fdim    = @serendipity_getimagesize($infile, '', $suf);
    if (isset($fdim['noimage'])) {
        $r = array(0, 0);
    } else {
        if ($serendipity['magick'] !== true) {
            if (is_array($size)) {
                // The caller wants a thumbnail with a specific size
                $r = serendipity_resize_image_gd($infile, $outfile, $size['width'], $size['height']);
            } else {
                // The caller wants a thumbnail constrained in the dimension set by config
                $calc = serendipity_calculate_aspect_size($fdim[0], $fdim[1], $size, $serendipity['thumbConstraint']);
                $r = serendipity_resize_image_gd($infile, $outfile, $calc[0], $calc[1]);
            }
        } else {
            if (is_array($size)) {
                $r = $size;
            } else {
                $calc = serendipity_calculate_aspect_size($fdim[0], $fdim[1], $size, $serendipity['thumbConstraint']);
                $r = array('width' => $calc[0], 'height' => $calc[1]);
            }
            $newSize = $r['width'] . 'x' . $r['height'];
            if ($fdim['mime'] == 'application/pdf') {
                $cmd     = escapeshellcmd($serendipity['convert']) . ' -antialias -flatten -scale '. serendipity_escapeshellarg($newSize) .' '. serendipity_escapeshellarg($infile . '[0]') . ' ' . serendipity_escapeshellarg($outfile . '.png');
            } else {
                if (!$force_resize && serendipity_ini_bool(ini_get('safe_mode')) === false) {
                    $newSize .= '>'; // Tell imagemagick to not enlarge small images, only works if safe_mode is off (safe_mode turns > in to \>)
                }
                $cmd     = escapeshellcmd($serendipity['convert']) . ' -antialias -resize '. serendipity_escapeshellarg($newSize) .' '. serendipity_escapeshellarg($infile) .' '. serendipity_escapeshellarg($outfile);
            }
            exec($cmd, $output, $result);
            if ($result != 0) {
                echo '<div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />' . sprintf(IMAGICK_EXEC_ERROR, $cmd, $output[0], $result) .'</div>';
                $r = false; // return failure
            } else {
               touch($outfile);
            }
            unset($output, $result);
        }
    }

    return $r;
}

/**
 * Scale an image
 *
 * LONG
 *
 * @access public
 * @param   int     The ID of an image
 * @param   int     The target width
 * @param   int     The target height
 * @return true
 */
function serendipity_scaleImg($id, $width, $height) {
    global $serendipity;

    $file = serendipity_fetchImageFromDatabase($id);
    if (!is_array($file)) {
        return false;
    }

    $admin = '';
    if (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid']) {
        return;
    }

    $infile = $outfile = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']);

    if ($serendipity['magick'] !== true) {
        serendipity_resize_image_gd($infile, $outfile, $width, $height);
    } else {
        $cmd = escapeshellcmd($serendipity['convert']) . ' -scale ' .  serendipity_escapeshellarg($width . 'x' . $height) . ' ' . serendipity_escapeshellarg($infile) . ' ' . serendipity_escapeshellarg($outfile);
        exec($cmd, $output, $result);
        if ( $result != 0 ) {
            echo '<div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />' . sprintf(IMAGICK_EXEC_ERROR, $cmd, $output[0], $result) .'</div>';
        }
        unset($output, $result);
    }

    serendipity_updateImageInDatabase(array('dimensions_width' => $width, 'dimensions_height' => $height, 'size' => @filesize($outfile)), $id);
    return true;
}

/**
 * Rotate an image
 *
 * LONG
 *
 * @access public
 * @param   int     The ID of an image
 * @param   int     Number of degrees to rotate
 * @return boolean
 */
function serendipity_rotateImg($id, $degrees) {
    global $serendipity;

    $file = serendipity_fetchImageFromDatabase($id);
    if (!is_array($file)) {
        return false;
    }

    $admin = '';
    if (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid']) {
        // A non-admin user may not delete private files from other users.
        return false;
    }

    $infile = $outfile = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']);
    $infileThumb = $outfileThumb = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] . (!empty($file['thumbnail_name']) ? '.' . $file['thumbnail_name'] : '') . (empty($file['extension']) ? '' : '.' . $file['extension']);

    if ($serendipity['magick'] !== true) {
        serendipity_rotate_image_gd($infile, $outfile, $degrees);
        serendipity_rotate_image_gd($infileThumb, $outfileThumb, $degrees);
    } else {
        /* Why can't we just all agree on the rotation direction? */
        $degrees = (360 - $degrees);

        /* Resize main image */
        $cmd = escapeshellcmd($serendipity['convert']) . ' -rotate ' . serendipity_escapeshellarg($degrees) . ' ' . serendipity_escapeshellarg($infile) . ' ' . serendipity_escapeshellarg($outfile);
        exec($cmd, $output, $result);
        if ( $result != 0 ) {
            echo '<div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />' . sprintf(IMAGICK_EXEC_ERROR, $cmd, $output[0], $result) .'</div>';
        }
        unset($output, $result);

        /* Resize thumbnail */
        $cmd = escapeshellcmd($serendipity['convert']) . ' -rotate ' . serendipity_escapeshellarg($degrees) . ' ' . serendipity_escapeshellarg($infileThumb) . ' ' . serendipity_escapeshellarg($outfileThumb);
        exec($cmd, $output, $result);
        if ( $result != 0 ) {
            echo '<div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />'. sprintf(IMAGICK_EXEC_ERROR, $cmd, $output[0], $result) .'</div>';
        }
        unset($output, $result);

    }

    $fdim = @getimagesize($outfile);

    serendipity_updateImageInDatabase(array('dimensions_width' => $fdim[0], 'dimensions_height' => $fdim[1]), $id);

    return true;
}


/**
 * Creates thumbnails for all images in the upload dir
 *
 * @access public
 * @return  int Number of created thumbnails
 */
function serendipity_generateThumbs() {
    global $serendipity;

    $i=0;
    $serendipity['imageList'] = serendipity_fetchImagesFromDatabase(0, 0, $total);
    $msg_printed = false;

    foreach ($serendipity['imageList'] AS $k => $file) {
        $is_image = serendipity_isImage($file);

        if ($is_image && !$file['hotlink']) {
            $update   = false;
            $filename = $file['path'] . $file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']);
            $ffull    = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $filename;

            if (!file_exists($ffull)) {
                serendipity_deleteImage($file['id']);
                continue;
            }

            if (empty($file['thumbnail_name'])) {
                $file['thumbnail_name'] = $serendipity['thumbSuffix'];
            }

            $oldThumb = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] . '.' . $file['thumbnail_name'] . (empty($file['extension']) ? '' : '.' . $file['extension']);
            $newThumb = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] . '.' . $serendipity['thumbSuffix'] . (empty($file['extension']) ? '' : '.' . $file['extension']);
            $sThumb = $file['path'] . $file['name'] . '.' . $serendipity['thumbSuffix'] . (empty($file['extension']) ? '' : '.' . $file['extension']);
            $fdim = @getimagesize($ffull);

            if (!file_exists($oldThumb) && !file_exists($newThumb) && ($fdim[0] > $serendipity['thumbSize'] || $fdim[1] > $serendipity['thumbSize'])) {
                $returnsize = serendipity_makeThumbnail($file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']), $file['path']);
                if ($returnsize !== false ) {
                    // Only print the resize message the first time
                    if (!$msg_printed) {
                      printf(RESIZE_BLAHBLAH, THUMBNAIL_SHORT);
                      echo "\n" . '<ul class="serendipityFileList">' . "\n";
                      $msg_printed = true;
                    }
                    echo '<li>' . $sThumb . ': ' . $returnsize[0] . 'x' . $returnsize[1] . "</li>\n";
                    if (!file_exists($newThumb)) {
                        printf('<li><div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />' . THUMBNAIL_FAILED_COPY . '</div></li>' . "\n", $sThumb);
                    } else {
                        $update = true;
                    }
                }
            } elseif (!file_exists($oldThumb) && !file_exists($newThumb) && $fdim[0] <= $serendipity['thumbSize'] && $fdim[1] <= $serendipity['thumbSize']) {
                if (!$msg_printed) {
                    printf(RESIZE_BLAHBLAH, THUMB);
                    echo "\n" . '<ul class="serendipityFileList">' . "\n";
                    $msg_printed = true;
                }
                $res = @copy($ffull, $newThumb);
                if (@$res === true) {
                    printf('<li>' . THUMBNAIL_USING_OWN . '</li>' . "\n", $sThumb);
                    $update = true;
                } else {
                    printf('<li><div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />' . THUMBNAIL_FAILED_COPY . '</div></li>' . "\n", $sThumb);
                }
            }

            if ($update) {
                $i++;
                $updates = array('thumbnail_name' => $serendipity['thumbSuffix']);
                serendipity_updateImageInDatabase($updates, $file['id']);
            }
        } else {
            // Currently, non-image files have no thumbnail.
        }
    }

    // Close the list, if it was created
    if ($msg_printed) {
        echo "</ul>\n";
    }


    return $i;
}

/**
 * Guess the MIME type of a file
 *
 * @access public
 * @param   string  Filename extension
 * @return  string  Mimetype
 */
function serendipity_guessMime($extension) {
    $mime = '';
    switch (strtolower($extension)) {
        case 'jpg':
        case 'jpeg':
            $mime = 'image/jpeg';
        break;

        case 'aiff':
        case 'aif':
            $mime = 'audio/x-aiff';
            break;

        case 'gif':
            $mime = 'image/gif';
        break;

        case 'png':
            $mime = 'image/png';
        break;

        case 'pdf':
            $mime = 'application/pdf';
            break;

        case 'doc':
            $mime = 'application/msword';
            break;

        case 'rtf':
            $mime = 'application/rtf';
            break;

        case 'wav':
        case 'wave':
            $mime = 'audio/x-wav';
            break;

        case 'mp2':
        case 'mpg':
        case 'mpeg':
            $mime = 'video/x-mpeg';
            break;

        case 'avi':
            $mime = 'video/x-msvideo';
            break;

        case 'mp3':
            $mime = 'audio/x-mpeg3';
            break;

        case 'xlm':
        case 'xlb':
        case 'xll':
        case 'xla':
        case 'xlw':
        case 'xlc':
        case 'xls':
        case 'xlt':
            $mime = 'application/vnd.ms-excel';
            break;

        case 'ppt':
        case 'pps':
            $mime = 'application/vnd.ms-powerpoint';
            break;

        case 'html':
        case 'htm':
            $mime = 'text/html';
            break;

        case 'xsl':
        case 'xslt':
        case 'xml':
        case 'wsdl':
        case 'xsd':
            $mime = 'text/xml';
            break;

        case 'zip':
            $mime = 'application/zip';
            break;

        case 'tar':
            $mime = 'application/x-tar';
            break;

        case 'tgz':
        case 'gz':
            $mime = 'application/x-gzip';
            break;

        case 'swf':
            $mime = 'application/x-shockwave-flash';
            break;

        case 'rm':
        case 'ra':
        case 'ram':
            $mime = 'application/vnd.rn-realaudio';
            break;

        case 'exe':
            $mime = 'application/octet-stream';
            break;

        case 'mov':
        case 'mp4':
        case 'qt':
            $mime = 'video/x-quicktime';
            break;

        case 'midi':
        case 'mid':
            $mime = 'audio/x-midi';
            break;

        case 'txt':
            $mime = 'text/plain';
            break;

        case 'qcp':
            $mime = 'audio/vnd.qcelp';
            break;

        case 'emf':
            $mime = 'image/x-emf';
            break;

        case 'wmf':
            $mime = 'image/x-wmf';
            break;

        case 'snd':
            $mime = 'audio/basic';
            break;

        case 'pmd':
            $mime = 'application/x-pmd';
            break;

        case 'wbmp':
            $mime = 'image/vnd.wap.wbmp';
            break;

        case 'gcd':
            $mime = 'text/x-pcs-gcd';
            break;

        case 'mms':
            $mime = 'application/vnd.wap.mms-message';
            break;

        case 'ogg':
        case 'ogm':
            $mime = 'application/ogg';
            break;

        case 'rv':
            $mime = 'video/vnd.rn-realvideo';
            break;

        case 'wmv':
            $mime = 'video/x-ms-wmv';
            break;

        case 'wma':
            $mime = 'audio/x-ms-wma';
            break;

        case 'qcp':
            $mime = 'audio/vnd.qcelp';
            break;

        case 'jad':
            $mime = 'text/vnd.sun.j2me.app-descriptor';
            break;

        case '3g2':
        case '3gp':
            $mime = 'video/3gpp';
            break;

        case 'jar':
            $mime = 'application/java-archive';
            break;

        case 'ico':
            $mime = 'image/x-icon';
            break;

        default:
            $mime = 'application/octet-stream';
            break;
    }

    return $mime;
}

/**
 * Check all existing thumbnails if they are the right size, insert missing thumbnails
 *
 * LONG
 *
 * @access public
 * @return  int     Number of updated thumbnails
 */
function serendipity_syncThumbs($deleteThumbs = false) {
    global $serendipity;

    $i=0;
    $files = serendipity_fetchImages();

    $fcount = count($files);
    for ($x = 0; $x < $fcount; $x++) {
        $update = array();
        $f      = serendipity_parseFileName($files[$x]);
        if (empty($f[1]) || $f[1] == $files[$x]) {
            // No extension means bad file most probably. Skip it.
            printf(SKIPPING_FILE_EXTENSION . '<br />', $files[$x]);
            continue;
        }

        $ffull   = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $files[$x];
        $fthumb  = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $f[0] . '.' . $serendipity['thumbSuffix'] . '.' . $f[1];
        $sThumb = $f[0] . '.' . $serendipity['thumbSuffix'] . '.' . $f[1];
        $fbase   = basename($f[0]);
        $fdir    = dirname($f[0]) . '/';
        if ($fdir == './') {
            $fdir = '';
        }

        if (!is_readable($ffull) || filesize($ffull) == 0) {
            printf(SKIPPING_FILE_UNREADABLE . '<br />', $files[$x]);
            continue;
        }

        $ft_mime = serendipity_guessMime($f[1]);
        $fdim    = serendipity_getimagesize($ffull, $ft_mime);

        // If we're supposed to delete thumbs, this is the easiest place.
        if (is_readable($fthumb)) {
            if ($deleteThumbs === true) {
                if (@unlink($fthumb)) {
                    printf(DELETE_THUMBNAIL . "<br />\n", $sThumb);
                    $i++;
                }
            } else if ($deleteThumbs == 'checksize') {
                // Find existing thumbnail dimensions
                $tdim = serendipity_getimagesize($fthumb);
                if ($tdim['noimage']) {
                    // Delete it so it can be regenerated
                    if (@unlink($fthumb)) {
                        printf(DELETE_THUMBNAIL . "<br />\n", $sThumb);
                        $i++;
                    }
                } else {
                    // Calculate correct thumbnail size from original image
                    $expect = serendipity_calculate_aspect_size(
                        $fdim[0], $fdim[1], $serendipity['thumbSize'], $serendipity['thumbConstraint']);
                    // Check actual thumbnail size
                    if ($tdim[0] != $expect[0] || $tdim[1] != $expect[1]) {
                        // This thumbnail is incorrect; delete it so
                        // it can be regenerated
                        if (@unlink($fthumb)) {
                            printf(DELETE_THUMBNAIL . "<br />\n", $sThumb);
                            $i++;
                        } 
                    }
                }
            }
            // else the option is to keep all existing thumbs; do nothing.
        } // end if thumb exists

        $cond = array(
            'and' => "WHERE name = '" . serendipity_db_escape_string($fbase) . "'
                            " . ($fdir != '' ? "AND path = '" . serendipity_db_escape_string($fdir) . "'" : '') . "
                            AND mime = '" . serendipity_db_escape_string($fdim['mime']) . "'
                            AND extension = '" . serendipity_db_escape_string($f[1]) . "'"
        );
        serendipity_ACL_SQL($cond, false, 'directory');
        
        $rs = serendipity_db_query("SELECT *
                                      FROM {$serendipity['dbPrefix']}images AS i
                                           {$cond['joins']}

                                           {$cond['and']}", true, 'assoc');

        if (is_array($rs)) {
            // This image is in the database.  Check our calculated data against the database data.
            $update    = array();
            // Is the width correct?
            if (isset($fdim[0]) && $rs['dimensions_width'] != $fdim[0]) {
                $update['dimensions_width'] = $fdim[0];
            }

            // Is the height correct?
            if (isset($fdim[1]) && $rs['dimensions_height'] != $fdim[1]) {
                $update['dimensions_height'] = $fdim[1];
            }

            // Is the image size correct?
            if ($rs['size'] != filesize($ffull)) {
                $update['size'] = filesize($ffull);
            }

            // Has the thumbnail suffix changed?
            $checkfile = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $rs['path'] . $rs['name'] . '.' . $rs['thumbnail_name'] . (empty($rs['extension']) ? '' : '.' . $rs['extension']);
            if (!file_exists($checkfile) && file_exists($fthumb)) {
                $update['thumbnail_name'] = $serendipity['thumbSuffix'];
            }

            /* Do the database update, if needed */
            if (sizeof($update) != 0) {
                printf(FOUND_FILE . ' (2)<br />', $files[$x]);
                serendipity_updateImageInDatabase($update, $rs['id']);
                $i++;
            }
        } else {
            printf(FOUND_FILE . ' (1)<br />', $files[$x]);
            serendipity_insertImageInDatabase($fbase . '.' . $f[1], $fdir, 0, filemtime($ffull));
            $i++;
        }
    }
    return $i;
}

/**
 * Wrapper for GDLib functions
 *
 * @access public
 * @param   string      Filename to operate on
 * @return string       Functionname to execute
 */
function serendipity_functions_gd($infilename) {
    if (!function_exists('imagecopyresampled')) {
        return false;
    }

    $func = array();
    $inf  = pathinfo(strtolower($infilename));
    switch ($inf['extension']) {
    case 'gif':
        $func['load'] = 'imagecreatefromgif';
        $func['save'] = 'imagegif';
        $func['qual'] = 100;
        break;

    case 'jpeg':
    case 'jpg':
    case 'jfif':
        $func['load'] = 'imagecreatefromjpeg';
        $func['save'] = 'imagejpeg';
        $func['qual'] = 100;
        break;

    case 'png':
        $func['load'] = 'imagecreatefrompng';
        $func['save'] = 'imagepng';
        $func['qual'] = 9;
        break;

    default:
        return false;
    }

    /* If our loader does not exist, we are doomed */
    if (!function_exists($func['load'])) {
        return false;
    }

    /* If the save function does not exist (i.e. read-only GIF), we want to output it as PNG */
    if (!function_exists($func['save'])) {
        if (function_exists('imagepng')) {
            $func['save'] = 'imagepng';
        } else {
            return false;
        }
    }

    return $func;
}

/**
 * Rotate an image (GDlib)
 *
 * @access public
 * @param   string      Source Filename to rotate
 * @param   string      Target file
 * @param   int         Degress to rotate
 * @return  array       New width/height of the image
 */
function serendipity_rotate_image_gd($infilename, $outfilename, $degrees)
{
    $func = serendipity_functions_gd($infilename);
    if (!is_array($func)) {
        return false;
    }

    $in        = $func['load']($infilename);

    $out       = imagerotate($in, $degrees, 0);
    $func['save']($out, $outfilename, $func['qual']);

    $newwidth  = imagesx($out);
    $newheight = imagesy($out);

    $out       = null;
    $in        = null;

    return array($newwidth, $newheight);
}


/**
 * Resize an image (GDLib)
 *
 * @access public
 * @param   string      Source Filename to resize
 * @param   string      Target file
 * @param   int         New width
 * @return  int         New height (can be autodetected)
 * @return  array       New image size
 */
function serendipity_resize_image_gd($infilename, $outfilename, $newwidth, $newheight=null)
{
    $func = serendipity_functions_gd($infilename);
    if (!is_array($func)) {
        return false;
    }

    $in = $func['load']($infilename);
    $width = imagesx($in);
    $height = imagesy($in);

    if (is_null($newheight)) {
        $newsizes = serendipity_calculate_aspect_size($width, $height, $newwidth, 'width');
        $newwidth = $newsizes[0];
        $newheight = $newsizes[1];
    }

    if (is_null($newwidth)) {
        $newsizes  = serendipity_calculate_aspect_size($width, $height, $newheight, 'height');
        $newwidth  = $newsizes[0];
        $newheight = $newsizes[1];
    }

    $out = imagecreatetruecolor($newwidth, $newheight);

    /* Attempt to copy transparency information, this really only works for PNG */
    if (function_exists('imagesavealpha')) {
        imagealphablending($out, false);
        imagesavealpha($out, true);
    }

    imagecopyresampled($out, $in, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    @umask(0000);
    touch($outfilename);  // safe_mode requirement
    $func['save']($out, $outfilename, $func['qual']);
    @chmod($outfilename, 0664);
    $out = null;
    $in  = null;

    return array($newwidth, $newheight);
}

/**
 * Calculate new size for an image, considering aspect ratio and constraint
 *
 * @access public
 * @param   int     Image width
 * @param   int     Image height
 * @param   int     Target dimension size
 * @param   string  Dimension to constrain ('width', 'height', 'largest', 
                    'smallest'; defaults to original behavior, 'largest')
 * @return  array   An array with the scaled width and height
 */
function serendipity_calculate_aspect_size($width, $height, $size, $constraint = null) {

    // Allow for future constraints (idea: 'percent')
    $known_constraints = array('width', 'height', 'largest', 'smallest');

    // Rearrange params for calls from old imageselectorplus plugin
    if ($size == null) {
      $size = $constraint;
      $constraint = 'smallest';
    }

    // Normalize relative constraint types
    if ($constraint == 'largest' || !in_array($constraint, $known_constraints)) {
        // Original default behavior, included for backwards compatibility
        // Constrains largest dimension
        if ($width >= $height) {
            $constraint = 'width';
        } else {
            $constraint = 'height';
        }
    } else if ($constraint == 'smallest') {
        // Only ever called from imageselectorplus plugin, included for
        // backwards compatibility with its older versions
        if ($width >= $height) {
            $constraint = 'height';
        } else {
            $constraint = 'width';
        }
    }

    // Constraint is now definitely one of the known absolute types,
    // either 'width' or 'height'
    if ($constraint == 'height') {
        // Is the image big enough to resize?
        if ($height > $size) {
            // Calculate new size
            $ratio = $width / $height;
            $newwidth = round($size * $ratio);
            // Limit calculated dimension to at least 1px
            if ($newwidth <= 0) {
                $newwidth = 1;
            }
            $newsize = array($newwidth, $size);
        } else {
            // Image is too small to be resized; use original dimensions
            $newsize = array($width, $height);
        }
    } else {
        // Default constraint is width
        if ($width > $size) {
            // Image is big enough to resize
            $ratio = $height / $width;
            $newheight = round($size * $ratio);
            // Limit calculated dimension to at least 1px
            if ($newheight <= 0) { 
                $newheight = 1; 
            }
            $newsize = array($size, $newheight);
        } else {
            // Do not scale small images
            $newsize = array($width, $height);
        }
    }

    return $newsize;
}

/**
 * Display the list of images in our database
 *
 * @access public
 * @param   int     The current page number
 * @param   string  The HTML linebreak to use after a row of images
 * @param   boolean Should the toolbar for editing media files be shown?
 * @param   string  The URL to use for pagination
 * @param   boolean Show the "upload media item" feature?
 * @param   boolean Restrict viewing images to a specific directory
 * @param   boolean  If TRUE, will echo Smarty output.
 * @return  string   Smarty block name
 */
function serendipity_displayImageList($page = 0, $lineBreak = NULL, $manage = false, $url = NULL, $show_upload = false, $limit_path = NULL, $smarty_display = true) {
    global $serendipity;
    static $debug = false;

    $sortParams        = array('perpage', 'order', 'ordermode');
    $importParams      = array('adminModule', 'htmltarget', 'filename_only', 'textarea', 'subpage',  'keywords');
    $extraParems       = '';
    $filterParams      = array('only_path', 'only_filename');

    foreach($importParams AS $importParam) {
        if (isset($serendipity['GET'][$importParam])) {
            $extraParems .= 'serendipity[' . $importParam . ']='. htmlspecialchars($serendipity['GET'][$importParam]) .'&amp;';
        }
    }

    foreach($sortParams AS $sortParam) {
        serendipity_restoreVar($serendipity['COOKIE']['sortorder_' . $sortParam], $serendipity['GET']['sortorder'][$sortParam]);
        serendipity_JSsetCookie('sortorder_' . $sortParam, htmlspecialchars($serendipity['GET']['sortorder'][$sortParam]));
        $extraParems .= 'serendipity[sortorder]['. $sortParam .']='. htmlspecialchars($serendipity['GET']['sortorder'][$sortParam]) .'&amp;';
    }

    foreach($filterParams AS $filterParam) {
        serendipity_restoreVar($serendipity['COOKIE'][$filterParam], $serendipity['GET'][$filterParam]);
        serendipity_JSsetCookie($filterParam, htmlspecialchars($serendipity['GET'][$filterParam]));
        if (!empty($serendipity['GET'][$filterParam])) {
            $extraParems .= 'serendipity[' . $filterParam . ']='. htmlspecialchars($serendipity['GET'][$filterParam]) .'&amp;';
        }
    }

    $serendipity['GET']['only_path']     = serendipity_uploadSecure($limit_path . $serendipity['GET']['only_path'], true);
    $serendipity['GET']['only_filename'] = htmlspecialchars(str_replace(array('*', '?'), array('%', '_'), $serendipity['GET']['only_filename']));

    $perPage = (!empty($serendipity['GET']['sortorder']['perpage']) ? (int)$serendipity['GET']['sortorder']['perpage'] : 8);
    while ($perPage % $lineBreak !== 0) {
        $perPage++;
    }
    $start   = ($page-1) * $perPage;
    
    if ($manage && $limit_path == NULL) {
        ## SYNCH START ##
        $aExclude = array("CVS" => true, ".svn" => true);
        serendipity_plugin_api::hook_event('backend_media_path_exclude_directories', $aExclude);
        $paths        = array();
        $aFilesOnDisk = array();

        $aResultSet   = serendipity_traversePath(
            $serendipity['serendipityPath'] . $serendipity['uploadPath']. $limit_path,
            '',
            false,
            NULL,
            1,
            NULL,
            FALSE,
            $aExclude
        );
        foreach ($aResultSet AS $sKey => $sFile) {
                if ($sFile['directory']) {
                    if ($debug) echo "{$sFile['relpath']} is a directory.<br />";
                    array_push($paths, $sFile);
                } else {
                    if ($debug) echo "{$sFile['relpath']} is a file.<br />";
                    // Store the file in our array, remove any ending slashes
                    $aFilesOnDisk[$sFile['relpath']] = 1;
                }
                unset($aResultSet[$sKey]);
        }

        usort($paths, 'serendipity_sortPath');

        if ($debug) echo "<p>Got files: <pre>" . print_r($aFilesOnDisk, true) . "</pre></p>";
        $serendipity['current_image_hash'] = md5(serialize($aFilesOnDisk));

        $nTimeStart = microtime_float();
        // MTG 21/01/06: request all images from the database, delete any which don't exist
        // on the filesystem, and mark off files from the file list which are already
        // in the database

        $nCount = 0;
        if ($debug) echo "<p>Image Sync Right: " . serendipity_checkPermission('adminImagesSync') . " Onthefly Sync: " . $serendipity['onTheFlySynch'] . " Hash: " . $serendipity['current_image_hash'] . "!=" . $serendipity['last_image_hash']. "</p>";
        if ($serendipity['onTheFlySynch'] && serendipity_checkPermission('adminImagesSync') && ($debug  || ($serendipity['current_image_hash'] != $serendipity['last_image_hash']))) {
            $aResultSet = serendipity_db_query("SELECT path, name, extension, thumbnail_name, id
                                                FROM {$serendipity['dbPrefix']}images", false, 'assoc');
            if ($debug) echo "<p>Got images: <pre>" . print_r($aResultSet, true) . "</pre></p>";
            if (is_array($aResultSet)) {
                foreach ($aResultSet AS $sKey => $sFile) {
                    serendipity_plugin_api::hook_event('backend_thumbnail_filename_select', $sFile);
                    $sThumbNailFile = '';
                    if (isset($sFile['thumbnail_filename'])) {
                        $sThumbNailFile = $sFile['thumbnail_filename'];
                    } else {
                        $sThumbNailFile = $sFile['path'] . $sFile['name'] . '.' . $sFile['thumbnail_name'] . (empty($sFile['extension']) ? '' : '.' . $sFile['extension']);
                    }

                    $sFileName = $sFile['path'] . $sFile['name'] . (empty($sFile['extension']) ? '' : '.' . $sFile['extension']);
                    if ($debug) echo "<p>File name is $sFileName,<br />thumbnail is $sThumbNailFile</p>";
                    unset($aResultSet[$sKey]);

                    if (isset($aFilesOnDisk[$sFileName])) {
                        unset($aFilesOnDisk[$sFileName]);
                    } else {
                        if ($debug) echo "Deleting Image {$sFile['id']}<br />\n";
                        serendipity_deleteImage($sFile['id']);
                        ++$nCount;
                    }
                    unset($aFilesOnDisk[$sThumbNailFile]);
                }
            }

            if ($nCount > 0){
                if ($debug) echo "<p>Cleaned up ".$nCount." database entries</p>";
            }

            serendipity_set_config_var('last_image_hash', $serendipity['current_image_hash'], 0);
            $aUnmatchedOnDisk = array_keys($aFilesOnDisk);
            if ($debug) echo "<p>Got unmatched files: <pre>" . print_r($aUnmatchedOnDisk, true) . "</pre></p>";
            $nCount = 0;
            foreach ($aUnmatchedOnDisk AS $sFile) {
                if (preg_match('@\.' . $serendipity['thumbSuffix'] . '\.@', $sFile)) {
                    if ($debug) echo "<p>Skipping thumbnailed file $sFile</p>";
                    continue;
                } else {
                    if ($debug) echo "<p>Checking $sFile</p>";
                }

                // MTG: 21/01/06: put files which have just 'turned up' into the database
                $aImageData = serendipity_getImageData($sFile);
                if (serendipity_isImage($aImageData, false, '(image)|(video)|(audio)/')) {
                    $nPos = strrpos($sFile, "/");
                    if (is_bool($nPos) && !$nPos) {
                       $sFileName  = $sFile;
                       $sDirectory = "";
                    } else {
                       ++$nPos;
                       $sFileName  = substr($sFile, $nPos);
                       $sDirectory = substr($sFile, 0, $nPos);
                    }
                    if ($debug) echo "<p>Inserting image $sFileName from $sDirectory <pre>" . print_r($aImageData, true) . "</pre> into database</p>";
                    # TODO: Check if the thumbnail generation goes fine with Marty's code
                    serendipity_makeThumbnail($sFileName, $sDirectory);
                    serendipity_insertImageInDatabase($sFileName, $sDirectory);
                    ++$nCount;
                }
            }

            if ($nCount > 0) {
                if ($debug) echo "<p>Inserted ".$nCount." images into the database</p>";
            }
        } else {
            if ($debug) echo "<p>Media Gallery database is up to date</p>";
        }

         /*
         $nTimeEnd = microtime_float ( );
         $nDifference = $nTimeEnd - $nTimeStart;
         echo "<p> total time taken was " . $nDifference . "</p>";
        */
        ## SYNCH FINISHED ##
    }

    ## Aply ACL afterwards:
    serendipity_directoryACL($paths, 'read');

    $serendipity['imageList'] = serendipity_fetchImagesFromDatabase(
                                  $start,
                                  $perPage,
                                  $totalImages, // Passed by ref
                                  (isset($serendipity['GET']['sortorder']['order']) ? $serendipity['GET']['sortorder']['order'] : false),
                                  (isset($serendipity['GET']['sortorder']['ordermode']) ? $serendipity['GET']['sortorder']['ordermode'] : false),
                                  (isset($serendipity['GET']['only_path']) ? $serendipity['GET']['only_path'] : ''),
                                  (isset($serendipity['GET']['only_filename']) ? $serendipity['GET']['only_filename'] : ''),
                                  (isset($serendipity['GET']['keywords']) ? $serendipity['GET']['keywords'] : ''),
                                  (isset($serendipity['GET']['filter']) ? $serendipity['GET']['filter'] : '')
    );

    $pages         = ceil($totalImages / $perPage);
    $linkPrevious  = '?' . $extraParems . 'serendipity[page]=' . ($page-1);
    $linkNext      = '?' . $extraParems . 'serendipity[page]=' . ($page+1);
    if (is_null($lineBreak)) {
        $lineBreak = floor(750 / ($serendipity['thumbSize'] + 20));
    }

    $dprops = $keywords = array();
    if ($serendipity['parseMediaOverview']) {
        $ids = array();
        foreach ($serendipity['imageList'] AS $k => $file) {
            $ids[] = $file['id'];
        }
        $allprops =& serendipity_fetchMediaProperties($ids);
    }

    if (count($serendipity['imageList']) > 0) {
        foreach ($serendipity['imageList'] AS $k => $file) {
            if (!($serendipity['authorid'] == $file['authorid'] || $file['authorid'] == '0' || serendipity_checkPermission('adminImagesViewOthers'))) {
                // This is a fail-safe continue. Basically a non-matching file should already be filtered in SQL.
                continue;
            }

            serendipity_prepareMedia($serendipity['imageList'][$k], $url);

            if ($serendipity['parseMediaOverview']) {
                $serendipity['imageList'][$k]['props'] =& $allprops[$file['id']];
                if (!is_array($serendipity['imageList'][$k]['props']['base_metadata'])) {
                    $serendipity['imageList'][$k]['metadata'] =& serendipity_getMetaData($serendipity['imageList'][$k]['realfile'], $serendipity['imageList'][$k]['header']);
                } else {
                    $serendipity['imageList'][$k]['metadata'] = $serendipity['imageList'][$k]['props']['base_metadata'];
                    serendipity_plugin_api::hook_event('media_getproperties_cached', $serendipity['imageList'][$k]['metadata'], $serendipity['imageList'][$k]['realfile']);
                }
                serendipity_parseMediaProperties($dprops, $keywords, $serendipity['imageList'][$k], $serendipity['imageList'][$k]['props'], 3, false);
            }
        }
    }

    $smarty_vars = array(
        'limit_path'    => $limit_path,
        'perPage'       => $perPage,
        'show_upload'   => $show_upload,
        'page'          => $page,
        'pages'         => $pages,
        'linkNext'      => $linkNext,
        'linkPrevious'  => $linkPrevious,
        'extraParems'   => $extraParems
    );
    return serendipity_showMedia(
        $serendipity['imageList'],
        $paths,
        $url,
        $manage,
        $lineBreak,
        true,
        $smarty_vars,
        $smarty_display
    );
} // End serendipity_displayImageList()

/**
 * Check if a media item is an image
 *
 * @access public
 * @param   array       File information
 * @param   boolean     Use a strict check that does not list PDFs as an image?
 * @return  boolean     True if the file is an image
 */
function serendipity_isImage(&$file, $strict = false, $allowed = 'image/') {
    global $serendipity;

    $file['displaymime'] = $file['mime'];

    // Strip HTTP path out of imgsrc
    $file['location'] = $serendipity['serendipityPath'] . preg_replace('@^(' . preg_quote($serendipity['serendipityHTTPPath']) . ')@i', '', $file['imgsrc']);

    // File is PDF -> Thumb is PNG
    // Detect PDF thumbs
    if ($file['mime'] == 'application/pdf' && file_exists($file['location'] . '.png') && $strict == false) {
        $file['imgsrc']     .= '.png';
        $file['displaymime'] = 'image/png';
    }

    return preg_match('@' . $allowed . '@i', $file['displaymime']);
}

/**
 * Recursively delete a directory tree
 *
 * @access public
 * @param   string      The originating directory
 * @param   string      The subdirectory
 * @param   boolean     Force deleting an directory even if there are files left in it?
 * @return true
 */
function serendipity_killPath($basedir, $directory = '', $forceDelete = false) {
    static $n = "<br />\n";
    static $serious = true;

    if ($handle = @opendir($basedir . $directory)) {
        while (false !== ($file = @readdir($handle))) {
            if ($file != '.' && $file != '..') {
                if (is_dir($basedir . $directory . $file)) {
                    serendipity_killPath($basedir, $directory . $file . '/', $forceDelete);
                } else {
                    $filestack[$file] = $directory . $file;
                }
            }
        }
        @closedir($handle);

        printf(CHECKING_DIRECTORY . "<br />\n", $directory);

        // No, we just don't kill files the easy way. We sort them out properly from the database
        // and preserve files not entered therein.
        $files = serendipity_fetchImagesFromDatabase(0, 0, $total, false, false, $directory);
        if (is_array($files)) {
            echo "<ul>\n";
            foreach($files AS $f => $file) {
                echo "<li>\n";
                if ($serious) {
                    serendipity_deleteImage($file['id']);
                } else {
                    echo $file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']);
                }
                echo "</li>\n";

                unset($filestack[$file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension'])]);
                unset($filestack[$file['name'] . (!empty($file['thumbnail_name']) ? '.' . $file['thumbnail_name'] : '') . (empty($file['extension']) ? '' : '.' . $file['extension'])]);
            }
            echo "</ul>\n";
        }

        if (count($filestack) > 0) {
            if ($forceDelete) {
                echo "<ul>\n";
                foreach($filestack AS $f => $file) {
                    if ($serious && @unlink($basedir . $file)) {
                        printf('<li>' . DELETING_FILE . $n . DONE . "</li>\n", $file);
                    } else {
                        printf('<li>' . DELETING_FILE . $n . ERROR . "</li>\n", $file);
                    }
                }
                echo "</ul>\n";
            } else {
                echo ERROR_DIRECTORY_NOT_EMPTY . $n;
                echo "<ul>\n";
                foreach($filestack AS $f => $file) {
                    echo '<li>' . $file . "</li>\n";
                }
                echo "</ul>\n";
            }
        }

        echo '<strong>';
        if ($serious && !empty($directory) && !preg_match('@^.?/?$@', $directory) && @rmdir($basedir . $directory)) {
            printf(DIRECTORY_DELETE_SUCCESS . $n, $directory);
        } else {
            printf(DIRECTORY_DELETE_FAILED . $n, $directory);
        }
        echo '</strong>';
    }

    return true;
}


/**
 * Recursively walk a directory tree
 *
 *
 * @access public
 * @param   string      The core directory
 * @param   string      The subdirectory
 * @param   boolean     Only return directories instead of files as well?
 * @param   string      A regexp patter to include files
 * @param   int         Level of nesting (recursive use)
 * @param   int         The maximum level of nesting (recursive use)
 * @param   mixed       Toggle whether to apply serendipity_directoryACL (false / 'read' / 'write')
 * @param   array       An array of directories to skip [passed by plugins, for example]
 * @return  array       Array of files/directories
 */
function serendipity_traversePath($basedir, $dir='', $onlyDirs = true, $pattern = NULL, $depth = 1, $max_depth = NULL, $apply_ACL = false, $aExcludeDirs = NULL) {

    if ($aExcludeDirs === null) {
        $aExcludeDirs = array("CVS" => true, ".svn" => true);
    }

    $odir = serendipity_dirSlash('end', $basedir) . serendipity_dirSlash('end', $dir);
    $dh = @opendir($odir);
    if (!$dh) {
        return array();
    }

    $files = array();
    while (($file = @readdir($dh)) !== false) {
        if ($file != '.' && $file != '..') {
            $bPatternMatch = (is_null($pattern) || preg_match($pattern, $file));
			$sFullPath     = $odir . $file;
			$bIsDir        = is_dir($sFullPath);
            if ($onlyDirs === false || $bIsDir) {
				if ($bPatternMatch &&
				    (!$bIsDir || $aExcludeDirs == null || !isset($aExcludeDirs[$file]))) {
                    $files[] = array(
                        'name'      => $file,
                        'depth'     => $depth,
                        'relpath'   => ltrim(str_replace('\\', '/', serendipity_dirSlash('end', $dir)) . basename($file) . ($bIsDir ? '/' : ''), '/'),
                        'directory' => $bIsDir
                    );
                }
            }

            if ($bIsDir &&
				($max_depth === null || $depth < $max_depth) &&
				($aExcludeDirs == null || !isset($aExcludeDirs[$file]))) {
                $next_dir = serendipity_dirSlash('end', $dir) . basename($file);
				$files = array_merge($files, serendipity_traversePath($basedir, $next_dir, $onlyDirs, $pattern, ($depth+1), $max_depth, $apply_ACL, $aExcludeDirs));
            }
        }
    }

    @closedir($dh);

    if ($depth == 1 && $apply_ACL !== FALSE) {
        serendipity_directoryACL($files, $apply_ACL);
    }

    return $files;
}

/**
 * Custom usort() function that properly sorts a path
 *
 * @access public
 * @param   array      First array
 * @param   array      Second array
 * @return
 */
function serendipity_sortPath($a, $b) {
    return strcasecmp($a['relpath'], $b['relpath']);
}

/**
 * Delete a directory with all its files
 *
 * @access public
 * @param   string      The directory to delete
 * @return
 */
function serendipity_deletePath($dir) {
    $d = dir($dir);
    if ($d) {
        while ($f = $d->read() ){
            if ($f != '.' && $f != '..') {
                if (is_dir($dir . $f)){
                    serendipity_deletePath($dir . $f . '/');
                    rmdir($dir . $f);
                }

                if (is_file($dir . $f)) {
                    unlink($dir . $f);
                }
            }
        }

        $d->close();
    }
}

/**
 * Check if a entered HTTP upload path is valid
 *
 * @access public
 * @param   string      The input filename
 * @param   boolean     Shall all paths be stripped?
 * @param   boolean     Shall a trailing slash be appended?
 * @return  string      The condom-wrapped path/file info
 */
function serendipity_uploadSecure($var, $strip_paths = true, $append_slash = false) {
    $var = preg_replace('@[^0-9a-z\._/-]@i', '', $var);
    if ($strip_paths) {
        $var = preg_replace('@(\.+[/\\\\]+)@', '/', $var);
    }

    $var = preg_replace('@^(/+)@', '', $var);

    if ($append_slash) {
        if (!empty($var) && substr($var, -1, 1) != '/') {
            $var .= '/';
        }
    }

    return $var;
}

/**
 * Get the imagesize for a file
 *
 * @access public
 * @param   string      The filename of the image
 * @param   string      The mimetype of an image (can be autodetected)
 * @param   string      The file extension of an image
 * @return  array       The width/height of the file
 */
function serendipity_getimagesize($file, $ft_mime = '', $suf = '') {
    if (empty($ft_mime) && !empty($suf)) {
        $ft_mime = serendipity_guessMime($suf);
    }

    if ($ft_mime == 'application/pdf') {
        $fdim = array(1000,1000,24, '', 'bits'=> 24, 'channels' => '3', 'mime' => 'application/pdf');
    } else {
        $fdim = @getimagesize($file);
    }

    if (is_array($fdim)) {
        if (empty($fdim['mime'])) {
            $fdim['mime'] = $ft_mime;
        }

        if ($fdim['mime'] == 'image/vnd.wap.wbmp' && $ft_mime == 'video/x-quicktime') {
            // PHP Versions prior to 4.3.9 reported .mov files wrongly as WAP. Fix this and mark the file as 'non-image' with 0x0 dimensions
            $fdim['mime'] = $ft_mime;
        }
    } else {
        // The file is no image. Return a fake array so that files are inserted (but without a thumb)
        $fdim = array(
            0         => 0,
            1         => 0,
            'mime'    => $ft_mime,
            'noimage' => true
        );
    }

    return $fdim;
}

/**
 * Get the available fields of the media database
 *
 * @access public
 * @return array    Array with available, sortable fields
 */
function serendipity_getImageFields() {
    global $serendipity;

    $x = array(
        'i.date'              => array('desc' => SORT_ORDER_DATE,
                                     'type' => 'date'
                               ),

        'i.name'              => array('desc' => SORT_ORDER_NAME
                               ),

        'i.authorid'          => array('desc' => AUTHOR,
                                     'type' => 'authors'
                               ),

        'i.extension'         => array('desc' => SORT_ORDER_EXTENSION
                               ),

        'i.size'              => array('desc' => SORT_ORDER_SIZE,
                                     'type' => 'intrange'
                               ),

        'i.dimensions_width'  => array('desc' => SORT_ORDER_WIDTH,
                                     'type' => 'intrange'
                               ),

        'i.dimensions_height' => array('desc' => SORT_ORDER_HEIGHT,
                                     'type' => 'intrange'
                               )
    );

    $addProp = explode(';', $serendipity['mediaProperties']);
    foreach($addProp AS $prop) {
        $parts = explode(':', $prop);
        $name  = $parts[0];
        $x['bp.' . $name] = array('desc' => (defined('MEDIA_PROPERTY_' . $name) ? constant('MEDIA_PROPERTY_' . $name) : htmlspecialchars($name)));
        if (preg_match('@date@i', $name)) {
            $x['bp.' . $name]['type'] = 'date';
        }
        if (preg_match('@length@i', $name)) {
            $x['bp.' . $name]['type'] = 'intrange';
        }
        if (preg_match('@dpi@i', $name)) {
            $x['bp.' . $name]['type'] = 'int';
        }
    }

    return $x;
}

/**
 * Escape a shell argument for imagemagick use
 *
 * @access public
 * @param   string  Input argument
 * @return  string  Output argument
 */
function serendipity_escapeshellarg($string) {
    return escapeshellarg(str_replace('%', '', $string));
}

/**
 * Rename a media directory
 *
 * @access public
 * @param   string  Old directory name
 * @param   string  New directory name
 */
function serendipity_renameDir($old, $new) {
}

/**
 * Makes sure a directory begins with or ends with a "/"
 *
 * @access public
 * @param   string  Type of where to append/prepend slash ('end', 'start', 'both')
 * @param   string  Directory name
 * @return  string  Output argument
 */
function serendipity_dirSlash($type, $dir) {

    if ($dir == '') {
        return $dir;
    }

    if ($type == 'start' || $type == 'both') {
        if (substr($dir, 0, 1) != '/') {
            $dir = '/' . $dir;
        }
    }

    if ($type == 'end' || $type == 'both') {
        if (substr($dir, -1) != '/') {
            $dir .= '/';
        }
    }

    return $dir;
}

/**
 * Cycle a serendipity_traversePath resultset and apply read/write ACLs.
 *
 * @access public
 * @param   array   serendipity_traversePath result array
 * @param   string  ACL type ('read', 'write')
 */
function serendipity_directoryACL(&$paths, $type = 'read') {
    global $serendipity;
    static $debug = false;

    if ($debug) {
        echo "Applying ACL for mode '$type'.<br />\n";
    }

    if (!is_array($paths)) {
        return true;
    }

    $startCount = count($paths);
    if (!isset($serendipity['enableACL']) || $serendipity['enableACL'] == true) {
        // Check if we are a cool superuser. Bail out if we are.
        $logged_in = serendipity_userLoggedIn();
        if ($logged_in && serendipity_checkPermission('adminImagesMaintainOthers') && serendipity_checkPermission('adminImagesDirectories')) {
            if (!$debug) {
                return true;
            }
        }

        // Get list of all ACLs for directories.
        $q = "SELECT a.artifact_index AS directory,
                     a.groupid
                FROM {$serendipity['dbPrefix']}access AS a
               WHERE a.artifact_type = 'directory'
                 AND a.artifact_mode = '" . serendipity_db_escape_string($type) . "'";
        $allowed = serendipity_db_query($q);
        if (!is_array($allowed)) {
            return true;
        }

        // Get a list of all the groups for this user. Pipe it into a usable array.
        if ($logged_in) {
            $my_groups =& serendipity_getGroups($serendipity['authorid']);
            $acl_allowed_groups = array();
            foreach($my_groups AS $my_group) {
                $acl_allowed_groups[$my_group['id']] = true;
            }
        } else {
            // Only the 'ALL AUTHORS' group is valid for non-logged in authors.
            $acl_allowed_groups = array(0 => true);
        }

        // Iterate every ACL and check if we are allowed to use it. Parse that data into a workable array.
        $acl_allowed = array();
        foreach($allowed AS $row) {
            $acl_allowed[$row['directory']][$row['groupid']] = true;
        }

        // Iterate the input path array and check it against ACL.
        foreach($paths AS $idx => $info) {
            if (!isset($acl_allowed[$info['relpath']])) {
                // ACL for directory not set. Assume we are allowed to access.
                continue;
            }

            $granted = false;
            foreach($acl_allowed[$info['relpath']] AS $groupid => $set) {
                if ($groupid === 0 || isset($acl_allowed_groups[$groupid])) {
                    // We are allowed to access this element
                    $granted = true;
                    break;
                }
            }

            if ($granted === false) {
                // We are not allowed to access this element
                if ($debug) {
                    echo "ACL for " . $info['relpath'] . " DENIED.<br />\n";
                }
                unset($paths[$idx]);
            } else {
                if ($debug) {
                    echo "ACL for " . $info['relpath'] . " granted.<br />\n";
                }
            }
        }

        if (count($paths) < $startCount) {
            if ($debug) {
                echo "ACL denied all.<br />\n";
            }
            return false;
        }
    }

    return true;
}

 /**
 * Build the name of a thumbnail image file.
 *
 * @author MTG
 * @param  string   Relative Path
 * @param  string   File name
 * @param  string   File extension
 * @param  string   Thumbnail suffix
 * @return array    Thumbnail path
 *
 */
function serendipity_getThumbNailPath($sRelativePath, $sName, $sExtension, $sThumbName) {
    $aTempArray = array('path'      => $sRelativePath,
                        'name'      => $sName,
                        'extension' => $sExtension);
    serendipity_plugin_api::hook_event('backend_thumbnail_filename_select', $aTempArray);

    if (isset($aTempArray['thumbnail_filename'])) {
        $sThumbNailPath = $aTempArray['thumbnail_filename'];
    } else {
        $sThumbNailPath = $sRelativePath . $sName . (!empty($sThumbName) ? '.' . $sThumbName : '') . '.' . $sExtension;
    }

    return $sThumbNailPath;
}

 /**
 * Given a relative path to an image, construct an array containing all
 * relevant information about that image in the file structure.
 *
 * @author MTG
 * @param  string   Relative Path
 * @return array    Data about image
 *
 */
function &serendipity_getImageData($sRelativePath) {
    global $serendipity;

    // First, peel off the file name from the path
    $nPos = strrpos($sRelativePath, '/');
    if (is_bool($nPos) && !$nPos) {
        $sFileName  = $sRelativePath;
        $sDirectory = '';
    } else {
        $nLastSlashPos = 1 + $nPos;
        $sFileName     = substr($sRelativePath, $nLastSlashPos);
        $sDirectory    = substr($sRelativePath, 0, $nLastSlashPos);
    }

    list($sName, $sExtension) = serendipity_parseFileName($sFileName);

    $sImagePath = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $sRelativePath;

    $aSizeData = @serendipity_getimagesize($sImagePath , '', $sExtension);
    $nWidth    = $aSizeData[0];
    $nHeight   = $aSizeData[1];
    $sMime     = $aSizeData['mime'];
    $nFileSize = @filesize($sImagePath);

    $array = array(
        'name'              => $sName,
        'extension'         => $sExtension,
        'mime'              => $sMime,
        'size'              => $nFileSize,
        'dimensions_width'  => $nWidth,
        'dimensions_height' => $nHeight,
        'path'              => $sDirectory,
        'authorid'          => 0,
        'hotlink'           => 0,
        'id'                => $sRelativePath,
        'realname'          => $sFileName
    );

    return $array;
}

/**
 * Shows the HTML form to add/edit properties of uploaded media items
 *
 * @param  array    Associative array holding an array('image_id', 'target', 'created_thumbnail') that points to the uploaded media
 * @param  int      How many keyword checkboxes to display next to each other?
 * @param  boolean  Can existing data be modified?
 * @return boolean
 *
 */
function serendipity_showPropertyForm(&$new_media, $keywordsPerBlock = 3, $is_edit = true) {
    global $serendipity;

    if (!is_array($new_media) || count($new_media) < 1) {
        return true;
    }

    $mirror = array();
    serendipity_checkPropertyAccess($new_media, $mirror, 'read');

    $editform_hidden = '';
    if (isset($GLOBALS['image_selector_addvars']) && is_array($GLOBALS['image_selector_addvars'])) {
        // These variables may come from serendipity_admin_image_selector.php to show embedded upload form
        foreach($GLOBALS['image_selector_addvars'] AS $imgsel_key => $imgsel_val) {
            $editform_hidden .= '          <input type="hidden" name="serendipity[' . htmlspecialchars($imgsel_key) . ']" value="' . htmlspecialchars($imgsel_val) . '" />' . "\n";
        }
    }

    $dprops   = explode(';', $serendipity['mediaProperties']);
    $keywords = explode(';', $serendipity['mediaKeywords']);

    $show = array();
    foreach($new_media AS $idx => $media) {
        $props =& serendipity_fetchMediaProperties($media['image_id']);

        $show[$idx] =& $media['internal'];
        $show[$idx]['image_id'] = $media['image_id'];

        serendipity_prepareMedia($show[$idx]);
        if (!is_array($props['base_metadata'])) {
            $show[$idx]['metadata'] =& serendipity_getMetaData($show[$idx]['realfile'], $show[$idx]['header']);
        } else {
            $show[$idx]['metadata'] = $props['base_metadata'];
            serendipity_plugin_api::hook_event('media_getproperties_cached', $show[$idx]['metadata'], $show[$idx]['realfile']);
        }

        serendipity_parseMediaProperties($dprops, $keywords, $show[$idx], $props, $keywordsPerBlock, $is_edit);
    }

    $smarty_vars = array(
        'is_edit'           => $is_edit,
        'editform_hidden'   => $editform_hidden,
        'keywordsPerBlock'  => $keywordsPerBlock,
        'keywords'          => $keywords,
        'dprops'            => $dprops
    );

    return serendipity_showMedia(
        $show,
        $mirror,
        '',
        false,
        1,
        false,
        $smarty_vars);
}

/**
 * Parse/Convert properties
 *
 * @param  array    Holds the property key array
 * @param  array    Holds the keyword key array
 * @param  int      Holds the media metadata
 * @param  int      Holds the media properties
 * @param  int      How many keyword checkboxes to display next to each other?
 * @param  boolean  Can existing data be modified?
 * @return boolean
 *
 */
function serendipity_parseMediaProperties(&$dprops, &$keywords, &$media, &$props, $keywordsPerBlock, $is_edit) {
    global $serendipity;

    if (!is_array($dprops)) {
        $dprops   = explode(';', $serendipity['mediaProperties']);
    }
    if (!is_array($keywords)) {
        $keywords = explode(';', $serendipity['mediaKeywords']);
    }

    $media['references'] = serendipity_db_query("SELECT link, name
                            FROM {$serendipity['dbPrefix']}references
                           WHERE entry_id = " . $media['id'] . "
                             AND type = 'media'
                        ORDER BY name DESC
                           LIMIT 15", false, 'assoc');
    if (!is_array($media['references'])) {
        $media['references'] = false;
    }

    foreach($dprops AS $prop) {
        $type = 'input';
        $parts = explode(':', trim($prop));

        if (in_array('MULTI', $parts)) {
            $type = 'textarea';
        }

        if (preg_match('@(AUDIO|VIDEO|DOCUMENT|IMAGE|ARCHIVE|BINARY)@i', $prop)) {
            $show_item = false;
            if ($media['mediatype'] == 'video' && in_array('VIDEO', $parts)) {
                $show_item = true;
            }

            if ($media['mediatype'] == 'audio'  && in_array('AUDIO', $parts)) {
                $show_item = true;
            }

            if ($media['mediatype'] == 'image'  && in_array('IMAGE', $parts)) {
                $show_item = true;
            }

            if ($media['mediatype'] == 'document' && in_array('DOCUMENT', $parts)) {
                $show_item = true;
            }

            if ($media['mediatype'] == 'archive' && in_array('ARCHIVE', $parts)) {
                $show_item = true;
            }

            if ($media['mediatype'] == 'binary' && in_array('BINARY', $parts)) {
                $show_item = true;
            }

            if (!$show_item) {
                continue;
            }
        }

        if (!$is_edit) {
            $type = 'readonly';
        }
        $val = serendipity_mediaTypeCast($parts[0], $props['base_property'][$parts[0]], true);

        $propkey = htmlspecialchars($parts[0]) . $idx;

        $media['base_property'][$propkey] = array(
            'label' => htmlspecialchars(defined('MEDIA_PROPERTY_' . strtoupper($parts[0])) ? constant('MEDIA_PROPERTY_' . strtoupper($parts[0])) : $parts[0]),
            'type'  => $type,
            'val'   => $val,
            'title' => htmlspecialchars($parts[0])
        );
        
        if (!is_array($GLOBALS['IPTC'])) {
            // Your templates config.inc.php or any of the language files can declare this variable,
            // if you want to use other default settings for this. No interface ability to declare this
            // yet, sorry.
            $GLOBALS['IPTC'] = array(
                'DATE'          => array('DateCreated'),
                'RUN_LENGTH'    => array('RunLength'),
                'DPI'           => array('XResolution'),
                'COPYRIGHT'     => array('Creator'),
                'TITLE'         => array('Title', 'ObjectName'),
                'COMMENT1'      => array('Description'),
                'ALT'           => array('Title', 'ObjectName'),
                'COMMENT2'      => array('Keywords', 'PhotoLocation')
            );
        }

        $default_iptc_val = null;
        if (empty($val)) {
            switch($parts[0]) {
                case 'DATE':
                    $default_iptc_val = serendipity_serverOffsetHour();

                case 'RUN_LENGTH':
                    if (!isset($default_iptc_val)) {
                        $default_iptc_val = '00:00:00.00';
                    }

                case 'DPI':
                    if (!isset($default_iptc_val)) {
                        $default_iptc_val = '72';
                    }

                case 'COPYRIGHT':
                    if (!isset($default_iptc_val)) {
                        $default_iptc_val = $serendipity['serendipityUser'];
                    }

                case 'TITLE':
                    if (!isset($default_iptc_val)) {
                        $default_iptc_val = $media['realname'];
                    }

                case 'ALT':
                    if (!isset($default_iptc_val)) {
                        $default_iptc_val = '';
                    }

                case 'COMMENT1':
                    if (!isset($default_iptc_val)) {
                        $default_iptc_val = '';
                    }

                case 'COMMENT2':
                    if (!isset($default_iptc_val)) {
                        $default_iptc_val = '';
                    }

                    $media['base_property'][$propkey]['val'] = serendipity_pickKey($media['metadata'], 'Keywords', '');

                    $new_iptc_val     = false;
                    foreach($GLOBALS['IPTC'][$parts[0]] AS $iptc_key) {
                        if (empty($new_iptc_val)) {
                            $new_iptc_val = serendipity_pickKey($media['metadata'], $iptc_key, '');
                        }
                    }

                    if (empty($new_iptc_val)) {
                        $new_iptc_val = $default_iptc_val;
                    }

                    if ($parts[0] == 'DATE') {
                        $media['base_property'][$propkey]['val'] = serendipity_strftime(DATE_FORMAT_SHORT, $new_iptc_val);
                    } else {
                        $media['base_property'][$propkey]['val'] = $new_iptc_val;
                    }

                    break;

                default:
                    serendipity_plugin_api::hook_event('media_showproperties', $media, $propkey);
                    break;
            }
        }
    }

    if ($keywordsPerBlock > 0) {
        $rows = ceil(count($keywords) / $keywordsPerBlock);
        for($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $keywordsPerBlock; $j++) {
                $kidx = ($i*$keywordsPerBlock) + $j;
                if (isset($keywords[$kidx])) {
                    $media['base_keywords'][$i][$j] = array(
                        'name'      => htmlspecialchars($keywords[$kidx]),
                        'selected'  => isset($props['base_keyword'][$keywords[$kidx]]) ? true : false
                    );
                } else {
                    $media['base_keywords'][$i][$j] = array();
                }
            }
        }
    }
}

/**
 * Tries to auto-convert specific fields into DB-storable values
 *
 * @param  string   The keyname
 * @param  string   The value
 * @param  string   Invert?
 * @return array    array('image_id') holding the last created thumbnail for immediate processing
 *
 */
function serendipity_mediaTypeCast($key, $val, $invert = false) {
    if (stristr($key, 'date') !== FALSE) {
        if ($invert && is_numeric($val)) {
            return serendipity_strftime(DATE_FORMAT_SHORT, $val, false);
        } elseif ($invert === false) {
            $tmp = strtotime($val);
            if ($tmp !== FALSE && $tmp > 1) {
                return $tmp;
            }
        }
    } elseif ($invert && stristr($key, 'length') !== FALSE) {
        $tmp = '';

        $hours    = intval(intval($val) / 3600);
        $minutes  = intval(($val / 60) % 60);
        $seconds  = intval($val % 60);
        $mseconds = intval((($val - $seconds) * 100) % 100);

        $tmp .= str_pad($hours, 2, '0', STR_PAD_LEFT) . ':';
        $tmp .= str_pad($minutes, 2, '0', STR_PAD_LEFT). ':';
        $tmp .= str_pad($seconds, 2, '0', STR_PAD_LEFT) . '.';
        $tmp .= str_pad($mseconds, 2, '0', STR_PAD_LEFT);

        return $tmp;
    } elseif ($invert === false && preg_match('@^([0-9]+):([0-9]+):([0-9]+).([0-9]+)$@i', $val, $m)) {
        $tmp = ($m[1] * 3600)
             + ($m[2] * 60)
             + ($m[3])
             + ($m[4] / 100);
        return $tmp;
    }

    return $val;
}

/**
 * Inserts media properties
 *
 * @param   string  Property_group
 * @return array    array('image_id') holding the last created thumbnail for immediate processing
 *
 */
function serendipity_insertMediaProperty($property_group, $property_subgroup, $image_id, &$media, $use_cast = true) {
    global $serendipity;

    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}mediaproperties
                                WHERE mediaid = " . (int)$image_id . "
                                  " . ($property_subgroup != 'ALL' ? "AND property_subgroup = '" . serendipity_db_escape_string($property_subgroup) . "'" : '') . "
                                  AND property_group = '" . serendipity_db_escape_string($property_group) . "'");

    if (is_array($media)) {
        foreach($media AS $key => $val) {
            if ($key == 'image_id') continue;

            if (is_array($val)) {
                $use_property_subgroup = $key;
                $use_val = $val;
            } else {
                $use_property_subgroup = $property_subgroup;
                $use_val = array($key => $val);
            }

            foreach($use_val AS $insert_key => $insert_val) {
                if ($use_cast) {
                    $insert_val = serendipity_mediaTypeCast($insert_key, $insert_val);
                }
                $q = sprintf("INSERT INTO {$serendipity['dbPrefix']}mediaproperties
                                          (mediaid, property_group, property_subgroup, property, value)
                                   VALUES (%d, '%s', '%s', '%s', '%s')",
                             $image_id,
                             serendipity_db_escape_string($property_group),
                             serendipity_db_escape_string($use_property_subgroup),
                             serendipity_db_escape_string($insert_key),
                             serendipity_db_escape_string($insert_val));
                serendipity_db_query($q);
            }
        }
    }
}

/**
 * Inserts the submitted properties of uploaded media items
 *
 * @return array    array('image_id') holding the last created thumbnail for immediate processing
 *
 */
function serendipity_parsePropertyForm() {
    global $serendipity;

    if (!is_array($serendipity['POST']['mediaProperties'])) {
        return false;
    }

    serendipity_checkPropertyAccess($serendipity['POST']['mediaProperties'], $serendipity['POST']['mediaKeywords'], 'write');

    foreach($serendipity['POST']['mediaProperties'] AS $id => $media) {
        serendipity_insertMediaProperty('base_property', '', $media['image_id'], $media);

        $s9y_img = $media['internal'];
        $s9y_img['image_id'] = $media['image_id'];
        serendipity_prepareMedia($s9y_img);
        $s9y_img['metadata'] =& serendipity_getMetaData($s9y_img['realfile'], $s9y_img['header']);
        serendipity_insertMediaProperty('base_metadata', 'ALL', $media['image_id'], $s9y_img['metadata']);
        $s9y_img['hidden'] = array(
            'author'   => $serendipity['serendipityUser'],
            'authorid' => $serendipity['authorid']
        );
        serendipity_insertMediaProperty('base_hidden', '', $media['image_id'], $s9y_img['hidden']);

        if ($serendipity['POST']['oldDir'][$id] != $serendipity['POST']['newDir'][$id]) {
            serendipity_moveMediaDirectory(
                serendipity_uploadSecure($serendipity['POST']['oldDir'][$id]),
                serendipity_uploadSecure($serendipity['POST']['newDir'][$id]),
                'filedir',
                $media['image_id']);
        }
    }

    if (is_array($serendipity['POST']['mediaKeywords'])) {
        foreach($serendipity['POST']['mediaKeywords'] AS $id => $keywords) {
            serendipity_insertMediaProperty('base_keyword', '', $serendipity['POST']['mediaProperties'][$id]['image_id'], $keywords);
        }
    }

    $array = array(
        'image_id'          => $serendipity['POST']['mediaProperties'][0]['image_id'],
    );

    return $array;
}

/**
 * Fetches existing Media Properties for images
 *
 * @param  int      The media item id
 * @return array    Array of image metadata
 *
 */
function &serendipity_fetchMediaProperties($id) {
    global $serendipity;

    $sql = "SELECT mediaid, property, property_group, property_subgroup, value
              FROM {$serendipity['dbPrefix']}mediaproperties
             WHERE mediaid IN (" . (is_array($id) ? serendipity_db_implode(',', $id) : (int)$id) . ")";
    $rows  = serendipity_db_query($sql, false, 'assoc');
    $props = array();
    if (is_array($rows)) {
        foreach($rows AS $row) {
            if (empty($row['property_subgroup'])) {
                if (is_array($id)) {
                    $props[$row['mediaid']][$row['property_group']][$row['property']] = $row['value'];
                } else {
                    $props[$row['property_group']][$row['property']] = $row['value'];
                }
            } else {
                if (is_array($id)) {
                    $props[$row['mediaid']][$row['property_group']][$row['property_subgroup']][$row['property']] = $row['value'];
                } else {
                    $props[$row['property_group']][$row['property_subgroup']][$row['property']] = $row['value'];
                }
            }
        }
    }
    return $props;
}

/**
 * Checks if properties to a specific image are allowed to be fetched
 *
 * @param  array    Array of image metadata
 * @param  array    Array of additional image metadata
 * @param  string   ACL toggle type ('read', 'write')
 * @return array    Stripped Array of image metadata
 *
 */
function serendipity_checkPropertyAccess(&$new_media, &$additional, $mode = 'read') {
    global $serendipity;

    // Strip out images we don't have access to
    $ids = array();
    foreach($new_media AS $id => $item) {
        $ids[] = $item['image_id'];
    }

    $valid_images = serendipity_fetchImageFromDatabase($ids, $mode);
    foreach ($new_media AS $id => $media) {
        if (!isset($valid_images[$media['image_id']])) {
            unset($new_media[$id]);
            unset($additional[$id]);
        } else {
            $new_media[$id]['internal'] = $valid_images[$media['image_id']];
        }
    }

    return true;
}

/**
 * Prepare a media item for showing
 *
 * @param  array    Array of image metadata
 * @param  string   URL for maintenance tasks
 * @return bool
 *
 */
function serendipity_prepareMedia(&$file, $url = '') {
    global $serendipity;
    static $full_perm = null;

    if ($full_perm === null) {
        $full_perm = serendipity_checkPermission('adminImagesMaintainOthers');
    }

	$sThumbSource           = serendipity_getThumbNailPath($file['path'], $file['name'], $file['extension'], $file['thumbnail_name']);
	$file['full_thumb']     = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $sThumbSource;
	$file['full_thumbHTTP'] = $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $sThumbSource;

    if ($file['hotlink']) {
        $file['full_file']  = $file['path'];
    	$file['show_thumb'] = $file['path'];
    	if (!isset($file['imgsrc'])) {
        	$file['imgsrc'] = $file['show_thumb'];
    	}
    } else {
        $file['full_file']  = $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $file['path'] . $file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']);
    	$file['show_thumb'] = $file['full_thumbHTTP'];
    	if (!isset($file['imgsrc'])) {
        	$file['imgsrc'] = $serendipity['uploadHTTPPath'] . $file['path'] . $file['name'] . (!empty($file['thumbnail_name']) ? '.' . $file['thumbnail_name'] : '') . (empty($file['extension']) ? '' : '.' . $file['extension']);
    	}
    }

    // Detect PDF thumbs
    if (file_exists($file['full_thumb'] . '.png')) {
        $file['full_thumb']     .= '.png';
        $file['full_thumbHTTP'] .= '.png';
        $file['show_thumb']     .= '.png'; 
        $sThumbSource           .= '.png';
    }
    
    if (empty($file['realname'])) {
        $file['realname'] = $file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']);
    }
    $file['diskname'] = $file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']);

    $file['links'] = array('imagelinkurl' => $file['full_file']);

	$file['dim']       = @getimagesize($file['full_thumb'], $file['thumb_header']);
	$file['dim_orig']  = @getimagesize($serendipity['serendipityPath'] . $file['full_file'], $file['header']);
    $file['is_image']  = serendipity_isImage($file);

    if ($file['is_image']) {
        $file['mediatype'] = 'image';
    } elseif (0 === strpos(strtolower($file['displaymime']), 'video/') || 0 === strpos(strtolower($file['displaymime']), 'application/x-shockwave')) {
        $file['mediatype'] = 'video';
    } elseif (0 === strpos(strtolower($file['displaymime']), 'audio/') || 0 === strpos(strtolower($file['displaymime']), 'application/vnd.rn-') || 0 === strpos(strtolower($file['displaymime']), 'application/ogg')) {
        $file['mediatype'] = 'audio';
    } elseif (0 === strpos(strtolower($file['displaymime']), 'text/')) {
        $file['mediatype'] = 'document';
    } elseif (preg_match('@application/(pdf|rtf|msword|msexcel|excel|x-excel|mspowerpoint|postscript|vnd\.ms*|powerpoint)@i', $file['displaymime'])) {
        $file['mediatype'] = 'document';
    } elseif (preg_match('@application/(java-archive|zip|gzip|arj|x-bzip|x-bzip2|x-compressed|x-gzip|x-stuffit)@i', $file['displaymime'])) {
        $file['mediatype'] = 'archive';
    } else {
        $file['mediatype'] = 'binary';
    }

    $file['realfile']  = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']);

    if ($full_perm || $serendipity['authorid'] == $file['authorid'] || $file['authorid'] == '0') {
        $file['is_editable'] = true;
    } else {
        $file['is_editable'] = false;
    }

    /* If it is an image, and the thumbnail exists */
    if ($file['is_image'] && file_exists($file['full_thumb'])) {
        $file['thumbWidth']  = $file['dim'][0];
        $file['thumbHeight'] = $file['dim'][1];
        $file['preview'] .= '<img src="' . $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $sThumbSource . '" border="0" title="' . $file['path'] . $file['name'] . '" alt="'. $file['realname'] . '" />';
        if ($url) {
            $file['preview_url'] = $url .'&amp;serendipity[image]='. $file['id'];
            $file['preview'] = '<a href="'. $file['preview_url'] .'">'. $file['preview'] .'</a>';
        }
    } elseif ($file['is_image'] && $file['hotlink']) {
        $sizes = serendipity_calculate_aspect_size($file['dimensions_width'], $file['dimensions_height'], $serendipity['thumbSize'], $serendipity['thumbConstraint']);
        $file['thumbWidth']  = $sizes[0];
        $file['thumbHeight'] = $sizes[1];
        $file['preview'] .= '<img src="' . $file['path'] . '" width="' . $sizes[0] . '" height="' . $sizes[1] . '" border="0" title="' . $file['path'] . '" alt="'. $file['realname'] . '" />';
        if ($url) {
            $file['preview_url'] = $url .'&amp;serendipity[image]='. $file['id'];
            $file['preview'] = '<a href="'. $file['preview_url'] .'">'. $file['preview'] .'</a>';
        }
    /* If it's not an image, or the thumbnail does not exist */
    } else {
        $mimeicon = serendipity_getTemplateFile('admin/img/mime_' . preg_replace('@[^a-z0-9\-\_]@i', '-', $file['mime']) . '.png');
        if (!$mimeicon) {
            $mimeicon = serendipity_getTemplateFile('admin/img/mime_unknown.png');
        }
        $file['preview'] .= '<img src="'. $mimeicon .'" title="' . $file['path'] . $file['name'] . ' (' . $file['mime'] . ')" alt="'. $file['mime'] .'" /><br /><span style="font-weight: bold; font-size: 8pt">- ' . (($file['hotlink']) ? MEDIA_HOTLINKED : $file['mime']) .' -</span>';
        if ($url) {
            $file['preview_url'] = $url .'&amp;serendipity[image]='. $file['id'];
            $file['preview'] .= '<br /><a href="' . $file['preview_url'] . '">' . $file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']) . '</a>';
        }
    }

    $file['popupWidth']   = ($file['is_image'] ? ($file['dimensions_width']  + 20) : 600);
    $file['popupHeight']  = ($file['is_image'] ? ($file['dimensions_height'] + 20) : 500);
    if ($file['hotlink']) {
        $file['nice_hotlink'] = wordwrap($file['path'], 45, '<br />', 1);
    }
    $file['nice_size']    = number_format(round($file['size']/1024, 2), NUMBER_FORMAT_DECIMALS, NUMBER_FORMAT_DECPOINT, NUMBER_FORMAT_THOUSANDS);

    return true;
}

/**
 * Prints a media item
 *
 * @param  array    Array of image metadata
 * @param  string   URL for maintenance tasks
 * @param  boolean  Whether to show maintenance task items
 * @param  int      how many media items to display per row
 * @param  boolean  Enclose within a table cell?
 * @param  array    Additional Smarty variables
 * @param  boolean  If TRUE, will echo Smarty output.
 * @return string   Smarty block name
 *
 */
function serendipity_showMedia(&$file, &$paths, $url = '', $manage = false, $lineBreak = 3, $enclose = true, $smarty_vars = array(), $smarty_display = true) {
    global $serendipity;

    $form_hidden = '';
    foreach($serendipity['GET'] AS $g_key => $g_val) {
        if (!is_array($g_val) && $g_key != 'page') {
            $form_hidden .= '<input type="hidden" name="serendipity[' . $g_key . ']" value="' . htmlspecialchars($g_val) . '" />';
        }
    }

    serendipity_smarty_init();
    $media = array(
        'manage'            => $manage,
        'lineBreak'         => $lineBreak,
        'lineBreakP'        => round(1/$lineBreak*100),
        'url'               => $url,
        'enclose'           => $enclose,
        'zoomIMG'           => serendipity_getTemplateFile('admin/img/big_zoom.png'),
        'renameIMG'         => serendipity_getTemplateFile('admin/img/big_rename.png'),
        'resizeIMG'         => serendipity_getTemplateFile('admin/img/big_resize.png'),
        'rotatecwIMG'       => serendipity_getTemplateFile('admin/img/big_rotate_cw.png'),
        'rotateccwIMG'      => serendipity_getTemplateFile('admin/img/big_rotate_ccw.png'),
        'configureIMG'      => serendipity_getTemplateFile('admin/img/configure.png'),
        'deleteIMG'         => serendipity_getTemplateFile('admin/img/big_delete.png'),
        'prevIMG'           => serendipity_getTemplateFile('admin/img/previous.png'),
        'nextIMG'           => serendipity_getTemplateFile('admin/img/next.png'),
        'token'             => serendipity_setFormToken(),
        'form_hidden'       => $form_hidden,
        'blimit_path'       => empty($smarty_vars['limit_path']) ? '':basename($smarty_vars['limit_path']),
        'only_path'         => $serendipity['GET']['only_path'],
        'only_filename'     => $serendipity['GET']['only_filename'],
        'sortorder'         => $serendipity['GET']['sortorder'],
        'keywords_selected' => $serendipity['GET']['keywords'],
        'filter'            => $serendipity['GET']['filter'],
        'sort_order'        => serendipity_getImageFields(),
        'authors'           => serendipity_fetchUsers(),
        'sort_row_interval' => array(8, 16, 50, 100),
        'nr_files'          => count($file),
        'keywords'          => explode(';', $serendipity['mediaKeywords']),
    );

    $media = array_merge($media, $smarty_vars);
    $media['files'] =& $file;
    if (count($paths) > 0) {
        $media['paths'] =& $paths;
    } else {
        $media['paths'] =& serendipity_getMediaPaths();
    }

    $serendipity['smarty']->assignByRef('media', $media);

    if ($enclose) {
        serendipity_smarty_fetch('MEDIA_ITEMS', 'admin/media_items.tpl');
        $block = 'admin/media_pane.tpl';
        if ($smarty_display) {
            $serendipity['smarty']->display(serendipity_getTemplateFile('admin/media_pane.tpl', 'serendipityPath'));
        }
    } else {
        serendipity_smarty_fetch('MEDIA_ITEMS', 'admin/media_items.tpl');
        $block = 'admin/media_properties.tpl';
        if ($smarty_display) {
            $serendipity['smarty']->display(serendipity_getTemplateFile('admin/media_properties.tpl', 'serendipityPath'));
        }
    }

    return $block;
}

/**
 * Convert a IPTC/EXIF/XMP item
 *
 * @param  string   The content
 * @param  string   The type of the content
 * @return string   The converted content
 *
 */
function serendipity_metaFieldConvert(&$item, $type) {
    switch($type) {
        case 'math':
            $parts = explode('/', $item);
            return ($parts[1] > 0) ? ($parts[0] / $parts[1]) : 0;
            break;

        case 'or':
            if ($item == '1') {
                return 'Landscape';
            } else {
                return 'Portrait';
            }

        case 'date':
            return strtotime($item);
            break;

        case 'date2':
            $parts = preg_split('&[ :]&', $item);
            return mktime($parts[3], $parts[4], $parts[5], $parts[1], $parts[2], $parts[0]);
            break;

        case 'IPTCdate':
            preg_match('@(\d{4})(\d{2})(\d{2})@',$item,$parts);
            return mktime(0, 0, 0, intval($parts[2]), intval($parts[3]), intval($parts[1]));
            break;

        case 'IPTCtime':
            preg_match('@(\d{2})(\d{2})(\d{2})([\+-])(\d{2})(\d{2})@',$item,$parts);
            $time = serendipity_strftime("%H:%M",mktime(intval($parts[1]), intval($parts[2]), intval($parts[3]), 0, 0, 0));
            $timezone = serendipity_strftime("%H:%M",mktime(intval($parts[5]), intval($parts[6]), 0, 0, 0, 0));
            return $time." GMT".$parts[4].$timezone;
            break;

        case 'rdf':
            if (preg_match('@<rdf:li[^>]*>(.*)</rdf:li>@i', $item, $ret)) {
                return $ret[1];
            }
            break;

        case 'text':
        default:
            return trim($item);
            break;
    }

    return '';
}

/**
 * Get the RAW media header data (XMP)
 *
 * @param  string   Filename
 * @return array    The raw media header data
 *
 * Inspired, but rewritten,  by "PHP JPEG Metadata Toolkit" from http://electronics.ozhiker.com.
 * Code is GPL so sadly we couldn't bundle that GREAT library.
 */
function serendipity_getMediaRaw($filename) {
    $abort = false;

    $f = @fopen($filename, 'rb');
    $ret = array();
    if (!$f) {
        return $ret;
    }

    $filedata = fread($f, 2);

    if ($filedata != "\xFF\xD8") {
        fclose($f);
        return $ret;
    }

    $filedata = fread($f, 2);

    if ($filedata[0] != "\xFF") {
        fclose($f);
        return $ret;
    }

    while (!$abort && !feof($f) && $filedata[1] != "\xD9") {
        if ((ord($filedata[1]) < 0xD0) || (ord($filedata[1]) > 0xD7)) {
            $ordret   = fread($f, 2);
            $ordstart = ftell($f);
            $int      = unpack('nsize', $ordret);

            if (ord($filedata[1]) == 225) {
                $content  = fread($f, $int['size'] - 2);

                if (substr($content, 0, 24) == 'http://ns.adobe.com/xap/') {
                    $ret[] = array(
                        'ord'      => ord($filedata[1]),
                        'ordstart' => $ordstart,
                        'int'      => $int,
                        'content'  => $content
                    );
                }
            } else {
                fseek($f, $int['size'] - 2, SEEK_CUR);
            }
        }

        if ($filedata[1] == "\xDA") {
            $abort = true;
        } else {
            $filedata = fread($f, 2);
            if ($filedata[0] != "\xFF") {
                fclose($f);
                return $ret;
            }
        }
    }

    fclose($f);

    return $ret;
}

/**
 * Get the IPTC/EXIF/XMP media metadata
 *
 * @param  string   Filename
 * @return array    The raw media header data
 *
 */
function &serendipity_getMetaData($file, &$info) {
    global $serendipity;

    # Fields taken from: http://demo.imagefolio.com/demo/ImageFolio31_files/skins/cool_blue/images/iptc.html
    static $IPTC_Fields = array(
    '2#005' => 'ObjectName',
    '2#025' => 'Keywords',
    '2#026' => 'LocationCode',
    '2#027' => 'LocationName',
    '2#030' => 'ReleaseDate',
    '2#035' => 'ReleaseTime',
    '2#037' => 'ExpirationDate',
    '2#038' => 'ExpirationTime',
    '2#055' => 'IPTCDateCreated',
    '2#060' => 'IPTCTimeCreated',
    '2#062' => 'DigitalDateCreated',
    '2#063' => 'DigitalTimeCreated',
    '2#065' => 'Software',
    '2#070' => 'SoftwareVersion',
    '2#080' => 'Photographer',
    '2#085' => 'Photographer Name',
    '2#090' => 'PhotoLocation',
    '2#092' => 'PhotoLocation2',
    '2#095' => 'PhotoState',
    '2#100' => 'PhotoCountryCode',
    '2#101' => 'PhotoCountry',
    '2#105' => 'Title',
    '2#110' => 'Credits',
    '2#115' => 'Source',
    '2#116' => 'Creator',
    '2#118' => 'Contact',
    '2#120' => 'Description',
    '2#131' => 'Orientation',
    '2#150' => 'AudioType',
    '2#151' => 'AudioSamplingRate',
    '2#152' => 'AudioSamplingResolution',
    '2#153' => 'AudioDuration'
    );

    static $ExifFields = array(
        'IFD0' => array(
            'Make'          => array('type' => 'text',  'name' => 'CameraMaker'),
            'Model'         => array('type' => 'text',  'name' => 'CameraModel'),
            'Orientation'   => array('type' => 'or',    'name' => 'Orientation'),
            'XResolution'   => array('type' => 'math',  'name' => 'XResolution'),
            'YResolution'   => array('type' => 'math',  'name' => 'YResolution'),
            'Software'      => array('type' => 'text',  'name' => 'Software'),
            'DateTime'      => array('type' => 'date2', 'name' => 'DateCreated'),
            'Artist'        => array('type' => 'text',  'name' => 'Creator'),
        ),

        'EXIF' => array(
            'ExposureTime'          => array('type' => 'math',  'name' => 'ExposureTime'),
            'ApertureValue'         => array('type' => 'math',  'name' => 'ApertureValue'),
            'MaxApertureValue'      => array('type' => 'math',  'name' => 'MaxApertureValue'),
            'ISOSpeedRatings'       => array('type' => 'text',  'name' => 'ISOSpeedRatings'),
            'DateTimeOriginal'      => array('type' => 'date2', 'name' => 'DateCreated'),
            'MeteringMode'          => array('type' => 'text',  'name' => 'MeteringMode'),
            'FNumber'               => array('type' => 'math',  'name' => 'FNumber'),
            'ExposureProgram'       => array('type' => 'text',  'name' => 'ExposureProgram'),
            'FocalLength'           => array('type' => 'math',  'name' => 'FocalLength'),
            'WhiteBalance'          => array('type' => 'text',  'name' => 'WhiteBalance'),
            'DigitalZoomRatio'      => array('type' => 'math',  'name' => 'DigitalZoomRatio'),
            'FocalLengthIn35mmFilm' => array('type' => 'text',  'name' => 'FocalLengthIn35mmFilm'),
            'Flash'                 => array('type' => 'text',  'name' => 'Flash'),
            'Fired'                 => array('type' => 'text',  'name' => 'FlashFired'),
            'RedEyeMode'            => array('type' => 'text',  'name' => 'RedEyeMode'),
        )
    );

    static $xmpPatterns = array(
    'tiff:Orientation'              => array('type' => 'or',   'name' => 'Orientation'),
    'tiff:XResolution'              => array('type' => 'math', 'name' => 'XResolution'),
    'tiff:YResolution'              => array('type' => 'math', 'name' => 'YResolution'),
    'tiff:Make'                     => array('type' => 'text', 'name' => 'CameraMaker'),
    'tiff:Model'                    => array('type' => 'text', 'name' => 'CameraModel'),
    'xap:ModifyDate'                => array('type' => 'date', 'name' => 'DateModified'),
    'xap:CreatorTool'               => array('type' => 'text', 'name' => 'Software'),
    'xap:CreateDate'                => array('type' => 'date', 'name' => 'DateCreated'),
    'xap:MetadataDate'              => array('type' => 'date', 'name' => 'DateMetadata'),

    'exif:ExposureTime'             => array('type' => 'math',  'name' => 'ExposureTime'),
    'exif:ApertureValue'            => array('type' => 'math',  'name' => 'ApertureValue'),
    'exif:MaxApertureValue'         => array('type' => 'math',  'name' => 'MaxApertureValue'),
    'exif:ISOSpeedRatings'          => array('type' => 'text',  'name' => 'ISOSpeedRatings'),
    'exif:DateTimeOriginal'         => array('type' => 'date',  'name' => 'DateCreated'),
    'exif:MeteringMode'             => array('type' => 'text',  'name' => 'MeteringMode'),
    'exif:FNumber'                  => array('type' => 'math',  'name' => 'FNumber'),
    'exif:ExposureProgram'          => array('type' => 'text',  'name' => 'ExposureProgram'),
    'exif:FocalLength'              => array('type' => 'math',  'name' => 'FocalLength'),
    'exif:WhiteBalance'             => array('type' => 'text',  'name' => 'WhiteBalance'),
    'exif:DigitalZoomRatio'         => array('type' => 'math',  'name' => 'DigitalZoomRatio'),
    'exif:FocalLengthIn35mmFilm'    => array('type' => 'text',  'name' => 'FocalLengthIn35mmFilm'),
    'exif:Fired'                    => array('type' => 'text',  'name' => 'FlashFired'),
    'exif:RedEyeMode'               => array('type' => 'text',  'name' => 'RedEyeMode'),

    'dc:title'                      => array('type' => 'rdf',   'name' => 'Title'),
    'dc:creator'                    => array('type' => 'rdf',   'name' => 'Creator'),
    );

    $ret = array();

    if (!$serendipity['mediaExif']) {
        return $ret;
    }

    if (!file_exists($file)) {
        return $ret;
    }
    
    if (function_exists('iptcparse') && is_array($info) && isset($info['APP13'])) {
        $iptc = iptcparse($info['APP13']);
        foreach($IPTC_Fields AS $field => $desc) {
            if ($iptc[$field]) {
                if (is_array($iptc[$field])) {
                    $ret['IPTC'][$desc] = trim(implode(';', $iptc[$field]));
                } else {
                    $ret['IPTC'][$desc] = trim($iptc[$field]);
                }
                
                switch ($desc) {
                    case 'IPTCDateCreated':
                        $ret['IPTC'][$desc] = serendipity_metaFieldConvert($ret['IPTC'][$desc],'IPTCdate');
                        break;
                    case 'IPTCTimeCreated':
                        $ret['IPTC'][$desc] = serendipity_metaFieldConvert($ret['IPTC'][$desc],'IPTCtime');
                        break;
                }                
            }
        }
    }

    if (function_exists('exif_read_data') && is_array($info)) {
        $exif = @exif_read_data($file, 'FILE,COMPUTED,ANY_TAG,IFD0,COMMENT,EXIF', true, false);
        if (is_array($exif)) {
            foreach($ExifFields AS $Exifgroup => $ExifField) {
                foreach($ExifField AS $ExifName => $ExifItem) {
                    if (!isset($exif[$Exifgroup][$ExifName])) {
                        continue;
                    }
                    $ret['EXIF'][$ExifItem['name']] = serendipity_metaFieldConvert($exif[$Exifgroup][$ExifName], $ExifItem['type']);
                    if ($ret['EXIF'][$item['name']] == $ret['IPTC'][$item['name']]) {
                        unset($ret['IPTC'][$item['name']]);
                    }
                }
            }
        }
    }

    $xmp = serendipity_getMediaRaw($file);
    foreach($xmp AS $xmp_data) {
        if (empty($xmp_data['content'])) {
            continue;
        }
        foreach($xmpPatterns AS $lookup => $item) {
            if (preg_match('@<' . $lookup . '>(.*)</' . $lookup . '>@', $xmp_data['content'], $match)) {
                $ret['XMP'][$item['name']] = serendipity_metaFieldConvert($match[1], $item['type']);
                if ($ret['EXIF'][$item['name']] == $ret['XMP'][$item['name']]) {
                    unset($ret['EXIF'][$item['name']]);
                }
            }
        }
    }

    serendipity_plugin_api::hook_event('media_getproperties', $ret, $file);

    return $ret;
}

/**
 * Parses an existing filename and increases the filecount.
 *
 * @param  string   The (duplicate) filename
 * @param  string   The full path to the (duplicate) filename
 * @param  string   The directory of the (duplicate) filename
 * @param  boolean  Show new filename?
 * @return string   The new filename
 *
 */
function serendipity_imageAppend(&$tfile, &$target, $dir, $echo = true) {
    static $safe_bail = 20;

    $realname = $tfile;
    list($filebase, $extension) = serendipity_parseFileName($tfile);

    $cnum = 1;
    if (preg_match('@^(.*)([0-9]+)$@', $filebase, $match)) {
        $cnum     = $match[2];
        $filebase = $match[1];
    }

    $i = 0;
    while ($i <= $safe_bail && file_exists($dir . $filebase . $cnum . (empty($extension) ? '' : '.' . $extension))) {
        $cnum++;
    }

    // Check if the file STILL exists and append a MD5 if that's the case. That should be unique enough.
    if (file_exists($dir . $filebase . $cnum . (empty($extension) ? '' : '.' . $extension))) {
        $cnum = md5(time() . $filebase);
    }

    // Those variables are passed by reference!
    $tfile  = $filebase . $cnum . (empty($extension) ? '' : '.' . $extension);
    $target = $dir . $tfile;

    if ($echo) {
        printf(FILENAME_REASSIGNED . '<br />', htmlspecialchars($tfile));
    }
    return $realname;
}

/**
 * Checks if an uploaded media item hits any configured limits.
 *
 * @param  string   The filename
 * @return boolean  TRUE when file is okay, FALSE when it is beyond limits
 *
 */
function serendipity_checkMediaSize($file) {
    global $serendipity;

    if (!empty($serendipity['maxFileSize'])) {
        if (filesize($file) > $serendipity['maxFileSize']) {
            printf(MEDIA_UPLOAD_SIZEERROR . '<br />', (int)$serendipity['maxFileSize']);
            return false;
        }
    }

    if (!empty($serendipity['maxImgWidth']) || !empty($serendipity['maxImgHeight'])) {
        $dim = serendipity_getimagesize($file);
        if (!is_array($dim) || !isset($dim[0])) {
            return true;
        }

        if (!empty($serendipity['maxImgWidth'])) {
            if ($dim[0] > $serendipity['maxImgWidth']) {
                printf(MEDIA_UPLOAD_DIMERROR . '<br />', (int)$serendipity['maxImgWidth'], (int)$serendipity['maxImgHeight']);
                return false;
            }
        }

        if (!empty($serendipity['maxImgHeight'])) {
            if ($dim[1] > $serendipity['maxImgHeight']) {
                printf(MEDIA_UPLOAD_DIMERROR . '<br />', (int)$serendipity['maxImgWidth'], (int)$serendipity['maxImgHeight']);
                return false;
            }
        }
    }

    return true;
}

/**
 * Moves a media directory
 *
 * @param  string   The old directory
 * @param  string   The new directory
 * @param  string   The type of what to remove (dir|file|filedir)
 * @param  string   An item id of a file
 * @return boolean
 *
 */
function serendipity_moveMediaDirectory($oldDir, $newDir, $type = 'dir', $item_id = null, $file = null) {
    global $serendipity;

    $real_oldDir = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $oldDir;
    $real_newDir = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $newDir;

    if ($type == 'dir') {
        if (!is_dir($real_oldDir)) {
            printf(ERROR_FILE_NOT_EXISTS . '<br />', $oldDir);
            return false;
        }

        if (is_dir($real_newDir)) {
            printf(ERROR_FILE_EXISTS . '<br />', $newDir);
            return false;
        }

        if (!rename($real_oldDir, $real_newDir)) {
            printf(MEDIA_DIRECTORY_MOVE_ERROR . '<br />', $newDir);
            return false;
        }

        printf(MEDIA_DIRECTORY_MOVED . '<br />', $newDir);

        $dirs = serendipity_db_query("SELECT id, path
                                        FROM {$serendipity['dbPrefix']}images
                                       WHERE path LIKE '" . serendipity_db_escape_string($oldDir) . "%'", false, 'assoc');
        if (is_array($dirs)) {
            foreach($dirs AS $dir) {
                $old = $dir['path'];
                $new = preg_replace('@^(' . preg_quote($oldDir) . ')@i', $newDir, $old);
                serendipity_db_query("UPDATE {$serendipity['dbPrefix']}images
                                         SET path = '" . serendipity_db_escape_string($new) . "'
                                       WHERE id = {$dir['id']}");
            }
        }

        $dirs = serendipity_db_query("SELECT groupid, artifact_id, artifact_type, artifact_mode, artifact_index
                                        FROM {$serendipity['dbPrefix']}access
                                       WHERE artifact_type = 'directory'
                                         AND artifact_index LIKE '" . serendipity_db_escape_string($oldDir) . "%'", false, 'assoc');
        if (is_array($dirs)) {
            foreach($dirs AS $dir) {
                $old = $dir['artifact_index'];
                $new = preg_replace('@^(' . preg_quote($oldDir) . ')@i', $newDir, $old);
                serendipity_db_query("UPDATE {$serendipity['dbPrefix']}access
                                         SET artifact_index = '" . serendipity_db_escape_string($new) . "'
                                       WHERE groupid        = '" . serendipity_db_escape_string($dir['groupid']) . "'
                                         AND artifact_id    = '" . serendipity_db_escape_string($dir['artifact_id']) . "'
                                         AND artifact_type  = '" . serendipity_db_escape_string($dir['artifact_type']) . "'
                                         AND artifact_mode  = '" . serendipity_db_escape_string($dir['artifact_mode']) . "'
                                         AND artifact_index = '" . serendipity_db_escape_string($dir['artifact_index']) . "'");
            }
        }
    }

    if ($type == 'file') {
        if (serendipity_isActiveFile(basename($newDir))) {
            printf(ERROR_FILE_FORBIDDEN, htmlspecialchars($newDir));
            return false;
        }

        if ($file['hotlink']) {
            serendipity_updateImageInDatabase(array('realname' => $newDir, 'name' => $newDir), $item_id);
        } else {
            $file_new = $file['path'] . $newDir . (empty($file['extension']) ? '' : '.');
            $file_old = $file['path'] . $file['name'] . (empty($file['extension']) ? '' : '.');

            $newfile = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file_new . $file['extension'];
            $oldfile = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file_old . $file['extension'];
            if ($newDir != '' && file_exists($oldfile) && !file_exists($newfile)) {
                $renameValues = array(array(
                    'from'   => $oldfile,
                    'to'     => $newfile,
                    'thumb'  => $serendipity['thumbSuffix'],
                    'fthumb' => $file['thumbnail_name'],
                    'oldDir' => $oldDir,
                    'newDir' => $newDir,
                    'type'   => $type,
                    'item_id'=> $item_id,
                    'file'   => $file
                ));

                serendipity_plugin_api::hook_event('backend_media_rename', $renameValues);

                // Rename file
                rename($renameValues[0]['from'], $renameValues[0]['to']);

                foreach($renameValues AS $renameData) {
                    // Rename thumbnail
                    rename($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] . (!empty($renameData['fthumb']) ? '.' . $renameData['fthumb'] : '') . (empty($file['extension']) ? '' : '.' . $file['extension']),
                           $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $newDir . '.' . $renameData['thumb'] . (empty($file['extension']) ? '' : '.' . $file['extension']));
                }

                serendipity_updateImageInDatabase(array('thumbnail_name' => $renameValues[0]['thumb'], 'realname' => $newDir, 'name' => $newDir), $item_id);
                $oldDir = $file_old;
                $newDir = $file_new;
                $real_oldDir = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $oldDir;
                $real_newDir = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $newDir;
                // Forward user to overview (we don't want the user's back button to rename things again)
            } else {
                if (!file_exists($oldfile)) {
                    echo ERROR_FILE_NOT_EXISTS;
                } elseif (file_exists($newfile)) {
                    echo ERROR_FILE_EXISTS;
                } else {
                    echo ERROR_SOMETHING;
                }

                return false;
            }
        }
    } elseif ($type == 'filedir') {
        serendipity_db_query("UPDATE {$serendipity['dbPrefix']}images
                                 SET path = '" . serendipity_db_escape_string($newDir) . "'
                               WHERE id   = " . (int)$item_id);
        $pick = serendipity_db_query("SELECT * FROM  {$serendipity['dbPrefix']}images
                               WHERE id   = " . (int)$item_id, true, 'assoc');

        // Move thumbs
        $oldfile = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $oldDir . $pick['name'] . (empty($pick['extension']) ? '' : '.' . $pick['extension']);
        $newfile = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $newDir . $pick['name'] . (empty($pick['extension']) ? '' : '.' . $pick['extension']);

        $renameValues = array(array(
            'from'   => $oldfile,
            'to'     => $newfile,
            'thumb'  => $serendipity['thumbSuffix'],
            'fthumb' => $pick['thumbnail_name'],
            'oldDir' => $oldDir,
            'newDir' => $newDir,
            'type'   => $type,
            'item_id'=> $item_id,
            'file'   => $file,
            'name'   => $pick['name']
        ));

        serendipity_plugin_api::hook_event('backend_media_rename', $renameValues);

        // Rename file
        rename($renameValues[0]['from'], $renameValues[0]['to']);

        foreach($renameValues AS $renameData) {
            // Rename thumbnail
            rename($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $oldDir . $pick['name'] . (!empty($renameData['fthumb']) ? '.' . $renameData['fthumb'] : '') . (empty($pick['extension']) ? '' : '.' . $pick['extension']),
                   $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $newDir . $pick['name'] . '.' . $renameData['thumb'] . (empty($pick['extension']) ? '' : '.' . $pick['extension']));
        }

        $oldDir .= $pick['name'];
        $newDir .= $pick['name'];
    } elseif ($type == 'dir') {
        $renameValues = array(array(
            'from'   => $oldfile,
            'to'     => $newfile,
            'thumb'  => $serendipity['thumbSuffix'],
            'fthumb' => $file['thumbnail_name'],
            'oldDir' => $oldDir,
            'newDir' => $newDir,
            'type'   => $type,
            'item_id'=> $item_id,
            'file'   => $file
        ));

        serendipity_plugin_api::hook_event('backend_media_rename', $renameValues);
    }

    // Only MySQL supported, since I don't know how to use REGEXPs differently.
    if ($serendipity['dbType'] != 'mysql' && $serendipity['dbType'] != 'mysqli') {
        echo MEDIA_DIRECTORY_MOVE_ENTRY . '<br />';
        return true;
    }

    $q = "SELECT id, body, extended
            FROM {$serendipity['dbPrefix']}entries
           WHERE body     REGEXP '(src=|href=|window.open.)(\'|\")(" . serendipity_db_escape_String($serendipity['baseURL'] . $serendipity['uploadHTTPPath'] . $oldDir) . "|" . serendipity_db_escape_string($serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $oldDir) . ")'
              OR extended REGEXP '(src=|href=|window.open.)(\'|\")(" . serendipity_db_escape_String($serendipity['baseURL'] . $serendipity['uploadHTTPPath'] . $oldDir) . "|" . serendipity_db_escape_string($serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $oldDir) . ")'
    ";

    $dirs = serendipity_db_query($q);
    if (is_array($dirs)) {
        foreach($dirs AS $dir) {
            $dir['body']     = preg_replace('@(src=|href=|window.open.)(\'|")(' . preg_quote($serendipity['baseURL'] . $serendipity['uploadHTTPPath'] . $oldDir) . '|' . preg_quote($serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $oldDir) . ')@', '\1\2' . $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $newDir, $dir['body']);
            $dir['extended'] = preg_replace('@(src=|href=|window.open.)(\'|")(' . preg_quote($serendipity['baseURL'] . $serendipity['uploadHTTPPath'] . $oldDir) . '|' . preg_quote($serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $oldDir) . ')@', '\1\2' . $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $newDir, $dir['extended']);

            $uq = "UPDATE {$serendipity['dbPrefix']}entries
                                     SET body     = '" . serendipity_db_escape_string($dir['body']) . "' ,
                                         extended = '" . serendipity_db_escape_string($dir['extended']) . "'
                                   WHERE id       = " . serendipity_db_escape_string($dir['id']);
            serendipity_db_query($uq);
        }

        printf(MEDIA_DIRECTORY_MOVE_ENTRIES . '<br />', count($dirs));
    }

    return true;
}

/**
 * Gets all available media directories
 *
 * @return array
 *
 */
function &serendipity_getMediaPaths() {
    global $serendipity;

	$aExclude = array("CVS" => true, ".svn" => true);
	serendipity_plugin_api::hook_event('backend_media_path_exclude_directories', $aExclude);
	$paths        = array();

	$aResultSet   = serendipity_traversePath(
	    $serendipity['serendipityPath'] . $serendipity['uploadPath'],
	    '',
	    false,
	    NULL,
	    1,
	    NULL,
	    FALSE,
	    $aExclude
	);

	foreach ($aResultSet AS $sKey => $sFile) {
		if ($sFile['directory']) {
			array_push($paths, $sFile);
		}
		unset($aResultSet[$sKey]);
	}
    serendipity_directoryACL($paths, 'read');

    usort($paths, 'serendipity_sortPath');

    return $paths;
}

/**
 * Checks whether a user has access to write into a directory
 *
 * @access public
 * @param   string Directory to check
 * @return  boolean
 */
function serendipity_checkDirUpload($dir) {
    global $serendipity;

    /*
    if (serendipity_checkPermission('adminImagesMaintainOthers')) {
        return true;
    }
    */

    $allowed  = serendipity_ACLGet(0, 'directory', 'write', $dir);
    $mygroups = serendipity_checkPermission(null, null, true);

    // Usergroup "0" always means that access is granted. If no array exists, no ACL restrictions have been set and all is fine.
    if (!is_array($allowed) || isset($allowed[0])) {
        return true;
    }

    if (!is_array($mygroups)) {
        return true;
    }

    foreach($mygroups AS $grpid => $grp) {
        if (isset($allowed[$grpid])) {
            return true;
            break;
        }
    }

    return false;
}

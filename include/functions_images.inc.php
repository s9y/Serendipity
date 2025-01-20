<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

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

    $core = preg_match('@\.(php.*|[psj]html?|pht|aspx?|cgi|jsp|py|pl)$@i', $file);
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
 * @param   int     The number (referenced variable) of fetched items
 * @param   string  The "ORDER BY" sql part when fetching items
 * @param   string  Order by DESC or ASC
 * @param   string  Only fetch files from a specific directory
 * @param   string  Only fetch specific filenames (including check for realname match)
 * @param   string  Only fetch media with specific keyword
 * @param   array   An array of restricting filter sets
 * @param   boolean Apply strict directory checks, or include subdirectories?
 * @return  array   Resultset of images
 */
function serendipity_fetchImagesFromDatabase($start=0, $limit=0, &$total=null, $order = false, $ordermode = false, $directory = '', $filename = '', $keywords = '', $filter = array(), $hideSubdirFiles = false) {
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
    } else {
        $limitsql = '';
    }

    if ($hideSubdirFiles == false) {
        if (!empty($directory)) {
            $cond['parts']['directory'] = " AND i.path LIKE '" . serendipity_db_escape_string($directory) . "%'\n";
        }
        // if in root, having no directory set, the query fetches all files by default, meaning we are done
    } else {
        if (!empty($directory)) {
            $cond['parts']['directory'] = " AND i.path LIKE '" . serendipity_db_escape_string($directory) . "%'\n";
        } else {
            $cond['parts']['directory'] = " AND i.path = ''\n";
        }
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
    $cond['parts']['filter'] = '';
    foreach($filter AS $f => $fval) {
        if (! (isset($orderfields[$f]) || $f == "fileCategory") || empty($fval)) {
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
        } elseif (($orderfields[$f]['type'] ?? null) == 'int') {
            if (substr($f, 0, 3) === 'bp.') {
                $realf = substr($f, 3);
                $cond['parts']['filter'] .= " AND (bp2.property = '$realf' AND bp2.value = '" . serendipity_db_escape_string(trim($fval)) . "')\n";
            } else {
                $cond['parts']['filter'] .= " AND ($f = '" . serendipity_db_escape_string(trim($fval)) . "')\n";
            }
        } elseif ($f == 'fileCategory') {
            switch ($fval) {
                case 'image':
                    $cond['parts']['filter'] .= " AND (i.mime LIKE 'image/%')\n";
                    break;
                case 'video':
                    $cond['parts']['filter'] .= " AND (i.mime LIKE 'video/%')\n";
                    break;
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

    if ($cond['joinparts']['keywords'] ?? false) {
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

    if (!isset($cond['joins'])) {
        $cond['joins'] = '';
    }
    if ($cond['joinparts']['properties'] ?? false) {
        $cond['joins'] .= "\n LEFT OUTER JOIN {$serendipity['dbPrefix']}mediaproperties AS bp
                                        ON (bp.mediaid = i.id AND bp.property_group = 'base_property' AND bp.property = '{$cond['orderproperty']}')\n";
    }

    if ($cond['joinparts']['filterproperties'] ?? false) {
        $cond['joins'] .= "\n LEFT OUTER JOIN {$serendipity['dbPrefix']}mediaproperties AS bp2
                                        ON (bp2.mediaid = i.id AND bp2.property_group = 'base_property')\n";
    }

    if ($cond['joinparts']['hiddenproperties'] ?? false) {
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

    if (!isset($cond['joins'])) {
        $cond['joins'] = '';
    }
    $basequery = "FROM {$serendipity['dbPrefix']}images AS i
       LEFT OUTER JOIN {$serendipity['dbPrefix']}authors AS a
                    ON i.authorid = a.authorid
                       {$cond['joins']}

                       {$cond['and']}";

    $query = "SELECT {$cond['distinct']} i.id, {$cond['orderkey']} AS orderkey, i.name, i.extension, i.mime, i.size, i.dimensions_width, i.dimensions_height, i.date, i.thumbnail_name, i.authorid, i.path, i.hotlink, i.realname,
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

    if (!isset($cond['joins'])) {
        $cond['joins'] = '';
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

    $i = 0;
    if (sizeof($updates) > 0) {
        $imageBeforeChange = serendipity_fetchImageFromDatabase($id);
        foreach ($updates AS $k => $v) {
            $q[] = $k ." = '" . serendipity_db_escape_string($v) . "'";
        }
        serendipity_db_query("UPDATE {$serendipity['dbPrefix']}images SET ". implode(',', $q) ." WHERE id = " . (int)$id . " $admin");
        $i++;

        // Check if this update changes important directory or filename attributes.
        // If yes, the plugin API will forward this change of files to plugins like
        // staticpage, so that they can update their contents.
        if (isset($updates['path']) || isset($updates['realname'])) {
            if (! isset($updates['path'])) {
                $updates['path'] = $imageBeforeChange['path'];
            }
            if (! isset($updates['realname'])) {
                $updates['realname'] = $imageBeforeChange['realname'];
            }

            // NOTE: Previously, the API supported multiple rename tasks like dir, filedir and file
            // Now the core will ALWAYS propagate each file change distinctly, never will a directory
            // be submitted to the API.
            $eventData = array( // array in array because the event api expects that
                array(
                    'type'      => 'file',
                    'oldDir'    => $imageBeforeChange['path'] . $imageBeforeChange['realname'],
                    'newDir'    => $updates['path'] . $updates['realname']
                ) 
            );
            serendipity_plugin_api::hook_event('backend_media_rename', $eventData);
        }

        // If the user manually saved the image properties, some values might need updating now
        // Name and realname are saved there as well, and the title is set to the name by default
        if (isset($updates['realname'])) {
            $q = "UPDATE {$serendipity['dbPrefix']}mediaproperties
                    SET value = '" . serendipity_db_escape_string($updates['realname']) . "'
                  WHERE mediaid = " . (int)$imageBeforeChange['id'] . ' AND property = "realname" AND value = "' . $imageBeforeChange['realname'] . '"';
            serendipity_db_query($q);
            $q = "UPDATE {$serendipity['dbPrefix']}mediaproperties
                    SET value = '" . serendipity_db_escape_string($updates['realname']) . "'
                  WHERE mediaid = " . (int)$imageBeforeChange['id'] . ' AND property = "TITLE" AND value = "' . $imageBeforeChange['realname'] .'"';
            serendipity_db_query($q);
        }
        if (isset($updates['name'])) {
            $q = "UPDATE {$serendipity['dbPrefix']}mediaproperties
                    SET value = '" . $updates['name'] . "'
                  WHERE mediaid = " . (int)$imageBeforeChange['id'] . ' AND property = "name" AND value = "' . $imageBeforeChange['name'] .'"';
            serendipity_db_query($q);
        }
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
    $dThumb   = array();
    $messages = '';

    $file   = serendipity_fetchImageFromDatabase($id);

    if (!is_array($file)) {
        $messages .= sprintf('<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . FILE_NOT_FOUND . "</span>\n", $id);
        //return false;
    } else {

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
                    $messages .= sprintf('<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> ' . DELETE_FILE . "</span>\n", $dFile);
                } else {
                    $messages .= sprintf('<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . DELETE_FILE_FAIL . "</span>\n", $dFile);
                }

                serendipity_plugin_api::hook_event('backend_media_delete', $dThumb);
                foreach($dThumb AS $thumb) {
                    $dfnThumb = $file['path'] . $file['name'] . (!empty($thumb['fthumb']) ? '.' . $thumb['fthumb'] : '') . (empty($file['extension']) ? '' : '.' . $file['extension']);
                    $dfThumb  = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $dfnThumb;

                    if (file_exists($dfThumb) && @unlink($dfThumb)) {
                        $messages .= sprintf('<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> ' . DELETE_THUMBNAIL . "</span>\n", $dfnThumb);
                    }
                }
            } else {
                $messages .= sprintf('<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . FILE_NOT_FOUND . "</span>\n", $dFile);
            }
        } else {
            $messages .= sprintf('<span class="msg_hint"><span class="icon-help-circled" aria-hidden="true"></span> ' . DELETE_HOTLINK_FILE . "</span>\n", $file['name']);
        }

        serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}images WHERE id = ". (int)$id);
        serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}mediaproperties WHERE mediaid = ". (int)$id);
    }

    return $messages;
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
            if ($file == '.svn' || $file == 'CVS' || $file == '.htaccess' || strtolower($file) == 'thumbs.db' || $file == '.' || $file == '..') {
                continue; // 2013/06/05 added exclude .htaccess for ckeditor/kcfinder usage and 2013/12/25 added thumbs.db
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
        echo '<span class="block_level">' . $query . "</span>\n";
        echo '<span class="block_level">' . $sql . "</span>\n";
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

    $fdim   = @serendipity_getimagesize($filepath, '', $extension);
    $width  = $fdim[0];
    $height = $fdim[1];
    $mime   = $fdim['mime'];

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
        echo '<span class="block_level">' . $query . "</span>\n";
        echo '<span class="block_level">' . $sql . "</span>\n";
    }

    $image_id = serendipity_db_insert_id('images', 'id');
    if ($image_id > 0) {
        return $image_id;
        serendipity_cleanCache();
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
    #echo 'From: ' . $infile . '<br />';
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
    #echo 'To: ' . $outfile . '<br />';

    $fdim = @serendipity_getimagesize($infile, '', $suf);
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
                $r    = serendipity_resize_image_gd($infile, $outfile, $calc[0], $calc[1]);
            }
        } else {
            if (is_array($size)) {
                if ($fdim[0] > $size['width'] && $fdim[1] > $size['height']) {
                    $r = $size;
                } else {
                    return array(0,0); // do not create any thumb, if image is smaller than defined sizes
                }
            } else {
                $calc = serendipity_calculate_aspect_size($fdim[0], $fdim[1], $size, $serendipity['thumbConstraint']);
                $r    = array('width' => $calc[0], 'height' => $calc[1]);
            }
            $newSize = $r['width'] . 'x' . $r['height'];
            if ($fdim['mime'] == 'application/pdf') {
                $cmd = escapeshellcmd($serendipity['convert']) . ' -antialias -flatten -scale '. serendipity_escapeshellarg($newSize) .' '. serendipity_escapeshellarg($infile . '[0]') . ' ' . serendipity_escapeshellarg($outfile . '.png');
            } else {
                if (!$force_resize && serendipity_ini_bool(ini_get('safe_mode')) === false) {
                    $newSize .= '>'; // tell imagemagick to not enlarge small images, only works if safe_mode is off (safe_mode turns > in to \>)
                }
                if (!$serendipity['imagemagick_nobang']) $newSize .= '!'; // force the first run image geometry exactly to given sizes, if there were rounding differences (see https://github.com/s9y/Serendipity/commit/94881ba4c0e3bdd4b5fac510e93977e239171c1c and comments)
                $cmd = escapeshellcmd($serendipity['convert'] . ' ' . $serendipity['imagemagick_thumb_parameters']) . ' -antialias -resize ' . serendipity_escapeshellarg($newSize) . ' ' . serendipity_escapeshellarg($infile) .' '. serendipity_escapeshellarg($outfile);
            }
            exec($cmd, $output, $result);
            if ($result != 0) {
                echo '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . sprintf(IMAGICK_EXEC_ERROR, $cmd, $output[0], $result) ."</span>\n";
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
            echo '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . sprintf(IMAGICK_EXEC_ERROR, $cmd, $output[0], $result) ."</span>\n";
            return false;
        }
        unset($output, $result);
    }

    if ($result == 0) {
        serendipity_updateImageInDatabase(array('dimensions_width' => $width, 'dimensions_height' => $height, 'size' => @filesize($outfile)), $id);
        return true;
    }
    return false;
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
    $thumbnails = serendipity_getThumbnails($id);

    if ($serendipity['magick'] !== true) {
        serendipity_rotate_image_gd($infile, $outfile, $degrees);
        foreach($thumbnails as $thumbnail) {
            $infileThumb = $outfileThumb = $thumbnail;
            serendipity_rotate_image_gd($infileThumb, $outfileThumb, $degrees);
        }
    } else {
        /* Why can't we just all agree on the rotation direction? */
        $degrees = (360 - $degrees);

        /* rotate main image */
        $cmd = escapeshellcmd($serendipity['convert']) . ' -rotate ' . serendipity_escapeshellarg($degrees) . ' ' . serendipity_escapeshellarg($infile) . ' ' . serendipity_escapeshellarg($outfile);
        exec($cmd, $output, $result);
        if ( $result != 0 ) {
            echo '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . sprintf(IMAGICK_EXEC_ERROR, $cmd, $output[0], $result) ."</span>\n";
        }
        unset($output, $result);

        /* rotate thumbnail */
        foreach($thumbnails as $thumbnail) {
            $infileThumb = $outfileThumb = $thumbnail;
            $cmd = escapeshellcmd($serendipity['convert']) . ' -rotate ' . serendipity_escapeshellarg($degrees) . ' ' . serendipity_escapeshellarg($infileThumb) . ' ' . serendipity_escapeshellarg($outfileThumb);
            exec($cmd, $output, $result);
            if ( $result != 0 ) {
                echo '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . sprintf(IMAGICK_EXEC_ERROR, $cmd, $output[0], $result) ."</span>\n";
            }
            unset($output, $result);
        }

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

    $i = 0;
    $serendipity['imageList'] = serendipity_fetchImagesFromDatabase(0, 0, $total);
    $msg_printed = false;

    foreach ($serendipity['imageList'] AS $k => $file) {
        serendipity_prepareMedia($file);
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
            $sThumb   = $file['path'] . $file['name'] . '.' . $serendipity['thumbSuffix'] . (empty($file['extension']) ? '' : '.' . $file['extension']);
            $fdim     = @getimagesize($ffull);

            if (!file_exists($oldThumb) && !file_exists($newThumb) && ($fdim[0] > $serendipity['thumbSize'] || $fdim[1] > $serendipity['thumbSize'])) {
                $returnsize = serendipity_makeThumbnail($file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']), $file['path']);
                if ($returnsize !== false ) {
                    // Only print the resize message the first time
                    if (!$msg_printed) {
                        $resizemedia = sprintf(RESIZE_BLAHBLAH, THUMBNAIL_SHORT);
                        printf('<span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span> ' . $resizemedia . "</span>\n");
                        echo "\n" . '<ul class="serendipityFileList">' . "\n";
                        $msg_printed = true;
                    }
                    echo '<li>' . $sThumb . ': ' . $returnsize[0] . 'x' . $returnsize[1] . "</li>\n";
                    if (!file_exists($newThumb)) {
                        printf('<li><span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . THUMBNAIL_FAILED_COPY . '</span></li>' . "\n", $sThumb);
                    } else {
                        $update = true;
                    }
                }
            } elseif (!file_exists($oldThumb) && !file_exists($newThumb) && $fdim[0] <= $serendipity['thumbSize'] && $fdim[1] <= $serendipity['thumbSize']) {
                if (!$msg_printed) {
                    $resizethumb = sprintf(RESIZE_BLAHBLAH, $sThumb);
                    printf('<span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span> ' . $resizethumb . "</span>\n");
                    echo "\n" . '<ul class="serendipityFileList">' . "\n";
                    $msg_printed = true;
                }
                $res = @copy($ffull, $newThumb);
                if (@$res === true) {
                    printf('<li>' . THUMBNAIL_USING_OWN . '</li>' . "\n", $sThumb);
                    $update = true;
                } else {
                    printf('<li><span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . THUMBNAIL_FAILED_COPY . '</span></li>' . "\n", $sThumb);
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

        case 'svg':
            $mime = 'image/svg';
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

    $i = 0;

    $files  = serendipity_fetchImages();
    $fcount = count($files);

    for ($x = 0; $x < $fcount; $x++) {
        $update = array();
        $f      = serendipity_parseFileName($files[$x]);
        if (empty($f[1]) || $f[1] == $files[$x]) {
            // No extension means bad file most probably. Skip it.
            printf('<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . SKIPPING_FILE_EXTENSION . "</span>\n", $files[$x]);
            continue;
        }

        $ffull   = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $files[$x];
        $fthumb  = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $f[0] . '.' . $serendipity['thumbSuffix'] . '.' . $f[1];
        $sThumb  = $f[0] . '.' . $serendipity['thumbSuffix'] . '.' . $f[1];
        $fbase   = basename($f[0]);
        $fdir    = dirname($f[0]) . '/';
        if ($fdir == './') {
            $fdir = '';
        }

        if (!is_readable($ffull) || filesize($ffull) == 0) {
            printf('<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . SKIPPING_FILE_UNREADABLE . "</span>\n", $files[$x]);
            continue;
        }

        $ft_mime = serendipity_guessMime($f[1]);
        $fdim    = serendipity_getimagesize($ffull, $ft_mime);

        // If we're supposed to delete thumbs, this is the easiest place. Leave messages plain unstiled.
        if (is_readable($fthumb)) {
            if ($deleteThumbs === true) {
                if (@unlink($fthumb)) {
                    printf(DELETE_THUMBNAIL . "<br />\n", $sThumb);
                    $i++;
                }
            } else if ($deleteThumbs == 'checksize') {
                // Find existing thumbnail dimensions
                $tdim = serendipity_getimagesize($fthumb);
                if (isset($tdim['noimage']) && $tdim['noimage']) {
                    // Delete it so it can be regenerated
                    if (@unlink($fthumb)) {
                        printf(DELETE_THUMBNAIL . "<br />\n", $sThumb);
                        $i++;
                    }
                } else {
                    // Calculate correct thumbnail size from original image
                    $expect = serendipity_calculate_aspect_size($fdim[0], $fdim[1], $serendipity['thumbSize'], $serendipity['thumbConstraint']);
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
        if (!isset($cond['joins'])) {
            $cond['joins'] = '';
        }

        $rs = serendipity_db_query("SELECT *
                                      FROM {$serendipity['dbPrefix']}images AS i
                                           {$cond['joins']}

                                           {$cond['and']}", true, 'assoc');
        // Leave messages plain unstiled
        if (is_array($rs)) {
            // This image is in the database.  Check our calculated data against the database data.
            $update = array();
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
        break;

    case 'jpeg':
    case 'jpg':
    case 'jfif':
        $func['load'] = 'imagecreatefromjpeg';
        $func['save'] = 'imagejpeg';
        $func['qual'] = 85;
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

    try {
        // if an image exist that can not be loaded (invalid gif for example), the page shall still be rendered
        $in = $func['load']($infilename);
    } catch (Exception $e) {
        echo 'Could not create thumbnail: ',  $e->getMessage(), "\n";
        return false;
    }
    $width = imagesx($in);
    $height = imagesy($in);

    if (is_null($newheight)) {
        $newsizes  = serendipity_calculate_aspect_size($width, $height, $newwidth, 'width');
        $newwidth  = $newsizes[0];
        $newheight = $newsizes[1];
    }

    if (is_null($newwidth)) {
        $newsizes  = serendipity_calculate_aspect_size($width, $height, $newheight, 'height');
        $newwidth  = $newsizes[0];
        $newheight = $newsizes[1];
    }

    $out = imagecreatetruecolor(round($newwidth), round($newheight));

    /* Attempt to copy transparency information, this really only works for PNG */
    if (function_exists('imagesavealpha')) {
        imagealphablending($out, false);
        imagesavealpha($out, true);
    }

    imagecopyresampled($out, $in, 0, 0, 0, 0, round($newwidth), round($newheight), $width, $height);
    @umask(0000);
    touch($outfilename); // safe_mode requirement
    if ($func['save'] == 'imagegif') {
        $func['save']($out, $outfilename);
    } else {
        $func['save']($out, $outfilename, $func['qual']);
    }
    @chmod($outfilename, 0664);
    $out = null;
    $in  = null;

    return array(round($newwidth), round($newheight));
}

/**
 * Calculate new size for an image, considering aspect ratio and constraint
 *
 * @access public
 * @param   int     Image width
 * @param   int     Image height
 * @param   int     Target dimension size
 * @param   string  Dimension to constrain ('width', 'height', 'largest',
 *                  'smallest'; defaults to original behavior, 'largest')
 * @return  array   An array with the scaled width and height
 */
function serendipity_calculate_aspect_size($width, $height, $size, $constraint = null) {

    // Allow for future constraints (idea: 'percent')
    $known_constraints = array('width', 'height', 'largest', 'smallest');

    // Rearrange params for calls from old imageselectorplus plugin
    if ($size == null) {
      $size       = $constraint;
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
            $ratio    = $width / $height;
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
 * @param   boolean Is this the ML-Version for managing everything (true), or is it about selecting one image for the editor? (false)
 * @param   string  The URL to use for pagination
 * @param   boolean Show the "upload media item" feature?
 * @param   boolean Restrict viewing images to a specific directory
 * @param   array   Map of smarty vars transported into all following templates
 * @return  string   Generated HTML
 */
function serendipity_displayImageList($page = 0, $lineBreak = NULL, $manage = false, $url = NULL, $show_upload = false, $limit_path = NULL, $smarty_vars = array()) {
    global $serendipity;
    static $debug = false;

    $extraParems = serendipity_generateImageSelectorParems();

    $serendipity['GET']['only_path']     = serendipity_uploadSecure($limit_path . $serendipity['GET']['only_path'], true);
    $serendipity['GET']['only_filename'] = serendipity_specialchars(str_replace(array('*', '?'), array('%', '_'), $serendipity['GET']['only_filename'] ?? ''));

    $perPage = (!empty($serendipity['GET']['sortorder']['perpage']) ? (int)$serendipity['GET']['sortorder']['perpage'] : 8);
    while ($perPage % $lineBreak !== 0) {
        $perPage++;
    }
    $start = ($page-1) * $perPage;

    if ($manage && $limit_path == NULL) {
        ## SYNCH START ##
        $aExclude = array("CVS" => true, ".svn" => true, "_vti_cnf" => true); // _vti_cnf to exclude possible added servers frontpage extensions
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
                    if ($debug) echo "<span class='block_level'>{$sFile['relpath']} is a directory.</span>";
                    array_push($paths, $sFile);
                } else {
                    if ($debug) echo "<span class='block_level'>{$sFile['relpath']} is a file.</span>";
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

        if ($debug) {
            echo "<p>Image Sync Right: " . serendipity_checkPermission('adminImagesSync') . " Onthefly Sync: " . $serendipity['onTheFlySynch'] . " Hash: " . $serendipity['current_image_hash'] . "!=" . $serendipity['last_image_hash']. "</p>";
        }

        if ($serendipity['onTheFlySynch'] && serendipity_checkPermission('adminImagesSync') && ($debug || ($serendipity['current_image_hash'] != ($serendipity['last_image_hash'] ?? null)))) {
            $aResultSet = serendipity_db_query("SELECT path, name, extension, thumbnail_name, id
                                                FROM {$serendipity['dbPrefix']}images", false, 'assoc');

            if ($debug) {
                echo "<p>Got images: <pre>" . print_r($aResultSet, true) . "</pre></p>";
            }

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

                    if ($debug) { 
                        echo "<p>File name is $sFileName, thumbnail is $sThumbNailFile</p>";
                    }

                    unset($aResultSet[$sKey]);

                    if (isset($aFilesOnDisk[$sFileName])) {
                        unset($aFilesOnDisk[$sFileName]);
                    } else {
                        if ($debug) {
                            echo "<span class='block_level'>Deleting Image {$sFile['id']}</span>";
                        }

                        serendipity_deleteImage($sFile['id']);
                        ++$nCount;
                    }
                    unset($aFilesOnDisk[$sThumbNailFile]);
                }
            }

            if ($nCount > 0){
                if ($debug) {
                    echo "<p>Cleaned up ".$nCount." database entries</p>";
                }
            }

            serendipity_set_config_var('last_image_hash', $serendipity['current_image_hash'], 0);
            $aUnmatchedOnDisk = array_keys($aFilesOnDisk);

            if ($debug) {
                echo "<p>Got unmatched files: <pre>" . print_r($aUnmatchedOnDisk, true) . "</pre></p>";
            }

            $nCount = 0;
            foreach ($aUnmatchedOnDisk AS $sFile) {
                if (preg_match('@\.' . $serendipity['thumbSuffix'] . '\.@', $sFile)) {
                    if ($debug) {
                        echo "<p>Skipping thumbnailed file $sFile</p>";
                    }
                    continue;
                } else {
                    if ($debug) {
                        echo "<p>Checking $sFile</p>";
                    }
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
                    if ($debug) {
                        echo "<p>Inserting image $sFileName from $sDirectory <pre>" . print_r($aImageData, true) . "</pre> into database</p>";
                    }
                    # TODO: Check if the thumbnail generation goes fine with Marty's code
                    serendipity_makeThumbnail($sFileName, $sDirectory);
                    serendipity_insertImageInDatabase($sFileName, $sDirectory);
                    ++$nCount;
                }
            }

            if ($nCount > 0) {
                if ($debug) {
                    echo "<p>Inserted ".$nCount." images into the database</p>";
                }
            }
        } else {
            if ($debug) {
                echo "<p>Media Gallery database is up to date</p>";
            }
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

    // set remember filter settings for SetCookie
    if (!isset($serendipity['GET']['filter'])) {
        serendipity_restoreVar($serendipity['COOKIE']['filter'], $serendipity['GET']['filter']);
    }

    $serendipity['imageList'] = serendipity_fetchImagesFromDatabase(
                                  $start,
                                  $perPage,
                                  $totalImages, // Passed by ref
                                  (isset($serendipity['GET']['sortorder']['order']) ? $serendipity['GET']['sortorder']['order'] : false),
                                  (isset($serendipity['GET']['sortorder']['ordermode']) ? $serendipity['GET']['sortorder']['ordermode'] : false),
                                  (isset($serendipity['GET']['only_path']) ? $serendipity['GET']['only_path'] : ''),
                                  (isset($serendipity['GET']['only_filename']) ? $serendipity['GET']['only_filename'] : ''),
                                  (isset($serendipity['GET']['keywords']) ? $serendipity['GET']['keywords'] : ''),
                                  (isset($serendipity['GET']['filter']) ? $serendipity['GET']['filter'] : ''),
                                  isset($serendipity['GET']['hideSubdirFiles'])
    );

    $pages         = ceil($totalImages / $perPage);
    $linkPrevious  = '?' . $extraParems . '&amp;serendipity[page]=' . ($page-1);
    $linkNext      = '?' . $extraParems . '&amp;serendipity[page]=' . ($page+1);
    // Keep the inner to be build first. Now add first and last. Has to do with adding $param to $extraParems.
    $linkFirst     = '?' . $extraParems . '&amp;serendipity[page]=' . 1;
    $linkLast      = '?' . $extraParems . '&amp;serendipity[page]=' . $pages;
    if (is_null($lineBreak)) {
        $lineBreak = floor(750 / ($serendipity['thumbSize'] + 20));
    }

    $dprops = $keywords = array();
    if ($serendipity['parseMediaOverview'] ?? false) {
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

            if ($serendipity['parseMediaOverview'] ?? false) {
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

    $smarty_vars = array_merge($smarty_vars, array(
        'limit_path'    => $limit_path,
        'perPage'       => $perPage,
        'show_upload'   => $show_upload,
        'page'          => $page,
        'pages'         => $pages,
        'linkFirst'     => $linkFirst,
        'linkNext'      => $linkNext,
        'linkPrevious'  => $linkPrevious,
        'linkLast'      => $linkLast,
        'extraParems'   => $extraParems,
        'totalImages'   => $totalImages
    ));

    return serendipity_showMedia(
        $serendipity['imageList'],
        $paths,
        $url,
        $manage,
        $lineBreak,
        true,
        $smarty_vars
    );
} // End serendipity_displayImageList()

/**
 * Generate the url-parameters needed when generating the ML to select an image to add to the editor,
 * to store the relevant options (like which textarea to add it to)
 *
 * @param   string  Url or Form format
 */
function serendipity_generateImageSelectorParems($format = 'url') {
    global $serendipity;

    $sortParams   = array('perpage', 'order', 'ordermode');
    $importParams = array('adminModule', 'htmltarget', 'filename_only', 'textarea', 'subpage',  'keywords', 'noBanner', 'noSidebar', 'noFooter', 'showUpload','showMediaToolbar');
    $extraParems  = '';
    $filterParams = $serendipity['GET']['filter'] ?? array(); 

    $standaloneFilterParams = array('only_path', 'only_filename');
    $parems = array();

    foreach($importParams AS $importParam) {
        if (isset($serendipity['GET'][$importParam])) {
            $parems['serendipity[' . $importParam . ']'] = $serendipity['GET'][$importParam];
        }
    }

    foreach($sortParams AS $sortParam) {
        serendipity_restoreVar($serendipity['COOKIE']['sortorder_' . $sortParam], $serendipity['GET']['sortorder'][$sortParam]);
        $parems['serendipity[sortorder]['. $sortParam .']'] = $serendipity['GET']['sortorder'][$sortParam];
    }

    foreach($standaloneFilterParams AS $filterParam) {
        serendipity_restoreVar($serendipity['COOKIE'][$filterParam], $serendipity['GET'][$filterParam]);
        if (!empty($serendipity['GET'][$filterParam]) && $serendipity['GET'][$filterParam] != "undefined") {
            $parems['serendipity[' . $filterParam . ']'] = $serendipity['GET'][$filterParam];
        }
    }

    foreach($filterParams AS $filterParam => $filterValue) {
        serendipity_restoreVar($serendipity['COOKIE']['filter'][$filterParam], $serendipity['GET']['filter'][$filterParam]);
        if (!empty($serendipity['GET']['filter'][$filterParam]) && $serendipity['GET']['filter'][$filterParam] != "undefined") {
            if (is_array($filterValue)) {
                foreach($filterValue as $key => $value) {
                    $parems['serendipity[filter][' . $filterParam . '][' . $key . ']'] = $value;
                }
            } else {
                $parems['serendipity[filter][' . $filterParam . ']'] = $filterValue;
            }
        }
    }

    foreach ($parems as $param => $value) {
        if ($format == "form") {
            $extraParems .= '<input type="hidden" name="'. $param .'" value="'. serendipity_specialchars($value) .'">'."\n";
        } else {
            $extraParems .= $param.'='. serendipity_specialchars($value) .'&amp;';
        }
    }

    return rtrim($extraParems, '&amp;');
}

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

    if (! isset($file['imgsrc'])) {
        return false;
    }

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
    static $serious = true;

    if ($handle = @opendir($basedir . $directory)) {
        $filestack = [];
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

        echo '<span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span> ';
        printf(CHECKING_DIRECTORY, $directory);
        echo "</span>";

        // No, we just don't kill files the easy way. We sort them out properly from the database
        // and preserve files not entered therein.
        $files = serendipity_fetchImagesFromDatabase(0, 0, $total, false, false, $directory);
        if (is_array($files)) {
            echo "<ul class='plainList'>\n";
            foreach($files AS $f => $file) {
                echo "<li>\n";
                if ($serious) {
                    echo serendipity_deleteImage($file['id']);
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
                echo "<ul class='plainList'>\n";
                foreach($filestack AS $f => $file) {
                    if ($serious && @unlink($basedir . $file)) {
                        printf('<li><span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> ' . DELETING_FILE . ' ' . DONE . "</span></li>\n", $file);
                    } else {
                        printf('<li><span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . DELETING_FILE . ' ' . ERROR . "</span></li>\n", $file);
                    }
                }
                echo "</ul>\n";
            } else {
                echo '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . ERROR_DIRECTORY_NOT_EMPTY . "</span>\n";
                echo "<ul>\n";
                foreach($filestack AS $f => $file) {
                    echo '<li>' . $file . "</li>\n";
                }
                echo "</ul>\n";
            }
        }

        if ($serious && !empty($directory) && !preg_match('@^.?/?$@', $directory) && @rmdir($basedir . $directory)) {
            echo '<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> ';
            printf(DIRECTORY_DELETE_SUCCESS, $directory);
            echo "</span>\n";
        } else {
            echo '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ';
            printf(DIRECTORY_DELETE_FAILED, $directory);
            echo "</span>\n";
        }
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
    global $serendipity;
    
    if ($serendipity['useInternalCache']) {
        $key = md5($basedir . $dir . $onlyDirs . $pattern . $depth . $max_depth . $apply_ACL . serialize($aExcludeDirs) . $serendipity['serendipityUser']);
        $files = serendipity_getCacheItem($key);
        if ($files && $files !== false) {
            return unserialize($files);
        }
    }
    
    if ($aExcludeDirs === null) {
        // add _vti_cnf to exclude possible added servers frontpage extensions
        // add ckeditor/kcfinders .thumb dir to exclude, since no hook
        $aExcludeDirs = array("CVS" => true, ".svn" => true, ".thumbs" => true, "_vti_cnf" => true, ".git" => true);
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
                $files    = array_merge($files, serendipity_traversePath($basedir, $next_dir, $onlyDirs, $pattern, ($depth+1), $max_depth, $apply_ACL, $aExcludeDirs));
            }
        }
    }

    @closedir($dh);

    if ($depth == 1 && $apply_ACL !== FALSE) {
        serendipity_directoryACL($files, $apply_ACL);
    }

    if ($serendipity['useInternalCache']) {
        $key = md5($basedir . $dir . $onlyDirs . $pattern . $depth . $max_depth . $apply_ACL . serialize($aExcludeDirs) . $serendipity['serendipityUser']);

        serendipity_cacheItem($key, serialize($files));
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
 * Transform a filename into a valid  upload path
 *
 * @access public
 * @param   string      The input filename
 * @param   boolean     Shall all paths be stripped?
 * @param   boolean     Shall a trailing slash be appended?
 * @return  string      The valid filename
 */
function serendipity_uploadSecure($var, $strip_paths = true, $append_slash = false) {

    $var = str_replace(' ', '_', $var);
    $var = preg_replace('@[^0-9a-z\._/-]@i', '', $var);
    $var = preg_replace('@\.+$@i', '', $var); # remove trailing dots
    if ($strip_paths) {
        $var = preg_replace('@(\.+[/\\\\]+)@', '/', $var);
    }

    $var = preg_replace('@^(/+)@', '', $var);

    if ($append_slash) {
        if (!empty($var) && substr($var, -1, 1) != '/') {
            $var .= '/';
        }
    }

    # truncate extensions to 5 chars
    # 1) (\.[^./\\\]{5}) up to five chars after a dot are captured
    # 2) expression matches only if followed by anything that is no dot
    #    and has no / or \ at the end
    # 3) if epxression matches, everything after the capture group is deleted
    $var = preg_replace('@(\.[^./\\\]{5})[^./\\\]+$@', '$1', $var);

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

    if (($serendipity['simpleFilters'] ?? true) !== false) {
        $x = array(
            'i.date'              => array('desc' => SORT_ORDER_DATE,
                                         'type' => 'date'
                                   ),

            'i.name'              => array('desc' => SORT_ORDER_NAME,
                                        'type' => 'text'
                                   ),

        );

    } else {
        $x = array(
            'i.date'              => array('desc' => SORT_ORDER_DATE,
                                         'type' => 'date'
                                   ),

            'i.name'              => array('desc' => SORT_ORDER_NAME,
                                         'type' => 'text'
                                   ),

            'i.authorid'          => array('desc' => AUTHOR,
                                         'type' => 'authors'
                                   ),

            'i.extension'         => array('desc' => SORT_ORDER_EXTENSION,
                                        'type' => 'text'
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
            $x['bp.' . $name] = array('desc' => (defined('MEDIA_PROPERTY_' . $name) ? constant('MEDIA_PROPERTY_' . $name) : serendipity_specialchars($name)));
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
 * Move file with all thumbnails to given directory and update database and entries
 * */
function serendipity_moveFileTo($id, $dir) {
    global $serendipity;
    $file = serendipity_fetchImageFromDatabase($id);
    serendipity_renameFile($id, $file['name'], $dir);
    serendipity_updateImageInDatabase(array('path' => $dir), $id);
    serendipity_updateImageInEntries($id, $file);
    return true;
}

/**
 * Rename a media directory
 *
 * @access public
 * @param   string  Old directory name
 * @param   string  New directory name
 */
function serendipity_renameDir($oldDir, $newDir) {
    global $serendipity;
    # Plan: 1. Get id of all images under $oldDir (including those in subdirs)
    #       2. Move $oldDir to newDir
    #       3. Update image (path) in database
    #       3. Update image in entries via serendipity_updateImageInEntries
    $imgBase = serendipity_dirSlash('end', $serendipity['serendipityPath'] . $serendipity['uploadPath']);

    $total = null;
    $images = serendipity_fetchImagesFromDatabase(0, 0, $total, false, false, $oldDir);

    // Perform ACL renames
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

    if (! file_exists("{$imgBase}{$newDir}")) {
        rename("{$imgBase}{$oldDir}", "{$imgBase}{$newDir}");

        foreach($images as $image) {
            serendipity_updateImageInDatabase(
                array('path' => preg_replace('@' . preg_quote(serendipity_dirSlash('end', $oldDir)) . '@', serendipity_dirSlash('end', $newDir), $image['path'], 1)), // we use preg_replace and not str_replace to be able to limit to exacty one replacement, preventing issues when a path has loops in it
                $image['id']
            );
            serendipity_updateImageInEntries($image['id'], $image);
        }
        serendipity_cleanCache();
        return true;
    }
    return false;
    
}   

/**
 * Rename a file in the ML (upload folder and database). Also edit entries to use the new name, and move the thumbnails
 *
 * @param   Id of the image to be renamed
 * @param   The new name (without extension)
 * @path    The new path to be prepended to the new name, if the file is also to be moved 
 * */
function serendipity_renameFile($id, $newName, $path = null) {
    global $serendipity;
    $file = serendipity_fetchImageFromDatabase($id);

    if (!is_array($file) || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
        return;
    }
    $oldName = $file['name'];
    
    if (LANG_CHARSET == 'UTF-8') {
        $newName = mb_convert_encoding($newName, 'UTF-8', 'ISO-8859-1');
    }

    if ($path === null) {
        $path = $file['path'];
    }
    
    $newName = serendipity_uploadSecure(serendipity_makeFilename($newName), true);
    $imgBase = $serendipity['serendipityPath'] . $serendipity['uploadPath'];
    
    $newPath = $imgBase . $path . $newName . (empty($file['extension']) ? '' : '.' . $file['extension']);

    if (serendipity_isActiveFile($newPath)) {
        return sprintf('<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . ERROR_FILE_FORBIDDEN . "</span>\n", $newName);
    }

    if (file_exists($newPath)) {
        return sprintf('<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . ERROR_FILE_EXISTS . "</span>\n", $newName);
    }
    
    if (rename("{$imgBase}{$file['path']}{$file['realname']}", $newPath)) {
        # if renaming was successfull, rename thumbnails and update
        # databases and entries

        serendipity_renameThumbnails($id, "{$path}$newName");

        serendipity_updateImageInDatabase(array('name' => $newName, 'realname' => basename($newPath)), $id);
        serendipity_updateImageInEntries($id, $file);
    } else {
        return '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . MEDIA_RENAME_FAILED . "</span>\n";
    }
    serendipity_cleanCache();
    return TRUE;
}

/**
 * Rename thumbnails linked to $id
 * 
 * */
function serendipity_renameThumbnails($id, $newName) {
    global $serendipity;
    
    $file = serendipity_fetchImageFromDatabase($id);

    $thumbnails = serendipity_getThumbnails($id);
    foreach($thumbnails as $thumbnail) {
        $newThumbnail = str_replace("{$file['path']}{$file['name']}", $newName, $thumbnail);
        rename($thumbnail, $newThumbnail);

        $eventData = array( // array in array because the event api expects that
            array(
                'type'      => 'file', // TODO: Use proper preg_quote
                'oldDir'    => preg_replace('@' . $serendipity['serendipityPath'] . $serendipity['uploadPath'] . '@', '', $thumbnail),
                'newDir'    => preg_replace('@' . $serendipity['serendipityPath'] . $serendipity['uploadPath'] . '@', '', $newThumbnail)
            )
        );
        serendipity_plugin_api::hook_event('backend_media_rename', $eventData);

    }
    return true;
}

/**
 * Get an array of existing thumbnails linked to the image with the given id
 *
 * */
function serendipity_getThumbnails($id) {
    global $serendipity;
    
    $file = serendipity_fetchImageFromDatabase($id);
    $name = $file['name'];

    $imagePath = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['realname'];
    $thumbnailBase = str_replace($file['extension'], '', $imagePath);
    $uploadDir = dirname($imagePath);

    return glob("$thumbnailBase*{$file['thumbnail_name']}.{$file['extension']}");
}

/**
 * Set image references to current path in all articles linking to them via the ML
 *
 * @id is the id of the image, used for identification
 * @old is the old file property array of the image, used to keep a manual set link
 * */
function serendipity_updateImageInEntries($id, $old) {
    global $serendipity;
    
    $file = serendipity_fetchImageFromDatabase($id);
    $imageHTTPPath = $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $file['path'] . $file['realname'];
    $oldImageHTTPPath = $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $old['path'] . $old['realname'];
    $thumbnailHTTPPath = str_replace(".{$file['extension']}", ".{$file['thumbnail_name']}.{$file['extension']}", $imageHTTPPath);
    $thumbSuffix = $serendipity['thumbSuffix'];


    $q = "SELECT id, body, extended FROM {$serendipity['dbPrefix']}entries
          WHERE
          body LIKE '%<!-- s9ymdb:$id -->%' OR extended LIKE '%<!-- s9ymdb:$id -->%'";

    $entries = serendipity_db_query($q, false, 'assoc');

    if (is_array($entries) && !empty($entries)) {
        foreach($entries as $entry) {
            # First change the img element, be it a thumbnail or an image
            $pattern = "@(<!-- s9ymdb:$id -->[^>]*) src=[\"']([^'\"]+)[\"']@";

            $callback = function($matches) use ($imageHTTPPath, $thumbnailHTTPPath, $file, $thumbSuffix) {
                if (strpos($matches[2],  "$thumbSuffix.{$file['extension']}") === false) {
                    // the image showed the full size image
                    return $matches[1] . ' src="' . $imageHTTPPath . '"';
                } else {
                    return $matches[1] . ' src="' . $thumbnailHTTPPath . '"';
                }
            };
            
            $entry['body'] = preg_replace_callback($pattern, $callback, $entry['body']);
            $entry['extended'] = preg_replace_callback($pattern, $callback, $entry['extended']);

            # But we should not forget to update the a element
            $pattern = "@href=[\"']([^'\"]+)[\"']([^>]*)>(<!-- s9ymdb:$id -->)@";

            $callback = function($matches) use ($imageHTTPPath, $thumbnailHTTPPath, $oldImageHTTPPath) {
                # We only update the link if it is not a manual link, if it pointed to the old image location
                if ($matches[1] === $oldImageHTTPPath) {
                    return 'href="' . $imageHTTPPath . '"' . $matches[2] . '>' . $matches[3];
                } else {
                    return 'href="' . $matches[1] . '"' . $matches[2] . '>' . $matches[3];
                }
            };
            
            $entry['body'] = preg_replace_callback($pattern, $callback, $entry['body']);
            $entry['extended'] = preg_replace_callback($pattern, $callback, $entry['extended']);
            

            $uq = "UPDATE {$serendipity['dbPrefix']}entries
                                        SET
                                        body = '" . serendipity_db_escape_string($entry['body']) . "' ,
                                        extended = '" . serendipity_db_escape_string($entry['extended']) . "'
                                        WHERE
                                        id =  " . serendipity_db_escape_string($entry['id']);
            serendipity_db_query($uq);
        }
    }
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
        echo "<span class='block_level'>Applying ACL for mode '$type'.</span>";
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
                    echo '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ACL for ' . $info['relpath'] . " DENIED.</span>";
                }
                unset($paths[$idx]);
            } else {
                if ($debug) {
                    echo '<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> ACL for ' . $info['relpath'] . " granted.</span>";
                }
            }
        }

        if (count($paths) < $startCount) {
            if ($debug) {
                echo '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ACL denied all.</span>';
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
        if ($sExtension) {
            $sThumbNailPath = $sRelativePath . $sName . (!empty($sThumbName) ? '.' . $sThumbName : '') . '.' . $sExtension;
        } else {
            $sThumbNailPath = $sRelativePath . $sName . (!empty($sThumbName) ? '.' . $sThumbName : '');
        }
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
 * @return string   Generated HTML
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
            $editform_hidden .= '          <input type="hidden" name="serendipity[' . serendipity_specialchars($imgsel_key) . ']" value="' . serendipity_specialchars($imgsel_val) . '">' . "\n";
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
        if (!is_array($props['base_metadata'] ?? null)) {
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
        'dprops'            => $dprops,
        'case_add'          => is_array($new_media[0]['created_thumbnail'] ?? null)     // created_thumbnail is only set when viewing properties after adding an image
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
        $val = serendipity_mediaTypeCast($parts[0], $props['base_property'][$parts[0]] ?? null, true);

        $propkey = serendipity_specialchars($parts[0]) . ($idx ?? '');

        $media['base_property'][$propkey] = array(
            'label' => serendipity_specialchars(defined('MEDIA_PROPERTY_' . strtoupper($parts[0])) ? constant('MEDIA_PROPERTY_' . strtoupper($parts[0])) : $parts[0]),
            'type'  => $type,
            'val'   => $val,
            'title' => serendipity_specialchars($parts[0])
        );

        if (!is_array($GLOBALS['IPTC'] ?? null)) {
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
        $rows  = ceil(count($keywords) / $keywordsPerBlock);
        for($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $keywordsPerBlock; $j++) {
                $kidx = ($i*$keywordsPerBlock) + $j;
                if (isset($keywords[$kidx])) {
                    $media['base_keywords'][$i][$j] = array(
                        'name'      => serendipity_specialchars($keywords[$kidx]),
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
            return serendipity_strftime(DATE_FORMAT_SHORT, (int) $val, false);
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
            if ($key == 'image_id') {
                continue;
            }

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
        'image_id' => $serendipity['POST']['mediaProperties'][0]['image_id'],
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
 * @param  string   URL for maintenance tasks, set when using the ML for inserting images
 * @return bool
 *
 */
function serendipity_prepareMedia(&$file, $url = '') {
    global $serendipity;
    static $full_perm = null;

    if ($full_perm === null) {
        $full_perm = serendipity_checkPermission('adminImagesMaintainOthers');
    }

    $sThumbSource = serendipity_getThumbNailPath($file['path'], $file['name'], $file['extension'], $file['thumbnail_name']);
    if (! $file['hotlink']) {
        $file['full_thumb']     = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $sThumbSource;
        $file['full_thumbHTTP'] = $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $sThumbSource;
    }

    $file['url'] = $url;

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
    $file['realfile']  = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] . (empty($file['extension']) ? '' : '.' . $file['extension']);

    if (file_exists($file['full_thumb'])) {
        $file['dim']       = @getimagesize($file['full_thumb'], $file['thumb_header']);
    } else {
        $file['dim']       = null;
    }
    $file['dim_orig']  = @getimagesize($file['realfile'], $file['header']);
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

    if ($full_perm || $serendipity['authorid'] == $file['authorid'] || $file['authorid'] == '0') {
        $file['is_editable'] = true;
    } else {
        $file['is_editable'] = false;
    }

    /* If it is an image, and the thumbnail exists */
    if ($file['is_image'] && file_exists($file['full_thumb'])) {
        $file['thumbWidth']  = $file['dim'][0] ?? null;
        $file['thumbHeight'] = $file['dim'][1] ?? null;
    } elseif ($file['is_image'] && $file['hotlink']) {
        $sizes = serendipity_calculate_aspect_size($file['dimensions_width'], $file['dimensions_height'], $serendipity['thumbSize'], $serendipity['thumbConstraint']);
        $file['thumbWidth']  = $sizes[0];
        $file['thumbHeight'] = $sizes[1];
    /* If it's not an image, or the thumbnail does not exist */
    } else {
        $mimeicon = serendipity_getTemplateFile('admin/img/mime_' . preg_replace('@[^a-z0-9\-\_]@i', '-', $file['mime']) . '.png');
        if (!$mimeicon) {
            $mimeicon = serendipity_getTemplateFile('admin/img/mime_unknown.png');
        }
        $file['mimeicon'] = $mimeicon;
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
 * @return string   Generated HTML
 *
 */
function serendipity_showMedia(&$file, &$paths, $url = '', $manage = false, $lineBreak = 3, $enclose = true, $smarty_vars = array()) {
    global $serendipity;

    $form_hidden = '';
    // do not add, if not for the default media list form
    if (($serendipity['GET']['adminAction'] == 'default' || empty($serendipity['GET']['adminAction'])) && ! ($serendipity['GET']['fid'] ?? null)) {
        foreach($serendipity['GET'] AS $g_key => $g_val) {
            // do not add token, since this is assigned separately to properties and list forms
            if (!is_array($g_val) && $g_key != 'page' && $g_key != 'token') {
                $form_hidden .= '        <input type="hidden" name="serendipity[' . $g_key . ']" value="' . serendipity_specialchars($g_val) . '">'."\n";
            }
        }
    }

    // Add variables to the hidden form, so they persist in the ML popup after an item as been uploaded and the
    // form filter gets used
    if ($serendipity['GET']['adminAction'] == 'add') {
        $target_fields = ['textarea', 'htmltarget', 'filename_only', 'noBanner', 'noSidebar', 'noFooter', 'showMediaToolbar', 'multiselect', 'showUpload'];
        foreach ($target_fields as $target_field) {
            if (isset($serendipity['GET'][$target_field])) {
                $form_hidden .= '        <input type="hidden" name="serendipity[' . $target_field . ']" value="' . serendipity_specialchars($serendipity['GET'][$target_field]) . '">'."\n";
            }
        }
        $form_hidden .=  '        <input type="hidden" name="serendipity[adminModule]" value="media">'."\n";
    }

    if (!is_object($serendipity['smarty'] ?? null)) {
        serendipity_smarty_init();
    }
    $order_fields = serendipity_getImageFields();

    $media = array(
        'manage'            => $manage,
        'multiperm'         => serendipity_checkPermission('adminImagesDirectories'),
        'lineBreak'         => $lineBreak,
        'lineBreakP'        => round(1/$lineBreak*100),
        'url'               => $url,
        'enclose'           => $enclose,
/*        'zoomIMG'           => serendipity_getTemplateFile('admin/img/big_zoom.png'),
        'renameIMG'         => serendipity_getTemplateFile('admin/img/big_rename.png'),
        'resizeIMG'         => serendipity_getTemplateFile('admin/img/big_resize.png'),
        'rotatecwIMG'       => serendipity_getTemplateFile('admin/img/big_rotate_cw.png'),
        'rotateccwIMG'      => serendipity_getTemplateFile('admin/img/big_rotate_ccw.png'),
        'configureIMG'      => serendipity_getTemplateFile('admin/img/configure.png'),
        'deleteIMG'         => serendipity_getTemplateFile('admin/img/big_delete.png'),
        'prevIMG'           => serendipity_getTemplateFile('admin/img/previous.png'),
        'nextIMG'           => serendipity_getTemplateFile('admin/img/next.png'),*/
        'token'             => serendipity_setFormToken(),
        'form_hidden'       => $form_hidden,
        'blimit_path'       => empty($smarty_vars['limit_path']) ? '' : basename($smarty_vars['limit_path']),
        'only_path'         => $serendipity['GET']['only_path'] ?? null,
        'only_filename'     => $serendipity['GET']['only_filename'] ?? null,
        'sortorder'         => $serendipity['GET']['sortorder'] ?? null,
        'keywords_selected' => $serendipity['GET']['keywords'] ?? null,
        'filter'            => $serendipity['GET']['filter'] ?? ['fileCategory' => null],
        'sort_order'        => $order_fields,
        'simpleFilters'     => $serendipity['simpleFilters'] ?? true,
        'hideSubdirFiles'   => $serendipity['GET']['hideSubdirFiles'] ?? null,
        'authors'           => serendipity_fetchUsers(),
        'sort_row_interval' => array(8, 16, 50, 100),
        'nr_files'          => count($file),
        'keywords'          => explode(';', $serendipity['mediaKeywords']),
        'thumbSize'         => $serendipity['thumbSize'],
        'multiselect'       => isset($serendipity['GET']['multiselect']) ? serendipity_db_bool($serendipity['GET']['multiselect']) : true,
        'sortParams'        => array('perpage', 'order', 'ordermode')
    );

    $media = array_merge($media, $smarty_vars);
    $media['files'] =& $file;

    if (is_array($paths) && count($paths) > 0) {
        $media['paths'] =& $paths;
    } else {
        $media['paths'] =& serendipity_getMediaPaths();
    }

    if (! isset($media['filter']['fileCategory']) ) { $media['filter']['fileCategory'] = null; }

    $serendipity['smarty']->assignByRef('media', $media);

    if ($enclose) {
        serendipity_smarty_fetch('MEDIA_ITEMS', 'admin/media_items.tpl');
        return serendipity_smarty_show('admin/media_pane.tpl');
    } else {
        serendipity_smarty_fetch('MEDIA_ITEMS', 'admin/media_items.tpl');
        return serendipity_smarty_show('admin/media_properties.tpl');
    }
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
            'Make'         => array('type' => 'text',  'name' => 'CameraMaker'),
            'Model'        => array('type' => 'text',  'name' => 'CameraModel'),
            'Orientation'  => array('type' => 'or',    'name' => 'Orientation'),
            'XResolution'  => array('type' => 'math',  'name' => 'XResolution'),
            'YResolution'  => array('type' => 'math',  'name' => 'YResolution'),
            'Software'     => array('type' => 'text',  'name' => 'Software'),
            'DateTime'     => array('type' => 'date2', 'name' => 'DateCreated'),
            'Artist'       => array('type' => 'text',  'name' => 'Creator'),
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
        'tiff:Orientation'           => array('type' => 'or',   'name' => 'Orientation'),
        'tiff:XResolution'           => array('type' => 'math', 'name' => 'XResolution'),
        'tiff:YResolution'           => array('type' => 'math', 'name' => 'YResolution'),
        'tiff:Make'                  => array('type' => 'text', 'name' => 'CameraMaker'),
        'tiff:Model'                 => array('type' => 'text', 'name' => 'CameraModel'),
        'xap:ModifyDate'             => array('type' => 'date', 'name' => 'DateModified'),
        'xap:CreatorTool'            => array('type' => 'text', 'name' => 'Software'),
        'xap:CreateDate'             => array('type' => 'date', 'name' => 'DateCreated'),
        'xap:MetadataDate'           => array('type' => 'date', 'name' => 'DateMetadata'),

        'exif:ExposureTime'          => array('type' => 'math',  'name' => 'ExposureTime'),
        'exif:ApertureValue'         => array('type' => 'math',  'name' => 'ApertureValue'),
        'exif:MaxApertureValue'      => array('type' => 'math',  'name' => 'MaxApertureValue'),
        'exif:ISOSpeedRatings'       => array('type' => 'text',  'name' => 'ISOSpeedRatings'),
        'exif:DateTimeOriginal'      => array('type' => 'date',  'name' => 'DateCreated'),
        'exif:MeteringMode'          => array('type' => 'text',  'name' => 'MeteringMode'),
        'exif:FNumber'               => array('type' => 'math',  'name' => 'FNumber'),
        'exif:ExposureProgram'       => array('type' => 'text',  'name' => 'ExposureProgram'),
        'exif:FocalLength'           => array('type' => 'math',  'name' => 'FocalLength'),
        'exif:WhiteBalance'          => array('type' => 'text',  'name' => 'WhiteBalance'),
        'exif:DigitalZoomRatio'      => array('type' => 'math',  'name' => 'DigitalZoomRatio'),
        'exif:FocalLengthIn35mmFilm' => array('type' => 'text',  'name' => 'FocalLengthIn35mmFilm'),
        'exif:Fired'                 => array('type' => 'text',  'name' => 'FlashFired'),
        'exif:RedEyeMode'            => array('type' => 'text',  'name' => 'RedEyeMode'),

        'dc:title'                   => array('type' => 'rdf',   'name' => 'Title'),
        'dc:creator'                 => array('type' => 'rdf',   'name' => 'Creator'),
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
        echo '<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> <strong>';
        printf(FILENAME_REASSIGNED . '<br />', serendipity_specialchars($tfile));
        echo "</strong></span>\n";
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
            echo '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ';
            printf(MEDIA_UPLOAD_SIZEERROR . '<br />', (int)$serendipity['maxFileSize']);
            echo "</span>\n";
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
                echo '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ';
                printf(MEDIA_UPLOAD_DIMERROR . '<br />', (int)$serendipity['maxImgWidth'], (int)$serendipity['maxImgHeight']);
                echo "</span>\n";
                return false;
            }
        }

        if (!empty($serendipity['maxImgHeight'])) {
            if ($dim[1] > $serendipity['maxImgHeight']) {
                echo '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ';
                printf(MEDIA_UPLOAD_DIMERROR . '<br />', (int)$serendipity['maxImgWidth'], (int)$serendipity['maxImgHeight']);
                echo "</span>\n";
                return false;
            }
        }
    }

    return true;
}

/**
 * DEPRECATED. Use the functions serendipity_renameDir and serendipity_moveFile instead. This is only
 * a wrapper around those, for backwards compatibility
 *
 * Moves a media directory 
 *
 * @param  string   The old directory.
 *                  This can be NULL or (an empty / a) STRING for re-name/multiCheck move comparison events
 * @param  string   The new directory
 * @param  string   The type of what to remove (dir|file|filedir)
 * @param  string   An item id of a file
 * @param  array    Result of serendipity_fetchImageFromDatabase($id)
 * @return boolean
 *
 */
function serendipity_moveMediaDirectory($oldDir, $newDir, $type = 'dir', $item_id = null, $file = null) {
    global $serendipity;
    if ($type == 'dir') {
        serendipity_renameDir($oldDir, $newDir);
    } else {
        return serendipity_moveFileTo($item_id, $newDir);
    }
}

/**
 * Show the Media Library
 *
 * @access  public
 * @param   bool    default false
 * @param   array   $smarty_vars
 * @return  string  Image list
 */
function showMediaLibrary($addvar_check = false, $smarty_vars = array()) {
    global $serendipity;

    if (!serendipity_checkPermission('adminImagesView')) {
        return;
    }
    $output = '';

    // After upload, do not show the list to be able to proceed to
    // media selection.
    if ($addvar_check && !empty($GLOBALS['image_selector_addvars'])) {
        return true;
    }

    if (!isset($serendipity['thumbPerPage'])) {
        $serendipity['thumbPerPage'] = 2;
    }
    $smarty_vars = array(
        'textarea' => isset($serendipity['GET']['textarea']) ? $serendipity['GET']['textarea'] : false,
        'htmltarget' => isset($serendipity['GET']['htmltarget']) ? $serendipity['GET']['htmltarget'] : '',
        'filename_only' => isset($serendipity['GET']['filename_only']) ? $serendipity['GET']['filename_only'] : false,
    );

    if (isset($serendipity['GET']['showUpload'])) {
        $show_upload = $serendipity['GET']['showUpload'];
    } else {
        $show_upload = $serendipity['GET']['showUpload'] = false;
    }

    $output .= serendipity_displayImageList(
        isset($serendipity['GET']['page']) ? $serendipity['GET']['page'] : 1,
        $serendipity['thumbPerPage'],
        isset($serendipity['GET']['showMediaToolbar']) ? serendipity_db_bool($serendipity['GET']['showMediaToolbar']) : true,
        NULL,
        $show_upload,
        NULL,
        $smarty_vars
    );

    return $output;
}

/**
 * Gets all available media directories
 *
 * @return array
 *
 */
function &serendipity_getMediaPaths() {
    global $serendipity;

    $aExclude = array("CVS" => true, ".svn" => true, "_vti_cnf" => true); // add _vti_cnf to exclude possible added servers frontpage extensions
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

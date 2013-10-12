<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (!serendipity_checkPermission('adminImages')) {
    return;
}

switch ($serendipity['GET']['adminAction']) {
    case 'imgedit':
        echo '<div class="warning js_warning"><em>' . PREFERENCE_USE_JS_WARNING . '</em></div>';

        if (!isset($serendipity['eyecandy']) || serendipity_db_bool($serendipity['eyecandy'])) {
        } else {
            return true;
        }

        include(S9Y_INCLUDE_PATH . "include/functions_images_crop.inc.php");
        $media['is_imgedit'] = true;
        $media['css_imgedit'] = serendipity_getTemplateFile('admin/imgedit.css');

        if (isset($serendipity['GET']['fid'])) {
            $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);
            if (!is_array($file) || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
                return;
            }

            $fullfile = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] . '.' . $file['extension'];
            $httpfile = $serendipity['serendipityHTTPPath'] . $serendipity['uploadHTTPPath'] . $file['path'] . $file['name'] . '.' . $file['extension'];

            $img = new imgedit($fullfile, $httpfile);

            // Set the filenames used for the cropping areas. Width/Height are automagically detected. Orientation is either horizontal or vertical.
            $img->setArea('imgedit_area.gif',  'h');
            $img->setArea('imgedit_varea.gif', 'v');

            // Let the IMGEditor do its magic. It will parse its results straightly into a template variable array.
            $img->main();
            $serendipity['smarty']->assign('imgedit', $img->imgedit_smarty);
            serendipity_smarty_fetch('IMGEDIT', $img->output_template);
        }
        break;

    case 'sync':
        if (!serendipity_checkPermission('adminImagesSync')) {
            echo '<div class="warning"><em>' . PERM_DENIED . '</em></div>';
            break;
        }

        // Make the form to actually do sync with deleting or not
        $n = "\n";
        $warning = preg_replace('#\\\n#', '<br />', WARNING_THIS_BLAHBLAH);
        echo '<div class="serendipityAdminMsgNote">' . $warning . '</div>';
        echo '  <form method="POST" action="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=doSync">' . $n;
        echo '  <p>' . $n . '  <fieldset>' . $n;
        echo '  <legend>' . SYNC_OPTION_LEGEND . '</legend>' . $n;
        echo '    <input type="radio" name="serendipity[deleteThumbs]" value="no" checked="checked" id="keepthumbs" />' .$n;
        echo '      <label for="keepthumbs">' . SYNC_OPTION_KEEPTHUMBS . '</label><br />' . $n;
        echo '    <input type="radio" name="serendipity[deleteThumbs]" value="check" id="sizecheckthumbs" />' . $n;
        echo '      <label for="sizecheckthumbs">' . SYNC_OPTION_SIZECHECKTHUMBS . '</label><br />' . $n;
        echo '    <input type="radio" name="serendipity[deleteThumbs]" value="yes" />' . $n;
        echo '      <label for="deletethumbs">' . SYNC_OPTION_DELETETHUMBS . '</label><br />' . $n;
        echo '  </fieldset>' . $n . '  </p>' . $n;
        echo '  <input name="doSync" value="' . CREATE_THUMBS . '" class="serendipityPrettyButton input_button" type="submit" />' . $n;
        echo '  <a href="serendipity_admin.php" class="serendipityPrettyButton">' . ABORT_NOW . '</a>' . $n;
        echo '</form>';
        break;

    case 'doSync':
        // I don't know how it could've changed, but let's be safe.
        if (!serendipity_checkPermission('adminImagesSync')) {
            echo '<div class="warning"><em>' . PERM_DENIED . '</em></div>';
            break;
        }

        if (function_exists('set_time_limit')) {
            @set_time_limit(0);
        }
        @ignore_user_abort();

        echo '<p class="image_synch"><b>' . SYNCING . '</b></p><br />';
        flush();

        $deleteThumbs = false;
        if (isset($serendipity['POST']['deleteThumbs'])) {
            switch ($serendipity['POST']['deleteThumbs'])
            {
            case 'yes':
                $deleteThumbs = true;
                break;
            case 'check':
                $deleteThumbs = 'checksize';
                break;
            }
        }
        $i = serendipity_syncThumbs($deleteThumbs);
        printf(SYNC_DONE, $i);

        echo '<p class="image_resize"><b>' . RESIZING . '</b></p><br />';
        flush();

        $i = serendipity_generateThumbs();
        printf(RESIZE_DONE, $i);

        break;

    case 'DoDelete':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDelete')) {
            break;
        }

        $file   = $serendipity['GET']['fname'];
        serendipity_deleteImage($serendipity['GET']['fid']);
        showMediaLibrary();
        break;

    case 'delete':
        $file     = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);

        if (!is_array($file) || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        if (!isset($serendipity['adminFile'])) {
            $serendipity['adminFile'] = 'serendipity_admin.php';
        }
        $abortLoc = $serendipity['serendipityHTTPPath'] . $serendipity['adminFile'] . '?serendipity[adminModule]=images';
        $newLoc   = $abortLoc . '&serendipity[adminAction]=DoDelete&serendipity[fid]=' . (int)$serendipity['GET']['fid'] . '&' . serendipity_setFormToken('url');

        printf('<div class="image_notify_delete">' . ABOUT_TO_DELETE_FILE . '</div>', $file['name'] .'.'. $file['extension']);
?>
    <form method="get" id="delete_image">
        <div>
              <a href="<?php echo $newLoc; ?>" class="serendipityPrettyButton input_button"><?php echo DUMP_IT ?></a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $abortLoc; ?>" class="serendipityPrettyButton input_button"><?php echo ABORT_NOW ?></a>
        </div>
    </form>
<?php
        break;

    case 'rename':
        $serendipity['GET']['fid'] = (int)$serendipity['GET']['fid'];
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);
        $serendipity['GET']['newname'] = serendipity_uploadSecure($serendipity['GET']['newname'], true);

        if (!is_array($file) || !serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        if (!serendipity_moveMediaDirectory(null, $serendipity['GET']['newname'], 'file', $serendipity['GET']['fid'], $file)) {
    ?>
        <br />
        <input type="button" onclick="history.go(-1);" value="<?php echo BACK; ?>" class="serendipityPrettyButton input_button" />
    <?php
                break;
        }

        // if we successfully rename
    ?>
        <script language="javascript" type="text/javascript">
            location.href="?serendipity[adminModule]=images&serendipity[adminAction]=default";
        </script>
        <noscript>
            <a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=default"><?php echo DONE ?></a>
        </noscript>
    <?php
        break;

    case 'properties':
        $new_media = array(array('image_id' => $serendipity['GET']['fid']));
        serendipity_showPropertyForm($new_media);
        break;

    case 'add':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesAdd')) {
            return;
        }
        $messages = array();
        if ($serendipity['POST']['adminSubAction'] == 'properties') {
            $properties        = serendipity_parsePropertyForm();
            $image_id          = $properties['image_id'];
            $created_thumbnail = true;
?>
        <script language="javascript" type="text/javascript">
            location.href="?serendipity[adminModule]=images&serendipity[adminAction]=default";
        </script>
        <noscript>
            <a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=default"><?php echo DONE ?></a>
        </noscript>
<?php
            break;
        }

?>
<?php
    $messages[] = '<div class="image_add"><b>' . ADDING_IMAGE . '</b></div>';

    $authorid = (isset($serendipity['POST']['all_authors']) && $serendipity['POST']['all_authors'] == 'true') ? '0' : $serendipity['authorid'];

    $new_media = array();
    $serendipity['POST']['imageurl'] = htmlspecialchars($serendipity['POST']['imageurl']);

    // First find out whether to fetch a file or accept an upload
    if ($serendipity['POST']['imageurl'] != '' && $serendipity['POST']['imageurl'] != 'http://') {
        if (!empty($serendipity['POST']['target_filename'][2])) {
            // Faked hidden form 2 when submitting with JavaScript
            $tfile   = $serendipity['POST']['target_filename'][2];
            $tindex  = 2;
        } elseif (!empty($serendipity['POST']['target_filename'][1])) {
            // Fallback key when not using JavaScript
            $tfile   = $serendipity['POST']['target_filename'][1];
            $tindex  = 1;
        } else {
            $tfile   = $serendipity['POST']['imageurl'];
            $tindex  = 1;
        }

        $tfile = serendipity_uploadSecure(basename($tfile));

        if (serendipity_isActiveFile($tfile)) {
            $messages[] = sprintf(ERROR_FILE_FORBIDDEN, $tfile);
            break;
        }

        $serendipity['POST']['target_directory'][$tindex] = serendipity_uploadSecure($serendipity['POST']['target_directory'][$tindex], true, true);
        $target = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $serendipity['POST']['target_directory'][$tindex] . $tfile;

        if (!serendipity_checkDirUpload($serendipity['POST']['target_directory'][$tindex])) {
            $messages[] = PERM_DENIED;
            return;
        }

        $realname = $tfile;
        if (file_exists($target)) {
            $messages[] = '(' . $target . ') ' . ERROR_FILE_EXISTS_ALREADY . '';
            $realname = serendipity_imageAppend($tfile, $target, $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $serendipity['POST']['target_directory'][$tindex]);
        }

        require_once S9Y_PEAR_PATH . 'HTTP/Request.php';
        $options = array('allowRedirects' => true, 'maxRedirects' => 5);
        serendipity_plugin_api::hook_event('backend_http_request', $options, 'image');
        serendipity_request_start();
        $req = new HTTP_Request($serendipity['POST']['imageurl'], $options);
        // Try to get the URL

        if (PEAR::isError($req->sendRequest()) || $req->getResponseCode() != '200') {
            $messages[] = sprintf(REMOTE_FILE_NOT_FOUND, $serendipity['POST']['imageurl']);
        } else {
            // Fetch file
            $fContent = $req->getResponseBody();

            if ($serendipity['POST']['imageimporttype'] == 'hotlink') {
                $tempfile = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . '/hotlink_' . time();
                $fp = fopen($tempfile, 'w');
                fwrite($fp, $fContent);
                fclose($fp);

                $image_id = @serendipity_insertHotlinkedImageInDatabase($tfile, $serendipity['POST']['imageurl'], $authorid, null, $tempfile);
                $messages[] = sprintf( HOTLINK_DONE , $serendipity['POST']['imageurl'] , $tfile .'');
                serendipity_plugin_api::hook_event('backend_image_addHotlink', $tempfile);
            } else {
                $fp = fopen($target, 'w');
                fwrite($fp, $fContent);
                fclose($fp);

                $messages[] = sprintf(FILE_FETCHED , $serendipity['POST']['imageurl'] , $tfile);

                if (serendipity_checkMediaSize($target)) {
                    $thumbs = array(array(
                        'thumbSize' => $serendipity['thumbSize'],
                        'thumb'     => $serendipity['thumbSuffix']
                    ));
                    serendipity_plugin_api::hook_event('backend_media_makethumb', $thumbs);

                    foreach($thumbs as $thumb) {
                        // Create thumbnail
                        if ( $created_thumbnail = serendipity_makeThumbnail($tfile, $serendipity['POST']['target_directory'][$tindex], $thumb['thumbSize'], $thumb['thumb']) ) {
                            $messages[] = THUMB_CREATED_DONE . '';
                        }
                    }

                    // Insert into database
                    $image_id = serendipity_insertImageInDatabase($tfile, $serendipity['POST']['target_directory'][$tindex], $authorid, null, $realname);
                    serendipity_plugin_api::hook_event('backend_image_add', $target);
                    $new_media[] = array(
                        'image_id'          => $image_id,
                        'target'            => $target,
                        'created_thumbnail' => $created_thumbnail
                    );
                }
            }
            serendipity_request_end();
        }
    } else {
        if (!is_array($serendipity['POST']['target_filename'])) {
            break;
        }

        foreach($serendipity['POST']['target_filename'] AS $idx => $target_filename) {
            $uploadfile = &$_FILES['serendipity']['name']['userfile'][$idx];
            $uploadtmp  = &$_FILES['serendipity']['tmp_name']['userfile'][$idx];
            if (!empty($target_filename)) {
                $tfile   = $target_filename;
            } elseif (!empty($uploadfile)) {
                $tfile   = $uploadfile;
            } else {
                // skip empty array
                continue;
            }

            $tfile = serendipity_uploadSecure(basename($tfile));

            if (serendipity_isActiveFile($tfile)) {
                $messages[] = ERROR_FILE_FORBIDDEN .' '. $tfile;
                continue;
            }

            $serendipity['POST']['target_directory'][$idx] = serendipity_uploadSecure($serendipity['POST']['target_directory'][$idx], true, true);

            if (!serendipity_checkDirUpload($serendipity['POST']['target_directory'][$idx])) {
                $messages[] = PERM_DENIED;
                continue;
            }

            $target = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $serendipity['POST']['target_directory'][$idx] . $tfile;

            $realname = $tfile;
            if (file_exists($target)) {
                $messages[] = '(' . $target . ') ' . ERROR_FILE_EXISTS_ALREADY;
                $realname = serendipity_imageAppend($tfile, $target, $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $serendipity['POST']['target_directory'][$idx]);
            }

            // Accept file
            if (is_uploaded_file($uploadtmp) && serendipity_checkMediaSize($uploadtmp) && move_uploaded_file($uploadtmp, $target)) {
                $messages[] = sprintf( FILE_UPLOADED , $uploadfile , $target);
                @umask(0000);
                @chmod($target, 0664);

                $thumbs = array(array(
                    'thumbSize' => $serendipity['thumbSize'],
                    'thumb'     => $serendipity['thumbSuffix']
                ));
                serendipity_plugin_api::hook_event('backend_media_makethumb', $thumbs);

                foreach($thumbs as $thumb) {
                    // Create thumbnail
                    if ( $created_thumbnail = serendipity_makeThumbnail($tfile, $serendipity['POST']['target_directory'][$idx], $thumb['thumbSize'], $thumb['thumb']) ) {
                        $messages[] = THUMB_CREATED_DONE;
                    }
                }

                // Insert into database
                $image_id = serendipity_insertImageInDatabase($tfile, $serendipity['POST']['target_directory'][$idx], $authorid, null, $realname);
                serendipity_plugin_api::hook_event('backend_image_add', $target, $created_thumbnail);
                $new_media[] = array(
                    'image_id'          => $image_id,
                    'target'            => $target,
                    'created_thumbnail' => $created_thumbnail
                );
            } else {
                $messages[] = ERROR_UNKNOWN_NOUPLOAD;
            }
        }
    }

    if (isset($_REQUEST['go_properties'])) {
        serendipity_showPropertyForm($new_media);
    } else {
        $hidden = array(
            'author'   => $serendipity['serendipityUser'],
            'authorid' => $serendipity['authorid']
        );

        foreach($new_media AS $nm) {
            serendipity_insertMediaProperty('base_hidden', '', $nm['image_id'], $hidden);
        }
    }

    showMediaLibrary($messages, true);

    break;


    case 'directoryDoDelete':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDirectories')) {
            return;
        }

        $new_dir = serendipity_uploadSecure($serendipity['GET']['dir'], true);
        if (is_dir($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $new_dir)) {
            if (!is_writable($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $new_dir)) {
                printf(DIRECTORY_WRITE_ERROR, $new_dir);
            } else {
                // Directory exists and is writable. Now dive within subdirectories and kill 'em all.
                serendipity_killPath($serendipity['serendipityPath'] . $serendipity['uploadPath'], $new_dir, (isset($serendipity['POST']['nuke']) ? true : false));
            }
        } else {
            printf(ERROR_NO_DIRECTORY, $new_dir);
        }

        serendipity_plugin_api::hook_event('backend_directory_delete', $new_dir);

        break;

    case 'directoryEdit':
        if (!serendipity_checkPermission('adminImagesDirectories')) {
            return;
        }

        $use_dir   = serendipity_uploadSecure($serendipity['GET']['dir']);
        $checkpath = array(
            array(
                'relpath' => $use_dir
            )
        );

        if (!serendipity_directoryACL($checkpath, 'write')) {
            return;
        }

        if (!empty($serendipity['POST']['save'])) {
            $newDir   = serendipity_uploadSecure($serendipity['POST']['newDir']);
            $oldDir   = serendipity_uploadSecure($serendipity['POST']['oldDir']);

            if ($oldDir != $newDir) {
                serendipity_moveMediaDirectory($oldDir, $newDir);
                $use_dir = $newDir;
            }
            serendipity_ACLGrant(0, 'directory', 'read', $serendipity['POST']['read_authors'], $use_dir);
            serendipity_ACLGrant(0, 'directory', 'write', $serendipity['POST']['write_authors'], $use_dir);
            echo '<div>' . sprintf(SETTINGS_SAVED_AT, serendipity_strftime('%H:%M:%S')) . '</div>';
        }

        $groups = serendipity_getAllGroups();
        $read_groups  = serendipity_ACLGet(0, 'directory', 'read', $use_dir);
        $write_groups = serendipity_ACLGet(0, 'directory', 'write', $use_dir);

        if (!empty($serendipity['POST']['update_children'])) {
            $dir_list = serendipity_traversePath($serendipity['serendipityPath'] . $serendipity['uploadPath'], $use_dir, true, NULL, 1, NULL, 'write', NULL);
            foreach($dir_list AS $f => $dir) {
                // Apply parent ACL to children.
                serendipity_ACLGrant(0, 'directory', 'read', $serendipity['POST']['read_authors'], $dir['relpath']);
                serendipity_ACLGrant(0, 'directory', 'write', $serendipity['POST']['write_authors'], $dir['relpath']);
            }
        }
?>

    <div class="image_directory_edit"><strong><?php echo MANAGE_DIRECTORIES ?></strong></div>
    <br />
    <form id="image_directory_edit_form" method="POST" action="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryEdit&amp;serendipity[dir]=<?php echo htmlspecialchars($serendipity['GET']['dir']) ?>">
    <?php echo serendipity_setFormToken(); ?>
    <input type="hidden" name="serendipity[oldDir]" value="<?php echo $use_dir; ?>" />
    <table cellpadding="5">
        <tr>
            <td width="100"><strong><?php echo NAME ?></strong></td>
            <td><input class="input_textbox" type="text" name="serendipity[newDir]" value="<?php echo $use_dir; ?>" /></td>
        </tr>
        <tr>
            <td><label for="read_authors"><?php echo PERM_READ; ?></label></td>
            <td>
                <select size="6" id="read_authors" multiple="multiple" name="serendipity[read_authors][]">
                    <option value="0" <?php echo (isset($read_groups[0])) ? 'selected="selected"' : ''; ?>><?php echo ALL_AUTHORS; ?></option>
<?php
            foreach($groups AS $group) {
                echo '<option value="' . $group['confkey'] . '" ' . (isset($read_groups[$group['confkey']]) ? 'selected="selected"' : '') . '>' . htmlspecialchars($group['confvalue']) . '</option>' . "\n";
            }
?>
                </select>
            </td>
        </tr>

        <tr>
            <td><label for="write_authors"><?php echo PERM_WRITE; ?></label></td>
            <td>
                <select size="6" id="write_authors" multiple="multiple" name="serendipity[write_authors][]">
                    <option value="0" <?php echo (isset($write_groups[0])) ? 'selected="selected"' : ''; ?>><?php echo ALL_AUTHORS; ?></option>
<?php
            foreach($groups AS $group) {
                echo '<option value="' . $group['confkey'] . '" ' . (isset($write_groups[$group['confkey']]) ? 'selected="selected"' : '') . '>' . htmlspecialchars($group['confvalue']) . '</option>' . "\n";
            }
?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input class="input_checkbox" id="setchild" value="true" type="checkbox" name="serendipity[update_children]" <?php echo (!empty($serendipity['POST']['update_children']) == 'on' ? 'checked="checked"' : ''); ?> /> <label for="setchild"><?php echo PERM_SET_CHILD; ?></label>
            <td>
        </tr>
    </table>
    <br />
    <br />
    <div align="center">
        <input name="serendipity[save]" value="<?php echo SAVE ?>" class="serendipityPrettyButton input_button" type="submit" />
    </div>
    </form>

<?php
        break;

    case 'directoryDelete':
        if (!serendipity_checkPermission('adminImagesDirectories')) {
            return;
        }
?>

    <div class="image_directory_delete"><strong><?php echo DELETE_DIRECTORY ?></strong></div>
    <div class="image_directory_delete_desc"><?php echo DELETE_DIRECTORY_DESC ?></div>
    <br />
    <br />
    <form id="image_directory_delete_form" method="POST" action="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDoDelete&amp;serendipity[dir]=<?php echo htmlspecialchars($serendipity['GET']['dir']) ?>">
    <?php echo serendipity_setFormToken(); ?>
    <table cellpadding="5">
        <tr>
            <td width="100"><strong><?php echo NAME ?></strong></td>
            <td><?php echo basename(htmlspecialchars($serendipity['GET']['dir'])) ?></td>
        </tr>
        <tr>
            <td colspan="2"><input class="input_checkbox" type="checkbox" name="serendipity[nuke]" value="true" style="margin: 0"> <?php echo FORCE_DELETE ?></td>
        </tr>
    </table>
    <br />
    <br />
    <div align="center">
        <?php echo sprintf(CONFIRM_DELETE_DIRECTORY, htmlspecialchars($serendipity['GET']['dir'])) ?><br />
        <input name="SAVE" value="<?php echo DELETE_DIRECTORY ?>" class="serendipityPrettyButton input_button" type="submit" />
    </div>
    </form>

<?php
        break;

    case 'directoryDoCreate':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDirectories')) {
            return;
        }

        $new_dir = serendipity_uploadSecure($serendipity['POST']['parent'] . '/' . $serendipity['POST']['name'], true);
        $new_dir = str_replace(array('..', '//'), array('', '/'), $new_dir);
        $nd      = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $new_dir;
        serendipity_plugin_api::hook_event('backend_directory_create', $nd);

        /* TODO: check if directory already exist */
        if (is_dir($nd) || @mkdir($nd)) {
            printf(DIRECTORY_CREATED, $serendipity['POST']['name']);
            @umask(0000);
            @chmod($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $new_dir, 0777);

            // Apply parent ACL to new child.
            $array_parent_read  = serendipity_ACLGet(0, 'directory', 'read',  $serendipity['POST']['parent']);
            $array_parent_write = serendipity_ACLGet(0, 'directory', 'write', $serendipity['POST']['parent']);
            if (!is_array($array_parent_read) || count($array_parent_read) < 1) {
                $parent_read = array(0);
            } else {
                $parent_read = array_keys($array_parent_read);
            }
            if (!is_array($array_parent_write) || count($array_parent_write) < 1) {
                $parent_write = array(0);
            } else {
                $parent_write = array_keys($array_parent_write);
            }

            serendipity_ACLGrant(0, 'directory', 'read', $parent_read, $new_dir . '/');
            serendipity_ACLGrant(0, 'directory', 'write', $parent_write, $new_dir . '/');
        } else {
            printf(DIRECTORY_WRITE_ERROR, $new_dir);
        }

        break;

    case 'directoryCreate':
        if (!serendipity_checkPermission('adminImagesDirectories')) {
            return;
        }

        $folders = serendipity_traversePath(
            $serendipity['serendipityPath'] . $serendipity['uploadPath'],
            '',
            true,
            NULL,
            1,
            NULL,
            'write'
        );
        usort($folders, 'serendipity_sortPath');
?>
    <div class="image_directory_create"><strong><?php echo CREATE_DIRECTORY ?></strong></div>
    <div class="image_directory_create_desc"><?php echo CREATE_DIRECTORY_DESC ?></div>
    <br />
    <br />
    <form id="image_directory_create_form" method="POST" action="?serendipity[step]=directoryDoCreate&amp;serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDoCreate">
    <?php echo serendipity_setFormToken(); ?>
    <table cellpadding="5">
        <tr>
            <td><?php echo NAME ?></td>
            <td><input class="input_textbox" type="text" name="serendipity[name]" value="" /></td>
        </tr>
        <tr>
            <td><?php echo PARENT_DIRECTORY ?></td>
            <td><select name="serendipity[parent]">
                    <option value=""><?php echo BASE_DIRECTORY ?></option>
                <?php foreach ( $folders as $folder ) { ?>
                    <option <?php echo ($folder['relpath'] == $serendipity['GET']['only_path'] ? 'selected="selected"' : ''); ?> value="<?php echo $folder['relpath'] ?>"><?php echo str_repeat('&nbsp;', $folder['depth']*2) . ' '. $folder['name'] ?></option>
                <?php } ?>
                </select>
            </td>
        </tr>
        <?php serendipity_plugin_api::hook_event('backend_directory_createoptions', $folders); ?>
    </table>
    <div><input name="SAVE" value="<?php echo CREATE_DIRECTORY ?>" class="serendipityPrettyButton input_button" type="submit"></div>
    </form>
<?php
        break;

    case 'directorySelect':
        if (!serendipity_checkPermission('adminImagesDirectories')) {
            return;
        }

        $folders = serendipity_traversePath(
            $serendipity['serendipityPath'] . $serendipity['uploadPath'],
            '',
            true,
            NULL,
            1,
            NULL,
            'write'
        );
        usort($folders, 'serendipity_sortPath');
?>
    <div class="image_directory_list"><?php echo DIRECTORIES_AVAILABLE; ?></div>
    <br />
    <table id="image_directory_listing" border="0" cellspacing="0" cellpadding="4" width="100%">
        <tr>
            <td colspan="4"><strong><?php echo BASE_DIRECTORY ?></strong></td>
        </tr>
        <?php foreach ($folders as $folder) { ?>
        <tr>
            <td width="16"><a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryEdit&amp;serendipity[dir]=<?php echo htmlspecialchars($folder['relpath']) ?>"><img src="<?php echo serendipity_getTemplateFile('admin/img/edit.png') ?>" border="0" alt="<?php echo EDIT ?>" /></a></td>
            <td width="16"><a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryDelete&amp;serendipity[dir]=<?php echo htmlspecialchars($folder['relpath']) ?>"><img src="<?php echo serendipity_getTemplateFile('admin/img/delete.png') ?>" alt="<?php echo DELETE ?>" border="0"></a></td>
            <td style="padding-left: <?php echo $folder['depth']*10 ?>"><?php echo $folder['name'] ?></td>
        </tr>
        <?php } ?>
    </table>
    <br />
    <div><a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=directoryCreate" class="serendipityPrettyButton input_button"><?php echo CREATE_NEW_DIRECTORY ?></a></div>

<?php
        break;

    case 'addSelect':
        if (!serendipity_checkPermission('adminImagesAdd')) {
            return;
        }

        serendipity_restoreVar($serendipity['COOKIE']['addmedia_directory'], $serendipity['GET']['only_path']);
        $folders = serendipity_traversePath(
            $serendipity['serendipityPath'] . $serendipity['uploadPath'],
            '',
            true,
            NULL,
            1,
            NULL,
            'write'
        );
        usort($folders, 'serendipity_sortPath');

        $form_hidden = '';
        if (isset($image_selector_addvars) && is_array($image_selector_addvars)) {
            // These variables may come from serendipity_admin_image_selector.php to show embedded upload form
            foreach($image_selector_addvars AS $imgsel_key => $imgsel_val) {
                $form_hidden .= '          <input type="hidden" name="serendipity[' . htmlspecialchars($imgsel_key) . ']" value="' . htmlspecialchars($imgsel_val) . '" />' . "\n";
            }
        }

        serendipity_smarty_init();
        $mediaFiles = array(
            'token'             => serendipity_setFormToken(),
            'form_hidden'       => $form_hidden,
            'folders'           => $folders,
            'only_path'         => $serendipity['GET']['only_path'],
            'max_file_size'     => $serendipity['maxFileSize'],
            'maxImgHeight'      => $serendipity['maxImgHeight'],
            'maxImgWidth'       => $serendipity['maxImgWidth'],
        );
        $serendipity['smarty']->assign('media', $mediaFiles);
        $serendipity['smarty']->display(serendipity_getTemplateFile('admin/media_upload.tpl', 'serendipityPath'));
    break;

    case 'rotateCW':
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);
        if (!is_array($file) || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        if (empty($serendipity['adminFile_redirect'])) {
            $serendipity['adminFile_redirect'] = htmlspecialchars($_SERVER['HTTP_REFERER']);
        }

        if (serendipity_rotateImg($serendipity['GET']['fid'], -90)) {
?>
        <script language="javascript" type="text/javascript">
            location.href="<?php echo $serendipity['adminFile_redirect'] ?>";
        </script>
        <noscript><a href="<?php echo $serendipity['adminFile_redirect'] ?>"><?php echo DONE ?></a></noscript>
<?php
        }
    break;

    case 'rotateCCW':
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);
        if (!is_array($file) || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        if (empty($serendipity['adminFile_redirect'])) {
            $serendipity['adminFile_redirect'] = htmlspecialchars($_SERVER['HTTP_REFERER']);
        }

        if (serendipity_rotateImg($serendipity['GET']['fid'], 90)) {
?>
        <script language="javascript" type="text/javascript">
            location.href="<?php echo $serendipity['adminFile_redirect'] ?>";
        </script>
        <noscript><a href="<?php echo $serendipity['adminFile_redirect'] ?>"><?php echo DONE ?></a></noscript>
<?php
        }
    break;

    case 'scale':
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);

        if (!is_array($file) || !serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        printf(
          SCALING_IMAGE . '<br />',

          $file['path'] . $file['name'] .'.'. $file['extension'],
          (int)$serendipity['GET']['width'],
          (int)$serendipity['GET']['height']
        );

        echo serendipity_scaleImg($serendipity['GET']['fid'], $serendipity['GET']['width'], $serendipity['GET']['height']) . '<br />';
        echo DONE . '<br />';
        // Forward user to overview (we don't want the user's back button to rename things again)
?>
    <script language="javascript" type="text/javascript">
       location.href="?serendipity[adminModule]=images&serendipity[adminAction]=default";
    </script>
    <noscript><a href="?serendipity[adminModule]=images&amp;serendipity[adminAction]=default"><?php echo DONE ?></a></noscript>
<?php
        break;

    case 'scaleSelect':
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);

        if (!is_array($file) || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        $s = getimagesize($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] .'.'. $file['extension']);
?>
    <script type="text/javascript" language="javascript">
    <!--
        function rescale(dim, newval) {
            var originalWidth  = <?php echo $s[0]; ?>;
            var originalHeight = <?php echo $s[1]; ?>;
            var ratio          = originalHeight/originalWidth;
            var trans          = new Array();
            trans['width']     = new Array('serendipity[height]', ratio);
            trans['height']    = new Array('serendipity[width]', 1/ratio);

            if (document.serendipityScaleForm.elements['auto'].checked == true) {
                document.serendipityScaleForm.elements[trans[dim][0]].value=Math.round(trans[dim][1]*newval);
            }

            document.getElementsByName('serendipityScaleImg')[0].style.width =
              document.serendipityScaleForm.elements['serendipity[width]'].value+'px';

            document.getElementsByName('serendipityScaleImg')[0].style.height =
              document.serendipityScaleForm.elements['serendipity[height]'].value+'px';
        }
    //-->
    </script>
<?php

        printf(RESIZE_BLAHBLAH, htmlspecialchars($serendipity['GET']['fname']));
        printf(ORIGINAL_SIZE, $s[0],$s[1]);
        echo HERE_YOU_CAN_ENTER_BLAHBLAH;
?>
    <form name="serendipityScaleForm" action="?" method="GET">
        <div>
            <?php echo NEWSIZE; ?>

            <?php echo serendipity_setFormToken(); ?>
            <input type="hidden" name="serendipity[adminModule]" value="images" />
            <input type="hidden" name="serendipity[adminAction]" value="scale" />
            <input type="hidden" name="serendipity[fid]"         value="<?php echo $serendipity["GET"]["fid"]; ?>" />

            <input class="input_textbox" type="text" size="4" name="serendipity[width]"   onchange="rescale('width' , value);" value="<?php echo $s[0]; ?>" />x
            <input class="input_textbox" type="text" size="4" name="serendipity[height]"  onchange="rescale('height', value);" value="<?php echo $s[1]; ?>" />
            <br />

            <?php echo KEEP_PROPORTIONS; ?>:
            <!-- <input type='button' value='preview'>-->
            <input class="input_checkbox" type="checkbox" name="auto"  checked="checked" /><br />
            <input type="button"   name="scale" value="<?php echo IMAGE_RESIZE; ?>" onclick="if (confirm('<?php echo REALLY_SCALE_IMAGE; ?>')) document.serendipityScaleForm.submit();" class="serendipityPrettyButton input_button" />
        </div>
    </form>

    <img src="<?php echo $serendipity['uploadHTTPPath'] . $file['path'] . $file['name'] .'.'. $file['extension'] ; ?>" name="serendipityScaleImg" style="width: <?php echo $s[0]; ?>px; height: <?php echo $s[1]; ?>px;" alt="" />
<?php
        break;

    default:
        showMediaLibrary();

        break;
}

function showMediaLibrary($messages=false, $addvar_check = false) {
    global $serendipity;

    if (!serendipity_checkPermission('adminImagesView')) {
            return;
    }

    if(!empty($messages)) {
        echo '<div class="imageMessage"><ul>';
        foreach($messages as $message) {
            echo '<li>'. $message .'</li>';
        }
        echo '</ul></div>';
    }

    // After upload, do not show the list to be able to proceed to
    // media selection.
    if ($addvar_check && !empty($GLOBALS['image_selector_addvars'])) {
        return true;
    }

?>
<script type="text/javascript" language="javascript">
    <!--
        function rename(id, fname) {
            if(newname = prompt('<?php echo ENTER_NEW_NAME; ?>' + fname, fname)) {
                location.href='?<?php echo serendipity_setFormToken('url'); ?>&serendipity[adminModule]=images&serendipity[adminAction]=rename&serendipity[fid]='+ escape(id) + '&serendipity[newname]='+ escape(newname);
            }
        }
    //-->
</script>

<?php
        if (!isset($serendipity['thumbPerPage'])) {
            $serendipity['thumbPerPage'] = 2;
        }

        serendipity_displayImageList(
          isset($serendipity['GET']['page'])   ? $serendipity['GET']['page']   : 1,
          $serendipity['thumbPerPage'],
          true
        );
}
/* vim: set sts=4 ts=4 expandtab : */

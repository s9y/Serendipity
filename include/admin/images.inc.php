<?php # $Id$

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (!serendipity_checkPermission('adminImages')) {
    return;
}

$data = array();

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

switch ($serendipity['GET']['adminAction']) {
    case 'imgedit':
        $data['case_imgedit'] = true;

        if (!isset($serendipity['eyecandy']) || serendipity_db_bool($serendipity['eyecandy'])) {
            // what??
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
        $data['case_sync']            = true;
        $data['perm_adminImagesSync'] = true;

        if (!serendipity_checkPermission('adminImagesSync')) {
            $data['perm_adminImagesSync'] = false;
            break;
        }
        break;

    case 'doSync':
        $data['case_doSync'] = true;
        $data['perm_adminImagesSync'] = true;
        // I don't know how it could've changed, but let's be safe.
        if (!serendipity_checkPermission('adminImagesSync')) {
            $data['perm_adminImagesSync'] = false;
            break;
        }

        if (function_exists('set_time_limit')) {
            @set_time_limit(0);
        }
        @ignore_user_abort();

        $i = serendipity_syncThumbs($deleteThumbs);
        $data['print_SYNC_DONE'] = sprintf(SYNC_DONE, $i);
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

        $i = serendipity_generateThumbs();
        $data['print_RESIZE_DONE'] = sprintf(RESIZE_DONE, $i);
        flush();
        break;

    case 'doDelete':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDelete')) {
            break;
        }

        $messages = array();
        $data['switched_output'] = true;
        $data['is_doDelete']     = true;
        $messages[] = serendipity_deleteImage($serendipity['GET']['fid']);
        $messages[] = sprintf(RIP_ENTRY, $serendipity['GET']['fid']);

        showMediaLibrary($messages);
        unset($messages);

    case 'doMultiDelete':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDelete')) {
            break;
        }

        $messages = array();
        $parts = explode(',', $serendipity['GET']['id']);
        $data['switched_output']  = true;
        $data['is_doMultiDelete'] = true;
        foreach($parts AS $id) {
            $id = (int)$id;
            if ($id > 0) {
                $image = serendipity_fetchImageFromDatabase($id);
                $messages[] = serendipity_deleteImage((int)$id);
                $messages[] = sprintf(RIP_ENTRY, $image['id'] . ' - ' . htmlspecialchars($image['realname']));
            }
        }
        showMediaLibrary($messages);
        unset($messages);

    case 'delete':
        $file     = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);

        if (!is_array($file) || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        $data['case_delete'] = true;
        $data['is_delete']   = true;
        if (!isset($serendipity['adminFile'])) {
            $serendipity['adminFile'] = 'serendipity_admin.php';
        }
        $abortLoc = $serendipity['serendipityHTTPPath'] . $serendipity['adminFile'] . '?serendipity[adminModule]=images';
        $newLoc   = $abortLoc . '&serendipity[adminAction]=doDelete&serendipity[fid]=' . (int)$serendipity['GET']['fid'] . '&' . serendipity_setFormToken('url');
        $data['file']     = $file['name'] . '.' . $file['extension'];
        $data['abortLoc'] = $abortLoc;
        $data['newLoc']   = $newLoc;
        break;

    case 'multidelete':
        if (!serendipity_checkFormToken() || !is_array($serendipity['POST']['multiDelete'])) {
            break;
        }

        $ids = '';
        $data['rip_image']        = array();
        $data['case_multidelete'] = true;
        $data['is_multidelete']   = true;
        foreach($serendipity['POST']['multiDelete'] AS $idx => $id) {
            $ids .= (int)$id . ',';
            $image = serendipity_fetchImageFromDatabase($id);
            $data['rip_image'][] = sprintf(DELETE_SURE, $image['id'] . ' - ' . htmlspecialchars($image['realname']));
        }
        if (!isset($serendipity['adminFile'])) {
            $serendipity['adminFile'] = 'serendipity_admin.php';
        }
        $abortLoc = $serendipity['serendipityHTTPPath'] . $serendipity['adminFile'] . '?serendipity[adminModule]=images';
        $newLoc = $serendipity['serendipityHTTPPath'] . $serendipity['adminFile'] . '?' . serendipity_setFormToken('url') . '&amp;serendipity[action]=admin&amp;serendipity[adminModule]=images&amp;serendipity[adminAction]=doMultiDelete&amp;serendipity[id]=' . $ids;
        $data['switched_output'] = true;
        $data['abortLoc']        = $abortLoc;
        $data['newLoc']          = $newLoc;
        break;

    case 'rename':
        $data['case_rename'] = true;
        $serendipity['GET']['fid'] = (int)$serendipity['GET']['fid'];
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);
        $serendipity['GET']['newname'] = serendipity_uploadSecure($serendipity['GET']['newname'], true);

        if (!is_array($file) || !serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        if (!serendipity_moveMediaDirectory(null, $serendipity['GET']['newname'], 'file', $serendipity['GET']['fid'], $file)) {
            $data['go_back'] = true;
            break;
        }
        break;

    case 'properties':
        $data['case_properties'] = true;
        $new_media = array(array('image_id' => $serendipity['GET']['fid']));
        serendipity_showPropertyForm($new_media);
        break;

    case 'add':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesAdd')) {
            return;
        }
        $data['case_add'] = true;
        $messages = array();
        if ($serendipity['POST']['adminSubAction'] == 'properties') {
            $properties        = serendipity_parsePropertyForm();
            $image_id          = $properties['image_id'];
            $created_thumbnail = true;
            break;
        }

        $messages[] = '<div class="image_add"><b>' . ADDING_IMAGE . '</b></div>';

        $authorid = (isset($serendipity['POST']['all_authors']) && $serendipity['POST']['all_authors'] == 'true') ? '0' : $serendipity['authorid'];

        $new_media = array();
    
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

        ob_start();
        showMediaLibrary($messages, true);
        $data['showML_add'] = ob_get_contents();
        ob_end_clean();        
        break;


    case 'directoryDoDelete':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDirectories')) {
            return;
        }

        $data['case_directoryDoDelete'] = true;
        $new_dir = serendipity_uploadSecure($serendipity['GET']['dir'], true);
        if (is_dir($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $new_dir)) {
            if (!is_writable($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $new_dir)) {
                $data['print_DIRECTORY_WRITE_ERROR'] = sprintf(DIRECTORY_WRITE_ERROR, $new_dir);
            } else {
                ob_start();
                // Directory exists and is writable. Now dive within subdirectories and kill 'em all.
                serendipity_killPath($serendipity['serendipityPath'] . $serendipity['uploadPath'], $new_dir, (isset($serendipity['POST']['nuke']) ? true : false));
                $data['ob_serendipity_killPath'] = ob_get_contents();
                ob_end_clean();        
           }
        } else {
            $data['print_ERROR_NO_DIRECTORY'] = sprintf(ERROR_NO_DIRECTORY, $new_dir);
        }

        serendipity_plugin_api::hook_event('backend_directory_delete', $new_dir);
        break;

    case 'directoryEdit':
        if (!serendipity_checkPermission('adminImagesDirectories')) {
            return;
        }

        $data['case_directoryEdit'] = true;
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
                //is this possible?
                ob_start();
                serendipity_moveMediaDirectory($oldDir, $newDir);
                $data['ob_serendipity_moveMediaDirectory'] = ob_get_contents();
                ob_end_clean();        
                $use_dir = $newDir;
            }
            serendipity_ACLGrant(0, 'directory', 'read', $serendipity['POST']['read_authors'], $use_dir);
            serendipity_ACLGrant(0, 'directory', 'write', $serendipity['POST']['write_authors'], $use_dir);
            $data['print_SETTINGS_SAVED_AT'] = sprintf(SETTINGS_SAVED_AT, serendipity_strftime('%H:%M:%S'));
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
        $data['groups']       = $groups;
        $data['use_dir']      = $use_dir;
        $data['formtoken']    = serendipity_setFormToken();
        $data['dir']          = htmlspecialchars($serendipity['GET']['dir']);
        $data['rgroups']      = (isset($read_groups[0]) ? true : false);
        $data['wgroups']      = (isset($write_groups[0]) ? true : false);
        $data['read_groups']  = $read_groups;
        $data['write_groups'] = $write_groups;
        break;

    case 'directoryDelete':
        if (!serendipity_checkPermission('adminImagesDirectories')) {
            return;
        }
        $data['case_directoryDelete'] = true;
        $data['dir']          = htmlspecialchars($serendipity['GET']['dir']);
        $data['formtoken']    = serendipity_setFormToken();
        $data['basename_dir'] = basename(htmlspecialchars($serendipity['GET']['dir']));
        break;

    case 'directoryDoCreate':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDirectories')) {
            return;
        }

        $data['case_directoryDoCreate'] = true;
        $new_dir = serendipity_uploadSecure($serendipity['POST']['parent'] . '/' . $serendipity['POST']['name'], true);
        $new_dir = str_replace(array('..', '//'), array('', '/'), $new_dir);
        $nd      = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $new_dir;
        serendipity_plugin_api::hook_event('backend_directory_create', $nd);

        /* TODO: check if directory already exist */
        if (is_dir($nd) || @mkdir($nd)) {
            $data['print_DIRECTORY_CREATED'] = sprintf(DIRECTORY_CREATED, $serendipity['POST']['name']);
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
            $data['print_DIRECTORY_WRITE_ERROR'] = sprintf(DIRECTORY_WRITE_ERROR, $new_dir);
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
        $data['case_directoryCreate'] = true;
        $data['formtoken'] = serendipity_setFormToken();
        $data['folders']   = $folders;
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
        $data['case_directorySelect'] = true;
        $data['folders']   = $folders;
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
        $data['case_addSelect'] = true;

        $form_hidden = '';
        if (isset($image_selector_addvars) && is_array($image_selector_addvars)) {
            // These variables may come from serendipity_admin_image_selector.php to show embedded upload form
            foreach($image_selector_addvars AS $imgsel_key => $imgsel_val) {
                $form_hidden .= '          <input type="hidden" name="serendipity[' . htmlspecialchars($imgsel_key) . ']" value="' . htmlspecialchars($imgsel_val) . '" />' . "\n";
            }
        }

        $mediaFiles = array(
            'token'             => serendipity_setFormToken(),
            'form_hidden'       => $form_hidden,
            'folders'           => $folders,
            'only_path'         => $serendipity['GET']['only_path'],
            'max_file_size'     => $serendipity['maxFileSize'],
            'maxImgHeight'      => $serendipity['maxImgHeight'],
            'maxImgWidth'       => $serendipity['maxImgWidth'],
        );
        // ToDo later: merge $data and $media
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

        $data['case_rotateCW'] = true;
        if (serendipity_rotateImg($serendipity['GET']['fid'], -90)) {
            $data['rotate_img_done'] = true;
            $data['adminFile_redirect'] = $serendipity['adminFile_redirect'];
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

        $data['case_rotateCCW'] = true;
        if (serendipity_rotateImg($serendipity['GET']['fid'], 90)) {
            $data['rotate_img_done'] = true;
            $data['adminFile_redirect'] = $serendipity['adminFile_redirect'];
        }
        break;

    case 'scale':
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);

        if (!is_array($file) || !serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        $data['case_scale'] = true;
        $data['print_SCALING_IMAGE'] = sprintf(
          SCALING_IMAGE,
          $file['path'] . $file['name'] .'.'. $file['extension'],
          (int)$serendipity['GET']['width'],
          (int)$serendipity['GET']['height']
        );

        $data['print_serendipity_scaleImg'] = serendipity_scaleImg($serendipity['GET']['fid'], $serendipity['GET']['width'], $serendipity['GET']['height']);
        break;

    case 'scaleSelect':
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);

        if (!is_array($file) || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        $data['case_scaleSelect'] = true;
        $s = getimagesize($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] .'.'. $file['extension']);
        $data['img_width']  = $s[0];
        $data['img_height'] = $s[1];

        $data['print_RESIZE_BLAHBLAH'] = sprintf(RESIZE_BLAHBLAH, htmlspecialchars($serendipity['GET']['fname']));
        $data['print_ORIGINAL_SIZE']   = sprintf(ORIGINAL_SIZE, $s[0],$s[1]);
        $data['formtoken']             = serendipity_setFormToken();
        $data['file']                  = $serendipity['uploadHTTPPath'] . $file['path'] . $file['name'] .'.'. $file['extension'];
        break;

    default:
        $data['case_default'] = true;
        ob_start();
        showMediaLibrary();
        $data['showML_def'] = ob_get_contents();
        ob_end_clean();
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
            if(newname = prompt('<?php echo ENTER_NEW_NAME ?>' + fname, fname)) {
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

$data['get']['fid'] = $serendipity['GET']['fid']; // don't trust {$smarty.get.vars} if not proofed, as we often change GET vars via serendipty['GET'] by runtime
$data['get']['only_path'] = $serendipity['GET']['only_path']; // we dont need other GET vars in images.inc.tpl

$serendipity['smarty']->assign($data);
$tpldir = ( !defined('SWITCH_TEMPLATE_VERSION') )  ? 'tplold' : 'tpl';
$tfile = dirname(__FILE__) . "/$tpldir/images.inc.tpl";
$content = $serendipity['smarty']->fetch('file:'. $tfile); // short notation with Smarty3 in S9y 1.7 and up
echo $content;

/* vim: set sts=4 ts=4 expandtab : */

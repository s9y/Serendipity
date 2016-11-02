<?php

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

// No echo output here, before the switch, since that matters renaming alerts!

// unset adminAction type to default, if an image was bulkmoved and the origin page reloaded
if (!is_array($serendipity['POST']) && $serendipity['GET']['adminAction'] == 'multidelete') {
    unset($serendipity['GET']['adminAction']);
}
// Listens on toggle_dir STRICT to list items per directory, or include all sub directory items
if (empty($serendipity['GET']['toggle_dir']) && empty($serendipity['COOKIE']['serendipity_toggle_dir'])) {
    $serendipity['GET']['toggle_dir'] = 'no'; // default
}
if (!empty($serendipity['COOKIE']['serendipity_toggle_dir'])) {
    serendipity_restoreVar($serendipity['COOKIE']['serendipity_toggle_dir'], $serendipity['GET']['toggle_dir']);
}

switch ($serendipity['GET']['adminAction']) {

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
        $data['print_SYNC_DONE'] = sprintf(SYNC_DONE, $i);
        flush();

        $i = serendipity_generateThumbs();
        $data['print_RESIZE_DONE'] = sprintf(RESIZE_DONE, $i);
        flush();
        break;

    case 'doDelete':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDelete')) {
            break;
        }

        $messages = array();
        $data['case_do_delete'] = true;
        $messages[] = serendipity_deleteImage($serendipity['GET']['fid']);
        $messages[] = sprintf('<span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span> ' . RIP_ENTRY . "</span>\n", $serendipity['GET']['fid']);

        $data['messages'] = $messages;
        unset($messages);
        break;

    case 'doMultiDelete':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDelete')) {
            break;
        }

        $messages = array();
        $parts = explode(',', $serendipity['GET']['id']);
        $data['case_do_multidelete'] = true;
        foreach($parts AS $id) {
            $id = (int)$id;
            if ($id > 0) {
                $image = serendipity_fetchImageFromDatabase($id);
                $messages[] = serendipity_deleteImage((int)$id);
                $messages[] = sprintf('<span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span> ' . RIP_ENTRY . "</span>\n", $image['id'] . ' - ' . serendipity_specialchars($image['realname']));
            }
        }
        $data['showML'] = showMediaLibrary();
        $data['messages'] = $messages;
        unset($messages);
        break;

    case 'delete':
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);

        if (!is_array($file) || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        $data['case_delete'] = true;
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
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDirectories')) {
            return; // blank content page, but default token check parameter is presenting a XSRF message when false
        }
        if (!is_array($serendipity['POST']['multiDelete']) && isset($_POST['toggle_move'])) {
            echo '<div class="msg_notice"><span class="icon-attention-circled" aria-hidden="true"></span> ' . sprintf(MULTICHECK_NO_ITEM, $_SERVER['HTTP_REFERER']) . '</div>'."\n";
            break;
        }
        if (is_array($serendipity['POST']['multiDelete']) && isset($serendipity['POST']['oldDir']) && empty($serendipity['POST']['newDir']) && isset($_POST['toggle_move'])) {
            echo '<div class="msg_notice"><span class="icon-attention-circled" aria-hidden="true"></span> ' . sprintf(MULTICHECK_NO_DIR, $_SERVER['HTTP_REFERER']) . '</div>'."\n";
            break;
        }
        // case bulk multimove (leave the fake oldDir being send as an empty dir)
        if (isset($serendipity['POST']['oldDir']) && !empty($serendipity['POST']['newDir'])) {
            $messages = array();
            $multiMoveImages = $serendipity['POST']['multiDelete']; // The 'multiDelete' key name should better be renamed to 'multiCheck', but this would need to change 2k11/admin/serendipity_editor.js, images.inc.tpl, media_items.tpl, media_pane.tpl and this file
            unset($serendipity['POST']['multiDelete']);

            $oDir = ''; // oldDir is relative to Uploads/, since we can not specify a directory of a ML bulk move directly
            $nDir = serendipity_specialchars((string)$serendipity['POST']['newDir'] . '/'); // relative to Uploads/

            if ($oDir != $nDir) {
                foreach($multiMoveImages AS $mkey => $move_id) {
                    $file = serendipity_fetchImageFromDatabase((int)$move_id);
                    $oDir = $file['path']; // this now is the exact oldDir path of this ID
                    if (serendipity_moveMediaDirectory($oDir, $nDir, 'file', (int)$move_id, $file)) {
                        $messages[] = sprintf('<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> ' . MEDIA_DIRECTORY_MOVED . "</span>\n", $nDir);
                    } else {
                        $messages[] = sprintf('<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . MEDIA_DIRECTORY_MOVE_ERROR . "</span>\n", $nDir);
                    }
                }
            }
            $data['messages'] = $messages;
            unset($messages);
            // remember to return to last selected media library directory
            serendipity_restoreVar($serendipity['COOKIE']['serendipity_only_path'], $serendipity['GET']['only_path']);
            // fall back
            $data['case_default'] = true;
            $data['showML'] = showMediaLibrary(true); // the true drives us back to selected directory :)
            break;
        }

        // case bulk multidelete
        $ids = '';
        $data['rip_image']        = array();
        $data['case_multidelete'] = true;
        foreach($serendipity['POST']['multiDelete'] AS $idx => $id) {
            $ids .= (int)$id . ',';
            $image = serendipity_fetchImageFromDatabase($id);
            $data['rip_image'][] = sprintf(DELETE_SURE, $image['id'] . ' - ' . serendipity_specialchars($image['realname']));
        }
        if (!isset($serendipity['adminFile'])) {
            $serendipity['adminFile'] = 'serendipity_admin.php';
        }
        $abortLoc = $serendipity['serendipityHTTPPath'] . $serendipity['adminFile'] . '?serendipity[adminModule]=images';
        $newLoc   = $serendipity['serendipityHTTPPath'] . $serendipity['adminFile'] . '?' . serendipity_setFormToken('url') . '&amp;serendipity[action]=admin&amp;serendipity[adminModule]=images&amp;serendipity[adminAction]=doMultiDelete&amp;serendipity[id]=' . $ids;
        $data['case_confirm_deletion'] = true;
        $data['abortLoc'] = $abortLoc;
        $data['newLoc']   = $newLoc;
        break;

    case 'rename':
        $serendipity['GET']['fid'] = (int)$serendipity['GET']['fid'];
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);

        if (LANG_CHARSET == 'UTF-8') {
             // yeah, turn on content to be a real utf-8 string, which it isn't at this point! Else serendipity_makeFilename() can not work!
             $serendipity['GET']['newname'] = utf8_encode($serendipity['GET']['newname']);
        }
        $serendipity['GET']['newname'] = str_replace(' ', '_', $serendipity['GET']['newname']); // keep serendipity_uploadSecure(URL) whitespace convert behaviour, when using serendipity_makeFilename()
        $serendipity['GET']['newname'] = serendipity_uploadSecure(serendipity_makeFilename($serendipity['GET']['newname']), true);

        if (!is_array($file) || !serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDelete') ||
           (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }
        // since this is a javascript action only, all event success/error action messages have moved into js
        serendipity_moveMediaDirectory(null, $serendipity['GET']['newname'], 'file', $serendipity['GET']['fid'], $file);
        break;

    case 'properties':
        $data['case_properties'] = true;
        $new_media = array(array('image_id' => $serendipity['GET']['fid']));
        echo serendipity_showPropertyForm($new_media);
        break;

    case 'add':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesAdd')) {
            return;
        }
        $data['case_add'] = true;
        $messages = array();
        if ($serendipity['POST']['adminSubAction'] == 'properties') {
            serendipity_restoreVar($serendipity['COOKIE']['serendipity_only_path'], $serendipity['GET']['only_path']); // restore last set directory path, see true parameter
            $properties        = serendipity_parsePropertyForm();
            $image_id          = $properties['image_id'];
            $created_thumbnail = true; //??
            $data['showML']    = showMediaLibrary(true); // in this case we do not need the location.href (removed)
            $propdone          = sprintf(MEDIA_PROPERTIES_DONE, $image_id);
            $data['messages']  = '<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> '.DONE.'! ' . $propdone . "</span>\n";
            break;
        }

        $messages[] = '<span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span> ' . ADDING_IMAGE . "</span>\n";

        $authorid = 0; // Only use access-control based on media directories, not images themselves

        $new_media = array();

        $serendipity['POST']['imageurl'] = serendipity_specialchars($serendipity['POST']['imageurl']);

        // First find out whether to fetch a hotlink file or accept an upload
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

            $tfile = str_replace(' ', '_', basename($tfile)); // keep serendipity_uploadSecure(URL) whitespace convert behaviour, when using serendipity_makeFilename()
            $tfile = serendipity_uploadSecure(serendipity_makeFilename($tfile));

            if (serendipity_isActiveFile($tfile)) {
                $messages[] = sprintf('<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . ERROR_FILE_FORBIDDEN . "</span>\n", $tfile);
                break;
            }

            $serendipity['POST']['target_directory'][$tindex] = serendipity_uploadSecure($serendipity['POST']['target_directory'][$tindex], true, true);
            $target = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $serendipity['POST']['target_directory'][$tindex] . $tfile;

            if (!serendipity_checkDirUpload($serendipity['POST']['target_directory'][$tindex])) {
                $messages[] = '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . PERM_DENIED . "</span>\n";
                return;
            }

            $realname = $tfile;
            if (file_exists($target)) {
                $messages[] = '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . $target . ' - ' . ERROR_FILE_EXISTS_ALREADY . "</span>\n";
                $realname = serendipity_imageAppend($tfile, $target, $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $serendipity['POST']['target_directory'][$tindex]);
            }

            require_once S9Y_PEAR_PATH . 'HTTP/Request2.php';
            $options = array('follow_redirects' => true, 'max_redirects' => 5);
            serendipity_plugin_api::hook_event('backend_http_request', $options, 'image');
            serendipity_request_start();
            if (version_compare(PHP_VERSION, '5.6.0', '<')) {
                // On earlier PHP versions, the certificate validation fails. We deactivate it on them to restore the functionality we had with HTTP/Request1
                $options['ssl_verify_peer'] = false;
            }

            if (!serendipity_url_allowed($serendipity['POST']['imageurl'])) {
                 $messages[] = sprintf('<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . REMOTE_FILE_INVALID . "</span>\n", $serendipity['POST']['imageurl']);
            } else {
                $req = new HTTP_Request2($serendipity['POST']['imageurl'], HTTP_Request2::METHOD_GET, $options);

                // Try to get the URL
                try {
                    $response = $req->send();
                    if ($response->getStatus() != '200') {
                        throw new HTTP_Request2_Exception('could not fetch image: status != 200');
                    }
                    // Fetch file
                    $fContent = $response->getBody();

                    $fUrl = $response->getEffectiveUrl();
                    if (!serendipity_url_allowed($fUrl)) {
                        $messages[] = sprintf('<span class="msg_error"><span class="icon-attention-circled"></span> ' . REMOTE_FILE_INVALID . "</span>\n", $fUrl);
                    } elseif ($serendipity['POST']['imageimporttype'] == 'hotlink') {
                        $tempfile = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . '/hotlink_' . time();
                        $fp = fopen($tempfile, 'w');
                        fwrite($fp, $fContent);
                        fclose($fp);

                        $image_id   = @serendipity_insertHotlinkedImageInDatabase($tfile, $serendipity['POST']['imageurl'], $authorid, null, $tempfile);
                        $messages[] = sprintf('<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> ' . HOTLINK_DONE . "</span>\n", $serendipity['POST']['imageurl'] , $tfile .'');
                        serendipity_plugin_api::hook_event('backend_image_addHotlink', $tempfile);
                    } else {
                        $fp = fopen($target, 'w');
                        fwrite($fp, $fContent);
                        fclose($fp);

                        $messages[] = sprintf('<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> ' . FILE_FETCHED . "</span>\n", $serendipity['POST']['imageurl'] , $tfile . '');

                        if (serendipity_checkMediaSize($target)) {
                            $thumbs = array(array(
                                'thumbSize' => $serendipity['thumbSize'],
                                'thumb'     => $serendipity['thumbSuffix']
                            ));
                            serendipity_plugin_api::hook_event('backend_media_makethumb', $thumbs);

                            foreach($thumbs as $thumb) {
                                // Create thumbnail
                                if ( $created_thumbnail = serendipity_makeThumbnail($tfile, $serendipity['POST']['target_directory'][$tindex], $thumb['thumbSize'], $thumb['thumb']) ) {
                                    $messages[] = '<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> ' . THUMB_CREATED_DONE . "</span>\n";
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
                } catch (HTTP_Request2_Exception $e) {
                     $messages[] = sprintf('<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . REMOTE_FILE_NOT_FOUND . "</span>\n", $serendipity['POST']['imageurl']);
                }
            }
        } else {
            if (!is_array($_FILES['serendipity']['name']['userfile'])) {
                break;
            }

            foreach($_FILES['serendipity']['name']['userfile'] AS $idx => $uploadfiles) {
                if (! is_array($uploadfiles)) {
                    $uploadfiles = array($uploadfiles);
                }
                $uploadFileCounter=-1;
                foreach($uploadfiles AS $uploadfile) {
                    $uploadFileCounter++;
                    $target_filename = $serendipity['POST']['target_filename'][$idx];
                    $uploadtmp  = $_FILES['serendipity']['tmp_name']['userfile'][$idx];
                    if (is_array($uploadtmp)) {
                        $uploadtmp = $uploadtmp[$uploadFileCounter];
                    }
                    if (!empty($target_filename)) {
                        $tfile = $target_filename;
                    } elseif (!empty($uploadfile)) {
                        $tfile = $uploadfile;
                    } else {
                        // skip empty array
                        continue;
                    }

                    $tfile = str_replace(' ', '_', basename($tfile)); // keep serendipity_uploadSecure(URL) whitespace convert behaviour, when using serendipity_makeFilename()
                    $tfile = serendipity_uploadSecure(serendipity_makeFilename($tfile));

                    if (serendipity_isActiveFile($tfile)) {
                        $messages[] = '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . ERROR_FILE_FORBIDDEN .' '. $tfile . "</span>\n";
                        continue;
                    }

                    $serendipity['POST']['target_directory'][$idx] = serendipity_uploadSecure($serendipity['POST']['target_directory'][$idx], true, true);

                    if (!serendipity_checkDirUpload($serendipity['POST']['target_directory'][$idx])) {
                        $messages[] = '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . PERM_DENIED . "</span>\n";
                        continue;
                    }

                    $target = $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $serendipity['POST']['target_directory'][$idx] . $tfile;

                    $realname = $tfile;
                    if (file_exists($target)) {
                        $messages[] = '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . $target . ' - ' . ERROR_FILE_EXISTS_ALREADY . "</span>\n";
                        $realname   = serendipity_imageAppend($tfile, $target, $serendipity['serendipityPath'] . $serendipity['uploadPath'] . $serendipity['POST']['target_directory'][$idx]);
                    }

                    // Accept file
                    if (is_uploaded_file($uploadtmp) && serendipity_checkMediaSize($uploadtmp) && move_uploaded_file($uploadtmp, $target)) {
                        $messages[] = sprintf('<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> ' . FILE_UPLOADED . "</span>\n", $uploadfile , $target);
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
                                $messages[] = '<span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> ' . THUMB_CREATED_DONE . "</span>\n";
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
                        // necessary for the ajax-uplaoder to show upload errors
                        header("Internal Server Error", true, 500);
                        $messages[] = '<span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> ' . ERROR_UNKNOWN_NOUPLOAD . "</span>\n";
                    }
                }
            }
        }

        if (isset($_REQUEST['go_properties'])) {
            echo serendipity_showPropertyForm($new_media);
        } else {
            $hidden = array(
                'author'   => $serendipity['serendipityUser'],
                'authorid' => $serendipity['authorid']
            );

            foreach($new_media AS $nm) {
                serendipity_insertMediaProperty('base_hidden', '', $nm['image_id'], $hidden);
            }
            $data['showML'] = showMediaLibrary(true);
        }
        $data['messages'] = $messages;
        unset($messages);
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
            // preserve moving subdir directories to serendipity_makeFilename(), preserves dir/subdir/ for example
            $_newDir = $serendipity['POST']['newDir'];
            $newfile = serendipity_makeFilename(basename($_newDir));
            $newDir  = (dirname($_newDir) != '.') ? dirname($_newDir) . '/' . $newfile : $newfile;
            $oldDir  = serendipity_uploadSecure($serendipity['POST']['oldDir']);

            if ($oldDir != $newDir) {
                //is this possible? Ian: YES! Change an already set directory.
                ob_start();
                serendipity_moveMediaDirectory($oldDir, $newDir);
                $data['messages'] = ob_get_contents();
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
        $data['dir']          = serendipity_specialchars($serendipity['GET']['dir']);
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
        $data['dir']          = serendipity_specialchars($serendipity['GET']['dir']);
        $data['formtoken']    = serendipity_setFormToken();
        $data['basename_dir'] = basename(serendipity_specialchars($serendipity['GET']['dir']));
        break;

    case 'directoryDoCreate':
        if (!serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDirectories')) {
            return;
        }

        $data['case_directoryDoCreate'] = true;

        $new_dir = serendipity_uploadSecure($serendipity['POST']['parent'] . '/' . serendipity_makeFilename($serendipity['POST']['name']), true);
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
    case 'directoryCreateSub':
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
        $data['dir']  = $serendipity['GET']['dir'];
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
        $data['folders'] = $folders;
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
                $form_hidden .= '          <input type="hidden" name="serendipity[' . serendipity_specialchars($imgsel_key) . ']" value="' . serendipity_specialchars($imgsel_val) . '" />' . "\n";
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
            'extraParems'       => serendipity_generateImageSelectorParems(),
            'manage'            => isset($serendipity['GET']['showMediaToolbar']) ? serendipity_db_bool($serendipity['GET']['showMediaToolbar']) : true,
            'multiperm'         => serendipity_checkPermission('adminImagesDirectories')
        );
        // ToDo later: merge $data and $media
        $serendipity['smarty']->assign('media', $mediaFiles);
        $serendipity['smarty']->display(serendipity_getTemplateFile('admin/media_upload.tpl', 'serendipityPath'));
        return;

    case 'rotateCW':
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);
        if (!is_array($file) || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        if (empty($serendipity['adminFile_redirect'])) {
            $serendipity['adminFile_redirect'] = serendipity_specialchars($_SERVER['HTTP_REFERER']);
        }

        $data['case_rotateCW'] = true;
        if (serendipity_rotateImg($serendipity['GET']['fid'], -90)) {
            $data['rotate_img_done']    = true;
            $data['adminFile_redirect'] = $serendipity['adminFile_redirect'];
        }
        break;

    case 'rotateCCW':
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);
        if (!is_array($file) || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        if (empty($serendipity['adminFile_redirect'])) {
            $serendipity['adminFile_redirect'] = serendipity_specialchars($_SERVER['HTTP_REFERER']);
        }

        $data['case_rotateCCW'] = true;
        if (serendipity_rotateImg($serendipity['GET']['fid'], 90)) {
            $data['rotate_img_done']    = true;
            $data['adminFile_redirect'] = $serendipity['adminFile_redirect'];
        }
        break;

    case 'scale':
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);

        if (!is_array($file) || !serendipity_checkFormToken() || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        $data['case_scale'] = true; // this allows to use the showML fallback too
        if ($serendipity['GET']['width'] == $file['dimensions_width'] && $serendipity['GET']['height'] == $file['dimensions_height']) {
            $data['messages'] = '<span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span> ' . MEDIA_RESIZE_EXISTS . '</span>';
        } else {
            $data['print_SCALING_IMAGE'] = sprintf(
                SCALING_IMAGE,
                $file['path'] . $file['name'] .'.'. $file['extension'],
                (int)$serendipity['GET']['width'],
                (int)$serendipity['GET']['height']
            );
            $data['extraParems'] = serendipity_generateImageSelectorParems();
            $scaleImg = serendipity_scaleImg($serendipity['GET']['fid'], $serendipity['GET']['width'], $serendipity['GET']['height']);
            if (!empty($scaleImg) && is_string($scaleImg)) {
                $data['scaleImgError'] = $scaleImg;
            }
            $data['is_done'] = true;
        }
        // fall back
        $data['showML'] = showMediaLibrary();
        break;

    case 'scaleSelect':
        $file = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);

        if (!is_array($file) || !serendipity_checkPermission('adminImagesDelete') || (!serendipity_checkPermission('adminImagesMaintainOthers') && $file['authorid'] != '0' && $file['authorid'] != $serendipity['authorid'])) {
            return;
        }

        $data['extraParems'] = serendipity_generateImageSelectorParems('form');
        $data['case_scaleSelect'] = true;
        $s = getimagesize($serendipity['serendipityPath'] . $serendipity['uploadPath'] . $file['path'] . $file['name'] . ($file['extension'] ? '.'. $file['extension'] : ""));
        $data['img_width']  = $s[0];
        $data['img_height'] = $s[1];

        $data['print_RESIZE_BLAHBLAH'] = sprintf(RESIZE_BLAHBLAH, serendipity_specialchars($serendipity['GET']['fname']));
        $data['print_ORIGINAL_SIZE']   = sprintf(ORIGINAL_SIZE, $s[0],$s[1]);
        $data['formtoken']             = serendipity_setFormToken();
        $data['file']                  = $serendipity['uploadHTTPPath'] . $file['path'] . $file['name'] .($file['extension'] ? '.'. $file['extension'] : "");
        break;

    case 'choose':
        $file          = serendipity_fetchImageFromDatabase($serendipity['GET']['fid']);
        $media['file'] = &$file;
        if (!is_array($file)) {
            $media['perm_denied'] = true;
            break;
        }

        serendipity_prepareMedia($file);

        $media['file']['props'] =& serendipity_fetchMediaProperties((int)$serendipity['GET']['fid']);
        serendipity_plugin_api::hook_event('media_getproperties_cached', $media['file']['props']['base_metadata'], $media['file']['realfile']);

        if ($file['is_image']) {
            $file['finishJSFunction'] = $file['origfinishJSFunction'] = 'serendipity.serendipity_imageSelector_done(\'' . serendipity_specialchars($serendipity['GET']['textarea']) . '\')';

            if (!empty($serendipity['GET']['filename_only']) && $serendipity['GET']['filename_only'] !== 'true') {
                $file['fast_select'] = true;
            }
        }
        $media = array_merge($serendipity['GET'], $media);
        $serendipity['smarty']->assignByRef('media', $media);
        echo serendipity_smarty_show('admin/media_choose.tpl', $data);
        break;

    default:
        $data['case_default'] = true;
        $data['showML'] = showMediaLibrary();
        break;

}

if (! isset($data['showML'])) {
    if (isset($_REQUEST['go_properties'])) {
        $data['showMLbutton'] = true;
    } else {
        // always having the ML available is useful when switching the filter after adding an image, thus being in the add-case (hotlink/upload)
        if (isset($serendipity['POST']['imageurl'])) {
            $data['showML'] = showMediaLibrary();
        }
    }
}

$data['get']['fid']       = $serendipity['GET']['fid']; // don't trust {$smarty.get.vars} if not proofed, as we often change GET vars via serendipty['GET'] by runtime
$data['get']['only_path'] = $serendipity['GET']['only_path'];

echo serendipity_smarty_show('admin/images.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */
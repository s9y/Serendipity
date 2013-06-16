<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

include('serendipity_config.inc.php');

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

header('Content-Type: text/html; charset=' . LANG_CHARSET);

if ($_SESSION['serendipityAuthedUser'] !== true && $serendipity['GET']['step'] != 'showItem')  {
    die(HAVE_TO_BE_LOGGED_ON);
}

if (!isset($serendipity['GET']['adminModule'])) {
    $serendipity['GET']['adminModule'] = (isset($serendipity['POST']['adminModule']) ? $serendipity['POST']['adminModule'] : '');
}

if (!isset($serendipity['GET']['step'])) {
    $serendipity['GET']['step']        = (isset($serendipity['POST']['step'])        ? $serendipity['POST']['step']        : '');
}

if (empty($serendipity['GET']['step']) && isset($serendipity['GET']['adminAction'])) {
    $serendipity['GET']['step'] = $serendipity['GET']['adminAction'];
}

serendipity_smarty_init();
if (empty($serendipity['GET']['step']) && $serendipity['GET']['page'] < 1) {
    $media = array(
        'GET_STRING' => serendipity_build_query($_GET),
        'frameset'   => true
    );
    $serendipity['smarty']->assignByRef('media', $media);
    $serendipity['smarty']->display(serendipity_getTemplateFile('admin/media_choose.tpl', 'serendipityPath'));
    return;
}

$import_vars = $serendipity['GET'];
unset($import_vars['step']);
unset($import_vars['only_path']);

$showFile = 'admin/media_choose.tpl';
$body_id = 'serendipityAdminBodyImageSelector';
if ($serendipity['GET']['step'] === 'tree') {
    $body_id = 'serendipityAdminBodyImageSelectorTree';
}

$media = array(
    'body_id'    => $body_id,
    'only_path'  => $serendipity['GET']['only_path'],
    'css'        => serendipity_rewriteURL('serendipity_admin.css'),
    'css_tree'   => serendipity_getTemplateFile('treeview/tree.css'),
    'css_front'  => serendipity_rewriteURL('serendipity.css'),
    'token_url'  => serendipity_setFormToken('url'),
    'imgID'      => (int)$serendipity['GET']['image'],
    'from'       => $serendipity['GET']['from'],
    'GET_STRING' => serendipity_build_query($import_vars, 'serendipity', '&'),
    'paths'      => serendipity_getMediaPaths()
);

switch ($serendipity['GET']['step']) {
    case '1':
        if (isset($serendipity['GET']['adminAction'])) { // Embedded upload form
            if (!empty($serendipity['POST']['textarea'])) {
                $serendipity['GET']['textarea'] = $serendipity['POST']['textarea'];
            }

            if (!empty($serendipity['POST']['htmltarget'])) {
                $serendipity['GET']['htmltarget'] = $serendipity['POST']['htmltarget'];
            }

            if (!empty($serendipity['POST']['filename_only'])) {
                $serendipity['GET']['filename_only'] = $serendipity['POST']['filename_only'];
            }

            $image_selector_addvars = array(
                'step'          => 1,
                'textarea'      => (!empty($serendipity['GET']['textarea'])      ? $serendipity['GET']['textarea']      : ''),
                'htmltarget'    => (!empty($serendipity['GET']['htmltarget'])    ? $serendipity['GET']['htmltarget']    : ''),
                'filename_only' => (!empty($serendipity['GET']['filename_only']) ? $serendipity['GET']['filename_only'] : '')
            );

            switch ($serendipity['GET']['adminAction']) {
                case 'addSelect':
                    $media['case'] = 'external';
                    ob_start();
                    include S9Y_INCLUDE_PATH . 'include/admin/images.inc.php';
                    $media['external'] = ob_get_contents();
                    ob_end_clean();
                    break 2;

                case 'add':
                    $media['case'] = 'external';
                    ob_start();
                    include S9Y_INCLUDE_PATH . 'include/admin/images.inc.php';
                    $media['external'] = ob_get_contents();
                    ob_end_clean();
                    if (isset($created_thumbnail) && isset($image_id)) {
                        $media['is_uploaded'] = true;
                        $serendipity['GET']['image'] = $media['imgID'] = (int)$image_id; // $image_id is passed from images.inc.php
                        break;
                    } else {
                        break 2;
                    }
            }
        }
        $media['case'] = 'choose';

        $file           = serendipity_fetchImageFromDatabase($serendipity['GET']['image']);
        $media['file'] = &$file;
        if (!is_array($file)) {
            $media['perm_denied'] = true;
            break;
        }

        serendipity_prepareMedia($file);

        $media['file']['props'] =& serendipity_fetchMediaProperties((int)$serendipity['GET']['image']);
        serendipity_plugin_api::hook_event('media_getproperties_cached', $media['file']['props']['base_metadata'], $media['file']['realfile']);

        if ($file['is_image']) {
            $file['finishJSFunction'] = $file['origfinishJSFunction'] = 'serendipity_imageSelector_done(\'' . htmlspecialchars($serendipity['GET']['textarea']) . '\')';

            if (!empty($serendipity['GET']['filename_only']) && $serendipity['GET']['filename_only'] !== 'true') {
                $file['fast_select'] = true;
            }
        }
        break;

    case 'directoryDoCreate':    
    case 'directoryDoDelete':        
        $is_created = true;        
        if ($serendipity['GET']['step'] == 'directoryDoDelete') {
            $is_deleted = true;        
        }
    case 'directoryCreate':    
        $serendipity['GET']['adminAction'] = $serendipity['GET']['step'];
        $media['case'] = 'external';
        ob_start();
        include S9Y_INCLUDE_PATH . 'include/admin/images.inc.php';
        if ($is_created || $is_deleted) {
            $media['is_created'] = $is_created;
            $media['is_deleted'] = $is_deleted;
            $media['new_dir']    = $new_dir;
        }
        $media['external'] = ob_get_contents();
        ob_end_clean();
        break;

    case 'tree':
        $media['case']  = 'tree';
        break;

    case 'showItem':
        serendipity_plugin_api::hook_event('frontend_media_showitem_init', $media);

        if ($media['perm_denied']) {
            break;
        }
        $media['case'] = 'showitem';
        $file          = serendipity_fetchImageFromDatabase((int)$serendipity['GET']['image']);
        $media['file'] = &$file;
        $keywords = $dprops = '';

        if (!is_array($file)) {
            $media['perm_denied'] = true;
            break;
        }

        serendipity_prepareMedia($file);

        $showfile = null;
        if (($serendipity['GET']['resizeWidth'] || $serendipity['GET']['resizeHeight']) && $serendipity['dynamicResize'] && $media['file']['is_image']) {
            $width  = (int)$serendipity['GET']['resizeWidth'];
            $height = (int)$serendipity['GET']['resizeHeight'];
            if (empty($width)) {
                $width = NULL;
            }
            if (empty($height)) {
                $height = NULL;
            }

            $showfile = $serendipity['serendipityPath'] . PATH_SMARTY_COMPILE . '/mediacache/cache_img' . (int)$serendipity['GET']['image'] . '_' . $width . '_' . $height;

            if (!file_exists($showfile)) {
                serendipity_makeThumbnail(
                    $media['file']['realname'],
                    $media['file']['path'],
                    array(
                        'width'  => $width,
                        'height' => $height
                    ),
                    $showfile,
                    true
                );
            }
        }

        $hit = serendipity_db_query("SELECT id
                                       FROM {$serendipity['dbPrefix']}references
                                      WHERE link = '" . serendipity_db_escape_string($_SERVER['HTTP_REFERER']) . "'
                                        AND entry_id = " . (int)$serendipity['GET']['image'] . "
                                        AND type = 'media'", true, 'assoc');
        if (!is_array($hit) || !isset($hit['id'])) {
            serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}references
                                              (entry_id, link, name, type)
                                       VALUES (" . (int)$serendipity['GET']['image'] . ", '" . serendipity_db_escape_string($_SERVER['HTTP_REFERER']) . "', 1, 'media')");
        } else {
            serendipity_db_query("UPDATE {$serendipity['dbPrefix']}references
                                     SET name = name + 1
                                   WHERE id   = " . (int)$hit['id']);
        }

        $curl = ($_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . ($_SERVER['HTTP_PORT'] != 80 ? ':' . $_SERVER['HTTP_PORT'] : '');
        switch($serendipity['GET']['show']) {
            case 'redirect':
                header('Status: 302 Found');
                header('Location: ' . $curl . $file['links']['imagelinkurl']);
                exit;
                break;

            case 'redirectThumb':
                header('Status: 302 Found');
                header('Location: ' . $curl . $file['show_thumb']);
                exit;
                break;

            case 'full':
                $showfile = $file['realfile'];
                break;

            case 'thumb':
                $showfile = $file['location'];
                break;
        }

        if (!empty($showfile) && file_exists($showfile)) {
            header('Content-Type: ' . $file['displaymime']);
            header('Content-Length: ' . filesize($showfile));
            header('Content-Disposition: ' . ($serendipity['GET']['disposition'] == 'attachment' ? 'attachment' : 'inline') . '; filename=' . basename($showfile));
            $fp = fopen($showfile, 'rb');
            fpassthru($fp);
            exit;
        }

        $media['file']['props'] =& serendipity_fetchMediaProperties((int)$serendipity['GET']['image']);
        serendipity_plugin_api::hook_event('media_getproperties_cached', $media['file']['props']['base_metadata'], $media['file']['realfile']);

        serendipity_parseMediaProperties($keywords, $dprops, $media['file'], $media['file']['props'], 0, false);
        serendipity_plugin_api::hook_event('frontend_media_showitem', $media);
        if ($media['perm_denied']) {
            unset($media['file']);
            unset($file);
        }
        $showFile = 'admin/media_showitem.tpl';
        break;

    case 'start':
        $media['case'] = 'start';
        break;

    case 'default':
    default:
        if (!empty($serendipity['GET']['adminAction']) && $serendipity['GET']['adminModule'] == 'images' && $serendipity['GET']['adminAction'] != 'default') {
            // Might need to set $serendipity['adminFile_redirect'] here.
            $serendipity['adminFile']          = 'serendipity_admin_image_selector.php';
            ob_start();
            include S9Y_INCLUDE_PATH . 'include/admin/images.inc.php';
            $media['external'] = ob_get_contents();
            $media['case'] = 'external';
            ob_end_clean();
            break;
        }

        $media['case'] = 'default';
        $add_url = '';
        if (!empty($serendipity['GET']['htmltarget'])) {
            $add_url .= '&amp;serendipity[htmltarget]=' . htmlspecialchars($serendipity['GET']['htmltarget']);
        }

        if (!empty($serendipity['GET']['filename_only'])) {
            $add_url .= '&amp;serendipity[filename_only]=' . htmlspecialchars($serendipity['GET']['filename_only']);
        }

        if (!isset($serendipity['thumbPerPage2'])) {
            $serendipity['thumbPerPage2'] = 3;
        }


        $media['external'] = serendipity_displayImageList(
          isset($serendipity['GET']['page'])   ? $serendipity['GET']['page']   : 1,
          $serendipity['thumbPerPage2'],
          ($serendipity['showMediaToolbar'] ? true : false),
          '?serendipity[step]=1' . $add_url . '&amp;serendipity[textarea]='. htmlspecialchars($serendipity['GET']['textarea']),
          true,
          null,
          false
        );
}

$media = array_merge($serendipity['GET'], $media);
$serendipity['smarty']->assignByRef('media', $media);
$serendipity['smarty']->display(serendipity_getTemplateFile($showFile, 'serendipityPath'));

/* vim: set sts=4 ts=4 expandtab : */
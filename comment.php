<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

#if ($_REQUEST['type'] == 'trackback') die('Disabled');

include('serendipity_config.inc.php');
include S9Y_INCLUDE_PATH . 'include/functions_entries_admin.inc.php';

header('Content-Type: text/html; charset=' . LANG_CHARSET);

if (isset($serendipity['GET']['delete'], $serendipity['GET']['entry'], $serendipity['GET']['type'])) {
    serendipity_deleteComment($serendipity['GET']['delete'], $serendipity['GET']['entry'], $serendipity['GET']['type']);
    if (serendipity_isResponseClean($_SERVER['HTTP_REFERER']) && preg_match('@^https?://' . preg_quote($_SERVER['HTTP_HOST'], '@') . '@imsU')) {
        header('Status: 302 Found');
        header('Location: '. $_SERVER['HTTP_REFERER']);
        exit;
    }
}

if (isset($serendipity['GET']['switch'], $serendipity['GET']['entry'])) {
    serendipity_allowCommentsToggle($serendipity['GET']['entry'], $serendipity['GET']['switch']);
}

if (!empty($_REQUEST['c']) && !empty($_REQUEST['hash'])) {
    $res = serendipity_confirmMail($_REQUEST['c'], $_REQUEST['hash']);
    $serendipity['view'] = 'notification';
    $serendipity['GET']['action'] = 'custom';
    $serendipity['smarty_custom_vars'] = array(
        'content_message'       => ($res ? NOTIFICATION_CONFIRM_MAIL : NOTIFICATION_CONFIRM_MAIL_FAIL),
        'subscribe_confirm_error'				=> !$res,
        'subscribe_confirm_success'				=> $res,
    );
    include S9Y_INCLUDE_PATH . 'include/genpage.inc.php';
    $serendipity['smarty']->display(serendipity_getTemplateFile('index.tpl', 'serendipityPath'));
    exit;
}

if (!empty($_REQUEST['optin'])) {
    $res = serendipity_commentSubscriptionConfirm($_REQUEST['optin']);
    $serendipity['view'] = 'notification';
    $serendipity['GET']['action'] = 'custom';
    $serendipity['smarty_custom_vars'] = array(
        'content_message'       => ($res ? NOTIFICATION_CONFIRM_SUBMAIL : NOTIFICATION_CONFIRM_SUBMAIL_FAIL),
        'subscribe_confirm_error'				=> !$res,
        'subscribe_confirm_success'				=> $res,
    );
    include S9Y_INCLUDE_PATH . 'include/genpage.inc.php';
    $serendipity['smarty']->display(serendipity_getTemplateFile('index.tpl', 'serendipityPath'));
    exit;
}

serendipity_rememberComment();

// Trackback logging. For developers: can be switched to true!
$tb_logging = false;
// Pingback logging. For developers: can be switched to true!
$pb_logging = false;

if ($pb_logging) {
    log_pingback('CONTENT_TYPE: ' . $_SERVER['CONTENT_TYPE']);
    log_pingback('HTTP_RAW_POST_DATA: ' .  $tmp);
}

if (!($type = @$_REQUEST['type'])) {
    if ($pb_logging) {
        ob_start();
        print_r($HTTP_RAW_POST_DATA);
        $tmp = ob_get_contents();
        ob_end_clean();
        log_pingback('NO TYPE HANDED!');
    }
    
    // WordPress pingbacks don't give any parameter. If it is a XML POST asume it's a pigback
    if ($_SERVER['CONTENT_TYPE'] == 'text/xml' && isset($HTTP_RAW_POST_DATA)) {
        $type = 'pingback'; 
    }
    else {
        $type = 'normal';
    }
}

if ($type == 'trackback') {
    if ($tb_logging) {
        # PHP 4.2.2 way of doing things
        ob_start();
        print_r($_REQUEST);
        $tmp = ob_get_contents();
        ob_end_clean();

        $fp = fopen('trackback2.log', 'a');
        fwrite($fp, '[' . date('d.m.Y H:i') . '] RECEIVED TRACKBACK' . "\n");
        fwrite($fp, '[' . date('d.m.Y H:i') . '] ' . $tmp . "\n");
    }

    $uri = $_SERVER['REQUEST_URI'];
    if (isset($_REQUEST['entry_id'])) {
        $id = (int)$_REQUEST['entry_id'];
    } else if ($_REQUEST['amp;entry_id']) {
        // For possible buggy variable transmission caused by an intermediate CVS-release of s9y
        $id = (int)$_REQUEST['amp;entry_id'];
    } else if (preg_match('@/(\d+)_[^/]*$@', $uri, $matches)) {
        $id = (int)$matches[1];
    }

    if ($tb_logging) {
        fwrite($fp, '[' . date('d.m.Y H:i') . '] Match on ' . $uri . "\n");
        fwrite($fp, '[' . date('d.m.Y H:i') . '] ID: ' . $id . "\n");
        fclose($fp);
    }

    if (add_trackback($id, $_REQUEST['title'], $_REQUEST['url'], $_REQUEST['blog_name'], $_REQUEST['excerpt'])) {
        if ($tb_logging) {
            $fp = fopen('trackback2.log', 'a');
            fwrite($fp, '[' . date('d.m.Y H:i') . '] TRACKBACK SUCCESS' . "\n");
        }
        report_trackback_success();
    } else {
        if ($tb_logging) {
            $fp = fopen('trackback2.log', 'a');
            fwrite($fp, '[' . date('d.m.Y H:i') . '] TRACKBACK FAILURE' . "\n");
        }
        report_trackback_failure();
    }

    if ($tb_logging) {
        fclose($fp);
    }
} else if ($type == 'pingback') {
    if ($pb_logging) {
        log_pingback('RECEIVED PINGBACK');
        # PHP 4.2.2 way of doing things
        ob_start();
        print_r($HTTP_RAW_POST_DATA);
        $tmp = ob_get_contents();
        ob_end_clean();
        log_pingback('HTTP_RAW_POST_DATA: ' .$tmp);
    }
    if (add_pingback($_REQUEST['entry_id'], $HTTP_RAW_POST_DATA)) {
        log_pingback('PINGBACK SUCCESS');;
        report_pingback_success();
    } else {
        log_pingback('PINGBACK FAILURE');;
        report_pingback_failure();
    }
} else {
    $id = (int)(!empty($serendipity['POST']['entry_id']) ? $serendipity['POST']['entry_id'] : $serendipity['GET']['entry_id']);
    $serendipity['head_subtitle'] = COMMENTS;
    $serendipity['smarty_file'] = 'commentpopup.tpl';
    serendipity_smarty_init();

    if ($id == 0) {
        return false;
    } else {
        $serendipity['smarty']->assign('entry_id', $id);
    }

    if (isset($_GET['success']) && $_GET['success'] == 'true') {
        $serendipity['smarty']->assign(
            array(
                'is_comment_added'   => true,
                'comment_url'        => serendipity_specialchars($_GET['url']) . '&amp;serendipity[entry_id]=' . $id,
                'comment_string'     => explode('%s', COMMENT_ADDED_CLICK)
            )
        );
    } else if (!isset($serendipity['POST']['submit'])) {
        if ($serendipity['GET']['type'] == 'trackbacks') {
            $query = "SELECT title, timestamp FROM {$serendipity['dbPrefix']}entries WHERE id = '". $id ."'";
            $entry = serendipity_db_query($query);
            $entry = serendipity_archiveURL($id, $entry[0]['title'], 'baseURL', true, array('timestamp' => $entry[0]['timestamp']));

            $serendipity['smarty']->assign(
                array(
                    'is_showtrackbacks' => true,
                    'comment_url'       => $serendipity['baseURL'] . 'comment.php?type=trackback&amp;entry_id=' . $id,
                    'comment_entryurl'  => $entry
                )
            );
        } else {
            $query = "SELECT id, last_modified, timestamp, allow_comments, moderate_comments FROM {$serendipity['dbPrefix']}entries WHERE id = '" . $id . "'";
            $ca    = serendipity_db_query($query, true);
            $comment_allowed = serendipity_db_bool($ca['allow_comments']) || !is_array($ca) ? true : false;
            $serendipity['smarty']->assign(
                array(
                    'is_showcomments'    => true,
                    'is_comment_allowed' => $comment_allowed
                )
            );

            if ($comment_allowed) {
                serendipity_displayCommentForm($id, '?', NULL, $serendipity['POST'], true, serendipity_db_bool($ca['moderate_comments']), $ca);
            }
        }
    } else {
        $comment['url']       = $serendipity['POST']['url'];
        $comment['comment']   = trim($serendipity['POST']['comment']);
        $comment['name']      = $serendipity['POST']['name'];
        $comment['email']     = $serendipity['POST']['email'];
        $comment['subscribe'] = $serendipity['POST']['subscribe'];
        $comment['parent_id'] = $serendipity['POST']['replyTo'];
        if (!empty($comment['comment'])) {
            if (serendipity_saveComment($id, $comment, 'NORMAL')) {
                $sc_url = $serendipity['baseURL'] . 'comment.php?serendipity[entry_id]=' . $id . '&success=true&url=' . urlencode($_SERVER['HTTP_REFERER']);
                if (serendipity_isResponseClean($sc_url)) {
                    header('Status: 302 Found');
                    header('Location: ' . $sc_url);
                }
                exit;
            } else {
                $serendipity['smarty']->assign(
                    array(
                        'is_comment_notadded' => true,
                        'comment_url'         => serendipity_specialchars($_SERVER['HTTP_REFERER']),
                        'comment_string'      => explode('%s', COMMENT_NOT_ADDED_CLICK)
                    )
                );
            }
        } else {
            $serendipity['smarty']->assign(
                array(
                    'is_comment_empty' => true,
                    'comment_url'      => serendipity_specialchars($_SERVER['HTTP_REFERER']),
                    'comment_string'   => explode('%s', EMPTY_COMMENT)
                )
            );
        }
    }

    $serendipity['smarty']->display(serendipity_getTemplateFile($serendipity['smarty_file'], 'serendipityPath'));
}

// Debug logging for pingback receiving
function log_pingback($message){
    global $pb_logging;
    if ($pb_logging) {
        $fp = fopen('pingback.log', 'a');
        fwrite($fp, '[' . date('d.m.Y H:i') . '] ' . $message . "\n");
        fclose($fp);
    }
}
/* vim: set sts=4 ts=4 expandtab : */

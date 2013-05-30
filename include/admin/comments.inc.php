<?php # $Id$

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (!serendipity_checkPermission('adminComments')) {
    return;
}

$data = array();

$commentsPerPage = (int)(!empty($serendipity['GET']['filter']['perpage']) ? $serendipity['GET']['filter']['perpage'] : 10);
$summaryLength = 200;

$errormsg = '';

if ($serendipity['POST']['formAction'] == 'multiDelete' && sizeof($serendipity['POST']['delete']) != 0 && serendipity_checkFormToken()) {
    if ($serendipity['POST']['togglemoderate'] != '') {
        foreach ( $serendipity['POST']['delete'] as $k => $v ) {
            $ac = serendipity_approveComment($k, $v, false, 'flip');
            if ($ac > 0) {
                $errormsg .= DONE . ': '. sprintf(COMMENT_APPROVED, (int)$k);
            } else {
                $errormsg .= DONE . ': '. sprintf(COMMENT_MODERATED, (int)$k);
            }
        }
    } else {
        foreach ( $serendipity['POST']['delete'] as $k => $v ) {
             serendipity_deleteComment($k, $v);
            $errormsg .= DONE . ': '. sprintf(COMMENT_DELETED, (int)$k);
        }
    }
}


/* We are asked to save the edited comment, and we are not in preview mode */
if (isset($serendipity['GET']['adminAction']) && $serendipity['GET']['adminAction'] == 'doEdit' && !isset($serendipity['POST']['preview']) && serendipity_checkFormToken()) {
    $sql = "UPDATE {$serendipity['dbPrefix']}comments
                    SET
                        author    = '" . serendipity_db_escape_string($serendipity['POST']['name'])    . "',
                        email     = '" . serendipity_db_escape_string($serendipity['POST']['email'])   . "',
                        url       = '" . serendipity_db_escape_string($serendipity['POST']['url'])     . "',
                        " . ($serendipity['POST']['replyTo'] != $serendipity['GET']['id'] ? "parent_id = '" . serendipity_db_escape_string($serendipity['POST']['replyTo']) . "'," : '') . "
                        body      = '" . serendipity_db_escape_string($serendipity['POST']['comment']) . "'
            WHERE id = " . (int)$serendipity['GET']['id'] . " AND
                  entry_id = " . (int)$serendipity['POST']['entry_id'];
    serendipity_db_query($sql);
    serendipity_plugin_api::hook_event('backend_updatecomment', $serendipity['POST'], $serendipity['GET']['id']);
    $errormsg .= COMMENT_EDITED;
}

/* Submit a new comment */
if (isset($serendipity['GET']['adminAction']) && $serendipity['GET']['adminAction'] == 'doReply' && !isset($serendipity['POST']['preview']) && serendipity_checkFormToken()) {
    $comment = array();
    $comment['url']       = $serendipity['POST']['url'];
    $comment['comment']   = trim($serendipity['POST']['comment']);
    $comment['name']      = $serendipity['POST']['name'];
    $comment['email']     = $serendipity['POST']['email'];
    $comment['subscribe'] = $serendipity['POST']['subscribe'];
    $comment['parent_id'] = $serendipity['POST']['replyTo'];
    if (!empty($comment['comment'])) {
        if (serendipity_saveComment($serendipity['POST']['entry_id'], $comment, 'NORMAL')) {
            echo '<script type="text/javascript">alert("' . COMMENT_ADDED . '"); parent.focus(); this.close();</script>';
            echo '<noscript><p class="serendipityAdminMsgError msg_error"><img class="img_error" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />' . COMMENT_ADDED . '</p></noscript>';
            return true;
        } else {
            $errormsg .= COMMENT_NOT_ADDED;
            $serendipity['GET']['adminAction'] = 'reply';
        }
    } else {
        $errormsg .= COMMENT_NOT_ADDED;
        $serendipity['GET']['adminAction'] = 'reply';
    }
}

/* We approve a comment */
if (isset($serendipity['GET']['adminAction']) && $serendipity['GET']['adminAction'] == 'approve' && serendipity_checkFormToken()) {
    $sql = "SELECT c.*, e.title, a.email as authoremail, a.mail_comments
            FROM {$serendipity['dbPrefix']}comments c
            LEFT JOIN {$serendipity['dbPrefix']}entries e ON (e.id = c.entry_id)
            LEFT JOIN {$serendipity['dbPrefix']}authors a ON (e.authorid = a.authorid)
            WHERE c.id = " . (int)$serendipity['GET']['id']  ." AND (status = 'pending' OR status LIKE 'confirm%')";
    $rs  = serendipity_db_query($sql, true);

    if ($rs === false) {
        $errormsg .= ERROR .': '. sprintf(COMMENT_ALREADY_APPROVED, (int)$serendipity['GET']['id']);
    } else {
        serendipity_approveComment($serendipity['GET']['id'], $rs['entry_id']);
        $errormsg .= DONE . ': '. sprintf(COMMENT_APPROVED, (int)$serendipity['GET']['id']);
    }
}

if (isset($serendipity['GET']['adminAction']) && $serendipity['GET']['adminAction'] == 'pending' && serendipity_checkFormToken()) {
    $sql = "SELECT c.*, e.title, a.email as authoremail, a.mail_comments
            FROM {$serendipity['dbPrefix']}comments c
            LEFT JOIN {$serendipity['dbPrefix']}entries e ON (e.id = c.entry_id)
            LEFT JOIN {$serendipity['dbPrefix']}authors a ON (e.authorid = a.authorid)
            WHERE c.id = " . (int)$serendipity['GET']['id']  ." AND status = 'approved'";
    $rs  = serendipity_db_query($sql, true);

    if ($rs === false) {
        $errormsg .= ERROR .': '. sprintf(COMMENT_ALREADY_APPROVED, (int)$serendipity['GET']['id']);
    } else {
        serendipity_approveComment($serendipity['GET']['id'], $rs['entry_id'], true, true);
        $errormsg .= DONE . ': '. sprintf(COMMENT_MODERATED, (int)$serendipity['GET']['id']);
    }
}

/* We are asked to delete a comment */
if (isset($serendipity['GET']['adminAction']) && $serendipity['GET']['adminAction'] == 'delete' && serendipity_checkFormToken()) {
    serendipity_deleteComment($serendipity['GET']['id'], $serendipity['GET']['entry_id']);
    $errormsg .= DONE . ': '. sprintf(COMMENT_DELETED, (int)$serendipity['GET']['id']);
}

/* We are either in edit mode, or preview mode */
if (isset($serendipity['GET']['adminAction']) && ($serendipity['GET']['adminAction'] == 'edit' || $serendipity['GET']['adminAction'] == 'reply') || isset($serendipity['POST']['preview'])) {

    $serendipity['smarty_raw_mode'] = true; // Force output of Smarty stuff in the backend
    serendipity_smarty_init();

    if ($serendipity['GET']['adminAction'] == 'reply' || $serendipity['GET']['adminAction'] == 'doReply') {
        $c = serendipity_fetchComments($serendipity['GET']['entry_id'], 1, 'co.id', false, 'NORMAL', ' AND co.id=' . (int)$serendipity['GET']['id']);

        if (isset($serendipity['POST']['preview'])) {
            $c[] = array(
                      'email'     => $serendipity['POST']['email'],
                      'author'    => $serendipity['POST']['name'],
                      'body'      => $serendipity['POST']['comment'],
                      'url'       => $serendipity['POST']['url'],
                      'timestamp' => time(),
                      'parent_id' => $serendipity['GET']['id']
            );
        }
        
        $target_url = '?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=doReply&amp;serendipity[id]=' . (int)$serendipity['GET']['id'] . '&amp;serendipity[entry_id]=' . (int)$serendipity['GET']['entry_id'] . '&amp;serendipity[noBanner]=true&amp;serendipity[noSidebar]=true&amp;' . serendipity_setFormToken('url');
        $codata       = $serendipity['POST'];
        $codata['replyTo'] = (int)$serendipity['GET']['id'];
        $out        = serendipity_printComments($c);
        $serendipity['smarty']->display(serendipity_getTemplateFile('comments.tpl', 'serendipityPath'));
        
        if (!isset($codata['name'])) {
            $codata['name']  = $serendipity['serendipityRealname'];
        }

        if (!isset($codata['email'])) {
            $codata['email']  = $serendipity['serendipityEmail'];
        }
    } else {
        $target_url = '?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=doEdit&amp;serendipity[id]=' . (int)$serendipity['GET']['id'] . '&amp;serendipity[entry_id]=' . (int)$serendipity['GET']['entry_id'] . '&amp;' . serendipity_setFormToken('url');

        /* If we are not in preview, we need comment data from our database */
        if (!isset($serendipity['POST']['preview'])) {
            $comment = serendipity_db_query("SELECT * FROM {$serendipity['dbPrefix']}comments WHERE id = ". (int)$serendipity['GET']['id']);
            $codata['name']       = $comment[0]['author'];
            $codata['email']      = $comment[0]['email'];
            $codata['url']        = $comment[0]['url'];
            $codata['replyTo']    = $comment[0]['parent_id'];
            $codata['comment']    = $comment[0]['body'];
    
        /* If we are in preview, we get comment data from our form */
        } elseif (isset($serendipity['POST']['preview'])) {
            $codata['name']       = $serendipity['POST']['name'];
            $codata['email']      = $serendipity['POST']['email'];
            $codata['url']        = $serendipity['POST']['url'];
            $codata['replyTo']    = $serendipity['POST']['replyTo'];
            $codata['comment']    = $serendipity['POST']['comment'];
            $pc_data = array(
                    array(
                      'email'     => $serendipity['POST']['email'],
                      'author'    => $serendipity['POST']['name'],
                      'body'      => $serendipity['POST']['comment'],
                      'url'       => $serendipity['POST']['url'],
                      'timestamp' => time()
                    )
                  );
    
            serendipity_printComments($pc_data);
            $serendipity['smarty']->display(serendipity_getTemplateFile('comments.tpl', 'serendipityPath'));
        }
    }

    if (!empty($codata['url']) && substr($codata['url'], 0, 7) != 'http://' &&
         substr($codata['url'], 0, 8) != 'https://') {
         $codata['url'] = 'http://' . $codata['url'];
    }
                                
    serendipity_displayCommentForm(
      $serendipity['GET']['entry_id'],
      $target_url,
      NULL,
      $codata,
      false,
      false
    );

    $serendipity['smarty']->display(serendipity_getTemplateFile('commentform.tpl', 'serendipityPath'));

    return true;
}

/* Searchable fields */
$filters = array('author', 'email', 'ip', 'url', 'body', 'referer');

/* Compress the filters into an "AND" SQL query, and a querystring */
foreach ($filters as $filter) {
    $and          .= (!empty($serendipity['GET']['filter'][$filter]) ? "AND c.". $filter ." LIKE '%". serendipity_db_escape_string($serendipity['GET']['filter'][$filter]) ."%'" : "");
    $searchString .= (!empty($serendipity['GET']['filter'][$filter]) ? "&amp;serendipity[filter][". $filter ."]=". htmlspecialchars($serendipity['GET']['filter'][$filter]) : "");
}

if ($serendipity['GET']['filter']['show'] == 'approved') {
    $and          .= "AND status = 'approved'";
    $searchString .= "&amp;serendipity[filter][show]=approved";
} elseif ($serendipity['GET']['filter']['show'] == 'pending') {
    $and           .= "AND status = 'pending'";
    $searchString .= "&amp;serendipity[filter][show]=pending";
} elseif ($serendipity['GET']['filter']['show'] == 'confirm') {
    $and           .= "AND status LIKE 'confirm%'";
    $searchString .= "&amp;serendipity[filter][show]=confirm";
} else {
    $serendipity['GET']['filter']['show'] = 'all';
}

if ($serendipity['GET']['filter']['type'] == 'TRACKBACK') {
    $c_type = 'TRACKBACK';
    $searchString .= "&amp;serendipity[filter][type]=TRACKBACK";
} elseif ($serendipity['GET']['filter']['type'] == 'PINGBACK') {
    $c_type = 'PINGBACK';
    $searchString .= "&amp;serendipity[filter][type]=PINGBACK";
} elseif ($serendipity['GET']['filter']['type'] == 'NORMAL') {
    $c_type = 'NORMAL';
    $searchString .= "&amp;serendipity[filter][type]=NORMAL";
} else {
    $c_type = null;
}

if ($serendipity['GET']['filter']['type'] == 'TRACKBACK') {
    $c_type = 'TRACKBACK';
    $searchString .= "&amp;serendipity[filter][type]=TRACKBACK";
} elseif ($serendipity['GET']['filter']['type'] == 'PINGBACK') {
    $c_type = 'PINGBACK';
    $searchString .= "&amp;serendipity[filter][type]=PINGBACK";
} elseif ($serendipity['GET']['filter']['type'] == 'NORMAL') {
    $c_type = 'NORMAL';
    $searchString .= "&amp;serendipity[filter][type]=NORMAL";
} else {
    $c_type = null;
}

if ($commentsPerPage != 10) {
    $searchString .= '&amp;serendipity[filter][perpage]=' . $commentsPerPage;
}

$searchString .= '&amp;' . serendipity_setFormToken('url');

/* Paging */
$sql = serendipity_db_query("SELECT COUNT(*) AS total FROM {$serendipity['dbPrefix']}comments c WHERE 1 = 1 " . ($c_type !== null ? " AND c.type = '$c_type' " : '') . $and, true);

$totalComments = $sql['total'];
$pages = ($commentsPerPage == COMMENTS_FILTER_ALL ? 1 : ceil($totalComments/(int)$commentsPerPage));
$page = (int)$serendipity['GET']['page'];
if ( $page == 0 || $page > $pages ) {
    $page = 1;
}

$linkPrevious = 'serendipity_admin.php?serendipity[adminModule]=comments&amp;serendipity[page]='. ($page-1) . $searchString;
$linkNext     = 'serendipity_admin.php?serendipity[adminModule]=comments&amp;serendipity[page]='. ($page+1) . $searchString;
$filter_vals  = array(10, 20, 50, COMMENTS_FILTER_ALL);

if ($commentsPerPage == COMMENTS_FILTER_ALL) {
    $limit = '';
} else {
    $limit = serendipity_db_limit_sql(serendipity_db_limit(($page-1)*(int)$commentsPerPage, (int)$commentsPerPage));
}

$sql = serendipity_db_query("SELECT c.*, e.title FROM {$serendipity['dbPrefix']}comments c 
                                LEFT JOIN {$serendipity['dbPrefix']}entries e ON (e.id = c.entry_id) 
                                WHERE 1 = 1 " . ($c_type !== null ? " AND c.type = '$c_type' " : '') . $and 
                                . (!serendipity_checkPermission('adminEntriesMaintainOthers') ? 'AND e.authorid = ' . (int)$serendipity['authorid'] : '') . " 
                                ORDER BY c.id DESC $limit");

$data['commentsPerPage'] = $commentsPerPage;
$data['totalComments']   = $totalComments;
$data['pages']           = $pages;
$data['page']            = $page;
$data['linkPrevious']    = $linkPrevious;
$data['linkNext']        = $linkNext;
$data['searchString']    = $searchString;
$data['filter_vals']     = $filter_vals;
$data['sql']             = $sql;
$data['c_type']          = $c_type;

$i = 0;
$comments = array();

if(is_array($sql)) { 
    foreach ($sql as $rs) {
        $i++;
        $comment = array(
            'fullBody'  => $rs['body'],
            'summary'   => serendipity_mb('substr', $rs['body'], 0, $summaryLength),
            'status'    => $rs['status'],
            'type'      => $rs['type'],
            'id'        => $rs['id'],
            'title'     => $rs['title'],
            'timestamp' => $rs['timestamp'],
            'pubdate'   => date("c", (int)$rs['timestamp']), /* added to comment array to support HTML5 time tags in tpl */
            'referer'   => $rs['referer'],
            'url'       => $rs['url'],
            'ip'        => $rs['ip'],
            'entry_url' => serendipity_archiveURL($rs['entry_id'], $rs['title']),
            'email'     => $rs['email'],
            'author'    => (empty($rs['author']) ? ANONYMOUS : $rs['author']),
            'entry_id'  => $rs['entry_id'],
            'subscribed'=> $rs['subscribed']
        );

        $entrylink = serendipity_archiveURL($comment['entry_id'], 'comments', 'serendipityHTTPPath', true) . '#c' . $comment['id'];
        $comment['entrylink'] = $entrylink;

        if (strlen($comment['fullBody']) > strlen($comment['summary']) ) {
            $comment['summary'] .= ' ...';
            $comment['excerpt'] = true;

            // When summary is not the full body, strip HTML tags from summary, as it might break and leave unclosed HTML.
            $comment['fullBody'] = nl2br(htmlspecialchars($comment['fullBody']));
            $comment['summary']  = nl2br(strip_tags($comment['summary']));
        } else {
            $comment['excerpt']  = false;
            $comment['fullBody'] = $comment['summary'] = nl2br(htmlspecialchars($comment['fullBody']));
        }

        serendipity_plugin_api::hook_event('backend_view_comment', $comment, '&amp;serendipity[page]='. $page . $searchString);

        $class = 'serendipity_admin_list_item_' . (($i % 2 == 0 ) ? 'even' : 'uneven');

        if ($comment['status'] == 'pending') {
            $class .= ' serendipity_admin_comment_pending'; 
            $header_class = 'serendipityAdminMsgNote serendipity_admin_comment_pending_header';
        } elseif (strstr($comment['status'], 'confirm')) {
            $class .= ' serendipity_admin_comment_pending serendipity_admin_comment_confirm'; 
            $header_class = 'serendipityAdminMsgNote serendipity_admin_comment_pending_header serendipity_admin_comment_confirm_header';
        } else {
            $header_class = '';
        }

        $comment['class'] = $class;
        $comment['header_class'] = $header_class;

        if (!empty($comment['url']) && substr($comment['url'], 0, 7) != 'http://' && substr($comment['url'], 0, 8) != 'https://') {
            $comment['url'] = 'http://' . $comment['url'];
        }
        // include all comment vars back into upper array to assign to Smarty
        $comments[] = $comment;
    }
}

/* This could be used instead, as i.e. there is no need for summary body here, as strip_tags, nl2br, etc could be done via smarty in the tpl - see dashboard PoC */
/* $class and $header_class would not be needed either, ... */
/**
    function buildCommentList($limit) {
        global $serendipity;
        
        $comments = serendipity_fetchComments(null, $limit, 'co.id DESC', true, 'NORMAL', '');
        
        if (!is_array($comments) || count($comments) == 0) {
            return;
        }

        $comment = array();
        foreach ($sql as $rs) {
            $comment[] = array(
                'body'       => htmlspecialchars($rs['body']),
                'status'     => $rs['status'],
                'type'       => $rs['type'],
                'id'         => $rs['id'],
                'title'      => htmlspecialchars($rs['title']),
                'timestamp'  => $rs['timestamp'],
                'pubdate'    => date("c", (int)$rs['timestamp']),
                'referer'    => htmlspecialchars($rs['referer']),
                'url'        => htmlspecialchars($rs['url']),
                'ip'         => htmlspecialchars($rs['ip']),
                'entry_url'  => serendipity_archiveURL($rs['entry_id'], htmlspecialchars($rs['title'])),
                'email'      => htmlspecialchars($rs['email']),
                'author'     => (empty($rs['author']) ? ANONYMOUS : htmlspecialchars($rs['author'])),
                'entry_id'   => $rs['entry_id'],
                'subscribed' => $rs['subscribed'],
                'entrylink'  => serendipity_archiveURL($rs['entry_id'], 'comments', 'serendipityHTTPPath', true) . '#c' . $rs['id'],
                'excerpt'    => ((strlen($rs['body']) > serendipity_mb('substr', $rs['body'], 0, $summaryLength) ) ? true : false),
                'delete_id'  => sprintf(COMMENT_DELETE_CONFIRM, $rs['id'], htmlspecialchars($rs['author']))
            );

            if (!empty($comment['url']) && substr($comment['url'], 0, 7) != 'http://' && substr($comment['url'], 0, 8) != 'https://') {
                $comment['url'] = 'http://' . $comment['url'];
            }
        }

        serendipity_plugin_api::hook_event('backend_view_comment', $comment, '&amp;serendipity[page]='. $page . $searchString);

        $serendipity['smarty']->assign(
                        array(  'urltoken'  => serendipity_setFormToken('url'),
                                'formtoken' => serendipity_setFormToken()
                            ));
        return $comment;
    }
**/

$data['comments']      = $comments;
$data['errormsg']      = $errormsg;
$data['urltoken']      = serendipity_setFormToken('url');
$data['formtoken']     = serendipity_setFormToken();
$data['get']['filter'] = $serendipity['GET']['filter']; // don't trust {$smarty.get.vars} if not proofed, as we often change GET vars via serendipty['GET'] by runtime

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

echo serendipity_smarty_show('admin/comments.inc.tpl', $data);

/* vim: set sts=4 ts=4 expandtab : */

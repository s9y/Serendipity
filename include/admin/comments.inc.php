<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (!serendipity_checkPermission('adminComments')) {
    return;
}

$commentsPerPage = (int)(!empty($serendipity['GET']['filter']['perpage']) ? $serendipity['GET']['filter']['perpage'] : 10);
$summaryLength = 200;

$errormsg = '';

if ($serendipity['POST']['formAction'] == 'multiDelete' && sizeof($serendipity['POST']['delete']) != 0 && serendipity_checkFormToken()) {
    if ($serendipity['POST']['togglemoderate'] != '') {
        foreach ( $serendipity['POST']['delete'] as $k => $v ) {
            $ac = serendipity_approveComment($k, $v, false, 'flip');
            if ($ac > 0) {
                $errormsg .= DONE . ': '. sprintf(COMMENT_APPROVED, (int)$k) . '<br />';
            } else {
                $errormsg .= DONE . ': '. sprintf(COMMENT_MODERATED, (int)$k) . '<br />';
            }
        }
    } else {
        foreach ( $serendipity['POST']['delete'] as $k => $v ) {
            serendipity_deleteComment($k, $v);
            $errormsg .= DONE . ': '. sprintf(COMMENT_DELETED, (int)$k) . '<br />';
        }
    }
}


/* We are asked to save the edited comment, and we are not in preview mode */
if (isset($serendipity['GET']['adminAction']) && $serendipity['GET']['adminAction'] == 'doEdit' && !isset($serendipity['POST']['preview']) && serendipity_checkFormToken()) {
    $sql = "UPDATE {$serendipity['dbPrefix']}comments
                SET
                    author   = '" . serendipity_db_escape_string($serendipity['POST']['name'])    . "',
                    email    = '" . serendipity_db_escape_string($serendipity['POST']['email'])   . "',
                    url      = '" . serendipity_db_escape_string($serendipity['POST']['url'])     . "',
                                " . ($serendipity['POST']['replyTo'] != $serendipity['GET']['id'] ? "parent_id = '" . serendipity_db_escape_string($serendipity['POST']['replyTo']) . "'," : '') . "
                    body     = '" . serendipity_db_escape_string($serendipity['POST']['comment']) . "'
                WHERE id     = " . (int)$serendipity['GET']['id'] . " AND
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
            echo '<noscript><p class="serendipityAdminMsgError serendipity_backend_msg_notice"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />' . COMMENT_ADDED . '</p></noscript>';
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
        $c          = serendipity_fetchComments($serendipity['GET']['entry_id'], 1, 'co.id', false, 'NORMAL', ' AND co.id=' . (int)$serendipity['GET']['id']);

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
        $data       = $serendipity['POST'];
        $data['replyTo'] = (int)$serendipity['GET']['id'];
        $out        = serendipity_printComments($c);
        $serendipity['smarty']->display(serendipity_getTemplateFile('comments.tpl', 'serendipityPath'));

        if (!isset($data['name'])) {
            $data['name']  = $serendipity['serendipityRealname'];
        }

        if (!isset($data['email'])) {
            $data['email']  = $serendipity['serendipityEmail'];
        }
    } else {
        $target_url = '?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=doEdit&amp;serendipity[id]=' . (int)$serendipity['GET']['id'] . '&amp;serendipity[entry_id]=' . (int)$serendipity['GET']['entry_id'] . '&amp;' . serendipity_setFormToken('url');

        /* If we are not in preview, we need data from our database */
        if (!isset($serendipity['POST']['preview'])) {
            $comment = serendipity_db_query("SELECT * FROM {$serendipity['dbPrefix']}comments WHERE id = ". (int)$serendipity['GET']['id']);
            $data['name']       = $comment[0]['author'];
            $data['email']      = $comment[0]['email'];
            $data['url']        = $comment[0]['url'];
            $data['replyTo']    = $comment[0]['parent_id'];
            $data['comment']    = $comment[0]['body'];

        /* If we are in preview, we get data from our form */
        } elseif (isset($serendipity['POST']['preview'])) {
            $data['name']       = $serendipity['POST']['name'];
            $data['email']      = $serendipity['POST']['email'];
            $data['url']        = $serendipity['POST']['url'];
            $data['replyTo']    = $serendipity['POST']['replyTo'];
            $data['comment']    = $serendipity['POST']['comment'];
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

    if (!empty($data['url']) && substr($data['url'], 0, 7) != 'http://' &&
         substr($data['url'], 0, 8) != 'https://') {
         $data['url'] = 'http://' . $data['url'];
    }

    serendipity_displayCommentForm(
        $serendipity['GET']['entry_id'],
        $target_url,
        NULL,
        $data,
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
$linkNext = 'serendipity_admin.php?serendipity[adminModule]=comments&amp;serendipity[page]='. ($page+1) . $searchString;

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

if(!empty($errormsg)) echo '<p class="serendipityAdminMsgError serendipity_backend_msg_notice"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />' . $errormsg . '</p>'; // closing admin messages

?>
<script type="text/javascript">
function FT_toggle(id) {
    if ( document.getElementById(id + '_full').style.display == '' ) {
        document.getElementById(id + '_full').style.display='none';
        document.getElementById(id + '_summary').style.display='';
        document.getElementById(id + '_text').innerHTML = '<?php echo VIEW_FULL ?>';
    } else {
        document.getElementById(id + '_full').style.display='';
        document.getElementById(id + '_summary').style.display='none';
        document.getElementById(id + '_text').innerHTML = '<?php echo HIDE ?>';
    }
    return false;
}
function invertSelection() {
    var f = document.formMultiDelete;
    for (var i = 0; i < f.elements.length; i++) {
        if( f.elements[i].type == 'checkbox' ) {
            f.elements[i].checked = !(f.elements[i].checked);
            f.elements[i].onclick();
        }
    }
}

var origborder = '';
var origwidth = '';

function highlightComment(id, checkvalue) {
    var comment = document.getElementById(id);

    if (origborder == '') {
        origborder = comment.style.borderColor;
        if (origborder == '') {
            origborder = '#FFFFFF';
        }
    }

    if (origwidth == '') {
        origwidth = comment.style.borderWidth;
        if (origwidth == '' || origwidth == 0) {
            origwidth = 1;
        }
    }

    if (checkvalue) {
        comment.style.borderColor = '#FF0000';
        comment.style.borderWidth = origwidth;
    } else {
        comment.style.borderColor = '';
        comment.style.borderWidth = origwidth;
    }
}
</script>
<form action="" method="GET" style="margin: 0">
<?php echo serendipity_setFormToken(); ?>
<input type="hidden" name="serendipity[adminModule]" value="comments" />
<input type="hidden" name="serendipity[page]" value="<?php echo $page ?>" />
<table class="serendipity_admin_filters" width="100%">
    <tr>
        <td colspan="6" class="serendipity_admin_filters_headline"><strong><?php echo FILTERS ?></strong> - <?php echo FIND_COMMENTS ?></td>
    </tr>
    <tr>
        <td><?php echo AUTHOR ?>:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][author]" size="15" value="<?php echo htmlspecialchars($serendipity['GET']['filter']['author']) ?>" /></td>
        <td><?php echo EMAIL ?>:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][email]" size="15" value="<?php echo htmlspecialchars($serendipity['GET']['filter']['email']) ?>" /></td>
        <td><?php echo URL ?>:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][url]" size="15" value="<?php echo htmlspecialchars($serendipity['GET']['filter']['url']) ?>" /></td>
    </tr>
    <tr>
        <td>IP:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][ip]" size="15" value="<?php echo htmlspecialchars($serendipity['GET']['filter']['ip']) ?>" /></td>
        <td><?php echo CONTENT ?>:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][body]" size="15" value="<?php echo htmlspecialchars($serendipity['GET']['filter']['body']) ?>" /></td>
        <td><?php echo REFERER ?>:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][referer]" size="15" value="<?php echo htmlspecialchars($serendipity['GET']['filter']['referer']) ?>" /></td>
    </tr>
    <tr>
        <td><?php echo COMMENTS; ?>:</td>
        <td><select name="serendipity[filter][perpage]">
        <?php
            $filter_vals = array(10, 20, 50, COMMENTS_FILTER_ALL);
            foreach($filter_vals AS $filter_val) { ?>
            <option value="<?php echo $filter_val; ?>" <?php echo ($commentsPerPage == $filter_val ? ' selected="selected"' : ''); ?>><?php echo $filter_val; ?></option>
        <?php
            }
        ?>
            </select></td>
        <td><?php echo COMMENTS_FILTER_SHOW ?>:</td>
        <td><select name="serendipity[filter][show]">
                <option value="all"<?php if ( $serendipity['GET']['filter']['show'] == 'all' ) echo ' selected="selected"' ?>><?php echo COMMENTS_FILTER_ALL ?></option>
                <option value="approved"<?php if ( $serendipity['GET']['filter']['show'] == 'approved' ) echo ' selected="selected"' ?>><?php echo COMMENTS_FILTER_APPROVED_ONLY ?></option>
                <option value="pending"<?php if ( $serendipity['GET']['filter']['show'] == 'pending' ) echo ' selected="selected"' ?>><?php echo COMMENTS_FILTER_NEED_APPROVAL ?></option>
                <option value="confirm"<?php if ( $serendipity['GET']['filter']['show'] == 'confirm' ) echo ' selected="selected"' ?>><?php echo COMMENTS_FILTER_NEED_CONFIRM ?></option>
            </select></td>
        <td><?php echo TYPE; ?></td>
        <td><select name="serendipity[filter][type]">
                <option value=""><?php echo COMMENTS_FILTER_ALL ?></option>
                <option value="NORMAL"<?php if ($c_type == 'NORMAL') echo ' selected="selected"' ?>><?php echo COMMENTS; ?></option>
                <option value="TRACKBACK"<?php if ($c_type == 'TRACKBACK') echo ' selected="selected"' ?>><?php echo TRACKBACKS; ?></option>
                <option value="PINGBACK"<?php if ($c_type == 'PINGBACK') echo ' selected="selected"' ?>><?php echo PINGBACKS; ?></option>
            </select></td>
    </tr>
    <tr>
        <td colspan="6" align="right"><input type="submit" name="submit" value=" - <?php echo GO ?> - " class="serendipityPrettyButton input_button" /> <?php serendipity_plugin_api::hook_event('backend_comments_top', $sql); ?></td>
    </tr>
</table>
</form>
<hr noshade="noshade" /><br />
<?php
    if (!is_array($sql)) {
        echo '<div align="center">- '. NO_COMMENTS .' -</div>';
    } else {
?>
<form action="" method="POST" name="formMultiDelete" id="formMultiDelete">
<?php echo serendipity_setFormToken(); ?>
<input type="hidden" name="serendipity[formAction]" value="multiDelete" />
<table width="100%" cellpadding="3" border="0" cellspacing="0">
<tr>
    <td align="center">
        <table width="100%" cellspacing="5" cellpadding="0" border="0">
            <tr>
                <td>
                <?php if ( $page != 1 && $page <= $pages ) { ?>
                    <a href="<?php echo $linkPrevious; ?>" class="serendipityIconLink"><img src="<?php echo serendipity_getTemplateFile('admin/img/previous.png') ?>" /><?php echo PREVIOUS ?></a>
                <?php } ?>
                </td>
                <td align="center"><?php printf(PAGE_BROWSE_COMMENTS, $page, $pages, $totalComments); ?></td>
                <td align="right">
                <?php if ( $page != $pages ) { ?>
                    <a href="<?php echo $linkNext; ?>" class="serendipityIconLinkRight"><?php echo NEXT ?><img src="<?php echo serendipity_getTemplateFile('admin/img/next.png') ?>" /></a>
                <?php } ?>
                </td>
            </tr>
        </table>
    </td>
</tr>
<?php

$i = 0;
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
    if (strlen($comment['fullBody']) > strlen($comment['summary']) ) {
        $comment['summary'] .= ' ...';
        $comment['excerpt'] = true;

        // When summary is not the full body, strip HTML tags from summary, as it might break and leave unclosed HTML.
        $comment['fullBody'] = nl2br(htmlspecialchars($comment['fullBody']));
        $comment['summary']  = nl2br(strip_tags($comment['summary']));
    } else {
        $comment['excerpt'] = false;

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


    if (!empty($comment['url']) && substr($comment['url'], 0, 7) != 'http://' &&
         substr($comment['url'], 0, 8) != 'https://') {
         $comment['url'] = 'http://' . $comment['url'];
    }

?>
<tr>
    <td class="<?php echo $header_class; ?>">
<?php   if (!empty($header_class)) { ?>
            <img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="<?php echo serendipity_getTemplateFile('admin/img/admin_msg_note.png'); ?>" alt="" />
<?php } ?>
        <a name="c<?php echo $comment['id'] ?>"></a>
        <?php echo ($comment['type'] == 'NORMAL' ? COMMENT : ($comment['type'] == 'TRACKBACK' ? TRACKBACK : PINGBACK )) . ' #'. $comment['id'] .', '. IN_REPLY_TO .' <strong><a href="' . $comment['entry_url'] . '">'. htmlspecialchars($comment['title']) .'</a></strong>, '. ON . ' ' . serendipity_formatTime('%b %e %Y, %H:%M', $comment['timestamp'])?>
    </td>
</tr>
<tr>
    <td class="serendipity_admin_list_item <?php echo $class ?>" id="comment_<?php echo $comment['id'] ?>">
        <table width="100%" cellspacing="0" cellpadding="3" border="0">
            <tr>
                <td rowspan="3" width="20" align="center"><input class="input_checkbox" type="checkbox" name="serendipity[delete][<?php echo $comment['id'] ?>]" value="<?php echo $comment['entry_id'] ?>" onclick="highlightComment('comment_<?php echo $comment['id'] ?>', this.checked)" tabindex="<?php echo $i ?>" /></td>
                <td width="40%"><strong><?php echo AUTHOR ?></strong>: <?php echo htmlspecialchars(serendipity_truncateString($comment['author'],30)) . $comment['action_author']; ?></td>
                <td><strong><?php echo EMAIL ?></strong>:
                    <?php
                        if ( empty($comment['email']) ) {
                            echo 'N/A';
                        } else {
                    ?>
                            <a href="mailto:<?php echo htmlspecialchars($comment['email']) ?>" title="<?php echo htmlspecialchars($comment['email']) ?>"><?php echo htmlspecialchars(serendipity_truncateString($comment['email'],30)) ?></a>
                            <?php if ($comment['subscribed'] == 'true') { echo '<span class="serendipity_subscription_on">(' . ACTIVE_COMMENT_SUBSCRIPTION . ')</span>'; } ?>
                    <?php } ?>
                <?php echo $comment['action_email']; ?>
                </td>
            </tr>
            <tr>
                <td width="40%"><strong>IP</strong>:
                    <?php
                        if ( empty($comment['ip']) ) {
                            echo '0.0.0.0';
                        } else {
                            echo htmlspecialchars($comment['ip']);
                        }
                    ?>
                    <?php echo $comment['action_ip']; ?>
                    </td>
                <td><strong><?php echo URL; ?></strong>:
                    <?php
                        if ( empty($comment['url']) ) {
                            echo 'N/A';
                        } else {
                    ?>
                            <a href="<?php echo htmlspecialchars($comment['url']) ?>" title="<?php echo htmlspecialchars($comment['url']) ?>" target="_blank"><?php echo htmlspecialchars(serendipity_truncateString($comment['url'],30)) ?></a>
                    <?php } ?>
                    <?php echo $comment['action_url']; ?>
                    </td>
            </tr>
            <tr>
                <td width="40%">&nbsp;</td>
                <td><strong><?php echo REFERER; ?></strong>:
                    <?php
                        if ( empty($comment['referer']) ) {
                            echo 'N/A';
                        } else {
                    ?>
                          <a href="<?php echo htmlspecialchars($comment['referer']) ?>" title="<?php echo htmlspecialchars($comment['referer']) ?>" target="_blank"><?php echo htmlspecialchars(serendipity_truncateString($comment['referer'],30)) ?></a>
                    <?php } ?>
                    <?php echo $comment['action_referer']; ?>
                    </td>
            <tr>
                <td style="border-top: 1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC" colspan="3">
                    <div id="<?php echo $comment['id'] ?>_summary"><?php echo $comment['summary'] ?></div>
                    <div id="<?php echo $comment['id'] ?>_full" style="display: none"><?php echo $comment['fullBody'] ?></div>
                </td>
            </tr>
        </table>
<?php if ($comment['status'] == 'pending' || strstr($comment['status'], 'confirm')) { ?>
          <a href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=approve&amp;serendipity[id]=<?php echo $comment['id'] ?>&amp;<?php echo serendipity_setFormToken('url'); ?>" class="serendipityIconLink" title="<?php echo APPROVE; ?>"><img src="<?php echo serendipity_getTemplateFile('admin/img/accept.png'); ?>" alt="<?php echo APPROVE ?>" /><?php echo APPROVE ?></a>
<?php } ?>
<?php if ($comment['status'] == 'approved') { ?>
          <a href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=pending&amp;serendipity[id]=<?php echo $comment['id'] ?>&amp;<?php echo serendipity_setFormToken('url'); ?>" class="serendipityIconLink" title="<?php echo SET_TO_MODERATED; ?>"><img src="<?php echo serendipity_getTemplateFile('admin/img/clock.png'); ?>" alt="<?php echo SET_TO_MODERATED ?>" /><?php echo SET_TO_MODERATED ?></a>
<?php } ?>
<?php if ($comment['excerpt']) { ?>
          <a href="#c<?php echo $comment['id'] ?>" onclick="FT_toggle(<?php echo $comment['id'] ?>); return false;" title="<?php echo VIEW; ?>" class="serendipityIconLink"><img src="<?php echo serendipity_getTemplateFile('admin/img/zoom.png'); ?>" alt="<?php echo TOGGLE_ALL; ?>" /><span id="<?php echo $comment['id'] ?>_text"><?php echo TOGGLE_ALL ?></span></a>
<?php } ?>
          <a target="_blank" href="<?php echo $entrylink; ?>" title="<?php echo VIEW; ?>" class="serendipityIconLink"><img src="<?php echo serendipity_getTemplateFile('admin/img/zoom.png'); ?>" alt="<?php echo VIEW; ?>" /><?php echo VIEW ?></a>
          <a href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=edit&amp;serendipity[id]=<?php echo $comment['id'] ?>&amp;serendipity[entry_id]=<?php echo $comment['entry_id'] ?>&amp;<?php echo serendipity_setFormToken('url'); ?>" title="<?php echo EDIT; ?>" class="serendipityIconLink"><img src="<?php echo serendipity_getTemplateFile('admin/img/edit.png'); ?>" alt="<?php echo EDIT; ?>" /><?php echo EDIT ?></a>
          <a href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=delete&amp;serendipity[id]=<?php echo $comment['id'] ?>&amp;serendipity[entry_id]=<?php echo $comment['entry_id'] ?>&amp;<?php echo serendipity_setFormToken('url'); ?>" onclick='return confirm("<?php echo sprintf(COMMENT_DELETE_CONFIRM, $comment['id'], htmlspecialchars($comment['author'])) ?>")' title="<?php echo DELETE ?>" class="serendipityIconLink"><img src="<?php echo serendipity_getTemplateFile('admin/img/delete.png'); ?>" alt="<?php echo DELETE; ?>" /><?php echo DELETE ?></a>
          <a target="_blank" onclick="cf = window.open(this.href, 'CommentForm', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1'); cf.focus(); return false;" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=reply&amp;serendipity[id]=<?php echo $comment['id'] ?>&amp;serendipity[entry_id]=<?php echo $comment['entry_id'] ?>&amp;serendipity[noBanner]=true&amp;serendipity[noSidebar]=true&amp;<?php echo serendipity_setFormToken('url'); ?>" title="<?php echo REPLY ?>" class="serendipityIconLink"><img src="<?php echo serendipity_getTemplateFile('admin/img/user_editor.png'); ?>" alt="<?php echo REPLY; ?>" /><?php echo REPLY ?></a>
          <?php echo $comment['action_more']; ?>
    </td>
</tr>
<tr>
    <td><hr noshade="noshade" /></td>
</tr>
<?php } ?>
<tr>
    <td><input type="button" name="toggle" value="<?php echo INVERT_SELECTIONS ?>" onclick="invertSelection()" class="serendipityPrettyButton input_button" /> 
    <input type="submit" name="toggle" value="<?php echo DELETE_SELECTED_COMMENTS ?>" onclick="return confirm('<?php echo COMMENTS_DELETE_CONFIRM ?>')" tabindex="<?php echo ($i+1) ?>" class="serendipityPrettyButton input_button" />
    <input type="submit" name="serendipity[togglemoderate]" value="<?php echo MODERATE_SELECTED_COMMENTS ?>" class="serendipityPrettyButton input_button" />
    </td>
</tr>
</table>
<table width="100%" cellpadding="3" border="0" cellspacing="0">
<tr>
    <td align="center">
        <table width="100%" cellspacing="5" cellpadding="0" border="0">
            <tr>
                <td>
                <?php if ( $page != 1 && $page <= $pages ) { ?>
                    <a href="<?php echo $linkPrevious; ?>" class="serendipityIconLink"><img src="<?php echo serendipity_getTemplateFile('admin/img/previous.png') ?>" /><?php echo PREVIOUS ?></a>
                <?php } ?>
                </td>
                <td align="center"><?php printf(PAGE_BROWSE_COMMENTS, $page, $pages, $totalComments); ?></td>
                <td align="right">
                <?php if ( $page != $pages ) { ?>
                    <a href="<?php echo $linkNext; ?>" class="serendipityIconLinkRight"><?php echo NEXT ?><img src="<?php echo serendipity_getTemplateFile('admin/img/next.png') ?>" /></a>
                <?php } ?>
                </td>
            </tr>
        </table>
    </td>
</tr>

</form>
<?php 
}
?>
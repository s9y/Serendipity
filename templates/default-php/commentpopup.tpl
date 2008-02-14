{if $is_xhtml}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
           "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php else: ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
           "http://www.w3.org/TR/html4/loose.dtd">
<?php endif; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang}" lang="{$lang}">
<head>
    <title>{$head_title|@default:$blogTitle} {if $head_subtitle} - <?= $GLOBALS['tpl']['head_subtitle'] ?><?php endif; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= $GLOBALS['tpl']['head_charset'] ?>" />
    <meta name="Powered-By" content="Serendipity v.<?= $GLOBALS['tpl']['head_version'] ?>" />
    <link rel="stylesheet" type="text/css" href="<?= $GLOBALS['tpl']['serendipityHTTPPath'] ?>serendipity.css.php" />
    <link rel="alternate"  type="application/rss+xml" title="<?= $GLOBALS['tpl']['blogTitle'] ?> RSS feed" href="<?= $GLOBALS['tpl']['serendipityBaseURL'] ?><?= $GLOBALS['tpl']['serendipityRewritePrefix'] ?>feeds/index.rss2" />
    <link rel="alternate"  type="application/x.atom+xml"  title="<?= $GLOBALS['tpl']['blogTitle'] ?> Atom feed"  href="<?= $GLOBALS['tpl']['serendipityBaseURL'] ?><?= $GLOBALS['tpl']['serendipityRewritePrefix'] ?>feeds/atom.xml" />
</head>

<body class="s9y_wrap" id="serendipity_comment_page">

{if $is_comment_added}

    <div class="popup_comments_message popup_comments_message_added"><?= COMMENT_ADDED ?><?= $GLOBALS['tpl']['comment_string']['0'] ?><a href="<?= $GLOBALS['tpl']['comment_url'] ?>"><?= $GLOBALS['tpl']['comment_string']['1'] ?></a><?= $GLOBALS['tpl']['comment_string']['2'] ?><a href="#" onclick="self.close()"><?= $GLOBALS['tpl']['comment_string']['3'] ?></a><?= $GLOBALS['tpl']['comment_string']['4'] ?></div>

{elseif $is_comment_notadded}

    <div class="popup_comments_message popup_comments_message_notadded"><?= COMMENT_NOT_ADDED ?><?= $GLOBALS['tpl']['comment_string']['0'] ?><a href="<?= $GLOBALS['tpl']['comment_url'] ?>"><?= $GLOBALS['tpl']['comment_string']['1'] ?></a><?= $GLOBALS['tpl']['comment_string']['2'] ?><a href="#" onclick="self.close()"><?= $GLOBALS['tpl']['comment_string']['3'] ?></a><?= $GLOBALS['tpl']['comment_string']['4'] ?></div>

{elseif $is_comment_empty}

    <div class="popup_comments_message popup_comments_message_empty"><?= $GLOBALS['tpl']['comment_string']['0'] ?><a href="#" onclick="history.go(-1)"><?= $GLOBALS['tpl']['comment_string']['1'] ?></a></div>

{elseif $is_showtrackbacks}

    <div class="serendipity_commentsTitle"><?= TRACKBACKS ?></div>
    <dl>
        <dt><strong><?= TRACKBACK_SPECIFIC ?>:</strong></dt>
        <dd><a rel="nofollow" href="<?= $GLOBALS['tpl']['comment_url'] ?>"><?= $GLOBALS['tpl']['comment_url'] ?></a></dd>

        <dt><strong><?= DIRECT_LINK ?>:</strong></dt>
        <dd><a href="<?= $GLOBALS['tpl']['comment_entryurl'] ?>"><?= $GLOBALS['tpl']['comment_entryurl'] ?></a></dd>
    </dl>

    {serendipity_printTrackbacks entry=$entry_id}

{elseif $is_showcomments}

    <div class="serendipity_commentsTitle"><?= COMMENTS ?></div>

    {serendipity_printComments entry=$entry_id}
    {if $is_comment_allowed}
        <div class="serendipity_commentsTitle"><?= ADD_COMMENT ?></div>
        <?= $GLOBALS['tpl']['COMMENTFORM'] ?>
    <?php else: ?>
        <div class="serendipity_center serendipity_msg_important"><?= COMMENTS_CLOSED ?></div>
    <?php endif; ?>

<?php endif; ?>

</body>
</html>

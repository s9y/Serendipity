<?php if ($GLOBALS['tpl']['is_embedded'] != true): ?>
<html>
<head>
    <title><?= $GLOBALS['template']->getdefault('head_title', 'blogTitle'); ?> - <?= $GLOBALS['template']->getdefault('head_subtitle', 'blogDescription'); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= $GLOBALS['tpl']['head_charset']; ?>" />
    <meta name="Powered-By" content="Serendipity v.<?= $GLOBALS['tpl']['head_version']; ?>" />
    <link rel="stylesheet" type="text/css" href="<?= $GLOBALS['tpl']['head_link_stylesheet']; ?>" />
    <link rel="alternate"  type="application/rss+xml" title="<?= $GLOBALS['tpl']['blogTitle']; ?> RSS feed" href="<?= $GLOBALS['tpl']['serendipityBaseURL']; ?><?= $GLOBALS['tpl']['serendipityRewritePrefix']; ?>feeds/index.rss2" />
    <link rel="alternate"  type="application/x.atom+xml"  title="<?= $GLOBALS['tpl']['blogTitle']; ?> Atom feed"  href="<?= $GLOBALS['tpl']['serendipityBaseURL']; ?><?= $GLOBALS['tpl']['serendipityRewritePrefix']; ?>feeds/atom.xml" />
<?php if ($GLOBALS['tpl']['entry_id']): ?>
    <link rel="pingback" href="<?= $GLOBALS['tpl']['serendipityBaseURL']; ?>comment.php?type=pingback&amp;entry_id=<?= $GLOBALS['tpl']['entry_id']; ?>" />
<?php endif; ?>

<?php serendipity_plugin_api::hook_event('frontend_header', $GLOBALS['template']); ?>
</head>

<body>
<?php else: ?>
<?php serendipity_plugin_api::hook_event('frontend_header', $GLOBALS['template']); ?>
<?php endif; ?>

<?php if ($GLOBALS['tpl']['is_raw_mode'] != true): ?>
<div id="serendipity_banner">
    <h1><a class="homelink1" href="<?= $GLOBALS['tpl']['serendipityBaseURL']; ?>"><?= $GLOBALS['template']->getdefault('head_title', 'blogTitle'); ?></a></h1>
    <h2><a class="homelink2" href="<?= $GLOBALS['tpl']['serendipityBaseURL']; ?>"><?= $GLOBALS['template']->getdefault('head_subtitle', 'blogDescription'); ?></a></h2>
</div>

<table id="mainpane">
    <tr>
<?php if ($GLOBALS['tpl']['leftSidebarElements'] > 0): ?>
        <td id="serendipityLeftSideBar" valign="top"><?php echo serendipity_plugin_api::generate_plugins('left'); ?></td>
<?php endif; ?>
        <td id="content" valign="top"><?= $GLOBALS['tpl']['CONTENT']; ?></td>
<?php if ($GLOBALS['tpl']['rightSidebarElements'] > 0): ?>
        <td id="serendipityRightSideBar" valign="top"><?php echo serendipity_plugin_api::generate_plugins('right'); ?></td>
<?php endif; ?>
    </tr>
</table>
<?php endif; ?>

<?= $GLOBALS['tpl']['raw_data']; ?>
<?php serendipity_plugin_api::hook_event('frontend_footer', $GLOBALS['template']); ?>

<?php if ($GLOBALS['tpl']['is_embedded'] != true): ?>
</body>
</html>
<?php endif; ?>


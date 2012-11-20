<?php # $Id$

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

$user = serendipity_fetchAuthor($serendipity['authorid']);

// old s9y variant
// $bookmarklet = "javascript:bm=document.selection?document.selection.createRange().text:document.getSelection();void(newwin=open('" . $serendipity['baseURL'] . "serendipity_admin.php?serendipity[adminModule]=entries&serendipity[adminAction]=new&serendipity[title]='+escape(document.title)+'&serendipity[body]='+escape(bm)+'&serendipity[url]='+escape(location.href),'new_log_entry','resizable=yes,scrollbars=yes,width=800,height=600,location=yes,status=yes'));newwin.focus();";

// non-popup variant
$bookmarklet = "javascript:if(navigator.userAgent.indexOf('Safari')%20>=%200){Q=getSelection();}else{Q=document.selection?document.selection.createRange().text:document.getSelection();}location.href='" . $serendipity['baseURL'] . "'+encodeURIComponent(document.title)+'encodeURIComponent(Q)+''+encodeURIComponent(location.href)";

// chrome-compatible, from Oliver Gassner, adapted from TextPattern. Hi guys, keep it up. :-)
$bookmarklet = "javascript:var%20d=document,w=window,e=w.getSelection,k=d.getSelection,x=d.selection,s=(e?e():(k)?k():(x?x.createRange().text:0)),f='" . $serendipity['baseURL'] . "',l=d.location,e=encodeURIComponent,p='serendipity_admin.php?serendipity[adminModule]=entries&serendipity[adminAction]=new&serendipity[title]='+e(d.title)+'&serendipity[body]='+e(s)+'&serendipity[url]='+location.href,u=f+p;a=function(){%20%20if(!w.open(u,'t','toolbar=0,resizable=1,scrollbars=1,status=1,width=800,height=800'))%20%20%20%20l.href=u;};if(/Firefox/.test(navigator.userAgent))%20%20setTimeout(a,0);else%20%20a();void(0)";

$output = array(
    'welcome'       => WELCOME_BACK . ' ' . htmlspecialchars($user[0]['realname']),
    'show_links'    => true,
    'links_title'   => FURTHER_LINKS,
    'bookmarklet'   => $bookmarklet,
    'links'         => array(
        '<a href="http://www.s9y.org/">' . FURTHER_LINKS_S9Y . '</a>',
        '<a href="http://www.s9y.org/33.html">' . FURTHER_LINKS_S9Y_DOCS . '</a>',
        '<a href="http://blog.s9y.org/">' . FURTHER_LINKS_S9Y_BLOG . '</a>',
        '<a href="http://www.s9y.org/forums/">' . FURTHER_LINKS_S9Y_FORUMS . '</a>',
        '<a href="http://spartacus.s9y.org/">' . FURTHER_LINKS_S9Y_SPARTACUS . '</a>',
        '<a href="' . $bookmarklet . '" onclick="alert(\'' . FURTHER_LINKS_S9Y_BOOKMARKLET_DESC . '\'); return false;" title="' . FURTHER_LINKS_S9Y_BOOKMARKLET_DESC . '">' . FURTHER_LINKS_S9Y_BOOKMARKLET . '</a>'
    ),
    'links_css'     => 'further_links',
    'more'          => ''
);

serendipity_plugin_api::hook_event('backend_frontpage_display', $output);

$data['output'] = $output;

if (!is_object($serendipity['smarty'])) {
    serendipity_smarty_init();
}

$serendipity['smarty']->assign($data);
$tpldir = ( !defined('SWITCH_TEMPLATE_VERSION') )  ? 'tplold' : 'tpl';
$tfile = dirname(__FILE__) . "/$tpldir/overview.inc.tpl";
$content = $serendipity['smarty']->fetch('file:'. $tfile); // short notation with Smarty3 in S9y 1.7 and up
echo $content;

/* vim: set sts=4 ts=4 expandtab : */

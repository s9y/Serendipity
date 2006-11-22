<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
/* vim: set sts=4 ts=4 expandtab : */

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

$user = serendipity_fetchAuthor($serendipity['authorid']);
$bookmarklet = "javascript:bm=document.selection?document.selection.createRange().text:document.getSelection();void(newwin=open('" . $serendipity['baseURL'] . "serendipity_admin.php?serendipity[adminModule]=entries&serendipity[adminAction]=new&serendipity[title]='+ escape(document.title) + '&serendipity[body]=' + escape(bm) +'&serendipity[url]=' + escape(location.href), 'new_log_entry','resizable=yes, scrollbars=yes, width=800, height=600, location=yes,status=yes')); newwin.focus();";

$output = array(
    'welcome'       => WELCOME_BACK . ' ' . $user[0]['realname'],
    'show_links'    => true,
    'links_title'   => FURTHER_LINKS,
    'bookmarklet'   => $bookmarklet,
    'links'         => array(
        '<a href="http://www.s9y.org/">' . FURTHER_LINKS_S9Y . '</a>',
        '<a href="http://www.s9y.org/33.html">' . FURTHER_LINKS_S9Y_DOCS . '</a>',
        '<a href="http://blog.s9y.org/">' . FURTHER_LINKS_S9Y_BLOG . '</a>',
        '<a href="http://www.s9y.org/forums/">' . FURTHER_LINKS_S9Y_FORUMS . '</a>',
        '<a href="http://php-blog.sf.net/">' . FURTHER_LINKS_S9Y_SPARTACUS . '</a>',
        '<a href="' . $bookmarklet . '" onclick="alert(\'' . FURTHER_LINKS_S9Y_BOOKMARKLET_DESC . '\'); return false;" title="' . FURTHER_LINKS_S9Y_BOOKMARKLET_DESC . '">' . FURTHER_LINKS_S9Y_BOOKMARKLET . '</a>'
    ),
    'links_css'     => 'further_links',
    'more'          => ''
);

serendipity_plugin_api::hook_event('backend_frontpage_display', $output);

echo $output['welcome'];

if ($output['show_links']) {
    echo '<div class="' . $output['links_css'] . '">' . "\n";
    echo '<p>' . $output['links_title'] . '</p>' . "\n";
    echo '<ul>' . "\n";
    foreach($output['links'] AS $link) {
        echo '<li>' . $link . '</li>' . "\n";
    }
    echo '</ul>' . "\n";
    echo '</div>' . "\n";
}

echo $output['more'];

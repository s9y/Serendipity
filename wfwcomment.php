<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

include('serendipity_config.inc.php');
$raw_post_data = file_get_contents("php://input");

if ($_REQUEST['cid'] != '' && $raw_post_data != '') {
    $comment = array();

    if (!preg_match('@<author[^>]*>(.*)</author[^>]*>@i', $raw_post_data, $name)) {
        preg_match('@<dc:creator[^>]*>(.*)</dc:creator[^>]*>@i', $raw_post_data, $name);
    }

    if (isset($name[1]) && !empty($name[1])) {
        if (preg_match('@^(.*)\((.*)\)@i', $name[1], $names)) {
            $comment['name'] = utf8_decode($names[2]);
            $comment['email'] = utf8_decode($names[1]);
        } else {
            $comment['name'] = utf8_decode($name[1]);
        }
    }

    if (preg_match('@<link[^>]*>(.*)</link[^>]*>@i', $raw_post_data, $link)) {
        $comment['url'] = utf8_decode($link[1]);
    }

    if (preg_match('@<description[^>]*>(.*)</description[^>]*>@ims', $raw_post_data, $description)) {
        if (preg_match('@^<!\[CDATA\[(.*)\]\]>@ims', $description[1], $cdata)) {
            $comment['comment'] = utf8_decode($cdata[1]);
        } else {
            $comment['comment'] = utf8_decode($description[1]);
        }

        if (!empty($comment['comment'])) {
            serendipity_saveComment($_REQUEST['cid'], $comment, 'NORMAL', 'API');
        }
    }
}

?>
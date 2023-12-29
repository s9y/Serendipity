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
            $comment['name'] = mb_convert_encoding($names[2], 'ISO-8859-1', 'UTF-8');
            $comment['email'] = mb_convert_encoding($names[1], 'ISO-8859-1', 'UTF-8');
        } else {
            $comment['name'] = mb_convert_encoding($names[1], 'ISO-8859-1', 'UTF-8');
        }
    }

    if (preg_match('@<link[^>]*>(.*)</link[^>]*>@i', $raw_post_data, $link)) {
        $comment['url'] = mb_convert_encoding($link[1], 'ISO-8859-1', 'UTF-8');
    }

    if (preg_match('@<description[^>]*>(.*)</description[^>]*>@ims', $raw_post_data, $description)) {
        if (preg_match('@^<!\[CDATA\[(.*)\]\]>@ims', $description[1], $cdata)) {
            $comment['comment'] = mb_convert_encoding($cdata[1], 'ISO-8859-1', 'UTF-8');
        } else {
            $comment['comment'] = mb_convert_encoding($description[1], 'ISO-8859-1', 'UTF-8');
        }

        if (!empty($comment['comment'])) {
            serendipity_saveComment($_REQUEST['cid'], $comment, 'NORMAL', 'API');
        }
    }
}

?>

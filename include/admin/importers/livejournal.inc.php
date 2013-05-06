<?php # $Id: generic.inc.php 717 2005-11-21 09:56:25Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# Copyright (c) 2009, Matthew Weigel
# All rights reserved.  See LICENSE file for licensing details

require_once S9Y_PEAR_PATH . 'Onyx/RSS.php';

class Serendipity_Import_LiveJournalXML extends Serendipity_Import {
    var $info        = array('software' => 'LiveJournal XML');
    var $data        = array();
    var $inputFields = array();
    var $force_recode = false;

    function Serendipity_Import_LiveJournalXML($data) {
        global $serendipity;
        $this->data = $data;
        $this->inputFields = array(array('text'    => 'LiveJournal XML',
                                         'type'    => 'input',
                                         'name'    => 'url',
                                         'default'   => $serendipity['serendipityPath'] . $serendipity['uploadPath'] . 'EVbackup.xml'),

                                   array('text'    => RSS_IMPORT_CATEGORY,
                                         'type'    => 'list',
                                         'name'    => 'category',
                                         'value'   => 0,
                                         'default' => $this->_getCategoryList()),

                                   array('text'    => STATUS,
                                         'type'    => 'list',
                                         'name'    => 'type',
                                         'value'   => 'publish',
                                         'default' => array('publish' => PUBLISH, 'draft' => DRAFT)),

                                   array('text'    => USERNAME,
                                         'type'    => 'input',
                                         'name'    => 'user',
                                         'default' => ''),

        );
    }

    function _getCategoryList() {
        $res = serendipity_fetchCategories('all');
        $ret = array(0 => NO_CATEGORY);
        if (is_array($res)) {
            foreach ($res as $v) {
                $ret[$v['categoryid']] = $v['category_name'];
            }
        }
        return $ret;
    }

    function GetChildren(&$vals, &$i) {
        $children = array();
        $cnt = sizeof($vals);
        while (++$i < $cnt) {
            // compare type
            switch ($vals[$i]['type']) {
                case 'cdata':
                    $children[] = $vals[$i]['value'];
                    break;

                case 'complete':
                    $children[] = array(
                        'tag'        => $vals[$i]['tag'],
                        'attributes' => $vals[$i]['attributes'],
                        'value'      => $vals[$i]['value']
                    );
                    break;

                case 'open':
                    $children[] = array(
                        'tag'        => $vals[$i]['tag'],
                        'attributes' => $vals[$i]['attributes'],
                        'value'      => $vals[$i]['value'],
                        'children'   => $this->GetChildren($vals, $i)
                    );
                    break;

                case 'close':
                    return $children;
            }
        }
    }

    function &parseXML(&$xml) {
        // XML functions
        $xml_string = '<?xml version="1.0" encoding="UTF-8" ?>';
        if (preg_match('@(<\?xml.+\?>)@imsU', $xml, $xml_head)) {
            $xml_string = $xml_head[1];
        }

        $encoding = 'UTF-8';
        if (preg_match('@encoding="([^"]+)"@', $xml_string, $xml_encoding)) {
            $encoding = $xml_encoding[1];
        }

        preg_match_all("@(<entry[a-z =\'0-9]*>.*</entry>)@imsU", $xml, $xml_matches);
        if (!is_array($xml_matches)) {
            return false;
        }

        $i = 0;
        $tree = array();
        $tree[$i] = array(
            'tag'        => 'entries',
            'attributes' => '',
            'value'      => '',
            'children'   => array()
        );

        foreach($xml_matches[0] as $xml_index => $xml_package) {
            $i = 0;

            switch(strtolower($encoding)) {
                case 'iso-8859-1':
                case 'utf-8':
                    $p = xml_parser_create($encoding);
                    break;

                default:
                    $p = xml_parser_create('');
            }

            xml_parser_set_option($p, XML_OPTION_CASE_FOLDING, 0);
            @xml_parser_set_option($p, XML_OPTION_TARGET_ENCODING, LANG_CHARSET);
            $xml_package = $xml_string . "\n" . $xml_package;
            xml_parse_into_struct($p, $xml_package, $vals);
            xml_parser_free($p);
            $tree[0]['children'][] = array(
                'tag'        => $vals[$i]['tag'],
                'attributes' => $vals[$i]['attributes'],
                'value'      => $vals[$i]['value'],
                'children'   => $this->GetChildren($vals, $i)
            );
            unset($vals);
        }
        
        return $tree;
    }

    function validateData() {
        return sizeof($this->data);
    }

    function getInputFields() {
        return $this->inputFields;
    }

    function getTimestamp($string) {
        if (preg_match('@(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})@', $string, $match)) {
            return mktime($match[4], $match[5], $match[6], $match[2], $match[3], $match[1]);
        } else {
            return time();
        }
    }

    function gatherComments($entrydata) {
        $comments = array();
        if (is_array($entrydata['children'])) {
            foreach($entrydata['children'] AS $idx3 => $commententry) {
                if ($commententry['tag'] == 'comment' && is_array($commententry['children'])) {
                    $comment = array(
                        'ip'       => '127.0.0.1',
                        'status'   => 'approved',
                        'name'     => $commententry['attributes']['poster'] ? $commententry['attributes']['poster'] : 'Anonymous',
                        'url'      => $commententry['attributes']['poster'] ? "http://" . $commententry['attributes']['poster'] . ".livejournal.com/" : '',
                        'email'    => '',
                        'jtalkid' => $commententry['attributes']['jtalkid'],
                        'jparentid' => $commententry['attributes']['parentid'] ? $commententry['attributes']['parentid'] : 0
                    );
                    if ($comment['name'] == $this->data['user']) {
                        if (!empty($serendipity['realname'])) {
                            $comment['name'] = $serendipity['realname'];
                        } else {
                            $comment['name'] = $serendipity['user'];
                        }
                        $comment['url'] = $serendipity['baseURL'];
                    }
                    foreach($commententry['children'] AS $idx4 => $commentdata) {
                        switch($commentdata['tag']) {
                            case 'subject':
                                $comment['title'] = $commentdata['value'];
                                break;
                            case 'body':
                                $comment['comment'] = $commentdata['value'];
                                break;
                            case 'date':
                                $comment['time'] = $this->getTimestamp($commentdata['value']);
                                break;
                        }
                    }
                    array_push($comments, $comment);
                }
            }
        }
        return $comments;
    }

    function import() {
        global $serendipity;

        if (!file_exists($this->data['url'])) {
            printf(FILE_NOT_FOUND, htmlspecialchars($this->data['url']));
            return false;
        }
        
        $file = file_get_contents($this->data['url']);
        $tree =& $this->parseXML($file);
        $serendipity['noautodiscovery'] = 1;
        
        foreach($tree[0]['children'] AS $idx => $entry) {
            if (!is_array($entry)) continue;
            if ($entry['tag'] != 'entry') {
                continue;
            }
            
            $new_entry = array(
                'allow_comments' => true,
                'extended'       => '',
                'categories'     => array(),
                'isdraft'        => ($this->data['type'] == 'draft' ? 'true' : 'false'),
                'categories'     => array($this->data['category'] => $this->data['category'])
            );
            
            if (!is_array($entry['children'])) continue;

            foreach($entry['children'] AS $idx2 => $entrydata) {
                if (!is_array($entrydata)) {
                    continue;
                }

                switch($entrydata['tag']) {
                    case 'eventtime':
                        $new_entry['timestamp'] = $this->getTimestamp($entrydata['value']);
                        break;

                    case 'date':
                        $new_entry['timestamp'] = $this->getTimestamp($entrydata['value']);
                        break;
                    
                    case 'subject':
                        $new_entry['title']     = $entrydata['value'];
                        break;
                    
                    case 'event':
                        $new_entry['body']      = $entrydata['value'];
                        break;
                    case 'comments':
                        $new_entry['comments'] = $this->gatherComments($entrydata);
                        break;
                }
            }
            $id = serendipity_updertEntry($new_entry);
            echo '<span class="msg_notice">Inserted entry #' . $id . ', "' . htmlspecialchars($new_entry['title']) . '"</span>';
            if (is_array($new_entry['comments'])) {
                $cid_map = array();
                $jids = array();
                foreach($new_entry['comments'] AS $comment) {
                    array_push($jids, $comment['jtalkid']);
                    if (array_key_exists($comment['jparentid'], $cid_map)) {
                        $comment['parent_id'] = $cid_map[$comment['jparentid']];
                    }
                    $cid = serendipity_insertComment($id, $comment);
                    $cid_map[$comment['jtalkid']] = $cid;
                }
                echo '<span class="msg_notice">Inserted comments for entry #' . $id . '</span>';
            }
            
            if (function_exists('ob_flush')) {
                @ob_flush();
            }
            if (function_exists('flush')) {
                @flush();
            }
        }

        return true;
    }
}

return 'Serendipity_Import_LiveJournalXML';

/* vim: set sts=4 ts=4 expandtab : */

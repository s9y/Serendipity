<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

require_once S9Y_PEAR_PATH . 'Onyx/RSS.php';

class Serendipity_Import_Generic extends Serendipity_Import {
    var $info        = array('software' => IMPORT_GENERIC_RSS);
    var $data        = array();
    var $inputFields = array();
    var $force_recode = false;

    function Serendipity_Import_Generic($data) {
        $this->data = $data;
        $this->inputFields = array(array('text'    => RSS . ' ' . URL,
                                         'type'    => 'input',
                                         'name'    => 'url'),

                                   array('text'    => STATUS,
                                         'type'    => 'list',
                                         'name'    => 'type',
                                         'value'   => 'publish',
                                         'default' => array('draft' => DRAFT, 'publish' => PUBLISH)),

                                   array('text'    => RSS_IMPORT_CATEGORY,
                                         'type'    => 'list',
                                         'name'    => 'category',
                                         'value'   => 0,
                                         'default' => $this->_getCategoryList()),

                                   array('text'    => CHARSET,
                                         'type'    => 'list',
                                         'name'    => 'charset',
                                         'value'   => 'UTF-8',
                                         'default' => $this->getCharsets()),

                                    array('text'   => RSS_IMPORT_BODYONLY,
                                         'type'    => 'bool',
                                         'name'    => 'bodyonly',
                                         'value'   => 'false'),

                                    array('text'   => RSS_IMPORT_WPXRSS,
                                         'type'    => 'bool',
                                         'name'    => 'wpxrss',
                                         'value'   => 'false')
         );
    }

    function validateData() {
        return sizeof($this->data);
    }

    function getInputFields() {
        return $this->inputFields;
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

    function buildEntry($item, &$entry) {
        global $serendipity;

        $bodyonly = serendipity_get_bool($this->data['bodyonly']);

        if ($item['description']) {
            $entry['body'] = $this->decode($item['description']);
        }

        if ($item['content:encoded']) {
            if (!isset($entry['body']) || $bodyonly) {
                $data = &$entry['body'];
            } else {
                $data = &$entry['extended'];
            }

            // See if the 'description' element is a substring of the 'content:encoded' part. If it is,
            // we will only fetch the full 'content:encoded' part. If it's not a substring, we append
            // the 'content:encoded' part to either body or extended entry (respecting the 'bodyonly'
            // switch). We substract 4 letters because of possible '...' additions to an entry.
            $testbody = substr(trim(strip_tags($entry['body'])), 0, -4);
            if ($testbody != substr(trim(strip_tags($item['content:encoded'])), 0, strlen($testbody))) {
                $data .= $this->decode($item['content:encoded']);
            } else {
                $data = $this->decode($item['content:encoded']);
            }
        }

        $entry['title'] = $this->decode($item['title']);
        $entry['timestamp'] = $this->decode(strtotime(isset($item['pubdate']) ? $item['pubdate'] : $item['dc:date']));
        if ($entry['timestamp'] == -1) {
            // strtotime does not seem to parse ISO 8601 dates
            if (preg_match('@^([0-9]{4})\-([0-9]{2})\-([0-9]{2})T([0-9]{2}):([0-9]{2}):([0-9]{2})[\-\+]([0-9]{2}):([0-9]{2})$@', isset($item['pubdate']) ? $item['pubdate'] : $item['dc:date'], $timematch)) {
                $entry['timestamp'] = mktime($timematch[4] - $timematch[7], $timematch[5] - $timematch[8], $timematch[6], $timematch[2], $timematch[3], $timematch[1]);
            } else {
                $entry['timestamp'] = time();
            }
        }

        if ($this->data['type'] == 'draft') {
            $entry['isdraft'] = 'true';
        } else {
            $entry['isdraft'] = 'false';
        }

        if (!empty($item['category'])) {
            $cat = serendipity_fetchCategoryInfo(0, trim($this->decode($item['category'])));
            if (is_array($cat) && isset($cat['categoryid'])) {
                $entry['categories'][] = $cat['categoryid'];
            }
        }

        if (!is_array($entry['categories'])) {
            $entry['categories'][] = $this->data['category'];
        }

        if (!isset($entry['extended'])) {
            $entry['extended'] = '';
        }

        $entry['allow_comments'] = true;

        return true;
    }

    function import_wpxrss() {
        // TODO: Backtranscoding to NATIVE charset. Currently only works with UTF-8.
        $dry_run = false;
        
        $serendipity['noautodiscovery'] = 1;
        $uri = $this->data['url'];
        require_once S9Y_PEAR_PATH . 'HTTP/Request.php';
        serendipity_request_start();
        $req = new HTTP_Request($uri, array('allowRedirects' => true, 'maxRedirects' => 5));
        $res = $req->sendRequest();
        
        if (PEAR::isError($res) || $req->getResponseCode() != '200') {
            serendipity_request_end();
            echo '<span class="block_level">' . IMPORT_FAILED . ': ' . htmlspecialchars($this->data['url']) . '</span>';
            return false;
        }
        
        $fContent = $req->getResponseBody();
        serendipity_request_end();
        echo '<span class="block_level">' . strlen($fContent) . " Bytes</span>";
        
        if (version_compare(PHP_VERSION, '5.0') === -1) {
            echo '<span class="block_level">';
            printf(UNMET_REQUIREMENTS, 'PHP >= 5.0');
            echo "</span>";
            return false;
        }
        
        $xml = simplexml_load_string($fContent);
        unset($fContent);
        
        
        /* ************* USERS **********************/
        $_s9y_users = serendipity_fetchUsers();
        $s9y_users = array();
        if (is_array($s9y_users)) {
            foreach ($_s9y_users as $v) {
                $s9y_users[$v['realname']] = $v;
            }
        }

        /* ************* CATEGORIES **********************/
        $_s9y_cat = serendipity_fetchCategories('all');
        $s9y_cat  = array();
        if (is_array($s9y_cat)) {
            foreach ($_s9y_cat as $v) {
                $s9y_cat[$v['category_name']] = $v['categoryid'];
            }
        }

        $wp_ns      = 'http://wordpress.org/export/1.0/';
        $dc_ns      = 'http://purl.org/dc/elements/1.1/';
        $content_ns = 'http://purl.org/rss/1.0/modules/content/';

        $wp_core = $xml->channel->children($wp_ns);
        foreach($wp_core->category AS $idx => $cat) {
            //TODO: Parent generation unknown.
            $cat_name = (string)$cat->cat_name;
            if (!isset($s9y_cat[$cat_name])) {
                $cat = array('category_name'        => $cat_name,
                             'category_description' => '',
                             'parentid'             => 0,
                             'category_left'        => 0,
                             'category_right'       => 0);
                echo '<span class="block_level">';
                printf(CREATE_CATEGORY, htmlspecialchars($cat_name));
                echo "</span>";
                if ($dry_run) {
                    $s9y_cat[$cat_name] = time();
                } else {
                    serendipity_db_insert('category', $cat);
                    $s9y_cat[$cat_name] = serendipity_db_insert_id('category', 'categoryid');
                }
            }
        }

        /* ************* ITEMS **********************/
        foreach($xml->channel->item AS $idx => $item) {
            $wp_items = $item->children($wp_ns);
            $dc_items = $item->children($dc_ns);
            $content_items = $item->children($content_ns);
            
            // TODO: Attachments not handled
            if ((string)$wp_items->post_type == 'attachment' OR (string)$wp_items->post_type == 'page') {
                continue;
            }
            
            $entry = array(
                'title'          => (string)$item->title,
                'isdraft'        => ((string)$wp_items->status == 'publish' ? 'false' : 'true'),
                'allow_comments' => ((string)$wp_items->comment_status == 'open' ? true : false),
                'categories'     => array(),
                'body'           => (string)$content_items->encoded
            );
            
            if (preg_match('@^([0-9]{4})\-([0-9]{2})\-([0-9]{2}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$@', (string)$wp_items->post_date, $timematch)) {
                $entry['timestamp'] = mktime($timematch[4], $timematch[5], $timematch[6], $timematch[2], $timematch[3], $timematch[1]);
            } else {
                $entry['timestamp'] = time();
            }

            if (isset($item->category[1])) {
                foreach($item->category AS $idx => $category) {
                    $cstring=(string)$category;
                    if (!isset($s9y_cat[$cstring])) {
                        echo "<span class='msg_error'>WARNING: $category unset!</span>";
                    } else {
                        $entry['categories'][] = $s9y_cat[$cstring];
                    }
                }
            } else {
                $cstring = (string)$item->category;
                $entry['categories'][] = $s9y_cat[$cstring];
            }
            
            $wp_user = (string)$dc_items->creator;
            if (!isset($s9y_users[$wp_user])) {
                if ($dry_run) {
                    $s9y_users[$wp_user]['authorid'] = time();
                } else {
                    $s9y_users[$wp_user]['authorid'] = serendipity_addAuthor($wp_user, md5(time()), $wp_user, '', USERLEVEL_EDITOR);
                }
                echo '<span class="block_level">';
                printf(CREATE_AUTHOR, htmlspecialchars($wp_user));
                echo "</span>";
            }

            $entry['authorid'] = $s9y_users[$wp_user]['authorid'];
            
            if ($dry_run) {
                $id = time();
            } else {
                $id = serendipity_updertEntry($entry);
            }
            
            $s9y_cid = array(); // Holds comment ids to s9y ids association.
            $c_i = 0;
            foreach($wp_items->comment AS $comment) {
                $c_i++;
                $c_id   = (string)$comment->comment_id;
                $c_pid  = (string)$comment->comment_parent;
                $c_type = (string)$comment->comment_type;
                if ($c_type == 'pingback') {
                    $c_type2 = 'PINGBACK';
                } elseif ($c_type == 'trackback') {
                    $c_type2 = 'TRACKBACK';
                } else {
                    $c_type2 = 'NORMAL';
                }

                $s9y_comment = array('entry_id ' => $id,
                                 'parent_id' => $s9y_cid[$c_pd],
                                 'author'    => (string)$comment->comment_author,
                                 'email'     => (string)$comment->comment_author_email,
                                 'url'       => (string)$comment->comment_author_url,
                                 'ip'        => (string)$comment->comment_author_IP,
                                 'status'    => (empty($comment->comment_approved) || $comment->comment_approved == '1') ? 'approved' : 'pending',
                                 'subscribed'=> 'false',
                                 'body'      => (string)$comment->comment_content,
                                 'type'      => $c_type2);

                if (preg_match('@^([0-9]{4})\-([0-9]{2})\-([0-9]{2}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$@', (string)$comment->comment_date, $timematch)) {
                    $s9y_comment['timestamp'] = mktime($timematch[4], $timematch[5], $timematch[6], $timematch[2], $timematch[3], $timematch[1]);
                } else {
                    $s9y_comment['timestamp'] = time();
                }
                
                if ($dry_run) {
                    $cid = time();
                } else {
                    serendipity_db_insert('comments', $s9y_comment);
                    $cid = serendipity_db_insert_id('comments', 'id');
                    if ($s9y_comment['status'] == 'approved') {
                        serendipity_approveComment($cid, $id, true);
                    }
                }
                $s9y_cid[$c_id] = $cid;
            }
            
            echo "<span class='msg_notice'>Entry '" . htmlspecialchars($entry['title']) . "' ($c_i comments) imported.</span>";
        }
        return true;
    }

    function import() {
        global $serendipity;

        if (serendipity_db_bool($this->data['wpxrss'])) {
            return $this->import_wpxrss();
        }

        $c = new Onyx_RSS($this->data['charset']);
        $c->parse($this->data['url']);
        $this->data['encoding'] = $c->rss['encoding'];

        $serendipity['noautodiscovery'] = 1;
        while ($item = $c->getNextItem()) {
            $entry    = array();
            if ($this->buildEntry($item, $entry)) {
                serendipity_updertEntry($entry);
            }
        }

        return true;
    }
}

return 'Serendipity_Import_Generic';

/* vim: set sts=4 ts=4 expandtab : */

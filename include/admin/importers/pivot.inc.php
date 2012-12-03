<?php # $Id: generic.inc.php 717 2005-11-21 09:56:25Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

# Loosely based on the Importer by Stefan Koopmanschap for TXP:
# http://www.leftontheweb.com/pivot_to_textpattern.phps

class Serendipity_Import_Pivot extends Serendipity_Import {
    var $info        = array('software' => 'Pivot');
    var $data        = array();
    var $inputFields = array();

    function Serendipity_Import_Pivot($data) {
        $this->data = $data;
        $this->inputFields = array(array('text'    => PARENT_DIRECTORY,
                                         'type'    => 'input',
                                         'name'    => 'pivot_path',
                                         'default' => '/path/to/pivot/db/'),
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
            foreach ($res AS $v) {
                $ret[$v['categoryid']] = $v['category_name'];
            }
        }
        return $ret;
    }

    function toTimestamp($string) {
        if (empty($string)) {
            return time();
        }

        $parts = explode('-', $string);
        return mktime($parts[3], $parts[4], 0, $parts[1], $parts[2], $parts[0]);
    }

    function &unserialize($file) {
        $c = file_get_contents($file);
        $entrydata = str_replace(array('<?php /* pivot */ die(); ?>', "\r"), array('', ''), $c);
        $entrydata = unserialize($entrydata);

        if (empty($entrydata) || !is_array($entrydata)) {
            $entrydata = str_replace(array('<?php /* pivot */ die(); ?>'), array(''), $c);
            $entrydata = unserialize($entrydata);
        }

        return $entrydata;
    }

    function import() {
        global $serendipity;

        $max_import = 9999;

        $serendipity['noautodiscovery'] = true;
        if (!is_dir($this->data['pivot_path']) || !is_readable($this->data['pivot_path'])) {
            $check_dir = $serendipity['serendipityPath'] . $this->data['pivot_path'];
            if (!is_dir($check_dir) || !is_readable($check_dir)) {
                return sprintf(ERROR_NO_DIRECTORY, $this->data['pivot_path']);
            }
            $this->data['pivot_path'] = $check_dir;
        }

        printf('<span class="block_level">' . CHECKING_DIRECTORY . ': ', $this->data['pivot_path']) . '</span>';
        if ($root = opendir($this->data['pivot_path'])) {
            // Fetch category data:
            $s9y_categories = serendipity_fetchCategories('all');
            $categories     = $this->unserialize($this->data['pivot_path'] . '/ser-cats.php');
            $pivot_to_s9y   = array(
                'categories' => array()
            );

            echo '<ul>';
            foreach($categories AS $pivot_category_id => $category) {
                $found = false;
                $pivot_category = trim(stripslashes($category[0]));
                foreach($s9y_categories AS $idx => $item) {
                    if ($pivot_category == $item['category_name']) {
                        $found = $item['categoryid'];
                        break;
                    }
                }

                if ($found) {
                    echo '<li>Pivot Category "' . htmlspecialchars($pivot_category) . '" mapped to Serendipity ID ' . $found . '</li>';
                    $pivot_to_s9y['categories'][$pivot_category] = $found;
                } else {
                    echo '<li>Created Pivot Category "' . htmlspecialchars($pivot_category) . '".</li>';
                    $cat = array('category_name'        => $pivot_category,
                                 'category_description' => '',
                                 'parentid'             => 0,
                                 'category_left'        => 0,
                                 'category_right'       => 0);


                    serendipity_db_insert('category', $cat);
                    $pivot_to_s9y['categories'][$pivot_category] = serendipity_db_insert_id('category', 'categoryid');
                }
            }

            $i = 0;
            while (false !== ($dir = readdir($root))) {
                if ($dir[0] == '.') continue;
                if (substr($dir, 0, 8) == 'standard') {
                    printf('<li>' . CHECKING_DIRECTORY . '...</li>', $dir);
                    $data = $this->unserialize($this->data['pivot_path'] . '/' . $dir . '/index-' . $dir . '.php');

                    if (empty($data) || !is_array($data) || count($data) < 1) {
                        echo '<li><span class="msg_error">FATAL: File <em>' . $dir . '/index-' . $dir . '.php</em> has no data!</span></li>';
                        flush();
                        ob_flush();
                        continue;
                    }

                    foreach($data AS $entry) {
                        $entryid = str_pad($entry['code'], 5, '0', STR_PAD_LEFT);

                        if ($i >= $max_import) {
                            echo '<li>Skipping entry data for #' . $entryid . '</li>';
                            continue;
                        }

                        echo '<li>Fetching entry data for #' . $entryid . '</li>';
                        $entrydata = $this->unserialize($this->data['pivot_path'] . '/' . $dir . '/' . $entryid . '.php');
                        if (empty($entrydata) || !is_array($entrydata) || count($entrydata) < 1) {
                            echo '<li><span class="msg_error">FATAL: File <em>' . $dir . '/' . $entryid . '.php</em> has no data!</span></li>';
                            flush();
                            ob_flush();
                            continue;
                        }

                        $entry = array();
                        $entry['title'] = trim(stripslashes($entrydata['title']));
                        $entry['categories'] = array();
                        if (is_array($entrydata['category'])) {
                            foreach($entrydata['category'] AS $pivot_category) {
                                $entry['categories'][] = $pivot_to_s9y['categories'][$pivot_category];
                            }
                        }
                        $entry['timestamp']         = $this->toTimestamp($entrydata['date']);
                        $entry['last_modified']     = (!empty($entrydata['edit_date']) ? $this->toTimestamp($entrydata['edit_date']) : $entry['timestamp']);
                        $entry['isdraft']           = ($entrydata['status'] == 'publish' ? 'false' : 'true');
                        $entry['body']              = stripslashes($entrydata['introduction']);
                        $entry['extended']          = stripslashes($entrydata['body']);
                        $entry['title']             = stripslashes($entrydata['title']);
                        $entry['authorid']          = $serendipity['authorid'];
                        $entry['author']            = $serendipity['serendipityUser'];
                        $entry['allow_comments']    = ($entrydata['allow_comments'] ? 'true' : 'false');
                        $entry['moderate_comments'] = 'false';
                        $entry['exflag']            = (!empty($entry['extended']) ? 1 : 0);
                        $entry['trackbacks']        = 0;
                        $entry['comments']          = (isset($entrydata['comments']) ? count($entrydata['comments']) : 0);
                        serendipity_updertEntry($entry);
                        $i++;

                        if (isset($entrydata['comments']) && count($entrydata['comments']) > 0) {
                            foreach($entrydata['comments'] AS $comment) {
                                $comment = array('entry_id ' => $entry['id'],
                                                 'parent_id' => 0,
                                                 'timestamp' => $this->toTimestamp($comment['date']),
                                                 'author'    => stripslashes($comment['name']),
                                                 'email'     => stripslashes($comment['email']),
                                                 'url'       => stripslashes($comment['url']),
                                                 'ip'        => stripslashes($comment['ip']),
                                                 'status'    => 'approved',
                                                 'body'      => stripslashes($comment['comment']),
                                                 'subscribed'=> ($comment['notify'] ? 'true' : 'false'),
                                                 'type'      => 'NORMAL');

                                serendipity_db_insert('comments', $comment);
                            }
                        }
                        echo '<li><span class="msg_success">Entry #' . $entryid . ' imported</span></li>';
                        flush();
                        ob_flush();
                    }
                }
            }
            echo '</ul>';
        } else {
            return sprintf(ERROR_NO_DIRECTORY, $this->data['pivot_path']);
        }

        return true;
    }
}

return 'Serendipity_Import_Pivot';

/* vim: set sts=4 ts=4 expandtab : */
?>

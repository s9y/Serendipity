<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

/*****************************************************************
 *  textpattern  Importer,   by Garvin Hicking *
 * ****************************************************************/

class Serendipity_Import_textpattern extends Serendipity_Import {
    var $info        = array('software' => 'Textpattern 1.0rc1');
    var $data        = array();
    var $inputFields = array();
    var $categories  = array();

    function getImportNotes() {
        return '<p>Textpattern uses MySQLs native PASSWORD() function to save passwords. Thus, those passwords are incompatible with the MD5 hashing of Serendipity. The passwords for all users have been set to "txp". <strong>You need to modify the passwords manually for each user</strong>, we are sorry for that inconvenience.</p>';
    }

    function __construct($data) {
        $this->data = $data;
        $this->inputFields = array(array('text' => INSTALL_DBHOST,
                                         'type' => 'input',
                                         'name' => 'host'),

                                   array('text' => INSTALL_DBUSER,
                                         'type' => 'input',
                                         'name' => 'user'),

                                   array('text' => INSTALL_DBPASS,
                                         'type' => 'protected',
                                         'name' => 'pass'),

                                   array('text' => INSTALL_DBNAME,
                                         'type' => 'input',
                                         'name' => 'name'),

                                   array('text' => INSTALL_DBPREFIX,
                                         'type' => 'input',
                                         'name' => 'prefix',
                                         'default' => ''),

                                   array('text'    => CHARSET,
                                         'type'    => 'list',
                                         'name'    => 'charset',
                                         'value'   => 'UTF-8',
                                         'default' => $this->getCharsets(true)),

                                   array('text'    => CONVERT_HTMLENTITIES,
                                         'type'    => 'bool',
                                         'name'    => 'use_strtr',
                                         'default' => 'true'),

                                   array('text'    => ACTIVATE_AUTODISCOVERY,
                                         'type'    => 'bool',
                                         'name'    => 'autodiscovery',
                                         'default' => 'false')
                            );
    }

    function validateData() {
        return sizeof($this->data);
    }

    function getInputFields() {
        return $this->inputFields;
    }

    function import() {
        global $serendipity;

        // Save this so we can return it to its original value at the end of this method.
        $noautodiscovery = isset($serendipity['noautodiscovery']) ? $serendipity['noautodiscovery'] : false;

        if ($this->data['autodiscovery'] == 'false') {
            $serendipity['noautodiscovery'] = 1;
        }

        $this->getTransTable();

        $this->data['prefix'] = serendipity_db_escape_string($this->data['prefix']);
        $users = array();
        $entries = array();

        if (!extension_loaded('mysqli')) {
            return MYSQL_REQUIRED;
        }

        $txpdb = @mysqli_connect($this->data['host'], $this->data['user'], $this->data['pass']);
        if (!$txpdb || mysqli_connect_error()) {
            return sprintf(COULDNT_CONNECT, serendipity_specialchars($this->data['host']));
        }

        if (!@mysqli_select_db($txpdb, $this->data['name'])) {
            return sprintf(COULDNT_SELECT_DB, mysqli_error($txpdb));
        }

        /* Users */
        $res = @$this->nativeQuery("SELECT user_id    AS ID,
                                    name       AS user_login,
                                    `pass`     AS user_pass,
                                    email      AS user_email,
                                    privs      AS user_level
                               FROM {$this->data['prefix']}txp_users", $txpdb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_USER_INFO, mysqli_error($txpdb));
        }

        for ($x=0, $max_x = mysqli_num_rows($res); $x < $max_x ; $x++ ) {
            $users[$x] = mysqli_fetch_assoc($res);

            $data = array('right_publish' => ($users[$x]['user_level'] <= 4) ? 1 : 0,
                          'realname'      => $users[$x]['user_login'],
                          'username'      => $users[$x]['user_login'],
                          'email'         => $users[$x]['user_email'],
                          'password'      => md5('txp')); // blame TXP for using PASSWORD().

            if ( $users[$x]['user_level'] == 1 ) {
                $data['userlevel'] = USERLEVEL_EDITOR;
            } elseif ($users[$x]['user_level'] == 2) {
                $data['userlevel'] = USERLEVEL_CHIEF;
            } else {
                $data['userlevel'] = USERLEVEL_ADMIN;
            }

            if ($serendipity['serendipityUserlevel'] < $data['userlevel']) {
                $data['userlevel'] = $serendipity['serendipityUserlevel'];
            }

            serendipity_db_insert('authors', $this->strtrRecursive($data));
            $users[$x]['authorid'] = serendipity_db_insert_id('authors', 'authorid');
        }

        /* Categories */
        if (!$this->importCategories('root', 0, $txpdb)) {
            return sprintf(COULDNT_SELECT_CATEGORY_INFO, mysqli_error($txpdb));
        }
        serendipity_rebuildCategoryTree();

        /* Entries */
        // Notice: Textpattern doesn't honor the prefix for this table. Wicked system.
        $res = @$this->nativeQuery("SELECT * FROM {$this->data['prefix']}textpattern ORDER BY Posted;", $txpdb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_ENTRY_INFO, mysqli_error($txpdb));
        }

        for ($x=0, $max_x = mysqli_num_rows($res) ; $x < $max_x ; $x++ ) {
            $entries[$x] = mysqli_fetch_assoc($res);

            $entry = array('title'          => $this->decode($entries[$x]['Title']),
                           'isdraft'        => ($entries[$x]['Status'] == '4') ? 'false' : 'true',
                           'allow_comments' => ($entries[$x]['Annotate'] == '1' ) ? 'true' : 'false',
                           'timestamp'      => strtotime($entries[$x]['Posted']),
                           'extended'       => $this->strtr($entries[$x]['Body_html']),
                           'body'           => $this->strtr($entries[$x]['Excerpt']));

            $entry['authorid'] = '';
            $entry['author']   = '';
            foreach ($users as $user) {
                if ($user['user_login'] == $entries[$x]['AuthorID']) {
                    $entry['authorid'] = $user['authorid'];
                    $entry['author']   = $user['user_login'];
                    break;
                }
            }

            if (!is_int($entries[$x]['entryid'] = serendipity_updertEntry($entry))) {
                return $entries[$x]['entryid'];
            }

            /* Entry/category */
            foreach ($this->categories as $category) {
                if ($category['name'] == $entries[$x]['Category1'] || $category['name'] == $entries[$x]['Category2']) {
                    $data = array('entryid'    => $entries[$x]['entryid'],
                                  'categoryid' => $category['categoryid']);
                    serendipity_db_insert('entrycat', $this->strtrRecursive($data));
                    break;
                }
            }
        }

        /* Comments */
        $res = @$this->nativeQuery("SELECT * FROM {$this->data['prefix']}txp_discuss;", $txpdb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_COMMENT_INFO, mysqli_error($txpdb));
        }

        while ($a = mysqli_fetch_assoc($res)) {
            foreach ($entries as $entry) {
                if ($entry['ID'] == $a['parentid'] ) {
                    $author   = $a['name'];
                    $mail     = $a['email'];
                    $url      = $a['web'];

                    $comment = array('entry_id ' => $entry['entryid'],
                                     'parent_id' => 0,
                                     'timestamp' => strtotime($a['posted']),
                                     'author'    => $author,
                                     'email'     => $mail,
                                     'url'       => $url,
                                     'ip'        => $a['ip'],
                                     'status'    => ($a['visible'] == '1' ? 'approved' : 'pending'),
                                     'body'      => $a['message'],
                                     'type'      => 'NORMAL');

                    serendipity_db_insert('comments', $this->strtrRecursive($comment));
                    if ($a['visible'] == '1') {
                        $cid = serendipity_db_insert_id('comments', 'id');
                        serendipity_approveComment($cid, true);
                    }
                }
            }
        }

        $serendipity['noautodiscovery'] = $noautodiscovery;

        // That was fun.
        return true;
    }

    function importCategories($parentname = 'root', $parentid = 0, $txpdb) {
        $res = $this->nativeQuery("SELECT * FROM {$this->data['prefix']}txp_category
                                     WHERE parent = '" . mysqli_escape_string($parentname) . "' AND type = 'article'", $txpdb);
        if (!$res) {
            echo mysqli_error();
            return false;
        }

        // Get all the info we need
        for ($x=0, $max_x = mysqli_num_rows($res) ; $x < $max_x ; $x++) {
            $row = mysqli_fetch_assoc($res);
            $cat = array('category_name'        => $row['name'],
                         'category_description' => $row['name'],
                         'parentid'             => $parentid,
                         'category_left'        => 0,
                         'category_right'       => 0);

            serendipity_db_insert('category', $this->strtrRecursive($cat));
            $row['categoryid']  = serendipity_db_insert_id('category', 'categoryid');
            $this->categories[] = $row;
            $this->importCategories($row['name'], $row['categoryid'], $txpdb);
        }

        return true;
    }
}

return 'Serendipity_Import_textpattern';

/* vim: set sts=4 ts=4 expandtab : */
?>

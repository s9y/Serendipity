<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

/*****************************************************************
 *  Nucleus  Importer, by Garvin Hicking *
 * ****************************************************************/

class Serendipity_Import_Nucleus extends Serendipity_Import {
    var $info        = array('software' => 'Nucleus');
    var $data        = array();
    var $inputFields = array();


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
                                         'default' => 'nucleus_'),

                                   array('text'    => CHARSET,
                                         'type'    => 'list',
                                         'name'    => 'charset',
                                         'value'   => 'native',
                                         'default' => $this->getCharsets()),

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
        $categories = array();
        $entries = array();

        if (!extension_loaded('mysqli')) {
            return MYSQL_REQUIRED;;
        }

        $nucdb = @mysqli_connect($this->data['host'], $this->data['user'], $this->data['pass']);
        if (!$nucdb || mysqli_connect_error()) {
            return sprintf(COULDNT_CONNECT, serendipity_specialchars($this->data['host']));
        }

        if (!@mysqli_select_db($nucdb, $this->data['name'])) {
            return sprintf(COULDNT_SELECT_DB, mysqli_error($nucdb));
        }

        /* Users */
        $res = @$this->nativeQuery("SELECT mnumber AS ID, mname AS user_login, mpassword AS user_pass, memail AS user_email, madmin AS user_level FROM {$this->data['prefix']}member;", $nucdb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_USER_INFO, mysqli_error($nucdb));
        }

        for ($x=0, $max_x = mysqli_num_rows($res); $x < $max_x ; $x++ ) {
            $users[$x] = mysqli_fetch_assoc($res);

            $data = array('right_publish' => ($users[$x]['user_level'] >= 1) ? 1 : 0,
                          'realname'      => $users[$x]['user_login'],
                          'username'      => $users[$x]['user_login'],
                          'email'         => $users[$x]['user_email'],
                          'password'      => $users[$x]['user_pass']); // Nucleus uses md5, too.

            if ( $users[$x]['user_level'] < 1 ) {
                $data['userlevel'] = USERLEVEL_EDITOR;
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
        $res = @$this->nativeQuery("SELECT catid AS cat_ID, cname AS cat_name, cdesc AS category_description FROM {$this->data['prefix']}category ORDER BY catid;", $nucdb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_CATEGORY_INFO, mysqli_error($nucdb));
        }

        // Get all the info we need
        for ($x=0, $max_x = mysqli_num_rows($res) ; $x < $max_x ; $x++) {
            $categories[] = mysqli_fetch_assoc($res);
        }

        // Insert all categories as top level (we need to know everyone's ID before we can represent the hierarchy).
        for ($x=0, $max_x = sizeof($categories) ; $x < $max_x ; $x++ ) {
            $cat = array('category_name'        => $categories[$x]['cat_name'],
                         'category_description' => $categories[$x]['category_description'],
                         'parentid'             => 0, // <---
                         'category_left'        => 0,
                         'category_right'       => 0);

            serendipity_db_insert('category', $this->strtrRecursive($cat));
            $categories[$x]['categoryid'] = serendipity_db_insert_id('category', 'categoryid');
        }

        serendipity_rebuildCategoryTree();

        /* Entries */
        $res = @$this->nativeQuery("SELECT * FROM {$this->data['prefix']}item ORDER BY itime;", $nucdb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_ENTRY_INFO, mysqli_error($nucdb));
        }

        for ($x=0, $max_x = mysqli_num_rows($res) ; $x < $max_x ; $x++ ) {
            $entries[$x] = mysqli_fetch_assoc($res);

            $entry = array('title'          => $this->decode($entries[$x]['ititle']),
                           'isdraft'        => ($entries[$x]['idraft'] != '1') ? 'false' : 'true',
                           'allow_comments' => ($entries[$x]['iclosed'] == '1' ) ? 'false' : 'true',
                           'timestamp'      => strtotime($entries[$x]['itime']),
                           'extended'       => $this->strtr($entries[$x]['imore']),
                           'body'           => $this->strtr($entries[$x]['ibody']));

            $entry['authorid'] = '';
            $entry['author']   = '';
            foreach ($users as $user) {
                if ($user['ID'] == $entries[$x]['iauthor']) {
                    $entry['authorid'] = $user['authorid'];
                    $entry['author']   = $user['realname'];
                    break;
                }
            }

            if (!is_int($entries[$x]['entryid'] = serendipity_updertEntry($entry))) {
                return $entries[$x]['entryid'];
            }

            /* Entry/category */
            foreach ($categories as $category) {
                if ($category['cat_ID'] == $entries[$x]['icat'] ) {
                    $data = array('entryid'    => $entries[$x]['entryid'],
                                  'categoryid' => $category['categoryid']);
                    serendipity_db_insert('entrycat', $this->strtrRecursive($data));
                    break;
                }
            }
        }

        /* Comments */
        $res = @$this->nativeQuery("SELECT * FROM {$this->data['prefix']}comment;", $nucdb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_COMMENT_INFO, mysqli_error($nucdb));
        }

        while ($a = mysqli_fetch_assoc($res)) {
            foreach ($entries as $entry) {
                if ($entry['inumber'] == $a['citem'] ) {
                    $author   = '';
                    $mail     = '';
                    if (!empty($a['cmember'])) {
                        foreach($users AS $user) {
                            if ($user['ID'] == $a['cmember']) {
                                $author = $user['user_login'];
                                $mail = $user['user_email'];
                                break;
                            }
                        }
                    }

                    if (empty($author) && empty($mail)) {
                        $author = $a['cuser'];
                        $mail = $a['cmail'];
                    }

                    $comment = array('entry_id ' => $entry['entryid'],
                                     'parent_id' => 0,
                                     'timestamp' => strtotime($a['ctime']),
                                     'author'    => $author,
                                     'email'     => $mail,
                                     'url'       => $a['chost'],
                                     'ip'        => $a['cip'],
                                     'status'    => 'approved',
                                     'body'      => $a['cbody'],
                                     'type'      => 'NORMAL');

                    serendipity_db_insert('comments', $this->strtrRecursive($comment));
                    $cid = serendipity_db_insert_id('comments', 'id');
                    serendipity_approveComment($cid, true);
                }
            }
        }

        $serendipity['noautodiscovery'] = $noautodiscovery;

        // That was fun.
        return true;
    }
}

return 'Serendipity_Import_Nucleus';

/* vim: set sts=4 ts=4 expandtab : */
?>

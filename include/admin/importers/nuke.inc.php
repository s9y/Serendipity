<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

/*****************************************************************
 *  lifetype  Importer,   by Garvin Hicking *
 * ****************************************************************/

class Serendipity_Import_nuke extends Serendipity_Import {
    var $info        = array('software' => 'phpNuke');
    var $data        = array();
    var $inputFields = array();
    var $categories  = array();

    function getImportNotes() {
        return '';
    }

    function Serendipity_Import_nuke($data) {
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

                                   array('text'    => CHARSET,
                                         'type'    => 'list',
                                         'name'    => 'charset',
                                         'value'   => 'UTF-8',
                                         'default' => $this->getCharsets(true)),

                                   array('text'    => CONVERT_HTMLENTITIES,
                                         'type'    => 'bool',
                                         'name'    => 'use_strtr',
                                         'default' => 'false'),

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

        $users = array();
        $entries = array();

        if (!extension_loaded('mysqli')) {
            return MYSQL_REQUIRED;
        }

        $nukedb = @mysql_connect($this->data['host'], $this->data['user'], $this->data['pass']);
        if (!$nukedb) {
            return sprintf(COULDNT_CONNECT, serendipity_specialchars($this->data['host']));
        }

        if (!@mysql_select_db($this->data['name'])) {
            return sprintf(COULDNT_SELECT_DB, mysql_error($nukedb));
        }

        /* Users: Authors */
        $res = @$this->nativeQuery("SELECT
                                            aid         AS user_login,
                                            `pwd`       AS user_pass,
                                            email       AS user_email,
                                            name        AS user_name,
                                            radminsuper AS user_level,
                                            aid         AS ID
                                       FROM nuke_authors", $nukedb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_USER_INFO, mysql_error($nukedb));
        }

        for ($x=0, $max_x = mysql_num_rows($res); $x < $max_x ; $x++ ) {
            $users[$x] = mysql_fetch_assoc($res);

            $data = array('right_publish' => true,
                          'realname'      => $users[$x]['user_name'],
                          'username'      => $users[$x]['user_login'],
                          'userlevel'     => ($users[$x]['user_level'] > 0 ? USERLEVEL_ADMIN : USERLEVEL_EDITOR),
                          'email'         => $users[$x]['user_email'],
                          'password'      => md5($users[$x]['user_pass']));

            if ($serendipity['serendipityUserlevel'] < $data['userlevel']) {
                $data['userlevel'] = $serendipity['serendipityUserlevel'];
            }

            serendipity_db_insert('authors', $this->strtrRecursive($data));
            $users[$x]['authorid'] = serendipity_db_insert_id('authors', 'authorid');
        }

        /* Users: Users */
        $res = @$this->nativeQuery("SELECT
                                            u.uname      AS user_login,
                                            u.pass       AS user_pass,
                                            u.email      AS user_email,
                                            u.name       AS user_name,
                                            s.user_level AS user_level,
                                            uname        AS ID
                                       FROM nuke_users AS u
                                       JOIN nuke_users_status AS s
                                         ON u.uid = s.user_id
                                       ", $nukedb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_USER_INFO, mysql_error($nukedb));
        }

        for ($x=$x, $max_x = $x + mysql_num_rows($res); $x < $max_x ; $x++ ) {
            $users[$x] = mysql_fetch_assoc($res);
            if (empty($users[$x]['user_name'])) {
                $users[$x]['user_name'] = $users[$x]['user_login'];
            }

            $data = array('right_publish' => true,
                          'realname'      => $users[$x]['user_name'],
                          'username'      => $users[$x]['user_login'],
                          'userlevel'     => ($users[$x]['user_level'] > 1 ? USERLEVEL_ADMIN : USERLEVEL_EDITOR),
                          'email'         => $users[$x]['user_email'],
                          'password'      => md5($users[$x]['user_pass']));

            if ($serendipity['serendipityUserlevel'] < $data['userlevel']) {
                $data['userlevel'] = $serendipity['serendipityUserlevel'];
            }

            serendipity_db_insert('authors', $this->strtrRecursive($data));
            $users[$x]['authorid'] = serendipity_db_insert_id('authors', 'authorid');
        }

        /* Categories */
        if (!$this->importCategories($nukedb)) {
            return sprintf(COULDNT_SELECT_CATEGORY_INFO, mysql_error($nukedb));
        }
        serendipity_rebuildCategoryTree();

        /* Entries */
        $res = @$this->nativeQuery("SELECT
                                           sid                    AS ID,
                                           UNIX_TIMESTAMP(`time`) AS tstamp,
                                           aid                    AS post_author,
                                           informant              AS informant,
                                           
                                           title                  AS post_title,
                                           hometext               AS post_content,
                                           bodytext               AS extended
                                      FROM nuke_stories", $nukedb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_ENTRY_INFO, mysql_error($nukedb));
        }

        for ($x=0, $max_x = mysql_num_rows($res) ; $x < $max_x ; $x++ ) {
            $entries[$x] = mysql_fetch_assoc($res);
            
            if (!empty($entries[$x]['informant'])) {
                $entries[$x]['post_author'] = $entries[$x]['informant'];
            }

            $entry = array('title'          => $this->decode($entries[$x]['post_title']),
                           'isdraft'        => 'false',
                           'allow_comments' => 'true',
                           'timestamp'      => $entries[$x]['tstamp'],
                           'body'           => $this->strtr($entries[$x]['post_content']),
                           'extended'       => $this->strtr($entries[$x]['extended']),
                           );

            $entry['authorid'] = '';
            $entry['author']   = '';
            foreach ($users as $user) {
                if ($user['ID'] == $entries[$x]['post_author']) {
                    $entry['authorid'] = $user['authorid'];
                    $entry['author']   = $user['user_login'];
                    break;
                }
            }

            if (!is_int($entries[$x]['entryid'] = serendipity_updertEntry($entry))) {
                return $entries[$x]['entryid'];
            }
        }

        /* Even more category stuff */
        $res = @$this->nativeQuery("SELECT sid AS postcat_post_ID,
                                           topic AS postcat_cat_ID
                                      FROM nuke_stories", $nukedb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_CATEGORY_INFO, mysql_error($nukedb));
        }

        for ($x=0, $max_x = mysql_num_rows($res) ; $x < $max_x ; $x++ ) {
            $entrycat = mysql_fetch_assoc($res);

            $entryid = 0;
            $categoryid = 0;
            foreach($entries AS $entry) {
                if ($entry['ID'] == $entrycat['postcat_post_ID']) {
                    $entryid = $entry['entryid'];
                    break;
                }
            }

            foreach($this->categories AS $category) {
                if ($category['cat_ID'] == $entrycat['postcat_cat_ID']) {
                    $categoryid = $category['categoryid'];
                }
            }

            if ($entryid > 0 && $categoryid > 0) {
                $data = array('entryid'    => $entryid,
                              'categoryid' => $categoryid);
                serendipity_db_insert('entrycat', $this->strtrRecursive($data));
            }
        }

        /* Comments */
        $res = @$this->nativeQuery("SELECT sid AS comment_post_ID,
                                           subject AS title,
                                           comment AS comment_content,
                                           email AS comment_author_email,
                                           url AS comment_author_url,
                                           name AS comment_author,
                                           UNIX_TIMESTAMP(`date`) AS tstamp
                                      FROM nuke_comments", $nukedb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_COMMENT_INFO, mysql_error($nukedb));
        }

        while ($a = mysql_fetch_assoc($res)) {
            foreach ($entries as $entry) {
                if ($entry['ID'] == $a['comment_post_ID'] ) {
                    $author = $a['comment_author'];
                    $mail = $a['comment_author_email'];
                    $url = $a['comment_author_url'];

                    $comment = array('entry_id ' => $entry['entryid'],
                                     'parent_id' => 0,
                                     'timestamp' => $a['tstamp'],
                                     'author'    => $author,
                                     'email'     => $mail,
                                     'url'       => $url,
                                     'title'     => $a['title'],
                                     'ip'        => '',
                                     'status'    => 'approved',
                                     'body'      => $a['comment_content'],
                                     'subscribed'=> 'false',
                                     'type'      => 'NORMAL');

                    serendipity_db_insert('comments', $this->strtrRecursive($comment));
                    $cid = serendipity_db_insert_id('comments', 'id');
                    serendipity_approveComment($cid, $entry['entryid'], true);
                }
            }
        }

        $serendipity['noautodiscovery'] = $noautodiscovery;

        // That was fun.
        return true;
    }

    function importCategories($nukedb) {
        $res = $this->nativeQuery("SELECT topicname   AS cat_name,
                                          topictext   AS cat_description,
                                          topicid     AS cat_ID
                                     FROM nuke_topics", $nukedb);
        if (!$res) {
            echo mysql_error();
            return false;
        }

        // Get all the info we need
        for ($x=0, $max_x = mysql_num_rows($res) ; $x < $max_x ; $x++) {
            $row = mysql_fetch_assoc($res);
            $cat = array('category_name'        => $row['cat_name'],
                         'category_description' => $row['cat_description'],
                         'parentid'             => 0,
                         'category_left'        => 0,
                         'category_right'       => 0);

            serendipity_db_insert('category', $this->strtrRecursive($cat));
            $row['categoryid']  = serendipity_db_insert_id('category', 'categoryid');
            $this->categories[] = $row;
        }

        return true;
    }
}

return 'Serendipity_Import_nuke';

/* vim: set sts=4 ts=4 expandtab : */

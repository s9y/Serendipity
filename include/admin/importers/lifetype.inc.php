<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

/*****************************************************************
 *  lifetype  Importer,   by Garvin Hicking *
 * ****************************************************************/

class Serendipity_Import_lifetype extends Serendipity_Import {
    var $info        = array('software' => 'lifetype');
    var $data        = array();
    var $inputFields = array();
    var $categories  = array();

    function getImportNotes() {
        return '';
    }

    function Serendipity_Import_lifetype($data) {
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

        $ltdb = @mysql_connect($this->data['host'], $this->data['user'], $this->data['pass']);
        if (!$ltdb) {
            return sprintf(COULDNT_CONNECT, serendipity_specialchars($this->data['host']));
        }

        if (!@mysql_select_db($this->data['name'])) {
            return sprintf(COULDNT_SELECT_DB, mysql_error($ltdb));
        }

        /* Users */
        $res = @$this->nativeQuery("SELECT 
                                            user AS user_login,
                                            `password` AS user_pass,
                                            email AS user_email,
                                            full_name AS user_name,
                                            site_admin AS user_level,
                                            id AS ID
                                       FROM lt_users", $ltdb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_USER_INFO, mysql_error($ltdb));
        }

        for ($x=0, $max_x = mysql_num_rows($res); $x < $max_x ; $x++ ) {
            $users[$x] = mysql_fetch_assoc($res);

            $data = array('right_publish' => true,
                          'realname'      => $users[$x]['user_name'],
                          'username'      => $users[$x]['user_login'],
                          'userlevel'     => ($users[$x]['user_level'] > 0 ? USERLEVEL_ADMIN : USERLEVEL_EDITOR),
                          'email'         => $users[$x]['user_email'],
                          'password'      => $users[$x]['user_pass']); // MD5 compatible

            if ($serendipity['serendipityUserlevel'] < $data['userlevel']) {
                $data['userlevel'] = $serendipity['serendipityUserlevel'];
            }

            serendipity_db_insert('authors', $this->strtrRecursive($data));
            $users[$x]['authorid'] = serendipity_db_insert_id('authors', 'authorid');
        }

        /* Categories */
        if (!$this->importCategories(null, 0, $ltdb)) {
            return sprintf(COULDNT_SELECT_CATEGORY_INFO, mysql_error($ltdb));
        }
        serendipity_rebuildCategoryTree();

        /* Entries */
        $res = @$this->nativeQuery("SELECT 
                                           article_id AS ID,
                                           UNIX_TIMESTAMP(`date`) AS tstamp, 
                                           user_id AS post_author, 
                                           status AS post_status,
                                           text AS post_content,
                                           topic AS post_title
                                      FROM lt_articles 
                                      JOIN lt_articles_text
                                        ON lt_articles_text.article_id = lt_articles.id
                               ORDER BY ID;", $ltdb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_ENTRY_INFO, mysql_error($ltdb));
        }

        for ($x=0, $max_x = mysql_num_rows($res) ; $x < $max_x ; $x++ ) {
            $entries[$x] = mysql_fetch_assoc($res);

            $entry = array('title'          => $this->decode($entries[$x]['post_title']),
                           'isdraft'        => ($entries[$x]['post_status'] == '1') ? 'false' : 'true',
                           'allow_comments' => 'true',
                           'timestamp'      => $entries[$x]['tstamp'],
                           'body'           => $this->strtr($entries[$x]['post_content']));

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
        $res = @$this->nativeQuery("SELECT article_id AS postcat_post_ID, 
                                           category_id AS postcat_cat_ID 
                                      FROM lt_article_categories_link", $ltdb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_CATEGORY_INFO, mysql_error($ltdb));
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
        $res = @$this->nativeQuery("SELECT article_id AS comment_post_ID,
                                           topic AS title,
                                           text AS comment_content,
                                           user_email AS comment_author_email,
                                           user_url AS comment_author_url,
                                           user_name AS comment_author,
                                           user_id AS comment_author_ID,
                                           UNIX_TIMESTAMP(`date`) AS tstamp,
                                           client_ip AS comment_author_IP,
                                           status AS comment_status
                                      FROM lt_articles_comments;", $ltdb);
        if (!$res) {
            return sprintf(COULDNT_SELECT_COMMENT_INFO, mysql_error($ltdb));
        }

        while ($a = mysql_fetch_assoc($res)) {
            foreach ($entries as $entry) {
                if ($entry['ID'] == $a['comment_post_ID'] ) {
                    $author = '';
                    $mail     = '';
                    $url      = '';
                    if (!empty($a['comment_author_ID']) && $a['comment_author_ID'] > 0) {
                        foreach($users AS $user) {
                            if ($user['ID'] == $a['comment_author_ID']) {
                                $author = $user['user_login'];
                                $mail = $user['user_email'];
                                $url  = $user['user_url'];
                                break;
                            }
                        }
                    }

                    if (empty($author) && empty($mail)) {
                        $author = $a['comment_author'];
                        $mail = $a['comment_author_email'];
                        $url = $a['comment_author_url'];
                    }

                    $comment = array('entry_id ' => $entry['entryid'],
                                     'parent_id' => 0,
                                     'timestamp' => $a['tstamp'],
                                     'author'    => $author,
                                     'email'     => $mail,
                                     'url'       => $url,
                                     'title'     => $a['title'],
                                     'ip'        => $a['comment_author_IP'],
                                     'status'    => ($a['comment_status'] == '2' ? 'pending' : 'approved'),
                                     'body'      => $a['comment_content'],
                                     'subscribed'=> 'false',
                                     'type'      => 'NORMAL');

                    serendipity_db_insert('comments', $this->strtrRecursive($comment));
                    if ($a['comment_status'] != '2') {
                        $cid = serendipity_db_insert_id('comments', 'id');
                        serendipity_approveComment($cid, $entry['entryid'], true);
                    }
                }
            }
        }

        $serendipity['noautodiscovery'] = $noautodiscovery;

        // That was fun.
        return true;
    }

    function importCategories($parentid = 0, $new_parentid = 0, $ltdb) {
        if (is_null($parentid)) {
            $where = 'WHERE parent_id = 0';
        } else {
            $where = "WHERE parent_id = '" . mysql_escape_string($parentid) . "'";
        }

        $res = $this->nativeQuery("SELECT name AS cat_name,
                                          description AS cat_description,
                                          id AS cat_ID
                                     FROM lt_articles_categories
                                     " . $where, $ltdb);
        if (!$res) {
            echo mysql_error();
            return false;
        }

        // Get all the info we need
        for ($x=0, $max_x = mysql_num_rows($res) ; $x < $max_x ; $x++) {
            $row = mysql_fetch_assoc($res);
            $cat = array('category_name'        => $row['cat_name'],
                         'category_description' => $row['cat_description'],
                         'parentid'             => (int)$new_parentid,
                         'category_left'        => 0,
                         'category_right'       => 0);

            serendipity_db_insert('category', $this->strtrRecursive($cat));
            $row['categoryid']  = serendipity_db_insert_id('category', 'categoryid');
            $this->categories[] = $row;
            $this->importCategories($row['cat_ID'], $row['categoryid'], $ltdb);
        }

        return true;
    }
}

return 'Serendipity_Import_lifetype';

/* vim: set sts=4 ts=4 expandtab : */

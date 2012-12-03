<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

/*****************************************************************
 *                WordPress Importer, by Evan Nemerson           *
 *****************************************************************/

class Serendipity_Import_WordPress extends Serendipity_Import {
    var $info        = array('software' => 'WordPress');
    var $data        = array();
    var $inputFields = array();


    function Serendipity_Import_WordPress($data) {
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
                                         'name' => 'prefix'),

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
                                         'default' => 'false'),
                                   
                                   array('text'    => IMPORT_WP_PAGES,
                                         'type'    => 'bool',
                                         'name'    => 'import_all',
                                         'default' => 'false'      
                                   )
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
        static $debug = true;

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

        if ( !extension_loaded('mysql') ) {
            return MYSQL_REQUIRED;
        }

        if (function_exists('set_time_limit')) {
            @set_time_limit(300);
        }

        $wpdb = @mysql_connect($this->data['host'], $this->data['user'], $this->data['pass']);
        if (!$wpdb) {
            return sprintf(COULDNT_CONNECT, $this->data['host']);
        }

        if (!@mysql_select_db($this->data['name'])) {
            return sprintf(COULDNT_SELECT_DB, mysql_error($wpdb));
        }
        
        // This will hold the s9y <-> WP ID associations.
        $assoc = array();

        /* Users */
        // Fields: ID, user_login, user_pass, user_email, user_level
        $res = @$this->nativeQuery("SELECT * FROM {$this->data['prefix']}users;", $wpdb);
        if (!$res) {
            printf(COULDNT_SELECT_USER_INFO, mysql_error($wpdb));
        } else {
            if ($debug) echo "<span class='block_level'>Importing users...</span>";
            for ($x=0, $c = mysql_num_rows($res) ; $x < $c ; $x++) {
                $users[$x] = mysql_fetch_assoc($res);
    
                $data = array('right_publish' => (!isset($users[$x]['user_level']) || $users[$x]['user_level'] >= 1) ? 1 : 0,
                              'realname'      => $users[$x]['user_login'],
                              'username'      => $users[$x]['user_login'],
                              'password'      => $users[$x]['user_pass']); // WP uses md5, too.
    
                if (isset($users[$x]['user_level']) && $users[$x]['user_level'] <= 1) {
                    $data['userlevel'] = USERLEVEL_EDITOR;
                } elseif (isset($users[$x]['user_level']) && $users[$x]['user_level'] < 5) {
                    $data['userlevel'] = USERLEVEL_CHIEF;
                } else {
                    $data['userlevel'] = USERLEVEL_ADMIN;
                }
    
                if ($serendipity['serendipityUserlevel'] < $data['userlevel']) {
                    $data['userlevel'] = $serendipity['serendipityUserlevel'];
                }
    
                serendipity_db_insert('authors', $this->strtrRecursive($data));
                $users[$x]['authorid'] = serendipity_db_insert_id('authors', 'authorid');
                
                // Set association.
                $assoc['users'][$users[$x]['ID']] = $users[$x]['authorid'];
            }
            if ($debug) echo "<span class='msg_success'>Imported users.</span>";
            
            // Clean memory
            unset($users);
        }

        $no_cat = false;

        /* Categories (WP < 2.3 style) */
        $res = @$this->nativeQuery("SELECT cat_ID, cat_name, category_description, category_parent 
                                      FROM {$this->data['prefix']}categories 
                                  ORDER BY category_parent, cat_ID;", $wpdb);
        if (!$res) {
            $no_cat = mysql_error($wpdb);
        } else {
            if ($debug) echo "<span class='block_level'>Importing categories (WP 2.2 style)...</span>";

            // Get all the info we need
            for ($x=0 ; $x<mysql_num_rows($res) ; $x++) {
                $categories[] = mysql_fetch_assoc($res);
            }
    
            // Insert all categories as top level (we need to know everyone's ID before we can represent the hierarchy).
            for ($x=0, $c = sizeof($categories) ; $x < $c ; $x++) {
                $cat = array('category_name'        => $categories[$x]['cat_name'],
                             'category_description' => $categories[$x]['category_description'],
                             'parentid'             => 0,
                             'category_left'        => 0,
                             'category_right'       => 0);
    
                serendipity_db_insert('category', $this->strtrRecursive($cat));
                $categories[$x]['categoryid'] = serendipity_db_insert_id('category', 'categoryid');
                
                // Set association.
                $assoc['categories'][$categories[$x]['cat_ID']] = $categories[$x]['categoryid'];
            }
    
            foreach ($categories as $cat) {
                if ($cat['category_parent'] != 0) {
                    // Find the parent
                    $par_id = 0;
                    foreach ($categories as $possible_par) {
                        if ($possible_par['cat_ID'] == $cat['category_parent']) {
                            $par_id = $possible_par['categoryid'];
                            break;
                        }
                    }
    
                    if ($par_id != 0) {
                        serendipity_db_query("UPDATE {$serendipity['dbPrefix']}category 
                                                 SET parentid={$par_id} 
                                               WHERE categoryid={$cat['categoryid']};");
                    }
                }
            }

            // Clean memory
            unset($categories);

            if ($debug) echo "<span class='block_level'>Imported categories.</span>";
            if ($debug) echo "<span class='block_level'>Rebuilding category tree...</span>";
            serendipity_rebuildCategoryTree();
            if ($debug) echo "<span class='block_level'>Rebuilt category tree.</span>";
        }

        /* Categories (WP >= 2.3 style) */
        $res = @$this->nativeQuery("SELECT taxonomy.description      AS category_description, 
                                           taxonomy.parent           AS category_parent, 
                                           taxonomy.term_taxonomy_id AS cat_ID, 
                                           terms.name                AS cat_name

                                      FROM {$this->data['prefix']}term_taxonomy AS taxonomy

                                      JOIN {$this->data['prefix']}terms AS terms
                                        ON taxonomy.term_id = terms.term_id

                                     WHERE taxonomy.taxonomy = 'category' 
                                  ORDER BY taxonomy.parent, taxonomy.term_taxonomy_id", $wpdb);
        if (!$res && !$no_cat) {
            $no_cat = mysql_error($wpdb);
        } elseif ($res) {
            $no_cat = false;
            if ($debug) echo "<span class='block_level'>Importing categories (WP 2.3 style)...</span>";

            // Get all the info we need
            for ($x=0 ; $x<mysql_num_rows($res) ; $x++) {
                $categories[] = mysql_fetch_assoc($res);
            }
    
            // Insert all categories as top level (we need to know everyone's ID before we can represent the hierarchy).
            for ($x=0, $c = sizeof($categories) ; $x < $c ; $x++) {
                $cat = array('category_name'        => $categories[$x]['cat_name'],
                             'category_description' => $categories[$x]['category_description'],
                             'parentid'             => 0,
                             'category_left'        => 0,
                             'category_right'       => 0);
    
                serendipity_db_insert('category', $this->strtrRecursive($cat));
                $categories[$x]['categoryid'] = serendipity_db_insert_id('category', 'categoryid');
                
                // Set association.
                $assoc['categories'][$categories[$x]['cat_ID']] = $categories[$x]['categoryid'];
            }
    
            foreach ($categories as $cat) {
                if ($cat['category_parent'] != 0) {
                    // Find the parent
                    $par_id = 0;
                    foreach ($categories as $possible_par) {
                        if ($possible_par['cat_ID'] == $cat['category_parent']) {
                            $par_id = $possible_par['categoryid'];
                            break;
                        }
                    }
    
                    if ($par_id != 0) {
                        serendipity_db_query("UPDATE {$serendipity['dbPrefix']}category 
                                                 SET parentid={$par_id} 
                                               WHERE categoryid={$cat['categoryid']};");
                    }
                }
            }

            // Clean memory
            unset($categories);

            if ($debug) echo "<span class='block_level'>Imported categories.</span>";
            if ($debug) echo "<span class='block_level'>Rebuilding category tree...</span>";
            serendipity_rebuildCategoryTree();
            if ($debug) echo "<span class='block_level'>Rebuilt category tree.</span>";
        }
        if ($no_cat) {
            printf(COULDNT_SELECT_CATEGORY_INFO, $no_cat);
        }

        /* Entries */
        if (serendipity_db_bool($this->data['import_all'])) {
            $res = @$this->nativeQuery("SELECT * FROM {$this->data['prefix']}posts WHERE post_status IN ('publish', 'draft') ORDER BY post_date;", $wpdb);
        } else {
            $res = @$this->nativeQuery("SELECT * FROM {$this->data['prefix']}posts ORDER BY post_date;", $wpdb);
        }

        if (!$res) {
            printf(COULDNT_SELECT_ENTRY_INFO, mysql_error($wpdb));
        } else {
            if ($debug) echo "<span class='block_level'>Importing entries...</span>";
            for ($x=0, $c = mysql_num_rows($res) ; $x < $c ; $x++ ) {
                $entries[$x] = mysql_fetch_assoc($res);
    
                $content  = explode('<!--more-->', $entries[$x]['post_content'], 2);
                $body     = $content[0];
                $extended = $content[1];
    
                $entry = array('title'          => $this->decode($entries[$x]['post_title']), // htmlentities() is called later, so we can leave this.
                               'isdraft'        => ($entries[$x]['post_status'] == 'publish') ? 'false' : 'true',
                               'allow_comments' => ($entries[$x]['comment_status'] == 'open' ) ? 'true' : 'false',
                               'timestamp'      => strtotime($entries[$x]['post_date']),
                               'body'           => $this->strtr($body),
                               'extended'       => $this->strtr($extended),
                               'authorid'       => $assoc['users'][$entries[$x]['post_author']]);
    
                if (!is_int($entries[$x]['entryid'] = serendipity_updertEntry($entry))) {
                    printf(COULDNT_SELECT_ENTRY_INFO, mysql_error($wpdb));
                    echo "<span class='block_level'>ID: {$entries[$x]['ID']} - {$entry['title']}</span>";
                    return $entries[$x]['entryid'];
                }
                
                $assoc['entries'][$entries[$x]['ID']] = $entries[$x]['entryid'];
            }
            if ($debug) echo "<span class='msg_success'>Imported entries...</span>";

            // Clean memory
            unset($entries);
        }
    
        /* Entry/category (WP < 2.3 style)*/
        $no_entrycat = false;
        $res = @$this->nativeQuery("SELECT * FROM {$this->data['prefix']}post2cat;", $wpdb);
        if (!$res) {
            $no_entrycat = mysql_error($wpdb);
        } else {
            if ($debug) echo "<span class='block_level'>Importing category associations (WP 2.2 style)...</span>";
            while ($a = mysql_fetch_assoc($res)) {
                $data = array('entryid'    => $assoc['entries'][$a['post_id']],
                              'categoryid' => $assoc['categories'][$a['category_id']]);
                serendipity_db_insert('entrycat', $this->strtrRecursive($data));
            }
            if ($debug) echo "<span class='msg_success'>Imported category associations.</span>";
        }

        /* Entry/category (WP > 2.3 style)*/
        $res = @$this->nativeQuery("SELECT rel.object_id        AS post_id, 
                                           rel.term_taxonomy_id AS category_id 
                                      FROM {$this->data['prefix']}term_relationships AS rel;", $wpdb);
        if (!$res && !$no_entrycat) {
            $no_entrycat = mysql_error($wpdb);
        } elseif ($res) {
            $no_entrycat = false;
            if ($debug) echo "<span class='block_level'>Importing category associations (WP 2.3 style)...</span>";
            while ($a = mysql_fetch_assoc($res)) {
                $data = array('entryid'    => $assoc['entries'][$a['post_id']],
                              'categoryid' => $assoc['categories'][$a['category_id']]);
                serendipity_db_insert('entrycat', $this->strtrRecursive($data));
            }
            if ($debug) echo "<span class='msg_success'>Imported category associations.</span>";
        }

        if ($no_entrycat) {
            printf(COULDNT_SELECT_ENTRY_INFO, $no_entrycat);
        }

        /* Comments */
        $res = @$this->nativeQuery("SELECT * FROM {$this->data['prefix']}comments;", $wpdb);
        if (!$res) {
            printf(COULDNT_SELECT_COMMENT_INFO, mysql_error($wpdb));
        } else {
            $serendipity['allowSubscriptions'] = false;
            if ($debug) echo "<span class='block_level'>Importing comments...</span>";
            while ($a = mysql_fetch_assoc($res)) {
                $comment = array('entry_id ' => $assoc['entries'][$a['comment_post_ID']],
                                 'parent_id' => 0,
                                 'timestamp' => strtotime($a['comment_date']),
                                 'author'    => $a['comment_author'],
                                 'email'     => $a['comment_author_email'],
                                 'url'       => $a['comment_author_url'],
                                 'ip'        => $a['comment_author_IP'],
                                 'status'    => (empty($a['comment_approved']) || $a['comment_approved'] == '1') ? 'approved' : 'pending',
                                 'subscribed'=> 'false',
                                 'body'      => $a['comment_content'],
                                 'type'      => 'NORMAL');
                serendipity_db_insert('comments', $this->strtrRecursive($comment));
                if ($comment['status'] == 'approved') {
                    $cid = serendipity_db_insert_id('comments', 'id');
                    serendipity_approveComment($cid, $assoc['entries'][$a['comment_post_ID']], true);
                }
            }
            if ($debug) echo "<span class='msg_success'>Imported comments.</span>";
        }

        $serendipity['noautodiscovery'] = $noautodiscovery;

        // That was fun.
        return true;
    }
}

return 'Serendipity_Import_WordPress';

/* vim: set sts=4 ts=4 expandtab : */

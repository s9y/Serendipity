<?php # $Id: b2evolution.inc.php 1093 2006-04-13 10:49:52Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

/*****************************************************************
 *  Serendipity Importer,   by Garvin Hicking *
 * ****************************************************************/

class Serendipity_Import_Serendipity extends Serendipity_Import {
    var $info        = array('software' => 'Serendipity');
    var $data        = array();
    var $inputFields = array();
    var $categories  = array();
    var $execute     = true;
    var $debug       = true;
    var $counter     = 0;

    function getImportNotes() {
        // TODO: I18n!
        return '<p>This importer is still work in progress. It can currently import most things of the database. HOWEVER it can NOT import previously installed plugins (including their configuration) or any database tables of installed plugins. Those must be migrated manually. Also, you must use FTP to transfer your uploaded images to the new location.</p>
        <p>Please do a test-run first if you are SQL-savvy. If you encounter any errors, save the message output you get - it will definitely help debugging!</p>
        <p>This is <strong>NOT</strong> an importer meant for upgrading Serendipity. This importer assumes that both Serendipity installations use the same version.</p>
        <p>It is strongly advised that you test this importer in an isolated environment first, do not use it on a production blog unless you made sure it works in a cloned installation. Always make a backup of both the source and the target blog.<p/>
        <p>After these precautions: The importer code generally works very well for me and my purposes. Your mileage may vary.</p>';
    }

    function Serendipity_Import_Serendipity ($data) {
        global $serendipity;

        $this->data = $data;
        $this->inputFields = array(array('text' => INSTALL_DBHOST,
                                         'type' => 'input',
                                         'name' => 'host',
                                         'default' => $serendipity['dbHost']),

                                   array('text' => INSTALL_DBUSER,
                                         'type' => 'input',
                                         'name' => 'user',
                                         'default' => $serendipity['dbUser']),

                                   array('text' => INSTALL_DBPASS,
                                         'type' => 'fullprotected',
                                         'name' => 'pass'),

                                   array('text' => INSTALL_DBNAME,
                                         'type' => 'input',
                                         'name' => 'name',
                                         'default' => $serendipity['dbName']),

                                   array('text' => INSTALL_DBPREFIX,
                                         'type' => 'input',
                                         'name' => 'prefix',
                                         'default' => $serendipity['dbPrefix'] . 'import_'),

                                   array('text'    => CHARSET,
                                         'type'    => 'list',
                                         'name'    => 'charset',
                                         'value'   => 'UTF-8',
                                         'default' => $this->getCharsets(true)),

                                   array('text'    => CONVERT_HTMLENTITIES,
                                         'type'    => 'bool',
                                         'name'    => 'use_strtr',
                                         'default' => 'false'),

                                   array('text'    => 'Import Targets',
                                         'type'    => 'multilist',
                                         'name'    => 'targets',
                                         'select_size' => 6,
                                         'default' => array(
                                                          array('confkey' => 'groups' , 'confvalue' => 'Groups'),
                                                          array('confkey' => 'authors', 'confvalue' => 'Authors'),
                                                          array('confkey' => 'entries', 'confvalue' => 'Entries'),
                                                          array('confkey' => 'media'  , 'confvalue' => 'Media'),
                                                          array('confkey' => 'cat'    , 'confvalue' => 'Categories')
                                            )
                                         ),

                                   array('text'    => 'Make a verbose test run',
                                         'type'    => 'bool',
                                         'name'    => 'preflight',
                                         'default' => 'false')
                            );
    }

    function validateData() {
        return sizeof($this->data);
    }

    function getInputFields() {
        return $this->inputFields;
    }


    function import_table(&$s9ydb, $table, $primary_keys, $where = null, $dupe_check = false, $fix_relations = false, $skip_dupes = false) {
        global $serendipity;

        echo "<span class='block_level'>Starting with table <strong>{$table}</strong>...</span>";

        if ($dupe_check) {
            $dupes = serendipity_db_query("SELECT * FROM {$serendipity['dbPrefix']}" . $table . " " . $where, false, 'both', false, $dupe_check);

            if (!$this->execute) {
                echo 'Dupe-Check: <pre>' . print_r($dupes, true) . '</pre>';
            }
        }
        
        $res = $this->nativeQuery("SELECT * FROM {$this->data['prefix']}" . $table . " " . $where, $s9ydb);
        echo mysql_error($s9ydb);
        
        if (!$res || mysql_num_rows($res) < 1) {
            return false;
        }
        $this->counter = 100;

        while ($row = mysql_fetch_array($res, MYSQL_ASSOC)) {
            $this->counter++;
            if (is_array($primary_keys)) {
                foreach($primary_keys AS $primary_key) {
                    $primary_vals[$primary_key] = $row[$primary_key];
                    if ($table == 'comments') {
	                    $primary_vals['entry_id'] = $row['entry_id'];
                    }
                    unset($row[$primary_key]);
                }
            } else {
                $primary_vals = array();
            }

            $insert = true;
            if (is_array($fix_relations)) {
                foreach($fix_relations AS $primary_key => $fix_relation) {
                    foreach($fix_relation AS $fix_relation_table => $fix_relation_primary_key) {
                    
						if ($table == 'comments' && $fix_relation_table == 'entries') {
							$assoc_val = $primary_vals['entry_id'];
						} elseif (isset($primary_vals[$fix_relation_primary_key])) {
                            $assoc_val = $primary_vals[$fix_relation_primary_key];
                        } else {
							$assoc_val = $row[$primary_key];
                        }
                        
                        if (!$this->execute && empty($assoc_val)) {
                            if ($this->debug) {
                                echo '<pre>';
                                print_r($row);
                                print_r($fix_relation);
                                echo '</pre>';
                            }
                        }

                        $new_val = $this->storage[$fix_relation_table][$fix_relation_primary_key][$assoc_val];
                        
                        if ($skip_dupes && $assoc_val == $new_val) {
                            $insert = false;
                        }

                        if (!empty($new_val)) {
                            $row[$primary_key] = $new_val;
                        }
                        
                        if (!$this->execute && $this->debug) {
                            echo "<span>Fix relation from $fix_relation_table.$fix_relation_primary_key={$primary_vals[$fix_relation_primary_key]} to {$row[$primary_key]} (assoc_val: $assoc_val)</span>";
                        }
                    }
                }
            }

            if ($insert) {
                if ($dupe_check && isset($dupes[$row[$dupe_check]])) {
                    if ($this->debug) {
                        echo "Skipping duplicate: <pre>" . print_r($dupes[$row[$dupe_check]], true) . "</pre>";
                    }
                    foreach($primary_vals AS $primary_key => $primary_val) {
                        $this->storage[$table][$primary_key][$primary_val] = $dupes[$row[$dupe_check]][$primary_key];
                        $this->storage['dupes'][$table][$primary_key][$primary_val] = $dupes[$row[$dupe_check]][$primary_key];
                    }
                } elseif ($this->execute) {
                    serendipity_db_insert($table, $this->strtrRecursive($row));
                    foreach($primary_vals AS $primary_key => $primary_val) {
                        $dbid = serendipity_db_insert_id($table, $primary_key);
                        $this->storage[$table][$primary_key][$primary_val] = $dbid;
                    }
                    echo "<span class='block_level'>Migrated entry #{$dbid} into {$table}.</span>";
                } else {
                    if ($this->debug) {
                        echo 'DB Insert: <pre>' . print_r($row, true) . '</pre>';
                    }
                    foreach($primary_vals AS $primary_key => $primary_val) {
                        $this->storage[$table][$primary_key][$primary_val] = $this->counter;
                    }
                }
                
                foreach($this->storage[$table] AS $primary_key => $primary_data) {
                	foreach($primary_data AS $primary_val => $replace_val) {
                		serendipity_set_config_var('import_s9y_' . $table . '_' . $primary_key . '_' . $primary_val, $replace_val, 99);
                	}
                }
            } else {
                if ($this->debug && !$this->execute) {
                    echo "<span class='block_level'>Ignoring Duplicate.</span>";
                }
            }
        }
        
        if (!$this->execute) {
            echo 'Storage on '. $table . ':<pre>' . print_r($this->storage[$table], true) . '</pre>';
        } else {
            echo "<span class='block_level'>Finished table <strong>{$table}</strong></span>";
        }
    }




    function import_groups(&$s9ydb) {
        global $serendipity;

        $this->import_table(
            $s9ydb,
            'groups',
            array('id'), 
            null,
            'name',
            false
        );

        $this->import_table(
            $s9ydb, 
            'groupconfig', 
            array('id'),
            null, 
            false, 
            array('id' => array('groups' => 'id')),
            true
        );
    }

    function import_authors(&$s9ydb) {
        global $serendipity;

        $this->import_table(
            $s9ydb, 
            'authors', 
            array('authorid'), 
            null, 
            'username',
            false
        );

        $this->import_table(
            $s9ydb, 
            'authorgroups', 
            false,
            null,
            false,
            array('authorid' => array('authors' => 'authorid'),
                  'groupid'  => array('groups'  => 'id'))
        );

        $this->import_table(
            $s9ydb, 
            'config', 
            false,
            ' WHERE authorid > 0',
            false,
            array('authorid' => array('authors' => 'authorid'))
        );

        $this->import_table(
            $s9ydb, 
            'permalinks', 
            false,
            ' WHERE type = "author" ',
            false,
            array('entry_id' => array('authors' => 'authorid'))
        );
    }

    function import_entries(&$s9ydb) {
        global $serendipity;

        $this->import_table(
            $s9ydb, 
            'entries', 
            array('id'),
            null,
            false,
            array('authorid' => array('authors' => 'authorid'))
        );

        $this->import_table(
            $s9ydb, 
            'comments', 
            array('id'),
            'ORDER BY parent_id ASC',
            false,
            array('entry_id'  => array('entries' => 'id'),
                  'parent_id' => array('comments' => 'id'))
        );

        $this->import_table(
            $s9ydb, 
            'entryproperties', 
            false,
            null,
            false,
            array('entryid' => array('entries' => 'id'))
        );

        $this->import_table(
            $s9ydb, 
            'references', 
            array('id'),
            null,
            false,
            array('entry_id' => array('entries' => 'id'))
        );

        $this->import_table(
            $s9ydb, 
            'exits', 
            false,
            null,
            false,
            array('entry_id' => array('entries' => 'id'))
        );

        $this->import_table(
            $s9ydb, 
            'referrers', 
            false,
            null,
            false,
            array('entry_id' => array('entries' => 'id'))
        );

        $this->import_table(
            $s9ydb, 
            'permalinks', 
            false,
            ' WHERE type = "entry" ',
            false,
            array('entry_id' => array('entries' => 'id'))
        );
    }

    function import_media(&$s9ydb) {
        global $serendipity;

        $this->import_table(
            $s9ydb, 
            'images', 
            array('id'),
            null,
            false,
            array('authorid' => array('authors' => 'authorid'))
        );

        $this->import_table(
            $s9ydb, 
            'mediaproperties', 
            false,
            null,
            false,
            array('mediaid' => array('images' => 'id'))
        );

        $this->import_table(
            $s9ydb, 
            'access', 
            false,
            ' WHERE artifact_type = "directory" ',
            false,
            array('groupid' => array('groups' => 'id'))
        );
    }


    function import_cat(&$s9ydb) {
        global $serendipity;

        $this->import_table(
            $s9ydb, 
            'category', 
            array('categoryid'),
            ' ORDER BY parentid ASC',
            false,
            array('authorid' => array('authors' => 'authorid'),
                  'parentid' => array('category' => 'categoryid'))
        );

        $this->import_table(
            $s9ydb, 
            'entrycat', 
            false,
            null,
            false,
            array('entryid'    => array('entries' => 'id'),
                  'categoryid' => array('category' => 'categoryid'))
        );

        $this->import_table(
            $s9ydb, 
            'permalinks', 
            false,
            ' WHERE type = "category" ',
            false,
            array('entry_id' => array('category' => 'categoryid'))
        );

        $this->import_table(
            $s9ydb, 
            'access', 
            false,
            ' WHERE artifact_type = "category" ',
            false,
            array('groupid'     => array('groups' => 'id'),
                  'artifact_id' => array('category' => 'categoryid'))
        );

        serendipity_rebuildCategoryTree();
    }

    function import() {
        global $serendipity;

        // Save this so we can return it to its original value at the end of this method.
        $noautodiscovery = isset($serendipity['noautodiscovery']) ? $serendipity['noautodiscovery'] : false;

        if ($this->data['autodiscovery'] == 'false') {
            $serendipity['noautodiscovery'] = 1;
        }

        if ($this->data['preflight'] == 'true') {
            $this->execute = false;
            $this->debug   = true;
        }

        $this->getTransTable();

        $users = array();
        $entries = array();

        if (!extension_loaded('mysql')) {
            return MYSQL_REQUIRED;
        }

        $s9ydb = @mysql_connect($this->data['host'], $this->data['user'], $this->data['pass']);
        if (!$s9ydb) {
            return sprintf(COULDNT_CONNECT, $this->data['host']);
        }

        if (!@mysql_select_db($this->data['name'])) {
            return sprintf(COULDNT_SELECT_DB, mysql_error($s9ydb));
        }

        if (!is_array($this->data['targets'])) {
            return "No targets selected";
        }
        
        $this->storage = array();
        foreach($this->data['targets'] AS $target) {
            $this->{'import_' . $target}($s9ydb);
        }
        return true;
    }
}

return 'Serendipity_Import_Serendipity';

/* vim: set sts=4 ts=4 expandtab : */

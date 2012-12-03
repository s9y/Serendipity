<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (defined('S9Y_FRAMEWORK_CONFIG')) {
    return;
}
@define('S9Y_FRAMEWORK_CONFIG', true);

/**
 * Adds a new author account
 *
 * @access public
 * @param   string  New username
 * @param   string  New password
 * @param   string  The realname of the user
 * @param   string  The email address of the user
 * @param   int     The userlevel of a user
 * @return  int     The new user ID of the added author
 */
function serendipity_addAuthor($username, $password, $realname, $email, $userlevel=0, $hashtype=1) {
    global $serendipity;
    $password = serendipity_hash($password);
    $query = "INSERT INTO {$serendipity['dbPrefix']}authors (username, password, realname, email, userlevel, hashtype)
                        VALUES  ('" . serendipity_db_escape_string($username) . "',
                                 '" . serendipity_db_escape_String($password) . "',
                                 '" . serendipity_db_escape_String($realname) . "',
                                 '" . serendipity_db_escape_String($email) . "',
                                 '" . serendipity_db_escape_String($userlevel) . "',
                                 '" . serendipity_db_escape_String($hashtype) . "'
                                 )";
    serendipity_db_query($query);
    $cid = serendipity_db_insert_id('authors', 'authorid');

    $data = array(
        'authorid' => $cid,
        'username' => $username,
        'realname' => $realname,
        'email'    => $email
    );

    serendipity_insertPermalink($data, 'author');
    return $cid;
}

/**
 * Delete an author account
 *
 * (Note, this function does not delete entries by an author)
 *
 * @access public
 * @param   int     The author ID to delete
 * @return  boolean     True on success, false on error or unsufficient privileges
 */
function serendipity_deleteAuthor($authorid) {
    global $serendipity;

    if (!serendipity_checkPermission('adminUsersDelete')) {
        return false;
    }

    if (serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}authors WHERE authorid=" . (int)$authorid)) {
        serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}permalinks WHERE entry_id=" . (int)$authorid ." and type='author'");
    }
    return true;
}

/**
 * Removes a configuration value from the Serendipity Configuration
 *
 * Global config items have the authorid 0, author-specific configuration items have the corresponding authorid.
 *
 * @access public
 * @param   string      The name of the configuration value
 * @param   int         The ID of the owner of the config value (0: global)
 * @return null
 */
function serendipity_remove_config_var($name, $authorid = 0) {
    global $serendipity;
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}config where name='" . serendipity_db_escape_string($name) . "' AND authorid = " . (int)$authorid);
}

/**
 * Sets a configuration value for the Serendipity Configuration
 *
 * Global config items have the authorid 0, author-specific configuration items have the corresponding authorid.
 *
 * @access public
 * @param   string      The name of the configuration value
 * @param   string      The value of the configuration item
 * @param   int         The ID of the owner of the config value (0: global)
 * @return  null
 */
function serendipity_set_config_var($name, $val, $authorid = 0) {
    global $serendipity;

    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}config where name='" . serendipity_db_escape_string($name) . "' AND authorid = " . (int)$authorid);

    if ($name == 'password' || $name == 'check_password') {
        return;
    }

    $r = serendipity_db_insert('config', array('name' => $name, 'value' => $val, 'authorid' => $authorid));

    if ($authorid === 0 || $authorid === $serendipity['authorid']) {
        if ($val === 'false') {
            $serendipity[$name] = false;
        } else {
            $serendipity[$name] = $val;
        }
    }

    if (is_string($r)) {
        echo $r;
    }
}

/**
 * Retrieve a global configuration value for a specific item of the current Serendipity Configuration
 *
 * @access public
 * @param   string      The name of the configuration value
 * @param   string      The default value of a configuration item, if not found in the Database
 * @param   boolean     If set to true, the default value of a configuration item will be returned if the item is set, but empty. If false, an empty configuration value will be returned empty. This is required for getting default values if you do not want to store/allow empty config values.
 * @return  string      The configuration value content
 */
function serendipity_get_config_var($name, $defval = false, $empty = false) {
    global $serendipity;
    if (isset($serendipity[$name])) {
        if ($empty && gettype($serendipity[$name]) == 'string' && $serendipity[$name] === '') {
            return $defval;
        } else {
            return $serendipity[$name];
        }
    } else {
        return $defval;
    }
}

/**
 * Retrieve an author-specific configuration value for an item of the Serendipity Configuration stored in the DB
 *
 * Despite the serendipity_get_config_var() function, this will retrieve author-specific values straight from the Database.
 *
 * @access public
 * @param   string      The name of the configuration value
 * @param   int         The ID of the owner of the config value (0: global)
 * @param   string      The default value of a configuration option, if not set in the DB
 * @return  string      The configuration value content
 */
function serendipity_get_user_config_var($name, $authorid, $default = '') {
    global $serendipity;

    $author_sql = '';
    if (!empty($authorid)) {
        $author_sql = "authorid = " . (int)$authorid . " AND ";
    } elseif (isset($serendipity[$name])) {
        return $serendipity[$name];
    }

    $r = serendipity_db_query("SELECT value FROM {$serendipity['dbPrefix']}config WHERE $author_sql name = '" . $name . "' LIMIT 1", true);

    if (is_array($r)) {
        return $r[0];
    } else {
        return $default;
    }
}

/**
 * Retrieves an author-specific account value
 *
 * This retrieves specific account data from the user configuration, not from the serendipity configuration.
 *
 * @access public
 * @param   string      The name of the configuration value
 * @param   int         The ID of the author to fetch the configuration for
 * @param   string      The default value of a configuration option, if not set in the DB
 * @return  string      The configuration value content
 */
function serendipity_get_user_var($name, $authorid, $default) {
    global $serendipity;

    $r = serendipity_db_query("SELECT $name FROM {$serendipity['dbPrefix']}authors WHERE authorid = " . (int)$authorid, true);

    if (is_array($r)) {
        return $r[0];
    } else {
        return $default;
    }
}

/**
 * Updates data from the author-specific account
 *
 * This sets the personal account data of a serendipity user within the 'authors' DB table
 *
 * @access public
 * @param   string      The name of the configuration value
 * @param   string      The content of the configuration value
 * @param   int         The ID of the author to set the configuration for
 * @param   boolean     If set to true, the stored config value will be imported to the Session/current config of the user. This is applied for example when you change your own user's preferences and want it to be immediately reflected in the interface.
 * @return null
 */
function serendipity_set_user_var($name, $val, $authorid, $copy_to_s9y = true) {
    global $serendipity;

    // When inserting a DB value, this array maps the new values to the corresponding s9y variables
    static $user_map_array = array(
        'username'  => 'serendipityUser',
        'email'     => 'serendipityEmail',
        'userlevel' => 'serendipityUserlevel'
    );

    // Special case for inserting a password
    switch($name) {
        case 'check_password':
            //Skip this field.  It doesn't need to be stored.
            return;
        case 'password':
            if (empty($val)) {
                return;
            }

            $val = serendipity_hash($val);
            $copy_to_s9y = false;
            break;

        case 'right_publish':
        case 'mail_comments':
        case 'mail_trackbacks':
            $val = (serendipity_db_bool($val) ? 1 : '0');
            break;
    }

    serendipity_db_query("UPDATE {$serendipity['dbPrefix']}authors SET $name = '" . serendipity_db_escape_string($val) . "' WHERE authorid = " . (int)$authorid);

    if ($copy_to_s9y) {
        if (isset($user_map_array[$name])) {
            $key = $user_map_array[$name];
        } else {
            $key = 'serendipity' . ucfirst($name);
        }

        $_SESSION[$key] = $serendipity[$key] = $val;
    }
}

/**
 * Gets the full filename and path of a template/style/theme file
 *
 * The returned full path is depending on the second parameter, where you can either fetch a HTTP path, or a realpath.
 * The file is searched in the current template, and if it is not found there, it is returned from the default template.
 *
 * @access public
 * @param   string      The filename to search for in the selected template
 * @param   string      The path selector that tells whether to return a HTTP or realpath
 * @return  string      The full path+filename to the requested file
 */
function serendipity_getTemplateFile($file, $key = 'serendipityHTTPPath') {
    global $serendipity;

    $directories = array();

    $directories[] = isset($serendipity['template']) ? $serendipity['template'] . '/' : '';
    if (isset($serendipity['template_engine']) && (stristr($file, 'admin/') === false || $serendipity['template_engine'] != 'default')) {
         $p = explode(',', $serendipity['template_engine']);
         foreach($p AS $te) {
             $directories[] = trim($te) . '/';
         }
    }

    $directories[] = $serendipity['defaultTemplate'] .'/';
    $directories[] = 'default/';

    foreach ($directories as $directory) {
        $templateFile = $serendipity['templatePath'] . $directory . $file;
        if (file_exists($serendipity['serendipityPath'] . $templateFile)) {
            return $serendipity[$key] . $templateFile;
        }
    }

    if (preg_match('@\.(tpl|css|php)@i', $file) && !stristr($file, 'plugin')) {
        return $file;
    }

    return false;
}

/**
 * Loads all configuration values and imports them to the $serendipity array
 *
 * This function may be called twice - once for the global config and once for
 * user-specific config
 *
 * @access public
 * @param   int     The Authorid to fetch the configuration from (0: global)
 * @return  null
 */
function serendipity_load_configuration($author = null) {
    global $serendipity;
    static $config_loaded = array();

    if (isset($config_loaded[$author])) {
        return true;
    }

    if (!empty($author)) {
        // Replace default configuration directives with user-relevant data
        $rows =& serendipity_db_query("SELECT name,value
                                        FROM {$serendipity['dbPrefix']}config
                                        WHERE authorid = '". (int)$author ."'");
    } else {
        // Only get default variables, user-independent (frontend)
        $rows =& serendipity_db_query("SELECT name, value
                                        FROM {$serendipity['dbPrefix']}config
                                        WHERE authorid = 0");
    }

    if (is_array($rows)) {
        foreach ($rows as $row) {
            // Convert 'true' and 'false' into booleans
            $serendipity[$row['name']] = serendipity_get_bool($row['value']);
        }
    }
    $config_loaded[$author] = true;

    // Set baseURL to defaultBaseURL
    if ((empty($author) || empty($serendipity['baseURL'])) && isset($serendipity['defaultBaseURL'])) {
        $serendipity['baseURL'] = $serendipity['defaultBaseURL'];
    }
    

    // Store default language
    $serendipity['default_lang'] = $serendipity['lang'];
}

/**
 * Perform logout functions (destroys session data)
 *
 * @access public
 * @return null
 */
function serendipity_logout() {
    $_SESSION['serendipityAuthedUser'] = false;
    serendipity_session_destroy();
    serendipity_deleteCookie('author_information');
    serendipity_deleteCookie('author_token');
}

/**
 * Destroys a session, keeps important stuff intact.
 * @access public
 * @return null
 */
function serendipity_session_destroy() {
    $no_smarty = $_SESSION['no_smarty'];
    @session_destroy();
    session_regenerate_id();
    session_start();

    $_SESSION['SERVER_GENERATED_SID'] = true;
    $_SESSION['no_smarty']            = $no_smarty;
}

/**
 * Perform login to Serendipity
 *
 * @access public
 * @param   boolean     If set to true, external plugins will be queried for getting a login
 * @return  boolean     Return true, if the user is logged in. False if not.
 */
function serendipity_login($use_external = true) {
    global $serendipity;

    if (serendipity_authenticate_author('', '', false, $use_external)) {
        #The session has this data already
        #we previously just checked the value of $_SESSION['serendipityAuthedUser'] but
        #we need the authorid still, so call serendipity_authenticate_author with blank
        #params
        return true;
    }

    // First try login via POST data. If true, the userinformation will be stored in a cookie (optionally)
    if (serendipity_authenticate_author($serendipity['POST']['user'], $serendipity['POST']['pass'], false, $use_external)) {
        if (empty($serendipity['POST']['auto'])) {
            serendipity_deleteCookie('author_information');
            serendipity_deleteCookie('author_information_iv');
            
            return false;
        } else {
            serendipity_issueAutologin(
                array('username' => $serendipity['POST']['user'],
                      'password' => $serendipity['POST']['pass']
                )
            );
            return true;
        }
    // Now try login via COOKIE data
    } elseif (isset($serendipity['COOKIE']['author_information'])) {
        $cookie = serendipity_checkAutologin($serendipity['COOKIE']['author_information'], $serendipity['COOKIE']['author_information_iv']);

        $data = array('ext' => $use_external, 'mode' => 1, 'user' => $cookie['username'], 'pass' => $cookie['password']);
        serendipity_plugin_api::hook_event('backend_loginfail', $data);

        if (is_array($cookie) && serendipity_authenticate_author($cookie['username'], $cookie['password'], false, $use_external)) {
            return true;
        } else {
            serendipity_deleteCookie('author_information');
            serendipity_deleteCookie('author_information_iv');
            return false;
        }
    }
    
    $data = array('ext' => $use_external, 'mode' => 2, 'user' => $serendipity['POST']['user'], 'pass' => $serendipity['POST']['pass']);
    serendipity_plugin_api::hook_event('backend_loginfail', $data);
}

/**
 * Issue a new auto login cookie
 * @param array The input data
 */
function serendipity_issueAutologin($array) {
    global $serendipity;

    $package = serialize($array);

    if (function_exists('mcrypt_encrypt')) {
        // Secure the package data when being stored inside the Database
        $iv  = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_CBC), MCRYPT_RAND);
        $key = base64_encode($iv);
        $package = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, $package, MCRYPT_MODE_CBC, $iv);
        serendipity_setCookie('author_information_iv', $key);
    }
    $package = base64_encode($package);

    $rnd = md5(uniqid(time(), true) . $_SERVER['REMOTE_ADDR']);

    // Delete possible current cookie. Also delete any autologin keys that smell like 3-week-old, dead fish.
    if (stristr($serendipity['dbType'], 'sqlite')) {
        $cast = "name";
    } else {
        // Adds explicits casting for mysql, postgresql and others.
        $cast = "cast(name as integer)";
    }

    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}options 
                                WHERE okey = 'l_" . serendipity_db_escape_string($serendipity['COOKIE']['author_information']) . "'
                                   OR (okey LIKE 'l_%' AND $cast < " . (time() - 1814400) . ")");

    // Issue new autologin cookie
    serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}options (name, value, okey) VALUES ('" . time() . "', '" . serendipity_db_escape_string($package) . "', 'l_" . $rnd . "')");
    serendipity_setCookie('author_information', $rnd);
}

/**
 * Checks a new auto login cookie
 * @param array The input data
 */
function serendipity_checkAutologin($ident, $iv) {
    global $serendipity;

    // Fetch login data from DB
    $autologin =& serendipity_db_query("SELECT * FROM {$serendipity['dbPrefix']}options WHERE okey = 'l_" . serendipity_db_escape_string($ident) . "' LIMIT 1", true, 'assoc');
    if (!is_array($autologin)) {
        return false;
    }

    if (function_exists('mcrypt_decrypt') && !empty($iv)) {
        $key    = $iv;
        $iv     = base64_decode($iv);
        $cookie = unserialize(mcrypt_decrypt(MCRYPT_BLOWFISH, $key, base64_decode($autologin['value']), MCRYPT_MODE_CBC, $iv));
    } else {
        $cookie = unserialize(base64_decode($autologin['value']));
    }

    if ($autologin['name'] < (time()-86400)) {
        // Issued autologin cookie has been issued more than 1 day ago. Re-Issue new cookie, invalidate old one to prevent abuse
        if ($serendipity['expose_s9y']) serendipity_header('X-ReIssue-Cookie: +' . (time() - $autologin['name']) . 's');
        serendipity_issueAutologin($cookie);
    }

    return $cookie;
}

/**
 * Set a session cookie which can identify a user accross http/https boundaries
 */
function serendipity_setAuthorToken() {
    $hash = sha1(uniqid(rand(), true));
    serendipity_setCookie('author_token', $hash);
    $_SESSION['author_token'] = $hash;
}

/**
 * Perform user authentication routine
 *
 * If a user is already authenticated via session data, this bypasses some routines.
 * After a user has ben authenticated, several SESSION variables ar set.
 * If the authentication fails, the session is destroyed.
 *
 * @access public
 * @param   string      The username to check
 * @param   string      The password to check (may contain plaintext or MD5 hash)
 * @param   boolean     Indicates whether the input password is already in MD5 format (TRUE) or not (FALSE).
 * @param   boolean     Indicates whether to query external plugins for authentication
 * @return  boolean     True on success, False on error
 */
function serendipity_authenticate_author($username = '', $password = '', $is_hashed = false, $use_external = true) {
    global $serendipity;
    static $debug = false;
    static $debugc = 0;
    
    if ($debug) {
        $fp = fopen('login.log', 'a');
        flock($fp, LOCK_EX);
        $debugc++;
        fwrite($fp, date('Y-m-d H:i') . ' - #' . $debugc . ' Login init [' . $username . ',' . $password . ',' . (int)$is_hashed . ',' . (int)$use_external . ']' . ' (' . $_SERVER['REMOTE_ADDR'] . ',' . $_SERVER['REQUEST_URI'] . ', ' . session_id() . ')' . "\n");
    }

    if (isset($_SESSION['serendipityUser']) && isset($_SESSION['serendipityPassword']) && isset($_SESSION['serendipityAuthedUser']) && $_SESSION['serendipityAuthedUser'] == true) {
        $username = $_SESSION['serendipityUser'];
        $password = $_SESSION['serendipityPassword'];
        // For safety reasons when multiple blogs are installed on the same host, we need to check the current author each time to not let him log into a different blog with the same sessiondata
        #$is_hashed = true;
        if ($debug) fwrite($fp, date('Y-m-d H:i') . ' - Recall from session: ' . $username . ':' . $password . "\n");
    }

    if ($debug) fwrite($fp, date('Y-m-d H:i') . ' - Login ext check' . "\n");
    $is_authenticated = false;
    serendipity_plugin_api::hook_event('backend_login', $is_authenticated, NULL);
    if ($is_authenticated) {
        return true;
    }

    if ($debug) fwrite($fp, date('Y-m-d H:i') . ' - Login username check:' . $username . "\n");
    if ($username != '') {
        if ($use_external) {
            serendipity_plugin_api::hook_event('backend_auth', $is_hashed, array('username' => $username, 'password' => $password));
        }

        $query = "SELECT DISTINCT
                    email, password, realname, authorid, userlevel, right_publish, hashtype
                  FROM
                    {$serendipity['dbPrefix']}authors
                  WHERE
                    username   = '" . serendipity_db_escape_string($username) . "'";
        if ($debug) fwrite($fp, date('Y-m-d H:i') . ' - Login check (' . serialize($is_hashed) . ', ' . $_SESSION['serendipityPassword'] . '):' . $query . "\n");

        $rows =& serendipity_db_query($query, false, 'assoc');
        if (is_array($rows)) {
            foreach($rows AS $row) {
                if ($is_valid_user) continue;
                $is_valid_user = false;

                // Old MD5 hashing routine. Will convert user.
                if (empty($row['hashtype']) || $row['hashtype'] == 0) {
                    
                    if (isset($serendipity['hashkey']) && (time() - $serendipity['hashkey']) >= 15768000) {
                        die('You can no longer login with an old-style MD5 hash to prevent MD5-Hostage abuse. 
                             Please ask the Administrator to set you a new password.');
                    }

                    if ( ($is_hashed === false && (string)$row['password'] === (string)md5($password)) ||
                         ($is_hashed !== false && (string)$row['password'] === (string)$password) ) {

                        serendipity_db_query("UPDATE {$serendipity['dbPrefix']}authors
                                                 SET password = '" . ($is_hashed === false ? serendipity_hash($password) : $password) . "',
                                                     hashtype = 1
                                               WHERE authorid = '" . $row['authorid'] . "'");
                        if ($debug) fwrite($fp, date('Y-m-d H:i') . ' - Migrated user:' . $row['username'] . "\n");
                        $is_valid_user = true;
                    } else {
                        continue;
                    }                    
                } else {
                    if ( ($is_hashed === false && (string)$row['password'] === (string)serendipity_hash($password)) ||
                         ($is_hashed !== false && (string)$row['password'] === (string)$password) ) {

                        $is_valid_user = true;
                        if ($debug) fwrite($fp, date('Y-m-d H:i') . ' - Validated ' . $row['password'] . ' == ' . ($is_hashed === false ? 'unhash:' . serendipity_hash($password) : 'hash:' . $password) . "\n");
                    } else {
                        if ($debug) fwrite($fp, date('Y-m-d H:i') . ' - INValidated ' . $row['password'] . ' == ' . ($is_hashed === false ? 'unhash:' . serendipity_hash($password) : 'hash:' . $password) . "\n");
                        continue;
                    }                    
                }

                // This code is only reached, if the password before is valid.
                if ($is_valid_user) {
                    if ($debug) fwrite($fp, date('Y-m-d H:i') . ' [sid:' . session_id() . '] - Success.' . "\n");
                    serendipity_setCookie('old_session', session_id(), false);
                    if (!$is_hashed) {
                        serendipity_setAuthorToken();
                        $_SESSION['serendipityPassword']    = $serendipity['serendipityPassword'] = $password;
                    }

                    $_SESSION['serendipityUser']        = $serendipity['serendipityUser']         = $username;
                    $_SESSION['serendipityRealname']    = $serendipity['serendipityRealname']     = $row['realname'];
                    $_SESSION['serendipityEmail']       = $serendipity['serendipityEmail']        = $row['email'];
                    $_SESSION['serendipityAuthorid']    = $serendipity['authorid']                = $row['authorid'];
                    $_SESSION['serendipityUserlevel']   = $serendipity['serendipityUserlevel']    = $row['userlevel'];
                    $_SESSION['serendipityAuthedUser']  = $serendipity['serendipityAuthedUser']   = true;
                    $_SESSION['serendipityRightPublish']= $serendipity['serendipityRightPublish'] = $row['right_publish'];
                    $_SESSION['serendipityHashType']    = $serendipity['serendipityHashType']     = $row['hashtype'];
                    
                    serendipity_load_configuration($serendipity['authorid']);
                    serendipity_setCookie('userDefLang', $serendipity['lang'], false);
                    return true;
                }
            }
        }

        // Only reached, when proper login did not yet return true.
        if ($debug) fwrite($fp, date('Y-m-d H:i') . ' - FAIL.' . "\n");
        
        $_SESSION['serendipityAuthedUser'] = false;
        serendipity_session_destroy();
    }

    if ($debug) {
        fwrite($fp, date('Y-m-d H:i') . ' [sid:' . session_id() . '] - Uninit' . "\n");
        fclose($fp);
    }

    return false;
}

/**
 * Check if a user is logged in
 *
 * @access public
 * @return boolean  TRUE when logged in, FALSE when not.
 */
function serendipity_userLoggedIn() {
    if ($_SESSION['serendipityAuthedUser'] === true && IS_installed) {
        return true;
    } else {
        return false;
    }
}

/**
 * A clone of an ifsetor() function to set a variable conditional on if the target already exists
 *
 * The function sets the contents of $source into the $target variable, but only if $target is not yet set. Eases up some if...else logic or multiple ternary operators
 *
 * @access public
 * @param   mixed   Source variable that should be set into the target variable (reference call!)
 * @param   mixed   Target variable, that should get the contents of the source variable (reference call!)
 * @return  boolean True, when $target was not yet set and has been altered. False when no changes where made.
 */
function serendipity_restoreVar(&$source, &$target) {
    global $serendipity;

    if (isset($source) && !isset($target)) {
        $target = $source;
        return true;
    }

    return false;
}

/**
 * Echo Javascript code to set a cookie variable
 *
 * This function is useful if your HTTP headers were already sent, but you still want to set a cookie
 * Note that contents are echo'd, not return'd.
 *
 * @access public
 * @param   string      The name of the cookie variable
 * @param   string      The contents of the cookie variable
 * @return  null
 */
function serendipity_JSsetCookie($name, $value) {
    $name  = htmlentities($name);
    $value = urlencode($value);

    echo '<script type="text/javascript">SetCookie("' . $name . '", unescape("' . $value . '"))</script>' . "\n";
}

/**
 * Set a Cookie via HTTP calls, and update $_COOKIE plus $serendipity['COOKIE'] array.
 *
 * @access public
 * @param   string      The name of the cookie variable
 * @param   string      The contents of the cookie variable
 * @return null
 */
function serendipity_setCookie($name, $value, $securebyprot = true) {
    global $serendipity;

    $host = $_SERVER['HTTP_HOST'];
    if ($securebyprot) {
        $secure = (strtolower($_SERVER['HTTPS']) == 'on') ? true : false;
        if ($pos = strpos($host, ":")) {
            $host = substr($host, 0, $pos);
        }
    } else {
        $secure = false;
    }
    
    // If HTTP-Hosts like "localhost" are used, current browsers reject cookies.
    // In this case, we disregard the HTTP host to be able to set that cookie.
    if (substr_count($host, '.') < 1) {
        $host = '';
    }

    setcookie("serendipity[$name]", $value, time()+60*60*24*30, $serendipity['serendipityHTTPPath'], $host, $secure);
    $_COOKIE[$name] = $value;
    $serendipity['COOKIE'][$name] = $value;
}

/**
 * Deletes an existing cookie value
 *
 * LONG
 *
 * @access public
 * @param   string      Name of the cookie to delete
 * @return
 */
function serendipity_deleteCookie($name) {
    global $serendipity;

    $host = $_SERVER['HTTP_HOST'];
    if ($pos = strpos($host, ":")) {
        $host = substr($host, 0, $pos);
    }

    // If HTTP-Hosts like "localhost" are used, current browsers reject cookies.
    // In this case, we disregard the HTTP host to be able to set that cookie.
    if (substr_count($host, '.') < 1) {
        $host = '';
    }
                        
    setcookie("serendipity[$name]", '', time()-4000, $serendipity['serendipityHTTPPath'], $host);
    unset($_COOKIE[$name]);
    unset($serendipity['COOKIE'][$name]);
}

/**
 * Performs a check whether an iframe for the admin section shall be emitted
 *
 * The iframe is used for previewing an entry with the stylesheet of the frontend.
 * It fetches its data from the session input data.
 *
 * @access private
 * @return boolean  True, if iframe was requested, false if not.
 */
function serendipity_is_iframe() {
    global $serendipity;

    if ($serendipity['GET']['is_iframe'] && is_array($_SESSION['save_entry'])) {
        include_once S9Y_INCLUDE_PATH . 'include/functions_entries_admin.inc.php';
        // An iframe may NOT contain <html> and </html> tags, that's why we emit different headers here than on serendipity_admin.php

        // We need to restore GET/POST variables to that depending plugins inside the iframe
        // can still fetch all that variables; and we also tighten security by not allowing
        // to pass any different GET/POST variables to our iframe.
        $iframe_mode         = $serendipity['GET']['iframe_mode'];
        $serendipity['POST'] = &$_SESSION['save_entry_POST'];
        $serendipity['GET']  = &$_SESSION['save_entry_POST']; // GET-Vars are the same as POST to ensure compatibility.
        ignore_user_abort(true);
        serendipity_iframe($_SESSION['save_entry'], $iframe_mode, true);
        return true;
    }
    return false;
}

/**
 * Prints the content of the iframe.
 *
 * Called by serendipity_is_iframe, when preview is requested. Fetches data from session.
 * An iframe is used so that a single s9y page must not timeout on intensive operations,
 * and so that the frontend stylesheet can be embedded without screwing up the backend.
 *
 * @access private
 * @see serendipity_is_iframe()
 * @param   mixed   The entry array (comes from session variable)
 * @param   string  Indicates whether an entry is previewed or saved. Save performs XML-RPC calls.
 * @param   boolean Use smarty templating?
 * @return  boolean Indicates whether iframe data was printed
 */
function serendipity_iframe(&$entry, $mode = null, $use_smarty = true) {
    global $serendipity;

    if (empty($mode) || !is_array($entry)) {
        return false;
    }

    if ($use_smarty) {
        $serendipity['smarty_raw_mode'] = true; // Force output of Smarty stuff in the backend
        $serendipity['smarty_preview']  = true;
        serendipity_smarty_init();
        $serendipity['smarty']->assign('is_preview',  true);
        ob_start();
    }

    $show = false;
    switch ($mode) {
        case 'save':
            echo '<div class="clearfix">';
            echo '<div style="float: left; height: 75px"></div>';
            $res = serendipity_updertEntry($entry);

            if (is_string($res)) {
                echo '<div class="serendipity_msg_error">' . ERROR . ': <b>' . $res . '</b></div>';
            } else {
                if (!empty($serendipity['lastSavedEntry'])) {
                    // Last saved entry must be propagated to entry form so that if the user re-edits it,
                    // it needs to be stored with the new ID.
                    echo '<script type="text/javascript">parent.document.forms[\'serendipityEntry\'][\'serendipity[id]\'].value = "' . $serendipity['lastSavedEntry'] . '";</script>';
                }
                $entrylink = serendipity_archiveURL($res, $entry['title'], 'serendipityHTTPPath', true, array('timestamp' => $entry['timestamp']));
                echo '<div class="serendipityAdminMsgSuccess msg_success"><img class="img_error" src="' . serendipity_getTemplateFile('admin/img/admin_msg_success.png') . '" alt="" />' . ENTRY_SAVED . ' (<a href="' . $entrylink . '" target="_blank">' . VIEW . '</a>)</div>';
            }
            echo '</div>';

            $show = true;
            break;

        case 'preview':
            echo '<div class="clearfix">';
            echo '<div id="serendipity_preview_spacer" style="float: left; height: 225px"></div>';
            serendipity_printEntries(array($entry), ($entry['extended'] != '' ? 1 : 0), true);
            echo '</div>';

            $show = true;
            break;
    }

    if ($use_smarty) {
        $preview = ob_get_contents();
        ob_end_clean();
        $serendipity['smarty']->assignByRef('preview', $preview);
        $serendipity['smarty']->display(serendipity_getTemplateFile('preview_iframe.tpl', 'serendipityPath'));
    }

    return $show;
}

/**
 * Creates the necessary session data to be used by later iframe calls
 *
 * This function emits the actual <iframe> call.
 *
 * @access private
 * @see serendipity_is_iframe()
 * @param   string  Indicates whether an entry is previewed or saved. Save performs XML-RPC calls.
 * @param   mixed   The entry array (comes from HTTP POST request)
 * @return  boolean Indicates whether iframe data was stored
 */
function serendipity_iframe_create($mode, &$entry) {
    global $serendipity;

    if (!empty($serendipity['POST']['no_save'])) {
        return true;
    }

    if (!serendipity_checkFormToken()) {
        return false;
    }

    $_SESSION['save_entry']      = $entry;
    $_SESSION['save_entry_POST'] = $serendipity['POST'];
    
    $attr = '';
    switch($mode) {
        case 'save':
            $attr = ' height="100" ';
            break;

        case 'preview':
            $attr = ' height="300" ';
            break;
    }

    echo '<iframe src="serendipity_admin.php?serendipity[is_iframe]=true&amp;serendipity[iframe_mode]=' . $mode . '" id="serendipity_iframe" name="serendipity_iframe" ' . $attr . ' width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="auto" title="Serendipity">'
         . IFRAME_WARNING
         . '</iframe>';
}

/**
 * Pre-Checks certain server environments to indicate available options when installing Serendipity
 *
 * @access public
 * @param   string      The name of the configuration option that needs to be checked for environmental data.
 * @return  array       Returns the array of available options for the requested config option
 */
function serendipity_probeInstallation($item) {
    global $serendipity;
    $res = NULL;

    switch ( $item ) {
        case 'dbType' :
            $res =  array();
            if (extension_loaded('mysql')) {
                $res['mysql'] = 'MySQL';
            }
            if (extension_loaded('PDO') &&
                in_array('pgsql', PDO::getAvailableDrivers())) {
                $res['pdo-postgres'] = 'PDO::PostgreSQL';
            }

            if (extension_loaded('PDO') &&
                in_array('sqlite', PDO::getAvailableDrivers())) {
                $res['pdo-sqlite'] = 'PDO::SQLite';
            }

            if (extension_loaded('pgsql')) {
                $res['postgres'] = 'PostgreSQL';
            }
            if (extension_loaded('mysqli')) {
                $res['mysqli'] = 'MySQLi';
            }
            if (extension_loaded('sqlite') && function_exists('sqlite_open')) {
                $res['sqlite'] = 'SQLite';
            }
            if (extension_loaded('SQLITE3') && function_exists('sqlite3_open')) {
                $res['sqlite3'] = 'SQLite3';
            }
            if (function_exists('sqlrcon_alloc')) {
                $res['sqlrelay'] = 'SQLRelay';
            }
            break;

        case 'rewrite' :
            $res = array();
            $res['none'] = 'Disable URL Rewriting';
            $res['errordocs'] = 'Use Apache errorhandling';
            if( !function_exists('apache_get_modules') || in_array('mod_rewrite', apache_get_modules()) ) {
                $res['rewrite'] = 'Use Apache mod_rewrite';
            }
            if( !function_exists('apache_get_modules') || in_array('mod_rewrite', apache_get_modules()) ) {
                $res['rewrite2'] = 'Use Apache mod_rewrite (for 1&amp;1 and problematic servers)';
            }

            break;
    }

    return $res;
}

/**
 * Sets a HTTP header
 *
 * @access public
 * @param   string      The HTTP headre to set
 * @return null
 */
function serendipity_header($header) {
    if (!headers_sent()) {
        header($header);
    }
}

/**
 * Gets the currently selected language. Either from the browser, or the personal configuration, or the global configuration.
 *
 * This function also sets HTTP Headers and cookies to contain the language for follow-up requests
 * TODO:
 * This previously was handled inside a plugin with an event hook, but caching
 * the event plugins that early in sequence created trouble with plugins not
 * having loaded the right language.
 * Find a way to let plugins hook into that sequence :-)
 *
 * @access public
 * @return  string      Returns the name of the selected language.
 */
function serendipity_getSessionLanguage() {
    global $serendipity;

    // DISABLE THIS!
/*
    if ($_SESSION['serendipityAuthedUser']) {
        serendipity_header('X-Serendipity-InterfaceLangSource: Database');
        return $serendipity['lang'];
    }
*/
    if (isset($serendipity['lang']) && !isset($serendipity['languages'][$serendipity['lang']])) {
        $serendipity['lang'] = $serendipity['autolang'];
    }

    if (isset($_REQUEST['user_language']) && (!empty($serendipity['languages'][$_REQUEST['user_language']])) && !headers_sent()) {
        serendipity_setCookie('serendipityLanguage', $_REQUEST['user_language'], false);
    }

    if (isset($serendipity['COOKIE']['serendipityLanguage'])) {
        if ($serendipity['expose_s9y']) serendipity_header('X-Serendipity-InterfaceLangSource: Cookie');
        $lang = $serendipity['COOKIE']['serendipityLanguage'];
    } elseif (!empty($serendipity['languages'][$serendipity['GET']['lang_selected']])) {
        if ($serendipity['expose_s9y']) serendipity_header('X-Serendipity-InterfaceLangSource: GET');
        $lang = $serendipity['GET']['lang_selected'];
    } elseif (serendipity_db_bool($serendipity['lang_content_negotiation'])) {
        if ($serendipity['expose_s9y']) serendipity_header('X-Serendipity-InterfaceLangSource: Content-Negotiation');
        $lang = serendipity_detectLang();
    }

    if (isset($lang)) {
        $serendipity['detected_lang'] = $lang;
    } else {
        if (! empty($_SESSION['serendipityLanguage'])) {
            $lang = $_SESSION['serendipityLanguage'];
        } else {
            if (isset($serendipity['COOKIE']['userDefLang']) && ! empty($serendipity['COOKIE']['userDefLang'])) {
                $lang = $serendipity['COOKIE']['userDefLang'];
            } else {
                $lang = $serendipity['lang'];
          	}
        }
        $serendipity['detected_lang'] = null;
    }

    if (!isset($serendipity['languages'][$lang])) {
        $serendipity['detected_lang'] = null;
        return $serendipity['lang'];
    } else {
        $_SESSION['serendipityLanguage'] = $lang;
        if (!is_null($serendipity['detected_lang'])) {
            if ($serendipity['expose_s9y']) serendipity_header('X-Serendipity-InterfaceLang: ' . $lang);
        }
    }

    return $lang;
}

/**
 * Gets the selected language from personal configuration if needed
 *
 * This function also sets HTTP Headers and cookies to contain the language for follow-up requests
 *
 * @access public
 * @return  string      Returns the name of the selected language.
 */
function serendipity_getPostAuthSessionLanguage() {
    global $serendipity;

    if (! is_null($serendipity['detected_lang'])) {
        return $serendipity['detected_lang'];
    }

    if ($_SESSION['serendipityAuthedUser']) {
        if ($serendipity['expose_s9y']) serendipity_header('X-Serendipity-InterfaceLangSource: Database');
        $lang = $serendipity['lang'];
    } else {
        $lang = (isset($_SESSION['serendipityLanguage']))?$_SESSION['serendipityLanguage']:$serendipity['lang'];
    }

    if (!isset($serendipity['languages'][$lang])) {
        $lang = $serendipity['lang'];
    }

    $_SESSION['serendipityLanguage'] = $lang;

    if ($serendipity['expose_s9y']) serendipity_header('X-Serendipity-InterfaceLang: ' . $lang);

    if ($lang != $serendipity['lang']) {
        $serendipity['content_lang'] = $lang;
    }

    return $lang;
}

/**
 * Retrieves an array of applying permissions to an author
 *
 * The privileges of each group an author is a member of are aggreated
 * and stored in a larger array. So both memberships and all aplying
 * privileges are returned.
 *
 * @access public
 * @param   int     The ID of the author to fetch permissions/group memberships for
 * @return  array   Multi-dimensional associative array which holds a 'membership' and permission name data
 */
function &serendipity_getPermissions($authorid) {
    global $serendipity;

        // Get group information
        $groups =& serendipity_db_query("SELECT ag.groupid, g.name, gc.property, gc.value
                                          FROM {$serendipity['dbPrefix']}authorgroups AS ag
                               LEFT OUTER JOIN {$serendipity['dbPrefix']}groups AS g
                                            ON ag.groupid = g.id
                               LEFT OUTER JOIN {$serendipity['dbPrefix']}groupconfig AS gc
                                            ON gc.id = g.id
                                         WHERE ag.authorid = " . (int)$authorid);
        $perm = array('membership' => array());
        if (is_array($groups)) {
            foreach($groups AS $group) {
                $perm['membership'][$group['groupid']]       = $group['groupid'];
                $perm[$group['groupid']][$group['property']] = $group['value'];
            }
        }
        return $perm;
}

/**
 * Returns the list of available internal Serendipity permission field names
 *
 * This function also mapps which function was available to which userleves in older
 * Serendipity versions. Thus if an author does not have a certain privilege he should
 * have because of his userlevel, this can be reverse-mapped.
 *
 * @access public
 * @return  array   Multi-dimensional associative array which the list of all permission items plus their userlevel associations
 */
function serendipity_getPermissionNames() {
    return array(
        'personalConfiguration'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF, USERLEVEL_EDITOR),
        'personalConfigurationUserlevel'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'personalConfigurationNoCreate'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'personalConfigurationRightPublish'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'siteConfiguration'
            => array(USERLEVEL_ADMIN),
        'blogConfiguration'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),

        'adminEntries'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF, USERLEVEL_EDITOR),
        'adminEntriesMaintainOthers'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),

        'adminImport'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),

        'adminCategories'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF, USERLEVEL_EDITOR),
        'adminCategoriesMaintainOthers'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'adminCategoriesDelete'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),

        'adminUsers'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'adminUsersDelete'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'adminUsersEditUserlevel'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'adminUsersMaintainSame'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'adminUsersMaintainOthers'
            => array(USERLEVEL_ADMIN),
        'adminUsersCreateNew'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'adminUsersGroups'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),

        'adminPlugins'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'adminPluginsMaintainOthers'
            => array(USERLEVEL_ADMIN),

        'adminImages'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF, USERLEVEL_EDITOR),
        'adminImagesDirectories'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'adminImagesAdd'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF, USERLEVEL_EDITOR),
        'adminImagesDelete'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF, USERLEVEL_EDITOR),
        'adminImagesMaintainOthers'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),
        'adminImagesViewOthers'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF, USERLEVEL_EDITOR),
        'adminImagesView'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF, USERLEVEL_EDITOR),
        'adminImagesSync'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),

        'adminComments'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),

        'adminTemplates'
            => array(USERLEVEL_ADMIN, USERLEVEL_CHIEF),

        'hiddenGroup'
            => array(-1)
    );
}

/**
 * Checks if a permission is granted to a specific author
 *
 * This function caches all permission chacks in static function variables to not
 * fetch all permissions time and again.
 * The permission checks are performed agains the values of each group. If a privilege
 * is set in one of the groups the author is a user of, the function returns true.
 * If a privilege is not set, the userlevel of an author is checked to act for backwards-compatibility.
 *
 * @access public
 * @see serendipity_getPermissionNames()
 * @param   string      The name of the permission to check
 * @param   int         The authorid for which the permission check should be performed
 * @param   boolean     If set to true, all groups that the requested author is a user of will be returned. This bypasses the permission check and mainly acts as a mean to return cached permissions, since those variables are only available within this function.
 * @return  mixed       Either returns true if a permission check is performed, or return an array of group memberships. Depends on the $returnMyGroups variable.
 */
function serendipity_checkPermission($permName, $authorid = null, $returnMyGroups = false) {
    global $serendipity;

    // Define old serendipity permissions
    static $permissions = null;
    static $group = null;

    if (IS_installed !== true) {
        return true;
    }

    if ($permissions === null) {
        $permissions = serendipity_getPermissionNames();
    }

    if ($group === null) {
        $group = array();
    }

    if ($authorid === null) {
        $authorid = $serendipity['authorid'];
    }

    if (!isset($group[$authorid])) {
        $group[$authorid] = serendipity_getPermissions($authorid);
    }

    if ($returnMyGroups) {
        if ($returnMyGroups === 'all') {
            return $group[$authorid];
        } else {
            return $group[$authorid]['membership'];
        }
    }

    if ($authorid == $serendipity['authorid'] && $serendipity['no_create']) {
        // This no_create user privilege overrides other permissions.
        return false;
    }

    $return = true;

    foreach($group[$authorid] AS $item) {
        if (!isset($item[$permName])) {
            continue;
        }

        if ($item[$permName] === 'true') {
            return true;
        } else {
            $return = false;
        }
    }

    // If the function did not yet return it means there's a check for a permission which is not defined anywhere.
    // Let's use a backwards compatible way.
    if ($return && isset($permissions[$permName]) && in_array($serendipity['serendipityUserlevel'], $permissions[$permName])) {
        return true;
    }

    return false;
}

/**
 * Update author group membership(s)
 *
 * @access public
 * @param   array       The array of groups the author should be a member of. All memberships that were present before and not contained in this array will be removed.
 * @param   int         The ID of the author to update
 * @param   boolean     If set to true, the groups can only be updated if the user has the adminUsersMaintainOthers privilege. If set to false, group memberships will be changable for any user.
 * @return
 */
function serendipity_updateGroups($groups, $authorid, $apply_acl = true) {
    global $serendipity;

    if ($apply_acl && !serendipity_checkPermission('adminUsersMaintainOthers')) {
        return false;
    }

    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}authorgroups WHERE authorid = " . (int)$authorid);

    foreach($groups AS $group) {
        serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}authorgroups (authorid, groupid) VALUES (" . (int)$authorid . ", " . (int)$group . ")");
    }
    return true;
}

/**
 * Returns all authorgroups that are available
 *
 * If a groupname is prefixed with "USERLEVEL_" then the constant of that name is used to
 * return the name of the group. This allows inserting the special groups Chief Editor, Editor
 * and admin and still being able to use multilingual names for these groups.
 *
 * @access public
 * @param   int     If set to an author ID value, only groups are fetched that this author is a member of. If set to false, all groups are returned, also those that the current user has no access to.
 * @return  array   An associative array of group names.
 */
function &serendipity_getAllGroups($apply_ACL_user = false) {
    global $serendipity;

    if ($apply_ACL_user) {
        $groups =& serendipity_db_query("SELECT g.id   AS confkey,
                                                g.name AS confvalue,
                                                g.id   AS id,
                                                g.name AS name
                                           FROM {$serendipity['dbPrefix']}authorgroups AS ag
                                LEFT OUTER JOIN {$serendipity['dbPrefix']}groups AS g
                                             ON g.id = ag.groupid
                                          WHERE ag.authorid = " . (int)$apply_ACL_user . "
                                       ORDER BY g.name", false, 'assoc');
    } else {
        $groups =& serendipity_db_query("SELECT g.id   AS confkey,
                                                g.name AS confvalue,
                                                g.id   AS id,
                                                g.name AS name
                                          FROM {$serendipity['dbPrefix']}groups AS g
                                      ORDER BY  g.name", false, 'assoc');
    }
    if (is_array($groups)) {
        foreach ($groups as $k => $v) {
            if ('USERLEVEL_' == substr($v['confvalue'], 0, 10)) {
                $groups[$k]['confvalue'] = $groups[$k]['name'] = constant($v['confvalue']);
            }
        }
    }
    return $groups;
}

/**
 * Fetch the permissions of a certain group
 *
 * @access public
 * @param   int     The ID of the group that the permissions are fetched for
 * @return  array   The associative array of permissions of a group.
 */
function &serendipity_fetchGroup($groupid) {
    global $serendipity;

    $conf = array();
    $groups =& serendipity_db_query("SELECT g.id        AS confkey,
                                            g.name      AS confvalue,
                                            g.id        AS id,
                                            g.name      AS name,

                                            gc.property AS property,
                                            gc.value    AS value
                                      FROM {$serendipity['dbPrefix']}groups AS g
                           LEFT OUTER JOIN {$serendipity['dbPrefix']}groupconfig AS gc
                                        ON g.id = gc.id
                                     WHERE g.id = " . (int)$groupid, false, 'assoc');

    if (is_array($groups)) {
        foreach($groups AS $group) {
            $conf[$group['property']] = $group['value'];
        }
    }

    // The following are unique
    $conf['name']      = $groups[0]['name'];
    $conf['id']        = $groups[0]['id'];
    $conf['confkey']   = $groups[0]['confkey'];
    $conf['confvalue'] = $groups[0]['confvalue'];

    return $conf;
}

/**
 * Gets all groups a user is a member of
 *
 * @access public
 * @param   int         The authorid to fetch groups for
 * @param   boolean     Indicate whether the original multi-dimensional DB result array shall be returned (FALSE) or if the array shall be flattened to be 1-dimensional (TRUE).
 * @return
 */
function &serendipity_getGroups($authorid, $sequence = false) {
    global $serendipity;

    $_groups =& serendipity_db_query("SELECT g.id   AS confkey,
                                            g.name AS confvalue,
                                            g.id   AS id,
                                            g.name AS name
                                      FROM {$serendipity['dbPrefix']}authorgroups AS ag
                           LEFT OUTER JOIN {$serendipity['dbPrefix']}groups AS g
                                        ON g.id = ag.groupid
                                     WHERE ag.authorid = " . (int)$authorid, false, 'assoc');
    if (!is_array($_groups)) {
        $groups = array();
    } else {
        $groups =& $_groups;
    }

    if ($sequence) {
        $rgroups  = array();
        foreach($groups AS $grouprow) {
            $rgroups[] = $grouprow['confkey'];
        }
    } else {
        $rgroups =& $groups;
    }

    return $rgroups;
}

/**
 * Gets all author IDs of a specific group
 *
 * @access public
 * @param   int     The ID of the group to fetch the authors of
 * @return  array   The assotiative array of author IDs and names
 */
function &serendipity_getGroupUsers($groupid) {
    global $serendipity;

    $groups =& serendipity_db_query("SELECT g.name     AS name,
                                            a.realname AS author,
                                            a.authorid AS id
                                      FROM {$serendipity['dbPrefix']}authorgroups AS ag
                           LEFT OUTER JOIN {$serendipity['dbPrefix']}groups AS g
                                        ON g.id = ag.groupid
                           LEFT OUTER JOIN {$serendipity['dbPrefix']}authors AS a
                                        ON ag.authorid = a.authorid
                                     WHERE ag.groupid = " . (int)$groupid, false, 'assoc');
    return $groups;
}

/**
 * Deletes a specific author group by ID
 *
 * @access public
 * @param   int     The group ID to delete
 * @return  boolean Return true if group could be deleted, false if unsufficient privileges.
 */
function serendipity_deleteGroup($groupid) {
    global $serendipity;

    if (!serendipity_checkPermission('adminUsersGroups')) {
        return false;
    }

    if (!serendipity_checkPermission('adminUsersMaintainOthers')) {
        // Only groups should be accessible where a user has access rights.
        $my_groups = serendipity_getGroups($serendipity['authorid'], true);
        if (!in_array($groupid, $my_groups)) {
            return false;
        }
    }

    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}groups       WHERE id = " . (int)$groupid);
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}authorgroups WHERE groupid = " . (int)$groupid);

    return true;
}

/**
 * Creates a new author group
 *
 * @access public
 * @param   string      The name of the new group
 * @return  int         The id of the created group
 */
function serendipity_addGroup($name) {
    global $serendipity;

    serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}groups (name) VALUES ('" . serendipity_db_escape_string($name) . "')");
    $gid = serendipity_db_insert_id('groups', 'id');

    return $gid;
}

/**
 * Returns a list of all existing permission names.
 *
 * Additional plugins might insert specific properties into the groupconfig database to
 * handle their own privileges. This call returns an array of all available permission names
 * so that it can be intersected with the list of internal permission names (serendipity_getPermissionNames())
 * and the be distincted.
 *
 * @access public
 * @see serendipity_getPermissionNames()
 * @return  array   associative array of all available permission names
 */
function &serendipity_getDBPermissionNames() {
    global $serendipity;

    $config =& serendipity_db_query("SELECT property FROM {$serendipity['dbPrefix']}groupconfig GROUP BY property ORDER BY property", false, 'assoc');

    return $config;
}

/**
 * Gets the list of all Permissions and merges the two arrays
 *
 * The first call will fetch all existing permission names of the database. Then it will
 * fetch the list of defined internal permission names, which has an array with extra information
 * (like userlevel). This array will be merged with those permission names only found in the
 * database. The returned array will then hold as much information about permission names as is
 * available.
 * TODO Might need further pushing and/or an event hook so that external plugins using the
 * permission system can inject specific information into the array
 *
 * @access public
 * @see serendipity_getPermissionNames()
 * @see serendipity_getDBPermissionNames()
 * @return  array   Returns the array with all information about all permission names
 */
function &serendipity_getAllPermissionNames() {
    global $serendipity;

    $DBperms = serendipity_getDBPermissionNames();
    $perms   = serendipity_getPermissionNames();

    foreach($DBperms AS $perm) {
        if (!isset($perms[$perm['property']])) {
            $perms[$perm['property']] = array();
        }
    }

    return $perms;
}

/**
 * Checks if two users are members of the same group
 *
 * This function will retrieve all group memeberships of a
 * foreign user ($checkuser) and yourself ($myself). Then it
 * will check if there is any group membership that those
 * two users have in common.
 * It can be used for detecting if a different author should
 * be allowed to access your entries, because he's in the same
 * group, for example.
 *
 * @access public
 * @param   int     ID of the first author to check group memberships
 * @param   int     ID of the second author to check group memberships
 * @return  boolea  True if a membership intersects, false if not
 */
function serendipity_intersectGroup($checkuser = null, $myself = null) {
    global $serendipity;

    if ($myself === null) {
        $myself = $serendipity['authorid'];
    }

    $my_groups  = serendipity_getGroups($myself, true);
    $his_groups = serendipity_getGroups($checkuser, true);

    foreach($his_groups AS $his_group) {
        if (in_array($his_group, $my_groups)) {
            return true;
        }
    }

    return false;
}

/**
 * Updates the configuration of permissions of a specific group
 *
 * This function ensures that a group can only be updated from users that have permissions to do so.
 * @access public
 * @param   int     The ID of the group to update
 * @param   array   The associative array of permission names
 * @param   array   The associative array of new values for the permissions. Needs the same associative keys like the $perms array.
 * @param   bool    Indicates if an all new privilege should be inserted (true) or if an existing privilege is going to be checked
 * @param   array   The associative array of plugin permission names
 * @param   array   The associative array of plugin permission hooks
 * @return true
 */
function serendipity_updateGroupConfig($groupid, &$perms, &$values, $isNewPriv = false, $forbidden_plugins = null, $forbidden_hooks = null) {
    global $serendipity;

    if (!serendipity_checkPermission('adminUsersGroups')) {
        return false;
    }

    if (!serendipity_checkPermission('adminUsersMaintainOthers')) {
        // Only groups should be accessible where a user has access rights.
        $my_groups = serendipity_getGroups($serendipity['authorid'], true);
        if (!in_array($groupid, $my_groups)) {
            return false;
        }
    }

    $storage =& serendipity_fetchGroup($groupid);

    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}groupconfig WHERE id = " . (int)$groupid);
    foreach ($perms AS $perm => $userlevels) {
        if (substr($perm, 0, 2) == 'f_') {
            continue;
        }

        if (isset($values[$perm]) && $values[$perm] == 'true') {
            $value = 'true';
        } elseif (isset($values[$perm]) && $values[$perm] === 'false') {
            $value = 'false';
        } elseif (isset($values[$perm])) {
            $value = $values[$perm];
        } else {
            $value = 'false';
        }

        if ($isNewPriv == false && !serendipity_checkPermission($perm) && $perm != 'hiddenGroup') {
            if (!isset($storage[$perm])) {
                $value = 'false';
            } else {
                $value = $storage[$perm];
            }
        }

        serendipity_db_query(
            sprintf("INSERT INTO {$serendipity['dbPrefix']}groupconfig (id, property, value) VALUES (%d, '%s', '%s')",
                (int)$groupid,
                serendipity_db_escape_string($perm),
                serendipity_db_escape_string($value)
            )
        );
    }

    if (is_array($forbidden_plugins)) {
        foreach($forbidden_plugins AS $plugid) {
            serendipity_db_query(
                sprintf("INSERT INTO {$serendipity['dbPrefix']}groupconfig (id, property, value) VALUES (%d, '%s', 'true')",
                    (int)$groupid,
                    serendipity_db_escape_string('f_' . urldecode($plugid))
                )
            );
        }
    }

    if (is_array($forbidden_hooks)) {
        foreach($forbidden_hooks AS $hook) {
            serendipity_db_query(
                sprintf("INSERT INTO {$serendipity['dbPrefix']}groupconfig (id, property, value) VALUES (%d, '%s', 'true')",
                    (int)$groupid,
                    serendipity_db_escape_string('f_' . urldecode($hook))
                )
            );
        }
    }

    serendipity_db_query("UPDATE {$serendipity['dbPrefix']}groups SET name = '" . serendipity_db_escape_string($values['name']) . "' WHERE id = " . (int)$groupid);

    if (is_array($values['members'])) {
        serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}authorgroups WHERE groupid = " . (int)$groupid);
        foreach($values['members'] AS $member) {
            serendipity_db_query(
                sprintf("INSERT INTO {$serendipity['dbPrefix']}authorgroups (groupid, authorid) VALUES (%d, %d)",
                    (int)$groupid,
                    (int)$member
                )
            );
        }
    }

    return true;
}

/**
 * Adds a default internal group (Editor, Chief Editor, Admin)
 *
 * @access public
 * @param   string  The name of the group to insert
 * @param   int     The userlevel that represents this group (0|1|255 for Editor/Chief/Admin).
 * @return true
 */
function serendipity_addDefaultGroup($name, $level) {
    global $serendipity;

    static $perms = null;
    if ($perms === null) {
        $perms = serendipity_getPermissionNames();
    }

    serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}groups (name) VALUES ('" . serendipity_db_escape_string($name) . "')");
    $gid = (int)serendipity_db_insert_id('groups', 'id');
    serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}groupconfig (id, property, value) VALUES ($gid, 'userlevel', '" . (int)$level . "')");

    $authors = serendipity_db_query("SELECT * FROM {$serendipity['dbPrefix']}authors WHERE userlevel = " . (int)$level);

    if (is_array($authors)) {
        foreach($authors AS $author) {
            serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}authorgroups (authorid, groupid) VALUES ('{$author['authorid']}', '$gid')");
        }
    }

    foreach($perms AS $permName => $permArray) {
        if (in_array($level, $permArray)) {
            serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}groupconfig (id, property, value) VALUES ($gid, '" . serendipity_db_escape_string($permName) . "', 'true')");
        } else {
            serendipity_db_query("INSERT INTO {$serendipity['dbPrefix']}groupconfig (id, property, value) VALUES ($gid, '" . serendipity_db_escape_string($permName) . "', 'false')");
        }
    }

    return true;
}

/**
 * Allow access to a specific item (category or entry) for a specific usergroup
 *
 * ACL are Access Control Lists. They indicate which read/write permissions a
 * specific item has for specific usergroups.
 * An artifact in terms of Serendipity can be either a category or an entry, or
 * anything beyond that for future compatibility.
 * This function sets up the ACLs.
 *
 * @access public
 * @param   int     The ID of the artifact to set the access
 * @param   string  The type of an artifact (category|entry)
 * @param   string  The type of access to grant (read|write)
 * @param   array   The ID of the group to grant access to
 * @param   string  A variable option for an artifact
 * @return  boolean True if ACL was applied, false if not.
 */
function serendipity_ACLGrant($artifact_id, $artifact_type, $artifact_mode, $groups, $artifact_index = '') {
    global $serendipity;

    if (empty($groups) || !is_array($groups)) {
        return false;
    }

    // Delete all old existing relations.
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}access
                                WHERE artifact_id    = " . (int)$artifact_id . "
                                  AND artifact_type  = '" . serendipity_db_escape_string($artifact_type) . "'
                                  AND artifact_mode  = '" . serendipity_db_escape_string($artifact_mode) . "'
                                  AND artifact_index = '" . serendipity_db_escape_string($artifact_index) . "'");

    $data = array(
        'artifact_id'    => (int)$artifact_id,
        'artifact_type'  => $artifact_type,
        'artifact_mode'  => $artifact_mode,
        'artifact_index' => $artifact_index
    );

    if (count($data) < 1) {
        return true;
    }

    foreach($groups AS $group) {
        $data['groupid'] = $group;
        serendipity_db_insert('access', $data);
    }

    return true;
}

/**
 * Checks if a specific item (category or entry) can be accessed by a specific usergroup
 *
 * ACL are Access Control Lists. They indicate which read/write permissions a
 * specific item has for specific usergroups.
 * An artifact in terms of Serendipity can be either a category or an entry, or
 * anything beyond that for future compatibility.
 * This function retrieves the ACLs.
 *
 * @access public
 * @param   int     The ID of the artifact to set the access
 * @param   string  The type of an artifact (category|entry)
 * @param   string  The type of access to check for (read|write)
 * @param   string  A variable option for an artifact
 * @return  array   Returns an array of all groups that are allowed for this kind of access. You can then check if you are the member of any of the groups returned here.
 */
function serendipity_ACLGet($artifact_id, $artifact_type, $artifact_mode, $artifact_index = '') {
    global $serendipity;

    $sql = "SELECT groupid, artifact_index FROM {$serendipity['dbPrefix']}access
                    WHERE artifact_type  = '" . serendipity_db_escape_string($artifact_type) . "'
                      AND artifact_id    = '" . (int)$artifact_id . "'
                      AND artifact_mode  = '" . serendipity_db_escape_string($artifact_mode) . "'
                      AND artifact_index = '" . serendipity_db_escape_string($artifact_index) . "'";
    $rows =& serendipity_db_query($sql, false, 'assoc');

    if (!is_array($rows)) {
        return false;
    }

    $acl = array();
    foreach($rows AS $row) {
        $acl[$row['groupid']] = $row['artifact_index'];
    }

    return $acl;
}

/**
 * Checks if a specific item (category or entry) can be accessed by a specific Author
 *
 * ACL are Access Control Lists. They indicate which read/write permissions a
 * specific item has for specific usergroups.
 * An artifact in terms of Serendipity can be either a category or an entry, or
 * anything beyond that for future compatibility.
 * This function retrieves the ACLs for a specific user.
 *
 * @access public
 * @param   int     The ID of the author to check against.
 * @param   int     The ID of the artifact to set the access
 * @param   string  The type of an artifact ('category', more to come)
 * @param   string  The type of access to check for (read|write)
 * @return  boolean Returns true, if the author has access to this artifact. False if not.
 */
function serendipity_ACLCheck($authorid, $artifact_id, $artifact_type, $artifact_mode) {
    global $serendipity;

    $artifact_sql = array();

    // TODO: If more artifact_types are available, the JOIN needs to be edited so that the first AND portion is not required, and the join is fully made on that conditiion.
    switch($artifact_type) {
        default:
        case 'category':
            $artifact_sql['unique']= "atf.categoryid";
            $artifact_sql['cond']  = "atf.categoryid = " . (int)$artifact_id;
            $artifact_sql['where'] = "     ag.groupid = a.groupid
                                        OR a.groupid  = 0
                                        OR (a.artifact_type IS NULL AND (atf.authorid = " . (int)$authorid . " OR atf.authorid = 0 OR atf.authorid IS NULL))";
            $artifact_sql['table'] = 'category';
    }

    $sql = "SELECT {$artifact_sql['unique']} AS result
              FROM {$serendipity['dbPrefix']}{$artifact_sql['table']} AS atf
   LEFT OUTER JOIN {$serendipity['dbPrefix']}authorgroups AS ag
                ON ag.authorid = ". (int)$authorid . "
   LEFT OUTER JOIN {$serendipity['dbPrefix']}access AS a
                ON (    a.artifact_type = '" . serendipity_db_escape_string($artifact_type) . "'
                    AND a.artifact_id   = " . (int)$artifact_id . "
                    AND a.artifact_mode = '" . serendipity_db_escape_string($artifact_mode) . "'
                   )

             WHERE {$artifact_sql['cond']}
               AND ( {$artifact_sql['where']} )
          GROUP BY result";

    $res =& serendipity_db_query($sql, true, 'assoc');
    if (is_array($res) && !empty($res['result'])) {
        return true;
    }

    return false;
}

/**
 * Prepares a SQL statement to be used in queries that should be ACL restricted.
 *
 * ACL are Access Control Lists. They indicate which read/write permissions a
 * specific item has for specific usergroups.
 * An artifact in terms of Serendipity can be either a category or an entry, or
 * anything beyond that for future compatibility.
 * This function evaluates and applies the SQL statements required.
 * It is currently only written for retrieving Category ACLs.
 * All of the SQL code that will be used in serendipity_fetchEntries will be stored
 * within the referenced $cond array.
 *
 * @access private
 * @param   array       Associative array that holds the SQL part array to be used in other functions like serendipity_fetchEntries()
 * @param   boolean     Some queries do not need to joins categories. When ACLs need to be applied, this column is required, so if $append_category is set to true it will perform this missing JOIN.
 * @param   string      The ACL type ('category', 'directory')
 * @param   string      ACL mode
 * @return  true        True if ACLs were applied, false if not.
 */
function serendipity_ACL_SQL(&$cond, $append_category = false, $type = 'category', $mode = 'read') {
    global $serendipity;

    // A global configuration item controls whether the blog should apply ACLs or not!
    if (!isset($serendipity['enableACL']) || $serendipity['enableACL'] == true) {

        // If the user is logged in, we retrieve his authorid for the upcoming checks
        if ($_SESSION['serendipityAuthedUser'] === true) {
            $read_id = (int)$serendipity['authorid'];
            $read_id_sql = 'acl_a.groupid OR acl_acc.groupid = 0';
        } else {
            // "0" as category property counts as "anonymous viewers"
            $read_id     = 0;
            $read_id_sql = 0;
        }

        if ($append_category) {
            if ($append_category !== 'limited') {
                $cond['joins'] .= " LEFT JOIN {$serendipity['dbPrefix']}entrycat ec
                                           ON e.id = ec.entryid";
            }

            $cond['joins'] .= " LEFT JOIN {$serendipity['dbPrefix']}category c
                                       ON ec.categoryid = c.categoryid";
        }

        switch($type) {
            case 'directory':
                $sql_artifact_column = 'i.path IS NULL OR
                                        acl_acc.groupid IS NULL';
                $sql_artifact = 'AND acl_acc.artifact_index = i.path';
                break;

            case 'category':
                $sql_artifact_column = 'c.categoryid IS NULL';
                $sql_artifact = 'AND acl_acc.artifact_id   = c.categoryid';
                break;
        }

        $cond['joins'] .= " LEFT JOIN {$serendipity['dbPrefix']}authorgroups AS acl_a
                                   ON acl_a.authorid = " . $read_id . "
                            LEFT JOIN {$serendipity['dbPrefix']}access AS acl_acc
                                   ON (    acl_acc.artifact_mode = '" . $mode . "'
                                       AND acl_acc.artifact_type = '" . $type . "'
                                       " . $sql_artifact . "
                                      )";

        if (empty($cond['and'])) {
            $cond['and'] .= ' WHERE ';
        } else {
            $cond['and'] .= ' AND ';
        }

        // When in Admin-Mode, apply readership permissions.
        $cond['and'] .= "    (
                                 " . $sql_artifact_column . "
                                 OR ( acl_acc.groupid = " . $read_id_sql . ")
                                 OR ( acl_acc.artifact_id IS NULL
                                      " . (isset($serendipity['GET']['adminModule']) &&
                                           $serendipity['GET']['adminModule'] == 'entries' &&
                                           !serendipity_checkPermission('adminEntriesMaintainOthers')
                                        ? "AND (c.authorid IS NULL OR c.authorid = 0 OR c.authorid = " . $read_id . ")"
                                        : "") . "
                                    )
                               )";
        return true;
    }

    return false;
}

/**
 * Check for Cross-Site-Request-Forgery attacks because of missing HTTP Referer
 *
 * http://de.wikipedia.org/wiki/XSRF
 * This function checks the HTTP referer, and if it is part of the current Admin panel.
 *
 * @access public
 * @return  Returns true if XSRF was detected, false if not. The script should abort, if TRUE is returned.
 */
function serendipity_checkXSRF() {
    global $serendipity;

    // If no module was requested, the user has just logged in and no action will be performed.
    if (empty($serendipity['GET']['adminModule'])) {
        return false;
    }

    // The referrer was empty. Deny access.
    if (empty($_SERVER['HTTP_REFERER'])) {
        echo serendipity_reportXSRF(1, true, true);
        return false;
    }

    // Parse the Referrer host. Abort if not parseable.
    $hostinfo = @parse_url($_SERVER['HTTP_REFERER']);
    if (!is_array($hostinfo)) {
        echo serendipity_reportXSRF(2, true, true);
        return true;
    }

    // Get the server against we will perform the XSRF check.
    $server = '';
    if (empty($_SERVER['HTTP_HOST'])) {
        $myhost = @parse_url($serendipity['baseURL']);
        if (is_array($myhost)) {
            $server = $myhost['host'];
        }
    } else {
        $server = $_SERVER['HTTP_HOST'];
    }

    // If the current server is different than the referred server, deny access.
    if ($hostinfo['host'] != $server) {
        echo serendipity_reportXSRF(3, true, true);
        return true;
    }

    return false;
}

/**
 * Report a XSRF attempt to the Serendipity Interface
 *
 * http://de.wikipedia.org/wiki/XSRF
 *
 * LONG
 *
 * @access public
 * @see serendipity_checkXSRF()
 * @param   string      The type of XSRF check that got hit. Used for CSS formatting.
 * @param   boolean     If true, the XSRF error should be fatal
 * @param   boolean     If true, tell Serendipity to check the $serendipity['referrerXSRF'] config option to decide if an error should be reported or not.
 * @return  string      Returns the HTML error report
 */
function serendipity_reportXSRF($type = 0, $reset = true, $use_config = false) {
    global $serendipity;

    // Set this in your serendipity_config_local.inc.php if you want HTTP Referrer blocking:
    // $serendipity['referrerXSRF'] = true;

    $string = '<div class="serendipityAdminMsgError msg_error XSRF_' . $type . '"><img class="img_error" src="' . serendipity_getTemplateFile('admin/img/admin_msg_error.png') . '" alt="" />' . ERROR_XSRF . '</div>';
    if ($reset) {
        // Config key "referrerXSRF" can be set to enable blocking based on HTTP Referrer. Recommended for Paranoia.
        if (($use_config && isset($serendipity['referrerXSRF']) && $serendipity['referrerXSRF']) || $use_config === false) {
            $serendipity['GET']['adminModule'] = '';
        } else {
            // Paranoia not enabled. Do not report XSRF.
            $string = '';
        }
    }
    return $string;
}

/**
 * Prevent XSRF attacks by checking for a form token
 *
 * http://de.wikipedia.org/wiki/XSRF
 *
 * This function checks, if a valid Form token was posted to the site.
 *
 * @access public
 * @see serendipity_setFormToken()
 * @return  boolean     Returns true, if XSRF attempt was found and the token was missing
 */
function serendipity_checkFormToken($output = true) {
    global $serendipity;

    $token = '';
    if (!empty($serendipity['POST']['token'])) {
        $token = $serendipity['POST']['token'];
    } elseif (!empty($serendipity['GET']['token'])) {
        $token = $serendipity['GET']['token'];
    }

    if (empty($token)) {
        if ($output) echo serendipity_reportXSRF('token', false);
        return false;
    }

    if ($token != md5(session_id()) &&
        $token != md5($serendipity['COOKIE']['old_session'])) {
        if ($output) echo serendipity_reportXSRF('token', false);
        return false;
    }

    return true;
}

/**
 * Prevent XSRF attacks by setting a form token within HTTP Forms
 *
 * http://de.wikipedia.org/wiki/XSRF
 *
 * By inserting a unique Form token that holds the session id, all requests
 * to serendipity HTTP forms can only be processed if the token is present.
 * This effectively makes XSRF attacks impossible. Only bundled with XSS
 * attacks it can be bypassed.
 *
 * 'form' type tokens can be embedded within the <form> script.
 * 'url' type token can be embedded within HTTP GET calls.
 *
 * @access public
 * @param   string      The type of token to return (form|url|plain)
 * @return  string      Returns the form token to be used in your functions
 */
function serendipity_setFormToken($type = 'form') {
    global $serendipity;

    if ($type == 'form') {
        return '<input type="hidden" name="serendipity[token]" value="' . md5(session_id()) . '" />';
    } elseif ($type == 'url') {
        return 'serendipity[token]=' . md5(session_id());
    } else {
        return md5(session_id());
    }
}

/**
 * Load available/configured options for a specific theme (through config.inc.php of a template directory)
 * into an array.
 *
 * @param   array   Referenced variable coming from the config.inc.php file, where the config values will be stored in
 * @param   boolean Use true boolean mode in array $template_config in the config.inc.php file
 * @return  array   Final return array with default values
 */
function &serendipity_loadThemeOptions(&$template_config, $okey = '', $bc_bool = false) {
    global $serendipity;
    
    if (empty($okey)) {
        $okey = $serendipity['template'];
    }

    $_template_vars =& serendipity_db_query("SELECT name, value FROM {$serendipity['dbPrefix']}options
                                             WHERE okey = 't_" . serendipity_db_escape_string($okey) . "'
                                                OR okey = 't_global'", false, 'assoc', false, 'name', 'value');
    if (!is_array($_template_vars)) {
        $template_vars = array();
    } else {
        $template_vars =& $_template_vars;
    }

    foreach($template_config AS $key => $item) {
        if (!isset($template_vars[$item['var']])) {
            $template_vars[$item['var']] = $item['default'];
        }
    }
    if($bc_bool) { 
        foreach($template_vars AS $k => $i) { 
            if($i == 'true' || $i == 'false') {
                $template_vars[$k] = serendipity_db_bool($i);
            }
        }
        //reset smarty compiled template ?
    }
    return $template_vars;
}

/**
 * Load global available/configured options for a specific theme
 * into an array.
 *
 * @param   array   Referenced variable coming from the config.inc.php file, where the config values will be stored in
 * @param   array   Current template configuration
 * @return  array   Final return array with default values
 */
function serendipity_loadGlobalThemeOptions(&$template_config, &$template_loaded_config, $supported = array()) {
    global $serendipity;
    
    if ($supported['navigation']) {
        $navlinks = array();

        $conf_amount = array(
                'var'           => 'amount',
                'name'          => NAVLINK_AMOUNT,
                'type'          => 'string',
                'default'       => '5',
                'scope'         => 'global'
        );

		// This always needs to be present, if not it could happen that the template options do have an older version of this variable
		$template_config[] = $conf_amount;

        if (!isset($template_loaded_config['amount']) || empty($template_loaded_config['amount'])) {
            $template_loaded_config['amount'] = $conf_amount['default'];
        }
        
		// Check if we are currently inside the admin interface.
		if ($serendipity['POST']['adminModule'] == 'templates' && $serendipity['POST']['adminAction'] == 'configure' && !empty($serendipity['POST']['template']['amount'])) {
			$template_loaded_config['amount'] = (int)$serendipity['POST']['template']['amount'];
		}

        for ($i = 0; $i < $template_loaded_config['amount']; $i++) {
            $navlinks[] = array(
                'title' => $template_loaded_config['navlink' . $i . 'text'],
                'href'  => $template_loaded_config['navlink' . $i . 'url']
            );
    
            $template_config[] = array(
                'var'           => 'navlink' . $i . 'text',
                'name'          => NAV_LINK_TEXT . ' #' . ($i+1),
                'type'          => 'string',
                'default'       => 'Link #' . ($i+1),
                'scope'         => 'global'
            );
            $template_config[] = array(
                'var'           => 'navlink' . $i . 'url',
                'name'          => NAV_LINK_URL . ' #' . ($i+1),
                'type'          => 'string',
                'default'       => '#',
                'scope'         => 'global'
            );
        }
    
        $serendipity['smarty']->assignByRef('navlinks', $navlinks);
    }
    
    // Forward thinking. ;-)
    serendipity_plugin_api::hook_event('backend_templates_globalthemeoptions', $template_config, $supported);
}



/**
 * Check if a member of a group has permissions to execute a plugin
 *
 * @param string    Pluginname
 * @param int       ID of the group of which the members should be checked
 * @return boolean
 */
function serendipity_hasPluginPermissions($plugin, $groupid = null) {
    static $forbidden = null;
    global $serendipity;

    if (empty($serendipity['authorid'])) {
        return true;
    }

    if ($forbidden === null || ($groupid !== null && !isset($forbidden[$groupid]))) {
        $forbidden = array();
        
        if ($groupid === null) {
            $groups = serendipity_checkPermission(null, null, 'all');
        } else {
            $groups = array($groupid => serendipity_fetchGroup($groupid));
        }

        foreach($groups AS $idx => $group) {
            if ($idx == 'membership') {
                continue;
            }
            foreach($group AS $key => $val) {
                if (substr($key, 0, 2) == 'f_') {
                    $forbidden[$groupid][$key] = true;
                }
            }
        }
    }

    if (isset($forbidden[$groupid]['f_' . $plugin])) {
        return false;
    } else {
        return true;
    }
}

function serendipity_hash($string) {
    global $serendipity;
    
    if (empty($serendipity['hashkey'])) {
        serendipity_set_config_var('hashkey', time(), 0);
    }

    return sha1($serendipity['hashkey'] . $string);
}

function serendipity_passwordhash($cleartext_password) {
    global $serendipity;

    if ($_SESSION['serendipityHashType'] > 0) {
        return serendipity_hash($cleartext_password);
    } else {
        return md5($cleartext_password);
    }
}

/* vim: set sts=4 ts=4 expandtab : */

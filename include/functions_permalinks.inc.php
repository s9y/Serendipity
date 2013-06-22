<?php # $Id: functions.inc.php 85 2005-05-10 10:11:05Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

/**
 * Converts a string into a filename that can be used safely in HTTP URLs
 *
 * @access public
 * @param   string  input string
 * @param   boolean Shall dots in the filename be removed? (Required for certain regex rules)
 * @return  string  output string
 */
function serendipity_makeFilename($str, $stripDots = false) {
    static $from = array(
                     ' ',
                     '%',

                     'Ä',
                     'ä',

                     'Ö',
                     'ö',

                     'Ü',
                     'ü',

                     'ß',

                     'é',
                     'è',
                     'ê',

                     'í',
                     'ì',
                     'î',

                     'á',
                     'à',
                     'â',
                     'å',

                     'ó',
                     'ò',
                     'ô',
                     'õ',

                     'ú',
                     'ù',
                     'û',

                     'ç',
                     'Ç',

                     'ñ',

                     'ý');

    static $to   = array(
                     '-',
                     '%25',

                     'AE',
                     'ae',

                     'OE',
                     'oe',

                     'UE',
                     'ue',

                     'ss',

                     'e',
                     'e',
                     'e',

                     'i',
                     'i',
                     'i',

                     'a',
                     'a',
                     'a',
                     'a',

                     'o',
                     'o',
                     'o',
                     'o',

                     'u',
                     'u',
                     'u',

                     'c',
                     'C',

                     'n',

                     'y');

    if (isset($GLOBALS['i18n_filename_utf8'])) {
        $str = str_replace(' ', '_', $str);
        $str = str_replace('&', '%25', $str);
        $str = str_replace('/', '%2F', $str);
        $str = urlencode($str);
    } else {
        if (isset($GLOBALS['i18n_filename_from'])) {
            // Replace international chars not detected by every locale.
            // The array of chars is defined in the language file.
            $str = str_replace($GLOBALS['i18n_filename_from'], $GLOBALS['i18n_filename_to'], $str);

            if (LANG_CHARSET == 'UTF-8') {
                // URLs need to be 7bit - since this function takes care of the most common ISO-8859-1
                // characters, try to UTF8-decode the string first.
                $str = utf8_decode($str);
            }
        } else {
            // Replace international chars not detected by every locale
            if (LANG_CHARSET == 'UTF-8') {
                // URLs need to be 7bit - since this function takes care of the most common ISO-8859-1
                // characters, try to UTF8-decode the string first.
                $str = utf8_decode($str);
            }

            $str = str_replace($from, $to, $str);
        }

        // Nuke chars not allowed in our URI
        $str = preg_replace('#[^' . PAT_FILENAME . ']#i', '', $str);
    }    

    // Check if dots are allowed
    if ($stripDots) {
        $str = str_replace('.', '', $str);
    }

    // Remove consecutive separators
    $str = preg_replace('#'. $to[0] .'{2,}#s', $to[0], $str);

    // Remove excess separators
    $str = trim($str, $to[0]);

    if (empty($str)) {
        if (isset($GLOBALS['i18n_unknown'])) {
            $str = $GLOBALS['i18n_unknown'];
        } else {
            $str = 'unknown';
        }
    }

    return $str;
}

/**
 * Initialize permalinks, if the user did not specify those yet
 *
 * @access public
 * @return null
 */
function serendipity_initPermalinks() {
    global $serendipity;

    if (!isset($serendipity['permalinkStructure'])) {
        $serendipity['permalinkStructure'] = 'archives/%id%-%title%.html';
    }

    if (!isset($serendipity['permalinkFeedAuthorStructure'])) {
        $serendipity['permalinkFeedAuthorStructure'] = 'feeds/authors/%id%-%realname%.rss';
    }

    if (!isset($serendipity['permalinkFeedCategoryStructure'])) {
        $serendipity['permalinkFeedCategoryStructure'] = 'feeds/categories/%id%-%name%.rss';
    }

    if (!isset($serendipity['permalinkCategoryStructure'])) {
        $serendipity['permalinkCategoryStructure'] = 'categories/%id%-%name%';
    }

    if (!isset($serendipity['permalinkAuthorStructure'])) {
        $serendipity['permalinkAuthorStructure'] = 'authors/%id%-%realname%';
    }

    if (!isset($serendipity['permalinkArchivesPath'])) {
        $serendipity['permalinkArchivesPath'] = 'archives';
    }

    if (!isset($serendipity['permalinkArchivePath'])) {
        $serendipity['permalinkArchivePath'] = 'archive';
    }

    if (!isset($serendipity['permalinkCategoriesPath'])) {
        $serendipity['permalinkCategoriesPath'] = 'categories';
    }

    if (!isset($serendipity['permalinkAuthorsPath'])) {
        $serendipity['permalinkAuthorsPath'] = 'authors';
    }

    if (!isset($serendipity['permalinkUnsubscribePath'])) {
        $serendipity['permalinkUnsubscribePath'] = 'unsubscribe';
    }

    if (!isset($serendipity['permalinkDeletePath'])) {
        $serendipity['permalinkDeletePath'] = 'delete';
    }

    if (!isset($serendipity['permalinkApprovePath'])) {
        $serendipity['permalinkApprovePath'] = 'approve';
    }

    if (!isset($serendipity['permalinkFeedsPath'])) {
        $serendipity['permalinkFeedsPath'] = 'feeds';
    }

    if (!isset($serendipity['permalinkPluginPath'])) {
        $serendipity['permalinkPluginPath'] = 'plugin';
    }

    if (!isset($serendipity['permalinkAdminPath'])) {
        $serendipity['permalinkAdminPath'] = 'admin';
    }

    if (!isset($serendipity['permalinkSearchPath'])) {
        $serendipity['permalinkSearchPath'] = 'search';
    }

    if (!isset($serendipity['permalinkCommentsPath'])) {
        $serendipity['permalinkCommentsPath'] = 'comments';
    }

    /* URI paths
     * These could be defined in the language headers, except that would break
     * backwards URL compatibility
     */
    @define('PATH_ARCHIVES',    $serendipity['permalinkArchivesPath']);
    @define('PATH_ARCHIVE',     $serendipity['permalinkArchivePath']);
    @define('PATH_CATEGORIES',  $serendipity['permalinkCategoriesPath']);
    @define('PATH_UNSUBSCRIBE', $serendipity['permalinkUnsubscribePath']);
    @define('PATH_DELETE',      $serendipity['permalinkDeletePath']);
    @define('PATH_APPROVE',     $serendipity['permalinkApprovePath']);
    @define('PATH_FEEDS',       $serendipity['permalinkFeedsPath']);
    @define('PATH_PLUGIN',      $serendipity['permalinkPluginPath']);
    @define('PATH_ADMIN',       $serendipity['permalinkAdminPath']);
    @define('PATH_SEARCH',      $serendipity['permalinkSearchPath']);
    @define('PATH_COMMENTS',    $serendipity['permalinkCommentsPath']);

    /* URI patterns
     * Note that it's important to use @ as the pattern delimiter. DO NOT use shortcuts
     * like \d or \s, since mod_rewrite will use the regexps as well and chokes on them.
     * If you add new patterns, remember to add the new rules to the *.tpl files and
     * function serendipity_installFiles().
     */
    @define('PAT_FILENAME',       '0-9a-z\.\_!;,\+\-\%');
    @define('PAT_FILENAME_MATCH', '[' . PAT_FILENAME . ']+');
    @define('PAT_DIRNAME_MATCH',  '[' . PAT_FILENAME . '/]*');
    @define('PAT_CSS',            '@/(serendipity\.css|serendipity_admin\.css)@');
    @define('PAT_JS',             '@/(serendipity\.js|serendipity_admin\.js)@');
    @define('PAT_FEED',           '@/(index|atom[0-9]*|rss|b2rss|b2rdf).(rss|rdf|rss2|xml)@');
    @define('PAT_COMMENTSUB',     '@/([0-9]+)[_\-][' . PAT_FILENAME . ']*\.html@i');

    return true;
}

/**
 * Build an array containing all regular expression permalinks
 *
 * @access public
 * @param   boolean     If set to true, the list of permalinks will be returned. If false, all permalinks will be applied as Constants
 * @return  array       (conditional on $return) List of permalinks
 */
function &serendipity_permalinkPatterns($return = false) {
    global $serendipity;

    $PAT = array();

    $PAT['UNSUBSCRIBE']              = '@/'  . $serendipity['permalinkUnsubscribePath'].'/(.*)/([0-9]+)@';
    $PAT['APPROVE']                  = '@/'  . $serendipity['permalinkApprovePath'].'/(.*)/(.*)/([0-9]+)@';
    $PAT['DELETE']                   = '@/'  . $serendipity['permalinkDeletePath'].'/(.*)/(.*)/([0-9]+)@';
    $PAT['ARCHIVES']                 = '@/'  . $serendipity['permalinkArchivesPath'].'([/A-Za-z0-9]+)\.html@';
    $PAT['FEEDS']                    = '@/'  . $serendipity['permalinkFeedsPath'].'/@';
    $PAT['ADMIN']                    = '@/(' . $serendipity['permalinkAdminPath'] . '|entries)(/.+)?$@';
    $PAT['ARCHIVE']                  = '@/'  . $serendipity['permalinkArchivePath'] . '/?@';
    $PAT['CATEGORIES']               = '@/'  . $serendipity['permalinkCategoriesPath'].'/([0-9;]+)@';
    $PAT['PLUGIN']                   = '@/(' . $serendipity['permalinkPluginPath'] . '|plugin)/(.*)@';
    $PAT['SEARCH']                   = '@/'  . $serendipity['permalinkSearchPath'] . '/(.*)@';
    $PAT['COMMENTS']                 = '@/'  . $serendipity['permalinkCommentsPath'] . '/(.*)@';
    $PAT['PERMALINK']                = '@('  . serendipity_makePermalinkRegex($serendipity['permalinkStructure'], 'entry') . ')/?@i';
    $PAT['PERMALINK_CATEGORIES']     = '@'   . serendipity_makePermalinkRegex($serendipity['permalinkCategoryStructure'], 'category') . '@i';
    $PAT['PERMALINK_FEEDCATEGORIES'] = '@'   . serendipity_makePermalinkRegex($serendipity['permalinkFeedCategoryStructure'], 'category') . '@i';
    $PAT['PERMALINK_FEEDAUTHORS']    = '@'   . serendipity_makePermalinkRegex($serendipity['permalinkFeedAuthorStructure'], 'author') . '@i';
    $PAT['PERMALINK_AUTHORS']        = '@'   . serendipity_makePermalinkRegex($serendipity['permalinkAuthorStructure'], 'author') . '@i';

    if ($return) {
        return $PAT;
    } else {
        foreach($PAT AS $constant => $value) {
            define('PAT_' . $constant, $value);
        }

        $return = true;
        return $return;
    }
}

/**
 * Search the reference to a specific permalink
 *
 * This query will show the Entry/Category/Author-ID to a permalink, if that permalink
 * does not contain %id%.
 *
 * @access public
 * @param   string      The permalink configuration string
 * @param   string      The URL to check
 * @param   string      A default return value if no permalink is found
 * @param   string      The type of a permalink (entry|category|author)
 * @return  string      The ID of the permalink type
 */
function serendipity_searchPermalink($struct, $url, $default, $type = 'entry') {
    global $serendipity;

    if (stristr($struct, '%id%') === FALSE) {
        $url = preg_replace('@^(' . preg_quote($serendipity['serendipityHTTPPath'], '@') . '(' . preg_quote($serendipity['indexFile'], '@') . ')?\??(url=)?/?)([^&?]+).*@', '\4', $url);
        // If no entryid is submitted, we rely on a new DB call to fetch the permalink.
        $pq = "SELECT entry_id, data
                 FROM {$serendipity['dbPrefix']}permalinks
                WHERE (permalink = '" . serendipity_db_escape_string($url) . "'
                   OR permalink = '" . serendipity_db_escape_string($default) . "')
                  AND type      = '" . serendipity_db_escape_string($type) . "'
                  AND entry_id  > 0
                LIMIT 1";
// echo $pq; // DEBUG
// die($pq); // DEBUG
        $permalink = serendipity_db_query($pq, true, 'both', false, false, false, true);

        if (is_array($permalink)) {
            return $permalink['entry_id'];
        }
    }

    return $default;
}

/**
 * Create a permalink for the given input data
 *
 * You can pass an entry array, or an author array to this function
 * and then get a permalink valid for that array
 *
 * @access public
 * @param   array       The input data used for building the permalink
 * @param   string      The type of the permalink (entry|category|author)
 * @return  string      The permalink
 */
function serendipity_getPermalink(&$data, $type = 'entry') {
    switch($type) {
        case 'entry':
            return serendipity_archiveURL(
                        $data['id'],
                        $data['title'],
                        '',
                        false,
                        array('timestamp' => $data['timestamp'])
            );
            break;

        case 'category':
            return serendipity_categoryURL($data, '', false);
            break;

        case 'author':
            return serendipity_authorURL($data, '', false);
            break;
    }

    return false;
}

/**
 * Update a permalink with new data
 *
 * @access public
 * @param   array       The input data used for building the permalink
 * @param   string      The type of the permalink (entry|category|author)
 * @return  string      The database result
 */
function serendipity_updatePermalink(&$data, $type = 'entry') {
    global $serendipity;

    $link = serendipity_getPermalink($data, $type);
    return(serendipity_db_query(sprintf("UPDATE {$serendipity['dbPrefix']}permalinks
                                            SET permalink = '%s'
                                          WHERE entry_id  = %s
                                            AND type      = '%s'",

                                            serendipity_db_escape_string($link),
                                            (int)$data['id'],
                                            serendipity_db_escape_string($type))));
}

/**
 * Insert a new Permalink into the database for latter retrieval
 *
 * This function is basically only used if you have no '%id%' value in your permalink config.
 *
 * @access public
 * @param   array       The input data used for building the permalink
 * @param   string      The type of the permalink (entry|category|author)
 * @return  string      The permalink
 */
function serendipity_insertPermalink(&$data, $type = 'entry') {
    global $serendipity;

    $link = serendipity_getPermalink($data, $type);

    switch($type) {
        case 'entry':
            $idfield = 'id';
            break;

        case 'author':
            $idfield = 'authorid';
            break;

        case 'category':
            $idfield = 'categoryid';
            break;
    }

    return(serendipity_db_query(sprintf("INSERT INTO {$serendipity['dbPrefix']}permalinks
                                                    (permalink, entry_id, type)
                                             VALUES ('%s', '%s', '%s')",

                                            serendipity_db_escape_string($link),
                                            (int)$data[$idfield],
                                            serendipity_db_escape_string($type))));
}

/**
 * Build all permalinks for all current entries, authors and categories
 *
 * @access public
 * @return null
 */
function serendipity_buildPermalinks() {
    global $serendipity;

    $entries = serendipity_db_query("SELECT id, title, timestamp FROM {$serendipity['dbPrefix']}entries");

    if (is_array($entries)) {
        serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}permalinks WHERE type = 'entry'");

        foreach($entries AS $entry) {
            serendipity_insertPermalink($entry, 'entry');
        }
    }

    $authors = serendipity_db_query("SELECT * FROM {$serendipity['dbPrefix']}authors");

    if (is_array($authors)) {
        serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}permalinks WHERE type = 'author'");

        foreach($authors AS $author) {
            serendipity_insertPermalink($author, 'author');
        }
    }

    $categories = serendipity_db_query("SELECT * FROM {$serendipity['dbPrefix']}category");

    if (is_array($categories)) {
        serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}permalinks WHERE type = 'category'");

        foreach($categories AS $category) {
            serendipity_insertPermalink($category, 'category');
        }
    }
}

/**
 * Uses logic to figure out how the URI should look, based on current rewrite rule
 *
 * @access public
 * @param   string      The URL part that you want to format to "pretty urls"
 * @param   string      The path/URL you want as a prefix for your pretty URL
 * @param   boolean     If set to TRUE this will bypass all pretty URLs and format the link so that it works everywhere
 * @return  string      The rewritten URL
 */
function serendipity_rewriteURL($path, $key='baseURL', $forceNone = false) {
    global $serendipity;
    return $serendipity[$key] . ($serendipity['rewrite'] == 'none' || ($serendipity['rewrite'] != 'none' && $forceNone) ? $serendipity['indexFile'] . '?/' : '') . $path;
}

/**
 * Format a permalink according to the configured format
 *
 * @access public
 * @param   string      The URL format to use
 * @param   array       The input data to format a permalink
 * @param   string      The type of the permalink (entry|category|author)
 * @return  string      The formatted permalink
 */
function serendipity_makePermalink($format, $data, $type = 'entry') {
    global $serendipity;
    static $entryKeys    = array('%id%', '%lowertitle%', '%title%', '%day%', '%month%', '%year%');
    static $authorKeys   = array('%id%', '%username%', '%realname%', '%email%');
    static $categoryKeys = array('%id%', '%name%', '%parentname%', '%description%');

    switch($type) {
        case 'entry':
            if (!isset($data['entry']['timestamp']) && preg_match('@(%day%|%month%|%year%)@', $format)) {
                // We need the timestamp to build the URI, but no timestamp has been submitted. Thus we need to fetch the data.
                $ts = serendipity_db_query("SELECT timestamp FROM {$serendipity['dbPrefix']}entries WHERE id = " . (int)$data['id'], true);
                if (is_array($ts)) {
                    $data['entry']['timestamp'] = $ts['timestamp'];
                } else {
                    $data['entry']['timestamp'] = time();
                }
            }

            $ts = serendipity_serverOffsetHour($data['entry']['timestamp']);

            $ftitle  = serendipity_makeFilename($data['title']);
            $fltitle = strtolower($ftitle);

            $replacements =
                array(
                    (int)$data['id'],
                    $fltitle,
                    $ftitle,
                    date('d', $ts),
                    date('m', $ts),
                    date('Y', $ts)
                );
            return str_replace($entryKeys, $replacements, $format);
            break;

        case 'author':
            $replacements =
                array(
                    (int)$data['authorid'],
                    serendipity_makeFilename($data['username'], true),
                    serendipity_makeFilename($data['realname'], true),
                    serendipity_makeFilename($data['email'], true)
                );
            return str_replace($authorKeys, $replacements, $format);
            break;

        case 'category':
            $parent_path = array();

            // This is expensive. Only lookup if required.
            if (strstr($format, '%parentname%')) {
                $parents = serendipity_getCategoryRoot($data['categoryid']);
                if (is_array($parents)) {
                    foreach($parents AS $parent) {
                        $parent_path[] = serendipity_makeFilename($parent['category_name'], true);
                    }
                }
            }            

            $replacements =
                array(
                    (int)$data['categoryid'],
                    serendipity_makeFilename($data['category_name'], true),
                    implode('/', $parent_path),
                    serendipity_makeFilename($data['category_description'], true)
                );
            return str_replace($categoryKeys, $replacements, $format);
            break;
    }

    return false;
}

/**
 * Convert a permalink configuration into a regular expression for use in rewrite rules
 *
 * @access public
 * @param   string      The URL format to use
 * @param   string      The type of the permalink (entry|category|author)
 * @return  string      The regular expression to a permalink URL
 */
function serendipity_makePermalinkRegex($format, $type = 'entry') {
    static $entryKeys           = array('%id%',     '%lowertitle%',     '%title%',          '%day%',      '%month%',    '%year%');
    static $entryRegexValues    = array('([0-9]+)', PAT_FILENAME_MATCH, PAT_FILENAME_MATCH, '[0-9]{1,2}', '[0-9]{1,2}', '[0-9]{4}');

    static $authorKeys          = array('%id%',     '%username%',       '%realname%',       '%email%');
    static $authorRegexValues   = array('([0-9]+)', PAT_FILENAME_MATCH, PAT_FILENAME_MATCH, PAT_FILENAME_MATCH);

    static $categoryKeys        = array('%id%',     '%name%',            '%parentname%',     '%description%');
    static $categoryRegexValues = array('([0-9;]+)', PAT_FILENAME_MATCH, PAT_DIRNAME_MATCH,  PAT_FILENAME_MATCH);

    switch($type) {
        case 'entry':
            return str_replace($entryKeys, $entryRegexValues, preg_quote($format));
            break;

        case 'author':
            return str_replace($authorKeys, $authorRegexValues, preg_quote($format));
            break;

        case 'category':
            return str_replace($categoryKeys, $categoryRegexValues, preg_quote($format));
            break;
    }
}

/**
 * Create a permalink for an entry permalink
 *
 * @access public
 * @param   int     The entry ID
 * @param   string  The entry title
 * @param   string  The base URL/path key
 * @param   boolean Shall the link be rewritten to a pretty URL?
 * @param   array   Additional entry data
 * @return  string  The permalink
 */
function serendipity_archiveURL($id, $title, $key = 'baseURL', $checkrewrite = true, $entryData = null) {
    global $serendipity;
    $path = serendipity_makePermalink($serendipity['permalinkStructure'], array('id'=> $id, 'title' => $title, 'entry' => $entryData));
    if ($checkrewrite) {
        $path = serendipity_rewriteURL($path, $key);
    }
    return $path;
}

/**
 * Create a permalink for an authors permalink
 *
 * @access public
 * @param   array   The author data
 * @param   string  The base URL/path key
 * @param   boolean Shall the link be rewritten to a pretty URL?
 * @return  string  The permalink
 */
function serendipity_authorURL(&$data, $key = 'baseURL', $checkrewrite = true) {
    global $serendipity;
    $path = serendipity_makePermalink($serendipity['permalinkAuthorStructure'], $data, 'author');
    if ($checkrewrite) {
        $path = serendipity_rewriteURL($path, $key);
    }
    return $path;
}

/**
 * Create a permalink for an category permalink
 *
 * @access public
 * @param   array   The category data
 * @param   string  The base URL/path key
 * @param   boolean Shall the link be rewritten to a pretty URL?
 * @return  string  The permalink
 */
function serendipity_categoryURL(&$data, $key = 'baseURL', $checkrewrite = true) {
    global $serendipity;
    $path = serendipity_makePermalink($serendipity['permalinkCategoryStructure'], $data, 'category');
    if ($checkrewrite) {
        $path = serendipity_rewriteURL($path, $key);
    }
    return $path;
}

/**
 * Create a permalink for an RSS feed permalink
 *
 * @access public
 * @param   array   The entry data
 * @param   string  The base URL/path key
 * @param   boolean Shall the link be rewritten to a pretty URL?
 * @return  string  The permalink
 */
function serendipity_feedCategoryURL(&$data, $key = 'baseURL', $checkrewrite = true) {
    global $serendipity;
    $path = serendipity_makePermalink($serendipity['permalinkFeedCategoryStructure'], $data, 'category');
    if ($checkrewrite) {
        $path = serendipity_rewriteURL($path, $key);
    }
    return $path;
}

/**
 * Create a permalink for an RSS authors' feed permalink
 *
 * @access public
 * @param   array   The entry data
 * @param   string  The base URL/path key
 * @param   boolean Shall the link be rewritten to a pretty URL?
 * @return  string  The permalink
 */
function serendipity_feedAuthorURL(&$data, $key = 'baseURL', $checkrewrite = true) {
    global $serendipity;
    $path = serendipity_makePermalink($serendipity['permalinkFeedAuthorStructure'], $data, 'author');
    if ($checkrewrite) {
        $path = serendipity_rewriteURL($path, $key);
    }
    return $path;
}

/**
 * Create a permalink for an archive date
 *
 * @access public
 * @param   string  The archive's date
 * @param   boolean If true, only summary archive
 * @param   string  The base URL/path key
 * @return  string  The permalink
 */
function serendipity_archiveDateUrl($range, $summary=false, $key='baseURL') {
    return serendipity_rewriteURL(PATH_ARCHIVES . '/' . $range . ($summary ? '/summary' : '') . '.html', $key);
}

/**
 * Returns the URL to the current page that is being viewed
 *
 * @access public
 * @return string   the current URL
 */
function serendipity_currentURL($strict = false) {
    global $serendipity;

    // All that URL getting humpty-dumpty is necessary to allow a user to change the template in the
    // articles view. POSTing data to that page only works with mod_rewrite and not the ErrorDocument
    // redirection, so we need to generate the ErrorDocument-URI here.

    $uri = @parse_url($_SERVER['REQUEST_URI']);
    $qst = '';
    if (!empty($uri['query'])) {
        $qst = '&amp;' . str_replace('&', '&amp;', $uri['query']);
    }
    $uri['path'] = preg_replace('@^' . preg_quote($serendipity['serendipityHTTPPath']) . '@i', ($strict ? '/' : ''), $uri['path']);
    $uri['path'] = preg_replace('@^(&amp;)?' . preg_quote($serendipity['indexFile']) . '(&amp;)@i', '', $uri['path']);
    $url = $serendipity['serendipityHTTPPath'] . $serendipity['indexFile'] . '?' . $uri['path'] . $qst;
    $url = str_replace(
        array(
            $serendipity['indexFile'] . '&amp;',
            '"',
            "'",
            '<',
            '>',
            '`'
        ),

        array(
            '',
            '',
            '',
            '',
            ''
        ),

        $url); // Kill possible looped repitions and bad characters which could occur

    if ($strict) {
        $url = preg_replace('@(//+)@', '/', $url);
    }

    return $url;
}

/**
 * Get the URI Arguments for the current HTTP Request
 *
 * @access public
 * @param   string      The URI made for this request
 * @param   boolean     If enabled, then no Dots are allowed in the URL for permalinks
 * @return
 */
function serendipity_getUriArguments($uri, $wildcard = false) {
global $serendipity;
static $indexFile = null;

    if ($indexFile === null) {
        $_indexFile = explode('.', $serendipity['indexFile']);
        $indexFile = $_indexFile[0];
    }

    /* Explode the path into sections, to later be able to check for arguments and add our own */
    preg_match('/^'. preg_quote($serendipity['serendipityHTTPPath'], '/') . '(' . preg_quote($serendipity['indexFile'], '/') . '\?\/)?(' . ($wildcard ? '.+' : '[!;,_a-z0-9\-*\/%\+]+') . ')/i', $uri, $_res);
    if (strlen($_res[2]) != 0) {
        $args = explode('/', $_res[2]);
        if ($args[0] == $indexFile || $args[0] == $serendipity['indexFile']) {
            unset($args[0]);
        }
        return $args;
    } else {
        return array();
    }
}


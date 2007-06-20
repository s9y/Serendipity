<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (defined('S9Y_FRAMEWORK_TRACKBACKS')) {
    return;
}
@define('S9Y_FRAMEWORK_TRACKBACKS', true);

/**
 * Check a HTTP response if it is a valid XML trackback response
 *
 * @access public
 * @param   string  HTTP Response string
 * @return  mixed   Boolean or error message
 */
function serendipity_trackback_is_success($resp) {
    if (preg_match('@<error>(\d+)</error>@', $resp, $matches)) {
        if ((int) $matches[1] === 0) {
            return true;
        } else {
            if (preg_match('@<message>([^<]+)</message>@', $resp, $matches)) {
                return $matches[1];
            }
            else {
                return 'unknown error';
            }
        }
    }
    return true;
}

/**
 * Perform a HTTP query for autodiscovering a pingback URL
 *
 * @access public
 * @param   string  (deprecated) The URL to try autodiscovery
 * @param   string  The response of the original URL
 * @return
 */
function serendipity_pingback_autodiscover($loc, $body) {
global $serendipity;
    if (!empty($_SERVER['X-PINGBACK'])) {
        $pingback = $_SERVER['X-PINGBACK'];
    } elseif (preg_match('@<link rel="pingback" href="([^"]+)" ?/?>@i', $body, $matches)) {
        $pingback = $matches[1];
    } else {
        return;
    }

    // xml-rpc hack
    $query = "
<?xml version=\"1.0\"?>
<methodCall>
  <methodName>pingback.ping</methodName>
  <params>
    <param>
      <name>sourceURI</name>
      <value><string>{$serendipity['baseURL']}</string></value>
    </param>
      <name>targetURI</name>
      <value><string>$loc</string></value>
    </param>
  </params>
</methodCall>";
        _serendipity_send($pingback, $query);
        return;
}

/**
 * Send a track/pingback ping
 *
 * @access public
 * @param   string  The URL to send a trackback to
 * @param   string  The XML data with the trackback contents
 * @return  string  Reponse
 */
function _serendipity_send($loc, $data) {
    global $serendipity;

    $target = parse_url($loc);
    if ($target['query'] != '') {
        $target['query'] = '?' . str_replace('&amp;', '&', $target['query']);
    }

    if (!is_numeric($target['port'])) {
       $target['port'] = 80;
    }

    $uri = $target['scheme'] . '://' . $target['host'] . ':' . $target['port'] . $target['path'] . $target['query'];
    require_once S9Y_PEAR_PATH . 'HTTP/Request.php';
    $options = array('allowRedirects' => true, 'maxRedirects' => 5, 'method' => 'POST');
    serendipity_plugin_api::hook_event('backend_http_request', $options, 'trackback_send');
    serendipity_request_start();

    $req = &new HTTP_Request($uri, $options);
    $req->addRawPostData($data, true);
    $res = $req->sendRequest();

    if (PEAR::isError($res)) {
        serendipity_request_end();
        return false;
    }

    $fContent = $req->getResponseBody();
    serendipity_request_end();
    return $fContent;
}

/**
 * Autodiscover a trackback location URL
 *
 * @access public
 * @param   string  The HTML of the source URL
 * @param   string  The source URL
 * @param   string  The URL of our blog
 * @param   string  The author of our entry
 * @param   string  The title of our entry
 * @param   string  The text of our entry
 * @param   string  A comparsion URL

 * @return string   Response
 */
function serendipity_trackback_autodiscover($res, $loc, $url, $author, $title, $text, $loc2 = '') {
    if (!preg_match('@trackback:ping(\s*rdf:resource)?\s*=\s*["\'](https?:[^"\']+)["\']@i', $res, $matches)) {
        $matches = array();
        serendipity_plugin_api::hook_event('backend_trackback_check', $matches, $loc);

        // Plugins may say that a URI is valid, in situations where a blog has no valid RDF metadata
        if (empty($matches[2])) {
            echo '<div>&#8226; ' . sprintf(TRACKBACK_FAILED, TRACKBACK_NOT_FOUND) . '</div>';
            return false;
        }
    }

    $trackURI = trim($matches[2]);

    if (preg_match('@dc:identifier\s*=\s*["\'](https?:[^\'"]+)["\']@i', $res, $test)) {
        if ($loc != $test[1] && $loc2 != $test[1]) {
            echo '<div>&#8226; ' . sprintf(TRACKBACK_FAILED, TRACKBACK_URI_MISMATCH) . '</div>';
            return false;
        }
    }

    $data = 'url='        . rawurlencode($url)
          . '&title='     . rawurlencode($title)
          . '&blog_name=' . rawurlencode($author)
          . '&excerpt='   . rawurlencode(strip_tags($text));

    printf(TRACKBACK_SENDING, htmlspecialchars($trackURI));
    flush();

    $response = serendipity_trackback_is_success(_serendipity_send($trackURI, $data));

    if ($response === true) {
        echo '<div>&#8226; ' . TRACKBACK_SENT .'</div>';
    } else {
        echo '<div>&#8226; ' . sprintf(TRACKBACK_FAILED, $response) . '</div>';
    }

    return $response;
}

/**
 * Open a URL and autodetect contained ping/trackback locations
 *
 * @access public
 * @param   string  The URL to autodetect/try
 * @param   string  The URL to our blog
 * @param   string  The author of our entry
 * @param   string  The title of our entry
 * @param   string  The body of our entry
 * @return null
 */
function serendipity_reference_autodiscover($loc, $url, $author, $title, $text) {
global $serendipity;
    $timeout   = 30;

    $u = parse_url($loc);

    if ($u['scheme'] != 'http' && $u['scheme'] != 'https') {
        return;
    } elseif ($u['scheme'] == 'https' && !extension_loaded('openssl')) {
        return; // Trackbacks to HTTPS URLs can only be performed with openssl activated
    }

    echo '<div>&#8226; '. sprintf(TRACKBACK_CHECKING, $loc) .'</div>';
    flush();

    if (empty($u['port'])) {
        $u['port'] = 80;
        $port      = '';
    } else {
        $port      = ':' . $u['port'];
    }

    if (!empty($u['query'])) {
        $u['path'] .= '?' . $u['query'];
    }

    $parsed_loc = $u['scheme'] . '://' . $u['host'] . $port . $u['path'];

    if (preg_match('@\.(jpe?g|aiff?|gif|png|pdf|doc|rtf|wave?|mp2|mp4|mpe?g3|mpe?g4|divx|xvid|bz2|mpe?g|avi|mp3|xl?|ppt|pps|xslt?|xsd|zip|tar|t?gz|swf|rm|ram?|exe|mov|qt|midi?|qcp|emf|wmf|snd|pmg|w?bmp|gcd|mms|ogg|ogm|rv|wmv|wma|jad|3g?|jar)$@i', $u['path'])) {
        echo '<div>&#8226; ' . TRACKBACK_NO_DATA . '</div>';
        return;
    }

    require_once S9Y_PEAR_PATH . 'HTTP/Request.php';
    $options = array('allowRedirects' => true, 'maxRedirects' => 5, 'method' => 'GET');
    serendipity_plugin_api::hook_event('backend_http_request', $options, 'trackback_detect');
    serendipity_request_start();
    $req = &new HTTP_Request($parsed_loc, $options);
    $res = $req->sendRequest();

    if (PEAR::isError($res)) {
        echo '<div>&#8226; ' . sprintf(TRACKBACK_COULD_NOT_CONNECT, $u['host'], $u['port']) .'</div>';
        serendipity_request_end();
        return;
    }

    $fContent = $req->getResponseBody();
    serendipity_request_end();

    if (strlen($fContent) != 0) {
        serendipity_trackback_autodiscover($fContent, $parsed_loc, $url, $author, $title, $text, $loc);
        serendipity_pingback_autodiscover($loc, $fContent);
    } else {
        echo '<div>&#8226; ' . TRACKBACK_NO_DATA . '</div>';
    }
    echo '<hr noshade="noshade" />';
}

/**
 * Receive a trackback
 *
 * @access public
 * @param   int     The ID of our entry
 * @param   string  The title of the foreign blog
 * @param   string  The URL of the foreign blog
 * @param   string  The name of the foreign blog
 * @param   string  The excerpt text of the foreign blog
 * @return true
 */
function add_trackback ($id, $title, $url, $name, $excerpt) {
    global $serendipity;

    // We can't accept a trackback if we don't get any URL
    // This is a protocol rule.
    if (empty($url)) {
        return 0;
    }

    // If title is not provided, the value for url will be set as the title
    // This is a protocol rule.
    if (empty($title)) {
        $title = $url;
    }

    $comment = array(
        'title'   => $title,
        'url'     => $url,
        'name'    => $name,
        'comment' => $excerpt
    );

    $is_utf8 = strtolower(LANG_CHARSET) == 'utf-8';

    if ($GLOBALS['tb_logging']) {
        $fp = fopen('trackback2.log', 'a');
        fwrite($fp, '[' . date('d.m.Y H:i') . '] TRACKBACK TRANSCODING CHECK' . "\n");
    }

    foreach($comment AS $idx => $field) {
        if (is_utf8($field)) {
            // Trackback is in UTF-8. Check if our blog also is UTF-8.
            if (!$is_utf8) {
                if ($GLOBALS['tb_logging']) {
                    fwrite($fp, '[' . date('d.m.Y H:i') . '] Transcoding ' . $idx . ' from UTF-8 to ISO' . "\n");
                }
                $comment[$idx] = utf8_decode($field);
            }
        } else {
            // Trackback is in some native format. We assume ISO-8859-1. Check if our blog is also ISO.
            if ($is_utf8) {
                if ($GLOBALS['tb_logging']) {
                    fwrite($fp, '[' . date('d.m.Y H:i') . '] Transcoding ' . $idx . ' from ISO to UTF-8' . "\n");
                }
                $comment[$idx] = utf8_encode($field);
            }
        }
    }

    if ($GLOBALS['tb_logging']) {
        fwrite($fp, '[' . date('d.m.Y H:i') . '] TRACKBACK DATA: ' . print_r($comment, true) . '...' . "\n");
        fwrite($fp, '[' . date('d.m.Y H:i') . '] TRACKBACK STORING...' . "\n");
        fclose($fp);
    }

    serendipity_saveComment($id, $comment, 'TRACKBACK');

    return 1;
}

/**
 * Receive a pingback
 *
 * @access public
 * @param   int     The entryid to receive a pingback for
 * @param   string  The foreign postdata to add
 * @return boolean
 */
function add_pingback ($id, $postdata) {
    global $serendipity;

    if(preg_match('@<methodcall>\s*<methodName>\s*pingback.ping\s*</methodName>\s*<params>\s*<param>\s*<value>\s*<string>([^<]*)</string>\s*</value>\s*</param>\s*<param>\s*<value>\s*<string>([^<]*)</string>\s*</value>\s*</param>\s*</params>\s*</methodCall>@i', $postdata, $matches)) {
        $remote             = $matches[1];
        $local              = $matches[2];
        $comment['title']   = '';
        $comment['url']     = $remote;
        $comment['comment'] = '';
        $comment['name']    = '';

        serendipity_saveComment($id, $comment, 'PINGBACK');
        return 1;
    }
    return 0;
}

/**
 * Create an excerpt for a trackback to send
 *
 * @access public
 * @param   string  Input text
 * @return  string  Output text
 */
function serendipity_trackback_excerpt($text) {
    return serendipity_mb('substr', strip_tags($text), 0, 255);
}

/**
 * Report success of a trackback
 *
 * @access public
 */
function report_trackback_success () {
print '<?xml version="1.0" encoding="iso-8859-1"?>' . "\n";
print <<<SUCCESS
<response>
    <error>0</error>
</response>
SUCCESS;
}

/**
 * Report failure of a trackback
 *
 * @access public
 */
function report_trackback_failure () {
print '<?xml version="1.0" encoding="iso-8859-1"?>' . "\n";
print <<<FAILURE
<response>
    <error>1</error>
    <message>Danger Will Robinson, trackback failed.</message>
</response>
FAILURE;
}

/**
 * Return success of a pingback
 *
 * @access public
 */
function report_pingback_success () {
print '<?xml version="1.0"?>' . "\n";
print <<<SUCCESS
<methodResponse>
   <params>
      <param>
         <value><string>success</string></value>
         </param>
      </params>
   </methodResponse>
SUCCESS;
}

/**
 * Return failure of a pingback
 *
 * @access public
 */
function report_pingback_failure () {
print '<?xml version="1.0"?>' . "\n";
print <<<FAILURE
<methodResponse>
    <fault>
    <value><i4>0</i4></value>
    </fault>
</methodResponse>
FAILURE;
}

/**
 * Search through link body, and automagically send a trackback ping.
 *
 * This is the trackback starter function that searches your text and sees if any
 * trackback URLs are in there
 *
 * @access public
 * @param   int     The ID of our entry
 * @param   string  The author of our entry
 * @param   string  The title of our entry
 * @param   string  The text of our entry
 * @param   boolean Dry-Run, without performing trackbacks?
 * @return
 */
function serendipity_handle_references($id, $author, $title, $text, $dry_run = false) {
    global $serendipity;
    static $old_references = array();
    static $saved_references = array();
    static $debug = false;

    if ($dry_run) {
        // Store the current list of references. We might need to restore them for later user.
        $old_references = serendipity_db_query("SELECT * FROM {$serendipity['dbPrefix']}references WHERE (type = '' OR type IS NULL) AND entry_id = " . (int)$id, false, 'assoc');
        
        if ($debug && is_string($old_references)) {
            echo $old_references . "<br />\n";
        }

        if (is_array($old_references) && count($old_references) > 0) {
            $current_references = array();
            foreach($old_references AS $idx => $old_reference) {
                // We need the current reference ID to restore it later.
                $saved_references[$old_reference['link'] . $old_reference['name']] = $current_references[$old_reference['link'] . $old_reference['name']] = $old_reference;
            }
        }
        if ($debug) echo "Got references in dry run: <pre>" . print_r($current_references, true) . "</pre><br />\n";
    } else {
        // A dry-run was called previously and restorable references are found. Restore them now.
        $del = serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}references WHERE (type = '' OR type IS NULL) AND entry_id = " . (int)$id);
        if ($debug && is_string($del)) {
            echo $del . "<br />\n";
        }

        if ($debug) echo "Deleted references.<br />\n";

        if (is_array($old_references) && count($old_references) > 0) {
            $current_references = array();
            foreach($old_references AS $idx => $old_reference) {
                // We need the current reference ID to restore it later.
                $current_references[$old_reference['link'] . $old_reference['name']] = $old_reference;
                $q = serendipity_db_insert('references', $old_reference, 'show');
                $cr = serendipity_db_query($q);
                if ($debug && is_string($cr)) {
                    echo $cr . "<br />\n";
                }
            }
        }

        if ($debug) echo "Got references in final run: <pre>" . print_r($current_references, true) . "</pre><br />\n";
    }

    if (!preg_match_all('@<a[^>]+?href\s*=\s*["\']?([^\'" >]+?)[ \'"][^>]*>(.+?)</a>@i', $text, $matches)) {
        $matches = array(0 => array(), 1 => array());
    } else {
        // remove full matches
        array_shift($matches);
    }

    // Make trackback URL
    $url = serendipity_archiveURL($id, $title, 'baseURL');

    // Add URL references
    $locations = $matches[0];
    $names     = $matches[1];

    $checked_locations = array();
    serendipity_plugin_api::hook_event('backend_trackbacks', $locations);
    for ($i = 0, $j = count($locations); $i < $j; ++$i) {
        if ($debug) echo "Checking {$locations[$i]}...<br />\n";
        if ($locations[$i][0] == '/') {
            $locations[$i] = 'http' . (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) != 'off' ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $locations[$i];
        }

        if (isset($checked_locations[$locations[$i]])) {
            if ($debug) echo "Already checked.<br />\n";
            continue;
        }

        if (preg_match_all('@<img[^>]+?alt=["\']?([^\'">]+?)[\'"][^>]+?>@i', $names[$i], $img_alt)) {
            if (is_array($img_alt) && is_array($img_alt[0])) {
                foreach($img_alt[0] as $alt_idx => $alt_img) {
                    // Replace all <img>s within a link with their respective ALT tag, so that references
                    // can be stored with a title.
                    $names[$i] = str_replace($alt_img, $img_alt[1][$alt_idx], $names[$i]);
                }
            }
        }

        $query = "SELECT COUNT(id) FROM {$serendipity['dbPrefix']}references
                                  WHERE entry_id = ". (int)$id ."
                                    AND link = '" . serendipity_db_escape_string($locations[$i]) . "'
                                    AND (type = '' OR type IS NULL)";

        $row = serendipity_db_query($query, true, 'num');
        if ($debug && is_string($row)) {
            echo $row . "<br />\n";
        }

        if ($row[0] > 0 && isset($saved_references[$locations[$i] . $names[$i]])) {
            if ($debug) echo "Found references for $id, skipping rest<br />\n";
            continue;
        }

        if (!isset($serendipity['noautodiscovery']) || !$serendipity['noautodiscovery']) {
            if (!$dry_run) {
                if ($debug) echo "Enabling autodiscovery.<br />\n";
                serendipity_reference_autodiscover($locations[$i], $url, $author, $title, serendipity_trackback_excerpt($text));
            } elseif ($debug) {
                echo "Skipping autodiscovery<br />\n";
            }
            $checked_locations[$locations[$i]] = true; // Store trackbacked link so that no further trackbacks will be sent to the same link
        } elseif ($debug) {
            echo "Skipping full autodiscovery<br />\n";
        }
    }
    $del = serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}references WHERE entry_id=" . (int)$id . " AND (type = '' OR type IS NULL)");
    if ($debug && is_string($del)) {
        echo $del . "<br />\n";
    }

    if ($debug) echo "Deleted references again.<br />\n";

    if (!is_array($old_references)) {
        $old_references = array();
    }

    $duplicate_check = array();
    for ($i = 0; $i < $j; ++$i) {
        $i_link     = serendipity_db_escape_string(strip_tags($names[$i]));
        $i_location = serendipity_db_escape_string($locations[$i]);
        
        // No link with same description AND same text should be inserted.
        if (isset($duplicate_check[$i_location . $i_link])) {
            continue;
        }

        if (isset($current_references[$locations[$i] . $names[$i]])) {
            $query = "INSERT INTO {$serendipity['dbPrefix']}references (id, entry_id, name, link) VALUES(";
            $query .= (int)$current_references[$locations[$i] . $names[$i]]['id'] . ", " . (int)$id . ", '" . $i_link . "', '" . $i_location . "')";
            $ins = serendipity_db_query($query);
            if ($debug && is_string($ins)) {
                echo $ins . "<br />\n";
            }
            $duplicate_check[$locations[$i] . $names[$i]] = true;
        } else {
            $query = "INSERT INTO {$serendipity['dbPrefix']}references (entry_id, name, link) VALUES(";
            $query .= (int)$id . ", '" . $i_link . "', '" . $i_location . "')";
            $ins = serendipity_db_query($query);
            if ($debug && is_string($ins)) {
                echo $ins . "<br />\n";
            }

            $old_references[] = array(
                'id'       => serendipity_db_insert_id('references', 'id'),
                'name'     => $i_link,
                'link'     => $i_location,
                'entry_id' => (int)$id
            );
            $duplicate_check[$i_location . $i_link] = true;
        }
        
        if ($debug) {
            echo "Current lookup for {$locations[$i]}{$names[$i]} is <pre>" . print_r($current_references[$locations[$i] . $names[$i]], true) . "</pre><br />\n";
            echo $query . "<br />\n";
        }
    }
    
    if ($debug) {
        echo "Old/Saved locations: <pre>" . print_r($old_references, true) . "</pre><br />\n";
    }

    // Add citations
    preg_match_all('@<cite[^>]*>([^<]+)</cite>@i', $text, $matches);

    foreach ($matches[1] as $citation) {
        $query = "INSERT INTO {$serendipity['dbPrefix']}references (entry_id, name) VALUES(";
        $query .= (int)$id . ", '" . serendipity_db_escape_string($citation) . "')";

        $cite = serendipity_db_query($query);
        if ($debug && is_string($cite)) {
            echo $cite . "<br />\n";
        }
    }
}

/**
 * Check if a string is in UTF-8 format.
 *
 * @access public
 * @param   string  The string to check
 * @return  bool
 */
function is_utf8($string) {
   // From http://w3.org/International/questions/qa-forms-utf-8.html
   return preg_match('%^(?:'
         . '[\x09\x0A\x0D\x20-\x7E]'             # ASCII
         . '|[\xC2-\xDF][\x80-\xBF]'             # non-overlong 2-byte
         . '|\xE0[\xA0-\xBF][\x80-\xBF]'         # excluding overlongs
         . '|[\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}'  # straight 3-byte
         . '|\xED[\x80-\x9F][\x80-\xBF]'         # excluding surrogates
         . '|\xF0[\x90-\xBF][\x80-\xBF]{2}'      # planes 1-3
         . '|[\xF1-\xF3][\x80-\xBF]{3}'          # planes 4-15
         . '|\xF4[\x80-\x8F][\x80-\xBF]{2}'      # plane 16
         . ')*$%xs', $string);
}
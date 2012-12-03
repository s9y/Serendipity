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
 * Check a HTTP response if it is a valid XML pingback response
 *
 * @access public
 * @param   string  HTTP Response string
 * @return  mixed   Boolean or error message
 */
function serendipity_pingback_is_success($resp) {
    // This is very rudimentary, but the fault is printed later, so what..
    if (preg_match('@<fault>@', $resp, $matches)) {
        return false;
    }
    return true;
}

/**
 * Perform a HTTP query for autodiscovering a pingback URL
 *
 * @access public
 * @param   string  The URL to try autodiscovery
 * @param   string  The HTML of the source URL
 * @param   string  The URL of our blog article
 * @return
 */
function serendipity_pingback_autodiscover($loc, $body, $url=null) {
global $serendipity;

    // This is the old way, sending pingbacks, for downward compatibility.
    // But this is wrong, as it does link from the main blog URL instead of the article URL
    if (!isset($url)) {
        $url = $serendipity['baseURL'];
    }

    if (!empty($_SERVER['X-PINGBACK'])) {
        $pingback = $_SERVER['X-PINGBACK'];
    } elseif (preg_match('@<link rel="pingback" href="([^"]+)" ?/?>@i', $body, $matches)) {
        $pingback = $matches[1];
    } else {
        echo '<div>&#8226; ' . sprintf(PINGBACK_FAILED, PINGBACK_NOT_FOUND) . '</div>';
        return false;
    }

    // xml-rpc pingback call
    $query = "<?xml version=\"1.0\"?>
<methodCall>
  <methodName>pingback.ping</methodName>
  <params>
    <param>
      <value><string>$url</string></value>
    </param>
    <param>
      <value><string>$loc</string></value>
    </param>
  </params>
</methodCall>";

    echo '<div>&#8226; ' . sprintf(PINGBACK_SENDING, htmlspecialchars($pingback)) . '</div>';
    flush();

    $response =  _serendipity_send($pingback, $query, 'text/html');
    $success  =   serendipity_pingback_is_success($response);
    if ($success == true) {
        echo '<div>&#8226; ' . PINGBACK_SENT .'</div>';
    } else {
        echo '<div>&#8226; ' . sprintf(PINGBACK_FAILED, $response) . '</div>';
    }
    return $success;
}

/**
 * Send a track/pingback ping
 *
 * @access public
 * @param   string  The URL to send a trackback to
 * @param   string  The XML data with the trackback contents
 * @return  string  Reponse
 */
function _serendipity_send($loc, $data, $contenttype = null) {
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

    $req = new HTTP_Request($uri, $options);
    if (isset($contenttype)){
       $req->addHeader('Content-Type', $contenttype);
    }

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
    $is_wp    = false;
    $wp_check = false;

    if (preg_match('@((' . preg_quote($loc, '@') . '|' . preg_quote($loc2, '@') . ')/?trackback/)@i', $res, $wp_loc)) {
        // We found a WP-blog that may not advertise RDF-Tags!
        $is_wp = true;
    }

    if (!preg_match('@trackback:ping(\s*rdf:resource)?\s*=\s*["\'](https?:[^"\']+)["\']@i', $res, $matches)) {
        $matches = array();
        serendipity_plugin_api::hook_event('backend_trackback_check', $matches, $loc);

        // Plugins may say that a URI is valid, in situations where a blog has no valid RDF metadata
        if (empty($matches[2])) {
            if ($is_wp) {
                $wp_check = true;
            } else {
                echo '<div>&#8226; ' . sprintf(TRACKBACK_FAILED, TRACKBACK_NOT_FOUND) . '</div>';
                return false;
            }
        }
    }

    $trackURI = trim($matches[2]);

    if (preg_match('@dc:identifier\s*=\s*["\'](https?:[^\'"]+)["\']@i', $res, $test)) {
        if ($loc != $test[1] && $loc2 != $test[1]) {
            if ($is_wp) {
                $wp_check = true;
            } else {
                echo '<div>&#8226; ' . sprintf(TRACKBACK_FAILED, TRACKBACK_URI_MISMATCH) . '</div>';
                return false;
            }
        }
    }

    // If $wp_check is set it means no RDF metadata was found, and we simply try the /trackback/ url.
    if ($wp_check) {
        $trackURI = $wp_loc[0];
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
        // echo '<div>&#8226; ' . TRACKBACK_NO_DATA . '</div>';
        return;
    }

    echo '<div>&#8226; '. sprintf(TRACKBACK_CHECKING, $loc) .'</div>';
    flush();

    require_once S9Y_PEAR_PATH . 'HTTP/Request.php';
    $options = array('allowRedirects' => true, 'maxRedirects' => 5, 'method' => 'GET');
    serendipity_plugin_api::hook_event('backend_http_request', $options, 'trackback_detect');
    serendipity_request_start();
    $req = new HTTP_Request($parsed_loc, $options);
    $res = $req->sendRequest();

    if (PEAR::isError($res)) {
        echo '<div>&#8226; ' . sprintf(TRACKBACK_COULD_NOT_CONNECT, $u['host'], $u['port']) .'</div>';
        serendipity_request_end();
        return;
    }

    $fContent = $req->getResponseBody();
    serendipity_request_end();

    if (strlen($fContent) != 0) {
        $trackback_result = serendipity_trackback_autodiscover($fContent, $parsed_loc, $url, $author, $title, $text, $loc);
        if ($trackback_result == false) {
            serendipity_pingback_autodiscover($parsed_loc, $fContent, $url);
        }
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

    // Decode HTML Entities
    $excerpt = trackback_body_strip($excerpt);
    
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

    if ($id>0) {
        // first check, if we already have this pingback
        $comments = serendipity_fetchComments($id,1,'co.id',true,'TRACKBACK'," AND co.url='" . serendipity_db_escape_string($url) . "'");
        if (is_array($comments) && sizeof($comments) == 1) {
            log_pingback("We already have that TRACKBACK!");
            return 0; // We already have it!
        }
        // We don't have it, so save the pingback
        serendipity_saveComment($id, $comment, 'TRACKBACK');
        return 1;
    } else {
        return 0;
    }
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
    log_pingback("Reached add_pingback. ID:[$id]");
    
    // XML-RPC Method call without named parameter. This seems to be the default way using XML-RPC
    if(preg_match('@<methodCall>\s*<methodName>\s*pingback.ping\s*</methodName>\s*<params>\s*<param>\s*<value>\s*<string>([^<]*)</string>\s*</value>\s*</param>\s*<param>\s*<value>\s*<string>([^<]*)</string>\s*</value>\s*</param>\s*</params>\s*</methodCall>@is', $postdata, $matches)) {
        log_pingback("Pingback wp structure.");
        $remote             = $matches[1];
        $local              = $matches[2];
        log_pingback("remote=$remote, local=$local");
        $path = parse_url($remote);
        $comment['title']   = 'PingBack';
        $comment['url']     = $remote;
        $comment['comment'] = '';
        $comment['name']    = $path['host'];
        fetchPingbackData($comment);

        // if no ID parameter was given, try to get one from targetURI
        if (!isset($id) || $id==0) {
            log_pingback("ID not found");
            $id = evaluateIdByLocalUrl($local);
            log_pingback("ID set to $id");
        }
        
        if ($id>0) {
            // first check, if we already have this pingback
            $comments = serendipity_fetchComments($id,1,'co.id',true,'PINGBACK'," AND co.url='" . serendipity_db_escape_string($remote) . "'");
            if (is_array($comments) && sizeof($comments) == 1) {
                log_pingback("We already have that PINGBACK!");
                return 0; // We already have it!
            }
            // We don't have it, so save the pingback
            serendipity_saveComment($id, $comment, 'PINGBACK');
            return 1;
        } else {
            return 0;
        }
    }

    // XML-RPC Method call with named parameter. I'm not sure, if XML-RPC supports this, but just to be sure
    $sourceURI = getPingbackParam('sourceURI', $postdata);
    $targetURI = getPingbackParam('targetURI', $postdata);
    if (isset($sourceURI) && isset($targetURI)) {
        log_pingback("Pingback spec structure.");
        $path = parse_url($sourceURI);
        $local              = $targetURI;
        $comment['title']   = 'PingBack';
        $comment['url']     = $sourceURI;
        $comment['comment'] = '';
        $comment['name']    = $path['host'];
        fetchPingbackData($comment);

        // if no ID parameter was given, try to get one from targetURI
        if (!isset($id) || $id==0) {
            log_pingback("ID not found");
            $id = evaluateIdByLocalUrl($local);
            log_pingback("ID set to $id");
        }
        if ($id>0) {
            serendipity_saveComment($id, $comment, 'PINGBACK');
            return 1;
        } else {
            return 0;
        }
    }

    return 0;
}

function evaluateIdByLocalUrl($localUrl) {
    global $serendipity;
    
    // Build an ID searchpattern in configured permaling structure:
    $permalink_article = $serendipity['permalinkStructure'];
    log_pingback("perma: $permalink_article");
    $permalink_article = str_replace('.','\.',$permalink_article);
    $permalink_article = str_replace('+','\+',$permalink_article);
    $permalink_article = str_replace('?','\?',$permalink_article);
    $permalink_article = str_replace('%id%','(\d+)',$permalink_article);
    $permalink_article = str_replace('%title%','[^/]*',$permalink_article);
    $permalink_article_regex = '@' . $permalink_article . '$@'; 
    log_pingback("regex: $permalink_article_regex");

    if (preg_match($permalink_article_regex, $localUrl, $matches)) {
        return (int)$matches[1];
    } else {
        return 0;
    }
}

/**
 * Gets a XML-RPC pingback.ping value by given parameter name
 * @access private
 * @param string Name of the paramameter
 * @param string Buffer containing the pingback XML
 */
function getPingbackParam($paramName, $data) {
    $pattern = "<methodCall>.*?<methodName>\s*pingback.ping\s*</methodName>.*?<params>.*?<param>\s*((<name>\s*$paramName\s*</name>\s*<value>\s*<string>([^<]*)</string>\s*</value>)|(<value>\s*<string>([^<]*)</string>\s*</value>\s*<name>\s*$paramName\s*</name>))\s*</param>.*?</params>.*?</methodCall>";
    if (preg_match('@' . $pattern .'@is',$data, $matches)) {
        return $matches[3];
    } else {
        return null;
    }
}

/**
 * Fetches additional comment data from the page that sent the pingback
 * @access private
 * @param array comment array to be filled
 */
function fetchPingbackData( &$comment) {
    global $serendipity;
    
    // Don't fetch remote page, if not explicitly allowed in serendipity_config_local.php:
    if (empty($serendipity['pingbackFetchPage'])) {
        return;
    }
    
    // If we don't have a comment or a commentors url, stop it.
    if (!isset($comment) || !is_array($comment) || !isset($comment['url'])) {
        return;
    }
    
    // Max amount of characters fetched from the page doing a pingback:
    $fetchPageMaxLength = 200;
    if (isset($serendipity['pingbackFetchPageMaxLength'])){
        $fetchPageMaxLength = $serendipity['pingbackFetchPageMaxLength'];
    }
    require_once S9Y_PEAR_PATH . 'HTTP/Request.php';
    $url = $comment['url'];
    
    if (function_exists('serendipity_request_start')) serendipity_request_start();
    
    // Request the page
    $req = new HTTP_Request($url, array('allowRedirects' => true, 'maxRedirects' => 5, 'timeout' => 20, 'readTimeout' => array(5,0)));

    // code 200: OK, code 30x: REDIRECTION
    $responses = "/(200 OK)|(30[0-9] Found)/"; // |(30[0-9] Moved)
    if ((PEAR::isError($req->sendRequest()) || preg_match($responses, $req->getResponseCode()))) {
        // nothing to do,
    } 
    else {
        $fContent = $req->getResponseBody();

        // Get a title
        if (preg_match('@<head[^>]*>.*?<title[^>]*>(.*?)</title>.*?</head>@is',$fContent,$matches)) {
            $comment['title'] = html_entity_decode(strip_tags($matches[1]), ENT_COMPAT, LANG_CHARSET);
        }
        
        // Try to get content from first <p> tag on:
        if (preg_match('@<p[^>]*>(.*?)</body>@is',$fContent,$matches)) {
            $body = $matches[1];
        }
        if (empty($body) && preg_match('@<body[^>]*>(.*?)</body>@is',$fContent,$matches)){
            $body = $matches[1];
        }
        // Get a part of the article
        if (!empty($body)) {
            $body = trackback_body_strip($body);

            // truncate the text to 200 chars
            $arr = str_split($body, $fetchPageMaxLength);
            $body = $arr[0];

            $comment['comment'] = $body . '[..]';
        }
    }
    
    if (function_exists('serendipity_request_end')) serendipity_request_end();
    
}

/**
 * Strips any unneeded code from trackback / pingback bodies returning pure (UTF8) text.
 */
function trackback_body_strip( $body ){
    // replace non brakeable space with normal space:            
    $body = str_replace('&nbsp;', ' ', $body);

    // strip html entities and tags.
    $body = html_entity_decode(strip_tags($body), ENT_COMPAT, LANG_CHARSET);

    // replace whitespace with single space            
    $body = preg_replace('@\s+@s', ' ', $body);
    
    return $body;
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
    static $saved_urls = array();
    static $debug = false;

    if ($dry_run) {
        // Store the current list of references. We might need to restore them for later user.
        $old_references = serendipity_db_query("SELECT * FROM {$serendipity['dbPrefix']}references WHERE (type = '' OR type IS NULL) AND entry_id = " . (int)$id, false, 'assoc');

        if ($debug && is_string($old_references)) {
            echo '<span class="block_level">' . $old_references . "</span>";
        }

        if (is_array($old_references) && count($old_references) > 0) {
            $current_references = array();
            foreach($old_references AS $idx => $old_reference) {
                // We need the current reference ID to restore it later.
                $saved_references[$old_reference['link'] . $old_reference['name']] = $current_references[$old_reference['link'] . $old_reference['name']] = $old_reference;
                $saved_urls[$old_reference['link']] = true;
            }
        }
        if ($debug) echo "Got references in dry run: <pre>" . print_r($current_references, true) . "</pre>\n";
    } else {
        // A dry-run was called previously and restorable references are found. Restore them now.
        $del = serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}references WHERE (type = '' OR type IS NULL) AND entry_id = " . (int)$id);
        if ($debug && is_string($del)) {
            echo '<span class="block_level">' . $del . "</span>";
        }

        if ($debug) echo "<span class='block_level'>Deleted references.</span>";

        if (is_array($old_references) && count($old_references) > 0) {
            $current_references = array();
            foreach($old_references AS $idx => $old_reference) {
                // We need the current reference ID to restore it later.
                $current_references[$old_reference['link'] . $old_reference['name']] = $old_reference;
                $q = serendipity_db_insert('references', $old_reference, 'show');
                $cr = serendipity_db_query($q);
                if ($debug && is_string($cr)) {
                    echo '<span class="block_level">' . $cr . "</span>";
                }
            }
        }

        if ($debug) echo "Got references in final run: <pre>" . print_r($current_references, true) . "</pre>\n";
    }

    if (!preg_match_all('@<a[^>]+?href\s*=\s*["\']?([^\'" >]+?)[ \'"][^>]*>(.+?)</a>@i', $text, $matches)) {
        $matches = array(0 => array(), 1 => array());
    } else {
        // remove full matches
        array_shift($matches);
    }

    // Make trackback URL
    $url = serendipity_archiveURL($id, $title, 'baseURL');
    // Make sure that the trackback-URL does not point to https
    $url = str_replace('https://', 'http://', $url);

    // Add URL references
    $locations = $matches[0];
    $names     = $matches[1];

    $checked_locations = array();
    serendipity_plugin_api::hook_event('backend_trackbacks', $locations);
    for ($i = 0, $j = count($locations); $i < $j; ++$i) {
        if ($debug) echo "<span class='block_level'>Checking {$locations[$i]}...</span>";
        if ($locations[$i][0] == '/') {
            $locations[$i] = 'http' . (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) != 'off' ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $locations[$i];
        }

        if (isset($checked_locations[$locations[$i]])) {
            if ($debug) echo "<span class='block_level'>Already checked.</span>";
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
            echo '<span class="block_level">' . $row . "</span>";
        }
        
        $names[$i] = strip_tags($names[$i]);
        if (empty($names[$i])) {
            if ($debug) echo "Found reference $locations[$i] w/o name. Adding location as name.";
            $names[$i] = $locations[$i];
        }

        if ($row[0] > 0 && isset($saved_references[$locations[$i] . $names[$i]])) {
            if ($debug) echo "<span class='block_level'>Found references for $id, skipping rest</span>";
            continue;
        }

        if (!isset($serendipity['noautodiscovery']) || !$serendipity['noautodiscovery']) {
            if (!$dry_run) {
                if (!isset($saved_urls[$locations[$i]])){
                    if ($debug) echo "<span class='block_level'>Enabling autodiscovery.</span>";
                    serendipity_reference_autodiscover($locations[$i], $url, $author, $title, serendipity_trackback_excerpt($text));
                }
                elseif ($debug) echo "<span class='block_level'>This reference was already used before in $id and therefore will not be trackbacked again.</span>";
            } elseif ($debug) {
                echo "<span class='block_level'>Dry run: Skipping autodiscovery</span>";
            }
            $checked_locations[$locations[$i]] = true; // Store trackbacked link so that no further trackbacks will be sent to the same link
        } elseif ($debug) {
            echo "<span class='block_level'>Skipping full autodiscovery</span>";
        }
    }
    $del = serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}references WHERE entry_id=" . (int)$id . " AND (type = '' OR type IS NULL)");
    if ($debug && is_string($del)) {
        echo '<span class="block_level">' . $del . "</span>";
    }

    if ($debug) echo "<span class='block_level'>Deleted references again.</span>";

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
                echo '<span class="block_level">' . $ins . "</span>";
            }
            $duplicate_check[$locations[$i] . $names[$i]] = true;
        } else {
            $query = "INSERT INTO {$serendipity['dbPrefix']}references (entry_id, name, link) VALUES(";
            $query .= (int)$id . ", '" . $i_link . "', '" . $i_location . "')";
            $ins = serendipity_db_query($query);
            if ($debug && is_string($ins)) {
                echo '<span class="block_level">' . $ins . "</span>";
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
            echo "Current lookup for {$locations[$i]}{$names[$i]} is <pre>" . print_r($current_references[$locations[$i] . $names[$i]], true) . "</pre>\n";
            echo '<span class="block_level">' . $query . "</span>";
        }
    }

    if ($debug) {
        echo "Old/Saved locations: <pre>" . print_r($old_references, true) . "</pre>\n";
    }

    // Add citations
    preg_match_all('@<cite[^>]*>([^<]+)</cite>@i', $text, $matches);

    foreach ($matches[1] as $citation) {
        $query = "INSERT INTO {$serendipity['dbPrefix']}references (entry_id, name) VALUES(";
        $query .= (int)$id . ", '" . serendipity_db_escape_string($citation) . "')";

        $cite = serendipity_db_query($query);
        if ($debug && is_string($cite)) {
            echo '<span class="block_level">' . $cite . "</span>";
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


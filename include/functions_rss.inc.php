<?php # $entry['feed_id']: functions_entries.inc.php 435 2005-08-25 12:36:39Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (defined('S9Y_FRAMEWORK_RSS')) {
    return;
}
@define('S9Y_FRAMEWORK_RSS', true);

/**
 * Parses entries to display them for RSS/Atom feeds to be passed on to generic Smarty templates
 *
 * This function searches for existing RSS feed template customizations. As long as a template
 * with the same name as the $version variable exists, it will be emitted.
 *
 * @access public
 * @see serendipity_fetchEntries(), rss.php
 * @param   array       A superarray of entries to output
 * @param   string      The version/type of a RSS/Atom feed to display (atom1_0, rss2_0 etc)
 * @param   boolean     If true, this is a comments feed. If false, it's an Entry feed.
 * @param   boolean     Indicates if this feed is a fulltext feed (true) or only excercpt (false)
 * @param   boolean     Indicates if E-Mail addresses should be shown (true) or hidden (false)
 * @return
 */
function serendipity_printEntries_rss(&$entries, $version, $comments = false, $fullFeed = false, $showMail = true) {
    global $serendipity;

    $options = array(
        'version'  => $version,
        'comments' => $comments,
        'fullFeed' => $fullFeed,
        'showMail' => $showMail
    );
    serendipity_plugin_api::hook_event('frontend_entries_rss', $entries, $options);

    if (is_array($entries)) {
        foreach ($entries as $key => $_entry) {
            $entry = &$entries[$key];
            
            if (isset($entry['entrytimestamp'])) {
                $e_ts = $entry['entrytimestamp'];
            } else {
                $e_ts = $entry['timestamp'];
            }

            $entry['feed_id']   = (isset($entry['entryid']) && !empty($entry['entryid']) ? $entry['entryid'] : $entry['id']);

            // set feed guid only, if not already defined externaly
            if (empty($entry['feed_guid']))
                $entry['feed_guid'] = serendipity_rss_getguid($entry, $options['comments']);

            $entry['feed_entryLink'] = serendipity_archiveURL($entry['feed_id'], $entry['title'], 'baseURL', true, array('timestamp' => $e_ts));
            if ($options['comments'] == true) {
                // Display username as part of the title for easier feed-readability
                if ($entry['type'] == 'TRACKBACK' && !empty($entry['ctitle'])) {
                    $entry['author'] .= ' - ' . $entry['ctitle'];
                }
                $entry['title'] = (!empty($entry['author']) ? $entry['author'] : ANONYMOUS) . ': ' . $entry['title'];
                
                // No HTML allowed here:
                $entry['body'] = strip_tags($entry['body']);
            }

            // Embed a link to extended entry, if existing
            if ($options['fullFeed']) {
                $entry['body'] .= ' ' . $entry['extended'];
                $ext = '';
            } elseif ($entry['exflag']) {
                $ext = '<a class="block_level" href="' . $entry['feed_entryLink'] . '#extended">' . sprintf(VIEW_EXTENDED_ENTRY, htmlspecialchars($entry['title'])) . '</a>';
            } else {
                $ext = '';
            }

            $addData = array('from' => 'functions_entries:printEntries_rss','rss_options' => $options);
            serendipity_plugin_api::hook_event('frontend_display', $entry, $addData);

            // Do some relative -> absolute URI replacing magic. Replaces all HREF/SRC (<a>, <img>, ...) references to only the serendipitypath with the full baseURL URI
            // garvin: Could impose some problems. Closely watch this one.
            $entry['body'] = preg_replace('@(href|src)=("|\')(' . preg_quote($serendipity['serendipityHTTPPath']) . ')(.*)("|\')(.*)>@imsU', '\1=\2' . $serendipity['baseURL'] . '\4\2\6>', $entry['body']);
            // jbalcorn: clean up body for XML compliance as best we can.
            $entry['body'] = xhtml_cleanup($entry['body']);

            // extract author information
            if ((isset($entry['no_email']) && $entry['no_email']) || $options['showMail'] === FALSE) {
                $entry['email'] = 'nospam@example.com'; // RSS Feeds need an E-Mail address!
            } elseif (empty($entry['email'])) {
                $query = "select email FROM {$serendipity['dbPrefix']}authors WHERE authorid = '". serendipity_db_escape_string($entry['authorid']) ."'";
                $results = serendipity_db_query($query);
                $entry['email'] = $results[0]['email'];
            }

            if (!is_array($entry['categories'])) {
                $entry['categories'] = array(0 => array(
                    'category_name'      => $entry['category_name'],
                    'feed_category_name' => serendipity_utf8_encode(htmlspecialchars($entry['category_name'])),
                    'categoryURL'        => serendipity_categoryURL($entry, 'baseURL')
                ));
            } else {
                foreach($entry['categories'] AS $cid => $_cat) {
                    $cat = &$entry['categories'][$cid];
                    $cat['categoryURL']        = serendipity_categoryURL($cat, 'baseURL');
                    $cat['feed_category_name'] = serendipity_utf8_encode(htmlspecialchars($cat['category_name']));
                }
            }

            // Prepare variables
            // 1. UTF8 encoding + htmlspecialchars.
            $entry['feed_title']     = serendipity_utf8_encode(htmlspecialchars($entry['title']));
            $entry['feed_blogTitle'] = serendipity_utf8_encode(htmlspecialchars($serendipity['blogTitle']));
            $entry['feed_title']     = serendipity_utf8_encode(htmlspecialchars($entry['title']));
            $entry['feed_author']    = serendipity_utf8_encode(htmlspecialchars($entry['author']));
            $entry['feed_email']     = serendipity_utf8_encode(htmlspecialchars($entry['email']));

            // 2. gmdate
            $entry['feed_timestamp']     = gmdate('Y-m-d\TH:i:s\Z', serendipity_serverOffsetHour($entry['timestamp']));
            $entry['feed_last_modified'] = gmdate('Y-m-d\TH:i:s\Z', serendipity_serverOffsetHour($entry['last_modified']));
            $entry['feed_timestamp_r']   = date('r', $entry['timestamp']);

            // 3. UTF8 encoding
            $entry['feed_body'] = serendipity_utf8_encode($entry['body']);
            $entry['feed_ext']  = serendipity_utf8_encode($ext);

            $entry_hook = 'frontend_display:unknown:per-entry';
            switch($version) {
                case 'opml1.0':
                    $entry_hook = 'frontend_display:opml-1.0:per_entry';
                    break;

                case '0.91':
                    $entry_hook = 'frontend_display:rss-0.91:per_entry';
                    break;

                case '1.0':
                    $entry_hook = 'frontend_display:rss-1.0:per_entry';
                    break;

                case '2.0':
                    $entry_hook = 'frontend_display:rss-2.0:per_entry';
                    break;

                case 'atom0.3':
                    $entry_hook = 'frontend_display:atom-0.3:per_entry';
                    break;

                case 'atom1.0':
                    $entry_hook     = 'frontend_display:atom-1.0:per_entry';
                    break;
            }

            serendipity_plugin_api::hook_event($entry_hook, $entry);
            $entry['per_entry_display_dat'] = $entry['display_dat'];
        }
    }
    
}

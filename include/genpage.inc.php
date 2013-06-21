<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

include_once('serendipity_config.inc.php');


include_once(S9Y_INCLUDE_PATH . 'include/plugin_api.inc.php');


$uri_addData = array(
    'startpage' => false,
    'uriargs'   => implode('/', serendipity_getUriArguments($uri, true)),
    'view'      => $serendipity['view'],
    'viewtype'  => $serendipity['viewtype']
);
if ((empty($uri_addData['uriargs']) || trim($uri_addData['uriargs']) == $serendipity['indexFile']) && empty($serendipity['GET']['subpage'])) {
    $uri_addData['startpage'] = true;
}

$serendipity['plugindata']['smartyvars'] = $uri_addData; // Plugins can change this global variable
serendipity_plugin_api::hook_event('genpage', $uri, $uri_addData);
serendipity_smarty_init($serendipity['plugindata']['smartyvars']);

$leftSidebarElements  = serendipity_plugin_api::count_plugins('left');
$rightSidebarElements = serendipity_plugin_api::count_plugins('right');
$serendipity['smarty']->assignByRef('leftSidebarElements', $leftSidebarElements);
$serendipity['smarty']->assignByRef('rightSidebarElements', $rightSidebarElements);


switch ($serendipity['GET']['action']) {
    // User wants to read the diary
    case 'read':
        if (isset($serendipity['GET']['id'])) {
            $entry = array(serendipity_fetchEntry('id', $serendipity['GET']['id']));
            if (!is_array($entry) || count($entry) < 1 || !is_array($entry[0])) {
                unset($serendipity['GET']['id']);
                $entry = array(array());
                $serendipity['head_title'] = htmlspecialchars($serendipity['blogTitle']); 
                $serendipity['head_subtitle'] = ''; 
                $serendipity['smarty']->assign('head_title', $serendipity['head_title']); 
                $serendipity['smarty']->assign('head_subtitle', $serendipity['head_subtitle']); 
                $serendipity['view'] = '404';
                serendipity_header('HTTP/1.0 404 Not found');                    
                serendipity_header('Status: 404 Not found');                    
            }

            serendipity_printEntries($entry, 1);
        } else {
            serendipity_printEntries(serendipity_fetchEntries($serendipity['range'], true, $serendipity['fetchLimit']));
        }
        break;

    // User searches
    case 'search':
        $r = serendipity_searchEntries($serendipity['GET']['searchTerm']);
        if (strlen($serendipity['GET']['searchTerm']) <= 3) {
            $serendipity['smarty']->assign(
                array(
                    'content_message'       => SEARCH_TOO_SHORT,
                    'searchresult_tooShort' => true
                )
            );
            break;
        }

        if (is_string($r) && $r !== true) {
            $serendipity['smarty']->assign(
                array(
                    'content_message'    => sprintf(SEARCH_ERROR, $serendipity['dbPrefix'], $r),
                    'searchresult_error' => true
                )
            );
            break;
        } elseif ($r === true) {
            $serendipity['smarty']->assign(
                array(
                    'content_message'        => sprintf(NO_ENTRIES_BLAHBLAH, '<span class="searchterm">' . $serendipity['GET']['searchTerm'] . '</span>'),
                    'searchresult_noEntries' => true
                )
            );
            break;
        }

        $serendipity['smarty']->assign(
            array(
                'content_message'      => sprintf(YOUR_SEARCH_RETURNED_BLAHBLAH, '<span class="searchterm">' . $serendipity['GET']['searchTerm'] . '</span>', '<span class="searchresults">' . serendipity_getTotalEntries() . '</span>'),
                'searchresult_results' => true,
                'searchresult_fullentry' => $serendipity['GET']['fullentry']
            )
        );

        serendipity_printEntries($r);
        break;

    // Show the comments
    case 'comments':
        serendipity_printCommentsByAuthor();
        // use 'content_message' for pagination?

        break;

    // Show the archive
    case 'archives':
        $serendipity['head_subtitle'] = ARCHIVES; 
        $serendipity['smarty']->assign('head_subtitle', $serendipity['head_subtitle']); 
        serendipity_printArchives();
        break;


    case 'custom':
        if ($serendipity['smarty_custom_vars']) {
            $serendipity['smarty']->assign($serendipity['smarty_custom_vars']);
        }
        break;

    case 'empty':
        break;

    // Welcome screen or whatever
    default:
        serendipity_printEntries(serendipity_fetchEntries(null, true, $serendipity['fetchLimit']));
        break;
}

serendipity_smarty_fetch('CONTENT', 'content.tpl');
$serendipity['smarty']->assign('ENTRIES', '');


/* vim: set sts=4 ts=4 expandtab : */

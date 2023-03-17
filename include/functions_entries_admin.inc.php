<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

include_once(S9Y_INCLUDE_PATH . "include/functions_trackbacks.inc.php");


/**
 * Prints the form for editing/creating new blog entries
 *
 * This is the core file where your edit form appears. The Heart Of Gold, so to say.
 *
 * @access public
 * @param   string      The URL where the entry form is submitted to
 * @param   array       An array of hidden input fields that should be passed on to the HTML FORM
 * @param   array       The entry superarray with your entry's contents
 * @param   string      Any error messages that might have occurred on the last run
 * @return null
 */
function serendipity_printEntryForm($targetURL, $hiddens = array(), $entry = array(), $errMsg = "") {
    global $serendipity;

    $draftD = '';
    $draftP = '';
    $categoryselector_expanded = false;

    $template_vars = array();

    serendipity_plugin_api::hook_event('backend_entryform', $entry);

    if ( (isset($entry['isdraft']) && serendipity_db_bool($entry['isdraft'])) ||
         (!isset($entry['isdraft']) && ($serendipity['publishDefault'] ?? null) == 'draft') ) {
        $draftD = ' selected="selected"';
        $template_vars['draft_mode'] = 'draft';
    } else {
        $draftP = ' selected="selected"';
        $template_vars['draft_mode'] = 'publish';
    }

    if (isset($entry['moderate_comments']) && (serendipity_db_bool($entry['moderate_comments']))) {
        $template_vars['moderate_comments'] = true;
        $moderate_comments = ' checked="checked"';
    } elseif (!isset($entry['moderate_comments']) && (isset($serendipity['moderateCommentsDefault']) && ($serendipity['moderateCommentsDefault'] == 'true' || $serendipity['moderateCommentsDefault'] === true))) {
        // This is the default on creation of a new entry and depends on the "moderateCommentsDefault" variable of the configuration.
        $moderate_comments = ' checked="checked"';
        $template_vars['moderate_comments'] = true;
    } else {
        $moderate_comments = '';
        $template_vars['moderate_comments'] = false;
    }

    if (isset($entry['allow_comments']) && (serendipity_db_bool($entry['allow_comments']))) {
        $template_vars['allow_comments'] = true;
        $allow_comments = ' checked="checked"';
    } elseif ((!isset($entry['allow_comments']) || $entry['allow_comments'] !== 'false') && (!isset($serendipity['allowCommentsDefault']) || $serendipity['allowCommentsDefault'] == 'true' || $serendipity['allowCommentsDefault'] === true)) {
        // This is the default on creation of a new entry and depends on the "allowCommentsDefault" variable of the configuration.
        $template_vars['allow_comments'] = true;
        $allow_comments = ' checked="checked"';
    } else {
        $template_vars['allow_comments'] = false;
        $allow_comments = '';
    }

    // Fix category list. If the entryForm is displayed after a POST request, the additional category information is lost.
    if (is_array($entry['categories'] ?? null) && !is_array($entry['categories'][0] ?? null)) {
        $categories = (array)$entry['categories'];
        $entry['categories'] = array();
        foreach ($categories as $catid) {
            $entry['categories'][] = serendipity_fetchCategoryInfo($catid);
        }
    }

    $selected = array();
    if (is_array($entry['categories'] ?? null)) {
        if (count($entry['categories']) > 1) {
            $categoryselector_expanded = true;
        }

        foreach ($entry['categories'] as $cat) {
            $selected[] = $cat['categoryid'];
        }
    } elseif (($serendipity['categoryDefault'] ?? 0)  > 0) {
        $selected[] = $serendipity['categoryDefault'];
    }

    if (count($selected) > 1 ||
          (isset($serendipity['POST']['categories']) && is_array($serendipity['POST']['categories']) && sizeof($serendipity['POST']['categories']) > 1)) {
        $categoryselector_expanded = true;
    }

    if (is_array($cats = serendipity_fetchCategories())) {
        $cats = serendipity_walkRecursive($cats, 'categoryid', 'parentid', VIEWMODE_THREADED);
        foreach ($cats as $cat) {

            if (in_array($cat['categoryid'], $selected)) {
                $cat['is_selected'] = true;
            }

            $cat['depth_pad'] = str_repeat('&nbsp;', $cat['depth']);

            $template_vars['category_options'][] = $cat;
        }
    } else {
        $template_vars['category_options'] = [];
    }

    if (! isset($entry['title']) || empty($entry['title'])) {
        if (!empty($serendipity['GET']['title'])) {
            $entry['title'] = mb_convert_encoding(urldecode($serendipity['GET']['title']), 'ISO-8859-1', 'UTF-8');
        } else {
            if (!empty($serendipity['POST']['title'])) {
                $entry['title'] = mb_convert_encoding(urldecode($serendipity['POST']['title']), 'ISO-8859-1', 'UTF-8');
            } else {
                $entry['title'] = null;
            }
        }
    }


    if (!empty($serendipity['GET']['body'])) {
        $entry['body'] = mb_convert_encoding(urldecode($serendipity['GET']['body']), 'ISO-8859-1', 'UTF-8');
    }

    if (!empty($serendipity['GET']['url'])) {
        $entry['body'] .= "\n" . '<a class="block_level" href="' . serendipity_specialchars(mb_convert_encoding(urldecode($serendipity['GET']['url']), 'ISO-8859-1', 'UTF-8')) . '">' . $entry['title'] . '</a>';
    }

    $template_vars['formToken'] = serendipity_setFormToken();
    $template_vars['urlToken']  = serendipity_setFormToken('url');

    if (isset($serendipity['allowDateManipulation']) && $serendipity['allowDateManipulation']) {
        $template_vars['allowDateManipulation'] = true;
    }

    if ((!empty($entry['extended']) || !empty($serendipity['COOKIE']['toggle_extended'])) && !$serendipity['wysiwyg']) {
        $template_vars['show_wysiwyg'] = true;
    }

    $template_vars['wysiwyg_advanced'] = true;

    $template_vars['timestamp']               =  serendipity_serverOffsetHour(isset($entry['timestamp']) && $entry['timestamp'] > 0 ? $entry['timestamp'] : time());
    $template_vars['reset_timestamp']         =  serendipity_serverOffsetHour(time());
    $template_vars['hiddens']                 =  $hiddens;
    $template_vars['errMsg']                  =  $errMsg;
    $template_vars['entry']                   =& $entry;
    $template_vars['targetURL']               =  $targetURL;
    $template_vars['cat_count']               =  is_array($cats) ? (count($cats)+1) : 1;
    $template_vars['wysiwyg']                 =  $serendipity['wysiwyg'] ?? null;
    $template_vars['serendipityRightPublish'] =  $_SESSION['serendipityRightPublish'];
    $template_vars['wysiwyg_blocks']          =  array(
                                                    'body'      => 'serendipity[body]',
                                                    'extended'  => 'serendipity[extended]'
                                                  );

    $template_vars['entry_template'] = serendipity_getTemplateFile('admin/entries.tpl', 'serendipityPath');

    if (!is_object($serendipity['smarty'] ?? null)) {
        serendipity_smarty_init();
    }
    $serendipity['smarty']->registerPlugin('modifier', 'emit_htmlarea_code', 'serendipity_emit_htmlarea_code');
    $serendipity['smarty']->assign('admin_view', 'entryform');
    serendipity_plugin_api::hook_event('backend_entryform_smarty', $template_vars);
    $serendipity['smarty']->assignByRef('entry_vars', $template_vars);
    return serendipity_smarty_show('admin/entries.tpl');
}

function serendipity_emit_htmlarea_code($item, $jsname, $spawnMulti = false) {
    # init == true when editor was already initialized
    static $init = false;
    global $serendipity;

    if ($init && $spawnMulti) {
        return;
    }

    if (isset($serendipity['wysiwyg']) && $serendipity['wysiwyg']) {

        $eventData = array(
            'init'    => &$init,
            'item'    => &$item,
            'jsname'  => &$jsname,
            'skip'    => false,
            'buttons' => array(),
        );

        serendipity_plugin_api::hook_event('backend_wysiwyg', $eventData);

        if ($eventData['skip']) {
            return;
        }

        $data = array('init' => $init, 'spawnMulti' => $spawnMulti, 'jsname' => $jsname, 'item' => $item, 'buttons' => $eventData['buttons']);
        echo serendipity_smarty_show('admin/wysiwyg_init.tpl', $data);
    }
    $init = true;

}

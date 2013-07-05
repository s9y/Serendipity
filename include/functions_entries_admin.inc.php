<?php # $Id: functions_entries.inc.php 435 2005-08-25 12:36:39Z garvinhicking $
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
 * @param   string      Any error messages that might have occured on the last run
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
         (!isset($entry['isdraft']) && $serendipity['publishDefault'] == 'draft') ) {
        $draftD = ' selected="selected"';
        $template_vars['draft_mode'] = 'draft';
    } else {
        $draftP = ' selected="selected"';
        $template_vars['draft_mode'] = 'publish';
    }

    if (isset($entry['moderate_comments']) && (serendipity_db_bool($entry['moderate_comments']))) {
        $template_vars['moderate_comments'] = true;
        $moderate_comments = ' checked="checked"';
    } elseif (!isset($entry['moderate_comments']) && ($serendipity['moderateCommentsDefault'] == 'true' || $serendipity['moderateCommentsDefault'] === true)) {
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
    if (is_array($entry['categories']) && !is_array($entry['categories'][0])) {
        $categories = (array)$entry['categories'];
        $entry['categories'] = array();
        foreach ($categories as $catid) {
            $entry['categories'][] = serendipity_fetchCategoryInfo($catid);
        }
    }

    $selected = array();
    if (is_array($entry['categories'])) {
        if (count($entry['categories']) > 1) {
            $categoryselector_expanded = true;
        }

        foreach ($entry['categories'] as $cat) {
            $selected[] = $cat['categoryid'];
        }
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
    }

    if (!empty($serendipity['GET']['title'])) {
        $entry['title'] = utf8_decode(urldecode($serendipity['GET']['title']));
    }

    if (!empty($serendipity['GET']['body'])) {
        $entry['body'] = utf8_decode(urldecode($serendipity['GET']['body']));
    }

    if (!empty($serendipity['GET']['url'])) {
        $entry['body'] .= "\n" . '<a class="block_level" href="' . htmlspecialchars(utf8_decode(urldecode($serendipity['GET']['url']))) . '">' . $entry['title'] . '</a>';
    }

    $template_vars['formToken'] = serendipity_setFormToken();

    if (isset($serendipity['allowDateManipulation']) && $serendipity['allowDateManipulation']) {
        $template_vars['allowDateManipulation'] = true;
    }

    if ((!empty($entry['extended']) || !empty($serendipity['COOKIE']['toggle_extended'])) && !$serendipity['wysiwyg']) {
        $template_vars['show_wysiwyg'] = true;
    }

    $template_vars['wysiwyg_advanced'] = true;

    $template_vars['timestamp']                 = serendipity_serverOffsetHour(isset($entry['timestamp']) && $entry['timestamp'] > 0 ? $entry['timestamp'] : time());
    $template_vars['reset_timestamp']           = serendipity_serverOffsetHour(time());
    $template_vars['hiddens']                    = $hiddens;
    $template_vars['errMsg']                    = $errMsg;
    $template_vars['entry']                     =& $entry;
    $template_vars['targetURL']                 = $targetURL;
    $template_vars['cat_count']                 = count($cats)+1;
    $template_vars['wysiwyg']                   = $serendipity['wysiwyg'];
    $template_vars['serendipityRightPublish']   = $_SESSION['serendipityRightPublish'];
    $template_vars['wysiwyg_blocks']            = array(
                                                    'body'      => 'serendipity[body]',
                                                    'extended'  => 'serendipity[extended]'
                                                  );
    
    $template_vars['entry_template'] = serendipity_getTemplateFile('admin/entries.tpl', 'serendipityPath');

    serendipity_smarty_init();
    $serendipity['smarty']->registerPlugin('modifier', 'emit_htmlarea_code', 'serendipity_emit_htmlarea_code');
    $serendipity['smarty']->assign('admin_view', 'entryform');
    serendipity_plugin_api::hook_event('backend_entryform_smarty', $template_vars);
    $serendipity['smarty']->assignByRef('entry_vars', $template_vars);
    return serendipity_smarty_show($template_vars['entry_template']);
}

function serendipity_emit_htmlarea_code($item, $jsname, $spawnMulti = false) {
    static $init = false;
    global $serendipity;

    if ($init && $spawnMulti) {
        return;
    }

    if (isset($serendipity['wysiwyg']) && $serendipity['wysiwyg']) {

        $eventData = array(
            'init'   => &$init,
            'item'   => &$item,
            'jsname' => &$jsname,
            'skip'   => false
        );
        serendipity_plugin_api::hook_event('backend_wysiwyg', $eventData);

        if ($eventData['skip']) {
            return;
        }

        if (is_array($eventData['buttons'])) {
            foreach($eventData['buttons'] as $button) {
                // Sort buttons into toolbar lists for later additions
                switch($button['toolbar']) {
                case S9Y_WYSIWYG_TOOLBAR_FORMATTING:
                    $toolbar[S9Y_WYSIWYG_TOOLBAR_FORMATTING][] = $button;
                    break;
                case S9Y_WYSIWYG_TOOLBAR_MEDIA:
                case S9Y_WYSIWYG_TOOLBAR_WEB:
                    $toolbar[S9Y_WYSIWYG_TOOLBAR_WEB][] = $button;
                    break;
                default:
                    $toolbar['other'][] = $button;
                    break;
                }
            }
        }
        
        $data = array();
        $data['init'] = $init;
        $data['spawnMulti'] = $spawnMulti;
        $data['jsname'] = $jsname;
        $data['eventData'] = $eventData;
        $data['item'] = $item;
        $data['toolbar'] = $toolbar;
        echo serendipity_smarty_show('admin/wysiwyg_init.tpl', $data);
    }
    $init = true;

}

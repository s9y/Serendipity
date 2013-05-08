<?php # $Id: functions_entries.inc.php 435 2005-08-25 12:36:39Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (defined('S9Y_FRAMEWORK_ENTRIES_ADMIN')) {
    return;
}
@define('S9Y_FRAMEWORK_ENTRIES_ADMIN', true);

if (!defined('S9Y_FRAMEWORK_TRACKBACKS')) {
    include(S9Y_INCLUDE_PATH . "include/functions_trackbacks.inc.php");
}

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

    $serendipity['EditorBrowsers'] = '@(IE|Mozilla|Opera)@i';

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

    $n = "\n";
    $cat_list = '<select id="categoryselector" name="serendipity[categories][]" style="vertical-align: middle;" multiple="multiple">' . $n;
    $cat_list .= '    <option value="0">[' . NO_CATEGORY . ']</option>' . $n;
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
            $cat_list .= '<option value="'. $cat['categoryid'] .'"'. ($cat['is_selected'] ? ' selected="selected"' : '') .'>'. $cat['depth_pad'] . $cat['category_name'] .'</option>' . "\n";
        }
    }

    $cat_list .= '</select>' . $n;

    if (!empty($serendipity['GET']['title'])) {
        $entry['title'] = utf8_decode(urldecode($serendipity['GET']['title']));
    }

    if (!empty($serendipity['GET']['body'])) {
        $entry['body'] = utf8_decode(urldecode($serendipity['GET']['body']));
    }

    if (!empty($serendipity['GET']['url'])) {
        $entry['body'] .= "\n" . '<br /><a href="' . htmlspecialchars(utf8_decode(urldecode($serendipity['GET']['url']))) . '">' . $entry['title'] . '</a>';
    }

    $hidden = '';
    foreach($hiddens as $key => $value) {
        $hidden .= '        <input type="hidden" name="' . $key . '" value="' . $value . '" />' . $n;
    }
    $hidden .= '        <input type="hidden" id="entryid" name="serendipity[id]" value="' . (isset($entry['id']) ? $entry['id'] : '') . '" />' . $n;
    $hidden .= '        <input type="hidden" name="serendipity[timestamp]" value="' . (isset($entry['timestamp']) ? serendipity_serverOffsetHour($entry['timestamp']) : serendipity_serverOffsetHour(time())) . '" />' . $n;
    $hidden .= '        <input type="hidden" name="serendipity[preview]" value="false" />';
    $hidden .= '        ' . serendipity_setFormToken();

    if (is_object($serendipity['smarty']) || (!$_SESSION['no_smarty'] && serendipity_smarty_init())) {
        $use_smarty = true;
    } else {
        $use_smarty = false;
    }

    if (is_object($serendipity['smarty'])) {
        if (isset($serendipity['allowDateManipulation']) && $serendipity['allowDateManipulation']) {
            $template_vars['allowDateManipulation'] = true;
        }

        if ((!empty($entry['extended']) || !empty($serendipity['COOKIE']['toggle_extended'])) && !$serendipity['wysiwyg']) {
            $template_vars['show_wysiwyg'] = true;
        }

        if (preg_match($serendipity['EditorBrowsers'], $_SERVER['HTTP_USER_AGENT']) ) {
            $template_vars['wysiwyg_advanced'] = true;
        }

        $template_vars['timestamp']                 = serendipity_serverOffsetHour(isset($entry['timestamp']) && $entry['timestamp'] > 0 ? $entry['timestamp'] : time());
        $template_vars['reset_timestamp']           = serendipity_serverOffsetHour(time());
        $template_vars['hidden']                    = $hidden;
        $template_vars['errMsg']                    = $errMsg;
        $template_vars['entry']                     =& $entry;
        $template_vars['targetURL']                 = $targetURL;
        $template_vars['cat_count']                 = count($cats)+1;
        $template_vars['cat_state']                 = $categoryselector_expanded ? 'on' : 'off';
        $template_vars['wysiwyg']                   = $serendipity['wysiwyg'];
        $template_vars['serendipityRightPublish']   = $_SESSION['serendipityRightPublish'];
        $template_vars['wysiwyg_blocks']            = array(
                                                        'body'      => 'serendipity[body]',
                                                        'extended'  => 'serendipity[extended]'
                                                      );
        
        $template_vars['entry_template'] = serendipity_getTemplateFile('admin/entries.tpl', 'serendipityPath');

        $serendipity['smarty']->registerPlugin('modifier', 'emit_htmlarea_code', 'serendipity_emit_htmlarea_code');
        $serendipity['smarty']->assign('admin_view', 'entryform');
        serendipity_plugin_api::hook_event('backend_entryform_smarty', $template_vars);
        $serendipity['smarty']->assignByRef('entry_vars', $template_vars);
        $serendipity['smarty']->display($template_vars['entry_template']);
        return true;
    }

    /* HTML CODE BELOW IS FOR FALLBACK PORTABILITY ONLY - MODIFY CODE IN TEMPLATE ADMIN/ENTRIES.TPL INSTEAD! */
    if (!empty($errMsg)) {
?>
        <div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="<?php echo serendipity_getTemplateFile('admin/img/admin_msg_error.png'); ?>" alt="" /><?php echo $errMsg; ?></div>
<?php } ?>
        <form <?php echo $entry['entry_form']; ?> action="<?php echo $targetURL; ?>" method="post" id="serendipityEntry" style="margin-top: 0px; margin-bottom: 0px; padding-top: 0px; padding-bottom: 0px">
        <?php echo $hidden; ?>

        <table class="serendipityEntryEdit" border="0" width="100%">
            <tr>
                <td>
                   <b><?php echo TITLE; ?>:</b>
                </td>
                <td colspan="2">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <td><input class="input_textbox" type="text" id="entryTitle" name="serendipity[title]" value="<?php echo isset($entry['title']) ? htmlspecialchars($entry['title']) : ''; ?>" size="60" /></td>
                            <td align="right">
                                <select name="serendipity[isdraft]">
                                    <?php if ($_SESSION['serendipityRightPublish']) { ?><option  value="false" <?php echo $draftP; ?>><?php echo PUBLISH; ?></option><?php } ?>
                                    <option  value="true"  <?php echo $draftD; ?>><?php echo DRAFT; ?></option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
<?php
        if (isset($serendipity['allowDateManipulation']) && $serendipity['allowDateManipulation']) {
?>
                <td>
                    <b><?php echo DATE; ?>:</b>
                </td>
                <td>
                    <input type="hidden" name="serendipity[chk_timestamp]" value="<?php echo serendipity_serverOffsetHour(isset($entry['timestamp']) && $entry['timestamp'] > 0 ? $entry['timestamp'] : time()); ?>" />
                    <input class="input_textbox" type="text" name="serendipity[new_timestamp]" id="serendipityNewTimestamp" value="<?php echo date(DATE_FORMAT_2, serendipity_serverOffsetHour(isset($entry['timestamp']) && $entry['timestamp'] > 0 ? $entry['timestamp'] : time())); ?>" />
                    <a href="#" onclick="document.getElementById('serendipityNewTimestamp').value = '<?php echo date(DATE_FORMAT_2, serendipity_serverOffsetHour(time())) ?>'; return false;" title="<?php echo RESET_DATE_DESC ?>"><img src="<?php echo serendipity_getTemplateFile('admin/img/clock.png') ?>" border="0"  style="vertical-align: text-top;" alt="<?php echo RESET_DATE ?>" /></a>
                </td>
                <td align="right">
<?php
        } else {
?>
                <td align="right" colspan="3">
<?php
        }
?>
                    <a style="border:0; text-decoration: none" href="#" onclick="showItem('categoryselector'); return false" title="<?php echo TOGGLE_OPTION; ?>"><img src="<?php echo serendipity_getTemplateFile('img/plus.png') ?>" id="option_categoryselector" style="border: 20px" alt="" border="0" /></a> <b><?php echo CATEGORY; ?>:</b> <?php echo $cat_list ; ?>
                    <script type="text/javascript" language="JavaScript">

                    function toggle_extended(setCookie) {
                        var textarea = document.getElementById('serendipity[extended]');
                        var button   = document.getElementById('option_extended');
                        var tools    = document.getElementById('tools_extended');
                        if ( textarea.style.display == 'none' ) {
                            textarea.style.display = '';
                            tools.style.display = '';
                            button.src = '<?php echo serendipity_getTemplateFile('img/minus.png') ?>';
                            if (setCookie == true) {
                                document.cookie = 'serendipity[toggle_extended]=true;';
                            }
                        } else {
                            textarea.style.display = 'none';
                            tools.style.display = 'none';
                            button.src = '<?php echo serendipity_getTemplateFile('img/plus.png') ?>';
                            if (setCookie == true) {
                                document.cookie = 'serendipity[toggle_extended]=;';
                            }
                        }
                    }

                    var selector_toggle  = new Array();
                    var selector_store   = new Array();
                    var selector_restore = new Array();

                    function showItem(id) {
                        var selected = 0;
                        if (typeof(id) == 'undefined' || typeof(id) == 'object') {
                            id = 'categoryselector';
                        }

                        if (document.getElementById) {
                            el = document.getElementById(id);
                            if (selector_toggle[id] && selector_toggle[id] == 'off') {
                                selector_restore[id] = new Array();
                                selector_toggle[id]  = 'on';

                                /* Hack to make sure that when the single dropdown is shown, don't have multiple selections */
                                last = 0;

                                for (i=0; i < el.options.length; i++) {
                                    if (el.options[i].selected == true) {
                                        selected++;
                                        last = i;
                                        selector_restore[id][last] = 'on';
                                    }

                                    if (selected > 1) {
                                        /* If there is more than one selected, we reset all those to false
                                           This is because otherwise the label will say 'No Category', but the categories will still be selected */
                                        for (j=0; j < el.options.length; j++) {
                                            /* Save selection in array to later restore them */
                                            if (el.options[j].selected == true) {
                                                el.options[j].selected = false;
                                                selector_restore[id][j] = 'on';
                                                last = j;
                                            } else {
                                                selector_restore[id][j] = false;
                                            }
                                        }
                                        break;
                                    }
                                }

                                el.selectedIndex = null;
                                if (last > 0) {
                                    el.selectedIndex = last;
                                }

                                el.size = 1;

                                /* Show a normal dropdown */
                                if (el.multiple) {
                                    el.multiple = false;
                                }

                                document.getElementById('option_' + id).src = '<?php echo serendipity_getTemplateFile('img/plus.png') ?>';
                            } else {
                                selector_store[id] = el.size;
                                if (selector_store[id] == 0) {
                                    selector_store[id] = 5;
                                }

                                last = 0;
                                if (el.selectedIndex > 0) {
                                    if (!selector_restore[id]) {
                                        selector_restore[id] = new Array();
                                    }

                                    for (j=0; j < el.options.length; j++) {
                                        /* Save selection in array to later restore them */
                                        if (el.options[j].selected == true) {
                                            selector_restore[id][j] = 'on';
                                            last = j;
                                        }
                                    }
                                }
                                el.selectedIndex = -1;
                                el.size = <?php echo count($cats)+1; ?>;
                                selector_toggle[id] = 'off';

                                /* Show multiple items */
                                el.multiple = true;

                                /* Restore previously selected items? */
                                last = 0;
                                for (i = 0; i < el.options.length; i++) {
                                    if (selector_restore && selector_restore[id] && selector_restore[id][i] && selector_restore[id][i] == 'on') {
                                        val = el.options[i].value;
                                        if (el.options[i].selected != true) {
                                            el.options[i].selected = true;
                                            last = i;
                                            // [TODO] IE Bug: Don't ask me why, but this restoring only works in Internet Explorer if you put this:
                                            // alert('it doesnt matter what, just the alert is important');
                                        }
                                    }
                                }

                                document.getElementById('option_' + id).src = '<?php echo serendipity_getTemplateFile('img/minus.png') ?>';
                            }
                        }
                    }

                    function checkSave() {
<?php
    $void = null;
    serendipity_plugin_api::hook_event('backend_entry_checkSave', $void);
?>
                        return true;
                    }

                    selector_toggle['categoryselector'] = '<?php echo ($categoryselector_expanded ? 'on' : 'off'); ?>';
                    addLoadEvent(showItem);
                    </script>
                    </td>
            </tr>
            <tr>
<?php
    if (!$serendipity['wysiwyg']) {
?>
                <td colspan="2"><b><?php echo ENTRY_BODY; ?></b></td>
                <td align="right">
                    <div id="tools_entry" style="display: none">
<?php
        /* Since the user has WYSIWYG editor disabled, we want to check if we should use the "better" non-WYSIWYG editor */
        if (!$serendipity['wysiwyg'] && preg_match($serendipity['EditorBrowsers'], $_SERVER['HTTP_USER_AGENT']) ) {
            if ($serendipity['nl2br']['iso2br']) { ?>
                        <input type="button" class="serendipityPrettyButton input_button" name="insX" value="NoBR" accesskey="x" style="font-style: italic" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[body]'],'<nl>','</nl>')" />
<?php
            }
?>
                        <input type="button" class="serendipityPrettyButton input_button" name="insI" value="I" accesskey="i" style="font-style: italic" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[body]'],'<em>','</em>')" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insB" value="B" accesskey="b" style="font-weight: bold" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[body]'],'<strong>','</strong>')" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insU" value="U" accesskey="u" style="text-decoration: underline;" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[body]'],'<u>','</u>')" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insQ" value="<?php echo QUOTE ?>" accesskey="q" style="font-style: italic" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[body]'],'<blockquote>','</blockquote>')" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insJ" value="img" accesskey="j" onclick="wrapInsImage(document.forms['serendipityEntry']['serendipity[body]'])" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insImage" value="<?php echo MEDIA; ?>" style="" onclick="window.open('serendipity_admin_image_selector.php?serendipity[textarea]=body', 'ImageSel', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1');" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insURL" value="URL" accesskey="l" onclick="wrapSelectionWithLink(document.forms['serendipityEntry']['serendipity[body]'])" />
<?php
        /* Do the "old" non-WYSIWYG editor */
        } elseif (!$serendipity['wysiwyg']) {
            if ($serendipity['nl2br']['iso2br']) { ?>
                        <input type="button" class="serendipityPrettyButton input_button" value=" NoBR " onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[body]'], 'x')" />
<?php
            }
?>
                        <input type="button" class="serendipityPrettyButton input_button" value=" B " onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[body]'], 'b')" />
                        <input type="button" class="serendipityPrettyButton input_button" value=" U " onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[body]'], 'u')" />
                        <input type="button" class="serendipityPrettyButton input_button" value=" I " onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[body]'], 'i')" />
                        <input type="button" class="serendipityPrettyButton input_button" value="<img>" onclick="serendipity_insImage(document.forms['serendipityEntry']['serendipity[body]'])" />
                        <input type="button" class="serendipityPrettyButton input_button" value="<?php echo MEDIA; ?>" onclick="window.open('serendipity_admin_image_selector.php?serendipity[textarea]=body', 'ImageSel', 'width=800,height=600,toolbar=no');" />
                        <input type="button" class="serendipityPrettyButton input_button" value="Link" onclick="serendipity_insLink(document.forms['serendipityEntry']['serendipity[body]'])" />
<?php   }

        serendipity_plugin_api::hook_event('backend_entry_toolbar_body', $entry);
?>
                    </div>
                    <script type="text/javascript" language="JavaScript">
                        var toolbarentry = document.getElementById('tools_entry');
                        toolbarentry.style.display = '';
                    </script>
<?php
    } else {
?>
            <td colspan="2"><b><?php echo ENTRY_BODY; ?></b></td>
            <td><?php serendipity_plugin_api::hook_event('backend_entry_toolbar_body', $entry); ?>

<?php } ?>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <textarea style="width: 100%" name="serendipity[body]" id="serendipity[body]" cols="80" rows="20"><?php echo isset($entry['body']) ? htmlspecialchars($entry['body']) : ''; ?></textarea>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="left" width="70%">
                                <input class="input_checkbox" id="checkbox_allow_comments" type="checkbox" name="serendipity[allow_comments]" value="true" <?php echo $allow_comments; ?> /><label for="checkbox_allow_comments"><?php echo COMMENTS_ENABLE; ?></label><br />
                                <input class="input_checkbox" id="checkbox_moderate_comments" type="checkbox" name="serendipity[moderate_comments]" value="true" <?php echo $moderate_comments; ?> /><label for="checkbox_moderate_comments"><?php echo COMMENTS_MODERATE; ?></label>
                            </td>
                            <td align="right" rowspan="2" valign="middle" width="30%">
                                <input accesskey="p" type="submit" value="- <?php echo PREVIEW; ?> -" class="serendipityPrettyButton input_button"  style="width: 150px" onclick="document.forms['serendipityEntry'].elements['serendipity[preview]'].value='true';" /><br />
                                <input accesskey="s" type="submit" onclick="return checkSave();" value="- <?php echo SAVE; ?> -" class="serendipityPrettyButton input_button" style="width: 150px" />
                            </td>
                        </tr>
                    </table>
                    <br />
                </td>
            </tr>

            <tr>
                <td colspan="2">
<?php if (!$serendipity['wysiwyg']) { ?>
                    <a style="border:0; text-decoration: none" href="#" onclick="toggle_extended(true); return false;" title="<?php echo TOGGLE_OPTION; ?>"><img src="<?php echo serendipity_getTemplateFile('img/plus.png') ?>" id="option_extended" alt="+/-" border="0" /></a>
<?php } ?> <b><?php echo EXTENDED_BODY; ?></b></td>
                <td align="right">
                <?php
if (!$serendipity['wysiwyg']) {
?>
                    <div id="tools_extended" style="display: none">
<?php
        /* Since the user has WYSIWYG editor disabled, we want to check if we should use the "better" non-WYSIWYG editor */
        if (preg_match($serendipity['EditorBrowsers'], $_SERVER['HTTP_USER_AGENT']) ) {
?>
                        <input type="button" class="serendipityPrettyButton input_button" name="insI" value="I" accesskey="i" style="font-style: italic" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<em>','</em>')" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insB" value="B" accesskey="b" style="font-weight: bold" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<strong>','</strong>')" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insU" value="U" accesskey="u" style="text-decoration: underline;" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<u>','</u>')" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insQ" value="<?php echo QUOTE ?>" accesskey="q" style="font-style: italic" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<blockquote>','</blockquote>')" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insJ" value="img" accesskey="j" onclick="wrapInsImage(document.forms['serendipityEntry']['serendipity[extended]'])" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insImage" value="<?php echo MEDIA; ?>" onclick="window.open('serendipity_admin_image_selector.php?serendipity[textarea]=extended', 'ImageSel', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1');" />
                        <input type="button" class="serendipityPrettyButton input_button" name="insURL" value="URL" accesskey="l" onclick="wrapSelectionWithLink(document.forms['serendipityEntry']['serendipity[extended]'])" />
<?php
        /* Do the "old" non-WYSIWYG editor */
        } else { ?>
                        <input type="button" class="serendipityPrettyButton input_button" value=" B " onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[extended]'], 'b')">
                        <input type="button" class="serendipityPrettyButton input_button" value=" U " onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[extended]'], 'u')">
                        <input type="button" class="serendipityPrettyButton input_button" value=" I " onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[extended]'], 'i')">
                        <input type="button" class="serendipityPrettyButton input_button" value="<img>" onclick="serendipity_insImage(document.forms['serendipityEntry']['serendipity[extended]'])">
                        <input type="button" class="serendipityPrettyButton input_button" value="<?php echo MEDIA; ?>" onclick="window.open('serendipity_admin_image_selector.php?serendipity[textarea]=extended', 'ImageSel', 'width=800,height=600,toolbar=no');">
                        <input type="button" class="serendipityPrettyButton input_button" value="Link" onclick="serendipity_insLink(document.forms['serendipityEntry']['serendipity[extended]'])">
<?php
        }

        serendipity_plugin_api::hook_event('backend_entry_toolbar_extended', $entry);
?>
                    </div>
<?php } else {
        serendipity_plugin_api::hook_event('backend_entry_toolbar_extended', $entry);
} ?>
               </td>
            </tr>

            <tr>
                <td colspan="3">
                    <textarea style="width: 100%;" name="serendipity[extended]" id="serendipity[extended]" cols="80" rows="20"><?php echo isset($entry['extended']) ? htmlspecialchars($entry['extended']) : ''; ?></textarea>
<?php if (!$serendipity['wysiwyg']) { ?>
                    <script type="text/javascript" language="JavaScript">
                       toggle_extended();
                    </script>
<?php } ?>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <br />
                    <fieldset>
                        <legend><b><?php echo ADVANCED_OPTIONS; ?></b></legend>
<?php
    serendipity_plugin_api::hook_event('backend_display', $entry);
?>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
<?php
    if ((!empty($entry['extended']) || !empty($serendipity['COOKIE']['toggle_extended'])) && !$serendipity['wysiwyg']) {
?>
    <script type="text/javascript" language="JavaScript">
        toggle_extended();
    </script>
<?php } ?>
<?php
    if ($serendipity['wysiwyg']) {
        $fields = array(
            'body'      => 'serendipity[body]',
            'extended'  => 'serendipity[extended]'
        );

        foreach($fields AS $f_jsname => $f_item) {
            serendipity_emit_htmlarea_code($f_item, $f_jsname);
        }
        serendipity_plugin_api::hook_event('backend_wysiwyg_finish', $fields);
    }

    echo '    <script type="text/javascript" language="JavaScript" src="serendipity_define.js.php"></script>';
    echo '    <script type="text/javascript" language="JavaScript" src="serendipity_editor.js"></script>';
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

        if (file_exists($serendipity['serendipityPath'] . 'htmlarea/XinhaCore.js')) {
            $xinha = true;
        } else {
            $xinha = false;
        }

        $xinha_custom = serendipity_getTemplateFile('my_custom.js', 'serendipityHTTPPath');
        if (empty($xinha_custom)) {
            $xinha_custom = 'htmlarea/my_custom.js';
        }
        
        if (!$init) {
?>
    <script type="text/javascript">
        _editor_url = "<?php echo $serendipity['serendipityHTTPPath'] . 'htmlarea/'; ?>";
        _editor_lang = "<?php echo ($xinha ? $serendipity['lang'] : WYSIWYG_LANG); ?>";
        _editor_skin = "silva";
        var editorref = '';
    </script>
    <?php if ($xinha) { ?>
    <script type="text/javascript" src="htmlarea/XinhaCore.js"></script>
    <!-- This file can contain user customizations -->
    <script type="text/javascript" src="<?php echo $xinha_custom; ?>"></script>
    <?php } else { ?>
    <script type="text/javascript" src="htmlarea/htmlarea.js"></script>
    <?php } ?>
<?php
        }

        $csscode = str_replace(
                 array(
                   "\n",
                   "'",
                   "\r",
                   "{LANG_DIRECTION}"
                 ),

                 array(
                   '\n',
                   "\'",
                   "",
                   (defined('LANG_DIRECTION') ? LANG_DIRECTION : 'ltr')
                 ),

                 file_get_contents(serendipity_getTemplateFile('style_fallback.css', 'serendipityPath')) . 
                 file_get_contents(serendipity_getTemplateFile('htmlarea.css', 'serendipityPath'))
        );
?>
    <script type="text/javascript">
    // IF you want to enable HTMLArea's spellchecker, download the SpellChecker plugin from the HTMLArea homepage
    // (http://www.sourceforge.net/projects/itools-htmlarea) and uncomment the lines suffixed with ' // [SPELLCHECK]'
    // Note that the SpellChecker is a CGI-based application which needs setup in your Apache host ("Options +CGIExec")
    // Thanks to Randall for pointing this out!

    // HTMLArea.loadPlugin("SpellChecker"); // [SPELLCHECK]
    <?php if($spawnMulti) { ?>
    // when spawning multiple editors at once, keep track of instances in this array
    var htmlarea_editors = new Array();
    <?php } else  { ?>
    var editor<?php echo $jsname; ?> = null; var config<?php echo $jsname; ?> = null;
    <?php } // end if ?>
    <?php if (is_array($eventData['buttons'])) { ?>
    var btn_callbacks = new Array();
    // Serendipity standardized editor functions
    function serendipity_editor_getSelected(editor_id) {
        var editor = findXinha(editor_id);
        if (editor == 'undefined') {
            editor = findHtmlArea(editor_id);
        }
        var html = editor.getSelectedHTML();
        return html;
    }
    function serendipity_editor_replaceSelected(editor_id, str) {
        var editor = findXinha(editor_id);
        if (editor == 'undefined') {
            editor = findHtmlArea(editor_id);
        }
        editor.insertHTML(str);
    }
    function serendipity_editor_getAll(editor_id) {
        var editor = findXinha(editor_id);
        if (editor == 'undefined') {
            editor = findHtmlArea(editor_id);
        }
        return editor.getEditorContent();
    }
    function serendipity_editor_replaceAll(editor_id, str) {
        var editor = findXinha(editor_id);
        if (editor == 'undefined') {
            editor = findHtmlArea(editor_id);
        }
        editor.setEditorContent(str);
    }
    // Serendipity standardized editor convenience function
    function findXinha(editor_id) {
        if (typeof(xinha_editors) != 'undefined') {
            for (var editorName in xinha_editors) {
                if (editor_id == xinha_editors[editorName]._textArea.name) {
                    return xinha_editors[editorName];
                }
            }
        }
        return 'undefined';
    }
    function findHtmlArea(editor_id) {
        if (editor_id == 'serendipity[body]') {
            return editorbody;
        } else if (editor_id == 'serendipity[extended]') {
            return editorextended;
        } else if (typeof(htmlarea_editors) != 'undefined') {
            return htmlarea_editors[editor_id];
        } 
        return 'undefined';
    }
    <?php } ?>
    function Spawn<?php echo $jsname; ?>(<?php echo $spawnMulti ? 'id' : ''; ?>) {
        editor<?php echo $jsname; ?> = new HTMLArea("<?php echo $item; ?>"<?php echo $spawnMulti ? ' + id' : ''; ?>);
        <?php if($spawnMulti) { ?>
        htmlarea_editors["<?php echo $item; ?>"<?php echo $spawnMulti ? ' + id' : ''; ?>] = editor<?php echo $jsname; ?>;
        <?php } // end if ?>
        config<?php echo $jsname; ?>    = editor<?php echo $jsname; ?>.config;
        config<?php echo $jsname; ?>.registerButton('image_selector', '<?PHP echo MANAGE_IMAGES; ?>', '<?php echo $serendipity['serendipityHTTPPath']; ?>htmlarea/images/ed_s9yimage.gif', false,
            function(editor, id) {
                window.open('<?php echo $serendipity['serendipityHTTPPath']; ?>serendipity_admin_image_selector.php?serendipity[textarea]=<?php echo $jsname . ($spawnMulti ? "' + editor._textArea.id + '" : ''); ?>', 'ImageSel', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1');
                // editorref = editor<?php echo $jsname; ?>;
                editorref = editor;
            }
        );
        config<?php echo $jsname; ?>.toolbar.push([ "image_selector"]);
        <?php 
            if (is_array($eventData['buttons'])) {
                foreach($eventData['buttons'] as $button) {
                    echo "btn_callbacks['{$button['id']}'] = {$button['javascript']};\n";
                    echo "var cb_{$button['id']} = btn_callbacks['{$button['id']}'];\n";
                    echo "config$jsname.registerButton('{$button['id']}', '{$button['name']}', '{$button['img_url']}', false, function (editor, id) { btn_callbacks['{$button['id']}'](editor._textArea.id, id); });\n";
                    echo "config$jsname.toolbar.push([\"{$button['id']}\"]);\n";
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
            ?>
        <?php if ($xinha) { ?>
             config<?php echo $jsname; ?>.pageStyle = '<?php echo $csscode; ?>';
             config<?php echo $jsname; ?>.stripScripts = false;
        <?php } else { ?>config<?php echo $jsname; ?>.cssFile = '<?php echo $csscode; ?>';
        <?php } ?>

        config<?php echo $jsname; ?>.toolbar = [
            [ "fontname", "space",
              "fontsize", "space",
              "formatblock", "space",
              "bold", "italic", "underline", "strikethrough", "separator",
              "subscript", "superscript", "separator", <?php
                  if (is_array($toolbar[S9Y_WYSIWYG_TOOLBAR_FORMATTING])) {
                      foreach($toolbar[S9Y_WYSIWYG_TOOLBAR_FORMATTING] as $button) {
                          echo '"' . $button['id'] . '",';
                      }
                      echo '"separator",' . "\n";
                  } ?>
              "copy", "cut", "paste", "space", "undo", "redo" ],

            [ "justifyleft", "justifycenter", "justifyright", "justifyfull", "separator",
              "lefttoright", "righttoleft", "separator",
              "orderedlist", "unorderedlist", "outdent", "indent", "separator",
              "forecolor", "hilitecolor", "separator",
              "inserthorizontalrule", "createlink", "insertimage", "image_selector", "inserttable", "htmlmode", "separator", <?php
                  if (is_array($toolbar[S9Y_WYSIWYG_TOOLBAR_WEB])) {
                      foreach($toolbar[S9Y_WYSIWYG_TOOLBAR_WEB] as $button) {
                          echo '"' . $button['id'] . '",';
                      }
                      echo '"separator",' . "\n";
                  } ?>
              "popupeditor", "separator", "showhelp", "about" ] <?php
                  if (is_array($toolbar['other'])) {
                      echo ",\n    [ ";
                      foreach($toolbar['other'] as $button) {
                          echo '"' . $button['id'] . '", ';
                      }
                      echo '"separator" ]' . "\n";
                  } ?>
              
        ];
        
        if (typeof('s9y_xinha') != 'undefined') {
            s9y_xinha(editor<?php echo $jsname; ?>);
        }

        // editor<?php echo $jsname; ?>.registerPlugin(SpellChecker);  // [SPELLCHECK]
        editor<?php echo $jsname; ?>.generate();
        editor<?php echo $jsname; ?>._textArea.className = 'serendipity_entry';
    }
    </script>
<?php
    }

    $init = true;
}

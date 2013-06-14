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
    $serendipity['smarty']->display($template_vars['entry_template']);
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

{if $init}
    <script>
        _editor_url = "{$serendipityHTTPPath}htmlarea/";
        _editor_lang = "{if $xinha}{$lang}{else}{$CONST.WYSIWYG_LANG}{/if}";
        _editor_skin = "silva";
        var editorref = '';
    </script>

    {if $xinha}
        <script src="htmlarea/XinhaCore.js"></script>
        <script src="{$xinha_custom}"></script>
    {else}
        <script src="htmlarea/htmlarea.js"></script>
    {/if}
{/if}
<script>
// IF you want to enable HTMLArea's spellchecker, download the SpellChecker plugin from the HTMLArea homepage
// (http://www.sourceforge.net/projects/itools-htmlarea) and uncomment the lines suffixed with ' // [SPELLCHECK]'
// Note that the SpellChecker is a CGI-based application which needs setup in your Apache host ("Options +CGIExec")
// Thanks to Randall for pointing this out!

    // HTMLArea.loadPlugin("SpellChecker"); // [SPELLCHECK]
	{if $spawnMulti}
	// when spawning multiple editors at once, keep track of instances in this array
        var htmlarea_editors = new Array();
	{else}
        var editor{$jsname} = null; var config{$jsname} = null;
    {/if}
    {if is_array($eventData.buttons)}
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
    {/if}
    
    function Spawn{$jsname}({if $spawnMulti}id{/if}) {
		editor{$jsname} = new HTMLArea("{$item}"{if $spawnMulti} + id{/if});
        {if $spawnMulti}
            htmlarea_editors["{$item}"{if $spawnMulti} + id{/if}] = editor{$jsname};
		{/if}
        config{$jsname} = editor{$jsname}.config;
        config{$jsname}.registerButton('image_selector', '{$CONST.MANAGE_IMAGES}', '{$serendipityHTTPPath}htmlarea/images/ed_s9yimage.gif', false,
            function(editor, id) {
                window.open('{$serendipityHTTPPath}serendipity_admin_image_selector.php?serendipity[textarea]={$jsname}{if $spawnMulti}editor._textArea.id{/if}', 'ImageSel', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1');
                editorref = editor;
            }
        );
        config{$jsname}.toolbar.push([ "image_selector"]);
        {if is_array($eventData.buttons)}
            {foreach $eventData.buttons as $button}
                btn_callbacks['{$button.id}'] = {$button.javascript};
                var cb_{$button.id} = btn_callbacks['{$button.id}'];
                config{$jsname}.registerButton('{$button.id}', '{$button.name}', '{$button.img_url}', false, function (editor, id) {
                                                                                                                    btn_callbacks['{$button.id}'](editor._textArea.id, id);
                                                                                                                });
                config{$jsname}.toolbar.push(["{$button.id}"]);
            {/foreach}
        {/if}

        {if $xinha}
            config{$jsname}.pageStyle = '{$csscode}';
            config{$jsname}.stripScripts = false;
        {else}
            config{$jsname}.cssFile = '{$csscode}';
        {/if}

        config{$jsname}.toolbar = [
            [ "fontname", "space",
              "fontsize", "space",
              "formatblock", "space",
              "bold", "italic", "underline", "strikethrough", "separator",
              "subscript", "superscript", "separator",
                  {if is_array($toolbar.{$CONST.S9Y_WYSIWYG_TOOLBAR_FORMATTING})}
                      {foreach $toolbar.{$CONST.S9Y_WYSIWYG_TOOLBAR_FORMATTING} as $button}
                          "{$button.id}",
                      {/foreach}
                      "separator",
                  {/if}
              "copy", "cut", "paste", "space", "undo", "redo" ],

            [ "justifyleft", "justifycenter", "justifyright", "justifyfull", "separator",
              "lefttoright", "righttoleft", "separator",
              "orderedlist", "unorderedlist", "outdent", "indent", "separator",
              "forecolor", "hilitecolor", "separator",
              "inserthorizontalrule", "createlink", "insertimage", "image_selector", "inserttable", "htmlmode", "separator", 
                  {if is_array($toolbar.{$CONST.S9Y_WYSIWYG_TOOLBAR_WEB})}
                      {foreach $toolbar.{$CONST.S9Y_WYSIWYG_TOOLBAR_WEB} as $button}
                          "{$button.id}",
                      {/foreach}
                      "separator",
                  {/if}
              "popupeditor", "separator", "showhelp", "about" ] 
                  {if is_array($toolbar.other)}
                     ",
                        [
                      {foreach $toolbar.other as $button}
                          "{$button.id}", 
                      {/foreach}
                      "separator" ]
                  {/if}
        ];
        
        if (typeof('s9y_xinha') != 'undefined') {
            s9y_xinha(editor{$jsname});
        }

        // editor{$jsname}.registerPlugin(SpellChecker);  // [SPELLCHECK]
        editor{$jsname}.generate();
        editor{$jsname}._textArea.className = 'serendipity_entry';
    }
</script>
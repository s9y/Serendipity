{* HTML5: Yes *}
{* jQuery: No *}

<script src="serendipity_define.js.php"></script>
<script src="serendipity_editor.js"></script>

{if $entry_vars.errMsg}
    <span class="msg_error"><span class="icon-attention"></span> {$entry_vars.errMsg}</span>
{/if}
<form id="serendipityEntry" name="serendipityEntry" {$entry_vars.entry.entry_form} action="{$entry_vars.targetURL}" method="post">
    {$entry_vars.hidden}
    <div class="form_field">
        <label for="entryTitle">{$CONST.TITLE}:</label>
        <input id="entryTitle" name="serendipity[title]" type="text" value="{$entry_vars.entry.title|@escape}">
    </div>
{if $entry_vars.allowDateManipulation}
    <div class="form_field">
        <input name="serendipity[chk_timestamp]" type="hidden" value="{$entry_vars.timestamp}">
        {* TODO: this should be input[type=datetime] *}
        <label for="serendipityNewTimestamp">{$CONST.DATE}:</label>
        <input id="serendipityNewTimestamp" name="serendipity[new_timestamp]" type="text" value="{$entry_vars.timestamp|@formatTime:DATE_FORMAT_2:true:false:true}">
        <a id="reset_timestamp" class="icon_link" href="#" onclick="document.getElementById('serendipityNewTimestamp').value = '{$entry_vars.reset_timestamp|@formatTime:DATE_FORMAT_2:true:false:true}'; return false;" title="{$CONST.RESET_DATE_DESC}"><span class="icon-clock"></span><span class="visuallyhidden"> {$CONST.RESET_DATE}</span></a>
    </div>
{/if}
    <div class="form_select">
        {* BUG: doesn't work the way it used to (collapsed multiselect) *}
        <label for="categoryselector">{$CONST.CATEGORY}:</label>
        <select id="categoryselector" name="serendipity[categories][]" multiple="multiple">
            <option value="0">{$CONST.NO_CATEGORY}</option>
        {foreach from=$entry_vars.category_options item="entry_cat"}
            <option value="{$entry_cat.categoryid}"{if $entry_cat.is_selected} selected="selected"{/if}>{$entry_cat.depth_pad}{$entry_cat.category_name}</option>
        {/foreach}
        </select>
    </div>

    <div class="form_select">
        <label for="entry_status" class="visuallyhidden">Entry status</label> {* i18n *}
        <select id="entry_status" name="serendipity[isdraft]">
        {if $entry_vars.serendipityRightPublish}
            <option value="false"{if $entry_vars.draft_mode == 'publish'} selected="selected"{/if}>{$CONST.PUBLISH}</option>
        {/if}
            <option value="true"{if $entry_vars.draft_mode == 'draft'} selected="selected"{/if}>{$CONST.DRAFT}</option>
        </select>
    </div>

    <div class="form_area">
        <label for="serendipity[body]">{$CONST.ENTRY_BODY}</label>
    {if NOT $entry_vars.wysiwyg}
        <div id="tools_entry">
            {* This whole button bar should be replaced by something external, which maybe even
               "reacts" to installed markup plugins. I.e. if a blog uses Markdown, the button for
               italic should not insert an em element but the appropriate Markdown formatting. *}
        <script>
        {if $entry_vars.wysiwyg_advanced}
            {if $iso2br}document.write('<input type="button" name="insX" value="NoBR" accesskey="x" onclick="wrapSelection(document.forms[\'serendipityEntry\'][\'serendipity[body]\'],\'<nl>\',\'</nl>\')">');{/if}
            document.write('<input type="button" name="insI" value="I" accesskey="i" onclick="wrapSelection(document.forms[\'serendipityEntry\'][\'serendipity[body]\'],\'<em>\',\'</em>\')">');
            document.write('<input type="button" name="insB" value="B" accesskey="b" onclick="wrapSelection(document.forms[\'serendipityEntry\'][\'serendipity[body]\'],\'<strong>\',\'</strong>\')">');
            document.write('<input type="button" name="insU" value="U" accesskey="u" onclick="wrapSelection(document.forms[\'serendipityEntry\'][\'serendipity[body]\'],\'<u>\',\'</u>\')">');
            document.write('<input type="button" name="insQ" value="{$CONST.QUOTE}" accesskey="q" onclick="wrapSelection(document.forms[\'serendipityEntry\'][\'serendipity[body]\'],\'<blockquote>\',\'</blockquote>\')">');
            document.write('<input type="button" name="insJ" value="img" accesskey="j" onclick="wrapInsImage(document.forms[\'serendipityEntry\'][\'serendipity[body]\'])">');
            document.write('<input type="button" name="insImage" value="{$CONST.MEDIA}" onclick="window.open(\'serendipity_admin_image_selector.php?serendipity[textarea]=body\', \'ImageSel\', \'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1\');">');
            document.write('<input type="button" name="insURL" value="URL" accesskey="l" onclick="wrapSelectionWithLink(document.forms[\'serendipityEntry\'][\'serendipity[body]\'])">');
        {else}
            {if $iso2br}document.write('<input type="button" value="NoBR" onclick="serendipity_insBasic(document.forms[\'serendipityEntry\'][\'serendipity[body]\'], \'x\')">');{/if}
            document.write('<input type="button" value="B" onclick="serendipity_insBasic(document.forms[\'serendipityEntry\'][\'serendipity[body]\'], \'b\')">');
            document.write('<input type="button" value="U" onclick="serendipity_insBasic(document.forms[\'serendipityEntry\'][\'serendipity[body]\'], \'u\')">');
            document.write('<input type="button" value="I" onclick="serendipity_insBasic(document.forms[\'serendipityEntry\'][\'serendipity[body]\'], \'i\')">');
            document.write('<input type="button" value="<img>" onclick="serendipity_insImage(document.forms[\'serendipityEntry\'][\'serendipity[body]\'])">');
            document.write('<input type="button" value="{$CONST.MEDIA}" onclick="window.open(\'serendipity_admin_image_selector.php?serendipity[textarea]=body\', \'ImageSel\', \'width=800,height=600,toolbar=no\');">');
            document.write('<input type="button" value="Link" onclick="serendipity_insLink(document.forms[\'serendipityEntry\'][\'serendipity[body]\'])">');
        {/if}
        </script>
        </div>
    {/if}
        {serendipity_hookPlugin hook="backend_entry_toolbar_body" data=$entry_data.entry hookAll="true"}
        <textarea id="serendipity[body]" name="serendipity[body]" rows="20">{$entry_vars.entry.body|@escape}</textarea>
    </div>

    <div class="clearfix">
        <div class="form_check">
            <input id="checkbox_allow_comments" name="serendipity[allow_comments]" type="checkbox" value="true"{if $entry_vars.allow_comments} checked="checked"{/if}><label for="checkbox_allow_comments">{$CONST.COMMENTS_ENABLE}</label>
        </div>

        <div class="form_check">
            <input id="checkbox_moderate_comments" name="serendipity[moderate_comments]" type="checkbox" value="true"{if $entry_vars.moderate_comments} checked="checked"{/if}><label for="checkbox_moderate_comments">{$CONST.COMMENTS_MODERATE}</label>
        </div>
    </div>

    <div class="form_buttons">
        <input type="submit" accesskey="p" value="{$CONST.PREVIEW}" onclick="document.forms['serendipityEntry'].elements['serendipity[preview]'].value='true';">
        <input type="submit" accesskey="s" value="{$CONST.SAVE}"onclick="return checkSave();">
    </div>

    <div class="form_area">
        <label for="serendipity[extended]">{$CONST.EXTENDED_BODY}</label>
    {if NOT $entry_vars.wysiwyg}
        <div id="tools_extended">
        {if $entry_vars.wysiwyg_advanced}
            {if $iso2br}<input name="insX" type="button" value="NoBR" accesskey="x" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<nl>','</nl>')">{/if}
            <input name="insI" type="button" accesskey="i" value="I" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<em>','</em>')">
            <input name="insB" type="button" accesskey="b" value="B" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<strong>','</strong>')">
            <input name="insU" type="button" accesskey="u" value="U" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<u>','</u>')">
            <input name="insQ" type="button" accesskey="q" value="{$CONST.QUOTE}" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<blockquote>','</blockquote>')">
            <input name="insJ" type="button" accesskey="j" value="img" onclick="wrapInsImage(document.forms['serendipityEntry']['serendipity[extended]'])">
            <input name="insImage" type="button" value="{$CONST.MEDIA}" onclick="window.open('serendipity_admin_image_selector.php?serendipity[textarea]=extended', 'ImageSel', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1');">
            <input name="insURL" type="button" accesskey="l" value="URL" onclick="wrapSelectionWithLink(document.forms['serendipityEntry']['serendipity[extended]'])">
        {else}
            {if $iso2br}<input type="button" value="NoBR" onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[extended]'], 'x')">{/if}
            <input type="button" value="B" onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[extended]'], 'b')">
            <input type="button" value="U" onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[extended]'], 'u')">
            <input type="button" value="I" onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[extended]'], 'i')">
            <input type="button" value="<img>" onclick="serendipity_insImage(document.forms['serendipityEntry']['serendipity[extended]'])">
            <input type="button" value="{$CONST.MEDIA}" onclick="window.open('serendipity_admin_image_selector.php?serendipity[textarea]=extended', 'ImageSel', 'width=800,height=600,toolbar=no');">
            <input type="button" value="Link" onclick="serendipity_insLink(document.forms['serendipityEntry']['serendipity[extended]'])">
        {/if}
        </div>
    {/if}
        {serendipity_hookPlugin hook="backend_entry_toolbar_extended" data=$entry_data.entry hookAll="true"}
        <textarea id="serendipity[extended]" name="serendipity[extended]" rows="20">{$entry_vars.entry.extended|@escape}</textarea>
    </div>

    <fieldset>
        <legend><span>{$CONST.ADVANCED_OPTIONS}</span></legend>
        {$entry_vars.entry|@serendipity_refhookPlugin:'backend_display'}
    </fieldset>
</form>

{if $entry_vars.show_wysiwyg}
<script>toggle_extended();</script>
{/if}
{if $entry_vars.wysiwyg}
    {foreach from=$entry_vars.wysiwyg_blocks item="wysiwyg_block_item" key="wysiwyg_block_jsname"}
        {$wysiwyg_block_item|emit_htmlarea_code:$wysiwyg_block_jsname}
    {/foreach}
    {$entry_vars.wysiwyg_blocks|@serendipity_refhookPlugin:'backend_wysiwyg_finish'}
{/if}

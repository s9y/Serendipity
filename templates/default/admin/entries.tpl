<script type="text/javascript" language="JavaScript" src="serendipity_define.js.php"></script>
<script type="text/javascript" language="JavaScript" src="serendipity_editor.js"></script>

<!-- ADMIN-ENTRY TEMPLATE: entries.tpl START -->
{*** POSSIBLE ERROR MESSAGES START ***}
{if $entry_vars.errMsg}
    <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_error.png'}" alt="" />{$entry_vars.errMsg}</div>
{/if}
{*** POSSIBLE ERROR MESSAGES END ***}
{*** MAIN ENTRY FORM START ***}
<form {$entry_vars.entry.entry_form} action="{$entry_vars.targetURL}" method="post" name="serendipityEntry" id="serendipityEntry" style="margin-top: 0px; margin-bottom: 0px; padding-top: 0px; padding-bottom: 0px">
{$entry_vars.hidden}

<table class="serendipityEntryEdit" border="0" width="100%">

    {*** ENTRY TITLE, DRAFT START ***}
    <tr>
        <td>
           <span><b>{$CONST.TITLE}:</b></span>
        </td>
        <td colspan="2">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td><input class="input_textbox" type="text" id="entryTitle" name="serendipity[title]" value="{$entry_vars.entry.title|@escape}" size="60" /></td>
                    <td align="right">
                        <select name="serendipity[isdraft]">
                            {if $entry_vars.serendipityRightPublish}
                            <option  value="false" {if $entry_vars.draft_mode == 'publish'}selected="selected"{/if}>{$CONST.PUBLISH}</option>
                            {/if}
                            <option  value="true"  {if $entry_vars.draft_mode == 'draft'}selected="selected"{/if}>{$CONST.DRAFT}</option>
                        </select>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    {*** ENTRY TITLE, DRAFT END ***}

    <tr>

    {*** ENTRY DATE,CATEGORY START ***}
    {if $entry_vars.allowDateManipulation}
        <td>
            <b>{$CONST.DATE}:</b>
        </td>
        <td>
            <input type="hidden" name="serendipity[chk_timestamp]" value="{$entry_vars.timestamp}" />
            <input class="input_textbox" type="text" name="serendipity[new_timestamp]" id="serendipityNewTimestamp" value="{$entry_vars.timestamp|@formatTime:DATE_FORMAT_2:true:false:true}" />
            <a href="#" onclick="document.getElementById('serendipityNewTimestamp').value = '{$entry_vars.reset_timestamp|@formatTime:DATE_FORMAT_2:true:false:true}'; return false;" title="{$CONST.RESET_DATE_DESC}"><img src="{serendipity_getFile file='admin/img/clock.png'}" border="0"  style="vertical-align: text-top;" alt="{$CONST.RESET_DATE}" /></a>
        </td>
        <td align="right">
    {else}
        <td align="right" colspan="3">
    {/if}
            <a style="border:0; text-decoration: none" href="#" onclick="showItem('categoryselector'); return false" title="{$CONST.TOGGLE_OPTION}"><img src="{serendipity_getFile file='img/plus.png'}" id="option_categoryselector" style="border: 20px" alt="" border="0" /></a> <b>{$CONST.CATEGORY}:</b>
            <select id="categoryselector" name="serendipity[categories][]" style="vertical-align: middle;" multiple="multiple">
                <option value="0">[{$CONST.NO_CATEGORY}]</option>
                {foreach from=$entry_vars.category_options item="entry_cat"}
                <option value="{$entry_cat.categoryid}" {if $entry_cat.is_selected}selected="selected"{/if}>{$entry_cat.depth_pad}{$entry_cat.category_name}</option>
                {/foreach}
            </select>

            <script type="text/javascript" language="JavaScript">

                var plus_img  = '{serendipity_getFile file='img/plus.png'}';
                var minus_img = '{serendipity_getFile file='img/minus.png'}';
                var cat_count = {$entry_vars.cat_count};
                var selector_toggle  = new Array();
                var selector_store   = new Array();
                var selector_restore = new Array();

                /* use new smarty auto-literal = delimiter + space */
                function checkSave() { 
                    {serendipity_hookPlugin hook='backend_entry_checkSave' hookAll='true'}
                    return true;
                } 

                selector_toggle['categoryselector'] = '{$entry_vars.cat_state}';
            </script>
            <script type="text/javascript" language="JavaScript">
                addLoadEvent(showItem);
            </script>
        </td>
    </tr>
    {*** ENTRY DATE,CATEGORY END ***}

    {*** ENTRY TOOLBAR START ***}
    <tr>
        {if NOT $entry_vars.wysiwyg}
        <td colspan="2"><b>{$CONST.ENTRY_BODY}</b></td>
        <td align="right">
            <div id="tools_entry" style="display: none">

                {if $iso2br}
                    <input type="button" class="serendipityPrettyButton input_button" name="insX" value="NoBR" accesskey="x" style="font-style: italic" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[body]'],'<nl>','</nl>')" />
                {/if}
                <input type="button" class="serendipityPrettyButton input_button" name="insI" value="I" accesskey="i" style="font-style: italic" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[body]'],'<em>','</em>')" />
                <input type="button" class="serendipityPrettyButton input_button" name="insB" value="B" accesskey="b" style="font-weight: bold" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[body]'],'<strong>','</strong>')" />
                <input type="button" class="serendipityPrettyButton input_button" name="insU" value="U" accesskey="u" style="text-decoration: underline;" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[body]'],'<u>','</u>')" />
                <input type="button" class="serendipityPrettyButton input_button" name="insQ" value="{$CONST.QUOTE}" accesskey="q" style="font-style: italic" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[body]'],'<blockquote>','</blockquote>')" />
                <input type="button" class="serendipityPrettyButton input_button" name="insJ" value="img" accesskey="j" onclick="wrapInsImage(document.forms['serendipityEntry']['serendipity[body]'])" />
                <input type="button" class="serendipityPrettyButton input_button" name="insImage" value="{$CONST.MEDIA}" style="" onclick="window.open('serendipity_admin_image_selector.php?serendipity[textarea]=body', 'ImageSel', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1');" />
                <input type="button" class="serendipityPrettyButton input_button" name="insURL" value="URL" accesskey="l" onclick="wrapSelectionWithLink(document.forms['serendipityEntry']['serendipity[body]'])" />

                {serendipity_hookPlugin hook="backend_entry_toolbar_body" data=$entry_data.entry hookAll="true"}
            </div>
            <script type="text/javascript" language="JavaScript">
                var toolbarentry = document.getElementById('tools_entry');
                toolbarentry.style.display = '';
            </script>
        </td>
        {else}
        <td colspan="2"><b>{$CONST.ENTRY_BODY}</b></td>
        <td>{serendipity_hookPlugin hook="backend_entry_toolbar_body" data=$entry_data.entry hookAll="true"}</td>
        {/if}
    </tr>
    {*** ENTRY TOOLBAR END ***}

    {*** ENTRY BODY START ***}
    <tr>
        <td colspan="3">
            <textarea style="width: 100%" name="serendipity[body]" id="serendipity[body]" cols="80" rows="20">{$entry_vars.entry.body|@escape}</textarea>
        </td>
    </tr>
    {*** ENTRY BODY START ***}

    {*** ENTRY OPTIONS START ***}
    <tr>
        <td colspan="3">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="left" width="70%">
                        <input class="input_checkbox" id="checkbox_allow_comments" type="checkbox" name="serendipity[allow_comments]" value="true" {if $entry_vars.allow_comments}checked="checked"{/if} /><label for="checkbox_allow_comments">{$CONST.COMMENTS_ENABLE}</label><br />
                        <input class="input_checkbox" id="checkbox_moderate_comments" type="checkbox" name="serendipity[moderate_comments]" value="true" {if $entry_vars.moderate_comments}checked="checked"{/if} /><label for="checkbox_moderate_comments">{$CONST.COMMENTS_MODERATE}</label>
                    </td>
                    <td align="right" rowspan="2" valign="middle" width="30%">
                        <input accesskey="p" type="submit" value="- {$CONST.PREVIEW} -" class="serendipityPrettyButton input_button"  style="width: 150px" onclick="document.forms['serendipityEntry'].elements['serendipity[preview]'].value='true';" /><br />
                        <input accesskey="s" type="submit" onclick="return checkSave();" value="- {$CONST.SAVE} -" class="serendipityPrettyButton input_button" style="width: 150px" />
                    </td>
                </tr>
            </table>
            <br />
        </td>
    </tr>
    {*** ENTRY OPTIONS END ***}

    {*** EXTENDED ENTRY TOOLBAR START ***}
    <tr>
        <td colspan="2">
            {if NOT $entry_vars.wysiwyg}
            <a style="border:0; text-decoration: none" href="#" onclick="toggle_extended(true); return false;" title="{$CONST.TOGGLE_OPTION}"><img src="{serendipity_getFile file='img/plus.png'}" id="option_extended" alt="+/-" border="0" /></a>
            {/if}
            <b>{$CONST.EXTENDED_BODY}</b>
        </td>

        <td align="right">
            {if NOT $entry_vars.wysiwyg}
            <div id="tools_extended" style="display: none">
                {if $entry_vars.wysiwyg_advanced}
                {if $iso2br}<input type="button" class="serendipityPrettyButton input_button" name="insX" value="NoBR" accesskey="x" style="font-style: italic" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<nl>','</nl>')" />{/if}
                <input type="button" class="serendipityPrettyButton input_button" name="insI" value="I" accesskey="i" style="font-style: italic" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<em>','</em>')" />
                <input type="button" class="serendipityPrettyButton input_button" name="insB" value="B" accesskey="b" style="font-weight: bold" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<strong>','</strong>')" />
                <input type="button" class="serendipityPrettyButton input_button" name="insU" value="U" accesskey="u" style="text-decoration: underline;" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<u>','</u>')" />
                <input type="button" class="serendipityPrettyButton input_button" name="insQ" value="{$CONST.QUOTE}" accesskey="q" style="font-style: italic" onclick="wrapSelection(document.forms['serendipityEntry']['serendipity[extended]'],'<blockquote>','</blockquote>')" />
                <input type="button" class="serendipityPrettyButton input_button" name="insJ" value="img" accesskey="j" onclick="wrapInsImage(document.forms['serendipityEntry']['serendipity[extended]'])" />
                <input type="button" class="serendipityPrettyButton input_button" name="insImage" value="{$CONST.MEDIA}" onclick="window.open('serendipity_admin_image_selector.php?serendipity[textarea]=extended', 'ImageSel', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1');" />
                <input type="button" class="serendipityPrettyButton input_button" name="insURL" value="URL" accesskey="l" onclick="wrapSelectionWithLink(document.forms['serendipityEntry']['serendipity[extended]'])" />
                {else}
                {if $iso2br}<input type="button" class="serendipityPrettyButton input_button" value=" NoBR " onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[extended]'], 'x')" />{/if}
                <input type="button" class="serendipityPrettyButton input_button" value=" B " onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[extended]'], 'b')" />
                <input type="button" class="serendipityPrettyButton input_button" value=" U " onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[extended]'], 'u')" />
                <input type="button" class="serendipityPrettyButton input_button" value=" I " onclick="serendipity_insBasic(document.forms['serendipityEntry']['serendipity[extended]'], 'i')" />
                <input type="button" class="serendipityPrettyButton input_button" value="<img>" onclick="serendipity_insImage(document.forms['serendipityEntry']['serendipity[extended]'])" />
                <input type="button" class="serendipityPrettyButton input_button" value="{$CONST.MEDIA}" onclick="window.open('serendipity_admin_image_selector.php?serendipity[textarea]=extended', 'ImageSel', 'width=800,height=600,toolbar=no');" />
                <input type="button" class="serendipityPrettyButton input_button" value="Link" onclick="serendipity_insLink(document.forms['serendipityEntry']['serendipity[extended]'])" />
                {/if}
                {serendipity_hookPlugin hook="backend_entry_toolbar_extended" data=$entry_data.entry hookAll="true"}
            </div>
            {else}
                {serendipity_hookPlugin hook="backend_entry_toolbar_extended" data=$entry_data.entry hookAll="true"}
            {/if}
       </td>
    </tr>
    {*** EXTENDED ENTRY TOOLBAR END ***}

    {*** EXTENDED ENTRY BODY START ***}
    <tr>
        <td colspan="3">
            <textarea style="width: 100%;" name="serendipity[extended]" id="serendipity[extended]" cols="80" rows="20">{$entry_vars.entry.extended|@escape}</textarea>
            {if NOT $entry_vars.wysiwyg}
            <script type="text/javascript" language="JavaScript">
               toggle_extended();
            </script>
            {/if}
        </td>
    </tr>
    {*** EXTENDED ENTRY BODY END ***}

    <tr>
        <td colspan="3">
            <br />
            <fieldset>
                <legend><b>{$CONST.ADVANCED_OPTIONS}</b></legend>
    {*** EXTERNAL PLUGINS OUTPUT START ***}
                {$entry_vars.entry|@serendipity_refhookPlugin:'backend_display'}
    {*** EXTERNAL PLUGINS OUTPUT END ***}
            </fieldset>
        </td>
    </tr>
</table>
</form>
{*** MAIN ENTRY FORM END ***}

{*** SPAWN WYSIWYG EDITORS START ***}
{if $entry_vars.show_wysiwyg}
<script type="text/javascript" language="JavaScript">
    toggle_extended();
</script>
{/if}

{if $entry_vars.wysiwyg}
    {foreach from=$entry_vars.wysiwyg_blocks item="wysiwyg_block_item" key="wysiwyg_block_jsname"}
        {$wysiwyg_block_item|emit_htmlarea_code:$wysiwyg_block_jsname}
    {/foreach}
    {$entry_vars.wysiwyg_blocks|@serendipity_refhookPlugin:'backend_wysiwyg_finish'}
{/if}
{*** SPAWN WYSIWYG EDITORS END ***}

<!-- ADMIN-ENTRY TEMPLATE: entries.tpl END -->

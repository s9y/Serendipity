<h2>{if $entry_vars.entry.title}{$CONST.EDIT_ENTRY}{else}{$CONST.NEW_ENTRY}{/if}</h2>
{if $entry_vars.errMsg}
    <span class="msg_error"><span class="icon-attention-circled"></span> {$entry_vars.errMsg}</span>
{/if}
<form id="serendipityEntry" name="serendipityEntry" {$entry_vars.entry.entry_form} action="{$entry_vars.targetURL}" method="post">
    {foreach $entry_vars.hiddens as $key => $value}
    <input type="hidden" name="{$key}" value="{$value}">
    {/foreach}
    <input type="hidden" id="entryid" name="serendipity[id]" value="{$entry_vars.entry.id|escape}">
    <input type="hidden" name="serendipity[timestamp]" value="{$entry_vars.timestamp|escape}">
    <input type="hidden" name="serendipity[preview]" value="false">
    {$entry_vars.formToken}
    <div id="edit_entry_title" class="form_field">
        <label for="entryTitle">{$CONST.TITLE}</label>
        <input id="entryTitle" name="serendipity[title]" type="text" value="{$entry_vars.entry.title|@escape}">
    </div>

    <div class="form_area">
        <label for="serendipity[body]">{$CONST.ENTRY_BODY}</label>
    {if NOT $entry_vars.wysiwyg}
        <div id="tools_entry" class="editor_toolbar">
        {if $iso2br}
            <button class="wrap_selection" type="button" name="insX" data-tag="nl" data-tarea="body">NoBR</button>
        {/if}
            <button class="hilite_i wrap_selection" type="button" name="insI" data-tag="em" data-tarea="body">I</button>
            <button class="hilite_b wrap_selection" type="button" name="insB" data-tag="strong" data-tarea="body">B</button>
            <button class="wrap_selection" type="button" name="insQ" data-tag="blockquote" data-tarea="body">{$CONST.QUOTE}</button>
            <button class="wrap_insimg" type="button" name="insJ" data-tarea="body">img</button>
            <button class="wrap_insmedia" type="button" name="insImage" data-tarea="body">{$CONST.MEDIA}</button>
            <button class="wrap_insurl" type="button" name="insURL" data-tarea="body">URL</button>
            {serendipity_hookPlugin hook="backend_entry_toolbar_body" data=$entry_data.entry hookAll="true"}
        </div>
    {/if}
        <textarea id="serendipity[body]" name="serendipity[body]" rows="15">{$entry_vars.entry.body|@escape}</textarea>
    </div>

    <div id="edit_entry_submit">
        <button id="reset_timestamp" class="button_link" type="button" href="#serendipityNewTimestamp" data-currtime="{$entry_vars.reset_timestamp|@formatTime:'o-m-d\TH:i':true:false:true}" title="{$CONST.RESET_DATE_DESC}"><span class="icon-clock"></span><span class="visuallyhidden"> {$CONST.RESET_DATE}</span></button>
        <a id="select_category" class="button_link icon_link" href="#edit_entry_category" title="Select category"><span class="icon-list-bullet"></span><span class="visuallyhidden">Select category</span></a> {* i18n *}
        <input class="entry_preview" type="submit" value="{$CONST.PREVIEW}">
        <input type="submit" value="{$CONST.SAVE}">
    </div>

     <div class="form_area">
        <label for="serendipity[extended]">{$CONST.EXTENDED_BODY}</label>
    {if NOT $entry_vars.wysiwyg}
        <div id="tools_extended" class="editor_toolbar">
        {if $iso2br}
            <button class="wrap_selection" type="button" name="insX" data-tag="nl" data-tarea="extended">NoBR</button>
        {/if}
            <button class="hilite_i wrap_selection" type="button" name="insI" data-tag="em" data-tarea="extended">I</button>
            <button class="hilite_b wrap_selection" type="button" name="insB" data-tag="strong" data-tarea="extended">B</button>
            <button class="wrap_selection" type="button" name="insQ" data-tag="blockquote" data-tarea="extended">{$CONST.QUOTE}</button>
            <button class="wrap_insimg" type="button" name="insJ" data-tarea="extended">img</button>
            <button class="wrap_insmedia" type="button" name="insImage" data-tarea="extended">{$CONST.MEDIA}</button>
            <button class="wrap_insurl" type="button" name="insURL" data-tarea="extended">URL</button>
            {serendipity_hookPlugin hook="backend_entry_toolbar_extended" data=$entry_data.entry hookAll="true"}
        </div>
    {/if}
        <textarea id="serendipity[extended]" name="serendipity[extended]" rows="15">{$entry_vars.entry.extended|@escape}</textarea>
    </div>

    <fieldset id="edit_entry_metadata" class="clearfix">
        <span class="wrap_legend"><legend><button id="toggle_metadata" class="button_link" type="button"><span class="icon-right-dir"></span><span class="visuallyhidden"> {$CONST.TOGGLE_ALL}</span></button> Entry metadata</legend></span> {* i18n *}

        <div id="meta_data" class="additional_info">
        {if $entry_vars.allowDateManipulation}
            <div id="edit_entry_timestamp" class="form_field">
                <input name="serendipity[chk_timestamp]" type="hidden" value="{$entry_vars.timestamp|escape}">

                <label for="serendipityNewTimestamp">{$CONST.DATE}</label>
                <input id="serendipityNewTimestamp" name="serendipity[new_timestamp]" type="datetime-local" value="{$entry_vars.timestamp|@formatTime:'o-m-d\TH:i':true:false:true}">
            </div>
        {/if}
            <div id="edit_entry_status" class="form_select">
                <label for="entry_status">Entry status</label> {* i18n *}
                <select id="entry_status" name="serendipity[isdraft]">
                {if $entry_vars.serendipityRightPublish}
                    <option value="false"{if $entry_vars.draft_mode == 'publish'} selected{/if}>{$CONST.PUBLISH}</option>
                {/if}
                    <option value="true"{if $entry_vars.draft_mode == 'draft'} selected{/if}>{$CONST.DRAFT}</option>
                </select>
            </div>

            <div id="edit_entry_status_comments">
                <fieldset>
                    <span class="wrap_legend"><legend>{$CONST.COMMENTS}</legend></span>

                    <div class="form_check">
                        <input id="checkbox_allow_comments" name="serendipity[allow_comments]" type="checkbox" value="true"{if $entry_vars.allow_comments} checked="checked"{/if}><label for="checkbox_allow_comments">{$CONST.COMMENTS_ENABLE}</label>
                    </div>

                    <div class="form_check">
                        <input id="checkbox_moderate_comments" name="serendipity[moderate_comments]" type="checkbox" value="true"{if $entry_vars.moderate_comments} checked="checked"{/if}><label for="checkbox_moderate_comments">{$CONST.COMMENTS_MODERATE}</label>
                    </div>
                </fieldset>
            </div>

            <div id="edit_entry_category" class="clearfix mfp-hide">
                <fieldset>
                    <span class="wrap_legend"><legend>{$CONST.CATEGORY}</legend></span>
                {foreach from=$entry_vars.category_options item="entry_cat"}
                    <div class="form_check">
                        {$entry_cat.depth_pad}
                        <input id="serendipity_category_{$entry_cat.categoryid}" name="serendipity[categories][]" type="checkbox" value="{$entry_cat.categoryid}"{if $entry_cat.is_selected} checked="checked"{/if}>

                        <label for="serendipity_category_{$entry_cat.categoryid}">{$entry_cat.category_name}</label>
                    </div>
                {/foreach}
                </fieldset>
            </div>
        </div>
    </fieldset>
    
    {capture name='advanced_options'}{$entry_vars.entry|@serendipity_refhookPlugin:'backend_display'}{/capture}
    {if ! empty($smarty.capture.advanced_options) }
        <fieldset id="advanced_options">
            <span class="wrap_legend"><legend><button id="toggle_advanced" class="button_link" type="button"><span class="icon-right-dir"></span><span class="visuallyhidden"> {$CONST.TOGGLE_ALL}</span></button> {$CONST.ADVANCED_OPTIONS}</legend></span>
            <div id="adv_opts" class="additional_info">
            {$smarty.capture.advanced_options}
            </div>
        </fieldset>
    {/if}
   
</form>
{if ! $use_popup}
    <script src="{serendipity_getFile file='admin/js/jquery.magnific-popup.js'}"></script>
{/if}
{if $entry_vars.wysiwyg}
    {foreach from=$entry_vars.wysiwyg_blocks item="wysiwyg_block_item" key="wysiwyg_block_jsname"}
        {$wysiwyg_block_item|emit_htmlarea_code:$wysiwyg_block_jsname}
    {/foreach}
    {$entry_vars.wysiwyg_blocks|@serendipity_refhookPlugin:'backend_wysiwyg_finish'}
{/if}

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
        <input id="entryTitle" name="serendipity[title]" type="text" value="{$entry_vars.entry.title|escape}">
    </div>

    <div id="cats_list" class="clearfix taxonomy">
        <h3>{$CONST.CATEGORIES}</h3>

        <ul class="plainList"></ul>
    </div>

    {if class_exists('serendipity_event_freetag')}
    <div id="tags_list" class="clearfix taxonomy">
        <h3>{$CONST.EDITOR_TAGS}</h3>

        <ul class="plainList"></ul>
    </div>
    {/if}

    <div class="form_area">
        <label for="serendipity[body]">{$CONST.ENTRY_BODY}</label>
    {if NOT $entry_vars.wysiwyg}
        <div id="tools_entry" class="editor_toolbar">
        {if $iso2br}
            <button class="wrap_selection lang-html" type="button" name="insX" data-tag-open="nl" data-tag-close="nl" data-tarea="serendipity[body]">NoBR</button>
        {/if}
            <button class="hilite_i wrap_selection lang-html" type="button" name="insI" data-tag-open="em" data-tag-close="em" data-tarea="serendipity[body]">i</button>
            <button class="hilite_b wrap_selection lang-html" type="button" name="insB" data-tag-open="strong" data-tag-close="strong" data-tarea="serendipity[body]">b</button>
            <button class="wrap_selection lang-html" type="button" name="insQ" data-tag-open="blockquote" data-tag-close="blockquote" data-tarea="serendipity[body]">{$CONST.QUOTE}</button>
            <button class="wrap_insimg" type="button" name="insJ" data-tarea="serendipity[body]">img</button>
            <button class="wrap_insmedia" type="button" name="insImage" data-tarea="serendipity[body]">{$CONST.MEDIA}</button>
            <button class="wrap_insurl" type="button" name="insURL" data-tarea="serendipity[body]">URL</button>
            {serendipity_hookPlugin hook="backend_entry_toolbar_body" data=$entry_data.entry hookAll="true"}
        </div>
    {else}
        <div id="tools_entry" class="editor_toolbar">
            {serendipity_hookPlugin hook="backend_entry_toolbar_body" data=$entry_data.entry hookAll="true"}
        </div>
    {/if}
        <textarea id="serendipity[body]" name="serendipity[body]" rows="15">{$entry_vars.entry.body|escape}</textarea>
    </div>

     <div class="form_area">
        <label for="serendipity[extended]">{$CONST.EXTENDED_BODY}</label>
    {if NOT $entry_vars.wysiwyg}
        <div id="tools_extended" class="editor_toolbar">
        {if $iso2br}
            <button class="wrap_selection lang-html" type="button" name="insX" data-tag-open="nl" data-tag-close="nl" data-tarea="serendipity[extended]">NoBR</button>
        {/if}
            <button class="hilite_i wrap_selection lang-html" type="button" name="insI" data-tag-open="em" data-tag-close="em" data-tarea="serendipity[extended]">i</button>
            <button class="hilite_b wrap_selection lang-html" type="button" name="insB" data-tag-open="strong" data-tag-close="strong" data-tarea="serendipity[extended]">b</button>
            <button class="wrap_selection lang-html" type="button" name="insQ" data-tag-open="blockquote" data-tag-close="blockquote" data-tarea="serendipity[extended]">{$CONST.QUOTE}</button>
            <button class="wrap_insimg" type="button" name="insJ" data-tarea="serendipity[extended]">img</button>
            <button class="wrap_insmedia" type="button" name="insImage" data-tarea="serendipity[extended]">{$CONST.MEDIA}</button>
            <button class="wrap_insurl" type="button" name="insURL" data-tarea="serendipity[extended]">URL</button>
            {serendipity_hookPlugin hook="backend_entry_toolbar_extended" data=$entry_data.entry hookAll="true"}
        </div>
    {else}
        <div id="tools_extended" class="editor_toolbar">
            {serendipity_hookPlugin hook="backend_entry_toolbar_extended" data=$entry_data.entry hookAll="true"}
        </div>
    {/if}
        <div id="extended_entry_editor">
            <textarea id="serendipity[extended]" name="serendipity[extended]" rows="15">{$entry_vars.entry.extended|escape}</textarea>
        </div>
    </div>

    <div id="edit_entry_submit">
        <button id="reset_timestamp" class="button_link" type="button" href="#serendipityNewTimestamp" data-currtime="{$entry_vars.reset_timestamp|@formatTime:'Y-m-d\TH:i':true:false:true}" title="{$CONST.RESET_DATE_DESC}"><span class="icon-clock"></span><span class="visuallyhidden"> {$CONST.RESET_DATE}</span></button>
        <a id="select_category" class="button_link icon_link" href="#edit_entry_category" title="{$CONST.CATEGORY}"><span class="icon-list-bullet"></span><span class="visuallyhidden">{$CONST.CATEGORIES}</span></a>
    {if class_exists('serendipity_event_freetag')}
        <a id="select_tags" class="button_link icon_link" href="#edit_entry_freetags" title="{$CONST.PLUGIN_EVENT_FREETAG_MANAGETAGS}"><span class="icon-tag"></span><span class="visuallyhidden">{$CONST.PLUGIN_EVENT_FREETAG_MANAGETAGS}</span></a>
    {/if}
        <button id="switch_entry_status" class="button_link" type="button" href="#edit_entry_status" title="{if $entry_vars.draft_mode == 'publish'}{$CONST.PUBLISH}{else}{$CONST.DRAFT}{/if}" data-title-alt="{if $entry_vars.draft_mode == 'publish'}{$CONST.DRAFT}{else}{$CONST.PUBLISH}{/if}">{if $entry_vars.draft_mode == 'publish'}<span class="icon-toggle-on"></span><span class="visuallyhidden"> {$CONST.PUBLISH}</span>{else}<span class="icon-toggle-off"></span><span class="visuallyhidden"> {$CONST.DRAFT}</span>{/if}</button>
        <input class="entry_preview" type="submit" value="{$CONST.PREVIEW}">
        <input type="submit" value="{$CONST.SAVE}">
    </div>

    <div id="edit_entry_metadata" class="clearfix">
        <button id="toggle_metadata" class="icon_link" type="button"><span class="icon-right-dir"></span> {$CONST.ENTRY_METADATA}</button>

        <div id="meta_data" class="additional_info">
        {if $entry_vars.allowDateManipulation}
            <div id="edit_entry_timestamp" class="form_field">
                <input name="serendipity[chk_timestamp]" type="hidden" value="{$entry_vars.timestamp|escape}">

                <label for="serendipityNewTimestamp">{$CONST.DATE}</label>
                <input id="serendipityNewTimestamp" name="serendipity[new_timestamp]" type="datetime-local" value="{$entry_vars.timestamp|@formatTime:'Y-m-d\TH:i':true:false:true}">
            </div>
        {/if}
            <div id="edit_entry_status" class="form_select">
                <label for="entry_status">{$CONST.ENTRY_STATUS}</label>
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

            <div id="edit_entry_category" class="clearfix">
                <fieldset>
                    <span class="wrap_legend"><legend>{$CONST.CATEGORY}</legend></span>

                    <div id="category_filter" class="form_field">
                        <label for="categoryfilter" class="visuallyhidden">{$CONST.FILTERS}</label>
                        <input id="categoryfilter" type="text" placeholder="{$CONST.FILTERS}: {$CONST.CATEGORIES}">
                        <button class="reset_livefilter icon_link" type="button" data-target="categoryfilter" title="{$CONST.RESET_FILTERS}"><span class="icon-cancel"></span><span class="visuallyhidden">{$CONST.RESET_FILTERS}</span></button>
                        <button id="toggle_cat_view" class="icon_link" type="button" title="{$CONST.TOGGLE_VIEW}"><span class="icon-th"></span><span class="visuallyhidden">{$CONST.TOGGLE_VIEW}</span></button>
                    </div>

                {foreach from=$entry_vars.category_options item="entry_cat"}
                    <div class="form_check">
                        <input type="hidden" name="serendipity[had_categories]" value="1">
                        <span class="cat_view_pad">{$entry_cat.depth_pad}</span>
                        <input id="serendipity_category_{$entry_cat.categoryid}" name="serendipity[categories][]" type="checkbox" value="{$entry_cat.categoryid}"{if $entry_cat.is_selected} checked="checked"{/if}>

                        <label for="serendipity_category_{$entry_cat.categoryid}">{$entry_cat.category_name|escape}</label>
                    </div>
                {/foreach}
                </fieldset>
            </div>
        </div>
    </div>

    {capture name='advanced_options'}{$entry_vars.entry|@serendipity_refhookPlugin:'backend_display'}{/capture}
    {if ! empty($smarty.capture.advanced_options) }
        <div id="advanced_options">
            <button id="toggle_advanced" class="icon_link" type="button"><span class="icon-right-dir"></span> {$CONST.ADVANCED_OPTIONS}</button>
            <div id="adv_opts" class="additional_info">
            {$smarty.capture.advanced_options}
            </div>
        </div>
    {/if}

</form>
{if $entry_vars.wysiwyg}
    {foreach from=$entry_vars.wysiwyg_blocks item="wysiwyg_block_item" key="wysiwyg_block_jsname"}
        {$wysiwyg_block_item|emit_htmlarea_code:$wysiwyg_block_jsname}
    {/foreach}
    {$entry_vars.wysiwyg_blocks|@serendipity_refhookPlugin:'backend_wysiwyg_finish'}
{/if}

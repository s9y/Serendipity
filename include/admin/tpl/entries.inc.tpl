{* HTML5: Yes *}
{* jQuery: No *}

{if $drawList}
    <form action="?" method="get">
        <input name="serendipity[action]" type="hidden" value="admin">
        <input name="serendipity[adminModule]" type="hidden" value="entries">
        <input name="serendipity[adminAction]" type="hidden" value="editSelect">

        <fieldset id="filter_entries">
            <legend><span>{$CONST.FILTERS} ({$CONST.FIND_ENTRIES})</span></legend>

            <div class="clearfix">
                <div class="form_select">
                    <label for="filter_author">{$CONST.AUTHOR}</label>
                    <select id="filter_author" name="serendipity[filter][author]">
                        <option value="">-</option>
                    {if is_array($users)}
                        {foreach $users AS $user}
                        {if isset($user.artcount) && $user.artcount < 1}{continue}{/if}
                        <option value="{$user.authorid}" {(isset($get.filter.author) && ($get.filter.author == $user.authorid)) ? 'selected' : ''}>{$user.realname|escape}</option>
                        {/foreach}
                    {/if}
                    </select>
                </div>

                <div class="form_select">
                    <label for="filter_draft">Entry status</label> {* i18n *}
                    <select id="filter_draft" name="serendipity[filter][isdraft]">
                        <option value="all">{$CONST.COMMENTS_FILTER_ALL}</option>
                        <option value="draft" {(isset($get.filter.isdraft) && ($get.filter.isdraft == 'draft') ? 'selected' : '')}>{$CONST.DRAFT}</option>
                        <option value="publish" {(isset($get.filter.isdraft) && ($get.filter.isdraft == 'publish') ? 'selected' : '')}>{$CONST.PUBLISH}</option>
                    </select>
                </div>

                <div class="form_select">
                    <label for="filter_category">{$CONST.CATEGORY}</label>
                    <select id="filter_category" name="serendipity[filter][category]">
                        <option value="">-</option>
                    {foreach $categories as $cat}
                        <option value="{$cat.categoryid}"{($get.filter.category == $cat.categoryid) ? ' selected' : ''}>{'&nbsp;'|str_repeat:$cat.depth} {$cat.category_name|escape}</option>
                    {/foreach}
                    </select>
                </div>

                <div class="form_field">
                    <label for="filter_content">{$CONST.CONTENT}</label>
                    <input id="filter_content" name="serendipity[filter][body]" type="text" value="{(isset($get.filter.body)) ? "{$get.filter.body|escape}" : ''}">
                </div>
            </div>
        </fieldset>

        <fieldset id="sort_entries">
            <legend><span>{$CONST.SORT_ORDER}</span></legend>

            <div class="clearfix">
                <div class="form_select">
                    <label for="sort_order">{$CONST.SORT_BY}</label>
                    <select id="sort_order" name="serendipity[sort][order]">
                    {foreach $sort_order as $so_key => $so_val}
                        <option value="{$so_key}" {(isset($get.sort.order) && ($get.sort.order == $so_key) ? 'selected': '')}>{$so_val}</option>
                    {/foreach}
                    </select>
                </div>

                <div class="form_select">
                    <label for="sort_ordermode">{$CONST.SORT_ORDER}</label>
                    <select id="sort_ordermode" name="serendipity[sort][ordermode]">
                        <option value="DESC" {(isset($get.sort.ordermode) && ($get.sort.ordermode == 'DESC') ? 'selected' : '')}>{$CONST.SORT_ORDER_DESC}</option>
                        <option value="ASC" {(isset($get.sort.ordermode) && ($get.sort.ordermode == 'ASC') ? 'selected' : '')}>{$CONST.SORT_ORDER_ASC}</option>
                    </select>
                </div>

                <div class="form_select">
                    <label for="sort_perpage">{$CONST.ENTRIES_PER_PAGE}</label>
                    <select id="sort_perpage" name="serendipity[sort][perPage]">
                    {foreach $per_page AS $per_page_nr}
                        <option value="{$per_page_nr}" {((isset($get.sort.perPage) && ($get.sort.perPage == $per_page_nr)) ? 'selected' : '')}> {$per_page_nr}</option>
                    {/foreach}
                    </select>
                </div>
            </div>
        </fieldset>

        <div class="form_buttons">
            <input name="go" type="submit" value="{$CONST.GO}">
        </div>
    </form>
    {if $is_entries}
    {if ($offSet > 0) || ($count > $perPage)}
    <nav class="pagination">
        <ul class="clearfix">
        {if ($offSet > 0)}
            <li><a class="icon_link" href="{$linkPrevious}" title="{$CONST.PREVIOUS}"><span class="icon-left-circled"></span><span class="visuallyhidden"> {$CONST.PREVIOUS}</span></a></li>
        {/if}
        {if ($count > $perPage)}
            <li><a class="icon_link" href="{$linkNext}" title="{$CONST.NEXT}"><span class="icon-right-circled"></span><span class="visuallyhidden"> {$CONST.NEXT}</span></a></li>
        {/if}
        </ul>
    </nav>
    {/if}

    <script src="{serendipity_getFile file='admin/admin_scripts.js'}"></script>

    <form id="formMultiDelete" action="?" method="post" name="formMultiDelete">
        {$formtoken}
        <input name="serendipity[action]" type="hidden" value="admin">
        <input name="serendipity[adminModule]" type="hidden" value="entries">
        <input name="serendipity[adminAction]" type="hidden" value="multidelete">

        <ul id="entries_list" class="plainList zebra_list">
        {foreach $entries as $entry}
            {if ($entry@index > $perPage)}{continue}{/if}
            <li class="clearfix {cycle values="odd,even"}"><div class="form_check">
                    <input id="multidelete_entry{$entry.id}" name="serendipity[multiDelete][]" type="checkbox" value="{$entry.id}"><label for="multidelete_entry{$entry.id}" class="visuallyhidden">Select #{$entry_id} for multidelete</label> {* i18n *}
                </div>

                <h3><a href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$entry.id}" title="#{$entry.id}: {$entry.title|escape}">{$entry.title|escape|truncate:50:"&hellip;"}</a></h3>

                <ul class="plainList clearfix actions">
                {if $entry.preview || (!$showFutureEntries && ($entry.timestamp >= $serverOffsetHour))}
                    <li><a class="button_link" href="{$entry.preview_link}" title="{$CONST.PREVIEW} #{$entry.id}"><span class="icon-eye"></span><span class="visuallyhidden"> {$CONST.PREVIEW}</span></a></li>
                {else}
                    <li><a class="button_link" href="{$entry.archive_link}" title="{$CONST.VIEW} #{$entry.id}"><span class="icon-eye"></span><span class="visuallyhidden"> {$CONST.VIEW}</span></a></li>
                {/if}
                    <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$entry.id}" title="{$CONST.EDIT} #{$entry.id}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                    <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=delete&amp;serendipity[id]={$entry.id}&amp;{$urltoken}" title="{$CONST.DELETE} #{$entry.id}" title="{$CONST.DELETE}"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a></li>
                </ul>

                <div class="entry_info clearfix">
                    <span class="status_timestamp">
                        {$entry.timestamp|@formatTime:"{$CONST.DATE_FORMAT_SHORT}"}{if $entry.timestamp <= ($entry.last_modified - 1800)} <a class="icon_link" href="#" title="{$CONST.LAST_UPDATED}: {$entry.last_modified|@formatTime:"{$CONST.DATE_FORMAT_SHORT}"}" onclick="alert(this.title)"><span class="icon-info-circle"></span><span class="visuallyhidden"> {$CONST.LAST_UPDATED}</span></a>{/if}
                    </span>

                    <span class="entry_meta">{$CONST.POSTED_BY} {$entry.author|escape}
                    {if count($entry.cats)} {$CONST.IN}
                      {foreach $entry.cats AS $cat}
                        {$cat}{if (count($entry.cats) > 1) && !$cat@last}, {/if}
                      {/foreach}
                    {/if}
                    </span>
                {if !$showFutureEntries && ($entry.timestamp >= $serverOffsetHour)}
                    <span class="entry_status status_future">{$CONST.ENTRY_PUBLISHED_FUTURE}</span>
                {/if}
                {if $entry.ep_is_sticky}
                    <span class="entry_status status_sticky">{$CONST.STICKY_POSTINGS}</span>
                {/if}
                {if $entry.isdraft}
                    <span class="entry_status status_draft">{$CONST.DRAFT}</span>
                {/if}
                </div>
            </li>
        {/foreach}
        </ul>
    {/if}
        <div id="multidelete_tools" class="form_buttons">
            <input name="toggle" type="button" value="{$CONST.INVERT_SELECTIONS}" onclick="invertSelection()">
            <input name="toggle" type="submit" value="{$CONST.DELETE_SELECTED_ENTRIES}">
        </div>
    </form>

    <form action="?" method="get">
        <input name="serendipity[action]" type="hidden" value="admin">
        <input name="serendipity[adminModule]" type="hidden" value="entries">
        <input name="serendipity[adminAction]" type="hidden" value="editSelect">

        <div id="entry_skip" class="form_field">
            <label for="skipto_entry">{$CONST.EDIT_ENTRY} #</label>
            <input id="skipto_entry" name="serendipity[id]" type="text" size="3">
        </div>
        
        <div class="form_buttons">
            <input name="serendipity[editSubmit]" type="submit" value="{$CONST.GO}">
        </div>
    </form>
{/if}
{if $no_entries}
    <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.NO_ENTRIES_TO_PRINT}</span>
{/if}

{if $switched_output}
    {if ($get.adminAction && $dateval)}
        <span class="msg_error"><span class="icon-attention"></span> {$CONST.DATE_INVALID}</span>
    {/if}
    {if ($get.adminAction && $use_legacy)}
        {if $is_draft}
        <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.IFRAME_SAVE_DRAFT}</span>
        {/if}
        {if $is_iframe}
        <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.IFRAME_SAVE}</span>
        {/if}
        {if $is_iframepreview}
        <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.IFRAME_PREVIEW}</span>
        {/if}
    {/if}
    {if ($is_doDelete || $is_doMultiDelete )}
        {foreach $del_entry AS $delent}
        <span class="msg_dialogue"><span class="icon-help-circle"></span> {$delent}</span>
        {/foreach}
    {/if}
    {if ( $is_delete || $is_multidelete )}
        {foreach $rip_entry AS $ripent}
        <span class="msg_dialogue"><span class="icon-help-circle"></span> {$ripent}</span>
        {/foreach}
        <div class="dialogue_delrip form_buttons">
            <a class="button_link state_submit icon_link" href="{$newLoc}">{$CONST.DUMP_IT}</a>
            <a class="button_link state_cancel icon_link" href="{$smarty.server.HTTP_REFERER|escape}">{$CONST.NOT_REALLY}</a>
        </div>
    {/if}
{/if}

{if $drawList}
<div class="has_toolbar">
    <h2>{$CONST.EDIT_ENTRIES}</h2>

    <form action="?" method="get">
        <input name="serendipity[action]" type="hidden" value="admin">
        <input name="serendipity[adminModule]" type="hidden" value="entries">
        <input name="serendipity[adminAction]" type="hidden" value="editSelect">

        <ul class="filters_toolbar plainList">
            <li><a class="button_link" href="#filter_entries" title="{$CONST.FILTERS}"><span class="icon-filter"></span><span class="visuallyhidden"> {$CONST.FILTERS}</span></a></li>
            <li><a class="button_link" href="#sort_entries" title="{$CONST.SORT_ORDER}"><span class="icon-sort"></span><span class="visuallyhidden"> {$CONST.SORT_ORDER}</span></a></li>
            {if NOT $simpleFilters}
                <li><a class="button_link" href="#entry_skip" title="{$CONST.EDIT_ENTRY} #"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT_ENTRY} #</span></a></li>
            {/if}
        </ul>

        <fieldset id="filter_entries" class="additional_info filter_pane">
            <legend class="visuallyhidden">{$CONST.FILTERS}</legend>

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
                    <label for="filter_draft">{$CONST.ENTRY_STATUS}</label>
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

        <fieldset id="sort_entries" class="additional_info filter_pane">
            <legend class="visuallyhidden">{$CONST.SORT_ORDER}</legend>

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

            <div class="form_buttons">
                <input name="go" type="submit" value="{$CONST.GO}">
            </div>
        </fieldset>
    </form>
{if NOT $simpleFilters}
    <form action="?" method="get">
        <input name="serendipity[action]" type="hidden" value="admin">
        <input name="serendipity[adminModule]" type="hidden" value="entries">
        <input name="serendipity[adminAction]" type="hidden" value="editSelect">

        <div id="entry_skip" class="clearfix additional_info filter_pane">
            <div class="form_field">
                <label for="skipto_entry">{$CONST.EDIT_ENTRY} #</label>
                <input id="skipto_entry" name="serendipity[id]" type="text" size="3">
                <input name="serendipity[editSubmit]" type="submit" value="{$CONST.GO}">
            </div>
        </div>
    </form>
{/if}

    <script>
        $(document).ready(function() {
    {foreach $filter_import AS $f_import}
        serendipity.SetCookie("entrylist_filter_{$f_import}", "{$get_filter_{$f_import}}" )
    {/foreach}
    {foreach $sort_import AS $s_import}
        serendipity.SetCookie("entrylist_sort_{$s_import}", "{$get_sort_{$s_import}}" )
    {/foreach}
        });
    </script>
    
</div>
    {if $is_entries}
    {if NOT $simpleFilters}
        <form id="formMultiDelete" action="?" method="post" name="formMultiDelete">
            {$formtoken}
            <input name="serendipity[action]" type="hidden" value="admin">
            <input name="serendipity[adminModule]" type="hidden" value="entries">
            <input name="serendipity[adminAction]" type="hidden" value="multidelete">
    {/if}

        <div class="entries_pane">
            <ul id="entries_list" class="plainList zebra_list">
            {foreach $entries as $entry}
                {if ($entry@index >= $perPage)}{continue}{/if}
                <li id="entry_{$entry.id}" class="clearfix {cycle values="odd,even"}">
                    {if NOT $simpleFilters}
                        <div class="form_check">
                            <input id="multidelete_entry{$entry.id}" class="multidelete" name="serendipity[multiDelete][]" type="checkbox" value="{$entry.id}" data-multidelid="entry_{$entry.id}"><label for="multidelete_entry{$entry.id}" class="visuallyhidden">{$CONST.TOGGLE_SELECT} (#{$entry_id})</label>
                        </div>
                    {/if}

                    <h3><a href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$entry.id}" title="#{$entry.id}: {$entry.title|escape}">{$entry.title|escape}</a></h3>

                    <ul class="plainList clearfix actions">
                    {if $entry.preview || (!$showFutureEntries && ($entry.timestamp >= $serverOffsetHour))}
                        <li><a class="button_link" href="{$entry.preview_link}" title="{$CONST.PREVIEW} #{$entry.id}"><span class="icon-search"></span><span class="visuallyhidden"> {$CONST.PREVIEW}</span></a></li>
                    {else}
                        <li><a class="button_link" href="{$entry.archive_link}" title="{$CONST.VIEW} #{$entry.id}"><span class="icon-search"></span><span class="visuallyhidden"> {$CONST.VIEW}</span></a></li>
                    {/if}
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$entry.id}" title="{$CONST.EDIT} #{$entry.id}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=delete&amp;serendipity[id]={$entry.id}&amp;{$urltoken}" title="{$CONST.DELETE} #{$entry.id}"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a></li>
                    </ul>

                    <div class="entry_info clearfix">
                        <span class="status_timestamp">
                            {$entry.timestamp|@formatTime:"{$CONST.DATE_FORMAT_SHORT}"}{if $entry.timestamp <= ($entry.last_modified - 1800)} <span class="icon-info-circled" title="{$CONST.LAST_UPDATED}: {$entry.last_modified|@formatTime:"{$CONST.DATE_FORMAT_SHORT}"}"></span><span class="visuallyhidden"> {$CONST.LAST_UPDATED}</span>{/if}
                        </span>

                        <span class="entry_meta">{$CONST.POSTED_BY} {$entry.author|escape}
                        {if count($entry.cats)} {$CONST.IN}
                          {foreach $entry.cats AS $cat}
                            <a href="{$cat.link}">{$cat.category_name|escape}</a>{if (count($entry.cats) > 1) && !$cat@last}, {/if}
                          {/foreach}
                        {/if}
                        </span>
                    {if !$showFutureEntries && ($entry.timestamp >= $serverOffsetHour)}
                        <span class="entry_status status_future">{$CONST.SCHEDULED}</span>
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
            {if ($offSet > 0) || ($count > $perPage)}
            {math equation="ceil(values/parts)" assign=totalPages values=$totalEntries parts=$perPage} 
            <nav class="pagination">
                <h3>{$CONST.PAGE_BROWSE_ENTRIES|sprintf:($page+1):$totalPages:$totalEntries}</h3>

                <ul class="clearfix">
                    <li class="prev">{if ($offSet > 0)}<a class="button_link" href="{$linkPrevious}" title="{$CONST.PREVIOUS}"><span class="icon-left-dir"></span><span class="visuallyhidden"> {$CONST.PREVIOUS}</span></a>{else}<span class="visuallyhidden">{$CONST.NO_ENTRIES_TO_PRINT}</span>{/if}</li>
                    <li class="next">{if ($count > $perPage)}<a class="button_link" href="{$linkNext}" title="{$CONST.NEXT}"><span class="visuallyhidden">{$CONST.NEXT} </span><span class="icon-right-dir"></span></a>{else}<span class="visuallyhidden">{$CONST.NO_ENTRIES_TO_PRINT}</span>{/if}</li>
                </ul>
            </nav>
            {/if}
        </div>
    {/if}
    {if NOT $simpleFilters}
        <div id="multidelete_tools" class="form_buttons">
            <input class="invert_selection" name="toggle" type="button" value="{$CONST.INVERT_SELECTIONS}">
            <input class="state_cancel" name="toggle" type="submit" value="{$CONST.DELETE}">
        </div>
        </form>
    {/if}
{/if}
{if $no_entries}
    <h2>{$CONST.FIND_ENTRIES}</h2>

    <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.NO_ENTRIES_TO_PRINT}</span>
{/if}

{if $switched_output}
    {if ($get.adminAction && $dateval)}
        <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.DATE_INVALID}</span>
    {/if}
    {if ($get.adminAction && $use_legacy)}
        {if $is_draft && ! $errors}
        <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.IFRAME_SAVE_DRAFT}</span>
        {/if}
        {if $is_iframe}
        {if $iframe === true && isset($smarty.post.serendipity.properties.lang_selected)}
        <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.PLUGIN_EVENT_MULTILINGUAL_ENTRY_RELOADED|sprintf:{(''==$smarty.post.serendipity.properties.lang_selected)?$lang:$smarty.post.serendipity.properties.lang_selected}}</span>
        {else}
        <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.IFRAME_SAVE}</span>
        {/if}
        {/if}
        {if $is_iframepreview}
        <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.IFRAME_PREVIEW}</span>
        {/if}
    {/if}
    {if ($is_doDelete || $is_doMultiDelete )}
        {foreach $del_entry AS $delent}
        <span class="msg_hint"><span class="icon-help-circled"></span> {$delent}</span>
        {/foreach}
    {/if}
    {if ( $is_delete || $is_multidelete )}
        {foreach $rip_entry AS $ripent}
        <span class="msg_hint"><span class="icon-help-circled"></span> {$ripent}</span>
        {/foreach}
        <div class="form_buttons">
            <a class="button_link state_cancel icon_link" href="{$smarty.server.HTTP_REFERER|escape}">{$CONST.NOT_REALLY}</a>
            <a class="button_link state_submit icon_link" href="{$newLoc}">{$CONST.DUMP_IT}</a>
        </div>
    {/if}
{/if}
{if $iframe !== true && !empty($iframe)}{$iframe}{/if}
{$entryForm}
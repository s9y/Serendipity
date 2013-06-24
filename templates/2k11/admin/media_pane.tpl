<script src="{serendipity_getFile file='admin/js/jquery.syncheight.js'}"></script>

<div class="has_toolbar">
    <h2>{$CONST.FIND_MEDIA}</h2>

    <form id="media_library_control" method="get" action="?">
        {$media.token}
        {$media.form_hidden}
        <ul class="filters_toolbar clearfix plainList">
            <li><a class="button_link" href="#media_pane_filter" title="Show filters"><span class="icon-filter"></span><span class="visuallyhidden"> Show filters</span></a></li> {* i18n *}
            <li><a class="button_link" href="#media_pane_sort" title="{$CONST.SORT_ORDER}"><span class="icon-sort"></span><span class="visuallyhidden"> {$CONST.SORT_ORDER}</span></a></li>
            <li id="media_selector_bar"><fieldset>
                    <input type="radio" id="serendipity[filter][fileCategory][All]" name="serendipity[filter][fileCategory]" {if $media.filter.fileCategory == ""}checked{/if} value=""></input><label for="serendipity[filter][fileCategory][All]" class="media_selector button_link">All</label><input id="serendipity[filter][fileCategory][Image]" type="radio" name="serendipity[filter][fileCategory]" {if $media.filter.fileCategory == "image"}checked{/if} value="image"></input><label for="serendipity[filter][fileCategory][Image]" class="media_selector button_link">{$CONST.IMAGE}</label><input id="serendipity[filter][fileCategory][Video]" type="radio" name="serendipity[filter][fileCategory]" {if $media.filter.fileCategory == "video"}checked{/if} value="video"></input><label for="serendipity[filter][fileCategory][Video]" class="media_selector button_link">{$CONST.VIDEO}</label>
                </fieldset>
            </li>
        </ul>

        <fieldset id="media_pane_filter" class="additional_info">
            <legend class="visuallyhidden">{$CONST.FILTERS}</legend>

            <div id="media_filter" class="clearfix">
                {foreach from=$media.sort_order item="so_val" key="so_key"}
                    <div class="{cycle values="left,center,right"}">
                    {if $so_val.type == 'date' || $so_val.type == 'intrange'}
                        <fieldset>
                            <legend><span>{$CONST.SORT_BY} ({$so_key})</span></legend>
                    {else}
                        <div class="form_{if $so_val.type == 'authors'}select{else}field{/if}">
                            <label for="serendipity_filter_{$so_key}">{$so_val.desc}</label>
                    {/if}
                    {if $so_val.type == 'date'}
                        {if $media.filter[$so_key].from != '' OR $media.filter[$so_key].to != ''}{assign var="show_filter" value=$media.filter[$so_key]}{/if}
                            <div class="form_field">
                                <label for="serendipity_filter_{$so_key}_from" class="visuallyhidden">From</label> {* i18n *}
                                <input id="serendipity_filter_{$so_key}_from" name="serendipity[filter][{$so_key}][from]" type="date" value="{$media.filter[$so_key].from|@escape}">
                                 - 
                                <label for="serendipity_filter_{$so_key}_to" class="visuallyhidden">To</label> {* i18n *}
                                <input id="serendipity_filter_{$so_key}_to" name="serendipity[filter][{$so_key}][to]" type="date" value="{$media.filter[$so_key].to|@escape}">
                            </div>
                    {elseif $so_val.type == 'intrange'}
                        {if $media.filter[$so_key].from != '' OR $media.filter[$so_key].to != ''}{assign var="show_filter" value=$media.filter[$so_key]}{/if}
                            <div class="form_field">
                                <label for="serendipity_filter_{$so_key}_from" class="visuallyhidden">From</label> {* i18n *}
                                <input id="serendipity_filter_{$so_key}_from" name="serendipity[filter][{$so_key}][from]" type="text" value="{$media.filter[$so_key].from|@escape}">
                                 - 
                                <label for="serendipity_filter_{$so_key}_to" class="visuallyhidden">To</label> {* i18n *}
                                <input id="serendipity_filter_{$so_key}_to" name="serendipity[filter][{$so_key}][to]" type="text" value="{$media.filter[$so_key].to|@escape}">
                            </div>
                    {elseif $so_val.type == 'authors'}
                        {if $media.filter[$so_key] != ''}{assign var="show_filter" value=$media.filter[$so_key]}{/if}
                            <select id="serendipity_filter_{$so_key}" name="serendipity[filter][{$so_key}]">
                                <option value="">{$CONST.ALL_AUTHORS}</option>
                            {foreach from=$media.authors item="media_author"}
                                <option value="{$media_author.authorid}"{if $media.filter[$so_key] == $media_author.authorid} selected{/if}>{$media_author.realname|@escape}</option>
                            {/foreach}
                            </select>
                    {else}
                        {if $media.filter[$so_key] != ''}{assign var="show_filter" value=$media.filter[$so_key]}{/if}
                            {* TODO: needs a label … but what IS this? *}
                            <input id="serendipity_filter_{$so_key}" name="serendipity[filter][{$so_key}]" type="text" value="{$media.filter[$so_key]|@escape}">
                    {/if}
                    {if $so_val.type == 'date' || $so_val.type == 'intrange'}
                        </fieldset>
                    {else}
                        </div>
                    {/if}
                    </div>
                {/foreach}
                <div id="media_filter_path" class="form_select">
                    <label for="serendipity_only_path">{$CONST.FILTER_DIRECTORY}</label>
                    <select id="serendipity_only_path" name="serendipity[only_path]">
                        <option value="">{if NOT $media.limit_path}{$CONST.ALL_DIRECTORIES}{else}{$media.blimit_path}{/if}</option>
                    {foreach from=$media.paths item="folder"}
                        <option{if ($media.only_path == $media.limit_path|cat:$folder.relpath)} selected{/if} value="{$folder.relpath}">{'&nbsp;'|str_repeat:($folder.depth*2)}{$folder.name}</option>
                    {/foreach}
                    </select>
                </div>

                <div id="media_filter_file" class="form_field">
                    <label for="serendipity_only_filename">{$CONST.SORT_ORDER_NAME}</label>
                    <input id="serendipity_only_filename" name="serendipity[only_filename]" type="text" value="{$media.only_filename|@escape}">
                </div>

                <div class="form_field">
                    <label for="keyword_input">{$CONST.MEDIA_KEYWORDS}</label>
                    <input id="keyword_input" name="serendipity[keywords]" type="text" value="{$media.keywords_selected|@escape}">

                    <div id="keyword_list" class="clearfix">
                    {foreach from=$media.keywords item="keyword"}
                        <a class="add_keyword" href="#" data-keyword="{$keyword|@escape}">{$keyword|@escape}</a>
                    {/foreach}
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset id="media_pane_sort" class="additional_info">
            <legend class="visuallyhidden">{$CONST.SORT_ORDER}</legend>
            <div class="clearfix grouped">
                <div class="form_select">
                    <label for="serendipity_sortorder_order">{$CONST.SORT_BY}</label>

                    <select id="serendipity_sortorder_order" name="serendipity[sortorder][order]">
                    {foreach from=$media.sort_order item="so_val" key="so_key"}
                        <option value="{$so_key}"{if $media.sortorder.order == $so_key} selected{/if}>{$so_val.desc}</option>
                    {/foreach}
                    </select>
                </div>

                <div class="form_select">
                    <label for="serendipity_sortorder_ordermode">{$CONST.SORT_ORDER}</label>
                    
                    <select id="serendipity_sortorder_ordermode" name="serendipity[sortorder][ordermode]">
                        <option value="DESC"{if $media.sortorder.ordermode == 'DESC'} selected{/if}>{$CONST.SORT_ORDER_DESC}</option>
                        <option value="ASC"{if $media.sortorder.ordermode == 'ASC'} selected{/if}>{$CONST.SORT_ORDER_ASC}</option>
                    </select>
                </div>

                <div class="form_select">
                    <label for="serendipity_sortorder_perpage">{$CONST.FILES_PER_PAGE}</label>

                    <select id="serendipity_sortorder_perpage" name="serendipity[sortorder][perpage]">
                    {foreach from=$media.sort_row_interval item="so_val"}
                        <option value="{$so_val}"{if $media.perPage == $so_val} selected{/if}>{$so_val}</option>
                    {/foreach}
                    </select>
                </div>
            </div>

            <div class="form_buttons">
                <input name="go" type="submit" value="{$CONST.GO}">
            </div>
        </fieldset>
        <script>
            $(document).ready(function() {
            {foreach $media.sortParams AS $sortParam}
                serendipity.SetCookie("sortorder_{$sortParam}","{$get_sortorder_{$sortParam}}" )
            {/foreach}

            {foreach $media.filterParams AS $filterParam}
                serendipity.SetCookie("{$filterParam}", "{$get_{$filterParam}}" )
            {/foreach}
            });
        </script>
    </form>
</div>
{if $media.nr_files < 1}
    <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.NO_IMAGES_FOUND}</span>
{else}
    {if $smarty.get.serendipity.adminModule == 'media'}
    <form id="formMultiDelete" name="formMultiDelete" action="?" method="post">
        {$media.token}
        <input name="serendipity[action]" type="hidden" value="admin">
        <input name="serendipity[adminModule]" type="hidden" value="media">
        <input name="serendipity[adminAction]" type="hidden" value="multidelete">
    {/if}
    <div class="clearfix media_pane" data-thumbmaxwidth="{$media.thumbSize}">
        {$MEDIA_ITEMS}
        {if ($media.page != 1 && $media.page <= $media.pages)||$media.page != $media.pages}
        <nav class="pagination">
            <h3>{$CONST.PAGE_BROWSE_ENTRIES|sprintf:$media.page:$media.pages:$media.totalImages}</h3> {* i18n *}

            <ul class="clearfix">
                <li class="prev">{if $media.page != 1 AND $media.page <= $media.pages}<a class="button_link" href="{$media.linkPrevious}" title="{$CONST.PREVIOUS}"><span class="icon-left-open"></span><span class="visuallyhidden"> {$CONST.PREVIOUS}</span></a>{else}<span class="visuallyhidden">{$CONST.NO_ENTRIES_TO_PRINT}</span>{/if}</li>
                <li class="next">{if $media.page != $media.pages}<a class="button_link" href="{$media.linkNext}" title="{$CONST.NEXT}"><span class="visuallyhidden">{$CONST.NEXT} </span><span class="icon-right-open"></span></a>{else}<span class="visuallyhidden">{$CONST.NO_ENTRIES_TO_PRINT}</span>{/if}</li>
            </ul>
        </nav>
        {/if}
    </div>
    {if $smarty.get.serendipity.adminModule == 'media'}
        <div class="form_buttons">
            <input class="invert_selection" name="toggle" type="button" value="{$CONST.INVERT_SELECTIONS}">
            <input class="state_cancel" name="toggle" type="submit" value="{$CONST.DELETE_SELECTED_ENTRIES}">
        </div>
    </form>
    {/if}
{/if}

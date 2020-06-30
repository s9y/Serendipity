<div class="has_toolbar">
    <h2>{$CONST.EDIT_SUBSCRIPTIONS}</h2>

    <form action="?" method="get">
        <input name="serendipity[action]" type="hidden" value="admin">
        <input name="serendipity[adminModule]" type="hidden" value="subscriptions">
        <input name="serendipity[adminAction]" type="hidden" value="show">

        <ul class="filters_toolbar plainList">
            <li><a class="button_link" href="#filter_subscriptions" title="{$CONST.FILTERS}"><span class="icon-filter" aria-hidden="true"></span><span class="visuallyhidden"> {$CONST.FILTERS}</span></a></li>
            <li><a class="button_link" href="#sort_subscriptions" title="{$CONST.SORT_ORDER}"><span class="icon-sort" aria-hidden="true"></span><span class="visuallyhidden"> {$CONST.SORT_ORDER}</span></a></li>
        </ul>

        <fieldset id="filter_subscriptions" class="additional_info filter_pane">
            <legend class="visuallyhidden">{$CONST.FILTERS} ({$CONST.FIND_SUBSCRIPTIONS})</legend>

            <div class="clearfix">
                <div class="form_field">
                    <label for="filter_email">{$CONST.EMAIL}:</label>
                    <input id="filter_email" name="serendipity[filter][email]" type="text" size="30">
                </div>

                <div class="form_select">
                    <label for="filter_type">{$CONST.SUBSCRIPTION_TYPE}</label>
                    <select id="filter_type" name="serendipity[filter][type]">
                        <option value="all">{$CONST.COMMENTS_FILTER_ALL}</option>
                        <option value="entry" {(isset($get.filter.type) && ($get.filter.type == 'entry') ? 'selected' : '')}>{$CONST.ENTRY}</option>
                        <option value="blog" {(isset($get.filter.type) && ($get.filter.type == 'blog') ? 'selected' : '')}>{$CONST.BLOG}</option>
                        <option value="category" {(isset($get.filter.type) && ($get.filter.type == 'category') ? 'selected' : '')}>{$CONST.CATEGORY}</option>
                        <option value="author" {(isset($get.filter.type) && ($get.filter.type == 'author') ? 'selected' : '')}>{$CONST.AUTHOR}</option>
                    </select>
                </div>

                <div class="form_select">
                    <label for="filter_state">{$CONST.SUBSCRIPTION_STATE}</label>
                    <select id="filter_state" name="serendipity[filter][state]">
                        <option value="all">{$CONST.COMMENTS_FILTER_ALL}</option>
                        <option value="subscribed" {(isset($get.filter.state) && ($get.filter.type == 'subscribed') ? 'selected' : '')}>{$CONST.SUBSCRIBED}</option>
                        <option value="optin" {(isset($get.filter.state) && ($get.filter.type == 'optin') ? 'selected' : '')}>{$CONST.OPTIN_PENDING}</option>
                    </select>
                </div>
            </div>
        </fieldset>

        <fieldset id="sort_subscriptions" class="additional_info filter_pane">
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

    <script>
        $(document).ready(function() {
    {foreach $filter_import AS $f_import}
        serendipity.SetCookie("subscriptionlist_filter_{$f_import}", "{$get_filter_{$f_import}}" )
    {/foreach}
    {foreach $sort_import AS $s_import}
        serendipity.SetCookie("subscriptionlist_sort_{$s_import}", "{$get_sort_{$s_import}}" )
    {/foreach}
        });
    </script>

</div>
    {if $is_subscriptions}
    {if $count > 1 }
        <form id="formMultiDelete" action="?" method="post" name="formMultiDelete">
            {$formtoken}
            <input name="serendipity[action]" type="hidden" value="admin">
            <input name="serendipity[adminModule]" type="hidden" value="subscriptions">
            <input name="serendipity[adminAction]" type="hidden" value="multidelete">
        {/if}
        <div class="subscriptions_pane">
            <ul id="subscriptions_list" class="plainList zebra_list">
            {foreach $subscriptions as $subscription}
                {if ($subscription@index >= $perPage)}{continue}{/if}
                <li id="subscription_{$subscription.id}" class="clearfix {cycle values="odd,even"}">
                    {if $subscriptions|@count > 1 }
                    <div class="form_check">
                        <input id="multidelete_subscription{$subscription.id}" class="multidelete" name="serendipity[multiDelete][]" type="checkbox" value="{$subscription.id}" data-multidelid="subscription_{$subscription.id}"><label for="multidelete_subscriptions{$subscription.id}" class="visuallyhidden">{$CONST.TOGGLE_SELECT} (#{$subscription_id})</label>
                    </div>
                    {/if}
                    <h3 class="subscription_email">
                        {$subscription.email}
                    </h3>

                    <ul class="plainList clearfix actions">
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=subscriptions&amp;serendipity[adminAction]=delete&amp;serendipity[id]={$subscription.id}&amp;{$urltoken}" title="{$CONST.DELETE} #{$subscription.id}"><span class="icon-trash" aria-hidden="true"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a></li>
                    </ul>

                    <div class="subscription_info clearfix">

                        <span class="subscription_type">
                            {$subscription.type}
                        </span>

                        <span class="status_timestamp">
                            {$subscription.timestamp|formatTime:"{$CONST.DATE_FORMAT_SHORT}"}
                        </span>

                    {if $subscription.type != $CONST.BLOG}
                        <span class="subscription_target">
                            {$subscription.target}
                        </span>
                    {/if}

                    {if $subscription.subscribed == 'false'}
                        <span class="subscription_status status_optin">{$CONST.OPTIN_PENDING}</span>
                    {/if}
                    </div>
                </li>
            {/foreach}
            </ul>
            {if ($offSet > 0) || ($count > $perPage)}
            {math equation="ceil(values/parts)" assign=totalPages values=$totalSubscriptions parts=$perPage}
            <nav class="pagination">
                <h3>{$CONST.PAGE_BROWSE_SUBSCRIPTIONS|sprintf:($page+1):$totalPages:$totalSubscriptions}</h3>

                <ul class="clearfix">
                    <li class="prev">{if ($offSet > 0)}<a class="button_link" href="{$linkPrevious}" title="{$CONST.PREVIOUS}"><span class="icon-left-dir" aria-hidden="true"></span><span class="visuallyhidden"> {$CONST.PREVIOUS}</span></a>{else}<span class="visuallyhidden">{$CONST.NO_SUBSCRIPTIONS_TO_PRINT}</span>{/if}</li>
                    <li class="next">{if ($count > $perPage)}<a class="button_link" href="{$linkNext}" title="{$CONST.NEXT}"><span class="visuallyhidden">{$CONST.NEXT} </span><span class="icon-right-dir" aria-hidden="true"></span></a>{else}<span class="visuallyhidden">{$CONST.NO_SUBSCRIPTIONS_TO_PRINT}</span>{/if}</li>
                </ul>
            </nav>
            {/if}
        </div>
    {/if}
{if $count > 1 }
        <div id="multidelete_tools" class="form_buttons">
            <input class="invert_selection" name="toggle" type="button" value="{$CONST.INVERT_SELECTIONS}">
            <input class="state_cancel" name="toggle" type="submit" value="{$CONST.DELETE}">
        </div>
        </form>
    {/if}

{if $no_subscriptions}

    <span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span> {$CONST.NO_SUBSCRIPTIONS_TO_PRINT}</span>
{/if}

{if $switched_output}
    {if ($is_doDelete || $is_doMultiDelete )}
        {foreach $del_sub AS $delsub}
        <span class="msg_hint"><span class="icon-info-circled" aria-hidden="true"></span> {$delsub}</span>
        {/foreach}
    {/if}
    {if ( $is_delete || $is_multidelete )}
        {foreach $rip_subscription AS $ripsub}
        <span class="msg_hint"><span class="icon-help-circled" aria-hidden="true"></span> {$ripsub}</span>
        {/foreach}
        <div class="form_buttons">
            <a class="button_link state_cancel icon_link" href="{$smarty.server.HTTP_REFERER|escape}">{$CONST.NOT_REALLY}</a>
            <a class="button_link state_submit icon_link" href="{$newLoc}">{$CONST.DUMP_IT}</a>
        </div>
    {/if}
{/if}

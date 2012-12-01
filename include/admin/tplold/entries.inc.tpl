{if $drawList}

<div class="serendipity_admin_list">

    <form action="?" method="get">
        <input type="hidden" name="serendipity[action]"      value="admin"      />
        <input type="hidden" name="serendipity[adminModule]" value="entries"    />
        <input type="hidden" name="serendipity[adminAction]" value="editSelect" />
        <table width="100%" class="serendipity_admin_filters">
            <tr>
                <td class="serendipity_admin_filters_headline" colspan="6"><strong>{$CONST.FILTERS}</strong> - {$CONST.FIND_ENTRIES}</td>
            </tr>
            <tr>
                <td valign="top" width="80">{$CONST.AUTHOR}</td>
                <td valign="top">
                    <select name="serendipity[filter][author]">
                        <option value="">--</option>
                        {if is_array($users)}
                            {foreach $users AS $user}
                                {if isset($user.artcount) && $user.artcount < 1}{continue}{/if}
                                <option value="{$user.authorid}" {(isset($get.filter.author) && ($get.filter.author == $user.authorid)) ? 'selected="selected"' : ''}>{$user.realname|escape}</option>
                            {/foreach}
                        {/if}
                    </select> 
                    <select name="serendipity[filter][isdraft]">
                        <option value="all">{$CONST.COMMENTS_FILTER_ALL}</option>
                        <option value="draft"   {(isset($get.filter.isdraft) &&  ($get.filter.isdraft == 'draft') ? 'selected="selected"' : '')}>{$CONST.DRAFT}</option>
                        <option value="publish" {(isset($get.filter.isdraft) &&  ($get.filter.isdraft == 'publish') ? 'selected="selected"' : '')}>{$CONST.PUBLISH}</option>
                    </select>
                </td>
                <td valign="top" width="80">{$CONST.CATEGORY}</td>
                <td valign="top">
                    <select name="serendipity[filter][category]">
                        <option value="">--</option>
                        {foreach $categories as $cat}
                            <option value="{$cat.categoryid}"{($get.filter.category == $cat.categoryid) ? ' selected="selected"' : ''}>{'&nbsp;'|str_repeat:$cat.depth} {$cat.category_name|escape}</option>
                        {/foreach}
                    </select>
                </td>
                <td valign="top" width="80">{$CONST.CONTENT}</td>
                <td valign="top"><input class="input_textbox" size="10" type="text" name="serendipity[filter][body]" value="{(isset($get.filter.body)) ? "{$get.filter.body|escape}" : ''}" /></td>
            </tr>
            <tr>
                <td class="serendipity_admin_filters_headline" colspan="6"><strong>{$CONST.SORT_ORDER}</strong></td>
            </tr>
            <tr>
                <td>
                    {$CONST.SORT_BY}
                </td>
                <td>
                    <select name="serendipity[sort][order]">
                    {foreach $sort_order as $so_key => $so_val}
                        <option value="{$so_key}" {(isset($get.sort.order) && ($get.sort.order == $so_key) ? 'selected="selected"': '')}>{$so_val}</option>
                    {/foreach}
                    </select>
                </td>
                <td>{$CONST.SORT_ORDER}</td>
                <td>
                    <select name="serendipity[sort][ordermode]">
                        <option value="DESC" {(isset($get.sort.ordermode) && ($get.sort.ordermode == 'DESC') ? 'selected="selected"' : '')}>{$CONST.SORT_ORDER_DESC}</option>
                        <option value="ASC" {(isset($get.sort.ordermode) && ($get.sort.ordermode == 'ASC') ? 'selected="selected"' : '')}>{$CONST.SORT_ORDER_ASC}</option>
                    </select>
                </td>
                <td>{$CONST.ENTRIES_PER_PAGE}</td>
                <td>
                    <select name="serendipity[sort][perPage]">
                    {foreach $per_page AS $per_page_nr}
                        <option value="{$per_page_nr}" {((isset($get.sort.perPage) && ($get.sort.perPage == $per_page_nr)) ? 'selected="selected"' : '')}>{$per_page_nr}</option>
                    {/foreach}
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right" colspan="6"><input type="submit" name="go" value="{$CONST.GO}" class="serendipityPrettyButton input_button" /></td>
            </tr>
        </table>

    </form>

    {if $is_entries}

    <table class="serendipity_admin_list" cellpadding="5" width="100%">

        <tr>
            <td>
                {if $offSet > 0}
                    <a href="{$linkPrevious}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/previous.png'}" />{$CONST.PREVIOUS}</a>
                {/if}
            </td>
            <td align="right">
                {if $count > $perPage}
                    <a href="{$linkNext}" class="serendipityIconLinkRight">{$CONST.NEXT}<img src="{serendipity_getFile file='admin/img/next.png'}" /></a>
                {/if}
            </td>
        </tr>

    </table>

    <script type="text/javascript" language="JavaScript" src="{serendipity_getFile file='admin/admin_scripts.js'}"></script>

    <form action="?" method="post" name="formMultiDelete" id="formMultiDelete">
        {$formtoken}
        <input type="hidden" name="serendipity[action]" value="admin" />
        <input type="hidden" name="serendipity[adminModule]" value="entries" />
        <input type="hidden" name="serendipity[adminAction]" value="multidelete" />

        {foreach $entries as $entry}
            {if ($entry@index > $perPage)}{continue}{/if}

            <div class="serendipity_admin_list_item serendipity_admin_list_item_{($entry@index % 2) ? 'even' : 'uneven'}">

                <table width="100%" cellspacing="0" cellpadding="3">
                    <tr>
                        <td>
                            <strong>{if (!$showFutureEntries) && ($entry.timestamp >= $serverOffsetHour)}<a href="#" title="{$CONST.ENTRY_PUBLISHED_FUTURE}" onclick="alert(this.title)"><img src="{serendipity_getFile file='admin/img/clock_future.png'}" alt="*" style="border: 0px none ; vertical-align: bottom;" /></a> {else}{/if}{if $entry.ep_is_sticky} {$CONST.STICKY_POSTINGS}: {/if}{if $entry.isdraft}{$CONST.DRAFT}: {/if}<a href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$entry.id}" title="#{$entry.id}">{$entry.title|escape|truncate:50:"&hellip;"}</a></strong>
                        </td>
                        <td align="right">
                            {* Find out if the entry has been modified later than 30 minutes after creation *}
                            {$entry.timestamp|@formatTime:"{$CONST.DATE_FORMAT_SHORT}"} {if $entry.timestamp <= ($entry.last_modified - (60*30))}<a href="#" title="{$CONST.LAST_UPDATED}: {$entry.last_modified|@formatTime:"{$CONST.DATE_FORMAT_SHORT}"}" onclick="alert(this.title)"><img src="{serendipity_getFile file='admin/img/clock.png'}" alt="*" style="border: 0px none ; vertical-align: bottom;" /></a>{else}{/if}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {$CONST.POSTED_BY} {$entry.author|escape}
                        {if count($entry.cats)}
                            {$CONST.IN}
                            {foreach $entry.cats AS $cat}
                                {$cat}{if (count($entry.cats) > 1) && !$cat@last}, {/if}
                            {/foreach}
                        {/if}

                        </td>
                        <td align="right">
                            {if $entry.preview || (!$showFutureEntries && ($entry.timestamp >= $serverOffsetHour))}
                            <a href="{$entry.preview_link}" title="{$CONST.PREVIEW} #{$entry.id}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/zoom.png'}" alt="{$CONST.PREVIEW}" />{$CONST.PREVIEW}</a>
                            {else}
                            <a href="{$entry.archive_link}" title="{$CONST.VIEW} #{$entry.id}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/zoom.png'}" alt="{$CONST.VIEW}" />{$CONST.VIEW}</a>
                            {/if}
                            <a href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$entry.id}" title="{$CONST.EDIT} #{$entry.id}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/edit.png'}" alt="{$CONST.EDIT}" />{$CONST.EDIT}</a>
                            <a href="?{$urltoken}&amp;serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=delete&amp;serendipity[id]={$entry.id}" title="{$CONST.DELETE} #{$entry.id}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/delete.png'}" alt="{$CONST.DELETE}" />{$CONST.DELETE}</a>
                            <input class="input_checkbox" type="checkbox" name="serendipity[multiDelete][]" value="{$entry.id}" />
                        </td>
                    </tr>
                </table>

            </div>

        {/foreach}

    {/if} {* end is_entries *}

        <table class="serendipity_admin_list" cellpadding="5" width="100%">
            <tr>
                <td>
                    {if $offSet > 0}
                        <a href="{$linkPrevious}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/previous.png'}" />{$CONST.PREVIOUS}</a>
                    {/if}
                </td>
                <td align="right">
                    {if $count > $perPage}
                        <a href="{$linkNext}" class="serendipityIconLinkRight">{$CONST.NEXT}<img src="{serendipity_getFile file='admin/img/next.png'}" /></a>
                    {/if}
                </td>
            </tr>
        </table>

        <table class="serendipity_admin_list" cellpadding="0" width="100%">
            <tr>
                <td align="right">
                    <input type="button" name="toggle" value="{$CONST.INVERT_SELECTIONS}" onclick="invertSelection()" class="serendipityPrettyButton input_button" />
                    <input type="submit" name="toggle" value="{$CONST.DELETE_SELECTED_ENTRIES}" class="serendipityPrettyButton input_button" />
                </td>
            </tr>
        </table>

    </form>

    <div class="serendipity_admin_list_item serendipity_admin_list_item_{(($entry@index+1) % 2) ? 'even' : 'uneven'}">
        <table width="100%" cellspacing="0" cellpadding="3">
            <tr>
                <td>
                    <form action="?" method="get">
                        <input type="hidden" name="serendipity[action]"      value="admin"      />
                        <input type="hidden" name="serendipity[adminModule]" value="entries"    />
                        <input type="hidden" name="serendipity[adminAction]" value="editSelect" />
                        {$CONST.EDIT_ENTRY}: #<input class="input_textbox" type="text" size="3" name="serendipity[id]" /> <input type="submit" name="serendipity[editSubmit]" value="{$CONST.GO}" class="serendipityPrettyButton input_button" />
                    </form>
                </td>
            </tr>
        </table>
    </div>

</div><!-- // div.serendipity_admin_list drawList end -->

{/if}{* $drawList end *}
{if ( ( (!$switched_output && empty($entries)) || (!$drawList && empty($entries)) ) && ( $get.adminAction != 'new' &&  $get.adminAction != 'edit' ) && !$is_iframepreview )}

<div class="serendipity_admin_list">

    {* We've got nothing *}
    <table class="serendipity_admin_list" cellpadding="0" width="100%">

        <tr>
            <td align="center" class="serendipityAdminMsgNote msg_notice">
                <img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_note.png'}" alt="" />
                {$CONST.NO_ENTRIES_TO_PRINT}
            </td>
        </tr>

    </table>

</div><!-- // div.serendipity_admin_list no entries end -->

{/if}

{if $switched_output}
{if ($get.adminAction && $dateval)}
    {$CONST.DATE_INVALID}
    <br />
{/if}
{if ($get.adminAction && $use_legacy)}
    {if $is_draft}
    <div class="serendipityAdminMsgSuccess msg_success"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />{$CONST.IFRAME_SAVE_DRAFT}</div><br />
    {/if}
    {if $is_iframe}
    <div class="serendipityAdminMsgSuccess msg_success"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />{$CONST.IFRAME_SAVE}</div><br />
    {/if}
    {if $is_iframepreview}
    <div class="serendipityAdminMsgSuccess msg_success"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />{$CONST.IFRAME_PREVIEW}</div><br />
    {/if}
{/if}
{if ($is_doDelete || $is_doMultiDelete )}
    {foreach $del_entry AS $delent}
        {$delent}
        <br />
    {/foreach}
{/if}
{if ( $is_delete || $is_multidelete )}
    {* delent and ripent look like $CONST.DELETE_SURE|sprintf:"$del_entry_id - $del_entry_title" *}
    {foreach $rip_entry AS $ripent}
        {$ripent}
        <br />
    {/foreach}
<br />
<br />
<div>
    <a href="{$smarty.server.HTTP_REFERER|escape}" class="serendipityPrettyButton input_button">{$CONST.NOT_REALLY}</a>
    {'&nbsp;'|str_repeat:10}
    <a href="{$newLoc}" class="serendipityPrettyButton input_button">{$CONST.DUMP_IT}</a>
</div>
{/if}
{/if}

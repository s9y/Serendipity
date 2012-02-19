<div class="serendipity_admin_list">

{if $drawList}

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
                                {if isset($user.artcount) && $user.artcount < 1} 
                                    {continue}
                                <option value="{$user.authorid}" {(isset($smarty.get.filter.author) && ($smarty.get.filter.author == $user.authorid)) ? 'selected="selected"' : ''}>{$user.realname|escape}</option>
                                {/if}
                            {/foreach}
                        {/if}
                    </select> 
                    <select name="serendipity[filter][isdraft]">
                        <option value="all">{$CONST.COMMENTS_FILTER_ALL}</option>
                        <option value="draft"   {(isset($smarty.get.filter.isdraft) &&  ($smarty.get.filter.isdraft == 'draft') ? 'selected="selected"' : '')}>{$CONST.DRAFT}</option>
                        <option value="publish" {(isset($smarty.get.filter.isdraft) &&  ($smarty.get.filter.isdraft == 'publish') ? 'selected="selected"' : '')}>{$CONST.PUBLISH}</option>
                    </select>
                </td>
                <td valign="top" width="80">{$CONST.CATEGORY}</td>
                <td valign="top">
                    <select name="serendipity[filter][category]">
                        <option value="">--</option>
                        {foreach $categories as $cat}
                            <option value="{$cat.categoryid}"{($smarty.get.filter.category == $cat.categoryid) ? ' selected="selected"' : ''}>{'&nbsp;'|str_repeat:$cat.depth} {$cat.category_name|escape}</option>
                        {/foreach}
                    </select>
                </td>
                <td valign="top" width="80">{$CONST.CONTENT}</td>
                <td valign="top"><input class="input_textbox" size="10" type="text" name="serendipity[filter][body]" value="{(isset($smarty.get.filter.body)) ? "$smarty.get.filter.body|escape" : ''}" /></td>
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
                        <option value="{$so_key}" {(isset($smarty.get.sort.order) && ($smarty.get.sort.order == $so_key) ? 'selected="selected"': '')}>{$so_val}</option>
                    {/foreach}
                    </select>
                </td>
                <td>{$CONST.SORT_ORDER}</td>
                <td>
                    <select name="serendipity[sort][ordermode]">
                        <option value="DESC" {(isset($smarty.get.sort.ordermode) && ($smarty.get.sort.ordermode == 'DESC') ? 'selected="selected"' : '')}>{$CONST.SORT_ORDER_DESC}</option>
                        <option value="ASC" {(isset($smarty.get.sort.ordermode) && ($smarty.get.sort.ordermode == 'ASC') ? 'selected="selected"' : '')}>{$CONST.SORT_ORDER_ASC}</option>
                    </select>
                </td>
                <td>{$CONST.ENTRIES_PER_PAGE}</td>
                <td>
                    <select name="serendipity[sort][perPage]">
                    {foreach $per_page AS $per_page_nr}
                        <option value="{$per_page_nr}" {(isset($smarty.get.sort.perPage) && ($smarty.get.sort.perPage == $per_page_nr) ? 'selected="selected"' : '')}>{$per_page_nr}</option>
                    {/foreach}
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right" colspan="6"><input type="submit" name="go" value="{$CONST.GO}" class="serendipityPrettyButton input_button" /></td>
            </tr>
        </table>

    </form>

    {if is_array($entries)}

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

    <script type="text/javascript">
    {literal}
    function invertSelection() {
        var f = document.formMultiDelete;
        for (var i = 0; i < f.elements.length; i++) {
            if (f.elements[i].type == 'checkbox') {
                f.elements[i].checked = !(f.elements[i].checked);
            }
        }
    }
    {/literal}
    </script>

    <form action="?" method="post" name="formMultiDelete" id="formMultiDelete">
        {$formtoken}
        <input type="hidden" name="serendipity[action]" value="admin" />
        <input type="hidden" name="serendipity[adminModule]" value="entries" />
        <input type="hidden" name="serendipity[adminAction]" value="multidelete" />

        {foreach $entries as $entry}
            {if ($entry@index > $perPage)}
                {continue}
            {/if}

            <div class="serendipity_admin_list_item serendipity_admin_list_item_{($entry@index % 2) ? 'even' : 'uneven'}">

                <table width="100%" cellspacing="0" cellpadding="3">
                    <tr>
                        <td>
                            <strong>{if (!$serendipity.showFutureEntries) && ($entry.timestamp >= $serverOffsetHour)}<a href="#" title="{$CONST.ENTRY_PUBLISHED_FUTURE}" onclick="alert(this.title)"><img src="{serendipity_getFile file='admin/img/clock_future.png'}" alt="*" style="border: 0px none ; vertical-align: bottom;" /></a> {else}{/if}{if $entry.properties.ep_is_sticky == true} {$CONST.STICKY_POSTINGS}: {/if}{if $entry.isdraft == true}{$CONST.DRAFT}: {/if}<a href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$entry.id}" title="#{$entry.id}">{$entry.title|escape|truncate:50:"&hellip;"}</a></strong>
                        </td>
                        <td align="right">
                            {* Find out if the entry has been modified later than 30 minutes after creation *}
                            {$entry.timestamp|@formatTime:"DATE_FORMAT_SHORT"} {if $entry.timestamp <= ($entry.last_modified - (60*30))}<a href="#" title="{$CONST.LAST_UPDATED}: {$entry.last_modified|@formatTime:"$CONST.DATE_FORMAT_SHORT"}" onclick="alert(this.title)"><img src="{serendipity_getFile file='admin/img/clock.png'}" alt="*" style="border: 0px none ; vertical-align: bottom;" /></a>{else}{/if}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {$CONST.POSTED_BY} {$entry.author|escape}
                        {if count($entry.categories)}
                            {$CONST.IN}
                            {foreach $entry.categories as $cat}
                                {$caturl = serendipity_categoryURL($cat)}{* serendipity_categoryURL($cat) entweder die fnction in security setting aufnehmen oder nachbilden oder raus *}
                                {$cats[] = '<a href="{$caturl}">{$cat.category_name|escape)}</a>'}
                            {/foreach}
                            {foreach $cats AS $implode_cat}
                                {$implode_cat}{if !$implode_cat@last}, {/if}
                            {/foreach}
                        {/if}

                        {* Smarty3 allows you to {$var = ['foo' => 'bar', 'sub' => [1, 2, 3]]} and {$var.foo = 'other'} *}
                        {* $tst = ['timestamp' => $entry.timestamp] *}

                        </td>
                        <td align="right">
                            {if ($entry.isdraft == true) || (!$showFutureEntries && ($entry.timestamp >= $serverOffsetHour))}
                            <a target="_blank" href="?serendipity[noBanner]=true&amp;serendipity[noSidebar]=true&amp;serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=preview&amp;serendipity[id]={$entry.id}&amp;{$urltoken}" title="{$CONST.PREVIEW} #{$entry.id}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/zoom.png'}" alt="{$CONST.PREVIEW}" />{$CONST.PREVIEW}</a>
                            {else}
                            <a target="_blank" href="{serendipity_archiveURL($entry.id, $entry.title, "serendipityHTTPPath", true, ['timestamp' => $entry.timestamp])}" title="{$CONST.VIEW} #{$entry.id}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/zoom.png'}" alt="{$CONST.VIEW}" />{$CONST.VIEW}</a>
                            {/if}
                            <a href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$entry.id}" title="{$CONST.EDIT} #{$entry.id}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/edit.png'}" alt="{$CONST.EDIT}" />{$CONST.EDIT}</a>
                            <a href="?{$urltoken}&amp;serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=delete&amp;serendipity[id]={$entry.id}" title="{$CONST.DELETE} #{$entry.id}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/delete.png'}" alt="{$CONST.DELETE}" />{$CONST.DELETE}</a>
                            <input class="input_checkbox" type="checkbox" name="serendipity[multiDelete][]" value="{$entry.id}" />
                        </td>
                    </tr>
                </table>

            </div>

        {/foreach}

        {/if} {* end entries output *}

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

 {else}
    {* We've got nothing *}
    <table class="serendipity_admin_list" cellpadding="0" width="100%">

        <tr>
            <td align="center" class="serendipityAdminMsgNote">
                <img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file='admin/img/admin_msg_note.png'}" alt="" />
                {$CONST.NO_ENTRIES_TO_PRINT}
            </td>
        </tr>

    </table>
{/if}{* $drawList end *}

</div><!-- // div.serendipity_admin_list end -->

{if ($marty.get.adminAction && $use_legacy)}
    {if $is_Draft}
    <div class="serendipityAdminMsgSuccess"><img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />{$CONST.IFRAME_SAVE_DRAFT}</div><br />
    {/if}
    {if $is_iframe}
    <div class="serendipityAdminMsgSuccess"><img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />{$CONST.IFRAME_SAVE}</div><br />
    {/if}
    {if $is_iframepreview}
    <div class="serendipityAdminMsgSuccess"><img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />{$CONST.IFRAME_PREVIEW}</div><br />
    {/if}
{/if}
{if ($marty.get.adminAction && $is_doDelete)}
    {foreach $rip_entry AS $rip}
        {$rip}
        <br />
    {/foreach}
{/if}
{if ($marty.get.adminAction && $is_doMultiDelete)}
    {foreach $delete_entry AS $erase}
        {$erase}
        <br />
    {/foreach}
{/if}
{if ($marty.get.adminAction && ( $is_delete || $is_multidelete ))}
<br />
<br />
<div>
    <a href="{$smarty.server.HTTP_REFERER|escape}" class="serendipityPrettyButton input_button">{$CONST.NOT_REALLY}</a>
    {'&nbsp;'|str_repeat:10}
    <a href="{$newLoc}" class="serendipityPrettyButton input_button">{$CONST.DUMP_IT}</a>
</div>
{/if}

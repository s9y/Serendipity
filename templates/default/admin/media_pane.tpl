<script type="text/javascript" language="JavaScript" src="{serendipity_getFile file='admin/admin_scripts.js'}"></script>

<form style="display: inline; margin: 0px; padding: 0px;" method="get" action="?">
    {$media.token}
    {$media.form_hidden}
    <table class="serendipity_admin_filters" width="100%">
        <colgroup>
            <col width="13%" />
            <col width="20%" />

            <col width="13%" />
            <col width="20%" />

            <col width="13%" />
            <col width="20%" />
        </colgroup>
        <tr>
            <td class="serendipity_admin_filters_headline" colspan="6"><strong>{$CONST.FILTERS}</strong> - {$CONST.FIND_MEDIA}</td>
        </tr>
        <tr>
            <td>{$CONST.FILTER_DIRECTORY}</td>
            <td><select name="serendipity[only_path]">
                    <option value="">{if NOT $media.limit_path}{$CONST.ALL_DIRECTORIES}{else}{$media.blimit_path}{/if}</option>
                    {foreach from=$media.paths item="folder"}
                    <option {if ($media.only_path == $media.limit_path|cat:$folder.relpath)}selected="selected"{/if} value="{$folder.relpath}">{'&nbsp;'|str_repeat:($folder.depth*2)}{$folder.name}</option>
                    {/foreach}
                </select>
            </td>
            <td>{$CONST.SORT_ORDER_NAME}</td>
            <td><input class="input_textbox" type="text" name="serendipity[only_filename]" value="{$media.only_filename|@escape}" /></td>
            <td colspan="2"><a href="#" class="serendipityPrettyButton input_button" onclick="showFilters(); return false">&raquo; {$CONST.FILTERS}</a></td>
        </tr>
        <tr>
            <td colspan="6">
                <div class="serendipity_pluginlist_section" style="height: auto; padding: 1px; margin-top: 5px; display: none" id="moreFilter">
                    <table width="100%" cellpadding="5" cellspacing="0" border="0">
                        <tr>
                            <td valign="top"><span style="white-space: nowrap">{$CONST.MEDIA_KEYWORDS}</span></td>
                            <td><input class="input_textbox" id="keyword_input" type="text" name="serendipity[keywords]" value="{$media.keywords_selected|@escape}" /></td>
                            <td width="98%">
                            {foreach from=$media.keywords item="keyword"}
                            <a href="#" onclick="AddKeyword('{$keyword|@escape}'); return false">{$keyword|@escape}</a>
                            {/foreach}
                            </td>
                        </tr>
                        {foreach from=$media.sort_order item="so_val" key="so_key"}
                        <tr>
                            <td valign="top"><span style="white-space: nowrap">{$so_val.desc}</span></td>
                            {if $so_val.type == 'date'}
                                {if $media.filter[$so_key].from != '' OR $media.filter[$so_key].to != ''}{assign var="show_filter" value=$media.filter[$so_key]}{/if}
                            <td>
                                <input class="input_textbox" type="text" name="serendipity[filter][{$so_key}][from]" value="{$media.filter[$so_key].from|@escape}" />
                            </td>
                            <td>
                                - <input class="input_textbox" type="text" name="serendipity[filter][{$so_key}][to]" value="{$media.filter[$so_key].to|@escape}" /> (DD.MM.YYYY | YYYY-MM-DD | MM/DD/YYYY)
                            </td>
                            {elseif $so_val.type == 'intrange'}
                                {if $media.filter[$so_key].from != '' OR $media.filter[$so_key].to != ''}{assign var="show_filter" value=$media.filter[$so_key]}{/if}
                            <td>
                                <input class="input_textbox" type="text" name="serendipity[filter][{$so_key}][from]" value="{$media.filter[$so_key].from|@escape}" />
                            </td>
                            <td>
                                - <input class="input_textbox" type="text" name="serendipity[filter][{$so_key}][to]" value="{$media.filter[$so_key].to|@escape}" />
                            </td>
                            {elseif $so_val.type == 'authors'}
                                {if $media.filter[$so_key] != ''}{assign var="show_filter" value=$media.filter[$so_key]}{/if}
                            <td>
                                <select name="serendipity[filter][{$so_key}]">
                                <option value="">{$CONST.ALL_AUTHORS}</option>
                                {foreach from=$media.authors item="media_author"}
                                <option value="{$media_author.authorid}" {if $media.filter[$so_key] == $media_author.authorid}selected="selected"{/if}>{$media_author.realname|@escape}</option>
                                {/foreach}
                                </select>
                            </td>
                            {else}
                                {if $media.filter[$so_key] != ''}{assign var="show_filter" value=$media.filter[$so_key]}{/if}
                            <td>
                                <input class="input_textbox" type="text" name="serendipity[filter][{$so_key}]" value="{$media.filter[$so_key]|@escape}" />
                            </td>
                            <td>&nbsp;</td>
                            {/if}
                        </tr>
                        {/foreach}
                    </table>
                </div>
                <script type="text/javascript" language="javascript">
                {if $media.keywords_selected != '' OR $show_filter}showFilters();{/if}
                </script>
            </td>
        </tr>

        <tr>
            <td class="serendipity_admin_filters_headline" colspan="6"><strong>{$CONST.SORT_ORDER}</strong></td>
        </tr>
        <tr>
            <td>{$CONST.SORT_BY}</td>
            <td>
                <select name="serendipity[sortorder][order]">
                {foreach from=$media.sort_order item="so_val" key="so_key"}
                    <option value="{$so_key}" {if $media.sortorder.order == $so_key}selected="selected"{/if}>{$so_val.desc}</option>
                {/foreach}
                </select>
            </td>
            <td>{$CONST.SORT_ORDER}</td>
            <td><select name="serendipity[sortorder][ordermode]">
                    <option value="DESC" {if $media.sortorder.ordermode == 'DESC'}selected="selected"{/if}>{$CONST.SORT_ORDER_DESC}</option>
                    <option value="ASC"  {if $media.sortorder.ordermode == 'ASC'}selected="selected"{/if}>{$CONST.SORT_ORDER_ASC}</option>
                </select>
            </td>
            <td>{$CONST.FILES_PER_PAGE}</td>
            <td>
                <select name="serendipity[sortorder][perpage]">
                {foreach from=$media.sort_row_interval item="so_val"}
                <option value="{$so_val}" {if $media.perPage == $so_val}selected="selected"{/if}>{$so_val}</option>
                {/foreach}
                </select>
            </td>
        </tr>
        <tr>
            <td align="right" colspan="6">
            {if $media.show_upload}
                <input type="button" value="{$CONST.ADD_MEDIA|@escape}" onclick="location.href='{$media.url}&amp;serendipity[adminAction]=addSelect&amp;serendipity[only_path]={$media.only_path|escape:url}'; return false" class="serendipityPrettyButton input_button" />
            {/if}
                <input type="submit" name="go" value=" - {$CONST.GO} - " class="serendipityPrettyButton input_button" />
            </td>
        </tr>
</table>
</form>

{if $media.nr_files < 1}
    <div align="center">- {$CONST.NO_IMAGES_FOUND} -</div>
{else}
{if $smarty.get.serendipity.adminModule == 'media'}

    <form action="?" method="post" name="formMultiDelete" id="formMultiDelete">
        {$media.token}
        <input type="hidden" name="serendipity[action]" value="admin" />
        <input type="hidden" name="serendipity[adminModule]" value="media" />
        <input type="hidden" name="serendipity[adminAction]" value="multidelete" />
{/if}
<table border="0" width="100%">
    <tr>
        <td colspan="{$media.lineBreak}">
            <table width="100%">
                <tr>
                    <td>
                    {if $media.page != 1 AND $media.page <= $media.pages}
                        <a href="{$media.linkPrevious}" class="serendipityIconLink"><img src="{$media.prevIMG}"" />{$CONST.PREVIOUS}</a>
                    {/if}
                    </td>
                    <td align="right">
                    {if $media.page != $media.pages}
                        <a href="{$media.linkNext}" class="serendipityIconLinkRight">{$CONST.NEXT}<img src="{$media.nextIMG}" /></a>
                    {/if}
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
    {$MEDIA_ITEMS}
    </tr>

    <tr>
        <td colspan="{$media.lineBreak}">
            <table width="100%">
                <tr>
                    <td>
                    {if $media.page != 1 AND $media.page <= $media.pages}
                        <a href="{$media.linkPrevious}" class="serendipityIconLink"><img src="{$media.prevIMG}"" />{$CONST.PREVIOUS}</a>
                    {/if}
                    </td>
                    <td align="right">
                    {if $media.page != $media.pages}
                        <a href="{$media.linkNext}" class="serendipityIconLinkRight">{$CONST.NEXT}<img src="{$media.nextIMG}" /></a>
                    {/if}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
{if $smarty.get.serendipity.adminModule == 'media'}
    <tr>
        <td align="right">
            <input type="button" name="toggle" value="{$CONST.INVERT_SELECTIONS}" onclick="invertSelection()" class="serendipityPrettyButton input_button" />
            <input type="submit" name="toggle" value="{$CONST.DELETE_SELECTED_ENTRIES}" class="serendipityPrettyButton input_button" />
        </td>
    </tr>
{/if}
</table>

{if $smarty.get.serendipity.adminModule == 'media'}
</form>
{/if}

{/if}

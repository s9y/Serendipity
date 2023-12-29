{serendipity_hookPlugin hook="entries_header"}
<h3 class="serendipity_date">{$CONST.ARCHIVES}</h3>
{foreach from=$archives item="archive"}
<table class="archives_listing" cellspacing="4" cellpadding="4" border="0">
    <tr class="archives_header">
        <td class="archives_header" colspan="4"><h2>{$archive.year}</h2></td>
    </tr>
    {foreach from=$archive.months item="month"}
    <tr class="archives_row">
        <td class="archives_graph" width="100"><img src="{serendipity_getFile file="img/graph_bar_horisontal.png"}" height="10" width="{math width=100 equation="count * width / max" count=$month.entry_count max=$max_entries format="%d"}" style="border: 1px solid #000000" alt="" /></td>
        <td class="archives_date">{$month.date|@formatTime:"%B"}</td>
        <td class="archives_count">{$month.entry_count} {$CONST.ENTRIES}</td>
        <td class="archives_count_link">({if $month.entry_count}<a href="{$month.link}">{/if}{$CONST.VIEW_FULL}{if $month.entry_count}</a>{/if})</td>
        <td class="archives_link">({if $month.entry_count}<a href="{$month.link_summary}">{/if}{$CONST.VIEW_TOPICS}{if $month.entry_count}</a>{/if})</td>
    </tr>
    {/foreach}
</table>
{/foreach}
<div class="serendipity_pageFooter" style="text-align: center">
{serendipity_hookPlugin hook="entries_footer"}</div>

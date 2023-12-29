{serendipity_hookPlugin hook="entries_header"}
<div class="serendipity_Entry_Date">
    <h3 class="serendipity_date">{$CONST.ARCHIVES}</h3>
    {foreach from=$archives item="archive"}
        <div class="serendipity_entry archives_all_entry">
            <h4 class="archives_header">{$archive.year}</h4>
            {foreach from=$archive.months item="month"}
                <ul class="archives_row {cycle values='archives_row_odd,archives_row_even'}">
                    {if $template_option.colorset == 'blank'}
                        <li class="archives_graph"><img src="{serendipity_getFile file="img/graph_bar_horisontal.png"}" alt="bar graph" height="10" width="{math width=100 equation="count * width / max" count=$month.entry_count max=$max_entries format="%d"}" style="border: 1px solid #000000" /></li>
                    {else}
                        <li class="archives_graph"><img src="{$serendipityHTTPPath}templates/{$template}/img/{$template_option.colorset}_graph_bar.png" alt="bar graph" height="10" width="{math width=100 equation="count * width / max" count=$month.entry_count max=$max_entries format="%d"}" style="border: 1px solid #000000" /></li>
                    {/if}
                    <li class="archives_date">{$month.date|@formatTime:"%B"}</li>
                    <li class="archives_count">{$month.entry_count} {$CONST.ENTRIES}</li>
                    <li class="archives_count_link">({if $month.entry_count}<a href="{$month.link}">{/if}{$CONST.VIEW_FULL}{if $month.entry_count}</a>{/if})</li>
                    <li class="archives_link">({if $month.entry_count}<a href="{$month.link_summary}">{/if}{$CONST.VIEW_TOPICS}{if $month.entry_count}</a>{/if})</li>
                </ul>
            {/foreach}
        </div>
    {/foreach}
</div>
<div class="serendipity_pageFooter" style="text-align: center">
    {serendipity_hookPlugin hook="entries_footer"}
</div>

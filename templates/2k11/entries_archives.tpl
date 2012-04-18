{serendipity_hookPlugin hook="entries_header"}
<div class="archives">
    <h2>{$CONST.ARCHIVES}</h2>
{foreach from=$archives item="archive"}
    <section class="archives_year {cycle values="arch_odd,arch_even"}">
        <h3>{$archive.year}</h3>

        <ul class="plainList">
        {foreach from=$archive.months item="month"}
            <li class="archives_month">
                <span class="archives_date">{if $month.entry_count}<a href="{$month.link}" title="{$CONST.VIEW_FULL}">{/if}{$month.date|@formatTime:"%B"}{if $month.entry_count}</a>{/if}:</span>
                <span class="archives_count">{if $month.entry_count}<a href="{$month.link_summary}" title="{$CONST.VIEW_TOPICS}">{/if}{$month.entry_count} {$CONST.ENTRIES}{if $month.entry_count}</a>{/if}</span>
            </li>
        {/foreach}
        </ul>
    </section>
{/foreach}
</div>
{serendipity_hookPlugin hook="entries_footer"}

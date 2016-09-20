{serendipity_hookPlugin hook="entries_header"}
<article class="archive archive_overview">
    <h2>{$CONST.ARCHIVES}</h2>
{foreach from=$archives item="archive"}
    <section class="archive_year">
        <h3>{$archive.year}</h3>

        <ul class="plainList">
        {foreach from=$archive.months item="month"}
            <li><span class="archive_date">{if $month.entry_count}<a href="{$month.link}" title="{$CONST.VIEW_FULL}">{/if}{$month.date|formatTime:"%B"}{if $month.entry_count}</a>{/if}:</span>
                <span class="archive_count">{if $month.entry_count}<a href="{$month.link_summary}" title="{$CONST.VIEW_TOPICS}">{/if}{$month.entry_count} {$CONST.ENTRIES}{if $month.entry_count}</a>{/if}</span>
            </li>
        {/foreach}
        </ul>
    </section>
{/foreach}
</article>
{serendipity_hookPlugin hook="entries_footer"}

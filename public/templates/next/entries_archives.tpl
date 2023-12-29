{serendipity_hookPlugin hook="entries_header"}
<article id="archives" class="clearfix">
    <h2>{$CONST.ARCHIVES}</h2>

{foreach from=$archives item="archive"}
    <section class="{cycle values="odd,even"}">
        <h3>{$archive.year}</h3>

        <ul class="year">
        {foreach from=$archive.months item="month"}
            <li class="month">
                <span class="date">{if $month.entry_count}<a href="{$month.link}" title="{$CONST.VIEW_FULL}">{/if}{$month.date|formatTime:"%B"}{if $month.entry_count}</a>{/if}:</span>
                <span class="count">{if $month.entry_count}<a href="{$month.link_summary}" title="{$CONST.VIEW_TOPICS}">{/if}{$month.entry_count} {$CONST.ENTRIES}{if $month.entry_count}</a>{/if}</span>
            </li>
        {/foreach}
        </ul>
    </section>
{/foreach}
</article>
{serendipity_hookPlugin hook="entries_footer"}

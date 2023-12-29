{serendipity_hookPlugin hook="entries_header"}
<article class="archive archive_overview">
    <h2>{$CONST.ARCHIVES}</h2>

    <div id="archives">
    {foreach from=$archives item="archive"}
        <section class="card">
            <div class="card-header" id="header-{$archive.year}">
                <h3 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#archive-{$archive.year}" aria-expanded="false" aria-controls="archive-{$archive.year}">{$archive.year}</button>
                </h3>
            </div>

            <div id="archive-{$archive.year}" class="collapse" aria-labelledby="header-{$archive.year}" data-parent="#archives">
                <div class="card-body">
                    <dl class="row">
                    {foreach from=$archive.months item="month"}
                        <dt class="col-xs-12 col-lg-6">{if $month.entry_count}<a href="{$month.link}" title="{$CONST.VIEW_FULL}">{/if}{$month.date|formatTime:"%B"}{if $month.entry_count}</a>{/if}:</dt>
                        <dd class="col-xs-12 col-lg-6">{if $month.entry_count}<a href="{$month.link_summary}" title="{$CONST.VIEW_TOPICS}">{/if}{$month.entry_count} {$CONST.ENTRIES}{if $month.entry_count}</a>{/if}</dd>
                    {/foreach}
                    </dl>
                </div>
            </div>
        </section>
    {/foreach}
    </div>
</article>
{serendipity_hookPlugin hook="entries_footer"}
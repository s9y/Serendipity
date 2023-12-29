{serendipity_hookPlugin hook="entries_header"}
<article class="archive archive_summary">
	<h2>{$CONST.TOPICS_OF} {$dateRange.0|formatTime:"%B %Y"}</h2>

	<dl class="row">
	{foreach from=$entries item="sentries"}
        {foreach from=$sentries.entries item="entry"}
        <dt class="col-xs-12 col-lg-7"><a href="{$entry.link}">{$entry.title}</a></dt>
        <dd class="col-xs-6 col-lg-3"><a href="{$entry.link_author}">{$entry.author}</a></dd>
        <dd class="col-xs-6 col-lg-2"><time datetime="{$entry.timestamp|serendipity_html5time}">{$entry.timestamp|formatTime:'%d. %m.'}</time></dd>
        {/foreach}
    {/foreach}
    </dl>
</article>
{serendipity_hookPlugin hook="entries_footer"}
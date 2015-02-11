{serendipity_hookPlugin hook="entries_header"}
<article id="archives" class="clearfix">
	<h2>{$CONST.TOPICS_OF} {$dateRange.0|formatTime:"%B %Y"}</h2>

	<ul class="summary">
	{foreach from=$entries item="sentries"}
        {foreach from=$sentries.entries item="entry"}
        <li><a href="{$entry.link}">{$entry.title}</a>
            <span>{$CONST.POSTED_BY} <a href="{$entry.link_author}">{$entry.author}</a> {$CONST.ON} <time datetime="{$entry.timestamp|serendipity_html5time}">{$entry.timestamp|formatTime:$template_option.date_format}</time></span>
        </li>
        {/foreach}
    {/foreach}
	</ul>
</article>
{serendipity_hookPlugin hook="entries_footer"}

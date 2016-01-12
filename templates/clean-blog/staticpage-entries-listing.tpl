{if $entries}
	<dl>
		{foreach from=$entries item="dategroup"}
			{foreach from=$dategroup.entries item="entry"}
			<dt class="serendipity_recententries_entrylink"><a href="{$entry.link}" title="{$entry.title|@default:$entry.id}">{$entry.title|@default:$entry.id}</a></dt>
			<dd class="text-muted serendipity_recententries_entrydate"><small>{$dategroup.date|@formatTime:$template_option.date_format}</small></dd>
			{/foreach}
		{/foreach}
	</dl>
	{if $staticpage_related_category_id >0}
		<a href="{$serendipityBaseURL}{$serendipityRewritePrefix}{getCategoryLinkByID cid=$staticpage_related_category_id}">{$CONST.STATICPAGE_ARTICLE_OVERVIEW} &#187;</a><br />
	{else}
		<a href="{$serendipityArchiveURL}/P1.html">{$CONST.STATICPAGE_ARTICLE_OVERVIEW} &#187;</a><br />
	{/if}
{else}
    <p class="nocontent">{$CONST.NO_ENTRIES_TO_PRINT}</p>
{/if}
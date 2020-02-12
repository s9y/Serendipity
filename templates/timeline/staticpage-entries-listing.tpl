<h4>{$CONST.STATICPAGE_NEW_HEADLINES|capitalize}</h4>
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
		<a class="btn btn-md btn-default btn-theme" href="{$serendipityBaseURL}{$serendipityRewritePrefix}{getCategoryLinkByID cid=$staticpage_related_category_id}">{$CONST.STATICPAGE_ARTICLE_OVERVIEW|capitalize} <i class="fas fa-arrow-right" aria-hidden="true"></i></a><br />
	{else}
		<a class="btn btn-md btn-default btn-theme" href="{$serendipityArchiveURL}/P1.html">{$CONST.STATICPAGE_ARTICLE_OVERVIEW|capitalize} <i class="fas fa-arrow-right" aria-hidden="true"></i></a><br />
	{/if}
{else}
    <div id="search-block" class="row">
        <div class="col-md-10 col-md-offset-1">    
            <p class="alert alert-info noentries"><span class="fa-stack"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-info fa-stack-1x"></i></span> {$CONST.NO_ENTRIES_TO_PRINT}</p>
        </div>
    </div>
{/if}
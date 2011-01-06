{serendipity_hookPlugin hook="entries_header"}
<div class='serendipity_date'>{$CONST.TOPICS_OF} {$dateRange.0|@formatTime:"%B, %Y"}</div>

<div class="serendipity_entry">
    {foreach from=$entries item="sentries"}
        {foreach from=$sentries.entries item="entry"}
            <div class="archive_summary"><h4 class="archive_summary_title">{$entry.id} - <a href="{$entry.link}">{$entry.title|truncate:80:" ..."}</a></h4>
{$entry.timestamp|@formatTime:DATE_FORMAT_ENTRY}. {$CONST.POSTED_BY} <a href="{$entry.link_author}">{$entry.author}</a> {if $entry.categories} {$CONST.IN} {foreach from=$entry.categories item="entry_category" name="categories"}<a href="{$entry_category.category_link}">{$entry_category.category_name|@escape}</a>{/foreach}{/if}</div>
	{/foreach}
    {/foreach}

<div class='serendipity_pageFooter' style="text-align: center">
{serendipity_hookPlugin hook="entries_footer"}</div>

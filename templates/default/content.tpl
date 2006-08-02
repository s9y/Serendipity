<!-- CONTENT START -->

{if $searchresult_tooShort}
    <h3 class="serendipity_date">{$CONST.QUICKSEARCH}</h3>
	<div class="serendipity_search serendipity_search_tooshort">{$content_message}</div>
{elseif $searchresult_error}
    <h3 class="serendipity_date">{$CONST.QUICKSEARCH}</h3>
	<div class="serendipity_search serendipity_search_error">{$content_message}</div>
{elseif $searchresult_noEntries}
    <h3 class="serendipity_date">{$CONST.QUICKSEARCH}</h3>
	<div class="serendipity_search serendipity_search_noentries">{$content_message}</div>
{elseif $searchresult_results}
    <h3 class="serendipity_date">{$CONST.QUICKSEARCH}</h3>
	<div class="serendipity_search serendipity_search_results">{$content_message}</div>
{else}
	<div class="serendipity_content_message">{$content_message}</div>
{/if}

{$ENTRIES}
{$ARCHIVES}

<!-- CONTENT END -->

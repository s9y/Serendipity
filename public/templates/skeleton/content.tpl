{if $searchresult_tooShort or $searchresult_error or $searchresult_noEntries or $searchresult_results}
    <p class="search_posts"><b>{$CONST.QUICKSEARCH}</b> {$content_message}</p>
{elseif $content_message}
    <p>{$content_message}</p>
{/if}
{$ENTRIES}
{$ARCHIVES}

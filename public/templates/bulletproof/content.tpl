<!-- CONTENT START -->
{if $searchresult_tooShort}
   <div class="serendipity_Entry_Date">
      <h3 class="serendipity_date">{$CONST.QUICKSEARCH}</h3>
      <div class="serendipity_search serendipity_search_tooshort">{$content_message}</div>
   </div>
{elseif $searchresult_error}
   <div class="serendipity_Entry_Date">
      <h3 class="serendipity_date">{$CONST.QUICKSEARCH}</h3>
      <div class="serendipity_search serendipity_search_error">{$content_message}</div>
   </div>
{elseif $searchresult_noEntries}
   <div class="serendipity_Entry_Date">
      <h3 class="serendipity_date">{$CONST.QUICKSEARCH}</h3>
      <div class="serendipity_search serendipity_search_noentries">{$content_message}</div>
   </div>
{elseif $searchresult_results}
   <div class="serendipity_Entry_Date">
      <h3 class="serendipity_date">{$CONST.QUICKSEARCH}</h3>
      <div class="serendipity_search serendipity_search_results">{$content_message}</div>
   </div>
{elseif $subscribe_confirm_error}
    <div class="serendipity_Entry_Date">
        <h3 class="serendipity_date">{$CONST.ERROR}</h3>
        <div class="serendipity_msg_important comment_subscribe_error">{$content_message}</div>
    </div>
{elseif $subscribe_confirm_success}
    <div class="serendipity_Entry_Date">
        <h3 class="serendipity_date">{$CONST.SUCCESS}</h3>
        <div class="serendipity_msg_notice comment_subscribe_success">{$content_message}</div>
    </div>
{else}
   <div class="serendipity_content_message">{$content_message}</div>
{/if}

{$ENTRIES}
{$ARCHIVES}
<!-- CONTENT END -->

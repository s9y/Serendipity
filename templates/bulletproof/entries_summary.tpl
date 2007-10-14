{serendipity_hookPlugin hook="entries_header"}
<div class="serendipity_Entry_Date">
   <h3 class='serendipity_date'>{$CONST.TOPICS_OF} {$dateRange.0|@formatTime:"%B, %Y"}</h3>
   <div class="serendipity_entry">
   {foreach from=$entries item="entries"}
      {foreach from=$entries.entries item="entry"}
         <div class="archive_summary"><h4 class="archive_summary_title">{$entry.id} - <a href="{$entry.link}">{$entry.title|truncate:80:" ..."}</a></h4>
         <span class="archive_summary_details">{$entry.timestamp|@formatTime:$template_option.date_format}. {$CONST.POSTED_BY} <a href="{$entry.link_author}">{$entry.author}</a> {if $entry.categories} {$CONST.IN} {foreach from=$entry.categories item="entry_category" name="categories"}<a href="{$entry_category.category_link}">{$entry_category.category_name|@escape}</a> {/foreach}{/if}</span></div>
      {/foreach}
   {/foreach}
   </div>
</div>

<div class='serendipity_pageFooter' style="text-align: center">
{serendipity_hookPlugin hook="entries_footer"}
</div>

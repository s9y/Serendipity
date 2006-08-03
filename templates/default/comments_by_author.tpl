<div class="comments_by_author_pagination" style="text-align: center">
{if $footer_prev_page}
    <a href="{$footer_prev_page}">&laquo; {$CONST.PREVIOUS_PAGE}</a>&#160;&#160;
{/if}

{if $footer_info}
    ({$footer_info})
{/if}

{if $footer_next_page}
    <a href="{$footer_next_page}">&raquo; {$CONST.NEXT_PAGE}</a>
{/if}

{serendipity_hookPlugin hook="comments_by_author_footer" hookAll="true"}
</div>

<div class="comments_by_author">
{foreach from=$comments_by_authors item="entry_comments"}

<h4 class="serendipity_title"><a href="{$entry_comments.link}">{$entry_comments.title|@default:$entry_comments.link}</a></h4>

{* tpl_comments is the parsed "comments.tpl" template! *}
<div class="comments_for_entry">{$entry_comments.tpl_comments}</div>

{/foreach}
</div>


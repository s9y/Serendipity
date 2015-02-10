{foreach from=$comments_by_authors item="entry_comments"}
<article class="post">
    <h2 class="post-title"><a href="{$entry_comments.link}">{$entry_comments.title|default:$entry_comments.link}</a></h2>
    <div class="comments_for_entry">{$entry_comments.tpl_comments}</div>
</article>
{/foreach}
{if $footer_info or $footer_prev_page or $footer_next_page}
    <nav class="pagination clearfix">
        {if $footer_info}<h3>{$footer_info}</h3>{/if}
    {if $footer_prev_page||$footer_next_page}
        <ul>
            <li class="prev-page">{if $footer_prev_page}<a href="{$footer_prev_page}"><span class="icon-angle-circled-left" aria-hidden="true"></span><span class="fallback-text">{$CONST.PREVIOUS_PAGE}</span></a>{else}<span class="no-page"><span class="icon-angle-circled-left" aria-hidden="true"></span><span class="fallback-text">{$CONST.NO_ENTRIES_TO_PRINT}</span></span>{/if}</li>
            <li class="next-page">{if $footer_next_page}<a href="{$footer_next_page}"><span class="icon-angle-circled-right" aria-hidden="true"></span><span class="fallback-text">{$CONST.NEXT_PAGE}</span></a>{else}<span class="no-page"><span class="icon-angle-circled-right" aria-hidden="true"></span><span class="fallback-text">{$CONST.NO_ENTRIES_TO_PRINT}</span></span>{/if}</li>
        </ul>
    {/if}
    </nav>
{/if}
{serendipity_hookPlugin hook="comments_by_author_footer" hookAll="true"}

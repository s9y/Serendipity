<h2 class="visuallyhidden">{$CONST.COMMENTS}</h2>
{foreach from=$comments_by_authors item="entry_comments"}
<article class="clearfix serendipity_entry{if $entry_comments.entryauthor == $entry_comments.author} serendipity_comment_author_self{/if}">
    <h3><a href="{$entry_comments.link}">{$entry_comments.title|default:$entry_comments.link}</a></h3>
    <div class="comments_for_entry">{$entry_comments.tpl_comments}</div>
</article>
{/foreach}
{if $footer_info or $footer_prev_page or $footer_next_page}
    <nav class="serendipity_pagination block_level comments_by_author_pagination">
        <ul class="clearfix">
            {if $footer_info}
            <li class="info"><span>{$footer_info}</span></li>
            {/if}
            <li class="prev">{if $footer_prev_page}<a href="{$footer_prev_page}">{/if}{if $footer_prev_page}&larr; {$CONST.PREVIOUS_PAGE}{else}&nbsp;{/if}{if $footer_prev_page}</a>{/if}</li>
            <li class="next">{if $footer_next_page}<a href="{$footer_next_page}">{/if}{if $footer_next_page}{$CONST.NEXT_PAGE} &rarr;{else}&nbsp;{/if}{if $footer_next_page}</a>{/if}</li>
        </ul>
    </nav>
{/if}
{serendipity_hookPlugin hook="comments_by_author_footer" hookAll="true"}

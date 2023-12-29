{foreach from=$comments item=comment name="comments"}
    <article id="c{$comment.id}" class="comment commentlevel_{if $comment.depth > 8}9{else}{$comment.depth}{/if}">
        <h4>{if $comment.url}<a href="{$comment.url}">{/if}{$comment.author|default:$CONST.ANONYMOUS}{if $comment.url}</a>{/if} {$CONST.ON} <time datetime="{$comment.timestamp|serendipity_html5time}">{$comment.timestamp|formatTime:$template_option.date_format}</time>:</h4>

        <div class="comment_content u-cf">
            {if $comment.avatar}{$comment.avatar}{/if}
        {if $comment.body == 'COMMENT_DELETED'}
            <p class="serendipity_msg_important">{$CONST.COMMENT_IS_DELETED}</p>
        {else}
            {$comment.body}
        {/if}
        </div>
    {if $entry.allow_comments AND $comment.body != 'COMMENT_DELETED'}
        <a id="serendipity_reply_{$comment.id}" class="comment_reply" href="#serendipity_CommentForm" onclick="document.getElementById('serendipity_replyTo').value='{$comment.id}'; {$comment_onchange}">{$CONST.REPLY}</a>
        <div id="serendipity_replyform_{$comment.id}"></div>
    {/if}
    </article>
{foreachelse}
    <p class="serendipity_msg_notice">{$CONST.NO_COMMENTS}</p>
{/foreach}

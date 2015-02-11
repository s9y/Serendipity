{foreach from=$comments item=comment name="comments"}
    <article id="c{$comment.id}" class="comment {cycle values="odd,even"}{if $comment.depth > 8} commentlevel-9{else} commentlevel-{$comment.depth}{/if}">
        <header class="clearfix">
            <h4>{if $comment.url}<a href="{$comment.url}">{/if}{$comment.author|default:$CONST.ANONYMOUS}{if $comment.url}</a>{/if}{if $comment.spice_twitter_name and not $comment.spice_twitter_followme} (<a href="{$comment.spice_twitter_url}"{if $comment.spice_twitter_nofollow} rel="nofollow"{/if}>@{$comment.spice_twitter_name}</a>){/if} {$CONST.ON} <time datetime="{$comment.timestamp|serendipity_html5time}">{$comment.timestamp|formatTime:$template_option.date_format}</time>:</h4>
        {if $comment.spice_twitter_name && $comment.spice_twitter_followme}
            <div class="twitter_follow">
            {$comment.spice_twitter_followme}
            </div>
        {/if}
        </header>

        <div class="clearfix">
            {if $comment.avatar}{$comment.avatar}{/if}
        {if $comment.body == 'COMMENT_DELETED'}
            <p class="msg-warning"><span class="icon-attention-circled" aria-hidden="true"></span> {$CONST.COMMENT_IS_DELETED}</p>
        {else}
            {$comment.body}
        {/if}
        </div>

        <footer>
        {if $comment.spice_article_name}
            <p>{$comment.spice_article_prefix}: <a{if $comment.spice_article_nofollow} rel="nofollow"{/if} href="{$comment.spice_article_url}">{$comment.spice_article_name}</a></p>
        {/if}
            <ul class="meta">
                <li><time>{$comment.timestamp|formatTime:'%H:%M'}</time></li>
                <li><a class="comment_source_trace" href="#c{$comment.id}" title="{$CONST.NEXT_PLINK_TITLE}">{$CONST.NEXT_PLINK_TEXT}</a></li>
            {if $entry.is_entry_owner}
                <li><a class="comment_source_ownerlink" href="{$comment.link_delete}" title="{$CONST.COMMENT_DELETE_CONFIRM|sprintf:$comment.id:$comment.author}">{$CONST.DELETE}</a></li>
            {/if}
        {if $template_option.refcomments == true}
            {if $comment.parent_id != '0'}
                <li><a class="reply_origin" href="#c{$comment.parent_id}" title="{$CONST.NEXT_REPLYORIGIN}: {$CONST.COMMENT} #c{$comment.parent_id}">{$CONST.NEXT_REPLYORIGIN}</a></li>
            {/if}
        {/if}
            {if $entry.allow_comments AND $comment.body != 'COMMENT_DELETED'}
                <li><a id="serendipity_reply_{$comment.id}" class="comment_reply" href="#serendipity_CommentForm">{$CONST.REPLY}</a>
                <div id="serendipity_replyform_{$comment.id}" class="visuallyhidden"></div></li>
            {/if}
            </ul>
        </footer>
    </article>
{foreachelse}
    <p class="msg-notice"><span class="icon-info-circled" aria-hidden="true"></span> {$CONST.NO_COMMENTS}</p>
{/foreach}

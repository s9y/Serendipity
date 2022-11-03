{foreach from=$comments item=comment name="comments"}
<article id="c{if isset($comment.id)}{$comment.id}{/if}" class="serendipity_comment{if isset($entry.author) && $entry.author == $comment.author} serendipity_comment_author_self{/if} {cycle values="odd,even"} {if $comment.depth > 8}commentlevel-9{else}commentlevel-{$comment.depth}{/if}">
    <header class="clearfix">
        <h4{if 'spice_twitter_name'|array_key_exists:$comment and $comment.spice_twitter_name && $comment.spice_twitter_followme} class="short-heading"{/if}>{if $comment.url}<a href="{$comment.url}">{/if}{$comment.author|default:$CONST.ANONYMOUS}{if $comment.url}</a>{/if}{if 'spice_twitter_name'|array_key_exists:$comment and $comment.spice_twitter_name and not $comment.spice_twitter_followme} (<a href="{$comment.spice_twitter_url}"{if $comment.spice_twitter_nofollow} rel="nofollow"{/if}>@{$comment.spice_twitter_name}</a>){/if} {$CONST.ON} <time datetime="{$comment.timestamp|@serendipity_html5time}">{$comment.timestamp|@formatTime:$template_option.date_format}</time>:</h4>
    {if 'spice_twitter_name'|array_key_exists:$comment and $comment.spice_twitter_name && $comment.spice_twitter_followme}
        <div class="twitter_follow"><a href="{$comment.spice_twitter_url}"{if $comment.spice_twitter_nofollow} rel="nofollow"{/if}><span class="visuallyhidden">@{$comment.spice_twitter_name}</span></a>
        {if $comment.spice_twitter_followme}{$comment.spice_twitter_followme}{/if}
        </div>
    {/if}
    </header>

    <div class="serendipity_commentBody clearfix content">
    {if 'avatar'|array_key_exists:$comment and $comment.avatar}{$comment.avatar}{/if}
    {if $comment.body == 'COMMENT_DELETED'}
        {$CONST.COMMENT_IS_DELETED}
    {else}
        {$comment.body}
    {/if}
    </div>

    <footer>
        <time>{$comment.timestamp|@formatTime:'%H:%M'}</time>
        | <a class="comment_source_trace" href="#c{if isset($comment.id)}{$comment.id}{/if}" title="{$CONST.TWOK11_PLINK_TITLE}">{$CONST.TWOK11_PLINK_TEXT}</a>
    {if isset($entry) and 'is_entry_owner'|array_key_exists:$entry and $entry.is_entry_owner}
        | <a class="comment_source_ownerlink" href="{$comment.link_delete}" title="{if isset($comment.id)}{$CONST.COMMENT_DELETE_CONFIRM|@sprintf:$comment.id:$comment.author}{/if}">{$CONST.DELETE}</a>
    {/if}
{if isset($template_option.refcomments) and $template_option.refcomments == true}
    {if $comment.parent_id != '0'}
        | <a class="reply_origin" href="#c{$comment.parent_id}" title="{$CONST.TWOK11_REPLYORIGIN}: {$CONST.COMMENT} #c{$comment.parent_id}">{$CONST.TWOK11_REPLYORIGIN}</a>
    {/if}
{/if}
        | <a class="comment_reply" href="#serendipity_CommentForm" id="serendipity_reply_{if isset($comment.id)}{$comment.id}{/if}"{if isset($comment_onchange) and $comment_onchange != ''} onclick="{$comment_onchange}"{/if}>{$CONST.REPLY}</a>
        <div id="serendipity_replyform_{if isset($comment.id)}{$comment.id}{/if}"></div>
    </footer>
</article>
{foreachelse}
<p class="nocomments">{$CONST.NO_COMMENTS}</p>
{/foreach}

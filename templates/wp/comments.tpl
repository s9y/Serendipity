{foreach from=$comments item=comment}
  <li id="comment-{$comment.id}">
    <p>
        {if $comment.body == 'COMMENT_DELETED'}
            {$CONST.COMMENT_IS_DELETED}
        {else}
            {$comment.body}
        {/if}
    </p>
    <p><cite>Comment by {if $comment.url}<a href="{$comment.url}" rel='external'>{$comment.username|@default:$CONST.ANONYMOUS}</a>{else}{$comment.username|@default:$CONST.ANONYMOUS}{/if} &#8212; {$comment.timestamp|@formatTime:'%m/%d/%Y'} @ <a href="#comment-{$comment.id}">{$comment.timestamp|@formatTime:'%I:%M %p'}</a></cite></p>
  </li>
{/foreach}

<ol class="plainList">
{foreach from=$comments item=comment name="comments"}
    <li id="c{$comment.id}" class="comment mb-4 commentlevel_{if $comment.depth > 8}9{else}{$comment.depth}{/if}">
        <ul class="comment_info plainList">
            <li class="d-inline-block"><svg class="icon-user" role="img" viewbox="0 0 1792 1792" width="1792" height="1792" aria-labelledby="title"><title id="title">{$CONST.POSTED_BY}</title><use xlink:href="{$serendipityHTTPPath}templates/{$template}/img/icons.svg#user"></use></svg>{if $comment.url}<a href="{$comment.url}">{/if}{$comment.author|default:$CONST.ANONYMOUS}{if $comment.url}</a>{/if}</li>
            <li class="d-inline-block"><svg class="icon-calendar" role="img" viewbox="0 0 1792 1792" width="1792" height="1792" aria-labelledby="title"><title id="title">{$CONST.ON}</title><use xlink:href="{$serendipityHTTPPath}templates/{$template}/img/icons.svg#calendar"></use></svg><time datetime="{$comment.timestamp|serendipity_html5time}">{$comment.timestamp|formatTime:$template_option.date_format}</time></li>
        </ul>
        <div class="comment_content clearfix">
        {if $comment.body == 'COMMENT_DELETED'}
            <p class="alert alert-danger" role="alert">{$CONST.COMMENT_IS_DELETED}</p>
        {else}
            {$comment.body}
        {/if}
        </div>
    {if $entry.allow_comments AND $comment.body != 'COMMENT_DELETED'}
        <a id="serendipity_reply_{$comment.id}" class="comment_reply btn btn-outline-primary btn-sm" href="#serendipity_CommentForm" onclick="document.getElementById('serendipity_replyTo').value='{$comment.id}'; {$comment_onchange}">{$CONST.REPLY}</a>
        <div id="serendipity_replyform_{$comment.id}"></div>
    {/if}
    </li>
{foreachelse}
    <li><p class="alert alert-info" role="alert">{$CONST.NO_COMMENTS}</p></li>
{/foreach}
</ol>
<ul class="comment-list">
{foreach from=$comments item=comment name="comments"}
    {if $smarty.foreach.comments.first}{assign var="prevdepth" value=$comment.depth}{/if}
    {if ($comment.depth == $prevdepth) && !$smarty.foreach.comments.first}
        </li>
    {elseif $comment.depth < $prevdepth}
        {for $i=1 to $prevdepth-$comment.depth}
            </li></ul>
        {/for}
        </li>
    {elseif $comment.depth > $prevdepth}
        <ul class="comment-children">
    {/if}
    <li id="comment-{$comment.id}" class="comment-list-item">
        <a id="c{$comment.id}"></a>
        <div id="div-comment-{$comment.id}" class="comment_any{cycle values=" comment_odd, comment_even"} comment_author_{$comment.author|@makeFilename} {if ($entry.author == $comment.author) && ($entry.email == $commentform_entry.email)}comment_author_self{/if}">
            {if $comment.avatar}
                    {$comment.avatar}
            {/if}                
            <div class="comment-list-item-body">
                <h5 class="comment-author-heading">
                    <span class="comment-author-details">
                        {if $comment.url}
                            <a class="comment-author-url" href="{$comment.url}" title="{$comment.url|@escape}" rel="external nofollow">{$comment.author|@default:$CONST.ANONYMOUS}</a>
                        {else}
                            {$comment.author|@default:$CONST.ANONYMOUS}
                        {/if}
                    </span>&nbsp;                      
                    <time class="comment-date" datetime="{$comment.timestamp|@serendipity_html5time}">{if $template_option.comment_time_format =='time'}{$comment.timestamp|@formatTime:'%b %e. %Y'} {$CONST.AT} {$comment.timestamp|@formatTime:'%I:%M %p'}{else}{elapsed_time_words from_time=$comment.timestamp}{/if}</time>
                </h5>
                <div class="comment-content">
                        {if $comment.body == 'COMMENT_DELETED'}
                            {$CONST.COMMENT_IS_DELETED}
                        {else}
                            {$comment.body}
                        {/if}
                </div>
                <div class="comment-meta">
                    <a class="comment-source-trace btn btn-sm btn-default" href="#c{$comment.id}">#{$comment.trace}</a>
                    {if $entry.is_entry_owner}
                        <a class="comment-source-ownerlink comment-reply-link btn btn-sm btn-default" href="{$comment.link_delete}" onclick="return confirm('{$CONST.COMMENT_DELETE_CONFIRM|@sprintf:$comment.id:$comment.author}');" title="{$CONST.DELETE}"><i class="fa fa-lg fa-trash-o"></i><span class="sr-only"> {$CONST.DELETE}</span></a>
                    {/if}                        
                    
                    {if $entry.allow_comments AND $comment.body != 'COMMENT_DELETED'}
                        <a class="comment-reply-link btn btn-sm btn-default" href="#serendipity_CommentForm" id="serendipity_reply_{$comment.id}" onclick="document.getElementById('serendipity_replyTo').value='{$comment.id}'; {$comment_onchange}" title="{$CONST.REPLY}"><i class="fa fa-lg fa-reply"></i><span class="sr-only"> {$CONST.REPLY}</span></a>
                        <div id="serendipity_replyform_{$comment.id}"></div>
                    {/if}
                </div>
            </div>
        </div>
    {if $smarty.foreach.comments.last}
        {if $comment.depth>0}    
            {for $i=1 to $comment.depth}
                </li></ul>
            {/for}
        {/if}
        </li>
    {/if}
    {assign var="prevdepth" value=$comment.depth}    
{/foreach}
</ul>
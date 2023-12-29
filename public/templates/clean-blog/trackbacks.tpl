<ul class="comment-list">
{foreach from=$trackbacks item=trackback}
    <li id="comment-c{$trackback.id}" class="comment-list-item">
        <a id="c{$trackback.id}"></a>
        <div id="div-comment-c{$trackback.id}" class="comment_any{cycle values=" comment_odd, comment_even"} comment_author_{$comment.author|@makeFilename} {if $trackback.author == $blogTitle}serendipity_comment_author_self{/if}">
            {if $trackback.avatar}       
                {$trackback.avatar}
            {/if}
            <div class="comment-list-item-body">
                <h5 class="comment-author-heading">
                    <span class="comment-author-details">{$trackback.author|@default:$CONST.ANONYMOUS}</span>&nbsp;                        
                    <time class="comment-date" datetime="{$trackback.timestamp|@serendipity_html5time}">{if $template_option.comment_time_format =='time'}{$trackback.timestamp|@formatTime:'%b %e. %Y'} {$CONST.AT} {$trackback.timestamp|@formatTime:'%I:%M %p'}{else}{elapsed_time_words from_time=$trackback.timestamp}{/if}</time>
                </h5>
                <div class="comment-content">
                        <a href="{$trackback.url|@strip_tags}" {'blank'|@xhtml_target}>{$trackback.title}</a><br />
                        {$trackback.body|@strip_tags|@escape:all} ...
                </div>
                <div class="comment-meta">
                    {if $entry.is_entry_owner}
                        <a href="{$serendipityBaseURL}comment.php?serendipity[delete]={$trackback.id}&amp;serendipity[entry]={$trackback.entry_id}&amp;serendipity[type]=trackbacks" title="{$CONST.DELETE}"><button class="btn btn-sm btn-default"><i class="fa fa-lg fa-trash-o"></i><span class="sr-only"> {$CONST.DELETE}</span></button></a>
                    {/if}                       
                </div>
            </div>
        </div>
    </li>
{/foreach} 
</ul>           
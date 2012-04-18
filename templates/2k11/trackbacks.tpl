{foreach from=$trackbacks item=trackback}
<article id="c{$trackback.id}" class="serendipity_comment {cycle values="odd,even"}">
    <h4><cite>{$trackback.author|@default:$CONST.ANONYMOUS}</cite> {$CONST.ON} <time datetime="{$trackback.timestamp|@serendipity_html5time}" pubdate>{$trackback.timestamp|@formatTime:$template_option.date_format}</time>: <a href="{$trackback.url|@strip_tags}">{$trackback.title}</a></h4>

    <details>
        <summary>{$CONST.VIEW_EXTENDED_ENTRY|@sprintf:$trackback.title}</summary>
        <div class="content serendipity_commentBody">{$trackback.body|@strip_tags|@escape:all}</div>
    </details>
{if $entry.is_entry_owner}
    <footer>
        <a href="{$serendipityBaseURL}comment.php?serendipity[delete]={$trackback.id}&amp;serendipity[entry]={$trackback.entry_id}&amp;serendipity[type]=trackbacks">{$CONST.DELETE}</a>
    </footer>
{/if}
</article>
{foreachelse}
<p class="nocomments">{$CONST.NO_TRACKBACKS}</p>
{/foreach}

{if $entry.trackbacks > 0}
    <ol class="plainList">
    {foreach from=$trackbacks item=trackback}
        <li id="c{$trackback.id}" class="trackback d-flex justify-content-between">
            <a href="{$trackback.url|@strip_tags}">{$trackback.title}</a>
            <time datetime="{$trackback.timestamp|serendipity_html5time}">{$trackback.timestamp|formatTime:$template_option.date_format}</time>
        </li>
    {/foreach}
    </ol>
{/if}
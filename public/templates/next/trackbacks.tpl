{foreach from=$trackbacks item=trackback}
    <article id="c{$trackback.id}" class="trackback">
        <h4><cite>{$trackback.author|default:$CONST.ANONYMOUS}</cite> {$CONST.ON} <time datetime="{$trackback.timestamp|serendipity_html5time}">{$trackback.timestamp|formatTime:$template_option.date_format}</time>: <a href="{$trackback.url|strip_tags}">{$trackback.title}</a></h4>
	{if $trackback.body == ''}
		<p class="msg-notice no-content"><span class="icon-info-circled" aria-hidden="true"></span> {$CONST.NO_ENTRIES_TO_PRINT}</p>
	{else}
        <details>
            <summary>{$CONST.VIEW_EXTENDED_ENTRY|sprintf:$trackback.title}</summary>
            <div class="clearfix">
            {$trackback.body|strip_tags|escape:'htmlall'}
            </div>
        </details>
    {/if}
    </article>
{foreachelse}
    <p class="msg-notice"><span class="icon-info-circled" aria-hidden="true"></span> {$CONST.NO_TRACKBACKS}</p>
{/foreach}

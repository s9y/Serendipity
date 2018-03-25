{if $staticpage_results}
<div class="pages_found">
    <h3>{$CONST.STATICPAGE_SEARCHRESULTS|sprintf:$staticpage_searchresults}</h3>

    <dl>
    {foreach from=$staticpage_results item="result"}
        <dt><a href="{$result.permalink|escape}" title="{$result.pagetitle|escape} ({$result.realname})">{$result.headline}</a></dt>
        <dd>{$result.content|strip_tags|truncate:200:"..."}</dd>
    {/foreach}
    </dl>
</div>
{/if}
{if $staticpage_results}
<div class="page_results">
    <h3>{$CONST.STATICPAGE_SEARCHRESULTS|sprintf:$staticpage_searchresults}</h3>

    <ul class="plainList">
    {foreach from=$staticpage_results item="result"}
        <li><a href="{$result.permalink|escape}" title="{$result.pagetitle|escape} ({$result.realname})">{$result.headline}</a>
            <div class="page_result_content">{$result.content|strip_tags|truncate:200:"..."}</div>
        </li>
    {/foreach}
    </ul>
</div>
{/if}

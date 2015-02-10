<aside class="search-results clearfix">
    <h3>{$CONST.STATICPAGE_SEARCHRESULTS|sprintf:$staticpage_searchresults}</h3>
    {if $staticpage_results}
    <ul>
    {foreach from=$staticpage_results item="result"}
        <li><span><a href="{$result.permalink|escape}" title="{$result.pagetitle|escape}">{$result.headline}</a> ({$result.realname})</span>
            {$result.content|strip_tags|strip|truncate:200:" ... "}</li>
    {/foreach}
    </ul>
    {else}
    <p class="msg-notice"><span class="icon-info-circled" aria-hidden="true"></span> {$CONST.NO_ENTRIES_TO_PRINT}</p>
    {/if}
</aside>

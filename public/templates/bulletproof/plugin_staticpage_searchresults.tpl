<div class="staticpage_results" style="text-align: left">
    <p class="staticpage_result_header">{$CONST.STATICPAGE_SEARCHRESULTS|sprintf:$staticpage_searchresults}</p>

    <dl class="staticpage_result">
    {foreach from=$staticpage_results item="result"}
        <dt><strong><a href="{$result.permalink|@escape}" title="{$result.pagetitle|@escape}">{$result.headline}</a></strong> ({$result.realname})</dt>
        <dd>{$result.content|@strip_tags|@strip|@truncate:200:" ... "}</dd>
    {/foreach}
    </dl>
</div>

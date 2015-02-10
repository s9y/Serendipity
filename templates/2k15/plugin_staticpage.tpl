<article id="page-{$staticpage_pagetitle|@makeFilename}" class="post clearfix">
    <h2 class="post-title">{if $staticpage_articleformat}{if $staticpage_articleformattitle}{$staticpage_articleformattitle|@escape}{else}{$staticpage_pagetitle}{/if}{else}{if $staticpage_headline}{$staticpage_headline|@escape}{else}{$staticpage_pagetitle}{/if}{/if}</h2>
{if is_array($staticpage_childpages)}
    <ul id="child-pages">
    {foreach from=$staticpage_childpages item="childpage"}
        <li><a href="{$childpage.permalink|@escape}" title="{$childpage.pagetitle|@escape}">{$childpage.pagetitle|@escape}</a></li>
    {/foreach}
    </ul>
{/if}
{if $staticpage_pass AND $staticpage_form_pass != $staticpage_pass}
    <form class="staticpage_password_form" action="{$staticpage_form_url}" method="post">
    <fieldset>
        <legend>{$CONST.STATICPAGE_PASSWORD_NOTICE}</legend>
        <input name="serendipity[pass]" type="password" value="">
        <input name="submit" type="submit" value="{$CONST.GO}" >
    </fieldset>
    </form>
{else}
    {if $staticpage_precontent}
    {$staticpage_precontent}
    {/if}
    {if $staticpage_content}
    {$staticpage_content}
    {/if}
{/if}
{if $staticpage_author or $staticpage_lastchange}
    <footer class="page-info post-info">
        <ul class="meta">
        {if $staticpage_author}
            <li>{$CONST.POSTED_BY} {$staticpage_author|@escape}</li>
        {/if}
        {if $staticpage_lastchange}
            <li>{$CONST.ON} <time datetime="{$staticpage_lastchange|@serendipity_html5time}">{$staticpage_lastchange|date_format:$template_option.date_format}</time></li>
        {/if}
        </ul>
    </footer>
{/if}
</article>

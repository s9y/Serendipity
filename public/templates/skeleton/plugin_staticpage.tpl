<article id="page_{$staticpage_pagetitle|makeFilename}" class="page">
    <h2>{if $staticpage_articleformat}{if $staticpage_articleformattitle}{$staticpage_articleformattitle|escape}{else}{$staticpage_pagetitle}{/if}{else}{if $staticpage_headline}{$staticpage_headline|escape}{else}{$staticpage_pagetitle}{/if}{/if}</h2>
{if $staticpage_author or $staticpage_lastchange}
    <footer class="page_info">
        <p>{if $staticpage_author}{$CONST.POSTED_BY} {$staticpage_author|escape}{/if}
        {if $staticpage_lastchange} {$CONST.ON} <time datetime="{$staticpage_lastchange|serendipity_html5time}">{$staticpage_lastchange|date_format:$template_option.date_format}</time>{/if}</p>
    </footer>
{/if}
{if $staticpage_pass AND $staticpage_form_pass != $staticpage_pass}
    <form class="staticpage_password_form" action="{$staticpage_form_url}" method="post">
        <label for="serendipity_page_pass">{$CONST.STATICPAGE_PASSWORD_NOTICE}</label>
        <input id="serendipity_page_pass" name="serendipity[pass]" type="password" value="">
        <input class="button-primary" name="submit" type="submit" value="{$CONST.GO}" >
    </form>
{else}
    {if $staticpage_precontent}
    <div class="page_content page_preface">
    {$staticpage_precontent}
    </div>
    {/if}
    {if $staticpage_content}
    <div class="page_content">
    {$staticpage_content}
    </div>
    {/if}
{/if}
{if is_array($staticpage_childpages)}
    <ul class="page_children">
    {foreach from=$staticpage_childpages item="childpage"}
        <li><a href="{$childpage.permalink|escape}" title="{$childpage.pagetitle|escape}">{$childpage.pagetitle|escape}</a></li>
    {/foreach}
    </ul>
{/if}
</article>

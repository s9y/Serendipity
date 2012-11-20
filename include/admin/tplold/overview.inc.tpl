{if $output.show_links}
    <div class="{$output.links_css}">
        <p class="further_links_head">{$output.links_title}</p>
        <ul>
        {foreach $output.links AS $link}
            <li>{$link}</li>
        {/foreach}
        </ul>
        <p class="further_links_foot" style="display: none"></p>
    </div>
{/if}
<h3 class="serendipityWelcomeBack">{$output.welcome}</h3>
{$output.more}

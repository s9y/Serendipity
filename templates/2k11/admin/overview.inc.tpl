{* HTML5: Yes *}
{* jQuery: NN*}

<h2>{$output.welcome}</h2>
{$output.more}
{if $output.show_links}
<aside class="{$output.links_css}">
    <h3>{$output.links_title}</h3>
    
    <ul class="plainList">
    {foreach $output.links AS $link}
        <li>{$link}</li>
    {/foreach}
    </ul>
</aside>
{/if}

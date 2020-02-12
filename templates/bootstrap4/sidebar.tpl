{if $is_raw_mode}
<div id="serendipity{$pluginside}SideBar">
{/if}
{foreach from=$plugindata item=item}
{if $template_option.bs_rss && $item.class != "serendipity_plugin_syndication"}
	<section class="{$item.class} mb-3">
    {if $item.title != ""}
    	<h3>{$item.title}</h3>
	{/if}
        <div class="sidebar_content">
    	{$item.content}
    	</div>
    </section>
{/if}
{/foreach}
{if $is_raw_mode}
</div>
{/if}
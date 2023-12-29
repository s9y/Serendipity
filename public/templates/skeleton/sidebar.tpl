{if $is_raw_mode}
<div id="serendipity{$pluginside}SideBar">
{/if}
{foreach from=$plugindata item=item}
{if $item.class != "serendipity_plugin_quicksearch"}
	<section class="sidebar_widget {$item.class}">
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

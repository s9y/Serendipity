{if $is_raw_mode}
    <div id="serendipity{$pluginside}FooterBar">
{/if}
{foreach from=$plugindata item=item}
    {if $item.class != "serendipity_plugin_quicksearch"}
        <div class="{if $FooterSidebarElements == '1'}col-md-12{elseif $FooterSidebarElements == '2'}col-md-6{elseif $FooterSidebarElements == '3' || $FooterSidebarElements == '6'  || $FooterSidebarElements == '5'}col-md-4{else}col-md-3{/if}">
            <section class="sidebar_plugin clearfix {cycle values="odd,even"} {$item.class}">
                {if $item.title != ""}
                    <h3>{$item.title}</h3>
                {/if}
                <div class="footerbar_content">{$item.content}</div>
            </section>
        </div>    
    {/if}
{/foreach}
{if $is_raw_mode}
    </div>
{/if}
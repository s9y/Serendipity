{foreach from=$remoterss_items.items item="item"}
<div class="rss_item">
    {if $remoterss_items.use_rss_link}
    <div class="rss_link"><a href="{$item.link|@escape}" {if $remoterss_items.target}target="{$remoterss_items.target}"{/if}>
    {/if}

    {if $remoterss_items.bulletimg}
    <img src="{$remoterss_items.bulletimg}" border="0" alt="*" />
    {/if}

    {foreach name="deloop" from=$item.display_elements item="field" key="fieldname"}
        {if NOT $smarty.foreach.deloop.first}
        <span class="rss_{$fieldname}">
        {/if}

        {$field|@escape}

        {if NOT $smarty.foreach.deloop.first}
        </span>
        {/if}
        
        {if $smarty.foreach.deloop.first}
        </a></div>
        {/if}
    {foreachelse}
        </a></div>
    {/foreach}

    <br />
    {if $item.timestamp != -1 AND $remoterss_items.displaydate}
    <div class="serendipitySideBarDate">
        {$item.timestamp|@formatTime:$remoterss_items.dateformat|@escape}
    </div>
    {/if}
</div>
{/foreach}

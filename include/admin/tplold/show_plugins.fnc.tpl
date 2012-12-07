{* functions_plugins_admin.inc.php::function_show_plugins() including output of functions_plugins_admin.inc.php::function ownership() *}

{if !$eyecandy}
    <form action="?serendipity[adminModule]=plugins" method="post">
{elseif !$event_only}
{* 
Smarty 3 has a new auto literal option which is enabled by default.
When the { is followed by a space it's not interpreted as smarty delimiter but literal.
*}
    <script type="text/javascript">
        function templatePluginMoverInit() { 

        {foreach $plugin_placements AS $sidebar}

            {($is_first) ? 'var ' : ''}list = document.getElementById("{$sidebar}_col");
            DragDrop.makeListContainer(list, 'g1');
            list.onDragOver = function() { this.style["border"] = "1px solid #4d759b"; };
            list.onDragOut = function() { this.style["border"] = "none"; };
            {assign var="is_first" value=false}

        {/foreach}

        } 
        addLoadEvent(templatePluginMoverInit);
    </script>

    <form action="?serendipity[adminModule]=plugins" method="post" onsubmit="pluginMovergetSort(); return true">
        <input type="hidden" name="serendipity[pluginorder]" id="order" value="" />

    {else}
    <script type="text/javascript">addLoadEvent(pluginMoverInitEvent);</script>
    <form action="?serendipity[adminModule]=plugins" method="post" onsubmit="pluginMovergetSortEvent(); return true">
        <input type="hidden" name="serendipity[pluginorder]" id="eventorder" value="" />
    {/if}

    {$serendipity_setFormToken}

        <table class="pluginmanager" border="0" cellpadding="5" cellspacing="3" width="100%">
            <tr>

            {foreach $placement as $plugin_placement}
                <td class="pluginmanager_side pluginmanager_{($event_only) ? 'event' : 'sidebar'}">
                    <div class="heading">{$plugin_placement['ptitle']}</div>
                    <ol id="{$plugin_placement['pid']}_col" class="pluginmanager_container">

                    {foreach $plugin_placement['plugin_data'] as $plugin_data}

                        <li class="pluginmanager_item_{cycle values="even,uneven"}" id="{$plugin_data['css_key']}">
                            <div id="g{$plugin_data['css_key']}" class="pluginmanager_grablet">
                                <a href="#" id="grab{$plugin_data['css_key']}"></a>
                            </div>
                        {if $plugin_data['is_plugin_editable']}
                            <input class="input_checkbox" type="checkbox" name="serendipity[plugin_to_remove][]" value="{$plugin_data['name']}" />
                        {/if}

                        {if $plugin_data['can_configure']}
                            <a class="pluginmanager_configure" href="?serendipity[adminModule]=plugins&amp;serendipity[plugin_to_conf]={$plugin_data['key']}"><img src="{serendipity_getFile file='admin/img/configure.png'}" style="border: 0; vertical-align: bottom;" alt="[C]" /></a>
                        {/if}

                            <span class="pluginmanager_title">
                        {if $plugin_data['can_configure']}
                            <a title="{$plugin_data['name']}" href="?serendipity[adminModule]=plugins&amp;serendipity[plugin_to_conf]={$plugin_data['key']}">{$plugin_data['title']}</a>
                        {else}
                            {$plugin_data['title']}
                        {/if}
                            </span><br />
                            <div class="pluginmanager_description" style="font-size: 8pt">{$plugin_data['desc']}</div>
                            <div class="pluginmanager_ownership">
                                {$plugin_data['ownership']}
                            </div>
                            {($eyecandy) ? '<noscript>' : ''}
                            <div class="pluginmanager_place">{$plugin_data['place']}</div>
                            <div class="pluginmanager_move">{$plugin_data['moveup']} {$plugin_data['movedown']}</div>
                            {($eyecandy) ? '</noscript>' : ''}
                        </li>

                    {/foreach}

                    </ol>
                </td>
            {/foreach}

            </tr>
            <tr>
                <td colspan="3" align="right">{$CONST.PLUGIN_AVAILABLE_COUNT|sprintf:$total}</td>
            </tr>
        </table>
        <br />
        <div>
            <input type="submit" name="REMOVE" title="{$CONST.DELETE}" value="{$CONST.REMOVE_TICKED_PLUGINS}" class="serendipityPrettyButton input_button" />
            <input type="submit" name="SAVE"   title="{$CONST.SAVE_CHANGES_TO_LAYOUT}" value="{$CONST.SAVE}" class="serendipityPrettyButton input_button" />
        </div>
    </form>

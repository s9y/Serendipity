{* HTML5: Yes *}
{* jQuery: No *}

{* functions_plugins_admin.inc.php::function_show_plugins() including output of functions_plugins_admin.inc.php::function ownership() *}

{if !$eyecandy}
    <form action="?serendipity[adminModule]=plugins" method="post">
{elseif !$event_only}
{* Smarty 3 has a new auto literal option which is enabled by default.
   When the { is followed by a space it's not interpreted as smarty delimiter but literal. *}
    <script>
        function templatePluginMoverInit() { 

        {foreach $plugin_placements AS $sidebar}

            {($is_first) ? 'var' : ''} list = document.getElementById("{$sidebar}_col");
            DragDrop.makeListContainer(list, 'g1');
            list.onDragOver = function() { this.style["border"] = "1px solid #4d759b"; };
            list.onDragOut = function() { this.style["border"] = "none"; };
            {assign var="is_first" value=false}

        {/foreach}

        } 
        addLoadEvent(templatePluginMoverInit);
    </script>

    <form action="?serendipity[adminModule]=plugins" method="post" onsubmit="pluginMovergetSort(); return true">
        <input id="order" name="serendipity[pluginorder]" type="hidden" value="">
    {else}
    <script>addLoadEvent(pluginMoverInitEvent);</script>
    <form action="?serendipity[adminModule]=plugins" method="post" onsubmit="pluginMovergetSortEvent(); return true">
        <input id="eventorder" name="serendipity[pluginorder]" type="hidden" value="">
    {/if}
        {$serendipity_setFormToken}
        <div class="clearfix pluginmanager">
        {foreach $placement as $plugin_placement}
            <div class="pluginmanager_side pluginmanager_{($event_only) ? 'event' : 'sidebar'}">
                <h4>{$plugin_placement['ptitle']}</h4>

                <ol id="{$plugin_placement['pid']}_col" class="pluginmanager_container plainList">
                {foreach $plugin_placement['plugin_data'] as $plugin_data}
                    <li id="{$plugin_data['css_key']}" class="pluginmanager_item_{cycle values="even,uneven"}">
                        <div id="g{$plugin_data['css_key']}" class="pluginmanager_grablet">
                            <a id="grab{$plugin_data['css_key']}" href="#">Move</a>{* i18n *}
                        </div>
                    {if $plugin_data['is_plugin_editable']}
                        <div class="form_check">
                            <input id="remove_{$plugin_data['name']}" name="serendipity[plugin_to_remove][]" type="checkbox" value="{$plugin_data['name']}">
                            <label for="remove_{$plugin_data['name']}" class="visuallyhidden">Remove this plugin</label>{* i18n *}
                        </div>
                    {/if}
                    {if $plugin_data['can_configure']}
                        <a class="pluginmanager_configure" href="?serendipity[adminModule]=plugins&amp;serendipity[plugin_to_conf]={$plugin_data['key']}">{$CONST.CONFIGURATION}</a>
                    {/if}
                        <h5>
                        {if $plugin_data['can_configure']}
                            <a title="{$plugin_data['name']}" href="?serendipity[adminModule]=plugins&amp;serendipity[plugin_to_conf]={$plugin_data['key']}">{$plugin_data['title']}</a>
                        {else}
                            {$plugin_data['title']}
                        {/if}
                        </h5>

                        <ul class="pluginmanager_plugininfo plainList">
                            <li class="pluginmanager_description">{$plugin_data['desc']}</li>
                            <li class="pluginmanager_ownership">{$plugin_data['ownership']}</li>
                        {($eyecandy) ? '<noscript>' : ''}
                            <li class="pluginmanager_place">{$plugin_data['place']}</li>
                            <li class="pluginmanager_move">{$plugin_data['moveup']} {$plugin_data['movedown']}</li>
                        {($eyecandy) ? '</noscript>' : ''}
                        </ul>
                    </li>
                {/foreach}
                </ol>
            </div>
        {/foreach}
            <span class="plugin_count block_level">{$CONST.PLUGIN_AVAILABLE_COUNT|sprintf:$total}</span>
        </div>
        <div class="form_buttons">
            <input name="REMOVE" type="submit" title="{$CONST.DELETE}" value="{$CONST.REMOVE_TICKED_PLUGINS}">
            <input name="SAVE" type="submit" title="{$CONST.SAVE_CHANGES_TO_LAYOUT}" value="{$CONST.SAVE}">
        </div>
    </form>

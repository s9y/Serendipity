{* HTML5: Yes *}
{* jQuery: No *}

{* functions_plugins_admin.inc.php::function_show_plugins() including output of functions_plugins_admin.inc.php::function ownership() *}

{if !$eyecandy}
    <form action="?serendipity[adminModule]=plugins" method="post">
{elseif !$event_only}

    <form action="?serendipity[adminModule]=plugins" method="post">
        <input id="order" name="serendipity[pluginorder]" type="hidden" value="">
    {else}
    <form action="?serendipity[adminModule]=plugins" method="post">
        <input id="eventorder" name="serendipity[pluginorder]" type="hidden" value="">
    {/if}
        {$serendipity_setFormToken}
        <div class="clearfix pluginmanager">
        {foreach $placement as $plugin_placement}
            <div class="pluginmanager_side pluginmanager_{($event_only) ? 'event' : 'sidebar'}">
                <h4>{$plugin_placement['ptitle']}</h4>

                <ol id="{$plugin_placement['pid']}_col" data-placement="{$plugin_placement['pid']}" class="pluginmanager_container plainList">
                {foreach $plugin_placement['plugin_data'] as $plugin_data}
                    <li id="{$plugin_data['css_key']}" class="pluginmanager_plugin pluginmanager_item_{cycle values="odd,even"}">
                        <input type="hidden" name="serendipity[plugin][{$plugin_data['name']}][id]" value="{$plugin_data['name']}" />
                        <input type="hidden" name="serendipity[plugin][{$plugin_data['name']}][position]" value="{$plugin_data@index}" />
                        <input type="hidden" name="serendipity[plugin][{$plugin_data['name']}][placement]" value="{$plugin_placement['pid']}" />
                    {if $plugin_data['is_plugin_editable']}
                        <div class="form_check">
                            <input id="remove_{$plugin_data['name']}" name="serendipity[plugin_to_remove][]" type="checkbox" value="{$plugin_data['name']}">
                            <label for="remove_{$plugin_data['name']}" class="visuallyhidden">Remove this plugin</label>{* i18n *}
                        </div>
                    {/if}
                        <h5>
                        {if $plugin_data['can_configure']}
                            <a title="{$plugin_data['name']}" href="?serendipity[adminModule]=plugins&amp;serendipity[plugin_to_conf]={$plugin_data['key']}">{$plugin_data['title']}</a>
                        {else}
                            {$plugin_data['title']}
                        {/if}
                        </h5>

                        <div id="g{$plugin_data['css_key']}" class="pluginmanager_grablet">
                            <a id="grab{$plugin_data['css_key']}" class="icon_link" href="#" title="Move"><span class="icon-move"></span><span class="visuallyhidden"> Move</span></a>{* i18n *}
                        </div>

                    {if $plugin_data['can_configure']}
                        <a class="pluginmanager_configure button_link icon_link" href="?serendipity[adminModule]=plugins&amp;serendipity[plugin_to_conf]={$plugin_data['key']}" title="{$CONST.CONFIGURATION}"><span class="icon-cog-alt"></span><span class="visuallyhidden"> {$CONST.CONFIGURATION}</span></a>
                    {/if}

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
            <input class="state_cancel" name="REMOVE" type="submit" title="{$CONST.REMOVE_TICKED_PLUGINS}" value="{$CONST.DELETE}">
            <input name="SAVE" type="submit" title="{$CONST.SAVE_CHANGES_TO_LAYOUT}" value="{$CONST.SAVE}">
        </div>
    </form>

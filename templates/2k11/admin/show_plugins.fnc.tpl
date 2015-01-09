{if !$event_only}
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

                <ol id="{$plugin_placement['pid']}_col" data-placement="{$plugin_placement['pid']}" class="pluginmanager_container plainList equal_heights">
                {foreach $plugin_placement['plugin_data'] as $plugin_data}
                    <li id="{$plugin_data['css_key']}" class="pluginmanager_plugin pluginmanager_item_{cycle values="odd,even"}">
                        <input type="hidden" name="serendipity[plugin][{$plugin_data['name']}][id]" value="{$plugin_data['name']}" />
                        <input type="hidden" name="serendipity[plugin][{$plugin_data['name']}][position]" value="{$plugin_data@index}" />
                    {if $plugin_data['is_plugin_editable']}
                        <div class="form_check">
                            <input id="remove_{$plugin_data['name']}" class="multidelete" name="serendipity[plugin_to_remove][]" type="checkbox" value="{$plugin_data['name']}" data-multidelid="{$plugin_data['css_key']}">
                            <label for="remove_{$plugin_data['name']}" class="visuallyhidden">{$CONST.REMOVE_TICKED_PLUGINS}</label>
                        </div>
                    {/if}
                        <h5>
                            {$plugin_data['title']}
                        </h5>

                        <div id="g{$plugin_data['css_key']}" class="pluginmanager_grablet">
                            <button id="grab{$plugin_data['css_key']}" class="icon_link button_link" type="button" title="{$CONST.MOVE}"><span class="icon-move"></span><span class="visuallyhidden"> {$CONST.MOVE}</span></button>
                        </div>

                    {if $plugin_data['can_configure']}
                        <a class="pluginmanager_configure button_link" href="?serendipity[adminModule]=plugins&amp;serendipity[plugin_to_conf]={$plugin_data['key']}" title="{$CONST.CONFIGURATION}"><span class="icon-cog-alt"></span><span class="visuallyhidden"> {$CONST.CONFIGURATION}</span></a>
                    {/if}

                        {$plugin_data['desc']}

                        <ul class="pluginmanager_plugininfo plainList">
                            <li class="pluginmanager_ownership">
                                {if $plugin_data.is_plugin_owner}
                                    <select name="serendipity[ownership][{$plugin_data.name}]">
                                        <option value="0">{$CONST.ALL_AUTHORS}</option>
                                {/if}
                                {foreach $users AS $user}
                                    {if (! $plugin_data.is_plugin_owner && ($user['authorid'] == $plugin_data.authorid))}
                                        {assign var="realname" value="{$user['realname']|escape}"}
                                    {elseif $plugin_data.is_plugin_owner}
                                        <option value="{$user['authorid']}"{($user['authorid'] == $plugin_data.authorid) ? ' selected' : ''}>{$user['realname']|escape}</option>
                                    {/if}
                                {/foreach}
                                {if $plugin_data.is_plugin_owner}
                                    </select>
                                {else}
                                    {(empty($realname)) ? $CONST.ALL_AUTHORS : $realname}
                                {/if}

                            </li>
                            <li class="pluginmanager_place nojs-controls">
                                <select name="serendipity[plugin][{$plugin_data['name']}][placement]">
                                    {foreach $plugin_data.gopts as $k => $v}
                                        <option value="{$k}" {if $k == $plugin_data['placement']}selected="selected"{/if}>{$v}</option>
                                    {/foreach}
                                </select>
                            </li>
                            <li class="pluginmanager_move nojs-controls">
                                {if $plugin_data.sort_idx == 0}
                                {else}
                                    <a href="?{$serendipity_setFormTokenUrl}&amp;serendipity[adminModule]=plugins&amp;submit=move+up&amp;serendipity[plugin_to_move]={$plugin_data.key}{if $event_only}&amp;serendipity[event_plugin]=true{/if}">
                                        <span class="icon-up-dir"></span><span class="visuallyhidden"> {$CONST.MOVE_UP}</span>
                                    </a>
                                {/if}

                                {if $sort_idx == $total - 1}
                                {else}
                                    <a href="?{$serendipity_setFormTokenUrl}&amp;serendipity[adminModule]=plugins&amp;submit=move+down&amp;serendipity[plugin_to_move]={$plugin_data.key}{if $event_only}&amp;serendipity[event_plugin]=true{/if}">
                                        <span class="icon-down-dir"></span><span class="visuallyhidden"> {$CONST.MOVE_DOWN}</span>
                                    </a>
                                {/if}
                            </li>
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

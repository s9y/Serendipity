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

                <ol id="{$plugin_placement['pid']}_col" data-placement="{$plugin_placement['pid']}" class="pluginmanager_container plainList">
                {foreach $plugin_placement['plugin_data'] as $plugin_data}
                    <li id="{$plugin_data['css_key']}" class="pluginmanager_plugin pluginmanager_item_{cycle values="odd,even"}">
                        <input type="hidden" name="serendipity[plugin][{$plugin_data['name']}][id]" value="{$plugin_data['name']}" />
                        <input type="hidden" name="serendipity[plugin][{$plugin_data['name']}][position]" value="{$plugin_data@index}" />
                        <input type="hidden" name="serendipity[plugin][{$plugin_data['name']}][placement]" value="{$plugin_placement['pid']}" />
                    {if $plugin_data['is_plugin_editable']}
                        <div class="form_check">
                            <input id="remove_{$plugin_data['name']}" class="multidelete" name="serendipity[plugin_to_remove][]" type="checkbox" value="{$plugin_data['name']}" data-multidelid="{$plugin_data['css_key']}">
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
                        <noscript>
                            <li class="pluginmanager_place">
                                <select name="serendipity[placement][{$plugin_data['name']}]">
                                    {foreach $plugin_data.gopts as $k => $v}
                                        {if {$plugin_data.is_plugin_editable} && $k == 'hide'}
                                            {continue}
                                        {/if}
                                        <option value="{$k}" {if $k == $plugin_data['placement']}selected="selected"{/if}>{$v}</option>
                                    {/foreach}
                                </select>
                            </li>
                            <li class="pluginmanager_move">
                                {if $plugin_data.sort_idx == 0}
                                    &nbsp;
                                {else}
                                    <a href="?{$serendipity_setFormTokenUrl}&amp;serendipity[adminModule]=plugins&amp;submit=move+up&amp;serendipity[plugin_to_move]={$plugin_data.key}{if $event_only}&amp;serendipity[event_plugin]=true{/if}">
                                        <span class="icon-up-open"></span><span class="visuallyhidden"> UP</span>
                                    </a>
                                {/if}

                                {if $sort_idx == $total - 1}
                                    &nbsp;
                                {else}
                                    <a href="?{$serendipity_setFormTokenUrl}&amp;serendipity[adminModule]=plugins&amp;submit=move+down&amp;serendipity[plugin_to_move]={$plugin_data.key}{if $event_only}&amp;serendipity[event_plugin]=true{/if}">
                                        <span class="icon-down-open"></span><span class="visuallyhidden"> DOWN</span>
                                    </a>
                                {/if}
                            </li>
                        </noscript>
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

{if $plugin_to_conf}
    {if is_array($save_errors)}
        <div class="serendipityAdminMsgError msg_error">
            <img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />
            {$CONST.ERROR}:<br />
            <ul>
                {foreach $save_errors as $save_error}
                    <li> $save_error </li>
                {/foreach}
            </ul>
        </div>
    {elseif $saveconf}
        <div class="serendipityAdminMsgSuccess msg_success">
            <img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />
            {$CONST.DONE}: {$CONST.SETTINGS_SAVED_AT|sprintf:"$timestamp"}
        </div>
    {/if}
    <form method="post" name="serendipityPluginConfigure">
        {$formToken}
        <table cellpadding="5" style="border: 1px dashed" width="90%" align="center">
            <tr>
                <th width="100">{$CONST.NAME}</th>
                 <td>{$name} (<em>{$class}</em>)</td>
            </tr>

            <tr>
                <th style="vertical-align: top">{$CONST.DESCRIPTION}</th>
                <td>
                    {$desc}
                    {if ! empty($documentation) }
                         <br /><a href="{$documentation|escape:"html"}">{$CONST.PLUGIN_DOCUMENTATION}</a>
                    {/if}
                    {if $changelog}
                         <br /><a href="plugins/{$plugin->act_pluginPath}/ChangeLog">{$CONST.PLUGIN_DOCUMENTATION_CHANGELOG}</a>
                    {/if}
                    {if $documentation_local}
                        <br /><a href="plugins/{$plugin->act_pluginPath}{$documentation}">{$CONST.PLUGIN_DOCUMENTATION_LOCAL}</a>
                    {/if}
                </td>
            </tr>
            {if !empty($license)}
                <tr>
                    <th>{$CONST.MEDIA_PROPERTY_COPYRIGHT}</th>
                    <td>{$license}</td>
                </tr>
            {/if}
        </table>
        <br />
        {$config}
    </form>
    
{elseif $adminAction == "addnew"}
    {if $type == "event"}
        <h2>{$CONST.EVENT_PLUGINS}</h2>
    {else}
        <h2>{$CONST.SIDEBAR_PLUGINS}</h2>
    {/if}
    <br />
    {foreach $errorstack as $e_idx => $e_name}
        {$CONST.ERROR}: {$e_name}<br />
    {/foreach}
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        {foreach $pluggroups AS $pluggroup => $groupstack}
            {if empty($pluggroup)}
                <tr>
                    <td colspan="2" class="serendipity_pluginlist_header">
                        <form action="serendipity_admin.php" method="get">
                            {$formToken}
                            <input type="hidden" name="serendipity[adminModule]" value="plugins" />
                            <input type="hidden" name="serendipity[adminAction]" value="addnew" />
                            <input type="hidden" name="serendipity[type]" value="{$type|escape:"html"}" />
                            {$CONST.FILTERS}
                                <select name="serendipity[only_group]">
                                    {foreach $groupnames as $available_group => $available_name}
                                        <option value="{$available_group}" {if $only_group == $available_group} selected="selected"{/if}>{$available_name}</option>
                                    {/foreach}
                                    <option value="ALL" {if $only_group == ALL} selected="selected"{/if}>{$CONST.ALL_CATEGORIES}</option>
                                    <option value="UPGRADE" {if $only_group == UPGRADE} selected="selected"{/if}>{$CONST.WORD_NEW}</option>
                                </select>
                                <input class="serendipityPrettyButton input_button" type="submit" value="{$CONST.GO}" />
                        </form>
                    </td>
                </tr>
                {if !empty($only_group)}{continue}{/if}
            {elseif !empty($only_group) && $pluggroup != $only_group}{continue}{else}
                <tr>
                    <td colspan="2" class="serendipity_pluginlist_section"><strong>{foreach $groupnames as $available_group => $available_name}{if $pluggroup == $available_group}{$available_name}{/if}{/foreach}</strong></td>
                </tr>
            {/if}
            <tr>
                <td><strong>Plugin</strong></td>
                <td width="100" align="center"><strong>Action</strong></td>
            </tr>
            {foreach $groupstack as $plug}
                <tr id="serendipity_plugin_{$plug.class_name}">
                    <td colspan="2" onmouseout="document.getElementById('serendipity_plugin_{$plug.class_name}').className='';" onmouseover="document.getElementById('serendipity_plugin_{$plug.class_name}').className='serendipity_PluginAdminHighlight';">
                        <table width="100%" cellpadding="3" cellspacing="0" border="0">
                            <tr>
                                <td><strong>{$plug.name}</strong></td>
                                <td width="100" align="center" valign="middle" rowspan="3">
                                    {if isset($requirements_failures.{$plug.class_name})}
                                        <span style="color: #cccccc">
                                            {$CONST.UNMET_REQUIREMENTS|sprintf:"{if $requirements_failures.{$plug.class_name}.s9y}s9y $plug.requirements..serendipity,{/if} {if $requirements_failures.{$plug.class_name}.php}PHP $plug.requirements.php,{/if} {if $requirements_failures.{$plug.class_name}.smarty}Smarty $plug.requirements.smarty{/if}"}
                                        </span>
                                    {elseif $plug['upgradable'] == true}
                                        <a href="?serendipity[adminModule]=plugins&amp;serendipity[pluginPath]={$plug.pluginPath}&amp;serendipity[install_plugin]={$plug.plugin_class}{if isset($plug['customURI'])}{$plug.customURI}{/if}">
                                            <img src="{serendipity_getFile file="admin/img/upgrade_now.png"}" title="{$CONST.UPGRADE}" alt="{$CONST.UPGRADE}" border="0" />
                                        </a>
                                    {elseif $plug.installable == true}
                                        <a href="?serendipity[adminModule]=plugins&amp;serendipity[pluginPath]={$plug.pluginPath}&amp;serendipity[install_plugin]={$plug.plugin_class}{if isset($plug.customURI)}{$plug.customURI}{/if}">
                                            <img src="{if !empty($plug.pluginlocation) && $plug.pluginlocation != 'local'} {serendipity_getFile file="admin/img/install_now_{$plug.pluginlocation|lower}.png"}{else}{serendipity_getFile file="admin/img/install_now.png"}{/if}" title="{$CONST.INSTALL}" alt="{$CONST.INSTALL}" border="0" />
                                        </a>
                                    {else}
                                        <span style="color: #cccccc">{$CONST.ALREADY_INSTALLED}</span>
                                    {/if}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 10px">{$plug.description}</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 10px; font-size: x-small">({$plug.class_name})
                                    {if ! empty($plug.author)}
                                        {$CONST.AUTHOR}: {$plug.author}
                                    {/if}

                                    {if ! empty($plug.version)}
                                        {$CONST.VERSION}: {$plug.version}
                                    {/if}

                                    {if ! empty($plug.website)}
                                        <a href="{$plug.website|escape:"html"}">{$CONST.PLUGIN_DOCUMENTATION}</a>
                                    {/if}

                                    {if ! empty($plug.local_documentation)}
                                        <a href="{$plug.local_documentation|escape:"html"}">{$CONST.PLUGIN_DOCUMENTATION_LOCAL}</a>
                                    {/if}

                                    {if ! empty($plug.changelog)}
                                        <a href="{$plug.changelog|escape:"html"}">{$CONST.PLUGIN_DOCUMENTATION_CHANGELOG}</a>
                                    {/if}

                                    {if ! empty({$plug.upgrade_version}) && $plug.upgrade_version != $plug.version}
                                        {$CONST.UPGRADE_TO_VERSION|sprintf:"{$plug.upgrade_version}"}
                                    {/if}

                                    {if ! empty($plug.pluginlocation) && $plug.pluginlocation != 'local'}
                                        ({$plug.pluginlocation|escape:"html"})
                                    {/if}
            
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            {/foreach}
        {/foreach}
        <tr>
            <td colspan="2" align="right">{$CONST.PLUGIN_AVAILABLE_COUNT|sprintf:"count({$pluginstack})"}</td>
        </tr>
    </table>
{else}
    {if $save}
        <div class="serendipityAdminMsgSuccess msg_success">
            <img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />
            {$CONST.DONE}:{$CONST.SETTINGS_SAVED_AT|sprintf:"$timestamp"}</div>
    {/if}
    <div>{$CONST.BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS}</div>
    {if $eyecandy}
         <script src="{serendipity_getFile file="dragdrop.js"}" type="text/javascript"></script>
        <div class="warning js_warning"><em>{$CONST.PREFERENCE_USE_JS_WARNING}</em></div>
    {/if}
    <br />
    
    
    <h3>{$CONST.SIDEBAR_PLUGINS}</h3>
    <a href="?serendipity[adminModule]=plugins&amp;serendipity[adminAction]=addnew" class="serendipityIconLink">
        <img src="{serendipity_getFile file="admin/img/install.png"}" style="border: 0px none; vertical-align: middle; display: inline;" alt="" />
        {$CONST.CLICK_HERE_TO_INSTALL_PLUGIN|sprintf:"{$CONST.SIDEBAR_PLUGIN}"}
    </a>
    {$backend_plugins_sidebar_header}
    {$sidebar_plugins}
    <br />
    <br />
    
    <h3>{$CONST.EVENT_PLUGINS}</h3>
    <a href="?serendipity[adminModule]=plugins&amp;serendipity[adminAction]=addnew&amp;serendipity[type]=event" class="serendipityIconLink">
        <img src="{serendipity_getFile file="admin/img/install.png"}" style="border: 0px none ; vertical-align: middle; display: inline;" alt="" />
        {{$CONST.CLICK_HERE_TO_INSTALL_PLUGIN}|sprintf:"{$CONST.EVENT_PLUGIN}"}
    </a>
    {$backend_plugins_event_header}
    {$event_plugins}

    {if $memsnaps}
        <h3>Memory Usage</h3>
        <div>
            <pre>{$memSnaps|print_r}</pre>
        </div>
    {/if}
{/if}
    
    
                            
        
    
    
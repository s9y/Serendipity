{if $plugin_to_conf}
    {if is_array($save_errors)}
    <div class="msg_error">
        <h2><span class="icon-attention-circled" aria-hidden="true"></span> {$CONST.ERROR}:</h2>

        <ul class="plainList">
        {foreach $save_errors as $save_error}
            <li>{$save_error}</li>
        {/foreach}
        </ul>
    </div>
    {elseif $saveconf}
    <span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.DONE}: {$CONST.SETTINGS_SAVED_AT|sprintf:"$timestamp"}</span>
    {/if}
    <h2>{$name} ({$class})</h2>

    <div class="plugin_info">
        <p><b>{$CONST.DESCRIPTION}:</b> {$desc}</p>
    {if !empty($license)}
        <p><b>{$CONST.MEDIA_PROPERTY_COPYRIGHT}:</b> {$license}</p>
    {/if}
    {if ! empty($documentation) || isset($changelog) || $documentation_local}
        <ul class="plainList">
        {if !empty($documentation)}
            <li><a href="{$documentation|escape}">{$CONST.PLUGIN_DOCUMENTATION}</a></li>
        {/if}
        {if $changelog}
            <li><a href="plugins/{$plugin->act_pluginPath}/ChangeLog">{$CONST.PLUGIN_DOCUMENTATION_CHANGELOG}</a></li>
        {/if}
        {if $documentation_local}
            <li><a href="plugins/{$plugin->act_pluginPath}{$documentation_local}">{$CONST.PLUGIN_DOCUMENTATION_LOCAL}</a></li>
        {/if}
        </ul>
    {/if}
    </div>

    <form class="configure_plugin option_list" method="post" name="serendipityPluginConfigure">
        {$formToken}
        {$config}
    </form>
{elseif $adminAction == 'addnew'}
    <h2>{if $type == 'event'}{$CONST.EVENT_PLUGINS}{/if}{if $type == 'sidebar'}{$CONST.SIDEBAR_PLUGINS}{/if}{if $type == 'both'}{$CONST.MENU_PLUGINS}{/if}{if $only_group != UPGRADE} <span class="plugins_available">({$CONST.PLUGIN_AVAILABLE_COUNT|sprintf:$count_pluginstack})</span>{/if}</h2>
    {foreach $errorstack as $e_idx => $e_name}
    <span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> {$CONST.ERROR}: {$e_name}</span>
    {/foreach}

    <form action="serendipity_admin.php" method="get">
        {$formToken}
        <input name="serendipity[adminModule]" type="hidden" value="plugins">
        <input name="serendipity[adminAction]" type="hidden" value="addnew">
        <input name="serendipity[type]" type="hidden" value="{$type|escape}">

        <div class="clearfix">
            {if $only_group != 'UPGRADE'}
                <div id="plugin_groups" class="form_select">
                    <label for="only_group">{$CONST.GROUP}</label>
                    <select id="only_group" name="serendipity[only_group]">
                    {foreach $groupnames as $available_group => $available_name}
                        <option value="{$available_group}"{if $only_group == $available_group} selected{/if}>{$available_name|default:$CONST.ALL_CATEGORIES}</option>
                    {/foreach}
                    </select>
                </div>


                <div id="plugin_filter" class="form_field">
                    <label for="pluginfilter">{$CONST.QUICKSEARCH}</label>
                    <input id="pluginfilter" type="text">
                    <button class="reset_livefilter icon_link" type="button" data-target="pluginfilter" title="{$CONST.RESET_FILTERS}"><span class="icon-cancel" aria-hidden="true"></span><span class="visuallyhidden">{$CONST.RESET_FILTERS}</span></button>
                </div>
                <div class="form_buttons">
                    <input type="submit" value="{$CONST.GO}">
                </div>
            {else}
                <a class="button_link" id="back" href="?serendipity[adminModule]=plugins">{$CONST.BACK}</a>
            {/if}
        </div>
    </form>
    {if $only_group == 'UPGRADE' && ! $available_upgrades}
        <span class="msg_notice"><span class="icon-attention-circled" aria-hidden="true"></span> {$CONST.NO_UPDATES}</span>
    {else}
        {foreach $pluggroups AS $pluggroup => $groupstack}
            {if $only_group && $pluggroup != $only_group || empty($pluggroup)}{continue}{/if}
            <h3>{foreach $groupnames as $available_group => $available_name}{if $pluggroup == $available_group}{$available_name}{/if}{/foreach}</h3>
            {if $only_group == 'UPGRADE' && $pluggroups['UPGRADE']|@count > 1}
                <button id="updateAll">Update All</button>
            {/if}
            <ul class="plugins_installable plainList">
            {foreach $groupstack as $plug}
                <li class="clearfix">
                    <div class="equal_heights">
                        <div class="plugin_features">
                            <h4>{$plug.name}</h4>

                        {if $plug.description}
                            <details class="plugin_data">
                                <summary><var class="perm_name">{$plug.class_name}</var></summary>

                                <div class="plugin_desc clearfix">
                                {$plug.description|escape:"html"}
                                </div>
                            </details>
                        {else}
                            <div class="plugin_data">
                                <var class="perm_name">{$plug.class_name}</var>
                            </div>
                        {/if}
                        </div>

                        <ul class="plugin_info plainList">
                        {if ! empty($plug.author)}
                            <li class="plugin_author"><b>{$CONST.AUTHOR}:</b> {$plug.author|escape}</li>
                        {/if}
                        {if ! empty($plug.version)}
                            <li class="plugin_version"><b>{$CONST.VERSION|capitalize}:</b> {$plug.version}</li>
                        {/if}
                        {if ! empty($plug.pluginsource)}
                            <li class="plugin_source"><b>{$CONST.SOURCE|capitalize}:</b> {$plug.pluginsource}</li>
                        {/if}
                        {if ! empty($plug.pluginlocation) && ($plug.pluginlocation != 'local' || $plug.pluginsource == 'Spartacus')}
                            <li class="plugin_link"><a href="http://spartacus.s9y.org/index.php?mode=bygroups_{$plug.plugintype}_{$lang}#{$plug.class_name|escape}">{$CONST.PLUGIN_LINK_SPARTACUS}</a></li>
                        {/if}
                        {if ! empty($plug.website)}
                            <li class="plugin_web"><a href="{$plug.website|escape}">{$CONST.PLUGIN_DOCUMENTATION}</a></li>
                        {/if}
                        {if ! empty($plug.local_documentation)}
                            <li class="plugin_localdoc"><a href="{$plug.local_documentation|escape}">{$CONST.PLUGIN_DOCUMENTATION_LOCAL}</a></li>
                        {/if}
                        {if ! empty($plug.changelog)}
                            <li class="plugin_changelog"><a href="{$plug.changelog|escape}">{$CONST.PLUGIN_DOCUMENTATION_CHANGELOG}</a></li>
                        {/if}
                        {if ! empty({$plug.upgrade_version}) && $plug.upgrade_version != $plug.version}
                            <li class="plugin_toversion">{$CONST.UPGRADE_TO_VERSION|sprintf:"{$plug.upgrade_version}"}{if ! empty($plug.pluginlocation) && $plug.pluginlocation != 'local'} ({$plug.pluginlocation|escape}){/if}</li>
                        {/if}
                        </ul>
                    </div>

                    <div class="plugin_status">
                    {if isset($requirement_failures.{$plug.class_name})}
                        <span class="unmet_requirements msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> {$CONST.UNMET_REQUIREMENTS|sprintf:"{if $requirement_failures.{$plug.class_name}.s9y}s9y $plug.requirements..serendipity,{/if} {if $requirement_failures.{$plug.class_name}.php}PHP $plug.requirements.php,{/if} {if $requirement_failures.{$plug.class_name}.smarty}Smarty $plug.requirements.smarty{/if}"}</span>
                    {elseif isset($plug['upgradable']) and $plug['upgradable'] == true}
                        <a class="button_link" href="?serendipity[adminModule]=plugins&amp;serendipity[pluginPath]={$plug.pluginPath}&amp;serendipity[install_plugin]={$plug.plugin_class}{if isset($plug['customURI'])}{$plug.customURI}{/if}&amp;{$urltoken}" title="{$CONST.PLUGIN_EVENT_SPARTACUS_CHECK_HINT}">{$CONST.UPGRADE}</a>
                    {elseif $plug.installable == true}
                        <a class="button_link" href="?serendipity[adminModule]=plugins&amp;serendipity[pluginPath]={$plug.pluginPath}&amp;serendipity[install_plugin]={$plug.plugin_class}{if isset($plug.customURI)}{$plug.customURI}{/if}&amp;{$urltoken}">{$CONST.INSTALL}</a>
                    {else}
                        <span class="block_level"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.ALREADY_INSTALLED}</span>
                    {/if}
                    </div>
                </li>
            {/foreach}
            </ul>
        {/foreach}
    {/if}
{elseif $adminAction == 'overlay'}
    <div id="progressWidget">
        <span id="updateMessage">Starting Update ...</span>
        <div id="updateIndicator" class="animated-css"></div>
        <progress id="updateProgress" value="0" />
    </div>
    <script src="{serendipity_getFile file='admin/js/progress-polyfill.min.js'}"></script>
{elseif isset($ajax_output)}
    {$ajax_output}
{else}
    {$backend_pluginlisting_header}
    <h2>{$CONST.CONFIGURE_PLUGINS}</h2>
    {if $save}
    <span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.DONE}:{$CONST.SETTINGS_SAVED_AT|sprintf:"$timestamp"}</span>
    {/if}
    {if $new_plugin_failed}
        <span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> {$CONST.ERROR}: {$CONST.PLUGIN_ALREADY_INSTALLED}</span>
    {/if}
    {if $updateAllMsg}
        <span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.DONE}: {$CONST.PLUGIN_ALL_UPDATED}</span>
    {/if}
    <div class="tabs" id="pluginlist_tabs">
        <input checked="checked" id="sidebar_tab" type="radio" name="tabs" class="hidden">
        <input id="event_tab" type="radio" name="tabs" class="hidden">

        <ul class="nav clearfix tabs-list tabamount2">
            <li><label for="sidebar_tab"><a>{$CONST.SIDEBAR_PLUGINS}</a></label></li><li><label for="event_tab"><a>{$CONST.EVENT_PLUGINS}</a></label></li>
        </ul>

        <menu>
            <li><section id="pluginlist_sidebar" class="panel sidebar_tab">
                <a class="button_link" href="?serendipity[adminModule]=plugins&amp;serendipity[adminAction]=addnew&amp;{$urltoken}" title='{$CONST.CLICK_HERE_TO_INSTALL_PLUGIN|sprintf:"{$CONST.SIDEBAR_PLUGIN}"}'>{$CONST.INSTALL_NEW_SIDEBAR_PLUGIN}</a>

                {$backend_plugins_sidebar_header}
                {$sidebar_plugins}
            </section></li>

            <li><section id="pluginlist_event" class="panel event_tab">
                <a class="button_link" href="?serendipity[adminModule]=plugins&amp;serendipity[adminAction]=addnew&amp;serendipity[type]=event&amp;{$urltoken}" title='{$CONST.CLICK_HERE_TO_INSTALL_PLUGIN|sprintf:"{$CONST.EVENT_PLUGIN}"}'>{$CONST.INSTALL_NEW_EVENT_PLUGIN}</a>

                {$backend_plugins_event_header}
                {$event_plugins}
            </section>
            </li>
        </menu>
    </div>
    {if $memsnaps}
    <section>
        <h3>RAM</h3>

        <pre>{$memSnaps|print_r}</pre>
    </section>
    {/if}
{/if}
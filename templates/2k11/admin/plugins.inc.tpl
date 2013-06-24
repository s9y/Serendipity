{if $plugin_to_conf}
    {if is_array($save_errors)}
    <div class="msg_error">
        <h2><span class="icon-attention-circled"></span> {$CONST.ERROR}:</h2>

        <ul class="plainList">
        {foreach $save_errors as $save_error}
            <li>$save_error</li>
        {/foreach}
        </ul>
    </div>
    {elseif $saveconf}
    <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.DONE}: {$CONST.SETTINGS_SAVED_AT|sprintf:"$timestamp"}</span>
    {/if}
    <h2>{$name} ({$class})</h2>

    <div class="plugin_info">
        <p><b>{$CONST.DESCRIPTION}:</b> {$desc}</p>
    {if !empty($license)}
        <p><b>{$CONST.MEDIA_PROPERTY_COPYRIGHT}:</b> {$license}</p>
    {/if}
    {if ! empty($documentation) || $changelog || $documentation_local}
        <ul class="plainList">
        {if !empty($documentation)}
            <li><a href="{$documentation|escape:"html"}">{$CONST.PLUGIN_DOCUMENTATION}</a></li>
        {/if}
        {if $changelog}
            <li><a href="plugins/{$plugin->act_pluginPath}/ChangeLog">{$CONST.PLUGIN_DOCUMENTATION_CHANGELOG}</a></li>
        {/if}
        {if $documentation_local}
            <li><a href="plugins/{$plugin->act_pluginPath}{$documentation}">{$CONST.PLUGIN_DOCUMENTATION_LOCAL}</a></li>
        {/if}
        </ul>
    {/if}
    </div>

    <form class="configure_plugin" method="post" name="serendipityPluginConfigure">
        {$formToken}
        {$config}
    </form>
{elseif $adminAction == 'addnew'}
    <h2>{if $type == 'event'}{$CONST.EVENT_PLUGINS}{else}{$CONST.SIDEBAR_PLUGINS}{/if} <span class="plugins_available">{$CONST.PLUGIN_AVAILABLE_COUNT|sprintf:$count_pluginstack}</span></h2>
    {foreach $errorstack as $e_idx => $e_name}
    <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.ERROR}: {$e_name}</span>
    {/foreach}
    <form action="serendipity_admin.php" method="get">
        {$formToken}
        <input name="serendipity[adminModule]" type="hidden" value="plugins">
        <input name="serendipity[adminAction]" type="hidden" value="addnew">
        <input name="serendipity[type]" type="hidden" value="{$type|escape:"html"}">

        <div class="form_select">
            <label for="only_group">{$CONST.FILTERS}</label>
            <select id="only_group" name="serendipity[only_group]">
            {foreach $groupnames as $available_group => $available_name}
                <option value="{$available_group}"{if $only_group == $available_group} selected{/if}>{$available_name}</option>
            {/foreach}
                <option value="ALL"{if $only_group == ALL} selected{/if}>{$CONST.ALL_CATEGORIES}</option>
                <option value="UPGRADE"{if $only_group == UPGRADE} selected{/if}>{$CONST.WORD_NEW}</option>
            </select>
        </div>

        <div class="form_buttons">
            <input type="submit" value="{$CONST.GO}">
        </div>
    </form>
    {foreach $pluggroups AS $pluggroup => $groupstack}
    {if empty($pluggroup)}
        {if !empty($only_group)}{continue}{/if}
    {elseif !empty($only_group) && $pluggroup != $only_group}{continue}{else}
        <h3>{foreach $groupnames as $available_group => $available_name}{if $pluggroup == $available_group}{$available_name}{/if}{/foreach}</h3>
    {/if}
        <ul class="plugins_installable plainList">
        {foreach $groupstack as $plug}
            <li class="clearfix"><h4>{$plug.name} ({$plug.class_name})</h4>

                <p class="plugin_desc">{$plug.description}</p>

                <ul class="plugin_info plainList">
                {if ! empty($plug.author)}
                    <li class="plugin_author"><b>{$CONST.AUTHOR}:</b> {$plug.author}</li>
                {/if}
                {if ! empty($plug.version)}
                    <li class="plugin_version"><b>{$CONST.VERSION}:</b> {$plug.version}</li>
                {/if}
                {if ! empty($plug.website)}
                    <li class="plugin_web"><a href="{$plug.website|escape:"html"}">{$CONST.PLUGIN_DOCUMENTATION}</a></li>
                {/if}
                {if ! empty($plug.local_documentation)}
                    <li class="plugin_localdoc"><a href="{$plug.local_documentation|escape:"html"}">{$CONST.PLUGIN_DOCUMENTATION_LOCAL}</a></li>
                {/if}
                {if ! empty($plug.changelog)}
                    <li class="plugin_changelog"><a href="{$plug.changelog|escape:"html"}">{$CONST.PLUGIN_DOCUMENTATION_CHANGELOG}</a></li>
                {/if}
                {if ! empty({$plug.upgrade_version}) && $plug.upgrade_version != $plug.version}
                    <li class="plugin_toversion">{$CONST.UPGRADE_TO_VERSION|sprintf:"{$plug.upgrade_version}"}{if ! empty($plug.pluginlocation) && $plug.pluginlocation != 'local'} ({$plug.pluginlocation|escape:"html"}){/if}</li>
                {/if}
                </ul>

                <div class="plugin_status">
                {if isset($requirements_failures.{$plug.class_name})}
                    <span class="unmet_requirements msg_error"><span class="icon-attention-circled"></span> {$CONST.UNMET_REQUIREMENTS|sprintf:"{if $requirements_failures.{$plug.class_name}.s9y}s9y $plug.requirements..serendipity,{/if} {if $requirements_failures.{$plug.class_name}.php}PHP $plug.requirements.php,{/if} {if $requirements_failures.{$plug.class_name}.smarty}Smarty $plug.requirements.smarty{/if}"}</span>
                {elseif $plug['upgradable'] == true}
                    <a class="button_link" href="?serendipity[adminModule]=plugins&amp;serendipity[pluginPath]={$plug.pluginPath}&amp;serendipity[install_plugin]={$plug.plugin_class}{if isset($plug['customURI'])}{$plug.customURI}{/if}" title="{$CONST.UPGRADE}"><span class="icon-download"></span> {$CONST.UPGRADE}</a>
                {elseif $plug.installable == true}
                    <a class="button_link" href="?serendipity[adminModule]=plugins&amp;serendipity[pluginPath]={$plug.pluginPath}&amp;serendipity[install_plugin]={$plug.plugin_class}{if isset($plug.customURI)}{$plug.customURI}{/if}" title="{$CONST.INSTALL}"><span class="icon-download"></span><span class="visuallyhidden"> {$CONST.INSTALL}</span></a>
                {else}
                    <span class="block_level"><span class="icon-ok-circled"></span> {$CONST.ALREADY_INSTALLED}</span>
                {/if}
                </div>
            </li>
        {/foreach}
        </ul>
    {/foreach}
{else}
    {if $save}
    <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.DONE}:{$CONST.SETTINGS_SAVED_AT|sprintf:"$timestamp"}</span>
    {/if}
    <h2>{$CONST.BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS}</h2>
    <script src="{serendipity_getFile file="admin/js/jquery.autoscroll.js"}"></script>
    <script src="{serendipity_getFile file="admin/js/jquery.sortable.js"}"></script>
    <script src="{serendipity_getFile file="admin/js/dragdrop.js"}"></script>
    <section id="pluginlist_sidebar">
        <h3>{$CONST.SIDEBAR_PLUGINS}</h3>

        <a class="button_link" href="?serendipity[adminModule]=plugins&amp;serendipity[adminAction]=addnew" title='{$CONST.CLICK_HERE_TO_INSTALL_PLUGIN|sprintf:"{$CONST.SIDEBAR_PLUGIN}"}'>{$CONST.CLICK_HERE_TO_INSTALL_PLUGIN|sprintf:"{$CONST.SIDEBAR_PLUGIN}"}</a>

        {$backend_plugins_sidebar_header}
        {$sidebar_plugins}
    </section>

    <section id="pluginlist_event">
        <h3>{$CONST.EVENT_PLUGINS}</h3>

        <a class="button_link" href="?serendipity[adminModule]=plugins&amp;serendipity[adminAction]=addnew&amp;serendipity[type]=event" title='{$CONST.CLICK_HERE_TO_INSTALL_PLUGIN|sprintf:"{$CONST.EVENT_PLUGIN}"}'>{$CONST.CLICK_HERE_TO_INSTALL_PLUGIN|sprintf:"{$CONST.EVENT_PLUGIN}"}</a>

        {$backend_plugins_event_header}
        {$event_plugins}
    </section>
    {if $memsnaps}
    <section>
        <h3>Memory Usage</h3>

        <pre>{$memSnaps|print_r}</pre>
    </section>
    {/if}
{/if}

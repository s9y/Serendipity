{if $delete_yes}
    <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.DELETED_GROUP|sprintf:"{$group_id|escape:"html"}":"{$group.name|escape:"html"}"}</span>
{/if}
{if $save_new}
    <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.CREATED_GROUP|sprintf:"{$group_id|escape:"html"}":"{$group.name|escape:"html"}"}</span>
{/if}
{if $save_edit}
    <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.MODIFIED_GROUP|sprintf:"{$name|escape:"html"}"}</span>
{/if}

{if !$delete}
    <h2>{$CONST.GROUP}</h2>

    <ul id="serendipity_groups" class="plainList zebra_list">
    {foreach $groups as $group}
        <li class="clearfix {cycle values="odd,even"}">
            <span class="group_name"><span class="icon-users"></span> {$group.name|escape:"html"}</span>
            <ul class="plainList clearfix edit_actions">
                <li><a class="button_link" href="?serendipity[adminModule]=groups&amp;serendipity[adminAction]=edit&amp;serendipity[group]={$group.id}" title="{$CONST.EDIT} {$group.name|escape:"html"}" rel="tooltip"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                <li><a class="button_link" href="?{$deleteFormToken}&amp;serendipity[adminModule]=groups&amp;serendipity[adminAction]=delete&amp;serendipity[group]={$group.id}" title="{$CONST.DELETE} {$group.name|escape:"html"}" rel="tooltip"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a></li>
            </ul>
        </li>
    {/foreach}
    </ul>
    {if $start}
    <form action="?serendipity[adminModule]=groups" method="post">
        <div class="form_buttons">
            <input name="NEW" type="submit" value="{$CONST.CREATE_NEW_GROUP}">
        </div>
    </form>
    {/if}
{/if}

{if $edit || $new}
    <h3>{if $edit}{$CONST.EDIT}{else}{$CONST.CREATE}{/if}</h3>

    <form id="serendipity_admin_groups" class="configuration_group option_list" action="?serendipity[adminModule]=groups" method="post">
        {$formToken}
    {if $edit}
        <input name="serendipity[group]" type="hidden" value="{$from.id}">
    {/if}
        <div class="clearfix odd form_field">
            <label for="group_name">{$CONST.NAME}</label>
            <input id="group_name" name="serendipity[name]" type="text" value="{$from.name|escape:"html"}">
        </div>

        <div class="clearfix even form_select">
            <label for="group_members">{$CONST.USERCONF_GROUPS}</label>
            <select id="group_members" name="serendipity[members][]" multiple size="5">
                {foreach $allusers as $user}
                <option value="{$user.authorid}" {if isset($selected.{$user.authorid})} selected{/if} >{$user.realname|escape:"html"}</option>
                {/foreach}
            </select>
        </div>
        
        <ul>
        {foreach $perms as $perm}
            {if {{$perm@key}|truncate:"2":""} == 'f_'}{continue}{/if}
            {if !isset($section)}
                {$section=$perm@key}
            {/if}
            {if $section != {$perm@key} && {{$perm@key}|truncate:"{$section|count_characters}":""} == $section}
                {$indent="&nbsp;&nbsp;"}
            {else}
                {if $section != {$perm@key}}
                    {$indent="<br>"}
                    {$section="{$perm@key}"}
                {/if}
            {/if}
            {if ! ($perm@first || ($in_indent != true && $indent == "&nbsp;&nbsp;"))}
                </li>
            {/if}
            {if $indent == "&nbsp;&nbsp;" && $in_indent != true}
                {$in_indent=true}
                <ul>
            {/if}
            {if $indent == "<br>" && $in_indent == true}
                {$in_indent=false}
                </ul></li>
            {/if}
            <li>
            {if !$perm.permission}
                <div><span class="perm_name hilite_b">
                {$perm.permission_name|escape:"html"}:</span> <span class="perm_status">{(isset($from.{$perm@key}) && $from.{$perm@key} == "true") ? $CONST.YES : $CONST.NO}</span></div>
            {else}
                <div class="form_check">
                    <input id="{{$perm@key}|escape:"html"}" name="serendipity[{{$perm@key}|escape:"html"}]" type="checkbox" value="true"{if isset({$from.{$perm@key}}) && {$from.{$perm@key}} == "true"} checked="checked"{/if}>
                    <label for="{{$perm@key}|escape:"html"}">{$perm.permission_name|escape:"html"}</label>
                </div>
            {/if}
        {/foreach}
        </li></ul>

        {if $enablePluginACL}
            <div class="clearfix form_select">
                <label for="forbidden_plugins">{$CONST.PERMISSION_FORBIDDEN_PLUGINS}</label>
                <select id="forbidden_plugins" name="serendipity[forbidden_plugins][]" multiple size="5">
                {foreach $allplugins as $plugin}
                    <option value="{{$plugin@key}|escape:"url"}{if $plugin.has_permission == false} selected{/if}">{$plugin.b->properties.name|escape:"html"}</option>
                {/foreach}
                </select>
            </div>

            <div class="clearfix form_select">
                <label for="forbidden_hooks">{$CONST.PERMISSION_FORBIDDEN_HOOKS}</label>
                <select name="serendipity[forbidden_hooks][]" multiple size="5">
                {foreach $allhooks as $hook}
                    <option value="{{$hook@key}|escape:"url"}"{$hook.has_permission == false} 'selected'}>{{$hook@key}|escape:"html"}</option>
                {/foreach}
                </select>
            </div>
        {else}
            <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.PERMISSION_FORBIDDEN_ENABLE_DESC}</span>
        {/if}
            <div class="form_buttons">
        {if $edit}
                <input name="SAVE_EDIT" type="submit" value="{$CONST.SAVE}">
                <input name="SAVE_NEW" type="submit" value="{$CONST.CREATE_NEW_GROUP}">
        {else}
                <input name="SAVE_NEW" type="submit" value="{$CONST.CREATE_NEW_GROUP}">
        {/if}
            </div>
    </form>
{else}
    {if $delete}
    <form action="?serendipity[adminModule]=groups" method="post">
        {$formToken}
        <input name="serendipity[group]" type="hidden" value="{$group_id|escape:"html"}">

        <h2>{$CONST.MANAGE_GROUPS}</h2>

        <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.DELETE_GROUP|sprintf:"{$group_id}":"{$group.name|escape:"html"}"}</span>
        
        <div id="groups_delete_action" class="form_buttons">
            <input class="state_cancel" name="NO" type="submit" value="{$CONST.NOT_REALLY}">
            <input name="DELETE_YES" type="submit" value="{$CONST.DUMP_IT}">
        </div>
    </form>
    {/if}
{/if}

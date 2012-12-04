{* HTML5: Yes *}
{* jQuery: NN *}

{if $delete_yes}
    <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.DELETED_GROUP|sprintf:"{$group_id|escape:"html"}":"{$group.name|escape:"html"}"}</span>
{/if}
{if $save_new}
    <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.CREATED_GROUP|sprintf:"{$group_id|escape:"html"}":"{$group.name|escape:"html"}"}</span>
{/if}
{if $save_edit}
    <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.MODIFIED_GROUP|sprintf:"{$name|escape:"html"}"}</span>
{/if}

{if !$delete}
    <h2>{$CONST.GROUP}</h2>

    <ul id="serendipity_groups" class="plainList">
    {foreach $groups as $group}
        <li class="clearfix">
            <span class="group_name"><span class="icon-users"></span> {$group.name|escape:"html"}</span>
            <ul class="plainList edit_actions">
                <li><a class="icon_link" href="?serendipity[adminModule]=groups&amp;serendipity[adminAction]=edit&amp;serendipity[group]={$group.id}" title="{$CONST.EDIT} {$group.name|escape:"html"}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                {* BUG: Doesn't skip to the deletion process - What does that mean??? *}
                <li><a class="icon_link" href="?{$deleteFormToken}&amp;serendipity[adminModule]=groups&amp;serendipity[adminAction]=delete&amp;serendipity[group]={$group.id}" title="{$CONST.DELETE} {$group.name|escape:"html"}"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a></li>
            </ul>
        </li>
    {/foreach}
    </ul>
    {if $start}
    <form action="?serendipity[adminModule]=groups" method="post">
        <input name="NEW" type="submit" value="{$CONST.CREATE_NEW_GROUP}">
    </form>
    {/if}
{/if}

{if $edit || $new}
    <form action="?serendipity[adminModule]=groups" method="post">
        {$formToken}
    {if $edit}
        <h3>{$CONST.EDIT}</h3>

        <input name="serendipity[group]" type="hidden" value="{$from.id}">
    {else}
        <h3>{$CONST.CREATE}</h3>
    {/if}
        <div class="form_field">
            <label for="group_name">{$CONST.NAME}</label>
            {* BUG: Doesn't correctly pull the group name *}
            <input id="group_name" name="serendipity[name]" type="text" value="{$from.name|escape:"html"}">
        </div>

        <div class="form_select">
            <label for="group_members">{$CONST.USERCONF_GROUPS}</label>
            <select id="group_members" name="serendipity[members][]" multiple="multiple" size="5">
                {foreach $allusers as $user}
                <option value="{$user.authorid}" {if isset($selected.{$user.authorid})} selected="selected"{/if} >{$user.realname|escape:"html"}</option>
                {/foreach}
            </select>
        </div>
        {foreach $perms as $perm}
        {* TODO: major rewrite *}
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
            {if !$perm.permission}
                <div>
                    <span class="perm_name">{$indent} {$perm.permission_name|escape:"html"}</span>
                    <span class="perm_status">{(isset($from.{$perm@key}) && $from.{$perm@key} == "true") ? $CONST.YES : $CONST.NO}</span>
                </div>
            {else}
                <div class="form_check">
                    {$indent} <label for="{{$perm@key}|escape:"html"}">{$perm.permission_name|escape:"html"}</label>
                    <input id="{{$perm@key}|escape:"html"}" name="serendipity[{{$perm@key}|escape:"html"}]" type="checkbox" value="true"{if isset({$from.{$perm@key}}) && {$from.{$perm@key}} == "true"} checked="checked"{/if}>
                </div>
            {/if}
        {/foreach}
        {if $enablePluginACL}
            <div class="form_select">
                <label for="forbidden_plugins">{$CONST.PERMISSION_FORBIDDEN_PLUGINS}</label>
                <select id="forbidden_plugins" name="serendipity[forbidden_plugins][]" multiple="multiple" size="5">
                {foreach $allplugins as $plugin}
                    <option value="{{$plugin@key}|escape:"url"}{if $plugin.has_permission == false} selected="selected"{/if}">{$plugin.b->properties.name|escape:"html"}</option>
                {/foreach}
                </select>
            </div>

            <div class="form_select">
                <label for="forbidden_hooks">{$CONST.PERMISSION_FORBIDDEN_HOOKS}</label>
                <select name="serendipity[forbidden_hooks][]" multiple="multiple" size="5">
                {foreach $allhooks as $hook}
                    <option value="{{$hook@key}|escape:"url"}"{$hook.has_permission == false} 'selected="selected"'}>{{$hook@key}|escape:"html"}</option>
                {/foreach}
                </select>
            </div>
        {else}
            <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.PERMISSION_FORBIDDEN_ENABLE_DESC}</span>
        {/if}
        {if $edit}
            <input name="SAVE_EDIT" type="submit" value="{$CONST.SAVE}"> {$CONST.WORD_OR} <input name="SAVE_NEW" type="submit" value="{$CONST.CREATE_NEW_GROUP}">
        {else}
            <input name="SAVE_NEW" type="submit" value="{$CONST.CREATE_NEW_GROUP}">
        {/if}
    </form>
{else}
    {if $delete}
    <form action="?serendipity[adminModule]=groups" method="post">
        {$formToken}
        <input name="serendipity[group]" type="hidden" value="{$group_id|escape:"html"}">

        <h2>{$CONST.DELETE_GROUP|sprintf:"{$group_id}":"{$group.name|escape:"html"}"}</h2>
        
        <div id="groups_delete_action">
            <input name="DELETE_YES" type="submit" value="{$CONST.DUMP_IT}">
            <input name="NO" type="submit" value="{$CONST.NOT_REALLY}">
        </div>
    </form>
    {/if}
{/if}

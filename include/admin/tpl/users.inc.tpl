{* HTML5: Yes *}
{* jQuery: NN *}

{if $delete_yes}
    {if $no_delete_permission}
            <span class="msg_error"><span class="icon-attention"></span> {$CONST.CREATE_NOT_AUTHORIZED}</span>
    {else}
        {if $no_delete_permission_userlevel}
            <span class="msg_error"><span class="icon-attention"></span> {$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</span>
        {else}
            {if $delete_permission}
            <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.DELETED_USER|sprintf:"{$user|escape:"html"}":"{$realname|escape:"html"}"}</span>
            {else}
            <span class="msg_error"><span class="icon-attention"></span> {$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</span>
            {/if}
        {/if}
    {/if}
{/if}
{if $save_new}
    {if $no_save_permission}
            <span class="msg_error"><span class="icon-attention"></span> {$CONST.CREATE_NOT_AUTHORIZED}</span>
    {else}
        {if $no_group_selected}
            <span class="msg_error"><span class="icon-attention"></span> {$CONST.WARNING_NO_GROUPS_SELECTED}</span>
        {/if}
            <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.CREATED_USER|sprintf:"# {$user|escape:"html"}":"{$realname|escape:"html"}"}</span>
    {/if}
{/if}
{if $save_edit}
    {if $no_edit_permission}
            <span class="msg_error"><span class="icon-attention"></span> {$CONST.CREATE_NOT_AUTHORIZED}</span>
    {else}
        {if $no_edit_permission_userlevel}
            <span class="msg_error"><span class="icon-attention"></span> {$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</span>
        {else}
            {if $no_group_selected}
            <span class="msg_error"><span class="icon-attention"></span> {$CONST.WARNING_NO_GROUPS_SELECTED}</span>
            {/if}
            <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.MODIFIED_USER|sprintf:"{$realname|escape:"html"}"}</span>
        {/if}
    {/if}
{/if}
{if $delete == false}
    <h2>{$CONST.USER} ({$CONST.USER_LEVEL})</h2>

    <ul id="serendipity_users" class="plainList">
    {foreach $users as $user}
        {if $user.isEditable}
        <li class="clearfix">
            <span class="user_name user_{if $user.userlevel >= {$CONST.USERLEVEL_ADMIN}}admin{else}{if $user.userlevel >= {$CONST.USERLEVEL_CHIEF}}chief{else}editor{/if}{/if}"><span class="icon-user"></span> {$user.realname|escape:"html"} ({$user.userlevel})</span>
            <ul class="plainList edit_actions">
                <li><a class="icon_link" href="{$user.authorUrl}" title="{$CONST.PREVIEW} {$user.realname}"><span class="icon-eye"></span><span class="visuallyhidden"> {$CONST.PREVIEW}</span></a></li>
                <li><a class="icon_link" href="?serendipity[adminModule]=users&amp;serendipity[adminAction]=edit&amp;serendipity[userid]={$user.authorid}#editform" title="{$CONST.EDIT} {$user.realname|escape:"html"}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                <li><a class="icon_link" href="?{$urlFormToken}&amp;serendipity[adminModule]=users&amp;serendipity[adminAction]=delete&amp;serendipity[userid]=$user.authorid" title="{$CONST.DELETE} {$user.realname|escape:"html"}"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a></li>
            </ul>
        </li>
        {/if}
    {/foreach}
    </ul>
    {if $new}
    <form action="?serendipity[adminModule]=users" method="post">
        <input name="NEW" type="submit" value="{$CONST.CREATE_NEW_USER}">
    </form>
    {/if}
{/if}
{if $show_form}
    <form{if $adminAction == 'edit'} id="editform"{/if} action="?serendipity[adminModule]=users#editform" method="post">
        {$formToken}
        {if $adminAction == 'edit'}{if $create_permission}<input name="serendipity[user]" type="hidden" value="{$from.authorid}">{/if}{/if}
        <h3>{if $adminAction == 'edit'}{if $no_create_permission}{$CONST.CREATE_NOT_AUTHORIZED}: {$CONST.EDIT}{else}{if $create_permission}{$CONST.EDIT}{else}{$CONST.CREATE_NOT_AUTHORIZED}: {$CONST.EDIT}{/if}{/if}{else}{$CONST.CREATE}{/if}</h3>
        {$config}
    {if $adminAction == 'edit'}
        <input name="SAVE_EDIT" type="submit" value="{$CONST.SAVE}">
    {else}
        <input name="SAVE_NEW" type="submit" value="{$CONST.CREATE_NEW_USER}">
    {/if}
    </form>
{else}
    {if $delete}
    <form action="?serendipity[adminModule]=users" method="post">
        {$formToken}
        <input name="serendipity[user]" type="hidden" value="{$userid}">
        
        <fieldset class="users_delete_action">
            <legend><span>{$CONST.DELETE_USER|sprintf:"{$userid}":"{$realname|escape:"html"}"}</span></legend>
            <input name="DELETE_YES" type="submit" value="{$CONST.DUMP_IT}">
            <input name="NO" type="submit" value="{$CONST.NOT_REALLY}">
        </fieldset>
    </form>
    {/if}
{/if}

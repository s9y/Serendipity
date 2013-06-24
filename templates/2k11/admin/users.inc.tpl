{if $delete_yes}
    {if $no_delete_permission}
            <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.CREATE_NOT_AUTHORIZED}</span>
    {else}
        {if $no_delete_permission_userlevel}
            <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</span>
        {else}
            {if $delete_permission}
            <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.DELETED_USER|sprintf:"{$user|escape:"html"}":"{$realname|escape:"html"}"}</span>
            {else}
            <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</span>
            {/if}
        {/if}
    {/if}
{/if}
{if $save_new}
    {if $no_save_permission}
            <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.CREATE_NOT_AUTHORIZED}</span>
    {else}
        {if $no_group_selected}
            <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.WARNING_NO_GROUPS_SELECTED}</span>
        {/if}
            <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.CREATED_USER|sprintf:"# {$user|escape:"html"}":"{$realname|escape:"html"}"}</span>
    {/if}
{/if}
{if $save_edit}
    {if $no_edit_permission}
            <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.CREATE_NOT_AUTHORIZED}</span>
    {else}
        {if $no_edit_permission_userlevel}
            <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</span>
        {else}
            {if $no_group_selected}
            <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.WARNING_NO_GROUPS_SELECTED}</span>
            {/if}
            <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.MODIFIED_USER|sprintf:"{$realname|escape:"html"}"}</span>
        {/if}
    {/if}
{/if}
{if $delete == false}
    <h2>{$CONST.USER} ({$CONST.USER_LEVEL})</h2>

    <ul id="serendipity_users" class="plainList zebra_list">
    {foreach $users as $user}
        {if $user.isEditable}
        <li class="clearfix {cycle values="odd,even"}">
            <span class="user_name"><span class="icon-user"></span> {$user.realname|escape:"html"} ({$user.userlevel})</span>
            
            <ul class="plainList clearfix edit_actions">
                <li><a class="button_link" href="{$user.authorUrl}" title="{$CONST.PREVIEW} {$user.realname}"><span class="icon-eye"></span><span class="visuallyhidden"> {$CONST.PREVIEW}</span></a></li>
                <li><a class="button_link" href="?serendipity[adminModule]=users&amp;serendipity[adminAction]=edit&amp;serendipity[userid]={$user.authorid}#editform" title="{$CONST.EDIT} {$user.realname|escape:"html"}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                <li><a class="button_link" href="?{$urlFormToken}&amp;serendipity[adminModule]=users&amp;serendipity[adminAction]=delete&amp;serendipity[userid]=$user.authorid" title="{$CONST.DELETE} {$user.realname|escape:"html"}"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a></li>
            </ul>
        </li>
        {/if}
    {/foreach}
    </ul>
    {if $new}
    <form action="?serendipity[adminModule]=users" method="post">
        <div class="form_buttons">
            <input name="NEW" type="submit" value="{$CONST.CREATE_NEW_USER}">
        </div>
    </form>
    {/if}
{/if}
{if $show_form}
    <form{if $adminAction == 'edit'} id="editform"{/if} action="?serendipity[adminModule]=users#editform" method="post">
        {$formToken}
        {if $adminAction == 'edit'}{if $create_permission}<input name="serendipity[user]" type="hidden" value="{$from.authorid}">{/if}{/if}
        <h2>{if $adminAction == 'edit'}{if $no_create_permission}{$CONST.CREATE_NOT_AUTHORIZED}: {$CONST.EDIT}{else}{if $create_permission}{$CONST.EDIT}{else}{$CONST.CREATE_NOT_AUTHORIZED}: {$CONST.EDIT}{/if}{/if}{else}{$CONST.CREATE}{/if}</h2>
        {$config}
        <div class="form_buttons">
        {if $adminAction == 'edit'}
            <input name="SAVE_EDIT" type="submit" value="{$CONST.SAVE}">
        {else}
            <input name="SAVE_NEW" type="submit" value="{$CONST.CREATE_NEW_USER}">
        {/if}
        </div>
    </form>
{else}
    {if $delete}
    <form action="?serendipity[adminModule]=users" method="post">
        {$formToken}
        <input name="serendipity[user]" type="hidden" value="{$userid}">
        
        <div class="users_delete_action">
            <h2>{$CONST.MANAGE_USERS}</h2>

            <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.DELETE_USER|sprintf:"{$userid}":"{$realname|escape:"html"}"}</span>

            <div class="form_buttons">
                <input class="state_cancel" name="NO" type="submit" value="{$CONST.NOT_REALLY}">
                <input name="DELETE_YES" type="submit" value="{$CONST.DUMP_IT}">
            </div>
        </div>
    </form>
    {/if}
{/if}

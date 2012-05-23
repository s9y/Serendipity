{if $delete_yes}
    {if $no_delete_permission}
        <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.CREATE_NOT_AUTHORIZED}</div>
    {else}
        {if $no_delete_permission_userlevel}
            <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</div>
        {else}
            {if $delete_permission}
                <div class="serendipityAdminMsgSuccess msg_success">
                    <img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />
                    {$CONST.DELETED_USER|sprintf:"{$user|escape:"html"}":"{$realname|escape:"html"}"}
                </div>
            {else}
                <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</div>
            {/if}
        {/if}
    {/if}
{/if}

{if $save_new}
    {if $no_save_permission}
        <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.CREATE_NOT_AUTHORIZED}</div>
    {else}
        {if $no_group_selected}
            <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.WARNING_NO_GROUPS_SELECTED}</div>
        {/if}
        <div class="serendipityAdminMsgSuccess msg_success">
            <img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />
            {$CONST.CREATED_USER|sprintf:"# {$user|escape:"html"}":"{$realname|escape:"html"}"}
            </div>
    {/if}
{/if}

{if $save_edit}
    {if $no_edit_permission}
        <div class="serendipityAdminMsgError msg_error">
            <img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />
            {$CONST.CREATE_NOT_AUTHORIZED}
        </div>
    {else}
        {if $no_edit_permission_userlevel}
            <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</div>
        {else}
            {if $no_group_selected}
                <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.WARNING_NO_GROUPS_SELECTED}</div>
            {/if}
            <div class="serendipityAdminMsgSuccess msg_success">
                <img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />
                {$CONST.MODIFIED_USER|sprintf:"{$realname|escape:"html"}"}
                </div>
        {/if}
    {/if}
{/if}

{if $delete == false}
    <table width="100%">
        <tr>
            <td><strong>{$CONST.USER}</strong></td>
            <td width="100" align="center"><strong>{$CONST.USER_LEVEL}</strong></td>
            <td width="300">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">
            {foreach $users as $user}
                {if $user.isEditable}
                    <div class="serendipity_admin_list_item serendipity_admin_list_item_{if $group@iteration is even} even {else} uneven {/if}">
                        <table width="100%">
                            <tr>
                                {* TODO: Add username to list once tom figures out how to fix uneven rowstyles *}
                                <td><img src="{if $user.userlevel >= {$CONST.USERLEVEL_ADMIN}}
                                                {serendipity_getFile file="admin/img/user_admin.png"}
                                        {else}
                                            {if $user.userlevel >= {$CONST.USERLEVEL_CHIEF}}
                                                {serendipity_getFile file="admin/img/user_chief.png"}
                                            {else}
                                                {serendipity_getFile file="admin/img/user_editor.png"}
                                            {/if}
                                        {/if}" alt="" style="border: 0px none ; vertical-align: bottom; display: inline;" />{$user.realname|escape:"html"}</td>
                                <td width="100" align="center">{$user.userlevel}</td>
                                <td width="300" align="right"> 
                                    <a target="_blank" href="{$user.authorUrl}" title="{$CONST.PREVIEW} {$user.realname}" class="serendipityIconLink">
                                    <img src="{serendipity_getFile file="admin/img/zoom.png"}" alt="{$CONST.PREVIEW}" />{$CONST.PREVIEW}</a>
                                    <a href="?serendipity[adminModule]=users&amp;serendipity[adminAction]=edit&amp;serendipity[userid]={$user.authorid}#editform" title="{$CONST.EDIT} {$user.realname|escape:"html"}" class="serendipityIconLink"><img src="{serendipity_getFile file="admin/img/edit.png"}" alt="{$CONST.EDIT} {$user.realname|escape:"html"}" />{$CONST.EDIT}</a>
                                    <a href="?{$urlFormToken}&amp;serendipity[adminModule]=users&amp;serendipity[adminAction]=delete&amp;serendipity[userid]=$user.authorid" title="{$CONST.DELETE} {$user.realname|escape:"html"}" class="serendipityIconLink"><img src="{serendipity_getFile file="admin/img/delete.png"}" alt="{$CONST.DELETE} {$user.realname|escape:"html"}" />{$CONST.DELETE}</a></td>
                            </tr>
                        </table>
                        </div>
                {/if}
            {/foreach}
            </td>
        </tr>
        {if $new}
            <tr>
                <td colspan="3" align="right">
                    <form action="?serendipity[adminModule]=users" method="post">
                        <input type="submit" name="NEW"   value="{$CONST.CREATE_NEW_USER}" class="serendipityPrettyButton input_button" />
                    </form>
                </td>
            </tr>
        {/if}
    </table>
{/if}

{if $show_form}
    <br />
    <br />
    <hr noshade="noshade">
    <form action="?serendipity[adminModule]=users#editform" method="post">
        {$formToken}
        <div>
            <h3>
                {if $adminAction == "edit"}
                    <a id="editform"></a>
                    {if $no_create_permission}
                        <strong>{$CONST.CREATE_NOT_AUTHORIZED}</strong><br />
                        {$CONST.EDIT}
                    {else}
                        {if $create_permission}
                            {$CONST.EDIT}
                            <input type="hidden" name="serendipity[user]" value="{$from.authorid}" />
                        {else}
                            <strong>{$CONST.CREATE_NOT_AUTHORIZED}</strong><br />
                            {$CONST.EDIT}
                        {/if}
                    {/if}
                {else}
                    {$CONST.CREATE}
                {/if}
            </h3>

            {$config}

            {if $adminAction == "edit"}
                <input type="submit" name="SAVE_EDIT"   value="{$CONST.SAVE}" class="serendipityPrettyButton input_button" />
            {else}
                <input type="submit" name="SAVE_NEW" value="{$CONST.CREATE_NEW_USER}" class="serendipityPrettyButton input_button" />
            {/if}
        </div>
    </form>
{else}
    {if $delete}
        <form action="?serendipity[adminModule]=users" method="post">
    <div>
    {$CONST.DELETE_USER|sprintf:"{$userid}":"{$realname|escape:"html"}"}
        <br /><br />
        {$formToken}
        <input type="hidden" name="serendipity[user]" value="{$userid}" />
        <input type="submit" name="DELETE_YES" value="{$CONST.DUMP_IT}" class="serendipityPrettyButton input_button" />
        <input type="submit" name="NO" value="{$CONST.NOT_REALLY}" class="serendipityPrettyButton input_button" />
    </div>
</form>
    {/if}
{/if}
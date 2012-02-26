{if $adminAction == "save"}
    {if $not_authorized}
        <div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</div>
    {elseif $empty_username}
        <div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.USERCONF_CHECK_USERNAME_ERROR}</div>
    {elseif $password_check_fail}
        <div class="serendipityAdminMsgError"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.USERCONF_CHECK_PASSWORD_ERROR}</div>
    {else}
        <div class="serendipityAdminMsgSuccess"><img width="22px" height="22px" style="border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />{$CONST.MODIFIED_USER|sprintf:"{$realname|escape:"html"}"} ?></div>
    {/if}
{/if}


<form action="?serendipity[adminModule]=personal&amp;serendipity[adminAction]=save" method="post">
    {$formToken}
    {$config}
    <div align="right">
        <input class="serendipityPrettyButton input_button" type="submit" name="SAVE"   value="{$CONST.SAVE}" /></div>
</form>
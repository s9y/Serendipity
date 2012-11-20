{if $adminAction == "save"}
    {if $not_authorized}
        <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</div>
    {elseif $empty_username}
        <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.USERCONF_CHECK_USERNAME_ERROR}</div>
    {elseif $password_check_fail}
        <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />{$CONST.USERCONF_CHECK_PASSWORD_ERROR}</div>
    {else}
        <div class="serendipityAdminMsgSuccess msg_success"><img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />{$CONST.MODIFIED_USER|sprintf:"{$realname|escape:"html"}"} ?></div>
    {/if}
{/if}


<form action="?serendipity[adminModule]=personal&amp;serendipity[adminAction]=save" method="post">
    {$formToken}
    {$config}
    <div align="right">
        <input class="serendipityPrettyButton input_button" type="submit" name="SAVE"   value="{$CONST.SAVE}" /></div>
</form>
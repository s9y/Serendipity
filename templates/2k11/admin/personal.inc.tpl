    <h2>{$CONST.PERSONAL_SETTINGS}</h2>
{if $adminAction == 'save'}
    {if $not_authorized}
    <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.CREATE_NOT_AUTHORIZED_USERLEVEL}</span>
    {elseif $empty_username}
    <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.USERCONF_CHECK_USERNAME_ERROR}</span>
    {elseif $password_check_fail}
    <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.USERCONF_CHECK_PASSWORD_ERROR}</span>
    {else}
    <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.MODIFIED_USER|sprintf:"{$realname|escape:"html"}"} ?></span>
    {/if}
{/if}
<form action="?serendipity[adminModule]=personal&amp;serendipity[adminAction]=save" method="post">
    {$formToken}
    {$config}
    <div class="form_buttons">
        <input name="SAVE" type="submit" value="{$CONST.SAVE}">
    </div>
</form>

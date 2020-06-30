{serendipity_hookPlugin hook="entries_header"}
<article class="clearfix serendipity_entry">
    <h2>{$CONST.BLOG_SUBSCRIPTION_TITLE}</h2>
            <form id="subscribe" class="clearfix subscribe" action="{$smarty_subscribe_vars['subscribe_path']}" method="post">
                    <p>
                    {if $smarty_subscribe_vars['type'] == 'blog'}
                        {$CONST.BLOG_SUBSCRIPTION_BLAHBLAH}
                    {elseif $smarty_subscribe_vars['type'] == 'author'}
                        {$CONST.BLOG_SUBSCRIPTION_AUTHOR|sprintf:$smarty_subscribe_vars['type_name']}
                    {elseif $smarty_subscribe_vars['type'] == 'category'}
                        {$CONST.BLOG_SUBSCRIPTION_CATEGORY|sprintf:$smarty_subscribe_vars['type_name']}
                    {/if}
                    {if $smarty_subscribe_vars['allowSubscriptionsOptIn'] }
                        {$CONST.BLOG_SUBSCRIPTION_OPTIN}
                    {/if}
                    </p>
                    <div class="form_field">
                        <label for="subscribe_email">{$CONST.EMAIL}:</label>
                        <input id="subscribe_email" name="serendipity[email_sub]" type="email" placeholder="{$CONST.TWOK11_PLACE_MAIL}" autofocus size='30'>
                    </div>

                    <div class="form_buttons">
                        <input id="subscribe_send" name="serendipity[subscribe]" type="submit" value="{$CONST.SUBSCRIBE}">
                    </div>
            </form>
</article>
{serendipity_hookPlugin hook="entries_footer"}

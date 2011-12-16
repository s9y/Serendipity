    <div class="serendipity_staticpage{if $plugin_contactform_articleformat} serendipity_entry{/if}">
        <h2>{if $plugin_contactform_articleformat}{$plugin_contactform_name}{else}{$plugin_contactform_pagetitle}{/if}</h2>
            
        <div class="serendpity_preface content">
        {$plugin_contactform_preface}
        </div>

    {if $is_contactform_sent}
        <p class="serendipity_msg_notice">{$plugin_contactform_sent}</p>
    {else}
        {if $is_contactform_error}
        <p class="serendipity_msg_important">{$plugin_contactform_error}</p>
        {foreach from=$comments_messagestack item="message"}
        <p class="serendipity_msg_important">{$message}</p>
        {/foreach}
        {/if}

        <div class="serendipityCommentForm">
            <a id="serendipity_CommentForm"></a>
            
            <form id="serendipity_comment" action="{$commentform_action}#feedback" method="post">
            <div>
	            <input type="hidden" name="serendipity[subpage]" value="{$commentform_sname}"/>
	            <input type="hidden" name="serendipity[commentform]" value="true"/>
            </div>
            <div class="form_field">
                <label for="serendipity_commentform_name">{$CONST.NAME}</label>
                <input id="serendipity_commentform_name" name="serendipity[name]" type="text" value="{$commentform_name}" placeholder="{$CONST.TWOK11_PLACE_NAME}"/>
            </div>
            
            <div class="form_field">
                <label for="serendipity_commentform_email">{$CONST.EMAIL}</label>
                <input id="serendipity_commentform_email" name="serendipity[email]" type="email" value="{$commentform_email}" placeholder="{$CONST.TWOK11_PLACE_MAIL}"/>
            </div>
            
            <div class="form_field">
                <label for="serendipity_commentform_url">{$CONST.HOMEPAGE}</label>
                <input id="serendipity_commentform_url" name="serendipity[url]" type="url" value="{$commentform_url}" placeholder="{$CONST.TWOK11_PLACE_URL}"/>
            </div>
            
            <div class="form_tarea">
                <label for="serendipity_commentform_comment">{$plugin_contactform_message}</label>
                <textarea id="serendipity_commentform_comment" name="serendipity[comment]" rows="10" placeholder="{$CONST.TWOK11_PLACE_MESSAGE}">{$commentform_data}</textarea>
            </div>
            {serendipity_hookPlugin hook="frontend_comment" data=$commentform_entry}
            <input id="serendipity_submit" name="serendipity[submit]" type="submit" value="{$CONST.TWOK11_SEND_MAIL}"/>
            </form>
        </div>
    {/if}
    </div>

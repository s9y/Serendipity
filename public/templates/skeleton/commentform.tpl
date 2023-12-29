<div id="serendipityCommentFormC" class="serendipityCommentForm">
    <div id="serendipity_replyform_0"></div>
    <a id="serendipity_CommentForm"></a>
{if $is_moderate_comments}
    <p class="serendipity_msg_important">{$CONST.COMMENTS_WILL_BE_MODERATED}</p>
{/if}
    <form id="serendipity_comment" action="{$commentform_action}#feedback" method="post">
        <input type="hidden" name="serendipity[entry_id]" value="{$commentform_id}">

        <div class="form_field">
            <label for="serendipity_commentform_name">{$CONST.NAME}{if $required_fields.name}*{/if}</label>
            <input id="serendipity_commentform_name" class="u-full-width" type="text" name="serendipity[name]" value="{$commentform_name}"{if $required_fields.name} required{/if}>
        </div>

        <div class="form_field">
            <label for="serendipity_commentform_email">{$CONST.EMAIL}{if $required_fields.email}*{/if}</label>
            <input id="serendipity_commentform_email" class="u-full-width" type="email" name="serendipity[email]" value="{$commentform_email}"{if $required_fields.email} required{/if}>
        </div>

        <div class="form_field">
            <label for="serendipity_commentform_url">{$CONST.HOMEPAGE}{if $required_fields.url}*{/if}</label>
            <input id="serendipity_commentform_url" class="u-full-width" type="url" name="serendipity[url]" value="{$commentform_url}"{if $required_fields.url} required{/if}>
        </div>

        <div class="form_select">
            <label for="serendipity_replyTo">{$CONST.IN_REPLY_TO}</label>
            {$commentform_replyTo}
        </div>

        <div class="form_area">
            <label for="serendipity_commentform_comment">{$CONST.COMMENT}{if $required_fields.comment}*{/if}</label>
            <textarea id="serendipity_commentform_comment" class="u-full-width" rows="10" name="serendipity[comment]"{if $required_fields.comment} required{/if}>{$commentform_data}</textarea>
        </div>
        {serendipity_hookPlugin hook="frontend_comment" data=$commentform_entry}
    {if $is_commentform_showToolbar}
        <label for="checkbox_remember">
            <input id="checkbox_remember" type="checkbox" name="serendipity[remember]" {$commentform_remember}>
            <span class="label-body">{$CONST.REMEMBER_INFO}</span>
        </label>
        {if $is_allowSubscriptions}
        <label for="checkbox_subscribe">
            <input id="checkbox_subscribe" type="checkbox" name="serendipity[subscribe]" {$commentform_subscribe}>
            <span class="label-body">{$CONST.SUBSCRIBE_TO_THIS_ENTRY}</span>
        </label>
        {/if}
    {/if}
        <div class="form_buttons">
            <input id="serendipity_preview" type="submit" name="serendipity[preview]" value="{$CONST.PREVIEW}">
            <input id="serendipity_submit" class="button-primary" type="submit" name="serendipity[submit]" value="{$CONST.SUBMIT_COMMENT}">
        </div>
    </form>
</div>

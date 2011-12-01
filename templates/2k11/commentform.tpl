<div id="serendipityCommentFormC" class="serendipityCommentForm">
    <div id="serendipity_replyform_0"></div>
    <a id="serendipity_CommentForm"></a>
    <form id="serendipity_comment" action="{$commentform_action}#feedback" method="post">
    <div><input type="hidden" name="serendipity[entry_id]" value="{$commentform_id}"/></div>
    <div class="form_field">
        <label id="reply-to-hint" for="serendipity_replyTo">{$CONST.IN_REPLY_TO}</label>
        {$commentform_replyTo}
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
        <label for="serendipity_commentform_comment">{$CONST.COMMENT}</label>
        <textarea id="serendipity_commentform_comment" name="serendipity[comment]" rows="10" cols="40" placeholder="{$CONST.TWOK11_PLACE_MESSAGE}">{$commentform_data}</textarea>
    </div>
    {serendipity_hookPlugin hook="frontend_comment" data=$commentform_entry}
{if $is_commentform_showToolbar}
    <div class="form_toolbar">
        <div class="form_box">
            <input id="checkbox_remember" name="serendipity[remember]" type="checkbox" {$commentform_remember}/><label for="checkbox_remember">{$CONST.REMEMBER_INFO}</label>
        </div>
  {if $is_allowSubscriptions}
        <div class="form_box">
            <input id="checkbox_subscribe" name="serendipity[subscribe]" type="checkbox" {$commentform_subscribe} /><label for="checkbox_subscribe">{$CONST.SUBSCRIBE_TO_THIS_ENTRY}</label>
        </div>
  {/if}
    </div>
{/if}
{if $is_moderate_comments}
    <p class="serendipity_msg_important">{$CONST.COMMENTS_WILL_BE_MODERATED}</p>
{/if}
    <div class="form_button">
        <input id="serendipity_submit" name="serendipity[submit]" type="submit" value="{$CONST.SUBMIT_COMMENT}"/>
        <input id="serendipity_preview" name="serendipity[preview]" type="submit" value="{$CONST.PREVIEW}"/>
    </div>
</form>
</div>

<div id="serendipityCommentForm" class="serendipityCommentForm">
    <div id="serendipity_replyform"></div>
    <a id="serendipity_CommentForm"></a>
    <form id="serendipity_comment" class="form-vertical" action="{$commentform_action}#feedback" method="post">
    <input type="hidden" name="serendipity[entry_id]" value="{$commentform_id}">
    <div class="form-group">
        <label for="serendipity_commentform_name" class="control-label">{$CONST.NAME}</label>
        <input id="serendipity_commentform_name" class="form-control" name="serendipity[name]" type="text" value="{$commentform_name}" placeholder="{$CONST.NAME}">
    </div>
    <div class="form-group">
        <label for="serendipity_commentform_email" class="control-label">{$CONST.EMAIL}</label>
        <input id="serendipity_commentform_email" class="form-control" name="serendipity[email]" type="email" value="{$commentform_email}" placeholder="mail@example.org">
    </div>
    <div class="form-group">
        <label for="serendipity_commentform_url" class="control-label">{$CONST.HOMEPAGE}</label>
        <input id="serendipity_commentform_url" class="form-control" name="serendipity[url]" type="url" value="{$commentform_url}" placeholder="http://...">
    </div>
    <div class="form-group">
        <label for="serendipity_commentform_comment" class="control-label">{$CONST.COMMENT}</label>
        <textarea id="serendipity_commentform_comment" class="form-control" name="serendipity[comment]" rows="10" placeholder="{$CONST.COMMENT}">{$commentform_data}</textarea>
    </div>
    <div class="form-group">
        <label id="reply-to-hint" for="serendipity_replyTo" class="control-label">{$CONST.IN_REPLY_TO}</label>
        {$commentform_replyTo}
    </div>
    <div class="form-group">
            {serendipity_hookPlugin hook="frontend_comment" data=$commentform_entry}
    </div>
    {if $is_commentform_showToolbar || $is_allowSubscriptions}
        <div class="form-group">
            {if $is_commentform_showToolbar}           
                <div class="checkbox">
                    <label class="checkbox-inline" for="checkbox_remember"><input id="checkbox_remember" name="serendipity[remember]" type="checkbox" {$commentform_remember}>{$CONST.REMEMBER_INFO}</label>
                </div>
            {/if}
            {if $is_allowSubscriptions}
                <div class="checkbox">
                    <label class="checkbox-inline" for="checkbox_subscribe"><input id="checkbox_subscribe" name="serendipity[subscribe]" type="checkbox" {$commentform_subscribe}>{$CONST.SUBSCRIBE_TO_THIS_ENTRY}</label>
                </div>
            {/if}
        </div>
    {/if}
{if $is_moderate_comments}
    <p class="alert alert-danger serendipity_msg_important">{$CONST.COMMENTS_WILL_BE_MODERATED}</p>
{/if}
    <div class="form-group">
        <input id="serendipity_submit" name="serendipity[submit]" class="btn btn-default" type="submit" value="{$CONST.SUBMIT_COMMENT}">
        <input id="serendipity_preview" name="serendipity[preview]" class="btn btn-default" type="submit" value="{$CONST.PREVIEW}">
    </div>
</form>
</div>
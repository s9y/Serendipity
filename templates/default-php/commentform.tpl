<div id="serendipityCommentFormC" class="serendipityCommentForm">
    <div id="serendipity_replyform_0"></div>
    <a id="serendipity_CommentForm"></a>
    <form id="serendipity_comment" action="<?= $GLOBALS['tpl']['commentform_action'] ?>#feedback" method="post">
    <div><input type="hidden" name="serendipity[entry_id]" value="<?= $GLOBALS['tpl']['commentform_id'] ?>" /></div>
    <table border="0" width="100%" cellpadding="3">
        <tr>
            <td class="serendipity_commentsLabel"><label for="serendipity_commentform_name"><?= NAME ?></label></td>
            <td class="serendipity_commentsValue"><input type="text" id="serendipity_commentform_name" name="serendipity[name]" value="<?= $GLOBALS['tpl']['commentform_name'] ?>" size="30" /></td>
        </tr>

        <tr>
            <td class="serendipity_commentsLabel"><label for="serendipity_commentform_email"><?= EMAIL ?></label></td>
            <td class="serendipity_commentsValue"><input type="text" id="serendipity_commentform_email" name="serendipity[email]" value="<?= $GLOBALS['tpl']['commentform_email'] ?>" /></td>
        </tr>

        <tr>
            <td class="serendipity_commentsLabel"><label for="serendipity_commentform_url"><?= HOMEPAGE ?></label></td>
            <td class="serendipity_commentsValue"><input type="text" id="serendipity_commentform_url" name="serendipity[url]" value="<?= $GLOBALS['tpl']['commentform_url'] ?>" /></td>
        </tr>

        <tr>
            <td class="serendipity_commentsLabel"><label for="serendipity_replyTo"><?= IN_REPLY_TO ?></label></td>
            <td class="serendipity_commentsValue"><?= $GLOBALS['tpl']['commentform_replyTo'] ?></td>
        </tr>

        <tr>
            <td class="serendipity_commentsLabel"><label for="serendipity_commentform_comment"><?= COMMENT ?></label></td>
            <td class="serendipity_commentsValue">
                <textarea rows="10" cols="40" id="serendipity_commentform_comment" name="serendipity[comment]"><?= $GLOBALS['tpl']['commentform_data'] ?></textarea><br />
                {serendipity_hookPlugin hook="frontend_comment" data=$commentform_entry}
            </td>
        </tr>

{if $is_commentform_showToolbar}
        <tr>
            <td>&#160;</td>
            <td class="serendipity_commentsLabel">
                <input id="checkbox_remember" type="checkbox" name="serendipity[remember]" <?= $GLOBALS['tpl']['commentform_remember'] ?> /><label for="checkbox_remember"><?= REMEMBER_INFO ?></label>
    {if $is_allowSubscriptions}
                <br />
                <input id="checkbox_subscribe" type="checkbox" name="serendipity[subscribe]" <?= $GLOBALS['tpl']['commentform_subscribe'] ?> /><label for="checkbox_subscribe"><?= SUBSCRIBE_TO_THIS_ENTRY ?></label>
    <?php endif; ?>
            </td>
       </tr>
<?php endif; ?>

{if $is_moderate_comments}
       <tr>
            <td class="serendipity_commentsValue serendipity_msg_important" colspan="2"><?= COMMENTS_WILL_BE_MODERATED ?></td>
       </tr>
<?php endif; ?>

       <tr>
            <td>&#160;</td>
            <td><input type="submit" name="serendipity[submit]" value="<?= SUBMIT_COMMENT ?>" /> <input type="submit" id="serendipity_preview" name="serendipity[preview]" value="<?= PREVIEW ?>" /></td>
        </tr>
    </table>
    </form>
</div>

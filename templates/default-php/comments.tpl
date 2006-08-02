{foreach from=$comments item=comment name="comments"}
    <a id="c<?= $comment['id'] ?>"></a>
    <div id="serendipity_comment_<?= $comment['id'] ?>" class="serendipity_comment serendipity_comment_author_{$comment.author|@makeFilename} {if $entry.author == $comment.author}serendipity_comment_author_self<?php endif; ?>{cycle values="comment_oddbox, comment_evenbox"}" style="padding-left: <?= $comment['depth']*20 ?>px">
        <div class="serendipity_commentBody">
        {if $comment.body == 'COMMENT_DELETED'}
            <?= COMMENT_IS_DELETED ?>
        <?php else: ?>
            <?= $comment['body'] ?>
        <?php endif; ?>
        </div>
        <div class="serendipity_comment_source">
            <a class="comment_source_trace" href="#c<?= $comment['id'] ?>">#<?= $comment['trace'] ?></a>
            <span class="comment_source_author">
            {if $comment.email}
                <a href="mailto:<?= $comment['email'] ?>">{$comment.author|@default:$CONST.ANONYMOUS}</a>
            <?php else: ?>
                {$comment.author|@default:$CONST.ANONYMOUS}
            <?php endif; ?>
            </span>
            {if $comment.url}
                (<a class="comment_source_url" href="<?= $comment['url'] ?>" title="{$comment.url|@escape}"><?= HOMEPAGE ?></a>)
            <?php endif; ?>
            <?= ON ?>
            <span class="comment_source_date">{$comment.timestamp|@formatTime:$CONST.DATE_FORMAT_SHORT}</span>

            {if $entry.is_entry_owner}
                (<a class="comment_source_ownerlink" href="<?= $comment['link_delete'] ?>" onclick="return confirm('<?= COMMENT_DELETE_CONFIRM|@sprintf:$comment.id:$comment.author ?>');"><?= DELETE ?></a>)
            <?php endif; ?>
            {if $entry.allow_comments AND $comment.body != 'COMMENT_DELETED'}
                (<a class="comment_reply" href="#serendipity_CommentForm" id="serendipity_reply_<?= $comment['id'] ?>" onclick="document.getElementById('serendipity_replyTo').value='<?= $comment['id'] ?>'; <?= $GLOBALS['tpl']['comment_onchange'] ?>"><?= REPLY ?></a>)
                <div id="serendipity_replyform_<?= $comment['id'] ?>"></div>
            <?php endif; ?>
        </div>
    </div>
{foreachelse}
    <div class="serendipity_center nocomments"><?= NO_COMMENTS ?></div>
<?php endforeach; ?>

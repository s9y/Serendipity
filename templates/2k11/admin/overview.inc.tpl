    <div id="dashboard_header" class="clearfix">
        <h2>{$CONST.WELCOME_BACK} {$username|escape}</h2>
        <a href="#s9y_links" class="button_link toggle_links"><span class="icon-info-circled"></span><span class="visuallyhidden"> {$CONST.FURTHER_LINKS}</span></a>
    </div>
{$backend_frontpage_display}
    <div id="dashboard" class="clearfix">
    {if $published}
        <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.ENTRY_PUBLISHED|sprintf:$published|escape}</span>
    {/if}
    {if $error_publish}
        <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.PUBLISH_ERROR}: {$error_publish}</span>
    {/if}

    {if $updateCheck == "stable" || $updateCheck == "beta" }
        {if $curVersion == -1}
            <section id="dashboard_update">
                <h3>{$CONST.UPDATE_NOTIFICATION}</h3>

                <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.UPDATE_FAILMSG}</span>
                <form id="updateCheckDisable" method="POST">
                    <input type="hidden" name="serendipity[adminAction]" value="updateCheckDisable" />
                    {$token}
                    <button type="submit">{$CONST.UPDATE_FAILACTION}</button>
                </form>
            </section>
            <hr class="seperator">
        {else if $update}
            <section id="dashboard_update">
                <h3>{$CONST.UPDATE_NOTIFICATION}</h3>

                <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.NEW_VERSION_AVAILABLE} {$curVersion}</span>
                {$updateButton}
            </section>
            <hr class="seperator">
        {/if}
    {/if}

    {if $no_create !== true}
        <section id="dashboard_comments" class="equal_heights quick_list dashboard_widget">
            <h3>{if 'adminComments'|checkPermission}<a href="serendipity_admin.php?serendipity[adminModule]=comments">{/if}{$CONST.COMMENTS}{if 'adminComments'|checkPermission}</a>{/if}</h3>

            <ol class="plainList">
            {if is_array($comments)}
                {foreach $comments as $comment}
                <li class="clearfix"><b>{$comment.author|escape|truncate:30:"&hellip;"} {$CONST.IN} <a href="{$comment.entrylink}" title="{$comment.title|escape}">#{$comment.id}</a></b>
                    <div class="comment_summary">{$comment.body|escape|truncate:100:"&hellip;"}</div>

                    <div id="c{$comment.id}_full" class="comment_full additional_info">{$comment.fullBody|escape}</div>

                    <ul class="plainList actions">
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;{$urltoken}" title="{$CONST.EDIT}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                        <li><a class="button_link comments_reply" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=reply&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;serendipity[noBanner]=true&amp;serendipity[noSidebar]=true&amp;{$urltoken}" title="{$CONST.REPLY}"><span class="icon-chat"></span><span class="visuallyhidden"> {$CONST.REPLY}</span></a></li>
                    {if ($comment.status == 'pending') || ($comment.status == 'confirm')}
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=approve&amp;serendipity[id]={$comment.id}&amp;{$urltoken}" title="{$CONST.APPROVE}"><span class="icon-thumbs-up-alt"></span><span class="visuallyhidden">{$CONST.APPROVE}</span></a></li>
                    {/if}
                    {if ($comment.status == 'approved')}
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=pending&amp;serendipity[id]={$comment.id}&amp;{$urltoken}" title="{$CONST.SET_TO_MODERATED}"><span class="icon-thumbs-down-alt"></span><span class="visuallyhidden"> {$CONST.SET_TO_MODERATED}</span></a></li>
                    {/if}
                        <li><a class="button_link comments_delete" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=delete&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;{$urltoken}" data-delmsg='{($CONST.COMMENT_DELETE_CONFIRM|sprintf:$comment.id:$comment.author)|escape}' title="{$CONST.DELETE}"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a>
                        </li>
                    {if $comment.excerpt}
                        <li><button class="button_link toggle_comment_full" type="button" data-href="#c{$comment.id}_full" title="{$CONST.TOGGLE_ALL}"><span class="icon-right-dir"></span><span class="visuallyhidden"> {$CONST.TOGGLE_ALL}</span></button></li>
                    {/if}
                    </ul>
                {if ($comment.status == 'pending') || ($comment.status == 'confirm')}
                    <span class="comment_status">{$CONST.COMMENTS_FILTER_NEED_APPROVAL}</span>
                {/if}
                </li>
                {/foreach}
            {else}
                <li><span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.NO_COMMENTS}</span></li>
            {/if}
            </ol>
        </section>

        <section id="dashboard_entries" class="equal_heights quick_list dashboard_widget">
            <h3>{if 'adminEntries'|checkPermission}<a href="serendipity_admin.php?serendipity[adminModule]=entries&amp;serendipity[adminAction]=editSelect">{/if}{$CONST.DASHBOARD_ENTRIES}{if 'adminEntries'|checkPermission}</a>{/if}</h3>

            <ol class="plainList">
            {if is_array($entries)}
                {foreach $entries as $entry}
                <li class="clearfix">
                    <a href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$entry.id}" title="#{$entry.id}: {$entry.title|escape}">{$entry.title|escape}</a>
                    <ul class="plainList actions">
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=preview&amp;{$urltoken}&amp;serendipity[id]={$entry.id}" title="{$CONST.PREVIEW} #{$entry.id}"><span class="icon-search"></span><span class="visuallyhidden"> {$CONST.PREVIEW}</span></a></li>
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=entries&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$entry.id}" title="{$CONST.EDIT} #{$entry.id}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                        {if $entry.isdraft == "true"}
                            <li>
                                <form method="POST" class="overviewListForm">
                                    <input type="hidden" name="serendipity[adminAction]" value="publish" />
                                    <input type="hidden" name="serendipity[id]" value="{$entry.id}" />
                                    {$token}
                                    <button class="publish_now" type="submit" title="{$CONST.PUBLISH_NOW}"><span class="icon-rocket"></span><span class="visuallyhidden">{$CONST.PUBLISH_NOW}</span></button>
                                </form>
                            </li>
                        {/if}

                    </ul>
                {if !$showFutureEntries && ($entry.timestamp >= $serverOffsetHour) && $entry.isdraft == "false"}
                    <span class="entry_status status_future" title="{$CONST.SCHEDULED}: {$CONST.ENTRY_PUBLISHED_FUTURE}">{$entry.timestamp|@formatTime:$CONST.DATE_FORMAT_SHORT}</span>
                {/if}
                {if $entry.properties.ep_is_sticky}
                    <span class="entry_status status_sticky">{$CONST.STICKY_POSTINGS}</span>
                {/if}
                {if $entry.isdraft == "true"}
                    <span class="entry_status status_draft">{$CONST.DRAFT}</span>
                {/if}
                </li>
                {/foreach}
            {else}
                <li><span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.NO_ENTRIES_TO_PRINT}</span></li>
            {/if}
            </ol>
        </section>

        {serendipity_hookPlugin hook="backend_dashboard" hookAll="true"}
    {/if}

        <section id="s9y_links" class="clearfix mfp-hide">
            <h3>{$CONST.FURTHER_LINKS}</h3>

            <ul class="plainList">
                <li><a href="http://www.s9y.org/">{$CONST.FURTHER_LINKS_S9Y}</a></li>
                <li><a href="http://www.s9y.org/33.html">{$CONST.FURTHER_LINKS_S9Y_DOCS}</a></li>
                <li><a href="http://blog.s9y.org/">{$CONST.FURTHER_LINKS_S9Y_BLOG}</a></li>
                <li><a href="http://www.s9y.org/forums/">{$CONST.FURTHER_LINKS_S9Y_FORUMS}</a></li>
                <li><a href="http://spartacus.s9y.org/">{$CONST.FURTHER_LINKS_S9Y_SPARTACUS}</a></li>
                <li><a class="s9y_bookmarklet" href="{$bookmarklet}" title="{$CONST.FURTHER_LINKS_S9Y_BOOKMARKLET_DESC}">{$CONST.FURTHER_LINKS_S9Y_BOOKMARKLET}</a></li>
            </ul>
        </section>
    </div>

<script type="text/javascript">
$(document).ready(function() {
    if (typeof(serendipity) != 'object' || typeof(serendipity.spawn) != 'function') {
        $('#dashboard_header').after("<span class=\"msg_error\"><span class=\"icon-attention-circled\"></span> {$CONST.JS_FAILURE|sprintf:$js_failure_file|escape:javascript}</span>");
    }
});
</script>

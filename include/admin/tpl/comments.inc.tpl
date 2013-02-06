{* HTML5: Yes *}
{* jQuery: No *}

{if !empty($errormsg)}
    <span class="msg_error"><span class="attention"></span> {$errormsg}</span>
{/if}

<script type="text/javascript">
    var view_full = '{$CONST.VIEW_FULL}';
    var view_hide = '{$CONST.HIDE}';
</script>
<script src="serendipity_editor.js"></script>

    <h2>{$CONST.COMMENTS}</h2>

    <form action="" method="GET">
        {$formtoken}
        <input name="serendipity[adminModule]" type="hidden" value="comments">
        <input name="serendipity[page]" type="hidden" value="{$page}">

        <fieldset id="filter_comments">
            <legend><span>{$CONST.FILTERS} ({$CONST.FIND_COMMENTS})</span></legend>

            <div class="clearfix">
                <div class="form_field">
                    <label for="filter_author">{$CONST.AUTHOR}</label>
                    <input id="filter_author" name="serendipity[filter][author]" type="text" value="{$get.filter.author|escape}">
                </div>

                <div class="form_field">
                    <label for="filter_email">{$CONST.EMAIL}</label>
                    <input id="filter_email" name="serendipity[filter][email]" type="text" value="{$get.filter.email|escape}">
                </div>

                <div class="form_field">
                    <label for="filter_url">{$CONST.HOMEPAGE}</label>
                    <input id="filter_url" name="serendipity[filter][url]" type="text" value="{$get.filter.url|escape}">
                </div>

                <div class="form_field">
                    <label for="filter_ip">IP</label>
                    <input id="filter_ip" name="serendipity[filter][ip]" type="text" value="{$get.filter.ip|escape}">
                </div>

                <div class="form_field">
                    <label for="filter_body">{$CONST.CONTENT}</label>
                    <input id="filter_body" name="serendipity[filter][body]" type="text" value="{$get.filter.body|escape}">
                </div>

                <div class="form_field">
                    <label for="filter_referer">{$CONST.REFERER}</label>
                    <input id="filter_referer" name="serendipity[filter][referer]" type="text" value="{$get.filter.referer|escape}">
                </div>

                <div class="form_select">
                    <label for="filter_perpage">{$CONST.COMMENTS}</label>
                    <select id="filter_perpage" name="serendipity[filter][perpage]">
                    {foreach $filter_vals AS $filter}
                        <option value="{$filter}" {($commentsPerPage == $filter) ? ' selected' : ''}>{$filter}</option>
                    {/foreach}
                    </select>
                </div>

                <div class="form_select">
                    <label for="filter_show">{$CONST.COMMENTS_FILTER_SHOW}</label>
                    <select id="filter_show" name="serendipity[filter][show]">
                        <option value="all"{if $get.filter.show == 'all'} selected{/if}>{$CONST.COMMENTS_FILTER_ALL}</option>
                        <option value="approved"{if $get.filter.show == 'approved'} selected{/if}>{$CONST.COMMENTS_FILTER_APPROVED_ONLY}</option>
                        <option value="pending"{if $get.filter.show == 'pending'} selected{/if}>{$CONST.COMMENTS_FILTER_NEED_APPROVAL}</option>
                        <option value="confirm"{if $get.filter.show == 'confirm'} selected{/if}>{$CONST.COMMENTS_FILTER_NEED_CONFIRM}</option>
                    </select>
                </div>

                <div class="form_select">
                    <label for="filter_type">{$CONST.TYPE}</label>
                    <select id="filter_type" name="serendipity[filter][type]">
                        <option value="">{$CONST.COMMENTS_FILTER_ALL}</option>
                        <option value="NORMAL"{if $c_type == 'NORMAL'} selected{/if}>{$CONST.COMMENTS}</option>
                        <option value="TRACKBACK"{if $c_type == 'TRACKBACK'} selected{/if}>{$CONST.TRACKBACKS}</option>
                        <option value="PINGBACK"{if $c_type == 'PINGBACK'} selected{/if}>{$CONST.PINGBACKS}</option>
                    </select>
                </div>
            </div>
        </fieldset>

        <div class="form_buttons">
            <input name="submit" type="submit" value="{$CONST.GO}">
            {serendipity_hookPlugin hookAll=true hook="backend_comments_top" addData=$sql}
        </div>
    </form>
{if !is_array($sql)}
    <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.NO_COMMENTS}</span>

    <a class="block_level" href="serendipity_admin.php?serendipity[adminModule]=comments">Return to default comment list</a> {* l18n *}
{else}
    <form id="formMultiDelete" action="" method="POST" name="formMultiDelete">
        {$formtoken}
        <input name="serendipity[formAction]" type="hidden" value="multiDelete">

        <h3>{$CONST.PAGE_BROWSE_COMMENTS|sprintf:$page:$pages:$totalComments}</h3>
        {if ($page != 1 && $page <= $pages)||$page != $pages}
        <nav class="pagination">
            <h4 class="visuallyhidden">Comments pagination</h4> {* i18n *}

            <ul class="clearfix">
            {if ($page != 1 && $page <= $pages)}
                <li><a class="icon_link" href="{$linkPrevious}" title="{$CONST.PREVIOUS}"><span class="icon-left-circled"></span><span class="visuallyhidden"> {$CONST.PREVIOUS}</span></a></li>
            {/if}
            {if $page != $pages}
                <li><a class="icon_link" href="{$linkNext}" title="{$CONST.NEXT}"><span class="icon-right-circled"></span><span class="visuallyhidden"> {$CONST.NEXT}</span></a></li>
            {/if}
            </ul>
        </nav>
        {/if}
    {if is_array($comments)}
        <ul id="serendipity_comments_list" class="clearfix plainList zebra_list">
        {foreach $comments AS $comment}
            <li class="clearfix {cycle values="odd,even"}"><div class="form_check">
                    <input id="serendipity_multidelete_comment_{$comment.id}" type="checkbox" name="serendipity[delete][{$comment.id}]" value="{$comment.entry_id}" onclick="highlightComment('comment_{$comment.id}', this.checked)" tabindex="{$i}">
                    <label for="serendipity_multidelete_comment_{$comment.id}" class="visuallyhidden">Multiselect this comment</label> {* i18n *}
                </div>

                <h4 id="c{$comment.id}">{($comment.type == 'NORMAL') ? $CONST.COMMENT : (($comment.type == 'TRACKBACK') ? $CONST.TRACKBACK : $CONST.PINGBACK )} #{$comment.id}, {$CONST.IN_REPLY_TO} <a href="{$comment.entry_url}">{$comment.title|escape}</a> {$CONST.ON} {$comment.timestamp|@formatTime:'%b %e %Y, %H:%M'}</h4>

                <div id="comment_{$comment.id}">
                    <dl class="comment_data clearfix">
                        {* TODO: This should not emit any images *}
                        <dt>{$CONST.AUTHOR}:</dt>
                        <dd>{$comment.author|escape|truncate:30:"&hellip;"} {$comment.action_author}</dd>
                        <dt>{$CONST.EMAIL}:</dt>
                        <dd>{if empty($comment.email)}N/A{else}<a href="mailto:{$comment.email|escape}" title="{$comment.email|escape}">{$comment.email|escape|truncate:30:"&hellip;"}</a>{if $comment.subscribed == 'true'} <span class="serendipity_subscription_on">({$CONST.ACTIVE_COMMENT_SUBSCRIPTION})</span>{/if}{/if} {$comment.action_email}</dd>
                        <dt>IP:</dt>
                        <dd>{if empty($comment.ip)}N/A{else}{$comment.ip|escape}{/if} {$comment.action_ip}</dd>
                        <dt>{$CONST.URL}:</dt>
                        <dd>{if empty($comment.url)}N/A{else}<a class="icon_link" href="{$comment.url|escape}" title="{$comment.url|escape}"><span class="icon-link"></span> {$comment.url|escape|truncate:30:"&hellip;"}</a> {/if} {$comment.action_url}</dd>
                        <dt>{$CONST.REFERER}:</dt>
                        <dd>{if empty($comment.referer)}N/A{else}<a class="icon_link" href="{$comment.referer|escape}" title="{$comment.referer|escape}"><span class="icon-link"></span> {$comment.referer|escape|truncate:30:"&hellip;"}</a>{/if} {$comment.action_referer}</dd>
                    </dl>
                    
                    <div id="{$comment.id}_summary" class="comment_summary">{$comment.fullBody|truncate:120:"&hellip;"}</div>

                    <div id="{$comment.id}_full" class="comment_full hidden">{$comment.fullBody}</div>

                    <ul class="plainList clearfix actions">
                    {if ($comment.status == 'pending') || ($comment.status == 'confirm')}
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=approve&amp;serendipity[id]={$comment.id}&amp;{$urltoken}" title="{$CONST.APPROVE}"><span class="icon-lock-open"></span><span class="visuallyhidden">{$CONST.APPROVE}</span></a></li>
                    {/if}
                    {if ($comment.status == 'approved')}
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=pending&amp;serendipity[id]={$comment.id}&amp;{$urltoken}" title="{$CONST.SET_TO_MODERATED}"><span class="icon-lock"></span><span class="visuallyhidden"> {$CONST.SET_TO_MODERATED}</span></a></li>
                    {/if}
                    {if $comment.excerpt}
                        <li><a class="button_link" href="#c{$comment.id}" onclick="FT_toggle({$comment.id}); return false;" title="{$CONST.TOGGLE_ALL}"><span id="{$comment.id}_text">{$CONST.TOGGLE_ALL}</span></a></li>
                    {/if}
                        <li><a class="button_link" href="{$comment.entrylink}" title="{$CONST.VIEW}"><span class="icon-eye"></span><span class="visuallyhidden"> {$CONST.VIEW}</span></a></li>
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;{$urltoken}" title="{$CONST.EDIT}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                        <li><a class="button_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=delete&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;{$urltoken}" onclick='return confirm("{($CONST.COMMENT_DELETE_CONFIRM|sprintf:$comment.id:$comment.author)|escape}")' title="{$CONST.DELETE}"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a></li>
                        <li><a class="button_link" onclick="cf = window.open(this.href, 'CommentForm', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1'); cf.focus(); return false;" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=reply&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;serendipity[noBanner]=true&amp;serendipity[noSidebar]=true&amp;{$urltoken}" title="{$CONST.REPLY}"><span class="icon-chat"></span><span class="visuallyhidden"> {$CONST.REPLY}</span></a></li>
                    </ul>
                    {$comment.action_more}
                </div>
            </li>
        {/foreach}
        </ul>
    {/if}
        <div class="multidelete_actions form_buttons">
            <input name="toggle" type="button" value="{$CONST.INVERT_SELECTIONS}" onclick="invertSelection()">
            <input class="state_cancel" name="toggle" type="submit" value="{$CONST.DELETE_SELECTED_COMMENTS}" onclick="return confirm('{$CONST.COMMENTS_DELETE_CONFIRM}')" tabindex="{($i+1)}">
            <input name="serendipity[togglemoderate]" type="submit" value="{$CONST.MODERATE_SELECTED_COMMENTS}">
        </div>
        {* TODO: Clone pagination using JS *}
    </form>
{/if}

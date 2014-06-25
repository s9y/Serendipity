{if !empty($errormsg)}
    <span class="msg_error"><span class="icon-attention"></span> {$errormsg}</span>
{/if}
{if !empty($msg)}
    <span class="msg_notice"><span class="icon-info-circled"></span> {$msg}</span>
{/if}
{if $commentReplied}
    <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.COMMENT_ADDED}</span>
    <button id="comment_replied" type="button">{$CONST.BACK}</button>
{else}
    <h2>{$CONST.COMMENTS}</h2>

    <form action="" method="GET">
        {$formtoken}
        <input name="serendipity[adminModule]" type="hidden" value="comments">
        <input name="serendipity[page]" type="hidden" value="{$page}">

        <ul class="filters_toolbar plainList">
            <li><a class="button_link" href="#filter_comments" title="{$CONST.FILTERS}"><span class="icon-filter"></span><span class="visuallyhidden"> {$CONST.FILTERS}</span></a></li>
            <li><div class="backend_comments">{$backend_comments_top}</div></li>
        </ul>

        <fieldset id="filter_comments" class="additional_info filter_pane">
            <legend class="visuallyhidden">{$CONST.FILTERS} ({$CONST.FIND_COMMENTS})</legend>

            <div class="clearfix inputs">
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

            <div class="form_buttons">
                <input name="submit" type="submit" value="{$CONST.GO}">
            </div>
        </fieldset>
    </form>
    {if !is_array($sql)}
        
        <span class="msg_notice"><span class="icon-info-circled"></span>
            {if $c_type == 'TRACKBACK'}
                {$CONST.NO_TRACKBACKS}
            {else if $c_type == 'PINGBACK'}
                {$CONST.NO_PINGBACKS}
            {else}
                {$CONST.NO_COMMENTS}
            {/if}
        </span>

        <a class="block_level" href="serendipity_admin.php?serendipity[adminModule]=comments">{$CONST.BACK}</a>
    {else}
        <form id="formMultiDelete" action="" method="POST" name="formMultiDelete">
            {$formtoken}
            <input name="serendipity[formAction]" type="hidden" value="multiDelete">

            <div class="clearfix comments_pane">
            {if is_array($comments)}
                <ul id="serendipity_comments_list" class="clearfix plainList zebra_list">
                {foreach $comments AS $comment}
                    <li id="comment_{$comment.id}" class="clearfix {cycle values="odd,even"} {if ($comment.status == 'pending') || ($comment.status == 'confirm')}pending{/if}"><div class="form_check">
                            <input id="multidelete_comment{$comment.id}" class="multidelete" type="checkbox" name="serendipity[delete][{$comment.id}]" value="{$comment.entry_id}" data-multidelid="comment_{$comment.id}">
                            <label for="serendipity_multidelete_comment_{$comment.id}" class="visuallyhidden">{$CONST.TOGGLE_SELECT}</label>
                        </div>

                        <h4 id="c{$comment.id}">{$comment.author|escape|truncate:40:"&hellip;"} {$CONST.IN} {($comment.type == 'NORMAL') ? $CONST.COMMENT : (($comment.type == 'TRACKBACK') ? $CONST.TRACKBACK : $CONST.PINGBACK )} #{$comment.id} - {$CONST.IN_REPLY_TO}
                            <a href="{$comment.entry_url}">{$comment.title|escape}</a>
                            {$CONST.ON} {$comment.timestamp|@formatTime:'%b %e %Y, %H:%M'}
                            <button class="toggle_info button_link" type="button" data-href="#comment_data_{$comment.id}"><span class="icon-info-circled"></span><span class="visuallyhidden"> More</span></button>
                        </h4>
                    {if ($comment.status == 'pending') || ($comment.status == 'confirm')}
                        <span class="comment_status">{$CONST.COMMENTS_FILTER_NEED_APPROVAL}</span>
                    {/if}
                        <div id="comment_data_{$comment.id}" class="additional_info">
                            <dl class="comment_data clearfix">
                                <dt>{$CONST.AUTHOR}:</dt>
                                <dd>{$comment.author|escape|truncate:40:"&hellip;"} {$comment.action_author}</dd>
                                <dt>{$CONST.EMAIL}:</dt>
                                <dd>{if empty($comment.email)}N/A{else}<a href="mailto:{$comment.email|escape}" title="{$comment.email|escape}">{$comment.email|escape|truncate:40:"&hellip;"}</a>{if $comment.subscribed == 'true'} <i>({$CONST.ACTIVE_COMMENT_SUBSCRIPTION})</i>{/if}{/if} {$comment.action_email}</dd>
                                <dt>IP:</dt>
                                <dd>{if empty($comment.ip)}N/A{else}{$comment.ip|escape}{/if} {$comment.action_ip}</dd>
                                <dt>URL:</dt>
                                <dd>{if empty($comment.url)}N/A{else}<a href="{$comment.url|escape}" title="{$comment.url|escape}">{$comment.url|escape|truncate:40:"&hellip;"}</a> {/if} {$comment.action_url}</dd>
                                <dt>{$CONST.REFERER}:</dt>
                                <dd>{if empty($comment.referer)}N/A{else}<a href="{$comment.referer|escape}" title="{$comment.referer|escape}">{$comment.referer|escape|truncate:40:"&hellip;"}</a>{/if} {$comment.action_referer}</dd>
                            </dl>
                        </div>

                        <div id="c{$comment.id}_summary" class="comment_summary">{$comment.fullBody|truncate:120:"&hellip;"}</div>

                        <div id="c{$comment.id}_full" class="comment_full additional_info">{$comment.fullBody}</div>

                        <ul class="plainList clearfix actions">
                            <li><a class="button_link" href="{$comment.entrylink}" title="{$CONST.VIEW}"><span class="icon-search"></span><span class="visuallyhidden"> {$CONST.VIEW}</span></a></li>                        
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
                        {$comment.action_more}
                    </li>
                {/foreach}
                </ul>
            {/if}
            {if ($page != 1 && $page <= $pages)||$page != $pages}
                <nav class="pagination">
                    <h3>{$CONST.PAGE_BROWSE_COMMENTS|sprintf:$page:$pages:$totalComments}</h3>
                    
                    <ul class="clearfix">
                        <li class="prev">{if ($page != 1 && $page <= $pages)}<a class="button_link" href="{$linkPrevious}" title="{$CONST.PREVIOUS}"><span class="icon-left-dir"></span><span class="visuallyhidden"> {$CONST.PREVIOUS}</span></a>{else}<span class="visuallyhidden">{$CONST.NO_ENTRIES_TO_PRINT}</span>{/if}</li>
                        <li class="next">{if $page != $pages}<a class="button_link" href="{$linkNext}" title="{$CONST.NEXT}"><span class="visuallyhidden">{$CONST.NEXT} </span><span class="icon-right-dir"></span></a>{else}<span class="visuallyhidden">{$CONST.NO_ENTRIES_TO_PRINT}</span>{/if}</li>
                    </ul>
                </nav>
            {/if}
            </div>

            <div class="form_buttons">
                <input class="invert_selection" name="toggle" type="button" value="{$CONST.INVERT_SELECTIONS}">
                <input class="state_cancel comments_multidelete" name="toggle" type="submit" value="{$CONST.DELETE}" data-delmsg="{$CONST.COMMENTS_DELETE_CONFIRM}">
                <input name="serendipity[togglemoderate]" type="submit" value="{$CONST.APPROVE}">
            </div>
        </form>
    {/if}
{/if}

{* HTML5: Yes *}
{* jQuery: No *}

{if !empty($errormsg)}
    <span class="msg_error"><span class="attention"></span> {$errormsg}</span>
{/if}
{* Smarty 3 has a new auto literal option which is enabled by default.
   When the { is followed by a space it's not interpreted as smarty delimiter but literal. *}
<script>
function FT_toggle(id) { 
    if ( document.getElementById(id + '_full').style.display == '' ) { 
        document.getElementById(id + '_full').style.display='none';
        document.getElementById(id + '_summary').style.display='';
        document.getElementById(id + '_text').innerHTML = '{$CONST.VIEW_FULL}';
    } else { 
        document.getElementById(id + '_full').style.display='';
        document.getElementById(id + '_summary').style.display='none';
        document.getElementById(id + '_text').innerHTML = '{$CONST.HIDE}';
    } 
    return false;
} 

function invertSelection() { 
    var f = document.formMultiDelete;
    for (var i = 0; i < f.elements.length; i++) { 
        if( f.elements[i].type == 'checkbox' ) { 
            f.elements[i].checked = !(f.elements[i].checked);
            f.elements[i].onclick();
        } 
    } 
} 

var origborder = '';
var origwidth = '';

function highlightComment(id, checkvalue) { 
    var comment = document.getElementById(id);

    if (origborder == '') { 
        origborder = comment.style.borderColor;
        if (origborder == '') { 
            origborder = '#FFFFFF';
        } 
    } 

    if (origwidth == '') { 
        origwidth = comment.style.borderWidth;
        if (origwidth == '' || origwidth == 0) { 
            origwidth = 1;
        } 
    } 

    if (checkvalue) { 
        comment.style.borderColor = '#FF0000';
        comment.style.borderWidth = origwidth;
    } else { 
        comment.style.borderColor = '';
        comment.style.borderWidth = origwidth;
    } 
} 
</script>

    <h2>{$CONST.COMMENTS}</h2>

    <form action="" method="GET">
        {$formtoken}
        <input name="serendipity[adminModule]" type="hidden" value="comments">
        <input name="serendipity[page]" type="hidden" value="{$page}">

        <fieldset id="filter_comments">
            <legend><span>{$CONST.FILTERS} ({$CONST.FIND_COMMENTS})</span></legend>

            <div class="clearfix">
                <div class="form_field">
                    <label for="filter_author">{$CONST.AUTHOR}:</label>
                    <input id="filter_author" name="serendipity[filter][author]" type="text" value="{$get.filter.author|escape}">
                </div>

                <div class="form_field">
                    <label for="filter_email">{$CONST.EMAIL}:</label>
                    <input id="filter_email" name="serendipity[filter][email]" type="text" value="{$get.filter.email|escape}">
                </div>

                <div class="form_field">
                    <label for="filter_url">{$CONST.URL}:</label>
                    <input id="filter_url" name="serendipity[filter][url]" type="text" value="{$get.filter.url|escape}">
                </div>

                <div class="form_field">
                    <label for="filter_ip">IP:</label>
                    <input id="filter_ip" name="serendipity[filter][ip]" type="text" value="{$get.filter.ip|escape}">
                </div>

                <div class="form_field">
                    <label for="filter_body">{$CONST.CONTENT}:</label>
                    <input id="filter_body" name="serendipity[filter][body]" type="text" value="{$get.filter.body|escape}">
                </div>

                <div class="form_field">
                    <label for="filter_referer">{$CONST.REFERER}:</label>
                    <input id="filter_referer" name="serendipity[filter][referer]" type="text" value="{$get.filter.referer|escape}">
                </div>

                <div class="form_select">
                    <label for="filter_perpage">{$CONST.COMMENTS}:</label>
                    <select id="filter_perpage" name="serendipity[filter][perpage]">
                    {foreach $filter_vals AS $filter}
                        <option value="{$filter}" {($commentsPerPage == $filter) ? ' selected="selected"' : ''}>{$filter}</option>
                    {/foreach}
                    </select>
                </div>

                <div class="form_select">
                    <label for="filter_show">{$CONST.COMMENTS_FILTER_SHOW}:</label>
                    <select id="filter_show" name="serendipity[filter][show]">
                        <option value="all"{if $get.filter.show == 'all'} selected="selected"{/if}>{$CONST.COMMENTS_FILTER_ALL}</option>
                        <option value="approved"{if $get.filter.show == 'approved'} selected="selected"{/if}>{$CONST.COMMENTS_FILTER_APPROVED_ONLY}</option>
                        <option value="pending"{if $get.filter.show == 'pending'} selected="selected"{/if}>{$CONST.COMMENTS_FILTER_NEED_APPROVAL}</option>
                        <option value="confirm"{if $get.filter.show == 'confirm'} selected="selected"{/if}>{$CONST.COMMENTS_FILTER_NEED_CONFIRM}</option>
                    </select>
                </div>

                <div class="form_select">
                    <label for="filter_type">{$CONST.TYPE}</label>
                    <select id="filter_type" name="serendipity[filter][type]">
                        <option value="">{$CONST.COMMENTS_FILTER_ALL}</option>
                        <option value="NORMAL"{if $c_type == 'NORMAL'} selected="selected"{/if}>{$CONST.COMMENTS}</option>
                        <option value="TRACKBACK"{if $c_type == 'TRACKBACK'} selected="selected"{/if}>{$CONST.TRACKBACKS}</option>
                        <option value="PINGBACK"{if $c_type == 'PINGBACK'} selected="selected"{/if}>{$CONST.PINGBACKS}</option>
                    </select>
                </div>
            </div>
        </fieldset>

        <input name="submit" type="submit" value="{$CONST.GO}">
        {serendipity_hookPlugin hookAll=true hook="backend_comments_top" addData=$sql}
    </form>
{if !is_array($sql)}
    <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.NO_COMMENTS}</span>

    {* TODO: l18n *}
    <a class="block_level" href="serendipity_admin.php?serendipity[adminModule]=comments">Return to default comment list</a>
{else}
    <form id="formMultiDelete" action="" method="POST" name="formMultiDelete">
        {$formtoken}
        <input name="serendipity[formAction]" type="hidden" value="multiDelete">

        <nav class="pagination">
            <h2>{$CONST.PAGE_BROWSE_COMMENTS|sprintf:$page:$pages:$totalComments}</h2>
            {if ($page != 1 && $page <= $pages)||$page != $pages}
            <ul class="clearfix">
            {if ($page != 1 && $page <= $pages)}
                <li><a class="icon_link" href="{$linkPrevious}" title="{$CONST.PREVIOUS}"><span class="icon-left-circled"></span><span class="visuallyhidden"> {$CONST.PREVIOUS}</span></a></li>
            {/if}
            {if $page != $pages}
                <li><a class="icon_link" href="{$linkNext}" title="{$CONST.NEXT}"><span class="icon-right-circled"></span><span class="visuallyhidden"> {$CONST.NEXT}</span></a></li>
            {/if}
            </ul>
            {/if}
        </nav>
    {if is_array($comments)}
        <ul class="plainList">
        {foreach $comments AS $comment}
            <li><h3 id="c{$comment.id}">{($comment.type == 'NORMAL') ? $CONST.COMMENT : (($comment.type == 'TRACKBACK') ? $CONST.TRACKBACK : $CONST.PINGBACK )} #{$comment.id}, {$CONST.IN_REPLY_TO} <a href="{$comment.entry_url}">{$comment.title|escape}</a> {$CONST.ON} {$comment.timestamp|@formatTime:'%b %e %Y, %H:%M'}</h3>
                <div class="form_check">
                    <input id="serendipity_multidelete_comment_{$comment.id}" type="checkbox" name="serendipity[delete][{$comment.id}]" value="{$comment.entry_id}" onclick="highlightComment('comment_{$comment.id}', this.checked)" tabindex="{$i}">
                    <label for="serendipity_multidelete_comment_{$comment.id}" class="visuallyhidden">Multiselect this comment</label> {* i18n *}
                </div>

                <div id="comment_{$comment.id}">
                    <dl class="comment_data clearfix">
                        <dt>{$CONST.AUTHOR}:</dt>
                        <dd>{$comment.author|escape|truncate:30:"&hellip;"} {$comment.action_author}</dd>
                        <dt>{$CONST.EMAIL}:</dt>
                        <dd>{if empty($comment.email)}N/A{else}<a href="mailto:{$comment.email|escape}" title="{$comment.email|escape}">{$comment.email|escape|truncate:30:"&hellip;"}</a>{if $comment.subscribed == 'true'} <span class="serendipity_subscription_on">({$CONST.ACTIVE_COMMENT_SUBSCRIPTION})</span>{/if}{/if}</dd>
                        {* TODO: This should not emit an img *}
                        <dd class="action_email">{$comment.action_email}</dd>
                        <dt>IP:</dt>
                        <dd>{if empty($comment.ip)}N/A{else}{$comment.ip|escape}{/if}</dd>
                        {* TODO: This should not emit an img *}
                        <dd class="action_ip">{$comment.action_ip}</dd>
                        <dt>{$CONST.URL}:</dt>
                        <dd>{if empty($comment.url)}N/A{else}<a class="icon_link" href="{$comment.url|escape}" title="{$comment.url|escape}"><span class="icon-link"></span> {$comment.url|escape|truncate:30:"&hellip;"}</a> {/if}</dd>
                        <dd class="action_url">{$comment.action_url}</dd>
                        <dt>{$CONST.REFERER}:</dt>
                        <dd>{if empty($comment.referer)}N/A{else}<a class="icon_link" href="{$comment.referer|escape}" title="{$comment.referer|escape}"><span class="icon-link"></span> {$comment.referer|escape|truncate:30:"&hellip;"}</a>{/if}</dd>
                        <dd class="action_referer">{$comment.action_referer}</dd>
                    </dl>

                    <div id="{$comment.id}_summary" class="comment_summary">{$comment.summary}</div>

                    <div id="{$comment.id}_full" class="comment_full" style="display:none;">{$comment.fullBody}</div>

                    <ul class="actions clearfix">
                    {if ($comment.status == 'pending') || ($comment.status == 'confirm')}
                        <li><a class="icon_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=approve&amp;serendipity[id]={$comment.id}&amp;{$urltoken}" title="{$CONST.APPROVE}"><span class="icon-lock-open"></span><span class="visuallyhidden">{$CONST.APPROVE}</span></a></li>
                    {/if}
                    {if ($comment.status == 'approved')}
                        <li><a class="icon_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=pending&amp;serendipity[id]={$comment.id}&amp;{$urltoken}" title="{$CONST.SET_TO_MODERATED}"><span class="icon-lock"></span><span class="visuallyhidden"> {$CONST.SET_TO_MODERATED}</span></a></li>
                    {/if}
                    {if $comment.excerpt}
                        <li><a class="icon_link" href="#c{$comment.id}" onclick="FT_toggle({$comment.id}); return false;" title="{$CONST.TOGGLE_ALL}"><span id="{$comment.id}_text">{$CONST.TOGGLE_ALL}</span></a></li>
                    {/if}
                        <li><a class="icon_link" href="{$entrylink}"><span class="icon-eye"></span><span class="visuallyhidden"> {$CONST.VIEW}</span></a></li>
                        <li><a class="icon_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;{$urltoken}" title="{$CONST.EDIT}"><span class="icon-edit"></span><span class="visuallyhidden"> {$CONST.EDIT}</span></a></li>
                        <li><a class="icon_link" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=delete&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;{$urltoken}" onclick='return confirm("{($CONST.COMMENT_DELETE_CONFIRM|sprintf:$comment.id:$comment.author)|escape}")' title="{$CONST.DELETE}"><span class="icon-trash"></span><span class="visuallyhidden"> {$CONST.DELETE}</span></a></li>
                        <li><a class="icon_link" onclick="cf = window.open(this.href, 'CommentForm', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1'); cf.focus(); return false;" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=reply&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;serendipity[noBanner]=true&amp;serendipity[noSidebar]=true&amp;{$urltoken}" title="{$CONST.REPLY}"><span class="icon-chat"></span><span class="visuallyhidden"> {$CONST.REPLY}</span></a></li>
                    </ul>
                    {$comment.action_more}
                </div>
            </li>
        {/foreach}
        </ul>
    {/if}
        <div class="multidelete_actions">
            <input name="toggle" type="button" value="{$CONST.INVERT_SELECTIONS}" onclick="invertSelection()">
            <input name="toggle" type="submit" value="{$CONST.DELETE_SELECTED_COMMENTS}" onclick="return confirm('{$CONST.COMMENTS_DELETE_CONFIRM}')" tabindex="{($i+1)}">
            <input name="serendipity[togglemoderate]" type="submit" value="{$CONST.MODERATE_SELECTED_COMMENTS}">
        </div>
        {* TODO: Clone pagination using JS *}
    </form>
{/if}

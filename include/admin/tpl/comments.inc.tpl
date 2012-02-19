{if !empty($errormsg)}
    <p class="serendipityAdminMsgError serendipity_backend_msg_notice"><img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file='admin/img/admin_msg_note.png'}" alt="" />{$errormsg}</p>
{/if}


<script type="text/javascript">
function FT_toggle(id) {ldelim}
    if ( document.getElementById(id + '_full').style.display == '' ) {ldelim}
        document.getElementById(id + '_full').style.display='none';
        document.getElementById(id + '_summary').style.display='';
        document.getElementById(id + '_text').innerHTML = '{$CONST.VIEW_FULL}';
    {rdelim} else {ldelim}
        document.getElementById(id + '_full').style.display='';
        document.getElementById(id + '_summary').style.display='none';
        document.getElementById(id + '_text').innerHTML = '{$CONST.HIDE}';
    {rdelim}
    return false;
{rdelim}
{literal}
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
{/literal}
</script>

<form action="" method="GET" style="margin: 0">
{$formtoken}
<input type="hidden" name="serendipity[adminModule]" value="comments" />
<input type="hidden" name="serendipity[page]" value="{$page}" />
<table class="serendipity_admin_filters" width="100%">
    <tr>
        <td colspan="6" class="serendipity_admin_filters_headline"><strong>{$CONST.FILTERS}</strong> - {$CONST.FIND_COMMENTS}</td>
    </tr>
	{* if we change/set $serendipity{'GET'] values in the parents php file ... does $smarty.get then know about them ??? *}
    <tr>
        <td>{$CONST.AUTHOR}:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][author]" size="15" value="{$smarty.get.filter.author|escape}" /></td>
        <td>{$CONST.EMAIL}:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][email]" size="15" value="{$smarty.get.filter.email|escape}" /></td>
        <td>{$CONST.URL}:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][url]" size="15" value="{$smarty.get.filter.url|escape}" /></td>
    </tr>
    <tr>
        <td>IP:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][ip]" size="15" value="{$smarty.get.filter.ip|escape}" /></td>
        <td>{$CONST.CONTENT}:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][body]" size="15" value="{$smarty.get.filter.body|escape}" /></td>
        <td>{$CONST.REFERER}:</td>
        <td><input class="input_textbox" type="text" name="serendipity[filter][referer]" size="15" value="{$smarty.get.filter.referer|escape}" /></td>
    </tr>
    <tr>
        <td>{$CONST.COMMENTS}:</td>
        <td><select name="serendipity[filter][perpage]">
            {* Smarty 3 does support ternary syntax e.g. {('N'==$member.is_admin)?'Yes':'No'} *}
			{foreach $filter_vals AS $filter_val}
            <option value="{$filter_val}" {($commentsPerPage == $filter_val) ? ' selected="selected"' : ''}>{$filter_val}</option>
            {/foreach}
            </select></td>
        <td>{$CONST.COMMENTS_FILTER_SHOW}:</td>
        <td><select name="serendipity[filter][show]">
                <option value="all"{if $smarty.get.filter.show == 'all'} selected="selected"{/if}>{$CONST.COMMENTS_FILTER_ALL}</option>
                <option value="approved"{if $smarty.get.filter.show == 'approved'} selected="selected"{/if}>{$CONST.COMMENTS_FILTER_APPROVED_ONLY}</option>
                <option value="pending"{if $smarty.get.filter.show == 'pending'} selected="selected"{/if}>{$CONST.COMMENTS_FILTER_NEED_APPROVAL}</option>
                <option value="confirm"{if $smarty.get.filter.show == 'confirm'} selected="selected"{/if}>{$CONST.COMMENTS_FILTER_NEED_CONFIRM}</option>
            </select></td>
        <td>{$CONST.TYPE}</td>
        <td><select name="serendipity[filter][type]">
                <option value="">{$CONST.COMMENTS_FILTER_ALL}</option>
                <option value="NORMAL"{if $c_type == 'NORMAL'} selected="selected"{/if}>{$CONST.COMMENTS}</option>
                <option value="TRACKBACK"{if $c_type == 'TRACKBACK'} selected="selected"{/if}>{$CONST.TRACKBACKS}</option>
                <option value="PINGBACK"{if $c_type == 'PINGBACK'} selected="selected"{/if}>{$CONST.PINGBACKS}</option>
            </select></td>
    </tr>
    <tr>
        <td colspan="6" align="right"><input type="submit" name="submit" value=" - {$CONST.GO} - " class="serendipityPrettyButton input_button" /> {serendipity_hookPlugin hookAll=true hook="backend_comments_top" addData=$sql}</td>
    </tr>
</table>
</form>

<hr noshade="noshade" /><br />

{if !is_array($sql)}
    <div align="center">- {$CONST.NO_COMMENTS} -</div>
{else}

<form action="" method="POST" name="formMultiDelete" id="formMultiDelete">
{$formtoken}
<input type="hidden" name="serendipity[formAction]" value="multiDelete" />
<table width="100%" cellpadding="3" border="0" cellspacing="0">
<tr>
    <td align="center">
        <table width="100%" cellspacing="5" cellpadding="0" border="0">
            <tr>
                <td>
                {if ( $page != 1 && $page <= $pages )}
                    <a href="{$linkPrevious}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/previous.png'}" />{$CONST.PREVIOUS}</a>
                {/if}
                </td>
                <td align="center">{$CONST.PAGE_BROWSE_COMMENTS|sprintf:$page:$pages:$totalComments}</td>
                <td align="right">
                {if $page != $pages}
                    <a href="{$linkNext}" class="serendipityIconLinkRight">{$CONST.NEXT}<img src="{serendipity_getFile file='admin/img/next.png'}" /></a>
                {/if}
                </td>
            </tr>
        </table>
    </td>
</tr>

{if is_array($comments)}
{* see dashboard PoC :: block_comments_pending.tpl or block_comments.tpl as example *}
{foreach $comments AS $comment}
<tr>
    <td class="{$comment.header_class}">
{if !empty($comment.header_class)}
            <img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file='admin/img/admin_msg_note.png'}" alt="" />
{/if}
        <a name="c{$comment.id}"></a>{* NOTE: a $comment.pubdate with 'c' is available *}
        {($comment.type == 'NORMAL') ? $CONST.COMMENT : (($comment.type == 'TRACKBACK') ? $CONST.TRACKBACK : $CONST.PINGBACK )} #{$comment.id}, {$CONST.IN_REPLY_TO} <strong><a href="{$comment.entry_url}">{$comment.title|escape}</a></strong>{$CONST.ON} {$comment.timestamp|@formatTime:'%b %e %Y, %H:%M'}
    </td>
</tr>
<tr>
    <td class="serendipity_admin_list_item {$comment.class}" id="comment_{$comment.id}">
        <table width="100%" cellspacing="0" cellpadding="3" border="0">
            <tr>
                <td rowspan="3" width="20" align="center"><input class="input_checkbox" type="checkbox" name="serendipity[delete][{$comment.id}]" value="{$comment.entry_id}" onclick="highlightComment('comment_{$comment.id}', this.checked)" tabindex="{$i}" /></td>
                <td width="40%"><strong>{$CONST.AUTHOR}</strong>: {$comment.author|escape|truncate:30:"&hellip;"} {$comment.action_author}</td>
                <td><strong>{$CONST.EMAIL}</strong>:
                    {if empty($comment.email)} N/A {else}
                            <a href="mailto:{$comment.email|escape}" title="{$comment.email|escape}">{$comment.email|escape|truncate:30:"&hellip;"}</a>
                            {if $comment.subscribed == 'true'} <span class="serendipity_subscription_on">({$CONST.ACTIVE_COMMENT_SUBSCRIPTION})</span>{/if}
                    {/if}
                {$comment.action_email}
                </td>
            </tr>
            <tr>
                <td width="40%"><strong>IP</strong>:
                    {if empty($comment.ip)} 0.0.0.0 {else} {$comment.ip|escape} {/if}
                    {$comment.action_ip}
                </td>
                <td><strong>{$CONST.URL}</strong>:
                    {if empty($comment.url)} N/A {else} <a href="{$comment.url|escape}" title="{$comment.url|escape}" target="_blank">{$comment.url|escape|truncate:30:"&hellip;"}</a> {/if}
                    {$comment.action_url}
                </td>
            </tr>
            <tr>
                <td width="40%">&nbsp;</td>
                <td><strong>{$CONST.REFERER}</strong>:
                    {if empty($comment.referer)} N/A {else} <a href="{$comment.referer|escape}" title="{$comment.referer|escape}" target="_blank">{$comment.referer|escape|truncate:30:"&hellip;"}</a> {/if}
                    {$comment.action_referer}
                </td>
            <tr>
                <td style="border-top: 1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC" colspan="3">
                    <div id="{$comment.id}_summary">{$comment.summary}</div>
                    <div id="{$comment.id}_full" style="display: none">{$comment.fullBody}</div>
                </td>
            </tr>
        </table>
{if ($comment.status == 'pending') || ($comment.status == 'confirm')}
          <a href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=approve&amp;serendipity[id]={$comment.id}&amp;{$urltoken}" class="serendipityIconLink" title="{$CONST.APPROVE}"><img src="{serendipity_getFile file='admin/img/accept.png'}" alt="{$CONST.APPROVE}" />{$CONST.APPROVE}</a>
{/if}
{if ($comment.status == 'approved')}
          <a href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=pending&amp;serendipity[id]={$comment.id}&amp;{$urltoken}" class="serendipityIconLink" title="{$CONST.SET_TO_MODERATED}"><img src="{serendipity_getFile file='admin/img/clock.png'}" alt="{$CONST.SET_TO_MODERATED}" />{$CONST.SET_TO_MODERATED}</a>
{/if}
{if $comment.excerpt}
          <a href="#c{$comment.id}" onclick="FT_toggle({$comment.id}); return false;" title="{$CONST.VIEW}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/zoom.png'}" alt="{$CONST.TOGGLE_ALL}" /><span id="{$comment.id}_text">{$CONST.TOGGLE_ALL}</span></a>
{/if}
          <a target="_blank" href="{$entrylink}" title="{$CONST.VIEW}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/zoom.png'}" alt="{$CONST.VIEW}" />{$CONST.VIEW}</a>
          <a href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=edit&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;{$urltoken}" title="{$CONST.EDIT}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/edit.png'}" alt="{$CONST.EDIT}" />{$CONST.EDIT}</a>
          <a href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=delete&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;{$urltoken}" onclick='return confirm("{($CONST.COMMENT_DELETE_CONFIRM|sprintf:$comment.id:$comment.author)|escape}")' title="{$CONST.DELETE}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/delete.png'}" alt="{$CONST.DELETE}" />{$CONST.DELETE}</a>
          <a target="_blank" onclick="cf = window.open(this.href, 'CommentForm', 'width=800,height=600,toolbar=no,scrollbars=1,scrollbars,resize=1,resizable=1'); cf.focus(); return false;" href="?serendipity[action]=admin&amp;serendipity[adminModule]=comments&amp;serendipity[adminAction]=reply&amp;serendipity[id]={$comment.id}&amp;serendipity[entry_id]={$comment.entry_id}&amp;serendipity[noBanner]=true&amp;serendipity[noSidebar]=true&amp;{$urltoken}" title="{$CONST.REPLY}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/user_editor.png'}" alt="{$CONST.REPLY}" />{$CONST.REPLY}</a>
          {$comment.action_more}
    </td>
</tr>
<tr>
    <td><hr noshade="noshade" /></td>
</tr>
{/foreach}
{/if}{* array $comments end *}
<tr>
    <td><input type="button" name="toggle" value="{$CONST.INVERT_SELECTIONS}" onclick="invertSelection()" class="serendipityPrettyButton input_button" /> 
    <input type="submit" name="toggle" value="{$CONST.DELETE_SELECTED_COMMENTS}" onclick="return confirm('{$CONST.COMMENTS_DELETE_CONFIRM}')" tabindex="{($i+1)}" class="serendipityPrettyButton input_button" />
    <input type="submit" name="serendipity[togglemoderate]" value="{$CONST.MODERATE_SELECTED_COMMENTS}" class="serendipityPrettyButton input_button" />
    </td>
</tr>
</table>
<table width="100%" cellpadding="3" border="0" cellspacing="0">
<tr>
    <td align="center">
        <table width="100%" cellspacing="5" cellpadding="0" border="0">
            <tr>
                <td>
                {if ( $page != 1 && $page <= $pages )}
                    <a href="{$linkPrevious}" class="serendipityIconLink"><img src="{serendipity_getFile file='admin/img/previous.png'}" />{$CONST.PREVIOUS}</a>
                {/if}
                </td>
                <td align="center">{$CONST.PAGE_BROWSE_COMMENTS|sprintf:$page:$pages:$totalComments}</td>
                <td align="right">
                {if $page != $pages}
                    <a href="{$linkNext}" class="serendipityIconLinkRight">{$CONST.NEXT}<img src="{serendipity_getFile file='admin/img/next.png'}" /></a>
                {/if}
                </td>
            </tr>
        </table>
    </td>
</tr>
</table>

</form>
{/if} {* if no comments else comments end *}
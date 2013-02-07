<!-- ENTRIES START -->
{serendipity_hookPlugin hook="entries_header" addData="$entry_id"}

{foreach from=$entries item="dategroup"}
<div class="hentry serendipity_Entry_Date{if $dategroup.is_sticky} serendipity_Sticky_Entry{/if}">
    {if $dategroup.is_sticky}
        {if $template_option.show_sticky_entry_heading == 'true'}
            <h3 class="serendipity_date">{$CONST.STICKY_POSTINGS}</h3>
        {/if}
    {else}
        <h3 class="serendipity_date"><abbr class="published" title="{$dategroup.date|@formatTime:'%Y-%m-%dT%H:%M:%S%Z'}">{$dategroup.date|@formatTime:$template_option.date_format}</abbr></h3>
    {/if}

    {foreach from=$dategroup.entries item="entry"}
    {assign var="entry" value=$entry scope="parent"}
        <h4 class="entry-title serendipity_title"><a href="{$entry.link}" rel="bookmark">{$entry.title}</a></h4>

        <div class="serendipity_entry serendipity_entry_author_{$entry.author|@makeFilename} {if $entry.is_entry_owner}serendipity_entry_author_self{/if}">

            {if (not $dategroup.is_sticky or ($dategroup.is_sticky and $template_option.show_sticky_entry_footer == 'true'))}
                {if $template_option.entryfooterpos == 'belowtitle'}
                    <div class='serendipity_entryFooter belowtitle'>
                        {if $template_option.footerauthor == 'true'}
                            {$CONST.POSTED_BY} <address class="author"><a href="{$entry.link_author}">{$entry.author}</a></address>
                        {/if}

                        {if $template_option.footercategories == 'true'}
                            {if $entry.categories}
                                {$CONST.IN} {foreach from=$entry.categories item="entry_category" name="categories"}<a href="{$entry_category.category_link}">{$entry_category.category_name|@escape}</a>{if not $smarty.foreach.categories.last}, {/if}{/foreach}
                            {/if}
                        {/if}

                        {if $template_option.footertimestamp == 'true'}
                            {if $dategroup.is_sticky}
                                {$CONST.ON}
                            {else}
                                {$CONST.AT}
                            {/if}
                            <a href="{$entry.link}">{if $dategroup.is_sticky}{$entry.timestamp|@formatTime:$template_option.date_format} {/if}{$entry.timestamp|@formatTime:'%H:%M'}</a>
                        {/if}

                        {if $template_option.footercomments == 'true'}
                            {if $entry.has_comments}
                                {if $use_popups}
                                    {if $template_option.altcommtrack == 'true'}
                                        | <a href="{$entry.link_popup_comments}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}</a>
                                    {else}
                                        | <a href="{$entry.link_popup_comments}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{$entry.label_comments} ({$entry.comments})</a>
                                    {/if}
                                {else}
                                    {if $template_option.altcommtrack == 'true'}
                                        | <a href="{$entry.link}#comments">{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}</a>
                                    {else}
                                        | <a href="{$entry.link}#comments">{$entry.label_comments} ({$entry.comments})</a>
                                    {/if}
                                {/if}
                            {/if}
                        {/if}

                        {if $template_option.footertrackbacks == 'true'}
                            {if $entry.has_trackbacks}
                                {if $use_popups}
                                    {if $template_option.altcommtrack == 'true'}
                                        | <a href="{$entry.link_popup_trackbacks}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{if $entry.trackbacks == 0}{$CONST.NO_TRACKBACKS}{else}{$entry.trackbacks} {$entry.label_trackbacks}{/if}</a>
                                    {else}
                                        | <a href="{$entry.link_popup_trackbacks}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{$entry.label_trackbacks} ({$entry.trackbacks})</a>
                                    {/if}
                                {else}
                                    {if $template_option.altcommtrack == 'true'}
                                        | <a href="{$entry.link}#trackbacks">{if $entry.trackbacks == 0}{$CONST.NO_TRACKBACKS}{else}{$entry.trackbacks} {$entry.label_trackbacks}{/if}</a>
                                    {else}
                                        | <a href="{$entry.link}#trackbacks">{$entry.label_trackbacks} ({$entry.trackbacks})</a>
                                    {/if}
                                {/if}
                            {/if}
                        {/if}

                        {if $entry.is_entry_owner and not $is_preview}
                        <div class="editentrylink"><a href="{$entry.link_edit}">{$CONST.EDIT_ENTRY}</a></div>
                        {/if}

                        {$entry.add_footer}

                        {if $template_option.addthiswidget == 'true'}
                            <div class="addthiswidget">
                                <script type="text/javascript">
                                    addthis_url = '{$entry.rdf_ident|escape:url}';
                                    addthis_title = '{$entry.title|escape:url}';
                                    addthis_pub = '{$template_option.addthisaccount|escape}';
                                </script>
                                <script type="text/javascript" src="http://s7.addthis.com/js/addthis_widget.php?v=12" ></script>
                            </div>
                        {/if}

                    </div>
                {/if}

                {if $template_option.entryfooterpos == 'splitfoot'}
                  {if $template_option.footerauthor == 'false' and $template_option.footercategories == 'false' and $template_option.footertimestamp == 'false'}
                  {else}
                    <div class='serendipity_entryFooter byline'>
                        {if $template_option.footerauthor == 'true'}
                            {$CONST.POSTED_BY} <address class="author"><a href="{$entry.link_author}">{$entry.author}</a></address>
                        {/if}

                        {if $template_option.footercategories == 'true'}
                            {if $entry.categories}
                                {$CONST.IN} {foreach from=$entry.categories item="entry_category" name="categories"}<a href="{$entry_category.category_link}">{$entry_category.category_name|@escape}</a>{if not $smarty.foreach.categories.last}, {/if}{/foreach}
                            {/if}
                        {/if}

                        {if $template_option.footertimestamp == 'true'}
                            {if $dategroup.is_sticky}
                                {$CONST.ON}
                            {else}
                                {$CONST.AT}
                            {/if}
                            <a href="{$entry.link}">{if $dategroup.is_sticky}{$entry.timestamp|@formatTime:$template_option.date_format} {/if}{$entry.timestamp|@formatTime:'%H:%M'}</a>
                        {/if}
                    </div>
                  {/if}
                {/if}
            {/if}

            {if $entry.categories}
                <span class="serendipity_entryIcon">
                    {foreach from=$entry.categories item="entry_category"}
                        {if $entry_category.category_icon}
                            <a href="{$entry_category.category_link}"><img class="serendipity_entryIcon" title="{$entry_category.category_name|@escape}{$entry_category.category_description|@emptyPrefix}" alt="{$entry_category.category_name|@escape}" src="{$entry_category.category_icon}" /></a>
                        {/if}
                    {/foreach}
               </span>
            {/if}
  
            <div class="entry-content serendipity_entry_body">
                {$entry.body}
                {if $entry.has_extended and not $is_single_entry and not $entry.is_extended}
                    {assign var="shorttitle"  value=$entry.title|@truncate:50:'...'}
                    <span class="continue_reading"><a href="{$entry.link}#extended" title='{$CONST.VIEW_EXTENDED_ENTRY|@sprintf:$shorttitle}'>{$CONST.VIEW_EXTENDED_ENTRY|@sprintf:$shorttitle} &#187;</a></span>
                {/if}
           </div>

            {if $entry.is_extended}
                <div class="serendipity_entry_extended"><a id="extended"></a>{$entry.extended}</div>
            {/if}

            {if (not $dategroup.is_sticky or ($dategroup.is_sticky and $template_option.show_sticky_entry_footer == 'true'))}
                {if $template_option.entryfooterpos == 'belowentry'}
                    <div class='serendipity_entryFooter belowentry'>
                        {if $template_option.footerauthor == 'true'}
                            {$CONST.POSTED_BY} <address class="author"><a href="{$entry.link_author}">{$entry.author}</a></address>
                        {/if}

                        {if $template_option.footercategories == 'true'}
                            {if $entry.categories}
                                {$CONST.IN} {foreach from=$entry.categories item="entry_category" name="categories"}<a href="{$entry_category.category_link}">{$entry_category.category_name|@escape}</a>{if not $smarty.foreach.categories.last}, {/if}{/foreach}
                            {/if}
                        {/if}

                        {if $template_option.footertimestamp == 'true'}
                            {if $dategroup.is_sticky}
                                {$CONST.ON}
                            {else}
                                {$CONST.AT}
                            {/if}
                                <a href="{$entry.link}">{if $dategroup.is_sticky}{$entry.timestamp|@formatTime:$template_option.date_format} {/if}{$entry.timestamp|@formatTime:'%H:%M'}</a>
                        {/if}

                        {if $template_option.footercomments == 'true'}
                            {if $entry.has_comments}
                                {if $use_popups}
                                    {if $template_option.altcommtrack == 'true'}
                                        | <a href="{$entry.link_popup_comments}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}</a>
                                    {else}
                                        | <a href="{$entry.link_popup_comments}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{$entry.label_comments} ({$entry.comments})</a>
                                    {/if}
                                {else}
                                    {if $template_option.altcommtrack == 'true'}
                                        | <a href="{$entry.link}#comments">{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}</a>
                                    {else}
                                        | <a href="{$entry.link}#comments">{$entry.label_comments} ({$entry.comments})</a>
                                    {/if}
                                {/if}
                            {/if}
                        {/if}

                        {if $template_option.footertrackbacks == 'true'}
                            {if $entry.has_trackbacks}
                                {if $use_popups}
                                    {if $template_option.altcommtrack == 'true'}
                                        | <a href="{$entry.link_popup_trackbacks}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{if $entry.trackbacks == 0}{$CONST.NO_TRACKBACKS}{else}{$entry.trackbacks} {$entry.label_trackbacks}{/if}</a>
                                    {else}
                                        | <a href="{$entry.link_popup_trackbacks}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{$entry.label_trackbacks} ({$entry.trackbacks})</a>
                                    {/if}
                                {else}
                                    {if $template_option.altcommtrack == 'true'}
                                        | <a href="{$entry.link}#trackbacks">{if $entry.trackbacks == 0}{$CONST.NO_TRACKBACKS}{else}{$entry.trackbacks} {$entry.label_trackbacks}{/if}</a>
                                    {else}
                                        | <a href="{$entry.link}#trackbacks">{$entry.label_trackbacks} ({$entry.trackbacks})</a>
                                    {/if}
                                {/if}
                            {/if}
                        {/if}

                        {if $entry.is_entry_owner and not $is_preview}
                            <div class="editentrylink"><a href="{$entry.link_edit}">{$CONST.EDIT_ENTRY}</a></div>
                        {/if}

                        {$entry.add_footer}

                        {if $template_option.addthiswidget == 'true'}
                            <div class="addthiswidget">
                                <a href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', encodeURIComponent('{$entry.rdf_ident}'), encodeURIComponent('{$entry.title|escape:url}'));" onmouseout="addthis_close()" onclick="return addthis_sendto()" title="Bookmark and Share" target="_blank"><img src="http://s7.addthis.com/static/btn/lg-bookmark-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0" /></a>
                                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub={$template_option.addthisaccount|escape}"></script>
                            </div>
                        {/if}

                    </div>
                {/if}

                {if $template_option.entryfooterpos == 'splitfoot'}
                    <div class='serendipity_entryFooter infofooter'>
                        {if $template_option.footercomments == 'true'}
                            {if $entry.has_comments}
                                {if $use_popups}
                                    {if $template_option.altcommtrack == 'true'}
                                        <a href="{$entry.link_popup_comments}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}</a>
                                    {else}
                                        <a href="{$entry.link_popup_comments}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{$entry.label_comments} ({$entry.comments})</a>
                                    {/if}
                                {else}
                                    {if $template_option.altcommtrack == 'true'}
                                        <a href="{$entry.link}#comments">{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}</a>
                                    {else}
                                        <a href="{$entry.link}#comments">{$entry.label_comments} ({$entry.comments})</a>
                                    {/if}
                                {/if}
                            {/if}
                        {/if}

                        {if $template_option.footertrackbacks == 'true'}
                            {if $entry.has_trackbacks}
                                {if $use_popups}
                                    {if $template_option.altcommtrack == 'true'}
                                        | <a href="{$entry.link_popup_trackbacks}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{if $entry.trackbacks == 0}{$CONST.NO_TRACKBACKS}{else}{$entry.trackbacks} {$entry.label_trackbacks}{/if}</a>
                                    {else}
                                        | <a href="{$entry.link_popup_trackbacks}" onclick="window.open(this.href, 'comments', 'width=600,height=600,scrollbars=yes,resizable=yes'); return false;">{$entry.label_trackbacks} ({$entry.trackbacks})</a>
                                    {/if}
                                {else}
                                    {if $template_option.altcommtrack == 'true'}
                                        | <a href="{$entry.link}#trackbacks">{if $entry.trackbacks == 0}{$CONST.NO_TRACKBACKS}{else}{$entry.trackbacks} {$entry.label_trackbacks}{/if}</a>
                                    {else}
                                        | <a href="{$entry.link}#trackbacks">{$entry.label_trackbacks} ({$entry.trackbacks})</a>
                                    {/if}
                                {/if}
                            {/if}
                        {/if}

                        {if $entry.is_entry_owner and not $is_preview}
                            <div class="editentrylink"><a href="{$entry.link_edit}">{$CONST.EDIT_ENTRY}</a></div>
                        {/if}

                        {$entry.add_footer}

                        {if $template_option.addthiswidget == 'true'}
                            <div class="addthiswidget">
                                <script type="text/javascript">
                                    addthis_url = '{$entry.rdf_ident|escape:url}';
                                    addthis_title = '{$entry.title|escape:url}';
                                    addthis_pub = '{$template_option.addthisaccount|escape}';
                                </script>
                                <script type="text/javascript" src="http://s7.addthis.com/js/addthis_widget.php?v=12" ></script>
                            </div>
                        {/if}

                    </div>
                {/if}
            {/if}
        </div>

        <!--
        <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                 xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/"
                 xmlns:dc="http://purl.org/dc/elements/1.1/">
        <rdf:Description
                 rdf:about="{$entry.link_rdf}"
                 trackback:ping="{$entry.link_trackback}"
                 dc:title="{$entry.title_rdf|@default:$entry.title}"
                 dc:identifier="{$entry.rdf_ident}" />
        </rdf:RDF>
        -->
        {$entry.plugin_display_dat}

        {if $is_single_entry and not $use_popups and not $is_preview}
            {if $CONST.DATA_UNSUBSCRIBED}
                <div class="serendipity_center serendipity_msg_notice">{$CONST.DATA_UNSUBSCRIBED|@sprintf:$CONST.UNSUBSCRIBE_OK}</div>
            {/if}

            {if $CONST.DATA_TRACKBACK_DELETED}
                <div class="serendipity_center serendipity_msg_notice">{$CONST.DATA_TRACKBACK_DELETED|@sprintf:$CONST.TRACKBACK_DELETED}</div>
            {/if}

            {if $CONST.DATA_TRACKBACK_APPROVED}
                <div class="serendipity_center serendipity_msg_notice">{$CONST.DATA_TRACKBACK_APPROVED|@sprintf:$CONST.TRACKBACK_APPROVED}</div>
            {/if}

            {if $CONST.DATA_COMMENT_DELETED}
                <div class="serendipity_center serendipity_msg_notice">{$CONST.DATA_COMMENT_DELETED|@sprintf:$CONST.COMMENT_DELETED}</div>
            {/if}

            {if $CONST.DATA_COMMENT_APPROVED}
                <div class="serendipity_center serendipity_msg_notice">{$CONST.DATA_COMMENT_APPROVED|@sprintf:$CONST.COMMENT_APPROVED}</div>
            {/if}

            <div class="serendipity_comments serendipity_section_trackbacks">
                <a id="trackbacks"></a>
                <div class="serendipity_commentsTitle">{$CONST.TRACKBACKS}</div>
                <div class="serendipity_center">
                    <a rel="nofollow" style="font-weight: normal" href="{$entry.link_trackback}" onclick="alert('{$CONST.TRACKBACK_SPECIFIC_ON_CLICK|@escape:html}'); return false;" title="{$CONST.TRACKBACK_SPECIFIC_ON_CLICK|@escape}">{$CONST.TRACKBACK_SPECIFIC}</a>
                </div>
                <div id="serendipity_trackbacklist">{serendipity_printTrackbacks entry=$entry.id}</div>
            </div>
        {/if}

        {if $is_single_entry and not $is_preview}
            <div class="serendipity_comments serendipity_section_comments">
                <a id="comments"></a>
                <div class="serendipity_commentsTitle">{$CONST.COMMENTS}</div>
                <div class="serendipity_center">{$CONST.DISPLAY_COMMENTS_AS}
                    {if $entry.viewmode eq $CONST.VIEWMODE_LINEAR}
                        ({$CONST.COMMENTS_VIEWMODE_LINEAR} | <a href="{$entry.link_viewmode_threaded}#comments" rel="nofollow">{$CONST.COMMENTS_VIEWMODE_THREADED}</a>)
                    {else}
                        (<a rel="nofollow" href="{$entry.link_viewmode_linear}#comments">{$CONST.COMMENTS_VIEWMODE_LINEAR}</a> | {$CONST.COMMENTS_VIEWMODE_THREADED})
                    {/if}
                </div>
                <div id="serendipity_commentlist">{serendipity_printComments entry=$entry.id mode=$entry.viewmode}</div>

                {if $entry.is_entry_owner}
                    {if $entry.allow_comments}
                        <div class="serendipity_center">(<a href="{$entry.link_deny_comments}">{$CONST.COMMENTS_DISABLE}</a>)</div>
                    {else}
                        <div class="serendipity_center">(<a href="{$entry.link_allow_comments}">{$CONST.COMMENTS_ENABLE}</a>)</div>
                    {/if}
                {/if}
                <a id="feedback"></a>

                {foreach from=$comments_messagestack item="message"}
                    <div class="serendipity_center serendipity_msg_important">{$message}</div>
                {/foreach}

                {if $is_comment_added}
                    <div class="serendipity_center serendipity_msg_notice">{$CONST.COMMENT_ADDED}</div>
                {elseif $is_comment_moderate}
                    <div class="serendipity_center serendipity_msg_notice">{$CONST.COMMENT_ADDED}<br />{$CONST.THIS_COMMENT_NEEDS_REVIEW}</div>
                {elseif not $entry.allow_comments}
                    <div class="serendipity_center serendipity_msg_important">{$CONST.COMMENTS_CLOSED}</div>
                {else}
                   <div class="serendipity_section_commentform">
                       <div class="serendipity_commentsTitle">{$CONST.ADD_COMMENT}</div>
                       {$COMMENTFORM}
                   </div>
                {/if}
            </div>
        {/if}

        {$entry.backend_preview}
    {/foreach}
</div>

{foreachelse}
    {if not $plugin_clean_page}
        <div class="serendipity_overview_noentries">
            {$CONST.NO_ENTRIES_TO_PRINT}
        </div>
    {/if}
{/foreach}

<div class='serendipity_pageFooter' style="text-align: center">
    {if $footer_prev_page}
        {if $template_option.prev_next_style == 'texticon'}
            {if $template_option.colorset == 'blank'}
                <a title="{$CONST.PREVIOUS_PAGE}" href="{$footer_prev_page}"><img alt="{$CONST.PREVIOUS_PAGE}" title="{$CONST.PREVIOUS_PAGE}" src="{serendipity_getFile file="img/back.png"}" />{$CONST.PREVIOUS_PAGE}</a>
            {else}
                <a title="{$CONST.PREVIOUS_PAGE}" href="{$footer_prev_page}"><img alt="{$CONST.PREVIOUS_PAGE}" title="{$CONST.PREVIOUS_PAGE}" src="{$serendipityHTTPPath}templates/{$template}/img/{$template_option.colorset}_back.png" />{$CONST.PREVIOUS_PAGE}</a>
            {/if}
        {elseif  $template_option.prev_next_style == 'icon'}
            {if $template_option.colorset == 'blank'}
                <a title="{$CONST.PREVIOUS_PAGE}" href="{$footer_prev_page}"><img alt="{$CONST.PREVIOUS_PAGE}" src="{serendipity_getFile file="img/back.png"}" />{$CONST.PREVIOUS_PAGE}</a>
            {else}
                <a title="{$CONST.PREVIOUS_PAGE}" href="{$footer_prev_page}"><img alt="{$CONST.PREVIOUS_PAGE}" src="{$serendipityHTTPPath}templates/{$template}/img/{$template_option.colorset}_back.png" /></a>
            {/if}
        {elseif $template_option.prev_next_style == 'text'}
            <a title="{$CONST.PREVIOUS_PAGE}" href="{$footer_prev_page}">&#171; {$CONST.PREVIOUS_PAGE}</a>&#160;&#160;
        {/if}
    {/if}

    {if $footer_info}
        ({$footer_info})
    {/if}

    {if $footer_next_page}
        {if $template_option.prev_next_style == 'texticon'}
            {if $template_option.colorset == 'blank'}
                <a title="{$CONST.NEXT_PAGE}" href="{$footer_next_page}">{$CONST.NEXT_PAGE}<img alt="{$CONST.NEXT_PAGE}" title="{$CONST.NEXT_PAGE}" src="{serendipity_getFile file="img/forward.png"}" /></a>
            {else}
                <a title="{$CONST.NEXT_PAGE}" href="{$footer_next_page}">{$CONST.NEXT_PAGE}<img alt="{$CONST.NEXT_PAGE}" title="{$CONST.NEXT_PAGE}" src="{$serendipityHTTPPath}templates/{$template}/img/{$template_option.colorset}_forward.png" /></a>
            {/if}
        {elseif $template_option.prev_next_style == 'icon'}
            {if $template_option.colorset == 'blank'}
                <a title="{$CONST.NEXT_PAGE}" href="{$footer_next_page}"><img alt="{$CONST.NEXT_PAGE}" src="{serendipity_getFile file="img/forward.png"}" /></a>
            {else}
                <a title="{$CONST.NEXT_PAGE}" href="{$footer_next_page}"><img alt="{$CONST.NEXT_PAGE}" src="{$serendipityHTTPPath}templates/{$template}/img/{$template_option.colorset}_forward.png" /></a>
            {/if}
        {elseif $template_option.prev_next_style == 'text'}
             <a title="{$CONST.NEXT_PAGE}" href="{$footer_next_page}">{$CONST.NEXT_PAGE} &#187;</a>
        {/if}
    {/if}

    {if $template_option.show_pagination == 'true' && $footer_totalPages > 1}
        <div class="pagination">
            {assign var="paginationStartPage" value="`$footer_currentPage-3`"}
            {if $footer_currentPage+3 > $footer_totalPages}
                {assign var="paginationStartPage" value="`$footer_totalPages-6`"}
            {/if}
            {if $paginationStartPage <= 0}
                {assign var="paginationStartPage" value="1"}
            {/if}
            {if $footer_prev_page}
                <a title="{$CONST.PREVIOUS_PAGE}" href="{$footer_prev_page}"><span class="pagearrow">&#9668;</span></a>
            {/if}
            {if $paginationStartPage > 1}
                <a href="{$footer_pageLink|replace:'%s':'1'}">1</a>
            {/if}
            {if $paginationStartPage > 2}
                &hellip;
            {/if}
            {section name=i start=$paginationStartPage loop=$footer_totalPages+1 max=7}
                {if $smarty.section.i.index != $footer_currentPage}
                    <a href="{$footer_pageLink|replace:'%s':$smarty.section.i.index}">{$smarty.section.i.index}</a>
                {else}
                    <span id="thispage">{$smarty.section.i.index}</span>
                {/if}
            {/section}
            {if $smarty.section.i.index < $footer_totalPages}
                &hellip;
            {/if}
            {if $smarty.section.i.index <= $footer_totalPages}
                <a href="{$footer_pageLink|replace:'%s':$footer_totalPages}">{$footer_totalPages}</a>
            {/if}
            {if $footer_next_page}
                <a title="{$CONST.NEXT_PAGE}" href="{$footer_next_page}"><span class="pagearrow">&#9658;</span></a>
            {/if}
        </div>
    {/if}

    {serendipity_hookPlugin hook="entries_footer"}
</div>
<!-- ENTRIES END -->

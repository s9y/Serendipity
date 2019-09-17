{serendipity_hookPlugin hook="entries_header" addData="$entry_id"}

{if $template_option.display_as_timeline and $entries and !$is_single_entry and not $entry.is_extended and not $is_preview}{* THIS IS OUR FRONTPAGE SCENARIO - OPEN TIMELINE*}
    <ul class="timeline">
    {assign var="prevmonth" value=''}
{/if}

{foreach from=$entries item="dategroup" name="entrytop"}
    {foreach from=$dategroup.entries item="entry"}
        {assign var="entry" value=$entry scope="parent"}
        {if !$is_single_entry and not $entry.is_extended and not $is_preview}{* THIS IS OUR FRONTPAGE SCENARIO *}
            {if $template_option.display_as_timeline}
                {if $template_option.months_on_timeline == true}
                    {assign var="curmonth" value=$entry.timestamp|@formatTime:"%B"}
                    {if $prevmonth != $curmonth}
                        <li class="timeline-month-heading"><div class="tldate">{$entry.timestamp|@formatTime:$template_option.months_on_timeline_format}</div></li> 
                        {assign var="timelinetmargin" value="timeline-no-top-margin"}
                    {else}
                        {if $timelinetmargin =="timeline-top-margin"}{assign var="timelinetmargin" value="timeline-no-top-margin"}{else}{assign var="timelinetmargin" value="timeline-top-margin"}{/if}
                    {/if}
                    <li class="{cycle values='left,timeline-inverted'} {$timelinetmargin}">
                {else}
                    <li class="{cycle values='left,timeline-inverted timeline-top-margin'}">
                {/if}
                    <div class="timeline-badge"><i class="far fa-dot-circle" aria-hidden="true"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {if $entry.properties.timeline_image|is_in_string:'<iframe,<embed,<object'}{* we assume this is a video, just emit the contents of the var *}
                                {$entry.properties.timeline_image}
                            {else}
                                <a href="{$entry.link}" title="{$entry.title}"><img class="img-responsive" {if $entry.properties.timeline_image}src="{$entry.properties.timeline_image}"{else}src="{serendipity_getFile file='img/image_unavailable.jpg'}"{/if} alt=""/></a>
                            {/if}
                        </div>
                        <div class="timeline-body">
                            <h2><a href="{$entry.link}">{$entry.title}</a></h2>
                            {$entry.body}
                            {if $entry.has_extended and not $is_single_entry and not $entry.is_extended}
                                <p class="read_more"><a class="btn btn-md btn-default btn-readmore btn-theme clearfix" href="{$entry.link}#extended">{$CONST.READ_MORE} <i class="fas fa-arrow-right" aria-hidden="true"></i></a></p>
                            {/if}
                        </div>
                        <div class="timeline-footer">
                            <span class="timeline-footer-date"><i class="far fa-clock"></i><time datetime="{$entry.timestamp|@serendipity_html5time}">{$entry.timestamp|@formatTime:$template_option.date_format}</time></span>
                            <span class="timeline-footer-comments"><i class="{if $entry.comments == 0}far fa-comment{elseif $entry.comments == 1}fas fa-comment{else}fas fa-comments{/if}" aria-hidden="true"></i> <a href="{$entry.link}#comments">{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}</a></span>
                        </div>
                    </div>
                    </li>
                    {assign var="prevmonth" value=$entry.timestamp|@formatTime:"%B"}
            {else}{* not using timeline - use blog format instead *}
                {if $entry.body || $entry.properties.timeline_image}
                    <div class="row each-blogstyle-entry">
                        <div class="col-md-5 blogstyle-post-thumb">
                            {if $entry.properties.timeline_image|is_in_string:'<iframe,<embed,<object'}{* we assume this is a video, just emit the contents of the var *}
                                <div>{$entry.properties.timeline_image}</div>
                            {else}
                                <a href="{$entry.link}" title="{$entry.title}"><img class="img-responsive" {if $entry.properties.timeline_image}src="{$entry.properties.timeline_image}"{else}src="{serendipity_getFile file='img/image_unavailable.jpg'}"{/if} alt=""/></a>
                            {/if}                        
                        </div>
                        <div class="col-md-7 blogstyle-post-body">
                            <h2><a href="{$entry.link}">{$entry.title}</a></h2>
                            <p class="post-info"><span class="sr-only">{$CONST.POSTED_BY}</span>
                                <span class="sr-only"> {$CONST.ON}</span><span class="entry-timestamp"><i class="far fa-clock" aria-hidden="true"></i><time datetime="{$entry.timestamp|serendipity_html5time}">{$entry.timestamp|formatTime:$template_option.date_format}</time></span>
                                <span class="entry-comment-link"><i class="{if $entry.comments == 0}far fa-comment{elseif $entry.comments == 1}fas fa-comment{else}fas fa-comments{/if}" aria-hidden="true"></i><a href="{$entry.link}#comments">{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}</a></span>                                
                            </p>
                            {$entry.body}
                            {if $entry.has_extended and not $is_single_entry and not $entry.is_extended}
                                <p class="read_more"><a class="btn btn-md btn-default btn-readmore btn-theme clearfix" href="{$entry.link}#extended">{$CONST.READ_MORE} <i class="fas fa-arrow-right" aria-hidden="true"></i></a></p>
                            {/if}
                        </div>
                    </div>
                    <hr>
                {/if}
            {/if}
        {else} {* THIS IS A DETAILED ENTRY VIEW *}
            <section id="entry">
                <h2><a href="{$entry.link}">{$entry.title}</a></h2>
                <p class="post-info clearfix">
                    <span class="sr-only">{$CONST.POSTED_BY}</span>
                    <span class="entry-author-link"><i class ="fa fa-user" aria-hidden="true"></i><a href="{$entry.link_author}">{$entry.author}</a></span>
                    <span class="sr-only"> {$CONST.ON}</span><span class="entry-timestamp"><i class="far fa-clock" aria-hidden="true"></i><time datetime="{$entry.timestamp|serendipity_html5time}">{$entry.timestamp|formatTime:$template_option.date_format}</time></span>
                    <span class="entry-comment-link"><i class="{if $entry.comments == 0}far fa-comment{elseif $entry.comments == 1}fas fa-comment{else}fas fa-comments{/if}" aria-hidden="true"></i><a href="{$entry.link}#comments">{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}</a></span>
                    {if $entry.is_entry_owner and not $is_preview}<span class="entry-edit-link"><i class="fas fa-lg fa-edit"></i><a href="{$entry.link_edit}" title="{$CONST.EDIT_ENTRY}">{$CONST.EDIT_ENTRY}</a></span>{/if}
                </p>
                {if $is_preview}
                    {append var='entry' value=$smarty.session.save_entry_POST.properties index='properties'}{* gives us access to entry properties in preview *}
                {/if}
                {if $entry.properties.timeline_image}
                    {if $entry.properties.timeline_image|is_in_string:'<iframe,<embed,<object'}{* we assume this is a video, just emit the contents of the var *}
                        {$entry.properties.timeline_image}
                    {else}
                        {serendipity_getImageSize file=$entry.properties.timeline_image assign="img_size"}
                        <img class="{if $img_size[0]>=800}image-full-width{else}serendipity_image_left{/if}" src="{$entry.properties.timeline_image}" width="{$img_size[0]}" height="{$img_size[1]}" alt=""/>
                    {/if}
                {/if}
                <div class="serendipity_entry_body clearfix">            
                    {if $entry.categories}{foreach from=$entry.categories item="entry_category"}{if $entry_category.category_icon}<a href="{$entry_category.category_link}"><img class="serendipity_entryIcon" title="{$entry_category.category_name|@escape}{$entry_category.category_description|@emptyPrefix}" alt="{$entry_category.category_name|@escape}" src="{$entry_category.category_icon|escape}"></a>{/if}{/foreach}{/if}
                    {$entry.body}
                </div>
                {if $entry.is_extended}
                    <div id="extended" class="serendipity_extended_body clearfix">
                        {$entry.extended}
                    </div>
                {/if}
                {if $entry.plugin_display_dat}
                    {$entry.plugin_display_dat}
                {/if}
                {if $entry.categories or $entry.add_footer}
                    <footer class="entry-footer">
                        {if $entry.categories}
                            <span class="sr-only">{$CONST.CATEGORIES}: </span>
                            <i class="fas fa-folder-open" aria-hidden="true"></i>
                            {foreach from=$entry.categories item="entry_category" name="categories"}<a class="btn btn-sm btn-default btn-theme" href="{$entry_category.category_link}" title="{$CONST.CATEGORY}: {$entry_category.category_name|@escape}">{$entry_category.category_name|@escape}</a>{if !$smarty.foreach.categories.last}&nbsp;{/if}{/foreach}
                        {/if}
                        {if isset($entry.freetag.extended) && $entry.freetag.extended == 1}
                            {if $entry.freetag.tags.tags}
                                <div class="timeline_freeTag">
                                <span class="sr-only">{$entry.freetag.tags.description}</span>
                                <i class="fas fa-tags" aria-hidden="true"></i>
                                    {foreach from=$entry.freetag.tags.tags item="tag"}
                                        {$tag}
                                    {/foreach}
                                </div>
                                {if $is_single_entry or $is_preview}
                                    <div class="timeline_freeTag_related">
                                        <span>{$entry.freetag.related.description}</span>
                                        <ul class="plainList">
                                        {foreach from=$entry.freetag.related.entries item="link"}
                                            <li>{$link}</li>
                                        {/foreach}
                                        </ul>
                                    </div>
                                {/if}
                            {/if}
                        {else}
                            {$entry.freetag}
                        {/if}                    
                        {$entry.add_footer}
                    </footer>
                {/if}
            </section>
        {/if}
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
    {if $is_single_entry and not $is_preview}
        {if $CONST.DATA_UNSUBSCRIBED}
            <div id="search-block" class="row">
                <div class="col-md-10 col-md-offset-1">
                    <p class="alert alert-info"><span class="fa-stack" aria-hidden="true"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-info fa-stack-1x"></i></span> {$CONST.DATA_UNSUBSCRIBED|@sprintf:$CONST.UNSUBSCRIBE_OK}</p>
                </div>
            </div>
        {/if}
        {if $CONST.DATA_TRACKBACK_DELETED}
            <div id="search-block" class="row">
                <div class="col-md-10 col-md-offset-1">        
                    <p class="alert alert-info"><span class="fa-stack" aria-hidden="true"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-info fa-stack-1x"></i></span> {$CONST.DATA_TRACKBACK_DELETED|@sprintf:$CONST.TRACKBACK_DELETED}</p>
                </div>
            </div>
        {/if}
        {if $CONST.DATA_TRACKBACK_APPROVED}
            <div id="search-block" class="row">
                <div class="col-md-10 col-md-offset-1">        
                    <p class="alert alert-success"><span class="fa-stack" aria-hidden="true"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-check fa-stack-1x"></i></span> {$CONST.DATA_TRACKBACK_APPROVED|@sprintf:$CONST.TRACKBACK_APPROVED}</p>
                </div>
            </div>
        {/if}
        {if $CONST.DATA_COMMENT_DELETED}
            <div id="search-block" class="row">
                <div class="col-md-10 col-md-offset-1">        
                    <p class="alert alert-info"><span class="fa-stack" aria-hidden="true"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-info fa-stack-1x"></i></span> {$CONST.DATA_COMMENT_DELETED|@sprintf:$CONST.COMMENT_DELETED}</p>
                </div>
            </div>
        {/if}
        {if $CONST.DATA_COMMENT_APPROVED}
            <div id="search-block" class="row">
                <div class="col-md-10 col-md-offset-1">        
                    <p class="alert alert-success"><span class="fa-stack" aria-hidden="true"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-check fa-stack-1x"></i></span> {$CONST.DATA_COMMENT_APPROVED|@sprintf:$CONST.COMMENT_APPROVED}</p>
                </div>
            </div>
        {/if}
        <a id="feedback"></a>
        {if $entry.trackbacks != 0}
            <section id="trackbacks" class="serendipity_comments serendipity_section_trackbacks">
                <h3>{if $entry.trackbacks == 0}{$CONST.NO_TRACKBACKS}{else}{$entry.trackbacks} {$entry.label_trackbacks}{/if}</h3>
                <p id="trackback_url"><small><a rel="nofollow" href="{$entry.link_trackback}" title="{$CONST.TRACKBACK_SPECIFIC_ON_CLICK|@escape}">{$CONST.TRACKBACK_SPECIFIC}</a></small></p>
                {serendipity_printTrackbacks entry=$entry.id}
            </section>
        {/if}
        <section id="comments" class="serendipity_comments serendipity_section_comments">
            <h3>{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}</h3>
            {if $entry.comments != 0}
                <p class="manage_comments">
                    {if $entry.viewmode eq $CONST.VIEWMODE_LINEAR}
                       <button class="btn btn-sm btn-default disabled">{$CONST.COMMENTS_VIEWMODE_LINEAR}</button>
                       <a class="btn btn-sm btn-default btn-theme" href="{$entry.link_viewmode_threaded}#comments" rel="nofollow" title="{$CONST.DISPLAY_COMMENTS_AS} {$CONST.COMMENTS_VIEWMODE_THREADED}">{$CONST.COMMENTS_VIEWMODE_THREADED}</a>
                    {else}
                       <a class="btn btn-sm btn-default btn-theme" rel="nofollow" href="{$entry.link_viewmode_linear}#comments" title="{$CONST.DISPLAY_COMMENTS_AS} {$CONST.COMMENTS_VIEWMODE_LINEAR}">{$CONST.COMMENTS_VIEWMODE_LINEAR}</a>
                       <button class="btn btn-sm btn-default disabled">{$CONST.COMMENTS_VIEWMODE_THREADED}</button>
                    {/if}
                </p>
            {/if}
            {serendipity_printComments entry=$entry.id mode=$entry.viewmode}
            {if $entry.is_entry_owner}
                <p class="manage_comments">
                    <small>
                        {if $entry.allow_comments}
                            <a href="{$entry.link_deny_comments}"><button class="btn btn-sm btn-default btn-theme">{$CONST.COMMENTS_DISABLE}</button></a>
                        {else}
                            <a href="{$entry.link_allow_comments}"><button class="btn btn-sm btn-default btn-theme">{$CONST.COMMENTS_ENABLE}</button></a>
                        {/if}
                    </small>
                </p>
            {/if}
        </section>
        {foreach from=$comments_messagestack item="message"}
            <div id="search-block" class="row">
                <div class="col-md-10 col-md-offset-1">
                    <p class="alert alert-danger alert-error"><span class="fa-stack" aria-hidden="true"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-exclamation fa-stack-1x"></i></span> {$message}</p>
                </div>
            </div>
        {/foreach}
        {if $is_comment_added}
            <div id="search-block" class="row">
                <div class="col-md-10 col-md-offset-1">        
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-target="#search-block" data-dismiss="alert" aria-label="Close" title="{$CONST.CLOSE}"><span aria-hidden="true">&times;</span></button>                
                        <span class="fa-stack text-success" aria-hidden="true"><i class="far fa-smile fa-2x"></i></span> {$CONST.COMMENT_ADDED}
                    </div>
                </div>
            </div>
        {elseif $is_comment_moderate}
            <div id="search-block" class="row">
                <div class="col-md-10 col-md-offset-1">           
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-target="#search-block" data-dismiss="alert" aria-label="Close" title="{$CONST.CLOSE}"><span aria-hidden="true">&times;</span></button>
                        <p class="text-success"><span class="fa-stack" aria-hidden="true"><i class="far fa-smile fa-2x"></i></span> {$CONST.COMMENT_ADDED}</p>
                        <p class="text-warning"><span class="fa-stack" aria-hidden="true"><i class="fas fa-info-circle fa-2x"></i></span>  {$CONST.THIS_COMMENT_NEEDS_REVIEW}</p>
                    </div>
                </div>
            </div>
        {elseif not $entry.allow_comments}
            <div id="search-block" class="row">
                <div class="col-md-10 col-md-offset-1">          
                    <p class="alert alert-danger text-danger"><span class="fa-stack" aria-hidden="true"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-exclamation fa-stack-1x"></i></span> {$CONST.COMMENTS_CLOSED}</p>
                </div>
            </div>
        {else}
            <section id="respond" class="serendipity_section_commentform">
                <h3>{$CONST.ADD_COMMENT}</h3>
                {$COMMENTFORM}
            </section>
        {/if}
    {/if}
    {$entry.backend_preview}
    {/foreach}

{foreachelse}
    {if not $plugin_clean_page}
        <div id="search-block" class="row">
            <div class="col-md-10 col-md-offset-1">    
                <p class="alert alert-info noentries"><span class="fa-stack"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-info fa-stack-1x"></i></span> {$CONST.NO_ENTRIES_TO_PRINT}</p>
            </div>
        </div>
    {/if}

{/foreach}
{if $template_option.display_as_timeline and $entries and !$is_single_entry and not $entry.is_extended and not $is_preview}{* THIS IS OUR FRONTPAGE SCENARIO - CLOSE TIMELINE *}
        <li class="clearfix" style="float: none;"></li>
    </ul>
{/if}


{if $footer_info or $footer_prev_page or $footer_next_page}
    <div class='serendipity_pageSummary'>
        {if $footer_info}
            <p class="summary serendipity_center">{$footer_info}</p>
        {/if}
            
        {if $footer_totalPages >1 }
            <nav class="pagination">
                {assign var="paginationStartPage" value="`$footer_currentPage-3`"}
                {if $footer_currentPage+3 > $footer_totalPages}
                    {assign var="paginationStartPage" value="`$footer_totalPages-4`"}
                {/if}
                {if $paginationStartPage <= 0}
                    {assign var="paginationStartPage" value="1"}
                {/if}
                {if $footer_prev_page}
                    <a class="btn btn-md btn-default btn-theme" title="{$CONST.PREVIOUS_PAGE}" href="{$footer_prev_page}"><i class="fas fa-arrow-left" aria-hidden="true"></i><span class="sr-only">{$CONST.PREVIOUS_PAGE}</span></a>
                {/if}
                {if $paginationStartPage > 1}
                    <a class="btn btn-md btn-default btn-theme" href="{'1'|string_format:$footer_pageLink}">1</a>
                {/if}
                {if $paginationStartPage > 2}
                    &hellip;
                {/if}
                {section name=i start=$paginationStartPage loop=$footer_totalPages+1 max=5}
                    {if $smarty.section.i.index != $footer_currentPage}
                        <a class="btn btn-md btn-default btn-theme" href="{$smarty.section.i.index|string_format:$footer_pageLink}">{$smarty.section.i.index}</a>
                    {else}
                        <span class="thispage btn btn-md btn-default btn-theme disabled">{$smarty.section.i.index}</span>
                    {/if}
                {/section}
                {if $smarty.section.i.index < $footer_totalPages}
                    &hellip;
                {/if}
                {if $smarty.section.i.index <= $footer_totalPages}
                    <a class="btn btn-md btn-default btn-theme" href="{$footer_totalPages|string_format:$footer_pageLink}">{$footer_totalPages}</a>
                {/if}
                {if $footer_next_page}
                    <a class="btn btn-md btn-default btn-theme" title="{$CONST.NEXT_PAGE}" href="{$footer_next_page}"><i class="fas fa-arrow-right" aria-hidden="true"></i><span class="sr-only">{$CONST.NEXT_PAGE}</span></a>
                {/if}
            </nav>
        {/if}
    </div>
{/if}
    {serendipity_hookPlugin hook="entries_footer"}
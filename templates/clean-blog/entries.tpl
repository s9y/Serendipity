{serendipity_hookPlugin hook="entries_header" addData="$entry_id"}
{foreach from=$entries item="dategroup"}
    {foreach from=$dategroup.entries item="entry"}
    {assign var="entry" value=$entry scope="parent"}
    <article id="post_{$entry.id}" class="post{if !$is_single_entry and not $entry.is_extended and not $is_preview}-preview{/if} serendipity_entry{if $dategroup.is_sticky} sticky{/if}" role="article">
    {if !$is_single_entry and not $entry.is_extended and not $is_preview}
        <a href="{$entry.link}"><h2 class="post-title">{$entry.title}</h2>
        {if $entry.properties.entry_subtitle}
            <h3 class="post-subtitle">{$entry.properties.entry_subtitle|escape}</h3>
        {elseif $template_option.subtitle_use_entrybody==true && $template_option.entrybody_detailed_only == true}
            <h3 class="post-subtitle">{$entry.body|@strip_tags|@strip|@truncate:70:" ..."}</h3>
        {/if}
        </a>
        <p class="post-meta">{$CONST.POSTED_BY} <a href="{$entry.link_author}">{$entry.author}</a> {$CONST.ON} <time datetime="{$entry.timestamp|@serendipity_html5time}">{$entry.timestamp|@formatTime:$template_option.date_format}</time>{if $template_option.show_comment_link == true}&nbsp;&nbsp;<a href="{$entry.link}#comments" title="{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}"><button class="btn btn-sm btn-default"><span class="badge">{$entry.comments}</span>&nbsp;<i class="fa fa-lg fa-comment-o"></i><span class="sr-only">{$entry.label_comments}</span></button></a>{/if}{if $entry.is_entry_owner and not $is_preview}&nbsp;&nbsp;<a href="{$entry.link_edit}"  title="{$CONST.EDIT_ENTRY}"><button class="btn btn-sm btn-default"><i class="fa fa-lg fa-edit"></i><span class="sr-only">{$CONST.EDIT_ENTRY}</span></button></a>{/if}</p>
    {/if}
    {if $template_option.entrybody_detailed_only != true || $entry.is_extended || $is_single_entry || $is_preview}
        <section id="entry">
            <div class="content serendipity_entry_body clearfix">
                {if $entry.categories}{foreach from=$entry.categories item="entry_category"}{if $entry_category.category_icon}<a href="{$entry_category.category_link}"><img class="serendipity_entryIcon" title="{$entry_category.category_name|@escape}{$entry_category.category_description|@emptyPrefix}" alt="{$entry_category.category_name|@escape}" src="{$entry_category.category_icon}"></a>{/if}{/foreach}{/if}
                {$entry.body}
                {if $entry.has_extended and not $is_single_entry and not $entry.is_extended}
                    <a class="read_more" href="{$entry.link}#extended"><button class="btn btn-md btn-default pull-right">{$CONST.READ_MORE} <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
                {/if}                
            </div>
            {if $entry.is_extended}
                <div id="extended" class="content serendipity_extended_body">
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
                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                        {foreach from=$entry.categories item="entry_category" name="categories"}<a class="btn btn-sm btn-default" href="{$entry_category.category_link}" title="{$CONST.CATEGORY}: {$entry_category.category_name|@escape}">{$entry_category.category_name|@escape}</a>{if !$smarty.foreach.categories.last}&nbsp;{/if}{/foreach}
                    {/if}
                    {if isset($entry.freetag.extended) && $entry.freetag.extended == 1}
                        {if $entry.freetag.tags.tags}
                            <div class="clean-blog_freeTag">
                            <span class="sr-only">{$entry.freetag.tags.description}</span>
                            <i class="fa fa-tags" aria-hidden="true"></i>
                                {foreach from=$entry.freetag.tags.tags item="tag"}
                                    {$tag}
                                {/foreach}
                            </div>
                            {if $is_single_entry or $is_preview}
                                <div class="cleanblog_freeTag_related">
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
            <p class="alert-info"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span> {$CONST.DATA_UNSUBSCRIBED|@sprintf:$CONST.UNSUBSCRIBE_OK}</p>
        {/if}
        {if $CONST.DATA_TRACKBACK_DELETED}
            <p class="alert-info"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span> {$CONST.DATA_TRACKBACK_DELETED|@sprintf:$CONST.TRACKBACK_DELETED}</p>
        {/if}
        {if $CONST.DATA_TRACKBACK_APPROVED}
            <p class="alert-success"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-check fa-stack-1x"></i></span> {$CONST.DATA_TRACKBACK_APPROVED|@sprintf:$CONST.TRACKBACK_APPROVED}</p>
        {/if}
        {if $CONST.DATA_COMMENT_DELETED}
            <p class="alert-info"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span> {$CONST.DATA_COMMENT_DELETED|@sprintf:$CONST.COMMENT_DELETED}</p>
        {/if}
        {if $CONST.DATA_COMMENT_APPROVED}
            <p class="alert-success"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-check fa-stack-1x"></i></span> {$CONST.DATA_COMMENT_APPROVED|@sprintf:$CONST.COMMENT_APPROVED}</p>
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
                       <a class="btn btn-sm btn-default" href="{$entry.link_viewmode_threaded}#comments" rel="nofollow" title="{$CONST.DISPLAY_COMMENTS_AS} {$CONST.COMMENTS_VIEWMODE_THREADED}">{$CONST.COMMENTS_VIEWMODE_THREADED}</a>
                    {else}
                       <a class="btn btn-sm btn-default" rel="nofollow" href="{$entry.link_viewmode_linear}#comments" title="{$CONST.DISPLAY_COMMENTS_AS} {$CONST.COMMENTS_VIEWMODE_LINEAR}">{$CONST.COMMENTS_VIEWMODE_LINEAR}</a>
                       <button class="btn btn-sm btn-default disabled">{$CONST.COMMENTS_VIEWMODE_THREADED}</button>
                    {/if}
                </p>
            {/if}
            {serendipity_printComments entry=$entry.id mode=$entry.viewmode}
            {if $entry.is_entry_owner}
                <p class="manage_comments">
                    <small>
                        {if $entry.allow_comments}
                            <a href="{$entry.link_deny_comments}"><button class="btn btn-sm btn-default">{$CONST.COMMENTS_DISABLE}</button></a>
                        {else}
                            <a href="{$entry.link_allow_comments}"><button class="btn btn-sm btn-default">{$CONST.COMMENTS_ENABLE}</button></a>
                        {/if}
                    </small>
                </p>
            {/if}
        </section>
        {foreach from=$comments_messagestack item="message"}
            <p class="alert alert-danger alert-error"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-exclamation fa-stack-1x"></i></span> {$message}</p>
        {/foreach}
        {if $is_comment_added}
            <p class="alert alert-success"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-check fa-stack-1x"></i></span> {$CONST.COMMENT_ADDED}</p>
        {elseif $is_comment_moderate}
            <p class="alert alert-info"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span> {$CONST.COMMENT_ADDED}: {$CONST.THIS_COMMENT_NEEDS_REVIEW}</p>
        {elseif not $entry.allow_comments}
            <p class="alert alert-danger alert-error"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-exclamation fa-stack-1x"></i></span> {$CONST.COMMENTS_CLOSED}</p>
        {else}
            <section id="respond" class="serendipity_section_commentform">
                <h3>{$CONST.ADD_COMMENT}</h3>
                {$COMMENTFORM}
            </section>
        {/if}
    {/if}
    {$entry.backend_preview}
    </article>
    {if !$is_single_entry and not $entry.is_extended}<hr>{/if}    
    {/foreach}
{foreachelse}
    {if not $plugin_clean_page}
        <p class="alert alert-info"><span class="fa-stack"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span> {$CONST.NO_ENTRIES_TO_PRINT}</p>
    {/if}
{/foreach}
{if $footer_info or $footer_prev_page or $footer_next_page}
            {if $footer_info}
                <p class="summary serendipity_center">{$footer_info}</p>
            {/if}
    <nav role="navigation">
        <ul class="pager">
            {if $footer_prev_page}<li class="previous"><a href="{$footer_prev_page}"><i class="fa fa-arrow-left" aria-hidden="true"></i> {$CONST.PREVIOUS_PAGE}</a></li>{/if}
            {if $footer_next_page}<li class="next"><a href="{$footer_next_page}">{$CONST.NEXT_PAGE} <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>{/if}
        </ul>
    </nav>
{/if}
    {serendipity_hookPlugin hook="entries_footer"}

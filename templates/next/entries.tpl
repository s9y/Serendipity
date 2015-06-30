{serendipity_hookPlugin hook="entries_header" addData="$entry_id"}
{foreach from=$entries item="dategroup"}
    {foreach from=$dategroup.entries item="entry"}
    {assign var="entry" value=$entry scope=parent}
    <article class="post{if $dategroup.is_sticky} sticky{/if} clearfix">
        <header>
            <h2 class="post-title"><a href="{$entry.link}">{$entry.title}</a></h2>

            <span class="post-info">{$CONST.POSTED_BY} <a href="{$entry.link_author}">{$entry.author}</a> {$CONST.ON} <time datetime="{$entry.timestamp|serendipity_html5time}">{$entry.timestamp|formatTime:$template_option.date_format}</time></span>
        </header>

        <div class="clearfix">
        {$entry.body}
        </div>
        {if $entry.has_extended and not $is_single_entry and not $entry.is_extended}
        <a class="read-more" href="{$entry.link}#extended">{$CONST.VIEW_EXTENDED_ENTRY|sprintf:$entry.title}</a>
        {/if}
        {if $entry.is_extended}
        <div id="extended" class="clearfix">
        {$entry.extended}
        </div>
        {/if}

        <footer class="post-info">
            <ul class="meta">
            {if $entry.categories}
                <li><span class="info-label">{$CONST.CATEGORIES}: </span>{foreach from=$entry.categories item="entry_category" name="categories"}<a href="{$entry_category.category_link}">{$entry_category.category_name|escape}</a>{if not $smarty.foreach.categories.last}, {/if}{/foreach}</li>
            {/if}
            {if $entry.has_comments}
                <li><a href="{$entry.link}#comments" title="{$entry.comments} {$entry.label_comments}{if $entry.has_trackbacks}, {$entry.trackbacks} {$entry.label_trackbacks}{/if}">{$entry.comments} {$entry.label_comments}</a></li>
            {/if}
            </ul>
            {$entry.add_footer}
            {$entry.plugin_display_dat}
        </footer>
        <!--
        <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                 xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/"
                 xmlns:dc="http://purl.org/dc/elements/1.1/">
        <rdf:Description
                 rdf:about="{$entry.link_rdf}"
                 trackback:ping="{$entry.link_trackback}"
                 dc:title="{$entry.title_rdf|default:$entry.title}"
                 dc:identifier="{$entry.rdf_ident}" />
        </rdf:RDF>
        -->
{if $is_single_entry and not $use_popups and not $is_preview}
    {if $CONST.DATA_UNSUBSCRIBED}
        <p class="msg-success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.DATA_UNSUBSCRIBED|sprintf:$CONST.UNSUBSCRIBE_OK}</p>
    {/if}
    {if $CONST.DATA_TRACKBACK_DELETED}
        <p class="msg-success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.DATA_TRACKBACK_DELETED|sprintf:$CONST.TRACKBACK_DELETED}</p>
    {/if}
    {if $CONST.DATA_TRACKBACK_APPROVED}
        <p class="msg-success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.DATA_TRACKBACK_APPROVED|sprintf:$CONST.TRACKBACK_APPROVED}</p>
    {/if}
    {if $CONST.DATA_COMMENT_DELETED}
        <p class="msg-success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.DATA_COMMENT_DELETED|sprintf:$CONST.COMMENT_DELETED}</p>
    {/if}
    {if $CONST.DATA_COMMENT_APPROVED}
        <p class="msg-success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.DATA_COMMENT_APPROVED|sprintf:$CONST.COMMENT_APPROVED}</p>
    {/if}
    <section id="trackbacks" class="clearfix">
        <h3>{$CONST.TRACKBACKS}</h3>

        <a class="trackback-url" rel="nofollow" href="{$entry.link_trackback}" title="{$CONST.TRACKBACK_SPECIFIC_ON_CLICK|escape}">{$CONST.TRACKBACK_SPECIFIC}</a>

        <p class="msg-notice trackback-hint"><span class="icon-info-circled" aria-hidden="true"></span> {$CONST.TRACKBACK_SPECIFIC_ON_CLICK|escape:html}</p>

        {serendipity_printTrackbacks entry=$entry.id}
    </section>
{/if}
{if $is_single_entry and not $is_preview}
    <section id="comments" class="clearfix">
        <h3>{$CONST.COMMENTS}</h3>

        <span class="comment-view">{$CONST.DISPLAY_COMMENTS_AS} {if $entry.viewmode eq $CONST.VIEWMODE_LINEAR}{$CONST.COMMENTS_VIEWMODE_LINEAR} | <a href="{$entry.link_viewmode_threaded}#comments" rel="nofollow">{$CONST.COMMENTS_VIEWMODE_THREADED}</a>{else}<a rel="nofollow" href="{$entry.link_viewmode_linear}#comments">{$CONST.COMMENTS_VIEWMODE_LINEAR}</a> | {$CONST.COMMENTS_VIEWMODE_THREADED}{/if}</span>

        {serendipity_printComments entry=$entry.id mode=$entry.viewmode}
    {if $entry.is_entry_owner}
        {if $entry.allow_comments}
        <a class="comments-enable" href="{$entry.link_deny_comments}">{$CONST.COMMENTS_DISABLE}</a>
        {else}
        <a class="comments-enable" href="{$entry.link_allow_comments}">{$CONST.COMMENTS_ENABLE}</a>
        {/if}
    {/if}
    </section>

    <a id="feedback"></a>
    {foreach from=$comments_messagestack item="message"}
    <p class="msg-notice"><span class="icon-info-circled" aria-hidden="true"></span> {$message}</p>
    {/foreach}
    {if $is_comment_added}
    <p class="msg-success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.COMMENT_ADDED}</p>
    {elseif $is_comment_moderate}
    <p class="msg-notice"><span class="icon-info-circled" aria-hidden="true"></span> {$CONST.COMMENT_ADDED} {$CONST.THIS_COMMENT_NEEDS_REVIEW}</p>
    {elseif not $entry.allow_comments}
    <p class="msg-warning"><span class="icon-attention-circled" aria-hidden="true"></span> {$CONST.COMMENTS_CLOSED}</p>
    {else}
    <section id="reply" class="clearfix">
        <h3>{$CONST.ADD_COMMENT}</h3>
        {$COMMENTFORM}
	</section>
    {/if}
{/if}
    {$entry.backend_preview}
    </article>
    {/foreach}
{foreachelse}
    {if not $plugin_clean_page}
    <p class="msg-notice"><span class="icon-info-circled" aria-hidden="true"></span> {$CONST.NO_ENTRIES_TO_PRINT}</p>
    {/if}
{/foreach}
{if not $is_preview}
    {if $staticpage_pagetitle == ''}
    <nav class="pagination clearfix">
        {if $footer_info}<h3>{$footer_info}</h3>{/if}
    {if $footer_prev_page||$footer_next_page}
        <ul>
            <li class="prev-page">{if $footer_prev_page}<a href="{$footer_prev_page}"><span class="icon-angle-circled-left" aria-hidden="true"></span><span class="fallback-text">{$CONST.PREVIOUS_PAGE}</span></a>{else}<span class="no-page"><span class="icon-angle-circled-left" aria-hidden="true"></span><span class="fallback-text">{$CONST.NO_ENTRIES_TO_PRINT}</span></span>{/if}</li>
            <li class="next-page">{if $footer_next_page}<a href="{$footer_next_page}"><span class="icon-angle-circled-right" aria-hidden="true"></span><span class="fallback-text">{$CONST.NEXT_PAGE}</span></a>{else}<span class="no-page"><span class="icon-angle-circled-right" aria-hidden="true"></span><span class="fallback-text">{$CONST.NO_ENTRIES_TO_PRINT}</span></span>{/if}</li>
        </ul>
    {/if}
    </nav>
    {/if}
{/if}
{serendipity_hookPlugin hook="entries_footer"}

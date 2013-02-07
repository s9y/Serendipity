{serendipity_hookPlugin hook="entries_header" addData="$entry_id"}
{foreach from=$entries item="dategroup"}
    {foreach from=$dategroup.entries item="entry"}
    {assign var="entry" value=$entry scope="parent"}
    <article id="post_{$entry.id}" class="clearfix serendipity_entry{if $dategroup.is_sticky} sticky{/if}">
        <header class="clearfix">
            <h2><a href="{$entry.link}">{$entry.title}</a></h2>

            <span class="serendipity_byline block_level"><span class="single_user">{$CONST.POSTED_BY} <a href="{$entry.link_author}">{$entry.author}</a> {$CONST.ON} </span><time datetime="{$entry.timestamp|@serendipity_html5time}" pubdate>{$entry.timestamp|@formatTime:$template_option.date_format}</time>{if $entry.is_entry_owner and not $is_preview} | <a href="{$entry.link_edit}">{$CONST.EDIT_ENTRY}</a>{/if}</span>
        </header>

        <div class="clearfix content serendipity_entry_body">
        {if $entry.categories}{foreach from=$entry.categories item="entry_category"}{if $entry_category.category_icon}<a href="{$entry_category.category_link}"><img class="serendipity_entryIcon" title="{$entry_category.category_name|@escape}{$entry_category.category_description|@emptyPrefix}" alt="{$entry_category.category_name|@escape}" src="{$entry_category.category_icon}"></a>{/if}{/foreach}{/if}
        {$entry.body}
        {if $entry.has_extended and not $is_single_entry and not $entry.is_extended}
        <a class="read_more block_level" href="{$entry.link}#extended">{$CONST.VIEW_EXTENDED_ENTRY|@sprintf:$entry.title}</a>
        {/if}
        </div>
        {if $entry.is_extended}
        <div id="extended" class="clearfix content">
        {$entry.extended}
        </div>
        {/if}

        <footer class="clearfix">
        {if $entry.categories}
            <span class="visuallyhidden">{$CONST.CATEGORIES}: </span>{foreach from=$entry.categories item="entry_category" name="categories"}<a href="{$entry_category.category_link}">{$entry_category.category_name|@escape}</a>{if not $smarty.foreach.categories.last}, {/if}{/foreach}
        {/if}
        {if $entry.categories and ($entry.has_comments or $entry.has_disqus)} | {/if}
        {if ($entry.has_comments or $entry.has_disqus)}
        {if $entry.has_disqus }
            {$entry.comments}{if $entry.has_trackbacks}, <a href="{$entry.link}#trackbacks">{$entry.trackbacks} {$entry.label_trackbacks}</a>{/if}
        {else}
            <a href="{$entry.link}#comments" title="{$entry.comments} {$entry.label_comments}{if $entry.has_trackbacks}, {$entry.trackbacks} {$entry.label_trackbacks}{/if}">{$entry.comments} {$entry.label_comments}</a>
        {/if}
        {/if}
        {if $entry.url_tweetthis}
            | <a href="{$entry.url_tweetthis}" title="{$CONST.TWOK11_TWEET_THIS}">Twitter</a>
        {/if}
        {if $entry.url_dentthis}
            | <a href="{$entry.url_dentthis}" title="{$CONST.TWOK11_DENT_THIS}">Identica</a>
        {/if}
        {if $entry.url_shorturl}
            | <a href="{$entry.url_shorturl}" title="{$CONST.TWOK11_SHORT_URL_HINT}" class="short-url">{$CONST.TWOK11_SHORT_URL}</a>
        {/if}
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
                 dc:title="{$entry.title_rdf|@default:$entry.title}"
                 dc:identifier="{$entry.rdf_ident}" />
        </rdf:RDF>
        -->

    {if $is_single_entry and not $is_preview}
        {if $CONST.DATA_UNSUBSCRIBED}
        <p class="serendipity_msg_notice">{$CONST.DATA_UNSUBSCRIBED|@sprintf:$CONST.UNSUBSCRIBE_OK}</p>
        {/if}
        {if $CONST.DATA_TRACKBACK_DELETED}
        <p class="serendipity_msg_notice">{$CONST.DATA_TRACKBACK_DELETED|@sprintf:$CONST.TRACKBACK_DELETED}</p>
        {/if}
        {if $CONST.DATA_TRACKBACK_APPROVED}
        <p class="serendipity_msg_notice">{$CONST.DATA_TRACKBACK_APPROVED|@sprintf:$CONST.TRACKBACK_APPROVED}</p>
        {/if}
        {if $CONST.DATA_COMMENT_DELETED}
        <p class="serendipity_msg_notice">{$CONST.DATA_COMMENT_DELETED|@sprintf:$CONST.COMMENT_DELETED}</p>
        {/if}
        {if $CONST.DATA_COMMENT_APPROVED}
        <p class="serendipity_msg_notice">{$CONST.DATA_COMMENT_APPROVED|@sprintf:$CONST.COMMENT_APPROVED}</p>
        {/if}

        <section id="trackbacks" class="serendipity_comments serendipity_section_trackbacks">
            <h3>{$CONST.TRACKBACKS}</h3>

            <div id="trackback_url" class="block_level"><a rel="nofollow" href="{$entry.link_trackback}" title="{$CONST.TRACKBACK_SPECIFIC_ON_CLICK|@escape}">{$CONST.TRACKBACK_SPECIFIC}</a></div>

            {serendipity_printTrackbacks entry=$entry.id}
        </section>

        <section id="comments" class="serendipity_comments serendipity_section_comments">
            <h3>{$CONST.COMMENTS}</h3>

            <p class="manage_comments">{$CONST.DISPLAY_COMMENTS_AS}
            {if $entry.viewmode eq $CONST.VIEWMODE_LINEAR}
               {$CONST.COMMENTS_VIEWMODE_LINEAR} | <a href="{$entry.link_viewmode_threaded}#comments" rel="nofollow">{$CONST.COMMENTS_VIEWMODE_THREADED}</a>
            {else}
               <a rel="nofollow" href="{$entry.link_viewmode_linear}#comments">{$CONST.COMMENTS_VIEWMODE_LINEAR}</a> | {$CONST.COMMENTS_VIEWMODE_THREADED}
            {/if}
            </p>

            {serendipity_printComments entry=$entry.id mode=$entry.viewmode}
        {if $entry.is_entry_owner}
            <p class="manage_comments">
            {if $entry.allow_comments}
            <a href="{$entry.link_deny_comments}">{$CONST.COMMENTS_DISABLE}</a>
            {else}
            <a href="{$entry.link_allow_comments}">{$CONST.COMMENTS_ENABLE}</a>
            {/if}
            </p>
        {/if}
        </section>
            <a id="feedback"></a>
        {foreach from=$comments_messagestack item="message"}
            <p class="serendipity_msg_important">{$message}</p>
        {/foreach}
        {if $is_comment_added}
            <p class="serendipity_msg_notice">{$CONST.COMMENT_ADDED}</p>
        {elseif $is_comment_moderate}
            <p class="serendipity_msg_notice">{$CONST.COMMENT_ADDED}: {$CONST.THIS_COMMENT_NEEDS_REVIEW}</p>
        {elseif not $entry.allow_comments}
            <p class="serendipity_msg_important">{$CONST.COMMENTS_CLOSED}</p>
        {else}
            <section id="respond" class="serendipity_section_commentform">
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
    <p class="nocontent">{$CONST.NO_ENTRIES_TO_PRINT}</p>
    {/if}
{/foreach}
{if $footer_info or $footer_prev_page or $footer_next_page}
    <nav class="serendipity_pagination block_level">
        <h2 class="visuallyhidden">{$CONST.TWOK11_PAG_TITLE}</h2>

        <ul class="clearfix">
            {if $footer_info}
            <li class="info"><span>{$footer_info}</span></li>
            {/if}
            <li class="prev">{if $footer_prev_page}<a href="{$footer_prev_page}">{/if}{if $footer_prev_page}&larr; {$CONST.PREVIOUS_PAGE}{else}&nbsp;{/if}{if $footer_prev_page}</a>{/if}</li>
            <li class="next">{if $footer_next_page}<a href="{$footer_next_page}">{/if}{if $footer_next_page}{$CONST.NEXT_PAGE} &rarr;{else}&nbsp;{/if}{if $footer_next_page}</a>{/if}</li>
        </ul>
    </nav>
{/if}
    {serendipity_hookPlugin hook="entries_footer"}

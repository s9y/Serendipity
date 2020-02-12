{serendipity_hookPlugin hook="entries_header" addData="$entry_id"}
{foreach from=$entries item="dategroup"}
    {foreach from=$dategroup.entries item="entry"}
    {assign var="entry" value=$entry scope=parent}
    <article class="post{if $dategroup.is_sticky} post_sticky{/if} mb-4">
        <header>
            <h2><a href="{$entry.link}">{$entry.title}</a></h2>

            <ul class="post_byline plainList">
                <li class="post_author d-inline-block"><svg class="icon-user" role="img" viewbox="0 0 1792 1792" width="1792" height="1792" aria-labelledby="title"><title id="title">{$CONST.POSTED_BY}</title><use xlink:href="{$serendipityHTTPPath}templates/{$template}/img/icons.svg#user"></use></svg><a href="{$entry.link_author}">{$entry.author}</a></li>
                <li class="post_date d-inline-block"><svg class="icon-calendar" role="img" viewbox="0 0 1792 1792" width="1792" height="1792" aria-labelledby="title"><title id="title">{$CONST.ON}</title><use xlink:href="{$serendipityHTTPPath}templates/{$template}/img/icons.svg#calendar"></use></svg><time datetime="{$entry.timestamp|serendipity_html5time}">{$entry.timestamp|formatTime:$template_option.date_format}</time></li>
            </ul>
        </header>

        <div class="post_content clearfix">
        {if $entry.categories}{foreach from=$entry.categories item="entry_category"}{if $entry_category.category_icon}<a href="{$entry_category.category_link}"><img class="serendipity_entryIcon" title="{$entry_category.category_name|escape}{$entry_category.category_description|emptyPrefix}" alt="{$entry_category.category_name|escape}" src="{$entry_category.category_icon|escape}"></a>{/if}{/foreach}{/if}
        {$entry.body}
        {if $entry.has_extended and not $is_single_entry and not $entry.is_extended}
        <a class="post_more btn btn-outline-primary btn-sm d-inline-block mb-3" href="{$entry.link}#extended">{$CONST.VIEW_EXTENDED_ENTRY|sprintf:$entry.title}</a>
        {/if}
        </div>
        {if $entry.is_extended}
        <div id="extended" class="post_content clearfix">
        {$entry.extended}
        </div>
        {/if}

        <footer class="post_info">
        {if $entry.categories or $entry.has_comments}
            <ul class="post_meta plainList">
            {if $entry.categories}
                <li class="post_category d-inline-block"><svg class="icon-folder" role="img" viewbox="0 0 1792 1792" width="1792" height="1792" aria-labelledby="title"><title id="title">{$CONST.CATEGORIES}</title><use xlink:href="{$serendipityHTTPPath}templates/{$template}/img/icons.svg#folder"></use></svg>{foreach from=$entry.categories item="entry_category" name="categories"}<a class="post_category" href="{$entry_category.category_link}">{$entry_category.category_name|escape}</a>{if not $smarty.foreach.categories.last}, {/if}{/foreach}</li>
            {/if}
            {if $entry.has_comments}
                <li class="post_comments d-inline-block"><svg class="icon-comments" role="img" viewbox="0 0 1792 1792" width="1792" height="1792" aria-labelledby="title"><title id="title">{$entry.label_comments}</title><use xlink:href="{$serendipityHTTPPath}templates/{$template}/img/icons.svg#comments"></use></svg><a href="{$entry.link}#comments" title="{$entry.comments} {$entry.label_comments}{if $entry.has_trackbacks}, {$entry.trackbacks} {$entry.label_trackbacks}{/if}">{$entry.comments}</a></li>
            {/if}
            {if $entry.freetag.tags.tags}
                <li class="post_tags d-inline-block"><svg class="icon-tag" role="img" viewbox="0 0 1792 1792" width="1792" height="1792" aria-labelledby="title"><title id="title">Tags</title><use xlink:href="{$serendipityHTTPPath}templates/{$template}/img/icons.svg#tag"></use></svg>{foreach from=$entry.freetag.tags.tags item="tag"}{$tag} {/foreach}</li>
            {/if}
            </ul>
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
                 dc:title="{$entry.title_rdf|default:$entry.title}"
                 dc:identifier="{$entry.rdf_ident}" />
        </rdf:RDF>
        -->
{if $is_single_entry and not $use_popups and not $is_preview}
    {if $CONST.DATA_UNSUBSCRIBED}
        <p class="alert alert-success" role="alert">{$CONST.DATA_UNSUBSCRIBED|sprintf:$CONST.UNSUBSCRIBE_OK}</p>
    {/if}
    {if $CONST.DATA_TRACKBACK_DELETED}
        <p class="alert alert-danger" role="alert">{$CONST.DATA_TRACKBACK_DELETED|sprintf:$CONST.TRACKBACK_DELETED}</p>
    {/if}
    {if $CONST.DATA_TRACKBACK_APPROVED}
        <p class="alert alert-success" role="alert">{$CONST.DATA_TRACKBACK_APPROVED|sprintf:$CONST.TRACKBACK_APPROVED}</p>
    {/if}
    {if $CONST.DATA_COMMENT_DELETED}
        <p class="alert alert-danger" role="alert">{$CONST.DATA_COMMENT_DELETED|sprintf:$CONST.COMMENT_DELETED}</p>
    {/if}
    {if $CONST.DATA_COMMENT_APPROVED}
        <p class="alert alert-success" role="alert">{$CONST.DATA_COMMENT_APPROVED|sprintf:$CONST.COMMENT_APPROVED}</p>
    {/if}
    <section id="trackbacks">
        <h3>{$CONST.TRACKBACKS}</h3>

        <span class="d-block mb-2"><svg class="icon-link" role="img" viewbox="0 0 1792 1792" width="1792" height="1792" aria-labelledby="title"><title id="title">{$CONST.TRACKBACK_SPECIFIC}</title><use xlink:href="{$serendipityHTTPPath}templates/{$template}/img/icons.svg#link"></use></svg><a id="trackback_url" rel="nofollow" href="{$entry.link_trackback}" onclick="alert('{$CONST.TRACKBACK_SPECIFIC_ON_CLICK|escape:'htmlall'}'); return false;" title="{$CONST.TRACKBACK_SPECIFIC_ON_CLICK|escape:'htmlall'}">{$CONST.TRACKBACK} URL</a></span>

        {serendipity_printTrackbacks entry=$entry.id}
    </section>
{/if}
{if $is_single_entry and not $is_preview}
    <section id="comments">
        <h3>{$CONST.COMMENTS}</h3>

        {serendipity_printComments entry=$entry.id mode=$entry.viewmode}
    </section>

    <a id="feedback"></a>
    {foreach from=$comments_messagestack item="message"}
    <p class="alert alert-danger" role="alert">{$message}</p>
    {/foreach}
    {if $is_comment_added}
    <p class="alert alert-success" role="alert">{$CONST.COMMENT_ADDED}</p>
    {elseif $is_comment_moderate}
    <p class="alert alert-info" role="alert">{$CONST.COMMENT_ADDED}{$CONST.THIS_COMMENT_NEEDS_REVIEW}</p>
    {elseif not $entry.allow_comments}
    <p class="alert alert-info" role="alert">{$CONST.COMMENTS_CLOSED}</p>
    {else}
    <section id="reply">
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
    <p class="alert alert-info" role="alert">{$CONST.NO_ENTRIES_TO_PRINT}</p>
    {/if}
{/foreach}
{if not $is_preview}
    {if $staticpage_pagetitle == ''}
    <nav aria-label="{$footer_info}" title="{$footer_info}">
        <ul class="pagination justify-content-between">
            <li class="page-item{if !$footer_prev_page} disabled{/if}">
                <a class="page-link" href="{$footer_prev_page}">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">{$CONST.PREVIOUS_PAGE}</span>
                </a>
            </li>
            <li class="page-item{if !$footer_next_page} disabled{/if}">
                <a class="page-link" href="{$footer_next_page}">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">{$CONST.NEXT_PAGE}</span>
                </a>
            </li>
        </ul>
    </nav>
    {/if}
{/if}
{serendipity_hookPlugin hook="entries_footer"}
{if $is_embedded != true}
<!DOCTYPE html>
<html class="no-js" lang="{$lang}">
<head>
    <meta charset="{$head_charset}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$head_title|default:$blogTitle}{if $head_subtitle} | {$head_subtitle}{/if}</title>
    <meta name="generator" content="Serendipity v.{$head_version}">
{if ($view == "entry" || $view == "start" || $view == "feed" || $view == "plugin" || $staticpage_pagetitle != "" || $robots_index == 'index')}
    <meta name="robots" content="index,follow">
{else}
    <meta name="robots" content="noindex,follow">
{/if}
{if ($view == "entry")}
    <link rel="canonical" href="{$entry.rdf_ident}">
{/if}
{if ($view == "start")}
    <link rel="canonical" href="{$serendipityBaseURL}">
{/if}
    <link rel="stylesheet" href="{$head_link_stylesheet}">
    <link rel="alternate" type="application/rss+xml" title="{$blogTitle} RSS feed" href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/index.rss2">
    <link rel="alternate" type="application/x.atom+xml" title="{$blogTitle} Atom feed" href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/atom.xml">
{if $entry_id}
    <link rel="pingback" href="{$serendipityBaseURL}comment.php?type=pingback&amp;entry_id={$entry_id}">
{/if}
{serendipity_hookPlugin hook="frontend_header"}
</head>
<body class="{if $template_option.bs_navbar_type == 'fixed-top'}has-fixed-top{/if}">
{else}
{serendipity_hookPlugin hook="frontend_header"}
{/if}
{if $is_raw_mode != true}
    <nav class="navbar{if $template_option.bs_navbar_type != 'default'} {$template_option.bs_navbar_type}{/if} navbar-expand-lg navbar-{if $template_option.bs_navbar_style == 'light'}light{else}dark{/if} bg-{$template_option.bs_navbar_style}">
    {if !$template_option.bs_fluid}
        <div class="container">
    {/if}
        <a class="navbar-brand{if not $template_option.use_corenav} mr-auto{/if}" href="{$serendipityBaseURL}">{$blogTitle}</a>
    {if $template_option.use_corenav}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#corenav" aria-controls="corenav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="corenav">
            <ul class="navbar-nav mr-auto">
            {foreach from=$navlinks item="navlink" name="sbnav"}
                {if $navlink.title != "" && $navlink.href != ""}
                <li class="nav-item{if $currpage == $navlink.href or $currpage2 == $navlink.href} active{/if}">
                    <a class="nav-link" href="{$navlink.href}">{$navlink.title}{if $currpage == $navlink.href || $currpage2 == $navlink.href} <span class="sr-only">(current)</span>{/if}</a>
                </li>
                {/if}
            {/foreach}
            </ul>

            <form id="searchform" action="{$serendipityHTTPPath}{$serendipityIndexFile}" method="get" role="search" class="form-inline my-2 my-lg-0">
                <input type="hidden" name="serendipity[action]" value="search">
                <input id="serendipityQuickSearchTermField" class="form-control mr-sm-2" name="serendipity[searchTerm]" type="search" placeholder="{$CONST.QUICKSEARCH}" value="" aria-label="{$CONST.QUICKSEARCH}">
                <input id="searchsend" class="btn btn-outline-{if $template_option.bs_navbar_style == 'light'}primary{else}light{/if} my-2 my-sm-0" name="serendipity[searchButton]" type="submit" value="{$CONST.GO}">
            </form>
        </div>
    {else}
        <form id="searchform" action="{$serendipityHTTPPath}{$serendipityIndexFile}" method="get" role="search" class="form-inline my-2 my-lg-0">
            <input type="hidden" name="serendipity[action]" value="search">
            <input id="serendipityQuickSearchTermField" class="form-control mr-sm-2" name="serendipity[searchTerm]" type="search" placeholder="{$CONST.QUICKSEARCH}" value="" aria-label="{$CONST.QUICKSEARCH}">
            <input id="searchsend" class="btn btn-outline-{if $template_option.bs_navbar_style == 'light'}primary{else}light{/if} my-2 my-sm-0" name="serendipity[searchButton]" type="submit" value="{$CONST.GO}">
        </form>
    {/if}
        {serendipity_hookPlugin hook="quicksearch_plugin" hookAll="true"}
    {if !$template_option.bs_fluid}
        </div>
    {/if}
    </nav>
{if $template_option.bs_jumbotron_type != 'none'}
    <header class="jumbotron jumbotron-fluid bg-{$template_option.bs_jumbotron_style} text-{if $template_option.bs_jumbotron_style == 'light'}dark{else}white{/if}{if $template_option.bs_jumbotron_type == 'small' || $template_option.bs_jumbotron_type == 'compact'} py-3 py-sm-4{/if}">
        <div class="container{if $template_option.bs_fluid}-fluid{/if}">
        {if $template_option.bs_jumbotron_type == 'compact'}
            <div class="row">
            <div class="col-xs-12 col-lg-8">
        {/if}
            <h1 class="display-4{if $template_option.bs_jumbotron_type == 'compact'} mb-0{/if}">{$blogTitle}</h1>
        {if $template_option.bs_jumbotron_type == 'compact'}
            </div>
            <div class="col-xs-12 col-lg-4">
        {/if}
            <p class="lead mb-0{if $template_option.bs_jumbotron_type == 'compact'} mt-lg-4{/if}">{$blogDescription}</p>
        {if $template_option.bs_jumbotron_type == 'compact'}
            </div>
            </div>
        {/if}
        </div>
    </header>
{/if}
    <div class="container{if $template_option.bs_fluid}-fluid{/if}{if $template_option.bs_jumbotron_type == 'none'} mt-4{/if}">
        <div class="row">
            <main class="col-xs-12 col-lg-8">
            {$CONTENT}
            </main>

            <aside class="col-xs-12 col-lg-4">
            {if $template_option.bs_feeds}
                <section class="serendipity_plugin_rsslinks mb-3">
                    <h3>{$CONST.SYNDICATE_THIS_BLOG}</h3>

                    <ul class="plainList">
                        <li><svg class="icon-rss" role="img" viewbox="0 0 1792 1792" width="1792" height="1792" aria-labelledby="title"><title id="title">XML</title><use xlink:href="{$serendipityHTTPPath}templates/{$template}/img/icons.svg#rss"></use></svg><a href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/index.rss2">{$CONST.ENTRIES} RSS</a></li>
                        <li><svg class="icon-rss" role="img" viewbox="0 0 1792 1792" width="1792" height="1792" aria-labelledby="title"><title id="title">XML</title><use xlink:href="{$serendipityHTTPPath}templates/{$template}/img/icons.svg#rss"></use></svg><a href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/comments.rss2">{$CONST.COMMENTS} RSS</a></li>
                    </ul>
                </section>
            {/if}
            {if $leftSidebarElements > 0}{serendipity_printSidebar side="left"}{/if}
            {if $rightSidebarElements > 0}{serendipity_printSidebar side="right"}{/if}
            </aside>
        </div>
    </div>

    <footer class="container{if $template_option.bs_fluid}-fluid{/if}">
        <div class="row">
            <div class="col">
                <p class="text-center">Powered by <a href="http://s9y.org">Serendipity</a></p>
            </div>
        </div>
    </footer>

    <script src="{serendipity_getFile file="theme.js"}"></script>
{/if}
{$raw_data}
{serendipity_hookPlugin hook="frontend_footer"}
{if $is_embedded != true}
</body>
</html>
{/if}

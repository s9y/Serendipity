{if $is_embedded != true}
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{$lang}"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js lt-ie9 lt-ie8" lang="{$lang}"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js lt-ie9" lang="{$lang}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{$lang}"> <!--<![endif]-->
<head>
    <meta charset="{$head_charset}">
    <title>{$head_title|@default:$blogTitle}{if $head_subtitle} | {$head_subtitle}{/if}</title>
    <meta name="generator" content="Serendipity v.{$head_version}">
    <meta name="viewport" content="width=device-width">
{if $template_option.webfonts == 'droid'}
    <link  rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
{elseif $template_option.webfonts == 'ptsans'}
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'osans'}
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'cabin'}
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cabin:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'ubuntu'}
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'dserif'}
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic">
{/if}
    <link rel="stylesheet" href="{$head_link_stylesheet}">
{if $template_option.userstyles == true}
    <link rel="stylesheet" href="{serendipity_getFile file="user.css"}">
{/if}
    <script src="{serendipity_getFile file="js/modernizr-2.6.2.min.js"}"></script>
    <link rel="alternate" type="application/rss+xml" title="{$blogTitle} RSS feed" href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/index.rss2">
    <link rel="alternate" type="application/x.atom+xml"  title="{$blogTitle} Atom feed"  href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/atom.xml">
{if $entry_id}
    <link rel="pingback" href="{$serendipityBaseURL}comment.php?type=pingback&amp;entry_id={$entry_id}">
{/if}
{serendipity_hookPlugin hook="frontend_header"}
    <script src="{$head_link_script}"></script>
</head>
<body{if $template_option.webfonts != 'none'} class="{$template_option.webfonts}"{/if}>
{else}
{serendipity_hookPlugin hook="frontend_header"}
{/if}
{if $is_raw_mode != true}
<a class="visuallyhidden" href="#content"><span lang="en">Skip to content</span></a>
<div id="page" class="clearfix">
    <header id="banner" class="clearfix{if $leftSidebarElements > 0 && $rightSidebarElements > 0} col3{elseif $leftSidebarElements > 0 && $rightSidebarElements == 0} col2l{else} col2r{/if}{if not $template_option.use_corenav} no-nav{/if}">
        <div id="identity">
            <a href="{$serendipityBaseURL}">
                <h1>{$blogTitle}</h1>
                {if $blogDescription}<p>{$blogDescription}</p>{/if}
            </a>
        </div>

        <form id="searchform" action="{$serendipityHTTPPath}{$serendipityIndexFile}" method="get">
        <div>
            <input type="hidden" name="serendipity[action]" value="search">
            <label for="serendipityQuickSearchTermField">{$CONST.QUICKSEARCH}</label>
            <input id="serendipityQuickSearchTermField" name="serendipity[searchTerm]" type="search" placeholder="{$CONST.TWOK11_PLACE_SEARCH}" value="">
            <input id="searchsend" name="serendipity[searchButton]" type="submit" value="{$CONST.GO}">
        </div>
        </form>
        {serendipity_hookPlugin hook="quicksearch_plugin" hookAll="true"}
        {if $template_option.header_img}
        <img src="{$template_option.header_img|escape}" alt="">
        {/if}
    </header>
    {if $template_option.use_corenav}
    <nav id="primary-nav">
        <h2 class="visuallyhidden">{$CONST.TWOK11_NAV_TITLE}</h2>

        <ul class="clearfix">{foreach from=$navlinks item="navlink" name="sbnav"}{if $navlink.title!=""&&$navlink.href!=""}<li>{if $currpage==$navlink.href or $currpage2==$navlink.href}<span>{else}<a href="{$navlink.href}">{/if}{$navlink.title}{if $currpage==$navlink.href or $currpage2==$navlink.href}</span>{else}</a>{/if}</li>{/if}{/foreach}</ul>
    </nav>
    {/if}
    <div class="clearfix{if $leftSidebarElements > 0 && $rightSidebarElements > 0} col3{elseif $leftSidebarElements > 0 && $rightSidebarElements == 0} col2l{else} col2r{/if}">
        <main id="content" {if $template_option.imgstyle != 'none'} class="{$template_option.imgstyle}"{/if}>
        {$CONTENT}
        </main>
    {if $leftSidebarElements > 0}
        <aside id="sidebar_left">
            <h2 class="visuallyhidden">{$CONST.TWOK11_SIDEBAR}</h2>
            {serendipity_printSidebar side="left"}
        </aside>
    {/if}
    {if $rightSidebarElements > 0}
        <aside id="sidebar_right">
            <h2 class="visuallyhidden">{$CONST.TWOK11_SIDEBAR}</h2>
            {serendipity_printSidebar side="right"}
        </aside>
    {/if}
    </div>

    <footer id="colophon">
        <p><span lang="en">Powered by <a href="http://s9y.org">Serendipity</a> &amp; the <a href="http://github.com/yellowled/s9y-2k11">2k11</a> theme.</span></p>
    </footer>
</div>
<script src="{serendipity_getFile file="js/2k11.min.js"}"></script>
{/if}
{$raw_data}
{serendipity_hookPlugin hook="frontend_footer"}
{if $is_embedded != true}
</body>
</html>
{/if}

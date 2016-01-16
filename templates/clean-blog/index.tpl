{if $is_embedded != true}
<!DOCTYPE html>
<html lang="{$lang}">
<head>
    <meta charset="{$head_charset}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Serendipity v.{$serendipityVersion}">
    <title>{$head_title|default:$blogTitle}{if $head_subtitle} | {$head_subtitle}{/if}</title>
{* CANONICAL *}
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
{* BOOTSTRAP CORE CSS *}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">    
{* S9Y CSS *}
    <link rel="stylesheet" href="{$head_link_stylesheet}"> 
    <link rel="alternate" type="application/rss+xml" title="{$blogTitle} RSS feed" href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/index.rss2">
    <link rel="alternate" type="application/x.atom+xml"  title="{$blogTitle} Atom feed"  href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/atom.xml">
    {if $entry_id}
        <link rel="pingback" href="{$serendipityBaseURL}comment.php?type=pingback&amp;entry_id={$entry_id}">
    {/if}   
{* CUSTOM FONTS *}
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600,800|Lora:400,400italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
{* HEADER IMAGE *}
    {if $view=="entry"}
        {if $entry.properties.entry_specific_header_image}
            <style type="text/css">.intro-header {ldelim}background-image: url('{$entry.properties.entry_specific_header_image}');{rdelim}</style>         
        {else}
            <style type="text/css">.intro-header {ldelim}background-image: url('{if $template_option.entry_default_header_image}{$template_option.entry_default_header_image}{else}{serendipity_getFile file="img/post-bg.jpg"}{/if}');{rdelim}</style> 
        {/if}
    {elseif $staticpage_pagetitle && !$plugin_contactform_name}
        {if $staticpage_custom.staticpage_header_image}
            <style type="text/css">.intro-header {ldelim}background-image: url('{$staticpage_custom.staticpage_header_image}');{rdelim}</style>           
        {else}
            <style type="text/css">.intro-header {ldelim}background-image: url('{if $template_option.staticpage_header_image}{$template_option.staticpage_header_image}{else}{serendipity_getFile file="img/about-bg.jpg"}{/if}');{rdelim}</style>
        {/if}
    {elseif $plugin_contactform_name}
        <style type="text/css">.intro-header {ldelim}background-image: url('{if $template_option.contactform_header_image}{$template_option.contactform_header_image}{else}{serendipity_getFile file="img/contact-bg.jpg"}{/if}');{rdelim}</style>
    {elseif $view=="archive"}
        <style type="text/css">.intro-header {ldelim}background-image: url('{if $template_option.archive_header_image}{$template_option.archive_header_image}{else}{serendipity_getFile file="img/archive-bg.jpg"}{/if}');{rdelim}</style>    
    {else}
        <style type="text/css">.intro-header {ldelim}background-image: url('{if $template_option.default_header_image}{$template_option.default_header_image}{else}{serendipity_getFile file="img/home-bg.jpg"}{/if}');{rdelim}</style>
    {/if}
    {serendipity_hookPlugin hook="frontend_header"}
    <script src="{$head_link_script}"></script>
</head>
<body>
{else}
{serendipity_hookPlugin hook="frontend_header"}
{/if}
{if $is_raw_mode != true}
    {if $template_option.use_corenav}
        <a class="sr-only sr-only-focusable" href="#maincontent"><span lang="en">Skip to main content</span></a>    
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                {* Brand and toggle get grouped for better mobile display *}
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">{$CONST.TOGGLE_NAV}</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{$serendipityBaseURL}" title="{$CONST.HOMEPAGE}">{$template_option.home_link_text}</a>
                    <a class="navbar-brand" href="#basicModal" data-toggle="modal" data-target="#basicModal" title="{$CONST.SEARCH}"><i class="fa fa-search" aria-hidden="true"></i></a>
                    <a class="navbar-brand" href="{$archiveURL}" title="{$CONST.ARCHIVES}"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">{foreach from=$navlinks item="navlink" name="sitenav"}<li><a href="{$navlink.href}" title="{$navlink.title}">{$navlink.title}</a></li>{/foreach}</ul>               
                </div>
            </div>
        </nav>
    {/if} 
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" title="{$CONST.CLOSE}" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">{$CONST.SEARCH_WHAT}</h4>
                </div>
                <div class="modal-body">
                    <form id="searchform" action="{$serendipityHTTPPath}{$serendipityIndexFile}" method="get">
                        <div>
                            <input type="hidden" name="serendipity[action]" value="search">
                            <label for="serendipityQuickSearchTermField" class="sr-only">{$CONST.QUICKSEARCH}</label>
                            <input id="serendipityQuickSearchTermField" name="serendipity[searchTerm]" type="search" value="" placeholder="{$CONST.SEARCH} ...">
                                     
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary" id="gobutton" name="serendipity[searchButton]" type="submit" value="{$CONST.GO}">   
                            <button type="button" class="btn btn-default" data-dismiss="modal">{$CONST.CLOSE}</button>
                        </div>
                    </form>
                    {serendipity_hookPlugin hook="quicksearch_plugin" hookAll="true"}
                </div>
            </div>
        </div>
    </div>
    <header class="intro-header" role="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="{if $view=='entry'}post-heading{else}site-heading{/if}">
                        <h1>{$head_title|@default:$blogTitle|truncate:80:" ..."}</h1>
                        {if $view != 'entry'}
                            <hr class="small">
                            {if $head_subtitle}<span class="subheading">{$head_subtitle|@default:$blogDescription}</span>{else}{$blogDescription}{/if}
                        {else}
                            {if $entry.properties.entry_subtitle}<h2 class="subheading">{$entry.properties.entry_subtitle|escape}</h2>{/if}                        
                            <p class="meta">{$CONST.POSTED_BY} <a href="{$entry.link_author}">{$entry.author}</a> {$CONST.ON} <time datetime="{$entry.timestamp|@serendipity_html5time}">{$entry.timestamp|@formatTime:$template_option.date_format}</time>{if $template_option.show_comment_link == true}&nbsp;&nbsp;<a href="{$entry.link}#comments" title="{if $entry.comments == 0}{$CONST.NO_COMMENTS}{else}{$entry.comments} {$entry.label_comments}{/if}"><button class="btn btn-sm btn-default"><span class="badge">{$entry.comments}</span>&nbsp;<i class="fa fa-lg fa-comment-o"></i><span class="sr-only">{$entry.label_comments}</span></button></a>{/if}{if $entry.is_entry_owner and not $is_preview}&nbsp;&nbsp;<a href="{$entry.link_edit}"  title="{$CONST.EDIT_ENTRY}"><button class="btn btn-sm btn-default"><i class="fa fa-lg fa-edit"></i><span class="sr-only">{$CONST.EDIT_ENTRY}</span></button></a>{/if}</p>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </header>
{* MAIN CONTENT *}
    <main id="maincontent" class="container" role="main">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            {if $view=='404'}
                <p class="alert alert-danger alert-error"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-exclamation fa-stack-1x"></i></span> {$CONST.ERROR_404}</p>
                <nav role="navigation">
                    <ul class="pager">                
                        <li class="previous"><a href="{$serendipityBaseURL}">{$CONST.HOMEPAGE} - {$blogTitle}</a></li>
                    </ul>
                </nav>
            {else}
                {$CONTENT}
            {/if}
            </div>
        </div>
    </main>
    <hr>
{* FOOTER *}
    <footer class="page-footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        {if $template_option.twitter_url}
                            <li>
                                <a href="{$template_option.twitter_url}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        {/if}
                        {if $template_option.facebook_url}                        
                            <li>
                                <a href="{$template_option.facebook_url}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        {/if}
                        {if $template_option.github_url}                         
                            <li>
                                <a href="{$template_option.github_url}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        {/if}
                        {if $template_option.instagram_url}                         
                            <li>
                                <a href="{$template_option.instagram_url}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-camera fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        {/if}   
                        {if $template_option.pinterest_url}                         
                            <li>
                                <a href="{$template_option.pinterest_url}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        {/if} 
                        {if $template_option.rss_url}                         
                            <li>
                                <a href="{$template_option.rss_url}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        {/if}                        
                    </ul>
                    {if $template_option.copyright}<p class="copyright text-muted">{$template_option.copyright}</p>{/if}
                </div>
            </div>
        </div>
    </footer>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src={serendipity_getFile file="js/clean-blog.min.js"}></script>
{/if}
{$raw_data}
{serendipity_hookPlugin hook="frontend_footer"}
{if $is_embedded != true}
</body>
</html>
{/if}
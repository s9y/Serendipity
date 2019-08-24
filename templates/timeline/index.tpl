{if $is_embedded != true}
<!DOCTYPE html>
<html lang="{$lang}">
<head>
    <meta charset="{$head_charset}">
    <title>{$head_title|default:$blogTitle}{if $head_subtitle} | {$head_subtitle}{/if}</title>    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Serendipity v.{$serendipityVersion}">
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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
{* S9Y CSS *}
    <link rel="stylesheet" href="{$head_link_stylesheet}"> 
    <link rel="alternate" type="application/rss+xml" title="{$blogTitle} RSS feed" href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/index.rss2">
    <link rel="alternate" type="application/x.atom+xml"  title="{$blogTitle} Atom feed"  href="{$serendipityBaseURL}{$serendipityRewritePrefix}feeds/atom.xml">
    {if $entry_id}
        <link rel="pingback" href="{$serendipityBaseURL}comment.php?type=pingback&amp;entry_id={$entry_id}">
    {/if} 
{* CUSTOM FONTS *}   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    {if $template_option.use_googlefonts}
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    {/if}
    {serendipity_hookPlugin hook="frontend_header"}
    <script src="{$head_link_script}"></script>
{* SUBHEADER IMAGE *}    
{if $template_option.subheader_img}
    <style type="text/css">.subheader_image {ldelim}background-image: url('{$template_option.subheader_img}');{rdelim}</style>
{/if}
{* ADDTIONAL COLORSET & SKIN STYLESHEETS - INCLUDED SETS ARE LOADED VIA CONFIG.INC.PHP *}
</head>
<body class="{if $template_option.colorset}{$template_option.colorset}-style{else}green-style{/if} {if $template_option.skinset}{$template_option.skinset}-skin{else}light-skin{/if}">
{else}
    {serendipity_hookPlugin hook="frontend_header"}
{/if}
{if $is_raw_mode != true}
<div class="wrapper">
    <div class="header header-custom">
        {if $template_option.use_corenav}
            <div class="container container-logonav">
                <a class="sr-only sr-only-focusable" href="#content"><span lang="en">Skip to main content</span></a>{* LANG? *}
                <div class="navbar navbar-default" role="navigation">
                    <div> {* this was class="container" *}
                        {* Brand and toggle get grouped for better mobile display *}
                        <div class="navbar-header">
                            {if $template_option.header_img}
                                <a class="logo" href="{$serendipityBaseURL}" title="{$CONST.HOMEPAGE}"><img src="{$template_option.header_img}" alt="{$blogTitle} Logo"><h1 class="sr-only">{$blogTitle}</h1></a>
                            {else}
                                <a class="navbar-brand" href="{$serendipityBaseURL}" title="{$CONST.HOMEPAGE}"><h1>{$blogTitle}</h1></a>
                            {/if} 
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="sr-only">Toggle navigation</span>{* LANG? *}
                                <span class="fa fa-bars"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav navbar-right">{foreach from=$navlinks item="navlink" name="sitenav"}<li><a {if $currpage==$navlink.href}class="navbar_current_page"{/if} href="{$navlink.href}" title="{$navlink.title}">{$navlink.title}</a></li>{/foreach}<li><a  href="#basicModal" data-toggle="modal" data-target="#basicModal" title="{$CONST.SEARCH}"><i class="fa fa-search" aria-hidden="true"></i></a></li></ul>
                        </div><!--/navbar-collapse-->
                    </div>    
                </div>{* End Navbar *}
            </div>
        {/if}
    </div>{* End Header *}
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">{* CLEAN THIS UP - UNWANTED CLASSES, ETC *}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" title="{$CONST.CLOSE}" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">{$CONST.SEARCH_WHAT}</h4>
                </div>
                <div class="modal-body">
                    <form id="searchform" action="{$serendipityHTTPPath}{$serendipityIndexFile}" method="get">
                        <input type="hidden" name="serendipity[action]" value="search">
                        <label for="serendipityQuickSearchTermField" class="sr-only">{$CONST.QUICKSEARCH}</label>
                        <input id="serendipityQuickSearchTermField" class="form-control" name="serendipity[searchTerm]" type="search" value="" placeholder="{$CONST.SEARCH} ...">        
                        <div class="modal-footer">
                            <input class="btn btn-default btn-theme" id="gobutton" name="serendipity[searchButton]" type="submit" value="{$CONST.GO}">   
                            <button type="button" class="btn btn-default" data-dismiss="modal">{$CONST.CLOSE}</button>
                        </div>
                    </form>
                {serendipity_hookPlugin hook="quicksearch_plugin" hookAll="true"}
                </div>
            </div>
        </div>
    </div>        
    <div class="subheader{if $template_option.subheader_img} subheader_image{/if}">
        <div class="container">
            <h2 class="pull-left">
                {if $view == 'start' || $view == 'entry' || $view == '404' || $view == 'search' || ($head_title =='' && $head_subtitle=='')}{$blogDescription}
                {elseif $view == 'categories'}{$CONST.ENTRIES_FOR|sprintf:{$category_info.category_name|escape}}
                {elseif $view == 'authors' || $view == 'comments'}{$head_title}
                {elseif $staticpage_pagetitle !=''}
                    {if $staticpage_headline}{$staticpage_headline|escape}
                    {elseif $staticpage_articleformattitle}{$staticpage_articleformattitle|escape}
                    {elseif $plugin_contactform_pagetitle}{$plugin_contactform_pagetitle}
                    {else}{$head_title}{/if}
                {elseif $view == 'archives' && $category}{$head_title} - {$head_subtitle}
                {elseif $view == 'archive' && $category}{$category_info.category_name} - {$head_subtitle}
                {elseif $head_subtitle}{$head_subtitle}
                {/if}
            </h2>
            
            {if $footer_totalPages >1 && !isset($staticpage_pagetitle)}
                <nav class="pagination pull-right">
                    {assign var="paginationStartPage" value="`$footer_currentPage-3`"}
                    {if $footer_currentPage+3 > $footer_totalPages}
                        {assign var="paginationStartPage" value="`$footer_totalPages-4`"}
                    {/if}
                    {if $paginationStartPage <= 0}
                        {assign var="paginationStartPage" value="1"}
                    {/if}
                    {if $footer_prev_page}
                        <a class="btn btn-md btn-default btn-theme" title="{$CONST.PREVIOUS_PAGE}" href="{$footer_prev_page}"><i class="fa fa-arrow-left" aria-hidden="true"></i><span class="sr-only">{$CONST.PREVIOUS_PAGE}</span></a>
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
                        <a class="btn btn-md btn-default btn-theme" title="{$CONST.NEXT_PAGE}" href="{$footer_next_page}"><i class="fa fa-arrow-right" aria-hidden="true"></i><span class="sr-only">{$CONST.NEXT_PAGE}</span></a>
                    {/if}
                </nav>
            {/if}
        </div>
    </div>{* End subheader *}

{* MAIN CONTENT *}
    <div class="container content">
        <div class="row">
            <main class="{if ($rightSidebarElements > 0 && $staticpage_pagetitle =='') || ($rightSidebarElements > 0 && $staticpage_pagetitle !='' && $staticpage_custom.show_sidebars != 'false')}col-md-9{else}col-md-12{/if} mainpanel">
                {if $view=='404'}
                    <div id="search-block" class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div id="search-response" class="panel panel-danger">
                                <div class="panel-heading">
                                    <button type="button" class="close" data-target="#search-block" data-dismiss="alert" aria-label="Close" title="{$CONST.CLOSE}"><span aria-hidden="true">&times;</span><span class="sr-only">{$CONST.CLOSE}</span></button>
                                    <h3 class="panel-title">{$CONST.ERROR}</h3>
                                </div>
                                <div class="panel-body">
                                    <p><span class="fa-stack text-danger" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-exclamation fa-stack-1x"></i></span> {$CONST.ERROR_404}</p>
                                    <div class="input-group" style="width:100%; margin-bottom: 20px;">{* REMOVE INLINE STYLES *}
                                        <form id="searchform" class="input-group" action="{$serendipityHTTPPath}{$serendipityIndexFile}" method="get">                
                                            <input type="hidden" name="serendipity[action]" value="search" /> 
                                            <label for="serendipityQuickSearchTermFieldBox" class="sr-only">{$CONST.QUICKSEARCH}</label>                       
                                            <input class="form-control" alt="{$CONST.SEARCH_SITE}" type="text" id="serendipityQuickSearchTermFieldBox" name="serendipity[searchTerm]" value="{$CONST.SEARCH}..." onfocus="if(this.value=='{$CONST.SEARCH}...')value=''" onblur="if(this.value=='')value='{$CONST.SEARCH}...';" />
                                            <span class="input-group-btn">
                                                <input class="btn btn-sm btn-default btn-theme quicksearch_submit" type="submit" value="{$CONST.GO}" alt="{$CONST.SEARCH_SITE}" name="serendipity[searchButton]" title="{$CONST.SEARCH}" />
                                            </span>
                                            <div id="LSResult" style="display: none;"><div id="LSShadow"></div></div>
                                        </form>
                                    </div>
                                    {serendipity_hookPlugin hook="quicksearch_plugin" hookAll="true"}       
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div id="search-block" class="row">
                        <div class="col-md-8 col-md-offset-2">                    
                            <nav class="text-center">
                                 <button class="btn btn-md btn-default btn-theme" onclick="goBack()" title="{$CONST.BACK}"><i class="fa fa-arrow-left" aria-hidden="true"></i><span class="sr-only">{$CONST.BACK}</span> {$CONST.BACK}</button>
                                 <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                                <a class="read_more btn btn-md btn-default btn-theme" href="{$serendipityBaseURL}" title="{$CONST.HOMEPAGE}"> <i class="fa fa-home" aria-hidden="true"></i> {$CONST.HOMEPAGE}</a>
                            </nav>
                        </div>
                    </div>
                {else}
                    {if !class_exists('serendipity_event_entryproperties')}
                        <div id="search-block" class="row">
                            <div class="col-md-10 col-md-offset-1 alert alert-danger">
                                {$CONST.THEME_EP_NO}
                            </div>
                        </div>
                    {/if}                
                    {$CONTENT}
                {/if}
            </main>
            {if ($rightSidebarElements > 0 && $staticpage_pagetitle =='') || ($rightSidebarElements > 0 && $staticpage_pagetitle !='' && $staticpage_custom.show_sidebars != 'false')}
                <aside class="col-md-3 RightSideBarContainer">
                    <div id="serendipityRightSideBar" class="RightSideBar">
                        {serendipity_printSidebar side="right"}
                    </div>
                </aside>
            {/if}
        </div>
    </div>	
    <div class="footer-container">
        {if $FooterSidebarElements > 0}    
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div id="serendipityFooterSideBar" class="FooterSideBar">
                        {serendipity_printSidebar side="footer" template="footerbar.tpl"}
                    </div>
                </div>
            </div> 
        </div><!--/footer-->
        {/if}        
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">                     
                        <p class="copyright-text">{$template_option.copyright}</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer-socials list-inline">
                            {foreach from=$socialicons item="socialicon" name="social_networking"}
                                <li>
                                    <a href="{$socialicon.url}" title="{$socialicon.service}"><i class="{service_icon from_service=$socialicon.service} fa-lg"></i></a>
                                </li>        
                            {/foreach}         
                        </ul>
                    </div>
                </div>
            </div> 
        </div><!--/copyright-->
    </div>
</div>{* wrapper *}

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src={serendipity_getFile file="js/timeline.js"}></script>

<!--[if lt IE 9]>
    <script src={serendipity_getFile file="js/respond.js"}></script>
    <script src={serendipity_getFile file="js/html5shiv.js"}></script>
    <script src={serendipity_getFile file="js/placeholder-IE-fixes.js"}></script>
<![endif]-->
{/if}
{$raw_data}
{serendipity_hookPlugin hook="frontend_footer"}
{if $is_embedded != true}
</body>
</html>
{/if}	
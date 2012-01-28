<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6 oldie" lang="{$lang}"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 oldie" lang="{$lang}"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 oldie" lang="{$lang}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{$lang}"> <!--<![endif]-->
<head>
    <meta charset="{$head_charset}">
    <title>{$CONST.SERENDIPITY_ADMIN_SUITE}</title>
    <meta name="generator" content="Serendipity v.{$head_version}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
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
{/if}
    <link rel="stylesheet" href="{$head_link_stylesheet}">
    <script src="{serendipity_getFile file="js/modernizr-2.0.6.min.js"}"></script>
<script>
    window.onload = function() {ldelim}
        parent.document.getElementById('serendipity_iframe').style.height = document.getElementById('content').offsetHeight
                                                                          + parseInt(document.getElementById('content').style.marginTop)
                                                                          + parseInt(document.getElementById('content').style.marginBottom)
                                                                          + 'px';
        parent.document.getElementById('serendipity_iframe').scrolling    = 'no';
        parent.document.getElementById('serendipity_iframe').style.border = 0;
    {rdelim}
</script>
<style type="text/css">#serendipity_preview_spacer {ldelim}float:none!important;height:0!important;{rdelim}</style>
</head>
<body>
<div id="page" class="clearfix container">
    <div id="main" class="clearfix{if $leftSidebarElements > 0 && $rightSidebarElements > 0} col3{elseif $leftSidebarElements > 0 && $rightSidebarElements == 0} col2l{else} col2r{/if}">
        <div id="content" class="clearfix" style="padding: 1em 0; margin: 0;">
        {$preview}
        </div>
    </div>
</div>
</body>
</html>

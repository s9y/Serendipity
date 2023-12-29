<!doctype html>
<!--[if IE 8 ]>    <html class="no-js lt-ie9" lang="{$lang}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{$lang}"> <!--<![endif]-->
<head>
    <meta charset="{$head_charset}">
    <title>{$CONST.SERENDIPITY_ADMIN_SUITE}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
{if $template_option.webfonts == 'osans'}
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'ssans'}
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,700italic,400,700">
{elseif $template_option.webfonts == 'rsans'}
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'lsans'}
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'mserif'}
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic">
{elseif $template_option.webfonts == 'dserif'}
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic">
{/if}
{if $head_link_stylesheet_frontend}
    <link rel="stylesheet" href="{$head_link_stylesheet_frontend}">
{else}
    <link rel="stylesheet" href="{$serendipityHTTPPath}{$serendipityRewritePrefix}serendipity.css">
{/if}
<!--[if lte IE 8]>
    <link rel="stylesheet" href="{serendipity_getFile file="oldie.css" frontend=true}">
<![endif]-->
    <script src="{serendipity_getFile file="scripts/modernizr/modernizr.js" frontend=true}"></script>
{serendipity_hookPlugin hook="backend_header" hookAll="true"}
<script type="text/javascript">
window.onload = function() {ldelim}
    parent.document.getElementById('serendipity_iframe').style.height = document.querySelector('html').offsetHeight + 'px';
    parent.document.getElementById('serendipity_iframe').scrolling    = 'no';
    parent.document.getElementById('serendipity_iframe').style.border = 0;
{rdelim}
</script>
</head>
<body {if $template_option.webfonts != 'none'} class="{$template_option.webfonts}"{/if}>
    <main id="primary">
    {if $mode == 'save'}
        <div style="float: left; height: 75px"></div>
        {$updertHooks}
        {if $res}
            <div class="serendipity_msg_important">{$CONST.ERROR}: <b>{$res}</b></div>
        {else}
            {if $lastSavedEntry}
                <script>$(document).ready(function() {
                    parent.document.forms['serendipityEntry']['serendipity[id]'].value = "{$lastSavedEntry}";
                });
                </script>
            {/if}
            <span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.ENTRY_SAVED}</span>
            <a href="{$entrylink}" target="_blank">{$CONST.VIEW}</a>
        {/if}
    {/if}
    {$preview}
    </main>

    <script src="{serendipity_getFile file="scripts/master.js" frontend=true}"></script>
</body>
</html>
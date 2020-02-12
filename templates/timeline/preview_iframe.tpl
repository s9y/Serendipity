<!doctype html>
<html lang="{$lang}">
<head>
    <meta charset="{$head_charset}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Serendipity v.{$serendipityVersion}">
    <title>{$CONST.SERENDIPITY_ADMIN_SUITE}</title>
{* BOOTSTRAP CORE CSS *}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
{* S9Y CSS *}
{if $head_link_stylesheet_frontend}{* >= s9y 2.0.2 *}
    <link rel="stylesheet" href="{$head_link_stylesheet_frontend}">
{else}
    <link rel="stylesheet" href="{$serendipityHTTPPath}{$serendipityRewritePrefix}serendipity.css">
{/if}
{* CUSTOM FONTS *}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    {if $template_option.use_googlefonts}
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    {/if}
{* ADDTIONAL COLORSET & SKIN STYLESHEETS - INCLUDED SETS ARE LOADED VIA CONFIG *}
    {serendipity_hookPlugin hook="backend_header" hookAll="true"}
    <script>
        window.onload = function() {ldelim}
            parent.document.getElementById('serendipity_iframe').style.height = document.querySelector('html').offsetHeight + 'px';
            parent.document.getElementById('serendipity_iframe').scrolling    = 'no';
            parent.document.getElementById('serendipity_iframe').style.border = 0;
        {rdelim}
    </script>
</head>
<body>
    <main id="maincontent" class="container content" role="main">
        <div class="row">
            <div class="col-md-9">
                {if $mode == 'preview'}
                    {$preview}
                {elseif $mode == 'save'}
                    {$updertHooks}
                    {if $res}
                        <div class="alert alert-danger"><span class="fa-stack" aria-hidden="true"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-exclamation fa-stack-1x"></i></span> {$CONST.ERROR}: <b>{$res}</b></div>
                    {else}
                        {if $lastSavedEntry}
                            <script type="text/javascript">$(document).ready(function() {
                                                                parent.document.forms['serendipityEntry']['serendipity[id]'].value = "{$lastSavedEntry}";
                            });
                            </script>
                        {/if}
                        <span class="alert alert-success"><span class="fa-stack text-success" aria-hidden="true"></i><i class="far fa-smile fa-2x"></i></span> {$CONST.ENTRY_SAVED}. &nbsp;&nbsp; <a class="btn btn-md btn-default btn-theme" href="{$entrylink}" target="_blank">{$CONST.VIEW_ENTRY}</a></span>
                    {/if}
                {/if}
            </div>
        </div>
    </main>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src={serendipity_getFile file="js/timeline.js" frontend=true}></script>

<!--[if lt IE 9]>
    <script src={serendipity_getFile file="js/respond.js" frontend=true}></script>
    <script src={serendipity_getFile file="js/html5shiv.js" frontend=true}></script>
    <script src={serendipity_getFile file="js/placeholder-IE-fixes.js" frontend=true}></script>
<![endif]-->
</body>
</html>

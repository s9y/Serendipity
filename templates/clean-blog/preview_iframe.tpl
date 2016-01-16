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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic|Open+Sans:300,600,800' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    {serendipity_hookPlugin hook="backend_header" hookAll="true"}
    <script src="{serendipity_getFile file='admin/js/plugins.js'}"></script>
    <script src="{serendipity_getFile file='admin/serendipity_editor.js'}"></script>
    <script>
        window.onload = function() {ldelim}
            parent.document.getElementById('serendipity_iframe').style.height = document.getElementById('maincontent').offsetHeight
                                                                              + parseInt(document.getElementById('maincontent').style.marginTop)
                                                                              + parseInt(document.getElementById('maincontent').style.marginBottom)
                                                                              + 'px';
            parent.document.getElementById('serendipity_iframe').scrolling    = 'no';
            parent.document.getElementById('serendipity_iframe').style.border = 0;
        {rdelim}
    </script>
</head>
<body>
    <main id="maincontent" class="container" role="main" style="margin: 0 auto;">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                {if $mode == 'preview'}
                    {$preview}
                {elseif $mode == 'save'}
                    {$updertHooks}
                    {if $res}
                        <div class="alert alert-danger"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-exclamation fa-stack-1x"></i></span> {$CONST.ERROR}: <b>{$res}</b></div>
                    {else}
                        {if $lastSavedEntry}
                            <script type="text/javascript">$(document).ready(function() {
                                                                parent.document.forms['serendipityEntry']['serendipity[id]'].value = "{$lastSavedEntry}";
                            });
                            </script>
                        {/if}
                        <span class="alert alert-success"><span class="fa-stack" aria-hidden="true"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-check fa-stack-1x"></i></span> {$CONST.ENTRY_SAVED}</span>
                        <a href="{$entrylink}" target="_blank">{$CONST.VIEW}</a>
                    {/if}
                {/if}                
            </div>
        </div>
    </main>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src={serendipity_getFile file="js/clean-blog.js"}></script>
</body>
</html>

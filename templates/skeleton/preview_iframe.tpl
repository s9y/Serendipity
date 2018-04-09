<!DOCTYPE html>
<html lang="{$lang}">
<head>
    <meta charset="{$head_charset}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$CONST.SERENDIPITY_ADMIN_SUITE}</title>
{if $template_option.use_googlefonts}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,300,600">
{/if}
    <link rel="stylesheet" href="{$serendipityHTTPPath}{$serendipityRewritePrefix}serendipity.css">
{serendipity_hookPlugin hook="backend_header" hookAll="true"}
    <script src="{serendipity_getFile file='admin/js/plugins.js'}"></script>
    <script src="{serendipity_getFile file='admin/serendipity_editor.js'}"></script>
<script>window.onload = function() {ldelim}
    parent.document.getElementById('serendipity_iframe').style.height = document.querySelector('html').offsetHeight + 'px';
    parent.document.getElementById('serendipity_iframe').scrolling    = 'no';
    parent.document.getElementById('serendipity_iframe').style.border = 0;
{rdelim}
</script>
</head>
<body>
    <main role="main">
    {if $mode == 'preview'}
        <div class="clearfix">
    {elseif $mode == 'save'}
        <div class="clearfix">
            <div style="float: left; height: 75px"></div>
            {$updertHooks}
        {if $res}
            <div class="serendipity_msg_important">{$CONST.ERROR}: <b>{$res}</b></div>
        {else}
            {if $lastSavedEntry}
            <script type="text/javascript">$(document).ready(function() {
                parent.document.forms['serendipityEntry']['serendipity[id]'].value = "{$lastSavedEntry}";
            });
            </script>
            {/if}
            <span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.ENTRY_SAVED}</span>
            <a href="{$entrylink}" target="_blank">{$CONST.VIEW}</a>
        {/if}
    {/if}
        {$preview}
        </div>
    </main>
</body>
</html>
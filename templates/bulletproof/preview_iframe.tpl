    <head>
        <title>{$CONST.SERENDIPITY_ADMIN_SUITE}</title>
        <meta http-equiv="Content-Type" content="text/html; charset={$head_charset}" />
        <meta name="Powered-By" content="Serendipity v.{$head_version}" />
        <link rel="stylesheet" type="text/css" href="{serendipity_getFile file="base.css"}" />
        <link rel="stylesheet" type="text/css" href="{$head_link_stylesheet}" />
        <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="{serendipity_getFile file="ie6.css"}" />
        <![endif]-->
        <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="{serendipity_getFile file="ie7.css"}" />
        <![endif]-->
        <!-- additional colorset stylesheet -->
        <link rel="stylesheet" type="text/css" href="{$serendipityHTTPPath}templates/{$template}/{$template_option.colorset}_style.css" />

        <script type="text/javascript">
           window.onload = function() {ldelim}
             parent.document.getElementById('serendipity_iframe').style.height = document.getElementById('content').offsetHeight
                                                                               + parseInt(document.getElementById('content').style.marginTop)
                                                                               + parseInt(document.getElementById('content').style.marginBottom)
                                                                               + 'px';
             parent.document.getElementById('serendipity_iframe').scrolling    = 'no';
             parent.document.getElementById('serendipity_iframe').style.border = 0;
           {rdelim}
        </script>
    </head>

    <body style="padding: 0px; margin: 0px;">
    <div id="wrapper" style="width: 100%; border: 0;">
    <div id="content" style="padding: 5px; margin: 0px;">
    {$preview}
    </div>
    </div>
    </body>

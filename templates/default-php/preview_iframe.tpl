    <head>
        <title><?= SERENDIPITY_ADMIN_SUITE ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=<?= $GLOBALS['tpl']['head_charset'] ?>" />
        <meta name="Powered-By" content="Serendipity v.<?= $GLOBALS['tpl']['head_version'] ?>" />
        <link rel="stylesheet" type="text/css" href="<?= $GLOBALS['tpl']['head_link_stylesheet'] ?>" />
        <script type="text/javascript">
           window.onload = function() {ldelim}
             parent.document.getElementById('serendipity_iframe').style.height = document.getElementById('mainpane').offsetHeight
                                                                               + parseInt(document.getElementById('mainpane').style.marginTop)
                                                                               + parseInt(document.getElementById('mainpane').style.marginBottom)
                                                                               + 'px';
             parent.document.getElementById('serendipity_iframe').scrolling    = 'no';
             parent.document.getElementById('serendipity_iframe').style.border = 0;
           {rdelim}
        </script>
    </head>

    <body style="padding: 0px; margin: 0px;">
        <div id="mainpane" style="padding: 0px; margin: 5px auto 5px auto; width: 98%;">
            <div id="content" style="padding: 5px; margin: 0px;">
            <?= $GLOBALS['tpl']['preview'] ?>
            </div>
        </div>
    </body>

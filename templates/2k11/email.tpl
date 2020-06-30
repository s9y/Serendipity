<body style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
<table class="frame" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#f2f2f2" style="font-family: Arial, sans-serif; color: #222222; margin: 0px 0px 0px 0px;">
    <tr>
        <td align="center" style="font-size: 90%;" height="30">{$entrymail.intro}</td>
    </tr>  
    <tr>
        <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="background: #ffffff;">
                <tr>
                    <td bgcolor="#ffffff" style="padding: 5px 20px 10px 20px;" >
                    <h2>{$entrymail.title}</h2>
                    <div style="font-size: 90%; margin-bottom:1em;">{$CONST.POSTED_BY} <a href="{$entrymail.link_author}">{$entrymail.author}</a> {$CONST.ON} <time datetime="{$entrymail.timestamp|@serendipity_html5time}">{$entrymail.timestamp|@formatTime:$template_option.date_format}</time></div>
                    {if $subscribeChunk == 'med'}
                    <div class="clearfix content serendipity_entry_body" style="margin-bottom:1em;">
                    {$entrymail.body}
                    </div>
                    {if $entrymail.extended}
                    <div>
                        <a class="read_more block_level" href="{$entrymail.link}">{$CONST.VIEW_EXTENDED_ENTRY|@sprintf:$entrymail.title}</a>
                    </div>
                    {/if}
                    {else}
                    <p><a class="read_more block_level" href="{$entrymail.link}">{$CONST.VIEW_EXTENDED_ENTRY|@sprintf:$entrymail.title}</a></p>
                    {/if}
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 20px 10px 20px; font-size: 80% line-height: 1;">
                        <hr>
                        <p>{$entrymail.signature}</p>
                        <p>{$entrymail.outro} %unsubscribe%</p>
                    </td>
                </tr>
                <tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" style="font-size: 90%;" height="30">&nbsp;</td>
    </tr> 
</table>
</body>
</html>

{if $installAction == "check"}
    {if $diagnosticError}
        {$CONST.DIAGNOSTIC_ERROR}
        <div class="serendipityAdminMsgError">-
            <img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />
            {foreach $r in $res}
                {$r} <br />
            {/foreach}
        </div>
        <br />
        <br />
    {else}
        {if $htaccessRewrite}
            {$CONST.ATTEMPT_WRITE_FILE|sprintf:"{$serendipityPath}htaccess"}
            {if is_array($res)}
                {foreach $r in $res}
                    {$r} <br />
                {/foreach}
            {else}
                {$CONST.DONE} <br />
            {/if}
        {/if}
        <br />
        <div class="serendipityAdminMsgSuccess">
            <img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />
            {$CONST.WRITTEN_N_SAVED}
        </div>
    {/if}
{else}
    {$config}
{/if}
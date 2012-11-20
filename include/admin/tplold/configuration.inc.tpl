{if $installAction == "check"}
    {if $diagnosticError}
        {$CONST.DIAGNOSTIC_ERROR}
        <div class="serendipityAdminMsgError msg_error">-
            <img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_error.png"}" alt="" />
            {foreach $res as $r}
                {$r} <br />
            {/foreach}
        </div>
        <br />
        <br />
    {else}
        {if $htaccessRewrite}
            {$CONST.ATTEMPT_WRITE_FILE|sprintf:"{$serendipityPath}htaccess"}
            {if is_array($res)}
                {foreach $res as $r}
                    {$r} <br />
                {/foreach}
            {else}
                {$CONST.DONE} <br />
            {/if}
        {/if}
        <br />
        <div class="serendipityAdminMsgSuccess msg_success">
            <img class="img_error" src="{serendipity_getFile file="admin/img/admin_msg_success.png"}" alt="" />
            {$CONST.WRITTEN_N_SAVED}
        </div>
    {/if}
{else}
    {$config}
{/if}
<h2>{$CONST.CONFIGURATION}</h2>
{if $installAction == 'check'}
    {if isset($diagnosticError) && $diagnosticError}
            <h2>{$CONST.DIAGNOSTIC_ERROR}</h2>
        {foreach $res as $r}
            <span class="msg_error"><span class="icon-attention-circled" aria-hidden="true"></span> {$r}</span>
        {/foreach}
    {else}
        {if isset($htaccessRewrite) && $htaccessRewrite}
            <h2>{$CONST.ATTEMPT_WRITE_FILE|sprintf:"{$serendipityPath}htaccess"}</h2>
            {if is_array($res)}
                {foreach $res as $r}
                <span class="msg_notice"><span class="icon-info-circled" aria-hidden="true"></span> {$r}</span>
                {/foreach}
            {else}
                <span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.DONE}</span>
            {/if}
        {/if}
        <span class="msg_success"><span class="icon-ok-circled" aria-hidden="true"></span> {$CONST.WRITTEN_N_SAVED}</span>
    {/if}
{/if}
{$config}

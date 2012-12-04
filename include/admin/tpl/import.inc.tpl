{* HTML5: Yes *}
{* jQuery: NN *}

{if $importForm}
    {if $die}
        <span class="msg_error"><span class="icon-attention"></span> FAILURE: Unable to require import module, possible syntax error?</span>
    {else}
        {if $validateData}
        <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.IMPORT_STARTING}</span>
            {if $result != true}
            <span class="msg_error"><span class="icon-attention"></span> {$CONST.IMPORT_FAILED}: {$result}</span>
            {else}
            <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.IMPORT_DONE}</span>
            {/if}
        {else}
            <h2>{$CONST.IMPORT_PLEASE_ENTER}</h2>

            <form action="" method="POST" enctype="multipart/form-data">
                {$formToken}
                <dl>
                {foreach $fields as $field}
                    <dt>{$field.text}</dt>
                    <dd>{$field.guessedInput}</dd>
                {/foreach}
                </dl>
                {if $notes}
                <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.IMPORT_NOTES}: {$notes}</span>
                {/if}
                <input type="submit" value="{$CONST.IMPORT_NOW}">
            </form>
        {/if}
    {/if}
{else}
    <h2>{$CONST.IMPORT_WELCOME}</h2>

    <p>{$CONST.IMPORT_WHAT_CAN}</p>
    
    <h3>{$CONST.IMPORT_SELECT}:</h3>

    <form action="" method="GET">
        <input name="serendipity[adminModule]" type="hidden" value="import">
        {$formToken}

        <div class="form_select">
            <label for="import_from">{$CONST.IMPORT_WEBLOG_APP}:</label>
            <select id="import_from" name="serendipity[importFrom]">
            {foreach $list as $v => $k}
                <option value="{$v}">{$k}</option>
            {/foreach}
            </select>
        </div>
        
        <input type="submit" value="{$CONST.GO}">
    </form>
{/if}

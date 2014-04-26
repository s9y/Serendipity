{if $importForm}
    {if $die}
        <h2>{$CONST.IMPORT_ENTRIES}</h2>

        <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.INCLUDE_ERRORFAILURE|sprintf:'importer'}</span>
    {else}
        {if $validateData}
        <h2>{$CONST.IMPORT_ENTRIES}</h2>

        <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.IMPORT_STARTING}</span>
            {if $result != true}
            <span class="msg_error"><span class="icon-attention-circled"></span> {$CONST.IMPORT_FAILED}: {$result}</span>
            {else}
            <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.IMPORT_DONE}</span>
            {/if}
        {else}
            <h2>{$CONST.IMPORT_PLEASE_ENTER}</h2>

            <form action="" method="POST" enctype="multipart/form-data">
                {$formToken}
                {if $notes}
                <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.IMPORT_NOTES}: {$notes}</span>
                {/if}
                <dl class="importer_data">
                {foreach $fields as $field}
                    <dt>{$field.text}</dt>
                    <dd class="clearfix">{$field.guessedInput}</dd>
                {/foreach}
                </dl>

                <div class="form_buttons">
                    <button type="submit">{$CONST.IMPORT_NOW}</button>
                </div>
            </form>
        {/if}
    {/if}
{else}
    <form action="" method="GET">
        <input name="serendipity[adminModule]" type="hidden" value="import">
        {$formToken}

        <div class="form_select">
            <label for="import_from">{$CONST.IMPORT_WEBLOG_APP}</label>
            <select id="import_from" name="serendipity[importFrom]">
            {foreach $list as $v => $k}
                <option value="{$v}">{$k}</option>
            {/foreach}
            </select>

            <input type="submit" value="{$CONST.GO}">
        </div>
    </form>
{/if}

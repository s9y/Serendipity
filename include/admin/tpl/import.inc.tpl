{if $importForm}
    {if $die}
        FAILURE: Unable to require import module, possible syntax error?
    {else}
        {if $validateData}
            {$CONST.IMPORT_STARTING}<br />
            {if $result != true}
                {$CONST.IMPORT_FAILED}: {$result}<br />
            {else}
                {$CONST.IMPORT_DONE}<br />
            {/if}
        {else}
            {$CONST.IMPORT_PLEASE_ENTER}
            <br />
            <form action="" method="POST" enctype="multipart/form-data">
                {$formToken}
                <table cellpadding="3" cellspacing="2">
                    {foreach $fields as $field}
                        <tr>
                            <td>{$field.text}</td>
                            <td>{$field.guessedInput}</td>
                        </tr>
                    {/foreach}
                    {if $notes}
                        <tr>
                          <td colspan="2">
                            <b>{$CONST.IMPORT_NOTES}</b><br />
                            {$notes}
                          </td>
                        </tr>
                    {/if}
                    <tr>
                      <td colspan="2" align="right"><input type="submit" value="{$CONST.IMPORT_NOW}" class="serendipityPrettyButton input_button"></td>
                    </tr>
                </table>
            </form>
        {/if}
    {/if}
{else}
    {$CONST.IMPORT_WELCOME}.<br />
    {$CONST.IMPORT_WHAT_CAN}. <br />
    <br />
    {$CONST.IMPORT_SELECT}:<br />
    <br />
    <form action="" method="GET">
        <input type="hidden" name="serendipity[adminModule]" value="import">
        {$formToken}
        <strong>{$CONST.IMPORT_WEBLOG_APP}: </strong>
        <select name="serendipity[importFrom]">
            {foreach $list as $v => $k}
                <option value="{$v}">{$k}</option>
            {/foreach}
        </select>
        <input type="submit" value="{$CONST.GO}" class="serendipityPrettyButton input_button">
    </form>
{/if}
            
            
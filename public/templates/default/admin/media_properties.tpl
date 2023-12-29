{if $media.is_edit}
<form id="mediaPropertyForm" action="?" method="POST">
    <div>
        {$media.token}
        <input type="hidden" name="serendipity[action]"         value="admin" />
        <input type="hidden" name="serendipity[adminModule]"    value="images" />
        <input type="hidden" name="serendipity[adminAction]"    value="add" />
        <input type="hidden" name="serendipity[adminSubAction]" value="properties" />
        {$media.editform_hidden}
{/if}

{$MEDIA_ITEMS}

{if $media.is_edit}
    <br /><input type="submit" name="submit" value="{$CONST.GO}" class="serendipityPrettyButton input_button" />
    </div>
</form>
{/if}

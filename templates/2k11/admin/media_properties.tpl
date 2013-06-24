<h2>{$CONST.MEDIA_PROP}</h2>

{if $media.is_edit}
<form id="mediaPropertyForm" action="?" method="POST">
    {$media.token}
    <input name="serendipity[action]" type="hidden" value="admin">
    <input name="serendipity[adminModule]" type="hidden" value="images">
    <input name="serendipity[adminAction]" type="hidden" value="add">
    <input name="serendipity[adminSubAction]" type="hidden" value="properties">
    {$media.editform_hidden}
{/if}
{$MEDIA_ITEMS}
{if $media.is_edit}
    <div class="form_buttons">
        <input name="submit" type="submit" value="{$CONST.GO}">
    </div>
</form>
{/if}

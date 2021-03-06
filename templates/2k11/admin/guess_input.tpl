{if $type == 'bool'}
    <div class="form_radio">
        <input id="radio_cfg_{$name}_yes" type="radio" name="{$name}" value="true"{if $value == true} checked="checked" {/if}>
        <label for="radio_cfg_{$name}_yes">{$CONST.YES}</label>
    </div>
    
    <div class="form_radio">
        <input id="radio_cfg_{$name}_no" type="radio" name="{$name}" value="false"{if NOT $value == true} checked="checked" {/if}>
        <label for="radio_cfg_{$name}_no">{$CONST.NO}</label>
    </div>
{elseif $type == 'fullprotected'}
    <input id="{$name}" type="password" name="{$name}" value="{$value|escape}" autocomplete="off">
{elseif $type == 'protected'}
    <input id="{$name}" type="password" name="{$name}" value="{$value|escape}">
{elseif $type == 'multilist'}
    <select id="{$name}" name="{$name}[]" multiple="multiple" size="5">';
    {foreach $default as $k => $v}
        <option value="{$v.confkey}"{if $selected.$name.$k.selected} selected="selected"{/if}>{$v.confvalue}</option>
    {/foreach}
    </select>
{elseif $type == 'list'}
    <select id="{$name}" name="{$name}">
    {foreach $default as $k => $v}
        <option value="{$k}"{if $selected.$name.$k.selected} selected="selected"{/if}>{$v}</option>
    {/foreach}
    </select>
{elseif $type == 'file'}
    <input id="{$name}" type="file" name="{$name}">
{elseif $type == 'media'}
    <div class='form_group'>
        <input id="{$name}" name="{$name}" class="form_media change_preview" data-configitem="{$name}" type="text" value="{$value|escape}">
        <button class="choose_media" type="button" name="insImage" title="{$CONST.MEDIA_LIBRARY}"><span class="icon-picture" aria-hidden="true"></span><span class="visuallyhidden"> {$CONST.MEDIA_LIBRARY}</span></button>
        <figure id="{$name}_preview" {if $value == ''} style='display:none;'{/if}>
            <figcaption>{$CONST.PREVIEW}</figcaption>
            <img src="{$value}" alt="">
        </figure>
    </div>
{elseif $type == 'textarea'}
    <textarea id="{$name}" rows="5" name="{$name}">{$value|escape}</textarea>
{else}
    <input id="{$name}" type="text" name="{$name}" value="{$value|escape}">
{/if}

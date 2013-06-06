{if $type == 'bool'}
    <div class="form_radio">
        <input class="input_radio" id="radio_cfg_{$name}_yes" type="radio" name="{$name}" value="true"
            {if $value == true} checked="checked" {/if}
        />
        <label for="radio_cfg_{$name}_yes">{$CONST.YES}</label>
    </div>
    
    <div class="form_radio">
        <input class="input_radio" id="radio_cfg_{$name}_no" type="radio" name="{$name}" value="false"
            {if NOT $value == true} checked="checked" {/if}
        />
        <label for="radio_cfg_{$name}_no">{$CONST.NO}</label>
    </div>
    
{elseif $type == 'fullprotected'}
    <input autocomplete="off" class="input_textbox" type="password" size="30" name="{$name}" value="{$value|escape:"html"}" />
    
{elseif $type == 'protected'}
    <input class="input_textbox" type="password" size="30" name="{$name}" value="{$value|escape:"html"}" />
    
{elseif $type == 'multilist'}
    <select name="{$name}[]" multiple="multiple" size="5">';

    {foreach $default as $k => $v}
        <option value="{$v.confkey}" {if $selected.$name.$k.selected} selected="selected" {/if} >
            {$v.confvalue}
        </option>
        
    {/foreach}
    </select>

{elseif $type == 'list'}
    <select name="{$name}">
        {foreach $default as $k => $v}
            <option value="{$k}" {if $selected.$name.$k.selected} selected="selected" {/if} >
                {$v}
            </option>
        {/foreach}
    </select>

{elseif $type == 'file'}
    <input class="input_file" type="file" size="30" name="{$name}" />

{elseif $type == 'textarea'}
    <textarea rows="5" cols="40" name="{$name}">{$value|escape:"html"}</textarea>

{else}
    <input class="input_textbox" type="text" size="30" name="{$name}" value="{$value|escape:"html"}" />
{/if}
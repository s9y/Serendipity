{if $ctype == 'seperator'}
    <hr>
{elseif $ctype == 'select'}
    <div class="clearfix form_select{if $cdesc != ''} has_info{/if}">
        <label for="serendipity_{$config_item}">{$cname}{if $cdesc != ''} <button class="toggle_info button_link" type="button" data-href="#{$config_item}_info"><span class="icon-info-circled"></span><span class="visuallyhidden"> {$CONST.MORE}</span></button>{/if}</label>
        {if $cdesc != ''}<span id="{$config_item}_info" class="field_info additional_info">{$cdesc}</span>{/if}

        <select id="serendipity_{$config_item}" class="direction_{$lang_direction}" name="serendipity[{$postKey}][{$config_item}]{($is_multi_select) ? '[]' : ''}"{($is_multi_select) ? ' multiple' : ''}{($is_multi_select && ($select_size > 0)) ? " size='{$select_size}'" : ''}>
        {foreach $select AS $select_value => $select_desc}
            <option value="{$select_value}" {(in_array($select_value, $selected_options) || in_array($select_value, $pre_selected)) ? 'selected' : ''} title="{$select_desc|escape}">{$select_desc|escape}</option>
        {/foreach}
        </select>
    </div>
{elseif $ctype == 'radio'}
    <fieldset{if $cdesc != ''} class="has_info"{/if}>
        <span class="wrap_legend"><legend>{$cname}{if $cdesc != ''} <button class="toggle_info button_link" type="button" data-href="#{$config_item}_info"><span class="icon-info-circled"></span><span class="visuallyhidden"> {$CONST.MORE}</span></button>{/if}</legend></span>
        {if $cdesc != ''}<span id="{$config_item}_info" class="field_info additional_info">{$cdesc}</span>{/if}
        <div class="clearfix grouped">
        {foreach $radio_button AS $r}
            <div class="form_radio">
                <input id="serendipity_plugin_{$r['id']}" class="direction_{$lang_direction}" name="serendipity[{$postKey}][{$config_item}]" type="radio" value="{$r['value']}" {(!empty($r['checked'])) ? 'checked="checked"' : ''} title="{$r['index']|escape}">
                <label for="serendipity_plugin_{$r['id']}">{$r['index']}{* escapement is already done *}</label>
                {assign var="r" value="counter[0]"}
            </div>
        {/foreach}
        </div>
    </fieldset>
{elseif $ctype == 'string'}
    <div class="clearfix form_field{if $cdesc != ''} has_info{/if}">
        <label for="serendipity_{$config_item}">{$cname}{if $cdesc != ''} <button class="toggle_info button_link" type="button" data-href="#{$config_item}_info"><span class="icon-info-circled"></span><span class="visuallyhidden"> {$CONST.MORE}</span></button>{/if}</label>
        {if $cdesc != ''}<span id="{$config_item}_info" class="field_info additional_info">{$cdesc}</span>{/if}
        <input id="serendipity_{$config_item}" class="direction_{$lang_direction}" name="serendipity[{$postKey}][{$config_item}]" type="{$input_type}" value="{$hvalue}">
    </div>
{elseif (($ctype == 'html') || ($ctype == 'text'))}
    <div class="clearfix form_area{if $cdesc != ''} has_info{/if}">
        <label for="nuggets{$elcount}">{$cname}{if $cdesc != '' && !$backend_wysiwyg} <button class="toggle_info button_link" type="button" data-href="#nuggets{$elcount}_info"><span class="icon-info-circled"></span><span class="visuallyhidden"> {$CONST.MORE}</span></button>{/if}</label>
        {if $cdesc != ''}<span id="nuggets{$elcount}_info" class="field_info additional_info">{$cdesc}</span>{/if}
        <textarea id="nuggets{$elcount}" class="direction_{$lang_direction}" name="serendipity[{$postKey}][{$config_item}]" rows="{$text_rows}">{$hvalue}</textarea>
    </div>
{elseif $ctype == 'content'}
    <div class="clearfix">
        {$cbag_default}
    </div>
{elseif $ctype == 'custom'}
    <div class="clearfix custom_item">
        <input id="config_{$postKey}_{$config_item}" name="serendipity[{$postKey}][{$config_item}]" type="hidden" value="{$hvalue}">
        {$cbag_custom}
    </div>
{elseif $ctype == 'hidden'}
    <div class="clearfix">
        <input name="serendipity[{$postKey}][{$config_item}]" type="hidden" value="{$cbag_value}">
    </div>
{elseif $ctype == 'media'}
    <div class="clearfix form_field media_choose{if $cdesc != ''} has_info{/if}">
        <label for="serendipity[{$postKey}][{$config_item}]">{$cname}{if $cdesc != ''} <button class="toggle_info button_link" type="button" data-href="#{$postKey}_{$config_item}_info"><span class="icon-info-circled"></span><span class="visuallyhidden"> {$CONST.MORE}</span></button>{/if}</label>

        <div class="media_chooser clearfix">
            <input id="serendipity[{$postKey}][{$config_item}]" class="change_preview" name="serendipity[{$postKey}][{$config_item}]" type="text" data-configitem="{$config_item}" value="{$value}">

            <button class="choose_media" type="button" title="{$CONST.MEDIA_LIBRARY}"><span class="icon-picture"></span><span class="visuallyhidden">{$CONST.MEDIA_LIBRARY}</span></button>
        </div>

        {if $cdesc != ''}<span id="{$postKey}_{$config_item}_info" class="field_info additional_info">{$cdesc}</span>{/if}

        <figure id="{$config_item}_preview">
            <figcaption>{$CONST.PREVIEW}</figcaption>
            <img src="{$value}" alt="">
        </figure>
    </div>
{elseif $ctype == 'sequence'}
    <fieldset{if $cdesc != ''} class="has_info"{/if}>
        <span class="wrap_legend"><legend>{$cname}{if $cdesc != ''} <button class="toggle_info button_link" type="button" data-href="#{$config_item}_info"><span class="icon-info-circled"></span><span class="visuallyhidden"> {$CONST.MORE}</span></button>{/if}</legend></span>
        {if $cdesc != ''}<span id="{$config_item}_info" class="field_info additional_info">{$cdesc}</span>{/if}
        <input id="{$config_item}_value" name="serendipity[{$postKey}][{$config_item}]" type="hidden" value="{$value}">

        <noscript>
            {* Replace standard submit button when using up/down submits *}
            <input name="SAVECONF" type="hidden" value="Save">
        </noscript>

        <ol id="{$config_item}" class="sequence_container pluginmanager_container">
        {foreach $order_id as $orid}
            <li id="{$orid['id']}" class="sequence_item pluginmanager_item_even">
                <div id="g{$orid['id']}" class="pluginmanager_grablet sequence_grablet">
                    <button class="icon_link" type="button" title="Move"><span class="icon-move"></span><span class="visuallyhidden"> {$CONST.MOVE}</span></button>
                </div>
            {if $checkable}
                <div class="form_check">
                    <input id="activate_{$orid['id']}" name="serendipity[{$postKey}][activate][{$config_item}][{$orid['id']}]" {(in_array($orid['id'], $store_order)) ? ' checked="checked" ' : ''} type="checkbox" value="{$orid['id']}">
                    <label for="activate_{$orid['id']}" class="visuallyhidden">{$CONST.PLUGIN_ACTIVE} / {$CONST.PLUGIN_INACTIVE}</label>
                </div>
            {/if}
                <span>{$items[{$orid['id']}]['display']}</span>
            {if isset($items[{$orid['id']}]['img'])}
                <img src="{$items[{$orid['id']}]['img']}">
            {/if}
                <noscript>
                    <div>
                {if ($orid['sort_idx'] == 0)}
                    &nbsp;
                {else}
                    <button id="{$postKey}_{$config_item}_{$orid['sort_idx']}_up" class="icon_link" name="serendipity[{$postKey}][override][{$config_item}]" type="submit" value="{$orid['oneup']}"><span class="icon-up-dir"></span><span class="visuallyhidden"> {$CONST.MOVE_UP}</span></button>
                {/if}
                {if ($orid['sort_idx'] == $last)}
                    &nbsp;
                {else}
                    <button id="{$postKey}_{$config_item}_{$orid['sort_idx']}_down" class="icon_link" name="serendipity[{$postKey}][override][{$config_item}]" type="submit" value="{$orid['onedown']}"><span class="icon-down-dir"></span><span class="visuallyhidden"> {$CONST.MOVE_DOWN}</span></button>
                {/if}
                    </div>
                </noscript>
            </li>
        {/foreach}
        </ol>
    {if isset($no_sequence)}
        {$no_sequence}
    {/if}
    </fieldset>
{/if}

{if $ctype == 'seperator'}
    <hr>
{elseif $ctype == 'select'}
    <div class="clearfix form_select">
        <label for="serendipity_{$config_item}">{$cname}{if $cdesc != ''} <span class="icon-info-circled" title="{$cdesc}" rel="tooltip"></span>{/if}</label>
        {* Make sure id creation actually produces unique identifiers *}
        <select id="serendipity_{$config_item}" class="direction_{$lang_direction}" name="serendipity[{$postKey}][{$config_item}]{($is_multi_select) ? '[]' : ''}" {($is_multi_select) ? 'multiple' : ''} {($is_multi_select && ($select_size > 0)) ? "size='{$select_size}'" : ''}>
        {foreach $select AS $select_value => $select_desc}
            {assign var="id" value="{$config_item|escape}_{$select_value|escape}"}
            <!-- case select assign id={$id} -->
            <option value="{$select_value}" {(in_array($select_value, $selected_options) || in_array($select_value, $pre_selected)) ? 'selected' : ''} title="{$select_desc|escape}">{$select_desc|escape}</option>
        {/foreach}
        </select>            
    </div>
{elseif $ctype == 'radio'}
    <fieldset>
        <legend><span>{$cname}{if $cdesc != ''} <span class="icon-info-circled" title="{$cdesc}" rel="tooltip"></span>{/if}</span></legend>
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
    <div class="clearfix form_field">
        <label for="serendipity_{$config_item}">{$cname}{if $cdesc != ''} <span class="icon-info-circled" title="{$cdesc}" rel="tooltip"></span>{/if}</label>
        {* TODO: Make sure id creation actually produces unique identifiers *}
        <input id="serendipity_{$config_item}" class="direction_{$lang_direction}" name="serendipity[{$postKey}][{$config_item}]" type="{$input_type}" value="{$hvalue}">
    </div>
{elseif (($ctype == 'html') || ($ctype == 'text'))}
    <div class="clearfix form_area">
        <label for="nuggets{$elcount}">{$cname}{if $cdesc != ''} <span class="icon-info-circled" title="{$cdesc}" rel="tooltip"></span>{/if}</label>

        <textarea id="nuggets{$elcount}" class="direction_{$lang_direction}" name="serendipity[{$postKey}][{$config_item}]" rows="{$text_rows}">{$hvalue}</textarea>
    </div>
{elseif $ctype == 'content'}
    <div class="clearfix">
        {$cbag_default}
    </div>
{elseif $ctype == 'custom'}
    <div class="clearfix">
        <input id="config_{$postKey}_{$config_item}" name="serendipity[{$postKey}][{$config_item}]" type="hidden" value="{$hvalue}">
        {$cbag_custom}
    </div>
{elseif $ctype == 'hidden'}
    <div class="clearfix">
        <input name="serendipity[{$postKey}][{$config_item}]" type="hidden" value="{$cbag_value}">
    </div>
{elseif $ctype == 'media'}
    <div class="clearfix form_field media_choose">
        <label for="serendipity[{$postKey}][{$config_item}]">{$cname}{if $cdesc != ''} <span class="icon-info-circled" title="{$cdesc}" rel="tooltip"></span>{/if}</label>
        
        <input id="serendipity[{$postKey}][{$config_item}]" class="change_preview" name="serendipity[{$postKey}][{$config_item}]" type="text" data-configitem="{$config_item}" data-pmwidth="{$preview_width}" data-pmheight="{$preview_height}" value="{$value}">{* This should be input[type=file] … *}

        <a class="button_link choose_media" href="#serendipity[{$postKey}][{$config_item}]" title="{$CONST.MEDIA_LIBRARY}" rel="tooltip"><span class="icon-picture"></span><span class="visuallyhidden"> {$CONST.MEDIA_LIBRARY}</span></a>
    </div>
{elseif $ctype == 'sequence'}
    {if !$sequencejs_output}
    <script src="{serendipity_getFile file="admin/js/dragdrop.js"}"></script>
    {/if}
    <fieldset>
        <legend><span>{$cname}{if $cdesc != ''} <span class="icon-info-circled" title="{$cdesc}" rel="tooltip"></span>{/if}</span></legend>
        <input id="{$config_item}_value" name="serendipity[{$postKey}][{$config_item}]" type="hidden" value="{$value}">

        <noscript>
            <!-- Replace standard submit button when using up/down submits -->
            <input name="SAVECONF" type="hidden" value="Save">
        </noscript>

        <ol id="{$config_item}" class="sequence_container pluginmanager_container">
        {foreach $order_id as $orid}
            <li id="{$orid['id']}" class="sequence_item pluginmanager_item_even">
                <div id="g{$orid['id']}" class="pluginmanager_grablet sequence_grablet">
                    <a class="icon_link" href="#" title="Move" rel="tooltip"><span class="icon-move"></span><span class="visuallyhidden"> Move</span></a>{* i18n *}
                </div>
            {if $checkable}
                <div class="form_check">
                    <input id="activate_{$orid['id']}" name="serendipity[{$postKey}][activate][{$config_item}][{$orid['id']}]" {(in_array($orid['id'], $store_order)) ? ' checked="checked" ' : ''} type="checkbox" onclick="sort_{$config_item}_Sequence();" value="true">
                    {* TODO: needs label *}
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
                    <button id="{$postKey}_{$config_item}_{$orid['sort_idx']}_up" class="icon_link" name="serendipity[{$postKey}][override][{$config_item}]" type="submit" value="{$orid['oneup']}"><span class="icon-up-open"></span><span class="visuallyhidden"> Move Up</span></button> {* i18n *}
                {/if}
                {if ($orid['sort_idx'] == $last)}
                    &nbsp;
                {else}
                    <button id="{$postKey}_{$config_item}_{$orid['sort_idx']}_down" class="icon_link" name="serendipity[{$postKey}][override][{$config_item}]" type="submit" value="{$orid['onedown']}"><span class="icon-down-open"></span><span class="visuallyhidden"> Move Down</span></button> {* i18n *}
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
    <script>
        function sort_{$config_item}_Sequence() { 
            //var seq = DragDrop.serData('{$config_item}_group', null);
            var seq = DragDrop.serData(null, '{$config_item}');
            var start = seq.indexOf("(");
            var end = seq.indexOf(")");
            seq = seq.slice((start + 1), end);
            checkable_seq = seq.split(",");
            out_seq = '';
            for (i in checkable_seq) { 
                if (document.getElementById('activate_' + checkable_seq[i]) && !document.getElementById('activate_' + checkable_seq[i]).checked) { 
                    continue;
                } else { 
                    if (out_seq != '') { 
                        out_seq += ',';
                    } 
                out_seq += checkable_seq[i];
                } 
            } 
            var order = document.getElementById("{$config_item}_value");
            order.value = out_seq;
        } 

        function init_{$config_item}_Sequence() { 
            var lst = document.getElementById("{$config_item}");
            DragDrop.makeListContainer(lst, '{$config_item}_group');
            lst.onDragOut = function() { 
                sort_{$config_item}_Sequence();
            };
        } 
        addLoadEvent(init_{$config_item}_Sequence);
    </script>
{/if}

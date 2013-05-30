{* HTML5: Yes *}
{* jQuery: No *}

{* serendipity_plugins_admin.inc.php::serendipity_plugin_config() - the OUT_STACK loop *}
    {if $ctype == 'seperator'}
        <hr>
    {/if}
    {if $ctype == 'select'}
        <div class="form_select">
            <label for="serendipity_{$config_item}">{$cname}
            {if $cdesc != ''}<span>{$cdesc}</span>{/if}
            </label>
            {* Make sure id creation actually produces unique identifiers *}
            <select id="serendipity_{$config_item}" class="direction_{$lang_direction}" name="serendipity[{$postKey}][{$config_item}]{($is_multi_select) ? '[]' : ''}" {($is_multi_select) ? 'multiple' : ''} {($is_multi_select && ($select_size > 0)) ? "size='{$select_size}'" : ''}>
            {foreach $select AS $select_value => $select_desc}
                {assign var="id" value="{$config_item|escape}_{$select_value|escape}"}
                <!-- case select assign id={$id} -->
                <option value="{$select_value}" {(in_array($select_value, $selected_options) || in_array($select_value, $pre_selected)) ? 'selected' : ''} title="{$select_desc|escape}">{$select_desc|escape}</option>
            {/foreach}
            </select>            
        </div>
    {/if}
    {if $ctype == 'radio'}
        <fieldset>
            <legend><span>{$cname}{if $cdesc != ''} <span>{$cdesc}</span>{/if}</span></legend>
            <div class="clearfix">
            {foreach $radio_button AS $r}
                <div class="form_radio">
                    <input id="serendipity_plugin_{$r['id']}" class="direction_{$lang_direction}" name="serendipity[{$postKey}][{$config_item}]" type="radio" value="{$r['value']}" {(!empty($r['checked'])) ? 'checked="checked"' : ''} title="{$r['index']|escape}">
                    <label for="serendipity_plugin_{$r['id']}">{$r['index']}{* escapement is already done *}</label>
                    {assign var="r" value="counter[0]"}
                </div>
            {/foreach}
            </div>
        </fieldset>
    {/if}
    {if $ctype == 'string'}
        <div class="form_field">
            <label for="serendipity_{$config_item}">{$cname}
            {if $cdesc != ''}<span>{$cdesc}</span>{/if}
            </label>
            {* TODO: Make sure id creation actually produces unique identifiers *}
            <input id="serendipity_{$config_item}" class="direction_{$lang_direction}" name="serendipity[{$postKey}][{$config_item}]" type="{$input_type}" value="{$hvalue}">
        </div>
    {/if}
    {if (($ctype == 'html') || ($ctype == 'text'))}
        <div class="form_area">
            <label for="nuggets{$elcount}">{$cname}
            {if $cdesc != ''}<span>{$cdesc}</span>{/if}
            </label>

            <textarea id="nuggets{$elcount}" class="direction_{$lang_direction}" name="serendipity[{$postKey}][{$config_item}]" rows="{$text_rows}">{$hvalue}</textarea>
        </div>
    {/if}
    {if $ctype == 'content'}
        <div class="clearfix">
            {$cbag_default}
        </div>
    {/if}
    {if $ctype == 'custom'}
        <div class="clearfix">
            <input id="config_{$postKey}_{$config_item}" name="serendipity[{$postKey}][{$config_item}]" type="hidden" value="{$hvalue}">
            {$cbag_custom}
        </div>
    {/if}
    {if $ctype == 'hidden'}
        <div class="clearfix">
            <input name="serendipity[{$postKey}][{$config_item}]" type="hidden" value="{$cbag_value}">
        </div>
    {/if}
    {if $ctype == 'media'}
        <div class="clearfix">
            <label for="serendipity[{$postKey}][{$config_item}]">{$cname}
            {if $cdesc != ''}<span>{$cdesc}</span>{/if}
            </label>
            
            <div id="{$config_item}_preview" style="background-image: url({$value}); width: {$preview_width}; height: {$preview_height}; background-repeat: no-repeat;">&nbsp;</div>
            {* This should be input[type=file] … *}
            <input id="serendipity[{$postKey}][{$config_item}]" name="serendipity[{$postKey}][{$config_item}]" type="text" value="{$value}" onchange="change_preview('{$config_item}')">

            <a href="#" onclick="choose_media('serendipity[{$postKey}][{$config_item}]')">{$CONST.MEDIA_LIBRARY}</a>
            {* … not touching it in order to not break it for now. *}
        </div>
    {/if}
    {if $ctype == 'sequence'}
        {if !$sequencejs_output}
        <script src="{serendipity_getFile file="admin/js/dragdrop.js"}"></script>
        {/if}
        <fieldset>
            <legend><span>{$cname}{if $cdesc != ''} <span>{$cdesc}</span>{/if}</span></legend>
            <input id="{$config_item}_value" name="serendipity[{$postKey}][{$config_item}]" type="hidden" value="{$value}">

            <noscript>
                <!-- Replace standard submit button when using up/down submits -->
                <input name="SAVECONF" type="hidden" value="Save">
            </noscript>

            <ol id="{$config_item}" class="sequence_container pluginmanager_container">
            {foreach $order_id as $orid}
                <li id="{$orid['id']}" class="sequence_item pluginmanager_item_even">
                    <div id="g{$orid['id']}" class="pluginmanager_grablet sequence_grablet">
                        <a class="icon_link" href="#" title="Move"><span class="icon-move"></span><span class="visuallyhidden"> Move</span></a>{* i18n *}
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
                        <button id="{$postKey}_{$config_item}_{$orid['sort_idx']}_up" class="icon_link" name="serendipity[{$postKey}][override][{$config_item}]" type="submit" value="{$orid['oneup']}"><span class="icon-up-circled"></span><span class="visuallyhidden"> Move Up</span></button> {* i18n *}
                    {/if}
                    {if ($orid['sort_idx'] == $last)}
                        &nbsp;
                    {else}
                        <button id="{$postKey}_{$config_item}_{$orid['sort_idx']}_down" class="icon_link" name="serendipity[{$postKey}][override][{$config_item}]" type="submit" value="{$orid['onedown']}"><span class="icon-down-circled"></span><span class="visuallyhidden"> Move Down</span></button> {* i18n *}
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
{*** Smarty 3 has a new auto literal option which is enabled by default.
   When the { is surrounded by whitespace it is not interpreted as smarty delimiter but literal. e.g. ' } ;' 
   AS tests have proofed, ending javascript delimiters " } ;" and " };" and even "};" work fine as well. So back to origin. ***}
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

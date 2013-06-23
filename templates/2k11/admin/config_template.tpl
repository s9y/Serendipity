{if NOT $noForm}
    <form action="?" method="POST">
        <input type="hidden" name="serendipity[adminModule]" value="installer">
        <input type="hidden" name="installAction" value="check">
        {$formToken}
{/if}
{if $config|@sizeof > 1 AND $allowToggle}
    <a id="show_config_all" class="button_link" href="#serendipity_config_options" title="{$CONST.TOGGLE_ALL}" rel="tooltip"><span class="icon-plus"></span><span class="visuallyhidden"> {$CONST.TOGGLE_ALL}</span></a>
{/if}
    <div id="serendipity_config_options">
    {foreach $config as $category}
        <div class="configuration_group">
        {if $config|@sizeof > 1}
            <h3>{if $allowToggle}<a id="optionel{$category@iteration}" class="show_config_option" href="#el{$category@index}" title="{$CONST.TOGGLE_OPTION}"><span class="icon-plus"></span> {$category.title}</a>{else}{$category.title}{/if}</h3>
        {/if}
            <fieldset id="el{$category@index}" class="config_optiongroup{if $config_groupkeys@last} config_optiongroup_last{/if} additional_info option_list">
                <legend class="visuallyhidden">{$category.description}</legend>
        {foreach $category.items as $item}
            {cycle assign='zebra_class' values='odd,even'}
            {if $item.guessedInput}
                {if $item.type == 'bool'}
                <fieldset class="clearfix {$zebra_class}">
                    <legend><span>{$item.title}{if $item.description} <span class="icon-info-circled" title="{$item.description|escape:"html"}" rel="tooltip"></span>{/if}</span></legend>
                    <div class="clearfix grouped">
                    {$item.guessedInput}
                    </div>
                </fieldset>
                {else}
                <div class="clearfix {$zebra_class} form_{if $item.type == 'list'}select{elseif $item.type == 'multilist'}multiselect{elseif $item.type == 'textarea'}area{else}field{/if}">
                    <label for="{$item.var}">{$item.title}{if $item.description} <span class="icon-info-circled" title="{$item.description|escape:"html"}" rel="tooltip"></span>{/if}</label>
                    {$item.guessedInput}
                </div>
                {/if}
            {/if}
        {/foreach}
            </fieldset>
        </div>
    {/foreach}
    </div>
{if NOT $noForm}
    <div class="form_buttons">
        <input type="submit" value="{$CONST.CHECK_N_SAVE}">
    </div>
</form>
{/if}

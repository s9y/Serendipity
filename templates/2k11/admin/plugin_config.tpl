{if $showSubmit_head}
    <div class="save_conf form_buttons">
        {if $postKey == "template"}
            <a class="button_link" href="?serendipity[adminModule]=templates">{$CONST.BACK}</a>
        {/if}
        <input name="SAVECONF" type="submit" value="{$CONST.SAVE}">
    </div>
{/if}
{if is_array($config_groups)}
    <a id="show_config_all" class="button_link" href="#serendipity_config_options" title="{$CONST.TOGGLE_ALL}" rel="tooltip"><span class="icon-plus"></span><span class="visuallyhidden"> {$CONST.TOGGLE_ALL}</span></a>

    <div id="serendipity_config_options">
    {foreach $config_groups AS $config_header => $config_groupkeys}
        <div class="configuration_group">
            <h3><a id="optionel{$config_groupkeys@iteration}" class="show_config_option" href="#el{$config_groupkeys@iteration}" title="{$CONST.TOGGLE_OPTION}"><span class="icon-plus"></span> {$config_header}</a></h3>
        
            <fieldset id="el{$config_groupkeys@iteration}" class="config_optiongroup{if $config_groupkeys@last} config_optiongroup_last{/if} additional_info">
            {foreach $config_groupkeys AS $config_groupkey}
                <div class="{cycle values='odd,even'}">
                {$OUT_STACK[$config_groupkey]}
                </div>
            {/foreach}
            </fieldset>
        </div>
    {/foreach}
    </div>
{/if}
{foreach $OUT_STACK_REST as $out_stack_config_item}
    <div class="configuration_group {cycle values='odd,even'}">
    {$out_stack_config_item}
    </div>
{/foreach}
{if $showSubmit_foot}
    <div class="save_conf form_buttons">
        {if $postKey == "template"}
            <a class="button_link" href="?serendipity[adminModule]=templates">{$CONST.BACK}</a>
        {/if}
        <input name="SAVECONF" type="submit" value="{$CONST.SAVE}">
    </div>
{/if}
{if $showExample}
    <div>{$plugin_example}</div>
{/if}
{if $spawnNuggets}
    {serendipity_hookPlugin hook="backend_wysiwyg_nuggets" eventData=$ev hookAll=true}
    {if ($ev['skip_nuggets'] === false)}
    <script>
    function Spawnnugget() { 
        {foreach $htmlnugget AS $htmlnuggetid}
        Spawnnuggets('{$htmlnuggetid}');
        {/foreach}
    } 
    </script>
    {/if}
{/if}

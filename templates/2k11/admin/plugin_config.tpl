{if $showSubmit_head}
    <div class="form_buttons">
        {if $postKey == "template"}
        <a class="button_link" href="?serendipity[adminModule]=templates">{$CONST.BACK}</a>
        {/if}
        <input name="SAVECONF" type="submit" value="{$CONST.SAVE}">
    </div>
{/if}
{if is_array($config_groups)}
    <button id="show_config_all" class="button_link" type="button" data-href="#serendipity_config_options" title="{$CONST.TOGGLE_ALL}">
        <span class="icon-right-dir"></span><span class="visuallyhidden"> {$CONST.TOGGLE_ALL}</span>
    </button>

    <div id="serendipity_config_options">
    {foreach $config_groups AS $config_header => $config_groupkeys}
        <div class="configuration_group">
            <h3 class="toggle_headline"><button id="optionel{$config_groupkeys@iteration}" class="show_config_option" type="button" data-href="#el{$config_groupkeys@iteration}" title="{$CONST.TOGGLE_OPTION}"><span class="icon-right-dir"></span> {$config_header}</button></h3>

            <div id="el{$config_groupkeys@iteration}" class="config_optiongroup{if $config_groupkeys@last} config_optiongroup_last{/if} additional_info">
            {foreach $config_groupkeys AS $config_groupkey}
                {if $plugin_option[$config_groupkey]['ctype'] == 'seperator'}
                    {$plugin_options[$config_groupkey]['config']}
                {else}
                    <div class="{cycle values='odd,even'}">
                        {$plugin_options[$config_groupkey]['config']}
                    </div>
                {/if}
            {/foreach}
            </div>
        </div>
    {/foreach}
    </div>
{/if}

{* Those are only needed if the plugin contains a config item of type sequence, liek the entryproperty-plugin *}
{foreach $plugin_options_ungrouped as $plugin_option}
    {if $plugin_option['ctype'] == 'seperator'}
        {$plugin_option['config']}
    {else}
        <div class="configuration_group {cycle values='odd,even'}">
            {$plugin_option['config']}
        </div>
    {/if}
{/foreach}
{if $showSubmit_foot}
    <div class="form_buttons">
        {if $postKey == "template"}
        <a class="button_link" href="?serendipity[adminModule]=templates">{$CONST.BACK}</a>
        {/if}
        {if $postKey == "plugin"}
         <a class="button_link" href="?serendipity[adminModule]=plugins">{$CONST.BACK}</a>
        {/if}
        <input name="SAVECONF" type="submit" value="{$CONST.SAVE}">
    </div>
{/if}
{if $showExample}
    <div>{$plugin_example}</div>
{/if}
{if $spawnNuggets}
    {serendipity_hookPlugin hook="backend_wysiwyg_nuggets" eventData=$ev hookAll=true}

    {if $ev['skip_nuggets'] === false && $init !== false}

    <script>
    function Spawnnugget() {
        /* init plugin nuggets when not using the default wysiwyg-editor */
        {foreach $ev['nuggets'] AS $htmlnuggetid}

        if (window.Spawnnuggets) Spawnnuggets('{$htmlnuggetid}');
        {/foreach}

    }
    </script>
    {/if}

{/if}

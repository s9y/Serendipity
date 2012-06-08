{* serendipity_plugins_admin.inc.php::serendipity_plugin_config() *}

<script type="text/javascript">
    var const_view = '{$CONST.VIEW_FULL}';
    var const_hide = '{$CONST.HIDE}';
    var img_plus   = '{serendipity_getFile file="img/plus.png"}';
    var img_minus  = '{serendipity_getFile file="img/minus.png"}';
</script>

{if $allow_admin_scripts}
<script type="text/javascript" language="JavaScript" src="{serendipity_getFile file='admin/admin_scripts.js'}"></script>
{/if}

{if $showSubmit_head}
    <div style="margin: 0px auto 0px 0px; text-align: right">
        <input type="submit" name="SAVECONF" value="{$CONST.SAVE}" class="serendipityPrettyButton input_button" />
    </div>
{/if}
{if $showTable}
    <table id="serendipity_plugin_config" border="0" cellspacing="0" cellpadding="3" width="100%">
{/if}
{if is_array($config_groups)}
        <tr>
            <td colspan="2">
                <div align="right">
                    <a style="border:0; text-decoration: none" href="#" onClick="showConfigAll({sizeof($config_groups)}); return false" title="{$CONST.TOGGLE_ALL}"><img src="{serendipity_getFile file="img/plus.png"}" id="optionall" alt="+/-" border="0" />&nbsp;{$CONST.TOGGLE_ALL}</a></a><br />
                </div>
            </td>
        </tr>
        {foreach $config_groups AS $config_header => $config_groupkeys}
        <tr>
            <td colspan="2">
                <h2>
                    <a style="border:0; text-decoration: none;" href="#" onClick='showConfig("el{$config_groupkeys@iteration}"); return false' title="{$CONST.TOGGLE_OPTION}"><img src="{serendipity_getFile file="img/plus.png"}" id="optionel{$config_groupkeys@iteration}" alt="+/-" border="0" />&nbsp;
                        {$config_header}
                    </a>
                </h2>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <table class="plugin_optiongroup" id="el{$config_groupkeys@iteration}" border="0" cellspacing="0" cellpadding="3" width="100%">
                {foreach $config_groupkeys AS $config_groupkey}
                    {$OUT_STACK[$config_groupkey]}
                {/foreach}
                </table>
                <script type="text/javascript" language="JavaScript">
                    document.getElementById("el{$config_groupkeys@iteration}").style.display = "none";
                </script>
            </td>
        </tr>
        {/foreach}
        <tr><td colspan="2" style="height: 100px" id="configuration_footer">&nbsp;</td></tr>
{/if} {* foreach config_groups end *}
    
{foreach $OUT_STACK_REST as $out_stack_config_item}
    {$out_stack_config_item}
{/foreach}

{if $showTable}
    </table>
<br />
{/if}
{* $serendipity_printConfigJS *}{* outsourced to templates/default/admin/admin_scripts.js - see passed vars on top *}
{if $showSubmit_foot}
    <div style="padding-left: 20px">
        <input type="submit" name="SAVECONF" value="{$CONST.SAVE}" class="serendipityPrettyButton input_button" />
    </div>
{/if}
{if $showExample}
    <div>
        {$plugin_example}
    </div>
{/if}
{if $spawnNuggets}
    {serendipity_hookPlugin hook="backend_wysiwyg_nuggets" eventData=$ev hookAll=true}
    {if ($ev['skip_nuggets'] === false)}
    <script type="text/javascript">
    function Spawnnugget() { 
    /* blar */
        {foreach $htmlnugget AS $htmlnuggetid}
        Spawnnuggets('{$htmlnuggetid}');
        {/foreach}
    }
    </script>
    {/if}
{/if}

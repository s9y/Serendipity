{if $adminAction == "install"}
    <div class="serendipityAdminMsgSuccess">
        <img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />
            {$install_template|string_format:"{$CONST.TEMPLATE_SET}"}
    </div>
{/if}

{if $deprecated}
    <div class="serendipityAdminMsgNote">
        <img style="width: 22px; height: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file='admin/img/admin_msg_note.png'}" alt="" />
        {$CONST.WARNING_TEMPLATE_DEPRECATED}
    </div>
{/if}

<h3> {$CONST.STYLE_OPTIONS} ({$cur_template})</h3>

{if $has_config}
    {if $adminAction == "configure"}
        <div class="serendipityAdminMsgSuccess">
            <img style="height: 22px; width: 22px; border: 0px; padding-right: 4px; vertical-align: middle" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />
            {$CONST.DONE}: {$save_time}
        </div>
    {/if}

    <form method="post" action="serendipity_admin.php">
        <input type="hidden" name="serendipity[adminModule]" value="templates" />
        <input type="hidden" name="serendipity[adminAction]" value="configure" />
        {$form_token}
        {$configuration}
    </form><br />
{else}
    <p>{$CONST.STYLE_OPTIONS_NONE}</p>
{/if}
<br />
<h3>{$CONST.SELECT_TEMPLATE}</h3>

{foreach $templates as $template=>$info}
    {if $info.info.engine == "yes"}
        {continue}
    {/if}
    {if !empty($template)}
    {if $template@iteration is even}
        <div class="serendipity_admin_list_item serendipity_admin_list_item_even">
    {else}
        <div class="serendipity_admin_list_item serendipity_admin_list_item_uneven">
    {/if}
    <table width="100%" id="serendipity_theme_{$template}">
        <tr>
            <td colspan="2"><span class="serendipityTemplateSelectName"><strong>{$info.info.name}</strong></span></td>
            <td valign="middle" align="center" width="70" rowspan="2">
    {if $template != $cur_template}
        {if ! $info.unmetRequirements}
            <a href="?serendipity[adminModule]=templates&amp;serendipity[adminAction]=install&amp;serendipity[theme]={$template}{$info.info.customURI}">
                <img src="{serendipity_getFile file="admin/img/install_now{$info.info.customIcon}.png"}" alt="{$CONST.SET_AS_TEMPLATE}" title="{$CONST.SET_AS_TEMPLATE}" border="0" />
            </a>
        {else}
            <span class="serendipityTemplateSelectUnmetRequirements" style="color: #cccccc">{$info.unmetRequirements}></span>
        {/if}
    {/if}
            </td>
        </tr>

        <tr>
            <td width="100" style="padding-left: 10px">
            {if $info.fullsize_preview}
                <a href="{$info.fullsize_preview}" target="_blank">
                    {if $info.preview}
                        <img src="{$info.preview}" width="100" style="border: 1px #000000 solid" />
                    {else}
                        &nbsp;
                    {/if}
                </a>
            {/if}

            </td>
            <td valign="top">
                <span class="serendipityTemplateSelectDetails">{$CONST.AUTHOR}: {$info.info.author}</span><br />
                <span class="serendipityTemplateSelectDetails">{$CONST.LAST_UPDATED}: {$info.info.date}</span><br />
                <span class="serendipityTemplateSelectDetails">{$CONST.CUSTOM_ADMIN_INTERFACE}: {$info.info.custom_admin_interface}</span><br />
            </td>
        </tr>
    </table>
    </div>
    {/if}
{/foreach}
{* HTML5: Yes *}
{* jQuery: NN *}

{if $adminAction == 'install'}
    <span class="msg_success"><span class="icon-ok-circle"></span> {$install_template|string_format:"{$CONST.TEMPLATE_SET}"}</span>
{/if}
{if $deprecated}
    <span class="msg_notice"><span class="icon-info-circle"></span> {$CONST.WARNING_TEMPLATE_DEPRECATED}</span>
{/if}
<section id="template_options">
    <h2>{$CONST.STYLE_OPTIONS} ({$cur_template})</h2>
{if $has_config}
    {if $adminAction == 'configure'}
    <span class="msg_success"><span class="icon-ok-circle"></span> {$CONST.DONE}: {$save_time}</span>
    {/if}
    <form method="post" action="serendipity_admin.php">
        <input name="serendipity[adminModule]" type="hidden" value="templates">
        <input name="serendipity[adminAction]" type="hidden" value="configure">
        {$form_token}
        {$configuration}
    </form>
{else}
    <p>{$CONST.STYLE_OPTIONS_NONE}</p>
{/if}
</section>
<section id="template_select">
    <h2>{$CONST.SELECT_TEMPLATE}</h2>

    <script src="{serendipity_getFile file='admin/js/jquery.syncheight.js'}"></script>

    <ul class="plainList clearfix">
    {foreach $templates as $template=>$info}
        {if $info.info.engine == 'yes'}{continue}{/if}
        {if !empty($template)}
        <li><article class="clearfix {cycle values="odd,even"}">
                <h3>{$info.info.name}</h3>
                <div class="clearfix equal_heights">
                {if $info.fullsize_preview || $info.preview}
                    <div class="preview_image">
                        {if $info.fullsize_preview}<a href="{$info.fullsize_preview}">{/if}
                        {if $info.preview}<img src="{$info.preview}" alt="{$CONST.PREVIEW}" >{/if}
                        {if $info.fullsize_preview}</a>{/if}
                    </div>
                {/if}
                    <details class="template_info">
                        <summary>Template info</summary> {* i18n *}

                        <dl class="clearfix">
                            <dt class="template_author">{$CONST.AUTHOR}:</dt>
                            <dd>{$info.info.author}</dd>
                            <dt class="template_date">{$CONST.LAST_UPDATED}:</dt>
                            <dd>{$info.info.date}</dd>
                            <dt class="template_admin">Admin theme:</dt> {* i18n *}
                            <dd>{$info.info.custom_admin_interface}</dd>
                        </dl>
                    </details>
                </div>

                <div class="template_status">
                {if $template != $cur_template}
                    {if !$info.unmetRequirements}
                    <a class="state_submit button_link" href="?serendipity[adminModule]=templates&amp;serendipity[adminAction]=install&amp;serendipity[theme]={$template}{$info.info.customURI}">{$CONST.SET_AS_TEMPLATE}</a>
                    {else}
                    <span class="unmet_requirements msg_error"><span class="icon-attention"></span> {$info.unmetRequirements}></span>
                    {/if}
                {else}
                    <span class="installed block_level"><span class="icon-ok-circle"></span> {$CONST.ALREADY_INSTALLED}</span>
                {/if}
                </div>
            </article>
        </li>
        {/if}
    {/foreach}
    </ul>
</section>

{if $adminAction == 'install'}
    <span class="msg_success"><span class="icon-ok-circled"></span> {$install_template|string_format:"{$CONST.TEMPLATE_SET}"}</span>
{/if}
{if $deprecated}
    <span class="msg_notice"><span class="icon-info-circled"></span> {$CONST.WARNING_TEMPLATE_DEPRECATED}</span>
{/if}

{if $adminAction == 'editConfiguration'}
    <section id="template_options">
        <h2>{$CONST.STYLE_OPTIONS} ({$cur_template})</h2>
    {if $has_config}
        {if $adminAction == 'configure'}
        <span class="msg_success"><span class="icon-ok-circled"></span> {$CONST.DONE}: {$save_time}</span>
        {/if}
        <form class="theme_options" method="post" action="serendipity_admin.php">
            <input name="serendipity[adminModule]" type="hidden" value="templates">
            <input name="serendipity[adminAction]" type="hidden" value="configure">
            {$form_token}
            {$configuration}
        </form>
    {else}
        <p>{$CONST.STYLE_OPTIONS_NONE}</p>
    {/if}
    </section>
{else}
    <section id="template_select">
        {assign var="cur_tpl" value=$templates[$cur_template]}
        <h2>Current template</h2> {* i18n *}

        <article class="clearfix current_template">
            <h3>{$cur_tpl.info.name}</h3>

            <div class="clearfix equal_heights template_wrap">
                <div class="template_preview">
                {if $cur_tpl.fullsize_preview || $cur_tpl.preview}
                    {if $cur_tpl.fullsize_preview}
                        <a href="{$cur_tpl.fullsize_preview}">
                            <img src="{$cur_tpl.fullsize_preview}" class="template_preview_img" alt="{$CONST.PREVIEW}" >
                        </a>
                    {else}
                        <img src="{$cur_tpl.preview}" alt="{$CONST.PREVIEW}" >
                    {/if}
                {/if}
                    <footer id="template_info_cur" class="template_info additional_info">
                        <dl class="clearfix">
                            <dt class="template_author">{$CONST.AUTHOR}:</dt>
                            <dd>{$cur_tpl.info.author}</dd>
                            <dt class="template_date">{$CONST.LAST_UPDATED}:</dt>
                            <dd>{$cur_tpl.info.date}</dd>
                            <dt class="template_admin">Admin theme:</dt> {* i18n *}
                            <dd>{$cur_tpl.info.custom_admin_interface}</dd>
                        </dl>
                    </footer>
                </div>
            </div>

            <a class="template_show_info button_link" href="#template_info_cur" title="Show template info" rel="tooltip"><span class="icon-info-circled"></span><span class="visuallyhidden"> Show template info</span></a>

             <a class="button_link" href="?serendipity[adminModule]=templates&amp;serendipity[adminAction]=editConfiguration" title="{$CONST.CONFIGURATION}" rel="tooltip"><span class="icon-cog-alt"></span><span class="visuallyhidden"> {$CONST.CONFIGURATION}</span></a>
        </article>

        <h2>{$CONST.SELECT_TEMPLATE}</h2>

        <ul class="plainList clearfix">
        {foreach $templates as $template=>$info}
            {if $info.info.engine == 'yes' || $template == $cur_template}{continue}{/if}
            {if !empty($template)}
            <li><article class="clearfix {cycle values="odd,even"}">
                    <h3>{$info.info.name}</h3>
                    <div class="clearfix equal_heights template_wrap">
                        <div class="template_preview">
                        {if $info.fullsize_preview || $info.preview}
                            {if $info.fullsize_preview}
                                <a href="{$info.fullsize_preview}">
                                    <img src="{$info.fullsize_preview}" class="template_preview_img" alt="{$CONST.PREVIEW}" >
                                </a>
                            {else}
                                <img src="{$info.preview}" alt="{$CONST.PREVIEW}" >
                            {/if}
                        {/if}
                            <footer id="template_info_{$info@key}" class="template_info additional_info">
                                <dl class="clearfix">
                                    <dt class="template_author">{$CONST.AUTHOR}:</dt>
                                    <dd>{$info.info.author}</dd>
                                    <dt class="template_date">{$CONST.LAST_UPDATED}:</dt>
                                    <dd>{$info.info.date}</dd>
                                    <dt class="template_admin">Admin theme:</dt> {* i18n *}
                                    <dd>{if $info.info.custom_admin_interface} {$info.info.custom_admin_interface} {else} {$CONST.NO} {/if}</dd>
                                </dl>
                            </footer>
                        </div>
                    </div>

                    <a class="template_show_info button_link" href="#template_info_{$info@key}" title="Show template info" rel="tooltip"><span class="icon-info-circled"></span><span class="visuallyhidden"> Show template info</span></a>

                {if !$info.unmetRequirements}
                    <a class="button_link" href="?serendipity[adminModule]=templates&amp;serendipity[adminAction]=install&amp;serendipity[theme]={$template}{$info.info.customURI}" title="{$CONST.SET_AS_TEMPLATE}" rel="tooltip"><span class="icon-download"></span><span class="visuallyhidden"> {$CONST.SET_AS_TEMPLATE}</span></a>
                {else}
                    <span class="unmet_requirements msg_error"><span class="icon-attention-circled"></span> {$info.unmetRequirements}></span>
                {/if}
                </article>
            </li>
            {/if}
        {/foreach}
        </ul>
    </section>

    <script src="{serendipity_getFile file='admin/js/jquery.syncheight.js'}"></script>
{/if}

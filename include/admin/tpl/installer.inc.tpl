{* From configuration to install *}
{if $is_errors && is_array($errors)}

    {foreach $errors AS $error}
<div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_error.png'}" alt="" />{$error}</div>
    {/foreach}

{/if}

{if $getstepint0}

{$CONST.WELCOME_TO_INSTALLATION}.
<br />{$CONST.FIRST_WE_TAKE_A_LOOK}.
<br />{$print_ERRORS_ARE_DISPLAYED_IN}.
<br />
<br>
<div align="center">- {$CONST.PRE_INSTALLATION_REPORT|sprintf:$s9yversion} -</div><br />

    <div align="center">
    <table class="serendipity_admin_list_item serendipity_admin_list_item_even" width="90%" align="center">
        <tr>
            <td colspan="2" style="font-weight: bold">{$CONST.INTEGRITY}</td>
        </tr>
        {foreach $installerResultDiagnose_CHECKSUMS AS $cksum}
        <tr>
            <td colspan="2">{$cksum}</td>
        </tr>
        {/foreach} 
    </table>

    <table class="serendipity_admin_list_item serendipity_admin_list_item_even" width="90%" align="center">
        <tr>
            <td colspan="2" style="font-weight: bold">{$CONST.PHP_INSTALLATION}</td>
        </tr>
        <tr>
            <td>{$CONST.OPERATING_SYSTEM}</td>
            <td>{$php_uname}</td>
        </tr>
        <tr>
            <td>{$CONST.WEBSERVER_SAPI}</td>
            <td>{$php_sapi_name}</td>
        </tr>
        <tr>
            <td>PHP version >= 5.2.6</td>
            <td width="200">{$installerResultDiagnose_VERSION}</td>
        </tr>
        <tr>
            <td>Database extensions</td>
            <td width="200">{$installerResultDiagnose_DBTYPE}</td>
        </tr>
        <tr>
            <td>Session extension</td>
            <td width="200">{$installerResultDiagnose_SESSION}</td>
        </tr>
        <tr>
            <td>PCRE extension</td>
            <td width="200">{$installerResultDiagnose_PCRE}</td>
        </tr>
        <tr>
            <td>GDlib extension</td>
            <td width="200">{$installerResultDiagnose_GD}</td>
        </tr>
        <tr>
            <td>OpenSSL extension</td>
            <td>{$installerResultDiagnose_OPENSSL}</td>
        </tr>
        <tr>
            <td>mbstring extension</td>
            <td width="200">{$installerResultDiagnose_MBSTR}</td>
        </tr>
        <tr>
            <td>iconv extension</td>
            <td width="200">{$installerResultDiagnose_ICONV}</td>
        </tr>
        <tr>
            <td>zlib extension</td>
            <td width="200">{$installerResultDiagnose_ZLIB}</td>
        </tr>
        <tr>
            <td>Imagemagick binary </td>
            <td>{$installerResultDiagnose_IM}</td>
        </tr>
    </table>
    <br />
    <table class="serendipity_admin_list_item serendipity_admin_list_item_even" width="90%" align="center">
        <tr>
            <td colspan="3" style="font-weight: bold">{$CONST.PHPINI_CONFIGURATION}</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td width="150"><em>{$CONST.RECOMMENDED}</em></td>
            <td width="150"><em>{$CONST.ACTUAL}</em></td>
        </tr>
        <tr>
            <td>safe_mode</td>
            <td width="150"><strong>OFF</strong></td>
            <td width="150">{$installerResultDiagnose_SSM}</td>
        </tr>
        <tr>
            <td>register_globals</td>
            <td width="150"><strong>OFF</strong></td>
            <td width="150">{$installerResultDiagnose_SRG}</td>
        </tr>
        <tr>
            <td>magic_quotes_gpc</td>
            <td width="150"><strong>OFF</strong></td>
            <td width="150">{$installerResultDiagnose_SMQG}</td>
        </tr>
        <tr>
            <td>magic_quotes_runtime</td>
            <td width="150"><strong>OFF</strong></td>
            <td width="150">{$installerResultDiagnose_SMQR}</td>
        </tr>
        <tr>
            <td>session.use_trans_sid</td>
            <td width="150"><strong>OFF</strong></td>
            <td width="150">{$installerResultDiagnose_SSUTS}</td>
        </tr>
        <tr>
            <td>allow_url_fopen</td>
            <td width="150"><strong>ON</strong></td>
            <td width="150">{$installerResultDiagnose_SAUF}</td>
        </tr>
        <tr>
            <td>file_uploads</td>
            <td width="150"><strong>ON</strong></td>
            <td width="150">{$installerResultDiagnose_SFU}</td>
        </tr>
        <tr>
            <td>post_max_size</td>
            <td width="150"><strong>10M</strong></td>
            <td width="150">{$installerResultDiagnose_SPMS}</td>
        </tr>
        <tr>
            <td>upload_max_filesize</td>
            <td width="150"><strong>10M</strong></td>
            <td width="150">{$installerResultDiagnose_SUMF}</td>
        </tr>
        <tr>
            <td>memory_limit</td>
            <td width="150"><strong>{($CONST.PHP_INT_SIZE == 4) ? '8M' : '16M'}</strong></td>
            <td width="150">{$installerResultDiagnose_SML}</td>
        </tr>
    </table>
    <br />
    <table class="serendipity_admin_list_item serendipity_admin_list_item_even" width="90%" align="center">
        <tr>
            <td colspan="2" style="font-weight: bold">{$CONST.PERMISSIONS}</td>
        </tr>
        <tr>
            <td style="vertical-align: top">{$basedir}</td>
            <td width="200">
            {foreach $installerResultDiagnose_WRITABLE AS $fwrite}
                {$fwrite}
            {/foreach} 
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top">{$basedir}{$CONST.PATH_SMARTY_COMPILE}</td>
            <td width="200">
            {foreach $installerResultDiagnose_COMPILE AS $compile}
                {$compile}
            {/foreach} 
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top">{$basedir}archives/</td>
            <td width="200">
            {foreach $installerResultDiagnose_ARCHIVES AS $archives}
                {$archives}
            {/foreach} 
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top">{$basedir}plugins/</td>
            <td width="200">
            {foreach $installerResultDiagnose_PLUGINS AS $plugins}
                {$plugins}
            {/foreach} 
            </td>
        </tr>

        {if $is_dir_uploads}
        <tr>
            <td style="vertical-align: top">{$basedir}uploads/</td>
            <td width="200">
            {foreach $installerResultDiagnose_UPLOADS AS $uploads}
                {$uploads}
            {/foreach} 
            </td>
        </tr>
        {/if}

        {if $is_imb_executable}
        <tr>
            <td style="vertical-align: top">Execute Imagemagick  binary </td>
            <td>
            {foreach $installerResultDiagnose_IMB AS $im_binary}
                {$im_binary}
            {/foreach}
            </td>
        </tr>
        {/if}
    </table>

    {if $showWritableNote}
    <div class="serendipityAdminMsgNote msg_notice"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_note.png'}" alt="" />{$CONST.PROBLEM_PERMISSIONS_HOWTO|sprintf:'chmod 1777'}</div>
    {/if}

    <div align="center">
    {if $errorCount > 0}
        <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_error.png'}" alt="" />{$CONST.PROBLEM_DIAGNOSTIC}</div>
        <h2><a href="serendipity_admin.php">{$CONST.RECHECK_INSTALLATION}</a></h2>
    {else}
        {$CONST.SELECT_INSTALLATION_TYPE}:
        <h2><a href="?serendipity[step]=2a">{$CONST.SIMPLE_INSTALLATION}</a> - <a href="?serendipity[step]=2b">{$CONST.EXPERT_INSTALLATION}</a></h2>
    {/if}
    </div>

</div> <!-- // div end -->

{elseif $s9yGETstep == '2a'}
<form action="?" method="post">
    <input type="hidden" name="serendipity[step]" value="{$s9yGETstep}">
    <input type="hidden" name="serendipity[getstep]" value="3">
    {if $ob_serendipity_printConfigTemplate}{$ob_serendipity_printConfigTemplate}{/if}
    <div align="center"><input name="submit" type="submit" value="{$CONST.COMPLETE_INSTALLATION}" class="serendipityPrettyButton input_button"></div>
</form>

{elseif $s9yGETstep == '2b'}
<form action="?" method="post">
    <input type="hidden" name="serendipity[step]" value="{$s9yGETstep}">
    <input type="hidden" name="serendipity[getstep]" value="3">
    {if $ob_serendipity_printConfigTemplate}{$ob_serendipity_printConfigTemplate}{/if}
    <div align="center"><input name="submit" type="submit" value="{$CONST.COMPLETE_INSTALLATION}" class="serendipityPrettyButton input_button"></div>
</form>

{elseif $getstepint3}

{$CONST.CHECK_DATABASE_EXISTS}&hellip;
{if is_array($authors_query)}
    <strong>{$CONST.THEY_DO}</strong>, {$CONST.WONT_INSTALL_DB_AGAIN}
    <br />
    <br />
{else}
    <strong>{$CONST.THEY_DONT}</strong>
    <br />

    {$CONST.CREATE_DATABASE}
    {if $install_DB}
    <strong>{$CONST.DONE}</strong><br />
    {/if}

    {$CONST.CREATING_PRIMARY_AUTHOR|sprintf:"{$smarty.post.user|escape}"}&hellip;
    {if $add_authors}
    <strong>{$CONST.DONE}</strong><br />
    {/if}

    {$CONST.SETTING_DEFAULT_TEMPLATE}&hellip;
    {if $set_template_vars}
    <strong>{$CONST.DONE}</strong><br />
    {/if}

    {$CONST.INSTALLING_DEFAULT_PLUGINS}&hellip;
    {if $register_default_plugins}
    <strong>{$CONST.DONE}</strong><br />
    {/if}

{/if}

{$CONST.ATTEMPT_WRITE_FILE|sprintf:'.htaccess'}&hellip;
{if $errors_sif === true}
    <strong>{$CONST.DONE}</strong><br />
{else}
    <strong>{$CONST.FAILED}</strong><br />
    {foreach $errors_sif AS $error_f}
    <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_error.png'}" alt="" />{$error_f}</div>
    {/foreach}
{/if}

{if $s9y_installed}
    <div class="serendipityAdminMsgSuccess msg_success"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_success.png'}" alt="" />{$CONST.SERENDIPITY_INSTALLED}</div>
    <div align="center" style="font-size: large"><a href="{$smarty.post.serendipityHTTPPath}">{$CONST.VISIT_BLOG_HERE}</a></div>
    <div align="center">{$CONST.THANK_YOU_FOR_CHOOSING}</div>
{else}
    <div class="serendipityAdminMsgError msg_error"><img class="img_error" src="{serendipity_getFile file='admin/img/admin_msg_error.png'}" alt="" />{$CONST.ERROR_DETECTED_IN_INSTALL}</div>
{/if}

{/if}{* getstepint3 end *}

<!doctype html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="{$lang}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{$lang}"> <!--<![endif]-->
<head>
    <meta charset="{$CONST.LANG_CHARSET}">
    <title>{$CONST.SERENDIPITY_ADMIN_SUITE}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{serendipity_getFile file='admin/style.css'}">
<!--[if lte IE 8]>
    <link rel="stylesheet" href="{serendipity_getFile file='admin/oldie.css'}">
<![endif]-->
    <script src="{serendipity_getFile file='admin/js/modernizr.min.js'}"></script>
    <script src="templates/jquery.js"></script>
    <script src="{serendipity_getFile file='admin/js/plugins.js'}"></script>
    <script src="templates/default/admin/serendipity_editor.js"></script>
</head>
<body id="serendipity_admin_page">
    <header id="top">
        <div class="clearfix">
            <div id="banner_install">
                <h1>{$CONST.SERENDIPITY_INSTALLATION}</h1>
            </div>
        </div>
    </header>

    <main class="clearfix serendipityAdminContent installer">
        <div id="content" class="clearfix">
        {if isset($is_errors) && $is_errors && is_array($errors)}
            <ul class="plainList">
            {foreach $errors AS $error}
                <li><span class="msg_error">{$error}</span></li>
            {/foreach}
            </ul>
        {/if}
        {if $getstepint0|default:false}
            <h2>{$CONST.WELCOME_TO_INSTALLATION}</h2>

            <p>{$CONST.FIRST_WE_TAKE_A_LOOK}</p>

            <p>{$print_ERRORS_ARE_DISPLAYED_IN}</p>

            <h3>{$CONST.PRE_INSTALLATION_REPORT|sprintf:$s9yversion}</h3>

            <div id="diagnose">
                <h4>{$CONST.INTEGRITY}</h4>

                <ul class="plainList">
                {foreach $installerResultDiagnose_CHECKSUMS AS $cksum}
                    <li>{$cksum}</li>
                {/foreach}
                </ul>

                <table>
                    <caption>{$CONST.PHP_INSTALLATION}</caption>
                    <thead>
                        <tr>
                            <th>{$CONST.INSTALLER_KEY}</th>
                            <th>{$CONST.INSTALLER_VALUE}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{$CONST.OPERATING_SYSTEM}</td>
                            <td><span class="msg_hint">{$php_uname}</span></td>
                        </tr>
                        <tr>
                            <td>{$CONST.WEBSERVER_SAPI}</td>
                            <td><span class="msg_hint">{$php_sapi_name}</span></td>
                        </tr>
                        <tr>
                            <td>PHP version >= 7.0</td>
                            <td>{$installerResultDiagnose_VERSION}</td>
                        </tr>
                        <tr>
                            <td>Database extensions</td>
                            <td>{$installerResultDiagnose_DBTYPE}</td>
                        </tr>
                        <tr>
                            <td>Session extension</td>
                            <td>{$installerResultDiagnose_SESSION}</td>
                        </tr>
                        <tr>
                            <td>PCRE extension</td>
                            <td>{$installerResultDiagnose_PCRE}</td>
                        </tr>
                        <tr>
                            <td>GDlib extension</td>
                            <td>{$installerResultDiagnose_GD}</td>
                        </tr>
                        <tr>
                            <td>OpenSSL extension</td>
                            <td>{$installerResultDiagnose_OPENSSL}</td>
                        </tr>
                        <tr>
                            <td>mbstring extension</td>
                            <td>{$installerResultDiagnose_MBSTR}</td>
                        </tr>
                        <tr>
                            <td>xml extension</td>
                            <td>{$installerResultDiagnose_XML}</td>
                        </tr>
                        <tr>
                            <td>iconv extension</td>
                            <td>{$installerResultDiagnose_ICONV}</td>
                        </tr>
                        <tr>
                            <td>zlib extension</td>
                            <td>{$installerResultDiagnose_ZLIB}</td>
                        </tr>
                        <tr>
                            <td>Imagemagick binary </td>
                            <td>{$installerResultDiagnose_IM}</td>
                        </tr>
                    </tbody>
                </table>

                <table>
                    <caption>{$CONST.PHPINI_CONFIGURATION}</caption>
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>{$CONST.RECOMMENDED}</th>
                            <th>{$CONST.ACTUAL}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>safe_mode</td>
                            <td><strong>OFF</strong></td>
                            <td>{$installerResultDiagnose_SSM}</td>
                        </tr>
                        <tr>
                            <td>register_globals</td>
                            <td><strong>OFF</strong></td>
                            <td>{$installerResultDiagnose_SRG}</td>
                        </tr>
                        <tr>
                            <td>magic_quotes_gpc</td>
                            <td><strong>OFF</strong></td>
                            <td>{$installerResultDiagnose_SMQG}</td>
                        </tr>
                        <tr>
                            <td>magic_quotes_runtime</td>
                            <td><strong>OFF</strong></td>
                            <td>{$installerResultDiagnose_SMQR}</td>
                        </tr>
                        <tr>
                            <td>session.use_trans_sid</td>
                            <td><strong>OFF</strong></td>
                            <td>{$installerResultDiagnose_SSUTS}</td>
                        </tr>
                        <tr>
                            <td>allow_url_fopen</td>
                            <td><strong>ON</strong></td>
                            <td>{$installerResultDiagnose_SAUF}</td>
                        </tr>
                        <tr>
                            <td>file_uploads</td>
                            <td><strong>ON</strong></td>
                            <td>{$installerResultDiagnose_SFU}</td>
                        </tr>
                        <tr>
                            <td>post_max_size</td>
                            <td><strong>10M</strong></td>
                            <td>{$installerResultDiagnose_SPMS}</td>
                        </tr>
                        <tr>
                            <td>upload_max_filesize</td>
                            <td><strong>10M</strong></td>
                            <td>{$installerResultDiagnose_SUMF}</td>
                        </tr>
                        <tr>
                            <td>memory_limit</td>
                            <td><strong>{($CONST.PHP_INT_SIZE == 4) ? '8M' : '16M'}</strong></td>
                            <td>{$installerResultDiagnose_SML}</td>
                        </tr>
                    </tbody>
                </table>

                <table>
                    <caption>{$CONST.PERMISSIONS}</caption>
                    <thead>
                        <tr>
                            <th>{$CONST.FILTER_DIRECTORY}</th>
                            <th>{$CONST.PERMISSIONS}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h5>{$basedir}</h5></td>
                            <td>{$installerResultDiagnose_BASE_WRITABLE}</td>
                        </tr>
                        <tr>
                            <td><h5>{$basedir}{$CONST.PATH_SMARTY_COMPILE}</h5></td>
                            <td>{$installerResultDiagnose_COMPILE}</td>
                        </tr>
                        <tr>
                            <td><h5>{$basedir}archives/</h5></td>
                            <td>{$installerResultDiagnose_ARCHIVES}</td>
                        </tr>
                        <tr>
                            <td><h5>{$basedir}plugins</h5></td>
                            <td>{$installerResultDiagnose_PLUGINS}</td>
                        </tr>
                        {if $is_dir_uploads}
                            <tr>
                                <td><h5>{$basedir}uploads/</h5></td>
                                <td>{$installerResultDiagnose_UPLOADS}</td>
                            </tr>
                        {/if}
                    </tbody>
                </table>
                {if $showWritableNote}
                    <span class="msg_notice">{$CONST.PROBLEM_PERMISSIONS_HOWTO|sprintf:'chmod 1777'}</span>
                {/if}

                <table>
                    <caption>{$CONST.INSTALLER_CLI_TOOLS}</caption>
                    <thead>
                        <tr>
                            <th>{$CONST.INSTALLER_CLI_TOOLNAME}</th>
                            <th>{$CONST.INSTALLER_CLI_TOOLSTATUS}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h5>Execute Imagemagick binary</h5></td>
                            <td>{$installerResultDiagnose_IMB}</td>
                        </tr>

                    </tbody>
                </table>

            {if $errorCount > 0}
                <hr />
                <span class="msg_error">{$CONST.PROBLEM_DIAGNOSTIC}</span>
                <div class="form_buttons">
                    <a class="block_level" href="serendipity_admin.php">{$CONST.RECHECK_INSTALLATION}</a>
                </div>
            {else}
                <p><strong>{$CONST.SELECT_INSTALLATION_TYPE}:</strong></p>

                <div class="form_buttons">
                    <a class="button_link state_submit" href="?serendipity[step]=2a">{$CONST.SIMPLE_INSTALLATION}</a>
                    <a class="button_link state_submit" href="?serendipity[step]=2b">{$CONST.EXPERT_INSTALLATION}</a>
                </div>
            {/if}
            </div>
        {elseif $s9yGETstep == '2a'}
            <form action="?" method="post">
                <input name="serendipity[step]" type="hidden" value="{$s9yGETstep}">
                <input name="serendipity[getstep]" type="hidden" value="3">
                {if $ob_serendipity_printConfigTemplate}{$ob_serendipity_printConfigTemplate}{/if}
                <input name="submit" type="submit" value="{$CONST.COMPLETE_INSTALLATION}">
            </form>
        {elseif $s9yGETstep == '2b'}
            <form action="?" method="post">
                <input name="serendipity[step]" type="hidden" value="{$s9yGETstep}">
                <input name="serendipity[getstep]" type="hidden" value="3">
                {if $ob_serendipity_printConfigTemplate}{$ob_serendipity_printConfigTemplate}{/if}
                <input name="submit" type="submit" value="{$CONST.COMPLETE_INSTALLATION}">
            </form>
        {elseif $s9yGETstep == '3'}
            <h3>{$CONST.CHECK_DATABASE_EXISTS}</h3>
            {if is_array($authors_query|default:null)}
            <span class="msg_success"><strong>{$CONST.THEY_DO}</strong>, {$CONST.WONT_INSTALL_DB_AGAIN}</span>
            {else}
            <span class="msg_success"><strong>{$CONST.THEY_DONT}</strong></span>

            <ol>
                <li>{$CONST.CREATE_DATABASE}{if $install_DB} <strong>{$CONST.DONE}</strong>{/if}</li>
                <li>{$CONST.CREATING_PRIMARY_AUTHOR|sprintf:"{$smarty.post.user|escape}"}{if $add_authors} <strong>{$CONST.DONE}</strong>{/if}</li>
                <li>{$CONST.SETTING_DEFAULT_TEMPLATE}{if $set_template_vars} <strong>{$CONST.DONE}</strong>{/if}</li>
                <li>{$CONST.INSTALLING_DEFAULT_PLUGINS}{if $register_default_plugins} <strong>{$CONST.DONE}</strong>{/if}</li>
            </ol>
            {/if}
            <h3>{$CONST.ATTEMPT_WRITE_FILE|sprintf:'.htaccess'}</h3>
            {if $errors_sif === true}
            <span class="msg_success">{$CONST.DONE}</span>
            {else}
            <h4>{$CONST.FAILED}</h4>

            <ul class="plainList">
            {foreach $errors_sif AS $error_f}
                <li><span class="msg_error">{$error_f}</span></li>
            {/foreach}
            </ul>
            {/if}
            {if $s9y_installed}
            <span class="msg_success">{$CONST.SERENDIPITY_INSTALLED}</span>

            <p><strong>{$CONST.THANK_YOU_FOR_CHOOSING}</strong></p>

            <a class="button_link state_submit" href="{$smarty.post.serendipityHTTPPath}">{$CONST.VISIT_BLOG_HERE}</a>
            {else}
            <span class="msg_error">{$CONST.ERROR_DETECTED_IN_INSTALL}</span>
            {/if}
        {/if}
        </div>
    </main>
    <footer id="meta">
        <p>{$CONST.ADMIN_FOOTER_POWERED_BY|sprintf:$versionInstalled:$phpversion}</p>
    </footer>
</body>
</html>

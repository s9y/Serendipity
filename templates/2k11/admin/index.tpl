{* HTML5: Yes *}
{* jQuery: No *}

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{$lang}"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="{$lang}"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="{$lang}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{$lang}"> <!--<![endif]-->
<head>
    <meta charset="{$CONST.LANG_CHARSET}">
    <title>{if $admin_vars.title}{$admin_vars.title} | {/if}{$CONST.SERENDIPITY_ADMIN_SUITE}</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{$admin_vars.css_file}">
    <link rel="stylesheet" href="{$admin_vars.admin_css_file}">
    <script src="{serendipity_getFile file='admin/js/modernizr-2.6.2.min.js'}"></script>
    <script src="{serendipity_getFile file='admin/header_spawn.js'}"></script>
{if $admin_vars.admin_installed}
    {serendipity_hookPlugin hook="backend_header" hookAll="true"}
{/if}
</head>
<body id="serendipity_admin_page" onload="spawn()">
{if NOT $admin_vars.no_banner}
    <header id="top">
        <div class="clearfix">
        {if $admin_vars.admin_installed}
            <div id="banner">
                <h1><span class="visuallyhidden">{$CONST.SERENDIPITY_ADMIN_SUITE}: </span>{$blogTitle}</h1>
                {if $admin_vars.is_logged_in}
                <a class="icon_link" href="{$serendipityBaseURL}" title="{$CONST.BACK_TO_BLOG}"><span class="icon-link-ext"></span><span class="visuallyhidden"> {$CONST.BACK_TO_BLOG}</span></a>
                {/if}
            {else}
                <h1>{$CONST.SERENDIPITY_INSTALLATION}</h1>
            {/if}
            </div>
        {if $admin_vars.is_logged_in}
            <nav id="user_menu">
                <h2>{$admin_vars.self_info}</h2>

                <ul>
                    <li><a class="icon_link" href="serendipity_admin.php?serendipity[adminModule]=logout" title="{$CONST.LOGOUT}"><span class="icon-off"></span><span class="visuallyhidden"> {$CONST.LOGOUT}</span></a></li>
                    <li><a class="icon_link" href="serendipity_admin.php" title="{$CONST.ADMIN_FRONTPAGE}"><span class="icon-home"></span><span class="visuallyhidden"> {$CONST.ADMIN_FRONTPAGE}</span></a></li>
                {if 'personalConfiguration'|checkPermission}
                    <li><a class="icon_link" href="serendipity_admin.php?serendipity[adminModule]=personal" title="{$CONST.PERSONAL_SETTINGS}"><span class="icon-cog-alt"></span><span class="visuallyhidden"> {$CONST.PERSONAL_SETTINGS}</span></a></li>
                {/if}
                </ul>
            </nav>
        {/if}
        </div>
    </header>
{/if}
    <div id="main" class="clearfix">
    {if NOT $admin_vars.is_logged_in}
        {$admin_vars.out|@serendipity_refhookPlugin:'backend_login_page'}
        {* <div id="login_container"> *}
            {* <h2>{$CONST.WELCOME_TO_ADMIN}</h2> *}
            {$admin_vars.out.header}
        {if $admin_vars.post_action != '' AND NOT $admin_vars.is_logged_in}
            <span class="msg_error">{$CONST.WRONG_USERNAME_OR_PASSWORD}</span>
        {/if}
            <form id="login" class="clearfix" action="serendipity_admin.php" method="post">
                <input type="hidden" name="serendipity[action]" value="admin">
                <fieldset>
                    <legend class="visuallyhidden"><span>{$CONST.PLEASE_ENTER_CREDENTIALS}</span></legend>

                    <div class="form_field">
                        <label for="login_uid">{$CONST.USERNAME}</label>
                        <input id="login_uid" name="serendipity[user]" type="text">
                    </div>

                    <div class="form_field">
                        <label for="login_pwd">{$CONST.PASSWORD}</label>
                        <input id="login_pwd" name="serendipity[pass]" type="password">
                    </div>

                    <div class="form_check">
                        <input id="login_auto" name="serendipity[auto]" type="checkbox"><label for="login_auto">{$CONST.AUTOMATIC_LOGIN}</label>
                    </div>

                    <input id="login_send" name="submit" type="submit" value="{$CONST.LOGIN}">
                </fieldset>
                {$admin_vars.out.table}
            </form>
            <a id="back_to_blog" href="{$serendipityBaseURL}">{$CONST.BACK_TO_BLOG}</a>
            {$admin_vars.out.footer}
        {* </div> *}
    {else}
        <div id="content" class="clearfix">
        {$admin_vars.main_content}
        </div>
        {if NOT $admin_vars.no_sidebar}
        <nav id="main_menu">
            <h2 class="visuallyhidden">Main menu</h2> {* i18n *}

            <ul>
                {if 'adminEntries'|checkPermission OR 'adminEntriesPlugins'|checkPermission}
                <li><h3>{$CONST.ADMIN_ENTRIES}</h3>
                    <ul>
                    {if 'adminEntries'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=entries&amp;serendipity[adminAction]=new">{$CONST.NEW_ENTRY}</a></li>
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=entries&amp;serendipity[adminAction]=editSelect">{$CONST.EDIT_ENTRIES}</a></li>
                    {/if}
                    {if 'adminComments'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=comments">{$CONST.COMMENTS}</a></li>
                    {/if}
                    {if 'adminCategories'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=category&amp;serendipity[adminAction]=view">{$CONST.CATEGORIES}</a></li>
                    {/if}
                    {if 'adminEntries'|checkPermission OR 'adminEntriesPlugins'|checkPermission}
                        {if $admin_vars.no_create !== true}
                        {serendipity_hookPlugin hook="backend_sidebar_entries" hookAll="true"}
                        {/if}
                    {/if}
                    </ul>
                </li>
                {/if}
                {if 'adminImages'|checkPermission}
                <li><h3>{$CONST.MEDIA}</h3>
                    <ul>
                    {if 'adminImagesAdd'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=addSelect">{$CONST.ADD_MEDIA}</a></li>
                    {/if}
                    {if 'adminImagesView'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=media">{$CONST.MEDIA_LIBRARY}</a></li>
                    {/if}
                    {if 'adminImagesDirectories'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=directorySelect">{$CONST.MANAGE_DIRECTORIES}</a></li>
                    {/if}
                    {if 'adminImagesSync'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=sync" onclick="return confirm('{$CONST.WARNING_THIS_BLAHBLAH}');">{$CONST.CREATE_THUMBS}</a></li>
                    {/if}
                    {if $admin_vars.no_create !== true}
                        {serendipity_hookPlugin hook="backend_sidebar_entries_images" hookAll="true"}
                    {/if}
                    </ul>
                </li>
                {/if}
                {if 'adminTemplates'|checkPermission OR 'adminPlugins'|checkPermission}
                <li><h3>{$CONST.APPEARANCE}</h3>
                    <ul>
                    {if 'adminTemplates'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=templates">{$CONST.MANAGE_STYLES}</a></li>
                    {/if}
                    {if 'adminPlugins'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=plugins">{$CONST.CONFIGURE_PLUGINS}</a></li>
                    {/if}
                    {if $admin_vars.no_create !== true}
                        {serendipity_hookPlugin hook="backend_sidebar_admin_appearance" hookAll="true"}
                    {/if}
                    </ul>
                </li>
                {/if}
                {if 'adminUsersGroups'|checkPermission OR 'adminImport'|checkPermission OR 'siteConfiguration'|checkPermission OR 'blogConfiguration'|checkPermission OR 'adminUsers'|checkPermission}
                <li><h3>{$CONST.ADMIN}</h3>
                    <ul>
                    {if 'siteConfiguration'|checkPermission OR 'blogConfiguration'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=configuration">{$CONST.CONFIGURATION}</a></li>
                    {/if}
                    {if 'adminUsers'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=users">{$CONST.MANAGE_USERS}</a></li>
                    {/if}
                    {if 'adminUsersGroups'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=groups">{$CONST.MANAGE_GROUPS}</a></li>
                    {/if}
                    {if 'adminImport'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=import">{$CONST.IMPORT_ENTRIES}</a></li>
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=export">{$CONST.EXPORT_ENTRIES}</a></li>
                    {/if}
                    {if 'siteConfiguration'|checkPermission || 'blogConfiguration'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=integrity">{$CONST.INTEGRITY}</a></li>
                    {/if}
                    {if $admin_vars.no_create !== true}
                        {serendipity_hookPlugin hook="backend_sidebar_admin" hookAll="true"}
                    {/if}
                    </ul>
                </li>
                {/if}
            </ul>
        </nav>
        {/if}
    {/if}
    </div>
{if NOT $admin_vars.no_footer}
    <footer id="meta">
        <small>{$admin_vars.version_info}</small>
    </footer>
{/if}
    <script src="{serendipity_getFile file='admin/js/2k11.admin.js'}"></script>
</body>
</html>

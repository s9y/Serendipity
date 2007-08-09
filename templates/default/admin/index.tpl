<html>
    <head>
<!-- ADMIN-ENTRY TEMPLATE: index.tpl START -->
        <title>{$CONST.SERENDIPITY_ADMIN_SUITE}</title>
        <meta http-equiv="Content-Type" content="text/html; charset={$CONST.LANG_CHARSET}" />
        <link rel="stylesheet" type="text/css" href="{$admin_vars.css_file}" />
        <link rel="stylesheet" type="text/css" href="{$admin_vars.admin_css_file}" />

        <script type="text/javascript">
        {literal}
        function spawn() {
            if (self.Spawnextended) {
                Spawnextended();
            }

            if (self.Spawnbody) {
                Spawnbody();
            }

            if (self.Spawnnugget) {
                Spawnnugget();
            }
        }

        function SetCookie(name, value) {
            var today  = new Date();
            var expire = new Date();
            expire.setTime(today.getTime() + (60*60*24*30));
            document.cookie = 'serendipity[' + name + ']='+escape(value) + ';expires=' + expire.toGMTString();
        }

        function addLoadEvent(func) {
          var oldonload = window.onload;
          if (typeof window.onload != 'function') {
            window.onload = func;
          } else {
            window.onload = function() {
              oldonload();
              func();
            }
          }
        }
        {/literal}

        </script>
    {if $admin_vars.admin_installed}
        {serendipity_hookPlugin hook="backend_header" hookAll="true"}
    {/if}
    </head>

    <body id="serendipity_admin_page" onload="spawn()">
        <table cellspacing="0" cellpadding="0" border="0" id="serendipityAdminFrame">

{*** BANNER START ***}
        {if NOT $admin_vars.no_banner}
            <tr>
                <td colspan="2" id="serendipityAdminBanner">
                {if $admin_vars.admin_installed}
                    <h1>{$CONST.SERENDIPITY_ADMIN_SUITE}</h1>
                    <h2>{$blogTitle}</h2>
                {else}
                    <h1>{$CONST.SERENDIPITY_INSTALLATION}</h1>
                {/if}
                </td>
            </tr>
            <tr>
                <td colspan="2" id="serendipityAdminInfopane">
                    {if $admin_vars.is_logged_in}
                        <span>{$admin_vars.self_info}</span>
                    {/if}
                </td>
            </tr>
        {/if}
{*** BANNER END ***}

            <tr valign="top">
{if NOT $admin_vars.is_logged_in}
{*** LOGIN-AREA START ***}

    {$admin_vars.out|@serendipity_refhookPlugin:'backend_login_page'}
                <td colspan="2" class="serendipityAdminContent">
                    <div id="serendipityAdminWelcome" align="center">
                        <h2>{$CONST.WELCOME_TO_ADMIN}</h2>
                        <h3>{$CONST.PLEASE_ENTER_CREDENTIALS}</h3>
                        {$admin_vars.out.header}
                    </div>
                    {if $admin_vars.post_action != '' AND NOT $admin_vars.is_logged_in}
                        <div class="serendipityAdminMsgError"><img width="22px" height="22px" style="border: 0px; padding-right: 2px; vertical-align: middle" src="{serendipity_getFile file='admin/img/admin_msg_error.png'}" alt="" />{$CONST.WRONG_USERNAME_OR_PASSWORD}</div>
                    {/if}
                    <form action="serendipity_admin.php" method="post">
                        <input type="hidden" name="serendipity[action]" value="admin" />
                        <table id="serendipityAdminCredentials" cellspacing="10" cellpadding="0" border="0" align="center">
                            <tr>
                                <td>{$CONST.USERNAME}</td>
                                <td><input class="input_textbox" type="text" name="serendipity[user]" /></td>
                            </tr>
                            <tr>
                                <td>{$CONST.PASSWORD}</td>
                                <td><input class="input_textbox" type="password" name="serendipity[pass]" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input class="input_checkbox" id="autologin" type="checkbox" name="serendipity[auto]" /><label for="autologin"> {$CONST.AUTOMATIC_LOGIN}</label></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><input type="submit" name="submit" value="{$CONST.LOGIN} &gt;" class="input_button serendipityPrettyButton" /></td>
                            </tr>
                            {$admin_vars.out.table}
                        </table>
                    </form>
                    {$admin_vars.out.footer}
                    <p id="serendipityBackToBlog"><a href="{$serendipityHTTPPath}">{$CONST.BACK_TO_BLOG}</a></p>
{*** LOGIN-AREA END ***}
{else}
{*** SIDEBAR-MENU START ***}
    {if NOT $admin_vars.no_sidebar}
                <td id="serendipitySideBar">

    {*** MAIN LINKS START ***}
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuMain">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuMainLinks" style="display:none"></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMainLinks serendipitySideBarMenuMainFrontpage"><a href="serendipity_admin.php">{$CONST.ADMIN_FRONTPAGE}</a></li>
                        {if 'personalConfiguration'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMainLinks serendipitySideBarMenuMainPersonal"><a href="serendipity_admin.php?serendipity[adminModule]=personal">{$CONST.PERSONAL_SETTINGS}</a></li>
                        {/if}
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuMainLinks" style="display:none"></li>
                    </ul>
                    <br class="serendipitySideBarMenuSpacer" />                                                                                             
    {*** MAIN LINKS END ***}

    {*** ENTRY LINKS START ***}
                    {if 'adminEntries'|checkPermission OR 'adminEntriesPlugins'|checkPermission}
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuEntry">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuEntryLinks">{$CONST.ADMIN_ENTRIES}</li>
                        {if 'adminEntries'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=entries&amp;serendipity[adminAction]=new">{$CONST.NEW_ENTRY}</a></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=entries&amp;serendipity[adminAction]=editSelect">{$CONST.EDIT_ENTRIES}</a></li>
                        {/if}

                        {if 'adminComments'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=comments">{$CONST.COMMENTS}</a></li>
                        {/if}

                        {if 'adminCategories'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="serendipity_admin.php?serendipity[adminModule]=category&amp;serendipity[adminAction]=view">{$CONST.CATEGORIES}</a></li>
                        {/if}

                        {if 'adminEntries'|checkPermission OR 'adminEntriesPlugins'|checkPermission}
                        {if $admin_vars.no_create !== true} {serendipity_hookPlugin hook="backend_sidebar_entries" hookAll="true"}{/if}
                        {/if}
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuEntryLinks" style="display:none"></li>
                    </ul>
                    {/if}
                    {*** ENTRY LINKS END ***}

    {*** MEDIA LINKS START ***}
        {if 'adminImages'|checkPermission}
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuMedia">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuMediaLinks">{$CONST.MEDIA}</li>
                        {if 'adminImagesAdd'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=addSelect">{$CONST.ADD_MEDIA}</a></li>
                        {/if}
                        {if 'adminImagesView'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media">{$CONST.MEDIA_LIBRARY}</a></li>
                        {/if}
                        {if 'adminImagesDirectories'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=directorySelect">{$CONST.MANAGE_DIRECTORIES}</a></li>
                        {/if}
                        {if 'adminImagesSync'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuMediaLinks"><a href="serendipity_admin.php?serendipity[adminModule]=media&amp;serendipity[adminAction]=sync" onclick="return confirm('{$CONST.WARNING_THIS_BLAHBLAH}');">{$CONST.CREATE_THUMBS}</a></li>
                        {/if}
                        {if $admin_vars.no_create !== true} {serendipity_hookPlugin hook="backend_sidebar_entries_images" hookAll="true"}{/if}
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuMediaLinks" style="display:none"></li>
                    </ul>
        {/if}
    {*** MEDIA LINKS END ***}

    {*** APPEARANCE START ***}
        {if 'adminTemplates'|checkPermission OR 'adminPlugins'|checkPermission}
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuAppearance">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuAppearanceLinks">{$CONST.APPEARANCE}</li>
                        {if 'adminTemplates'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuAppearanceLinks"><a href="serendipity_admin.php?serendipity[adminModule]=templates">{$CONST.MANAGE_STYLES}</a></li>
                        {/if}
                        {if 'adminPlugins'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuAppearanceLinks"><a href="serendipity_admin.php?serendipity[adminModule]=plugins">{$CONST.CONFIGURE_PLUGINS}</a></li>
                        {/if}
                        {if $admin_vars.no_create !== true} {serendipity_hookPlugin hook="backend_sidebar_admin_appearance" hookAll="true"}{/if}
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuAppearance" style="display:none"></li>
                    </ul>
        {/if}
    {*** APPEARANCE END ***}

    {*** USER MANAGEMENT START ***}
        {if 'adminUsersGroups'|checkPermission OR 'adminImport'|checkPermission OR 'siteConfiguration'|checkPermission OR 'blogConfiguration'|checkPermission OR 'adminUsers'|checkPermission}
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuUserManagement">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuUserManagementLinks">{$CONST.ADMIN}</li>
                        {if 'siteConfiguration'|checkPermission OR 'blogConfiguration'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=configuration">{$CONST.CONFIGURATION}</a></li>
                        {/if}
                        {if 'adminUsers'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=users">{$CONST.MANAGE_USERS}</a></li>
                        {/if}
                        {if 'adminUsersGroups'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=groups">{$CONST.MANAGE_GROUPS}</a></li>
                        {/if}
                        {if 'adminImport'|checkPermission}
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=import">{$CONST.IMPORT_ENTRIES}</a></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuUserManagementLinks"><a href="serendipity_admin.php?serendipity[adminModule]=export">{$CONST.EXPORT_ENTRIES}</a></li>
                        {/if}
                        {if $admin_vars.no_create !== true} {serendipity_hookPlugin hook="backend_sidebar_admin" hookAll="true"}{/if}
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuUserManagement" style="display:none"></li>
                    </ul>
        {/if}
    {*** USER MANAGEMENT END ***}

    {*** LOGOUT START ***}
                    <br class="serendipitySideBarMenuSpacer" />                                                                                             
                    <ul class="serendipitySideBarMenu serendipitySideBarMenuLogout">
                        <li class="serendipitySideBarMenuHead serendipitySideBarMenuLogoutLinks" style="display:none"></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuLogoutLinks serendipitySideBarMenuLogoutWeblog"><a href="{$serendipityBaseURL}">{$CONST.BACK_TO_BLOG}</a></li>
                        <li class="serendipitySideBarMenuLink serendipitySideBarMenuLogoutLinks serendipitySideBarMenuLogoutLogout"><a href="serendipity_admin.php?serendipity[adminModule]=logout">{$CONST.LOGOUT}</a></li>
                        <li class="serendipitySideBarMenuFoot serendipitySideBarMenuLogoutLinks" style="display:none"></li>
                    </ul>
    {*** LOGOUT END ***}

                </td>
    {/if}
                <td class="serendipityAdminContent">

    {*** MAIN CONTENT OF THE ADMIN INTERFACE START ***}
                    {$admin_vars.main_content}
    {*** MAIN CONTENT OF THE ADMIN INTERFACE END ***}

{/if}
{*** SIDEBAR-MENU END ***}
                </td>
            </tr>
        </table>
        <div class="serendipityAdminFooterSpacer">
            <br />
        </div>
        <div id="serendipityAdminFooter">
            <span>{$admin_vars.version_info}</span>
        </div>                            
    </body>
<!-- ADMIN-ENTRY TEMPLATE: index.tpl END -->
</html>
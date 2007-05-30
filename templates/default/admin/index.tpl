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
                        {$admin_vars.self_info}
                    {/if}
                </td>
            </tr>
        {/if}
{*** BANNER END ***}

            <tr valign="top">
{if NOT $admin_vars.is_logged_in}
{*** LOGIN-AREA START ***}

    {serendipity_hookPlugin hook="backend_header" data=$admin_vars.out hookAll="true"}
                <td colspan="2" class="serendipityAdminContent">
                    <div align="center">{$CONST.WELCOME_TO_ADMIN}<br />
                    {$CONST.PLEASE_ENTER_CREDENTIALS}
                    {$admin_vars.out.header}
                    </div>
                    <br />

                    {if $admin_vars.post_action != '' AND NOT $admin_vars.is_logged_in}
                    <div class="serendipityAdminMsgError">{$CONST.WRONG_USERNAME_OR_PASSWORD}</div>
                    {/if}
                    
                    <form action="serendipity_admin.php" method="post">
                        <input type="hidden" name="serendipity[action]" value="admin" />
                        <table cellspacing="10" cellpadding="0" border="0" align="center">
                            <tr>
                                <td>{$CONST.USERNAME}</td>
                                <td><input type="text" name="serendipity[user]" /></td>
                            </tr>
                            <tr>
                                <td>{$CONST.PASSWORD}</td>
                                <td><input type="password" name="serendipity[pass]" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input id="autologin" type="checkbox" name="serendipity[auto]" /><label for="autologin"> {$CONST.AUTOMATIC_LOGIN}</label></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><input type="submit" name="submit" value="{$CONST.LOGIN} &gt;" class="serendipityPrettyButton" /></td>
                            </tr>
                            {$admin_vars.out.table}
                        </table>
                    </form>
                    {$admin_vars.out.footer}
                    <a href="{$serendipityHTTPPath}">{$CONST.BACK_TO_BLOG}</a>
{*** LOGIN-AREA END ***}
{else}
{*** SIDEBAR-MENU START ***}
    {if NOT $admin_vars.no_sidebar}
                <td id="serendipitySideBar">
    {*** MAIN LINKS START ***}
                    <ul class="serendipitySideBarMenu">
                        <li><a href="serendipity_admin.php">{$CONST.ADMIN_FRONTPAGE}</a></li>
                        {if 'personalConfiguration'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=personal">{$CONST.PERSONAL_SETTINGS}</a></li>
                        {/if}
                    </ul>
    {*** MAIN LINKS END ***}

                    <br />

    {*** ENTRY LINKS START ***}
                    <ul class="serendipitySideBarMenu">
                    {if 'adminEntries'|checkPermission OR 'adminEntriesPlugins'|checkPermission}
                        <li class="serendipitySideBarMenuHead">{$CONST.ADMIN_ENTRIES}</li>
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
                        {if $admin_vars.no_create !== true} {serendipity_hookPlugin hook="backend_sidebar_entries" hookAll="true"}{/if}
                        {/if}
                    {/if}
                    </ul>
    {*** ENTRY LINKS END ***}

    {*** MEDIA LINKS START ***}
        {if 'adminImages'|checkPermission}
                    <ul class="serendipitySideBarMenu">
                        <li class="serendipitySideBarMenuHead">{$CONST.MEDIA}</li>
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
                        {if $admin_vars.no_create !== true} {serendipity_hookPlugin hook="backend_sidebar_entries_images" hookAll="true"}{/if}
                    </ul>
        {/if}
    {*** MEDIA LINKS END ***}

    {*** APPEARANCE START ***}
        {if 'adminTemplates'|checkPermission OR 'adminPlugins'|checkPermission}
                    <ul class="serendipitySideBarMenu">
                        <li class="serendipitySideBarMenuHead">{$CONST.APPEARANCE}</li>
                        {if 'adminTemplates'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=templates">{$CONST.MANAGE_STYLES}</a></li>
                        {/if}
                        {if 'adminPlugins'|checkPermission}
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=plugins">{$CONST.CONFIGURE_PLUGINS}</a></li>
                        {/if}
                        {if $admin_vars.no_create !== true} {serendipity_hookPlugin hook="backend_sidebar_admin_appearance" hookAll="true"}{/if}
                    </ul>
        {/if}
    {*** APPEARANCE END ***}

    {*** USER MANAGEMENT START ***}
        {if 'adminUsersGroups'|checkPermission OR 'adminImport'|checkPermission OR 'siteConfiguration'|checkPermission OR 'blogConfiguration'|checkPermission OR 'adminUsers'|checkPermission}
                    <ul class="serendipitySideBarMenu">
                        <li class="serendipitySideBarMenuHead">{$CONST.ADMIN}</li>
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
                        {if $admin_vars.no_create !== true} {serendipity_hookPlugin hook="backend_sidebar_admin" hookAll="true"}{/if}
                    </ul>
        {/if}
    {*** USER MANAGEMENT END ***}

    {*** LOGOUT START ***}
                    <br />
                    <ul class="serendipitySideBarMenu">
                        <li><a href="{$baseURL}">{$CONST.BACK_TO_BLOG}</a></li>
                        <li><a href="serendipity_admin.php?serendipity[adminModule]=logout">{$CONST.LOGOUT}</a></li>
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

        <br />
        <div id="serendipityAdminFooter">
            {$admin_vars.version_info}
        </div>
    </body>
<!-- ADMIN-ENTRY TEMPLATE: index.tpl END -->
</html>
<?php # $Id$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (defined('S9Y_FRAMEWORK_UPGRADER')) {
    return;
}
@define('S9Y_FRAMEWORK_UPGRADER', true);

/**
 * This is a list of functions that are used by the upgrader. Define functions here that
 * are not used within usual Serendipity control flow
 */

/* A list of files which got obsoleted in 0.8 */
$obsolete_files = array(
    'serendipity.inc.php',
    'serendipity_layout.inc.php',
    'serendipity_layout_table.inc.php',
    'serendipity_entries_overview.inc.php',
    'serendipity_rss_exchange.inc.php',
    'serendipity_admin_category.inc.php',
    'serendipity_admin_comments.inc.php',
    'serendipity_admin_entries.inc.php',
    'serendipity_admin_images.inc.php',
    'serendipity_admin_installer.inc.php',
    'serendipity_admin_interop.inc.php',
    'serendipity_admin_overview.inc.php',
    'serendipity_admin_plugins.inc.php',
    'serendipity_admin_templates.inc.php',
    'serendipity_admin_upgrader.inc.php',
    'serendipity_admin_users.inc.php',
    'compat.php',
    'serendipity_functions_config.inc.php',
    'serendipity_functions_images.inc.php',
    'serendipity_functions_installer.inc.php',
    'serendipity_genpage.inc.php',
    'serendipity_lang.inc.php',
    'serendipity_plugin_api.php',
    'serendipity_sidebar_items.php',
    'serendipity_db.inc.php',
    'serendipity_db_mysql.inc.php',
    'serendipity_db_mysqli.inc.php',
    'serendipity_db_postgres.inc.php',
    'serendipity_db_pdo-postgres.inc.php',
    'serendipity_db_sqlite.inc.php',
    'serendipity_db_sqlite3.inc.php',
    'htaccess.cgi.errordocs.tpl',
    'htaccess.cgi.normal.tpl',
    'htaccess.cgi.rewrite.tpl',
    'htaccess.errordocs.tpl',
    'htaccess.normal.tpl',
    'htaccess.rewrite.tpl',
    'serendipity_config_local.tpl',
    'serendipity_config_user.tpl',
    'INSTALL',
    'LICENSE',
    'NEWS',
    'README',
    'TODO',
    'upgrade.sh',
    'templates/default/layout.php'
);

/**
 * Fix inpropper plugin constant names
 *
 * Before Serendipity 0.8, some plugins contained localized strings for indiciating some
 * configuration values. That got deprecated, and replaced by a language-independent constant.
 *
 * @access private
 * @param  string   (reserved for future use)
 * @return boolean
 */
function serendipity_fixPlugins($case) {
    global $serendipity;

    switch($case) {
        case 'markup_column_names':
            $affected_plugins = array(
                'serendipity_event_bbcode',
                'serendipity_event_contentrewrite',
                'serendipity_event_emoticate',
                'serendipity_event_geshi',
                'serendipity_event_nl2br',
                'serendipity_event_textwiki',
                'serendipity_event_trackexits',
                'serendipity_event_xhtmlcleanup',
                'serendipity_event_markdown',
                'serendipity_event_s9ymarkup',
                'serendipity_event_searchhighlight',
                'serendipity_event_textile'
            );

            $elements = array(
                'ENTRY_BODY',
                'EXTENDED_BODY',
                'COMMENT',
                'HTML_NUGGET'
            );

            $where = array();
            foreach($affected_plugins AS $plugin) {
                $where[] = "name LIKE '$plugin:%'";
            }

            $rows = serendipity_db_query("SELECT name, value, authorid
                                            FROM {$serendipity['dbPrefix']}config
                                           WHERE " . implode(' OR ', $where));
            if (!is_array($rows)) {
                return false;
            }

            foreach($rows AS $row) {
                if (preg_match('@^(serendipity_event_.+):([a-z0-9]+)/(.+)@i', $row['name'], $plugin_data)) {
                    foreach($elements AS $element) {
                        if ($plugin_data[3] != constant($element)) {
                            continue;
                        }

                        $new = $plugin_data[1] . ':' . $plugin_data[2] . '/' . $element;
                        serendipity_db_query("UPDATE {$serendipity['dbPrefix']}config
                                                 SET name     = '$new'
                                               WHERE name     = '{$row['name']}'
                                                 AND value    = '{$row['value']}'
                                                 AND authorid = '{$row['authorid']}'");
                    }
                }
            }

            return true;
            break;
    }
}

/**
 * Create default groups, when migrating.
 *
 * @access private
 */
function serendipity_addDefaultGroups() {
    global $serendipity;

    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}groups");
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}groupconfig");
    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']}authorgroups");

    serendipity_addDefaultGroup(USERLEVEL_EDITOR_DESC, USERLEVEL_EDITOR);
    serendipity_addDefaultGroup(USERLEVEL_CHIEF_DESC,  USERLEVEL_CHIEF);
    serendipity_addDefaultGroup(USERLEVEL_ADMIN_DESC,  USERLEVEL_ADMIN);
}


/**
 * baseURL is now defaultBaseURL in the database, so copy if not already set
 *
 * */
function serendipity_copyBaseURL() {
    global $serendipity;
    if ((serendipity_get_config_var("defaultBaseURL") === false || serendipity_get_config_var("defaultBaseURL") == "" ) && serendipity_get_config_var("baseURL") !== false) {
        serendipity_set_config_var("defaultBaseURL", serendipity_get_config_var("baseURL"));
    }
}

function serendipity_killPlugin($name) {
    global $serendipity;

    serendipity_db_query("DELETE FROM {$serendipity['dbPrefix']} WHERE name LIKE '" . serendipity_db_escape_string($name) . "%'");
}

<?php # $Id$

/**
 *  @version $Revision$
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_SPARTACUS_NAME', 'Spartacus');
@define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - Allows you to download plugins from our online repository');
@define('PLUGIN_EVENT_SPARTACUS_FETCH', 'Click here to fetch a new %s from the Serendipity Online Repository');
@define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', 'The URL %s could not be opened. Maybe the Serendipity or SourceForge.net Server is down - we are sorry, you need to try again later.');
@define('PLUGIN_EVENT_SPARTACUS_FETCHING', 'Trying to open URL %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', 'Fetched %s bytes from the URL above. Saving file as %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', 'Fetched %s bytes from already existing file on your server. Saving file as %s...');
@define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', 'Data successfully fetched.');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'File/Mirror location (XML metadata)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'File/Mirror location (files)');
@define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'Choose a download location. Do NOT change this value unless you know what you are doing and if servers get oudated. This option is available mainly for forward compatibility.');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'Owner of downloaded files');
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Here you can enter the (FTP/Shell) owner (like "nobody") of files downloaded by Spartacus. If empty, no changes are made to the ownership.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Permissions downloaded files');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Here you can enter the octal mode (like "0777") of the file permissions for files (FTP/Shell) downloaded by Spartacus. If empty, the default permission mask of the system are used. Note that not all servers allow changing/setting permissions. Pay attention that the applied permissions allow reading and writing for the webserver user. Else spartacus/Serendipity cannot overwrite existing files.');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Permissions downloaded directories');
@define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Here you can enter the octal mode (like "0777") of the directory permissions for directories (FTP/Shell) downloaded by Spartacus. If empty, the default permission mask of the system are used. Note that not all servers allow changing/setting permissions. Pay attention that the applied permissions allow reading and writing for the webserver user. Else spartacus/Serendipity cannot overwrite existing directories.');

@define('PLUGIN_EVENT_SPARTACUS_CHECK_SIDEBAR', 'Check for new sidebar plugins');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_EVENT', 'Check for new event plugins');
@define('PLUGIN_EVENT_SPARTACUS_CHECK_HINT', 'Hint: You can upgrade multiple plugins at once by clicking the upgrade-link with your middle mouse button, so that it opens in a new window/tab of your browser. Note that upgrading all plugins automatically could lead to network timeouts and garbaged files, thus this functionality does not exist intentionally.');
?>

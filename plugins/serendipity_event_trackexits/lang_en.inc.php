<?php # $Id: lang_en.inc.php 1381 2006-08-15 10:14:56Z elf2000 $

/**
 *  @version $Revision: 1381 $
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_TRACKBACK_NAME', 'Markup: Track exits');
@define('PLUGIN_EVENT_TRACKBACK_DESC', 'Track clicks on external URLs');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION', 'Use URL-redirection on URL to commenting user?');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_BLAHBLA', 'Reduces Comment-Abuse but also disables positive effects of linking to the URL of a commenting user. Serendipity\'s internal routines will redirect to the target page and log the exit. The Google PageRank Deflector will prevent the link from gaining rank on Google. An empty value disables this feature entirely (default).');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_NONE', 'None');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_S9Y', 'Serendipity Exit-Tracking Routine');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_GOOGLE', 'Google PageRank Deflector');

?>

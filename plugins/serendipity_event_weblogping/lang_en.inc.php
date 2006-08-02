<?php # $Id$

/**
 *  @version $Revision$
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_WEBLOGPING_PING', 'Announce entries (via XML-RPC ping) to:');
@define('PLUGIN_EVENT_WEBLOGPING_SENDINGPING', 'Sending XML-RPC ping to host %s');
@define('PLUGIN_EVENT_WEBLOGPING_TITLE', 'Announce entries');
@define('PLUGIN_EVENT_WEBLOGPING_DESC', 'Send notification of new entries to online services');
@define('PLUGIN_EVENT_WEBLOGPING_SUPERSEDES', '(supersedes %s)');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM', 'Custom ping-services');
@define('PLUGIN_EVENT_WEBLOGPING_CUSTOM_BLAHBLA', 'One or more special ping services, separated by ",". The entries need to be formatted like: "host.domain/path". If a "*" is entered at the beginning of the hostname, the extended XML-RPC options will be sent to that host (only if supported by the host).');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_FAILURE', 'Failure(Reason: %s)');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_SUCCESS', 'Success!!');

?>

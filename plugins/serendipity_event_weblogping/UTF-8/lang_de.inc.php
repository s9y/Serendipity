<?php # lang_de.inc.php 1.0 2009-06-03 10:00:23 VladaAjgl $

/**
 *  @version 1.0
 *  @author Konrad Bauckmeier <kontakt@dd4kids.de>
 *  @translated 2009/06/03
 */
        @define('PLUGIN_EVENT_WEBLOGPING_PING', 'Einträge ankündigen (via XML-RPC ping) bei:');
        @define('PLUGIN_EVENT_WEBLOGPING_SENDINGPING', 'Sende XML-RPC ping zu %s');
        @define('PLUGIN_EVENT_WEBLOGPING_TITLE', 'Einträge ankündigen');
        @define('PLUGIN_EVENT_WEBLOGPING_DESC', 'Benachrichtigt diverse Internetseiten, das ein neuer Eintrag erstellt wurde.');
        @define('PLUGIN_EVENT_WEBLOGPING_SUPERSEDES', '(ersetzt %s)');
        @define('PLUGIN_EVENT_WEBLOGPING_CUSTOM', 'Selbstdefinierte Ping-Services');
        @define('PLUGIN_EVENT_WEBLOGPING_CUSTOM_BLAHBLA', 'Mehrere durch "," getrennte Ping-Services im Format: "host.domain/pfad". Falls am Anfang eines Hosts ein "*" eingefügt wird, werden an den Host die erweiterten XML-RPC Optionen gesendet; der Host muss diese Optionen unterstützen.');

// Next lines were translated on 2009/06/03
@define('PLUGIN_EVENT_WEBLOGPING_SEND_FAILURE', 'Fehlgeschlagen (Grund: %s)');
@define('PLUGIN_EVENT_WEBLOGPING_SEND_SUCCESS', 'Erfolgreich!');
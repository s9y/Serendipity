<?php # $Id$

        @define('PLUGIN_EVENT_SPARTACUS_NAME', 'Spartacus');
        @define('PLUGIN_EVENT_SPARTACUS_DESC', '[S]erendipity [P]lugin [A]ccess [R]epository [T]ool [A]nd [C]ustomization/[U]nification [S]ystem - Installiert Plugins direkt aus dem Netz.');
        @define('PLUGIN_EVENT_SPARTACUS_FETCH', 'Hier klicken um ein neues %s aus dem Netz zu installieren.');
        @define('PLUGIN_EVENT_SPARTACUS_FETCHERROR', 'Die URL %s konnte nicht geöffnet werden. Möglicherweise existieren Server- oder Netzwerkprobleme.');
        @define('PLUGIN_EVENT_SPARTACUS_FETCHING', 'Versuche URL %s zu öffnen...');
        @define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_URL', '%s bytes von obiger URL geladen. Speichere Inhalt als %s...');
        @define('PLUGIN_EVENT_SPARTACUS_FETCHED_BYTES_CACHE', '%s bytes von bereits bestehender Datei geladen. Speichere Inhalt als %s...');
        @define('PLUGIN_EVENT_SPARTACUS_FETCHED_DONE', 'Daten erfolgreich geladen.');
        @define('PLUGIN_EVENT_SPARTACUS_MIRROR_XML', 'Datei/Mirror Speicherort (XML-Metadaten)');
        @define('PLUGIN_EVENT_SPARTACUS_MIRROR_FILES', 'Datei/Mirror Speicherort (Downloads)');
        @define('PLUGIN_EVENT_SPARTACUS_MIRROR_DESC', 'Wählen Sie den Download-Server. Ändern Sie diesen Wert nur, wenn Sie wissen, was Sie tun und ein Server nicht mehr reagiert. Diese Option ist hauptsächlich für zukünftige Server reserviert.');

        @define('PLUGIN_EVENT_SPARTACUS_CHOWN', 'Eigentümer der heruntergeladenen Dateien');
        @define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Hier kann der FTP/Shell-Benutzer (z.B. "nobody") angegeben werden, der für von Spartacus heruntergeladene Dateien verwendet wird. Falls leer wird keien Änderung des Eigentümers vorgenommen.');
        @define('PLUGIN_EVENT_SPARTACUS_CHMOD', 'Zugriffsrechte der heruntergeladenen Dateien');
        @define('PLUGIN_EVENT_SPARTACUS_CHMOD_DESC', 'Hier kann der Oktagonale Dateimodus (z.B: "0777") für von Spartacus heruntergeladene Dateien angegeben werden. Falls dieser Wert leergelassen wird, verwendet Serendipity die Standardmaske des Systems. Nicht alle Server unterstützen eine Änderung dieser Dateirechte. Stellen Sie unbedingt sicher, dass die von Ihnen gewählten Rechte das Lesen und Schreiben des Webserver-Benutzers weiterhin erlauben - sonst könnte Serendipity/Spartacus keine bestehenden Dateien überschreiben.');
        @define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR', 'Zugriffsrechte der heruntergeladenen Verzeichnisse');
        @define('PLUGIN_EVENT_SPARTACUS_CHMOD_DIR_DESC', 'Hier kann der Oktagonale Dateimodus (z.B: "0777") für von Spartacus heruntergeladene Verzeichnisse angegeben werden. Falls dieser Wert leergelassen wird, verwendet Serendipity die Standardmaske des Systems. Nicht alle Server unterstützen eine Änderung dieser Verzeichnisrechte. Stellen Sie unbedingt sicher, dass die von Ihnen gewählten Rechte das Lesen und Schreiben des Webserver-Benutzers weiterhin erlauben - sonst könnte Serendipity/Spartacus keine bestehenden Dateien überschreiben.');
        @define('PLUGIN_EVENT_SPARTACUS_CHECK_SIDEBAR', 'Neue Versionen von Seitenleisten-Plugins');
        @define('PLUGIN_EVENT_SPARTACUS_CHECK_EVENT', 'Neue Versionen von Ereignis-Plugins');
        @define('PLUGIN_EVENT_SPARTACUS_CHECK_HINT', 'Hinweis: Sie können mehrere Plugins auf einmal installieren, wenn Sie den Link zum jeweiligen Plugin mit der mittleren Maustaste anklicken, so dass Ihr Browser diesen Link in einem neuen Fenster/Tab öffnet. Bitte beachten Sie, dass das automatische Aktualisieren aller plugins zu Netwerkproblemen und defekten Dateien führen könnte. Daher ist diese Funktionalität absichtlich derzeit nicht implementiert.');

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

@define('PLUGIN_EVENT_SPARTACUS_REPOSITORY_ERROR', '<br />(Der Mirror-Speicherort antwortet mit Fehler %s.)<br />');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHCHECK', '<P>Die Daten des Spartacus-Speicherorts konnte nicht empfangen werden. Prüfe Verfügbarkeit der Quelle...</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHERROR', '<P>Die Prüfung der Verfügbarkeit einer Spartacus-Quelle konnte nicht durchgeführt werden (HTTP-Code %s). Bitte probieren Sie es später wieder.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHLINK', '<P><a target="_blank" href="%s">Klicken Sie hier um die Spartacus-Verfügbarkeitsprüfung  anzusehen</a> und dessen Erreichbarkeit zu überprüfen.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHBLOCKED', '<P>SPARTACUS konnte keine Test-Verbindung zu Google herstellen (Fehler %d: %s).<br />Ihr Server blockiert vermutlich ausgehende Verbindungen. SPARTACUS kann so nicht ausgeführt werden, da so auf keine der SPARTACUS-Quellen zugegriffen werden kann. <b>Bitte kontaktieren Sie ihren Web-Provider und bitten ihn, ausgehende HTTP-Verbindungen zuzulassen.</b></P><P>Plugins können nach wie vor auch lokal installiert werden. Laden Sie dazu einfach ein Plugin von <a href="http://spartacus.s9y.org">der SPARTACUS Webseite</a> runter, entpacken es und laden es in ihr Serendipity "plugin"-Verzeichnis hoch.</P>');
@define('PLUGIN_EVENT_SPARTACUS_HEALTHDOWN', '<P>SPARTACUS konnte eine Teste-Verbindung zu Google herstellen, aber nicht zum Spartacus-Speicherort. Möglicherweise blockiert ihr Server ausgehende Verbindungen, oder die Spartacus-Quelle ist nicht erreichbar. Kontaktieren Sie bitte ihren Web-Provider um sicherzustellen, dass ausgehende HTTP-Verbindungen möglich sind. <b>Sie können SPARTACUS erst nutzen, wenn ihr Server auf die Spartacus-Speicherorte zugreifen kann.</b></P>');

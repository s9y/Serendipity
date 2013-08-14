<?php #

/**
 *  @version 1.0
 *  @author Konrad Bauckmeier <kontakt@dd4kids.de>
 *  @translated 2009/06/03
 */

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
@define('PLUGIN_EVENT_SPARTACUS_CHOWN_DESC', 'Hier kann der FTP/Shell-Benutzer (z.B. "nobody") angegeben werden, der für von Spartacus heruntergeladene Dateien verwendet wird. Falls leer wird keine Änderung des Eigentümers vorgenommen.');
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

@define('PLUGIN_EVENT_SPARTACUS_CUSTOMMIRROR', 'Eigene Mirror-Quelle');
@define('PLUGIN_EVENT_SPARTACUS_CUSTOMMIRROR_DESC', 'Diese Option ist nur für Experten gedacht. Falls keiner der voreingestellten Mirror-Server aufgrund von Downtime oder Problemen verfügbar ist, kann hier ein eigener Server-Name wie http://mirror.org/serendipity/ eingetragen werden. Dort müssten die XML-Dateien für Spartacus im Verzeichnis liegen, und Unterverzeichnisse wie additional_plugins und additional_themes existieren. Geben Sie nur Mirrors hier ein, denen Sie vertrauen, auf denen eine Kopie unseres CVS-Repositories gespeichert ist. Mehrere Mirrors können mit "|" getrennt eingegeben werden.');

// Next lines were translated on 2009/06/03
@define('PLUGIN_EVENT_SPARTACUS_TRYCURL', 'Versuche TcURL Bibliothek aus Fallback zu nutzen...');
@define('PLUGIN_EVENT_SPARTACUS_CURLFAIL', 'cURL Bibliothek gab auch einen Fehler zurück.');
@define('PLUGIN_EVENT_SPARTACUS_HEALTFIREWALLED', 'Es war nicht möglich, die benötigten Daten vom Spartacus Verzeichnis zu laden, aber der Status des Verzeichnisses war abrufbar. Das bedeutet, dass Ihr Provider eine Inhaltsbasierte Firewall verwendet und den Abruf von PHP code über das Netz mittels mod_security oder anderen Reverse-Proxies verhindert. Sie müssen entweder ihren Provider bitten, diesen Schutz abzuschalten oder Sie können das Spartacus Plugin nicht verwenden und müssen die Dateien manuell herunterladen.');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_PLUGINS', 'Spartacus verwenden, um Plugins zu laden?');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_THEMES', 'Spartacus verwenden, um Templates zu laden?');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE', 'Fernabfrage für Versions-Informationen der Plugins zulassen?');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_DESC', 'Wenn aktiviert, können Besucher von %s Versions-Informationen über alle installierten Plugins abrufen. Es wird dringend empfohlen, diese URL mittels benutzerdefinierten .htaccess Regeln vor unauthorisiertem Zugriff zu schützen.');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_URL', 'Pfad zum Fernabruf der Versions-Information der Plugins');
@define('PLUGIN_EVENT_SPARTACUS_ENABLE_REMOTE_URL_DESC', 'gibt den letzten Teil der URI an, welche die Benutzer wissen müssen, um den Fernabruf der Versions-Informationen durchzuführen.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CONNECT', 'FTP Fehler: Kann nicht per FTP verbinden.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_MKDIR', 'FTP Fehler: Kann das Verzeichnis (%s) nicht anlegen.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_ERROR_CHMOD', 'FTP Fehler: Kann die Verzeichnisrechte von (%s) nicht ändern.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SUCCESS', 'FTP: Verzeichnis (%s) erfolgreich angelegt.');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USE', 'Lege Verzeichnis unter Verwendung von FTP an?');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USE_DESC', 'Wenn PHP im safe_mode läuft, gelten einige Einschränkungen. Das Ergebnis dieser Einschränkungen ist, das in ein Verzeichnis, welches auf normale Weise erstellt wurde, nicht hochgeladen werden kann. Wird das Verzeichnis aber per FTP angelegt wurde, funtkioniert es. Wenn also am Webserver safe_mode = on eingestellt ist, ist dies der einzige Weg um SPARTACUS zu nmutzen bzw. Mediendateien (Bilder usw.) hochzuladen. Die folgenden Zugangsdaten für Ihren Server müssen dazu ausgefüllt werden');
@define('PLUGIN_EVENT_SPARTACUS_FTP_SERVER', 'FTP Serveradresse');
@define('PLUGIN_EVENT_SPARTACUS_FTP_USERNAME', 'FTP Benutzername');
@define('PLUGIN_EVENT_SPARTACUS_FTP_PASS', 'FTP Passwort');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR', 'FTP Serendipity Verzeichnis');
@define('PLUGIN_EVENT_SPARTACUS_FTP_BASEDIR_DESC', 'Beim Login über FTP ist das Startverzeichnis nicht notwendigerweise das Serendipity-Verzeichnis. In diesem Fall ist es hier möglch, den Pfad vom FTP-Verzeichnis zum Serendipity-Verzeichnis anzugeben.');


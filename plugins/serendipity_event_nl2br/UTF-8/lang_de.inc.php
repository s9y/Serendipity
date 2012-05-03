<?php # $Id: lang_de.inc.php 2492 2011-03-22 17:56:40Z ian $

@define('PLUGIN_EVENT_NL2BR_NAME',     'Textformatierung: NL2BR');
@define('PLUGIN_EVENT_NL2BR_DESC',     'Konvertiert Zeilenumbrüche zu HTML');
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP', 'Überprüfe Markup-Plugins?');
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP_DESC', 'Überprüft automatisch auf existierende Markup-Plugins, um die weitere Ausführung des NL2BR-Plugins zu untersagen. Dies gilt dann, wenn WYSIWYG oder spezifische Markup-Plugins entdeckt werden.');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS', 'Eine Liste von HTML-Tags, innerhalb derer keine Umbrüche bei Benutzung von P-Tags konvertiert werden');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS_DESC', 'Konfigurationsvorschlag: "code,pre,geshi,textarea". Trennen Sie mehrere HTML-Tags mit Komma. Hinweis: Die eingegebenen Tags sind reguläre Ausdrücke!');
@define('PLUGIN_EVENT_NL2BR_PTAGS', 'Nutze P-Tags');
@define('PLUGIN_EVENT_NL2BR_PTAGS_DESC', 'Setze statt br-Tags p-Tags ein.');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG', 'ISOBR Isolations-Default BR Einstellung');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG_DESC', 'Mit dem neu eingefügten NON-HTML-Tag <nl> </nl> als NL2BR Isolations-Default Einstellung, kann die NL2BR Funktion nun so genutzt werden, dass alles innerhalb dieses Tags nicht von NL2BR geparst wird. Auch nicht verschachtelte mehrfach Vorkommen im Text werden unterstützt! Beispiel: <nl>do not parse newline to br inside</nl>');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS', 'Nutze BR-Clean-Tags fallback, wenn ISOBR false');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS_DESC', 'Bei Benutzung von <HTML-Tags> in den Einträgen, die nicht zufriedenstellend mit der ISOBR Config-Option gelöst werden können, lösche nl2br Umbruch nach <tag>. Dies gilt für alle <tags>, die mit > oder >\n enden! Default (table|thead|tbody|tfoot|th|tr|td|caption|colgroup|col|ol|ul|li|dl|dt|dd)');
@define('PLUGIN_EVENT_NL2BR_CONFIG_ERROR', 'Konfigurations Fehler! Die Option: "%s" wurde zurückgesetzt, weil die Option \'%s\' aktiv geschaltet war! Benutzen sie bitte nur eine dieser Optionen.');

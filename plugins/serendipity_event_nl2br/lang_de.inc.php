<?php

/**
 *  @version  
 *  @file 
 *  @author 
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_NL2BR_NAME', 'Textformatierung: NL2BR');
@define('PLUGIN_EVENT_NL2BR_DESC', 'Konvertiert Zeilenumbr�che zu HTML. Basis-Funktionalit�t: Konvertiere die Zeilenumbr�che zu <br> - Tags. Erweiterte Funktionalit�t: Parse den Text in <p>-Tags unter Ber�cksichtigung der html-Syntax wie p-Elemente nur dort wo sie erlaubt sind, automatische Ignorierung bei vorformatiertem Text mit pre oder innerhalb von style oder svg-Tags.');
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP', '�berpr�fe Markup-Plugins?');
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP_DESC', '�berpr�ft automatisch auf existierende Markup-Plugins, um die weitere Ausf�hrung des NL2BR-Plugins zu untersagen. Dies gilt dann, wenn WYSIWYG oder spezifische Markup-Plugins entdeckt werden.');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS', 'Eine Liste von benutzerdefinierten HTML-Tags, innerhalb derer keine Umbr�che bei Benutzung von P-Tags konvertiert werden');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS_DESC', 'Konfigurationsvorschlag: "nl". Trennen Sie mehrere HTML-Tags mit Komma. Hinweis: Die eingegebenen Tags sind regul�re Ausdr�cke!');
@define('PLUGIN_EVENT_NL2BR_PTAGS', 'Nutze P-Tags');
@define('PLUGIN_EVENT_NL2BR_PTAGS_DESC', 'Setze statt br-Tags p-Tags ein.');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG', 'ISOBR Isolations-Default BR Einstellung');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG_DESC', 'Mit dem neu eingef�gten NON-HTML-Tag <nl> </nl> als NL2BR Isolations-Default Einstellung, kann die NL2BR Funktion nun so genutzt werden, dass alles innerhalb dieses Tags nicht von NL2BR geparst wird. Auch nicht verschachtelte mehrfach Vorkommen im Text werden unterst�tzt! Beispiel: <nl>do not parse newline to br inside</nl>');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS', 'Nutze BR-Clean-Tags fallback, wenn ISOBR false');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS_DESC', 'Bei Benutzung von <HTML-Tags> in den Eintr�gen, die nicht zufriedenstellend mit der ISOBR Config-Option gel�st werden k�nnen, l�sche nl2br Umbruch nach <tag>. Dies gilt f�r alle <tags>, die mit > oder >\n enden! Default (table|thead|tbody|tfoot|th|tr|td|caption|colgroup|col|ol|ul|li|dl|dt|dd)');
@define('PLUGIN_EVENT_NL2BR_CONFIG_ERROR', 'Konfigurations Fehler! Die Option: "%s" wurde zur�ckgesetzt, weil die Option \'%s\' aktiv geschaltet war! Benutzen sie bitte nur eine dieser Optionen.');


<?php # $Id$

        @define('PLUGIN_EVENT_MAILER_NAME', 'Artikel mailen');
        @define('PLUGIN_EVENT_MAILER_DESC', 'Verschickt jeden neuen Artikel im Blog via E-Mail');
        @define('PLUGIN_EVENT_MAILER_RECIPIENT', 'Mail-Empfänger');
        @define('PLUGIN_EVENT_MAILER_RECIPIENTDESC', 'Die E-Mail Adresse an die die Artikel verschickt werden sollen (empfohlen: Eine Mailing-Liste)');
        @define('PLUGIN_EVENT_MAILER_LINK', 'URL des Artikels mailen?');
        @define('PLUGIN_EVENT_MAILER_LINKDESC', 'Verschickt die URL des Artikels.');
        @define('PLUGIN_EVENT_MAILER_STRIPTAGS', 'HTML entfernen?');
        @define('PLUGIN_EVENT_MAILER_STRIPTAGSDESC', 'Entfernt HTML-Anweisungen aus der Mail.');
        @define('PLUGIN_EVENT_MAILER_CONVERTP', 'HTML-Paragraphen in Leerzeilen wandeln?');
        @define('PLUGIN_EVENT_MAILER_CONVERTPDESC', 'Fügt einen Zeilenumbruch nach jedem HTML-Paragraphen ein. Besonders hilfreich im Zusammenhang mit der Option "HTML Entfernen", damit der Eintrag später selbst dann Umbrüche enthält, wenn sie nicht manuell eingegeben wurden.');
        @define('PLUGIN_EVENT_MAILER_RECIPIENTS', 'Mail-Empfänger (mehrere Empfänger mit Leerzeichen trennen)');
        @define('PLUGIN_EVENT_MAILER_NOTSENDDECISION', 'Dieser Eintrage wurde nicht per E-Mail versendet, da diese Option deaktiviert wurde.');
        @define('PLUGIN_EVENT_MAILER_SENDING', 'Versende');
        @define('PLUGIN_EVENT_MAILER_ISTOSENDIT', 'Diesen Eintrag per E-Mail versenden');
        @define('PLUGIN_EVENT_MAILER_SENDTOALL', 'An alle Redakteure schicken');

@define('PLUGIN_EVENT_MAILER_STRIPTAGS', 'Bilder und Hyperlinks beibehalten, wenn HTML entfernt wird?');
@define('PLUGIN_EVENT_MAILER_STRIPTAGSDESC', 'Gilt nur, wenn HTML entfernt wird. Falls aktiviert, werden Bilder und Hyperlinks in der Mail enthalten bleiben (in eckigen Klammern). Falls deaktiviert, werden alle Bilder und Hyperlinks auch entfernt.');

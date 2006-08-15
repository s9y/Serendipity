<?php # $Id$

/**
 *  @version $Revision$
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_TRACKBACK_NAME', 'Znacznik: Śledzenie wyjść (exits)');
@define('PLUGIN_EVENT_TRACKBACK_DESC', 'Śledź kliknięcia na linkach prowadzących na zewnątrz');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION', 'Użyć przekierowania URLa w URLu do komentującego użytkownika?');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_BLAHBLA', 'Zmniejsza niebezpieczeństwo rozpowszechniania spamu w komentarzach ale zarazem likwiduje pozytywny efekt linkowania URLem komentującego użytkownika. Wewnętrzne procedury Serendipity spowodują przekierowanie do strony docelowej i zapiszą takie "wyjście" w logach (przydatne przy tworzeniu statystyk wyjść). Procedura Google PageRank Deflector nie zezwoli takiemu linkowi na zwiększanie rankingu linka w wyszukiwarce Google. Pozostawienie pustego miejsca wyłącza zupełnie tę funkcjonalność (stawienie standardowe).');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_NONE', 'None');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_S9Y', 'Serendipity Exit-Tracking Routine');
@define('PLUGIN_EVENT_TRACKBACK_COMMENTREDIRECTION_GOOGLE', 'Google PageRank Deflector');

?>

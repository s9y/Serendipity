<?php # $Id: lang_pl.inc.php 2110 2008-02-11 02:12:07Z slothman $

/**
 *  @version $Revision: 2110 $
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_KARMA_NAME', 'Karma');
@define('PLUGIN_KARMA_BLAHBLAH', 'Niechaj odwiedzający Twoją stronę ocenią jakość Twoich wpisów');
@define('PLUGIN_KARMA_VOTETEXT', 'Karma dla tego artykułu: ');
@define('PLUGIN_KARMA_RATE', 'Oceń ten wpis: %s');
@define('PLUGIN_KARMA_VOTEPOINT_5', 'Bardzo dobry!');
@define('PLUGIN_KARMA_VOTEPOINT_4', 'Dobry');
@define('PLUGIN_KARMA_VOTEPOINT_3', 'Neutralny');
@define('PLUGIN_KARMA_VOTEPOINT_2', 'Nie interesujący');
@define('PLUGIN_KARMA_VOTEPOINT_1', 'Zły');
@define('PLUGIN_KARMA_VOTED', 'Twoja ocena "%s" została zachowana.');
@define('PLUGIN_KARMA_INVALID', 'Twoje ocenianie nie przebiegło prawidłowo.');
@define('PLUGIN_KARMA_ALREADYVOTED', 'Twoja ocena została już zachowana.');
@define('PLUGIN_KARMA_NOCOOKIE', 'Twoja przeglądarka musi obsługiwać ciasteczka (cookies) byś mógł (mogła) ocenić wpis.');
@define('PLUGIN_KARMA_CLOSED', 'Głosuj na wpisy nie starsze niż %s dni!');
@define('PLUGIN_KARMA_ENTRYTIME', 'Czas głosowania po publikacji');
@define('PLUGIN_KARMA_VOTINGTIME', 'Czas głosowania');
@define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH', 'Jak długo (w minutach) po publikacji Twojego wpisu będzie możliwe głosowanie bez ograniczeń? Standardowo: 1440 (jeden dzień)');
@define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH', 'Czas (w minutach) jaki musi minąć pomiędzy głosowaniami. Stosowane tylko gdy minie okres czasu zdefiniowany powyżej. Standardowo: 5');
@define('PLUGIN_KARMA_TIMEOUT', 'Ochrona przed floodem: Inny użytkownik dopiero co oddał swój głos. Proszę odczekać %s minut.');
@define('PLUGIN_KARMA_CURRENT', 'Aktualna karma: %2$s, głosów: %3$s');
@define('PLUGIN_KARMA_EXTENDEDONLY', 'Tylko przy Rozszerzonej treści wpisu');
@define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH', 'Pokaż głosowanie Karma po wyświetleniu Rozszerzonej treści wpisu');
@define('PLUGIN_KARMA_MAXKARMA', 'Czas głosowania Karma');
@define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH', 'Zezwól na głosowanie Karma tylko dla wpisów, które mają nie więcej niż X dni (standardowo: 7)');
@define('PLUGIN_KARMA_LOGGING', 'Logowanie głosów');
@define('PLUGIN_KARMA_LOGGING_BLAHBLAH', 'Czy oddane głosy mają być zapisane w logach?');
@define('PLUGIN_KARMA_ACTIVE', 'Włączyć głosowanie Karma?');
@define('PLUGIN_KARMA_ACTIVE_BLAHBLAH', 'Czy głosowanie Karma ma być włączone?');
@define('PLUGIN_KARMA_VISITS', 'Włączyć śledzenie wizyt?');
@define('PLUGIN_KARMA_VISITS_BLAHBLAH', 'Czy wyświetlenia wpisu mają być zliczane i wyświetlane?');
@define('PLUGIN_KARMA_VISITSCOUNT', ' wyświetleń: %4$s');
@define('PLUGIN_KARMA_STATISTICS_VISITS_TOP', 'Najczęściej wyświetlane wpisy');
@define('PLUGIN_KARMA_STATISTICS_VISITS_BOTTOM', 'Najrzadziej wyświetlane wpisy');
@define('PLUGIN_KARMA_STATISTICS_VOTES_TOP', 'Wpisy, na które oddano najwięcej głosów');
@define('PLUGIN_KARMA_STATISTICS_VOTES_BOTTOM', 'Wpisy, na które oddano najmniej głosów');
@define('PLUGIN_KARMA_STATISTICS_POINTS_TOP', 'Najwyżej ocenione wpisy');
@define('PLUGIN_KARMA_STATISTICS_POINTS_BOTTOM', 'Najniżej ocenione wpisy');
@define('PLUGIN_KARMA_STATISTICS_VISITS_NO', 'wizyt');
@define('PLUGIN_KARMA_STATISTICS_VOTES_NO', 'głosów');
@define('PLUGIN_KARMA_STATISTICS_POINTS_NO', 'punktów');

@define('PLUGIN_KARMA_STARRATING', 'Włączyć induwidualne ocenianie w tym wpisie?');
?>
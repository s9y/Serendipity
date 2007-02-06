<?php # $Id$

/**
 *  @version $Revision$
 *  @author Kostas CoSTa Brzezinski <costa@kofeina.net>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_REMOTERSS_TITLE', 'Kanały RSS/OPML');
@define('PLUGIN_REMOTERSS_BLAHBLAH', 'Pokazuje wpisy z zewnętrznych kanałów RSS/OPML (np. Blogroll)');
@define('PLUGIN_REMOTERSS_NUMBER', 'Ilość wpisów');
@define('PLUGIN_REMOTERSS_NUMBER_BLAHBLAH', 'Jak wiele wpisów ma być pokazywanych? (Standardowo: wszystkie wpisy danego feedu)');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE', 'Tytuł feedu');
@define('PLUGIN_REMOTERSS_SIDEBARTITLE_BLAHBLAH', 'Tytuł feedu - będzie pokazywany jako tytuł na Panelu Bocznym');
@define('PLUGIN_REMOTERSS_RSSURI', 'RSS/OPML URI');
@define('PLUGIN_REMOTERSS_RSSURI_BLAHBLAH', 'URI kanału RSS/OPML, który chcesz pokazać');
@define('PLUGIN_REMOTERSS_NOURI', 'Nie wybrano adresu kanału RSS/OPML');
@define('PLUGIN_REMOTERSS_RSSTARGET', 'Docelowy adres linku RSS/OPML');
@define('PLUGIN_REMOTERSS_RSSTARGET_BLAHBLAH', 'Adres docelowy linków podawanych przez kanał RSS/OPML (Standardowo: _blank - linki będą otwierane w nowym oknie przeglądarki)');
@define('PLUGIN_REMOTERSS_CACHETIME', 'Jak często pobierać dane?');
@define('PLUGIN_REMOTERSS_CACHETIME_BLAHBLAH', 'Zawartość feedu jest buforowana. Tu ustalasz jak często bufor ma być uaktualniany (w sekundach). (Standardowo: co 3 godziny - 10800 sekund)');
@define('PLUGIN_REMOTERSS_FEEDTYPE', 'Typ feedu');
@define('PLUGIN_REMOTERSS_FEEDTYPE_BLAHBLAH', 'Wybierz format podawanych przez kanał danych');
@define('PLUGIN_REMOTERSS_BULLETIMG', 'Znak graficzny');
@define('PLUGIN_REMOTERSS_BULLETIMG_BLAHBLAH', 'Możesz tu podać link do obrazka, jaki będzie wyświetlany przed każdym pobranym wpisem.');
@define('PLUGIN_REMOTERSS_DISPLAYDATE', 'Wyświetlać datę?');
@define('PLUGIN_REMOTERSS_DISPLAYDATE_BLAHBLAH', 'Czy wyświetlać datę pod każdą linią z wpisem?');

@define('PLUGIN_REMOTERSS_RSSLINK', 'Użyć linku RSS?');
@define('PLUGIN_REMOTERSS_RSSLINK_DESC', 'Czy ma być wyświetlony link podany w feedzie RSS?');
@define('PLUGIN_REMOTERSS_RSSFIELD', 'Wyświetlanie elementów RSS');
@define('PLUGIN_REMOTERSS_RSSFIELD_DESC', 'Który z elementów feeda RSS ma być wyświetlony? (np. "title", "content:encoded", "description", ...)');
@define('PLUGIN_REMOTERSS_RSSESCAPE', 'Wyłącz formatowanie HTML');
@define('PLUGIN_REMOTERSS_RSSESCAPE_DESC', 'Jeśli ta opcja zostanie włączona, kod HTML w feedzie zostanie usunięty. Jeśli ta opcja zostanie wyłączona, kod HTML w feedach będzie interpretowany. To może być potencjalne źródło problemów z bezpieczeństwem bloga jeśli feed nie pochodzi od Ciebie!');

?>

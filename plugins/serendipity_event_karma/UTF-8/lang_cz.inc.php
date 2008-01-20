<?php # $Id: lang_cz.inc.php 1475 2008-01-20 01:31:00 VladaAjgl $

/**
 *  @version $Revision: 1475 $
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_KARMA_NAME',                        'Karma');
@define('PLUGIN_KARMA_BLAHBLAH',                    'Čtenáři hodnotí kvalitu Vašich příspěvků');
@define('PLUGIN_KARMA_VOTETEXT',                    'Karma tohoto článku: ');
@define('PLUGIN_KARMA_RATE',                        'Ohodnoť tento článek: %s');
@define('PLUGIN_KARMA_VOTEPOINT_1',                 'Dost dobrý!');
@define('PLUGIN_KARMA_VOTEPOINT_2',                 'Dobrý');
@define('PLUGIN_KARMA_VOTEPOINT_3',                 'Průmer');
@define('PLUGIN_KARMA_VOTEPOINT_4',                 'Nezajímavý');
@define('PLUGIN_KARMA_VOTEPOINT_5',                 'Mizerný');
@define('PLUGIN_KARMA_VOTED',                       'Vyše hodnocení "%s" bylo zaznamenáno.');
@define('PLUGIN_KARMA_INVALID',                     'Vaše hlasování je neplatné.');
@define('PLUGIN_KARMA_ALREADYVOTED',                'Již jste hlasoval.');
@define('PLUGIN_KARMA_NOCOOKIE',                    'Váš prohlížeč musí podporovat cookies. jinak nemůžete hlasovat.');
@define('PLUGIN_KARMA_CLOSED',                      'Hodnocení článku novější než %s dní!');
@define('PLUGIN_KARMA_ENTRYTIME',                   'Čas pro hodnocení po zveřejnění příspěvku.');
@define('PLUGIN_KARMA_VOTINGTIME',                  'Čas pro hodnocení');
@define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH',          'Jak dlouho (v minutách) po zveřejnění příspěvku je povoleno neomezené hodnocení příspěvku? Standardně: 1400 (jeden den)');
@define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH',         'Jak dlouho (v minutách) je třeba čekat mezi dvěmi hodnoceními. Standardně: 5');
@define('PLUGIN_KARMA_TIMEOUT',                     'Ochrana proti zahlcením serveru: Jiný čtenář právě hlasoval. Počkejte před Vaším hlasování %s minut, prosím.');
@define('PLUGIN_KARMA_CURRENT',                     'Současná karma: %2$s, %3$s hlas(ů)');
@define('PLUGIN_KARMA_EXTENDEDONLY',                'Pouze kompletní článek');
@define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH',       'Zobrazovat karma-hodnocení pouze při zobrazení celého článku = při zobrazení rozšířené textové části.');
@define('PLUGIN_KARMA_MAXKARMA',                    'Období pro karmu');
@define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH',           'Povolit hlsování karmy pro článek, který je mladší než X dní (Standardně: 7)');
@define('PLUGIN_KARMA_LOGGING',                     'Logovat hlasy?');
@define('PLUGIN_KARMA_LOGGING_BLAHBLAH',            'Mají být informace o karma-hlasování logovány?');
@define('PLUGIN_KARMA_ACTIVE',                      'Povolit karmu?');
@define('PLUGIN_KARMA_ACTIVE_BLAHBLAH',             'Je karma-hlasování zapnuto?');
@define('PLUGIN_KARMA_VISITS',                      'Povolit sledování návštěv?');
@define('PLUGIN_KARMA_VISITS_BLAHBLAH',             'Má být každé klinkutí na zobrazení rozšířené textové části počítáno a zaznamenáváno?');
@define('PLUGIN_KARMA_VISITSCOUNT',                 ' %4$s zobrazení');
@define('PLUGIN_KARMA_STATISTICS_VISITS_TOP',       'Nečtenější příspěvky');
@define('PLUGIN_KARMA_STATISTICS_VISITS_BOTTOM',    'Nejméně čtené příspěvky');
@define('PLUGIN_KARMA_STATISTICS_VOTES_TOP',        'Příspěvky s nejvíce karma-hlasy');
@define('PLUGIN_KARMA_STATISTICS_VOTES_BOTTOM',     'Příspěvky s nejméně karma-hlasy');
@define('PLUGIN_KARMA_STATISTICS_POINTS_TOP',       'Příspěvky s nejlepší karmou');
@define('PLUGIN_KARMA_STATISTICS_POINTS_BOTTOM',    'Příspěvky s nejhorší karmou');
@define('PLUGIN_KARMA_STATISTICS_VISITS_NO',        'přečtení');
@define('PLUGIN_KARMA_STATISTICS_VOTES_NO',         'hlasů');
@define('PLUGIN_KARMA_STATISTICS_POINTS_NO',        'bodů');

@define('PLUGIN_KARMA_STARRATING',                  'Povolit individuální honocení příspěvku?');

@define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS',       'Sledovat návštěvy přihlášených uživatelů?');
@define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS_BLAHBLAH', 'Pokud je tato volba povolena, návštěvy uživatelů, kteří jsou přihlášeni, jsou také zaznamenávány. (Takovými užiateli jste například vy při zadávání nových přípěvků a jejich odlaďování)');
?>

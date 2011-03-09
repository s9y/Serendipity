<?php # lang_cs.inc.php 1475.3 2011-03-09 20:05:20 VladaAjgl $

/**
 *  @version 1475.3
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  @author Vladimir Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/02/15
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/03/08
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2011/03/09
 */

@define('PLUGIN_KARMA_NAME',		'Karma');
@define('PLUGIN_KARMA_BLAHBLAH',		'Čtenáři hodnotí kvalitu Vašich příspěvků');
@define('PLUGIN_KARMA_VOTETEXT',		'Karma tohoto článku: ');
@define('PLUGIN_KARMA_VOTETEXT_NAME',		'Zpráva požadavku o hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_NAME_BLAHBLAH',		'Text použitý při zobrazení pruhu pro hlasování.  (Přednastaveno: \'' . PLUGIN_KARMA_VOTETEXT . '\')');
@define('PLUGIN_KARMA_RATE',		'Ohodnoť tento článek: %s');
@define('PLUGIN_KARMA_VOTEPOINT_5',		'Dost dobrý!');
@define('PLUGIN_KARMA_VOTEPOINT_5_NAME',		'Popis pro nejlepší hodnocení');
@define('PLUGIN_KARMA_VOTEPOINT_5_BLAHBLAH',		'Slovní varianta pro nejlepší možné hodnocení. (Přednastaveno: \'' . PLUGIN_KARMA_VOTEPOINT_5 . '\')');
@define('PLUGIN_KARMA_VOTEPOINT_4',		'Dobrý');
@define('PLUGIN_KARMA_VOTEPOINT_4_NAME',		'Popis pro dobré hodnocení');
@define('PLUGIN_KARMA_VOTEPOINT_4_BLAHBLAH',		'Slovní varianta pro dobré hodnocení. (Přednastaveno: \'' . PLUGIN_KARMA_VOTEPOINT_4 . '\')');
@define('PLUGIN_KARMA_VOTEPOINT_3',		'Průmer');
@define('PLUGIN_KARMA_VOTEPOINT_3_NAME',		'Popis pro neutrální hodnocení');
@define('PLUGIN_KARMA_VOTEPOINT_3_BLAHBLAH',		'Slovní varianta pro neutrální hodnocení. (Přednastaveno: \'' . PLUGIN_KARMA_VOTEPOINT_3 . '\')');
@define('PLUGIN_KARMA_VOTEPOINT_2',		'Nezajímavý');
@define('PLUGIN_KARMA_VOTEPOINT_2_NAME',		'Popis pro slabé hodnocení');
@define('PLUGIN_KARMA_VOTEPOINT_2_BLAHBLAH',		'Slovní varianta pro slabé hodnocení. (Přednastaveno: \'' . PLUGIN_KARMA_VOTEPOINT_2 . '\')');
@define('PLUGIN_KARMA_VOTEPOINT_1',		'Mizerný');
@define('PLUGIN_KARMA_VOTEPOINT_1_NAME',		'Popis pro nejhorší hodnocení');
@define('PLUGIN_KARMA_VOTEPOINT_1_BLAHBLAH',		'Slovní varianta pro nejhorší hodnocení. (Přednastaveno: \'' . PLUGIN_KARMA_VOTEPOINT_1 . '\')');
@define('PLUGIN_KARMA_VOTETEXT_5',		'+2');
@define('PLUGIN_KARMA_VOTETEXT_5_NAME',		'Hodnota nejlepšího hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_5_BLAHBLAH',		'Text, který se zobrazí jako hodnota nejlepšího hodnocení v hodnotícím pruhu. (Přednastaveno: ' . PLUGIN_KARMA_VOTETEXT_5 . ')');
@define('PLUGIN_KARMA_VOTETEXT_4',		'+1');
@define('PLUGIN_KARMA_VOTETEXT_4_NAME',		'Hodnota dobrého hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_4_BLAHBLAH',		'Text, který se zobrazí jako hodnota dobrého hodnocení v hodnotícím pruhu. (Přednastaveno: ' . PLUGIN_KARMA_VOTETEXT_4 . ')');
@define('PLUGIN_KARMA_VOTETEXT_3',		'0');
@define('PLUGIN_KARMA_VOTETEXT_3_NAME',		'Hodnota neutrálního hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_3_BLAHBLAH',		'Text, který se zobrazí jako hodnota neutrálního hodnocení v hodnotícím pruhu. (Přednastaveno: ' . PLUGIN_KARMA_VOTETEXT_3 . ')');
@define('PLUGIN_KARMA_VOTETEXT_2',		'-1');
@define('PLUGIN_KARMA_VOTETEXT_2_NAME',		'Hodnota slabého hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_2_BLAHBLAH',		'Text, který se zobrazí jako hodnota slabého hodnocení v hodnotícím pruhu. (Přednastaveno: ' . PLUGIN_KARMA_VOTETEXT_2 . ')');
@define('PLUGIN_KARMA_VOTETEXT_1',		'-2');
@define('PLUGIN_KARMA_VOTETEXT_1_NAME',		'Hodnota nejhoršího hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_1_BLAHBLAH',		'Text, který se zobrazí jako hodnota nejhoršího hodnocení v hodnotícím pruhu. (Přednastaveno: ' . PLUGIN_KARMA_VOTETEXT_1 . ')');
@define('PLUGIN_KARMA_VOTED',		'Vyše hodnocení "%s" bylo zaznamenáno.');
@define('PLUGIN_KARMA_VOTES',		'%3$s hlas(ů)');
@define('PLUGIN_KARMA_INVALID',		'Vaše hlasování je neplatné.');
@define('PLUGIN_KARMA_ALREADYVOTED',		'Již jste hlasoval.');
@define('PLUGIN_KARMA_NOCOOKIE',		'Váš prohlížeč musí podporovat cookies. jinak nemůžete hlasovat.');
@define('PLUGIN_KARMA_CLOSED',		'Hodnocení článku novější než %s dní!');
@define('PLUGIN_KARMA_ENTRYTIME',		'Čas pro hodnocení po zveřejnění příspěvku.');
@define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH',		'Jak dlouho (v minutách) po zveřejnění příspěvku je povoleno neomezené hodnocení příspěvku? Standardně: 1400 (jeden den)');
@define('PLUGIN_KARMA_VOTINGTIME',		'Čas pro hodnocení');
@define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH',		'Jak dlouho (v minutách) je třeba čekat mezi dvěmi hodnoceními. Standardně: 5');
@define('PLUGIN_KARMA_TIMEOUT',		'Ochrana proti zahlcením serveru: Jiný čtenář právě hlasoval. Počkejte před Vaším hlasování %s minut, prosím.');
@define('PLUGIN_KARMA_CURRENT',		'Současná karma: %2$s, %3$s hlas(ů)');
@define('PLUGIN_KARMA_CURRENT_NAME',		'Zpráva současného hodnocení');
@define('PLUGIN_KARMA_CURRENT_NAME_BLAHBLAH',		'Text použitý pro zobrazení současného hodnocení (%2$s je číselné hodnocení; %3$s je počet hlasů) (Přednastaveno: ' . PLUGIN_KARMA_CURRENT . ')');
@define('PLUGIN_KARMA_EXTENDEDONLY',		'Pouze kompletní článek');
@define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH',		'Zobrazovat karma-hodnocení pouze při zobrazení celého článku = při zobrazení rozšířené textové části.');
@define('PLUGIN_KARMA_MAXKARMA',		'Období pro karmu');
@define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH',		'Povolit hlsování karmy pro článek, který je mladší než X dní (Standardně: 7)');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES',		'Minimální počet hlasů pro zobrazení');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES_BLAHBLAH',		'Zobrazí hodnocení pouze pokud počet hlasů přesahuje zde zadanou hodnotu. Pokud chcete zobrazovat hodnocení vždy, zadejte 0.');
@define('PLUGIN_KARMA_LOGGING',		'Logovat hlasy?');
@define('PLUGIN_KARMA_LOGGING_BLAHBLAH',		'Mají být informace o karma-hlasování logovány?');
@define('PLUGIN_KARMA_ACTIVE',		'Povolit karmu?');
@define('PLUGIN_KARMA_ACTIVE_BLAHBLAH',		'Je karma-hlasování zapnuto?');
//--JAM:@define('PLUGIN_KARMA_ALIGNMENT', 'Voting Bar Alignment');
//--JAM:@define('PLUGIN_KARMA_ALIGNMENT_BLAHBLAH', 'Alignment of voting bar in the entry footer.  Templates can override this setting with !important (Default: right)');
//--JAM: @define('PLUGIN_KARMA_ALIGNMENT_DETECT', 'from style');
@define('PLUGIN_KARMA_VISITS',		'Povolit sledování návštěv?');
@define('PLUGIN_KARMA_VISITS_BLAHBLAH',		'Má být každé klinkutí na zobrazení rozšířené textové části počítáno a zaznamenáváno?');
@define('PLUGIN_KARMA_VISITSCOUNT',		' %4$s zobrazení');
@define('PLUGIN_KARMA_STATISTICS_VISITS_TOP',		'Nečtenější příspěvky');
@define('PLUGIN_KARMA_STATISTICS_VISITS_BOTTOM',		'Nejméně čtené příspěvky');
@define('PLUGIN_KARMA_STATISTICS_VOTES_TOP',		'Příspěvky s nejvíce karma-hlasy');
@define('PLUGIN_KARMA_STATISTICS_VOTES_BOTTOM',		'Příspěvky s nejméně karma-hlasy');
@define('PLUGIN_KARMA_STATISTICS_POINTS_TOP',		'Příspěvky s nejlepší karmou');
@define('PLUGIN_KARMA_STATISTICS_POINTS_BOTTOM',		'Příspěvky s nejhorší karmou');
@define('PLUGIN_KARMA_STATISTICS_VISITS_NO',		'přečtení');
@define('PLUGIN_KARMA_STATISTICS_VOTES_NO',		'hlasů');
@define('PLUGIN_KARMA_STATISTICS_POINTS_NO',		'bodů');

@define('PLUGIN_KARMA_STARRATING',		'Povolit individuální honocení příspěvku?');

@define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS',		'Sledovat návštěvy přihlášených uživatelů?');
@define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS_BLAHBLAH',		'Pokud je tato volba povolena, návštěvy uživatelů, kteří jsou přihlášeni, jsou také zaznamenávány. (Takovými užiateli jste například vy při zadávání nových přípěvků a jejich odlaďování)');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS',		'Minimální počet návštěv pro zobrazení');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS_BLAHBLAH',		'Počet návštěv bude zobrazován pouze pokud jejich počet překročí zde uvedenou hodnotu. Chcete-li počítadlo zobrazovat vždy, zadejte 0.');
@define('PLUGIN_KARMA_WORDRATING',		'Zobrazovat hodnocení ve slovní formě?');
@define('PLUGIN_KARMA_WORDRATING_BLAHBLAH',		'Chcete hodnocení zobrazit jako slova nebo jako čísla? (Přednastaveno: NE; použít číselné hodnocení)');
@define('PLUGIN_KARMA_IMAGE_WITH_MESSAGE',		'Zobrazovat hodnotící zprávu?');
@define('PLUGIN_KARMA_IMAGE_WITH_MESSAGE_BLAHBLAH',		'Zobrazit textový požadavek na hlasování před grafickými pruhy? (nemá na pruhy žádný efekt) (Přednastaveno: ano)');
@define('PLUGIN_KARMA_IMAGE_WITH_CURR',		'Zobrazit textovou zprávu spolu se současným hodnocením?');
@define('PLUGIN_KARMA_IMAGE_WITH_CURR_BLAHBLAH',		'Zobrazovat textové informace za grafickými pruhy? (nemá na pruhy žádný efekt) (Přednastaveno: ano)');
@define('PLUGIN_KARMA_IMAGE_WITH_VISITS',		'Zobrazovat text návštěv?');
@define('PLUGIN_KARMA_IMAGE_WITH_VISITS_BLAHBLAH',		'Vložit počet návštěv i jako text? (za pruhy, nemá na pruhy žádný efekt) (Přednastaveno: ano)');
@define('PLUGIN_KARMA_PREVIEW_BG',		'Pozadí pro tabulku náhledu, níže');
@define('PLUGIN_KARMA_PREVIEW_BG_BLAHBLAH',		'Platná je jakákoliv hodnota CSS stylů; bude použita jako atribut \'background\' pro tabulku s náhledem, a to POUZE na administrativní stránce. Nemá žádný efekt na pruhy s hodnocením.');
@define('PLUGIN_KARMA_IMAGE',		'Typ hlasovacích pruhů');
@define('PLUGIN_KARMA_IMAGE_DESC',		'Vyberte soubor s obrázkem (např. diamonds.png) pro hlasování s obrázky. Vyberte \'' . PLUGIN_KARMA_STATISTICS_POINTS_NO . '\' pro hlasování pomocí textu.');
@define('PLUGIN_KARMA_NO_IMAGES',		'V adresáří img/ v pluginu nejsou žádné obrázky!');
@define('PLUGIN_KARMA_IMAGE_RATING',		'%1.2f z 5');
@define('PLUGIN_KARMA_IMAGE_INT_RATING',		'%d z 5');
@define('PLUGIN_KARMA_IMAGE_NONE_RATING',		'žádný');
@define('PLUGIN_KARMA_TAB_OPTIONS',		'Volby');
@define('PLUGIN_KARMA_TAB_APPEARANCE',		'Vzhled');
@define('PLUGIN_KARMA_TAB_TEXT',		'Text');
@define('PLUGIN_KARMA_DISPLAY_LOG',		'Správa Karmy');
@define('PLUGIN_KARMA_REMOVED_POINTS',		'%s bodů odstraněno z příspěvku %s');
@define('PLUGIN_KARMA_APPROVED_POINTS',		'%s bodů pro příspěvek %s potvrzeno');
@define('PLUGIN_KARMA_POINTS_ERROR',		'Chyba při aktualizaci bodů pro příspěvek %s!');
@define('PLUGIN_KARMA_REMOVE_ERROR',		'Chyba při odstraňování hlasu pro příspěvek %s! (Počet bodů byl nicméně aktualizován.)');
@define('PLUGIN_KARMA_UPDATE_ERROR',		'Zatím žádné hlasy pro příspěvek %s!');
@define('PLUGIN_KARMA_INVALID_INPUT',		'Nesprávné zadání!');
@define('PLUGIN_KARMA_DELETE_VOTES',		'Vymazat vybrané hlasy');
@define('PLUGIN_KARMA_APPROVE_VOTES',		'Potvrdit vybrané hlasy');

// Next lines were translated on 2011/03/09
@define('PLUGIN_KARMA_ACTIVE_REGISTERED',		'Hlasovat mohou pouze přihlášení uživatelé');
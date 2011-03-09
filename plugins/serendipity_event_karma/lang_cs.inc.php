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
@define('PLUGIN_KARMA_BLAHBLAH',		'Ètenáøi hodnotí kvalitu Vašich pøíspìvkù');
@define('PLUGIN_KARMA_VOTETEXT',		'Karma tohoto èlánku: ');
@define('PLUGIN_KARMA_VOTETEXT_NAME',		'Zpráva poadavku o hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_NAME_BLAHBLAH',		'Text pouitı pøi zobrazení pruhu pro hlasování.  (Pøednastaveno: \'' . PLUGIN_KARMA_VOTETEXT . '\')');
@define('PLUGIN_KARMA_RATE',		'Ohodno tento èlánek: %s');
@define('PLUGIN_KARMA_VOTEPOINT_5',		'Dost dobrı!');
@define('PLUGIN_KARMA_VOTEPOINT_5_NAME',		'Popis pro nejlepší hodnocení');
@define('PLUGIN_KARMA_VOTEPOINT_5_BLAHBLAH',		'Slovní varianta pro nejlepší moné hodnocení. (Pøednastaveno: \'' . PLUGIN_KARMA_VOTEPOINT_5 . '\')');
@define('PLUGIN_KARMA_VOTEPOINT_4',		'Dobrı');
@define('PLUGIN_KARMA_VOTEPOINT_4_NAME',		'Popis pro dobré hodnocení');
@define('PLUGIN_KARMA_VOTEPOINT_4_BLAHBLAH',		'Slovní varianta pro dobré hodnocení. (Pøednastaveno: \'' . PLUGIN_KARMA_VOTEPOINT_4 . '\')');
@define('PLUGIN_KARMA_VOTEPOINT_3',		'Prùmer');
@define('PLUGIN_KARMA_VOTEPOINT_3_NAME',		'Popis pro neutrální hodnocení');
@define('PLUGIN_KARMA_VOTEPOINT_3_BLAHBLAH',		'Slovní varianta pro neutrální hodnocení. (Pøednastaveno: \'' . PLUGIN_KARMA_VOTEPOINT_3 . '\')');
@define('PLUGIN_KARMA_VOTEPOINT_2',		'Nezajímavı');
@define('PLUGIN_KARMA_VOTEPOINT_2_NAME',		'Popis pro slabé hodnocení');
@define('PLUGIN_KARMA_VOTEPOINT_2_BLAHBLAH',		'Slovní varianta pro slabé hodnocení. (Pøednastaveno: \'' . PLUGIN_KARMA_VOTEPOINT_2 . '\')');
@define('PLUGIN_KARMA_VOTEPOINT_1',		'Mizernı');
@define('PLUGIN_KARMA_VOTEPOINT_1_NAME',		'Popis pro nejhorší hodnocení');
@define('PLUGIN_KARMA_VOTEPOINT_1_BLAHBLAH',		'Slovní varianta pro nejhorší hodnocení. (Pøednastaveno: \'' . PLUGIN_KARMA_VOTEPOINT_1 . '\')');
@define('PLUGIN_KARMA_VOTETEXT_5',		'+2');
@define('PLUGIN_KARMA_VOTETEXT_5_NAME',		'Hodnota nejlepšího hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_5_BLAHBLAH',		'Text, kterı se zobrazí jako hodnota nejlepšího hodnocení v hodnotícím pruhu. (Pøednastaveno: ' . PLUGIN_KARMA_VOTETEXT_5 . ')');
@define('PLUGIN_KARMA_VOTETEXT_4',		'+1');
@define('PLUGIN_KARMA_VOTETEXT_4_NAME',		'Hodnota dobrého hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_4_BLAHBLAH',		'Text, kterı se zobrazí jako hodnota dobrého hodnocení v hodnotícím pruhu. (Pøednastaveno: ' . PLUGIN_KARMA_VOTETEXT_4 . ')');
@define('PLUGIN_KARMA_VOTETEXT_3',		'0');
@define('PLUGIN_KARMA_VOTETEXT_3_NAME',		'Hodnota neutrálního hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_3_BLAHBLAH',		'Text, kterı se zobrazí jako hodnota neutrálního hodnocení v hodnotícím pruhu. (Pøednastaveno: ' . PLUGIN_KARMA_VOTETEXT_3 . ')');
@define('PLUGIN_KARMA_VOTETEXT_2',		'-1');
@define('PLUGIN_KARMA_VOTETEXT_2_NAME',		'Hodnota slabého hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_2_BLAHBLAH',		'Text, kterı se zobrazí jako hodnota slabého hodnocení v hodnotícím pruhu. (Pøednastaveno: ' . PLUGIN_KARMA_VOTETEXT_2 . ')');
@define('PLUGIN_KARMA_VOTETEXT_1',		'-2');
@define('PLUGIN_KARMA_VOTETEXT_1_NAME',		'Hodnota nejhoršího hodnocení');
@define('PLUGIN_KARMA_VOTETEXT_1_BLAHBLAH',		'Text, kterı se zobrazí jako hodnota nejhoršího hodnocení v hodnotícím pruhu. (Pøednastaveno: ' . PLUGIN_KARMA_VOTETEXT_1 . ')');
@define('PLUGIN_KARMA_VOTED',		'Vyše hodnocení "%s" bylo zaznamenáno.');
@define('PLUGIN_KARMA_VOTES',		'%3$s hlas(ù)');
@define('PLUGIN_KARMA_INVALID',		'Vaše hlasování je neplatné.');
@define('PLUGIN_KARMA_ALREADYVOTED',		'Ji jste hlasoval.');
@define('PLUGIN_KARMA_NOCOOKIE',		'Váš prohlíeè musí podporovat cookies. jinak nemùete hlasovat.');
@define('PLUGIN_KARMA_CLOSED',		'Hodnocení èlánku novìjší ne %s dní!');
@define('PLUGIN_KARMA_ENTRYTIME',		'Èas pro hodnocení po zveøejnìní pøíspìvku.');
@define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH',		'Jak dlouho (v minutách) po zveøejnìní pøíspìvku je povoleno neomezené hodnocení pøíspìvku? Standardnì: 1400 (jeden den)');
@define('PLUGIN_KARMA_VOTINGTIME',		'Èas pro hodnocení');
@define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH',		'Jak dlouho (v minutách) je tøeba èekat mezi dvìmi hodnoceními. Standardnì: 5');
@define('PLUGIN_KARMA_TIMEOUT',		'Ochrana proti zahlcením serveru: Jinı ètenáø právì hlasoval. Poèkejte pøed Vaším hlasování %s minut, prosím.');
@define('PLUGIN_KARMA_CURRENT',		'Souèasná karma: %2$s, %3$s hlas(ù)');
@define('PLUGIN_KARMA_CURRENT_NAME',		'Zpráva souèasného hodnocení');
@define('PLUGIN_KARMA_CURRENT_NAME_BLAHBLAH',		'Text pouitı pro zobrazení souèasného hodnocení (%2$s je èíselné hodnocení; %3$s je poèet hlasù) (Pøednastaveno: ' . PLUGIN_KARMA_CURRENT . ')');
@define('PLUGIN_KARMA_EXTENDEDONLY',		'Pouze kompletní èlánek');
@define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH',		'Zobrazovat karma-hodnocení pouze pøi zobrazení celého èlánku = pøi zobrazení rozšíøené textové èásti.');
@define('PLUGIN_KARMA_MAXKARMA',		'Období pro karmu');
@define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH',		'Povolit hlsování karmy pro èlánek, kterı je mladší ne X dní (Standardnì: 7)');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES',		'Minimální poèet hlasù pro zobrazení');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VOTES_BLAHBLAH',		'Zobrazí hodnocení pouze pokud poèet hlasù pøesahuje zde zadanou hodnotu. Pokud chcete zobrazovat hodnocení vdy, zadejte 0.');
@define('PLUGIN_KARMA_LOGGING',		'Logovat hlasy?');
@define('PLUGIN_KARMA_LOGGING_BLAHBLAH',		'Mají bıt informace o karma-hlasování logovány?');
@define('PLUGIN_KARMA_ACTIVE',		'Povolit karmu?');
@define('PLUGIN_KARMA_ACTIVE_BLAHBLAH',		'Je karma-hlasování zapnuto?');
//--JAM:@define('PLUGIN_KARMA_ALIGNMENT', 'Voting Bar Alignment');
//--JAM:@define('PLUGIN_KARMA_ALIGNMENT_BLAHBLAH', 'Alignment of voting bar in the entry footer.  Templates can override this setting with !important (Default: right)');
//--JAM: @define('PLUGIN_KARMA_ALIGNMENT_DETECT', 'from style');
@define('PLUGIN_KARMA_VISITS',		'Povolit sledování návštìv?');
@define('PLUGIN_KARMA_VISITS_BLAHBLAH',		'Má bıt kadé klinkutí na zobrazení rozšíøené textové èásti poèítáno a zaznamenáváno?');
@define('PLUGIN_KARMA_VISITSCOUNT',		' %4$s zobrazení');
@define('PLUGIN_KARMA_STATISTICS_VISITS_TOP',		'Neètenìjší pøíspìvky');
@define('PLUGIN_KARMA_STATISTICS_VISITS_BOTTOM',		'Nejménì ètené pøíspìvky');
@define('PLUGIN_KARMA_STATISTICS_VOTES_TOP',		'Pøíspìvky s nejvíce karma-hlasy');
@define('PLUGIN_KARMA_STATISTICS_VOTES_BOTTOM',		'Pøíspìvky s nejménì karma-hlasy');
@define('PLUGIN_KARMA_STATISTICS_POINTS_TOP',		'Pøíspìvky s nejlepší karmou');
@define('PLUGIN_KARMA_STATISTICS_POINTS_BOTTOM',		'Pøíspìvky s nejhorší karmou');
@define('PLUGIN_KARMA_STATISTICS_VISITS_NO',		'pøeètení');
@define('PLUGIN_KARMA_STATISTICS_VOTES_NO',		'hlasù');
@define('PLUGIN_KARMA_STATISTICS_POINTS_NO',		'bodù');

@define('PLUGIN_KARMA_STARRATING',		'Povolit individuální honocení pøíspìvku?');

@define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS',		'Sledovat návštìvy pøihlášenıch uivatelù?');
@define('PLUGIN_KARMA_VISITS_LOGGEDIN_USERS_BLAHBLAH',		'Pokud je tato volba povolena, návštìvy uivatelù, kteøí jsou pøihlášeni, jsou také zaznamenávány. (Takovımi uiateli jste napøíklad vy pøi zadávání novıch pøípìvkù a jejich odlaïování)');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS',		'Minimální poèet návštìv pro zobrazení');
@define('PLUGIN_KARMA_MIN_DISPLAYABLE_VISITS_BLAHBLAH',		'Poèet návštìv bude zobrazován pouze pokud jejich poèet pøekroèí zde uvedenou hodnotu. Chcete-li poèítadlo zobrazovat vdy, zadejte 0.');
@define('PLUGIN_KARMA_WORDRATING',		'Zobrazovat hodnocení ve slovní formì?');
@define('PLUGIN_KARMA_WORDRATING_BLAHBLAH',		'Chcete hodnocení zobrazit jako slova nebo jako èísla? (Pøednastaveno: NE; pouít èíselné hodnocení)');
@define('PLUGIN_KARMA_IMAGE_WITH_MESSAGE',		'Zobrazovat hodnotící zprávu?');
@define('PLUGIN_KARMA_IMAGE_WITH_MESSAGE_BLAHBLAH',		'Zobrazit textovı poadavek na hlasování pøed grafickımi pruhy? (nemá na pruhy ádnı efekt) (Pøednastaveno: ano)');
@define('PLUGIN_KARMA_IMAGE_WITH_CURR',		'Zobrazit textovou zprávu spolu se souèasnım hodnocením?');
@define('PLUGIN_KARMA_IMAGE_WITH_CURR_BLAHBLAH',		'Zobrazovat textové informace za grafickımi pruhy? (nemá na pruhy ádnı efekt) (Pøednastaveno: ano)');
@define('PLUGIN_KARMA_IMAGE_WITH_VISITS',		'Zobrazovat text návštìv?');
@define('PLUGIN_KARMA_IMAGE_WITH_VISITS_BLAHBLAH',		'Vloit poèet návštìv i jako text? (za pruhy, nemá na pruhy ádnı efekt) (Pøednastaveno: ano)');
@define('PLUGIN_KARMA_PREVIEW_BG',		'Pozadí pro tabulku náhledu, níe');
@define('PLUGIN_KARMA_PREVIEW_BG_BLAHBLAH',		'Platná je jakákoliv hodnota CSS stylù; bude pouita jako atribut \'background\' pro tabulku s náhledem, a to POUZE na administrativní stránce. Nemá ádnı efekt na pruhy s hodnocením.');
@define('PLUGIN_KARMA_IMAGE',		'Typ hlasovacích pruhù');
@define('PLUGIN_KARMA_IMAGE_DESC',		'Vyberte soubor s obrázkem (napø. diamonds.png) pro hlasování s obrázky. Vyberte \'' . PLUGIN_KARMA_STATISTICS_POINTS_NO . '\' pro hlasování pomocí textu.');
@define('PLUGIN_KARMA_NO_IMAGES',		'V adresáøí img/ v pluginu nejsou ádné obrázky!');
@define('PLUGIN_KARMA_IMAGE_RATING',		'%1.2f z 5');
@define('PLUGIN_KARMA_IMAGE_INT_RATING',		'%d z 5');
@define('PLUGIN_KARMA_IMAGE_NONE_RATING',		'ádnı');
@define('PLUGIN_KARMA_TAB_OPTIONS',		'Volby');
@define('PLUGIN_KARMA_TAB_APPEARANCE',		'Vzhled');
@define('PLUGIN_KARMA_TAB_TEXT',		'Text');
@define('PLUGIN_KARMA_DISPLAY_LOG',		'Správa Karmy');
@define('PLUGIN_KARMA_REMOVED_POINTS',		'%s bodù odstranìno z pøíspìvku %s');
@define('PLUGIN_KARMA_APPROVED_POINTS',		'%s bodù pro pøíspìvek %s potvrzeno');
@define('PLUGIN_KARMA_POINTS_ERROR',		'Chyba pøi aktualizaci bodù pro pøíspìvek %s!');
@define('PLUGIN_KARMA_REMOVE_ERROR',		'Chyba pøi odstraòování hlasu pro pøíspìvek %s! (Poèet bodù byl nicménì aktualizován.)');
@define('PLUGIN_KARMA_UPDATE_ERROR',		'Zatím ádné hlasy pro pøíspìvek %s!');
@define('PLUGIN_KARMA_INVALID_INPUT',		'Nesprávné zadání!');
@define('PLUGIN_KARMA_DELETE_VOTES',		'Vymazat vybrané hlasy');
@define('PLUGIN_KARMA_APPROVE_VOTES',		'Potvrdit vybrané hlasy');

// Next lines were translated on 2011/03/09
@define('PLUGIN_KARMA_ACTIVE_REGISTERED',		'Hlasovat mohou pouze pøihlášení uivatelé');
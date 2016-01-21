<?php

/**
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @translated 2009/07/06
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2011/04/17
 */

@define('PLUGIN_EVENT_GRAVATAR_NAME',               'Avatar Plugin');
@define('PLUGIN_EVENT_GRAVATAR_DESC',               'Zobrazuje avatary (ikona èi obrázek pøispìvatele) v komentáøích. Podporovány jsou slu¾by Gravatar, Pavatar, Favatar a MyBlogLog.');

@define('PLUGIN_EVENT_GRAVATAR_USE_SMARTY',         'Tvoøit smarty tag');
@define('PLUGIN_EVENT_GRAVATAR_USE_SMARTY_DESC',    'Pokud je tato volba zapnuta, obrázky avatarù nejsou zapsány pøímo do textu komentáøe, ale je místo toho vygenerován tag {$comment.avatar} pro ¹ablonovací systém smarty. Pak budou avatary zobrazovat pouze styly vzhledu, které tento tag pou¾ívají. Nejjednodu¹¹í zpùsob, jak zjistit, jestli Vá¹ styl vzhledu podporuje avatary, je vyzkou¹et zapnout toto nastavení.');

@define('PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR',      'Výchozí avatar');
@define('PLUGIN_EVENT_GRAVATAR_SIZE',               'Velikost');
@define('PLUGIN_EVENT_GRAVATAR_RATING',             'Hodnocení Gravatar');
@define('PLUGIN_EVENT_GRAVATAR_RATING_NO',          '®ádné hodnocení');
@define('PLUGIN_EVENT_GRAVATAR_RATING_G',           'Obecné - General (G)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_R',           'Omezené - Restricted (R)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_PG',          'Rodièovské vedení - Parental Guidance (PG)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_X',           'Explicitní (X)');

@define('PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR_DESC', 'Jaká je URL adresa k výchozímu avataru? Zadejte absolutní URL cestu nebo relativní URL cestu, vzhledem ke koøenové slo¾ce serveru.');
@define('PLUGIN_EVENT_GRAVATAR_SIZE_DESC',          'Nejvìt¹í rozmìr avataru (v pixelech)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_DESC',        'Hodnocení obrázku');

@define('PLUGIN_EVENT_GRAVATAR_CACHING',            'Cachovací èas');
@define('PLUGIN_EVENT_GRAVATAR_CACHING_DESC',       'Pokud chcete cachovat avatary (doporuèeno!), zadejte èas v hodinách, bìhem které bude avatar vkládán do blogu z Va¹eho serveru, ani¾ by byl kontaktován server slu¾by s avatary. Výhoda cachování je, ¾e se u¹etøí komunikace mezi blogem a serverem s avatary, a ¾e bude blog ponìkud nezávislej¹í na momentálním stavu avatarových slu¾eb, Hodnota "0" vypne cachování.');

@define('PLUGIN_EVENT_GRAVATAR_ALIGN',              'Zarovnání');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_DESC',         'Tato volba urèuje zarovnání avataru, ale pouze pokud není pou¾ívána volba "smarty tag". Pøi pou¾ití zmínìné volby je na Vás zaøídit zarovnání po svém pomocí CSS stylu pro obrázek s avatarem.');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_LEFT',         'vlevo');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_RIGHT',        'vpravo');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_NONE',         'bez zarovnání');

@define('PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES',     'Pou¾ít v postranním sloupci');
@define('PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES_DESC','Mají se avatary zobrazovat také v postranním sloupci v bloku s nejnovìj¹ími komentáøi?');

@define('PLUGIN_EVENT_GRAVATAR_INFOLINE',           'Zobrazovat informaci o typu avataru');
@define('PLUGIN_EVENT_GRAVATAR_INFOLINE_DESC',      'Pokud je zapnuto, pak se pod polem pro zadání textu komentáøe bude zobrazovat informace, které avatary jsou momentálnì podporovány.');

@define('PLUGIN_EVENT_GRAVATAR_METHOD_DEFAULT',     'Výchozí avatar');
@define('PLUGIN_EVENT_GRAVATAR_METHOD',             'Stahovat avatary pomocí');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_DESC',        'Pokud pøedchozí pokus sel¾e, zkus tento. Typy "Monster ID", "Defaultavatar" a "---" nikdy nesel¾ou. V¹echny metody, které následují po jedné ze zmínìných metod, nebudou nikdy zkou¹eny!');
@define('PLUGIN_EVENT_GRAVATAR_SUPPORTED',          '%s obrázky autorù podporovány.');

@define('PLUGIN_EVENT_GRAVATAR_AUTOR_ALT',          'Jméno autora v atributu ALT v obrázku');
@define('PLUGIN_EVENT_GRAVATAR_AUTOR_ALT_DESC',     'Obvykle se jméno autora zobrazuje v atributu TITLE v obrázku s avatarem a atribut ALT je vyplnìn hvìzdièkami. To zabraòuje zhroucení vzhledu stránky, pokud není prohlí¾eè schopen natáhnout obrázky. Ale slepci pou¾ívají pro prohlí¾ení internetu èasto právì atribut ALT, tak¾e pokud jim chcete zpøístupnit své stránky, zapnìte tuto volbu.');

@define('PLUGIN_EVENT_GRAVATAR_LONG_DESCRIPTION',   '<b><a href="http://www.gravatar.com" target="_blank">Gravatar</a></b> je centrální úlo¾i¹tì obrázkù u¾ivatelù spøa¾ené s emailovou adresou, ' .
        '<b><a href="http://www.peej.co.uk/projects/favatars.html" target="_blank">Favatar</a></b> poskytuje favicony naètené z osobních stránek u¾ivatele, <b><a href="http://www.pavatar.com" target="_blank">Pavatar</a></b> ' .
        'jsou obrázky ulo¾ené na osobních stránkách pisatele, <b><a href="http://www.mybloglog.com" target="_blank">MyBlogLog avatar</a></b> jsou centrálnì ukládané obrázky a ' .
        '<b><a href="http://www.splitbrain.org/go/monsterid" target="_blank">Monster ID</a></b>, <b><a href="http://scott.sherrillmix.com/blog/blogger/wp_identicon/" target="_blank">Identicon</a></b> a <b><a href="http://www.shamusyoung.com/twentysidedtale/?p=1462" target="_blank">Wavatar</a></b> avatary jsou nahrávané obrázky vytvoøené jednotlivými u¾ivateli.');
@define('PLUGIN_EVENT_GRAVATAR_EXTLING_WARNING',    '<font color="red">POZOR!</font> Tento plugin musí být zaøazen pøed v¹emi pluginy, které mìní odkazy (jako napø. plugin "exit tracking plugin")! ' .
        '<font color="red">Jinak nebudou pracovat avatary slu¾eb Pavatar, Favatar a MayBlogLog!</font>');

@define('PLUGIN_EVENT_GRAVATAR_FALLBACK',           'Gravatar fallback');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_DESC',      'Gravatar má implementovaných nìkolik návratových metod pro pøípad, ¾e pro po¾adovaného u¾ivatele není znám ¾ádný avatar. Implementovány jsou té¾ Moster ID, Identicon a Wavatar. Pokud vyberete nìkterý z tìchto zínìných, nebudou uskuteèòovány ¾ádné dal¹í pokusy o naètení avataru, pokud u¾ivatel zadá email.');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_ALLWAYS',   'V¾dy návratová hodnota pro Gravatar');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_ALLWAYS_DESC', 'Pou¾ívat návratovou hodnotu Gravatar i v pøípadì, ¾e u¾ivatel nezadá email (zadá tedy url nebo jméno)');


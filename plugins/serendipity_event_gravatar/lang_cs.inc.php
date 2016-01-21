<?php

/**
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @translated 2009/07/06
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2011/04/17
 */

@define('PLUGIN_EVENT_GRAVATAR_NAME',               'Avatar Plugin');
@define('PLUGIN_EVENT_GRAVATAR_DESC',               'Zobrazuje avatary (ikona èi obrázek pøispìvatele) v komentáøích. Podporovány jsou služby Gravatar, Pavatar, Favatar a MyBlogLog.');

@define('PLUGIN_EVENT_GRAVATAR_USE_SMARTY',         'Tvoøit smarty tag');
@define('PLUGIN_EVENT_GRAVATAR_USE_SMARTY_DESC',    'Pokud je tato volba zapnuta, obrázky avatarù nejsou zapsány pøímo do textu komentáøe, ale je místo toho vygenerován tag {$comment.avatar} pro šablonovací systém smarty. Pak budou avatary zobrazovat pouze styly vzhledu, které tento tag používají. Nejjednodušší zpùsob, jak zjistit, jestli Váš styl vzhledu podporuje avatary, je vyzkoušet zapnout toto nastavení.');

@define('PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR',      'Výchozí avatar');
@define('PLUGIN_EVENT_GRAVATAR_SIZE',               'Velikost');
@define('PLUGIN_EVENT_GRAVATAR_RATING',             'Hodnocení Gravatar');
@define('PLUGIN_EVENT_GRAVATAR_RATING_NO',          'Žádné hodnocení');
@define('PLUGIN_EVENT_GRAVATAR_RATING_G',           'Obecné - General (G)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_R',           'Omezené - Restricted (R)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_PG',          'Rodièovské vedení - Parental Guidance (PG)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_X',           'Explicitní (X)');

@define('PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR_DESC', 'Jaká je URL adresa k výchozímu avataru? Zadejte absolutní URL cestu nebo relativní URL cestu, vzhledem ke koøenové složce serveru.');
@define('PLUGIN_EVENT_GRAVATAR_SIZE_DESC',          'Nejvìtší rozmìr avataru (v pixelech)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_DESC',        'Hodnocení obrázku');

@define('PLUGIN_EVENT_GRAVATAR_CACHING',            'Cachovací èas');
@define('PLUGIN_EVENT_GRAVATAR_CACHING_DESC',       'Pokud chcete cachovat avatary (doporuèeno!), zadejte èas v hodinách, bìhem které bude avatar vkládán do blogu z Vašeho serveru, aniž by byl kontaktován server služby s avatary. Výhoda cachování je, že se ušetøí komunikace mezi blogem a serverem s avatary, a že bude blog ponìkud nezávislejší na momentálním stavu avatarových služeb, Hodnota "0" vypne cachování.');

@define('PLUGIN_EVENT_GRAVATAR_ALIGN',              'Zarovnání');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_DESC',         'Tato volba urèuje zarovnání avataru, ale pouze pokud není používána volba "smarty tag". Pøi použití zmínìné volby je na Vás zaøídit zarovnání po svém pomocí CSS stylu pro obrázek s avatarem.');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_LEFT',         'vlevo');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_RIGHT',        'vpravo');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_NONE',         'bez zarovnání');

@define('PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES',     'Použít v postranním sloupci');
@define('PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES_DESC','Mají se avatary zobrazovat také v postranním sloupci v bloku s nejnovìjšími komentáøi?');

@define('PLUGIN_EVENT_GRAVATAR_INFOLINE',           'Zobrazovat informaci o typu avataru');
@define('PLUGIN_EVENT_GRAVATAR_INFOLINE_DESC',      'Pokud je zapnuto, pak se pod polem pro zadání textu komentáøe bude zobrazovat informace, které avatary jsou momentálnì podporovány.');

@define('PLUGIN_EVENT_GRAVATAR_METHOD_DEFAULT',     'Výchozí avatar');
@define('PLUGIN_EVENT_GRAVATAR_METHOD',             'Stahovat avatary pomocí');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_DESC',        'Pokud pøedchozí pokus selže, zkus tento. Typy "Monster ID", "Defaultavatar" a "---" nikdy neselžou. Všechny metody, které následují po jedné ze zmínìných metod, nebudou nikdy zkoušeny!');
@define('PLUGIN_EVENT_GRAVATAR_SUPPORTED',          '%s obrázky autorù podporovány.');

@define('PLUGIN_EVENT_GRAVATAR_AUTOR_ALT',          'Jméno autora v atributu ALT v obrázku');
@define('PLUGIN_EVENT_GRAVATAR_AUTOR_ALT_DESC',     'Obvykle se jméno autora zobrazuje v atributu TITLE v obrázku s avatarem a atribut ALT je vyplnìn hvìzdièkami. To zabraòuje zhroucení vzhledu stránky, pokud není prohlížeè schopen natáhnout obrázky. Ale slepci používají pro prohlížení internetu èasto právì atribut ALT, takže pokud jim chcete zpøístupnit své stránky, zapnìte tuto volbu.');

@define('PLUGIN_EVENT_GRAVATAR_LONG_DESCRIPTION',   '<b><a href="http://www.gravatar.com" target="_blank">Gravatar</a></b> je centrální úložištì obrázkù uživatelù spøažené s emailovou adresou, ' .
        '<b><a href="http://www.peej.co.uk/projects/favatars.html" target="_blank">Favatar</a></b> poskytuje favicony naètené z osobních stránek uživatele, <b><a href="http://www.pavatar.com" target="_blank">Pavatar</a></b> ' .
        'jsou obrázky uložené na osobních stránkách pisatele, <b><a href="http://www.mybloglog.com" target="_blank">MyBlogLog avatar</a></b> jsou centrálnì ukládané obrázky a ' .
        '<b><a href="http://www.splitbrain.org/go/monsterid" target="_blank">Monster ID</a></b>, <b><a href="http://scott.sherrillmix.com/blog/blogger/wp_identicon/" target="_blank">Identicon</a></b> a <b><a href="http://www.shamusyoung.com/twentysidedtale/?p=1462" target="_blank">Wavatar</a></b> avatary jsou nahrávané obrázky vytvoøené jednotlivými uživateli.');
@define('PLUGIN_EVENT_GRAVATAR_EXTLING_WARNING',    '<font color="red">POZOR!</font> Tento plugin musí být zaøazen pøed všemi pluginy, které mìní odkazy (jako napø. plugin "exit tracking plugin")! ' .
        '<font color="red">Jinak nebudou pracovat avatary služeb Pavatar, Favatar a MayBlogLog!</font>');

@define('PLUGIN_EVENT_GRAVATAR_FALLBACK',           'Gravatar fallback');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_DESC',      'Gravatar má implementovaných nìkolik návratových metod pro pøípad, že pro požadovaného uživatele není znám žádný avatar. Implementovány jsou též Moster ID, Identicon a Wavatar. Pokud vyberete nìkterý z tìchto zínìných, nebudou uskuteèòovány žádné další pokusy o naètení avataru, pokud uživatel zadá email.');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_ALLWAYS',   'Vždy návratová hodnota pro Gravatar');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_ALLWAYS_DESC', 'Používat návratovou hodnotu Gravatar i v pøípadì, že uživatel nezadá email (zadá tedy url nebo jméno)');


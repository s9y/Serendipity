<?php

/**
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/07/06
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2011/04/17
 */

@define('PLUGIN_EVENT_GRAVATAR_NAME',               'Avatar Plugin');
@define('PLUGIN_EVENT_GRAVATAR_DESC',               'Zobrazuje avatary (ikona �i obr�zek p�isp�vatele) v koment���ch. Podporov�ny jsou slu�by Gravatar, Pavatar a Favatar.');

@define('PLUGIN_EVENT_GRAVATAR_USE_SMARTY',         'Tvo�it smarty tag');
@define('PLUGIN_EVENT_GRAVATAR_USE_SMARTY_DESC',    'Pokud je tato volba zapnuta, obr�zky avatar� nejsou zaps�ny p��mo do textu koment��e, ale je m�sto toho vygenerov�n tag {$comment.avatar} pro �ablonovac� syst�m smarty. Pak budou avatary zobrazovat pouze styly vzhledu, kter� tento tag pou��vaj�. Nejjednodu��� zp�sob, jak zjistit, jestli V� styl vzhledu podporuje avatary, je vyzkou�et zapnout toto nastaven�.');

@define('PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR',      'V�choz� avatar');
@define('PLUGIN_EVENT_GRAVATAR_SIZE',               'Velikost');
@define('PLUGIN_EVENT_GRAVATAR_RATING',             'Hodnocen� Gravatar');
@define('PLUGIN_EVENT_GRAVATAR_RATING_NO',          '��dn� hodnocen�');
@define('PLUGIN_EVENT_GRAVATAR_RATING_G',           'Obecn� - General (G)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_R',           'Omezen� - Restricted (R)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_PG',          'Rodi�ovsk� veden� - Parental Guidance (PG)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_X',           'Explicitn� (X)');

@define('PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR_DESC', 'Jak� je URL adresa k v�choz�mu avataru? Zadejte absolutn� URL cestu nebo relativn� URL cestu, vzhledem ke ko�enov� slo�ce serveru.');
@define('PLUGIN_EVENT_GRAVATAR_SIZE_DESC',          'Nejv�t�� rozm�r avataru (v pixelech)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_DESC',        'Hodnocen� obr�zku');

@define('PLUGIN_EVENT_GRAVATAR_CACHING',            'Cachovac� �as');
@define('PLUGIN_EVENT_GRAVATAR_CACHING_DESC',       'Pokud chcete cachovat avatary (doporu�eno!), zadejte �as v hodin�ch, b�hem kter� bude avatar vkl�d�n do blogu z Va�eho serveru, ani� by byl kontaktov�n server slu�by s avatary. V�hoda cachov�n� je, �e se u�et�� komunikace mezi blogem a serverem s avatary, a �e bude blog pon�kud nez�vislej�� na moment�ln�m stavu avatarov�ch slu�eb, Hodnota "0" vypne cachov�n�.');

@define('PLUGIN_EVENT_GRAVATAR_ALIGN',              'Zarovn�n�');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_DESC',         'Tato volba ur�uje zarovn�n� avataru, ale pouze pokud nen� pou��v�na volba "smarty tag". P�i pou�it� zm�n�n� volby je na V�s za��dit zarovn�n� po sv�m pomoc� CSS stylu pro obr�zek s avatarem.');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_LEFT',         'vlevo');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_RIGHT',        'vpravo');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_NONE',         'bez zarovn�n�');

@define('PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES',     'Pou��t v postrann�m sloupci');
@define('PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES_DESC','Maj� se avatary zobrazovat tak� v postrann�m sloupci v bloku s nejnov�j��mi koment��i?');

@define('PLUGIN_EVENT_GRAVATAR_INFOLINE',           'Zobrazovat informaci o typu avataru');
@define('PLUGIN_EVENT_GRAVATAR_INFOLINE_DESC',      'Pokud je zapnuto, pak se pod polem pro zad�n� textu koment��e bude zobrazovat informace, kter� avatary jsou moment�ln� podporov�ny.');

@define('PLUGIN_EVENT_GRAVATAR_METHOD_DEFAULT',     'V�choz� avatar');
@define('PLUGIN_EVENT_GRAVATAR_METHOD',             'Stahovat avatary pomoc�');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_DESC',        'Pokud p�edchoz� pokus sel�e, zkus tento. Typy "Monster ID", "Defaultavatar" a "---" nikdy nesel�ou. V�echny metody, kter� n�sleduj� po jedn� ze zm�n�n�ch metod, nebudou nikdy zkou�eny!');
@define('PLUGIN_EVENT_GRAVATAR_SUPPORTED',          '%s obr�zky autor� podporov�ny.');

@define('PLUGIN_EVENT_GRAVATAR_AUTOR_ALT',          'Jm�no autora v atributu ALT v obr�zku');
@define('PLUGIN_EVENT_GRAVATAR_AUTOR_ALT_DESC',     'Obvykle se jm�no autora zobrazuje v atributu TITLE v obr�zku s avatarem a atribut ALT je vypln�n hv�zdi�kami. To zabra�uje zhroucen� vzhledu str�nky, pokud nen� prohl�e� schopen nat�hnout obr�zky. Ale slepci pou��vaj� pro prohl�en� internetu �asto pr�v� atribut ALT, tak�e pokud jim chcete zp��stupnit sv� str�nky, zapn�te tuto volbu.');

@define('PLUGIN_EVENT_GRAVATAR_LONG_DESCRIPTION',   '<b><a href="http://www.gravatar.com" target="_blank">Gravatar</a></b> je centr�ln� �lo�i�t� obr�zk� u�ivatel� sp�a�en� s emailovou adresou, ' .
        '<b><a href="http://www.peej.co.uk/projects/favatars.html" target="_blank">Favatar</a></b> poskytuje favicony na�ten� z osobn�ch str�nek u�ivatele, <b><a href="http://www.pavatar.com" target="_blank">Pavatar</a></b> ' .
        '<b><a href="http://www.splitbrain.org/go/monsterid" target="_blank">Monster ID</a></b>, <b><a href="http://scott.sherrillmix.com/blog/blogger/wp_identicon/" target="_blank">Identicon</a></b> a <b><a href="http://www.shamusyoung.com/twentysidedtale/?p=1462" target="_blank">Wavatar</a></b> avatary jsou nahr�van� obr�zky vytvo�en� jednotliv�mi u�ivateli.');
@define('PLUGIN_EVENT_GRAVATAR_EXTLING_WARNING',    '<font color="red">POZOR!</font> Tento plugin mus� b�t za�azen p�ed v�emi pluginy, kter� m�n� odkazy (jako nap�. plugin "exit tracking plugin")! ' .
        '<font color="red">Jinak nebudou pracovat avatary slu�eb Pavatar a Favatar!</font>');

@define('PLUGIN_EVENT_GRAVATAR_FALLBACK',           'Gravatar fallback');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_DESC',      'Gravatar m� implementovan�ch n�kolik n�vratov�ch metod pro p��pad, �e pro po�adovan�ho u�ivatele nen� zn�m ��dn� avatar. Implementov�ny jsou t� Moster ID, Identicon a Wavatar. Pokud vyberete n�kter� z t�chto z�n�n�ch, nebudou uskute��ov�ny ��dn� dal�� pokusy o na�ten� avataru, pokud u�ivatel zad� email.');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_ALLWAYS',   'V�dy n�vratov� hodnota pro Gravatar');
@define('PLUGIN_EVENT_GRAVATAR_FALLBACK_ALLWAYS_DESC', 'Pou��vat n�vratovou hodnotu Gravatar i v p��pad�, �e u�ivatel nezad� email (zad� tedy url nebo jm�no)');


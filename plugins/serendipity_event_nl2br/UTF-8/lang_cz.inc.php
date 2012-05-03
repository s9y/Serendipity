<?php # lang_cz.inc.php 1501.2 2012-01-08 19:58:45 VladaAjgl $

/**
 *  @version 1501.2
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  EN-Revision: Revision of lang_en.inc.php
 *  Translated on 2007/11/30
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/05/06
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2009/08/15
 *  @author Vladimír Ajgl <vlada@ajgl.cz>
 *  @revisionDate 2012/01/08
 */

@define('PLUGIN_EVENT_NL2BR_NAME',              'Markup: NL2BR');
@define('PLUGIN_EVENT_NL2BR_DESC',              'Mění znaky konce řádku na tagy <br />');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS',      'Seznam html tagů, uvnitř kterých nemají být konce řádků nahrazovány.');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS_DESC', 'Návrhy: "code,pre,geshi,textarea". Názvy tagů oddělujte čárkou. Tip: Zadávané tagy jsou vyhodnocovány jako regulární výraz.');
@define('PLUGIN_EVENT_NL2BR_PTAGS',              'Použít tagy &lt;p&gt;');
@define('PLUGIN_EVENT_NL2BR_PTAGS_DESC',              'Vkládat tagy &lt;p&gt; místo tagů &lt;br /&gt;');

// Next lines were translated on 2012/01/08
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP',              'Kontrolovat další značkovací pluginy?');
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP_DESC',              'Automaticky zkontroluje, jestli jsou nainstalovány jiné značkovací pluginy. To je pravda, pokud je použit WYSIWYG editor nebo specifické značkovací pluginy. Pak je plugin NL2BR vypnut.');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG',              'IOSBR izolace - výchozí nastavení BR');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG_DESC',              'Tento nový NE-HTML tag <nl> </nl> umožňuje vypnout převod nových řádků na tag BR v kusu textu uzavřeném uvnitř tagů. Můžete ho použít vícekrát v jednom příspěvku, ale nemůžete ho vnořovat! Příklad: <nl>v tomto textu nebudou převáděny znaky nového řádku na tag BR</nl>');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS',              'Použít BR-čisté-tagy jak návratovou hodnotu, pokud je ISOBR zakázáno');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS_DESC',              'Pokud používáte v příspěvku <html-tagy>, které nelze úspěšně použít společně s nastavením ISOBR, pak tato volba zapnutá bude mít za následek ignorování znaků nových řádků bezprostředně za <html-tagy>. Výchozí: (table|thead|tbody|tfoot|th|tr|td|caption|colgroup|col|ol|ul|li|dl|dt|dd)');
@define('PLUGIN_EVENT_NL2BR_CONFIG_ERROR',              'Varování: Nepořádek v nastavení! Nastavení "%s" bylo nastaveno zpět na "NE", pokud je aktivní \'%s\'! Je přípustné použít pouze jednu z těchto voleb.');
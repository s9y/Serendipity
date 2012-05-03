<?php # lang_cs.inc.php 1501.2 2012-01-08 19:58:45 VladaAjgl $

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
@define('PLUGIN_EVENT_NL2BR_DESC',              'Mìní znaky konce øádku na tagy <br />');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS',      'Seznam html tagù, uvnitø kterých nemají být konce øádkù nahrazovány.');
@define('PLUGIN_EVENT_NL2BR_ISOLATE_TAGS_DESC', 'Návrhy: "code,pre,geshi,textarea". Názvy tagù oddìlujte èárkou. Tip: Zadávané tagy jsou vyhodnocovány jako regulární výraz.');
@define('PLUGIN_EVENT_NL2BR_PTAGS',              'Použít tagy &lt;p&gt;');
@define('PLUGIN_EVENT_NL2BR_PTAGS_DESC',              'Vkládat tagy &lt;p&gt; místo tagù &lt;br /&gt;');

// Next lines were translated on 2012/01/08
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP',              'Kontrolovat další znaèkovací pluginy?');
@define('PLUGIN_EVENT_NL2BR_CHECK_MARKUP_DESC',              'Automaticky zkontroluje, jestli jsou nainstalovány jiné znaèkovací pluginy. To je pravda, pokud je použit WYSIWYG editor nebo specifické znaèkovací pluginy. Pak je plugin NL2BR vypnut.');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG',              'IOSBR izolace - výchozí nastavení BR');
@define('PLUGIN_EVENT_NL2BR_ISOBR_TAG_DESC',              'Tento nový NE-HTML tag <nl> </nl> umožòuje vypnout pøevod nových øádkù na tag BR v kusu textu uzavøeném uvnitø tagù. Mùžete ho použít vícekrát v jednom pøíspìvku, ale nemùžete ho vnoøovat! Pøíklad: <nl>v tomto textu nebudou pøevádìny znaky nového øádku na tag BR</nl>');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS',              'Použít BR-èisté-tagy jak návratovou hodnotu, pokud je ISOBR zakázáno');
@define('PLUGIN_EVENT_NL2BR_CLEANTAGS_DESC',              'Pokud používáte v pøíspìvku <html-tagy>, které nelze úspìšnì použít spoleènì s nastavením ISOBR, pak tato volba zapnutá bude mít za následek ignorování znakù nových øádkù bezprostøednì za <html-tagy>. Výchozí: (table|thead|tbody|tfoot|th|tr|td|caption|colgroup|col|ol|ul|li|dl|dt|dd)');
@define('PLUGIN_EVENT_NL2BR_CONFIG_ERROR',              'Varování: Nepoøádek v nastavení! Nastavení "%s" bylo nastaveno zpìt na "NE", pokud je aktivní \'%s\'! Je pøípustné použít pouze jednu z tìchto voleb.');
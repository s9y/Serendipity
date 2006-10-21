<?php # $Id$

/**
 *  @version $Revision$
 *  @author Ivan Cenov jwalker@hotmail.bg
 *  EN-Revision: 1381
 */

@define('PLUGIN_EVENT_CONTENTREWRITE_FROM', 'от');
@define('PLUGIN_EVENT_CONTENTREWRITE_TO', 'към');
@define('PLUGIN_EVENT_CONTENTREWRITE_NAME', 'Подмяна на съдържание');
@define('PLUGIN_EVENT_CONTENTREWRITE_DESCRIPTION', 'Заменя думи с нов избран стринг (може да се използва за акроними)');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTITLE', 'Ново име');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWTDESCRIPTION', 'Въведете дума (акроним) за нов запис ({от})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTITLE', 'Дума #%d');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDTDESCRIPTION', 'Въведете дума (акроним) ({от})');
@define('PLUGIN_EVENT_CONTENTREWRITE_PTITLE', 'Заглавие на приставката');
@define('PLUGIN_EVENT_CONTENTREWRITE_PDESCRIPTION', 'Името на тази приставка, както ще се появява в списъка с приставки');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDESCRIPTION', 'Ново описание');
@define('PLUGIN_EVENT_CONTENTREWRITE_NEWDDESCRIPTION', 'Въведете описание на дума (акронима) тук ({към})');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDESCRIPTION', 'Описание #%s');
@define('PLUGIN_EVENT_CONTENTREWRITE_OLDDDESCRIPTION', 'Въведете описание на думата (акронима) тук ({към})');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Заменящ стринг');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRINGDESC', 'Стрингът, използван за подмяната на думата с описанието й. Поставете {от} и {към}, където желаете да имате подмяна.' . "\n" . 'Пример: <acronym title="{към}">{от}</acronym>');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHAR', 'Символ за фисиране на подмяна');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITECHARDESC', 'Ако е предвиден символ за предизвикване на подмяна, въведете го тук. Ако искате да замените \'serendipity*\' с каквото сте въвели за тази дума, но желаете \'*\' да се пропуска, въведете този символ тук.');
@define('PLUGIN_EVENT_CONTENTREWRITE_REWRITESTRING', 'Стринговете за изпълнение на подмяна във вашата конфигурация са %s и %s.');

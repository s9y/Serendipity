<?php

/* $Id$
Translator: Ivan Cenov (jwalker@hotmail.bg)
*/

// Colorsets
@define('THEME_COLORSET', 'Цветова схема');
@define('USER_STYLESHEET','Използване на допълнителна CSS. Файлът трябва да бъде записан в директорията на шаблона (bulletproof) и да бъде с име user.css. Може да бъде използван за предефиниране на стилове.');
// Layout
@define('LAYOUT_TYPE','Общо оформление (B = Статия, S = Странична приставка, CF = Първо съдържанието)');
@define('LAYOUT_SBS','Три колони S-B-S');
@define('LAYOUT_BSS','Три колони, B-S-S, CF');
@define('LAYOUT_SSB','Три колони, S-S-B');
@define('LAYOUT_SB','Две колони, S-B');
@define('LAYOUT_BS','Две колони, B-S, CF');
@define('LAYOUT_SC','Една колона, приставките отдолу, CF');
@define('LAYOUT_SBF','Две колони, S-B + долу');
@define('LAYOUT_BSF','Три колони, S-R + долу, CF');
@define('JAVASCRIPT_COLUMNS','Генериране на колони с еднаква височина (използва се Javascript, но това може да забави малко появата на страницата)');
// Custom header
@define('BP_CUSTOM_HEADER','Изображение по избор на базата данни за хедъра на блога');
@define('BP_HEADER_IMAGE','Избор на изображение');
@define('BP_HEADER_TYPE','Мащабиране на изображението');
@define('BP_HEADER_BANNER', 'Банер (без мащабиране)');
@define('BP_HEADER_HTILED', 'Хоризонтално мащабиране');
@define('BP_HEADER_VTILED', 'Вертикално мащабиране');
@define('BP_HEADER_BTILED', 'Хоризонтално и вертикално мащабиране');
@define('BP_HEADER_POSHOR', 'Хоризонтално подравняване');
@define('BP_HEADER_POSVER', 'Вертикално подравняване');
@define('BP_CENTER', 'центрирано');
@define('BP_TOP', 'горе');
@define('BP_BOTTOM', 'долу');
// Fahrner Image Replacement
@define('FIR_BTITLE','Показване на заглавието на блога в хедъра');
@define('FIR_BDESCR','Показване на описанието на блога в хедъра');
// Date format
@define('BP_DATE_FORMAT', 'Формат на датата');
// Entry footer
@define('ENTRY_FOOTER_POS','Позиция на основата на статиите');
@define('BELOW_ENTRY','Под статията');
@define('BELOW_TITLE','Под заглавието на статията');
@define('SPLIT_FOOTER','Разделена основа');
@define('FOOTER_AUTHOR','Показване на автора в основата на статията');
@define('FOOTER_CATEGORIES','Показване на категориите в основата на статията');
@define('FOOTER_TIMESTAMP','Показване на дата/час в основата на статията');
@define('FOOTER_COMMENTS','Показване на броя на коментарите в основата на статията');
@define('FOOTER_TRACKBACKS','Показване на броя на проследяванията в основата на статията');
@define('ALT_COMMTRACK','Използване на алтернативни текстове за броя на коментарите и проследяванията (например "Няма коментари" или "1 коментар" вместо "Коментари (0)" или "Коментари (1)")');
@define('SHOW_ADDTHIS_WIDGET','Показване на връзка към AddThis (http://www.addthis.com) в основата на статията');
@define('ADDTHIS_ACCOUNT','Регистрационен номер в AddThis.com. Не е задължителен, но ще създаде статистика относно как посетителите на блога създават връзки към него и цитират съдържанието му.');
@define('SHOW_STICKY_ENTRY_FOOTER','Показване на основа за лепкавите съобщения (изисква приставка "Разширени свойства на статиите" ("Extended properties for entries"))');
@define('SHOW_STICKY_ENTRY_HEADING','Показване на заглавие за лепкавите съобщения (изисква приставка "Разширени свойства на статиите" ("Extended properties for entries"))');
// Page footer next page  and previous page links
@define('PREV_NEXT_STYLE','Показване на връзките към предишна/следваща страница в основата на страницата като');
@define('PREV_NEXT_TEXT','Само текст');
@define('PREV_NEXT_TEXT_ICON','Текст и икона');
@define('PREV_NEXT_ICON','Само икона');
@define('SHOW_PAGINATION','Показване на номера на страници (страниране)');
// coComment support
@define('COCOMMENT_ACTIVE','Интегриране на coComment (http://www.cocomment.com) във формата на коментарите');
// Counter code
@define('COUNTER_CODE', 'Код за WEB брояч и/или статистика');
@define('USE_COUNTER', 'Използване на брояча, определен в горното поле');
// Additional footer text
@define('FOOTER_TEXT', 'Допълнителен текст в основата на страницата');
@define('USE_FOOTER_TEXT', 'Използване на допълнителния текст, въведен в горното поле');
//Sitenav
@define('SITENAV_POSITION','Позиция на навигационния ред');
@define('SITENAV_NONE','Няма');
@define('SITENAV_ABOVE','Над банера');
@define('SITENAV_BELOW','Под банера');
@define('SITENAV_LEFT','Над левите странични приставки');
@define('SITENAV_RIGHT','Над десните странични приставки');
@define('SITENAV_FOOTER','Показване на навигационните връзки в основата (не се показват в случай, че е навигационният ред е забранен)');
@define('SITENAV_QUICKSEARCH','Показване на поле за бързо търсене в навигационния ред (работи, само ако навигационният ред е над или под банера; бързото търсене се забранява автоматично ако навигационният ред е поставен над страничните приставки)');
@define('SITENAV_TITLE','Име на навигационното меню (показва се само ако е поставено над страничните приставки)');
@define('SITENAV_TITLE_TEXT','Главно меню');
@define('NAVLINK_AMOUNT', 'брой на връзките в навигационния ред (необходимо е презареждане на страница "Промяна на оформлението - тази страница от менюто на административния панел)');
@define('NAV_LINK_TEXT', 'Текст на връзка');
@define('NAV_LINK_URL', 'Пълен URL на връзка');

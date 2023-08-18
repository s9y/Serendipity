<?php
// Colorsets
@define('THEME_COLORSET', 'Набор цветов');
@define('THEME_HEADER', 'Заголовок');

@define('USER_STYLESHEET','Чтобы дополнить Bulletproof Вашими собственными стилями, которые не пропадут при обновлении, Вы можете добавить файл <code>/templates/bulletproof/user.css</code>; он будет автоматически включён s9y.');
// Layout
@define('LAYOUT_TYPE','Макет блога (B = Записи в блоге, S = Боковая панель, CF = Сначала содержимое)');
@define('LAYOUT_SBS','Три колонки S-B-S');
@define('LAYOUT_BSS','Три колонки B-S-S, CF');
@define('LAYOUT_SSB','Три колонки S-S-B');
@define('LAYOUT_SB','Две колонки S-B');
@define('LAYOUT_BS','Две колонки B-S, CF');
@define('LAYOUT_SC','Одна колонка, боковая панель снизу, CF');
@define('LAYOUT_SBF','Две колонки, боковые панели слева и снизу');
@define('LAYOUT_BSF','Две колонки, боковые панели справа и снизу, CF');
@define('JAVASCRIPT_COLUMNS','Сгенерировать столбцы одинаковой высоты с помощью javascript (может немного замедлить отрисовку страницы).');
// Custom header
@define('BP_CUSTOM_HEADER','Пользовательское изображение заголовка из базы данных мультимедиа');
@define('BP_HEADER_IMAGE','Выберите изображение');
@define('BP_HEADER_TYPE','Разбиение изображения заголовка на плитки');
@define('BP_HEADER_BANNER', 'Баннер (без облицовки плиткой)');
@define('BP_HEADER_HTILED', 'Горизонтально выложенный плиткой');
@define('BP_HEADER_VTILED', 'Вертикально выложенный плиткой');
@define('BP_HEADER_BTILED', 'Плитки по горизонтали и вертикали');
@define('BP_HEADER_POSHOR', 'Горизонтальное выравнивание');
@define('BP_HEADER_POSVER', 'Вертикальное выравнивание');
@define('BP_CENTER', 'по центру');
@define('BP_TOP', 'по верху');
@define('BP_BOTTOM', 'по низу');
// Fahrner Image Replacement
@define('FIR_BTITLE','Показывать название блога в заголовке');
@define('FIR_BDESCR','Показать описание блога в заголовке');
// Date format
@define('BP_DATE_FORMAT', 'Формат даты');
// Entry footer
@define('ENTRY_FOOTER_POS','Положение нижнего колонтитула записи');
@define('BELOW_ENTRY','Под записью');
@define('BELOW_TITLE','Под заголовком записи');
@define('SPLIT_FOOTER','Разделить нижний колонтитул записи');
@define('FOOTER_AUTHOR','Показать автора в нижнем колонтитуле записи');
@define('FOOTER_CATEGORIES','Показать категории в нижнем колонтитуле записи');
@define('FOOTER_TIMESTAMP','Показать временную метку в нижнем колонтитуле записи');
@define('FOOTER_COMMENTS','Показать количество комментариев в нижнем колонтитуле записи');
@define('FOOTER_TRACKBACKS','Показать количество обратных ссылок в нижнем колонтитуле записи');
@define('ALT_COMMTRACK','Использовать альтернативное отображение количества комментариев и обратных ссылок (например, "Нет комментариев" или "1 комментарий" вместо "Комментарии (0)" или "Комментарии (1)").');
@define('SHOW_ADDTHIS_WIDGET','Показать виджет закладки AddThis (http://www.addthis.com ) в нижнем колонтитуле записи');
@define('ADDTHIS_ACCOUNT','Номер учётной записи AddThis.com.  Не требуется, но может предоставить статистику о том, как читатели делают закладки и делятся Вашим контентом, если она будет предоставлена.');
@define('SHOW_STICKY_ENTRY_FOOTER','Показать нижний колонтитул записи для "липких" записей (требуется плагин "Расширенные свойства для записей" (Extended properties for entries))');
@define('SHOW_STICKY_ENTRY_HEADING','Показать заголовок записи для "липких" записей (требуется плагин "Расширенные свойства для записей" (Extended properties for entries))');
// Page footer next page  and previous page links
@define('PREV_NEXT_STYLE','Показать ссылки на предыдущую страницу/следующую страницу в нижнем колонтитуле страницы в виде');
@define('PREV_NEXT_TEXT','Только текста');
@define('PREV_NEXT_TEXT_ICON','Текста и значка');
@define('PREV_NEXT_ICON','Только значка');
@define('SHOW_PAGINATION','Показать дополнительные номера страниц (разбиение на страницы)');
// coComment support
@define('COCOMMENT_ACTIVE','Интегрировать coComment (http://www.cocomment.com) в форму комментария');
// Counter code
@define('COUNTER_CODE', 'Вставить код для счётчика и/или веб-статистического инструмента');
@define('USE_COUNTER', 'Выберите, следует ли использовать код счётчика, введенный выше');
// Additional footer text
@define('FOOTER_TEXT', 'Используйте это, чтобы вставить дополнительный текст в нижний колонтитул страницы');
@define('USE_FOOTER_TEXT', 'Интегрировать текст нижнего колонтитула');
//Sitenav
@define('SITENAV_POSITION','Положение навигационной панели');
@define('SITENAV_NONE','Без навигационной панели');
@define('SITENAV_ABOVE','Над баннером');
@define('SITENAV_BELOW','Под баннером');
@define('SITENAV_LEFT','В верхней части левой боковой панели');
@define('SITENAV_RIGHT','В верхней части правой боковой панели');
@define('SITENAV_FOOTER','Также отображать навигационные ссылки в нижнем колонтитуле (не отображаются независимо от выбора, если выше выбрано "Без навигационной панели").');
@define('SITENAV_QUICKSEARCH','Показать быстрый поиск на панели навигации (работает только на панели навигации над баннером или под ним; элемент боковой панели быстрого поиска будет автоматически отключён)');
@define('SITENAV_TITLE','Заголовок навигационного меню (отображается только в том случае, если оно расположено в верхней части боковой панели)');
@define('SITENAV_TITLE_TEXT','Главное меню');
@define('NAVLINK_AMOUNT', 'Введите количество ссылок на панели навигации (требуется перезагрузка страницы "Управление стилями")');
@define('NAV_LINK_TEXT', 'Введите текст ссылки на навигационной панели');
@define('NAV_LINK_URL', 'Введите полный URL Вашей ссылки');

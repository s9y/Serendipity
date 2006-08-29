<?php # $Id$

/**
 *  @version $Revision$
 *  @author Ivan Cenov jwalker@hotmail.bg
 */

    @define('PLUGIN_EVENT_XHTMLCLEANUP_NAME', 'Корекция на XHTML грешки');
    @define('PLUGIN_EVENT_XHTMLCLEANUP_DESC', 'Тази приставка коригира някои често срещани XHTML проблеми в статиите. Тя помага да запазите вашия блог XHTML съвместим.');
    @define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML', 'Кодиране на XML-парсирани данни ?');
    @define('PLUGIN_EVENT_XHTMLCLEANUP_XHTML_DESC', 'Тази приставка използва XML парсиране за да XHTML валидност на вашия код. Това парсиране може да преобразува вече валидни entities в unescaped entities, така че тя кодира всички entities след парсирането. Изключете този флаг, ако имате в резултат двойно кодиране!');
    @define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8', 'Почистване на UTF-8 entities?');
    @define('PLUGIN_EVENT_XHTMLCLEANUP_UTF8_DESC', 'Ако е позволено, HTML entities, произведени от UTF-8 символи ще бъдат правилно конвертирани и няма да бъдат двойно кодирани в статиите.');

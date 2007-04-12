<?php # $Id: lang_en.inc.php 1475 2006-11-02 11:26:10Z garvinhicking $

/**
 *  @version $Revision: 1475 $
 *  @author Serge Shakhovsky <sadtg@mail.ru> http://blog.sadtg.ru
 *  @author http://www.perevod.cc - translations and software localization
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_KARMA_NAME', 'Карма');
@define('PLUGIN_KARMA_BLAHBLAH', 'Позволяет посетителям оценивать ваши записи');
@define('PLUGIN_KARMA_VOTETEXT', 'Карма этой статьи: ');
@define('PLUGIN_KARMA_RATE', 'Оцените эту статью: %s');
@define('PLUGIN_KARMA_VOTEPOINT_1', 'Очень хорошо!');
@define('PLUGIN_KARMA_VOTEPOINT_2', 'Хорошо');
@define('PLUGIN_KARMA_VOTEPOINT_3', 'Нормально');
@define('PLUGIN_KARMA_VOTEPOINT_4', 'Не интересно');
@define('PLUGIN_KARMA_VOTEPOINT_5', 'Ужасно');
@define('PLUGIN_KARMA_VOTED', 'Выбранная вами оценка "%s" сохранена.');
@define('PLUGIN_KARMA_INVALID', 'Ваш голос не учтен из-за ошибки системы голосования. Да здравствует демократия!');
@define('PLUGIN_KARMA_ALREADYVOTED', 'Ваш голос уже был учтен.');
@define('PLUGIN_KARMA_NOCOOKIE', 'Для того, чтобы получить возможность голосования, ваш браузер должен поддерживать куки.');
@define('PLUGIN_KARMA_CLOSED', 'Голосовать за статьи, которым не больше %s дней!');
@define('PLUGIN_KARMA_ENTRYTIME', 'Время для голосования после публикации');
@define('PLUGIN_KARMA_VOTINGTIME', 'Время для голосования');
@define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH', 'Как долго (в минутах) доступно неограниченное голосование после публикации статьи? По умолчанию: 1440 (один день)');
@define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH', 'Сколько времени должно пройти (в минутах) между одним голосованием и другим. Применяется только тогда, когда истекло указанное выше время. По умолчанию: 5');
@define('PLUGIN_KARMA_TIMEOUT', 'Защита от флуда: Только что свой голос отдал другой посетитель. Пожалуйста, подождите %s минут.');
@define('PLUGIN_KARMA_CURRENT', 'Состояние кармы: %2$s, %3$s голоса (ов)');
@define('PLUGIN_KARMA_EXTENDEDONLY', 'Показывать только в дополнительном тексте');
@define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH', 'Показывать форму голосования только в расширенном виде статьи');
@define('PLUGIN_KARMA_MAXKARMA', 'Период голосования');
@define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH', 'Допускать голосование только по статьям, возраст которых не превышает X дней (По умолчанию: 7)');
@define('PLUGIN_KARMA_LOGGING', 'Вести журнал голосов?');
@define('PLUGIN_KARMA_LOGGING_BLAHBLAH', 'Нужно ли вести журнал голосов? Да здравствует демократия и тайное голосование!');
@define('PLUGIN_KARMA_ACTIVE', 'Включить голосование?');
@define('PLUGIN_KARMA_ACTIVE_BLAHBLAH', 'А включено ли голосование?');
@define('PLUGIN_KARMA_VISITS', 'Включить отслеживание посещений?');
@define('PLUGIN_KARMA_VISITS_BLAHBLAH', 'Должен ли учитываться и отображаться каждый переход в расширенный вид?');
@define('PLUGIN_KARMA_VISITSCOUNT', ' %4$s хитов');
@define('PLUGIN_KARMA_STATISTICS_VISITS_TOP', 'Самые посещаемые статьи');
@define('PLUGIN_KARMA_STATISTICS_VISITS_BOTTOM', 'Самые непопулярные статьи');
@define('PLUGIN_KARMA_STATISTICS_VOTES_TOP', 'Статьи, за которые голосуют больше всего');
@define('PLUGIN_KARMA_STATISTICS_VOTES_BOTTOM', 'Статьи, за которые голосуют меньше всего');
@define('PLUGIN_KARMA_STATISTICS_POINTS_TOP', 'Статьи с просветленной кармой');
@define('PLUGIN_KARMA_STATISTICS_POINTS_BOTTOM', 'Статьи, которым необходима очистка кармы');
@define('PLUGIN_KARMA_STATISTICS_VISITS_NO', 'посещений');
@define('PLUGIN_KARMA_STATISTICS_VOTES_NO', 'голосов');
@define('PLUGIN_KARMA_STATISTICS_POINTS_NO', 'очков');

@define('PLUGIN_KARMA_STARRATING', 'Включить отдельное голосование по этой записи?');

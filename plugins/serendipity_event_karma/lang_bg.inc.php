<?php # $Id$

/**
 *  @version $Revision$
 *  @author Ivan Cenov jwalker@hotmail.bg
 */

@define('PLUGIN_KARMA_NAME', 'Карма');
@define('PLUGIN_KARMA_BLAHBLAH', 'Дава възможност посетителите да оценяват качеството на вашите статии');
@define('PLUGIN_KARMA_VOTETEXT', 'Карма за тази статия: ');
@define('PLUGIN_KARMA_RATE', 'Оецнете тази статия: %s');
@define('PLUGIN_KARMA_VOTEPOINT_1', 'Много добра!');
@define('PLUGIN_KARMA_VOTEPOINT_2', 'Добра');
@define('PLUGIN_KARMA_VOTEPOINT_3', 'Неутрална');
@define('PLUGIN_KARMA_VOTEPOINT_4', 'Безинтересна');
@define('PLUGIN_KARMA_VOTEPOINT_5', 'Лоша');
@define('PLUGIN_KARMA_VOTED', 'Вашата оценка "%s" беше записана.');
@define('PLUGIN_KARMA_INVALID', 'Вашето гласуване е невалидно.');
@define('PLUGIN_KARMA_ALREADYVOTED', 'Вашата оецнка вече е записана.');
@define('PLUGIN_KARMA_NOCOOKIE', 'Вашият браузър трябва да поддържа куки, за да можете да гласувате.');
@define('PLUGIN_KARMA_CLOSED', 'Времето за гласуване (%s дни след публикуване) е изтекло.');
@define('PLUGIN_KARMA_ENTRYTIME', 'Време за гласуване след публикуване');
@define('PLUGIN_KARMA_VOTINGTIME', 'Интервал между две гласувания');
@define('PLUGIN_KARMA_ENTRYTIME_BLAHBLAH', 'Колко дълго (в минути) след като вашата статия е била публикувана е позволено неограничено гласуване ? По подразбиране: 1440 (един ден).');
@define('PLUGIN_KARMA_VOTINGTIME_BLAHBLAH', 'Времето (в минути), което трябва да измине от едно гласуване до следващото. Следващото гласуване ще се осъществи след най-малко указаното тук време, по подразбиране: 5 минути. Служи за ограничаване на \'наводняването\' на блога.');
@define('PLUGIN_KARMA_TIMEOUT', 'Защита от наводняване: Друг посетител е гласувал  току що. Моля изчакайте %s минути.');
@define('PLUGIN_KARMA_CURRENT', 'Текуща карма: %2$s, %3$s гласа');
@define('PLUGIN_KARMA_EXTENDEDONLY', 'Карма само при разширен изглед');
@define('PLUGIN_KARMA_EXTENDEDONLY_BLAHBLAH', 'При избор \'Да\' кармата на статията ще бъде показвана само в разширения изглед на статиите.');
@define('PLUGIN_KARMA_MAXKARMA', 'Период за гласуване');
@define('PLUGIN_KARMA_MAXKARMA_BLAHBLAH', 'Гласуването е разрешено, само ако статията не е по-стара от въведеният тук брой дни (по подразбиране: 7)');
@define('PLUGIN_KARMA_LOGGING', 'Запис на гласуванията');
@define('PLUGIN_KARMA_LOGGING_BLAHBLAH', 'При избор \'Да\' гласуванията ще бъдат записвани в протоколен файл.');
@define('PLUGIN_KARMA_ACTIVE', 'Разрешаване на гласуването ?');
@define('PLUGIN_KARMA_ACTIVE_BLAHBLAH', 'При избор \'Да\' оценяването на статиите е разрешено.');
@define('PLUGIN_KARMA_VISITS', 'Разрешаване на следенето на посещаемостта на статиите ?');
@define('PLUGIN_KARMA_VISITS_BLAHBLAH', 'При избор \'Да\' всяко влизане в статия ще бъде броено и показвано.');
@define('PLUGIN_KARMA_VISITSCOUNT', ' %4$s посещения');
@define('PLUGIN_KARMA_STATISTICS_VISITS_TOP', 'Най-посещавани статии');
@define('PLUGIN_KARMA_STATISTICS_VISITS_BOTTOM', 'Най-малко посещавани статии');
@define('PLUGIN_KARMA_STATISTICS_VOTES_TOP', 'Статии с най-много гласувания');
@define('PLUGIN_KARMA_STATISTICS_VOTES_BOTTOM', 'Статии с най-малко гласувания');
@define('PLUGIN_KARMA_STATISTICS_POINTS_TOP', 'Статии с най-висока оценка');
@define('PLUGIN_KARMA_STATISTICS_POINTS_BOTTOM', 'Статии с най-малка оценка');
@define('PLUGIN_KARMA_STATISTICS_VISITS_NO', 'посещения');
@define('PLUGIN_KARMA_STATISTICS_VOTES_NO', 'гласувания');
@define('PLUGIN_KARMA_STATISTICS_POINTS_NO', 'точки');

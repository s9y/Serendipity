<?php # $Id$

/**
 *  @version $Revision$
 *  @author Ivan Cenov jwalker@hotmail.bg
 *  EN-Revision: 2030
*/

    @define('PLUGIN_EVENT_MAILER_NAME', 'Изпращане на статии по e-mail');
    @define('PLUGIN_EVENT_MAILER_DESC', 'Приставката позволява изпращането на нови статии по e-mail съобщения на указани получатели.');
    @define('PLUGIN_EVENT_MAILER_RECIPIENT', 'Получател');
    @define('PLUGIN_EVENT_MAILER_RECIPIENTDESC', 'E-mail адрес, където искате да изпращате статиите (пример: пощенски списък).');
    @define('PLUGIN_EVENT_MAILER_LINK', 'Изпращане на връзки към статиите ?');
    @define('PLUGIN_EVENT_MAILER_LINKDESC', 'При избор \'Да\' ще бъдат включвани връзки към статиите преди тяхното съдържание.');
    @define('PLUGIN_EVENT_MAILER_STRIPTAGS', 'Премахване на HTML?');
    @define('PLUGIN_EVENT_MAILER_STRIPTAGSDESC', 'При избор \'Да\' HTML таговете в статиите ще бъдат премахвани при изпращането им.');
    @define('PLUGIN_EVENT_MAILER_CONVERTP', 'Преобразуване на HTML параграфите в нови редове ?');
    @define('PLUGIN_EVENT_MAILER_CONVERTPDESC', 'При избор \'Да\' добавя нов ред след всеки HTML параграф. Това е много удобно в случай на премахване на HTML, защото запазва структурата на статиите и подобрява читаемостта им.');
    @define('PLUGIN_EVENT_MAILER_RECIPIENTS', 'Получател (повече от един адреса разделете с интервал)');
    @define('PLUGIN_EVENT_MAILER_NOTSENDDECISION', 'Статията не беше изпратена по e-mail, понеже вие отменихте това действие.');
    @define('PLUGIN_EVENT_MAILER_SENDING', 'Изпращане');
    @define('PLUGIN_EVENT_MAILER_ISTOSENDIT', 'Изпращане на тази статия по e-mail');
    @define('PLUGIN_EVENT_MAILER_SENDTOALL', 'Изпращане до всички автори');

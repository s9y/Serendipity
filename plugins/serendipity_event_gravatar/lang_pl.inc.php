<?php # 

/**
 *  @version 
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_GRAVATAR_NAME',               'Avatar Plugin');
@define('PLUGIN_EVENT_GRAVATAR_DESC',               'Pokazuje avatary w komentarzach. Gravatars, Pavatars, Favatars und MyBlogLog avatars are supported.');

@define('PLUGIN_EVENT_GRAVATAR_USE_SMARTY',         'Produce smarty tag');
@define('PLUGIN_EVENT_GRAVATAR_USE_SMARTY_DESC',    'If this option is switched on, the avatar images are not written directly into the comment output but a smarty tag {$comment.avatar} is produced. Only templates, that support this smarty tag, will display the avatar, if this option is set to true. The best way is to try it, if your template supports this smarty tag.');

@define('PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR',      'Domy¶lny obrazek avatara');
@define('PLUGIN_EVENT_GRAVATAR_SIZE',               'rozmiar obrazka');
@define('PLUGIN_EVENT_GRAVATAR_RATING',             'Rating');
@define('PLUGIN_EVENT_GRAVATAR_RATING_NO',          'No rating');
@define('PLUGIN_EVENT_GRAVATAR_RATING_G',           'General (G)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_R',           'Restricted (R)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_PG',          'Parental Guidance (PG)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_X',           'Explicit (X)');

@define('PLUGIN_EVENT_GRAVATAR_DEFAULTAVATAR_DESC', 'Jaki jest adres URL do domy¶lnego obrazka avatara?');
@define('PLUGIN_EVENT_GRAVATAR_SIZE_DESC',          'Maksymalny rozmiar avatara (w pikselach)');
@define('PLUGIN_EVENT_GRAVATAR_RATING_DESC',        'Wybierz Rating (poziom przyznawany przez gravatar.com ka¿demu obrazkowi avatara), jaki ma byæ wy¶wietlany na stronie');

@define('PLUGIN_EVENT_GRAVATAR_CACHING',            'Buforowaæ Avatars?');
@define('PLUGIN_EVENT_GRAVATAR_CACHING_DESC',       'Je¶li chcesz buforowaæ obrazki avatarów, wpisz ilo¶æ godzin, w ci±gu których obrazek bêdzie pobierany z Twojego serwera zamiast z centralnego serwera www.gravatar.com. Pamiêtaj, ¿e to spowoduje wzrost obci±¿enia Twojego hosta. Plusem buforowania jest odci±¿enie serwerów Gravatara i przynajmniej czasowe uniezale¿nienie siê od centralnych serwerów na wypadek np. ich awarii. "0" wy³±cza buforowanie.');

@define('PLUGIN_EVENT_GRAVATAR_ALIGN',              'Alignment');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_DESC',         'This option configures the alignment of the avatar, if the smarty tag option is not used. For smarty tags you have to do the alignment using the CSS class of the avatar.');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_LEFT',         'left');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_RIGHT',        'right');
@define('PLUGIN_EVENT_GRAVATAR_ALIGN_NONE',         'no alignment');

@define('PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES',     'Use in sidebar');
@define('PLUGIN_EVENT_GRAVATAR_RECENT_ENTRIES_DESC','Should avatar images be shown in the recent comments sidebar, too?');

@define('PLUGIN_EVENT_GRAVATAR_INFOLINE',           'Show avatar type info');
@define('PLUGIN_EVENT_GRAVATAR_INFOLINE_DESC',      'If switched on an infoline is displayed below the comment box which types of avatars are supported at the moment.');

@define('PLUGIN_EVENT_GRAVATAR_METHOD_DEFAULT',     'Defaultavatar');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_1',           'First try to load avatar via');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_1_DESC',      'Try this avatar getting method first. Type "Defaultavatar" will load the default avatar, "---" will load no picture. ');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_2',           'Second try to load avatar via');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_2_DESC',      'If method 1 fails, try this one. The types "Monster ID", "Defaultavatar" and "---" will never fail. Everything below this methods won\'t be tried!');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_3',           'Third try to load avatar via');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_3_DESC',      'If method 2 fails, try this one. The types "Monster ID", "Defaultavatar" and "---" will never fail. Everything below this methods won\'t be tried!');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_4',           'Fourth try to load avatar via');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_4_DESC',      'If method 3 fails, try this one. The types "Monster ID", "Defaultavatar" and "---" will never fail. Everything below this methods won\'t be tried!');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_4',           'Fifth try to load avatar via');
@define('PLUGIN_EVENT_GRAVATAR_METHOD_4_DESC',      'If method 4 fails, try this one. The types "Monster ID", "Defaultavatar" and "---" will never fail. Everything below this methods won\'t be tried!');
@define('PLUGIN_EVENT_GRAVATAR_SUPPORTED',          '%s author images supported.');

@define('PLUGIN_EVENT_GRAVATAR_AUTOR_ALT',          'Authorname in ALT attribute');
@define('PLUGIN_EVENT_GRAVATAR_AUTOR_ALT_DESC',     'Normaly the authors name is displayed in the TITLE attribute of the avatar image, the ALT attribute is filled with an *. This prevents destroying the layout, when the browser is not able to load the image. But for blind people the ALT attribute is read, so if you want to support them, switch this option on.');

@define('PLUGIN_EVENT_GRAVATAR_LONG_DESCRIPTION',   '<b><a href="http://www.gravatar.com" target="_blank">Gravatars</a></b> are central-served avatar images by email, ' .
        '<b><a href="http://www.peej.co.uk/projects/favatars.html" target="_blank">Favatars</a></b> are favicons of the writer\'s site, <b><a href="http://www.pavatar.com" target="_blank">Pavatars</a></b> ' .
        'are images at the writer\'s site, <b><a href="http://www.mybloglog.com" target="_blank">MyBlogLog avatars</a></b> are central-served avatar images again and ' .
        '<b><a href="://www.splitbrain.org/go/monsterid" target="_blank">Monster ID avatars</a></b> are localy created monster images unique for each writer.');
@define('PLUGIN_EVENT_GRAVATAR_EXTLING_WARNING',    '<font color="red">CAUTION!</font> This plugin has to be executed before any plugin changing links (like i.e. the exit tracking plugin)! ' .
        '<font color="red">Else Pavatars, Favatars and MayBlogLog avatars won\'t work!</font>');

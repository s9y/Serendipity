<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved. See LICENSE file for licensing details
# this translation, translated by Omid Mottaghi <http://oxygenws.com>
# Please report me any bug with <webmaster@oxygenws.com>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'fa_IR.UTF-8, fa_IR, persian, fa');
@define('DATE_FORMAT_ENTRY', '%A، %e %B %Y');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', '٫');
@define('LANG_DIRECTION', 'rtl');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'نوع');
@define('PREVIEW', 'پیش نمایش');
@define('DATE', 'تاریخ');
@define('TIME', 'Time');
@define('APPEARANCE', 'ظاهر');
@define('LOGIN', 'ورود');
@define('LOGOUT', 'خروج');
@define('LOGGEDOUT', 'خارج شدید.');
@define('CREATE', 'ایجاد');
@define('BACK', 'قبل');
@define('FORWARD', 'بعد');
@define('ANONYMOUS', 'ناشناس');
@define('RECENT', 'جدید...');
@define('OLDER', 'قدیم...');
@define('DONE', 'انجام شد');
@define('TITLE', 'تیتر');
@define('DESCRIPTION', 'توضیحات');
@define('PLACEMENT', 'گماشتن');
@define('DELETE', 'حذف');
@define('SAVE', 'ذخیره');
@define('UP', 'بالا');
@define('DOWN', 'پایین');
@define('PREVIOUS', 'قبل');
@define('NEXT', 'بعد');
@define('ENTRIES', 'ارسال');
@define('CATEGORIES', 'موضوعات');
@define('NAME', 'نام');
@define('EMAIL', 'پست الکترونیکی');
@define('HOMEPAGE', 'سایت');
@define('COMMENT', 'نظر');
@define('VIEW', 'دیدگاه');
@define('HIDE', 'مخفی');
@define('WEEK', 'هفته');
@define('WEEKS', 'هفته');
@define('MONTHS', 'ماه');
@define('DAYS', 'روز');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'موفقیت');
@define('COMMENTS', 'نظر ها');
@define('ADD_COMMENT', 'ارسال نظر');
@define('NO_COMMENTS', 'نظری وجود ندارد');
@define('POSTED_BY', 'ارسال شده توسط');
@define('ON', 'در');
@define('NO_CATEGORY', 'بدون موضوع');
@define('CATEGORY', 'موضوع');
@define('EDIT', 'ویرایش');
@define('GO', 'برو!');
@define('YES', 'بله');
@define('NO', 'خیر');
@define('NOT_REALLY', 'خیر');
@define('DUMP_IT', 'بله');
@define('IN', 'در');
@define('AT', 'در');
@define('LEFT', 'چپ');
@define('RIGHT', 'راست');
@define('CENTER', 'center');
@define('ARCHIVES', 'بایگانی');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'جستجوی سریع');
@define('TRACKBACKS', 'دنبالک ها');
@define('TRACKBACK', 'دنبالک');
@define('NO_TRACKBACKS', 'هیچ دنبالکی وجود ندارد');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'برگزیدن');
@define('TRACKED', 'پیگیری شد');
@define('USER', 'کاربر');
@define('USERNAME', 'نام کاربری');
@define('PASSWORD', 'رمز عبور');
@define('HIDDEN', 'مخفی');
@define('IMAGE', 'عکس');
@define('VIDEO', 'Video');
@define('AUTHOR', 'نویسنده');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'نگارش');
@define('INSTALL', 'نصب');
@define('REPLY', 'پاسخ');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'خطا');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'اجبار');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'مدیر');
@define('ADMIN_FRONTPAGE', 'صفحه آغازین');
@define('QUOTE', 'نقل قول');
@define('NONE', 'هیچ کدام');
@define('GROUP', 'گروه');
@define('AUTHORS', 'نویسندگان');
@define('UPGRADE', 'به روز رسانی');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'تمامی نویسندگان');
@define('PREVIOUS_PAGE', 'صفحه قبل');
@define('NEXT_PAGE', 'صفحه بعد');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'تمامی موضوعات');
@define('LAST_UPDATED', 'آخرین به روز رسانی');
@define('IP_ADDRESS', 'آدرس IP');
@define('CHARSET', 'نوع حروف');
@define('REFERER', 'بازدید کننده');
@define('APPROVE', 'موافقت');
@define('NOT_FOUND', 'یافت نشد');
@define('WRITABLE', 'نوشتنی');
@define('NOT_WRITABLE', 'نوشتنی نیست');
@define('WELCOME_BACK', 'خوش آمدید،');
@define('USE_DEFAULT', 'پیش فرض');
@define('SORT_BY', 'مرتب بر اساس');
@define('SORT_ORDER', 'ترتیب مرتب سازی');
@define('SORT_ORDER_ASC', 'صعودی');
@define('SORT_ORDER_DESC', 'نزولی');
@define('FILTERS', 'فیلترها');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'باز کردن همه');
@define('TOGGLE_OPTION', 'انتخاب وضعیت گزینه ها');
@define('IN_REPLY_TO', 'در پاسخ به');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'شاخه');
@define('BACK_TO_BLOG', 'بازگشت به وبلاگ');
@define('HTML_NUGGET', 'تکه کد HTML');
@define('TITLE_FOR_NUGGET', 'تیتر تکه کد HTML');
@define('COMMENT_ADDED', 'نظر شما با موفقیت ارسال شد. ');
@define('ENTRIES_FOR', 'ارسال ها از %s');
@define('NO_ENTRIES_TO_PRINT', 'هیچ ارسالی وجود ندارد');
@define('COMMENT_DELETE_CONFIRM', 'آیا می خواهید نظر #%d، نوشته شده توسط %s حذف شود؟');
@define('DELETE_SURE', 'آیا از حذف کامل #%s اطمینان دارید؟');
@define('MEDIA_FULLSIZE', 'اندازه کامل');
@define('SIDEBAR_PLUGIN', 'افزونه نوار کناری');
@define('EVENT_PLUGIN', 'افزونه رویداد');
@define('PLUGIN_ITEM_DISPLAY', 'این گزینه کجا نمایش داده شود؟');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'فقط ارسال های توسعه داده شده');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'فقط در صفحه خلاصه');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'همیشه');
@define('DIRECTORY_WRITE_ERROR', 'توانایی نوشتن در شاخه %s وجود ندارم. دسترسی ها را چک کنید.');
@define('FILE_WRITE_ERROR', 'توانایی نوشتن در فایل %s نیست.');
@define('INCLUDE_ERROR', 'خطای سرندیپیتی: توانایی وارد کردن فایل %s وجود ندارد - برنامه متوقف شد.');
@define('DO_MARKUP', 'ایجاد تغییرات Markup');
@define('GENERAL_PLUGIN_DATEFORMAT', 'تغییر تاریخ');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'طرز نمایش تاریخ در ارسال ها، از قوانین نگارش تابع strftime() در PHP پیروی کنید. (پیش فرض: "%s")');
@define('APPLY_MARKUP_TO', 'اعمال کردن markup به %s');
@define('XML_IMAGE_TO_DISPLAY', 'دکمه XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'لینک XML ها با عکس زیر نمایش داده خواهد شد. مقدار خالی به عنوان مقدار پیش فرض در نظر گرفته می شود، عبارت \'none\' را برای غیر فعال کردن وارد کنید.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'حذف فایل %s...');
@define('SETTINGS_SAVED_AT', 'تنظیمات جدید در %s ثبت شد');
@define('INVERT_SELECTIONS', 'معکوس کردن انتخاب ها');

@define('PERSONAL_SETTINGS', 'تنظیمات شخصی');
@define('DO_MARKUP_DESCRIPTION', 'آیا تغییرات روی متن اعمال شود (شکلک ها، میانبر کردن متن های *، /، _، ...). غیر فعال کردن این گزینه، تمامی کد های HTML را حفظ خواهد کرد و تغییری اعمال نخواهد شد.');
@define('BASE_DIRECTORY', 'شاخه اصلی');
@define('PERM_READ', 'دسترسی خواندن');
@define('PERM_WRITE', 'دسترسی نوشتن');
@define('PERM_DENIED', 'دسترسی وجود ندارد.');
@define('CURRENT_AUTHOR', 'نویسنده فعلی');
@define('PLUGIN_ACTIVE', 'فعال');
@define('PLUGIN_INACTIVE', 'غیرفعال');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'نصب سرندیپیتی');
@define('WELCOME_TO_INSTALLATION', 'به مراحل نصب سرندیپیتی خوش آمدید');
@define('FIRST_WE_TAKE_A_LOOK', 'در ابتدا ما گزینه های فعلی را بررسی می کنیم و سعی می کنیم نا همگونی ها را رفع کنیم');
@define('ERRORS_ARE_DISPLAYED_IN', 'خطا ها در %s نمایش داده شده اند، توصیه ها در %s و موفقیت ها در %s');
@define('RED', 'قرمز');
@define('YELLOW', 'زرد');
@define('GREEN', 'سبز');
@define('PRE_INSTALLATION_REPORT', 'گزارش قبل از نصب سرندیپیتی نگارش %s');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'نصب PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'سیستم عامل');
@define('WEBSERVER_SAPI', 'SAPI وب سرور');
@define('PHPINI_CONFIGURATION', 'تنظیمات php.ini');
@define('RECOMMENDED', 'توصیه شده');
@define('ACTUAL', 'واقعی');
@define('PERMISSIONS', 'دسترسی ها');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'دسترسی ها می توانند از طریق دسترسی shell تغییر یابند: `<em>%s</em>` روی شاخه مشکل دار، یا تنظیم آن توسط برنامه های FTP');
@define('PROBLEM_DIAGNOSTIC', 'به دلیل تشخیص مشکل، تا مشکلات فوق را برطرف نسازید نمی توانید به ادامه نصب بپردازید');
@define('SELECT_INSTALLATION_TYPE', 'انتخاب کنید که چه نوع نصبی را می خواهید انجام دهید');
@define('RECHECK_INSTALLATION', 'چک کردن دوباره نصب برنامه');
@define('SIMPLE_INSTALLATION', 'نصب ساده');
@define('EXPERT_INSTALLATION', 'نصب حرفه ای');
@define('COMPLETE_INSTALLATION', 'نصب تکمیل شد');
@define('WONT_INSTALL_DB_AGAIN', 'پایگاه داده دوباره نصب نخواهد شد');
@define('THEY_DO', 'انجام شده است');
@define('THEY_DONT', 'انجام نشده است');
@define('CHECK_DATABASE_EXISTS', 'بررسی وجود پایگاه داده و جدول های آن');
@define('CREATE_DATABASE', 'در حال نصب پیش فرض های پایگاه داده...');
@define('ATTEMPT_WRITE_FILE', 'تلاش برای نوشتن در فایل %s...');
@define('CREATING_PRIMARY_AUTHOR', 'ایجاد نویسنده اصلی \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'تنظیم پوسته پیش فرض');
@define('INSTALLING_DEFAULT_PLUGINS', 'نصب افزونه های پیش فرض');
@define('SERENDIPITY_INSTALLED', 'سرندیپیتی با موفقیت نصب شد');
@define('VISIT_BLOG_HERE', 'وبلاگ جدید خود را از اینجا ببینید');
@define('THANK_YOU_FOR_CHOOSING', 'به خاطر نصب سرندیپیتی سپاسگذاریم');
@define('ERROR_DETECTED_IN_INSTALL', 'خطایی در زمان نصب تشخیص داده شد');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'قدرتمند شده توسط');
@define('ADMIN_FOOTER_POWERED_BY', 'ساخته شده توسط سرندیپیتی %s و PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'ویرایشگر استاندارد');
@define('USERLEVEL_CHIEF_DESC', 'ویرایشگر مدیر');
@define('USERLEVEL_ADMIN_DESC', 'مدیر');
@define('WWW_USER', 'www را به کاربری که از آپاچی استفاده می کند تغییر دهید (مثلا nobody(.');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'شاخه %s وجود ندارد یا قابلیت ایجاد کردن آن نیست. لطفا خودتان به صورت دستی، آن را بسازید');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; <i>%s %s</i> را اجرا کن');
@define('CANT_EXECUTE_BINARY', 'توانایی اجرای %s نیست');
@define('FILE_CREATE_YOURSELF', 'لطفا یا خودتان فایل را ایجاد کنید، یا دسترسی ها را چک کنید');
@define('COPY_CODE_BELOW', '<br />* کد زیر را کپی کرده و در %s در %s شاخه زیر بریزید:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'پس از تکمیل، صفحه مرورگر را refresh کنید.');
@define('ERROR_TEMPLATE_FILE', 'توانایی باز کردن فایل پوسته وجود ندارد، لطفا سرندیپیتی را به روز کنید!');
@define('HTACCESS_ERROR', 'برای چک کردن نصب وب سرور، سرندیپیتی احتیاج دارد که در فایل ".htaccess" مقادیری را بنویسد. این امر به دلیل محدودیت های دسترسی ممکن نمی باشد. لطفا سطح دسترسی را مشابه: <br />&nbsp;&nbsp;%s<br />تغییر داده و این صفحه را دوباره صدا بزنید.');
@define('EMPTY_SETTING', 'شما مقدار معتبری برای "%s" انتخاب نکرده اید!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'سرندیپیتی فهمید که نسخه فایل تنظیمات شما %s می باشد، در حالی که خود برنامه سرندیپیتی نسخه %s است، شما باید سیستم را به روز رسانی کنید! <a href="%s">اینجا کلیک کنید</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'سلام، به بخش به روز رسانی سرندیپیتی خوش آمدید.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'من اینجا هستم تا به شما در به روز رسانی سرندیپیتی %s کمک کنم.');
@define('SERENDIPITY_UPGRADER_WHY', 'به خاطر نصب سرندیپیتی %s این پیام را مشاهده می کنید، اما پایگاه داده خود را هنوز به روز نکرده اید');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'پایگاه داده (%s) به روز شد');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'من فایلی با توسعه .sql پیدا کردم که قبل از ادامه کار باید اجرا شود');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'کارهای مخصوص این نسخه');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'هیچ کاری یافت نشد');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'آیا تمایل دارید که من کارهای فوق را انجام دهم؟');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'خیر');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'بله');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'در ظاهر نیازمند به روز رسانی نمی باشید');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'رسیدگی کردن به روز رسانی سرندیپیتی');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'شما توانایی به روز رسانی سرندیپیتی را ندارید، لطفا از درست ایجاد شدن پایگاه داده اطمینان پیدا کنید');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'سرندیپیتی به نسخه %s به روز رسانی شد');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', '%sاینجا%s کلیک کنید تا به صفحه آغازین وبلاگتان برگردید');
@define('ADMIN_ENTRIES', 'مقادیر');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'اشکال در اتصال به پایگاه داده MySQL: %s.');
@define('COULDNT_SELECT_DB', 'اشکال در انتخاب پایگاه داده: %s.');
@define('COULDNT_SELECT_USER_INFO', 'اشکال در انتخاب نام کاربری: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'اشکال در انتخاب موضوع: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'اشکال در کسب اطلاعات ارسال ها: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'اشکال در کسب اطلاعات نظر ها: %s.');
@define('MYSQL_REQUIRED', 'برای انجام این عمل، باید توسعه MySQL را نصب داشته باشید.');
@define('CREATE_AUTHOR', 'ایجاد نویسنده \'%s\'.');
@define('CREATE_CATEGORY', 'ایجاد موضوع \'%s\'.');
@define('MT_DATA_FILE', 'فایل دادهء Movable Type');
@define('INSTALL_DBPORT', 'پورت پایگاه داده');
@define('INSTALL_DBPORT_DESC', 'پورتی که برای اتصال به پایگاه داده استفاده می شود');
@define('IMPORT_PLEASE_ENTER', 'لطفا داده های خواسته شده را وارد کنید');
@define('IMPORT_NOW', 'وارد کن!');
@define('IMPORT_STARTING', 'شروع پروسه وارد کردن...');
@define('IMPORT_FAILED', 'واردات با مشکل مواجه شد');
@define('IMPORT_DONE', 'واردات با موفقیت انجام شد');
@define('IMPORT_WEBLOG_APP', 'برنامه وبلاگ');
@define('IMPORT_NOTES', 'توجه:');
@define('IMPORT_STATUS', 'وضعیت بعد از واردات');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'تمام مقادیر وارد شده را در بخش "بدنه ارسال" قرار بده و در بخش "مطالب بیشتر" قرار نده.');
@define('IMPORT_GENERIC_RSS', 'وارد کردن RSS های عمومی');
@define('ACTIVATE_AUTODISCOVERY', 'ارسال دنبالک به لینک های یافت شده در مطلب');
@define('RSS_IMPORT_CATEGORY', 'از این موضوع برای ارسال های وارد شده که موضوع خاصی ندارند استفاده کن');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'مطلب %s یافت نشد.');
@define('CONVERT_HTMLENTITIES', 'سعی در تغییر مقادیر HTML داشته باشم؟');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'بخش مدیریت سرندیپیتی');
@define('WRONG_USERNAME_OR_PASSWORD', 'نام کاربری یا رمز عبور شما اشتباه می باشد');
@define('PLEASE_ENTER_CREDENTIALS', 'لطفا نام کاربری و رمز عبورتان را در فیلد های زیر وارد کنید.');
@define('AUTOMATIC_LOGIN', 'ذخیره اطلاعات');
@define('MAIN_MENU', 'Main menu');
@define('MENU_PERSONAL', 'Personal menu');
@define('MENU_DASHBOARD', 'Dashboard');
@define('MENU_ACTIVITY', 'Activity');
@define('MENU_SETTINGS', 'Settings');
@define('MENU_TEMPLATES', 'Templates');
@define('MENU_PLUGINS', 'Plugins');
@define('MENU_USERS', 'Users');
@define('MENU_GROUPS', 'Groups');
@define('MENU_MAINTENANCE', 'Maintenance');
@define('MEDIA', 'رسانه');
@define('MEDIA_LIBRARY', 'کتابخانه رسانه');
@define('ADD_MEDIA', 'افزودن رسانه');
@define('MANAGE_DIRECTORIES', 'مدیریت شاخه ها');
@define('CONFIGURATION', 'تنظیمات');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'لینک های کمکی');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'صفحه آغازین سرندیپیتی');
@define('FURTHER_LINKS_S9Y_DOCS', 'راهنمای سرندیپیتی');
@define('FURTHER_LINKS_S9Y_BLOG', 'وبلاگ رسمی');
@define('FURTHER_LINKS_S9Y_FORUMS', 'انجمن ها');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'اسپارتاکوس');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'این ارسال هنوز منتشر نشده است.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'حق کپی');
@define('SIDEBAR_PLUGINS', 'افزونه های نوار کناری');
@define('EVENT_PLUGINS', 'افزونه های رویداد');
@define('CONFIGURE_PLUGINS', 'مدیریت افزونه ها');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'اشکال در موارد مورد نیاز: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'به روز رسانی به نسخه %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'برای نصب یک %s جدید اینجا کلیک کنید');
@define('ALREADY_INSTALLED', 'قبلا نصب شده');
@define('PLUGIN_AVAILABLE_COUNT', 'تعداد کل: %d افزونه.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'تغییر ارسال ها');
@define('EDIT_ENTRY', 'تغییر ارسال');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'پیش نویس');
@define('PUBLISH', 'انتشار');
@define('CONTENT', 'محتویات');
@define('ENTRIES_PER_PAGE', 'ارسال ها در هر صفحه');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'پست های چسبناک');
@define('PAGE_BROWSE_ENTRIES', 'صفحه %s از %s، %s ارسال');
@define('FIND_ENTRIES', 'جستجوی ارسال ها');
@define('RIP_ENTRY', 'مطلب #%s حذف شد.');
@define('NEW_ENTRY', 'ارسال جدید');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'بدنه ارسال');
@define('EXTENDED_BODY', 'مطالب بیشتر');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'اکنون سرندیپیتی در حال ساخت پیش نمایش صفحات شما می باشد...');
@define('IFRAME_PREVIEW', 'اکنون سرندیپیتی پیش نمایش ارسال شما را آماده می کند...');
@define('IFRAME_WARNING', 'مرورگر شما از iframe پشتیبانی نمی کند. لطفا فایل serendipity_config.inc.php را باز کرده و مقدار $serendipity[\'use_iframe\'] را برابر FALSE قرار دهید.');
@define('DATE_INVALID', 'خطر: تاریخ وارد شده اشتباه می باشد. ساختار تاریخ باید شبیه YYYY-MM-DD HH:MM باشد.');
@define('ADVANCED_OPTIONS', 'گزینه های پیشرفته');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'این لینک برای کلیک کردن نیست و فقط آدرس این مطلب را نگهداری می کند. شما باید از این لینک برای آدرس دادن یا ایجاد دنبالک استفاده کنید. برای کپی کردن این لینک، روی لینک راست-کلیک کنید و مقدار "Copy Shortcut" در Internet Explorer یا "Copy Link Location" در Mozilla انتخاب کنید.');
@define('RESET_DATE', 'تنظیم دوباره تاریخ');
@define('RESET_DATE_DESC', 'برای تنظیم مجدد تاریخ به اکنون، اینجا کلیک کنید');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'مدیریت کاربران');
@define('CREATE_NEW_USER', 'ایجاد یک کاربر جدید');
@define('CREATE_NOT_AUTHORIZED', 'شما نمی توانید کاربری با سطح دسترسی مشابه خود را تغییر دهید');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'شما نمی توانید کاربری با سطح دسترسی بیشتر از خود ایجاد کنید');
@define('CREATED_USER', 'کاربر %s ساخته شد');
@define('MODIFIED_USER', 'مشخصات کاربر %s تغییر کرد');
@define('USER_LEVEL', 'سطح دسترسی');
@define('WARNING_NO_GROUPS_SELECTED', 'هشدار: شما عضو هیچ گروهی نشده اید. پس دیگر نمی توانید از امکانات مدیریت گروه ها استفاده نمایید.');
@define('DELETE_USER', 'شما می خواهید کاربر #%d %s را حذف کنید. آیا اطمینان دارید؟ این عمل باعث می شود که تمامی پست های نوشته شده توسط ایشان در صفحه اصلی نمایش داده نشود.');
@define('DELETED_USER', 'کاربر #%d %s حذف شد.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'مدیریت گروه ها');
@define('DELETED_GROUP', 'گروه #%d %s حذف شد.');
@define('CREATED_GROUP', 'گروه جدید %s ایجاد شد');
@define('MODIFIED_GROUP', 'مشخصات گروه %s تغییر کرد');
@define('CREATE_NEW_GROUP', 'ایجاد گروه جدید');
@define('DELETE_GROUP', 'شما قصد حذف گروه #%d %s را دارید. آیا اطمینان دارید؟');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'جستجوی نظر ها');
@define('COMMENTS_FILTER_SHOW', 'نمایش');
@define('COMMENTS_FILTER_ALL', 'تمام');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'فقط تایید شده ها');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'در انتظار تایید');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'آیا از حذف نظرات انتخاب شده، اطمینان دارید؟');
@define('PAGE_BROWSE_COMMENTS', 'صفحه %s از %s، در کل %s نظر');
@define('COMMENT_IS_DELETED', '(نظر حذف شد)');
@define('COMMENT_MODERATED', 'Comment #%s has successfully been set as moderated');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Category subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'موضوع ذخیره شد');
@define('CATEGORY_ALREADY_EXIST', 'یک موضوع با نام مشابه "%s" قبلا وجود دارد');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'موضوع #%s حذف شد. ارسال های قدیمی به موضوع #%s اضافه شد');
@define('CATEGORY_DELETED', 'موضوع #%s حذف شد.');
@define('INVALID_CATEGORY', 'موضوعی برای حذف انتخاب نشده است');
@define('EDIT_THIS_CAT', 'در حال تغییر "%s"');
@define('CATEGORY_REMAINING', 'حذف این موضوع و انتقال ارسال ها به این موضوع');
@define('PARENT_CATEGORY', 'موضوع پدر');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'ایجاد یک موضوع جدید');
@define('ALREADY_SUBCATEGORY', '%s قبلا زیر موضوعی از %s بوده.');
@define('NO_CATEGORIES', 'بدون موضوع');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'وارد کردن داده ها');
@define('EXPORT_ENTRIES', 'صادر کردن ارسال ها');
@define('EXPORT_FEED', 'صادر کردن RSS کامل');
@define('CREATE_THUMBS', 'دوباره سازی عکس های کوچک');
@define('WARNING_THIS_BLAHBLAH', "توجه:\nدر صورتی که تعداد عکس هایی که نمونه عکس نداشته باشند زیاد باشد، این عمل طول خواهد کشید.");
@define('SYNC_OPTION_LEGEND', 'Thumbnail Synchronization Options');
@define('SYNC_OPTION_KEEPTHUMBS', 'Keep all existing thumbnails');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Keep existing thumbnails only if they are the correct size');
@define('SYNC_OPTION_DELETETHUMBS', 'Regenerate all thumbnails');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' به عنوان پوسته پیش فرض ثبت شد');
@define('WARNING_TEMPLATE_DEPRECATED', 'خطر: پوسته شما از نگارش قدیمی پوسته ها استفاده می کند، توصیه می شود اگر امکان دارد به روز رسانی کنید');
@define('STYLE_OPTIONS_NONE', 'این پوسته تنظیماتی ندارد. برای تغییر تنظیمات این پوسته، راهنمای تکنیکی مربوط به این بخش رو در سایت www.s9y.org مطالعه کنید.');
@define('STYLE_OPTIONS', 'انتخابات پوسته');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'توانایی مدیریت ظاهر بخش مدیریت وجود دارد');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'به عنوان پوسته پیش فرض انتخاب کن');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'چک و ثبت کن');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'حذف افزونه های مشخص شده');
@define('SAVE_CHANGES_TO_LAYOUT', 'ثبت تغییرات در پوسته');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'هماهنگی پایگاه داده با شاخه تصاویر');
@define('SYNC_DONE', 'انجام شد (تعداد %s تصویر هماهنگ شد).');
@define('RESIZE_BLAHBLAH', '<b>تغییر اندازه %s</b>');
@define('ORIGINAL_SIZE', 'ابعاد اصلی: <i>%sx%s</i> پیکسل');
@define('RESIZING', 'تغییر اندازه');
@define('RESIZE_DONE', 'انجام شد (تعداد %s تصویر تغییر کرد).');
@define('KEEP_PROPORTIONS', 'حفظ تناسب');
@define('REALLY_SCALE_IMAGE', 'آیا از تغییر اندازه تصاویر اطمینان دارید؟ این عمل قابل بازگشت نیست!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>در این مکان، شما می توانید ابعاد عکس را درست نمایید. اگر تصمیم دارید ابعاد عکس را متناسب تغییر دهید، فقط یکی از اعداد را وارد کرده و سپس کلید TAB را فشار دهید -- ما ضلع دیگر را به صورت متناسب تغییر خواهیم داد</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'سایز جدید: ');
@define('SCALING_IMAGE', 'تغییر اندازه تصویر %s به %s x %s پیکسل');
@define('MEDIA_DIRECTORY_MOVED', 'شاخه و فایل ها با موفقیت به %s جابجا شدند!');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'شاخه و فایل ها نمی توانند به شاخه %s جابجا شوند!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'شاخه <strong>%s</strong> ساخته شد.');
@define('PARENT_DIRECTORY', 'شاخه پدر');
@define('CONFIRM_DELETE_DIRECTORY', 'آیا مایلید تمام محتویات شاخه %s را حذف کنید؟');
@define('ERROR_NO_DIRECTORY', 'خطا: شاخه %s وجود ندارد');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'توانایی حذف شاخه هایی که خالی نیستند وجود ندارد. اگر می خواهید فایل ها هم حذف شوند، گزینه "force deletion" را انتخاب کنید، سپس فرم را دوباره ارسال کنید. فایل های موجود عبارتند از:');
@define('DIRECTORY_DELETE_FAILED', 'حذف شاخه %s با مشکل مواجه شد. دسترسی ها یا پیام فوق را بررسی کنید.');
@define('DIRECTORY_DELETE_SUCCESS', 'شاخه %s با موفقیت حذف شد.');
@define('CHECKING_DIRECTORY', 'بررسی فایل های داخل شاخه %s');
@define('DELETE_DIRECTORY', 'حذف این شاخه');
@define('DELETE_DIRECTORY_DESC', 'شما می خواهید شاخه ای را حذف کنید که دارای فایل می باشد, ممکن است این فایل ها در ارسال های شما استفاده شده باشند.');
@define('FORCE_DELETE', 'فایل هایی که در پایگاه داده فایل ها وجود ندارند را هم حذف کن');
@define('CREATE_DIRECTORY', 'ایجاد شاخه');
@define('CREATE_NEW_DIRECTORY', 'ساخت شاخه جدید');
@define('CREATE_DIRECTORY_DESC', 'در اینجا شما می توانید شاخه جدیدی برای ریختن فایل ها بسازید. نام مناسبی برای شاخه انتخاب کنید و در صورتی که تمایل دارید، شاخه پدر را نیز انتخاب کنید.');
@define('ABOUT_TO_DELETE_FILE', 'شما می خواهید <b>%s</b> را حذف کنید<br />اگر شما از این فایل در ارسال هایتان استفاده کردید، دیگر قابل مشاهده شدن یا لینک دادن نیست<br />آیا از انجام این عمل اطمینان دارید؟<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'خطا: این فایل قبلا در سیستم وجود داشته است!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'توانایی تشخیص محل تصویر <b>%s</b> نیست، احتمالا قبلا حذف شده است؟');
@define('ERROR_FILE_FORBIDDEN', 'شما اجازه بالاگذاری فایل ندارید');
@define('REMOTE_FILE_NOT_FOUND', 'فایل بر روی سرور دور موجود نمی باشد، آیا از صحت آدرس: <b>%s</b> اطمینان دارید؟');
@define('FILE_FETCHED', '%s با نام %s دریافت شد');
@define('FILE_UPLOADED', 'فایل %s با موفقیت با نام %s بالاگذاری شد');
@define('DELETE_FILE_FAIL', 'توانایی حذف فایل <b>%s</b> وجود ندارد');
@define('DELETE_FILE', 'فایل با تیتر <b>%s</b> حذف شد');
@define('FOUND_FILE', 'یافتن فایل جدید یا تغییر داده شده: %s.');
@define('FILENAME_REASSIGNED', 'نامگذاری خودکار: %s');
@define('ERROR_FILE_EXISTS', 'خطا: فایلی با این نام وجود دارد، نام دیگری انتخاب کنید!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'لینک داده شد');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'نام جدیدی برای مقدار روبرو وارد کنید: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'افزودن عکس...');
@define('THUMB_CREATED_DONE', 'عکس های کوچک ساخته شدند.<br>انجام شد.');
@define('THUMBNAIL_USING_OWN', 'استفاده از %s به عنوان عکس کوچک (به دلیل ابعاد کوچک عکس).');
@define('THUMBNAIL_FAILED_COPY', 'استفاده از %s به عنوان عکس کوچک به دلیل ایجاد اشکال در کپی مقدور نمی باشد!');
@define('DELETE_THUMBNAIL', 'عکس کوچک با نام <b>%s</b> حذف شد');
@define('ERROR_UNKNOWN_NOUPLOAD', 'خطای ناشناخته، فایلی بالاگذاری نشد. ممکن است که حجم فایل شما بیشتر از ماکزیمم حجم اجازه داده شده باشد. لطفا ISP یا فایل php.ini خود را چک کنید.');
@define('MEDIA_UPLOAD_SIZEERROR', 'خطا: شما نمی توانید فایلی با حجمی بیشتر از %s بایت ارسال کنید!');
@define('MEDIA_UPLOAD_DIMERROR', 'خطا: شما نمی توانید تصویری با  ابعاد بیشتر از %s x %s پیکسل ارسال کنید!');
@define('HOTLINK_DONE', 'به فایل مربوطه، لینک داده شد.');
@define('DELETE_HOTLINK_FILE', 'لینک فایل <b>%s</b> حذف شد');
@define('IMAGICK_EXEC_ERROR', 'توانایی اجرای "%s" نمی باشد، خطا: %s، مقدار بازگشتی: %d');
@define('SKIPPING_FILE_EXTENSION', 'پرش از روی فایل: توسعه ناشناخته در %s.');
@define('SKIPPING_FILE_UNREADABLE', 'پرش از روی فایل: %s قابل خواندن نمی باشد.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'این سطح دسترسی برای تمامی زیر شاخه ها هم تنظیم شود');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'استفاده از کوچک شده عکس در ارسال.');
@define('I_WANT_BIG_IMAGE', 'استفاده از عکس اصلی در ارسال.');
@define('I_WANT_NO_LINK', ' تمایل دارم به صورت عکس نمایش داده شود');
@define('I_WANT_IT_TO_LINK', 'تمایل دارم به صورت لینکی به آدرس زیر نمایش داده شود:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'اندازه عکس');
@define('IMAGE_ALIGNMENT', 'هم ترازی تصویر');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'وارد کردن عکس');
@define('MEDIA_TARGET', 'هدف این لینک (target)');
@define('MEDIA_TARGET_JS', 'پنجره بازشونده (از طریق جاوا اسکریپت، با ابعاد مورد نیاز)');
@define('MEDIA_ENTRY', 'ارسال مجزا شده');
@define('MEDIA_TARGET_BLANK', 'پنجره بازشونده (از طریق target=_blank)');
@define('YOU_CHOSE', 'شما %s را انتخاب کردید');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'عکس را 90 درجه بر خلاف حرکت عقربه های ساعت بچرخان');
@define('IMAGE_ROTATE_RIGHT', 'عکس را 90 درجه در جهت حرکت عقربه های ساعت بچرخان');
@define('MEDIA_RENAME', 'تغییر نام فایل');
@define('THUMBNAIL_SHORT', 'عکس کوچک');
@define('ORIGINAL_SHORT', 'اصلی');
@define('SORT_ORDER_NAME', 'نام فایل');
@define('SORT_ORDER_EXTENSION', 'توسعه فایل');
@define('SORT_ORDER_SIZE', 'اندازه فایل');
@define('SORT_ORDER_WIDTH', 'عرض عکس');
@define('SORT_ORDER_HEIGHT', 'ارتفاع عکس');
@define('SORT_ORDER_DATE', 'تاریخ بالاگذاری');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>افزودن یک فایل به انبار:</b><p>در اینجا شما می توانید فایل های خود را بالاگذاری کنید، یا آدرس آنها را برای دریافت از اینترنت وارد کنید! اگر عکسی برای بالاگذاری ندارید جستجویی در <a href="https://images.google.com" target="_blank">اینجا</a> برای یافتن عکس مورد علاقه خود داشته باشید، نتیجه معمولا مفید و جالب خواهد بود :)</p><p><b>انتخاب روش:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'URL فایلی را برای دریافت وارد کنید:');
@define('ENTER_MEDIA_UPLOAD', 'فایلی را برای بالاگذاری مشخص کنید:');
@define('SAVE_FILE_AS', 'ذخیره فایل با نام:');
@define('STORE_IN_DIRECTORY', 'ذخیره در شاخه: ');
@define('IMAGE_MORE_INPUT', 'افزودن عکس');
@define('ENTER_MEDIA_URL_METHOD', 'روش دریافت:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'توجه: اگر شما گزینه "لینک دادن به سرور" را انتخاب کرده اید، توجه داشته باشید که باید به سرور دسترسی داشته باشید. لینک دادن به سایت های دیگر، به شما اجازه می دهد از فایل ها، بدون ذخیره در سایت خودتان، استفاده کنید.');
@define('FETCH_METHOD_IMAGE', 'عکس را روی سرور پایین گذاری کن');
@define('FETCH_METHOD_HOTLINK', 'لینک دادن به سرور');
@define('GO_ADD_PROPERTIES', 'اطلاعات را وارد کن');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'تغییر اندازه تصویر');
@define('MEDIA_DELETE', 'حذف فایل');
@define('FILES_PER_PAGE', 'فایل در صفحه');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'هیچ تصویری یافت نشد');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'تمامی شاخه ها');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'تنظیمات نوشته و ذخیره شد');
@define('DIAGNOSTIC_ERROR', 'تعدادی خطا در اطلاعات ورودی شما یافت شد:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'تنظیمات پایگاه داده');
@define('INSTALL_CAT_DB_DESC', 'شما می توانید اطلاعات کامل پایگاه داده را در اینجا وارد کنید. سرندیپیتی برای فعالیت به این اطلاعات نیاز دارد');
@define('INSTALL_DBTYPE', 'نوع پایگاه داده');
@define('INSTALL_DBTYPE_DESC', 'نوع پایگاه داده');
@define('INSTALL_DBHOST', 'آدرس پایگاه داده');
@define('INSTALL_DBHOST_DESC', 'آدرس هاستی که پایگاه داده روی آن قرار دارد');
@define('INSTALL_DBUSER', 'کاربر پایگاه داده');
@define('INSTALL_DBUSER_DESC', 'نام کاربری که توسط آن به پایگاه داده متصل می شوید');
@define('INSTALL_DBPASS', 'رمز عبور پایگاه داده');
@define('INSTALL_DBPASS_DESC', 'رمز عبور مربوط به نام کاربری که در فوق وارد کردید');
@define('INSTALL_DBNAME', 'نام پایگاه داده');
@define('INSTALL_DBNAME_DESC', 'نام پایگاه داده شما');
@define('INSTALL_DBPREFIX', 'پیشوند جداول پایگاه داده');
@define('INSTALL_DBPREFIX_DESC', 'پیشوند جدول های مربوط به سرندیپیتی، به طور مثال. serendipity_');
@define('INSTALL_DBPERSISTENT', 'استفاده از اتصال های پایدار');
@define('INSTALL_DBPERSISTENT_DESC', 'برای استفاده از اتصال پایدار این گزینه را فعال کنید، برای اطلاعات بیشتر <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">اینجا</a> را مطالعه کنید. این گزینه در حالت عادی توصیه نمی شود');
@define('INSTAL_DB_UTF8', 'فعال کردن تبدیل انکودینگ پایگاه داده');
@define('INSTAL_DB_UTF8_DESC', 'ارسال دستور "SET NAMES" به MySQL برای تشخیص انکودینگ مناسب برای پایگاه داده. در صورتی که در مشاهده حرف های وبلاگتان مشکل دارید، این گزینه را فعال یا غیر فعال کنید.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'مسیر ها');
@define('INSTALL_CAT_PATHS_DESC', 'مسیر های متفاوت برای شاخه های مهم. فراموش نکنید که برای شاخه ها در آخر یک خط مورب (/) بگذارید!');
@define('INSTALL_FULLPATH', 'مسیر کامل');
@define('INSTALL_FULLPATH_DESC', 'آدرس مستقیم و کامل به مکان نصب سرندیپیتی');
@define('INSTALL_UPLOADPATH', 'مسیر بالاگذاری');
@define('INSTALL_UPLOADPATH_DESC', 'تمامای بالاگذاری ها در این مسیر قرار خواهند گرفت، نسبت به مقدار \'مسیر کامل\' - مثل \'uploads/\'');
@define('INSTALL_RELPATH', 'مسیر دریافت');
@define('INSTALL_RELPATH_DESC', 'مسیر سرندیپیتی برای مرورگر شما، مثل \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'مسیر پوسته ها');
@define('INSTALL_RELTEMPLPATH_DESC', 'مسیر شاخه ای که فایل های پوسته در آن قرار دارد - نسبت به مقدار \'مسیر دریافت\'');
@define('INSTALL_RELUPLOADPATH', 'مسیر نسبی بالاگذاری');
@define('INSTALL_RELUPLOADPATH_DESC', 'مسیر فایل های بالاگذاری شده برای مرورگر شما - نسبت به مقدار \'مسیر دریافت\'');
@define('INSTALL_URL', 'آدرس وبلاگ');
@define('INSTALL_URL_DESC', 'آدرس اصلی نصب سرندیپیتی');
@define('INSTALL_AUTODETECT_URL', 'تشخیص خودکار استفاده از HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'اگر روی "بله" تنظیم شود، سرندیپیتی قرار داشتن آدرس BaseURL که در بخش تنظیمات وارد کرده اید را در درخواست ارسالی بررسی می کند. فعال کردن این گزینه، باعث می شود که شما بتوانید از چندین دامنه برای دیدن وبلاگ سرندیپیتی و تمامی لینک های وابسته به آن استفاده کنید.');
@define('INSTALL_INDEXFILE', 'فایل فهرست');
@define('INSTALL_INDEXFILE_DESC', 'نام فایل فهرست (index) شما');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'لینک های همیشگی');
@define('INSTALL_CAT_PERMALINKS_DESC', 'قالب های متفاوتی برای لینک های همیشگی تعیین کنید. پیشنهاد می کنیم که از لینک های پیش فرض استفاده کنید; در غیر این صورت، بهتر است از %id% استفاده نمایید، چون امکان دارد از ارسال پرس و جو به پایگاه داده توسط سرندیپیتی برای یافتن آدرس هدف، جلوگیری کند.');
@define('INSTALL_PERMALINK', 'ساختار آدرس همیشگی ارسال ها');
@define('INSTALL_PERMALINK_DESC', 'در اینجا می توانید ساختار آدرس نسبی، نسبت به آدرس پایه، برای ارسال ها را تعیین کنید. شما می توانید از متغیر های %id%، %title%، %day%، %month%، %year% و هر نوع حرف دیگر استفاده کنید.');
@define('INSTALL_PERMALINK_AUTHOR', 'ساختار لینک های همیشگی نویسنده');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'در اینجا می توانید ساختار آدرس نسبی، نسبت به آدرس پایه، برای ارسال ها را تعیین کنید. شما می توانید از متغیر های %id%، %title%، %day%، %month%، %year% و هر نوع حرف دیگر استفاده کنید.');
@define('INSTALL_PERMALINK_CATEGORY', 'ساختار لینک های همیشگی موضوعات');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'در اینجا می توانید ساختار آدرس نسبی، نسبت به آدرس پایه، برای ارسال های یک نویسنده خاص را تعیین کنید. شما می توانید از متغیر های %id%، %title%، %day%، %month%، %year% و هر نوع حرف دیگر استفاده کنید.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'ساختار لینک های همیشگی موضوعات RSS');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'در اینجا می توانید ساختار آدرس نسبی، نسبت به آدرس پایه، برای RSS های ارسال ها را تعیین کنید. شما می توانید از متغیر های %id%، %title%، %day%، %month%، %year% و هر نوع حرف دیگر استفاده کنید.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'ساختار آدرس های همیشگی RSS-Feed های مربوط به یک نویسنده');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'در اینجا می توانید آدرس نسبی ای، نسبت به آدرس اصلی، برای RSS-feed های یک کاربر خاص را مشخص کنید. شما می توانید از %id%، %realname%، %username%، %email% و هر نوع کاراکتر دیگر استفاده کنید.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'مسیر به بایگانی ها');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'مسیر به بایگانی');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'مسیر به موضوعات');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'مسیر نویسندگان');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'مسیر برای لغو عضویت برای توضیحات');
@define('INSTALL_PERMALINK_DELETEPATH', 'مسیر برای حذف توضیحات');
@define('INSTALL_PERMALINK_APPROVEPATH', 'مسیر برای نمایش توضیحات');
@define('INSTALL_PERMALINK_FEEDSPATH', 'مسیر به صفحه RSS ها');
@define('INSTALL_PERMALINK_PLUGINPATH', 'مسیر به صفحه افزونه');
@define('INSTALL_PERMALINK_ADMINPATH', 'مسیر به صفحه مدیر');
@define('INSTALL_PERMALINK_SEARCHPATH', 'مسیر به صفحه جستجو');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'مسیر نظرات');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'تنظیمات عمومی');
@define('INSTALL_CAT_SETTINGS_DESC', 'تنظیم کردن نوع رفتار سرندیپیتی');
@define('INSTALL_USERNAME', 'نام کاربری مدیر');
@define('INSTALL_USERNAME_DESC', 'نام کاربری مدیر برای ورود');
@define('INSTALL_PASSWORD', 'رمز عبور مدیر');
@define('INSTALL_PASSWORD_DESC', 'رمز عبور مدیر برای ورود');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'نام واقعی');
@define('USERCONF_REALNAME_DESC', 'نام کامل نویسنده. این نام توسط خواننده دیده خواهد شد');
@define('INSTALL_EMAIL', 'ایمیل مدیر');
@define('INSTALL_EMAIL_DESC', 'ایمیل مدیر وبلاگ');
@define('INSTALL_SENDMAIL', 'آیا به مدیر ایمیلی ارسال شود؟');
@define('INSTALL_SENDMAIL_DESC', 'آیا علاقه دارید در هنگام ارسال نظر ایمیلی دریافت کنید؟');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'نام وبلاگ');
@define('INSTALL_BLOGNAME_DESC', 'تیتر وبلاگ شما');
@define('INSTALL_BLOGDESC', 'توضیحات وبلاگ');
@define('INSTALL_BLOGDESC_DESC', 'توضیحات وبلاگ شما');
@define('INSTALL_BLOG_EMAIL', 'آدرس ایمیل وبلاگ');
@define('INSTALL_BLOG_EMAIL_DESC', 'این ایمیل در قسمت "From" در ایمیل های ارسالی از سرور استفاده می شود. از وجود این ایمیل در سرورتان اطمینان حاصل کنید - بسیاری از سرور های ایمیل، ایمیل های بدون فرستنده معتبر را رد می کنند.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'زبان');
@define('INSTALL_LANG_DESC', 'زبان وبلاگتان را انتخاب کنید');
@define('INSTALL_CHARSET', 'انتخاب نوع حروف');
@define('INSTALL_CHARSET_DESC', 'در اینجا می توانید نوع حروف را بین UTF-8 یا کاراکتر های طبیعی (ISO, EUC, ...) تغییر دهید. بسیاری از زبان ها، فقط به UTF-8 ترجمه شده اند که کاراکتر های "طبیعی" تاثیری روی آنها نمی گذارد. ما به شما UTF-8 را پیشنهاد می کنیم. در صورتی که قبلا ارسالی داشته اید، این گزینه را تغییر ندهید - احتمال مخدوش شدن حروف وجود دارد. در لینک زیر می توانید اطلاعات بیشتری کسب کنید https://docs.s9y.org/docs/developers/internationalization.html .');
@define('INSTALL_CAL', 'تقویم');
@define('INSTALL_CAL_DESC', 'نوع تقویم خود را انتخاب کنید');
@define('AUTOLANG', 'از زبان پیش فرض مرورگر بیننده استفاده شود');
@define('AUTOLANG_DESC', 'اگر فعال باشد، از زبان مرورگر بیننده برای زبان پیش فرض ورودی ها و زبان پوسته وبلاگ استفاده می شود.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'فعال کردن افزونه مدیریت دسترسی ها برای گروه های کاربری؟');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'اگر این گزینه فعال باشد، شما می توانید به گروه های کاربری امکان مشاهده و کار کردن با افزونه های مختلف را ارایه دهید.');
@define('UPDATE_NOTIFICATION', 'Update notification');
@define('UPDATE_NOTIFICATION_DESC', 'Show the update notification in the Dashboard, and for which channel?');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'At certain places in the Serendipity code we have placed debugging breakpoints. If this option is set to "Debug", it will write this debug output to templates_c/logs/. You should only enable this option if you are experiencing bugs in those areas, or if you are a developer. Setting this option to "Error" will enable logging PHP errors, overwriting the PHP error_log setting.');
@define('USE_CACHE', 'Enable caching');
@define('USE_CACHE_DESC', 'Enables an internal cache to not repeat specific database queries. This reduces the load on servers with medium to high traffic and improves page load time.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevance');
@define('UPDATE_STABLE', 'stable');
@define('UPDATE_BETA', 'beta');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'ظاهر و تنظیمات');
@define('INSTALL_CAT_DISPLAY_DESC', 'تنظیم چگونگی نمایش سرندیپیتی');
@define('INSTALL_FETCHLIMIT', 'ارسال هایی که در ابتدای صفحه نمایش داده شوند');
@define('INSTALL_FETCHLIMIT_DESC', 'چه تعداد ارسال در صفحه اصلی نمایش داده شوند');
@define('INSTALL_RSSFETCHLIMIT', 'مواردی که در بخش خوراک نمایش داده شود');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'تعداد ارسال هایی که در feed در هر صفحه نمایش داده شود.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'فعال کردن RSS-Feed طبق استاندارد RFC2616');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option. Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'استفاده از صفحات فشرده gzip');
@define('INSTALL_USEGZIP_DESC', 'برای افزایش سرعت باز شدن صفحات، ما می توانیم صفحات ارسالی به کاربران را فشرده کنیم، این این گزینه بستگی به پشتیبانی کردن مرورگر بیننده نیز دارد. انتخاب این گزینه توصیه می شود');
@define('INSTALL_XHTML11', 'قبول کردن اجباری XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'آیا تمایل دارید XHTML 1.1 را به صورت اجباری اعمال کنید (احتمال وجود اشکال در برخی از مرورگر های قدیمی وجود دارد)');
@define('INSTALL_POPUP', 'توانایی استفاده از پنجره های بازشونده');
@define('INSTALL_POPUP_DESC', 'آیا تمایل دارید که برای نظرات و دنبالک ها از پنجره های بازشونده استفاده شود؟');
@define('INSTALL_EMBED', 'آیا سرندیپیتی جاسازی شده است؟');
@define('INSTALL_EMBED_DESC', 'اگر می خواهید سرندیپیتی را در صفحه ای دیگر جاسازی کنید، مقدار این گزینه را "بله" وارد کنید تا فقط محتویات صفحه چاپ شوند.!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'لینک های خارجی را قابل کلیک باشند');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"خیر": لینک های خارجی (مثل آخرین خروج ها و ...) برای جلوگیری از اسپم های گوگلی، به صورت متن ساده نمایش داده شوند (توصیه شده). "بله": لینک های خارجی به صورت پیوست نمایش داده شود.. توسط تنظیمات افزونه قابلیت تغییر وجود دارد!');
@define('INSTALL_TRACKREF', 'پیگیری کردن بازدید کنندگان؟');
@define('INSTALL_TRACKREF_DESC', 'با فعال کردن این گزینه می توانید بازدید کنندگانی که از سایت های دیگر می آیند را بشناسید.');
@define('INSTALL_BLOCKREF', 'بازدید کنندگان بلاک شده');
@define('INSTALL_BLOCKREF_DESC', 'آیا آدرس خاصی وجود دارد که نمی خواهید در لیست بازدید کنندگان نمایش داده شود؟ آدرس ها را با یک علامت \';\' از هم جدا کنید و توجه کنید که آدرس ها توسط روش زیر رشته (substring) حذف خواهند شد!');
@define('INSTALL_REWRITE', 'دوباره نویسی آدرس ها');
@define('INSTALL_REWRITE_DESC', 'روش پردازش آدرس ها را مشخص کنید. دادن امکان دوباره نویسی آدرس ها توانایی موتور های جستجو را در فهرست بندی وبلاگ شما بالا می برد. وب سرور شما باید اجازه دسترسی به mod_rewrite یا "AllowOverride All" را برای شاخه سرندیپیتی داده باشد. مقدار پیش فرض "شناسایی خودکار" می باشد');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'مبدا زمان سرور');
@define('INSTALL_OFFSET_DESC', 'اختلاف زمانی بین زمان وب سرور و زمان دلخواه خود را وارد کنید');
@define('INSTALL_SHOWFUTURE', 'نمایش پست های آینده');
@define('INSTALL_SHOWFUTURE_DESC', 'در صورت فعال بودن، تمامی مقادیر آینده نیز در وبلاگ نمایش داده می شوند. پیش فرض، نمایش داده نشدن مقادیر آینده می باشد و مقادیری که تاریخ انتشارشان رسیده باشد نمایش داده خواهند شد.');
@define('INSTALL_ACL', 'اعمال کردن دسترسی خواندن برای موضوع ها');
@define('INSTALL_ACL_DESC', 'در صورت فعال بودن این گزینه، در صورتی که کاربران عضو شده، وارد سیستم شوند، دسترسی کاربران گروه ها اعمال می شود. در صورت غیر فعال بودن، دسترسی خواندن موضوعات اعمال نمی شود، اما کمی سرعت وبلاگ را زیاد می کند. پس اگر به وبلاگ چند کاربره با دسترسی محدود در خواندن نیازی ندارید، این گزینه را غیر فعال کنید.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'تمام ارسال ها با تمام متن بدنه را در RSS قرار بده');
@define('SYNDICATION_PLUGIN_BANNERURL', 'تصویر برای RSS');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'در صورت وجود، آدرس عکسی با توسعه GIF یا JPEG یا PNG. (خالی=لوگوی سرندیپیتی)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'عرض تصویر');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'پیکسل، حداکثر 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'ارتفاع تصویر');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'پیکسل، حداکثر 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'آیا آدرس ایمیل ها دیده شود؟');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'فیلد "نویسنده"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'در صورت وجود، آدرس ایمیل نویسنده (خالی=مخفی) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'فیلد "مدیر"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'ایمیل مدیر سایت، البته در صورت موجود بودن. (خالی=مخفی) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'فیلد "ttl" (زمان زندگی)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'زمانی بر حسب دقیقه که سایت شما برای سایت ها و برنامه های خارجی cache خواهد شد (خالی=مخفی) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'فیلد زمان انتشار');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'آیا زمان انتشار ارسال ها در گزینه های RSS درج شود؟');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'تنظیمات تغییر عکس');
@define('INSTALL_CAT_IMAGECONV_DESC', 'اطلاعات کلی برای سرندیپیتی برای چگونگی پردازش تصاویر');
@define('INSTALL_IMAGEMAGICK', 'استفاده از ImageMagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'آیا شما ImageMagick را نصب کرده اید و آیا می خواهید از آن به عنوان پردازنده تصاویر استفاده کنید؟');
@define('INSTALL_IMAGEMAGICKPATH', 'مسیر تغییر فایل های باینری');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'آدرس کامل و نام فایل ImageMagick برای تغییر فایل های باینری');
@define('INSTALL_THUMBSUFFIX', 'پیشوند عکس های کوچک');
@define('INSTALL_THUMBSUFFIX_DESC', 'عکس های کوچک با روش روبرو نامگذاری خواهند شد: نام اصلی.[پیشوند].توسعه');
@define('INSTALL_THUMBWIDTH', 'اندازه تصاویر کوچک');
@define('INSTALL_THUMBWIDTH_DESC', 'بیشترین عرض عکس های کوچک');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'بیشترین حجم فایل ارسالی');
@define('MEDIA_UPLOAD_SIZE_DESC', 'بیشترین حجم فایل ارسالی را به بایت وارد کنید. این گزینه می تواند توسط متغیر های موجود فایل php.ini بازنویسی شود، مثل: upload_max_filesize، post_max_size، max_input_time. مقدار تهی برای این گزینه به مفهوم تبعیت از انتخاب های موجود در php.ini می باشد.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'بیشترین طول تصویر');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'بیشترین طول تصویر برای بالاگذاری را بر اساس پیکسل وارد کنید.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'بیشترین عرض تصویر');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'بیشترین عرض تصویر برای بالاگذاری را بر اساس پیکسل وارد کنید.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'فعال کردن سیستم هماهنگی خودکار رسانه ها');
@define('ONTHEFLYSYNCH_DESC', 'در صورت فعال بودن، سرندیپیتی به صورت خودکار محتویات پایگاه داده و فایل های شما را با هم هماهنگ می کند.');
@define('MEDIA_DYN_RESIZE', 'اجازه تغییر خودکار تصویر؟');
@define('MEDIA_DYN_RESIZE_DESC', 'در صورت فعال بودن، ابعاد ارسال شده را برای ابعاد تصویر در نظر گرفته می شود. نتیجهء کار نکهداری می شود، پس شما می توانید آرشیو کامل تری ایجاد کنید.');
@define('MEDIA_EXIF', 'خواندن اطلاعات EXIF/JPEG تصویر');
@define('MEDIA_EXIF_DESC', 'در صورت فعال بودن، لیست اطلاعات موجود در EXIF/JPEG تصاویر، برای نمایش داده شدن در بخش گالری، در پایگاه داده ذخیره می شود.');
@define('MEDIA_PROP', 'اطلاعات رسانه');
@define('MEDIA_PROP_DESC', 'لیستی از مشخصات را وارد کرده و هر مشخصه را با ";" جدا کنید');
@define('MEDIA_PROP_MULTIDESC', '(شما می توانید با افزودن عبارت ":MULTI" بعد از هر گزینه مشخص کنید گه این گزینه شامل متنی طولانی می باشد)');
@define('MEDIA_KEYWORDS', 'کلمات کلیدی');
@define('MEDIA_KEYWORDS_DESC', 'لیستی از کلمات را وارد کنید و در بین کلمات از علامت ";" استفاده کنید.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'اطلاعات شخصی');
@define('USERCONF_CAT_PERSONAL_DESC', 'ویرایش اطلاعات شخصی');
@define('USERCONF_USERNAME', 'نام کاربری');
@define('USERCONF_USERNAME_DESC', 'نام کاربری برای ورود شما به سیستم');
@define('USERCONF_PASSWORD', 'رمز عبور');
@define('USERCONF_PASSWORD_DESC', 'رمز عبور برای ورود شما به سیستم');
@define('USERCONF_CHECK_PASSWORD', 'رمز عبور قدیمی');
@define('USERCONF_CHECK_PASSWORD_DESC', 'اگر می خواهید رمز عبور بالا را تغییر دهید، نیاز دارید که رمز قدیمی را در این فیلد وارد کنید.');
@define('USERCONF_USERLEVEL', 'نوع دسترسی');
@define('USERCONF_USERLEVEL_DESC', 'دسترسی باید یکی از گزینه های روبرو باشد: [USERLEVEL_ADMIN] - مدیر، [USERLEVEL_CHIEF] - رییس نویسندگان، [USERLEVEL_EDITOR] - نویسنده عادی.');
@define('USERCONF_GROUPS', 'گروه ها');
@define('USERCONF_GROUPS_DESC', 'این کاربر در گروه های زیر عضو است. امکان عضویت در چند گروه مجاز می باشد.');
@define('USERCONF_EMAIL', 'آدرس ایمیل');
@define('USERCONF_EMAIL_DESC', 'آدرس ایمیل شخصی شما');
@define('INSTALL_WYSIWYG', 'استفاده از ویرایشگر WYSIWYG');
@define('INSTALL_WYSIWYG_DESC', 'آیا می خواهید از ویراشگر WYSIWYG استفاده کنید؟ (در IE5+، و مقداری در Mozilla 1.3+ قابل مشاهده می باشد)');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'Toolbar for WYSIWYG editor');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Sets the list of available toolbar buttons for the WYSIWYG-Editor. If you need to further change those presets, you can create a file templates/XXX/admin/ckeditor_custom_config.js. For further details please check out the files htmlarea/ckeditor_s9y_config.js and htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (default)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Reduced');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Full');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Alternate');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Force: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Force: Reduced');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Force: Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Force: Alternate');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Force: CKEditor Full');
@define('USERCONF_SENDCOMMENTS', 'آیا خبر ارسال نظر ارسال گردد؟');
@define('USERCONF_SENDCOMMENTS_DESC', 'آیا می خواهید در زمان ارسال نظر، ایمیلی برای با خبر شدن از آن دریافت کنید؟');
@define('USERCONF_SENDTRACKBACKS', 'آیا خبر دنبالک ارسال گردد؟');
@define('USERCONF_SENDTRACKBACKS_DESC', 'آیا می خواهید در زمانی که دنبالکی ارسال می شود، ایمیلی برای با خبر شدن از آن دریافت کنید؟');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'قوانین: انتشار مطالب؟');
@define('USERCONF_ALLOWPUBLISH_DESC', 'آیا این کاربر توانایی ارسال مطلب دارد؟');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'نوار ابزار در صفحهء باز شوندهء رسانه ها نمایش داده شود؟');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'تنظیمات پیش فرض برای ارسال های جدید');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'توجه: اکنون مدیریت دسترسی کاربران فقط برای سازگاری با نسخ قدیمی پشتیبانی می شود. اکنون دسترسی کاربران با گروه ها مدیریت می شود!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'رمز عبور قدیمی شما اشتباه است، پس توانایی تغییر رمز عبور وجود ندارد. تنظیمات جدید شما اعمال نشد.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'نام کاربری نمی تواند خالی باشد.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: دسترسی به تنظیمات شخصی');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: تغییر سطح دسترسی');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: تغییر "ممنوع بودن ارسال پست"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: تغییر دسترسی به ارسال پست');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: دسترسی به تنظیمات سایت');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: دسترسی به تنظیمات مرکزی وبلاگ');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: مدیریت ارسال ها');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: دسترسی به مدیریت ارسال های دیگران');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: وارد کردن ارسال');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: مدیریت موضوعات');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: مدیریت موضوعات دیگران');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: حذف موضوعات');
@define('PERMISSION_ADMINUSERS', 'adminUsers: مدیریت کاربران');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: حذف کاربران');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: تغییر سطح دسترسی کاربران');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: مدیریت کاربرانی که در گروه شما قرار دارند');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: مدیریت کاربرانی که در گروه شما قرار ندارند');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: ایجاد کاربر جدید');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: مدیریت گروه های کاربری');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: مدیریت افزونه ها');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: مدیریت افزونه های کاربران دیگر');
@define('PERMISSION_ADMINIMAGES', 'adminImages: مدیریت فایل های رسانه');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: مدیریت شاخه های رسانه ها');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: افزودن یک رسانه جدید');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: حذف یک رسانه');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: مدیریت رسانه های کاربران دیگر');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: مشاهده فایل های رسانه');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: همگام کردن عکس های کوچک');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: مدیریت نظر ها');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: مدیریت پوسته ها');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: مشاهده فایل های رسانه کاربران دیگر');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'افزونه ها ممنوع شده');
@define('PERMISSION_FORBIDDEN_HOOKS', 'واقعه های ممنوع شده');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'ارسال شما ذخیره شد');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'بند کشی شده');
@define('COMMENTS_VIEWMODE_LINEAR', 'خطی');
@define('DISPLAY_COMMENTS_AS', 'نمایش نظرات به صورت');
@define('COMMENTS_DISABLE', 'اجازه ارسال نظر داده نشود');
@define('COMMENTS_ENABLE', 'اجازه ارسال نظر داده شود');
@define('COMMENTS_CLOSED', 'نویسنده اجازه ارسال نظر نداده است');
@define('VIEW_EXTENDED_ENTRY', 'ادامه مطلب "%s"');
@define('TRACKBACK_SPECIFIC', 'یک آدرس دنبالک برای ارسال');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'نمایش کامل');
@define('VIEW_TOPICS', 'نمایش تاپیک ها');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'تاپیکی از');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'اضافه کردن ارسال ها با مشکل مواجه شد!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'آیا اطلاعات را به یاد داشته باشم؟ ');
@define('SUBMIT_COMMENT', 'ارسال نظر');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'وقتی نظری ارسال شد، مرا خبر کن');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'مرورگر شما بخش مربوط به HTTP-Referrer را ارسال نکرده است. ممکن است این مشکل از تنظیمات مرورگر شما یا استفاده از پروکسی یا ... باشد. توانایی انجام درخواست شما وجود ندارد.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'نظر #%s ظاهرا قبلا تایید شده است');
@define('COMMENT_EDITED', 'نظر مشخص شده، ویرایش شد');
@define('COMMENTS_WILL_BE_MODERATED', 'نظرات ارسال شده قبل از نمایش داده شدن، باید مدیریت شوند.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'توجه: نظر شما قبل از نمایش داده شدن، باید تایید شود');
@define('DELETE_COMMENT', 'حذف نظر');
@define('APPROVE_COMMENT', 'قبول نظر');
@define('REQUIRES_REVIEW', 'مرور موارد مورد نیاز');
@define('COMMENT_APPROVED', 'نظر #%s با موفقیت قبول شد');
@define('COMMENT_DELETED', 'نظر #%s با موفقیت حذف شد');
@define('COMMENTS_MODERATE', 'نظر ها و دنبالک های این ارسال احتیاج به مدیریت دارند');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'توجه: این دنبالک قبل از انتشار احتیاج به اعتبار سنجی دارد');
@define('DELETE_TRACKBACK', 'حذف دنبالک');
@define('APPROVE_TRACKBACK', 'قبول دنبالک');
@define('TRACKBACK_APPROVED', 'دنبالک #%s با موفقیت افزوده شد');
@define('TRACKBACK_DELETED', 'دنبالک #%s با موفقیت حذف شد');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'بالاترین سطح');
@define('VIEW_COMMENT', 'نمایش نظر');
@define('VIEW_ENTRY', 'نمایش ارسال');
@define('LINK_TO_ENTRY', 'لینک به ارسال');
@define('LINK_TO_REMOTE_ENTRY', 'لینک به ارسال خارجی');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'ارسال دنبالک به آدرس %s...');
@define('TRACKBACK_SENT', 'موفقیت در دنبالک');
@define('TRACKBACK_FAILED', 'خطا در دنبالک: %s');
@define('TRACKBACK_NOT_FOUND', 'هیچ آدرسی برای دنبالک یافت نشد.');
@define('TRACKBACK_URI_MISMATCH', 'آدرس دنبالک با آدرس موجود تناقض دارد.');
@define('TRACKBACK_CHECKING', 'بررسی <u>%s</u> برای وجود دنبالک...');
@define('TRACKBACK_NO_DATA', 'هدف هیچ داده ای ندارد');
@define('TRACKBACK_COULD_NOT_CONNECT', 'هیچ دنبالکی ارسال نشد: توانایی ایجاد اتصال به %s روی پورت %d نمی باشد');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for comments to \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled one-time mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n\nAfter you have done that, you can always post comments on that blog with your username and e-mail address without receiving such notifications.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'توضیح جدیدی برای مطلب "%s" ارسال شد');
@define('SUBSCRIPTION_MAIL', "سلام %s،\n\nA نظر جدیدی برای مطلب \"%s\"، با تیتر \"%s\" ارسال شده است\nنام ارسال کننده: %s\n\nمی توانید مطلب را در لینک روبرو مشاهده کنید: %s\n\nمی توانید با کلیک روی لینک روبرو این نظر را قبول نکنید: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "سلام %s،\n\nA دنبالک جدیدی برای مطلب \"%s\"، با تیتر \"%s\" ارسال شده است\nنام ارسال کننده: %s\n\nمی توانید مطلب را در لینک روبرو مشاهده کنید: %s\n\nمی توانید با کلیک روی لینک روبرو این دنبالک را قبول نکنید: %s\n");
@define('SIGNATURE', "\n-- \n%s بر پایه سرندیپیتی بنا شده است.\nبهترین سیستم وبلاگ موجود، شما هم می توانید از این سیستم استفاده کنید.\nسایت <https://s9y.org> را بری روش نصب و استفاده مرور کنید.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'یک نظر جدید برای وبلاگ "%s"، در مورد "%s" ارسال شده است.');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'یک دنبالک جدید در مورد "%s" ساخته شد.');
@define('YOU_HAVE_THESE_OPTIONS', 'گزینه های زیر وجود دارند:');
@define('NEW_TRACKBACK_TO', 'یک دنبالک جدید برای');
@define('NEW_COMMENT_TO', 'یک نظر جدید برای');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'هیچ مقداری برای گزارش %s پیدا نشد' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'جستجو برای عبارت %s، %s نتیجه برگردانید:');
@define('SEARCH_TOO_SHORT', 'رشته جستجو شونده باید بیشتر از سه حرف باشد. شما می توانید با افزودن * به کلمات کوچک، مثل: s9y* این امکان را ایجاد کنید تا بتوانید کلمات کوچک را نیز جستجو نمایید.');
@define('SEARCH_ERROR', 'بخش جستجو به درستی کار نمی کند. این مورد را به مدیر سایت گزارش دهید: ممکن است این مشکل به دلیل از دست رفتن اندیس های جدول ها پیش آمده باشد. در MySQL شما باید دسترسی اجرای پرس و جوی روبرو را داشته باشید: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title،body،extended)</pre> خطای برگشتی پایگاه داده: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'نظر شما خالی است، لطفا %sبرگردید%s و دوباره سعی نمایید');
@define('COMMENT_NOT_ADDED', 'به دلیل غیر فعال بودن توضیحات، یا وارد کردن اطلاعات نادرست و یا وارد کردن عبارت اشتباه نوشته شده در تصویر، توانایی افزودن نظر شما وجود ندارد.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'نظر های ');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Your confirmation of the comment has been successfully entered.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Your comment confirmation could not be confirmed.  Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must send your comment again.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Your confirmation of your comment subscription has been successfully entered.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', "Your subscription to \"%s\" is successfully deleted. You won't get informed about new articles.");
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Your subscription for the email %s cannot be deleted. Please check the link you clicked on for completion.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', "Your subscription to \"%s\" for the email %s is successfully deleted. You won't get informed about new comments.");
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Your subscription cannot be deleted. Please check the link you clicked on for completion.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Your request for a blog subscription is recieved. An email will be sent to %s to approve this subscription ("Double Opt In") with a link to confirm your email address.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'The subscription to "%s" is received. A summary of a new article will be sent to you. You can unsubscribe with a link included in every mail.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Your subscription failed because there is already an active subscription for "%s".');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Your subscription failed. Please check your email address.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Email Subscription of new articles');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'To get informed of new articles, enter your email address here.');
@define('BLOG_SUBSCRIPTION_AUTHOR', "To get informed of new articles from \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_CATEGORY', "To get informed of new articles in the category \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_OPTIN', 'An email with an confirmation link will be sent to this address, click on the link to confirm your subscription.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'To get informed of new articles from "%s", enter your email address here.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'To get informed of new articles in the category "%s", enter your email address here.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', 'طرز نگارش گزینه "%s" اشتباه است. نیاز داریم نوع "%s" را بدانیم.');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'لیست موضوعات را نمایش می دهد.');
@define('CATEGORIES_PARENT_BASE', 'فقط موضوعات زیر را نمایش بده...');
@define('CATEGORIES_PARENT_BASE_DESC', 'شما می توانید یک موضوع "پدر" را انتخاب کنید، در این صورت، فقط موضوعات "فرزند" نمایش داده می شوند.');
@define('CATEGORIES_HIDE_PARALLEL', 'مخفی کردن موضوعاتی که در درخت موضوعات قرار ندارند');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'اگر می خواهید موضوعاتی که قسمتی از یک درخت دیگرند را مخفی کنید، این گزینه را فعال سازید. این گزینه، امکاناتی برای استفاده از سیستم های وبلاگ چندگانه را با کمک افزونه "Properties/Tempaltes of categories" فراهم می کند.');
@define('CATEGORIES_HIDE_PARENT', 'مخفی کردن موضوع پدری که انتخاب شده است؟');
@define('CATEGORIES_HIDE_PARENT_DESC', 'اگر شما لیست موضوعات را به موضوع خاصی محدود کرده اید، به طور پیشفرض، آن موضوع را در لیست خروجی مشاهده خواهید کرد. در صورت غیر فعال کردن این گزینه، نام موضوع پدر را نخواهید دید.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'فعال کردن Smarty-Templates؟');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'اگر این گزینه فعال باشد، این افزونه از امکانات Smarty-Templating برای نمایش فهرست موضوعات استفاده می کند. در صورت فعال بودن این گزینه، می توانید ترکیب صفحه را از طریق ویرایش فایل "plugin_categories.tpl" تغییر دهید. فعال کردن این گزینه باعث کاهش توانایی سرور می شود، پس اگر نیازی به تغییر ساختار این صفحه ندارید، این گزینه را غیر فعال باقی بگذارید.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'آیا تعداد ارسال های هر موضوع در مقابل نام آن نمایش داده شود؟');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'به کاربران اجازه نمایش همزمان چندین موضوع را اعطا کن؟');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'اگر این گزینه فعال باشد، قسمتی برای انتخاب، در کنار هر موضوع در نوار افزونه های کناری اضافه خواهد شد. کاربران می توانند موضوعات مورد نظر را انتخاب کرده تا مطالب ارسالی در موضوعات مشخص شده را مشاهده کنند.');
@define('CATEGORIES_TO_FETCH', 'موضوعات دریافتی');
@define('CATEGORIES_TO_FETCH_DESC', 'موضوعات کدام نویسنده دریافت شود؟');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'نمایش فهرست نویسندگان');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'آیا تعداد ارسال های هر نویسنده در مقابل نام وی نمایش داده شود؟');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'اگر این گزینه فعال باشد، تعداد ارسال های یک نویسنده، جلوی نام وی، داخل پرانتز، نمایش داده می شود.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'به نویسندگان حداقل X مطلب نشان داده شود');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'اتصال دهنده');
@define('SHOWS_RSS_BLAHBLAH', 'نمایش لینک های RSS');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 نظرات');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Displayed name for "feed"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Enter an optional custom name for the feeds (defaults to "feed" when empty)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Displayed name for "comment" feed');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Enter an optional custom name for the comment feed');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'هویت FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'هویتی که می خواهید برای این تغذیه منتشر شود');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'تصویر FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'نام عکسی که قرار است نمایش داده شود (یا خالی بگذارید تا شمارنده نمایش داده شود)، که در سایت feedburner.com قرار دارد، مثل: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'تیتر FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'تیتری که قرار است در جلوی عکس نمایش داده شود');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'متن تصویر FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'متنی که قرار است وقتی موشواره روی عکس متوقف شد، نمایش داده شود');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Blog subscription with email');
@define('PLUGIN_SUBSCRIBE_DESC', 'Allows an user to subscribe to the blog. He will receive an email if new articles are published with the option to unsubscribe');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Title');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Enter the sidebar title to display:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_LINK', 'Linktext');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'which text should be shown in the subscribe link?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Hide archives link when no entries were made in that timespan (requires counting entries)');
@define('ARCHIVE_COUNT', 'تعداد گزینه های موجود در لیست');
@define('ARCHIVE_COUNT_DESC', 'تعداد ماه ها، هفته ها و روز هایی که نمایش داده شود');
@define('ARCHIVE_FREQUENCY', 'تناوب گزینه های تقویم');
@define('ARCHIVE_FREQUENCY_DESC', 'فاصله بین تاریخ ارسال های موجود در لیست');
@define('BROWSE_ARCHIVES', 'پیمایش ماهیانه بایگانی');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'نمایش متنی "Serendipity"');
@define('POWERED_BY_SHOW_TEXT_DESC', 'عبارت "Serendipity Weblog" را به صورت متنی نمایش می دهد');
@define('POWERED_BY_SHOW_IMAGE', 'نمایش "Serendipity" همراه با یک لوگو');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'لوگوی سرندیپیتی را نمایش می دهد');
@define('ADVERTISES_BLAHBLAH', 'تبلیغات سیستم این وبلاگ');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'برای ورود از https استفاده شود');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'لینک ورود به آدرسی به شکل https را وارد کنید. سرور  و سایت شما باید SSL را پشتیبانی کنند');
@define('SUPERUSER', 'مدیریت وبلاگ');
@define('SUPERUSER_OPEN_ADMIN', 'بخش مدیریت');
@define('SUPERUSER_OPEN_LOGIN', 'باز کردن صفحه ورود');
@define('ALLOWS_YOU_BLAHBLAH', 'ایجاد لینکی در نوار کناری برای ورود به بخش مدیریت');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'تقویم');
@define('CALENDAR_BOW_DESC', 'روزی که به عنوان اولین روز هفته در نظر گرفته می شود. Monday مقدار پیش فرض می باشد');
@define('QUICKJUMP_CALENDAR', 'تقویم برای پرش سریع');
@define('CALENDAR_BEGINNING_OF_WEEK', 'ابتدای هفته');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'فعال کردن API افزونه چنگکی');
@define('CALENDAR_EXTEVENT_DESC', 'در صورت فعال بودن، افزونه ها می توانند از تقویم برای نشان دادن وقایع استفاده کنند. این افزونه فقط در حالتی کار می کند که افزونه هایی که آن را لازم دارند، نصب شده باشند در غیر این صورت، فقط کمی قدرت سیستم پایین می آید.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'جستجو');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'تکه کدی از HTML را در نوار کناری داشته باشید');
@define('THE_NUGGET', 'تکه کد HTML!');
@define('BACKEND_TITLE', 'اطلاعات بیشتر را در قسمت تنظیمات افزونه وجود دارد');
@define('BACKEND_TITLE_FOR_NUGGET', 'در اینجا می توانید یک رشته جدید انتخاب کنید، رشته ای که در صفحه تنظیمات افزونه ها در کنار توضیحات افزونه "تکه کد HTML" نمایش داده می شود. اگر شما از تعدادی تکه کد HTML با تیتر های خالی استفاده می کنید، این مورد، کمک می کند که بتوانید این افزونه ها را از هم تمیز دهید.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'نمایش بیشترین بینندگان و بیشترین خروج ها به صورت لینک؟');
@define('INSTALL_TOP_AS_LINKS_DESC', '"خیر": خروج ها و بازدید ها به صورت متن عادی نمایش داده خواهند شد. "بله": خروج ها و بازدید ها به صورت لینک نمایش داده خواهند شد. "پیش فرض": استفاده از تنظیمات جهانی (این گزینه توصیه می شود).');
@define('HAVE_TO_BE_LOGGED_ON', 'برای مشاهده این صفحه باید وارد سیستم شوید');
@define('WELCOME_TO_ADMIN', 'به بخش مدیریت سرندیپیتی خوش آمدید.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'نظر کوتاه');
@define('MEDIA_PROPERTY_COMMENT2', 'نظر بلند');
@define('DELETE_SELECTED_ENTRIES', 'حذف مطالب انتخاب شده');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'تیتر');
@define('SERENDIPITY_NOT_INSTALLED', 'سرندیپیتی هنوز نصب نشده است. لطفا هم اکنون آن را <a href="%s">نصب کنید</a>.');
@define('COMMENT_ADDED_CLICK', 'برای بازگشت به نظر ها %sاینجا%s و برای بستن این پنجره %sاینجا%s کلیک کنید.');
@define('COMMENT_NOT_ADDED_CLICK', 'برای بازگشت به نظر ها %sاینجا%s، و برای بستن پنجره %sاینجا%s کلیک کنید.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'طول اجرا');
@define('MEDIA_PROPERTY_DATE', 'تاریخ صعودی');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'آدرس تغییر یافته در %s مطلب های شما پیدا و جایگزین شد.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'در پایگاه داده هایی غیر از MySQL مرور ارسال ها برای تغییر آدرس های قدیمی و تبدیلشون به آدرس های جدید ممکن نیست. و شما باید این عمل را خودتان انجام دهید. در عین حال می توانید آدرس شاخه را به نام قبلی تغییر دهید.');
@define('TRACKBACK_SIZE', 'آدرس هدف از محدودیت بیشترین حجم فایل به مقدار %s بایت تجاوز کرد.');
@define('CLICK_FILE_TO_INSERT', 'برای الحاق کردن، روی تصویر کلیک کنید:');
@define('SELECT_FILE', 'فایل را برای الحاق کردن مشخص کنید');
@define('MANAGE_IMAGES', 'مدیریت عکس ها');
@define('WORD_NEW', 'جدید');
@define('WORD_OR', 'یا');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'ظاهر: سرویس های خارجی');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'ظاهر: امکانات');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'ظاهر: مودهای کامل');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'ظاهر: نمایه ها');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'ظاهر: ارسال های مرتبط');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'باطن: ویرایشگر');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'باطن: مدیریت کاربر');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'باطن: اطلاعات متا');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'باطن: پوسته ها');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'باطن: امکانات');
@define('PLUGIN_GROUP_IMAGES', 'عکس ها');
@define('PLUGIN_GROUP_ANTISPAM', 'ضد اسپم');
@define('PLUGIN_GROUP_MARKUP', 'برچسب');
@define('PLUGIN_GROUP_STATISTICS', 'آمار');
@define('IMPORT_WELCOME', 'به ابزار واردات سرندیپیتی خوش آمدید');
@define('USER_SELF_INFO', 'کاربر %s با سطح دسترسی %s وارد شد');
@define('IMPORT_WHAT_CAN', 'در این مکان شما می توانید ارسال های سیستم های وبلاگ دیگر را وارد کنید');
@define('IMPORT_SELECT', 'لطفا نام برنامه ای که می خواهید ارسال هایش را وارد کنید، انتخاب کنید');
@define('MANAGE_STYLES', 'مدیریت پوسته ها');
@define('SELECT_A_PLUGIN_TO_ADD', 'افزونه ای که می خواهید نصب کنید را انتخاب کنید');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'لیستی از افزونه های نصب شده');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'بازگشت');
@define('DELETE_SELECTED_COMMENTS', 'نظرات انتخاب شده حذف شدند');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'جستجوی رسانه ها');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'خطا: فایل های قدیمی وجود ندارند!');
@define('ERROR_SOMETHING', 'خطا: مشکلی وجود دارد.');
@define('DIRECT_LINK', 'لینک مستقیم به ارسال');
@define('SELECT_TEMPLATE', 'پوسته مورد علاقه خود را انتخاب کنید');
@define('DATABASE_ERROR', 'خطای سرندیپیتی: امکان اتصال به پایگاه داده وجود ندارد - برنامه متوقف شد.');
@define('LIMIT_TO_NUMBER', 'چه تعداد گزینه نمایش داده شود؟');
@define('DIRECTORIES_AVAILABLE', 'در لیست زیرشاخه های موجود می توانید روی نام شاخه کلیک کنید تا زیرشاخه ای جدید در آن شاخه درست کنید.');
@define('CATEGORY_INDEX', 'در زیر لیستی از موضوعات برای این ارسال وجود دارند');
@define('PAGE_BROWSE_PLUGINS', 'صفحه %s از %s، در کل %s صفحه.');
@define('CHARSET_NATIVE', 'طبیعی');
@define('XMLRPC_NO_LONGER_BUNDLED', 'افزونه XML-RPC API برای سرندیپیتی به دلیل مشکلات امنیتی، پشتیبانی نمی شود، ضمن اینکه کاربران کمی نیز از آن استفاده می کردند. به هر حال، برای استفاده از XML-RPC API باید افزونه XML-RPC را نصب کنید. آدرس استفاده شده در برنامه تغییر نخواهد کرد - تا زمانی که شما افزونه را نصب دارید، می توانید از API استفاده کنید.');
@define('AUTHORS_ALLOW_SELECT', 'اجازه مشاهده ارسال های چندین نویسنده داده شود؟');
@define('AUTHORS_ALLOW_SELECT_DESC', 'اگر این گزینه فعال باشد، یک سری چکباکس در مقابل نام نویسندگان ظاهر می شود. کاربران می توانند مقابل نام نویسندگان مورد علاقه خود تیک زده و فقط ارسال های ایشان را مشاهده کنند.');
@define('PREFERENCE_USE_JS', 'استفاده پیشرفته از جاوا اسکریپت؟');
@define('PREFERENCE_USE_JS_DESC', 'در صورت فعال بودن قسمت هایی که از جاوا اسکریپت پیشرفته استفاده می کنند فعال می شود، مانند بخش مدیریت افزونه ها که می توانید از drag and drop برای مرتب سازی افزونه ها کمک بگیرید.');
@define('PREFERENCE_USE_JS_WARNING', '(این صفحه از جاوا اسکریپت پیشرفته استفاده می کند. اگر با این صفحه مشکل پیدا کردید، از بخش تنظیمات شخصی، استفاده پیشرفته از جاوا اسکریپت را غیر فعال کنید یا اینکه فعالیت جاوا اسکریپت را داخل مرورگر خود غیر فعال کنید)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');

<?php #

/**
 *  @version 
 *  @author Omid Mottaghi <webmaster@oxygenws.com>
 *  EN-Revision: Revision of lang_fa.inc.php
 */

@define('PLUGIN_EVENT_SPAMBLOCK_TITLE', 'ضد اسپم');
@define('PLUGIN_EVENT_SPAMBLOCK_DESC', 'روش های متعدد برای جلوگیری از ارسال اسپم در بخش نظرات');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_BODY', 'ضد اسپم: اشکال در پیام.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_IP', 'ضد اسپم: شما نمی توانید نظراتی را پشت سر هم ارسال کنید.');

@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_KILLSWITCH', 'این وبلاگ در حالت غیر فعال می باشد، لطفا بعدا مراجعه فرمایید.');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE', 'جلوگیری از ارسال نظرات مشابه');
@define('PLUGIN_EVENT_SPAMBLOCK_BODYCLONE_DESC', 'به کاربران اجازه ارسال نظراتی که محتویات تکراری دارند، داده نشود');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH', 'قطع توانایی ارسال نظر');
@define('PLUGIN_EVENT_SPAMBLOCK_KILLSWITCH_DESC', 'قطع کردن توانایی ارسال نظر در تمامی وبلاگ.');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD', 'محدودیت زمانی روی IP');
@define('PLUGIN_EVENT_SPAMBLOCK_IPFLOOD_DESC', 'هر IP در هر n دقیقه می تواند نظر ارسال کند. این گزینه شما را در مقابل حمله مقاوم می کند.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS', 'فعال کردن تصاویر گرافیکی');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_DESC', 'Will force the user to input a random string displayed in a specially crafted image. This will disallow automated submits to your blog. Please remember that people with decreased vision may find it hard to read those captchas.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC', 'To prevent automated Bots from commentspamming, please enter the string you see in the image below in the appropriate input box. Your comment will only be submitted if the strings match. Please ensure that your browser supports and accepts cookies, or your comment cannot be verified correctly.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC2', 'این متن را در فیلد پایین وارد کنید!');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_USERDESC3', 'متن موجود در تصویر بالا را در زیر وارد کنید: ');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_CAPTCHAS', 'You did not enter the correct string displayed in the spam-prevention image box. Please look at the image and enter the values displayed there.');
@define('PLUGIN_EVENT_SPAMBLOCK_ERROR_NOTTF', 'Captchas disabled on your server. You need GDLib and freetype libraries compiled to PHP, and need the .TTF files residing in your directory.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL', 'تصاویر بعد از چند روز نمایش داده شود');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_TTL_DESC', 'تصاویر گرافیکی می توانند نسبت به عمر ارسال شما، نمایش داده شوند. تعداد روز ها را وارد کنید. مقدار 0 نمایانگر نمایش همیشگی تصاویر است.');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION', 'نظر ها بعد از چند روز مدیریت شوند');
@define('PLUGIN_EVENT_SPAMBLOCK_FORCEMODERATION_DESC', 'نظر ها می توانند قبل از دیده شدن، مدیریت شوند. تعداد روز ها را وارد کنید. عدد 0 به معنی عدم مدیریت خودکار وبلاگ است و این مدیریت باید دستی انجام شود.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE', 'تعداد لینک های مجاز در نظرات برای مدیریت');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_MODERATE_DESC', 'اگر تعداد لینک های یک نظر از حدی بیشتر شد، آن نظر باید مدیریت شود. این مقدار را وارد کنید. عدد 0 به مفهوم غیر فعال کردن این امکان است.');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT', 'تعداد لینک های مجاز در نظرات برای رد نظر');
@define('PLUGIN_EVENT_SPAMBLOCK_LINKS_REJECT_DESC', 'اگر تعداد لینک های یک نظر از حدی بیشتر شد، آن نظر حذف شود. این تعداد را وارد کنید. عدد 0 به مفهوم غیر فعال کردن این گزینه است.');

@define('PLUGIN_EVENT_SPAMBLOCK_NOTICE_MODERATION', 'به دلایلی تشخیص داده شد که نظر ارسالی شما، باید توسط مدیران این وبلاگ، مدیریت شود.');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR', 'رنگ زمینه تصویر');
@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHA_COLOR_DESC', 'مقدار RGB را وارد کنید: 0،255،255');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE', 'مکان فایل تاریخچه');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGFILE_DESC', 'توانایی ذخیره اطلاعات رد یا قبول نظرات، در فایل، وجود دارد. برای غیر فعال کردن این گزینه، هیچ مقداری وارد نکنید.');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_KILLSWITCH', 'غیر فعال کردن اضطراری نظرات');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_BODYCLONE', 'نظر تکراری');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_IPFLOOD', 'بلاک کردن IP');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CAPTCHAS', 'Invalid captcha (Entered: %s, Expected: %s)'); // this should be in english!!
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_FORCEMODERATION', 'مدیریت خودکار بعد از X روز');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_REJECT', 'تعداد لینک ها زیاد است');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_LINKS_MODERATE', 'تعداد لینک ها زیاد است');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL', 'مخفی کردن ایمیل نظر دهندگان');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_DESC', 'ایمیل نظر دهندگان را نمایش نمی دهد');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_EMAIL_NOTICE', 'آدرس های ایمیل نمایش داده نمی شوند و فقط برای ارسال اطلاعات استفاده می شود.');

@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE', 'روش نگهداری تاریخچه');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DESC', 'نگهداری تاریخچه، می تواند با کمک فایل یا پایگاه داده انجام شود');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_FILE', 'فایل (مقدار "مکان فایل تاریخچه" را تنظیم کنید)');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_DB', 'پایگاه داده');
@define('PLUGIN_EVENT_SPAMBLOCK_LOGTYPE_NONE', 'بدون ثبت تاریخچه');

@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS', 'How to treat comments made via APIs');
@define('PLUGIN_EVENT_SPAMBLOCK_API_COMMENTS_DESC', 'This affects the moderation of comments made via API calls (Trackbacks, WFW:commentAPI comments). If set to "moderate", all those comments always need to be approved first. If set to "reject", the are completely disallowed. If set to "none", the comments will be treated as usual comments.');
@define('PLUGIN_EVENT_SPAMBLOCK_API_MODERATE', 'مدیریت');
@define('PLUGIN_EVENT_SPAMBLOCK_API_REJECT', 'قبول نکردن');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_API', 'هیچ نظری که توسط API ها ایجاد شده (مثل دنبالک ها) قبول نمی شود.');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE', 'فعال کردن فیلتر کلمات');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_ACTIVATE_DESC', 'در نظرات کلمات خاصی جستجو شده و موارد کشف شده، به عوان اسپم شناسایی شوند.');

@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS', 'فیلتر کلمات، در مورد آدرس های اینترنتی');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_URLS_DESC', 'توانایی پردازش عبارات منظم وجود دارد, رشته ها با علامت نقطه ویرگول از هم جدا کنید (;).');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS', 'فیلتر کلمات، برای نام نویسنده');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_AUTHORS_DESC', 'توانایی پردازش عبارات منظم وجود دارد, رشته ها با علامت نقطه ویرگول از هم جدا کنید (;).');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_WORDS', 'فیلتر کلمات، برای بدنه نظر');

@define('PLUGIN_EVENT_SPAMBLOCK_REASON_CHECKMAIL', 'آدرس ایمیل مشکل دار');
@define('PLUGIN_EVENT_SPAMBLOCK_CHECKMAIL', 'آدرس های ایمیل چک شود؟');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS', 'فیلد های مورد نیاز بخش نظرات');
@define('PLUGIN_EVENT_SPAMBLOCK_REQUIRED_FIELDS_DESC', 'لیست فیلد های مورد نیاز برای بخش نظرات را وارد کنید. نام فیلد ها را با یک علامت کامای انگلیسی "," مشخص کنید. کلماتی که می توانید وارد کنید عبارتند از: name، email، url، replyTo، comment');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_REQUIRED_FIELD', 'مقدار فیلد %s را مشخص نکرده اید!');

@define('PLUGIN_EVENT_SPAMBLOCK_CONFIG', 'Configure Anti-Spam methods');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_AUTHOR', 'Block this author via Spamblock plugin');
@define('PLUGIN_EVENT_SPAMBLOCK_ADD_URL', 'Block this URL via Spamblock plugin');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_AUTHOR', 'Unblock this author via Spamblock plugin');
@define('PLUGIN_EVENT_SPAMBLOCK_REMOVE_URL', 'Unblock this URL via Spamblock plugin');


@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TITLE', 'Entry title equals comment');
@define('PLUGIN_EVENT_SPAMBLOCK_FILTER_TITLE', 'Reject comments which only contain the entry title');

@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL', 'بررسی آدرس دنبالک ها');
@define('PLUGIN_EVENT_SPAMBLOCK_TRACKBACKURL_DESC', 'فقط دنبالک هایی را قبول کن که در آدرس آنها، لینک وبلاگ باشد');
@define('PLUGIN_EVENT_SPAMBLOCK_REASON_TRACKBACKURL', 'اشکال در درس دنبالک.');

@define('PLUGIN_EVENT_SPAMBLOCK_CAPTCHAS_SCRAMBLE', 'تصاویر مخدوش');

@define('PLUGIN_EVENT_SPAMBLOCK_HIDE', 'غیر فعال کردن ضد اسپم برای نویسندگان');
@define('PLUGIN_EVENT_SPAMBLOCK_HIDE_DESC', 'شما می توانید به نویسندگان اجازه دهید که بدون برنامه ضد اسپم، نظر ارسال کنند.');

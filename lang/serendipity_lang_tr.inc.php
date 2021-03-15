<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
#Translated to Turkish 2006-03-03 Ahmet USAL - ahmetusal@gmail.com - /*http://www.edirnekizilay.org*/

/* jedit: php,indent,utf-8, unix : */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'tr_TR.UTF-8, tr.UTF-8, turkish.UTF-8, turkish, tr, tr_TR');
@define('DATE_FORMAT_ENTRY', '%A, %B %e. %Y');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', ',');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Türü');
@define('PREVIEW', 'Önizleme');
@define('DATE', 'Tarih');
@define('TIME', 'Time');
@define('APPEARANCE', 'Görünüm');
@define('LOGIN', 'Bağlan');
@define('LOGOUT', 'Çıkış');
@define('LOGGEDOUT', 'Bağlantınız kapandı.');
@define('CREATE', 'Oluştur');
@define('BACK', 'Geri');
@define('FORWARD', 'İleri');
@define('ANONYMOUS', 'Anonim');
@define('RECENT', 'En Son gelen...');
@define('OLDER', 'Eskiler...');
@define('DONE', 'Yapıldı');
@define('TITLE', 'Başlık');
@define('DESCRIPTION', 'Açıklama');
@define('PLACEMENT', 'Yerleştir');
@define('DELETE', 'Sil');
@define('SAVE', 'Kaydet');
@define('UP', 'Yukarı');
@define('DOWN', 'Aşağı');
@define('PREVIOUS', 'Önceki');
@define('NEXT', 'Sonraki');
@define('ENTRIES', 'Kayıtlar');
@define('CATEGORIES', 'Konu başlıkları');
@define('NAME', 'Ad');
@define('EMAIL', 'E-Posta');
@define('HOMEPAGE', 'Anasayfa');
@define('COMMENT', 'Görüşler');
@define('VIEW', 'View');
@define('HIDE', 'Gizle');
@define('WEEK', 'Hafta');
@define('WEEKS', 'Haftalar');
@define('MONTHS', 'Aylar');
@define('DAYS', 'Günler');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Başarıldı');
@define('COMMENTS', 'Görüşler');
@define('ADD_COMMENT', 'Görüş ekle');
@define('NO_COMMENTS', 'Görüş yok');
@define('POSTED_BY', 'Gönderen');
@define('ON', 'tarihinde');
@define('NO_CATEGORY', 'Konu başlığı yok');
@define('CATEGORY', 'Konu başlığı');
@define('EDIT', 'Düzenle');
@define('GO', 'Git!');
@define('YES', 'Evet');
@define('NO', 'Hayır');
@define('NOT_REALLY', 'Hayır');
@define('DUMP_IT', 'Evet');
@define('IN', 'konu başlığı:');
@define('AT', 'saat:');
@define('LEFT', 'sol');
@define('RIGHT', 'sağ');
@define('CENTER', 'center');
@define('ARCHIVES', 'Arşiv');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Hızlı Arama');
@define('TRACKBACKS', 'Bırakılan izler');
@define('TRACKBACK', 'İz bırakma');
@define('NO_TRACKBACKS', 'Bırakılan iz yok');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Pasaj');
@define('TRACKED', 'Takip et');
@define('USER', 'Kullanıcı');
@define('USERNAME', 'Kullanıcı adı');
@define('PASSWORD', 'Şifre');
@define('HIDDEN', 'gizli');
@define('IMAGE', 'Resim');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Yazar');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'sürüm');
@define('INSTALL', 'Kurulum');
@define('REPLY', 'Yanıtla');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Hata');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Birlik');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Yönetim');
@define('ADMIN_FRONTPAGE', 'Anasayfa');
@define('QUOTE', 'Quote');
@define('NONE', 'yok');
@define('GROUP', 'Kullanıcı Grubu');
@define('AUTHORS', 'Yazarlar');
@define('UPGRADE', 'Güncelle');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Tüm yazarlar');
@define('PREVIOUS_PAGE', 'önceki sayfa');
@define('NEXT_PAGE', 'sonraki sayfa');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Tüm konu başlıkları');
@define('LAST_UPDATED', 'Son güncelleme');
@define('IP_ADDRESS', 'IP-adresi');
@define('CHARSET', 'Karakterseti');
@define('REFERER', 'Ziyaretçi Gönderen');
@define('APPROVE', 'Onaylama');
@define('NOT_FOUND', 'Bulunamadı');
@define('WRITABLE', 'Yazılabilir');
@define('NOT_WRITABLE', 'Yazılabilir değil');
@define('WELCOME_BACK', 'Tekrar Hoşgeldiniz,');
@define('USE_DEFAULT', 'Öntanımlı');
@define('SORT_BY', 'Sırala');
@define('SORT_ORDER', 'Sırala');
@define('SORT_ORDER_ASC', 'Artan');
@define('SORT_ORDER_DESC', 'Azalan');
@define('FILTERS', 'Filtreler');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Tümünü Aç - Kapa');
@define('TOGGLE_OPTION', 'Açma Kapama Seçeneği');
@define('IN_REPLY_TO', 'karşılığı');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Dizin');
@define('BACK_TO_BLOG', 'Siteye Dön');
@define('HTML_NUGGET', 'HTML işaretleme dili için ayrılan bölüm');
@define('TITLE_FOR_NUGGET', 'Eklenen HTML Bölümü için başlık');
@define('COMMENT_ADDED', 'Görüşünüz başarıyla eklendi. ');
@define('ENTRIES_FOR', 'Yazılar %s');
@define('NO_ENTRIES_TO_PRINT', 'Yazdırılan yazı yok');
@define('COMMENT_DELETE_CONFIRM', 'Bu yorumu silmek istiyor musunuz: #%d, yorum sahibi: %s?');
@define('DELETE_SURE', 'Kalıcı olarak silmek istediğinizden eminmisiniz: #%s ?');
@define('MEDIA_FULLSIZE', 'Tamboyut');
@define('SIDEBAR_PLUGIN', 'Yanblok eklentileri');
@define('EVENT_PLUGIN', 'Olay Eklentileri');
@define('PLUGIN_ITEM_DISPLAY', 'Yazıların ne kadarı gösterilecek?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Sadece genişletilmiş yazı');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Sadece önizleme sayfası');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Tümü');
@define('DIRECTORY_WRITE_ERROR', 'Dizine yazılamıyory %s. Lütfen izinleri kontrol edin.');
@define('FILE_WRITE_ERROR', 'Dosyaya yazılamıyor %s.');
@define('INCLUDE_ERROR', 'serendipity hata: dosya eklenemedi %s - bu dosya.');
@define('DO_MARKUP', 'Etiketleme dili dönüşümü gerçekleştir');
@define('GENERAL_PLUGIN_DATEFORMAT', 'tarih biçimleme');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Yazının biçimi\'s gerçek tarihi için,  PHPs strftime() değişkenlerini kullan. (Öntanımlı: "%s")');
@define('APPLY_MARKUP_TO', 'Etiket uygula %s');
@define('XML_IMAGE_TO_DISPLAY', 'XML Butonu');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'XML Abonelik Beslemesi için bu resim kulanılacak. Öntanımlı resmi kullanmak için boş bırakın, kapatmak için \'none\' seçeneğini girin.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Dosya siliniyor %s...');
@define('SETTINGS_SAVED_AT', 'Yeni ayarlarınız kaydedildi %s');
@define('INVERT_SELECTIONS', 'Seçimleri tersine çevir');

@define('PERSONAL_SETTINGS', 'Kişisel Ayarlar');
@define('DO_MARKUP_DESCRIPTION', ' Markup dönüşümünü yazılara uygula  (smilie işaretleri, kısayol işaretleri öreneğin *, /, _, ...). Bu kapalı olursa her türlü HTML-kodunu yazıda kullanabilirsiniz.');
@define('BASE_DIRECTORY', 'Temel Dizin');
@define('PERM_READ', 'Okuma izni');
@define('PERM_WRITE', 'Yazma İzni');
@define('PERM_DENIED', 'Erişim engellendi.');
@define('CURRENT_AUTHOR', 'Current author');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Serendipity Kurulumu');
@define('WELCOME_TO_INSTALLATION', 'Welcome to the Serendipity Installation');
@define('FIRST_WE_TAKE_A_LOOK', 'First we will take a look at your current setup and attempt to diagnose any compatibility problems');
@define('ERRORS_ARE_DISPLAYED_IN', 'Errors are displayed in %s, recommendations in %s and success in %s');
@define('RED', 'kırmızı');
@define('YELLOW', 'sarı');
@define('GREEN', 'yeşil');
@define('PRE_INSTALLATION_REPORT', 'Serendipity v%s pre-installation report');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'PHP installation');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Operating system');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini configuration');
@define('RECOMMENDED', 'Önerilir');
@define('ACTUAL', 'Etkin');
@define('PERMISSIONS', 'izinler');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Permissions can be set by running shell command: `<em>%s</em>` on the failed directory, or by setting this using an FTP program');
@define('PROBLEM_DIAGNOSTIC', 'Due to a problematic diagnostic, you cannot continue with the installation until the above errors are fixed');
@define('SELECT_INSTALLATION_TYPE', 'Select which installation type you wish to use');
@define('RECHECK_INSTALLATION', 'Kurulumu yeniden kontrol et');
@define('SIMPLE_INSTALLATION', 'Simple installation');
@define('EXPERT_INSTALLATION', 'Expert installation');
@define('COMPLETE_INSTALLATION', 'Complete installation');
@define('WONT_INSTALL_DB_AGAIN', 'will not install the database again');
@define('THEY_DO', 'Yaptı');
@define('THEY_DONT', 'Yapamadı');
@define('CHECK_DATABASE_EXISTS', 'Checking to see if the database and tables already exists');
@define('CREATE_DATABASE', 'Öntanımlı veritabanının kurulumu yapılıyor...');
@define('ATTEMPT_WRITE_FILE', 'Bu dosyaya yazarken dikkat edin %s ...');
@define('CREATING_PRIMARY_AUTHOR', 'Creating primary author \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Setting default template');
@define('INSTALLING_DEFAULT_PLUGINS', 'Installing default plugins');
@define('SERENDIPITY_INSTALLED', 'Serendipity has been successfully installed');
@define('VISIT_BLOG_HERE', 'Visit your new blog here');
@define('THANK_YOU_FOR_CHOOSING', 'Thank you for choosing Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'An error was detected in the installation');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Gerçekleştiren');
@define('ADMIN_FOOTER_POWERED_BY', 'Serendipity yazılımı %s ve PHP %s altyapısı kullanıldı.');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Standart Yazar');
@define('USERLEVEL_CHIEF_DESC', 'Yönetici Yazar');
@define('USERLEVEL_ADMIN_DESC', 'Yönetici');
@define('WWW_USER', 'Change www to the user apache runs as (e.g. nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'Dizin %s mevcut değil ve oluşturulamıyor. Lütfen kendiniz oluşturun');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; çalıştır <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Bu binari dosyası çalıştırılamıyor %s ');
@define('FILE_CREATE_YOURSELF', 'Lütfen dosyayı kendiniz oluşturup izinleri kontrol edin');
@define('COPY_CODE_BELOW', '<br />* Sadece bu kodu kopyalayıp %s dizinindeki %s dosyaya yerleştirin:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Öncelikle şu işlemi yapın, Tarayıcınızın\'s "yenile" düğmesine tıklayın.');
@define('ERROR_TEMPLATE_FILE', 'Şablon dosyası açılamıyor, Lütfen yazılımınızı güncelleyin!');
@define('HTACCESS_ERROR', 'Yerel websunucusu kurulumunu kontrol edin, serendipity  ".htaccess" dosyasına yazma yetkisine ihtiyaç duyar. Şu anda yazma yetkilerinin yetersizliği nedediyle  bu dosya üstüne yazılamıyor. Lütfen örnekteki gibi izinleri düzenleyin: <br />&nbsp;&nbsp;%s<br />ve sayfayı yeniden yükleyin.');
@define('EMPTY_SETTING', 'Bunun için doğru bir değer belirlemediniz: "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity başka bir Serendipity sürümünün kurulu olduğunu belirledi %s. Yazılımı güncellemeniz yeterli görünüyor %s, <a href="%s">Buraya</a> tıklayarak günceleyebilirsiniz.');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Merhaba, ve Hoşgeldiniz, burası Serendipity Güncelleme Noktası.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Serendipity Kurulumunuzu güncellemek %s için buradayız.');
@define('SERENDIPITY_UPGRADER_WHY', 'Bu iletiyi görüyorsunuz çünkü Serendipity kurulumu yapmışsınız %s, Ama veritabanı sürümünüz yazılımı güncellemeniz için yeterli değil');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Veritabanı güncelleniyor (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Bu .sql dosyalarını bulduk. Serendipity Güncellemesi için');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Sürüme özel görevler');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Sürüme özel görev bulunamadı');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Bu görevleri gerçekleştirmek istiyormusunuz?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Hayır, sonra kendim çalıştıracağım');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Evet, lütfen benim için yap');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Herhangi bir güncellemeye ihtiyacınız yok gibi görünüyor');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', ' Serendipity güncellemesi hesaplandığı gibi başarıldı');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Serendipity güncellemesini gözardı edebilirsiniz, sadece veritabanınızın doğru kurulduğundan emin olun, ve işlevleri otomatik çalışacak şekilde ayarlayın');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', ' Serendipity kurulumunuz şimdi şu sürüme gncellenecek %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Siteye dönmek için %sburaya%s tıklayın');
@define('ADMIN_ENTRIES', 'Yazılar');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', ' MySQL Veritabanına bağlanılamadı: %s.');
@define('COULDNT_SELECT_DB', 'Veritabanı seçilemedi: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Kullanıcı bilgisi seçilemedi: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Konu başlığı bilgisi seçilemedi: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Yazı bilgisi seçilemedi: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Görüş bilgileri seçilemedi: %s.');
@define('MYSQL_REQUIRED', 'Bu eylemi gerçekleştirebilmeniz için MySQL eklentisine sahip olmalısınız.');
@define('CREATE_AUTHOR', 'Yazar ekle \'%s\'.');
@define('CREATE_CATEGORY', 'Konu başlığı ekle \'%s\'.');
@define('MT_DATA_FILE', 'Movable Type veri dosyası');
@define('INSTALL_DBPORT', 'Veritabanı portu');
@define('INSTALL_DBPORT_DESC', 'Bu port veritabanı sunucunuza bağlanmak iin kullanılacak');
@define('IMPORT_PLEASE_ENTER', 'Lütfen talep ettiğiniz veri türünü girin');
@define('IMPORT_NOW', 'Şimdi içeri al!');
@define('IMPORT_STARTING', 'İthal etme işlemi başlıyor...');
@define('IMPORT_FAILED', 'İthal edilemedi');
@define('IMPORT_DONE', 'İçeri alma işlemi tamamlandı');
@define('IMPORT_WEBLOG_APP', 'Weblog uygulaması');
@define('IMPORT_NOTES', 'Not:');
@define('IMPORT_STATUS', 'İthalattan sonraki durum');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Tüm ithal edilen metni "gövde" bölümüne ekle ve  "genişletilmiş yazı" bölümüne parçalama.');
@define('IMPORT_GENERIC_RSS', 'Genel RSS ithali');
@define('ACTIVATE_AUTODISCOVERY', 'Bu yazıda mevcut linklere iz bırak');
@define('RSS_IMPORT_CATEGORY', 'Dışarıdan ithal edilen yazılar için bu RSS kategorisini kullan');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'Belge %s bulunamadı.');
@define('CONVERT_HTMLENTITIES', 'HTML işaretleri kendiliğinden dönüştürülsün mü?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Serendipity Site Yönetimi');
@define('WRONG_USERNAME_OR_PASSWORD', 'Hatalı kullanıcı adı veya şifre girdiniz.');
@define('PLEASE_ENTER_CREDENTIALS', 'Yönetim için arabirime buradan girebilirsiniz.');
@define('AUTOMATIC_LOGIN', 'Bilgiyi kaydet');
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
@define('MEDIA', 'Medya');
@define('MEDIA_LIBRARY', 'Medya Kütüphanesi');
@define('ADD_MEDIA', 'Medya Ekle');
@define('MANAGE_DIRECTORIES', 'Dizinleri Yönet');
@define('CONFIGURATION', 'Yapılandırma');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Further Links');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity Homepage');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity Documentation');
@define('FURTHER_LINKS_S9Y_BLOG', 'Official Blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Forums');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Bu yazı henüz yayınlanmadı.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Site Yan Blok Eklentileri');
@define('EVENT_PLUGINS', 'Olaylar Eklentileri');
@define('CONFIGURE_PLUGINS', 'Eklentileri yönet');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Gerekli unsurlar eksik: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Sürümü güncelle %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Yeni eklenti kurmak için tıklayın %s');
@define('ALREADY_INSTALLED', 'Zaten kurulu');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Yazıları düzenle');
@define('EDIT_ENTRY', 'Yazı düzenle');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Taslak');
@define('PUBLISH', 'Yayınlama');
@define('CONTENT', 'İçerik');
@define('ENTRIES_PER_PAGE', 'sayfa başına yazı sayısı');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Yapışkan iletiler');
@define('PAGE_BROWSE_ENTRIES', 'Sayfa %s içinde %s, toplamda %s yazı');
@define('FIND_ENTRIES', 'Yazıları Bul');
@define('RIP_ENTRY', 'Yazı #%s silindi.');
@define('NEW_ENTRY', 'Yeni yazı');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Yazının gövdesi');
@define('EXTENDED_BODY', 'Daha fazla yazı');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Bu yazı taslak olarak kaydedildi');
@define('IFRAME_PREVIEW', 'Şu anda yazınızın önizlemesi oluşturuluyor...');
@define('IFRAME_WARNING', 'Tarayıcınız iframe etiketini desteklemiyor.Lütfen serendipity_config.inc.php dosyanızı açın ve  $serendipity[\'use_iframe\'] değişkenini  FALSE olarak değiştirin.');
@define('DATE_INVALID', 'Dikkat: Girdiğiniz tarih hatalı. Tarih YYYY-MM-DD HH:MM formatında olmalı.');
@define('ADVANCED_OPTIONS', 'Gelişmiş Seçenekler');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Bu bağlantıya tıklanamaz. Bu yazı için bırakılan URI adresi izidir. Bu URI adresini  bu yazı için haber verme-izbırakma amaçlı kullanabilirsiniz. Linki kopyala, ve tarayıcı adres çubuğuna yapıştır.Gittiğin adres senin yazın hakkında yazılan bir yazı ya da yazına verilen bağlantı olacaktır.');
@define('RESET_DATE', 'Tarihi sıfırla');
@define('RESET_DATE_DESC', 'Tarihi bugünkü tarihi kullanmak üzere sıfırla');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Kullanıcı Yönetimi');
@define('CREATE_NEW_USER', 'Yeni kullanıcı ekle');
@define('CREATE_NOT_AUTHORIZED', 'Aynı seviyedeki kullanıcıyı düzenleyemezsiniz');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Daha yüksek yetkide kullanıcı oluşturamazsınız');
@define('CREATED_USER', 'Yeni kullanıcı: %s eklendi');
@define('MODIFIED_USER', ' %s kullanıcısının özellikleri');
@define('USER_LEVEL', 'Yetki Seviyesi');
@define('WARNING_NO_GROUPS_SELECTED', 'Dikkat: Herhangi bir kullanıcı grubuna bağlantı yapmadınız. Bu sizi, kullanıcı grubu yönetimi dışına atar, ve kullanıcı grubu üyeliğiniz asla değiştirilemez duruma düşer.');
@define('DELETE_USER', ' #%d %s kullanıcısını silmek üzeresiniz. Bu işlem sonucu sözkonusu kullanıcının yazıları yayından kalkacak.');
@define('DELETED_USER', ' #%d %s adlı kullanıcı silindi.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Grupları Yönet');
@define('DELETED_GROUP', 'Grup #%d %s silindi.');
@define('CREATED_GROUP', 'Yeni bir grup: %s oluşturuldu');
@define('MODIFIED_GROUP', 'Şu kullanıcı grubunun özellikleri değiştirildi: %s ');
@define('CREATE_NEW_GROUP', 'Yeni Grup oluştur');
@define('DELETE_GROUP', 'Silmek istediğiniz kullanıcı grubu: #%d %s. Silinsin mi?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Yorumları/Görüşleri bul');
@define('COMMENTS_FILTER_SHOW', 'Göster');
@define('COMMENTS_FILTER_ALL', 'Tümünü');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Sadece onaylılar');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Onay bekleyenler');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Bu yorumu silmek istiyor musunuz?');
@define('PAGE_BROWSE_COMMENTS', 'Bu sayfada %s toplam %s, şukadar %s yorum mevcut');
@define('COMMENT_IS_DELETED', '(Comment removed)');
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
@define('SUBSCRIPTION_CATEGORY', 'Author subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Konu başlığı kaydedildi');
@define('CATEGORY_ALREADY_EXIST', 'Bu isimde bir konu başlığı "%s" zaten var');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Konu başlığı #%s silindi. Eski yazılar #%s konu başlığına taşındı.');
@define('CATEGORY_DELETED', ' #%s Konu başlığı silindi.');
@define('INVALID_CATEGORY', 'Silmek için hiç bir konu başlığı seçilmedi');
@define('EDIT_THIS_CAT', 'Düzenleme "%s"');
@define('CATEGORY_REMAINING', 'Bu konu başlığını silip diğer konu başlığına yazıyı taşıma işlemi');
@define('PARENT_CATEGORY', 'Alt konu başlığı');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Yeni konu başlığı oluştur');
@define('ALREADY_SUBCATEGORY', '%s böyle bir alt konu başlığı var %s.');
@define('NO_CATEGORIES', 'Konu başlığı yok');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Veri ithal et');
@define('EXPORT_ENTRIES', 'Yazıları dışarıya aktar');
@define('EXPORT_FEED', 'Tüm RSS beslemelerini dışa aktar');
@define('CREATE_THUMBS', 'Küçükresimleri yeniden oluştur');
@define('WARNING_THIS_BLAHBLAH', "DİKKAT:\\nBu işlem resim sayısı çoksa uzun zaman alacaktır.");
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
@define('TEMPLATE_SET', '\'%s\' has been set as your active template');
@define('WARNING_TEMPLATE_DEPRECATED', 'Warning: Your current template is using a deprecated template method, you are advised to update if possible');
@define('STYLE_OPTIONS_NONE', 'This theme/style has no specific options. To see how your template can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Theme/Style options');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Özelleştirilebilir Yönetim Arabirimi mümkün');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Şablon olarak seç');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Denetle &amp; kaydet');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Etiketlenmiş eklentiyi kaldır');
@define('SAVE_CHANGES_TO_LAYOUT', 'Görünümdeki değişiklikleri kaydet');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Veritabanı ile resimler dizini eşleniyor');
@define('SYNC_DONE', 'Tamamlandı (Eşlendi %s resimler).');
@define('RESIZE_BLAHBLAH', '<b>Yeniden boyutlandır %s</b>');
@define('ORIGINAL_SIZE', 'Özgün boyut: <i>%sx%s</i> pixel');
@define('RESIZING', 'Yeniden hizalama');
@define('RESIZE_DONE', 'Tamamlandı (resim %s hizalandı).');
@define('KEEP_PROPORTIONS', 'Orantıları koru');
@define('REALLY_SCALE_IMAGE', 'Resmi ölçeklemeyi istiyormusunuz? Bu işlem geri alınamaz!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Burada resmi yeniden boyutlandırabilirsiniz. Eğer resim özelliklerini değiştirmek istiyorsanız,İki kutudan birine bir değer girin ve TAB tuşuna basın --  Otomatik olarak resminiz yeniden boyutlandırılacaktır</p>');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Yeni boyut: ');
@define('SCALING_IMAGE', 'Ölçekle %s ölçüsünden %s x %s px ölçüsüne ');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Dizin <strong>%s</strong> oluşturuldu.');
@define('PARENT_DIRECTORY', 'Alt dizin');
@define('CONFIRM_DELETE_DIRECTORY', 'Dizini tüm içeriğiyle kaldırmak istediğinizden emin misiniz %s?');
@define('ERROR_NO_DIRECTORY', 'Hata: Dizin %s mevcut değil');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Dolu olan dizin kaldırılamıyor.  "force deletion" işaretleme kutusunu kontrol edin, Eğer bu dosyaları kaldırmak ve yeniden yüklemek istiyorsanz. Mevcut dosyalar:');
@define('DIRECTORY_DELETE_FAILED', 'Dizin silme işlemi %s başarılamadı. İzinleri ve iletileri kontrol edin.');
@define('DIRECTORY_DELETE_SUCCESS', 'Dizin %s başarıyla silindi.');
@define('CHECKING_DIRECTORY', 'Dizindeki dosyaları kontrol edin %s');
@define('DELETE_DIRECTORY', 'Dizini sil');
@define('DELETE_DIRECTORY_DESC', 'Olasılıkla bazı yazılarınızda kullanmış olabileceğiniz medya dosyalarının da bulunduğu bir dizini silmek istiyorsunuz.Emin misiniz?');
@define('FORCE_DELETE', 'Bu dizindeki tüm dosyaları sil, Serendipity tarafından bilinmeyenler de dahil olmak üzere');
@define('CREATE_DIRECTORY', 'Dizin oluştur');
@define('CREATE_NEW_DIRECTORY', 'Yeni dizin oluştur');
@define('CREATE_DIRECTORY_DESC', 'Burada medya dosyalarınızı yerleştirebileceğiniz yeni bir dizin oluşturabilirsiniz. Yeni dizininiz için bir ad belirleyin ya da seçimlik olarak bir alt dizin adı da belirleyebilirsiniz.');
@define('ABOUT_TO_DELETE_FILE', 'Şu dosyayı silmekten bahsediyorsunuz <b>%s</b><br />Eğer bu dosyayı bazı yazılarınızda kullandıysanız, bu yazılarda bu dosyayla ilgili linkler ve resimler çalışmayacaktır.<br />İşlem devam etsin mi?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Hata: Dosya bilgisayarınızda zaten mevcut!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Başlıklı dosyaya erişilemedi <b>%s</b>, silinmiş olabilir');
@define('ERROR_FILE_FORBIDDEN', 'Etkin içerik için dosya yükleme izni vermediniz');
@define('REMOTE_FILE_NOT_FOUND', 'Dosya uzaktaki sunucuda bulunamadı, URL adresinin doğruluğuna eminmisiniz: <b>%s</b> bu adres mi?');
@define('FILE_FETCHED', '%s dosya alındı %s');
@define('FILE_UPLOADED', 'Dosya %s başarıyla %s klasörüne yüklendi');
@define('DELETE_FILE_FAIL', 'Dosya silinemiyor: <b>%s</b>');
@define('DELETE_FILE', 'Şu başlıklı dosya silindi: <b>%s</b>');
@define('FOUND_FILE', 'Yeni/düzenlenmiş dosya bulundu: %s.');
@define('FILENAME_REASSIGNED', 'Automagically assigned new file name: %s');
@define('ERROR_FILE_EXISTS', 'Hata: Yeni dosya adı zaten kullanımda, başka bir ad seçin!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'Sıcak Medya Bağlantıları');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Bunun için yeni ad girin: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Resim ekleme...');
@define('THUMB_CREATED_DONE', 'Küçükresim oluşturma işlemi.<br/>Tamamlandı.');
@define('THUMBNAIL_USING_OWN', 'Resimlerin orjinal hali kullanılmaktadır %s Orjinallerin boyutları yeterince küçük olması nedeniyle.');
@define('THUMBNAIL_FAILED_COPY', 'Kullanmak amacıyla %s resimler incelendi, ancak kopyalama yapılamadı!');
@define('DELETE_THUMBNAIL', 'Şu başlıklı küçükresim silindi: <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Bilinmeyen hata oluştu, dosya yüklenemedi.Dosyanız sunucunuzda izin verilen boyuttan daha büyük olabilir.Servis sağlayıcınızdan araştırın ya da php.ini dosyanızı daha büyük boyutta dosya yüklenmesine izin verecek şekilde ayarlayın.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: You cannot upload files larger than %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: You cannot upload image files larger than %s x %s pixels!');
@define('HOTLINK_DONE', 'Dosya ilişkilendirmesi.<br />Tamamlandı.');
@define('DELETE_HOTLINK_FILE', ' <b>%s</b> başlıklı dosyanın sıcak linklerini sil');
@define('IMAGICK_EXEC_ERROR', 'Çalıştırılamıyor: "%s", hata: %s, değişkene dön : %d');
@define('SKIPPING_FILE_EXTENSION', 'Atlanan dosya: Eklenti kayıp %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Atlanan dosya: %s okunabilir değil.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Yazımda küçükresim kullanmak istiyorum.');
@define('I_WANT_BIG_IMAGE', 'Yazımda büyük resim kullanmak istiyorum.');
@define('I_WANT_NO_LINK', 'Bir resime bağlantı olarak göstermek istiyorum');
@define('I_WANT_IT_TO_LINK', 'Bu url adresine bağlantı olarak göstermek istiyorum:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Resim boyutu');
@define('IMAGE_ALIGNMENT', 'Resim hizalama');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Resim ekleme');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', 'Isolated Entry');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', 'Seçiminiz %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Resmi akrep yönünde 90 derece döndür');
@define('IMAGE_ROTATE_RIGHT', 'Resmi saat yönünde 90 derece döndür');
@define('MEDIA_RENAME', 'Dosyayı yeniden adlandır');
@define('THUMBNAIL_SHORT', 'Küçükresim');
@define('ORIGINAL_SHORT', 'köken.');
@define('SORT_ORDER_NAME', 'Dosya Adı');
@define('SORT_ORDER_EXTENSION', 'Dosya Eklentisi');
@define('SORT_ORDER_SIZE', 'Dosya Boyutu');
@define('SORT_ORDER_WIDTH', 'Resim genişlik');
@define('SORT_ORDER_HEIGHT', 'Resim yükseklik');
@define('SORT_ORDER_DATE', 'Yükleme tarihi');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Medya deponuza bir dosya ekleyin:</b><p>Burada medya dosyalarınızı yükleyebilir, ya da webde herhangibir konumdan aktarabilirsiniz! İhtiyacınıza uygun resimlere sahip değilseniz, <a href="https://images.google.com/" target="_blank">Google</a>da resim arayabilirsiniz, genelde sonuçlar eğlenceli ve kullanılabilirdir. :) Ama iyice emin olmalısınız, çoğu resim kopya korumalıdır,kullanmak için izin istemelisiniz.</p><p><b>Yöntem seçin:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Dosya getirme işlemi için bir URL adresi gir:');
@define('ENTER_MEDIA_UPLOAD', 'Yüklemek istediğiniz dosyayı seçin:');
@define('SAVE_FILE_AS', 'Bu dosyayı farklı kaydet:');
@define('STORE_IN_DIRECTORY', 'Şu dizinin içine kaydedildi: ');
@define('IMAGE_MORE_INPUT', 'Daha fazla resim ekle');
@define('ENTER_MEDIA_URL_METHOD', 'Alma yöntemi:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Not: Sunucuya sıcak bağlantı vermeyi seçerseniz, tüm izinlere sahip olduğunuza emin olun.Sıcak linkler size site dışından resim saklama imkanı verir.');
@define('FETCH_METHOD_IMAGE', 'Sunucudan resmi indir');
@define('FETCH_METHOD_HOTLINK', 'Sunucudaki sıcak linkler');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Resmi yeniden boyutlandır');
@define('MEDIA_DELETE', 'Dosyayı sil');
@define('FILES_PER_PAGE', 'Sayfa başına dosya sayısı');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Hiç bir resim bulunamadı');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'tüm dizinler');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Yapılandırma yazıldı &amp; kaydedildi');
@define('DIAGNOSTIC_ERROR', 'Girdiğiniz bilgilerde bazı hatalar tespit ettik:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Veritabanı Ayarları');
@define('INSTALL_CAT_DB_DESC', 'Buraya veritabanı ile ilgili tüm bilgileri girebilirsin. Serendipity yazılımının çalışması için bu bilgilere ihtiyaç var');
@define('INSTALL_DBTYPE', 'Veritabanı türü');
@define('INSTALL_DBTYPE_DESC', 'Veritabanı tür açıklaması');
@define('INSTALL_DBHOST', 'Veritabanı Sunucusu');
@define('INSTALL_DBHOST_DESC', 'Veritabanı sunucusu için sunucu adı');
@define('INSTALL_DBUSER', 'Veritabanı kullanıcısı');
@define('INSTALL_DBUSER_DESC', 'Veritabanına bağlanmak için bu kullanıcı adı kullanılacak');
@define('INSTALL_DBPASS', 'Veritabanı şifresi');
@define('INSTALL_DBPASS_DESC', 'Bu şifre kullanıcı adınızla beraber kullanılacak');
@define('INSTALL_DBNAME', 'Veritabanı adı');
@define('INSTALL_DBNAME_DESC', 'Veritabanınızın adı');
@define('INSTALL_DBPREFIX', 'Veritabanı tablo öneki');
@define('INSTALL_DBPREFIX_DESC', 'Veritabanınız için tablo öneki, e.g. serendipity_');
@define('INSTALL_DBPERSISTENT', 'Kalıcı bağlantı kullan');
@define('INSTALL_DBPERSISTENT_DESC', 'Kalıcı veritabanı bağlantısı kullanımını açar, daha fazla bilgi için <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">buraya</a> başvurun. Normalde önerilmeyen bir seçenektir');
@define('INSTAL_DB_UTF8', 'Enable DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Yollar');
@define('INSTALL_CAT_PATHS_DESC', 'Herdizin ve dosya için ayrı yol belirleyebilirsiniz. Dizinler için kesme işareti eklemeyi unutmayın!');
@define('INSTALL_FULLPATH', 'Tam Dosya Yolu');
@define('INSTALL_FULLPATH_DESC', 'Serendipity kurulumuzun tam ve kesin konumu');
@define('INSTALL_UPLOADPATH', 'Yükleme konumu');
@define('INSTALL_UPLOADPATH_DESC', 'Tüm yüklemeleriniz için bu dizin seçili, göreli yol belirlemek için \'Tam Konum\' - tipik olarak kullanılan \'uploads/\'');
@define('INSTALL_RELPATH', 'Göreceli konum');
@define('INSTALL_RELPATH_DESC', 'Tarayıcınız içi Serendipity yazılımının bulunduğu konum , genelde şurada bulunur \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Göreceli şablon konumu');
@define('INSTALL_RELTEMPLPATH_DESC', 'Şablonlarınız için dizin konumu belirleyin - Göreceli olarak \'göreceli konum\'');
@define('INSTALL_RELUPLOADPATH', 'Göreceli yükleme konumu');
@define('INSTALL_RELUPLOADPATH_DESC', 'Tarayıcılar için yükleme konumunuz - Göreceli olarak \'göreceli konum\'');
@define('INSTALL_URL', 'Site URL Adresi ');
@define('INSTALL_URL_DESC', 'Serendipity kurulumunuz için Temel URL adresi ');
@define('INSTALL_AUTODETECT_URL', 'HTTP-Host Servisini otomatik belirle');
@define('INSTALL_AUTODETECT_URL_DESC', 'Eğer "true" olarak seçilirse, Serendipity ziyaretçilerin HTTP Host adresini sizin BaseURL ayarlarınıza göre kesin olarak belirleyebilecek.Bu seçenek açık olursa çoklu domain kullanma imkanına da sahip olursunuz, ve tüm izleyen bağlantılarda hangi kullanıcı hangi site bölümünüze erişmek istiyorsa erişebilir.');
@define('INSTALL_INDEXFILE', 'Index dosyası');
@define('INSTALL_INDEXFILE_DESC', 'Serendipity index dosyasının adı');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Kalıcı Bağlantılar');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Sitenizdeki yazılara kalıcı bağlantı verilebilmesi için URL adresi modeli tanımlama seçeneği.Öntanımlı olarak kullanmanız önerilir; kullanmazsanız, şunu denemelisiniz %id% değeri nerede mümkünse Serendipity veritabanına oradan sorgu yapmalı; hedef URL adresini belirlemek için.');
@define('INSTALL_PERMALINK', 'Yazılar için kalıcı bağlantı URL adresi yapısı');
@define('INSTALL_PERMALINK_DESC', 'Burada göreli URL adresi yapısı tanımlayabilirsiniz temel URL adresinizden başlayarak yazılar nereden  yönlenip sıralanacak,belirleyebilirsiniz. Şu değişkenleri kullanabilirsiniz %id%, %title%, %day%, %month%, %year% ve başka çeşitli karakterleri.');
@define('INSTALL_PERMALINK_AUTHOR', 'Yazarlara göre  kalıcı bağlantı için URL Adresi yapısı ');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Burada göreli URL adresi yapısı tanımlayabilirsiniz temel URL adresinizden başlayarak yazılar yazarına göre  nasıl yönlenip sıralanacak,belirleyebilirsiniz. Şu değişkenleri kullanabilirsiniz %id%, %realname%, %username%, %email% ve başka çeşitli karakterleri.');
@define('INSTALL_PERMALINK_CATEGORY', 'Konu Başlığına göre Kalıcı Bağlantı URL Adresi yapısı');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Burada göreli URL adresi yapısı tanımlayabilirsiniz temel URL adresinizden başlayarak yazılar konu başlıklarına göre  nasıl yönlenip sıralanacak,belirleyebilirsiniz. Şu değişkenleri kullanabilirsiniz %id%, %name%, %parentname%, %description% ve başka çeşitli karakterleri.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Konu Başlığına göre RSS-Beslemeleri için Kalıcı Bağlantı URL adres yapısı');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Burada göreli URL adresi yapısı tanımlayabilirsiniz temel URL adresinizden başlayarak yazıların RSS Beslemelerinin kalıcı bağlantıları konu başlıklarına göre  nasıl yönlenip sıralanacak,belirleyebilirsiniz. Şu değişkenleri kullanabilirsiniz  %id%, %name%, %description% ve başka çeşitli karakterleri.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', ' RSS-Beslemelerin Yazarlarına göre  Kalıcı Bağlantı URL adres yapısı');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Burada göreli URL adresi yapısı tanımlayabilirsiniz temel URL adresinizden başlayarak yazıların RSS Beslemelerinin kalıcı bağlantıları yazarlarına göre  nasıl yönlenip sıralanacak,belirleyebilirsiniz. Şu değişkenleri kullanabilirsiniz %id%, %realname%, %username%, %email% ve başka çeşitli karakterleri.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Arşivlerin konumu');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Arşiv Konumu');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Konu Başlıklarının Konumu');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Yazarların konumu');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Abone olunmamış yorumların konumu');
@define('INSTALL_PERMALINK_DELETEPATH', 'Silinen yorumların konumu');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Onaylanan yorumların konumu');
@define('INSTALL_PERMALINK_FEEDSPATH', 'RSS Beslemelerinin konumu');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Tek Eklentinin konumu');
@define('INSTALL_PERMALINK_ADMINPATH', 'Yöneticinin konumu');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Arama sayfası konumu');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Genel Ayarlar');
@define('INSTALL_CAT_SETTINGS_DESC', 'Serendipity Davranışlarını Özelleştirme');
@define('INSTALL_USERNAME', 'Admin(Yönetici) kullanıcı adı');
@define('INSTALL_USERNAME_DESC', 'Yönetici girişi için kulanıcı adı');
@define('INSTALL_PASSWORD', 'Yönetici şifresi');
@define('INSTALL_PASSWORD_DESC', 'Yönetici girişi için yönetici şifresi');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Gerçek Ad');
@define('USERCONF_REALNAME_DESC', 'Yazarın tam adı. Okuyucular için gerekli');
@define('INSTALL_EMAIL', 'Yönetici e-posta adresi');
@define('INSTALL_EMAIL_DESC', 'Site yöneticisinin e-posta adresi');
@define('INSTALL_SENDMAIL', 'Yöneticiye e-posta gönderilebilsin mi?');
@define('INSTALL_SENDMAIL_DESC', 'Yazılara görüş eklendiğinde uyarı epostası gelsin mi?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Site Adı');
@define('INSTALL_BLOGNAME_DESC', 'Site Başlığı');
@define('INSTALL_BLOGDESC', 'Site Açıklaması');
@define('INSTALL_BLOGDESC_DESC', 'Sitenizin açıklaması');
@define('INSTALL_BLOG_EMAIL', 'Site Sahibi E-Posta adresi');
@define('INSTALL_BLOG_EMAIL_DESC', 'Bu yapılandırma sizden giden e-postalar için kullanılacaktır. Bu adresin sizin postasunucunuz olarak size barındırma hizmeti veren firmadan sağlandığına emin olun - Pekçok posta sunucusu iletileri bilinmeyen başlığıyla geri iade eder.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Dil');
@define('INSTALL_LANG_DESC', 'Siteniz için dil seçimi yapın');
@define('INSTALL_CHARSET', 'Karakter Seçimi');
@define('INSTALL_CHARSET_DESC', 'Burada UTF-8 ya da doğal (ISO, EUC, ...) karakter seti seçimi yapabilirsiniz. Bazı diller sadece UTF-8 olarak çevrildiklerinden  "Doğal" karakterseti seçimi hiç bir etki yapmayabilir. UTF-8 yeni kurulumlar için önerilir".Bu seçeneğe eğer özel karakterleri çok kullanıyorsanız hiç dokunmayın.Daha fazla bilgi için https://docs.s9y.org/docs/developers/internationalization.html bu adrese başvurun.');
@define('INSTALL_CAL', 'Ajanda türü');
@define('INSTALL_CAL_DESC', 'Ajanda türünü seçin');
@define('AUTOLANG', 'Ziyaretçinin öntanımlı kullandığı dili kullan\'s ');
@define('AUTOLANG_DESC', 'Eğer bu seçenek açık olursa ziyaretçilerin tarayıcılarında kullandıkları dil sizin yazı ve arabirim dili üstünde öntanımlı olacaktır.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Enable Plugin ACL for usergroups?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'If the option "Plugin ACL for usergroups" is enabled in the configuration, you can specify which usergroups are allowed to execute certain plugins/events.');
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
@define('INSTALL_CAT_DISPLAY', 'Görünümler ve Seçenekler');
@define('INSTALL_CAT_DISPLAY_DESC', 'Serendipity görünümü nasıl özelleştirilir');
@define('INSTALL_FETCHLIMIT', 'Anasayfada gösterilecek yazı sayısı');
@define('INSTALL_FETCHLIMIT_DESC', 'Anasayfada gösterilecek yazıların adedi');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Number of entries to display for each page on the RSS Feed.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activate strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option. Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'gzip kullanarak sayfaları sıkıştır');
@define('INSTALL_USEGZIP_DESC', 'Sayfa gelişini hızlandırmak için, sayfaları sıkıştırabilir ve ziyaretçiye bu şekilde gönderebiliriz, Sadece Tarayıcı desteği gerekli ki genelde bu destek çoğunlukla mevcuttur. Bu önerilen ayardır');
@define('INSTALL_XHTML11', ' XHTML 1.1 uyumluluğu sağla');
@define('INSTALL_XHTML11_DESC', 'XHTML 1.1 uyumluluğu sağlansın mı (Bu eski 4üncü jenerasyon tarayıcılarda sorun çıkmasına neden olabilir)');
@define('INSTALL_POPUP', 'popup pencere kullanımını aç');
@define('INSTALL_POPUP_DESC', 'Yorumlar ve Bırakılan izler için pop up pencere kullanılsın mı?');
@define('INSTALL_EMBED', 'Serendipity gömülü olsun mu?');
@define('INSTALL_EMBED_DESC', 'Eğer Serendipity yazılımını normal sayfalara gömmek isterseniz, her başlığı doğru atamak ve içeriğinizi yazdırmak için kullanabilirsiniz.  Bunu yapmak için indexFile seçeneğini sarmallayıcı bir sınıf olarak normal web sayfaları başlıklarınız neredeyse orada kullanabilirsiniz. Detaylı bilgi için  README dosyasını okuyun!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Site dışına giden linkler tıklanabilir olsun mu?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"hayır": Site dışı linklere tıklanamasın (En çok çıkış yapanlar, En çok ziyaretçi gönderenler, Kullanıcı Yorumları) gösterilmesin/Google Spam önleme özelliğini kullanabilmek için düzmetin olarak gösterilsin (önerilir). "evet": Site dışı linkler normal web linkiymiş gibi gösterilsin. Bu seçimi yaparsanız site yan blok yapılandırma ayarlarının üstüne yazılacak!');
@define('INSTALL_TRACKREF', 'Ziyaretçi gönderenler iz bırakabilsin mi?');
@define('INSTALL_TRACKREF_DESC', 'Bu seçeneğin açık olması size hangi sitelerden gelip te yazılarınızın okunduğunu gösterecektir. Günümüzde bu duru  sıklıkla spam amaçlı olarak kullanılabiliyor,istiyorsanız kapalı tutabilirsiniz.');
@define('INSTALL_BLOCKREF', 'İzin verilmeyen başvurular');
@define('INSTALL_BLOCKREF_DESC', 'Ziyaret etmesinden hoşnut olmayacağınız özel bir adres var mı? Varsa bu alan adlarını \';\' ayırarak listeleyebilir ve bloke edilmiş ziyaret edecek adresler arasında gösterebilirsiniz!');
@define('INSTALL_REWRITE', 'URL Adreslerinin Yeniden yazımı');
@define('INSTALL_REWRITE_DESC', ' URL adresi oluşturmak için istediğiniz kuralı seçin. Yeniden yazma kuralının açık olması siteniz için daha kısa ve anlaşılır URL adresi oluşturacak ve  Google ajanları gibi arama motorlarına kayıtta etkili programcıklar sitenizi çok daha iyi bir şekilde dizinleyebileceklerdir. Bunun için websunucunuzun mod_rewrite ya da "AllowOverride All" seçenekleri Serendipity kurulum dizininiz için açık olmalıdır. Öntanımlı seçenek kendiliğinden belirlenir.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Sunucu Zaman Dilimi Seçimi');
@define('INSTALL_OFFSET_DESC', 'Web Sunucunuzdaki saat farkını girin (şuanki: %clock%) ve kullanacağınız zaman dilimine karar verin');
@define('INSTALL_SHOWFUTURE', 'Sonraki kayıtları göster');
@define('INSTALL_SHOWFUTURE_DESC', 'Eğer bu seçenek açıksa, sitenizdeki tüm kayıtlı yazılar bir anda gösterilecek. Öntanımlı olarak kapalı, yazılarınız tarih sırasına göre gösterimde.');
@define('INSTALL_ACL', 'Konu başlıkları için sadece okuma iznini uygula');
@define('INSTALL_ACL_DESC', 'Eğer açık olursa konu başlıkları için kullanıcı grubu izinleri ayarlarınız kullanıcılar sitenize bağlandıklarına uygulanacak. Eğer kapalı olursa, siteniz birazcık ta olsa hızlanır.Sonuçta eğer sitenizde çoklu kullanıcılı bir kaç site barındırmıyorsanız, bu ayar kapalı olabilir.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'RSS Beslemesi içine tüm yazıyı genişletilmiş metin dahil göster');
@define('SYNDICATION_PLUGIN_BANNERURL', 'RSS Besleme için resim');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'Mümkünse GIF/JPEG/PNG formatındaki resimler için URL adresi. (boş: site-logo)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Resim genişliği');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', ' pixel olarak, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Resim yüksekliği');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'pixel olarak, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'E-Posta adresi gösterilsin mi?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Alan "Düzenleyen Yönetici "');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'Mümkünse siteyi düzenleyen yöneticinin  e-posta adresi. (boş: gizli) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Alan "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'Mümkünse webmaster e-posta adresi. (boş: gizli) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Alan "ttl" (geçerlilik süresi)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Uzaktaki site/uygulamalarca sitenin kaşelenmesinden önceki verilerin geçerli olacağı süre (boş: gizli) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Alan "YayınTarihi"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'Yayın tarihi alanı Son yazının tarihini de gösterecek şekilde RSS Kanalına gömülsün');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Resim Düzenleme Ayarları');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Resimlerin nasıl düzenlenebileceğini belirten seçimleri yapın');
@define('INSTALL_IMAGEMAGICK', 'ImageMagick kullan');
@define('INSTALL_IMAGEMAGICK_DESC', 'ImageMagick kurulumuna sahipseniz resimleri yeniden boyutlamak için kullanılsın mı?');
@define('INSTALL_IMAGEMAGICKPATH', 'Dönüştürülecek dosyanın yolu');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Tam yolu & adı ImageMagick yoluyla dosya dönüştürmek için');
@define('INSTALL_THUMBSUFFIX', 'Küçükresim soneki');
@define('INSTALL_THUMBSUFFIX_DESC', 'Küçükresimler izleyen şekilde adlandırılacak: original.[suffix].ext');
@define('INSTALL_THUMBWIDTH', 'Küçükresim boyutları');
@define('INSTALL_THUMBWIDTH_DESC', 'Küçükresim oluşturma işlemi için izin verilen enbüyük genişlik boyutu');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. file upload size');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Enter the maximum filesize for uploaded files in bytes. This setting can be overruled by server-side settings in PHP.ini: upload_max_filesize, post_max_size, max_input_time all take precedence over this option. An empty string means to only use the server-side limits.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. width of image files for upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Enter the maximum image width in pixels for uploaded images.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. height of image files for upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Enter the maximum image height in pixels for uploaded images.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Enable on-the-fly media synchronization');
@define('ONTHEFLYSYNCH_DESC', 'If enabled, Serendipity will compare the media database with the files stored on your server and synchronize the database and directory contents.');
@define('MEDIA_DYN_RESIZE', 'Allow dynamic image resizing?');
@define('MEDIA_DYN_RESIZE_DESC', 'If enabled, the media selector can return images in any requested size via a GET variable. The results are cached, and thus can create a large filebase if you make intensive use of it.');
@define('MEDIA_EXIF', 'Import EXIF/JPEG image data');
@define('MEDIA_EXIF_DESC', 'If enabled, existing EXIF/JPEG metadata of images will be parsed and stored in the database for display in the media gallery.');
@define('MEDIA_PROP', 'Media properties');
@define('MEDIA_PROP_DESC', 'Enter a list of ";" separated property fields you want to define for each media file');
@define('MEDIA_PROP_MULTIDESC', '(You can append ":MULTI" after any item to indicate that this item will contain long text instead of just some characters)');
@define('MEDIA_KEYWORDS', 'Media keywords');
@define('MEDIA_KEYWORDS_DESC', 'Enter a list of ";" separated words that you want to use as pre-defined keywords for media items.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Kişisel bilgileriniz');
@define('USERCONF_CAT_PERSONAL_DESC', 'Kişisel bilgilerinizi değiştirin');
@define('USERCONF_USERNAME', 'Kullanıcı Adınız');
@define('USERCONF_USERNAME_DESC', 'Siteye bağlanmak için kullanılacak kullanıcı adı');
@define('USERCONF_PASSWORD', 'Şifreniz');
@define('USERCONF_PASSWORD_DESC', 'Siteye bağlanma amacıyla kullanacağınız şifreniz');
@define('USERCONF_CHECK_PASSWORD', 'Eski Şifre');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Eğer şifrenizi değiştirmek istiyorsanız, eski şifrenizi bu alana girmek zorundasınız.');
@define('USERCONF_USERLEVEL', 'Erişim seviyesi');
@define('USERCONF_USERLEVEL_DESC', 'Bu bölüm siteniz kullanıcılarının erişim ve yetki seviyelerini belirler');
@define('USERCONF_GROUPS', 'Kullanıcı Grupları');
@define('USERCONF_GROUPS_DESC', 'Bu kullanıcının üye olduğu kullanıcı grubu. Çoklu kullanıcı grubu üyeliği mümkün.');
@define('USERCONF_EMAIL', 'E-Posta Adresi');
@define('USERCONF_EMAIL_DESC', 'Kişisel e-posta adresiniz');
@define('INSTALL_WYSIWYG', ' WYSIWYG düzenleyici kullan');
@define('INSTALL_WYSIWYG_DESC', 'WYSIWYG düzenleyici kullanmak istiyor musunuz? (IE5+ üstü tarayıcıda çalışır, Mozilla 1.3+ üstünde kısmen çalışır)');
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
@define('USERCONF_SENDCOMMENTS', 'Görüş eklendiğinde haber verilsin mi?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Yazdığınız yazıya görüş bildirildiğinde e-posta yoluyla haber verilsin mi?');
@define('USERCONF_SENDTRACKBACKS', 'Bırakılan izlerle ilgili haber verilsin mi?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Yazdığınız yazı hakkında iz bırakıldığında epostayla haber verilsin mi?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Kural: Yazı Yayınlansın mı?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Bu kullanıcı yazılarını doğrudan yayınlayabilsin mi?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Show toolbar within media selector popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Yeni yazı için öntanımlı ayarlar');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'NOT: Kullanıcı seviyesi tanımlamaları sadece geçmişe ve eklentilere uyumluluk amaçlıdır. Kullanıcı izinlerinin gelen düzenleme yeri Kullanıcı Gruplarıdır!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Eski şifrenizi doğru olarak girmediniz, bu nedenle şifre değiştirme işleminiz onaylanmadı.Yeni Ayarlarınız kaydedilmedi.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'The username cannot be left blank.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'Kişisel Yapılandırma: Kişisel yapılandırmaya erişim');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'Kişisel Yapılandırma Kullanıcı Seviyesi: Kullanıcı yetkiseviyesini değiştirin');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'Kişisel Yapılandırma oluşturulamadı: Değiştirin: "Yazı oluşturma yasağı"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'Kişisel Yapılandırma Yayınlama için: Yazıların yayınlanması için izin verin');
@define('PERMISSION_SITECONFIGURATION', 'Site Yapılandırması: Sistem yapılandırmasına erişim');
@define('PERMISSION_BLOGCONFIGURATION', 'Günlük Yapılandırması: Günlük bazlı yapılandırmaya erişim');
@define('PERMISSION_ADMINENTRIES', 'KayıtYönetimi: Yazı kayıtlarını yönetebil');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'DiğerkullanıcılarınKayıtlarınıdaYönet: Diğer kullanıcıların Kayıtlarını da Yönetebil');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'İthalKayıtYönetimi: Yazı kaydı ithal edebil');
@define('PERMISSION_ADMINCATEGORIES', 'KonuBaşlıklarıYönetimi: Konu Başlıklarını Düzenleyebil');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'DiğerKullanıcıKonuBaşlıklarınıYönet: Diğer kullanıcıların oluşturduğu konu başlıklarını yönetebil');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'KonubaşlığıSilmeYönetimi: Konu başlıklarını Silebil');
@define('PERMISSION_ADMINUSERS', 'KullanıcıYönetimi: Kullanıcıları Silebil ');
@define('PERMISSION_ADMINUSERSDELETE', 'KullanıcıYönetimi: Kullanıcıları Silebil');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'KullanıcıYetkiSeviyesiYönetimi: Kullanıcı Yetki Seviyelerini değiştirebil');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'KullanıcıGruplarıYönetimi: Gruplarıyla beraber kullanıcıları yönetebil');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'DiğerKullanıcıGruplarıYönetimi: Başka kullanıcı gruplarını ve kullanıcılarını da yönetebil');
@define('PERMISSION_ADMINUSERSCREATENEW', 'YeniKullanıcıEklemeYetkisi: Yeni kullanıcı ekleyebil');
@define('PERMISSION_ADMINUSERSGROUPS', 'KullanıcıGruplarınınYönetimi: Kullanıcı Gruplarını yönetebil');
@define('PERMISSION_ADMINPLUGINS', 'EklentiYönetimi: Eklentileri Yönetebil');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'DiğerEklentilerinYönetimi: Diğer kullanıcıların eklentilerini yönetebil');
@define('PERMISSION_ADMINIMAGES', 'ResimlerinYönetimi: Medya Dosyalarını Yönetebil');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'ResimDizinlerininYönetimi: Medya Dizinlerini Yönetebil');
@define('PERMISSION_ADMINIMAGESADD', 'ResimEklemeYönetimi: Yeni medya-resim dosyası ekleyebil');
@define('PERMISSION_ADMINIMAGESDELETE', 'ResimSilmeYönetimi: Yeni medya-resim dosyası silebil');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'DiğerKullanıcılarınMedyaDosyalarınınYönetimi: Diğer Kullanıcıların Medya Dosyalarını Yönetebil');
@define('PERMISSION_ADMINIMAGESVIEW', 'ResimDosyalarınınGörünümYönetimi: Resim Dosyalarına bakabil');
@define('PERMISSION_ADMINIMAGESSYNC', 'ResimDosyalarınıEşlemeYönetimi: Küçükresimleri eşleyebil');
@define('PERMISSION_ADMINCOMMENTS', 'YorumlarınYönetimi: Yorumları Yönetebil');
@define('PERMISSION_ADMINTEMPLATES', 'ŞablonYönetimi: Şablonları Yönetebil');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'DiğerKullanıcılarınMedyalarınınYönetimi: Diğer Kullanıcıların medya dosyalarını izleyebil');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Yazınız kaydedildi');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Ardarda işlem');
@define('COMMENTS_VIEWMODE_LINEAR', 'Çizgisel');
@define('DISPLAY_COMMENTS_AS', 'Yorumları şöyle göster');
@define('COMMENTS_DISABLE', 'Bu yazı hakkında görüş ekleme özelliği kapalı');
@define('COMMENTS_ENABLE', 'Bu yazıya görüş ekleme izni ver');
@define('COMMENTS_CLOSED', 'Yazar bu yazıya görüş eklenmesini istemiyor');
@define('VIEW_EXTENDED_ENTRY', 'okumaya devam et "%s"');
@define('TRACKBACK_SPECIFIC', 'Bu yazıya iz bırakmak için özel URI adresiniz');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'Tamamını göster');
@define('VIEW_TOPICS', 'Başlıkları göster');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Başlık');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Yazılarınız kaydedilemedi!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Bilgi hatırlansın mı? ');
@define('SUBMIT_COMMENT', 'Görüş bildir');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Bu yazıya abone ol');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Tarayıcınız HTTP-Ziyaretçi Gönderenler için doğru  karakter dizgesi gönderemedi. Bu tarayıcı ve proxy ayarlarınızın doğru şekilde yapılandırılmamış olmasından kaynaklanabilir ya da Cross Site Request Forgery (XSRF) diye tanımlanan durum ortaya çıkmış olabilir.Yapmak istediğiniz eylem tamamlanamadı.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Görüş bildirme için #%s daha önce izin verilmişti');
@define('COMMENT_EDITED', 'Seçilen görüş düzenlenecek');
@define('COMMENTS_WILL_BE_MODERATED', 'Gönderilen yorumlar sayfada gösterilmeden önce kontrol edilsin mi?');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Dikkat: Bu görüş yayınlanmadan önce onaylanmalı');
@define('DELETE_COMMENT', 'Görüşü Sil');
@define('APPROVE_COMMENT', 'Görüşü onayla');
@define('REQUIRES_REVIEW', 'Önizleme Gerekli');
@define('COMMENT_APPROVED', 'Görüş #%s onaylandı');
@define('COMMENT_DELETED', 'Görüş #%s silindi');
@define('COMMENTS_MODERATE', 'Bu yazıda görüş bildirme ve iz bırakma onaya bağlı');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Dikkat: Bu bırakılan iz gösterilmeden önce onaylanmalı');
@define('DELETE_TRACKBACK', 'Bırakılan izi sil');
@define('APPROVE_TRACKBACK', 'Bırakılan ize onay ver');
@define('TRACKBACK_APPROVED', 'Bırakılan iz #%s onaylandı');
@define('TRACKBACK_DELETED', 'Bırakılan iz #%s silindi');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'En üst bölüm');
@define('VIEW_COMMENT', 'Yorumlara bak');
@define('VIEW_ENTRY', 'Yazılara bak');
@define('LINK_TO_ENTRY', 'Yazıya bağlantı');
@define('LINK_TO_REMOTE_ENTRY', 'Dışardan bir yazıya bağlantı ver');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', ' URI %s adresine iz bırakılıyor');
@define('TRACKBACK_SENT', 'İz bırakıldı');
@define('TRACKBACK_FAILED', 'Bırakılan iz kayıp: %s');
@define('TRACKBACK_NOT_FOUND', 'İzbırakma-URI adresi bulunamadı.');
@define('TRACKBACK_URI_MISMATCH', 'Otomatik oluşturulan izbırakma amaçlı URI adresi hedeflediğimiz URI adresi değil.');
@define('TRACKBACK_CHECKING', ' <u>%s</u> adresi olası bırakılan izler için kontrol ediliyor...');
@define('TRACKBACK_NO_DATA', 'Hedeflenen içerikte veri bulunamadı');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Gönderilen iz bulunamadı:  %s port %d numarasındaki bağlantı açılamadı');

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
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Abone olunan yazı için yeni görüş "%s"');
@define('SUBSCRIPTION_MAIL', "Merhaba %s,\n\nBu yazı için ekranda gördüğünüz yeni bir görüş bildirildi \"%s\", başlıklı \"%s\"\nTGönderenin adı: %s\n\nYazıya buradan ulaşabilirsiniz: %s\n\nBu bağlantıya tıklayarak aboneliğinizi kaldırabilirsiniz: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Merhaba %s,\n\nBu yazı için ekranda gördüğünüz yeni bir iz bırakıldı \"%s\", başlıklı \"%s\"\nTGönderenin adı: %s\n\nBırakılan ize buradan ulaşabilirsiniz: %s\n\nBu bağlantıya tıklayarak aboneliğinizi kaldırabilirsiniz: %s\n");
@define('SIGNATURE', "\n-- \n%s Kızılay Derneği Edirne Şubesi tarafından hazırlanmıştır.\n.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', ' "%s",  "%s" başlıklı yazı hakkında yeni bir yorum eklendi.');
@define('A_NEW_TRACKBACK_BLAHBLAH', ' "%s" başlıklı yazı için yeni bir iz bırakıldı.');
@define('YOU_HAVE_THESE_OPTIONS', 'Şu seçenekler mümkün:');
@define('NEW_TRACKBACK_TO', 'Yeni iz bırakan');
@define('NEW_COMMENT_TO', 'Yeni görüş gönderen');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', ' %s sorunuz için herhangi bir kayıt bulunamadı' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', ' %s terimiyle yaptığınız sorgunun döndürdüğü %s sonuçlar:');
@define('SEARCH_TOO_SHORT', 'Arama sorgunuz üç karakterden uzun olmalı. Kısa kelimelerin sonuna * eklemeyi deneyebilirsiniz, şunun gibi: Edir* kısa kelimelerle arama yapmanın yolu bu şekildedir.');
@define('SEARCH_ERROR', 'The search function did not work as expected. Notice for the administrator of this blog: This may happen because of missing index keys in your database. On MySQL systems your database user account needs to be privileged to execute this query: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> The specific error returned by the database was: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Metin alanına bir görüş eklememişsiniz, lütfen %sgeriye dönüp%s tekrar deneyin');
@define('COMMENT_NOT_ADDED', 'Görüşünüz eklenemedi, çünkü bu yazı için görüş ekleme seçeneği kapalı,hatalı bir veri girmiş olabilirsiniz, ya da görüşünüz sakıncalı kelimeler içeriyor olabilir.');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Görüş bildiren');

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
@define('PLUGIN_API_VALIDATE_ERROR', 'Yapılandırma sözdizimi bu seçenek için hatalı: "%s". Türe göre içeriğe ihtiyaç var "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Konu başlıklarının gösterimi.');
@define('CATEGORIES_PARENT_BASE', 'Sadece Konu başlıklarını göster...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Sadece alt konu başlıklarını seçebilirsiniz, sitede de sadece seçtiğiniz konu başlıkları gösterilir.');
@define('CATEGORIES_HIDE_PARALLEL', 'Konu başlıkları ağaç yapısının parçası olmayan konu başlıklarını gizle');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Başka bir konu başlığı ağacı altında gösterilen konu başlığını gizlemek istiyorsanız, bu seçenek açık olsun. Eğer bir altyapıda çoklu site yayını yapıyor ve  "Konu Başlıklarının Özellikleri/Şablonlar" eklentisi kullanıyorsanız işinize yarayacaktır.');
@define('CATEGORIES_HIDE_PARENT', 'Seçilen alt konu başlığı gizlensin mi?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Eğer bir konu başlığı altındaki tüm alt konu başlıklarının da listelenmesine izin verirseniz, öntanımlı olarak tüm listelenmiş konu başlıklarını gösterebilirsiniz. Bu seçenek kapalı olursa, alt konu başlıkları asla gösterilmez.');
@define('CATEGORY_PLUGIN_TEMPLATE', ' Smarty-Template Sistemi Açık Olsun mu?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Eğer bu seçenek açık olursa, Eklenti Smarty-Template sisteminin yeteneklerine göre konu başlıklarını listeleyecek.Eğer bu seçeneği açarsanız, Şu dosyadan site görünüm yapıalanını değiştirmelisiniz: "plugin_categories.tpl" . Bu seçeneğin açık olması performansı arttırır, Ancak özelleştirmeye ihtiyaç duymuyorsanız, kapalı bırakabilirsiniz.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Konu başlıklarına göre yazı kayıtlarının sayısı gösterilsin mi?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Ziyaretçilerin önce çoklu konu başlıklarını görebilmesi için izin ver?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Bu seçenek açık olursa, bir kontrol kutusu yanblok eklentilerindeki konu başlıklarının herbirinin yanına eklenecek.Ziyaretçiler bunlardan birkaçını işaretleyip bir kaç konu başlığı altındaki yazılara da aynı anda erişebilecekler.');
@define('CATEGORIES_TO_FETCH', 'Alınan konu başlıkları');
@define('CATEGORIES_TO_FETCH_DESC', 'Hangi yazardan hangi konu başlıkları alınsın?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Yazarların listesini göster');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Yazılarda yazar adı gösterilsin mi?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Bu seçenek açık olursa, yazıların altında yazarın adı da geçecek.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Abonelik');
@define('SHOWS_RSS_BLAHBLAH', 'RSS Abonelik Bağlantıları');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s beslemesi');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 Görüşler');
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
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'Yayınlamayı istediğiniz Beslemenin ID Numarası ');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner Resmi');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Gösterilecek resmin adı (ya da sayaç için boş bırakın),  feedburner.com adresinde mevcut olanlardan biri olabilir, örneğin: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'FeedBurner Başlığı');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Başlık (Ne olursa)Resmin yanında görünmesi için');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'FeedBurner resim metni');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Yazı (ne olursa) Resmin üstüne gelindiğinde gösterilecek');
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
@define('ARCHIVE_COUNT', 'Listelenen öğe sayısı');
@define('ARCHIVE_COUNT_DESC', 'Gösterilecek gün, ay ya da yıl sayısı');
@define('ARCHIVE_FREQUENCY', 'Ajanda unsurlarının sıklığı');
@define('ARCHIVE_FREQUENCY_DESC', 'Ajandayı liste içindeki öğelerle kendi arasında düzenle');
@define('BROWSE_ARCHIVES', 'Arşivde aylara göre dolaşın');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', ' "Serendipity" sitesini düzmetin olarak göster');
@define('POWERED_BY_SHOW_TEXT_DESC', '"Serendipity" sitesini düzmetin olarak gösterme seçeneği açık');
@define('POWERED_BY_SHOW_IMAGE', ' "Serendipity" logosuyla göster');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Serendipity logosunu göster');
@define('ADVERTISES_BLAHBLAH', 'Sitedeki reklamların kökeni');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Bağlanmak için https gizlilik kurallarını kullan');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Bağlantı linki https-konumu. Sunucunuz bu güvenli bağlantı çeşidini destekliyorsa kullanabilirsiniz!');
@define('SUPERUSER', 'Site Yönetim Arabirimi');
@define('SUPERUSER_OPEN_ADMIN', 'Yönetim arabirimini aç');
@define('SUPERUSER_OPEN_LOGIN', 'Bağlanma ekranını aç');
@define('ALLOWS_YOU_BLAHBLAH', 'Site yan bloğuna  yönetim arabirimine girmek için bağlantı ekle');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Ajanda');
@define('CALENDAR_BOW_DESC', 'Haftanın günleri haftanın başı olan günle başlamalı. Öntanımlı olarak Pazartesi seçili');
@define('QUICKJUMP_CALENDAR', 'Ajandaya hızlı bakış');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Haftanın başı');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Eklenti APIsi açık olsun');
@define('CALENDAR_EXTEVENT_DESC', 'Bu seçenek açık olursa eklentiler ajanda içinde mevcut kendi olayları işaretlenmiş şekilde gösterilebilecek. Sadece buna ihtiyaç duyan bir eklenti kurduysanız açık olmalı, diğer durumda sadece performansı düşürür.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Bir yazı için ara');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Site Yan Bloğunda HTML eklemek için ayrılan bölüm');
@define('THE_NUGGET', 'HTML Bölümü!');
@define('BACKEND_TITLE', 'Eklenti yapılandırma ekranı hakkında daha fazla bilgi');
@define('BACKEND_TITLE_FOR_NUGGET', 'Burada özel karakterler tanımlayabilirsiniz Bunlar eklenti yapılandırma ekranında  HTML Nugget eklentisiyle beraber yayınlanabilir.Eğer boş başlıkla beraber çoklu HTML nugget sahibiyseniz , bu bir eklentiyi diğerinden ayırdedebilmenize yardım eder.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Siteyi en çok ziyaret edenlerin linkleri gösterilsin mi?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"hayır": Google spam koruma özelliğinden yararlanabilmek için En çok ziyaret edenler sadece metin formatında gösterilsinler . "Evet": En çok ziyaret edenlere link verilsin. "öntanımlı":Genel yapılandırmada kullanılan seçenek (önerilir).');
@define('HAVE_TO_BE_LOGGED_ON', 'Bu sayfayı görmek için kayıtlı olmalısınız');
@define('WELCOME_TO_ADMIN', ' Serendipity Yönetim Arabirimine Hoşgeldiniz.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Short Comment');
@define('MEDIA_PROPERTY_COMMENT2', 'Long Comment');
@define('DELETE_SELECTED_ENTRIES', 'Delete selected entries');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Title');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity henüz kurulmadı. Lütfen <a href="%s">buradan kurun</a> .');
@define('COMMENT_ADDED_CLICK', ' %sBuraya%s tıklarsanız görüşler bölümüne dönersiniz,  %Buraya da%s pencereyi kapatmak için tıklayınız.');
@define('COMMENT_NOT_ADDED_CLICK', '%sBuraya%s tıklarsanız görüşler bölümüne dönersiniz,  %Buraya da%s pencereyi kapatmak için tıklayınız.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Associated Date');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'Hedeflenen URI adresi çalıştırılabilecek enbüyük dosya boyutunu aşıyor %s byte dosya boyutunda.');
@define('CLICK_FILE_TO_INSERT', 'Eklemek istediğiniz dosyanın üstüne tıklayın:');
@define('SELECT_FILE', 'Eklemek için dosya seçin');
@define('MANAGE_IMAGES', 'Resimleri Yönet');
@define('WORD_NEW', 'New');
@define('WORD_OR', 'ya da');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Öntaraf: Dış kaynaklı  Hizmetler');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Öntaraf: Belirleyici Özellikler');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Öntaraf: Tüm Modlar');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Öntaraf: Görünümler');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Öntaraf: Yazılarla ilişkili olarak');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Arkataraf: Düzenleyici');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Arkataraf: Kullanıcı Yönetimi');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Arkataraf: Meta Bilgisi');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Arkataraf: Şablonlar');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Arkataraf: Belirleyici Özellikler');
@define('PLUGIN_GROUP_IMAGES', 'Resimler');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Markup');
@define('PLUGIN_GROUP_STATISTICS', 'İstatistikler');
@define('IMPORT_WELCOME', 'Serendipity ithal etme hizmetine hoşgeldiniz');
@define('USER_SELF_INFO', ' %s (%s) olarak bağlandınız');
@define('IMPORT_WHAT_CAN', 'Burada diğer weblog yazılımlarından içerik ithal edebilirsiniz.');
@define('IMPORT_SELECT', 'Hangi yazılımdan içerik almak istiyorsunuz');
@define('MANAGE_STYLES', 'Görünümleri yönet');
@define('SELECT_A_PLUGIN_TO_ADD', 'Kurmak istediğiniz eklentiyi seçin');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Kurulu eklentileri listele');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'İptal et');
@define('DELETE_SELECTED_COMMENTS', 'Seçili yorumları sil');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Medya bul');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Hata: Eski dosya adı bulunamadı!');
@define('ERROR_SOMETHING', 'Hata: Bir şeyler yanlış.');
@define('DIRECT_LINK', 'Bu yazıya doğrudan bağlantı');
@define('SELECT_TEMPLATE', 'Sitenizde kullanmak istediğiniz görünüm şablonunu seçin');
@define('DATABASE_ERROR', 'serendipity hata: veritabanına bağlanılamıyor - bu veritabanı.');
@define('LIMIT_TO_NUMBER', 'Anasayfada gösterilecek yazı sayısı?');
@define('DIRECTORIES_AVAILABLE', 'Listelenen alt dizinlerin üstüne tıklayarak yeni bir dizin oluşturabilirsiniz.');
@define('CATEGORY_INDEX', 'Yazılarınız için mümkün olan konu başlıkları');
@define('PAGE_BROWSE_PLUGINS', 'Sayfa %s sayısı %s, toplamda %s eklenti mevcut.');
@define('CHARSET_NATIVE', 'Doğal');
@define('XMLRPC_NO_LONGER_BUNDLED', ' XML-RPC API Arayüzü  Serendipity ile beraber verilmedi. Çünkü bu API güvenlik sorunları süren bir durumda ve çok fazla insan kullanmıyor. Bu nedenle sadece ihtiyacınız varsa  XML-RPC Eklentisini kurarak XML-RPC API sini kullanabilirsiniz.Uygulamanızda kullanılan URL adresi değişmeyecektir- eklentiyi kurarsanız bu API yi kullanabilirsiniz.');
@define('AUTHORS_ALLOW_SELECT', 'Ziyaretçiler aynı anda birkaç yazarı beraber görebilsin mi?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Bu seçenek açık olursa, Kullanıcılar işaretleme kutularından bir kaç yazarı aynı anda seçip yazılarını görebilecekler.');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');

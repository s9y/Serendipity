<?php # 

/**
 *  @version 
 *  @author Translator Name <ahmetusal@gmail.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Yazılar için genişletilmiş özelliklerin tanımı');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', '(önbellek, anonim olmayan yazılar, yapışkan iletiler)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Bu yazıyı yapışkan ileti olarak işaretle');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'Bu yazıyı okuma izni olanlar:');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Kendim');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', 'Yazarlar');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'Herkes');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'Yazılar önbelleklensin mi?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'Eğer bu seçenek etkinse, yazıyı her kaydettiğinizde
önbelleklenmiş bir sürüm kendiliğinden oluşturulacaktır. Önbellekleme yazıların yayın esnasında
daha çabuk erişilmesine imkan verir, siteye erişim hızını arttırır, Ama diğer eklentilerle beraber çalışırken 
ölçeklenebilir olma imkanını da azaltır..');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Yazıları önbellekleme işlemini gerçekleştir');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Yazıların kaydı gelecek işlem için çekiliyor...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Yazıların çekilme işlemi %d dan %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Building cache for entryŞu yazı için önbellekleme işlemi:
#%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'Yazı önbellekleğe aktarıldı.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Yazı önbellekleme işlemi tamamlandı.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Yazı önbellekleme işlemi iptal edildi.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (toplamda %d yazı)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NL2BR', 'nl2br Kapalı');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Yazıyı  öngörünüm / anasayfadan gizle');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'Grup tabanlı yetkilendirme kullan');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'Eğer bu seçenek etkinleştirilirse, hangi kullanıcı grubunun
kullanıcılarının bu yazıyı okuma yetkisi olduğunu belirleyebilirsiniz. Bu seçenek performansı olumsuz
etkileyebilir. Sadece gerçekten ihtiyacınız varsa bu seçeneği etkinleştirmeniz önerilir.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'Kullanıcı tabanlı yetkilendirme kullan');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'Eğer bu seçenek etkinleştirilirse, Bu yazıyı okuma izni olan özel kullanıcıları tanımlayabilirsiniz. Bu seçenek performansı olumsuz
etkileyebilir. Sadece gerçekten ihtiyacınız varsa bu seçeneği etkinleştirmeniz önerilir.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'İçeriği RSS Beslemesinden gizle');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'Eğer bu seçenek etkinleştirilirse, içeriği RSS Beslemesinden gizlenecektir.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Özel Alanlar');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Şablonunuza eklenmek üzere ek özel alanlar belirleme imkanı.Bu alanlar nerede kullanmak istiyorsanız orada gösterilecek şekilde eklenebilir. Tam olarak istediğiniz türden bir özelleştirme için entries.tpl şablon dosyanızı düzenleyin ve  Smarty etiketlerini HTML etiketleme yapısı içinde
{$entry.properties.ep_MyCustomField} gibi yerleştirin. Not: her alanda ön ek ep_ şeklinde olmalıdır.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Buraya virgülle ayrılmış özel alanlarınızı listeleyebilirsiniz ve bunları her yazınız için kullanabilirsiniz. özel harf karakterleri ya da boşluk karakteri kullanmamaya özen gösterin - Örneğin:"Ozelalan1, Ozelalan2" şeklinde kullanın.' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'Listelenen özel alanlar <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">eklenti yapılandırma</a> bölümünden değiştirilebilir.');


<?php # $Id$

/**
 *  @version $Revision$
 *  @author Translator Name <ahmetusal@gmail.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_ENTRYPROPERTIES_TITLE', 'Yazýlar için geniþletilmiþ özelliklerin tanýmý');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_DESC', '(önbellek, anonim olmayan yazýlar, yapýþkan iletiler)');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_STICKYPOSTS', 'Bu yazýyý yapýþkan ileti olarak iþaretle');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS', 'Bu yazýyý okuma izni olanlar:');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PRIVATE', 'Kendim');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_MEMBERS', 'Yazarlar');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_ACCESS_PUBLIC', 'Herkes');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE', 'Yazýlar önbelleklensin mi?');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DESC', 'Eðer bu seçenek etkinse, yazýyý her kaydettiðinizde
önbelleklenmiþ bir sürüm kendiliðinden oluþturulacaktýr. Önbellekleme yazýlarýn yayýn esnasýnda
daha çabuk eriþilmesine imkan verir, siteye eriþim hýzýný arttýrýr, Ama diðer eklentilerle beraber çalýþýrken 
ölçeklenebilir olma imkanýný da azaltýr..');
@define('PLUGIN_EVENT_ENTRYPROPERTY_BUILDCACHE', 'Yazýlarý önbellekleme iþlemini gerçekleþtir');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNEXT', 'Yazýlarýn kaydý gelecek iþlem için çekiliyor...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_FETCHNO', 'Yazýlarýn çekilme iþlemi %d dan %d');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_BUILDING', 'Building cache for entryÞu yazý için önbellekleme iþlemi:
#%d, <em>%s</em>...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHED', 'Yazý önbellekleðe aktarýldý.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_DONE', 'Yazý önbellekleme iþlemi tamamlandý.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_ABORTED', 'Yazý önbellekleme iþlemi iptal edildi.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CACHE_TOTAL', ' (toplamda %d yazý)...');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NL2BR', 'nl2br Kapalý');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_NO_FRONTPAGE', 'Yazýyý  öngörünüm / anasayfadan gizle');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS', 'Grup tabanlý yetkilendirme kullan');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_GROUPS_DESC', 'Eðer bu seçenek etkinleþtirilirse, hangi kullanýcý grubunun
kullanýcýlarýnýn bu yazýyý okuma yetkisi olduðunu belirleyebilirsiniz. Bu seçenek performansý olumsuz
etkileyebilir. Sadece gerçekten ihtiyacýnýz varsa bu seçeneði etkinleþtirmeniz önerilir.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS', 'Kullanýcý tabanlý yetkilendirme kullan');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_USERS_DESC', 'Eðer bu seçenek etkinleþtirilirse, Bu yazýyý okuma izni olan özel kullanýcýlarý tanýmlayabilirsiniz. Bu seçenek performansý olumsuz
etkileyebilir. Sadece gerçekten ihtiyacýnýz varsa bu seçeneði etkinleþtirmeniz önerilir.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS', 'Ýçeriði RSS Beslemesinden gizle');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_HIDERSS_DESC', 'Eðer bu seçenek etkinleþtirilirse, içeriði RSS Beslemesinden gizlenecektir.');

@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS', 'Özel Alanlar');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1', 'Þablonunuza eklenmek üzere ek özel alanlar belirleme imkaný.Bu alanlar nerede kullanmak istiyorsanýz orada gösterilecek þekilde eklenebilir. Tam olarak istediðiniz türden bir özelleþtirme için entries.tpl þablon dosyanýzý düzenleyin ve  Smarty etiketlerini HTML etiketleme yapýsý içinde
{$entry.properties.ep_MyCustomField} gibi yerleþtirin. Not: her alanda ön ek ep_ þeklinde olmalýdýr.');
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC2', 'Buraya virgülle ayrýlmýþ özel alanlarýnýzý listeleyebilirsiniz ve bunlarý her yazýnýz için kullanabilirsiniz. özel harf karakterleri ya da boþluk karakteri kullanmamaya özen gösterin - Örneðin:"Ozelalan1, Ozelalan2" þeklinde kullanýn.' . PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC1);
@define('PLUGIN_EVENT_ENTRYPROPERTIES_CUSTOMFIELDS_DESC3', 'Listelenen özel alanlar <a href="%s" target="_blank" title="' . PLUGIN_EVENT_ENTRYPROPERTIES_TITLE . '">eklenti yapýlandýrma</a> bölümünden deðiþtirilebilir.');


<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
https://seditio.com.tr
[BEGIN_SED]
File=upgrade_172_173.php
Version=178
Updated=2012-oct-23
Type=Core.upgrade
Author=Seditio Team
Description=Database upgrade
[END_SED]
==================== */

if ( !defined('SED_CODE') || !defined('SED_ADMIN') ) { die('Wrong URL.'); }


// ========================================

$adminmain .= "Dahili SQL önbelleğini temizleme...<br />";
$sql = sed_sql_query("TRUNCATE TABLE ".$cfg['sqldbprefix']."cache");

$adminmain .= "Ayrıştırıcı tablosu güncelleniyor<br />";
$sqlqr = "UPDATE ".$cfg['sqldbprefix']."parser SET parser_code1 = '<!--readmore-->' WHERE parser_bb1 = '[more]'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

if ($cfg['textmode'] == "html")
    {
      //Eklentiyi yeniden yükle Jevix, Ckeditor && Eklenti MarkHTML kaldırılıyor
      
      $adminmain .= "Jevix eklentisini kaldırma<br />";
      $adminmain .= sed_plugin_uninstall('jevix');
      $adminmain .= "Eklenti Ckeditor'u kaldırma<br />";
      $adminmain .= sed_plugin_uninstall('ckeditor');
      $adminmain .= "MarkHTML eklentisini kaldırma<br />";
      $adminmain .= sed_plugin_uninstall('markhtml');      
      $adminmain .= "Jevix eklentisini yükleniyor<br />";
      $adminmain .= sed_plugin_install('jevix');      
      $adminmain .= "Ckeditor eklentisini yükleniyor<br />";
      $adminmain .= sed_plugin_install('ckeditor');
    }
else 
    {
      //Textboxer2 eklentisini yeniden yükleyin
      
      $adminmain .= "Textboxer2 eklentisini kaldırma<br />";
      $adminmain .= sed_plugin_uninstall('textboxer2'); 
      $adminmain .= "Textboxer2 eklentisi kuruLUYOR<br />";
      $adminmain .= sed_plugin_install('textboxer2');        
    }
    
$adminmain .= "'struct_allowcomments' sütununu yapıya ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."structure ADD structure_allowcomments tinyint(1) NOT NULL DEFAULT '1' AFTER structure_order";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "'struct_allowratings' sütununu yapıya ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."structure ADD structure_allowratings tinyint(1) NOT NULL DEFAULT '1' AFTER structure_allowcomments";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Sayfalara 'page_allowcomments' sütununu ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pages ADD page_allowcomments tinyint(1) NOT NULL DEFAULT '1' AFTER page_count";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Sayfalara 'page_allowratings' sütununu ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pages ADD page_allowratings tinyint(1) NOT NULL DEFAULT '1' AFTER page_allowcomments";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Çekirdeğe 'maxcommentsperpage' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'comments', '05', 'maxcommentsperpage', 2, '30', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Çekirdeğe 'maxtimeallowcomedit' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'comments', '06', 'maxtimeallowcomedit', 2, '15', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Çekirdeğe 'yorum sırası' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'comments', '11', 'commentsorder', 2, 'ASC', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Çekirdeğe 'defskin' yeni gizli yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'skin', '16', 'defskin', 7, '', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Çekirdeğe RSS yeni yapılandırmaları ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'rss', '01', 'disable_rss', 3, '0', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'rss', '02', 'disable_rsspages', 3, '0', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'rss', '03', 'disable_rsscomments', 3, '0', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'rss', '04', 'disable_rssforums', 3, '0', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'rss', '05', 'rss_timetolive', 2, '300', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'rss', '06', 'rss_maxitems', 2, '30', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'rss', '07', 'rss_defaultcode', 2, 'news', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "SQL sürüm numarasını değiştirme 173...<br />";
$sql = sed_sql_query("UPDATE ".$cfg['sqldbprefix']."stats SET stat_value=173 WHERE stat_name='version'");

$upg_status = TRUE;

?>
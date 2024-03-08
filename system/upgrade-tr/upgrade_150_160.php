<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
https://seditio.com.tr
[BEGIN_SED]
File=upgrade_150_160.php
Version=178
Updated=2022-jun-12
Type=Core.upgrade
Author=Seditio Team
Description=Database upgrade
[END_SED]
==================== */

if ( !defined('SED_CODE') || !defined('SED_ADMIN') ) { die('Wrong URL.'); }


// ========================================

$adminmain .= "Yorumlara 'is_html' sütununu ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."com ADD com_text_ishtml TINYINT(1) DEFAULT '0' AFTER com_text";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Forum gönderilerine 'is_html' sütununu ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."forum_posts ADD fp_text_ishtml TINYINT(1) DEFAULT '0' AFTER fp_text";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Sayfalara 'is_html' sütununu ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pages ADD page_text_ishtml TINYINT(1) DEFAULT '0' AFTER page_text";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
         
$adminmain .= "Özel mesajlara 'is_html' sütununu ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pm ADD pm_text_ishtml TINYINT(1) DEFAULT '0' AFTER pm_text";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
       
$adminmain .= "Kullanıcı metnine 'is_html' sütununu ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."users ADD user_text_ishtml TINYINT(1) DEFAULT '0' AFTER user_text";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
  
// ========================================

$adminmain .= "Yapılandırma tablosunu temizleme...<br />";
$sqlqr = "DELETE FROM ".$cfg['sqldbprefix']."config WHERE config_cat='parser' AND config_name='parser_vid'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$sqlqr = "DELETE FROM ".$cfg['sqldbprefix']."config WHERE config_cat='parser' AND config_name='parsebbcodeusertext'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$sqlqr = "DELETE FROM ".$cfg['sqldbprefix']."config WHERE config_cat='parser' AND config_name='parsebbcodecom'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$sqlqr = "DELETE FROM ".$cfg['sqldbprefix']."config WHERE config_cat='parser' AND config_name='parsebbcodeforums'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$sqlqr = "DELETE FROM ".$cfg['sqldbprefix']."config WHERE config_cat='parser' AND config_name='parsebbcodepages'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$sqlqr = "DELETE FROM ".$cfg['sqldbprefix']."config WHERE config_cat='parser' AND config_name='parsesmiliesusertext'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$sqlqr = "DELETE FROM ".$cfg['sqldbprefix']."config WHERE config_cat='parser' AND config_name='parsesmiliescom'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$sqlqr = "DELETE FROM ".$cfg['sqldbprefix']."config WHERE config_cat='parser' AND config_name='parsesmiliesforums'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$sqlqr = "DELETE FROM ".$cfg['sqldbprefix']."config WHERE config_cat='parser' AND config_name='parsesmiliespages'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$sqlqr = "DELETE FROM ".$cfg['sqldbprefix']."config WHERE config_cat='page' AND config_name='allowphp_pages'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$sqlqr = "DELETE FROM ".$cfg['sqldbprefix']."config WHERE config_cat='pm' AND config_name='keepoldpms'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
                                    
$adminmain .= "Textboxer 2 eklentisini kaldırma<br />";
$adminmain .= sed_plugin_uninstall('textboxer2');

// ========================================

$adminmain .= "Çöp kutusunu temizlemek...<br />";
$sql = sed_sql_query("TRUNCATE TABLE ".$cfg['sqldbprefix']."trash");

$adminmain .= "Dahili SQL önbelleğini temizleme...<br />";
$sql = sed_sql_query("TRUNCATE TABLE ".$cfg['sqldbprefix']."cache");
         
$adminmain .= "SQL sürüm numarasını değiştirme 160...<br />";
$sql = sed_sql_query("UPDATE ".$cfg['sqldbprefix']."stats SET stat_value=160 WHERE stat_name='version'");

$upg_status = TRUE;

?>
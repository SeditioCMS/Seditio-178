<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
https://seditio.com.tr
[BEGIN_SED]
File=upgrade_125_130.php
Version=178
Updated=2022-jun-12
Type=Core.upgrade
Author=Seditio Team
Description=Database upgrade
[END_SED]
==================== */

if ( !defined('SED_CODE') || !defined('SED_ADMIN') ) { die('Wrong URL.'); }

// -----------------

$adminmain .= "-----------------------<br />";

$adminmain .= "Hatayı düzeltme <a href=\"http://www.neocrome.net/plug.php?e=tracker&m=bview&pr=1&id=450\">#450</a><br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."users CHANGE user_timezone user_timezone VARCHAR(6) NOT NULL DEFAULT '0'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$adminmain .= "-----------------------<br />";

$adminmain .= "Hatayı düzeltme <a href=\"http://www.neocrome.net/plug.php?e=tracker&m=bview&pr=1&id=441\">#441</a><br />";
$sqlqr = "UPDATE ".$cfg['sqldbprefix']."parser SET parser_code1='".sed_sql_prep('<a href="page.php?id=$1">$2</a>')."' WHERE parser_title='Page 2'";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$adminmain .= "-----------------------<br />";

$adminmain .= "Yeni üyeler için varsayılan bir ülke belirleme seçeneği ekleme (Yönetici > Yapılandırma > Kullanıcılar)<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default, config_text) VALUES ('core', 'users', '02', 'defaultcountry', '1', '', '', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);
$adminmain .= "-----------------------<br />";

$adminmain .= "SQL sürüm numarasını değiştirme 130...<br />";
$sql = sed_sql_query("UPDATE ".$cfg['sqldbprefix']."stats SET stat_value=130 WHERE stat_name='version'");
$adminmain .= "-----------------------<br />";

$upg_status = TRUE;


?>
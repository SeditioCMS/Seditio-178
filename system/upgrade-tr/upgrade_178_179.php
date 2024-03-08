<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
https://seditio.com.tr
[BEGIN_SED]
File=upgrade_178_179.php
Version=179
Updated=2022-jul-08
Type=Core.upgrade
Author=Seditio Team
Description=Database upgrade
[END_SED]
==================== */

if ( !defined('SED_CODE') || !defined('SED_ADMIN') ) { die('Wrong URL.'); }

$adminmain .= "Dahili SQL önbelleğini temizleme...<br />";
$sql = sed_sql_query("TRUNCATE TABLE ".$cfg['sqldbprefix']."cache");

$adminmain .= "Tablo anketlerine 'poll_ownerid' sütununu ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."polls ADD poll_ownerid int(11) NOT NULL DEFAULT '0' AFTER poll_text";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr); 

$adminmain .= "-----------------------<br />";

$adminmain .= "SQL sürüm numarasını değiştirme 179...<br />";      

$sql = sed_sql_query("UPDATE ".$cfg['sqldbprefix']."stats SET stat_value=179 WHERE stat_name='version'");
$upg_status = TRUE;

?>

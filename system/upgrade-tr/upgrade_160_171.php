<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
https://seditio.org
[BEGIN_SED]
File=upgrade_160_171.php
Version=178
Updated=2022-jun-12
Type=Core.upgrade
Author=Seditio Team
Description=Database upgrade
[END_SED]
==================== */

if ( !defined('SED_CODE') || !defined('SED_ADMIN') ) { die('Wrong URL.'); }


// ========================================

$adminmain .= "Kullanıcı tablosundan günlükler için 2 sütunu temizleme...<br />";

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pages DROP `user_jrnpagescount`";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr, FALSE);

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pages DROP `user_jrnupdated`";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr, FALSE);

$adminmain .= "Dahili SQL önbelleğini temizleme...<br />";
$sql = sed_sql_query("TRUNCATE TABLE ".$cfg['sqldbprefix']."cache");

$adminmain .= "SQL sürüm numarasını değiştirme 171...<br />";
$sql = sed_sql_query("UPDATE ".$cfg['sqldbprefix']."stats SET stat_value=171 WHERE stat_name='version'");

$upg_status = TRUE;

?>
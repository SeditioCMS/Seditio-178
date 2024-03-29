<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
https://seditio.com.tr
[BEGIN_SED]
File=upgrade_173_175.php
Version=178
Updated=2013-jun-25
Type=Core.upgrade
Author=Seditio Team
Description=Database upgrade
[END_SED]
==================== */

if ( !defined('SED_CODE') || !defined('SED_ADMIN') ) { die('Wrong URL.'); }

$adminmain .= "Dahili SQL önbelleğini temizleme...<br />";
$sql = sed_sql_query("TRUNCATE TABLE ".$cfg['sqldbprefix']."cache");

//Eklentiyi yeniden yükleyin CKeditor

if ($cfg['textmode'] == "html")
    {      
      $adminmain .= "Eklenti Ckeditor'u yeniden yükleNİYOR<br />";
      $adminmain .= sed_plugin_uninstall('ckeditor');          
      $adminmain .= sed_plugin_install('ckeditor');
    }

// Kullanıcı grubu rengi
	
$adminmain .= "Tablo kullanıcı gruplarına 'grp_color' sütununu ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."groups ADD grp_color varchar(24) NOT NULL DEFAULT 'inherit' AFTER grp_icon";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "'color_group' yeni yapılandırmasını çekirdeğe ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'users', '10', 'color_group', 3, '0', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

// Bakım Modu

$adminmain .= "Çekirdeğe 'bakım' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'main', '21', 'maintenance', 3, '0', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Çekirdeğe 'bakım düzeyi' yeni yapılandırma ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'main', '22', 'maintenancelevel', 2, '95', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Çekirdeğe 'bakım nedeni' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'main', '23', 'maintenancereason', 1, 'The site is in maintenance mode!', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);     

// BB ayrıştırıcı tablosunu yeniden yükleyin

$adminmain .= "Tabloyu yeniden yükle ".$cfg['sqldbprefix']."parser<br />";
$sqlqr = "TRUNCATE TABLE ".$cfg['sqldbprefix']."parser";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$lines = file("system/install/install.parser.sql");
foreach($lines as $line)
	{
	$line = str_replace('sed_', $cfg['sqldbprefix'], $line);      //???
	sed_sql_query($line);
	}  

// SEF URL's

$adminmain .= "Çekirdeğe 'absurls' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'main', '04', 'absurls', 3, '0', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Çekirdeğe 'çoklu ana bilgisayar' yeni yapılandırma ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'main', '03', 'multihost', 3, '1', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);	
	
$adminmain .= "Çekirdeğe 'sefurls' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'main', '04', 'sefurls', 3, '0', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "Çekirdeğe 'sefurls301' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'main', '04', 'sefurls301', 3, '0', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

// Tablolardaki sütunların uzunluğunu değiştirme

$adminmain .= "Tablolardaki sütunların uzunluğunu değiştirme<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."structure MODIFY structure_title VARCHAR(100)";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."structure MODIFY structure_code VARCHAR(255)";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."structure MODIFY structure_path VARCHAR(255)";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pages MODIFY page_alias VARCHAR(255)";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pages MODIFY page_cat VARCHAR(255)";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."auth MODIFY auth_code VARCHAR(255)";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."auth MODIFY auth_option VARCHAR(255)";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);    

// PFS Upgrade

$adminmain .= "'pfs_title' sütununu tablo kullanıcı gruplarına ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pfs ADD pfs_title varchar(255) NOT NULL DEFAULT '' AFTER pfs_folderid";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "'pfs_desc_ishtml' sütununu tablo kullanıcı gruplarına ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pfs ADD pfs_desc_ishtml tinyint(1) DEFAULT '1' AFTER pfs_desc";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "'pff_desc_ishtml' sütununu tablo kullanıcı gruplarına ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pfs_folders ADD pff_desc_ishtml tinyint(1) DEFAULT '1' AFTER pff_desc";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pfs_folders MODIFY pff_desc TEXT";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr); 

$sqlqr = "SELECT pfs_id, pfs_desc FROM ".$cfg['sqldbprefix']."pfs";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

while ($pfs = sed_sql_fetchassoc($sql)) 
{
  $pfs_title = strip_tags(mb_substr($pfs['pfs_desc'], 0, 255));
  $sql_update = sed_sql_query("UPDATE ".$cfg['sqldbprefix']."pfs SET pfs_title = '".sed_sql_prep($pfs_title)."' WHERE pfs_id =".$pfs['pfs_id']); 
}

// Yapı Yükseltmesi

$adminmain .= "Tablo yapısına 'yapı metni' sütununu ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."structure ADD structure_text TEXT AFTER structure_desc";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$adminmain .= "'struct_text_ishtml' sütununu tablo yapısına ekleme...<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."structure ADD structure_text_ishtml tinyint(1) DEFAULT '1' AFTER structure_text";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

// Kullanıcılar yükseltme

$adminmain .= "'user_msn' silin ve tablo kullanıcılarına 'user_skype' sütunu ekleyin<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."users ADD user_skype varchar(64) AFTER user_msn";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."users DROP user_msn";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

// Yorum yükseltme

$adminmain .= "Çekirdeğe 'maxcommentlenght' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'comments', '07', 'maxcommentlenght', 1, '2000', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr); 

// Sayfalar SEO yükseltmesi

$adminmain .= "Tablo sayfalarına 'page_seo_title', 'page_seo_desc' ve 'page_seo_keywords' sütunları ekleyin<br />";
$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pages ADD page_seo_title varchar(255) AFTER page_alias";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr); 

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pages ADD page_seo_desc varchar(255) AFTER page_seo_title";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "ALTER TABLE ".$cfg['sqldbprefix']."pages ADD page_seo_keywords varchar(255) AFTER page_seo_desc";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

// Meta başlık, yeni yapılandırmalar

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'meta', '01', 'defaulttitle', 1, '{MAINTITLE} - {SUBTITLE}', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr); 

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'meta', '02', 'listtitle', 1, '{MAINTITLE} - {TITLE}', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'meta', '03', 'pagetitle', 1, '{MAINTITLE} - {TITLE}', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr); 

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'meta', '04', 'forumstitle', 1, '{MAINTITLE} - {TITLE}', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr); 

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'meta', '05', 'userstitle', 1, '{MAINTITLE} - {TITLE}', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'meta', '06', 'pmtitle', 1, '{MAINTITLE} - {TITLE}', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'meta', '07', 'gallerytitle', 1, '{MAINTITLE} - {TITLE}', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr); 

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'meta', '08', 'pfstitle', 1, '{MAINTITLE} - {TITLE}', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);

$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'meta', '09', 'plugtitle', 1, '{MAINTITLE} - {TITLE}', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr); 

// AJAX yapılandırması

$adminmain .= "Çekirdeğe 'ajax' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'main', '13', 'ajax', 3, '0', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);  

// Kalıcı pencere yapılandırması

$adminmain .= "Çekirdeğe 'enablemodal' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'main', '14', 'enablemodal', 3, '0', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr); 

// Küçük resim rel özelliği

$adminmain .= "Çekirdeğe 'th_rel' yeni yapılandırmasını ekleme<br />";
$sqlqr = "INSERT INTO ".$cfg['sqldbprefix']."config (config_owner, config_cat, config_order, config_name, config_type, config_value, config_default)
VALUES ('core', 'pfs', '10', 'th_rel', 2, 'sedthumb', '')";
$adminmain .= sed_cc($sqlqr)."<br />";
$sql = sed_sql_query($sqlqr);  

$adminmain .= "SQL sürüm numarasını değiştirme 175...<br />";
$sql = sed_sql_query("UPDATE ".$cfg['sqldbprefix']."stats SET stat_value=175 WHERE stat_name='version'");

$upg_status = TRUE;

?>
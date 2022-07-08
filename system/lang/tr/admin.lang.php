<?php

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
https://seditiocms.com
-----------------------
Seditio language pack
Language : Türkçe (code:tr)
Localization done by : Kaan
-----------------------
[BEGIN_SED]
File=system/core/admin/lang/tr/admin.lang.php
Version=178
Updated=2022-jun-12
Type=Lang
Author=Seditio Team
Description=Admin panel
[END_SED]
==================== */

/* ====== Core ====== */

$L['core_main'] = "Ana kurulum";
$L['core_parser'] = "Ayrıştırıcı"; 			// New in v120
$L['core_rss'] = "RSS beslemeleri"; 			// New in v173
$L['core_dic'] = "Dizinler ve Ekstra alanlar"; 			// New in v173
$L['core_time'] = "Saat ve tarih";
$L['core_skin'] = "Temalar";
$L['core_lang'] = "Diller";
$L['core_menus'] = "Menü yuvaları";
$L['core_comments'] = "Yorumlar";
$L['core_forums'] = "Forumlar";
$L['core_page'] = "Sayfalar";
$L['core_pfs'] = "Kişisel dosya alanı";
$L['core_gallery'] = "Galeri";
$L['core_plug'] = "Eklentiler";
$L['core_pm'] = "ÖZel mesajlar";
$L['core_polls'] = "Anketler";
$L['core_ratings'] = "Oylamalar";
$L['core_trash'] = "Çöp Kutusu";
$L['core_users'] = "Üyeler";
$L['core_meta'] = "HTML Meta";
$L['core_menu'] = "Menü yöneticisi"; // New in v178

/* ====== Upgrade ====== */

$L['upg_upgrade'] = "Güncelleme";      // New in v130
$L['upg_codeversion'] = "Kod sürümü";     // New in v130
$L['upg_sqlversion'] = "SQL veritabanı sürümü";    // New in v130
$L['upg_codeisnewer'] = "Kod, SQL sürümünden daha yeni.";    // New in v130
$L['upg_codeisolder'] = "Kod SQL sürümünden daha eski, bu olağandışı ve desteklenmiyor.<br />Tüm dosyaları en yeni paketten yüklediğinizi iki kez kontrol etmelisiniz..";    // New in v130
$L['upg_codeissame'] = "Kod ve SQL sürümleri eşleşiyor.";    // New in v130
$L['upg_upgradenow'] = "SQL veritabanını hemen yükseltmeniz şiddetle tavsiye edilir, yükseltmek için buraya tıklayın !";    // New in v130
$L['upg_upgradenotavail'] = "Bu sürüm numaraları için yükseltme yok.";       // New in v130
$L['upg_manual'] = "Veritabanını manuel olarak yükseltmeyi tercih ederseniz, SQL komut dosyaları klasördedir. /docs/upgrade/.";       // New in v130
$L['upg_success'] = "Yükseltme başarılı oldu, devam etmek için burayı tıklayın...";       // New in v130
$L['upg_failure'] = "Yükseltme başarısız oldu, devam etmek için burayı tıklayın...";       // New in v130
$L['upg_force'] = "Bazı nedenlerden dolayı SQL veritabanında yazılan Seditio sürüm numarası yanlış olabilir. Aşağıda SQL sürüm numarasını zorlamak için bir düğme bulunmaktadır, bu yalnızca SQL veritabanını etiketleyecektir, başka bir değişiklik YAPMAYACAKTIR.<br />SQL sürüm numarasını zorla : ";	// New in v130

/* ====== General ====== */

$L['editdeleteentries'] = "Girişleri düzenleyin veya silin";
$L['viewdeleteentries'] = "Girişleri görüntüleyin veya silin";
$L['addnewentry'] = "Yeni bir giriş ekle";
$L['adm_purgeall'] = "Tümünü temizle";
$L['adm_listisempty'] = "Liste boş";
$L['adm_totalsize'] = "Toplam boyut";
$L['adm_showall'] = "Hepsini Göster ↓";
$L['adm_area'] = "Alan";
$L['adm_option'] = "Seçenek";
$L['adm_setby'] = "Olarak ayarla";
$L['adm_more'] = "Daha fazla araç...";
$L['adm_from'] = "From";
$L['adm_to'] = "To";
$L['adm_confirm'] = "Onaylamak için bu düğmeye basın : ";
$L['adm_done'] = "Tamamlandı";
$L['adm_failed'] = "Arızalı";
$L['adm_warnings'] = "Uyarılar";
$L['adm_valqueue'] = "Doğrulama bekleniyor";
$L['adm_required'] = "(Gerekli)";
$L['adm_clicktoedit'] = "(Düzenlemek için tıkla)";
$L['adm_manage'] = "Yönet";  // New in v150
$L['adm_pagemanager'] = "Sayfa yöneticisi";  // New in v177
$L['adm_module_name'] = "Modül Adı";  // New in v178
$L['adm_tool_name'] = "Araç adı";  // New in v178

/* ====== Banlist ====== */

$L['adm_ipmask'] = "IP maskesi";
$L['adm_emailmask'] = "Email maskesi";
$L['adm_neverexpire'] = "Süresiz";
$L['adm_help_banlist'] = "IP maskeleri için örnekler :194.31.13.41 , 194.31.13.* , 194.31.*.* , 194.*.*.*<br />E-posta maskeleri için örnekler : @hotmail.com, @yahoo (Joker karakterler desteklenmez)<br />Tek bir giriş, bir IP maskesi veya bir e-posta maskesi veya her ikisini birden içerebilir.<br />IP'ler, görüntülenen her sayfa için filtrelenir ve e-posta maskeleri yalnızca kullanıcı kaydı sırasında.";

/* ====== Cache ====== */

$L['adm_internalcache'] = "Dahili önbellek";
$L['adm_help_cache'] = "Müsait değil";

/* ====== Configuration ====== */

$L['adm_help_config']= "Müsait değil";
$L['cfg_adminemail'] = array("Administrator's email", "Required");
$L['cfg_maintitle'] = array("Site title", "Main title for the website, required");
$L['cfg_subtitle'] = array("Description", "Optional, will be displayed after the title of the site");
$L['cfg_mainurl'] = array("Site URL", "With http://, and without ending slash !");
$L['cfg_clustermode'] = array("Cluster of servers", "Set to yes if it's a load balanced setup.");			// New in v125
$L['cfg_hostip'] = array("Server IP", "The IP of the server, optional.");
$L['cfg_gzip'] = array("Gzip", "Gzip compression of the HTML output");
$L['cfg_cache'] = array("Internal cache", "Keep it enabled for better performance");
$L['cfg_devmode'] = array("Debugging mode", "Don't let this enabled on live sites");
$L['cfg_doctypeid'] = array("Document Type", "&lt;!DOCTYPE> of the HTML layout");
$L['cfg_charset'] = array("HTML charset", "");
$L['cfg_cookiedomain'] = array("Domain for cookies", "Default: empty");
$L['cfg_cookiepath'] = array("Path for cookies", "Default: empty");
$L['cfg_cookielifetime'] = array("Maximum cookie lifetime", "In seconds");
$L['cfg_metakeywords'] = array("HTML Meta keywords (comma separated)", "Search engines");
$L['cfg_disablesysinfos'] = array("Turn off page creation time", "In footer.tpl");
$L['cfg_keepcrbottom'] = array("Keep the copyright notice in the tag {FOOTER_BOTTOMLINE}", "In footer.tpl");
$L['cfg_showsqlstats'] = array("Show SQL queries statistics", "In footer.tpl");
$L['cfg_shieldenabled'] = array("Enable the Shield", "Anti-spamming and anti-hammering");
$L['cfg_shieldtadjust'] = array("Adjust Shield timers (in %)", "The higher, the harder to spam");
$L['cfg_shieldzhammer'] = array("Anti-hammer after * fast hits", "The smaller, the faster the auto-ban 3 minutes happens");
$L['cfg_maintenance'] = array("Maintenance mode", "Wake up the technical work on the site");  // New in v175
$L['cfg_maintenancelevel'] = array("User Access Level", "Select the level of access users"); // New in v175
$L['cfg_maintenancereason'] = array("Reason maintenance", "Describe the cause of maintenance"); // New in v175
$L['cfg_multihost'] = array("Multihost mode", "To enable multiple hosts");  // New in v175
$L['cfg_absurls'] = array("Absolute URL", "Enables the use of the absolute URL");  // New in v175
$L['cfg_sefurls'] = array("SEF URLs", "To enables SEF URLs on the site");  // New in v175
$L['cfg_sefurls301'] = array("301 redirect to the SEF URLs", "Enable 301 redirect from the old URL to SEF URLs");  // New in v175
$L['cfg_dateformat'] = array("Main date mask", "Default: Y-m-d H:i");
$L['cfg_formatmonthday'] = array("Short date mask", "Default: m-d");
$L['cfg_formatyearmonthday'] = array("Medium date mask", "Default: Y-m-d");
$L['cfg_formatmonthdayhourmin'] = array("Forum date mask", "Default: m-d H:i");
$L['cfg_servertimezone'] = array("Server time zone", "Offset of the server from the GMT+00");
$L['cfg_defaulttimezone'] = array("Default time zone", "For guests and new members, from -12 to +12");
$L['cfg_timedout'] = array("Idle delay, in seconds", "After this delay, user is away");
$L['cfg_maxusersperpage'] = array("Maximum lines in userlist", "");
$L['cfg_regrequireadmin'] = array("Administrators must validate new accounts", "");
$L['cfg_regnoactivation'] = array("Skip email check for new users", "\"No\"recommended, for security reasons");
$L['cfg_useremailchange'] = array("Allow users to change their email address", "\"No\" recommended, for security reasons");
$L['cfg_usertextimg'] = array("Allow images and HTML in user signature", "\"No\" recommended, for security reasons");
$L['cfg_av_maxsize'] = array("Avatar, maximum file size", "Default: 8000 bytes");
$L['cfg_av_maxx'] = array("Avatar, maximum width", "Default: 64 pixels");
$L['cfg_av_maxy'] = array("Avatar, maximum height", "Default: 64 pixels");
$L['cfg_usertextmax'] = array("Maximum length for user signature", "Default: 300 chars");
$L['cfg_sig_maxsize'] = array("Signature, maximum file size", "Default: 50000 bytes");
$L['cfg_sig_maxx'] = array("Signature, maximum width", "Default: 468 pixels");
$L['cfg_sig_maxy'] = array("Signature, maximum height", "Default: 60 pixels");
$L['cfg_ph_maxsize'] = array("Photo, maximum file size", "Default: 8000 bytes");
$L['cfg_ph_maxx'] = array("Photo, maximum width", "Default: 96 pixels");
$L['cfg_ph_maxy'] = array("Photo, maximum height", "Default: 96 pixels");
$L['cfg_maxrowsperpage'] = array("Maximum lines in lists", "");
$L['cfg_showpagesubcatgroup'] = array("Show in groups pages from the subsections", "");   //New Sed171
$L['cfg_genseourls'] = array("Generate SEO url (auto gen* page alias)? ", "");   //New Sed178
$L['cfg_maxcommentsperpage'] = array("Maximum comments per page", "");  //New Sed173
$L['cfg_commentsorder'] = array("Sorting order for comments", "ASC - new bottom, DESC - newest on top");  //New Sed173
$L['cfg_maxtimeallowcomedit'] = array("The time allowed to edit comments", "In minutes, if 0 - editing is prohibited");  //New Sed173
$L['cfg_showcommentsonpage'] = array("Show comments on pages", "By default displays comment on the page");   //New Sed171
$L['cfg_maxcommentlenght'] = array("The maximum length of a comment", "Default: 2000 characters");  //New Sed175
$L['cfg_countcomments'] = array("Count comments", "Display the count of comments near the icon");
$L['cfg_hideprivateforums'] = array("Hide private forums", "");
$L['cfg_hottopictrigger'] = array("Posts for a topic to be 'hot'", "");
$L['cfg_maxtopicsperpage'] = array("Maximum topics or posts per page", "");
$L['cfg_antibumpforums'] = array("Anti-bump protection", "Will prevent users from posting twice in a row in the same topic");
$L['cfg_pfsuserfolder'] = array("Folder storage mode", "If enabled, will store the user files in subfolders /datas/users/USERID/... instead of prepending the USERID to the filename. Must be set at the FIRST setup of the site ONLY. As soon as a file is uploaded to a PFS, it's too late to change this.");
$L['cfg_th_amode'] = array("Thumbnails generation", "");
$L['cfg_th_x'] = array("Thumbnails, width", "Default: 112 pixels");
$L['cfg_th_y'] = array("Thumbnails, height", "Default: 84 pixel, recommended : Width x 0.75");
$L['cfg_th_border'] = array("Thumbnails, border size", "Default: 4 pixels");
$L['cfg_th_keepratio'] = array("Thumbnail, keep ratio ?", "");
$L['cfg_th_jpeg_quality'] = array("Thumbnails, Jpeg quality", "Default: 85");
$L['cfg_th_colorbg'] = array("Thumbnails, border color", "Default: 000000, hex color code");
$L['cfg_th_colortext'] = array("Thumbnails, text color", "Default: FFFFFF, hex color code");
$L['cfg_th_rel'] = array("Thumbnail rel attribute", "Default: sedthumb"); // New in v175
$L['cfg_th_dimpriority'] = array("Thumbnails, resize by", "Default: Width");       // New in v160
$L['cfg_th_textsize'] = array("Thumbnails, size of the text", "");
$L['cfg_pfs_filemask'] = array("File names based on pattern of time", "Generate file names on a pattern of time");  // New in sed172

$L['cfg_disable_gallery'] = array("Disable the gallery", "");     	// New in v150
$L['cfg_gallery_gcol'] = array("Number of columns for the galleries", "Default : 4");     // New in v150
$L['cfg_gallery_bcol'] = array("Number of columns for the pictures", "Default : 6");    	// New in v150
$L['cfg_gallery_logofile'] = array("Png/jpeg/Gif logo that will be added to all the new PFS images", "Leave empty to disable");    	// New in v150
$L['cfg_gallery_logopos'] = array("Position of the logo in the PFS images", "Default : Bottom left");    	// New in v150
$L['cfg_gallery_logotrsp'] = array("Merging level for the logo in %", "Default : 50");    	// New in v150
$L['cfg_gallery_logojpegqual'] = array("Quality of the final image afer the logo is inserted, if it's a Jpeg", "Default : 90");    	// New in v150
$L['cfg_gallery_imgmaxwidth'] = array("Max width in pixel for a picture displayed, if it's larger a sized-down copy will be processed", "");     	// New in v150

$L['cfg_pm_maxsize'] = array("Maximum length for messages", "Default: 10000 chars");
$L['cfg_pm_allownotifications'] = array("Allow PM notifications by email", "");
$L['cfg_disablehitstats'] = array("Disable hit statistics", "Referers and hits per day");
$L['cfg_disablereg'] = array("Disable registration process", "Prevent users from registering new accounts");
$L['cfg_disablewhosonline'] = array("Disable who's online", "Automatically enabled if you turn on the Shield");
$L['cfg_defaultcountry'] = array("Default country for the new users", "2 letters country code");	// New in v130
$L['cfg_forcedefaultskin'] = array("Force the default skin for all users", "");
$L['cfg_forcedefaultlang'] = array("Force the default language for all users", "");
$L['cfg_separator'] = array("Generic separator", "Default:>");
$L['cfg_menu1'] = array("Menu slot #1<br />{PHP.cfg.menu1} in all tpl files", "");
$L['cfg_menu2'] = array("Menu slot #2<br />{PHP.cfg.menu2} in all tpl files", "");
$L['cfg_menu3'] = array("Menu slot #3<br />{PHP.cfg.menu3} in all tpl files", "");
$L['cfg_menu4'] = array("Menu slot #4<br />{PHP.cfg.menu4} in all tpl files", "");
$L['cfg_menu5'] = array("Menu slot #5<br />{PHP.cfg.menu5} in all tpl files", "");
$L['cfg_menu6'] = array("Menu slot #6<br />{PHP.cfg.menu6} in all tpl files", "");
$L['cfg_menu7'] = array("Menu slot #7<br />{PHP.cfg.menu7} in all tpl files", "");
$L['cfg_menu8'] = array("Menu slot #8<br />{PHP.cfg.menu8} in all tpl files", "");
$L['cfg_menu9'] = array("Menu slot #9<br />{PHP.cfg.menu9} in all tpl files", "");
$L['cfg_topline'] = array("Top line<br />{HEADER_TOPLINE} in header.tpl", "");
$L['cfg_banner'] = array("Banner<br />{HEADER_BANNER} in header.tpl", "");
$L['cfg_motd'] = array("Message of the day<br />{NEWS_MOTD} in index.tpl", "");
$L['cfg_bottomline'] = array("Bottom line<br />{FOOTER_BOTTOMLINE} in footer.tpl", "");
$L['cfg_freetext1'] = array("Freetext Slot #1<br />{PHP.cfg.freetext1} in all tpl files", "");
$L['cfg_freetext2'] = array("Freetext Slot #2<br />{PHP.cfg.freetext2} in all tpl files", "");
$L['cfg_freetext3'] = array("Freetext Slot #3<br />{PHP.cfg.freetext3} in all tpl files", "");
$L['cfg_freetext4'] = array("Freetext Slot #4<br />{PHP.cfg.freetext4} in all tpl files", "");
$L['cfg_freetext5'] = array("Freetext Slot #5<br />{PHP.cfg.freetext5} in all tpl files", "");
$L['cfg_freetext6'] = array("Freetext Slot #6<br />{PHP.cfg.freetext6} in all tpl files", "");
$L['cfg_freetext7'] = array("Freetext Slot #7<br />{PHP.cfg.freetext7} in all tpl files", "");
$L['cfg_freetext8'] = array("Freetext Slot #8<br />{PHP.cfg.freetext8} in all tpl files", "");
$L['cfg_freetext9'] = array("Freetext Slot #9<br />{PHP.cfg.freetext9} in all tpl files", "");
$L['cfg_extra1title'] = array("Field #1 (String), title", "");
$L['cfg_extra2title'] = array("Field #2 (String), title", "");
$L['cfg_extra3title'] = array("Field #3 (String), title", "");
$L['cfg_extra4title'] = array("Field #4 (String), title", "");
$L['cfg_extra5title'] = array("Field #5 (String), title", "");
$L['cfg_extra6title'] = array("Field #6 (Select box), title", "");
$L['cfg_extra7title'] = array("Field #7 (Select box), title", "");
$L['cfg_extra8title'] = array("Field #8 (Select box), title", "");
$L['cfg_extra9title'] = array("Field #9 (Long text), title", "");
$L['cfg_extra1tsetting'] = array("Maximum characters in this field", "");
$L['cfg_extra2tsetting'] = array("Maximum characters in this field", "");
$L['cfg_extra3tsetting'] = array("Maximum characters in this field", "");
$L['cfg_extra4tsetting'] = array("Maximum characters in this field", "");
$L['cfg_extra5tsetting'] = array("Maximum characters in this field", "");
$L['cfg_extra6tsetting'] = array("Values for the select box, comma separated", "");
$L['cfg_extra7tsetting'] = array("Values for the select box, comma separated", "");
$L['cfg_extra8tsetting'] = array("Values for the select box, comma separated", "");
$L['cfg_extra9tsetting'] = array("Maximum length for the text", "");
$L['cfg_extra1uchange'] = array("Editable in user profile ?", "");
$L['cfg_extra2uchange'] = array("Editable in user profile ?", "");
$L['cfg_extra3uchange'] = array("Editable in user profile ?", "");
$L['cfg_extra4uchange'] = array("Editable in user profile ?", "");
$L['cfg_extra5uchange'] = array("Editable in user profile ?", "");
$L['cfg_extra6uchange'] = array("Editable in user profile ?", "");
$L['cfg_extra7uchange'] = array("Editable in user profile ?", "");
$L['cfg_extra8uchange'] = array("Editable in user profile ?", "");
$L['cfg_extra9uchange'] = array("Editable in user profile ?", "");
$L['cfg_disable_comments'] = array("Disable the comments", "");
$L['cfg_disable_forums'] = array("Disable the forums", "");
$L['cfg_disable_pfs'] = array("Disable the PFS", "");
$L['cfg_disable_polls'] = array("Disable the polls", "");
$L['cfg_disable_pm'] = array("Disable the private messages", "");
$L['cfg_disable_ratings'] = array("Disable the ratings", "");
$L['cfg_disable_page'] = array("Disable the pages", "");
$L['cfg_disable_plug'] = array("Disable the plugins", "");
$L['cfg_trash_prunedelay'] = array("Remove the items from the trash can after * days (Zero to keep forever)", ""); 	
$L['cfg_trash_comment'] = array("Use the trash can for the comments", "");		
$L['cfg_trash_forum'] = array("Use the trash can for the forums", "");		
$L['cfg_trash_page'] = array("Use the trash can for the pages", "");		
$L['cfg_trash_pm'] = array("Use the trash can for the private messages", "");		
$L['cfg_trash_user'] = array("Use the trash can for the users", "");

$L['cfg_parser_vid'] = array("Allow BBcodes for the videos", "");		// New in v120
$L['cfg_parser_vid_autolink'] = array("Auto-link URLs to known video sites", "");						// New in v120
$L['cfg_parsebbcodecom'] = array("Parse BBcode in comments and private messages", "");
$L['cfg_parsebbcodepages'] = array("Parse BBcode in pages", "");
$L['cfg_parsebbcodeusertext'] = array("Parse BBcode in user signature", "");
$L['cfg_parsebbcodeforums'] = array("Parse BBcode in forums", "");
$L['cfg_parsesmiliescom'] = array("Parse smilies in comments and private messages", "");
$L['cfg_parsesmiliespages'] = array("Parse smilies in pages", "");
$L['cfg_parsesmiliesusertext'] = array("Parse smilies in user signature", "");
$L['cfg_parsesmiliesforums'] = array("Parse smilies in forums", "");

$L['cfg_color_group'] = array("Colorize group of users", "Default: No, for better performance");  // New in v175

$L['cfg_ajax'] = array("Enable AJAX", "");  // New in v175
$L['cfg_enablemodal'] = array("Enable modal windows", "");  // New in v175

/* ====== HTML Meta ====== */

$L['cfg_defaulttitle'] = array("Default Title", "Available options: {MAINTITLE}, {SUBTITLE}");		//Sed 175
$L['cfg_listtitle'] = array("Title for lists of pages", "Available options: {MAINTITLE}, {SUBTITLE}, {TITLE}");		//Sed 175
$L['cfg_pagetitle'] = array("Title for pages", "Available options: {MAINTITLE}, {SUBTITLE}, {TITLE}, {CATEGORY}");		//Sed 175
$L['cfg_forumstitle'] = array("Title for forums", "Available options: {MAINTITLE}, {SUBTITLE}, {TITLE}");		//Sed 175
$L['cfg_userstitle'] = array("Title for users", "Available options: {MAINTITLE}, {SUBTITLE}, {TITLE}");		//Sed 175
$L['cfg_pmtitle'] = array("Title for PM", "Available options: {MAINTITLE}, {SUBTITLE}, {TITLE}");		//Sed 175
$L['cfg_gallerytitle'] = array("Title for gallery", "Available options: {MAINTITLE}, {SUBTITLE}, {TITLE}");		//Sed 175
$L['cfg_pfstitle'] = array("Title for PFS", "Available options: {MAINTITLE}, {SUBTITLE}, {TITLE}");		///Sed 175
$L['cfg_plugtitle'] = array("Title for plugins", "Available options: {MAINTITLE}, {SUBTITLE}, {TITLE}");		///Sed 175

/* ====== Rss ====== */

$L['cfg_disable_rss'] = array("RSS devre dışı bırak", "");
$L['cfg_disable_rsspages'] = array("Sayfalar için RSS devre dışı bırak", "");
$L['cfg_disable_rsscomments'] = array("Yorumlar için RSS devre dışı bırak", "");
$L['cfg_disable_rssforums'] = array("Forumlar için RSS devre dışı bırak", "");
$L['cfg_rss_timetolive'] = array("RSS için zaman", "saniyeler içinde");
$L['cfg_rss_defaultcode'] = array("Varsayılan RSS", "kategori kodunu girin");
$L['cfg_rss_maxitems'] = array("RSS maksimum satır sayısı", "");

$L['adm_help_config_rss'] = "RSS açmak için bağlantılar: <br />".$cfg['mainurl']."/"."rss (varsayılan olarak, ayarlarda belirtilen haber kategorilerinin çıktısı) 
<br /> ".$cfg['mainurl']."/"."rss/pages?c=XX (XX - Kategori kodu, kategorinin son sayfaları) 
<br />".$cfg['mainurl']."/"."rss/comments?id=XX (XX - ID sayfa, yorum sayfası) <br />".$cfg['mainurl']."/"."rss/forums (forumun tüm bölümlerinden en son gönderiler) 
<br />".$cfg['mainurl']."/"."rss/forums?s=XX (XX - ID section, recent posts section) <br />".$cfg['mainurl']."/"."rss/forums?q=XX (XX - ID topic, konuyla ilgili son gönderiler) 
<br />".$cfg['mainurl']."/"."rss/forums?s=XX&q=YY (XX - ID section, YY - ID topic)";

/* ====== Forums ====== */

$L['adm_diplaysignatures'] = "İmzaları görüntüle";
$L['adm_enablebbcodes'] = "BBcode'ları Etkinleştir";
$L['adm_enablesmilies'] = "İfadeleri etkinleştir";
$L['adm_enableprvtopics'] = "Özel konulara izin ver";
$L['adm_countposts'] = "Gönderileri say";
$L['adm_autoprune'] = "Konuları * gün sonra Auto-prune";
$L['adm_postcounters'] = "Sayaçları kontrol edin";
$L['adm_help_forums'] = "Müsait değil";
$L['adm_forum_structure'] = "Forumların yapısı (kategoriler)";	
$L['adm_forum_structure_cat'] = "Forumların yapısı";	
$L['adm_help_forums_structure'] = "Müsait değil";	
$L['adm_defstate'] = "Varsayılan durum";	
$L['adm_defstate_0'] = "Katlanmış";	
$L['adm_defstate_1'] = "Açılmış";
$L['adm_parentcat'] = "Alt kategorisi";	// New in v172	


/* ====== IP search ====== */

$L['adm_searchthisuser'] = "Bu IP'yi kullanıcı veritabanında arayın";
$L['adm_dnsrecord'] = "Bu adres için DNS kaydı";

/* ====== Smilies ====== */

$L['adm_help_smilies'] = "Müsait değil";

/* ====== Dictionary ====== */

$L['adm_dic_list'] = "Dizin listesi";
$L['adm_dictionary'] = "Dizin";
$L['adm_dic_title'] = "Dizinin başlığı";
$L['adm_dic_code'] = "Dizinin kodu (ek alan adı)";
$L['adm_dic_list'] = "Dizinlerin listesi";
$L['adm_dic_term_list'] = "Terimler listesi";
$L['adm_dic_add'] = "Yeni dizin ekle";
$L['adm_dic_edit'] = "Dizini düzenle";
$L['adm_dic_add_term'] = "Yeni bir terim ekle";
$L['adm_dic_term_title'] = "Terimin başlığı";
$L['adm_dic_term_value'] = "Terimin değeri";
$L['adm_dic_term_defval'] = "Bir terimi varsayılan yap?";
$L['adm_dic_term_edit'] = "Dizinden terimi düzenle";
$L['adm_dic_children'] = "Alt dizini";

$L['adm_dic_mera'] = "Birim";
$L['adm_dic_values'] = "Dizin için değer listesi";

$L['adm_dic_form_title'] = "Form öğesi için başlık";
$L['adm_dic_form_desc'] = "Form öğesi için metin";
$L['adm_dic_form_size'] = "Metin alanının boyutu";
$L['adm_dic_form_maxsize'] = "Metin alanının maksimum boyutu";
$L['adm_dic_form_cols'] = "Metin alanının sütunları";
$L['adm_dic_form_rows'] = "Metin alanı satırları";

$L['adm_dic_extra'] = "Ekstra alan";
$L['adm_dic_addextra'] = "Ekstra alan ekle";
$L['adm_dic_editextra'] = "Ekstra alanı düzenle";
$L['adm_dic_extra_location'] = "Tablonun adı";
$L['adm_dic_extra_type'] = "Alanın veri türü";
$L['adm_dic_extra_size'] = "Alan uzunluğu";

$L['adm_dic_comma_separat'] = "(values comma separated)";

/* ====== Menu manager ====== */

$L['adm_menuitems'] = "Menü Girişleri";
$L['adm_additem'] = "Menü Ekle";
$L['adm_position'] = "Yol";
$L['adm_confirm_delete'] = "Silmeyi onayla?";
$L['adm_addmenuitem'] = "Menü öğesi ekle";
$L['adm_editmenuitem'] = "Menü öğesini düzenle";
$L['adm_parentitem'] = "Menü kategorisi";
$L['adm_url'] = "URL";
$L['adm_activity'] = "Aktif?";

/* ====== PFS ====== */

$L['adm_gd'] = "GD grafik kitaplığı";
$L['adm_allpfs'] = "Tüm PFS";
$L['adm_allfiles'] = "Tüm dosyalar";
$L['adm_thumbnails'] = "Küçük resimler";
$L['adm_orphandbentries'] = "Orphan DB girişleri";
$L['adm_orphanfiles'] = "Orphan dosyalar";
$L['adm_delallthumbs'] = "Tüm küçük resimleri sil";
$L['adm_rebuildallthumbs']= "Tüm küçük resimleri silin ve yeniden oluşturun";
$L['adm_help_pfsthumbs'] = "Müsait değil";
$L['adm_help_check1'] = "Müsait değil";
$L['adm_help_check2'] = "Müsait değil";
$L['adm_help_pfsfiles'] = "Müsait değil";
$L['adm_help_allpfs'] = "Müsait değil";
$L['adm_nogd'] = "GD grafik kitaplığı bu ana bilgisayar tarafından desteklenmiyor, Seditio, PFS görüntüleri için küçük resimler oluşturamayacak. 
Yapılandırma paneline, 'Kişisel Dosya Alanı' sekmesine girmelisiniz, ve Küçük Resim oluşturmayı ayarlayın = 'Kapalı'.";

/* ====== Pages ====== */

$L['adm_structure'] = "Sayfaların yapısı (kategoriler)";
$L['adm_syspages'] = "'Sistem' kategorisini görüntüleyin";
$L['adm_help_page'] = "'Sistem' kategorisine ait sayfalar genel listelerde gösterilmez, bağımsız sayfalar yapmak içindir..";
$L['adm_sortingorder'] = "Kategoriler için varsayılan bir sıralama düzeni belirleyin";
$L['adm_fileyesno'] = "Dosya (evet/hayır)";
$L['adm_fileurl'] = "Dosya URL'si";
$L['adm_filesize'] = "Dosya boyutu";
$L['adm_filecount'] = "Dosya indirilme sayısı";

$L['adm_tpl_mode'] = "Şablon modu";	
$L['adm_tpl_empty'] = "Varsayılan";	
$L['adm_tpl_forced'] = "İle aynı";	
$L['adm_tpl_parent'] = "Ana kategoriyle aynı";	

$L['adm_enablecomments'] = "Yorumları Etkinleştir";   // New v173
$L['adm_enableratings'] = "Derecelendirmeleri Etkinleştir";     // New v173

/* ====== Polls ====== */

$L['adm_help_polls'] = "Yeni bir anket konusu oluşturduktan sonra, bu anket için seçenek (seçenekler) eklemek için 'Düzenle'yi seçin.<br />
'Sil' seçilen anketi, seçenekleri ve ilgili tüm oyları siler.<br />
'Sıfırla' seçilen anket için tüm oyları siler. Anketin kendisini veya seçenekleri silmez.<br />
'Bump', anket oluşturma tarihini geçerli tarihe değiştirecek ve böylece anketi listenin en üstünde 'geçerli' yapacaktır..";
$L['adm_poll_title'] = "Anket başlığı";

/* ====== Statistics ====== */

$L['adm_phpver'] = "PHP sürümü";
$L['adm_zendver'] = "Zend sürümü";
$L['adm_interface'] = "Web sunucusu ve PHP arasındaki arayüz";
$L['adm_os'] = "İşletim sistemi";
$L['adm_clocks'] = "Saatler";
$L['adm_time1'] = "#1 : Ham sunucu zamanı";
$L['adm_time2'] = "#2 : Sunucu tarafından döndürülen GMT zamanı";
$L['adm_time3'] = "#3 : GMT zamanı + sunucu ofseti (Seditio referansı)";
$L['adm_time4'] = "#4 : Profilinizden ayarlanan yerel saatiniz";
$L['adm_help_versions'] = "3 numaralı saatin doğru şekilde ayarlanması için Sunucu saat dilimini ayarlayın.<br />
4 numaralı saat, profilinizdeki saat dilimi ayarına bağlıdır.<br />1 ve 2 numaralı saatler Seditio tarafından yok sayılır.";
$L['adm_log'] = "Sistem günlüğü";
$L['adm_infos'] = "Bilgiler";
$L['adm_versiondclocks'] = "Sürümler ve saatler";
$L['adm_checkcoreskins'] = "Çekirdek dosyaları ve dış görünümleri kontrol edin";
$L['adm_checkcorenow'] = "Çekirdek dosyaları şimdi kontrol edin !";
$L['adm_checkingcore'] = "Çekirdek dosyaları kontrol ediliyor...";
$L['adm_checkskins'] = "Tüm tema dosyalarının var olduğunu kontrol edin";
$L['adm_checkskin'] = "Tema için TPL dosyalarını kontrol edin";
$L['adm_checkingskin'] = "Tema kontrol ediliyor...";
$L['adm_hits'] = "Hit";
$L['adm_check_ok'] = "Ok";
$L['adm_check_missing'] = "Eksik";
$L['adm_ref_lowhits'] = "5'ten düşük olan girişleri temizle";
$L['adm_maxhits'] = "Maksimum isabet sayısına ulaşıldı %1\$s, %2\$s bu gün görüntülenen sayfalar."; 
$L['adm_byyear'] = "Yıla göre"; 		
$L['adm_bymonth'] = "Ay'a göre"; 	
$L['adm_byweek'] = "Haftaya göre"; 		

/* ====== Ratings ====== */

$L['adm_ratings_totalitems'] = "Puanlanan toplam sayfa sayısı";
$L['adm_ratings_totalvotes'] = "Toplam oy";
$L['adm_help_ratings'] = "Bir derecelendirmeyi sıfırlamak için silmeniz yeterlidir. İlk yeni oylama ile yeniden oluşturulacak.";

/* ====== Trash can ====== */

$L['adm_help_trashcan'] = "Kullanıcılar ve moderatörler tarafından en son silinen öğeler burada listelenmiştir..
<br />Bir forum konusunu geri yüklemenin, konuya ait tüm gönderileri de geri yükleyeceğini unutmayın..<br />
Silinen bir konudaki bir gönderiyi geri yüklemek, tüm konuyu (varsa) ve tüm alt gönderileri geri yükleyecektir..
<br />&nbsp;<br />Sil : Öğeyi sonsuza kadar sil.<br />Eski haline getir : Öğeyi veritabanına geri koyun."; 

/* ====== Users ====== */

$L['adm_defauth_members'] = "Üyeler için varsayılan haklar";
$L['adm_deflock_members'] = "Üyeler için maskeyi kilitle";
$L['adm_defauth_guests'] = "Misafirler için varsayılan haklar";
$L['adm_deflock_guests'] = "Misafirler için maskeyi kilitle";
$L['adm_rightspergroup'] = "Grup başına haklar";
$L['adm_copyrightsfrom'] = "Grupla aynı hakları ayarlayın";
$L['adm_maxsizesingle'] = "Tek bir dosya için maksimum PFS boyutu (KB)";
$L['adm_maxsizeallpfs'] = "Tüm PFS dosyalarının maksimum boyutu (KB)";
$L['adm_rights_allow10'] = "İzin verildi";
$L['adm_rights_allow00'] = "Reddedildi";
$L['adm_rights_allow11'] = "Güvenlik nedeniyle izin verildi ve kilitlendi";
$L['adm_rights_allow01'] = "Güvenlik nedeniyle reddedildi ve kilitlendi";
$L['adm_color'] = "Grup için renk"; // New in v175

/* ====== Plugins ====== */

$L['adm_extplugins'] = "Genişletilmiş eklentiler";
$L['adm_present'] = "Mevcut";
$L['adm_missing'] = "Eksik";
$L['adm_paused'] = "Duraklatıldı";
$L['adm_running'] = "Çalışan";
$L['adm_partrunning'] = "Kısmen çalışıyor";
$L['adm_notinstalled'] = "Yüklü değil";

$L['adm_opt_installall'] = "Hepsini yükle";
$L['adm_opt_installall_explain'] = "Bu, eklentinin tüm parçalarını yükleyecek veya sıfırlayacaktır..";
$L['adm_opt_uninstallall'] = "Hepsini kaldır";
$L['adm_opt_uninstallall_explain'] = "Bu, eklentinin tüm bölümlerini devre dışı bırakır, ancak dosyaları fiziksel olarak kaldırmaz.";
$L['adm_opt_pauseall'] = "Hepsini durdur";
$L['adm_opt_pauseall_explain'] = "Bu, eklentinin tüm bölümlerini duraklatacak (devre dışı bırakacaktır).";
$L['adm_opt_unpauseall'] = "Tümünü çalıştır";
$L['adm_opt_unpauseall_explain'] = "Bu, eklentinin tüm bölümlerini çalıştıracak (etkinleştirecek).";

/* ====== Private messages ====== */

$L['adm_pm_totaldb'] = "Veritabanındaki özel mesajlar";
$L['adm_pm_totalsent'] = "Şimdiye kadar gönderilen toplam özel mesaj";

?>

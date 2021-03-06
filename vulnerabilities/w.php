<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["w3-total-cache"] = array(
	"1" => array(
		"FirstVersion" => "0.9.4",
		"LastVersion" => "0.9.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://vexatioustendencies.com/wordpress-plugin-vulnerability-dump-part-2/"
	),
	"2" => array(
		"FirstVersion" => "0.9.0",
		"LastVersion" => "0.9.4",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.secuvera.de/advisories/secuvera-SA-2014-01.txt"
	),
	"3" => array(
		"FirstVersion" => "0.9.2.6",
		"LastVersion" => "0.9.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "http://mazinahmed1.blogspot.com/2014/12/w3-total-caches-w3totalfail.html"
	),
);

$plugin_vulnerabilities["watu"] = array(
	"1" => array(
		"FirstVersion" => "2.3.6",
		"LastVersion" => "2.5.0.1",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/watu-249-xss.html"
	),
);

$plugin_vulnerabilities["website-contact-form-with-file-upload"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.3.4",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.homelab.it/index.php/2015/04/12/wordpress-n-media-website-contact-form-shell-upload/"
	),
	"2" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.5",
		"TypeOfVulnerability" => "local file inclusion (LFI)",
		"URL" => "http://www.milw00rm.com/exploits/9052"
	),
);

$plugin_vulnerabilities["white-label-cms"] = array(
	"1" => array(
		"FirstVersion" => "1.5",
		"LastVersion" => "1.5.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://research.g0blin.co.uk/g0blin-00047/"
	),
);

$plugin_vulnerabilities["woocommerce"] = array(
	"1" => array(
		"FirstVersion" => "2.1.0",
		"LastVersion" => "2.2.2",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/reflected-xss-in-woocommerce-excelling-ecommerce-allows-attackers-ability-to-do-almost-anything-an-admin-user-can-do/"
	),
	"2" => array(
	"FirstVersion" => "2.0.0",
	"LastVersion" => "2.2.10",
	"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
	"URL" => "http://packetstormsecurity.com/files/130458/WordPress-WooCommerce-2.2.10-Cross-Site-Scripting.html"
	),
);

$plugin_vulnerabilities["woopra"] = array(
	"1" => array(
		"FirstVersion" => "1.4.1",
		"LastVersion" => "1.4.3.1",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://packetstormsecurity.com/files/123525/WordPress-Woopra-Remote-Code-Execution.html"
	),
);

$plugin_vulnerabilities["wordfence"] = array(
	"1" => array(
		"FirstVersion" => "3.6.1",
		"LastVersion" => "5.1.2",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://0day.today/exploit/22819"
	),
	"2" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "5.2.2",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "https://vexatioustendencies.com/wordpress-plugin-vulnerability-dump-part-2/"
	),
);

$plugin_vulnerabilities["wordpress-backup-to-dropbox"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "4.0",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/wordpress-backup-to-dropbox-40-reflected-xss.html"
	),
);

$plugin_vulnerabilities["wordpress-mobile-pack"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.0.1",
		"TypeOfVulnerability" => "information disclosure",
		"URL" => "https://security.dxw.com/advisories/information-disclosure-vulnerability-in-wordpress-mobile-pack-allows-anybody-to-read-password-protected-posts/"
	),
);

$plugin_vulnerabilities["wordpress-seo"] = array(
	"1" => array(
		"FirstVersion" => "1.5.0",
		"LastVersion" => "1.5.6",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/SQL injection",
		"URL" => "http://www.exploit-db.com/exploits/36413/"
	),
	"2" => array(
		"FirstVersion" => "1.6",
		"LastVersion" => "1.6.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/SQL injection",
		"URL" => "http://www.exploit-db.com/exploits/36413/"
	),
	"3" => array(
		"FirstVersion" => "1.7",
		"LastVersion" => "1.7.3.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/SQL injection",
		"URL" => "http://www.exploit-db.com/exploits/36413/"
	),
);

$plugin_vulnerabilities["work-the-flow-file-upload"] = array(
	"1" => array(
		"FirstVersion" => "0.1.6",
		"LastVersion" => "2.5.2",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.homelab.it/index.php/2015/04/04/wordpress-work-the-flow-file-upload-vulnerability/"
	),
);

$plugin_vulnerabilities["wp-all-import"] = array(
	"1" => array(
		"FirstVersion" => "3.0",
		"LastVersion" => "3.2.3",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.pritect.net/blog/wp-all-import-3-2-3-pro-4-0-3-vulnerability-breakdown"
	),
);

$plugin_vulnerabilities["wp-attachment-export"] = array(
	"1" => array(
		"FirstVersion" => "0.1.0",
		"LastVersion" => "0.2.3",
		"TypeOfVulnerability" => "information disclosure",
		"URL" => "https://packetstormsecurity.com/files/132693/WordPress-WP-Attachment-Export-0.2.3-Arbitrary-File-Download.html"
	),
);

$plugin_vulnerabilities["wp-backitup"] = array(
	"1" => array(
		"FirstVersion" => "1.1.4",
		"LastVersion" => "1.9",
		"TypeOfVulnerability" => "privilege escalation",
		"URL" => "http://security.szurek.pl/wp-backitup-19-privilege-escalation.html"
	),
	"2" => array(
		"FirstVersion" => "1.7.0",
		"LastVersion" => "1.9",
		"TypeOfVulnerability" => "information disclosure",
		"URL" => "http://security.szurek.pl/wp-backitup-19-disclosure-of-potentially-sensitive-information.html"
	),
);

$plugin_vulnerabilities["wp-business-intelligence-lite"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0.7",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://packetstormsecurity.com/files/125927/"
	),
	"2" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.6.1",
		"TypeOfVulnerability" => "SQL injeciton",
		"URL" => "http://packetstormsecurity.com/files/131228/WordPress-Business-Intelligence-Lite-1.6.1-SQL-Injection.html"
	),
);

$plugin_vulnerabilities["wp-construction-mode"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.91",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129511/WordPress-WP-Construction-Mode-1.91-XSS.html"
	),
);

$plugin_vulnerabilities["wp-copyprotect"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "3.0.0",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://research.g0blin.co.uk/g0blin-00054/"
	),
);

$plugin_vulnerabilities["wp-copysafe-pdf"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.7",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://packetstormsecurity.com/files/127457/WordPress-CopySafe-PDF-Protection-0.6-Shell-Upload.html"
	),
);

$plugin_vulnerabilities["wp-cron-dashboard"] = array(
	"1" => array(
		"FirstVersion" => "1.1.0",
		"LastVersion" => "1.1.5",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23189"
	),
);

$plugin_vulnerabilities["wp-dbmanager"] = array(
	"1" => array(
		"FirstVersion" => "1.00",
		"LastVersion" => "2.74",
		"TypeOfVulnerability" => "information disclosure",
		"URL" => "https://github.com/wpscanteam/wpscan/issues/422"
	),
);

$plugin_vulnerabilities["wp-easy-slideshow"] = array(
	"1" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.0.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "http://www.exploit-db.com/exploits/36612/"
	),
);

$plugin_vulnerabilities["wp-easycart"] = array(
	"1" => array(
		"FirstVersion" => "1.1.27",
		"LastVersion" => "3.0.8",
		"TypeOfVulnerability" => "authenticated arbitrary file upload",
		"URL" => "http://security.szurek.pl/wordpress-shopping-cart-304-unrestricted-file-upload.html"
	),
);

$plugin_vulnerabilities["wp-ecommerce-shop-styling"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "2.5",
		"TypeOfVulnerability" => "authenticated arbitrary file viewing",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=136"
	),
);

$plugin_vulnerabilities["wp-email"] = array(
	"1" => array(
		"FirstVersion" => "2.30",
		"LastVersion" => "2.64",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://0day.today/exploit/23066"
	),
);

$plugin_vulnerabilities["wp-error-fix"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "2.0",
		"TypeOfVulnerability" => "information disclosure",
		"URL" => "https://wordpress.org/support/topic/security-logs-folder-does-not-block-access"
	),
);

$plugin_vulnerabilities["wp-fast-cache"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://www.homelab.it/index.php/2015/05/27/wp-fast-cache-csrf-xss/"
	),
);

$plugin_vulnerabilities["wp-fb-autoconnect"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "4.0.5",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129508/WordPress-WP-FB-AutoConnect-4.0.5-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["wp-filemanager"] = array(
	"1" => array(
		"FirstVersion" => "1.2.8",
		"LastVersion" => "1.3.0",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.exploit-db.com/exploits/25440/"
	),
);

$plugin_vulnerabilities["wp-flash-player"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.3",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.netsparker.com/ns-15-009-multiple-xss-vulnerabilities-identified-in-wp-flash-player/"
	),
);

$plugin_vulnerabilities["wp-front-end-repository"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=141"
	),
);

$plugin_vulnerabilities["wp-google-maps"] = array(
	"1" => array(
		"FirstVersion" => "4.3",
		"LastVersion" => "6.0.26",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23236"
	),
);

$plugin_vulnerabilities["wp-html-sitemap"] = array(
	"1" => array(
		"FirstVersion" => "1.1.2",
		"LastVersion" => "1.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://security.dxw.com/advisories/csrf-vulnerability-in-wp-html-sitemap-1-2/"
	),
);

$plugin_vulnerabilities["wp-instance-rename"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=127"
	),
);

$plugin_vulnerabilities["wp-limit-posts-automatically"] = array(
	"1" => array(
		"FirstVersion" => "0.7",
		"LastVersion" => "0.7",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129647/WordPress-WP-Limit-Posts-Automatically-0.7-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["wp-marketplace"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0 beta",
		"LastVersion" => "1.1.0",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.exploit-db.com/exploits/17872/"
	),
);

$plugin_vulnerabilities["wp-media-cleaner"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "2.2.6",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130576/WordPress-Media-Cleaner-2.2.6-Cross-Site-Scripting.html"
	),
);

$plugin_vulnerabilities["wp-mobile-detector"] = array(
	"1" => array(
		"FirstVersion" => "3.0",
		"LastVersion" => "3.2",
		"TypeOfVulnerability" => "authenticated persistent cross-site scripting (XSS)",
		"URL" => "https://research.g0blin.co.uk/g0blin-00050/"
	),
);

$plugin_vulnerabilities["wp-mobile-edition"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.2.7",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "https://www.exploit-db.com/exploits/36733/"
	),
);

$plugin_vulnerabilities["wp-mon"] = array(
	"1" => array(
		"FirstVersion" => "0.5",
		"LastVersion" => "0.5.1",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://packetstormsecurity.com/files/131502/WordPress-WP-Mon-Arbitrary-File-Download.html"
	),
);

$plugin_vulnerabilities["wp-photo-album-plus"] = array(
	"1" => array(
		"FirstVersion" => "2.4.3",
		"LastVersion" => "5.5.17",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/wp-photo-album-plus-5417-reflected-xss.html"
	),
);

$plugin_vulnerabilities["wp-powerplaygallery"] = array(
	"1" => array(
		"FirstVersion" => "3.3",
		"LastVersion" => "3.3",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=132"
	),
	"2" => array(
		"FirstVersion" => "3.3",
		"LastVersion" => "3.3",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=132"
	),
);

$plugin_vulnerabilities["wp-property"] = array(
	"1" => array(
		"FirstVersion" => "1.20.0",
		"LastVersion" => "1.35.0",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-wp-property-shell-upload-vulnerability.html"
	),
);

$plugin_vulnerabilities["wp-rollback"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2.2",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://blog.secupress.fr/en/wp-rollback-a-too-permissive-plugin-395.html"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "http://blog.secupress.fr/en/wp-rollback-a-too-permissive-plugin-395.html"
	),
);

$plugin_vulnerabilities["wp-rss-aggregator"] = array(
	"1" => array(
		"FirstVersion" => "4.4",
		"LastVersion" => "4.6.3",
		"TypeOfVulnerability" => "post deletion",
		"URL" => "http://security.szurek.pl/wp-rss-aggregator-463-post-deletion.html"
	),
);

$plugin_vulnerabilities["wp-rss-multi-importer"] = array(
	"1" => array(
		"FirstVersion" => "3.00.00",
		"LastVersion" => "3.13",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://vexatioustendencies.com/wordpress-plugin-vulnerability-dump-part-1/"
	),
);

$plugin_vulnerabilities["wp-security-scan"] = array(
	"1" => array(
		"FirstVersion" => "3.0.2",
		"LastVersion" => "4.0.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "http://packetstormsecurity.com/files/125218/WordPress-Acunetix-WP-Security-Make-Backup-4.0.3-CSRF.html"
	),
);

$plugin_vulnerabilities["wp-seo-spy-google"] = array(
	"1" => array(
		"FirstVersion" => "3.0",
		"LastVersion" => "3.1",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://0day.today/exploit/21404"
	),
);

$plugin_vulnerabilities["wp-slimstat-ex"] = array(
	"1" => array(
		"FirstVersion" => "2.1",
		"LastVersion" => "2.1.2",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://packetstormsecurity.com/files/123494/WordPress-Slimstat-Ex-Code-Execution.html"
	),
);

$plugin_vulnerabilities["wp-special-textboxes"] = array(
	"1" => array(
		"FirstVersion" => "5.0.85",
		"LastVersion" => "5.1.90",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "https://wordpress.org/support/topic/wp-special-textboxes-was-exploited-with-backdoor"
	),
);

$plugin_vulnerabilities["wp-support-plus-responsive-ticket-system"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "4.1",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.exploit-db.com/exploits/34589/"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "4.1",
		"TypeOfVulnerability" => "full path disclosure",
		"URL" => "http://www.exploit-db.com/exploits/34589/"
	),
	"3" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "4.1",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.exploit-db.com/exploits/34589/"
	),
);

$plugin_vulnerabilities["wp-survey-and-poll"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.1.91",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.exploit-db.com/exploits/36054/"
	),
);

$plugin_vulnerabilities["wp-swimteam"] = array(
	"1" => array(
		"FirstVersion" => "1",
		"LastVersion" => "1.44.1077",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=134"
	),
);

$plugin_vulnerabilities["wp-symposium"] = array(
	"1" => array(
		"FirstVersion" => "13.04",
		"LastVersion" => "14.11",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.homelab.it/index.php/2014/12/11/wordpress-wp-symposium-shell-upload/"
	),
	"2" => array(
		"FirstVersion" => "12.06.16",
		"LastVersion" => "15.1",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://packetstormsecurity.com/files/131801/WordPress-WP-Symposium-15.1-SQL-Injection.html"
	),
);

$plugin_vulnerabilities["wp-timed-popup"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129510/WordPress-Timed-Popup-1.3-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["wp-ultimate-csv-importer"] = array(
	"1" => array(
		"FirstVersion" => "3.6",
		"LastVersion" => "3.6.74",
		"TypeOfVulnerability" => "information disclosure",
		"URL" => "https://research.g0blin.co.uk/g0blin-00025/"
	),
);

$plugin_vulnerabilities["wp-unique-article-header-image"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129646/WordPress-WP-Unique-Article-Header-Image-1.0-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["wp-vipergb"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "1.3.10",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129501/WordPress-WP-ViperGB-1.3.10-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["wpe-indoshipping"] = array(
	"1" => array(
		"FirstVersion" => "2.0.0",
		"LastVersion" => "2.5.0",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=145"
	),
);

$plugin_vulnerabilities["wpcommenttwit"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.5",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129581/WordPress-wpCommentTwit-0.5-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["wpdatatables"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0.53",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.homelab.it/index.php/2014/11/23/wordpress-wpdatatables-shell-upload-vulnerability/"
	),
);

$plugin_vulnerabilities["wpmarketplace"] = array(
	"1" => array(
		"FirstVersion" => "2.2.0",
		"LastVersion" => "2.4.0",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://security.szurek.pl/wp-marketplace-240-arbitrary-file-download.html"
	),
	"2" => array(
		"FirstVersion" => "1.5.0",
		"LastVersion" => "2.4.0",
		"TypeOfVulnerability" => "remote code execution",
		"URL" => "http://www.homelab.it/index.php/2015/03/24/wp-marketplace-rce/"
	),
);

$plugin_vulnerabilities["wpshop"] = array(
	"1" => array(
		"FirstVersion" => "1.3.1.6",
		"LastVersion" => "1.3.9.5",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "https://research.g0blin.co.uk/g0blin-00036/"
	),
);

$plugin_vulnerabilities["wpstorecart"] = array(
	"1" => array(
		"FirstVersion" => "2.0.0",
		"LastVersion" => "2.5.29",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-wpstorecart-arbitrary-file-upload-vulnerability.html"
	),
);

$plugin_vulnerabilities["wptf-image-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.0.3",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=148"
	),
);

$plugin_vulnerabilities["wysija-newsletters"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "2.6.7",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://packetstormsecurity.com/files/127363/Wordpress-MailPoet-wysija-newsletters-Unauthenticated-File-Upload.html"
	),
);
<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["watu"] = array(
	"1" => array(
		"FirstVersion" => "2.3.6",
		"LastVersion" => "2.5.0.1",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/watu-249-xss.html"
	),
);

$plugin_vulnerabilities["woocommerce"] = array(
	"1" => array(
		"FirstVersion" => "2.1.0",
		"LastVersion" => "2.2.2",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/reflected-xss-in-woocommerce-excelling-ecommerce-allows-attackers-ability-to-do-almost-anything-an-admin-user-can-do/"
	),
);

$plugin_vulnerabilities["woopra"] = array(
	"1" => array(
		"FirstVersion" => "1.4.1",
		"LastVersion" => "1.4.3.1",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://packetstormsecurity.com/files/123525/WordPress-Woopra-Remote-Code-Execution.html"
	),
);

$plugin_vulnerabilities["wordfence"] = array(
	"1" => array(
		"FirstVersion" => "3.6.1",
		"LastVersion" => "5.1.2",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://en.1337day.com/exploit/22819"
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

$plugin_vulnerabilities["wp-construction-mode"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.91",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129511/WordPress-WP-Construction-Mode-1.91-XSS.html"
	),
);

$plugin_vulnerabilities["wp-copysafe-pdf"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.7",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "https://www.htbridge.com/advisory/HTB23236"
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

$plugin_vulnerabilities["wp-easycart"] = array(
	"1" => array(
		"FirstVersion" => "1.1.27",
		"LastVersion" => "3.0.8",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://security.szurek.pl/wordpress-shopping-cart-304-unrestricted-file-upload.html"
	),
);

$plugin_vulnerabilities["wp-email"] = array(
	"1" => array(
		"FirstVersion" => "2.30",
		"LastVersion" => "2.64",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://en.1337day.com/exploit/23066"
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
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.exploit-db.com/exploits/17872/"
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

$plugin_vulnerabilities["wp-rss-aggregator"] = array(
	"1" => array(
		"FirstVersion" => "4.4",
		"LastVersion" => "4.6.3",
		"TypeOfVulnerability" => "post deletion",
		"URL" => "http://security.szurek.pl/wp-rss-aggregator-463-post-deletion.html"
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

$plugin_vulnerabilities["wp-slimstat-ex"] = array(
	"1" => array(
		"FirstVersion" => "2.1",
		"LastVersion" => "2.1.2",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://packetstormsecurity.com/files/123494/WordPress-Slimstat-Ex-Code-Execution.html"
	),
);

$plugin_vulnerabilities["wp-special-textboxes"] = array(
	"1" => array(
		"FirstVersion" => "5.0.85",
		"LastVersion" => "5.1.90",
		"TypeOfVulnerability" => "unrestricted file upload",
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

$plugin_vulnerabilities["wp-symposium"] = array(
	"1" => array(
		"FirstVersion" => "13.04",
		"LastVersion" => "14.11",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.homelab.it/index.php/2014/12/11/wordpress-wp-symposium-shell-upload/"
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
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.homelab.it/index.php/2014/11/23/wordpress-wpdatatables-shell-upload-vulnerability/"
	),
);

$plugin_vulnerabilities["wysija-newsletters"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "2.6.7",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://packetstormsecurity.com/files/127363/Wordpress-MailPoet-wysija-newsletters-Unauthenticated-File-Upload.html"
	),
);
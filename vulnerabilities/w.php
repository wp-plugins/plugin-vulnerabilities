<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

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

$plugin_vulnerabilities["wp-copysafe-pdf"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.7",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "https://www.htbridge.com/advisory/HTB23236"
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

$plugin_vulnerabilities["wp-slimstat-ex"] = array(
	"1" => array(
		"FirstVersion" => "2.1",
		"LastVersion" => "2.1.2",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://packetstormsecurity.com/files/123494/WordPress-Slimstat-Ex-Code-Execution.html"
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
	
$plugin_vulnerabilities["wysija-newsletters"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "2.6.7",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://packetstormsecurity.com/files/127363/Wordpress-MailPoet-wysija-newsletters-Unauthenticated-File-Upload.html"
	),
);
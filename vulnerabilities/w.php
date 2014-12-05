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

$plugin_vulnerabilities["wordpress-mobile-pack"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.0.1",
		"TypeOfVulnerability" => "information disclosure",
		"URL" => "https://security.dxw.com/advisories/information-disclosure-vulnerability-in-wordpress-mobile-pack-allows-anybody-to-read-password-protected-posts/"
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
	
$plugin_vulnerabilities["wysija-newsletters"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "2.6.7",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://packetstormsecurity.com/files/127363/Wordpress-MailPoet-wysija-newsletters-Unauthenticated-File-Upload.html"
	),
);
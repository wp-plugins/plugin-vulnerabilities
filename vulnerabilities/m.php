<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["maxbuttons"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.26.0",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23237"
	),
);

$plugin_vulnerabilities["member-approval"] = array(
	"1" => array(
		"FirstVersion" => "130625",
		"LastVersion" => "131109",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://security.dxw.com/advisories/csrf-in-member-approval-131109-permits-unapproved-registrations/"
	),
);

$plugin_vulnerabilities["mikiurl-wordpress-eklentisi"] = array(
	"1" => array(
		"FirstVersion" => "",
		"LastVersion" => "2.0",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129577/Mikiurl-WordPress-Eklentisi-2.0-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["miwoftp"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "1.0.4",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "https://research.g0blin.co.uk/g0blin-00038/"
	),
);

$plugin_vulnerabilities["mm-forms-community"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "2.2.6",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-mm-forms-community-shell-upload-vulnerability.html"
	),
);

$plugin_vulnerabilities["mobile-domain"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.5.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130316/WordPress-Mobile-Domain-1.5.2-Cross-Site-Request-Forgery-Cross-Site-Scripting.html"
	),
);

$plugin_vulnerabilities["mp3-jplayer"] = array(
	"1" => array(
		"FirstVersion" => "1.8.3",
		"LastVersion" => "1.8.11",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/mp3jplayer-1811-reflected-xss.html"
	),
);

$plugin_vulnerabilities["mtouch-quiz"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "3.0.6",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)/ SQL injection",
		"URL" => "https://security.dxw.com/advisories/admin-xss-and-sqli-in-mtouch-quiz-3-0-6/"
	),
);
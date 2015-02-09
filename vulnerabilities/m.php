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
<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["dandyid-services"] = array(
	"1" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.5.9",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129575/WordPress-DandyID-Services-ID-1.5.9-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["db-backup"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "4.5",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.exploit-db.com/exploits/35378/"
	),
);

$plugin_vulnerabilities["disable-comments"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "1.0.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://security.dxw.com/advisories/csrf-in-disable-comments-1-0-3/"
	),
);

$plugin_vulnerabilities["disclosure-policy-plugin"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "remote file inclusion (RFI)",
		"URL" => "http://www.exploit-db.com/exploits/17865/"
	),
);

$plugin_vulnerabilities["dmsguestbook"] = array(
	"1" => array(
		"FirstVersion" => "1.5.0",
		"LastVersion" => "1.17.4",
		"TypeOfVulnerability" => "file modification",
		"URL" => "http://packetstormsecurity.com/files/129752/WordPress-Dmsguestbook-Unauthenticated-Data-Injection.html"
	),
);

$plugin_vulnerabilities["download-manager"] = array(
	"1" => array(
		"FirstVersion" => "2.7.0",
		"LastVersion" => "2.7.4",
		"TypeOfVulnerability" => "remote code execution",
		"URL" => "http://www.homelab.it/index.php/2014/12/13/wordpress-download-manager-rce/"
	),
);

$plugin_vulnerabilities["download-shortcode"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.1",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "https://wordpress.org/support/topic/plugin-download-shortcode-security-issue"
	),
);

$plugin_vulnerabilities["dp-thumbnail"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.exploit-db.com/exploits/17872/"
	),
);

$plugin_vulnerabilities["dukapress"] = array(
	"1" => array(
		"FirstVersion" => "2.3.7",
		"LastVersion" => "2.5.3",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://security.szurek.pl/dukapress-252-path-traversal.html"
	),
);

$plugin_vulnerabilities["duplicate-post"] = array(
	"1" => array(
		"FirstVersion" => "0.6",
		"LastVersion" => "2.4.1",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/xss-in-duplicate-post-2-4-1/"
	),
);
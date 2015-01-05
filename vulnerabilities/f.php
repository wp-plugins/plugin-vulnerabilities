<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["feature-comments"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.2.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://security.dxw.com/advisories/csrf-in-featured-comments-1-2-1-allows-an-attacker-to-set-and-unset-comment-statuses/"
	),
);

$plugin_vulnerabilities["filedownload"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.1",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.exploit-db.com/exploits/17858/"
	),
);

$plugin_vulnerabilities["fourteen-extended"] = array(
	"1" => array(
		"FirstVersion" => "1.2.1",
		"LastVersion" => "1.2.31",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/reflected-xss-in-fourteen-extended-allows-arbitrary-javascript-to-be-run-in-administrator-session/"
	),
);

$plugin_vulnerabilities["frontend-uploader"] = array(
	"1" => array(
		"FirstVersion" => "0.9",
		"LastVersion" => "0.9.2",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129749/WordPress-Frontend-Uploader-0.9.2-Cross-Site-Scripting.html"
	),
);
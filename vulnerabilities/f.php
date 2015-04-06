<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["fancy-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.5",
		"LastVersion" => "1.5.12",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/fancy-gallery-1512-reflected-xss.html"
	),
);

$plugin_vulnerabilities["fancybox-for-wordpress"] = array(
	"1" => array(
		"FirstVersion" => "3.0",
		"LastVersion" => "3.0.2",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "https://wordpress.org/support/topic/possible-malware-2"
	),
);

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

$plugin_vulnerabilities["foxypress"] = array(
	"1" => array(
		"FirstVersion" => "0.3.6.1",
		"LastVersion" => "0.4.2.1",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-foxypress-shell-upload-vulnerability.html"
	),
);

$plugin_vulnerabilities["front-file-manager"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.1",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.exploit-db.com/exploits/19012/"
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
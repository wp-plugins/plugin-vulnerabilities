<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["xcloner-backup-and-restore"] = array(
	"1" => array(
		"FirstVersion" => "2.1",
		"LastVersion" => "2.2.1",
		"TypeOfVulnerability" => "backup download",
		"URL" => "http://www.exploit-db.com/exploits/16246/"
	),
	"2" => array(
		"FirstVersion" => "2.1",
		"LastVersion" => "3.0",
		"TypeOfVulnerability" => "local file inclusion (LFI)",
		"URL" => "http://www.exploit-db.com/exploits/16246/"
	),
	"3" => array(
		"FirstVersion" => "2.1",
		"LastVersion" => "2.2.1",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://www.exploit-db.com/exploits/16246/"
	),
	"4" => array(
		"FirstVersion" => "2.1",
		"LastVersion" => "3.1.0",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://www.htbridge.com/advisory/HTB23206"
	),
	"5" => array(
		"FirstVersion" => "3.1.0",
		"LastVersion" => "3.1.1",
		"TypeOfVulnerability" => "authenticated backup download",
		"URL" => "http://security.szurek.pl/xcloner-backup-and-restore-311-backup-download.html"
	),
);

$plugin_vulnerabilities["xerte-online"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.3.2",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-xerte-online-arbitrary-file-upload-vulnerability.html"
	),
);
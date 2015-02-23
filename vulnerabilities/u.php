<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["unconfirmed"] = array(
	"1" => array(
		"FirstVersion" => "1.2.3",
		"LastVersion" => "1.2.4",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/xss-in-unconfirmed-1-2-3/"
	),
);

$plugin_vulnerabilities["uploader"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "1.0.4",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-uploader-arbitrary-file-upload-vulnerability.html"
	),
);


$plugin_vulnerabilities["user-domain-whitelist"] = array(
	"1" => array(
		"FirstVersion" => "v1.0",
		"LastVersion" => "v1.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/xss-and-csrf-in-user-domain-whitelist-v1-4/"
	),
);

$plugin_vulnerabilities["users-ultra"] = array(
	"1" => array(
		"FirstVersion" => "1.0.11",
		"LastVersion" => "1.3.58",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://packetstormsecurity.com/files/128473/WordPress-Users-Ultra-1.3.37-SQL-Injection.html"
	),
);
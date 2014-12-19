<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["bird-feeder"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://vulnerability-lab.com/get_content.php?id=1372"
	),
);

$plugin_vulnerabilities["bp-group-documents"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2.1",
		"TypeOfVulnerability" => "file movement",
		"URL" => "https://security.dxw.com/advisories/moving-any-file-php-user-has-access-to-in-bp-group-documents-1-2-1/"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://security.dxw.com/advisories/csrf-vulnerability-in-bp-group-documents-1-2-1/"
	),
	"3" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2.1",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/stored-xss-vulnerability-in-bp-group-documents-1-2-1/"
	),
);
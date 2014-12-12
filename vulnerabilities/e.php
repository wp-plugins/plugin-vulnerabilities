<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["wp-error-fix"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "2.0",
		"TypeOfVulnerability" => "information disclosure",
		"URL" => "https://wordpress.org/support/topic/security-logs-folder-does-not-block-access"
	),
);

$plugin_vulnerabilities["ewww-image-optimizer"] = array(
	"1" => array(
		"FirstVersion" => "1.4.3",
		"LastVersion" => "2.0.1",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23234"
	),
);
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

$plugin_vulnerabilities["user-domain-whitelist"] = array(
	"1" => array(
		"FirstVersion" => "v1.0",
		"LastVersion" => "v1.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/xss-and-csrf-in-user-domain-whitelist-v1-4/"
	),
);
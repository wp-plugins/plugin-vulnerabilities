<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["theme-my-login"] = array(
	"1" => array(
		"FirstVersion" => "6.0",
		"LastVersion" => "6.3.9",
		"TypeOfVulnerability" => "local file include",
		"URL" => "https://security.dxw.com/advisories/lfi-in-theme-my-login/"
	),
);

$plugin_vulnerabilities["twitget"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "3.3.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/csrfxss-vulnerability-in-twitget-3-3-1/"
	),
);
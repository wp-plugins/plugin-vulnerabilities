<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["quick-pagepost-redirect-plugin"] = array(
	"1" => array(
		"FirstVersion" => "1.8",
		"LastVersion" => "5.0.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/csrf-and-stored-xss-in-quick-pagepost-redirect-plugin/"
	),
);
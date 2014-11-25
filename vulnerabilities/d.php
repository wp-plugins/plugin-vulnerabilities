<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["disable-comments"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "1.0.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://security.dxw.com/advisories/csrf-in-disable-comments-1-0-3/"
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
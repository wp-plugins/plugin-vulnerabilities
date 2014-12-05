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

$plugin_vulnerabilities["fourteen-extended"] = array(
	"1" => array(
		"FirstVersion" => "1.2.1",
		"LastVersion" => "1.2.31",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/reflected-xss-in-fourteen-extended-allows-arbitrary-javascript-to-be-run-in-administrator-session/"
	),
);
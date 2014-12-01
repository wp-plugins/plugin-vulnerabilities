<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["login-sidebar-widget"] = array(
	"1" => array(
		"FirstVersion" => "2.2.3",
		"LastVersion" => "3.1.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/csrfxss-vulnerablity-in-login-widget-with-shortcode-allows-unauthenticated-attackers-to-do-anything-an-admin-can-do/"
	),
);
<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["our-team-enhanced"] = array(
	"1" => array(
		"FirstVersion" => "1.2",
		"LastVersion" => "1.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129499/WordPress-Our-Team-Showcase-1.2-CSRF-XSS.html"
	),
);
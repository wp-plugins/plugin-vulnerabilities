<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["yurl-retwitt"] = array(
	"1" => array(
		"FirstVersion" => "1.3",
		"LastVersion" => "1.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129582/WordPress-yURL-ReTwitt-WP-1.4-CSRF-XSS.html"
	),
);
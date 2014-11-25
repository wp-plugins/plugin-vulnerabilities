<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["rich-counter"] = array(
	"1" => array(
		"FirstVersion" => "1.1.0",
		"LastVersion" => "1.1.5",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/128221/WordPress-Rich-Counter-1.1.5-Cross-Site-Scripting.html"
	),
);
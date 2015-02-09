<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["email"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://en.1337day.com/exploit/23067"
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
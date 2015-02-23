<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["easing-slider"] = array(
	"1" => array(
		"FirstVersion" => "2.2",
		"LastVersion" => "2.2.0.8",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23249"
	),
);

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
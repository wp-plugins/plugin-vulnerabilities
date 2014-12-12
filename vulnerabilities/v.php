<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["vk-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "1.1.0",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.exploit-db.com/exploits/17872/"
	),
);
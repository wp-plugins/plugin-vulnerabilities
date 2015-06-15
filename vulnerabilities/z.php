<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["zip-attachments"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.4",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=126"
	),
);
<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["nextgen-gallery"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.0",
		"TypeOfVulnerability" => "directory traversal",
		"URL" => "https://security.dxw.com/advisories/directory-traversal-in-nextgen-gallery-2-0-0/"
	),
);
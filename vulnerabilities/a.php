<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["ajax-pagination"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "local file inclusion",
		"URL" => "https://security.dxw.com/advisories/end-user-exploitable-local-file-inclusion-vulnerability-in-ajax-pagination-twitter-style-1-1/"
	),
);

$plugin_vulnerabilities["all-video-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.exploit-db.com/exploits/22427/"
	),
);
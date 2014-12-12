<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["really-easy-slider"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.1",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.exploit-db.com/exploits/17872/"
	),
);

$plugin_vulnerabilities["rich-counter"] = array(
	"1" => array(
		"FirstVersion" => "1.1.0",
		"LastVersion" => "1.2.0",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "http://www.myblog.att4ck3r.ir/wordpress-rich-counter-plugin-cross-site-scripting/"
	),
);
<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["job-manager"] = array(
	"1" => array(
		"FirstVersion" => "0.2.0",
		"LastVersion" => "0.7.24",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "https://packetstormsecurity.com/files/132931/WordPress-Job-Manager-0.7.22-Cross-Site-Scripting.html"
	),
);

$plugin_vulnerabilities["jw-player-plugin-for-wordpress"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.1.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://security.dxw.com/advisories/jw-player-for-flash-html5-video/"
	),
);
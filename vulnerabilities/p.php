<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["photo-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.1.30",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23232"
	),
);

$plugin_vulnerabilities["post-expirator"] = array(
	"1" => array(
		"FirstVersion" => "1.2",
		"LastVersion" => "2.1.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/csrf-and-xss-in-post-expirator-2-1-1/"
	),
);

$plugin_vulnerabilities["player"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://packetstormsecurity.com/files/121250/WordPress-Spider-Video-Player-2.1-SQL-Injection.html"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.3",
		"TypeOfVulnerability" => "cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/124353/WordPress-Spider-Video-Player-2.1-Cross-Site-Scripting.html"
	),
);
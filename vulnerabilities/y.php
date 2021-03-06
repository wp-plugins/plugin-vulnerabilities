<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["yet-another-related-posts-plugin"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "4.2.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://research.evex.pw/?vuln=15"
	),
);

$plugin_vulnerabilities["yop-poll"] = array(
	"1" => array(
		"FirstVersion" => "4.3",
		"LastVersion" => "5.7.3",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://research.g0blin.co.uk/g0blin-00051/"
	),
);

$plugin_vulnerabilities["yurl-retwitt"] = array(
	"1" => array(
		"FirstVersion" => "1.3",
		"LastVersion" => "1.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129582/WordPress-yURL-ReTwitt-WP-1.4-CSRF-XSS.html"
	),
);
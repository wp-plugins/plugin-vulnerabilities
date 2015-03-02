<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["easy-media-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.3.01",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://vexatioustendencies.com/wordpress-plugin-vulnerability-dump-part-1/"
	),
);

$plugin_vulnerabilities["easy-social-icons"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130461/WordPress-Easy-Social-Icons-1.2.2-CSRF-XSS.html"
	),
);

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
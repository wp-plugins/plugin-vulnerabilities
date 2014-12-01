<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["clean-and-simple-contact-form-by-meg-nicholas"] = array(
	"1" => array(
		"FirstVersion" => "4.1.3",
		"LastVersion" => "4.4.0",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/128957/WordPress-Clean-And-Simple-Contact-Form-4.4.0-XSS.html"
	),
);

$plugin_vulnerabilities["cm-download-manager"] = array(
	"1" => array(
		"FirstVersion" => "1.4.0",
		"LastVersion" => "2.0.0",
		"TypeOfVulnerability" => "remote code execution",
		"URL" => "http://packetstormsecurity.com/files/129183/WordPress-CM-Download-Manager-2.0.0-Code-Injection.html"
	),
);

$plugin_vulnerabilities["contact-form-7-to-database-extension"] = array(
	"1" => array(
		"FirstVersion" => "2.7.2",
		"LastVersion" => "2.8.15",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23233"
	),
);

$plugin_vulnerabilities["cp-multi-view-calendar"] = array(
	"1" => array(
		"FirstVersion" => "1.01",
		"LastVersion" => "1.01",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.homelab.it/index.php/2014/10/23/wordpress-cp-multi-view-event-calendar-1-01-sql-injection/"
	),
);
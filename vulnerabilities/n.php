<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["newsletter"] = array(
	"1" => array(
		"FirstVersion" => "3.0.0",
		"LastVersion" => "3.7.5",
		"TypeOfVulnerability" => "open redirect",
		"URL" => "https://research.g0blin.co.uk/g0blin-00039/"
	),
);

$plugin_vulnerabilities["nex-forms-express-wp-form-builder"] = array(
	"1" => array(
		"FirstVersion" => "3.0",
		"LastVersion" => "3.0",
		"TypeOfVulnerability" => "http://www.homelab.it/index.php/2015/04/21/wordpress-nex-forms-sqli/",
		"URL" => "SQL injection"
	),
);

$plugin_vulnerabilities["nextend-facebook-connect"] = array(
	"1" => array(
		"FirstVersion" => "1.3.6",
		"LastVersion" => "1.5.0",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/nextend-facebook-connect-1459-xss.html"
	),
);

$plugin_vulnerabilities["nextgen-gallery"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.0",
		"TypeOfVulnerability" => "information disclosure",
		"URL" => "https://security.dxw.com/advisories/directory-traversal-in-nextgen-gallery-2-0-0/"
	),
);

$plugin_vulnerabilities["ninja-forms"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.8.6",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/ninja-forms-286-reflected-xss.html"
	),
	"2" => array(
		"FirstVersion" => "2.8",
		"LastVersion" => "2.8.8",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130369/WordPress-Ninja-Forms-2.8.8-Cross-Site-Scripting.html"
	),
);
<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["gd-star-rating"] = array(
	"1" => array(
		"FirstVersion" => "0.9.0",
		"LastVersion" => "1.9.22",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/SQL injection",
		"URL" => "https://security.dxw.com/advisories/csrf-and-blind-sql-injection-in-gd-star-rating-1-9-22/"
	),
);

$plugin_vulnerabilities["google-analytics-mu"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.3.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://security.dxw.com/advisories/csrf-in-google-analytics-mu-2-3/"
	),
);

$plugin_vulnerabilities["google-calendar-events"] = array(
	"1" => array(
		"FirstVersion" => "2.0.0",
		"LastVersion" => "2.0.3.1",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23235"
	),
);

$plugin_vulnerabilities["google-document-embedder"] = array(
	"1" => array(
		"FirstVersion" => "2.5",
		"LastVersion" => "2.5.16",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://security.szurek.pl/google-doc-embedder-2514-sql-injection.html"
	),
);

$plugin_vulnerabilities["gslideshow"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129637/WordPress-gSlideShow-0.1-CSRF-XSS.html"
	),
);
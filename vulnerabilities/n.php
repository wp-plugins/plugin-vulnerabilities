<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["newsletter"] = array(
	"1" => array(
		"FirstVersion" => "3.0.0",
		"LastVersion" => "3.8.2",
		"TypeOfVulnerability" => "open redirect",
		"URL" => "https://research.g0blin.co.uk/g0blin-00039/"
	),
);

$plugin_vulnerabilities["newstatpress"] = array(
	"1" => array(
		"FirstVersion" => "0.1.0",
		"LastVersion" => "1.0.0",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://packetstormsecurity.com/files/132038/WordPress-NewStatPress-0.9.8-Cross-Site-Scripting-SQL-Injection.html"
	),
	"2" => array(
		"FirstVersion" => "0.1.0",
		"LastVersion" => "1.0.0",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/SQL injection",
		"URL" => "https://packetstormsecurity.com/files/132038/WordPress-NewStatPress-0.9.8-Cross-Site-Scripting-SQL-Injection.html"
	),
	"3" => array(
		"FirstVersion" => "0.9.6",
		"LastVersion" => "1.0.4",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://research.g0blin.co.uk/g0blin-00057/"
	),
	"4" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.0.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/SQL injection",
		"URL" => "https://research.g0blin.co.uk/g0blin-00057/"
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
	"2" => array(
		"FirstVersion" => "1.4.4",
		"LastVersion" => "1.5.4",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://packetstormsecurity.com/files/132425/WordPress-Nextend-Facebook-Connect-1.5.4-Cross-Site-Scripting.html"
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
	"3" => array(
		"FirstVersion" => "2.7.6",
		"LastVersion" => "2.9.21",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://packetstormsecurity.com/files/132913/WordPress-Ninja-Forms-2.9.21-Cross-Site-Scripting.html"
	),
);
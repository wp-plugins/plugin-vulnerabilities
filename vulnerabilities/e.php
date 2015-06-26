<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["easy-coming-soon"] = array(
	"1" => array(
		"FirstVersion" => "0.8",
		"LastVersion" => "1.6.2",
		"TypeOfVulnerability" => "authenticated persistent cross-site scripting (XSS)",
		"URL" => "https://research.g0blin.co.uk/g0blin-00032/"
	),
);

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
		"URL" => "http://0day.today/exploit/23067"
	),
);

$plugin_vulnerabilities["embed-articles"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "7.0.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/131797/WordPress-Embed-Articles-7.0.3-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["erident-custom-login-and-dashboard"] = array(
	"1" => array(
		"FirstVersion" => "3.0",
		"LastVersion" => "3.4.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://research.g0blin.co.uk/g0blin-00048/"
	),
);

$plugin_vulnerabilities["eshop"] = array(
	"1" => array(
		"FirstVersion" => "2.5.0",
		"LastVersion" => "6.3.11",
		"TypeOfVulnerability" => "full path disclosure",
		"URL" => "https://www.htbridge.com/advisory/HTB23255"
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
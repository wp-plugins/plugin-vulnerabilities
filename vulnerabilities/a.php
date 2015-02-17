<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["acobot"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "2.0",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130306/WordPress-Acobot-Live-Chat-And-Contact-Form-2.0-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["advanced-custom-fields"] = array(
	"1" => array(
		"FirstVersion" => "3.5.0",
		"LastVersion" => "3.5.1",
		"TypeOfVulnerability" => "remote file inclusion (LFI)",
		"URL" => "http://ceriksen.com/2012/11/14/wordpress-advanced-custom-fields-remote-file-inclusion-vulnerability/"
	),
);

$plugin_vulnerabilities["ajax-pagination"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "local file inclusion (LFI)",
		"URL" => "https://security.dxw.com/advisories/end-user-exploitable-local-file-inclusion-vulnerability-in-ajax-pagination-twitter-style-1-1/"
	),
);

$plugin_vulnerabilities["all-video-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.exploit-db.com/exploits/22427/"
	),
);

$plugin_vulnerabilities["another-wordpress-classifieds-plugin"] = array(
	"1" => array(
		"FirstVersion" => "3.2.1",
		"LastVersion" => "3.3.1",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/another-wordpress-classifieds-plugin-331-reflected-xss.html"
	),
);

$plugin_vulnerabilities["asset-manager"] = array(
	"1" => array(
		"FirstVersion" => "0.2",
		"LastVersion" => "0.2",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.exploit-db.com/exploits/18993/"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.exploit-db.com/exploits/18993/"
	),
);
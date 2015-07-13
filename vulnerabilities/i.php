<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["i-dump-iphone-to-wordpress-photo-uploader"] = array(
	"1" => array(
		"FirstVersion" => "1.1.3",
		"LastVersion" => "1.8",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://packetstormsecurity.com/files/131363/WordPress-Windows-Desktop-And-iPhone-Photo-Uploader-File-Upload.html"
	),
);

$plugin_vulnerabilities["ibs-mappro"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.6",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=137"
	),
);

$plugin_vulnerabilities["image-export"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "1.1.0",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=135"
	),
);

$plugin_vulnerabilities["image-symlinks"] = array(
	"1" => array(
		"FirstVersion" => "0.5",
		"LastVersion" => "0.8.2",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.iransec.net/forums/index.php?/topic/2680-wordpress-image-symlinks-plugin-arbitrary-file-upload-vulnerability/"
	),
);

$plugin_vulnerabilities["improved-user-search-in-backend"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.2.5",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/csrf-and-xss-in-improved-user-search-allow-execution-of-arbitrary-javascript-in-wordpress-admin-area/"
	),
);

$plugin_vulnerabilities["inboundio-marketing"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "2.0",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://packetstormsecurity.com/files/130957/WordPress-InBoundio-Marketing-Shell-Upload.html"
	),
);

$plugin_vulnerabilities["infusionsoft"] = array(
	"1" => array(
		"FirstVersion" => "1.5.3",
		"LastVersion" => "1.5.10",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "https://research.g0blin.co.uk/cve-2014-6446/"
	),
);

$plugin_vulnerabilities["invit0r"] = array(
	"1" => array(
		"FirstVersion" => "0.2",
		"LastVersion" => "0.22",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-invit0r-arbitrary-file-upload-vulnerability.html"
	),
);

$plugin_vulnerabilities["is-human"] = array(
	"1" => array(
		"FirstVersion" => "1.3.3",
		"LastVersion" => "1.4.2",
		"TypeOfVulnerability" => "remote code execution",
		"URL" => "http://packetstormsecurity.com/files/101497/Is-Human-1.4.2-WordPress-Plugin-Command-Execution.html"
	),
);

$plugin_vulnerabilities["itwitter"] = array(
	"1" => array(
		"FirstVersion" => "Version 0.01 (05-06-2009)",
		"LastVersion" => "Version 0.04 (30-07-2009)",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://vulnerability-lab.com/get_content.php?id=1375"
	),
);
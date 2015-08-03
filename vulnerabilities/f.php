<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["fancy-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.5",
		"LastVersion" => "1.5.12",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/fancy-gallery-1512-reflected-xss.html"
	),
);

$plugin_vulnerabilities["fast-image-adder"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=139"
	),
);

$plugin_vulnerabilities["fancybox-for-wordpress"] = array(
	"1" => array(
		"FirstVersion" => "3.0",
		"LastVersion" => "3.0.2",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "https://wordpress.org/support/topic/possible-malware-2"
	),
);

$plugin_vulnerabilities["feature-comments"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.2.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://security.dxw.com/advisories/csrf-in-featured-comments-1-2-1-allows-an-attacker-to-set-and-unset-comment-statuses/"
	),
);

$plugin_vulnerabilities["filedownload"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.1",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.exploit-db.com/exploits/17858/"
	),
	"2" => array(
		"FirstVersion" => "1.4",
		"LastVersion" => "1.4",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=140"
	),
);

$plugin_vulnerabilities["flickr-justified-gallery"] = array(
	"1" => array(
		"FirstVersion" => "3.2",
		"LastVersion" => "3.3.6",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/reflected-xss-in-flickr-justified-gallery-could-allows-unauthenticated-attackers-to-do-almost-anything-an-admin-can-do/"
	),
);

$plugin_vulnerabilities["floating-social-bar"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "1.1.6",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/floating-social-bar-115-xss.html"
	),
);

$plugin_vulnerabilities["formidable"] = array(
	"1" => array(
		"FirstVersion" => "1.07.5",
		"LastVersion" => "2.0.07",
		"TypeOfVulnerability" => "information disclosure",
		"URL" => "https://research.g0blin.co.uk/g0blin-00049/"
	),
);

$plugin_vulnerabilities["fourteen-extended"] = array(
	"1" => array(
		"FirstVersion" => "1.2.1",
		"LastVersion" => "1.2.31",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/reflected-xss-in-fourteen-extended-allows-arbitrary-javascript-to-be-run-in-administrator-session/"
	),
);

$plugin_vulnerabilities["foxypress"] = array(
	"1" => array(
		"FirstVersion" => "0.3.6.1",
		"LastVersion" => "0.4.2.1",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-foxypress-shell-upload-vulnerability.html"
	),
);

$plugin_vulnerabilities["free-counter"] = array(
	"1" => array(
		"FirstVersion" => "1.0.5",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "https://www.exploit-db.com/exploits/37132/"
	),
);

$plugin_vulnerabilities["front-end-upload"] = array(
	"1" => array(
		"FirstVersion" => "0.3.0",
		"LastVersion" => "0.5.3",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "https://www.exploit-db.com/exploits/19008/"
	),
);

$plugin_vulnerabilities["front-file-manager"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.1",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.exploit-db.com/exploits/19012/"
	),
);

$plugin_vulnerabilities["frontend-uploader"] = array(
	"1" => array(
		"FirstVersion" => "0.9",
		"LastVersion" => "0.9.2",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129749/WordPress-Frontend-Uploader-0.9.2-Cross-Site-Scripting.html"
	),
);
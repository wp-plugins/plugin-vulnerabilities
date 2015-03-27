<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["paid-memberships-pro"] = array(
	"1" => array(
		"FirstVersion" => "1.5.1",
		"LastVersion" => "1.7.14.2",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://security.szurek.pl/paid-memberships-pro-17142-path-traversal.html"
	),
);

$plugin_vulnerabilities["photo-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.1.30",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23232"
	),
	"2" => array(
		"FirstVersion" => "1.1.12",
		"LastVersion" => "1.2.7",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://seclists.org/fulldisclosure/2015/Jan/36"
	),
	"3" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.2.8",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130149/WordPress-Photo-Gallery-1.2.8-Cross-Site-Scripting.html"
	),
	"4" => array(
		"FirstVersion" => "1.1.12",
		"LastVersion" => "1.2.5",
		"TypeOfVulnerability" => "authenticated arbitrary file upload",
		"URL" => "http://security.szurek.pl/photo-gallery-125-unrestricted-file-upload.html"
	),
	"5" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.2.5",
		"TypeOfVulnerability" => "authenticated SQL injection",
		"URL" => "http://packetstormsecurity.com/files/130148/WordPress-Photo-Gallery-1.2.8-SQL-Injection.html"
	),
);

$plugin_vulnerabilities["pica-photo-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://packetstormsecurity.com/files/113404/WordPress-PICA-Photo-Gallery-1.0-File-Disclosure.html"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://packetstormsecurity.com/files/113504/WordPress-Pica-Photo-Gallery-1.0-Shell-Upload.html"
	),
);

$plugin_vulnerabilities["pictobrowser-gallery"] = array(
	"1" => array(
		"FirstVersion" => "0.2 ",
		"LastVersion" => "0.3.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129638/WordPress-PictoBrowser-0.3.1-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["pie-register"] = array(
	"1" => array(
		"FirstVersion" => "2.0.6",
		"LastVersion" => "2.0.13",
		"TypeOfVulnerability" => "privilege escalation",
		"URL" => "http://security.szurek.pl/pie-register-2013-privilege-escalation.html"
	),
);

$plugin_vulnerabilities["pixabay-images"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.3",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://packetstormsecurity.com/files/130017/WordPress-Pixarbay-Images-2.3-XSS-Bypass-Upload-Traversal.html"
	),
);

$plugin_vulnerabilities["player"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://packetstormsecurity.com/files/121250/WordPress-Spider-Video-Player-2.1-SQL-Injection.html"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.3",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/124353/WordPress-Spider-Video-Player-2.1-Cross-Site-Scripting.html"
	),
);

$plugin_vulnerabilities["plugin-newsletter"] = array(
	"1" => array(
		"FirstVersion" => "1.3",
		"LastVersion" => "1.5",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.exploit-db.com/exploits/19018/"
	),
);

$plugin_vulnerabilities["pods"] = array(
	"1" => array(
		"FirstVersion" => "2.3.10",
		"LastVersion" => "2.5.1.2",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129890/WordPress-Pods-2.4.3-CSRF-Cross-Site-Scripting.html"
	),
	"2" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.4.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "http://packetstormsecurity.com/files/129890/WordPress-Pods-2.4.3-CSRF-Cross-Site-Scripting.html"
	),
	"3" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.4.1",
		"TypeOfVulnerability" => "privilege escalation",
		"URL" => "http://pods.io/2014/06/23/full-details-pods-2-x-security-vulnerability-patched-pods-2-4-2/"
	),
);

$plugin_vulnerabilities["post-expirator"] = array(
	"1" => array(
		"FirstVersion" => "1.2",
		"LastVersion" => "2.1.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/csrf-and-xss-in-post-expirator-2-1-1/"
	),
);

$plugin_vulnerabilities["post-to-twitter"] = array(
	"1" => array(
		"FirstVersion" => "0.6",
		"LastVersion" => "0.8",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129639/WordPress-Twitter-0.7-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["powerpress"] = array(
	"1" => array(
		"FirstVersion" => "0.8.0",
		"LastVersion" => "6.0",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.netsparker.com/cve-2015-1385-xss-vulnerability-in-blubrry-powerpress/"
	),
);


$plugin_vulnerabilities["pwgrandom"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.11",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129640/WordPress-PWG-Random-1.11-CSRF-XSS.html"
	),
);

<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["ready-ecommerce"] = array(
	"1" => array(
		"FirstVersion" => "0.1.2",
		"LastVersion" => "0.6.0",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://vexatioustendencies.com/wordpress-plugin-vulnerability-dump-part-1/"
	),
);

$plugin_vulnerabilities["really-easy-slider"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.1",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.exploit-db.com/exploits/17872/"
	),
);

$plugin_vulnerabilities["really-simple-guest-post"] = array(
	"1" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.0.6",
		"TypeOfVulnerability" => "local file inclusion (LFI)",
		"URL" => "https://www.exploit-db.com/exploits/37209/"
	),
);

$plugin_vulnerabilities["recent-backups"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.7",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.vapid.dhs.org/advisory.php?v=144"
	),
);

$plugin_vulnerabilities["redirection-page"] = array(
	"1" => array(
		"FirstVersion" => "1.0.2",
		"LastVersion" => "1.0.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130314/WordPress-Redirection-Page-1.2-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["reflex-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "3.0",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-reflex-gallery-arbitrary-file-upload-vulnerability.html"
	),
	"2" => array(
		"FirstVersion" => "3.1.3",
		"LastVersion" => "3.1.3",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://0day.today/exploit/23369"
	),
);

$plugin_vulnerabilities["related-posts-lite"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "authenticated remote code execution",
		"URL" => "http://research.evex.pw/?vuln=9"
	),
);

$plugin_vulnerabilities["rent-a-car"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.exploit-db.com/exploits/17872/"
	),
);

$plugin_vulnerabilities["revslider"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "4.1.4",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://marketblog.envato.com/news/plugin-vulnerability/"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "3.0.95",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://whatisgon.wordpress.com/2014/11/30/another-revslider-vulnerability/"
	),
);

$plugin_vulnerabilities["rich-counter"] = array(
	"1" => array(
		"FirstVersion" => "1.1.0",
		"LastVersion" => "1.2.0",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "http://www.myblog.att4ck3r.ir/wordpress-rich-counter-plugin-cross-site-scripting/"
	),
);

$plugin_vulnerabilities["roomcloud"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://www.milw00rm.com/exploits/8858"
	),
);
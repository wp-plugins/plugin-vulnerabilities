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
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.exploit-db.com/exploits/17872/"
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
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-reflex-gallery-arbitrary-file-upload-vulnerability.html"
	),
	"2" => array(
		"FirstVersion" => "3.1.3",
		"LastVersion" => "3.1.3",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://en.1337day.com/exploit/23369"
	),
);

$plugin_vulnerabilities["rent-a-car"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "unrestricted file upload",
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
		"TypeOfVulnerability" => "unrestricted file upload",
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
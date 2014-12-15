<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["seo-watcher"] = array(
	"1" => array(
		"FirstVersion" => "1.3.2",
		"LastVersion" => "1.3.3",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://packetstormsecurity.com/files/123493/WordPress-SEO-Watcher-Remote-Code-Execution.html"
	),
);

$plugin_vulnerabilities["sexy-contact-form"] = array(
	"1" => array(
		"FirstVersion" => "0.9.1",
		"LastVersion" => "0.9.8",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.homelab.it/index.php/2014/10/24/creative-contact-form-unauthenticated-shell-upload/"
	),
);

$plugin_vulnerabilities["simple-download-button-shortcode"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://packetstormsecurity.com/files/113415/WordPress-Simple-Download-Button-Shortcode-1.0-File-Disclosure.html"
	),
);

$plugin_vulnerabilities["simple-ip-ban"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129500/WordPress-IP-Ban-1.2.3-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["simple-sticky-footer"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.3.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129503/WordPress-Simple-Sticky-Footer-1.3.2-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["simple-visitor-stat"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129502/WordPress-Simple-Visitor-Stat-Cross-Site-Scripting.html"
	),
);

$plugin_vulnerabilities["sliding-recent-posts"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "1.0.0",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129504/WordPress-Sliding-Recent-Posts-1.0-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["sliding-social-icons"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.61",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129509/WordPress-Sliding-Social-Icons-1.61-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["sp-client-document-manager"] = array(
	"1" => array(
		"FirstVersion" => "1.2.7",
		"LastVersion" => "2.4.3",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://packetstormsecurity.com/files/129212/WordPress-SP-Client-Document-Manager-2.4.1-SQL-Injection.html"
	),
);

$plugin_vulnerabilities["simple-share-buttons-adder"] = array(
	"1" => array(
		"FirstVersion" => "1.9",
		"LastVersion" => "4.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/csrf-and-stored-xss-in-simple-share-buttons-adder/"
	),
);

$plugin_vulnerabilities["subscribe-to-comments-reloaded"] = array(
	"1" => array(
		"FirstVersion" => "2.0.2",
		"LastVersion" => "v140204",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/stored-xss-and-csrf-vulnerabilities-in-subscribe-to-comments-reloaded-140129/"
	),
);
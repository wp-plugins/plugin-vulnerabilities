<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["sell-downloads"] = array(
	"1" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.0.1",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "https://research.g0blin.co.uk/cve-2014-9511/"
	),
);

$plugin_vulnerabilities["seo-watcher"] = array(
	"1" => array(
		"FirstVersion" => "1.3.2",
		"LastVersion" => "1.3.3",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://packetstormsecurity.com/files/123493/WordPress-SEO-Watcher-Remote-Code-Execution.html"
	),
);

$plugin_vulnerabilities["sexy-contact-form"] = array(
	"1" => array(
		"FirstVersion" => "0.9.1",
		"LastVersion" => "0.9.8",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.homelab.it/index.php/2014/10/24/creative-contact-form-unauthenticated-shell-upload/"
	),
);

$plugin_vulnerabilities["showbiz"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.5.2",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://marketblog.envato.com/news/plugin-vulnerability/"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.7.1",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://whatisgon.wordpress.com/2014/11/30/another-revslider-vulnerability/"
	),
);

$plugin_vulnerabilities["simple-ads-manager"] = array(
	"1" => array(
		"FirstVersion" => "2.0.73",
		"LastVersion" => "2.6.96",
		"TypeOfVulnerability" => "information disclosure",
		"URL" => "http://www.itas.vn/news/ITAS-Team-found-out-multiple-critical-vulnerabilities-in-Hakin9-IT-Security-Magazine-78.html?language=en"
	),
	"2" => array(
		"FirstVersion" => "2.3.85",
		"LastVersion" => "2.5.94",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.itas.vn/news/ITAS-Team-found-out-multiple-critical-vulnerabilities-in-Hakin9-IT-Security-Magazine-78.html?language=en"
	),
	"3" => array(
		"FirstVersion" => "2.0.73",
		"LastVersion" => "2.6.96",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.itas.vn/news/ITAS-Team-found-out-multiple-critical-vulnerabilities-in-Hakin9-IT-Security-Magazine-78.html?language=en"
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

$plugin_vulnerabilities["simple-security"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.1.5",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23244"
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

$plugin_vulnerabilities["simpleflickr"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "3.3",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129642/WordPress-SimpleFlickr-3.0.3-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["simplelife"] = array(
	"1" => array(
		"FirstVersion" => "1.2",
		"LastVersion" => "1.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129641/WordPress-Simplelife-1.2-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["siteorigin-panels"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.0.4",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/page-builder-by-siteorigin-203-reflected-xss.html"
	),
);

$plugin_vulnerabilities["slider-image"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "2.6.8",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/SQL injection",
		"URL" => "https://www.htbridge.com/advisory/HTB23250"
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

$plugin_vulnerabilities["smart-forms"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "2.1.0",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/wordpress-smart-forms-210-xss.html"
	),
);

$plugin_vulnerabilities["sp-client-document-manager"] = array(
	"1" => array(
		"FirstVersion" => "1.2.7",
		"LastVersion" => "2.4.3",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://packetstormsecurity.com/files/129212/WordPress-SP-Client-Document-Manager-2.4.1-SQL-Injection.html"
	),
	"2" => array(
		"FirstVersion" => "1.5.9",
		"LastVersion" => "2.5.3",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.exploit-db.com/exploits/36576/"
	),
);

$plugin_vulnerabilities["spider-event-calendar"] = array(
	"1" => array(
		"FirstVersion" => "1.4",
		"LastVersion" => "1.4.9",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.exploit-db.com/exploits/36061/"
	),
);

$plugin_vulnerabilities["spider-facebook"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0.10",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130318/WordPress-Spider-Facebook-1.0.10-Cross-Site-Scripting.html"
	),
);

$plugin_vulnerabilities["spnbabble"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.4.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129580/WordPress-SPNbabble-1.4.1-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["store-locator"] = array(
	"1" => array(
		"FirstVersion" => "2.11",
		"LastVersion" => "3.3.1",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => ""
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
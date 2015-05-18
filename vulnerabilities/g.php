<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["gallery-bank"] = array(
	"1" => array(
		"FirstVersion" => "3.0.0",
		"LastVersion" => "3.0.34",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://cxsecurity.com/issue/WLB-2014100159"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "2.0.26",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://www.securityfocus.com/archive/1/529637"
	),
	"3" => array(
		"FirstVersion" => "3.0.100",
		"LastVersion" => "3.0.101",
		"TypeOfVulnerability" => "authenticated SQL injection",
		"URL" => "https://research.g0blin.co.uk/g0blin-00033/"
	),
);

$plugin_vulnerabilities["gd-star-rating"] = array(
	"1" => array(
		"FirstVersion" => "0.9.0",
		"LastVersion" => "1.9.22",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/SQL injection",
		"URL" => "https://security.dxw.com/advisories/csrf-and-blind-sql-injection-in-gd-star-rating-1-9-22/"
	),
);

$plugin_vulnerabilities["geo-mashup"] = array(
	"1" => array(
		"FirstVersion" => "1.5",
		"LastVersion" => "1.8.2",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130150/WordPress-Geo-Mashup-1.8.2-Cross-Site-Scripting.html"
	),
);

$plugin_vulnerabilities["google-analytics-for-wordpress"] = array(
	"1" => array(
		"FirstVersion" => "4.2",
		"LastVersion" => "5.3.2",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "http://klikki.fi/adv/yoast_analytics.html"
	),
);

$plugin_vulnerabilities["google-analytics-mu"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "2.3.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://security.dxw.com/advisories/csrf-in-google-analytics-mu-2-3/"
	),
);

$plugin_vulnerabilities["google-calendar-events"] = array(
	"1" => array(
		"FirstVersion" => "2.0.0",
		"LastVersion" => "2.0.3.1",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23235"
	),
);

$plugin_vulnerabilities["google-document-embedder"] = array(
	"1" => array(
		"FirstVersion" => "2.5",
		"LastVersion" => "2.5.16",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://security.szurek.pl/google-doc-embedder-2514-sql-injection.html"
	),
	"2" => array(
		"FirstVersion" => "2.5",
		"LastVersion" => "2.5.18",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130309/WordPress-Google-Doc-Embedder-2.5.18-Cross-Site-Scripting.html"
	),
);

$plugin_vulnerabilities["google-maps-ready"] = array(
	"1" => array(
		"FirstVersion" => "0.4.2",
		"LastVersion" => "0.1.9",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://vexatioustendencies.com/wordpress-plugin-vulnerability-dump-part-1/"
	),
);

$plugin_vulnerabilities["google-mp3-audio-player"] = array(
	"1" => array(
		"FirstVersion" => "1.0.9",
		"LastVersion" => "1.0.11",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.exploit-db.com/exploits/35460/"
	),
);

$plugin_vulnerabilities["gravity-file-ajax-upload-free"] = array(
	"1" => array(
		"FirstVersion" => "alpha 1.1",
		"LastVersion" => "alpha 1.1",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "https://research.g0blin.co.uk/cve-2014-4972/"
	),
);

$plugin_vulnerabilities["gregs-high-performance-seo"] = array(
	"1" => array(
		"FirstVersion" => "1.3.5",
		"LastVersion" => "1.6.1",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/gregs-high-performance-seo-161-reflected-xss.html"
	),
);

$plugin_vulnerabilities["gslideshow"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129637/WordPress-gSlideShow-0.1-CSRF-XSS.html"
	),
);
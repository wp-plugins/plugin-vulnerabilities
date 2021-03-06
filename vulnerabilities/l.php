<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["landing-pages"] = array(
	"1" => array(
		"FirstVersion" => "1.3.5",
		"LastVersion" => "1.8.6",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://packetstormsecurity.com/files/132037/WordPress-Landing-Pages-1.8.4-Cross-Site-Scripting-SQL-Injection.html"
	),
	"2" => array(
		"FirstVersion" => "1.0.8.6",
		"LastVersion" => "1.8.4",
		"TypeOfVulnerability" => "authenticated SQL injection",
		"URL" => "https://packetstormsecurity.com/files/132037/WordPress-Landing-Pages-1.8.4-Cross-Site-Scripting-SQL-Injection.html"
	),
);

$plugin_vulnerabilities["leads"] = array(
	"1" => array(
		"FirstVersion" => "1.5.2",
		"LastVersion" => "1.6.2",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "https://research.g0blin.co.uk/g0blin-00042/"
	),
);

$plugin_vulnerabilities["leaguemanager"] = array(
	"1" => array(
		"FirstVersion" => "2.9",
		"LastVersion" => "3.9.1.1",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "https://www.exploit-db.com/exploits/37182/"
	),
);

$plugin_vulnerabilities["levelfourstorefront"] = array(
	"1" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "8.1.14",
		"TypeOfVulnerability" => "backup download",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-wordpress-shopping-cart-multiple-vulnerability.html"
	),
	"2" => array(
		"FirstVersion" => "2.0",
		"LastVersion" => "8.1.14",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-wordpress-shopping-cart-multiple-vulnerability.html"
	),
);

$plugin_vulnerabilities["lightbox-photo-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129507/WordPress-Lightbox-Photo-Gallery-1.0-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["like-dislike-counter-for-posts-pages-and-comments"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2.3",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://packetstormsecurity.com/files/128178/WordPress-Like-Dislike-Counter-1.2.3-SQL-Injection.html"
	),
);

$plugin_vulnerabilities["link-library"] = array(
	"1" => array(
		"FirstVersion" => "5.8.3",
		"LastVersion" => "5.8.10.6",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/link-library-58106-reflected-xss.html"
	),
);

$plugin_vulnerabilities["lisl-last-image-slider"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.exploit-db.com/exploits/17872/"
	),
);

$plugin_vulnerabilities["liveforms"] = array(
	"1" => array(
		"FirstVersion" => "1.0.0",
		"LastVersion" => "3.0.1",
		"TypeOfVulnerability" => "authenticated SQL injection",
		"URL" => "https://research.g0blin.co.uk/g0blin-00034/"
	),
);

$plugin_vulnerabilities["login-sidebar-widget"] = array(
	"1" => array(
		"FirstVersion" => "2.2.3",
		"LastVersion" => "3.1.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/csrfxss-vulnerablity-in-login-widget-with-shortcode-allows-unauthenticated-attackers-to-do-anything-an-admin-can-do/"
	),
);
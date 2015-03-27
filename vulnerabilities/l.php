<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

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

$plugin_vulnerabilities["login-sidebar-widget"] = array(
	"1" => array(
		"FirstVersion" => "2.2.3",
		"LastVersion" => "3.1.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/csrfxss-vulnerablity-in-login-widget-with-shortcode-allows-unauthenticated-attackers-to-do-anything-an-admin-can-do/"
	),
);
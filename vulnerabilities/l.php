<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

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
		"TypeOfVulnerability" => "SQL Injection",
		"URL" => "http://packetstormsecurity.com/files/128178/WordPress-Like-Dislike-Counter-1.2.3-SQL-Injection.html"
	),
);

$plugin_vulnerabilities["lisl-last-image-slider"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "unrestricted file upload",
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
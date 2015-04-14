<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["theme-my-login"] = array(
	"1" => array(
		"FirstVersion" => "6.0",
		"LastVersion" => "6.3.9",
		"TypeOfVulnerability" => "authenticated local file inclusion (LFI)",
		"URL" => "https://security.dxw.com/advisories/lfi-in-theme-my-login/"
	),
);

$plugin_vulnerabilities["tinymce-thumbnail-gallery"] = array(
	"1" => array(
		"FirstVersion" => "v1.0.4",
		"LastVersion" => "v1.0.7",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://www.exploit-db.com/exploits/19022/"
	),
);

$plugin_vulnerabilities["trafficanalyzer"] = array(
	"1" => array(
		"FirstVersion" => "1.8.0",
		"LastVersion" => "3.4.2",
		"TypeOfVulnerability" => "SQL Injection",
		"URL" => "http://www.exploit-db.com/exploits/36677/"
	),
);

$plugin_vulnerabilities["tweetscribe"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129645/WordPress-TweetScribe-1.1-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["twimp-wp"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "0.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129643/WordPress-twimp-wp-Cross-Site-Request-Forgery-Cross-Site-Scripting.html"
	),
);


$plugin_vulnerabilities["twitget"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "3.3.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/csrfxss-vulnerability-in-twitget-3-3-1/"
	),
);

$plugin_vulnerabilities["twitter-liveblog"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.1.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129644/WordPress-Twitter-LiveBlog-1.1.2-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["twitterdash"] = array(
	"1" => array(
		"FirstVersion" => "v1.00",
		"LastVersion" => "2.1",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129579/WordPress-twitterDash-2.1-CSRF-XSS.html"
	),
);
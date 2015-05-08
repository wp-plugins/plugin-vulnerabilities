<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["hd-webplayer"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://packetstormsecurity.com/files/116011/WordPress-HD-Webplayer-1.1-SQL-Injection.html"
	),
);

$plugin_vulnerabilities["html5-mp3-player-with-playlist"] = array(
	"1" => array(
		"FirstVersion" => "2.7.0",
		"LastVersion" => "2.7.0",
		"TypeOfVulnerability" => "full path disclosure",
		"URL" => "http://h4x0resec.blogspot.com/2014/11/wordpress-html5-mp3-player-with.html"
	),
);

$plugin_vulnerabilities["html5avmanager"] = array(
	"1" => array(
		"FirstVersion" => "0.1.0",
		"LastVersion" => "0.2.7",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.opensyscom.fr/Actualites/wordpress-plugins-html5-av-manager-shell-upload-vulnerability.html"
	),
);
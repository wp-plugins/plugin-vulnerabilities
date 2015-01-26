<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["cardoza-facebook-like-box"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "2.8.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129506/WordPress-Facebook-Like-Box-2.8.2-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["cart66-lite"] = array(
	"1" => array(
		"FirstVersion" => "1.4.0",
		"LastVersion" => "1.5.1.17",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://security.szurek.pl/cart66-lite-wordpress-ecommerce-15117-blind-sql-injection.html"
	),
);

$plugin_vulnerabilities["category-list-portfolio-page"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2.3",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.exploit-db.com/exploits/17872/"
	),
);

$plugin_vulnerabilities["cforms2"] = array(
	"1" => array(
		"FirstVersion" => "10.2",
		"LastVersion" => "14.7",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://1337day.com/exploit/23056"
	),
);

$plugin_vulnerabilities["cip4-folder-download-widget"] = array(
	"1" => array(
		"FirstVersion" => "1.4",
		"LastVersion" => "1.10",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://packetstormsecurity.com/files/130009/WordPress-CIP4-Folder-Download-1.10-Local-File-Inclusion.html"
	),
);

$plugin_vulnerabilities["clean-and-simple-contact-form-by-meg-nicholas"] = array(
	"1" => array(
		"FirstVersion" => "4.1.3",
		"LastVersion" => "4.4.0",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/128957/WordPress-Clean-And-Simple-Contact-Form-4.4.0-XSS.html"
	),
);

$plugin_vulnerabilities["cm-download-manager"] = array(
	"1" => array(
		"FirstVersion" => "1.4.0",
		"LastVersion" => "2.0.0",
		"TypeOfVulnerability" => "remote code execution",
		"URL" => "http://packetstormsecurity.com/files/129183/WordPress-CM-Download-Manager-2.0.0-Code-Injection.html"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "2.0.6",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/129357/WordPress-CM-Download-Manager-2.0.6-XSS-CSRF.html"
	),
);

$plugin_vulnerabilities["codecanyon-3958969-wpdatatables-responsive-tables-in-wordpress"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0.53",
		"TypeOfVulnerability" => "unrestricted file upload",
		"URL" => "http://www.homelab.it/index.php/2014/11/23/wordpress-wpdatatables-shell-upload-vulnerability/"
	),
);

$plugin_vulnerabilities["contact-form-7-to-database-extension"] = array(
	"1" => array(
		"FirstVersion" => "2.7.2",
		"LastVersion" => "2.8.15",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23233"
	),
	"2" => array(
		"FirstVersion" => "2.7.5",
		"LastVersion" => "2.8.19",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/contact-form-db-2819-reflected-xss.html"
	),
);

$plugin_vulnerabilities["cp-multi-view-calendar"] = array(
	"1" => array(
		"FirstVersion" => "1.01",
		"LastVersion" => "1.01",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.homelab.it/index.php/2014/10/23/wordpress-cp-multi-view-event-calendar-1-01-sql-injection/"
	),
);
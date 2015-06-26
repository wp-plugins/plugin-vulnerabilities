<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["calculated-fields-form"] = array(
	"1" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.0.10",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/SQL injection",
		"URL" => "http://packetstormsecurity.com/files/130603/WordPress-Calculated-Fields-Form-1.0.10-SQL-Injection.html"
	),
);

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
		"FirstVersion" => "1.4",
		"LastVersion" => "1.5.1.17",
		"TypeOfVulnerability" => "authenticated SQL injection",
		"URL" => "http://security.szurek.pl/cart66-lite-wordpress-ecommerce-15117-blind-sql-injection.html"
	),
	"2" => array(
		"FirstVersion" => "1.4",
		"LastVersion" => "1.5.4",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130307/WordPress-Cart66-Lite-1.5.4-Cross-Site-Scripting.html"
	),
);

$plugin_vulnerabilities["category-list-portfolio-page"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.2.3",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.exploit-db.com/exploits/17872/"
	),
);

$plugin_vulnerabilities["cforms2"] = array(
	"1" => array(
		"FirstVersion" => "10.2",
		"LastVersion" => "14.7",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://0day.today/exploit/23056"
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

$plugin_vulnerabilities["citizen-space"] = array(
	"1" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/reflected-xss-in-citizen-space-allows-attackers-to-view-sensitive-information-of-the-attackers-choosing/"
	),
	"2" => array(
		"FirstVersion" => "0.1",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/xss-via-csrf-in-citizen-space-1-0/"
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

$plugin_vulnerabilities["clickbank-ads-clickbank-widget"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.7",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/131814/WordPress-ClickBank-Ads-1.7-CSRF-Cross-Site-Scripting.html"
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
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.homelab.it/index.php/2014/11/23/wordpress-wpdatatables-shell-upload-vulnerability/"
	),
);

$plugin_vulnerabilities["coming-soon-maintenance-mode-ready"] = array(
	"1" => array(
		"FirstVersion" => "0.4.9",
		"LastVersion" => "0.5.1",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "https://vexatioustendencies.com/wordpress-plugin-vulnerability-dump-part-1/"
	),
);

$plugin_vulnerabilities["community-events"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.3.5",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "https://www.exploit-db.com/exploits/36805/"
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
	"3" => array(
		"FirstVersion" => "2.8.9",
		"LastVersion" => "2.8.27",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130311/WordPress-Contact-Form-DB-2.8.26-Cross-Site-Scripting.html"
	),
	"4" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "2.8.31",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "https://security.dxw.com/advisories/csrf-in-contact-form-db-allows-attacker-to-delete-all-stored-form-submissions/"
	),
);

$plugin_vulnerabilities["contact-form-maker"] = array(
	"1" => array(
		"FirstVersion" => "1.7.10",
		"LastVersion" => "1.7.18",
		"TypeOfVulnerability" => "authenticated persistent cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/contact-form-maker-1718-xss.html"
	),
);

$plugin_vulnerabilities["contact-form-to-email"] = array(
	"1" => array(
		"FirstVersion" => "1.01",
		"LastVersion" => "1.01",
		"TypeOfVulnerability" => "persistent cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/contact-form-to-email-101-xss.html"
	),
	"2" => array(
		"FirstVersion" => "1.01",
		"LastVersion" => "1.1.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/131901/WordPress-Contact-Form-To-Email-Plugin-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["content-slide"] = array(
	"1" => array(
		"FirstVersion" => "1.3",
		"LastVersion" => "1.4.2",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "https://security.dxw.com/advisories/csrf-and-stored-xss-in-wordpress-content-slide-allow-an-attacker-to-have-full-admin-privileges/"
	),
);

$plugin_vulnerabilities["contus-video-gallery"] = array(
	"1" => array(
		"FirstVersion" => "2.2",
		"LastVersion" => "2.3",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://0day.today/exploit/23207"
	),
	"2" => array(
		"FirstVersion" => "2.7",
		"LastVersion" => "2.7",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.homelab.it/index.php/2015/02/11/wordpress-video-gallery-2-7-sql-injection/"
	),
	"3" => array(
		"FirstVersion" => "2.7",
		"LastVersion" => "2.8",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)",
		"URL" => "http://www.exploit-db.com/exploits/36610/"
	),
	"4" => array(
		"FirstVersion" => "2.7",
		"LastVersion" => "2.8",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/SQL injection",
		"URL" => "http://www.homelab.it/index.php/2015/04/13/wordpress-video-gallery-2-8-sql-injection-vulnerability/"
	),
);

$plugin_vulnerabilities["cp-multi-view-calendar"] = array(
	"1" => array(
		"FirstVersion" => "1.01",
		"LastVersion" => "1.01",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.homelab.it/index.php/2014/10/23/wordpress-cp-multi-view-event-calendar-1-01-sql-injection/"
	),
	"2" => array(
		"FirstVersion" => "1.01",
		"LastVersion" => "1.1.5",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://www.milw00rm.com/exploits/7740"
	),
	"3" => array(
		"FirstVersion" => "1.0.2",
		"LastVersion" => "1.1.4",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://www.exploit-db.com/exploits/36243/"
	),
	"4" => array(
		"FirstVersion" => "1.0.1",
		"LastVersion" => "1.1.4",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.exploit-db.com/exploits/36243/"
	),
);

$plugin_vulnerabilities["crayon-syntax-highlighter"] = array(
	"1" => array(
		"FirstVersion" => "2.0.0",
		"LastVersion" => "2.6.10",
		"TypeOfVulnerability" => "authenticated defacement",
		"URL" => "https://research.g0blin.co.uk/g0blin-00044/"
	),
);

$plugin_vulnerabilities["crossslide-jquery-plugin-for-wordpress"] = array(
	"1" => array(
		"FirstVersion" => "1.1.0",
		"LastVersion" => "2.0.5",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130313/WordPress-Cross-Slide-2.0.5-Cross-Site-Request-Forgery-Cross-Site-Scripting.html"
	),
);
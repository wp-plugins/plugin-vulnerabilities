<?php
//Block direct access to the file
if ( !function_exists( 'add_action' ) ) {
	exit; 
}

$plugin_vulnerabilities["ab-google-map-travel"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "3.4",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130960/WordPress-AB-Google-Map-Travel-CSRF-XSS.html"
	),
);


$plugin_vulnerabilities["acobot"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "2.0",
		"TypeOfVulnerability" => "cross-site request forgery (CSRF)/cross-site scripting (XSS)",
		"URL" => "http://packetstormsecurity.com/files/130306/WordPress-Acobot-Live-Chat-And-Contact-Form-2.0-CSRF-XSS.html"
	),
);

$plugin_vulnerabilities["ad-minister"] = array(
	"1" => array(
		"FirstVersion" => "0.5",
		"LastVersion" => "0.6",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "https://www.htbridge.com/advisory/HTB23187"
	),
);

$plugin_vulnerabilities["advanced-custom-fields"] = array(
	"1" => array(
		"FirstVersion" => "3.5.0",
		"LastVersion" => "3.5.1",
		"TypeOfVulnerability" => "remote file inclusion (RFI)",
		"URL" => "http://ceriksen.com/2012/11/14/wordpress-advanced-custom-fields-remote-file-inclusion-vulnerability/"
	),
);

$plugin_vulnerabilities["ajax-pagination"] = array(
	"1" => array(
		"FirstVersion" => "1.1",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "local file inclusion (LFI)",
		"URL" => "https://security.dxw.com/advisories/end-user-exploitable-local-file-inclusion-vulnerability-in-ajax-pagination-twitter-style-1-1/"
	),
);

$plugin_vulnerabilities["ajax-search-lite"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "3.11",
		"TypeOfVulnerability" => "authenticated remote code execution",
		"URL" => "http://research.evex.pw/?vuln=9"
	),
);

$plugin_vulnerabilities["all-video-gallery"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.1",
		"TypeOfVulnerability" => "SQL injection",
		"URL" => "http://www.exploit-db.com/exploits/22427/"
	),
);

$plugin_vulnerabilities["another-wordpress-classifieds-plugin"] = array(
	"1" => array(
		"FirstVersion" => "3.2.1",
		"LastVersion" => "3.3.1",
		"TypeOfVulnerability" => "reflected cross-site scripting (XSS)",
		"URL" => "http://security.szurek.pl/another-wordpress-classifieds-plugin-331-reflected-xss.html"
	),
);

$plugin_vulnerabilities["aspose-cloud-ebook-generator"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://packetstormsecurity.com/files/131040/WordPress-Aspose-Cloud-eBook-Generator-File-Download.html"
	),
);

$plugin_vulnerabilities["aspose-doc-exporter"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://packetstormsecurity.com/files/131167/WordPress-Aspose-Doc-Exporter-File-Download.html"
	),
);

$plugin_vulnerabilities["aspose-importer-exporter"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://packetstormsecurity.com/files/131162/WordPress-Aspose-Importer-Exporter-1.0-File-Download.html"
	),
);

$plugin_vulnerabilities["aspose-pdf-exporter"] = array(
	"1" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "arbitrary file viewing",
		"URL" => "http://packetstormsecurity.com/files/131161/WordPress-Aspose-PDF-Exporter-File-Download.html"
	),
);


$plugin_vulnerabilities["asset-manager"] = array(
	"1" => array(
		"FirstVersion" => "0.2",
		"LastVersion" => "0.2",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.exploit-db.com/exploits/18993/"
	),
	"2" => array(
		"FirstVersion" => "1.0",
		"LastVersion" => "1.0",
		"TypeOfVulnerability" => "arbitrary file upload",
		"URL" => "http://www.exploit-db.com/exploits/18993/"
	),
);
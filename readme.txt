=== Plugin Vulnerabilities ===
Contributors: WhiteFirDesign
Tags: exploit, plugin security, plugin vulnerability, plugins, security, vuln, vulnerability, vulnerabilities
Requires at least: 4.0
Tested up to: 4.1
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Alerts when installed plugins contain known security vulnerabilities. Also lists vulnerabilities that exist in other versions of installed plugins.

== Description ==

This plugin checks the plugins you have installed against a list of verified security vulnerabilities. If the installed version of a plugin is vulnerable an alert is added to the Installed Plugins page, otherwise details of the vulnerabilities are included on the Plugin Vulnerabilities page.

Because we verify each vulnerability before including it not all known vulnerabilities are included, but we are increasing the number of included vulnerabilities on a regular basis.

If you want to let us know of a missing vulnerability or if we need to correct something in an included vulnerability, please leave a message in the support forum or send an email to pluginvulnerabilities@whitefirdesign.com. For missing vulnerabilities please include a link to the details of the vulnerability.

**Stats** (As of January 16, 2015)

* 152 vulnerabilities included
* 44 included vulnerabilities are in the most recent version of plugins (41 of these plugins have been [removed from the Plugin Directory](https://wordpress.org/plugins/no-longer-in-directory/))
* 10 vulnerabilities have been fixed in part due to our work on this plugin
* 4 included [vulnerabilities in security plugins](https://www.whitefirdesign.com/plugin-vulnerabilities/vulnerabilities-in-wordpress-security-plugins.html)
* Top vulnerability types:
 * cross-site request forgery (CSRF)/cross-site scripting (XSS): 32 vulnerabilities
 * reflected cross-site scripting (XSS): 25 vulnerabilities
 * unrestricted file upload: 24 vulnerabilities
 * arbitrary file viewing: 13 vulnerabilities
 * SQL injection: 11 vulnerabilities
* Top vulnerability discoverers:
 * [dxwsecurity](https://security.dxw.com/advisories/): 27 vulnerabilities
 * [Kacper Szurek](http://security.szurek.pl/): 18 vulnerabilities
 * [High-Tech Bridge](https://www.htbridge.com/advisory/): 9 vulnerabilities
 * [HomeLab IT](http://www.homelab.it/): 5 vulnerabilities


== Installation ==

1. Copy plugin files to the plugins folder.

2. Activate the plugin.

3. Click the Plugin Vulnerabilities item in the Plugins Menu to see results.

== Screenshots ==

1. Alert Shown on Installed Plugins Page For Vulnerability In Version of Plugin In Use

2. Full Listing of Vulnerabilities That Have Existed in Installed Plugins

== Changelog ==

= 1.0.8 =
* Added 6 vulnerabilities

= 1.0.7 =
* Added 9 vulnerabilities

= 1.0.6 =
* Added 17 vulnerabilities

= 1.0.5 =
* Added 16 vulnerabilities

= 1.0.4 =
* Added 14 vulnerabilities

= 1.0.3 =
* Added 30 vulnerabilities

= 1.0.2 =
* Added 8 vulnerabilities

= 1.0.1 =
* Added 6 vulnerabilities

= 1.0 =
* Initial release
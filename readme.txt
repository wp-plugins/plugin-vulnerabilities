=== Plugin Vulnerabilities ===
Contributors: WhiteFirDesign
Tags: exploit, plugins, security, vulnerability, vulnerabilities
Requires at least: 4.0
Tested up to: 4.0
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Alerts when installed plugins contain known security vulnerabilities. Also lists vulnerabilities that exist in other versions of installed plugins.

== Description ==

This plugin checks the plugins you have installed against a list of verified security vulnerabilities. If the installed version of a plugin is vulnerable an alert is added to the Installed Plugins page, otherwise details of the vulnerabilities are included on the Plugin Vulnerabilities page.

Because we verify each vulnerability before including it not all known vulnerabilities are included, but we are increasing the number of included vulnerabilities on a regular basis.

If you want to let us know of a missing vulnerability or if we need to correct something in an included vulnerability, please leave a message in the support forum or send an email to pluginvulnerabilities@whitefirdesign.com. For missing vulnerabilities please include a link to the details of the vulnerability.

**Stats** (As of December 5, 2014)

* 60 vulnerabilities included
* 8 included vulnerabilities are in the most recent version of plugins (7 of these plugins have been [removed from the Plugin Directory](https://wordpress.org/plugins/no-longer-in-directory/))
* 5 vulnerabilities have been fixed in part due to our work on this plugin
* Top vulnerability types:
 * cross-site request forgery (CSRF): 19 vulnerabilities
 * reflected cross-site scripting (XSS): 13 vulnerabilities
 * unrestricted file upload: 9 vulnerabilities
 * SQL injection: 7 vulnerabilities
* Top vulnerability discoverers:
 * [dxwsecurity](https://security.dxw.com/advisories/): 27 vulnerabilities
 * [High-Tech Bridge](https://www.htbridge.com/advisory/): 8 vulnerabilities


== Installation ==

1. Copy plugin files to the plugins folder.

2. Activate the plugin.

3. Click the Plugin Vulnerabilities item in the Plugins Menu to see results.

== Screenshots ==

1. Alert Shown on Installed Plugins Page For Vulnerability In Version of Plugin In Use

2. Full Listing of Vulnerabilities That Have Existed in Installed Plugins

== Changelog ==

= 1.0.2 =
* Added 8 vulnerabilities

= 1.0.1 =
* Added 6 vulnerabilities

= 1.0 =
* Initial release
=== Plugin Vulnerabilities ===
Contributors: WhiteFirDesign
Tags: exploit, plugin security, plugin vulnerability, plugins, security, vuln, vulnerability, vulnerabilities
Requires at least: 4.0
Tested up to: 4.2
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Alerts when installed plugins contain known security vulnerabilities. Also lists vulnerabilities that exist in other versions of installed plugins.

== Description ==

This plugin checks the plugins you have installed against a list of verified security vulnerabilities. If the installed version of a plugin is vulnerable an alert is added to the Installed Plugins page, otherwise details of the vulnerabilities are included on the Plugin Vulnerabilities page.

The plugin also can be set to send out an email to the webmaster if a vulnerability is in the installed version of a plugin, for use if you update plugins using our [Automatic Plugin Updates plugin](https://wordpress.org/plugins/automatic-plugin-updates/) or some other method outside of the Installed Plugins page. 

This plugin's most important use is to protect against websites being hacked, but it is also helpful when working to determine how a website was hacked during the cleanup process of the hacked website. If your website has been hacked we can [help you to clean and secure it](https://www.whitefirdesign.com/services/hacked-wordpress-website-cleanup.html?pk_campaign=Plugin-Vulnerabilities).

Because we verify each vulnerability before including it, not all known vulnerabilities are included, but we are increasing the number of included vulnerabilities on a regular basis.

If you want to let us know of a missing vulnerability or if we need to correct something in an included vulnerability, please leave a message in the support forum or send an email to pluginvulnerabilities@whitefirdesign.com. For missing vulnerabilities please include a link to the details of the vulnerability.

> **Stats** (As of April 6, 2015)
> 
> * 257 vulnerabilities included
> * 61 included vulnerabilities are in the most recent version of plugins (57 of these plugins have been [removed from the Plugin Directory](https://wordpress.org/plugins/no-longer-in-directory/))
> * 24 vulnerabilities have been [fixed in part due to our work on this plugin](https://www.whitefirdesign.com/blog/2015/03/06/we-have-now-helped-get-16-wordpress-plugin-vulnerabilities-fixed/)
> * 5 included [vulnerabilities in security plugins](https://www.whitefirdesign.com/plugin-vulnerabilities/vulnerabilities-in-wordpress-security-plugins.html)
> * Top vulnerability types:
>  * cross-site request forgery (CSRF)/cross-site scripting (XSS): 52 vulnerabilities
>  * reflected cross-site scripting (XSS): 45 vulnerabilities
>  * arbitrary file upload: 45 vulnerabilities
>  * arbitrary file viewing: 23 vulnerabilities
>  * SQL injection: 16 vulnerabilities
> * Top vulnerability discoverers:
>  * [dxwsecurity](https://security.dxw.com/advisories/): 28 vulnerabilities
>  * [Kacper Szurek](http://security.szurek.pl/): 28 vulnerabilities
>  * [High-Tech Bridge](https://www.htbridge.com/advisory/): 12 vulnerabilities
>  * [g0blin Research](https://research.g0blin.co.uk/): 12 vulnerabilities
>  * [HomeLab IT](http://www.homelab.it/): 8 vulnerabilities


== Installation ==

1. Copy plugin files to the plugins folder.

2. Activate the plugin.

3. Click the Plugin Vulnerabilities item in the Plugins Menu to see results.

== Screenshots ==

1. Alert Shown on Installed Plugins Page For Vulnerability In Version of Plugin In Use

2. Full Listing of Vulnerabilities That Have Existed in Installed Plugins

== Changelog ==

= 1.0.25 =
* Added 16 vulnerabilities

= 1.0.24 =
* Added 8 vulnerabilities

= 1.0.23 =
* Added 8 vulnerabilities

= 1.0.22 =
* Added 9 vulnerabilities

= 1.0.21 =
* Added 8 vulnerabilities

= 1.0.20 =
* Added 20 vulnerabilities

= 1.0.19 =
* Added 8 vulnerabilities

= 1.0.18 =
* Added 9 vulnerabilities

= 1.0.17 =
* Added optional email alerts
* Added 9 vulnerabilities

= 1.0.16 =
* Added 9 vulnerabilities

= 1.0.15 =
* Added 11 vulnerabilities

= 1.0.14 =
* Added 6 vulnerabilities

= 1.0.13 =
* Added 5 vulnerabilities

= 1.0.12 =
* Added 11 vulnerabilities

= 1.0.11 =
* Added 4 vulnerabilities

= 1.0.10 =
* Added 7 vulnerabilities

= 1.0.9 =
* Added 4 vulnerabilities

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
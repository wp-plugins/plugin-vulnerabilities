<?php 
if( !defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') ) 
	exit;
delete_option('plugin_vulnerabilities_version');
delete_option('plugin_vulnerabilities_email_alerts');
delete_option('plugin_vulnerabilities_email_alerts_sent');
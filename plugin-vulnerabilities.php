<?php
/*
Plugin Name: Plugin Vulnerabilities
Plugin URI: https://www.whitefirdesign.com/plugin-vulnerabilities
Description: Alerts when installed plugins contain known security vulnerabilities. Also lists vulnerabilities that exist in other versions of installed plugins.
Version: 1.0.33
Author: White Fir Design
Author URI: https://www.whitefirdesign.com/
License: GPLv2
Text Domain: plugin-vulnerabilities
Domain Path: /languages

Copyright 2014-2015 White Fir Design

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; only version 2 of the License is applicable.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//Block direct access to the file
if ( !function_exists( 'add_action' ) ) { 
	exit; 
} 

add_action( 'admin_init', 'plugin_vulnerabilities_admin_init' );
   
function plugin_vulnerabilities_admin_init() {
       wp_register_style( 'PluginVulnerabilitiesStylesheet', plugins_url('stylesheet.css', __FILE__) );
}

function plugin_vulnerabilities_admin_styles() {
       wp_enqueue_style( 'PluginVulnerabilitiesStylesheet' );
}

function plugin_vulnerabilities_init() {
	load_plugin_textdomain( 'plugin-vulnerabilities', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action('init', 'plugin_vulnerabilities_init');


function plugin_vulnerabilities_add_pages() {
	$page = add_plugins_page( 'Plugin Vulnerabilities', 'Plugin Vulnerabilities', 'manage_options', 'plugin-vulnerabilities', 'plugin_vulnerabilities_page'  );
	add_action( 'admin_print_styles-' . $page, 'plugin_vulnerabilities_admin_styles' );
}
add_action('admin_menu', 'plugin_vulnerabilities_add_pages');

add_action("after_plugin_row", 'plugin_vulnerabilities_add_plugin_row', 10, 3 );

function plugin_vulnerabilities_add_plugin_row ( $plugin_file, $plugin_data, $status ) {

	//Load vulnerabilities
	if (!isset($plugin_vulnerabilities)) {
		global $plugin_vulnerabilities;
		foreach (range('a', 'z') as $char) {
			include_once(WP_PLUGIN_DIR.'/plugin-vulnerabilities/vulnerabilities/'.$char.'.php');
		}
	}

	//Check if installed plugins have vulnerabilities
	preg_match_all('/([a-z0-9\-]+)\//', $plugin_file, $plugin_path);
	if (isset($plugin_path[1][0])) {
		$plugin_path=$plugin_path[1][0];
		if (array_key_exists($plugin_path, $plugin_vulnerabilities)) {
			$plugin = get_plugin_data( WP_PLUGIN_DIR."/".$plugin_file, $markup = true, $translate = true );
			foreach ($plugin_vulnerabilities[$plugin_path] as &$vulnerability) {
				if ( version_compare( $plugin["Version"], $vulnerability["FirstVersion"], '>=') && version_compare( $plugin["Version"], $vulnerability["LastVersion"], '<=') ) {
					echo '<tr style="background-color: #FF8080;"><td colspan="3"><div>The '.$plugin["Name"].' plugin has a <a href="'.$vulnerability["URL"].'" target="_blank">'.$vulnerability["TypeOfVulnerability"].'</a> vulnerability.</div></td></tr>';
				}
			}
		}
	}
}

function plugin_vulnerabilities_page() {
	wp_enqueue_script('plugin-install');
	add_thickbox();
	
	//Store submitted data
	if ( ($_SERVER['REQUEST_METHOD'] === 'POST') && wp_verify_nonce($_POST['plugin_vulnerabilities'],'plugin_vulnerabilities') ) {
		if ( isset( $_POST['email-alerts'] ) ) {
			update_option( 'plugin_vulnerabilities_email_alerts', $_POST['email-alerts'] );
			if ($_POST['email-alerts']=="Enabled")
				wp_schedule_event( time(), 'hourly', 'plugin_vulnerabilities_hourly_cron' );
			else if ($_POST['email-alerts']=="Disabled")
				wp_clear_scheduled_hook( 'plugin_vulnerabilities_hourly_cron' );
		}
	}

	//Load vulnerabilities
	$plugin_vulnerabilities = array();
	foreach (range('a', 'z') as $char) {
		include_once('vulnerabilities/'.$char.'.php');
	}
	
	//Check if installed plugins have vulnerabilities
	$plugin_list = get_plugins();
	$plugin_list_paths = array_keys($plugin_list);
	$current = "";
	$old = "";
	foreach ($plugin_list_paths as &$value) {
		preg_match_all('/([a-z0-9\-]+)\//', $value, $plugin_path);
		if (isset($plugin_path[1][0])) {
			$plugin_path=$plugin_path[1][0];
		
			if (array_key_exists($plugin_path, $plugin_vulnerabilities)) {
				$plugin = get_plugin_data( WP_PLUGIN_DIR."/".$value, $markup = true, $translate = true );
				foreach ($plugin_vulnerabilities[$plugin_path] as &$vulnerability) {
					if ( version_compare( $plugin["Version"], $vulnerability["FirstVersion"], '>=') && version_compare( $plugin["Version"], $vulnerability["LastVersion"], '<=') ) {
						$current .= '<span class="plugin_vulnerabilities_plugin">'.$plugin["Name"].'</span>';
						$current .= '<span class="plugin_vulnerabilities_version">'.$vulnerability["FirstVersion"].'-'.$vulnerability["LastVersion"].'</span>';
						$current .= '<span class="plugin_vulnerabilities_vulnerability"><a href="'.$vulnerability["URL"].'" target="_blank">'.$vulnerability["TypeOfVulnerability"].'</a></span>';
						$current .= '<br>';
					}
					else {
						$old .= '<span class="plugin_vulnerabilities_plugin">'.$plugin["Name"].'</span>';
						$old .= '<span class="plugin_vulnerabilities_version">'.$vulnerability["FirstVersion"].'-'.$vulnerability["LastVersion"].'</span>';
						$old .= '<span class="plugin_vulnerabilities_vulnerability"><a href="'.$vulnerability["URL"].'" target="_blank">'.$vulnerability["TypeOfVulnerability"].'</a></span>';
						$old .= '<br>';
					}
				}
			}
		}
	}

	//Generate page
	echo '<div class="wrap">';
	echo '<h2>Plugin Vulnerabilities</h2>';
	if ( !empty($current)  ) {
		echo "<h3>".__('Installed plugins that have known vulnerabilities in the installed version:', 'plugin-vulnerabilities')."</h3>";
		echo "<p>";
		echo '<span class="plugin_vulnerabilities_plugin"><b>Plugin</b></span><span class="plugin_vulnerabilities_version"><b>Versions</b></span><span class="plugin_vulnerabilities_vulnerability"><b>Type of Vulnerability</b></span><br><br>';
		echo $current;
	}
	else 
		echo "<h3>".__('No installed plugins have known vulnerabilities in the installed versions.', 'plugin-vulnerabilities')."</h3>";
	echo "<br><br>";
	if ( !empty($old) ) {
		echo "<h3>".__('Installed plugins that have known vulnerabilities in other versions:', 'plugin-vulnerabilities')."</h3>";
		echo "<p>";
		echo '<span class="plugin_vulnerabilities_plugin"><b>Plugin</b></span><span class="plugin_vulnerabilities_version"><b>Versions</b></span><span class="plugin_vulnerabilities_vulnerability"><b>Type of Vulnerability</b></span><br><br>';
		echo $old;
		echo "</p>";
	}
	else 
		echo "<h3>".__('No installed plugins have known vulnerabilities in other versions.', 'plugin-vulnerabilities')."</h3>";

	echo '<br><br><br>If your website has been hacked we can <a href="https://www.whitefirdesign.com/services/hacked-wordpress-website-cleanup.html?pk_campaign=Plugin-Vulnerabilities">clean and secure the website for you</a>.';
	
	echo '<br><br><br><br><br><br><hr><form  action="plugins.php?page=plugin-vulnerabilities" method="post">';
	
	echo '<table class="form-table">';
	echo 'If you update plugins using our <a href="plugin-install.php?tab=plugin-information&plugin=automatic-plugin-updates&TB_iframe=true&width=600&height=550" class="thickbox">Automatic Plugin Updates plugin</a> or some other method outside of the Installed Plugins page you can enable email alerts so that you still be warned of vulnerabilities in the installed version of plugins:';
	echo '<tr valign="top">';
	echo '<th scope="row"><label for="email-alerts">'.__('Send Email Alerts For Vulnerabilities in Installed Versions of Plugins', 'automatic-plugin-updates' ).'</label></th>';
	echo '<td><fieldset>';
	echo '<select name="email-alerts"><option value="Disabled">';
	echo __('Disabled', 'automatic-plugin-updates' );
	echo '</option><option value="Enabled"';
	if ( get_option('plugin_vulnerabilities_email_alerts') && (get_option('plugin_vulnerabilities_email_alerts')=='Enabled') )
		echo 'selected';
	echo '>';
	echo __('Enabled', 'automatic-plugin-updates' );
	echo '</option></select>';
	echo '</fieldset></td>';
	echo '</tr>';
	echo '</table>';

	
	wp_nonce_field('plugin_vulnerabilities','plugin_vulnerabilities');
	echo '<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"  /></p>';
	echo '</form> ';
	
	echo '</div>';
}

//Handle activation
register_activation_hook( __FILE__, 'plugin_vulnerabilities_activation' );
function plugin_vulnerabilities_activation() {
	if ( get_option('plugin_vulnerabilities_email_alerts') && (get_option('plugin_vulnerabilities_email_alerts')=='Enabled') )
		wp_schedule_event( time(), 'hourly', 'plugin_vulnerabilities_hourly_cron' );
}


//Cron
add_action( 'plugin_vulnerabilities_hourly_cron', 'plugin_vulnerabilities_do_this_hourly' );

function plugin_vulnerabilities_do_this_hourly() {
	if ( ! function_exists( 'get_plugins' ) )
        require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    $plugin_folder = get_plugins( '/' . plugin_basename( dirname( __FILE__ ) ) );
    $plugin_file = basename( ( __FILE__ ) );
    $plugin_folder[$plugin_file]['Version'];
	if ( ( get_option('plugin_vulnerabilities_version') && version_compare( get_option('plugin_vulnerabilities_version'),$plugin_folder[$plugin_file]['Version'],'<') ) || (!get_option('plugin_vulnerabilities_version')) ) {
	
		//Load vulnerabilities
		$plugin_vulnerabilities = array();
		foreach (range('a', 'z') as $char) {
			include_once('vulnerabilities/'.$char.'.php');
		}
		
		//Load previously alerted vulnerabilities
		if (get_option('plugin_vulnerabilities_email_alerts_sent'))
			$email_alerts_sent = get_option('plugin_vulnerabilities_email_alerts_sent');
		else
			$email_alerts_sent = array();
		
		//Check if installed plugins have vulnerabilities
		$plugin_list = get_plugins();
		$plugin_list_paths = array_keys($plugin_list);
		$current = "";
		$old = "";
		foreach ($plugin_list_paths as &$value) {
			preg_match_all('/([a-z0-9\-]+)\//', $value, $plugin_path);
			if (isset($plugin_path[1][0])) {
				$plugin_path=$plugin_path[1][0];
			
				if (array_key_exists($plugin_path, $plugin_vulnerabilities)) {
					$plugin = get_plugin_data( WP_PLUGIN_DIR."/".$value, $markup = true, $translate = true );
					foreach ($plugin_vulnerabilities[$plugin_path] as &$vulnerability) {
						if ( version_compare( $plugin["Version"], $vulnerability["FirstVersion"], '>=') && version_compare( $plugin["Version"], $vulnerability["LastVersion"], '<=') ) {
							if ( (array_key_exists($plugin["Name"], $email_alerts_sent) && (!in_array($vulnerability["URL"], $email_alerts_sent[$plugin["Name"]]))) || !array_key_exists($plugin["Name"], $email_alerts_sent) ) {
								$name = $plugin["Name"];
								$version = $plugin["Version"];
								$vulnerabilty = $vulnerability["TypeOfVulnerability"];
								$vulnerabiltyURL = $vulnerability["URL"];
								
								$subject = "[".get_option( 'blogname' )."] Vulnerability in Installed Version of ".$name;
								$message = "WordPress site: ".get_option( 'siteurl' )."\n\nThe installed version of the ".$name." plugin, ".$version.", contains a ".$vulnerabilty." vulnerability. More details on the vulnerability can be found at ".$vulnerabiltyURL.".\n\n\n\nWarning sent from the Plugin Vulnerabilities plugin. If your website has been hacked we can help you to clean and secure the website: https://www.whitefirdesign.com/services/hacked-wordpress-website-cleanup.html.";
								wp_mail( get_option( 'admin_email' ), $subject, $message);
								
								if (!array_key_exists($plugin["Name"], $email_alerts_sent)) {
									$email_alerts_sent[$plugin["Name"]] = array($vulnerability["URL"]);
								}
								else
									array_push($email_alerts_sent[$plugin["Name"]], $vulnerability["URL"]);
								update_option('plugin_vulnerabilities_email_alerts_sent',$email_alerts_sent);
							}
						}
					}
				}
			}
		}
		update_option('plugin_vulnerabilities_version',$plugin_folder[$plugin_file]['Version']);
	}
}

register_deactivation_hook( __FILE__, 'plugin_vulnerabilities_deactivation' );
function plugin_vulnerabilities_deactivation() {
	wp_clear_scheduled_hook( 'plugin_vulnerabilities_hourly_cron' );
}
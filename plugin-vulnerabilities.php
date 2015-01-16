<?php
/*
Plugin Name: Plugin Vulnerabilities
Plugin URI: https://www.whitefirdesign.com/plugin-vulnerabilities
Description: Alerts when installed plugins contain known security vulnerabilities. Also lists vulnerabilities that exist in other versions of installed plugins.
Version: 1.0.8
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
	echo '</div>';
}
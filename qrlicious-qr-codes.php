<?php
/*
Plugin Name: QRlicious QR Codes
Plugin URI: http://pluginchief.com
Description: Adds a QR Code Meta Box to Pages, Posts and Post Types for easily previewing pages on mobile devices and provides an easy way to order Customized QR Codes from QRlicious.com.
Version: 1.0.01
Author: PluginChief, Visioniz, Jason Bahl, Brandon Camenisch
Author URI: http://visioniz.com/
License: GPLv2 or later

____   ____.__       .__              .__        
\   \ /   /|__| _____|__| ____   ____ |__|_______
 \   Y   / |  |/  ___/  |/  _ \ /    \|  \___   /
  \     /  |  |\___ \|  (  <_> )   |  \  |/    / 
   \___/   |__/____  >__|\____/|___|  /__/_____ \
                   \/               \/         \/

*/
	
/* ---------------------------------------------------------------------------- */
/* Set Up Plugin Constants
/* ---------------------------------------------------------------------------- */

	// NOTE: PLUGINCHIEFQRLICIOUS_QRCODES = Plugin Chief Mobile Site Builder
	define('PLUGINCHIEF_QRLICIOUS_QRCODES', plugin_dir_url(__FILE__));
	define('PLUGINCHIEF_QRLICIOUS_QRCODES_PATH', plugin_dir_path(__FILE__));
	$pluginchief_qrlicious_qrcodes = plugin_dir_url(__FILE__);
	global $pluginchief_qrlicious_qrcodes;
	$plchf_qrlicious_qrcodes_options = get_option('plugin_chief_qrlicious_qrcodes');

/* ---------------------------------------------------------------------------- */
/* Inlcude Plugin Files
/* ---------------------------------------------------------------------------- */
	
	// This includes all top-level files within the plugin sub-directories. 
	// Any deeper files that need to be included, need to be included from those files.
	foreach (glob(PLUGINCHIEF_QRLICIOUS_QRCODES_PATH . "/*/*.php") as $files){
		require_once $files;
	}
<?php
/*
Plugin Name: Rocket Blocker
Plugin URI: 
Description: Plugin for blocking Rocket caching notifications
Version: 1.0.0
Contributors: katrina-dierking
Author: Katrina Dierking
Author URI: https://hertimetocode.com
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: Block Rocket Plugin
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

include ( plugin_dir_path( __FILE__ ) . 'includes/rocket-blocker-text.php');

?>

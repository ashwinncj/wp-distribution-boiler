<?php
/**
Plugin Name: WP Distribution Boiler
Plugin URI: https://github.com/ashwinncj/wp-distribution-boiler
Description: Boiler template for auto update in the plugin.
Version: 1.0.0
Author: Ashwin Kumar C
Author URI: https://github.com/ashwinncj
Text Domain: wp-distribution-boiler
*/

// Including the updated file for auto updates push from the Github.

include_once( plugin_dir_path( __FILE__ ) . 'inc/updater.php' );

$updater = new Distribution_Updater( __FILE__ );

/**
 * Set this info in-case this is a private plugin.
 */
$updater->set_username( 'ashwinncj' );
$updater->set_repository( 'wp-distribution-boiler' );
$updater->initialize();

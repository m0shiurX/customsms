<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://moshiur.pro
 * @since             1.0.0
 * @package           Bossbd_Sms
 *
 * @wordpress-plugin
 * Plugin Name:       BOSSBD SMS
 * Plugin URI:        https://chromatic.network
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            m0shiur
 * Author URI:        https://moshiur.pro
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bossbd-sms
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BOSSBD_SMS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bossbd-sms-activator.php
 */
function activate_bossbd_sms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bossbd-sms-activator.php';
	Bossbd_Sms_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bossbd-sms-deactivator.php
 */
function deactivate_bossbd_sms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bossbd-sms-deactivator.php';
	Bossbd_Sms_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bossbd_sms' );
register_deactivation_hook( __FILE__, 'deactivate_bossbd_sms' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bossbd-sms.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bossbd_sms() {

	$plugin = new Bossbd_Sms();
	$plugin->run();

}
run_bossbd_sms();

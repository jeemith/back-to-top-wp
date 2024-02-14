<?php 
/**
 * Plugin Name:       Back To Top WP
 * Plugin URI:        https://wordpress.org/plugins/back-to-top-wp/
 * Description:       A "Back to Top" plugin is a web component that provides a convenient and user-friendly way for website visitors to return to the top of a webpage.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            dev
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       back-to-top-wp
 * Domain Path:       /languages
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'BACK_TO_TOP_WP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-back-to-top-wp-activator.php
 */
function btt_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-back-to-top-wp-activator.php';
	Back_To_Top_Wp_Activator::activate();
    
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-back-to-top-wp-deactivator.php
 */
function btt_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-back-to-top-wp-deactivator.php';
	Back_To_Top_Wp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'btt_activate' );
register_deactivation_hook( __FILE__, 'btt_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-back-to-top-wp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function btt_run_back_to_top_wp() {

	$plugin = new Back_To_Top_Wp();
	$plugin->run();

}
btt_run_back_to_top_wp();

?>
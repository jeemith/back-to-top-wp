<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://p2psolutions.com
 * @since      1.0.0
 *
 * @package    Back_To_Top_Wp
 * @subpackage Back_To_Top_Wp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Back_To_Top_Wp
 * @subpackage Back_To_Top_Wp/includes
 * @author     mith <mith.developer@gmail.com>
 */
class Back_To_Top_Wp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'back-to-top-wp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

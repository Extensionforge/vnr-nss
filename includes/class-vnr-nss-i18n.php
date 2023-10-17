<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://extensionforge.com/
 * @since      1.0.0
 *
 * @package    Vnr_Nss
 * @subpackage Vnr_Nss/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Vnr_Nss
 * @subpackage Vnr_Nss/includes
 * @author     Steve Kraft & Peter Mertzlin <direct@extensionforge.com>
 */
class Vnr_Nss_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'vnr-nss',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

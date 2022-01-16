<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       Block hundreds of spam domains, along with personal domains such as gmail.com in order to only receive work email domain submission. Must have Contact Form 7 activated to work.
 * @since      1.0.0
 *
 * @package    Cf7spamdomains
 * @subpackage Cf7spamdomains/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cf7spamdomains
 * @subpackage Cf7spamdomains/includes
 * @author     Key Medium <admin@keymedium.com>
 */
class Cf7spamdomains_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cf7spamdomains',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

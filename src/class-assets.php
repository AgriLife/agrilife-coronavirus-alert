<?php
/**
 * The file that provides the CSS asset for the plugin.
 *
 * @link       https://github.com/agrilife/agrilife-coronavirus-alert/blob/master/src/class-assets.php
 * @since      1.0.0
 * @package    agrilife-coronavirus-alert
 * @subpackage agrilife-coronavirus-alert/src
 */

namespace AgriLife_Coronavirus_Alert;

/**
 * Loads required assets
 *
 * @package agrilife-coronavirus-alert
 * @since 1.0.0
 */
class Assets {

	/**
	 * Initialize the class
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function __construct() {

		// Register global styles used in the plugin.
		add_action( 'wp_enqueue_scripts', array( $this, 'register_public_styles' ), 1 );

		// Enqueue global styles.
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_public_styles' ), 1 );

	}

	/**
	 * Registers all styles used within the plugin
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function register_public_styles() {

		wp_register_style(
			'agrilife-coronavirus-alert-styles',
			AGLFCOVID_DIR_URL . '/css/style.css',
			false,
			filemtime( AGLFCOVID_DIR_PATH . '/css/style.css' ),
			'screen'
		);

	}

	/**
	 * Enqueues styles used globally
	 *
	 * @since 1.0.0
	 * @global $wp_styles
	 * @return void
	 */
	public function enqueue_public_styles() {

		wp_enqueue_style( 'agrilife-coronavirus-alert-styles' );

	}

}

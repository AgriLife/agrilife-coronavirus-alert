<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across the
 * public-facing side of the site.
 *
 * @link       https://github.com/agrilife/agrilife-coronavirus-alert/blob/master/src/class-agrilife-coronavirus-alert.php
 * @since      1.0.0
 * @package    agrilife-coronavirus-alert
 * @subpackage agrilife-coronavirus-alert/src
 */

/**
 * The core plugin class
 *
 * @since 1.0.0
 * @return void
 */
class AgriLife_Coronavirus_Alert {

	/**
	 * File name
	 *
	 * @var file
	 */
	private static $file = __FILE__;

	/**
	 * Instance
	 *
	 * @var instance
	 */
	private static $instance;

	/**
	 * Initialize the class
	 *
	 * @since 1.0.0
	 * @return void
	 */
	private function __construct() {

		require_once AGLFCOVID_DIR_PATH . '/src/class-assets.php';

		// Get Genesis setup the way we want it.
		new \AgriLife_Coronavirus_Alert\Assets();

		add_action( 'get_header', array( $this, 'alert' ) );

	}

	/**
	 * Display alert message
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function alert() {

		$message = '<div class="ag-covid-notification">Click for a hub of Extension resources related to the current COVID-19 situation. <div class="agrilife-coronavirus-alert-button"><a href="https://agrilifeextension.tamu.edu/coronavirus/">COVID-19 Resources</a></div></div>';
		echo wp_kses_post( $message );

	}

	/**
	 * Autoloads any classes called within the theme
	 *
	 * @since 1.0.0
	 * @param string $classname The name of the class.
	 * @return void.
	 */
	public static function autoload( $classname ) {

		$filename = dirname( __FILE__ ) .
			DIRECTORY_SEPARATOR .
			str_replace( '_', DIRECTORY_SEPARATOR, $classname ) .
			'.php';

		if ( file_exists( $filename ) ) {
			require $filename;
		}

	}

	/**
	 * Return instance of class
	 *
	 * @since 1.0.0
	 * @return object.
	 */
	public static function get_instance() {

		return null === self::$instance ? new self() : self::$instance;

	}

}

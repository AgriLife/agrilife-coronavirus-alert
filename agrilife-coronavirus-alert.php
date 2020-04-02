<?php
/**
 * AgriLife Coronavirus Alert
 *
 * @package      agrilife-coronavirus-alert
 * @author       Zachary Watkins
 * @copyright    2020 Texas A&M AgriLife Communications
 * @license      GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:  AgriLife Coronavirus Alert
 * Plugin URI:   https://github.com/AgriLife/agrilife-coronavirus-alert
 * Description:  A plugin for AgriLife websites to display Coronavirus information on a broad scale.
 * Version:      1.0.0
 * Author:       Zachary Watkins
 * Author URI:   https://github.com/ZachWatkins
 * Author Email: zachary.watkins@ag.tamu.edu
 * Text Domain:  agrilife-coronavirus-alert
 * License:      GPL-2.0+
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
 */

/* Define some useful constants */
define( 'AGLFCOVID_DIRNAME', 'agrilife-coronavirus-alert' );
define( 'AGLFCOVID_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'AGLFCOVID_DIR_FILE', __FILE__ );
define( 'AGLFCOVID_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'AGLFCOVID_TEXTDOMAIN', 'agrilife-coronavirus-alert' );

/**
 * The core plugin class that is used to initialize the plugin
 */
require AGLFCOVID_DIR_PATH . 'src/class-agrilife-coronavirus-alert.php';
spl_autoload_register( 'AgriLife_Coronavirus_Alert::autoload' );
AgriLife_Coronavirus_Alert::get_instance();

<?php
/**
 * Plugin Name:       Scbdemo
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       scbdemo
 *
 * @package           create-block
 */

// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'No Access!' );

// Require once the Composer Autoload.
if ( file_exists( __DIR__ . '/lib/autoload.php' ) ) {
	require_once __DIR__ . '/lib/autoload.php';
}

/**
 * The code that runs during plugin activation.
 *
 * @return void
 */
function activate_scbdemo_plugin() {
	MRK_Scbdemo\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_scbdemo_plugin' );

/**
 * The code that runs during plugin deactivation.
 *
 * @return void
 */
function deactivate_scbdemo_plugin() {
	MRK_Scbdemo\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_scbdemo_plugin' );

/**
 * Initialize all the core classes of the plugin.
 */
if ( class_exists( 'MRK_Scbdemo\\Init' ) ) {
	MRK_Scbdemo\Init::register_services();
}

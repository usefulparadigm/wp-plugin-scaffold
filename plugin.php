<?php
/**
 * Plugin Name: PluginScaffold
 * Plugin URI:  PLUGIN SITE HERE
 * Description: PLUGIN DESCRIPTION HERE
 * Version:     0.1.0
 * Author:      Useful Paradigm
 * Author URI:  https://usefulparadigm.com
 * Text Domain: plugin-scaffold
 * Domain Path: /languages
 *
 * @package PluginScaffold
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Some global constants
define( 'PLUGIN_SCAFFOLD_VERSION', '0.1.0' );
define( 'PLUGIN_SCAFFOLD_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN_SCAFFOLD_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_SCAFFOLD_INC', PLUGIN_SCAFFOLD_PATH . 'includes/' );

// Include files
require_once PLUGIN_SCAFFOLD_INC . 'functions.php';
// require_once PLUGIN_SCAFFOLD_INC . 'settings.php';

// activation/deactivation
register_activation_hook( __FILE__, '\PluginScaffold\activate' );
register_deactivation_hook( __FILE__, '\PluginScaffold\deactivate' );

// Bootstrap
PluginScaffold\setup();
// PluginScaffold\Settings\setup();

// Require Composer autoloader if it exists.
if ( file_exists( PLUGIN_SCAFFOLD_PATH . '/vendor/autoload.php' ) ) {
	require_once PLUGIN_SCAFFOLD_PATH . 'vendor/autoload.php';
}
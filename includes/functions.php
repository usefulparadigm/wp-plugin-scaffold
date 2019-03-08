<?php
/**
 * Core plugin functionality.
 *
 * @package PluginScaffold
 */

namespace PluginScaffold;

use \WP_Error as WP_Error;

/**
 * Default setup routine
 *
 * @return void
 */

function setup() {
    add_action( 'init', __NAMESPACE__ . '\\init' );
}

/**
 * Initializes the plugin.
 *
 * @return void
 */
function init() {
    // do_action( 'tenup_scaffold_init' );
}

/**
 * Activate the plugin
 *
 * @return void
 */
function activate() {
	// First load the init scripts in case any rewrite functionality is being loaded
    // init();
    // flush_rewrite_rules();
}

/**
 * Deactivate the plugin
 *
 * Uninstall routines should be in uninstall.php
 *
 * @return void
 */
function deactivate() {
}



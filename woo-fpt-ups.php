<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.fpt-software.com/
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       woo fpt ups
 * Plugin URI:        https://www.fpt-software.com//woo-fpt-ups/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        https://www.fpt-software.com//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woo-fpt-ups
 * Domain Path:       /languages
 */

namespace wooFptUps;

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// We load Composer's autoload file
require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woo-fpt-ups-activator.php
 */
function activate_plugin_name() {
    utils\Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woo-fpt-ups-deactivator.php
 */
function deactivate_plugin_name() {
    utils\Deactivator::deactivate();
}

register_activation_hook(__FILE__, '\wooFptUps\activate_plugin_name');
register_deactivation_hook(__FILE__, '\wooFptUps\deactivate_plugin_name');

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since 1.0.0
 */
function run_plugin_name() {
    $plugin = new Main();
    $plugin->run();
}

run_plugin_name();

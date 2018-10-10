<?php

/*
  Plugin Name: fpt ups extends
  Plugin URI: https://www.fpt-software.com/
  Description: Extends plugins from mubannhadat.vn
  Version: 1.0
  Author: tvt.thin.it@gmail.com
  Author URI: https://www.fpt-software.com/
  Contributors: tvt.thin.it@gmail.com
  Text Domain: wp-fpt-ups
  License: GPLv2 or later
  License URI: https://www.fpt-software.com/
 */

namespace fptUps;

use fptUps\controller as fptUps;

require_once dirname(__FILE__) . "/packagelist/index.php";

if (!defined('ABSPATH'))
    return;
if (!is_main_site())
    return;

// Add Widget
add_action('widgets_init', function() {
//    require_once 'widgets/widgetsFooter.php';
//    register_widget('widgetsFooter');
});

/* * ******************************************************************
 *
 * Add menu
 *
 * ****************************************************************** */
add_action('admin_menu', __NAMESPACE__ . '\\menuAdmin');

function menuAdmin() {
    add_menu_page('fpt-ups-backend', 'Fpt ups:: marketing persion', 'manage_options', str_replace(' ', '-', 'fpt-ups-backend'), __NAMESPACE__ . '\\_fptUpsBackEnd');
//    add_submenu_page('fpt-ups-backend', 'Fpt ups:: marketing persion sub', 'Fpt ups:: marketing persion', 'manage_options', str_replace(' ', '-', 'fpt-ups-backend-sub'), '_fptUpsBackEndSub');
}

function _fptUpsBackEnd() {
    $controller = new controller\adminController();
    $controller->_display();
}

function _fptUpsBackEndSub() {
    require_once 'controllers/mbndControllerDevice.php';
    $controller = new mbndControllerDevice();
    $controller->_display();
}

/* * ******************************************************************
 *
 * Load CSS and JS
 *
 * ****************************************************************** */
add_action('admin_enqueue_scripts', __NAMESPACE__ . '\\_fptUpsLoadStyleAndJavascript');

function _fptUpsLoadStyleAndJavascript($hook) {
//    wp_enqueue_style('WPCC_css', WPCC_PLUGIN_DIR_PATH . '/css/admin.css');
//    wp_enqueue_script('WPCC_js', WPCC_PLUGIN_DIR_PATH . '/js/admin.js');
}

/* * ******************************************************************
 *
 * Plugin activation
 *
 * ****************************************************************** */
register_activation_hook(__FILE__, __NAMESPACE__ . '\\_fptUpsActivatePlugin');

function _fptUpsActivatePlugin() {
    // Any action on activation? Maybe later...
}

/* * ******************************************************************
 *
 * Plugin deactivation
 *
 * ****************************************************************** */
register_deactivation_hook(__FILE__, __NAMESPACE__ . '\\_fptUpsDeactivationPlugin');

function _fptUpsDeactivationPlugin() {
    // Any action on deactivation? Maybe later...
}

/* * ******************************************************************
 *
 * Plugin UNINSTALL
 *
 * ****************************************************************** */
register_uninstall_hook(__FILE__, __NAMESPACE__ . '\\_fptUpsUninstallPlugin');

function _fptUpsUninstallPlugin() {
    // Any action on UNINSTALL? Maybe later...
}

?>
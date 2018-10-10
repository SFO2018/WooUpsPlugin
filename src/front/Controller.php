<?php

namespace wooFptUps\front;

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @author     thintv@fsoft.com.vn
 */
class Controller
{

    private $plugin_name;
    private $version;

    public function __construct($plugin_name, $version) {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    public function enqueue_styles() {
        wp_enqueue_style($this->plugin_name, plugin_dir_url("") . '/woo-fpt-ups/assets/front/css/woo-fpt-ups-admin.css', array(), $this->version, 'all');
    }

    public function enqueue_scripts() {
        wp_enqueue_script($this->plugin_name, plugin_dir_url("") . '/woo-fpt-ups/assets/front/js/woo-fpt-ups-admin.js', array('jquery'), $this->version, false);
    }

}

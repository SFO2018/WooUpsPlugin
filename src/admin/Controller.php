<?php

namespace wooFptUps\admin;

/**
 * The admin-specific functionality of the plugin.
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

    public function admin() {
        add_menu_page('woo-fpt-ups', 'Woo ups', 'manage_options', str_replace(' ', '-', 'woo-fpt-ups'), [$this, 'display']);
        add_submenu_page('woo-fpt-ups', 'merchantCF', 'merchantCF', 'manage_options', str_replace(' ', '-', 'woo-fpt-ups-merchantcf'), [$this, 'displayMerchantCf']);
        add_submenu_page('woo-fpt-ups', 'UPS_PM', 'UPS_PM', 'manage_options', str_replace(' ', '-', 'woo-fpt-ups-ups-pm'), [$this, 'displayUpsPm']);
    }

    function displayUpsPm() {
        $controller = trim(strip_tags(empty($_REQUEST["controller"]) ? "" : $_REQUEST["controller"]));
        switch ($controller) {
            case "ajaxJson":
                ob_end_clean();
                $ajaxJson = new \wooFptUps\utils\ajaxJson();
                echo json_encode($ajaxJson->getData());
                exit;
            case "ups-pm-login":
                $upsPm = new \wooFptUps\utils\upsPm();
                echo $upsPm->upsPmLogin();
                return;
            default:
                return $this->_default();
        }
    }

    function displayMerchantCf() {
        $controller = trim(strip_tags(empty($_REQUEST["controller"]) ? "" : $_REQUEST["controller"]));
        switch ($controller) {
            case "ajaxJson":
                ob_end_clean();
                $ajaxJson = new \wooFptUps\utils\ajaxJson();
                echo json_encode($ajaxJson->getData());
                exit;
            case "merchant-cf-country":
                $merchantCF = new \wooFptUps\utils\merchantCF();
                echo $merchantCF->merchantCfCountry();
                return;
            case "merchant-cf-terms-conditions":
                $merchantCF = new \wooFptUps\utils\merchantCF();
                echo $merchantCF->merchantCfTermsConditions();
                return;
            case "merchant-cf-account":
                $merchantCF = new \wooFptUps\utils\merchantCF();
                echo $merchantCF->merchantCfAccount();
                return;
            case "merchant-cf-shipping-services":
                $merchantCF = new \wooFptUps\utils\merchantCF();
                echo $merchantCF->merchantCfShippingServices();
                return;
            case "merchant-cf-cod":
                $merchantCF = new \wooFptUps\utils\merchantCF();
                echo $merchantCF->merchantCfCod();
                return;

            case "merchant-cf-accessorials":
                $merchantCF = new \wooFptUps\utils\merchantCF();
                echo $merchantCF->merchantCfAccessorials();
                return;
            case "merchant-cf-package-dimensions":
                $merchantCF = new \wooFptUps\utils\merchantCF();
                echo $merchantCF->merchantCfPackageDimensions();
                return;
            default:
                return $this->_default();
        }
    }

    function _default() {
        $this->display();
    }

    function display() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        echo $smarty->fetch("admin/default.tpl");
        return;
    }

    public function enqueue_styles() {
        wp_enqueue_style($this->plugin_name, plugin_dir_url("") . '/woo-fpt-ups/assets/admin/css/woo-fpt-ups-admin.css', array(), $this->version, 'all');
    }

    public function enqueue_scripts() {
        wp_enqueue_script($this->plugin_name, plugin_dir_url("") . '/woo-fpt-ups/assets/admin/js/woo-fpt-ups-admin.js', array('jquery'), $this->version, false);
    }

}

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
        add_menu_page('woo-fpt-ups', 'Woo ups', 'manage_options', str_replace(' ', '-', 'woo-fpt-ups'), [$this, '_display']);
        add_submenu_page('woo-fpt-ups', 'Page sub', 'Page sub', 'manage_options', str_replace(' ', '-', 'woo-fpt-ups-sub'), [$this, '_displaySub']);
        add_submenu_page('woo-fpt-ups', 'Page sub2', 'Page sub2', 'manage_options', str_replace(' ', '-', 'woo-fpt-ups-sub2'), [$this, '_displaySub']);
    }

    function _displaySub() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        $smarty->assign('data', "this is test");
        echo $smarty->fetch("admin/sub.tpl");
        return;
    }

    function _display() {
        $controller = strip_tags(empty($_REQUEST["controller"]) ? "" : $_REQUEST["controller"]);
        switch ($controller) {
            case "ajaxJson":
                ob_end_clean();
                $ajaxJson = new \wooFptUps\utils\ajaxJson();
                echo json_encode($ajaxJson->getData());
                exit;
            case "Merchant_CF_Country":
                $Merchant_CF = new \wooFptUps\utils\Merchant_CF();
                echo $Merchant_CF->Merchant_CF_Country();
                return;
            case "Merchant_CF_TermsConditions":
                $Merchant_CF = new \wooFptUps\utils\Merchant_CF();
                echo $Merchant_CF->Merchant_CF_TermsConditions();
                return;
            case "Merchant_CF_Account":
                $Merchant_CF = new \wooFptUps\utils\Merchant_CF();
                echo $Merchant_CF->Merchant_CF_Account();
                return;
            case "Merchant_CF_ShippingServices":
                $Merchant_CF = new \wooFptUps\utils\Merchant_CF();
                echo $Merchant_CF->Merchant_CF_ShippingServices();
                return;
            case "Merchant_CF_COD":
                $Merchant_CF = new \wooFptUps\utils\Merchant_CF();
                echo $Merchant_CF->Merchant_CF_COD();
                return;

            case "Merchant_CF_Accessorials":
                $Merchant_CF = new \wooFptUps\utils\Merchant_CF();
                echo $Merchant_CF->Merchant_CF_Accessorials();
                return;
            case "Merchant_CF_PackageDimensions":
                $Merchant_CF = new \wooFptUps\utils\Merchant_CF();
                echo $Merchant_CF->Merchant_CF_PackageDimensions();
                return;
            default:
                return $this->_default();
        }
    }

    private function _default() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        $smarty->assign('data', "this is test");
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

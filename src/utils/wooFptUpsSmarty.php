<?php

namespace wooFptUps\utils;

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @author    thintv@fsoft.com.vn
 */
class wooFptUpsSmarty
{

    private static $smarty;

    static function getSmarty() {
        if (empty(self::$smarty)) {
            self::$smarty = new \Smarty();
            self::$smarty->debugging = true;
            self::$smarty->caching = true;
            self::$smarty->cache_lifetime = 120;
            self::$smarty->setTemplateDir(dirname(__FILE__) . '/../views')
                    ->setCompileDir(get_home_path() . '/tmp/smarty/templates_c')
                    ->setCacheDir(get_home_path() . '/tmp/smarty/cache');
            return self::$smarty;
        }
        return self::$smarty;
    }

}

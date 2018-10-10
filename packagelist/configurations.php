<?php

class configurations
{
    
}

class fptUpsSmarty
{

    private static $smarty;

    static function getSmarty() {
        if (empty(self::$smarty)) {
            self::$smarty = new Smarty();
            self::$smarty->debugging = true;
            self::$smarty->caching = true;
            self::$smarty->cache_lifetime = 120;
            self::$smarty->setTemplateDir(dirname(__FILE__) . '/../views')
                    ->setCompileDir('./tmp/smarty/templates_c')
                    ->setCacheDir('./tmp/smarty/cache');
            return self::$smarty;
        }
        return self::$smarty;
    }

}

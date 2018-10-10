<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wooFptUps\utils;

/**
 * Description of UPS_PM
 *
 * @author ThinTV
 */
class UPS_PM
{

    function UPS_PM_Login() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        $smarty->assign('data', "this is test");
        return $smarty->fetch("admin/UPS_PM/UPS_PM_Login.tpl");
    }

}

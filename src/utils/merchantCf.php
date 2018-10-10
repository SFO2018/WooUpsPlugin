<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wooFptUps\utils;

/**
 * Description of merchantCF
 *
 * @author ThinTV
 */
class merchantCf
{

    function merchantCfCountry() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        return $smarty->fetch("admin/merchant-cf/country.tpl");
    }

    function merchantCfTermsConditions() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        return $smarty->fetch("admin/merchant-cf/termsConditions.tpl");
    }

    function merchantCfAccount() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        return $smarty->fetch("admin/merchant-cf/account.tpl");
    }

    function merchantCfShippingServices() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        return $smarty->fetch("admin/merchant-cf/shippingServices.tpl");
    }

    function merchantCfCod() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        return $smarty->fetch("admin/merchant-cf/cod.tpl");
    }

    function merchantCfAccessorials() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        return $smarty->fetch("admin/merchant-cf/accessorials.tpl");
    }

    function merchantCfPackageDimensions() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        $smarty->assign('data', "this is test");
        return $smarty->fetch("admin/merchant-cf/packageDimensions.tpl");
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wooFptUps\utils;

/**
 * Description of Merchant_CF
 *
 * @author ThinTV
 */
class Merchant_CF
{

    function Merchant_CF_Country() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        $smarty->assign('data', "this is test");
        return $smarty->fetch("admin/Merchant_CF/Merchant_CF_Country.tpl");
    }

    function Merchant_CF_TermsConditions() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        $smarty->assign('data', "this is test");
        return $smarty->fetch("admin/Merchant_CF/Merchant_CF_TermsConditions.tpl");
    }

    function Merchant_CF_Account() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        $smarty->assign('data', "this is test");
        return $smarty->fetch("admin/Merchant_CF/Merchant_CF_Account.tpl");
    }

    function Merchant_CF_ShippingServices() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        $smarty->assign('data', "this is test");
        return $smarty->fetch("admin/Merchant_CF/Merchant_CF_ShippingServices.tpl");
    }

    function Merchant_CF_COD() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        $smarty->assign('data', "this is test");
        return $smarty->fetch("admin/Merchant_CF/Merchant_CF_COD.tpl");
    }

    function Merchant_CF_Accessorials() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        $smarty->assign('data', "this is test");
        return $smarty->fetch("admin/Merchant_CF/Merchant_CF_Accessorials.tpl");
    }

    function Merchant_CF_PackageDimensions() {
        $wooFptUpsSmarty = new \wooFptUps\utils\wooFptUpsSmarty();
        $smarty = $wooFptUpsSmarty->getSmarty();
        $smarty->assign('data', "this is test");
        return $smarty->fetch("admin/Merchant_CF/Merchant_CF_PackageDimensions.tpl");
    }

}

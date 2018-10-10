<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace wooFptUps\utils;

/**
 * Description of api
 *
 * @author ThinTV
 */
class ajaxJson
{

    function getData() {
        $method = strip_tags(empty($_REQUEST["method"]) ? "" : $_REQUEST["method"]);
        $objectData = new \stdClass();
        $objectData->code = "200";
        $objectData->data = ["aaaa", "bbb"];
        return $objectData;
    }

}

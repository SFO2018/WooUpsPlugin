<?php

namespace wooFptUps\utils\phpupsapi;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tracking
 *
 * @author ThinTV
 */
class Tracking
{

    function test() {
        $tracking = new Ups\Tracking($accessKey, $userId, $password);

        try {
            $shipment = $tracking->track('TRACKING NUMBER');

            foreach ($shipment->Package->Activity as $activity) {
                var_dump($activity);
            }
        } catch (Exception $e) {
            var_dump($e);
        }
    }

}

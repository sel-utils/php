<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft316.xml
 */
namespace sul\protocol\clientbound\minecraft316;

use utils\Packet;

class SetSlot extends Packet
{

    public const ID = 22;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $window;
    public $slot;
    public $item;

    public function __constructor() {}

    public function __constructor($window, $slot, \sul\protocol\minecraft316\types\Slot $item)
    {
        $this->window = $window;
        $this->slot = $slot;
        $this->item = $item;
    }

}


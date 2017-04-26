<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft109.xml
 */
namespace sul\protocol\serverbound\minecraft109;

use utils\Packet;

class CreativeInventoryAction extends Packet
{

    public const ID = 24;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $slot;
    public $clickedItem;

    public function __constructor() {}

    public function __constructor($slot, \sul\protocol\minecraft109\types\Slot $clickedItem)
    {
        $this->slot = $slot;
        $this->clickedItem = $clickedItem;
    }

}


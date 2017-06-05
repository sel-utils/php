<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft334.xml
 */
namespace sul\protocol\serverbound\minecraft334;

use utils\Packet;

class CreativeInventoryAction extends Packet
{

    public const ID = 27;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $slot;
    public $clickedItem;

    public function __constructor() {}

    public function __constructor($slot, \sul\protocol\minecraft334\types\Slot $clickedItem)
    {
        $this->slot = $slot;
        $this->clickedItem = $clickedItem;
    }

    public function getId()
    {
        return self::ID;
    }

    public function encode()
    {


    }

    public function decode()
    {}

}


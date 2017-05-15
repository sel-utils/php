<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket112.xml
 */
namespace sul\protocol\play\pocket112;

use utils\Packet;

class ContainerSetSlot extends Packet
{

    public const ID = 50;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $window;
    public $slot;
    public $hotbarSlot;
    public $item;
    public $unknown4;

    public function __constructor() {}

    public function __constructor($window, $slot, $hotbarSlot, \sul\protocol\pocket112\types\Slot $item, $unknown4)
    {
        $this->window = $window;
        $this->slot = $slot;
        $this->hotbarSlot = $hotbarSlot;
        $this->item = $item;
        $this->unknown4 = $unknown4;
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


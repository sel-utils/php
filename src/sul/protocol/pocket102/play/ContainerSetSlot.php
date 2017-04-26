<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket102.xml
 */
namespace sul\protocol\play\pocket102;

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
    public $?;

    public function __constructor() {}

    public function __constructor($window, $slot, $hotbarSlot, \sul\protocol\pocket102\types\Slot $item, $?)
    {
        $this->window = $window;
        $this->slot = $slot;
        $this->hotbarSlot = $hotbarSlot;
        $this->item = $item;
        $this->? = $?;
    }

}


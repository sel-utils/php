<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket111.xml
 */
namespace sul\protocol\play\pocket111;

use utils\Packet;

class ContainerSetContent extends Packet
{

    public const ID = 52;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $window;
    public $entityId;
    public $slots;
    public $hotbar;

    public function __constructor() {}

    public function __constructor($window, $entityId, $slots, $hotbar)
    {
        $this->window = $window;
        $this->entityId = $entityId;
        $this->slots = $slots;
        $this->hotbar = $hotbar;
    }

}


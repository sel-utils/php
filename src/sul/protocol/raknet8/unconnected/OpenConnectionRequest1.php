<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/raknet8.xml
 */
namespace sul\protocol\unconnected\raknet8;

use utils\Packet;

class OpenConnectionRequest1 extends Packet
{

    public const ID = 5;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $magic;
    public $protocol;
    public $mtu;

    public function __constructor() {}

    public function __constructor($magic, $protocol, $mtu)
    {
        $this->magic = $magic;
        $this->protocol = $protocol;
        $this->mtu = $mtu;
    }

}


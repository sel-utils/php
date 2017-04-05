<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/raknet8.xml
 */
namespace sul\protocol\control\raknet8;

use utils\Packet;

class Nack extends Packet
{

    public const ID = 160;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $packets;

    public function __constructor() {}

    public function __constructor($packets)
    {
        $this->packets = $packets;
    }

}


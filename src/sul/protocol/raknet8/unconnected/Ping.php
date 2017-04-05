<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/raknet8.xml
 */
namespace sul\protocol\unconnected\raknet8;

use utils\Packet;

class Ping extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $pingId;
    public $magic;

    public function __constructor() {}

    public function __constructor($pingId, $magic)
    {
        $this->pingId = $pingId;
        $this->magic = $magic;
    }

}


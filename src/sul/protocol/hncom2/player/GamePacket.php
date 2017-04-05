<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom2.xml
 */
namespace sul\protocol\player\hncom2;

use utils\Packet;

class GamePacket extends Packet
{

    public const ID = 29;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $hubId;
    public $packet;

    public function __constructor() {}

    public function __constructor($hubId, $packet)
    {
        $this->hubId = $hubId;
        $this->packet = $packet;
    }

}


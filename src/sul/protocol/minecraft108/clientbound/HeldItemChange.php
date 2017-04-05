<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft108.xml
 */
namespace sul\protocol\clientbound\minecraft108;

use utils\Packet;

class HeldItemChange extends Packet
{

    public const ID = 55;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $slot;

    public function __constructor() {}

    public function __constructor($slot)
    {
        $this->slot = $slot;
    }

}


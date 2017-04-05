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

class SetCooldown extends Packet
{

    public const ID = 23;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $item;
    public $cooldown;

    public function __constructor() {}

    public function __constructor($item, $cooldown)
    {
        $this->item = $item;
        $this->cooldown = $cooldown;
    }

}


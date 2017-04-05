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

class UpdateHealth extends Packet
{

    public const ID = 62;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $health;
    public $hunger;
    public $saturation;

    public function __constructor() {}

    public function __constructor($health, $hunger, $saturation)
    {
        $this->health = $health;
        $this->hunger = $hunger;
        $this->saturation = $saturation;
    }

}


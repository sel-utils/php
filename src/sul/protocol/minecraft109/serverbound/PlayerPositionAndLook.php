<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft109.xml
 */
namespace sul\protocol\serverbound\minecraft109;

use utils\Packet;

class PlayerPositionAndLook extends Packet
{

    public const ID = 13;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $position;
    public $yaw;
    public $pitch;
    public $onGround;

    public function __constructor() {}

    public function __constructor($position, $yaw, $pitch, $onGround)
    {
        $this->position = $position;
        $this->yaw = $yaw;
        $this->pitch = $pitch;
        $this->onGround = $onGround;
    }

}


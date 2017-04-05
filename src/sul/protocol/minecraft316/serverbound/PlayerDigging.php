<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft316.xml
 */
namespace sul\protocol\serverbound\minecraft316;

use utils\Packet;

class PlayerDigging extends Packet
{

    public const ID = 19;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // status
    public const START_DIGGING = 0;
    public const CANCEL_DIGGING = 1;
    public const FINISH_DIGGING = 2;
    public const DROP_ITEM_STACK = 3;
    public const DROP_ITEM = 4;
    public const SHOOT_ARROW = 5;
    public const FINISH_EATING = 5;
    public const SWAP_ITEM_IN_HAND = 6;

    public $status;
    public $position;
    public $face;

    public function __constructor() {}

    public function __constructor($status, $position, $face)
    {
        $this->status = $status;
        $this->position = $position;
        $this->face = $face;
    }

}


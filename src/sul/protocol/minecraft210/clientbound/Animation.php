<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft210.xml
 */
namespace sul\protocol\clientbound\minecraft210;

use utils\Packet;

class Animation extends Packet
{

    public const ID = 6;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // animation
    public const SWING_MAIN_ARM = 0;
    public const TAKE_DAMAGE = 1;
    public const LEAVE_BED = 2;
    public const SWING_OFFHAND = 3;
    public const CRITICAL_EFFECT = 4;
    public const MAGICAL_CRITICAL_EFFECT = 5;

    public $entityId;
    public $animation;

    public function __constructor() {}

    public function __constructor($entityId, $animation)
    {
        $this->entityId = $entityId;
        $this->animation = $animation;
    }

}


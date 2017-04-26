<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft107.xml
 */
namespace sul\protocol\clientbound\minecraft107;

use utils\Packet;

class Animation extends Packet
{

    public const ID = 6;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // animation
    public const SWING_ARM = 0;
    public const TAKE_DAMAGE = 1;
    public const LEAVE_BED = 2;
    public const EAT_FOOD = 3;
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


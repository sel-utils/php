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

class EntityAction extends Packet
{

    public const ID = 20;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // action
    public const START_SNEAKING = 0;
    public const STOP_SNEAKING = 1;
    public const LEAVE_BED = 2;
    public const START_SPRINTING = 3;
    public const STOP_SPRINTING = 4;
    public const START_HORSE_JUMP = 5;
    public const STOP_HORSE_JUMP = 6;
    public const OPEN_HORSE_INVENTORY = 7;
    public const START_ELYTRA_FLYING = 8;

    public $entityId;
    public $action;
    public $jumpBoost;

    public function __constructor() {}

    public function __constructor($entityId, $action, $jumpBoost)
    {
        $this->entityId = $entityId;
        $this->action = $action;
        $this->jumpBoost = $jumpBoost;
    }

}


<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class PlayerAction extends Packet
{

    public const ID = 37;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // action
    public const START_BREAK = 0;
    public const ABORT_BREAK = 1;
    public const STOP_BREAK = 2;
    public const RELEASE_ITEM = 5;
    public const STOP_SLEEPING = 6;
    public const RESPAWN = 7;
    public const JUMP = 8;
    public const START_SPRINT = 9;
    public const STOP_SPRINT = 10;
    public const START_SNEAK = 11;
    public const STOP_SNEAK = 12;
    public const START_GLIDING = 15;
    public const STOP_GLIDING = 16;

    public $entityId;
    public $action;
    public $position;
    public $face;

    public function __constructor() {}

    public function __constructor($entityId, $action, \sul\protocol\pocket105\types\BlockPosition $position, $face)
    {
        $this->entityId = $entityId;
        $this->action = $action;
        $this->position = $position;
        $this->face = $face;
    }

}


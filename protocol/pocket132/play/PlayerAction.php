<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket132.xml
 */
namespace sul\protocol\play\pocket132;

use utils\Packet;

class PlayerAction extends Packet
{

    public const ID = 36;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // action
    public const START_BREAK = 0;
    public const ABORT_BREAK = 1;
    public const STOP_BREAK = 2;
    public const GET_UPDATED_BLOCK = 3;
    public const DROP_ITEM = 4;
    public const STOP_SLEEPING = 5;
    public const RESPAWN = 6;
    public const JUMP = 7;
    public const START_SPRINT = 8;
    public const STOP_SPRINT = 9;
    public const START_SNEAK = 10;
    public const STOP_SNEAK = 11;
    public const START_GLIDING = 14;
    public const STOP_GLIDING = 15;
    public const BUILD_DENIED = 16;
    public const CONTINUE_BREAK = 17;
    public const SET_ENCHANTMENT_SEED = 18;

    public $entityId;
    public $action;
    public $position;
    public $face;

    public function __constructor() {}

    public function __constructor($entityId, $action, \sul\protocol\pocket132\types\BlockPosition $position, $face)
    {
        $this->entityId = $entityId;
        $this->action = $action;
        $this->position = $position;
        $this->face = $face;
    }

    public function getId()
    {
        return self::ID;
    }

    public function encode()
    {




    }

    public function decode()
    {}

}


<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft315.xml
 */
namespace sul\protocol\clientbound\minecraft315;

use utils\Packet;

class ChangeGameState extends Packet
{

    public const ID = 30;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // reason
    public const INVALID_BED = 0;
    public const END_RAINING = 1;
    public const BEGIN_RAINING = 2;
    public const CHANGE_GAMEMODE = 3;
    public const EXIT_END = 4;
    public const DEMO_MESSAGE = 5;
    public const ARROW_HITTING_PLAYER = 6;
    public const FADE_VALUE = 7;
    public const FADE_TIME = 8;
    public const PLAY_ELDER_GUARDIAN_MOB_APPEARANCE = 10;

    // value
    public const SURVIVAL = 0;
    public const CREATIVE = 1;
    public const ADVENTURE = 2;
    public const SPECTATOR = 3;
    public const RESPAWN_IMMEDIATELY = 0;
    public const RESPAWN_AFTER_CREDITS = 1;
    public const SHOW_DEMO_SCREEN = 0;
    public const TELL_MOVEMENT_CONTROLS = 101;
    public const TELL_JUMP_CONTROLS = 102;
    public const TELL_INVENTORY_CONTROLS = 103;
    public const BRIGHT = 0;
    public const DARK = 1;

    public $reason;
    public $value;

    public function __constructor() {}

    public function __constructor($reason, $value)
    {
        $this->reason = $reason;
        $this->value = $value;
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


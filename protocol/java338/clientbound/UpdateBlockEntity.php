<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java338.xml
 */
namespace sul\protocol\clientbound\java338;

use utils\Packet;

class UpdateBlockEntity extends Packet
{

    public const ID = 9;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // action
    public const MOB_SPAWNER_DATA = 1;
    public const COMMAND_BLOCK_TEXT = 2;
    public const BEACON_POWERS = 3;
    public const MOB_HEAD_DATA = 4;
    public const FLOWER_POT_FLOWER = 5;
    public const BANNER_DATA = 6;
    public const STRUCTURE_DATA = 7;
    public const END_GATEWAY_DESTINATION = 8;
    public const SIGN_TEXT = 9;
    public const SHULKER_BOX_DECLARATION = 10;
    public const BED_COLOR = 11;

    public $position;
    public $action;
    public $nbt;

    public function __constructor() {}

    public function __constructor($position, $action, $nbt)
    {
        $this->position = $position;
        $this->action = $action;
        $this->nbt = $nbt;
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


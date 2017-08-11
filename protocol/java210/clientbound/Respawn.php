<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java210.xml
 */
namespace sul\protocol\clientbound\java210;

use utils\Packet;

class Respawn extends Packet
{

    public const ID = 51;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // dimension
    public const NETHER = -1;
    public const OVERWORLD = 0;
    public const END = 1;

    // difficulty
    public const PEACEFUL = 0;
    public const EASY = 1;
    public const NORMAL = 2;
    public const HARD = 3;

    // gamemode
    public const SURVIVAL = 0;
    public const CREATIVE = 1;
    public const ADVENTURE = 2;
    public const SPECTATOR = 3;

    // level type
    public const INFINITY = "default";
    public const FLAT = "flat";
    public const AMPLIFIED = "amplified";
    public const LARGE_BIOMES = "largeBiomes";

    public $dimension;
    public $difficulty;
    public $gamemode;
    public $levelType;

    public function __constructor() {}

    public function __constructor($dimension, $difficulty, $gamemode, $levelType)
    {
        $this->dimension = $dimension;
        $this->difficulty = $difficulty;
        $this->gamemode = $gamemode;
        $this->levelType = $levelType;
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


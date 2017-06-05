<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft108.xml
 */
namespace sul\protocol\clientbound\minecraft108;

use utils\Packet;

class JoinGame extends Packet
{

    public const ID = 35;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // gamemode
    public const SURVIVAL = 0;
    public const CREATIVE = 1;
    public const ADVENTURE = 2;
    public const SPECTATOR = 3;

    // dimension
    public const NETHER = -1;
    public const OVERWORLD = 0;
    public const END = 1;

    // difficulty
    public const PEACEFUL = 0;
    public const EASY = 1;
    public const NORMAL = 2;
    public const HARD = 3;

    // level type
    public const INFINITY = "default";
    public const FLAT = "flat";
    public const AMPLIFIED = "amplified";
    public const LARGE_BIOMES = "largeBiomes";

    public $entityId;
    public $gamemode;
    public $dimension;
    public $difficulty;
    public $maxPlayers;
    public $levelType;
    public $reducedDebug;

    public function __constructor() {}

    public function __constructor($entityId, $gamemode, $dimension, $difficulty, $maxPlayers, $levelType, $reducedDebug)
    {
        $this->entityId = $entityId;
        $this->gamemode = $gamemode;
        $this->dimension = $dimension;
        $this->difficulty = $difficulty;
        $this->maxPlayers = $maxPlayers;
        $this->levelType = $levelType;
        $this->reducedDebug = $reducedDebug;
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


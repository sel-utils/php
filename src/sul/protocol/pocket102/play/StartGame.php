<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket102.xml
 */
namespace sul\protocol\play\pocket102;

use utils\Packet;

class StartGame extends Packet
{

    public const ID = 12;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // dimension
    public const OVERWORLD = 0;
    public const NETHER = 1;
    public const END = 2;

    // generator
    public const OLD = 0;
    public const INFINITE = 1;
    public const FLAT = 2;

    // world gamemode
    public const SURVIVAL = 0;
    public const CREATIVE = 1;

    // difficulty
    public const PEACEFUL = 0;
    public const EASY = 1;
    public const NORMAL = 2;
    public const HARD = 3;

    // edition
    public const CLASSIC = 0;
    public const EDUCATION = 1;

    public $entityId;
    public $runtimeId;
    public $position;
    public $yaw;
    public $pitch;
    public $seed;
    public $dimension = 0;
    public $generator = 1;
    public $worldGamemode;
    public $difficulty;
    public $spawnPosition;
    public $loadedInCreative;
    public $time;
    public $edition;
    public $rainLevel;
    public $lightningLevel;
    public $commandsEnabled;
    public $textureRequired;
    public $levelId;
    public $worldName;

    public function __constructor() {}

    public function __constructor($entityId, $runtimeId, $position, $yaw, $pitch, $seed, $dimension, $generator, $worldGamemode, $difficulty, $spawnPosition, $loadedInCreative, $time, $edition, $rainLevel, $lightningLevel, $commandsEnabled, $textureRequired, $levelId, $worldName)
    {
        $this->entityId = $entityId;
        $this->runtimeId = $runtimeId;
        $this->position = $position;
        $this->yaw = $yaw;
        $this->pitch = $pitch;
        $this->seed = $seed;
        $this->dimension = $dimension;
        $this->generator = $generator;
        $this->worldGamemode = $worldGamemode;
        $this->difficulty = $difficulty;
        $this->spawnPosition = $spawnPosition;
        $this->loadedInCreative = $loadedInCreative;
        $this->time = $time;
        $this->edition = $edition;
        $this->rainLevel = $rainLevel;
        $this->lightningLevel = $lightningLevel;
        $this->commandsEnabled = $commandsEnabled;
        $this->textureRequired = $textureRequired;
        $this->levelId = $levelId;
        $this->worldName = $worldName;
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


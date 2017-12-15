<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock150.xml
 */
namespace sul\protocol\play\bedrock150;

use utils\Packet;

class StartGame extends Packet
{

    public const ID = 11;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // gamemode
    public const SURVIVAL = 0;
    public const CREATIVE = 1;
    public const ADVENTURE = 2;

    // dimension
    public const OVERWORLD = 0;
    public const NETHER = 1;
    public const END = 2;

    // generator
    public const OLD = 0;
    public const INFINITE = 1;
    public const FLAT = 2;

    // difficulty
    public const PEACEFUL = 0;
    public const EASY = 1;
    public const NORMAL = 2;
    public const HARD = 3;

    // version
    public const VANILLA = 0;
    public const EDUCATION = 1;

    public $entityId;
    public $runtimeId;
    public $gamemode;
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
    public $version;
    public $rainLevel;
    public $lightningLevel;
    public $multiplayerGame = true;
    public $broadcastToLan;
    public $broadcastToXbl;
    public $commandsEnabled;
    public $textureRequired;
    public $gameRules;
    public $bonusChestEnabled;
    public $startWithMapEnabled;
    public $trustPlayersEnabled;
    public $permissionLevel;
    public $unknown27;
    public $levelId;
    public $worldName;
    public $premiumWorldTemplate;
    public $unknown31;
    public $worldTicks;
    public $unknown33;

    public function __constructor() {}

    public function __constructor($entityId, $runtimeId, $gamemode, $position, $yaw, $pitch, $seed, $dimension, $generator, $worldGamemode, $difficulty, $spawnPosition, $loadedInCreative, $time, $version, $rainLevel, $lightningLevel, $multiplayerGame, $broadcastToLan, $broadcastToXbl, $commandsEnabled, $textureRequired, $gameRules, $bonusChestEnabled, $startWithMapEnabled, $trustPlayersEnabled, $permissionLevel, $unknown27, $levelId, $worldName, $premiumWorldTemplate, $unknown31, $worldTicks, $unknown33)
    {
        $this->entityId = $entityId;
        $this->runtimeId = $runtimeId;
        $this->gamemode = $gamemode;
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
        $this->version = $version;
        $this->rainLevel = $rainLevel;
        $this->lightningLevel = $lightningLevel;
        $this->multiplayerGame = $multiplayerGame;
        $this->broadcastToLan = $broadcastToLan;
        $this->broadcastToXbl = $broadcastToXbl;
        $this->commandsEnabled = $commandsEnabled;
        $this->textureRequired = $textureRequired;
        $this->gameRules = $gameRules;
        $this->bonusChestEnabled = $bonusChestEnabled;
        $this->startWithMapEnabled = $startWithMapEnabled;
        $this->trustPlayersEnabled = $trustPlayersEnabled;
        $this->permissionLevel = $permissionLevel;
        $this->unknown27 = $unknown27;
        $this->levelId = $levelId;
        $this->worldName = $worldName;
        $this->premiumWorldTemplate = $premiumWorldTemplate;
        $this->unknown31 = $unknown31;
        $this->worldTicks = $worldTicks;
        $this->unknown33 = $unknown33;
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


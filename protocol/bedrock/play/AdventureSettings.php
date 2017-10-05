<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock137.xml
 */
namespace sul\protocol\play\bedrock;

use utils\Packet;

class AdventureSettings extends Packet
{

    public const ID = 55;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    // flags
    public const IMMUTABLE_WORLD = 1;
    public const PVP_DISABLED = 2;
    public const PVM_DISABLED = 4;
    public const MVP_DISBALED = 8;
    public const EVP_DISABLED = 16;
    public const AUTO_JUMP = 32;
    public const ALLOW_FLIGHT = 64;
    public const NO_CLIP = 128;
    public const FLYING = 512;
    public const MUTED = 1024;

    // permission level
    public const LEVEL_USER = 0;
    public const LEVEL_OPERATOR = 1;
    public const LEVEL_HOST = 2;
    public const LEVEL_AUTOMATION = 3;
    public const LEVEL_ADMIN = 4;

    // abilities
    public const BUILD_AND_MINE = 1;
    public const DOORS_AND_SWITCHES = 2;
    public const OPEN_CONTAINERS = 4;
    public const ATTACK_PLAYERS = 8;
    public const ATTACK_MOBS = 16;
    public const OP = 32;
    public const TELEPORT = 64;

    // player rank
    public const VISITOR = 0;
    public const MEMBER = 1;
    public const OPERATOR = 2;
    public const CUSTOM = 3;

    public $flags;
    public $permissionLevel;
    public $abilities;
    public $playerRank;
    public $customPermissions;
    public $entityId;

    public function __constructor() {}

    public function __constructor($flags, $permissionLevel, $abilities, $playerRank, $customPermissions, $entityId)
    {
        $this->flags = $flags;
        $this->permissionLevel = $permissionLevel;
        $this->abilities = $abilities;
        $this->playerRank = $playerRank;
        $this->customPermissions = $customPermissions;
        $this->entityId = $entityId;
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


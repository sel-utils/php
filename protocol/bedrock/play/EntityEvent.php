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

class EntityEvent extends Packet
{

    public const ID = 27;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    // event id
    public const HURT_ANIMATION = 2;
    public const DEATH_ANIMATION = 3;
    public const TAME_FAIL = 6;
    public const TAME_SUCCESS = 7;
    public const SHAKE_WET = 8;
    public const USE_ITEM = 9;
    public const EAT_GRASS_ANIMATION = 10;
    public const FISH_HOOK_BUBBLES = 11;
    public const FISH_HOOK_POSITION = 12;
    public const FISH_HOOK_HOOK = 13;
    public const FISH_HOOK_TEASE = 14;
    public const SQUID_INK_CLOUD = 15;
    public const AMBIENT_SOUND = 16;
    public const RESPAWN = 17;
    public const UNLEASH = 63;

    public $entityId;
    public $eventId;
    public $unknown2;

    public function __constructor() {}

    public function __constructor($entityId, $eventId, $unknown2)
    {
        $this->entityId = $entityId;
        $this->eventId = $eventId;
        $this->unknown2 = $unknown2;
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


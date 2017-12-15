<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock160.xml
 */
namespace sul\protocol\play\bedrock;

use utils\Packet;

class MobEffect extends Packet
{

    public const ID = 28;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // event id
    public const ADD = 1;
    public const MODIFY = 2;
    public const REMOVE = 3;

    public $entityId;
    public $eventId;
    public $effect;
    public $amplifier;
    public $particles;
    public $duration;

    public function __constructor() {}

    public function __constructor($entityId, $eventId, $effect, $amplifier, $particles, $duration)
    {
        $this->entityId = $entityId;
        $this->eventId = $eventId;
        $this->effect = $effect;
        $this->amplifier = $amplifier;
        $this->particles = $particles;
        $this->duration = $duration;
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


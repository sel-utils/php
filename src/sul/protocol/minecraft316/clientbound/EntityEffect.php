<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft316.xml
 */
namespace sul\protocol\clientbound\minecraft316;

use utils\Packet;

class EntityEffect extends Packet
{

    public const ID = 75;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // flags
    public const AMBIENT = 1;
    public const SHOW_PARTICLES = 2;

    public $entityId;
    public $effectId;
    public $amplifier;
    public $duration;
    public $flags;

    public function __constructor() {}

    public function __constructor($entityId, $effectId, $amplifier, $duration, $flags)
    {
        $this->entityId = $entityId;
        $this->effectId = $effectId;
        $this->amplifier = $amplifier;
        $this->duration = $duration;
        $this->flags = $flags;
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


<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft338.xml
 */
namespace sul\protocol\clientbound\minecraft;

use utils\Packet;

class PlayerAbilities extends Packet
{

    public const ID = 44;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // flags
    public const INVULNERABLE = 1;
    public const FLYING = 2;
    public const ALLOW_FLYING = 4;
    public const CREATIVE_MODE = 8;

    public $flags;
    public $flyingSpeed;
    public $fovModifier;

    public function __constructor() {}

    public function __constructor($flags, $flyingSpeed, $fovModifier)
    {
        $this->flags = $flags;
        $this->flyingSpeed = $flyingSpeed;
        $this->fovModifier = $fovModifier;
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


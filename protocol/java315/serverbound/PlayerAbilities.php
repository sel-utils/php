<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java315.xml
 */
namespace sul\protocol\serverbound\java315;

use utils\Packet;

class PlayerAbilities extends Packet
{

    public const ID = 18;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // flags
    public const CREATIVE_MODE = 1;
    public const FLYING = 2;
    public const ALLOW_FLYING = 4;
    public const INVINCIBLE = 8;

    public $flags;
    public $flyingSpeed;
    public $walkingSpeed;

    public function __constructor() {}

    public function __constructor($flags, $flyingSpeed, $walkingSpeed)
    {
        $this->flags = $flags;
        $this->flyingSpeed = $flyingSpeed;
        $this->walkingSpeed = $walkingSpeed;
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


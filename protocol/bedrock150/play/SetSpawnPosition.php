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

class SetSpawnPosition extends Packet
{

    public const ID = 43;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // type
    public const PLAYER_SPAWN = 0;
    public const WORLD_SPAWN = 1;

    public $type;
    public $position;
    public $forced;

    public function __constructor() {}

    public function __constructor($type, \sul\protocol\bedrock150\types\BlockPosition $position, $forced)
    {
        $this->type = $type;
        $this->position = $position;
        $this->forced = $forced;
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


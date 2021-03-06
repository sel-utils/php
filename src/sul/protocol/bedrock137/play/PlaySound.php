<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock137.xml
 */
namespace sul\protocol\play\bedrock137;

use utils\Packet;

class PlaySound extends Packet
{

    public const ID = 86;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $name;
    public $position;
    public $volume;
    public $pitch;

    public function __constructor() {}

    public function __constructor($name, \sul\protocol\bedrock137\types\BlockPosition $position, $volume, $pitch)
    {
        $this->name = $name;
        $this->position = $position;
        $this->volume = $volume;
        $this->pitch = $pitch;
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


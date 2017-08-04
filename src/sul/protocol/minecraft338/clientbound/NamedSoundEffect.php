<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft338.xml
 */
namespace sul\protocol\clientbound\minecraft338;

use utils\Packet;

class NamedSoundEffect extends Packet
{

    public const ID = 25;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $name;
    public $category;
    public $position;
    public $volume;
    public $pitch;

    public function __constructor() {}

    public function __constructor($name, $category, $position, $volume, $pitch)
    {
        $this->name = $name;
        $this->category = $category;
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


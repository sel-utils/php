<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom2.xml
 */
namespace sul\protocol\world\hncom;

use utils\Packet;

class RequestCreation extends Packet
{

    public const ID = 35;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $name;
    public $dimension;
    public $generator;
    public $difficulty;
    public $gamemode;
    public $seed;
    public $parent = -1;

    public function __constructor() {}

    public function __constructor($name, $dimension, $generator, $difficulty, $gamemode, $seed, $parent)
    {
        $this->name = $name;
        $this->dimension = $dimension;
        $this->generator = $generator;
        $this->difficulty = $difficulty;
        $this->gamemode = $gamemode;
        $this->seed = $seed;
        $this->parent = $parent;
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


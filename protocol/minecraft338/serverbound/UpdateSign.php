<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft338.xml
 */
namespace sul\protocol\serverbound\minecraft338;

use utils\Packet;

class UpdateSign extends Packet
{

    public const ID = 28;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $position;
    public $lines;

    public function __constructor() {}

    public function __constructor($position, $lines)
    {
        $this->position = $position;
        $this->lines = $lines;
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


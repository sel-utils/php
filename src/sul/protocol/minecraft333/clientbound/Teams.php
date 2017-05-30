<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft333.xml
 */
namespace sul\protocol\clientbound\minecraft333;

use utils\Packet;

class Teams extends Packet
{

    public const ID = 67;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $name;
    public $mode;

    public function __constructor() {}

    public function __constructor($name, $mode)
    {
        $this->name = $name;
        $this->mode = $mode;
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


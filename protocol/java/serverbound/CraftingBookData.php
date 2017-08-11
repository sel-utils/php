<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java338.xml
 */
namespace sul\protocol\serverbound\java;

use utils\Packet;

class CraftingBookData extends Packet
{

    public const ID = 23;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $type;

    public function __constructor() {}

    public function __constructor($type)
    {
        $this->type = $type;
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


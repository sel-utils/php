<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft338.xml
 */
namespace sul\protocol\serverbound\minecraft;

use utils\Packet;

class ResourcePackStatus extends Packet
{

    public const ID = 24;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // result
    public const LOADED = 0;
    public const DECLINED = 1;
    public const FAILED = 2;
    public const ACCEPTED = 3;

    public $result;

    public function __constructor() {}

    public function __constructor($result)
    {
        $this->result = $result;
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


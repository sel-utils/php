<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft334.xml
 */
namespace sul\protocol\status\minecraft334;

use utils\Packet;

class Latency extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $id;

    public function __constructor() {}

    public function __constructor($id)
    {
        $this->id = $id;
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


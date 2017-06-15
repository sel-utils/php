<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft109.xml
 */
namespace sul\protocol\clientbound\minecraft109;

use utils\Packet;

class UpdateSign extends Packet
{

    public const ID = 70;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

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

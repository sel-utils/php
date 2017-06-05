<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/raknet8.xml
 */
namespace sul\protocol\control\raknet;

use utils\Packet;

class Encapsulated extends Packet
{

    public const ID = 132;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $count;
    public $encapsulation;

    public function __constructor() {}

    public function __constructor($count, \sul\protocol\raknet\types\Encapsulation $encapsulation)
    {
        $this->count = $count;
        $this->encapsulation = $encapsulation;
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

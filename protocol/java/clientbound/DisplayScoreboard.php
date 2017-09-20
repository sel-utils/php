<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java340.xml
 */
namespace sul\protocol\clientbound\java;

use utils\Packet;

class DisplayScoreboard extends Packet
{

    public const ID = 59;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // position
    public const LIST = 0;
    public const SIDEBAR = 1;
    public const BELOW_NAME = 2;

    public $position;
    public $scoreName;

    public function __constructor() {}

    public function __constructor($position, $scoreName)
    {
        $this->position = $position;
        $this->scoreName = $scoreName;
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


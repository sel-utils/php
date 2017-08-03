<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket130.xml
 */
namespace sul\protocol\play\pocket130;

use utils\Packet;

class Respawn extends Packet
{

    public const ID = 45;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $position;

    public function __constructor() {}

    public function __constructor($position)
    {
        $this->position = $position;
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


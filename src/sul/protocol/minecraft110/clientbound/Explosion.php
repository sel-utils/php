<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft110.xml
 */
namespace sul\protocol\clientbound\minecraft110;

use utils\Packet;

class Explosion extends Packet
{

    public const ID = 28;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $position;
    public $radius;
    public $records;
    public $motion;

    public function __constructor() {}

    public function __constructor($position, $radius, \sul\protocol\minecraft110\types\ExplosionRecords $records, $motion)
    {
        $this->position = $position;
        $this->radius = $radius;
        $this->records = $records;
        $this->motion = $motion;
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


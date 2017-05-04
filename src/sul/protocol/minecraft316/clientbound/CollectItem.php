<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft316.xml
 */
namespace sul\protocol\clientbound\minecraft316;

use utils\Packet;

class CollectItem extends Packet
{

    public const ID = 72;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $collected;
    public $collector;
    public $count;

    public function __constructor() {}

    public function __constructor($collected, $collector, $count)
    {
        $this->collected = $collected;
        $this->collector = $collector;
        $this->count = $count;
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


<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket100.xml
 */
namespace sul\protocol\play\pocket100;

use utils\Packet;

class RequestChunkRadius extends Packet
{

    public const ID = 68;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $radius;

    public function __constructor() {}

    public function __constructor($radius)
    {
        $this->radius = $radius;
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


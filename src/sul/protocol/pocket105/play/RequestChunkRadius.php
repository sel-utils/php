<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class RequestChunkRadius extends Packet
{

    public const ID = 69;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $radius;

    public function __constructor() {}

    public function __constructor($radius)
    {
        $this->radius = $radius;
    }

}


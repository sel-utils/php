<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket111.xml
 */
namespace sul\protocol\play\pocket111;

use utils\Packet;

class RiderJump extends Packet
{

    public const ID = 20;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $rider;

    public function __constructor() {}

    public function __constructor($rider)
    {
        $this->rider = $rider;
    }

}


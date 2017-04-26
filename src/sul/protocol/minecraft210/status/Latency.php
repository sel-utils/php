<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft210.xml
 */
namespace sul\protocol\status\minecraft210;

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

}


<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft107.xml
 */
namespace sul\protocol\serverbound\minecraft107;

use utils\Packet;

class Animation extends Packet
{

    public const ID = 26;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // hand
    public const MAIN_HAND = 0;
    public const OFF_HAND = 1;

    public $hand;

    public function __constructor() {}

    public function __constructor($hand)
    {
        $this->hand = $hand;
    }

}


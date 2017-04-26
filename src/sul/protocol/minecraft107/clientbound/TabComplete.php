<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft107.xml
 */
namespace sul\protocol\clientbound\minecraft107;

use utils\Packet;

class TabComplete extends Packet
{

    public const ID = 14;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $matches;

    public function __constructor() {}

    public function __constructor($matches)
    {
        $this->matches = $matches;
    }

}


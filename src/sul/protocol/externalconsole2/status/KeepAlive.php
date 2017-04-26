<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/externalconsole2.xml
 */
namespace sul\protocol\status\externalconsole2;

use utils\Packet;

class KeepAlive extends Packet
{

    public const ID = 0;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $count;

    public function __constructor() {}

    public function __constructor($count)
    {
        $this->count = $count;
    }

}

